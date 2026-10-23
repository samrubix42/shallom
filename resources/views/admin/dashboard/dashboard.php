<?php

use App\Models\Client;
use App\Models\Contact;
use App\Models\OurRange;
use App\Models\Service;
use App\Models\Setting;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::admin')] #[Title('Admin Dashboard | Shallom Prefab Systems')] class extends Component
{
    public ?Contact $selectedContact = null;

    public function viewContact(int $id): void
    {
        $contact = Contact::findOrFail($id);
        if (! $contact->is_read) {
            $contact->update(['is_read' => true]);
        }

        $this->selectedContact = $contact;
        $this->dispatch('open-modal', mode: 'view', title: 'Enquiry Details');
    }

    public function toggleReadStatus(int $id): void
    {
        $contact = Contact::findOrFail($id);
        $contact->is_read = ! $contact->is_read;
        $contact->save();

        $statusText = $contact->is_read ? 'marked as read' : 'marked as unread';
        $this->dispatch('toast-show', message: "Enquiry from {$contact->name} {$statusText}!", type: 'info');
    }

    #[Computed]
    public function stats(): array
    {
        return [
            'total_services' => Service::count(),
            'total_ranges' => OurRange::count(),
            'total_clients' => Client::count(),
            'total_enquiries' => Contact::count(),
            'unread_enquiries' => Contact::where('is_read', false)->count(),
        ];
    }

    #[Computed]
    public function companySettings(): array
    {
        return [
            'company_name' => Setting::get('company_name', 'Shallom Prefab Systems'),
            'proprietor' => Setting::get('proprietor', 'Mr. Arvind Kumar'),
            'annual_capacity' => Setting::get('annual_capacity', '₹25 Cr'),
            'skilled_engineers' => Setting::get('skilled_engineers', '50+'),
            'structure_lifespan' => Setting::get('structure_lifespan', '50 Years'),
            'phone' => Setting::get('phone', '+91 98995 52380'),
            'secondary_phone' => Setting::get('secondary_phone', '+91 70650 13555'),
            'address' => Setting::get('address', 'N-3/A-3, Dilshad Garden, Delhi - 110095'),
            'branch_address' => Setting::get('branch_address', 'D-15, Sector 3, Noida (U.P.) - 201301'),
        ];
    }

    #[Computed]
    public function recentEnquiries()
    {
        return Contact::latest()->take(5)->get();
    }
};
