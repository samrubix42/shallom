<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Contact Us | Shallom Prefab Systems')] class extends Component {
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
            'name' => 'required|min:3',
            'phone' => 'required|min:10',
        ], [
            'name.required' => 'Please enter your full name',
            'phone.required' => 'Please enter a valid 10-digit phone number',
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