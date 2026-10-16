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
            'proprietor' => Setting::get('proprietor', 'Mr. Arvind Kumar Gautam'),
            'turnover' => Setting::get('turnover', '₹5 Crore – ₹25 Crore'),
            'team_size' => Setting::get('team_size', '26 – 50 Professionals'),
            'gst_no' => Setting::get('gst_no', '07ANDPG4822C2ZI'),
            'banker' => Setting::get('banker', 'AXIS BANK'),
            'phone' => Setting::get('phone', '+91-9899552380'),
            'address' => Setting::get('address', 'N-3/A-3, Dilshad Garden, Delhi – 110095, India'),
        ];
    }

    #[Computed]
    public function recentEnquiries()
    {
        return Contact::latest()->take(5)->get();
    }
};
