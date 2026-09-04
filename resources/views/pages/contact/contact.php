<?php

use App\Models\Contact;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Contact Us | Shallom Prefab Systems')] class extends Component
{
    public string $name = '';

    public string $phone = '';

    public string $email = '';

    public string $buildingInterest = 'Prefab Site Office';

    public string $projectLocation = '';

    public string $message = '';

    public bool $enquirySubmitted = false;

    public function submitEnquiry(): void
    {
        $this->validate([
            'name' => 'required|string|min:3|max:255',
            'phone' => 'required|string|min:10|max:20',
            'email' => 'nullable|email|max:255',
            'buildingInterest' => 'nullable|string|max:255',
            'projectLocation' => 'nullable|string|max:255',
            'message' => 'nullable|string|max:2000',
        ], [
            'name.required' => 'Please enter your full name.',
            'name.min' => 'Full name must be at least 3 characters.',
            'phone.required' => 'Please enter a valid phone number.',
            'phone.min' => 'Phone number must be at least 10 digits.',
            'email.email' => 'Please enter a valid email address.',
        ]);

        Contact::create([
            'name' => trim($this->name),
            'phone' => trim($this->phone),
            'email' => trim($this->email) ?: null,
            'building_interest' => $this->buildingInterest,
            'project_location' => trim($this->projectLocation) ?: null,
            'message' => trim($this->message) ?: null,
            'is_read' => false,
        ]);

        $this->enquirySubmitted = true;
    }

    public function resetEnquiryState(): void
    {
        $this->name = '';
        $this->phone = '';
        $this->email = '';
        $this->buildingInterest = 'Prefab Site Office';
        $this->projectLocation = '';
        $this->message = '';
        $this->enquirySubmitted = false;
    }
};
