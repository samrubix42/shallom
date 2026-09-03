<?php

use App\Models\Service;
use Illuminate\Pagination\LengthAwarePaginator;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Computed;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Attributes\Url;
use Livewire\Component;
use Livewire\WithPagination;

new #[Layout('layouts::admin')] #[Title('Services | Admin Studio')] class extends Component
{
    use WithPagination;

    #[Url(history: true)]
    public string $search = '';

    public ?int $deletingServiceId = null;

    public string $deletingServiceName = '';

    public function updatedSearch(): void
    {
        $this->resetPage();
    }

    public function toggleActive(int $id): void
    {
        $service = Service::findOrFail($id);
        $service->is_active = ! $service->is_active;
        $service->save();

        $statusStr = $service->is_active ? 'activated' : 'deactivated';
        $this->dispatch('toast-show', message: "Service {$statusStr}!", type: 'info');
    }

    public function confirmDelete(int $id): void
    {
        $service = Service::findOrFail($id);
        $this->deletingServiceId = $service->id;
        $this->deletingServiceName = $service->name;

        $this->dispatch('open-delete-modal');
    }

    public function deleteService(): void
    {
        if ($this->deletingServiceId) {
            $service = Service::find($this->deletingServiceId);
            if ($service) {
                if ($service->image && Storage::disk('public')->exists($service->image)) {
                    Storage::disk('public')->delete($service->image);
                }
                if ($service->banner && Storage::disk('public')->exists($service->banner)) {
                    Storage::disk('public')->delete($service->banner);
                }
                $service->delete();
            }
            $this->dispatch('toast-show', message: 'Service deleted successfully!', type: 'info');
        }

        $this->deletingServiceId = null;
        $this->deletingServiceName = '';
        $this->dispatch('close-delete-modal');
    }

    #[Computed]
    public function services(): LengthAwarePaginator
    {
        return Service::query()
            ->when($this->search !== '', fn ($query) => $query->where('name', 'like', '%'.$this->search.'%')->orWhere('slug', 'like', '%'.$this->search.'%'))
            ->orderBy('id', 'desc')
            ->paginate(10);
    }
};
