<?php

use App\Models\OurRange;
use App\Models\OurRangeCategory;
use Illuminate\Database\Eloquent\Collection;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Product Catalog & Specifications | Shallom Prefab Systems')] class extends Component
{
    public string $activeCategory = 'all';

    public ?string $selectedProductForEnquiry = null;

    public bool $showEnquiryModal = false;

    // Form fields
    public string $name = '';

    public string $phone = '';

    public string $email = '';

    public string $location = '';

    public string $message = '';

    public bool $submitted = false;

    #[Computed]
    public function categories(): Collection
    {
        return OurRangeCategory::where('is_active', true)
            ->orderBy('id', 'asc')
            ->get();
    }

    #[Computed]
    public function products(): Collection
    {
        return OurRange::with('category')
            ->where('is_active', true)
            ->when($this->activeCategory !== 'all', function ($query) {
                $query->whereHas('category', function ($q) {
                    $q->where('slug', $this->activeCategory)
                        ->orWhere('id', $this->activeCategory);
                });
            })
            ->orderBy('id', 'asc')
            ->get();
    }

    public function openEnquiryModal(string $productTitle): void
    {
        $this->selectedProductForEnquiry = $productTitle;
        $this->showEnquiryModal = true;
        $this->submitted = false;
    }

    public function closeEnquiryModal(): void
    {
        $this->showEnquiryModal = false;
    }

    public function submitModalEnquiry(): void
    {
        $this->validate([
            'name' => 'required|min:2',
            'phone' => 'required|min:10',
        ]);

        $this->submitted = true;
    }
};
