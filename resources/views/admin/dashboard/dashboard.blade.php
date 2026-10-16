@section('title', 'Admin Dashboard | Shallom Prefab Systems')
@section('meta_description', 'Shallom Prefab Systems admin control center.')

<div x-data="{ 
        open: false, 
        init() {
            Livewire.on('open-modal', () => { this.open = true; });
            Livewire.on('close-modal', () => { this.open = false; });
        }
     }"
     x-init="init()"
     @keydown.escape.window="open = false"
     class="space-y-6">
    
    <!-- 1. CLEAN HEADER -->
    <div class="bg-white rounded-2xl p-6 sm:p-7 border border-slate-200/80 shadow-2xs flex flex-col sm:flex-row sm:items-center justify-between gap-4">
        <div class="space-y-1">
            <div class="text-[11px] font-bold text-[#FF8B02] uppercase tracking-wider flex items-center gap-1.5">
                <i class="ri-shield-user-fill"></i>
                <span>CONTROL DESK</span>
            </div>
            <h1 class="text-2xl font-light text-slate-800 tracking-tight">
                Welcome back, <span class="text-[#FF8B02] font-normal">{{ Auth::user()->name ?? 'Administrator' }}</span> 👋
            </h1>
            <p class="text-slate-500 text-xs font-normal">
                {{ $this->companySettings['company_name'] }} • {{ $this->companySettings['address'] }}
            </p>
        </div>

        <div class="flex items-center gap-2.5 shrink-0">
            <a href="{{ route('admin.our-ranges') }}" wire:navigate class="inline-flex items-center gap-1.5 bg-[#FAF9F5] hover:bg-[#FFF4E5] text-slate-700 hover:text-[#FF8B02] font-semibold px-4 py-2.5 rounded-xl border border-slate-200 text-xs transition-colors">
                <i class="ri-ruler-2-line"></i>
                <span>Catalog</span>
            </a>
            <a href="{{ route('admin.contacts') }}" wire:navigate class="inline-flex items-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-bold px-4 py-2.5 rounded-xl shadow-xs text-xs transition-colors">
                <i class="ri-mail-line"></i>
                <span>View Enquiries</span>
                @if($this->stats['unread_enquiries'] > 0)
                    <span class="bg-white text-[#FF8B02] text-[10px] font-black px-1.5 py-0.2 rounded-full">
                        {{ $this->stats['unread_enquiries'] }}
                    </span>
                @endif
            </a>
        </div>
    </div>

    <!-- 2. CLEAN KPI CARDS -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-4 sm:gap-5">
        
        <!-- KPI 1: Verticals -->
        <a href="{{ route('admin.services.list') }}" wire:navigate class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-2xs hover:border-[#FF8B02]/60 hover:shadow-xs transition-all space-y-2 block group">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider group-hover:text-slate-600">Core Verticals</span>
                <div class="w-9 h-9 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center">
                    <i class="ri-briefcase-4-line text-lg"></i>
                </div>
            </div>
            <div class="text-2xl font-bold text-slate-900">{{ $this->stats['total_services'] }}</div>
            <div class="text-xs text-slate-500 font-medium">Turnkey engineering services</div>
        </a>

        <!-- KPI 2: Product Ranges -->
        <a href="{{ route('admin.our-ranges') }}" wire:navigate class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-2xs hover:border-[#FF8B02]/60 hover:shadow-xs transition-all space-y-2 block group">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider group-hover:text-slate-600">Product Ranges</span>
                <div class="w-9 h-9 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center">
                    <i class="ri-layout-grid-line text-lg"></i>
                </div>
            </div>
            <div class="text-2xl font-bold text-slate-900">{{ $this->stats['total_ranges'] }}</div>
            <div class="text-xs text-slate-500 font-medium">Cabins, sheds & hutments</div>
        </a>

        <!-- KPI 3: Client Partners -->
        <a href="{{ route('admin.clients') }}" wire:navigate class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-2xs hover:border-[#FF8B02]/60 hover:shadow-xs transition-all space-y-2 block group">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider group-hover:text-slate-600">Client Partners</span>
                <div class="w-9 h-9 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center">
                    <i class="ri-building-3-line text-lg"></i>
                </div>
            </div>
            <div class="text-2xl font-bold text-slate-900">{{ $this->stats['total_clients'] }}</div>
            <div class="text-xs text-slate-500 font-medium">Corporate & infrastructure clients</div>
        </a>

        <!-- KPI 4: Pending Enquiries -->
        <a href="{{ route('admin.contacts') }}" wire:navigate class="bg-white p-5 rounded-2xl border border-slate-200/80 shadow-2xs hover:border-[#FF8B02]/60 hover:shadow-xs transition-all space-y-2 block group">
            <div class="flex items-center justify-between">
                <span class="text-xs font-semibold text-slate-400 uppercase tracking-wider group-hover:text-slate-600">Project Enquiries</span>
                <div class="w-9 h-9 rounded-xl {{ $this->stats['unread_enquiries'] > 0 ? 'bg-amber-100 text-amber-600' : 'bg-orange-50 text-[#FF8B02]' }} flex items-center justify-center">
                    <i class="ri-mail-unread-line text-lg"></i>
                </div>
            </div>
            <div class="flex items-baseline gap-2">
                <div class="text-2xl font-bold text-slate-900">{{ $this->stats['unread_enquiries'] }} New</div>
            </div>
            <div class="text-xs text-slate-500 font-medium">{{ $this->stats['total_enquiries'] }} total submissions received</div>
        </a>

    </div>

    <!-- 3. MAIN CLEAN CONTENT (ENQUIRIES + FACTSHEET) -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-6">
        
        <!-- Left: Recent Enquiries Table (8 cols) -->
        <div class="lg:col-span-8 bg-white rounded-2xl border border-slate-200/80 shadow-2xs p-5 sm:p-6 space-y-4">
            <div class="flex items-center justify-between border-b border-slate-100 pb-3.5">
                <div>
                    <h2 class="text-base font-bold text-slate-900">Recent Enquiries</h2>
                    <p class="text-xs text-slate-500">Incoming inquiries from website contact form</p>
                </div>
                <a href="{{ route('admin.contacts') }}" wire:navigate class="text-xs font-semibold text-[#FF8B02] hover:underline">
                    View All ({{ $this->stats['total_enquiries'] }}) →
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-xs text-left">
                    <thead class="text-slate-400 font-bold uppercase tracking-wider text-[10px] border-b border-slate-100">
                        <tr>
                            <th class="py-2.5 px-3">Client</th>
                            <th class="py-2.5 px-3">Requirement</th>
                            <th class="py-2.5 px-3">Date</th>
                            <th class="py-2.5 px-3">Status</th>
                            <th class="py-2.5 px-3 text-right">Action</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @forelse($this->recentEnquiries as $enq)
                            <tr class="hover:bg-slate-50/60 transition-colors {{ !$enq->is_read ? 'bg-amber-50/20' : '' }}" wire:key="dash-enq-{{ $enq->id }}">
                                <!-- Client & Contact -->
                                <td class="py-3 px-3 space-y-0.5">
                                    <div class="font-bold text-slate-900">{{ $enq->name }}</div>
                                    <div class="text-[11px] text-slate-500 font-mono">
                                        {{ $enq->phone }}
                                        @if($enq->project_location)
                                            <span class="font-sans text-slate-400">• {{ $enq->project_location }}</span>
                                        @endif
                                    </div>
                                </td>

                                <!-- Requirement -->
                                <td class="py-3 px-3 text-slate-700 font-medium">
                                    <span class="inline-block bg-slate-100 text-slate-800 px-2 py-0.5 rounded text-[11px]">
                                        {{ $enq->building_interest ?: 'General Enquiry' }}
                                    </span>
                                </td>

                                <!-- Date -->
                                <td class="py-3 px-3 whitespace-nowrap text-slate-500 text-[11px]">
                                    {{ $enq->created_at->format('d M Y') }}
                                    <div class="text-[10px] text-slate-400">{{ $enq->created_at->diffForHumans() }}</div>
                                </td>

                                <!-- Status -->
                                <td class="py-3 px-3 whitespace-nowrap">
                                    <button wire:click="toggleReadStatus({{ $enq->id }})" 
                                            class="inline-flex items-center gap-1.5 px-2.5 py-0.5 rounded-full text-[10px] font-bold border transition-colors {{ $enq->is_read ? 'bg-slate-50 text-slate-600 border-slate-200 hover:bg-slate-100' : 'bg-amber-50 text-amber-700 border-amber-200 hover:bg-amber-100' }}">
                                        <span class="w-1.5 h-1.5 rounded-full {{ $enq->is_read ? 'bg-slate-400' : 'bg-amber-500' }}"></span>
                                        <span>{{ $enq->is_read ? 'Read' : 'New' }}</span>
                                    </button>
                                </td>

                                <!-- Action -->
                                <td class="py-3 px-3 text-right whitespace-nowrap">
                                    <button wire:click="viewContact({{ $enq->id }})" 
                                            title="View Details" 
                                            class="inline-flex items-center justify-center w-7 h-7 rounded-lg bg-slate-100 hover:bg-[#FFF4E5] text-slate-600 hover:text-[#FF8B02] border border-slate-200 transition-colors">
                                        <i class="ri-eye-line text-xs"></i>
                                    </button>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="5" class="py-8 text-center text-slate-400">
                                    <i class="ri-inbox-line text-2xl text-slate-300 block mb-1"></i>
                                    <p class="text-xs text-slate-500">No contact enquiries received yet.</p>
                                </td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Right: Clean Company Factsheet (4 cols) -->
        <div class="lg:col-span-4 bg-white rounded-2xl border border-slate-200/80 shadow-2xs p-5 sm:p-6 space-y-4">
            <div class="flex items-center justify-between border-b border-slate-100 pb-3.5">
                <div>
                    <div class="text-[10px] font-bold text-[#FF8B02] uppercase tracking-wider">COMPANY PROFILE</div>
                    <h2 class="text-base font-bold text-slate-900">{{ $this->companySettings['company_name'] }}</h2>
                </div>
                <a href="{{ route('admin.settings') }}" wire:navigate title="Edit in Settings" class="text-slate-400 hover:text-[#FF8B02]">
                    <i class="ri-settings-4-line text-base"></i>
                </a>
            </div>

            <div class="space-y-2.5 text-xs text-slate-600">
                <div class="flex items-center justify-between py-1.5 border-b border-slate-100">
                    <span class="text-slate-400">Proprietor:</span>
                    <span class="font-bold text-slate-900">{{ $this->companySettings['proprietor'] }}</span>
                </div>
                <div class="flex items-center justify-between py-1.5 border-b border-slate-100">
                    <span class="text-slate-400">Annual Turnover:</span>
                    <span class="font-semibold text-slate-800">{{ $this->companySettings['turnover'] }}</span>
                </div>
                <div class="flex items-center justify-between py-1.5 border-b border-slate-100">
                    <span class="text-slate-400">Team Strength:</span>
                    <span class="font-semibold text-slate-800">{{ $this->companySettings['team_size'] }}</span>
                </div>
                <div class="flex items-center justify-between py-1.5 border-b border-slate-100">
                    <span class="text-slate-400">GSTIN:</span>
                    <span class="font-mono font-bold text-[#FF8B02]">{{ $this->companySettings['gst_no'] }}</span>
                </div>
                <div class="flex items-center justify-between py-1.5 border-b border-slate-100">
                    <span class="text-slate-400">Banker:</span>
                    <span class="font-semibold text-slate-800">{{ $this->companySettings['banker'] }}</span>
                </div>
                <div class="flex items-center justify-between py-1.5 border-b border-slate-100">
                    <span class="text-slate-400">Phone:</span>
                    <a href="tel:{{ $this->companySettings['phone'] }}" class="font-mono font-bold text-slate-900 hover:text-[#FF8B02]">
                        {{ $this->companySettings['phone'] }}
                    </a>
                </div>
            </div>

            <div class="pt-2">
                <a href="{{ route('admin.settings') }}" wire:navigate class="w-full inline-flex items-center justify-center gap-1.5 bg-[#FAF9F5] hover:bg-[#FFF4E5] text-slate-700 hover:text-[#FF8B02] font-semibold py-2.5 rounded-xl border border-slate-200 text-xs transition-colors">
                    <i class="ri-edit-line"></i>
                    <span>Edit Company Details</span>
                </a>
            </div>
        </div>

    </div>

    <!-- 4. CLEAN VIEW MODAL -->
    <div x-show="open" 
         x-transition:enter="transition ease-out duration-150"
         x-transition:enter-start="opacity-0"
         x-transition:enter-end="opacity-100"
         x-transition:leave="transition ease-in duration-100"
         x-transition:leave-start="opacity-100"
         x-transition:leave-end="opacity-0"
         class="fixed inset-0 z-50 overflow-y-auto bg-slate-900/40 backdrop-blur-xs flex items-center justify-center p-4"
         style="display: none;">
        
        <div @click.away="open = false" 
             class="bg-white rounded-2xl border border-slate-200 shadow-xl max-w-lg w-full overflow-hidden">
            
            <div class="px-5 py-3.5 border-b border-slate-100 flex items-center justify-between bg-[#FAF9F5]">
                <h3 class="text-xs font-bold text-slate-800 uppercase tracking-wider">Enquiry Details</h3>
                <button @click="open = false" class="text-slate-400 hover:text-slate-600">
                    <i class="ri-close-line text-base"></i>
                </button>
            </div>

            <div class="p-5 space-y-4">
                @if($selectedContact)
                    <div class="grid grid-cols-2 gap-3 text-xs">
                        <div>
                            <span class="text-slate-400 text-[10px] font-bold uppercase block">Customer Name</span>
                            <span class="font-bold text-slate-900 text-sm">{{ $selectedContact->name }}</span>
                        </div>
                        <div>
                            <span class="text-slate-400 text-[10px] font-bold uppercase block">Submission Date</span>
                            <span class="font-semibold text-slate-700">{{ $selectedContact->created_at->format('d M Y, h:i A') }}</span>
                        </div>
                        <div>
                            <span class="text-slate-400 text-[10px] font-bold uppercase block">Phone Number</span>
                            <a href="tel:{{ $selectedContact->phone }}" class="font-mono font-bold text-[#FF8B02] hover:underline">
                                {{ $selectedContact->phone }}
                            </a>
                        </div>
                        <div>
                            <span class="text-slate-400 text-[10px] font-bold uppercase block">Email</span>
                            <span class="font-semibold text-slate-700">{{ $selectedContact->email ?: 'N/A' }}</span>
                        </div>
                        <div>
                            <span class="text-slate-400 text-[10px] font-bold uppercase block">Requirement</span>
                            <span class="font-semibold text-slate-800">{{ $selectedContact->building_interest ?: 'General Enquiry' }}</span>
                        </div>
                        <div>
                            <span class="text-slate-400 text-[10px] font-bold uppercase block">Location</span>
                            <span class="font-semibold text-slate-800">{{ $selectedContact->project_location ?: 'N/A' }}</span>
                        </div>
                    </div>

                    <div class="pt-2 border-t border-slate-100">
                        <span class="text-slate-400 text-[10px] font-bold uppercase block mb-1">Message</span>
                        <div class="bg-[#FAF9F5] p-3 rounded-xl border border-slate-200 text-xs text-slate-800 leading-relaxed whitespace-pre-wrap">
                            {{ $selectedContact->message ?: 'No message provided.' }}
                        </div>
                    </div>

                    <div class="flex justify-end gap-2 pt-2">
                        <button @click="open = false" class="px-4 py-2 bg-slate-900 hover:bg-slate-800 text-white font-semibold text-xs rounded-xl transition-colors">
                            Close
                        </button>
                    </div>
                @endif
            </div>

        </div>
    </div>

</div>
