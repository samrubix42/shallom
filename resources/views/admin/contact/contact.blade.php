<div x-data="{ 
        open: false, 
        mode: 'view', 
        title: 'Enquiry Details',
        init() {
            Livewire.on('open-modal', (data) => {
                this.mode = data.mode || 'view';
                this.title = data.title || 'Enquiry Modal';
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

    <!-- HEADER & STATS -->
    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 pb-2 border-b border-slate-200">
        <div>
            <div class="flex items-center gap-2">
                <h1 class="text-xl font-semibold text-slate-800">Contact Enquiries</h1>
                @if($this->unreadCount > 0)
                    <span class="bg-amber-500 text-white text-[10px] font-bold px-2 py-0.5 rounded-full shadow-xs">
                        {{ $this->unreadCount }} New
                    </span>
                @endif
            </div>
            <p class="text-xs text-slate-500">View and manage customer inquiries submitted via website contact form</p>
        </div>

        <!-- SEARCH & FILTER BAR -->
        <div class="flex items-center gap-3">
            <div class="relative">
                <i wire:loading.remove wire:target="search" class="ri-search-line absolute left-3 top-1/2 -translate-y-1/2 text-slate-400 text-xs"></i>
                <i wire:loading wire:target="search" class="ri-loader-4-line absolute left-3 top-1/2 -translate-y-1/2 text-[#FF8B02] text-xs animate-spin"></i>
                <input type="text" 
                       wire:model.live.debounce.300ms="search" 
                       placeholder="Search name, phone, email..." 
                       class="w-48 sm:w-64 pl-8 pr-3 py-1.5 bg-white border border-slate-200 rounded-md text-xs text-slate-800 placeholder-slate-400 focus:outline-none focus:border-[#FF8B02]" />
            </div>

            <div class="relative">
                <select wire:model.live="status" class="bg-white border border-slate-200 rounded-md px-3 py-1.5 pr-8 text-xs text-slate-700 focus:outline-none focus:border-[#FF8B02]">
                    <option value="all">All Enquiries</option>
                    <option value="unread">Unread Only</option>
                    <option value="read">Read Only</option>
                </select>
                <i wire:loading wire:target="status" class="ri-loader-4-line absolute right-2 top-1/2 -translate-y-1/2 text-[#FF8B02] text-xs animate-spin pointer-events-none"></i>
            </div>
        </div>
    </div>

    <!-- CONTACTS TABLE CONTAINER -->
    <div class="bg-white rounded-md border border-slate-200 overflow-hidden shadow-xs relative">
        
        <!-- TABLE LOADING BAR OVERLAY -->
        <div wire:loading.delay wire:target="search, status, gotoPage, previousPage, nextPage" 
             class="absolute inset-0 bg-white/60 backdrop-blur-[1px] z-10 flex items-center justify-center">
            <div class="inline-flex items-center gap-2 bg-slate-900 text-white px-3.5 py-1.5 rounded-full text-xs font-semibold shadow-md">
                <i class="ri-loader-4-line text-sm animate-spin text-[#FF8B02]"></i>
                <span>Loading Enquiries...</span>
            </div>
        </div>

        <div class="overflow-x-auto">
            <table class="w-full text-left border-collapse text-xs">
                <thead>
                    <tr class="bg-[#FAF9F5] border-b border-slate-200 text-slate-600 font-semibold uppercase tracking-wider text-[11px]">
                        <th class="py-3 px-4 w-32">Date</th>
                        <th class="py-3 px-4">Name</th>
                        <th class="py-3 px-4">Phone Number</th>
                        <th class="py-3 px-4">Email</th>
                        <th class="py-3 px-4">Requirement</th>
                        <th class="py-3 px-4">Location</th>
                        <th class="py-3 px-4 w-24">Status</th>
                        <th class="py-3 px-4 w-32 text-right">Actions</th>
                    </tr>
                </thead>
                <tbody class="divide-y divide-slate-100">
                    @forelse($this->contacts as $contact)
                        <tr class="hover:bg-slate-50/80 transition-colors {{ !$contact->is_read ? 'bg-amber-50/30 font-medium' : '' }}">
                            <!-- Date -->
                            <td class="py-3 px-4 whitespace-nowrap text-slate-500 text-[11px]">
                                {{ $contact->created_at->format('d M Y') }}
                                <div class="text-[10px] text-slate-400">{{ $contact->created_at->format('h:i A') }}</div>
                            </td>

                            <!-- Name -->
                            <td class="py-3 px-4">
                                <span class="font-semibold text-slate-900">{{ $contact->name }}</span>
                            </td>

                            <!-- Phone -->
                            <td class="py-3 px-4 font-mono text-slate-700">
                                <a href="tel:{{ $contact->phone }}" class="hover:text-[#FF8B02] hover:underline">
                                    {{ $contact->phone }}
                                </a>
                            </td>

                            <!-- Email -->
                            <td class="py-3 px-4 text-slate-600">
                                @if($contact->email)
                                    <a href="mailto:{{ $contact->email }}" class="hover:text-[#FF8B02] hover:underline">
                                        {{ $contact->email }}
                                    </a>
                                @else
                                    <span class="text-slate-400 italic">Not provided</span>
                                @endif
                            </td>

                            <!-- Requirement -->
                            <td class="py-3 px-4 text-slate-700">
                                <span class="inline-block bg-slate-100 text-slate-700 px-2 py-0.5 rounded text-[11px]">
                                    {{ $contact->building_interest ?: 'General Enquiry' }}
                                </span>
                            </td>

                            <!-- Location -->
                            <td class="py-3 px-4 text-slate-600">
                                {{ $contact->project_location ?: 'N/A' }}
                            </td>

                            <!-- Status -->
                            <td class="py-3 px-4">
                                <button wire:click="toggleReadStatus({{ $contact->id }})" 
                                        wire:loading.attr="disabled"
                                        class="inline-flex items-center gap-1.5 px-2 py-0.5 rounded text-[10px] font-bold uppercase tracking-wider cursor-pointer border transition-colors disabled:opacity-50 {{ $contact->is_read ? 'bg-slate-100 text-slate-600 border-slate-200 hover:bg-slate-200' : 'bg-amber-100 text-amber-800 border-amber-300 hover:bg-amber-200' }}">
                                    <i wire:loading wire:target="toggleReadStatus({{ $contact->id }})" class="ri-loader-4-line text-[11px] animate-spin"></i>
                                    <span wire:loading.remove wire:target="toggleReadStatus({{ $contact->id }})" class="w-1.5 h-1.5 rounded-full {{ $contact->is_read ? 'bg-slate-400' : 'bg-amber-600' }}"></span>
                                    <span>{{ $contact->is_read ? 'Read' : 'New' }}</span>
                                </button>
                            </td>

                            <!-- Actions -->
                            <td class="py-3 px-4 text-right space-x-1 whitespace-nowrap">
                                <button wire:click="viewContact({{ $contact->id }})" 
                                        wire:loading.attr="disabled"
                                        title="View Details" 
                                        class="inline-flex items-center justify-center w-7 h-7 rounded-md bg-slate-100 hover:bg-[#FFF4E5] text-slate-600 hover:text-[#FF8B02] border border-slate-200 transition-colors cursor-pointer disabled:opacity-50">
                                    <i wire:loading.remove wire:target="viewContact({{ $contact->id }})" class="ri-eye-line text-xs"></i>
                                    <i wire:loading wire:target="viewContact({{ $contact->id }})" class="ri-loader-4-line text-xs animate-spin"></i>
                                </button>
                                <button wire:click="confirmDelete({{ $contact->id }})" 
                                        wire:loading.attr="disabled"
                                        title="Delete Enquiry" 
                                        class="inline-flex items-center justify-center w-7 h-7 rounded-md bg-slate-100 hover:bg-rose-50 text-slate-600 hover:text-rose-600 border border-slate-200 transition-colors cursor-pointer disabled:opacity-50">
                                    <i wire:loading.remove wire:target="confirmDelete({{ $contact->id }})" class="ri-delete-bin-line text-xs"></i>
                                    <i wire:loading wire:target="confirmDelete({{ $contact->id }})" class="ri-loader-4-line text-xs animate-spin"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="8" class="py-12 text-center text-slate-400">
                                <i class="ri-inbox-archive-line text-3xl text-slate-300 block mb-2"></i>
                                <p class="text-xs font-medium text-slate-500">No contact enquiries found.</p>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>

        @if($this->contacts->hasPages())
            <div class="px-4 py-3 border-t border-slate-200 bg-[#FAF9F5]">
                {{ $this->contacts->links() }}
            </div>
        @endif
    </div>

    <!-- MODAL POPUP -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 overflow-y-auto bg-slate-900/40 backdrop-blur-xs flex items-center justify-center p-4"
         style="display: none;">
        
        <div @click.away="open = false" 
             class="bg-white rounded-lg border border-slate-200 shadow-xl max-w-lg w-full overflow-hidden">
            
            <!-- Modal Header -->
            <div class="px-5 py-4 border-b border-slate-100 flex items-center justify-between bg-[#FAF9F5]">
                <h3 class="text-sm font-bold text-slate-800 uppercase tracking-wider" x-text="title"></h3>
                <button @click="open = false" class="text-slate-400 hover:text-slate-600">
                    <i class="ri-close-line text-lg"></i>
                </button>
            </div>

            <!-- VIEW MODAL CONTENT -->
            <template x-if="mode === 'view'">
                <div class="p-6 space-y-4">
                    @if($selectedContact)
                        <div class="grid grid-cols-2 gap-4 text-xs">
                            <div>
                                <span class="text-slate-400 uppercase tracking-wider text-[10px] font-bold block">Customer Name</span>
                                <span class="font-bold text-slate-900 text-sm">{{ $selectedContact->name }}</span>
                            </div>
                            <div>
                                <span class="text-slate-400 uppercase tracking-wider text-[10px] font-bold block">Submission Date</span>
                                <span class="font-semibold text-slate-700">{{ $selectedContact->created_at->format('d M Y, h:i A') }}</span>
                            </div>
                            <div>
                                <span class="text-slate-400 uppercase tracking-wider text-[10px] font-bold block">Phone Number</span>
                                <a href="tel:{{ $selectedContact->phone }}" class="font-mono font-bold text-[#FF8B02] hover:underline">
                                    {{ $selectedContact->phone }}
                                </a>
                            </div>
                            <div>
                                <span class="text-slate-400 uppercase tracking-wider text-[10px] font-bold block">Email Address</span>
                                <span class="font-semibold text-slate-700">{{ $selectedContact->email ?: 'Not provided' }}</span>
                            </div>
                            <div>
                                <span class="text-slate-400 uppercase tracking-wider text-[10px] font-bold block">Product Requirement</span>
                                <span class="font-semibold text-slate-800">{{ $selectedContact->building_interest ?: 'General Enquiry' }}</span>
                            </div>
                            <div>
                                <span class="text-slate-400 uppercase tracking-wider text-[10px] font-bold block">Project Location</span>
                                <span class="font-semibold text-slate-800">{{ $selectedContact->project_location ?: 'N/A' }}</span>
                            </div>
                        </div>

                        <div class="pt-2 border-t border-slate-100">
                            <span class="text-slate-400 uppercase tracking-wider text-[10px] font-bold block mb-1.5">Project Notes & Message</span>
                            <div class="bg-[#FAF9F5] p-3.5 rounded-md border border-slate-200 text-xs text-slate-800 leading-relaxed font-normal whitespace-pre-wrap">
                                {{ $selectedContact->message ?: 'No additional project notes provided.' }}
                            </div>
                        </div>

                        <div class="flex justify-end gap-2 pt-4 border-t border-slate-100">
                            <button @click="open = false" 
                                    class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold text-xs rounded-md transition-colors">
                                Close
                            </button>
                        </div>
                    @endif
                </div>
            </template>

            <!-- DELETE CONFIRMATION MODAL -->
            <template x-if="mode === 'delete'">
                <div class="p-6 space-y-4">
                    <p class="text-xs text-slate-600">
                        Are you sure you want to delete the enquiry from <strong class="text-slate-900">{{ $deletingContactName }}</strong>? This action cannot be undone.
                    </p>

                    <div class="flex justify-end gap-2 pt-2">
                        <button @click="open = false" 
                                class="px-4 py-2 bg-slate-100 hover:bg-slate-200 text-slate-700 font-semibold text-xs rounded-md transition-colors">
                            Cancel
                        </button>
                        <button wire:click="deleteContact" 
                                wire:loading.attr="disabled"
                                class="px-4 py-2 bg-rose-600 hover:bg-rose-700 disabled:opacity-50 text-white font-semibold text-xs rounded-md transition-colors shadow-xs flex items-center gap-1.5">
                            <i wire:loading wire:target="deleteContact" class="ri-loader-4-line text-xs animate-spin"></i>
                            <span wire:loading.remove wire:target="deleteContact">Delete Enquiry</span>
                            <span wire:loading wire:target="deleteContact">Deleting...</span>
                        </button>
                    </div>
                </div>
            </template>

        </div>
    </div>

</div>