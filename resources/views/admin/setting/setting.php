<?php

use App\Models\Setting;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::admin')] #[Title('System Settings | Admin')] class extends Component
{
    use WithFileUploads;

    // General & Branding
    public string $company_name = '';

    public string $company_tagline = '';

    public string $logo_path = '';

    public string $favicon_path = '';

    public $logoFile = null;

    public $faviconFile = null;

    // Contact Information
    public string $phone = '';

    public string $secondary_phone = '';

    public string $whatsapp_phone = '';

    public string $email = '';

    public string $address = '';

    public string $branch_address = '';

    public string $website = '';

    // Company Details
    public string $proprietor = '';

    public string $established_year = '';

    public string $annual_capacity = '';

    public string $skilled_engineers = '';

    public string $structure_lifespan = '';

    public string $about_summary = '';

    public function mount(): void
    {
        $this->company_name = Setting::get('company_name', 'Shallom Prefab Systems');
        $this->company_tagline = Setting::get('company_tagline', 'Design for the Future | Innovative Engineering');
        $this->logo_path = Setting::get('logo', 'logo.webp');
        $this->favicon_path = Setting::get('favicon', 'favicon.ico');

        $this->phone = Setting::get('phone', '+91-98995 52380');
        $this->secondary_phone = Setting::get('secondary_phone', '+91 70650 13555');
        $this->whatsapp_phone = Setting::get('whatsapp_phone', '+91 98995 52380');
        $this->email = Setting::get('email', 'shallomprefab@yahoo.com');
        $this->address = Setting::get('address', 'N-3/A-3, Dilshad Garden, Delhi - 110095');
        $this->branch_address = Setting::get('branch_address', 'D-15, Sector 3, Noida (U.P.) - 201301');
        $this->website = Setting::get('website', 'https://www.shallomprefabsystems.com');

        $this->proprietor = Setting::get('proprietor', 'Mr. Arvind Kumar');
        $this->established_year = Setting::get('established_year', '2017');
        $this->annual_capacity = Setting::get('annual_capacity', '₹25 Cr');
        $this->skilled_engineers = Setting::get('skilled_engineers', '50+');
        $this->structure_lifespan = Setting::get('structure_lifespan', '50 Years');
        $this->about_summary = Setting::get('about_summary', 'Innovative modular engineering and scalable turnkey construction for residential, commercial, and industrial projects across India.');
    }

    public function save(): void
    {
        $this->validate([
            'company_name' => 'required|string|max:255',
            'company_tagline' => 'nullable|string|max:500',
            'phone' => 'required|string|max:50',
            'secondary_phone' => 'required|string|max:50',
            'whatsapp_phone' => 'required|string|max:50',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:500',
            'branch_address' => 'required|string|max:500',
            'website' => 'nullable|url|max:255',
            'proprietor' => 'nullable|string|max:255',
            'established_year' => 'nullable|string|max:255',
            'annual_capacity' => 'nullable|string|max:255',
            'skilled_engineers' => 'nullable|string|max:255',
            'structure_lifespan' => 'nullable|string|max:255',
            'about_summary' => 'nullable|string|max:2000',
            'logoFile' => 'nullable|image|max:2048',
            'faviconFile' => 'nullable|file|mimes:ico,png,jpg,svg,webp|max:1024',
        ]);

        // Logo Upload
        if ($this->logoFile) {
            $path = $this->logoFile->store('settings', 'public');
            $this->logo_path = 'storage/'.$path;
            Setting::set('logo', $this->logo_path, 'general');
        }

        // Favicon Upload
        if ($this->faviconFile) {
            $favPath = $this->faviconFile->store('settings', 'public');
            $this->favicon_path = 'storage/'.$favPath;
            Setting::set('favicon', $this->favicon_path, 'general');
        }

        // Save General & Branding
        Setting::set('company_name', $this->company_name, 'general');
        Setting::set('company_tagline', $this->company_tagline, 'general');
        Setting::set('about_summary', $this->about_summary, 'general');

        // Save Contact
        Setting::set('phone', $this->phone, 'contact');
        Setting::set('secondary_phone', $this->secondary_phone, 'contact');
        Setting::set('whatsapp_phone', $this->whatsapp_phone, 'contact');
        Setting::set('email', $this->email, 'contact');
        Setting::set('address', $this->address, 'contact');
        Setting::set('branch_address', $this->branch_address, 'contact');
        Setting::set('website', $this->website, 'contact');

        // Save company profile
        Setting::set('proprietor', $this->proprietor, 'company');
        Setting::set('established_year', $this->established_year, 'company');
        Setting::set('annual_capacity', $this->annual_capacity, 'company');
        Setting::set('skilled_engineers', $this->skilled_engineers, 'company');
        Setting::set('structure_lifespan', $this->structure_lifespan, 'company');

        $this->logoFile = null;
        $this->faviconFile = null;

        $this->dispatch('toast-show', message: 'System settings updated successfully!', type: 'success');
    }
};
