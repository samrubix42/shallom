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

    public string $whatsapp = '';

    public string $landline = '';

    public string $email = '';

    public string $address = '';

    public string $website = '';

    public string $business_hours = '';

    // Company Details & Tax
    public string $gst_no = '';

    public string $proprietor = '';

    public string $incorporation_year = '';

    public string $turnover = '';

    public string $team_size = '';

    public string $banker = '';

    public string $about_summary = '';

    public function mount(): void
    {
        $this->company_name = Setting::get('company_name', 'Shallom Prefab Systems');
        $this->company_tagline = Setting::get('company_tagline', 'Design for the Future | Innovative Engineering');
        $this->logo_path = Setting::get('logo', 'logo.webp');
        $this->favicon_path = Setting::get('favicon', 'favicon.ico');

        $this->phone = Setting::get('phone', '+91-9899552380');
        $this->whatsapp = Setting::get('whatsapp', '+919899552380');
        $this->landline = Setting::get('landline', '07942550323');
        $this->email = Setting::get('email', 'shallomprefabsystems@gmail.com');
        $this->address = Setting::get('address', 'N-3/A-3, Dilshad Garden, Delhi – 110095, India');
        $this->website = Setting::get('website', 'http://www.shallomprefab.com/');
        $this->business_hours = Setting::get('business_hours', 'Monday to Saturday | 09:00 AM – 07:00 PM IST');

        $this->gst_no = Setting::get('gst_no', '07ANDPG4822C2ZI');
        $this->proprietor = Setting::get('proprietor', 'Mr. Arvind Kumar Gautam');
        $this->incorporation_year = Setting::get('incorporation_year', '2009 (GST Registered: July 2017)');
        $this->turnover = Setting::get('turnover', '₹5 Crore – ₹25 Crore');
        $this->team_size = Setting::get('team_size', '26 – 50 Skilled Professionals');
        $this->banker = Setting::get('banker', 'AXIS BANK');
        $this->about_summary = Setting::get('about_summary', 'Shallom Prefab Systems is a dynamic, rapidly growing manufacturer.');
    }

    public function save(): void
    {
        $this->validate([
            'company_name' => 'required|string|max:255',
            'company_tagline' => 'nullable|string|max:500',
            'phone' => 'required|string|max:50',
            'whatsapp' => 'nullable|string|max:50',
            'landline' => 'nullable|string|max:50',
            'email' => 'required|email|max:255',
            'address' => 'required|string|max:500',
            'website' => 'nullable|url|max:255',
            'business_hours' => 'nullable|string|max:255',
            'gst_no' => 'nullable|string|max:50',
            'proprietor' => 'nullable|string|max:255',
            'incorporation_year' => 'nullable|string|max:255',
            'turnover' => 'nullable|string|max:255',
            'team_size' => 'nullable|string|max:255',
            'banker' => 'nullable|string|max:255',
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
        Setting::set('whatsapp', $this->whatsapp, 'contact');
        Setting::set('landline', $this->landline, 'contact');
        Setting::set('email', $this->email, 'contact');
        Setting::set('address', $this->address, 'contact');
        Setting::set('website', $this->website, 'contact');
        Setting::set('business_hours', $this->business_hours, 'contact');

        // Save Company & Tax
        Setting::set('gst_no', $this->gst_no, 'company');
        Setting::set('proprietor', $this->proprietor, 'company');
        Setting::set('incorporation_year', $this->incorporation_year, 'company');
        Setting::set('turnover', $this->turnover, 'company');
        Setting::set('team_size', $this->team_size, 'company');
        Setting::set('banker', $this->banker, 'company');

        $this->logoFile = null;
        $this->faviconFile = null;

        $this->dispatch('toast-show', message: 'System settings updated successfully!', type: 'success');
    }
};
