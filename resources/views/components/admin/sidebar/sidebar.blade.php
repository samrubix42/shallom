<aside class="w-64 bg-white text-slate-800 flex flex-col shrink-0 border-r border-slate-200/80 min-h-screen">
    
    <!-- Sidebar Brand Header -->
    <div class="h-20 sm:h-22 px-6 flex items-center justify-between border-b border-slate-100">
        <a href="{{ route('admin.dashboard') }}" wire:navigate class="flex items-center gap-3 group">
            <div class="bg-[#FAF9F5] p-2 rounded-xl border border-slate-200/80 group-hover:scale-105 transition-transform">
                <img src="{{ asset('logo.webp') }}" alt="Shallom Prefab Logo" class="h-8 w-auto object-contain">
            </div>
            <div>
                <div class="text-xs font-extrabold text-slate-900 leading-tight">Shallom Studio</div>
                <div class="text-[10px] font-bold text-[#FF8B02] uppercase tracking-wider">Control Desk</div>
            </div>
        </a>

        <button @click="sidebarOpen = false" class="lg:hidden p-1.5 text-slate-400 hover:text-slate-700 rounded-lg">
            <i class="ri-close-line text-xl"></i>
        </button>
    </div>

    <!-- Navigation Links -->
    <div class="flex-1 px-4 py-6 space-y-8 overflow-y-auto">
        
        <!-- Section 1: Core Management -->
        <div class="space-y-1.5">
            <div class="px-3 text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2">MANAGEMENT</div>

            <a href="{{ route('admin.dashboard') }}" wire:navigate 
               class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-bold transition-all {{ request()->routeIs('admin.dashboard') ? 'bg-[#FFF4E5] text-[#FF8B02] border border-[#FFD199]' : 'text-slate-600 hover:bg-[#FAF9F5] hover:text-slate-900' }}">
                <i class="ri-dashboard-3-line text-base text-[#FF8B02]"></i>
                <span>Dashboard Overview</span>
            </a>

            <a href="{{ route('services') }}" wire:navigate 
               class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-bold transition-all {{ request()->routeIs('services') ? 'bg-[#FFF4E5] text-[#FF8B02] border border-[#FFD199]' : 'text-slate-600 hover:bg-[#FAF9F5] hover:text-slate-900' }}">
                <i class="ri-briefcase-4-line text-base text-[#FF8B02]"></i>
                <span>Business Verticals</span>
            </a>

            <a href="{{ route('products') }}" wire:navigate 
               class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-bold transition-all {{ request()->routeIs('products') ? 'bg-[#FFF4E5] text-[#FF8B02] border border-[#FFD199]' : 'text-slate-600 hover:bg-[#FAF9F5] hover:text-slate-900' }}">
                <i class="ri-layout-grid-line text-base text-[#FF8B02]"></i>
                <span>Product Catalog</span>
            </a>

            <a href="{{ route('clientele') }}" wire:navigate 
               class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-bold transition-all {{ request()->routeIs('clientele') ? 'bg-[#FFF4E5] text-[#FF8B02] border border-[#FFD199]' : 'text-slate-600 hover:bg-[#FAF9F5] hover:text-slate-900' }}">
                <i class="ri-building-3-line text-base text-[#FF8B02]"></i>
                <span>Client Partners</span>
            </a>
        </div>

        <!-- Section 2: Communication -->
        <div class="space-y-1.5">
            <div class="px-3 text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2">COMMUNICATION</div>

            <a href="{{ route('contact') }}" wire:navigate 
               class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-bold transition-all {{ request()->routeIs('contact') ? 'bg-[#FFF4E5] text-[#FF8B02] border border-[#FFD199]' : 'text-slate-600 hover:bg-[#FAF9F5] hover:text-slate-900' }}">
                <i class="ri-mail-send-line text-base text-[#FF8B02]"></i>
                <span>BOQ Enquiries</span>
            </a>

            <a href="{{ route('profile') }}" wire:navigate 
               class="flex items-center gap-3 px-3.5 py-3 rounded-2xl text-xs font-bold transition-all {{ request()->routeIs('profile') ? 'bg-[#FFF4E5] text-[#FF8B02] border border-[#FFD199]' : 'text-slate-600 hover:bg-[#FAF9F5] hover:text-slate-900' }}">
                <i class="ri-information-line text-base text-[#FF8B02]"></i>
                <span>Company Factsheet</span>
            </a>
        </div>

    </div>

    <!-- Footer Credentials Pill -->
    <div class="p-4 border-t border-slate-100">
        <div class="bg-[#FAF9F5] p-3.5 rounded-2xl border border-slate-200/80 text-xs space-y-1 text-center">
            <div class="font-bold text-slate-800 flex items-center justify-center gap-1 text-[11px]">
                <i class="ri-shield-check-fill text-[#FF8B02]"></i>
                <span>ISO 9001:2015 CERTIFIED</span>
            </div>
            <div class="text-[10px] text-slate-500 font-mono">GSTIN: 07ANDPG4822C2ZI</div>
        </div>
    </div>

</aside>