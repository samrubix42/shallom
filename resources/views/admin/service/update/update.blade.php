@section('title', 'Edit Service | Admin Control Center')
@section('meta_description', 'Update and edit existing service details for Shallom Prefab Systems.')

<div class="max-w-4xl mx-auto space-y-6">

    <!-- HEADER & BREADCRUMB -->
    <div class="flex items-center justify-between border-b border-slate-200 pb-4">
        <div>
            <div class="flex items-center gap-2 text-xs text-slate-500 mb-1">
                <a href="{{ route('admin.services.list') }}" wire:navigate class="hover:text-[#FF8B02] transition-colors">Services</a>
                <i class="ri-arrow-right-s-line text-slate-400"></i>
                <span class="text-slate-700 font-medium">Edit Service</span>
            </div>
            <h1 class="text-xl font-semibold text-slate-800">Edit Service: {{ $service->name }}</h1>
        </div>

        <a href="{{ route('admin.services.list') }}" wire:navigate 
           class="inline-flex items-center gap-1.5 px-3.5 py-1.5 text-xs font-medium text-slate-600 bg-white border border-slate-300 rounded-md hover:bg-slate-50 transition-colors">
            <i class="ri-arrow-left-line text-sm"></i>
            <span>Back to Services</span>
        </a>
    </div>

    <!-- EDIT SERVICE FORM CARD -->
    <div class="bg-white rounded-md border border-slate-200 shadow-xs overflow-hidden">
        <form wire:submit="save" class="p-6 space-y-5">
            
            <!-- Name & Slug Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                <div class="space-y-1.5">
                    <label class="block text-xs font-medium text-slate-700">Service Name <span class="text-rose-500">*</span></label>
                    <input type="text" 
                           wire:model.live.debounce.200ms="name" 
                           placeholder="e.g. Modular Executive Cabins" 
                           class="w-full px-3.5 py-2 text-xs bg-white border border-slate-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#FF8B02] focus:border-[#FF8B02] @error('name') border-rose-500 @enderror" />
                    @error('name') <span class="text-[11px] text-rose-500 font-medium block">{{ $message }}</span> @enderror
                </div>

                <div class="space-y-1.5">
                    <label class="block text-xs font-medium text-slate-700">URL Slug <span class="text-rose-500">*</span></label>
                    <div class="relative">
                        <input type="text" 
                               wire:model="slug" 
                               placeholder="modular-executive-cabins" 
                               class="w-full px-3.5 py-2 text-xs bg-white border border-slate-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#FF8B02] focus:border-[#FF8B02] font-mono text-slate-700 @error('slug') border-rose-500 @enderror" />
                    </div>
                    @error('slug') <span class="text-[11px] text-rose-500 font-medium block">{{ $message }}</span> @enderror
                </div>
            </div>

            <!-- Short Description -->
            <div class="space-y-1.5">
                <label class="block text-xs font-medium text-slate-700">Short Summary / Tagline</label>
                <textarea wire:model="short_description" 
                          rows="2" 
                          placeholder="Brief summary displayed on cards and overview pages..." 
                          class="w-full px-3.5 py-2 text-xs bg-white border border-slate-300 rounded-md focus:outline-none focus:ring-1 focus:ring-[#FF8B02] focus:border-[#FF8B02] @error('short_description') border-rose-500 @enderror"></textarea>
                @error('short_description') <span class="text-[11px] text-rose-500 font-medium block">{{ $message }}</span> @enderror
            </div>

            <!-- Full Description (TinyMCE Rich Text Editor) -->
            <div x-data="{
                    value: @entangle('description'),
                    initTinyMCE() {
                        if (typeof tinymce === 'undefined') return;
                        tinymce.remove($refs.editor);
                        tinymce.init({
                            target: $refs.editor,
                            plugins: 'advlist autolink lists link image charmap preview anchor searchreplace visualblocks code fullscreen insertdatetime media table code help wordcount',
                            toolbar: 'undo redo | blocks | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | code',
                            height: 320,
                            branding: false,
                            promotion: false,
                            setup: (editor) => {
                                editor.on('init', () => {
                                    if (this.value) {
                                        editor.setContent(this.value);
                                    }
                                });
                                editor.on('change keyup blur input', () => {
                                    this.value = editor.getContent();
                                });
                            }
                        });
                    }
                 }"
                 x-init="initTinyMCE()"
                 wire:ignore
                 class="space-y-1.5">
                <label class="block text-xs font-medium text-slate-700">Full Service Description (Rich Text Editor)</label>
                <textarea x-ref="editor" class="w-full text-xs bg-white border border-slate-300 rounded-md"></textarea>
                @error('description') <span class="text-[11px] text-rose-500 font-medium block">{{ $message }}</span> @enderror
            </div>

            <!-- Single Service Image Upload -->
            <div class="pt-2 border-t border-slate-100 space-y-2">
                <label class="block text-xs font-medium text-slate-700">Service Image</label>
                <div class="flex items-center gap-4">
                    <div class="w-20 h-16 bg-slate-100 rounded-md border border-slate-200 flex items-center justify-center overflow-hidden shrink-0">
                        @if ($image)
                            <img src="{{ $image->temporaryUrl() }}" class="w-full h-full object-cover">
                        @elseif ($existingImage)
                            <img src="{{ Storage::url($existingImage) }}" class="w-full h-full object-cover">
                        @else
                            <i class="ri-image-add-line text-slate-400 text-xl"></i>
                        @endif
                    </div>
                    <input type="file" wire:model="image" accept="image/*" class="text-xs text-slate-500 file:mr-3 file:py-1.5 file:px-3 file:rounded-md file:border-0 file:text-xs file:font-semibold file:bg-[#FFF4E5] file:text-[#FF8B02] hover:file:bg-[#FFE6C7] cursor-pointer">
                </div>
                @error('image') <span class="text-[11px] text-rose-500 font-medium block">{{ $message }}</span> @enderror
            </div>

            <!-- Status Checkbox -->
            <div class="pt-2 border-t border-slate-100">
                <label class="inline-flex items-center gap-2 cursor-pointer">
                    <input type="checkbox" wire:model="is_active" class="rounded-md border-slate-300 text-[#FF8B02] focus:ring-[#FF8B02] h-4 w-4" />
                    <span class="text-xs font-medium text-slate-700">Active (Publish immediately on main site)</span>
                </label>
            </div>

            <!-- Form Actions -->
            <div class="pt-4 border-t border-slate-200 flex items-center justify-end gap-3">
                <a href="{{ route('admin.services.list') }}" wire:navigate 
                   class="px-4 py-2 text-xs font-medium text-slate-600 hover:bg-slate-100 border border-slate-200 rounded-md transition-colors cursor-pointer">
                    Cancel
                </a>
                <button type="submit" 
                        wire:loading.attr="disabled" 
                        class="inline-flex items-center gap-1.5 px-5 py-2 text-xs font-medium text-white bg-[#FF8B02] hover:bg-[#E67A00] rounded-md transition-colors cursor-pointer disabled:opacity-50 shadow-xs">
                    <span wire:loading wire:target="save" class="animate-spin text-xs"><i class="ri-loader-4-line"></i></span>
                    <span>Update Service</span>
                </button>
            </div>

        </form>
    </div>

</div>