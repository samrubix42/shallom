@section('title', 'Admin Dashboard | Shallom Prefab Systems')
@section('meta_description', 'Shallom Prefab Systems admin control center overview and management hub.')

<div class="space-y-8">
    
    <!-- 1. STUDIO HERO HEADER -->
    <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-xs flex flex-col md:flex-row items-center justify-between gap-6">
        <div class="space-y-2">
            <div class="flex items-center gap-2 text-[#FF8B02] text-xs font-bold uppercase tracking-wider">
                <i class="ri-shield-user-fill"></i>
                <span>CONTROL DESK DASHBOARD</span>
            </div>
            <h1 class="text-2xl sm:text-3xl font-light text-slate-800 tracking-tight">
                Welcome back, <span class="text-[#FF8B02] font-normal">{{ Auth::user()->name ?? 'Administrator' }}</span> 👋
            </h1>
            <p class="text-slate-600 text-xs sm:text-sm font-normal">
                Shallom Prefab Systems Management Portal • Registered Office: Dilshad Garden, Delhi – 110095
            </p>
        </div>

        <div class="flex items-center gap-3 shrink-0">
            <a href="{{ route('products') }}" wire:navigate class="inline-flex items-center gap-2 bg-[#FAF9F5] hover:bg-[#FFF4E5] text-slate-800 hover:text-[#FF8B02] font-bold px-5 py-3 rounded-full border border-slate-200/80 text-xs uppercase tracking-wider transition-all">
                <i class="ri-ruler-2-line"></i>
                <span>Catalog Specs</span>
            </a>
            <a href="{{ route('contact') }}" wire:navigate class="inline-flex items-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-6 py-3 rounded-full shadow-md shadow-orange-500/20 text-xs uppercase tracking-wider transition-all">
                <i class="ri-mail-send-fill"></i>
                <span>View Enquiries</span>
            </a>
        </div>
    </div>

    <!-- 2. MINIMALIST KPI CARDS -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
        
        <!-- KPI 1 -->
        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Core Verticals</span>
                <div class="w-10 h-10 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center font-bold">
                    <i class="ri-briefcase-4-line text-xl"></i>
                </div>
            </div>
            <div class="text-3xl font-bold text-slate-900">4</div>
            <div class="text-xs text-slate-500 font-medium flex items-center gap-1">
                <i class="ri-checkbox-circle-fill text-emerald-500"></i>
                <span>Hospitality, Infra, Offices, Interiors</span>
            </div>
        </div>

        <!-- KPI 2 -->
        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Product Ranges</span>
                <div class="w-10 h-10 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center font-bold">
                    <i class="ri-layout-grid-line text-xl"></i>
                </div>
            </div>
            <div class="text-3xl font-bold text-slate-900">4 Major</div>
            <div class="text-xs text-slate-500 font-medium flex items-center gap-1">
                <i class="ri-checkbox-circle-fill text-emerald-500"></i>
                <span>Houses, Offices, Sheds, Hutments</span>
            </div>
        </div>

        <!-- KPI 3 -->
        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Client Partners</span>
                <div class="w-10 h-10 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center font-bold">
                    <i class="ri-building-3-line text-xl"></i>
                </div>
            </div>
            <div class="text-3xl font-bold text-slate-900">22+</div>
            <div class="text-xs text-slate-500 font-medium flex items-center gap-1">
                <i class="ri-checkbox-circle-fill text-emerald-500"></i>
                <span>L&T, Adani, NTPC, Bharti Airtel, GMR</span>
            </div>
        </div>

        <!-- KPI 4 -->
        <div class="bg-white p-6 rounded-2xl border border-slate-200/80 shadow-xs space-y-3">
            <div class="flex items-center justify-between">
                <span class="text-xs font-bold text-slate-400 uppercase tracking-wider">Pending Enquiries</span>
                <div class="w-10 h-10 rounded-xl bg-orange-50 text-[#FF8B02] flex items-center justify-center font-bold">
                    <i class="ri-mail-unread-line text-xl"></i>
                </div>
            </div>
            <div class="text-3xl font-bold text-slate-900">12 New</div>
            <div class="text-xs text-slate-500 font-medium flex items-center gap-1">
                <i class="ri-time-line text-[#FF8B02]"></i>
                <span>Instant response desk active</span>
            </div>
        </div>

    </div>

    <!-- 3. ENQUIRIES TABLE & FACTSHEET CARD -->
    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8">
        
        <!-- Left 8 Cols: Enquiries Table -->
        <div class="lg:col-span-8 bg-white rounded-3xl border border-slate-200/80 shadow-xs p-6 space-y-6">
            <div class="flex items-center justify-between border-b border-slate-100 pb-4">
                <div class="space-y-0.5">
                    <h3 class="text-lg font-bold text-slate-900">Recent BOQ Project Submissions</h3>
                    <p class="text-xs text-slate-500 font-normal">Incoming client requirement submissions from website</p>
                </div>
                <a href="{{ route('contact') }}" wire:navigate class="text-xs font-bold text-[#FF8B02] hover:underline">
                    View All →
                </a>
            </div>

            <div class="overflow-x-auto">
                <table class="w-full text-xs text-left">
                    <thead class="bg-[#FAF9F5] text-slate-500 font-bold uppercase tracking-wider text-[10px] border-y border-slate-100">
                        <tr>
                            <th class="px-4 py-3">Enquiry Ref</th>
                            <th class="px-4 py-3">Client & Contact</th>
                            <th class="px-4 py-3">Product Required</th>
                            <th class="px-4 py-3">Status</th>
                        </tr>
                    </thead>
                    <tbody class="divide-y divide-slate-100">
                        @foreach($recentEnquiries as $enq)
                            <tr class="hover:bg-[#FAF9F5]/80 transition-colors">
                                <td class="px-4 py-3.5 font-bold font-mono text-slate-900">{{ $enq['id'] }}</td>
                                <td class="px-4 py-3.5 space-y-0.5">
                                    <div class="font-bold text-slate-900">{{ $enq['client_name'] }}</div>
                                    <div class="text-[11px] text-slate-500 font-medium">{{ $enq['phone'] }} • {{ $enq['location'] }}</div>
                                </td>
                                <td class="px-4 py-3.5 text-slate-700 font-medium">{{ $enq['product'] }}</td>
                                <td class="px-4 py-3.5">
                                    @if($enq['status'] === 'Pending Review')
                                        <span class="inline-flex items-center gap-1 bg-amber-50 text-amber-700 px-2.5 py-1 rounded-full text-[10px] font-bold border border-amber-200">
                                            <span class="w-1.5 h-1.5 rounded-full bg-amber-500"></span>
                                            Pending
                                        </span>
                                    @elseif($enq['status'] === 'Quoted')
                                        <span class="inline-flex items-center gap-1 bg-blue-50 text-blue-700 px-2.5 py-1 rounded-full text-[10px] font-bold border border-blue-200">
                                            <span class="w-1.5 h-1.5 rounded-full bg-blue-500"></span>
                                            Quoted
                                        </span>
                                    @else
                                        <span class="inline-flex items-center gap-1 bg-emerald-50 text-emerald-700 px-2.5 py-1 rounded-full text-[10px] font-bold border border-emerald-200">
                                            <span class="w-1.5 h-1.5 rounded-full bg-emerald-500"></span>
                                            Completed
                                        </span>
                                    @endif
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <!-- Right 4 Cols: Company Factsheet Card -->
        <div class="lg:col-span-4 bg-white border border-slate-200/80 rounded-3xl p-6 shadow-xs space-y-6">
            <div class="space-y-1">
                <div class="text-xs font-bold text-[#FF8B02] uppercase tracking-wider flex items-center gap-1.5">
                    <i class="ri-building-line"></i>
                    <span>COMPANY FACTSHEET</span>
                </div>
                <h3 class="text-xl font-bold text-slate-900">Shallom Prefab Systems</h3>
            </div>

            <div class="space-y-3 text-xs text-slate-600 font-medium">
                <div class="flex items-center justify-between py-2 border-b border-slate-100">
                    <span class="text-slate-500">Proprietor:</span>
                    <span class="font-bold text-slate-900">Mr. Arvind Kumar Gautam</span>
                </div>
                <div class="flex items-center justify-between py-2 border-b border-slate-100">
                    <span class="text-slate-500">Annual Turnover:</span>
                    <span class="font-bold text-slate-900">₹5 Crore – ₹25 Crore</span>
                </div>
                <div class="flex items-center justify-between py-2 border-b border-slate-100">
                    <span class="text-slate-500">Team Strength:</span>
                    <span class="font-bold text-slate-900">26 – 50 Professionals</span>
                </div>
                <div class="flex items-center justify-between py-2 border-b border-slate-100">
                    <span class="text-slate-500">GSTIN:</span>
                    <span class="font-bold text-[#FF8B02] font-mono">07ANDPG4822C2ZI</span>
                </div>
                <div class="flex items-center justify-between py-2 border-b border-slate-100">
                    <span class="text-slate-500">Primary Banker:</span>
                    <span class="font-bold text-slate-900">AXIS BANK</span>
                </div>
            </div>

            <div class="pt-2">
                <a href="{{ route('profile') }}" wire:navigate class="w-full inline-flex items-center justify-center gap-2 bg-[#FAF9F5] hover:bg-[#FFF4E5] text-slate-800 hover:text-[#FF8B02] font-extrabold py-3 rounded-full border border-slate-200/80 text-xs uppercase tracking-wider transition-colors shadow-2xs">
                    <span>View Full Profile Specs</span>
                    <i class="ri-arrow-right-line"></i>
                </a>
            </div>
        </div>

    </div>

</div>
