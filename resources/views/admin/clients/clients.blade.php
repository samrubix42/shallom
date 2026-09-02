
<div x-data="{ 
        open: false, 
        mode: 'form', 
        title: 'Add Client',
        init() {
            Livewire.on('open-modal', (data) => {
                this.mode = data.mode || 'form';
                this.title = data.title || 'Client Modal';
                this.open = true;
            });
            Livewire.on('close-modal', () => {
                this.open = false;
            });
        }
     }"
     x-init="init()"
     @keydown.escape.window="open = false"
     class="space-y-4">

    <!-- HEADER & ADD BUTTON -->
    <div class="flex items-center justify-between pb-2">
        <div>
            <h1 class="text-xl font-semibold text-slate-800">Clients</h1>
            <p class="text-xs text-slate-500">Manage client logos and display order</p>
        </div>

        <button wire:click="openCreateModal" 
                class="inline-flex items-center gap-1.5 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-medium px-3.5 py-2 rounded-md text-xs transition-colors cursor-pointer shadow-xs">
            <i class="ri-add-line text-sm"></i>
            <span>Add Client</span>
        </button>
    </div>

    <!-- CLIENTS TABLE -->
    <div class="bg-white rounded-md border border-slate-200 overflow-hidden shadow-xs">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="bg-[#FAF9F5] border-b border-slate-200 text-slate-600 font-semibold uppercase tracking-wider text-[11px]">
                        <th class="py-3 px-4 w-24">Logo</th>
                        <th class="py-3 px-4">Client Name</th>
                        <th class="py-3 px-4 w-28 text-center">Display Order</th>
                        <th class="py-3 px-4 w-28">Status</th>
                        <th class="py-3 px-4 w-32 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($this->clients as $client)
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <!-- Logo -->
                            <td class="py-3 px-4">
                                <div class="w-14 h-9 bg-white border border-slate-200 rounded-md p-1 flex items-center justify-center overflow-hidden">
                                    <img src="{{ asset($client->image_path) }}" 
                                         alt="{{ $client->name }}" 
                                         class="max-h-full max-w-full object-contain"
                                         onerror="this.src='https://placehold.co/100x60/f8fafc/64748b?text=Client'" />
                                </div>
                            </td>

                            <!-- Client Name -->
                            <td class="py-3 px-4">
                                <span class="font-semibold text-slate-800">{{ $client->name }}</span>
                            </td>

                            <!-- Display Order -->
                            <td class="py-3 px-4 text-center font-mono text-slate-600">
                                <span class="bg-slate-100 text-slate-700 px-2 py-0.5 rounded-md text-[11px]">#{{ $client->display_order }}</span>
                            </td>

                            <!-- Status Toggle -->
                            <td class="py-3 px-4">
                                <button wire:click="toggleActive({{ $client->id }})" 
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-[11px] font-semibold cursor-pointer border transition-colors {{ $client->is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-200 hover:bg-emerald-100' : 'bg-slate-100 text-slate-600 border-slate-200 hover:bg-slate-200' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $client->is_active ? 'bg-emerald-500' : 'bg-slate-400' }}"></span>
                                    <span>{{ $client->is_active ? 'Active' : 'Inactive' }}</span>
                                </button>
                            </td>

                            <!-- Actions -->
                            <td class="py-3 px-4 text-right space-x-1">
                                <button wire:click="editClient({{ $client->id }})" 
                                        title="Edit Client" 
                                        class="inline-flex items-center justify-center w-7 h-7 rounded-md bg-slate-100 hover:bg-[#FFF4E5] text-slate-600 hover:text-[#FF8B02] border border-slate-200 transition-colors cursor-pointer">
                                    <i class="ri-edit-line text-xs"></i>
                                </button>
                                <button wire:click="confirmDelete({{ $client->id }})" 
                                        title="Delete Client" 
                                        class="inline-flex items-center justify-center w-7 h-7 rounded-md bg-slate-100 hover:bg-rose-50 text-slate-600 hover:text-rose-600 border border-slate-200 transition-colors cursor-pointer">
                                    <i class="ri-delete-bin-line text-xs"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-10 text-center text-slate-400">
                                <p class="text-xs font-medium text-slate-500">No client records found.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($this->clients->hasPages())
            <div class="p-3 border-t border-slate-200 bg-[#FAF9F5]">
                {{ $this->clients->links() }}
            </div>
        @endif
    </div>

    <!-- ALPINE.JS MODAL BACKDROP & DIALOG -->
    <div x-show="open" 
         x-cloak 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs">
        
        <div x-show="open"
             x-transition:enter="transition ease-out duration-200 transform"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-150 transform"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             @click.away="open = false"
             class="w-full max-w-md bg-white rounded-md border border-slate-200 shadow-xl overflow-hidden">

            <!-- Modal Header -->
            <div class="px-5 py-3 border-b border-slate-200 bg-[#FAF9F5] flex items-center justify-between">
                <h3 class="text-sm font-semibold text-slate-800" x-text="title"></h3>
                <button @click="open = false" class="text-slate-400 hover:text-slate-600 rounded-md p-1 transition-colors cursor-pointer">
                    <i class="ri-close-line text-base"></i>
                </button>
            </div>

            <!-- ADD / EDIT FORM -->
            <template x-if="mode === 'form'">
                <form wire:submit="save" class="p-5 space-y-4">
                    <!-- Client Name -->
                    <div class="space-y-1">
                        <label class="block text-xs font-medium text-slate-700">Client Name <span class="text-rose-500">*</span></label>
                        <input type="text" 
                               wire:model="name" 
                               placeholder="Client name" 
                               class="w-full px-3 py-1.5 text-xs bg-white border border-slate-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#FF8B02] focus:border-[#FF8B02]" />
                        @error('name') <span class="text-[11px] text-rose-500 font-medium">{{ $message }}</span> @enderror
                    </div>

                    <!-- Display Order & Status -->
                    <div class="grid grid-cols-2 gap-3">
                        <div class="space-y-1">
                            <label class="block text-xs font-medium text-slate-700">Display Order <span class="text-rose-500">*</span></label>
                            <input type="number" 
                                   wire:model="display_order" 
                                   min="0" 
                                   class="w-full px-3 py-1.5 text-xs bg-white border border-slate-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#FF8B02] focus:border-[#FF8B02]" />
                            @error('display_order') <span class="text-[11px] text-rose-500 font-medium">{{ $message }}</span> @enderror
                        </div>

                        <div class="space-y-1">
                            <label class="block text-xs font-medium text-slate-700">Status</label>
                            <label class="inline-flex items-center gap-2 mt-1 cursor-pointer">
                                <input type="checkbox" wire:model="is_active" class="rounded-md border-slate-300 text-[#FF8B02] focus:ring-[#FF8B02] h-4 w-4" />
                                <span class="text-xs text-slate-700">Active</span>
                            </label>
                        </div>
                    </div>

                    <!-- Logo Image File Upload -->
                    <div class="space-y-1.5">
                        <label class="block text-xs font-medium text-slate-700">Client Logo</label>
                        <input type="file" 
                               wire:model="imageFile" 
                               accept="image/*" 
                               class="w-full text-xs text-slate-500 file:mr-2 file:py-1 file:px-2.5 file:rounded-md file:border-0 file:text-xs file:font-medium file:bg-[#FFF4E5] file:text-[#FF8B02] hover:file:bg-[#FF8B02] hover:file:text-white transition-colors cursor-pointer border border-slate-200 rounded-md p-1" />
                        @error('imageFile') <span class="text-[11px] text-rose-500 font-medium">{{ $message }}</span> @enderror

                        <!-- Preview Area -->
                        <div class="p-2.5 bg-[#FAF9F5] border border-slate-200 rounded-md flex items-center gap-3">
                            <div class="w-14 h-10 bg-white border border-slate-200 rounded-md flex items-center justify-center p-1 overflow-hidden shrink-0">
                                @if($imageFile)
                                    <img src="{{ $imageFile->temporaryUrl() }}" class="max-h-full max-w-full object-contain" />
                                @elseif($image_path)
                                    <img src="{{ asset($image_path) }}" class="max-h-full max-w-full object-contain" />
                                @else
                                    <i class="ri-image-line text-slate-300 text-lg"></i>
                                @endif
                            </div>
                            <div class="text-[11px] text-slate-500">
                                @if($imageFile)
                                    <span class="text-emerald-600 font-medium">New file selected</span>
                                @elseif($image_path)
                                    <span class="text-slate-600 font-mono">{{ basename($image_path) }}</span>
                                @else
                                    <span>Select logo image</span>
                                @endif
                            </div>
                        </div>
                    </div>

                    <!-- Form Action Buttons -->
                    <div class="pt-3 border-t border-slate-100 flex items-center justify-end gap-2">
                        <button type="button" 
                                @click="open = false" 
                                class="px-3.5 py-1.5 text-xs font-medium text-slate-600 hover:bg-slate-100 border border-slate-200 rounded-md transition-colors cursor-pointer">
                            Cancel
                        </button>
                        <button type="submit" 
                                wire:loading.attr="disabled" 
                                class="inline-flex items-center gap-1 px-4 py-1.5 text-xs font-medium text-white bg-[#FF8B02] hover:bg-[#E67A00] rounded-md transition-colors cursor-pointer disabled:opacity-50">
                            <span wire:loading wire:target="save, imageFile" class="animate-spin text-xs"><i class="ri-loader-4-line"></i></span>
                            <span>Save</span>
                        </button>
                    </div>
                </form>
            </template>

            <!-- DELETE CONFIRMATION -->
            <template x-if="mode === 'delete'">
                <div class="p-5 space-y-4">
                    <p class="text-xs text-slate-600">
                        Are you sure you want to delete <strong class="text-slate-900 font-semibold">'{{ $deletingClientName }}'</strong>?
                    </p>

                    <div class="pt-3 border-t border-slate-100 flex items-center justify-end gap-2">
                        <button type="button" 
                                @click="open = false" 
                                class="px-3.5 py-1.5 text-xs font-medium text-slate-600 hover:bg-slate-100 border border-slate-200 rounded-md transition-colors cursor-pointer">
                            Cancel
                        </button>
                        <button type="button" 
                                wire:click="deleteClient" 
                                class="px-4 py-1.5 text-xs font-medium text-white bg-rose-600 hover:bg-rose-700 rounded-md transition-colors cursor-pointer">
                            Delete
                        </button>
                    </div>
                </div>
            </template>

        </div>
    </div>

</div>