<?php

use App\Models\Testimonial;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Validate;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Shallom Prefab Systems | Modular Houses & Prefab Buildings')] class extends Component
{
    #[Computed]
    public function testimonials()
    {
        return Testimonial::query()
            ->where('is_active', true)
            ->orderBy('display_order', 'asc')
            ->orderBy('id', 'desc')
            ->get();
    }
    // Interactive Product Tab State
    public string $activeCategory = 'all';

    // Cost Estimator Calculator State
    public string $buildingType = 'site_office';
    public int $areaSize = 600; // in Sq. Ft.
    public string $urgency = 'standard'; // 'standard' or 'express'
    public bool $includeToilets = false;
    public bool $includeACPanels = true;

    // Contact / Enquiry Form State
    #[Validate('required|min:3')]
    public string $name = '';

    #[Validate('required|min:10')]
    public string $phone = '';

    #[Validate('nullable|email')]
    public string $email = '';

    public string $buildingInterest = 'Prefab Site Office';
    public string $projectLocation = '';
    public string $message = '';

    public bool $enquirySubmitted = false;

    // Price estimate computation logic
    #[Computed]
    public function estimatedCost(): array
    {
        // Rate per sq ft base ranges (in INR)
        $rates = [
            'site_office' => ['min' => 750, 'max' => 950],
            'modular_cottage' => ['min' => 1150, 'max' => 1450],
            'labour_camp' => ['min' => 480, 'max' => 680],
            'steel_building' => ['min' => 850, 'max' => 1200],
            'aerocon_structure' => ['min' => 900, 'max' => 1100],
        ];

        $baseRate = $rates[$this->buildingType] ?? ['min' => 700, 'max' => 950];
        $multiplier = $this->urgency === 'express' ? 1.15 : 1.0;
        
        if ($this->includeToilets) {
            $baseRate['min'] += 50;
            $baseRate['max'] += 75;
        }

        if ($this->includeACPanels) {
            $baseRate['min'] += 80;
            $baseRate['max'] += 110;
        }

        $totalMin = round(($baseRate['min'] * $this->areaSize * $multiplier) / 1000) * 1000;
        $totalMax = round(($baseRate['max'] * $this->areaSize * $multiplier) / 1000) * 1000;

        // Turnaround estimate (days)
        $days = match(true) {
            $this->areaSize <= 500 => '5 - 7 Days',
            $this->areaSize <= 1500 => '8 - 14 Days',
            $this->areaSize <= 5000 => '15 - 25 Days',
            default => '25 - 40 Days',
        };

        return [
            'totalMin' => number_format($totalMin),
            'totalMax' => number_format($totalMax),
            'perSqFtMin' => $baseRate['min'],
            'perSqFtMax' => $baseRate['max'],
            'turnaround' => $days,
        ];
    }

    public function filterCategory(string $category): void
    {
        $this->activeCategory = $category;
    }

    public function selectProductForEnquiry(string $productName): void
    {
        $this->buildingInterest = $productName;
    }

    public function submitEnquiry(): void
    {
        $this->validate();

        // Simulate successful submission
        $this->enquirySubmitted = true;

        // Reset input fields
        $this->reset(['name', 'phone', 'email', 'projectLocation', 'message']);
    }

    public function resetEnquiryState(): void
    {
        $this->enquirySubmitted = false;
    }
};