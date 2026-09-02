<?php

use App\Models\Client;
use Illuminate\Pagination\LengthAwarePaginator;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

new #[Layout('layouts::admin')] #[Title('Clients | Admin')] class extends Component
{
    use WithFileUploads, WithPagination;

    public ?int $editingClientId = null;

    public string $name = '';

    public string $image_path = '';

    public $imageFile = null;

    public int $display_order = 0;

    public bool $is_active = true;

    public ?int $deletingClientId = null;

    public string $deletingClientName = '';

    public function openCreateModal(): void
    {
        $this->resetValidation();
        $this->resetFormFields();
        $this->editingClientId = null;

        $maxOrder = Client::max('display_order') ?? 0;
        $this->display_order = $maxOrder + 1;

        $this->dispatch('open-modal', mode: 'form', title: 'Add Client');
    }

    public function editClient(int $id): void
    {
        $this->resetValidation();
        $client = Client::findOrFail($id);

        $this->editingClientId = $client->id;
        $this->name = $client->name;
        $this->image_path = $client->image_path;
        $this->imageFile = null;
        $this->display_order = $client->display_order;
        $this->is_active = (bool) $client->is_active;

        $this->dispatch('open-modal', mode: 'form', title: 'Edit Client');
    }

    public function confirmDelete(int $id): void
    {
        $client = Client::findOrFail($id);
        $this->deletingClientId = $client->id;
        $this->deletingClientName = $client->name;

        $this->dispatch('open-modal', mode: 'delete', title: 'Delete Client');
    }

    public function save(): void
    {
        $rules = [
            'name' => 'required|string|max:255',
            'display_order' => 'required|integer|min:0',
            'is_active' => 'required|boolean',
        ];

        if ($this->editingClientId === null && empty($this->image_path)) {
            $rules['imageFile'] = 'required|image|max:2048';
        } else {
            $rules['imageFile'] = 'nullable|image|max:2048';
        }

        $this->validate($rules);

        $imagePath = $this->image_path;
        if ($this->imageFile) {
            $storedPath = $this->imageFile->store('clients', 'public');
            $imagePath = 'storage/'.$storedPath;
        }

        if ($this->editingClientId) {
            $client = Client::findOrFail($this->editingClientId);
            $client->update([
                'name' => $this->name,
                'image_path' => $imagePath,
                'display_order' => $this->display_order,
                'is_active' => $this->is_active,
            ]);
        } else {
            Client::create([
                'name' => $this->name,
                'image_path' => $imagePath ?: 'clients/Picture1.jpg',
                'display_order' => $this->display_order,
                'is_active' => $this->is_active,
            ]);
        }

        $this->resetFormFields();
        $this->dispatch('close-modal');
    }

    public function deleteClient(): void
    {
        if ($this->deletingClientId) {
            $client = Client::find($this->deletingClientId);
            if ($client) {
                $client->delete();
            }
        }

        $this->deletingClientId = null;
        $this->deletingClientName = '';
        $this->dispatch('close-modal');
    }

    public function toggleActive(int $id): void
    {
        $client = Client::findOrFail($id);
        $client->is_active = ! $client->is_active;
        $client->save();
    }

    private function resetFormFields(): void
    {
        $this->editingClientId = null;
        $this->name = '';
        $this->image_path = '';
        $this->imageFile = null;
        $this->display_order = 0;
        $this->is_active = true;
    }

    #[Computed]
    public function clients(): LengthAwarePaginator
    {
        return Client::query()
            ->orderBy('display_order', 'asc')
            ->orderBy('id', 'desc')
            ->paginate(10);
    }
};

