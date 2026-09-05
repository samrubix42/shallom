@section('title', 'Manage Products & Ranges | Admin Control Center')
@section('meta_description', 'Manage product listings, specifications, and images for Shallom Prefab Systems.')

<div x-data="{ 
        open: false, 
        mode: 'form', 
        title: 'Add Product',
        init() {
            Livewire.on('open-modal', (data) => {
                const payload = Array.isArray(data) ? data[0] : (data?.detail || data || {});
                this.mode = payload.mode || 'form';
                this.title = payload.title || 'Product Modal';
                this.open = true;
            });
            Livewire.on('close-modal', () => {
                this.open = false;
            });
        }
     }"
     @open-modal.window="open = true; mode = $event.detail.mode || 'form'; title = $event.detail.title || 'Product Modal'"
     @close-modal.window="open = false"
     @keydown.escape.window="open = false"
     class="space-y-4">

    <!-- HEADER & FILTERS -->
    <div class="flex flex-col md:flex-row md:items-center justify-between gap-3 pb-2">
        <div>
            <h1 class="text-xl font-semibold text-slate-800">Our Range Products</h1>
            <p class="text-xs text-slate-500">Manage technical catalog items, primary showcase photos, specs, and spec sheet PDFs</p>
        </div>

        <div class="flex flex-wrap items-center gap-3">
            <!-- Category Filter Dropdown -->
            <select wire:model.live="category_filter" 
                    class="py-1.5 px-3 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02] transition-colors">
                <option value="">All Categories</option>
                @foreach($this->categories as $cat)
                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                @endforeach
            </select>

            <!-- Search Input -->
            <div class="relative w-full sm:w-60">
                <i class="ri-search-line absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                <input wire:model.live.debounce.300ms="search" 
                       type="text" 
                       placeholder="Search products..." 
                       class="w-full pl-8 pr-3 py-1.5 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02] focus:ring-1 focus:ring-[#FF8B02] transition-colors">
            </div>

            <!-- Add Product Button -->
            <button wire:click="openCreateModal" 
                    type="button"
                    class="shrink-0 inline-flex items-center gap-1.5 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-medium px-3.5 py-2 rounded-md text-xs transition-colors cursor-pointer shadow-xs">
                <i class="ri-add-line text-sm"></i>
                <span>Add Product</span>
            </button>
        </div>
    </div>

    <!-- PRODUCTS TABLE -->
    <div class="bg-white rounded-md border border-slate-200 overflow-hidden shadow-xs">
        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="bg-[#FAF9F5] border-b border-slate-200 text-slate-600 font-semibold uppercase tracking-wider text-[11px]">
                        <th class="py-3 px-4 w-20">Primary Image</th>
                        <th class="py-3 px-4">Product Title</th>
                        <th class="py-3 px-4">Category</th>
                        <th class="py-3 px-4">MOQ & Info</th>
                        <th class="py-3 px-4 w-28 text-center">Specs</th>
                        <th class="py-3 px-4 w-28">Status</th>
                        <th class="py-3 px-4 w-28 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($this->ranges as $range)
                        @php
                            $mainImg = !empty($range->images) && isset($range->images[0]) ? $range->images[0] : null;
                            $photosCount = !empty($range->images) ? count($range->images) : 0;
                            $details = $range->details ?? [];
                            $specsCount = isset($details['specs']) && is_array($details['specs']) ? count($details['specs']) : 0;
                        @endphp
                        <tr class="hover:bg-slate-50/80 transition-colors">
                            <!-- Image Thumbnail -->
                            <td class="py-3 px-4">
                                <div class="w-14 h-10 bg-white border border-slate-200 rounded-md p-0.5 overflow-hidden flex items-center justify-center relative group">
                                    @if($mainImg)
                                        <img src="{{ asset($mainImg) }}" alt="{{ $range->title }}" class="w-full h-full object-cover rounded-xs" onerror="this.src='https://placehold.co/100x70/f8fafc/64748b?text=Range'">
                                        @if($photosCount > 1)
                                            <span class="absolute bottom-0.5 right-0.5 bg-slate-900/80 text-white text-[9px] font-bold px-1 rounded-xs">
                                                +{{ $photosCount - 1 }}
                                            </span>
                                        @endif
                                    @else
                                        <i class="ri-image-line text-slate-300 text-lg"></i>
                                    @endif
                                </div>
                            </td>

                            <!-- Title -->
                            <td class="py-3 px-4">
                                <div class="font-semibold text-slate-800">{{ $range->title }}</div>
                                <div class="flex items-center gap-2 mt-0.5">
                                    <span class="text-[10px] text-slate-500 font-medium">
                                        <i class="ri-image-2-line"></i> {{ $photosCount }} {{ Str::plural('photo', $photosCount) }}
                                    </span>
                                    @if($range->pdf)
                                        <span class="inline-flex items-center gap-0.5 text-[10px] text-red-600 font-medium">
                                            • <i class="ri-file-pdf-fill"></i> PDF Attached
                                        </span>
                                    @endif
                                </div>
                            </td>

                            <!-- Category -->
                            <td class="py-3 px-4">
                                <span class="inline-flex items-center gap-1 px-2.5 py-0.5 rounded-full text-[11px] font-medium bg-slate-100 text-slate-700 border border-slate-200">
                                    <i class="ri-folder-line text-[10px] text-slate-400"></i>
                                    <span>{{ $range->category?->name ?? 'Uncategorized' }}</span>
                                </span>
                            </td>

                            <!-- MOQ & Info -->
                            <td class="py-3 px-4">
                                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md text-[11px] font-semibold bg-emerald-50 text-emerald-700 border border-emerald-200">
                                    Price on Request
                                </span>
                                <div class="text-[10px] text-slate-500 mt-1">MOQ: {{ $details['moq'] ?? '1 sq ft' }}</div>
                            </td>

                            <!-- Specs Count -->
                            <td class="py-3 px-4 text-center">
                                <span class="inline-flex items-center gap-1 px-2 py-0.5 rounded-md text-[11px] font-mono bg-amber-50 text-amber-700 border border-amber-200">
                                    {{ $specsCount }} specs
                                </span>
                            </td>

                            <!-- Status Toggle -->
                            <td class="py-3 px-4">
                                <button wire:click="toggleActive({{ $range->id }})" 
                                        type="button"
                                        class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-md text-[11px] font-semibold cursor-pointer border transition-colors {{ $range->is_active ? 'bg-emerald-50 text-emerald-700 border-emerald-200 hover:bg-emerald-100' : 'bg-slate-100 text-slate-600 border-slate-200 hover:bg-slate-200' }}">
                                    <span class="w-1.5 h-1.5 rounded-full {{ $range->is_active ? 'bg-emerald-500' : 'bg-slate-400' }}"></span>
                                    <span>{{ $range->is_active ? 'Active' : 'Inactive' }}</span>
                                </button>
                            </td>

                            <!-- Actions -->
                            <td class="py-3 px-4 text-right space-x-1">
                                <button wire:click="editRange({{ $range->id }})" 
                                        type="button"
                                        title="Edit Product" 
                                        class="inline-flex items-center justify-center w-7 h-7 rounded-md bg-slate-100 hover:bg-[#FFF4E5] text-slate-600 hover:text-[#FF8B02] border border-slate-200 transition-colors cursor-pointer">
                                    <i class="ri-edit-line text-xs"></i>
                                </button>
                                <button wire:click="confirmDelete({{ $range->id }})" 
                                        type="button"
                                        title="Delete Product" 
                                        class="inline-flex items-center justify-center w-7 h-7 rounded-md bg-slate-100 hover:bg-rose-50 text-slate-600 hover:text-rose-600 border border-slate-200 transition-colors cursor-pointer">
                                    <i class="ri-delete-bin-line text-xs"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="7" class="py-10 text-center text-slate-400">
                                <i class="ri-box-3-line text-2xl mb-1 block"></i>
                                <p class="text-xs font-medium text-slate-500">No range product items found.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($this->ranges->hasPages())
            <div class="px-4 py-3 border-t border-slate-100 bg-[#FAF9F5]">
                {{ $this->ranges->links() }}
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
         class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs overflow-y-auto">
        
        <div x-show="open"
             x-transition:enter="transition ease-out duration-200 transform"
             x-transition:enter-start="opacity-0 scale-95"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-150 transform"
             x-transition:leave-start="opacity-100 scale-100"
             x-transition:leave-end="opacity-0 scale-95"
             @click.away="open = false"
             class="w-full max-w-2xl bg-white rounded-md border border-slate-200 shadow-xl overflow-hidden my-8 max-h-[90vh] flex flex-col">
            
            <!-- MODAL HEADER -->
            <div class="px-5 py-3.5 border-b border-slate-200 bg-[#FAF9F5] flex items-center justify-between shrink-0">
                <h3 class="text-sm font-semibold text-slate-800" id="modal-title" x-text="title"></h3>
                <button type="button" @click="open = false" class="text-slate-400 hover:text-slate-600 rounded-md p-1 transition-colors cursor-pointer">
                    <i class="ri-close-line text-base"></i>
                </button>
            </div>

            <!-- FORM MODAL BODY (SCROLLABLE) -->
            <div x-show="mode === 'form'" class="overflow-y-auto flex-1 p-5 space-y-4 text-xs">
                <form wire:submit="save" class="space-y-4">
                    
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                        <!-- Category -->
                        <div class="space-y-1 sm:col-span-1">
                            <label class="block font-semibold text-slate-700">Category <span class="text-rose-500">*</span></label>
                            <select wire:model="our_range_category_id" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                                <option value="">Select Category</option>
                                @foreach($this->categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                            @error('our_range_category_id') <span class="text-rose-500 text-[11px] block mt-0.5">{{ $message }}</span> @enderror
                        </div>

                        <!-- Title -->
                        <div class="space-y-1 sm:col-span-1">
                            <label class="block font-semibold text-slate-700">Product Title <span class="text-rose-500">*</span></label>
                            <input wire:model="title" type="text" placeholder="e.g. Prefab Portable House" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                            @error('title') <span class="text-rose-500 text-[11px] block mt-0.5">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <!-- Pricing & MOQ -->
                    <div class="grid grid-cols-3 gap-3">
                        <div class="space-y-1">
                            <label class="block font-semibold text-slate-700">Price <span class="text-[10px] text-slate-400 font-normal">(Optional)</span></label>
                            <input wire:model="price" type="text" placeholder="Price on Request" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                            @error('price') <span class="text-rose-500 text-[11px] block mt-0.5">{{ $message }}</span> @enderror
                        </div>
                        <div class="space-y-1">
                            <label class="block font-semibold text-slate-700">Unit <span class="text-[10px] text-slate-400 font-normal">(Optional)</span></label>
                            <input wire:model="price_unit" type="text" placeholder="e.g. sq ft" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                            @error('price_unit') <span class="text-rose-500 text-[11px] block mt-0.5">{{ $message }}</span> @enderror
                        </div>
                        <div class="space-y-1">
                            <label class="block font-semibold text-slate-700">MOQ <span class="text-rose-500">*</span></label>
                            <input wire:model="moq" type="text" placeholder="e.g. 100 sq ft" class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                            @error('moq') <span class="text-rose-500 text-[11px] block mt-0.5">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <!-- Description -->
                    <div class="space-y-1">
                        <label class="block font-semibold text-slate-700">Product Description</label>
                        <textarea wire:model="description" rows="3" placeholder="Brief technical summary of product system..." class="w-full px-3 py-2 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]"></textarea>
                        @error('description') <span class="text-rose-500 text-[11px] block mt-0.5">{{ $message }}</span> @enderror
                    </div>

                    <!-- DYNAMIC TECHNICAL SPECIFICATIONS BUILDER -->
                    <div class="space-y-2 p-3 bg-[#FAF9F5] border border-slate-200 rounded-md">
                        <div class="flex items-center justify-between">
                            <label class="block font-bold text-slate-800 text-xs">Technical Specifications Table</label>
                            <button type="button" wire:click="addSpecRow" class="inline-flex items-center gap-1 text-[11px] font-semibold text-[#FF8B02] hover:text-[#E67A00]">
                                <i class="ri-add-circle-line"></i> Add Spec Row
                            </button>
                        </div>

                        <div class="space-y-2">
                            @foreach($specs as $index => $spec)
                                <div class="flex items-center gap-2">
                                    <input type="text" wire:model="specs.{{ $index }}.key" placeholder="Specification Title (e.g. Material)" class="w-1/3 px-2.5 py-1.5 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                                    <input type="text" wire:model="specs.{{ $index }}.value" placeholder="Specification Value (e.g. 60mm PUF Panels)" class="flex-1 px-2.5 py-1.5 bg-white border border-slate-200 rounded-md text-xs focus:outline-none focus:border-[#FF8B02]">
                                    <button type="button" wire:click="removeSpecRow({{ $index }})" class="p-1 text-slate-400 hover:text-rose-600 transition-colors">
                                        <i class="ri-delete-bin-line text-sm"></i>
                                    </button>
                                </div>
                            @endforeach
                        </div>
                    </div>

                    <!-- MULTIPLE IMAGE UPLOAD WITH STAR ICON TO MARK PRIMARY -->
                    <div class="space-y-3 p-3 bg.slate-50 border border-slate-200 rounded-md">
                        <div class="flex items-center justify-between">
                            <label class="block font-bold text-slate-800 text-xs">
                                Product Photos (Select Multiple)
                            </label>
                            <span class="text-[10px] text-slate-500">
                                Click <i class="ri-star-fill text-amber-400"></i> Star icon on photo to set as <strong>Primary</strong>
                            </span>
                        </div>

                        <!-- Multiple Files Input -->
                        <div class="space-y-1">
                            <input type="file" wire:model="galleryFiles" multiple accept="image/*" class="w-full text-xs text-slate-500 file:mr-2 file:py-1 file:px-2.5 file:rounded-md file:border-0 file:text-xs file:font-medium file:bg-[#FFF4E5] file:text-[#FF8B02] hover:file:bg-[#FF8B02] hover:file:text-white transition-colors cursor-pointer border border-slate-200 rounded-md p-1" />
                            @error('galleryFiles.*') <span class="text-rose-500 text-[11px] block mt-0.5">{{ $message }}</span> @enderror
                        </div>

                        <!-- Image Preview Grid with Star Icon & Delete Icon -->
                        @if(!empty($existingImages) || !empty($galleryFiles))
                            <div class="pt-2 border-t border-slate-200">
                                <span class="text-[11px] font-semibold text-slate-600 mb-2 block">
                                    Uploaded Photos Gallery (Click Star to mark Primary):
                                </span>
                                
                                <div class="grid grid-cols-2 sm:grid-cols-4 gap-3">
                                    <!-- Existing Stored Images -->
                                    @foreach($existingImages as $idx => $img)
                                        @php $isPrimary = ($primaryIndex === $idx); @endphp
                                        <div class="relative aspect-[4/3] bg-slate-900 border-2 {{ $isPrimary ? 'border-amber-500 ring-2 ring-amber-500/20' : 'border-slate-200' }} rounded-lg overflow-hidden group">
                                            <img src="{{ asset($img) }}" class="w-full h-full object-cover">
                                            
                                            <!-- Primary Star Badge / Button -->
                                            <button type="button" 
                                                    wire:click="setPrimaryImage({{ $idx }})" 
                                                    title="{{ $isPrimary ? 'Primary Photo' : 'Click to set as Primary' }}"
                                                    class="absolute top-1 left-1 p-1 rounded-md transition-all cursor-pointer shadow-xs {{ $isPrimary ? 'bg-amber-500 text-white font-bold' : 'bg-slate-900/80 text-white/70 hover:text-amber-400 hover:bg-slate-900' }}">
                                                <i class="{{ $isPrimary ? 'ri-star-fill' : 'ri-star-line' }} text-xs"></i>
                                                @if($isPrimary)
                                                    <span class="text-[9px] uppercase tracking-wider ml-0.5">Primary</span>
                                                @endif
                                            </button>

                                            <!-- Remove Image Button -->
                                            <button type="button" 
                                                    wire:click="removeExistingImage({{ $idx }})" 
                                                    title="Remove Photo"
                                                    class="absolute top-1 right-1 bg-slate-900/80 hover:bg-rose-600 text-white w-6 h-6 rounded-md flex items-center justify-center transition-colors cursor-pointer">
                                                <i class="ri-delete-bin-line text-xs"></i>
                                            </button>
                                        </div>
                                    @endforeach

                                    <!-- Newly Uploaded Pending Files -->
                                    @foreach($galleryFiles as $gIdx => $gFile)
                                        <div class="relative aspect-[4/3] bg-slate-900 border border-blue-300 rounded-lg overflow-hidden group">
                                            <img src="{{ $gFile->temporaryUrl() }}" class="w-full h-full object-cover">
                                            <span class="absolute top-1 left-1 bg-blue-600 text-white text-[9px] font-bold px-1.5 py-0.5 rounded-md shadow-xs">
                                                New
                                            </span>
                                            <button type="button" 
                                                    wire:click="removeGalleryFile({{ $gIdx }})" 
                                                    title="Remove Photo"
                                                    class="absolute top-1 right-1 bg-slate-900/80 hover:bg-rose-600 text-white w-6 h-6 rounded-md flex items-center justify-center transition-colors cursor-pointer">
                                                <i class="ri-close-line text-xs"></i>
                                            </button>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        @endif

                        <!-- PDF Spec Sheet Input -->
                        <div class="pt-2 border-t border-slate-200/80">
                            <label class="block font-semibold text-slate-700 text-[11px] mb-1">PDF Spec Sheet Document</label>
                            <input type="file" wire:model="pdfFile" accept="application/pdf" class="w-full text-xs text-slate-500 file:mr-2 file:py-1 file:px-2.5 file:rounded-md file:border-0 file:text-xs file:font-medium file:bg-red-50 file:text-red-600 hover:file:bg-red-600 hover:file:text-white transition-colors cursor-pointer border border-slate-200 rounded-md p-1" />
                            @if($existingPdf)
                                <div class="p-2 bg-emerald-50 border border-emerald-200 rounded-md text-[11px] text-emerald-700 font-medium flex items-center gap-1 mt-1">
                                    <i class="ri-file-pdf-fill text-red-500"></i>
                                    <span>Attached: {{ basename($existingPdf) }}</span>
                                </div>
                            @endif
                            @error('pdfFile') <span class="text-rose-500 text-[11px] block mt-0.5">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <!-- Status Checkbox -->
                    <div class="pt-1">
                        <label class="inline-flex items-center gap-2 cursor-pointer">
                            <input wire:model="is_active" type="checkbox" class="rounded border-slate-300 text-[#FF8B02] focus:ring-[#FF8B02] h-4 w-4">
                            <span class="font-medium text-slate-700">Active (Published on Catalog)</span>
                        </label>
                    </div>

                    <!-- FOOTER ACTIONS -->
                    <div class="pt-3 border-t border-slate-100 flex items-center justify-end gap-2 shrink-0">
                        <button type="button" @click="open = false" 
                                class="px-3.5 py-1.5 border border-slate-200 rounded-md text-slate-600 hover:bg-slate-50 font-medium transition-colors cursor-pointer">
                            Cancel
                        </button>
                        <button type="submit" 
                                wire:loading.attr="disabled"
                                class="px-4 py-1.5 bg-[#FF8B02] hover:bg-[#E67A00] text-white rounded-md font-medium transition-colors shadow-xs cursor-pointer disabled:opacity-50 inline-flex items-center gap-1">
                            <span wire:loading wire:target="save, galleryFiles, pdfFile" class="animate-spin text-xs"><i class="ri-loader-4-line"></i></span>
                            <span>Save Product</span>
                        </button>
                    </div>

                </form>
            </div>

            <!-- DELETE CONFIRMATION MODAL BODY -->
            <div x-show="mode === 'delete'" class="p-5 space-y-4 text-xs">
                <div class="flex items-start gap-3">
                    <div class="w-9 h-9 rounded-full bg-rose-100 text-rose-600 flex items-center justify-center shrink-0">
                        <i class="ri-error-warning-line text-lg"></i>
                    </div>
                    <div>
                        <h4 class="font-semibold text-slate-800 text-sm">Delete Range Product</h4>
                        <p class="text-slate-500 mt-1">
                            Are you sure you want to delete <strong class="text-slate-800">'{{ $deletingRangeTitle }}'</strong>? This action cannot be undone.
                        </p>
                    </div>
                </div>

                <!-- FOOTER ACTIONS -->
                <div class="pt-3 border-t border-slate-100 flex items-center justify-end gap-2">
                    <button type="button" @click="open = false" 
                            class="px-3.5 py-1.5 border border-slate-200 rounded-md text-slate-600 hover:bg-slate-50 font-medium transition-colors cursor-pointer">
                        Cancel
                    </button>
                    <button type="button" wire:click="deleteRange" 
                            class="px-4 py-1.5 bg-rose-600 hover:bg-rose-700 text-white rounded-md font-medium transition-colors shadow-xs cursor-pointer">
                        Yes, Delete
                    </button>
                </div>
            </div>

        </div>
    </div>

</div>
