<?php

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::admin')] #[Title('Edit Service | Admin Studio')] class extends Component
{
    use WithFileUploads;

    public Service $service;

    public string $name = '';

    public string $slug = '';

    public string $short_description = '';

    public string $description = '';

    public $image = null;

    public ?string $existingImage = null;

    public bool $is_active = true;

    public function mount(Service $service): void
    {
        $this->service = $service;
        $this->name = $service->name;
        $this->slug = $service->slug;
        $this->short_description = $service->short_description ?? '';
        $this->description = $service->description ?? '';
        $this->existingImage = $service->image;
        $this->is_active = (bool) $service->is_active;
    }

    public function updatedName(string $value): void
    {
        $this->slug = Str::slug($value);
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug,'.$this->service->id,
            'short_description' => 'nullable|string|max:500',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'is_active' => 'required|boolean',
        ]);

        $imagePath = $this->existingImage;
        if ($this->image) {
            if ($this->existingImage && Storage::disk('public')->exists($this->existingImage)) {
                Storage::disk('public')->delete($this->existingImage);
            }
            $imagePath = $this->image->store('services', 'public');
        }

        $this->service->update([
            'name' => $this->name,
            'slug' => Str::slug($this->slug),
            'short_description' => $this->short_description ?: null,
            'description' => $this->description ?: null,
            'image' => $imagePath,
            'is_active' => $this->is_active,
        ]);

        session()->flash('toast', ['message' => 'Service updated successfully!', 'type' => 'success']);

        return redirect()->route('admin.services.list');
    }
};
