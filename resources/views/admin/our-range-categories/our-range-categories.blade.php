<div x-data="{ 
        open: false, 
        mode: 'form', 
        title: 'Add Category',
        init() {
            Livewire.on('open-modal', (data) => {
                const payload = Array.isArray(data) ? data[0] : (data?.detail || data || {});
                this.mode = payload.mode || 'form';
                this.title = payload.title || 'Category Modal';
                this.open = true;
            });
            Livewire.on('close-modal', () => {
                this.open = false;
            });
        }
     }"
     @open-modal.window="open = true; mode = $event.detail.mode || 'form'; title = $event.detail.title || 'Category Modal'"
     @close-modal.window="open = false"
     @keydown.escape.window="open = false"
     class="space-y-4">

    <!-- HEADER & ACTIONS -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-3 pb-2">
        <div>
            <h1 class="text-xl font-semibold text-slate-800">Our Range Categories</h1>
            <p class="text-xs text-slate-500">Manage product categories for Shallom Prefab Systems catalog</p>
        </div>

        <div class="flex items-center gap-3">
            <!-- Search Input -->
            <div class="relative w-full sm:w-64">
                <i class="ri-search-line absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                <input wire:model.live.debounce.300ms="search" 
                       type="text" 
                       placeholder="Search categories..." 
                       class="w-full pl-8 pr-3 py-1.5 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02] focus:ring-1 focus:ring-[#FF8B02] transition-colors">
            </div>

            <!-- Add Button -->
            <button wire:click="openCreateModal" 
                    type="button"
                    class="shrink-0 inline-flex items-center gap-1.5 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-medium px-3.5 py-2 rounded-md text-xs transition-colors cursor-pointer shadow-xs">
                <i class="ri-add-line text-sm"></i>
                <span>Add Category</span>
            </button>
        </div>
    </div>

    <!-- CATEGORIES TABLE -->
    <div class="bg-white rounded-md border border-slate-200 overflow-hidden shadow-xs">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="bg-[#FAF9F5] border-b border-slate-200 text-slate-600 font-semibold uppercase tracking-wider text-[11px]">
                        <th class="py-3 px-4 w-16">ID</th>
                        <th class="py-3 px-4">Category Name</th>
                        <th class="py-3 px-4">Slug Identifier</th>
                        <th class="py-3 px-4 w-32 text-center">Items Count</th>
                        <th class="py-3 px-4 w-28">Status</th>
                        <th class="py-3 px-4 w-32 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($this->categories as $category)
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <!-- ID -->
                            <td class="py-3 px-4 font-mono text-slate-400">
                                #{{ $category->id }}
                            </td>

                            <!-- Name -->
                            <td class="py-3 px-4">
                                <div class="font-semibold text-slate-800">{{ $category->name }}</div>
                            </td>

                            <!-- Slug -->
                            <td class="py-3 px-4">
                                <span class="font-mono text-[11px] bg-slate-100 text-slate-600 px-2 py-0.5 rounded-md border border-slate-200">
                                    {{ $category->slug }}
                                </span>
                            </td>

                            <!-- Items Count -->
                            <td class="py-3 px-4 text-center">
                                <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[11px] font-medium bg-amber-50 text-amber-700 border border-amber-200">
                                    <i class="ri-box-3-line text-[10px]"></i>
                                    <span>{{ $category->our_ranges_count }} products</span>
                                </span>
                            </td>

                            <!-- Status Toggle -->
                            <td class="py-3 px-4">
                                <button wire:click="toggleActive({{ $category->id }})" 
                                        type="button"
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-[11px] font-semibold cursor-pointer border transition-colors {{ $category->is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-200 hover:bg-emerald-100' : 'bg-slate-100 text-slate-600 border-slate-200 hover:bg-slate-200' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $category->is_active ? 'bg-emerald-500' : 'bg-slate-400' }}"></span>
                                    <span>{{ $category->is_active ? 'Active' : 'Inactive' }}</span>
                                </button>
                            </td>

                            <!-- Actions -->
                            <td class="py-3 px-4 text-right space-x-1">
                                <button wire:click="editCategory({{ $category->id }})" 
                                        type="button"
                                        title="Edit Category" 
                                        class="inline-flex items-center justify-center w-7 h-7 rounded-md bg-slate-100 hover:bg-[#FFF4E5] text-slate-600 hover:text-[#FF8B02] border border-slate-200 transition-colors cursor-pointer">
                                    <i class="ri-edit-line text-xs"></i>
                                </button>
                                <button wire:click="confirmDelete({{ $category->id }})" 
                                        type="button"
                                        title="Delete Category" 
                                        class="inline-flex items-center justify-center w-7 h-7 rounded-md bg-slate-100 hover:bg-rose-50 text-slate-600 hover:text-rose-600 border border-slate-200 transition-colors cursor-pointer">
                                    <i class="ri-delete-bin-line text-xs"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="6" class="py-10 text-center text-slate-400">
                                <i class="ri-folder-unknow-line text-2xl mb-1 block"></i>
                                <p class="text-xs font-medium text-slate-500">No category records found.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($this->categories->hasPages())
            <div class="px-4 py-3 border-t border-slate-100 bg-[#FAF9F5]">
                {{ $this->categories->links() }}
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
            
            <!-- MODAL HEADER -->
            <div class="px-5 py-3 border-b border-slate-200 bg-[#FAF9F5] flex items-center justify-between">
                <h3 class="text-sm font-semibold text-slate-800" id="modal-title" x-text="title"></h3>
                <button type="button" @click="open = false" class="text-slate-400 hover:text-slate-600 rounded-md p-1 transition-colors cursor-pointer">
                    <i class="ri-close-line text-base"></i>
                </button>
            </div>

            <!-- FORM MODAL BODY -->
            <div x-show="mode === 'form'">
                <form wire:submit="save" class="p-5 space-y-4 text-xs">
                    
                    <!-- Name -->
                    <div class="space-y-1">
                        <label class="block font-semibold text-slate-700">Category Name <span class="text-rose-500">*</span></label>
                        <input wire:model="name" 
                               type="text" 
                               placeholder="e.g. Prefab Portable Houses" 
                               class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02] focus:ring-1 focus:ring-[#FF8B02]">
                        @error('name') <span class="text-rose-500 text-[11px] block mt-0.5">{{ $message }}</span> @enderror
                    </div>

                    <!-- Slug -->
                    <div class="space-y-1">
                        <label class="block font-semibold text-slate-700">
                            Slug Identifier 
                            <span class="text-[10px] text-slate-400 font-normal">(Auto-generated if left blank)</span>
                        </label>
                        <input wire:model="slug" 
                               type="text" 
                               placeholder="e.g. prefab-portable-houses" 
                               class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-xs font-mono focus:outline-none focus:border-[#FF8B02] focus:ring-1 focus:ring-[#FF8B02]">
                        @error('slug') <span class="text-rose-500 text-[11px] block mt-0.5">{{ $message }}</span> @enderror
                    </div>

                    <!-- Is Active -->
                    <div class="pt-1">
                        <label class="inline-flex items-center gap-2 cursor-pointer">
                            <input wire:model="is_active" type="checkbox" class="rounded border-slate-300 text-[#FF8B02] focus:ring-[#FF8B02] h-4 w-4">
                            <span class="font-medium text-slate-700">Active (Visible in Catalog)</span>
                        </label>
                    </div>

                    <!-- FOOTER ACTIONS -->
                    <div class="pt-3 border-t border-slate-100 flex items-center justify-end gap-2">
                        <button type="button" @click="open = false" 
                                class="px-3.5 py-1.5 border border-slate-200 rounded-md text-slate-600 hover:bg-slate-50 font-medium transition-colors cursor-pointer">
                            Cancel
                        </button>
                        <button type="submit" 
                                wire:loading.attr="disabled"
                                class="px-4 py-1.5 bg-[#FF8B02] hover:bg-[#E67A00] text-white rounded-md font-medium transition-colors shadow-xs cursor-pointer disabled:opacity-50 inline-flex items-center gap-1">
                            <span wire:loading wire:target="save" class="animate-spin text-xs"><i class="ri-loader-4-line"></i></span>
                            <span>Save Category</span>
                        </button>
                    </div>
                </form>
            </div>

            <!-- DELETE CONFIRMATION MODAL BODY -->
            <div x-show="mode === 'delete'">
                <div class="p-5 space-y-4 text-xs">
                    <div class="flex items-start gap-3">
                        <div class="w-9 h-9 rounded-full bg-rose-100 text-rose-600 flex items-center justify-center shrink-0">
                            <i class="ri-error-warning-line text-lg"></i>
                        </div>
                        <div>
                            <h4 class="font-semibold text-slate-800 text-sm">Delete Range Category</h4>
                            <p class="text-slate-500 mt-1">
                                Are you sure you want to delete <strong class="text-slate-800">'{{ $deletingCategoryName }}'</strong>? This action cannot be undone.
                            </p>
                        </div>
                    </div>

                    <!-- FOOTER ACTIONS -->
                    <div class="pt-3 border-t border-slate-100 flex items-center justify-end gap-2">
                        <button type="button" @click="open = false" 
                                class="px-3.5 py-1.5 border border-slate-200 rounded-md text-slate-600 hover:bg-slate-50 font-medium transition-colors cursor-pointer">
                            Cancel
                        </button>
                        <button type="button" wire:click="deleteCategory" 
                                class="px-4 py-1.5 bg-rose-600 hover:bg-rose-700 text-white rounded-md font-medium transition-colors shadow-xs cursor-pointer">
                            Yes, Delete
                        </button>
                    </div>
                </div>
            </div>

        </div>
    </div>

</div>
