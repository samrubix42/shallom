<aside class="w-64 bg-white text-slate-800 flex flex-col shrink-0 border-r border-slate-200/80 h-full">
    
    <!-- Sidebar Brand Header -->
    <div class="h-16 px-5 flex items-center justify-between border-b border-slate-100">
        <a href="{{ route('admin.dashboard') }}" wire:navigate class="flex items-center gap-2.5 group">
            <div class="bg-[#FAF9F5] p-1.5 rounded-md border border-slate-200/80 group-hover:scale-105 transition-transform">
                <img src="{{ asset('logo.webp') }}" alt="Shallom Prefab Logo" class="h-6 w-auto object-contain">
            </div>
            <div>
                <div class="text-xs font-bold text-slate-900 leading-tight">Shallom Studio</div>
                <div class="text-[10px] font-semibold text-[#FF8B02] uppercase tracking-wider">Admin Panel</div>
            </div>
        </a>

        <button @click="sidebarOpen = false" class="lg:hidden p-1 text-slate-400 hover:text-slate-700 rounded-md">
            <i class="ri-close-line text-lg"></i>
        </button>
    </div>

    <!-- Navigation Links -->
    <div class="flex-1 px-3 py-4 space-y-6 overflow-y-auto">
        
        <!-- Section: Admin Management -->
        <div class="space-y-1">
            <div class="px-3 text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2">ADMIN MENU</div>

            <a href="{{ route('admin.dashboard') }}" wire:navigate 
               class="flex items-center gap-2.5 px-3 py-2 rounded-md text-xs font-semibold transition-colors {{ request()->routeIs('admin.dashboard') ? 'bg-[#FFF4E5] text-[#FF8B02] border border-[#FFD199]' : 'text-slate-600 hover:bg-[#FAF9F5] hover:text-slate-900' }}">
                <i class="ri-dashboard-3-line text-sm text-[#FF8B02]"></i>
                <span>Dashboard</span>
            </a>

            <a href="{{ route('admin.clients') }}" wire:navigate 
               class="flex items-center gap-2.5 px-3 py-2 rounded-md text-xs font-semibold transition-colors {{ request()->routeIs('admin.clients') ? 'bg-[#FFF4E5] text-[#FF8B02] border border-[#FFD199]' : 'text-slate-600 hover:bg-[#FAF9F5] hover:text-slate-900' }}">
                <i class="ri-building-3-line text-sm text-[#FF8B02]"></i>
                <span>Clients</span>
            </a>

            <a href="{{ route('admin.testimonials') }}" wire:navigate 
               class="flex items-center gap-2.5 px-3 py-2 rounded-md text-xs font-semibold transition-colors {{ request()->routeIs('admin.testimonials') ? 'bg-[#FFF4E5] text-[#FF8B02] border border-[#FFD199]' : 'text-slate-600 hover:bg-[#FAF9F5] hover:text-slate-900' }}">
                <i class="ri-chat-quote-line text-sm text-[#FF8B02]"></i>
                <span>Testimonials</span>
            </a>

            <a href="{{ route('admin.services.list') }}" wire:navigate 
               class="flex items-center gap-2.5 px-3 py-2 rounded-md text-xs font-semibold transition-colors {{ request()->routeIs('admin.services.*') ? 'bg-[#FFF4E5] text-[#FF8B02] border border-[#FFD199]' : 'text-slate-600 hover:bg-[#FAF9F5] hover:text-slate-900' }}">
                <i class="ri-customer-service-2-line text-sm text-[#FF8B02]"></i>
                <span>Services</span>
            </a>

            <a href="{{ route('admin.our-range-categories') }}" wire:navigate 
               class="flex items-center gap-2.5 px-3 py-2 rounded-md text-xs font-semibold transition-colors {{ request()->routeIs('admin.our-range-categories') ? 'bg-[#FFF4E5] text-[#FF8B02] border border-[#FFD199]' : 'text-slate-600 hover:bg-[#FAF9F5] hover:text-slate-900' }}">
                <i class="ri-folders-line text-sm text-[#FF8B02]"></i>
                <span>Range Categories</span>
            </a>

            <a href="{{ route('admin.our-ranges') }}" wire:navigate 
               class="flex items-center gap-2.5 px-3 py-2 rounded-md text-xs font-semibold transition-colors {{ request()->routeIs('admin.our-ranges') ? 'bg-[#FFF4E5] text-[#FF8B02] border border-[#FFD199]' : 'text-slate-600 hover:bg-[#FAF9F5] hover:text-slate-900' }}">
                <i class="ri-box-3-line text-sm text-[#FF8B02]"></i>
                <span>Our Ranges</span>
            </a>
        </div>

        <!-- Section: Public Portal Link -->
        <div class="space-y-1">
            <div class="px-3 text-[10px] font-bold text-slate-400 uppercase tracking-widest mb-2">WEBSITE</div>

            <a href="{{ route('home') }}" wire:navigate 
               class="flex items-center gap-2.5 px-3 py-2 rounded-md text-xs font-medium text-slate-600 hover:bg-[#FAF9F5] hover:text-slate-900 transition-colors">
                <i class="ri-external-link-line text-sm text-slate-400"></i>
                <span>View Main Site</span>
            </a>
        </div>

    </div>

    <!-- Footer Status Pill -->
    <div class="p-3 border-t border-slate-100">
        <div class="bg-[#FAF9F5] p-2.5 rounded-md border border-slate-200/80 text-xs text-center">
            <div class="font-bold text-slate-700 flex items-center justify-center gap-1 text-[11px]">
                <i class="ri-shield-check-fill text-[#FF8B02]"></i>
                <span>Shallom Control Desk</span>
            </div>
        </div>
    </div>

</aside>