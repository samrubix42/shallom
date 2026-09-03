<?php

use App\Models\OurRangeCategory;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Str;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts::admin')] #[Title('Range Categories | Admin')] class extends Component
{
    use WithPagination;

    #[Url(history: true)]
    public string $search = '';

    public ?int $editingCategoryId = null;

    public string $name = '';

    public string $slug = '';

    public bool $is_active = true;

    public ?int $deletingCategoryId = null;

    public string $deletingCategoryName = '';

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function openCreateModal(): void
    {
        $this->resetValidation();
        $this->resetFormFields();
        $this->editingCategoryId = null;

        $this->dispatch('open-modal', mode: 'form', title: 'Add Range Category');
    }

    public function editCategory(int $id): void
    {
        $this->resetValidation();
        $category = OurRangeCategory::findOrFail($id);

        $this->editingCategoryId = $category->id;
        $this->name = $category->name;
        $this->slug = $category->slug;
        $this->is_active = (bool) $category->is_active;

        $this->dispatch('open-modal', mode: 'form', title: 'Edit Range Category');
    }

    public function confirmDelete(int $id): void
    {
        $category = OurRangeCategory::withCount('ourRanges')->findOrFail($id);
        $this->deletingCategoryId = $category->id;
        $this->deletingCategoryName = $category->name;

        $this->dispatch('open-modal', mode: 'delete', title: 'Delete Category');
    }

    public function save(): void
    {
        $rules = [
            'name' => 'required|string|max:255',
            'slug' => 'nullable|string|max:255|unique:our_range_categories,slug,'.$this->editingCategoryId,
            'is_active' => 'required|boolean',
        ];

        $this->validate($rules);

        $generatedSlug = ! empty($this->slug) ? Str::slug($this->slug) : Str::slug($this->name);

        if ($this->editingCategoryId) {
            $category = OurRangeCategory::findOrFail($this->editingCategoryId);
            $category->update([
                'name' => $this->name,
                'slug' => $generatedSlug,
                'is_active' => $this->is_active,
            ]);
            $this->dispatch('toast-show', message: 'Category updated successfully!', type: 'success');
        } else {
            OurRangeCategory::create([
                'name' => $this->name,
                'slug' => $generatedSlug,
                'is_active' => $this->is_active,
            ]);
            $this->dispatch('toast-show', message: 'Category created successfully!', type: 'success');
        }

        $this->resetFormFields();
        $this->dispatch('close-modal');
    }

    public function deleteCategory(): void
    {
        if ($this->deletingCategoryId) {
            $category = OurRangeCategory::find($this->deletingCategoryId);
            if ($category) {
                $category->delete();
                $this->dispatch('toast-show', message: 'Category deleted successfully!', type: 'info');
            }
        }

        $this->deletingCategoryId = null;
        $this->deletingCategoryName = '';
        $this->dispatch('close-modal');
    }

    public function toggleActive(int $id): void
    {
        $category = OurRangeCategory::findOrFail($id);
        $category->is_active = ! $category->is_active;
        $category->save();

        $statusStr = $category->is_active ? 'activated' : 'deactivated';
        $this->dispatch('toast-show', message: "Category {$statusStr}!", type: 'info');
    }

    private function resetFormFields(): void
    {
        $this->editingCategoryId = null;
        $this->name = '';
        $this->slug = '';
        $this->is_active = true;
    }

    #[Computed]
    public function categories(): LengthAwarePaginator
    {
        return OurRangeCategory::query()
            ->withCount('ourRanges')
            ->when($this->search, function ($query) {
                $query->where('name', 'like', '%'.$this->search.'%')
                    ->orWhere('slug', 'like', '%'.$this->search.'%');
            })
            ->orderBy('id', 'asc')
            ->paginate(10);
    }
};
