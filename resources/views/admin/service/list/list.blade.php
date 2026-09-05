@section('title', 'Manage Services | Admin Control Center')
@section('meta_description', 'View and manage all engineering services offered by Shallom Prefab Systems.')

<div x-data="{ 
        deleteOpen: false,
        init() {
            Livewire.on('open-delete-modal', () => { this.deleteOpen = true; });
            Livewire.on('close-delete-modal', () => { this.deleteOpen = false; });
            @if(session()->has('toast'))
                if (typeof window.toast === 'function') {
                    window.toast(@js(session('toast.message')), { type: @js(session('toast.type')) });
                }
            @endif
        }
     }"
     x-init="init()"
     @keydown.escape.window="deleteOpen = false"
     class="space-y-4">

    <!-- HEADER & ACTIONS -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-2">
        <div>
            <h1 class="text-xl font-semibold text-slate-800">Services</h1>
            <p class="text-xs text-slate-500">Manage products, prefabricated solutions, and service offerings</p>
        </div>

        <div class="flex items-center gap-3">
            <!-- Search Bar -->
            <div class="relative">
                <input type="text" 
                       wire:model.live.debounce.300ms="search" 
                       placeholder="Search services..." 
                       class="w-48 sm:w-64 pl-8 pr-3 py-1.5 text-xs bg-white border border-slate-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#FF8B02] focus:border-[#FF8B02]" />
                <i class="ri-search-line absolute left-2.5 top-2 text-xs text-slate-400"></i>
            </div>

            <!-- Add Service Link -->
            <a href="{{ route('admin.services.create') }}" wire:navigate 
               class="inline-flex items-center gap-1.5 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-medium px-3.5 py-2 rounded-md text-xs transition-colors cursor-pointer shadow-xs shrink-0">
                <i class="ri-add-line text-sm"></i>
                <span>Add Service</span>
            </a>
        </div>
    </div>

    <!-- SERVICES TABLE -->
    <div class="bg-white rounded-md border border-slate-200 overflow-hidden shadow-xs">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="bg-[#FAF9F5] border-b border-slate-200 text-slate-600 font-semibold uppercase tracking-wider text-[11px]">
                        <th class="py-3 px-4 w-20">Image</th>
                        <th class="py-3 px-4">Service & Slug</th>
                        <th class="py-3 px-4">Short Summary</th>
                        <th class="py-3 px-4 w-28">Status</th>
                        <th class="py-3 px-4 w-32 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($this->services as $service)
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <!-- Image Thumbnail -->
                            <td class="py-3 px-4">
                                <div class="w-12 h-10 rounded-md bg-slate-100 border border-slate-200 overflow-hidden flex items-center justify-center shrink-0">
                                    @if($service->image)
                                        <img src="{{ Storage::url($service->image) }}" alt="{{ $service->name }}" class="w-full h-full object-cover">
                                    @else
                                        <i class="ri-customer-service-2-line text-slate-400 text-base"></i>
                                    @endif
                                </div>
                            </td>

                            <!-- Name & Slug -->
                            <td class="py-3 px-4 max-w-xs">
                                <div class="font-semibold text-slate-800 text-xs">{{ $service->name }}</div>
                                <div class="text-[11px] font-mono text-[#FF8B02] font-medium truncate">/service/{{ $service->slug }}</div>
                            </td>

                            <!-- Short Summary -->
                            <td class="py-3 px-4 max-w-md">
                                <p class="text-slate-600 text-xs line-clamp-2 leading-relaxed">
                                    {{ $service->short_description ?: 'No short description provided.' }}
                                </p>
                            </td>

                            <!-- Status Toggle -->
                            <td class="py-3 px-4">
                                <button wire:click="toggleActive({{ $service->id }})" 
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-[11px] font-semibold cursor-pointer border transition-colors {{ $service->is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-200 hover:bg-emerald-100' : 'bg-slate-100 text-slate-600 border-slate-200 hover:bg-slate-200' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $service->is_active ? 'bg-emerald-500' : 'bg-slate-400' }}"></span>
                                    <span>{{ $service->is_active ? 'Active' : 'Inactive' }}</span>
                                </button>
                            </td>

                            <!-- Actions -->
                            <td class="py-3 px-4 text-right space-x-1">
                                <a href="{{ route('admin.services.edit', $service->id) }}" wire:navigate 
                                   title="Edit Service" 
                                   class="inline-flex items-center justify-center w-7 h-7 rounded-md bg-slate-100 hover:bg-[#FFF4E5] text-slate-600 hover:text-[#FF8B02] border border-slate-200 transition-colors cursor-pointer">
                                    <i class="ri-edit-line text-xs"></i>
                                </a>
                                <button wire:click="confirmDelete({{ $service->id }})" 
                                        title="Delete Service" 
                                        class="inline-flex items-center justify-center w-7 h-7 rounded-md bg-slate-100 hover:bg-rose-50 text-slate-600 hover:text-rose-600 border border-slate-200 transition-colors cursor-pointer">
                                    <i class="ri-delete-bin-line text-xs"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="5" class="py-10 text-center text-slate-400">
                                <p class="text-xs font-medium text-slate-500">No services found.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($this->services->hasPages())
            <div class="p-3 border-t border-slate-200 bg-[#FAF9F5]">
                {{ $this->services->links() }}
            </div>
        @endif
    </div>

    <!-- ALPINE DELETE MODAL -->
    <div x-show="deleteOpen" 
         x-cloak 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs">
        
        <div x-show="deleteOpen"
             x-transition:enter="transition ease-out duration-200 transform"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-150 transform"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             @click.away="deleteOpen = false"
             class="w-full max-w-md bg-white rounded-md border border-slate-200 shadow-xl overflow-hidden">

            <div class="px-5 py-3 border-b border-slate-200 bg-[#FAF9F5] flex items-center justify-between">
                <h3 class="text-sm font-semibold text-slate-800">Delete Service</h3>
                <button @click="deleteOpen = false" class="text-slate-400 hover:text-slate-600 rounded-md p-1 transition-colors cursor-pointer">
                    <i class="ri-close-line text-base"></i>
                </button>
            </div>

            <div class="p-5 space-y-4">
                <p class="text-xs text-slate-600">
                    Are you sure you want to delete <strong class="text-slate-900 font-semibold">'{{ $deletingServiceName }}'</strong>? This action will permanently remove the service.
                </p>

                <div class="pt-3 border-t border-slate-100 flex items-center justify-end gap-2">
                    <button type="button" 
                            @click="deleteOpen = false" 
                            class="px-3.5 py-1.5 text-xs font-medium text-slate-600 hover:bg-slate-100 border border-slate-200 rounded-md transition-colors cursor-pointer">
                        Cancel
                    </button>
                    <button type="button" 
                            wire:click="deleteService" 
                            class="px-4 py-1.5 text-xs font-medium text-white bg-rose-600 hover:bg-rose-700 rounded-md transition-colors cursor-pointer">
                        Delete
                    </button>
                </div>
            </div>

        </div>
    </div>

</div>