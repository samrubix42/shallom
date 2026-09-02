<?php

use App\Models\Service;
use Illuminate\Support\Str;
use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

new #[Layout('layouts::admin')] #[Title('Add New Service | Admin Studio')] class extends Component
{
    use WithFileUploads;

    public string $name = '';

    public string $slug = '';

    public string $short_description = '';

    public string $description = '';

    public $image = null;

    public bool $is_active = true;

    public function updatedName(string $value): void
    {
        $this->slug = Str::slug($value);
    }

    public function save()
    {
        $this->validate([
            'name' => 'required|string|max:255',
            'slug' => 'required|string|max:255|unique:services,slug',
            'short_description' => 'nullable|string|max:500',
            'description' => 'nullable|string',
            'image' => 'nullable|image|max:2048',
            'is_active' => 'required|boolean',
        ]);

        $imagePath = null;
        if ($this->image) {
            $imagePath = $this->image->store('services', 'public');
        }

        Service::create([
            'name' => $this->name,
            'slug' => Str::slug($this->slug),
            'short_description' => $this->short_description ?: null,
            'description' => $this->description ?: null,
            'image' => $imagePath,
            'is_active' => $this->is_active,
        ]);

        session()->flash('toast', ['message' => 'Service created successfully!', 'type' => 'success']);

        return redirect()->route('admin.services.list');
    }
};