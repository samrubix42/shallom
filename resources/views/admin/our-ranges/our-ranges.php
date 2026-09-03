<?php

use App\Models\OurRange;
use App\Models\OurRangeCategory;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

new #[Layout('layouts::admin')] #[Title('Our Ranges | Admin')] class extends Component
{
    use WithFileUploads, WithPagination;

    #[Url(history: true)]
    public string $search = '';

    #[Url(history: true)]
    public ?string $category_filter = null;

    public ?int $editingRangeId = null;

    public ?int $our_range_category_id = null;

    public string $title = '';

    public string $price = '';

    public string $price_unit = 'sq ft';

    public string $moq = '1 sq ft';

    public string $description = '';

    public array $specs = [];

    public array $existingImages = [];

    public array $galleryFiles = [];

    public int $primaryIndex = 0;

    public $pdfFile = null;

    public ?string $existingPdf = null;

    public bool $is_active = true;

    public ?int $deletingRangeId = null;

    public string $deletingRangeTitle = '';

    public function updatingSearch(): void
    {
        $this->resetPage();
    }

    public function updatingCategoryFilter(): void
    {
        $this->resetPage();
    }

    public function addSpecRow(): void
    {
        $this->specs[] = ['key' => '', 'value' => ''];
    }

    public function removeSpecRow(int $index): void
    {
        if (isset($this->specs[$index])) {
            unset($this->specs[$index]);
            $this->specs = array_values($this->specs);
        }
    }

    public function setPrimaryImage(int $index): void
    {
        $this->primaryIndex = $index;
    }

    public function removeExistingImage(int $index): void
    {
        if (isset($this->existingImages[$index])) {
            unset($this->existingImages[$index]);
            $this->existingImages = array_values($this->existingImages);
            if ($this->primaryIndex >= count($this->existingImages)) {
                $this->primaryIndex = max(0, count($this->existingImages) - 1);
            }
        }
    }

    public function removeGalleryFile(int $index): void
    {
        if (isset($this->galleryFiles[$index])) {
            unset($this->galleryFiles[$index]);
            $this->galleryFiles = array_values($this->galleryFiles);
        }
    }

    public function openCreateModal(): void
    {
        $this->resetValidation();
        $this->resetFormFields();
        $this->editingRangeId = null;

        // Default specifications template
        $this->specs = [
            ['key' => 'Material', 'value' => ''],
            ['key' => 'Built Type', 'value' => 'Prefabricated Modular'],
            ['key' => 'Color', 'value' => 'Custom Options'],
            ['key' => 'Brand', 'value' => 'Shallom Prefab Systems'],
        ];

        $this->dispatch('open-modal', mode: 'form', title: 'Add Our Range Item');
    }

    public function editRange(int $id): void
    {
        $this->resetValidation();
        $range = OurRange::findOrFail($id);

        $this->editingRangeId = $range->id;
        $this->our_range_category_id = $range->our_range_category_id;
        $this->title = $range->title ?? '';

        $details = $range->details ?? [];
        $this->price = $details['price'] ?? '';
        $this->price_unit = $details['price_unit'] ?? 'sq ft';
        $this->moq = $details['moq'] ?? '1 sq ft';

        $specArray = [];
        if (isset($details['specs']) && is_array($details['specs'])) {
            foreach ($details['specs'] as $k => $v) {
                $specArray[] = ['key' => (string) $k, 'value' => (string) $v];
            }
        }
        $this->specs = $specArray;

        $this->description = $range->description ?? '';
        $this->existingImages = $range->images ?? [];
        $this->primaryIndex = 0; // Default first image is primary
        $this->existingPdf = $range->pdf;
        $this->is_active = (bool) $range->is_active;

        $this->galleryFiles = [];
        $this->pdfFile = null;

        $this->dispatch('open-modal', mode: 'form', title: 'Edit Range Item');
    }

    public function confirmDelete(int $id): void
    {
        $range = OurRange::findOrFail($id);
        $this->deletingRangeId = $range->id;
        $this->deletingRangeTitle = $range->title ?? 'Range Item';

        $this->dispatch('open-modal', mode: 'delete', title: 'Delete Range Item');
    }

    public function save(): void
    {
        $rules = [
            'our_range_category_id' => 'required|exists:our_range_categories,id',
            'title' => 'required|string|max:255',
            'price' => 'nullable|string|max:100',
            'price_unit' => 'nullable|string|max:50',
            'moq' => 'required|string|max:100',
            'description' => 'nullable|string|max:3000',
            'is_active' => 'required|boolean',
            'galleryFiles.*' => 'nullable|image|max:3072',
            'pdfFile' => 'nullable|mimes:pdf|max:10240',
        ];

        $this->validate($rules);

        // Build specifications key-value map
        $formattedSpecs = [];
        foreach ($this->specs as $s) {
            $key = trim($s['key'] ?? '');
            $val = trim($s['value'] ?? '');
            if ($key !== '') {
                $formattedSpecs[$key] = $val;
            }
        }

        $details = [
            'price' => $this->price,
            'price_unit' => $this->price_unit,
            'moq' => $this->moq,
            'specs' => $formattedSpecs,
        ];

        // Process existing + new uploaded images
        $allImages = $this->existingImages;
        if (! empty($this->galleryFiles)) {
            foreach ($this->galleryFiles as $gFile) {
                $gPath = $gFile->store('our-range', 'public');
                $allImages[] = 'storage/'.$gPath;
            }
        }

        // Reorder images array so marked primary image is at index 0
        if (! empty($allImages)) {
            $pIdx = min($this->primaryIndex, count($allImages) - 1);
            if ($pIdx > 0 && isset($allImages[$pIdx])) {
                $primaryItem = $allImages[$pIdx];
                unset($allImages[$pIdx]);
                array_unshift($allImages, $primaryItem);
            }
        }

        // PDF Upload
        $pdfPath = $this->existingPdf;
        if ($this->pdfFile) {
            $storedPdf = $this->pdfFile->store('spec-sheets', 'public');
            $pdfPath = 'storage/'.$storedPdf;
        }

        if ($this->editingRangeId) {
            $range = OurRange::findOrFail($this->editingRangeId);
            $range->update([
                'our_range_category_id' => $this->our_range_category_id,
                'title' => $this->title,
                'details' => $details,
                'description' => $this->description,
                'images' => array_values($allImages),
                'pdf' => $pdfPath,
                'is_active' => $this->is_active,
            ]);
            $this->dispatch('toast-show', message: 'Product updated successfully!', type: 'success');
        } else {
            OurRange::create([
                'our_range_category_id' => $this->our_range_category_id,
                'title' => $this->title,
                'details' => $details,
                'description' => $this->description,
                'images' => array_values($allImages),
                'pdf' => $pdfPath,
                'is_active' => $this->is_active,
            ]);
            $this->dispatch('toast-show', message: 'Product created successfully!', type: 'success');
        }

        $this->resetFormFields();
        $this->dispatch('close-modal');
    }

    public function deleteRange(): void
    {
        if ($this->deletingRangeId) {
            $range = OurRange::find($this->deletingRangeId);
            if ($range) {
                $range->delete();
                $this->dispatch('toast-show', message: 'Product deleted successfully!', type: 'info');
            }
        }

        $this->deletingRangeId = null;
        $this->deletingRangeTitle = '';
        $this->dispatch('close-modal');
    }

    public function toggleActive(int $id): void
    {
        $range = OurRange::findOrFail($id);
        $range->is_active = ! $range->is_active;
        $range->save();

        $statusStr = $range->is_active ? 'activated' : 'deactivated';
        $this->dispatch('toast-show', message: "Product {$statusStr}!", type: 'info');
    }

    private function resetFormFields(): void
    {
        $this->editingRangeId = null;
        $this->our_range_category_id = null;
        $this->title = '';
        $this->price = '';
        $this->price_unit = 'sq ft';
        $this->moq = '1 sq ft';
        $this->description = '';
        $this->specs = [];
        $this->existingImages = [];
        $this->galleryFiles = [];
        $this->primaryIndex = 0;
        $this->pdfFile = null;
        $this->existingPdf = null;
        $this->is_active = true;
    }

    #[Computed]
    public function categories(): Collection
    {
        return OurRangeCategory::where('is_active', true)->orderBy('name')->get();
    }

    #[Computed]
    public function ranges(): LengthAwarePaginator
    {
        return OurRange::query()
            ->with('category')
            ->when($this->search, function ($query) {
                $query->where('title', 'like', '%'.$this->search.'%')
                    ->orWhere('description', 'like', '%'.$this->search.'%');
            })
            ->when($this->category_filter, function ($query) {
                $query->where('our_range_category_id', $this->category_filter);
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
    }
};
