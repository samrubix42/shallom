<?php

use App\Models\Testimonial;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts::admin')] #[Title('Testimonials | Admin')] class extends Component
{
    use WithPagination;

    public ?int $editingTestimonialId = null;

    public string $client_name = '';

    public string $company = '';

    public string $designation = '';

    public string $content = '';

    public int $rating = 5;

    public int $display_order = 0;

    public bool $is_active = true;

    public ?int $deletingTestimonialId = null;

    public string $deletingClientName = '';

    public function openCreateModal(): void
    {
        $this->resetValidation();
        $this->resetFormFields();
        $this->editingTestimonialId = null;

        $maxOrder = Testimonial::max('display_order') ?? 0;
        $this->display_order = $maxOrder + 1;

        $this->dispatch('open-modal', mode: 'form', title: 'Add Testimonial');
    }

    public function editTestimonial(int $id): void
    {
        $this->resetValidation();
        $testimonial = Testimonial::findOrFail($id);

        $this->editingTestimonialId = $testimonial->id;
        $this->client_name = $testimonial->client_name;
        $this->company = $testimonial->company;
        $this->designation = $testimonial->designation ?? '';
        $this->content = $testimonial->content;
        $this->rating = $testimonial->rating;
        $this->display_order = $testimonial->display_order;
        $this->is_active = (bool) $testimonial->is_active;

        $this->dispatch('open-modal', mode: 'form', title: 'Edit Testimonial');
    }

    public function confirmDelete(int $id): void
    {
        $testimonial = Testimonial::findOrFail($id);
        $this->deletingTestimonialId = $testimonial->id;
        $this->deletingClientName = $testimonial->client_name;

        $this->dispatch('open-modal', mode: 'delete', title: 'Delete Testimonial');
    }

    public function save(): void
    {
        $this->validate([
            'client_name' => 'required|string|max:255',
            'company' => 'required|string|max:255',
            'designation' => 'nullable|string|max:255',
            'content' => 'required|string|max:1000',
            'rating' => 'required|integer|min:1|max:5',
            'display_order' => 'required|integer|min:0',
            'is_active' => 'required|boolean',
        ]);

        if ($this->editingTestimonialId) {
            $testimonial = Testimonial::findOrFail($this->editingTestimonialId);
            $testimonial->update([
                'client_name' => $this->client_name,
                'company' => $this->company,
                'designation' => $this->designation ?: null,
                'content' => $this->content,
                'rating' => $this->rating,
                'display_order' => $this->display_order,
                'is_active' => $this->is_active,
            ]);
            $this->dispatch('toast-show', message: 'Testimonial updated successfully!', type: 'success');
        } else {
            Testimonial::create([
                'client_name' => $this->client_name,
                'company' => $this->company,
                'designation' => $this->designation ?: null,
                'content' => $this->content,
                'rating' => $this->rating,
                'display_order' => $this->display_order,
                'is_active' => $this->is_active,
            ]);
            $this->dispatch('toast-show', message: 'Testimonial created successfully!', type: 'success');
        }

        $this->resetFormFields();
        $this->dispatch('close-modal');
    }

    public function deleteTestimonial(): void
    {
        if ($this->deletingTestimonialId) {
            $testimonial = Testimonial::find($this->deletingTestimonialId);
            if ($testimonial) {
                $testimonial->delete();
            }
            $this->dispatch('toast-show', message: 'Testimonial deleted successfully!', type: 'info');
        }

        $this->deletingTestimonialId = null;
        $this->deletingClientName = '';
        $this->dispatch('close-modal');
    }

    public function toggleActive(int $id): void
    {
        $testimonial = Testimonial::findOrFail($id);
        $testimonial->is_active = ! $testimonial->is_active;
        $testimonial->save();

        $statusStr = $testimonial->is_active ? 'activated' : 'deactivated';
        $this->dispatch('toast-show', message: "Testimonial {$statusStr}!", type: 'info');
    }

    private function resetFormFields(): void
    {
        $this->editingTestimonialId = null;
        $this->client_name = '';
        $this->company = '';
        $this->designation = '';
        $this->content = '';
        $this->rating = 5;
        $this->display_order = 0;
        $this->is_active = true;
    }

    #[Computed]
    public function testimonials(): LengthAwarePaginator
    {
        return Testimonial::query()
            ->orderBy('display_order', 'asc')
            ->orderBy('id', 'desc')
            ->paginate(10);
    }
};