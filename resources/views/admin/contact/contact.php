<?php

use App\Models\Contact;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts::admin')] #[Title('Contact Enquiries | Admin')] class extends Component
{
    use WithPagination;

    public string $search = '';

    public string $status = 'all';

    public ?Contact $selectedContact = null;

    public ?int $deletingContactId = null;

    public string $deletingContactName = '';

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function updatedStatus(): void
    {
        $this->resetPage();
    }

    public function viewContact(int $id): void
    {
        $contact = Contact::findOrFail($id);
        if (! $contact->is_read) {
            $contact->update(['is_read' => true]);
        }

        $this->selectedContact = $contact;
        $this->dispatch('open-modal', mode: 'view', title: 'Contact Enquiry Details');
    }

    public function toggleReadStatus(int $id): void
    {
        $contact = Contact::findOrFail($id);
        $contact->is_read = ! $contact->is_read;
        $contact->save();

        $statusText = $contact->is_read ? 'marked as read' : 'marked as unread';
        $this->dispatch('toast-show', message: "Enquiry from {$contact->name} {$statusText}!", type: 'info');
    }

    public function confirmDelete(int $id): void
    {
        $contact = Contact::findOrFail($id);
        $this->deletingContactId = $contact->id;
        $this->deletingContactName = $contact->name;

        $this->dispatch('open-modal', mode: 'delete', title: 'Delete Enquiry');
    }

    public function deleteContact(): void
    {
        if ($this->deletingContactId) {
            $contact = Contact::find($this->deletingContactId);
            if ($contact) {
                $contact->delete();
            }
            $this->dispatch('toast-show', message: 'Enquiry deleted successfully!', type: 'info');
        }

        $this->deletingContactId = null;
        $this->deletingContactName = '';
        $this->selectedContact = null;
        $this->dispatch('close-modal');
    }

    #[Computed]
    public function contacts(): LengthAwarePaginator
    {
        return Contact::query()
            ->when($this->search !== '', function ($query) {
                $query->where(function ($q) {
                    $q->where('name', 'like', '%'.$this->search.'%')
                        ->orWhere('phone', 'like', '%'.$this->search.'%')
                        ->orWhere('email', 'like', '%'.$this->search.'%')
                        ->orWhere('building_interest', 'like', '%'.$this->search.'%')
                        ->orWhere('project_location', 'like', '%'.$this->search.'%');
                });
            })
            ->when($this->status === 'unread', function ($query) {
                $query->where('is_read', false);
            })
            ->when($this->status === 'read', function ($query) {
                $query->where('is_read', true);
            })
            ->latest()
            ->paginate(10);
    }

    #[Computed]
    public function unreadCount(): int
    {
        return Contact::where('is_read', false)->count();
    }
};
