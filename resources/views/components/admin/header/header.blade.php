<header class="bg-white/95 backdrop-blur-md border-b border-slate-200/80 sticky top-0 z-30 shadow-2xs">
    <div class="px-4 sm:px-6 lg:px-8 py-3.5 flex items-center justify-between gap-4">
        
        <!-- Left: Toggle & Search -->
        <div class="flex items-center gap-4">
            <button @click="sidebarOpen = !sidebarOpen" class="lg:hidden p-2 text-slate-600 hover:text-slate-900 rounded-xl hover:bg-[#FAF9F5]">
                <i class="ri-menu-2-line text-xl"></i>
            </button>

            <div class="hidden sm:flex items-center gap-2 bg-[#FAF9F5] border border-slate-200/80 rounded-full px-4 py-1.5 text-xs text-slate-500 w-72">
                <i class="ri-search-line text-slate-400"></i>
                <input type="text" placeholder="Search enquiries, products, specs..." class="bg-transparent border-none outline-none w-full text-xs text-slate-800 placeholder-slate-400 focus:ring-0">
            </div>
        </div>

        <!-- Right: Public Website Link & Profile Pill -->
        <div class="flex items-center gap-3" x-data="{ userMenuOpen: false }">
            
            <!-- View Public Site Button -->
            <a href="{{ route('home') }}" target="_blank" class="hidden sm:inline-flex items-center gap-1.5 bg-[#FFF4E5] hover:bg-[#FF8B02] text-[#FF8B02] hover:text-white font-extrabold px-4 py-2 rounded-full border border-[#FFD199] text-xs transition-all shadow-2xs">
                <i class="ri-external-link-line text-sm"></i>
                <span>View Public Site</span>
            </a>

            <!-- Notification Bell -->
            <button class="relative p-2 text-slate-600 hover:text-[#FF8B02] rounded-full hover:bg-[#FFF4E5] transition-colors">
                <i class="ri-notification-3-line text-xl"></i>
                <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-[#FF8B02] rounded-full ring-2 ring-white"></span>
            </button>

            <!-- Separator -->
            <div class="h-6 w-px bg-slate-200 hidden sm:block"></div>

            <!-- Profile Dropdown -->
            <div class="relative">
                <button @click="userMenuOpen = !userMenuOpen" class="flex items-center gap-2.5 p-1.5 rounded-full hover:bg-[#FAF9F5] transition-colors focus:outline-none">
                    <div class="w-9 h-9 rounded-full bg-[#FAF9F5] border border-[#FFD199] text-[#FF8B02] font-extrabold flex items-center justify-center text-sm shadow-2xs">
                        {{ strtoupper(substr(Auth::user()->name ?? 'A', 0, 2)) }}
                    </div>
                    <div class="hidden md:block text-left pr-1">
                        <div class="text-xs font-bold text-slate-900 leading-tight">{{ Auth::user()->name ?? 'Administrator' }}</div>
                        <div class="text-[10px] font-semibold text-[#FF8B02] uppercase tracking-wider">Super Admin</div>
                    </div>
                    <i class="ri-arrow-down-s-line text-slate-400 hidden md:block"></i>
                </button>

                <!-- Dropdown -->
                <div x-show="userMenuOpen" 
                     @click.away="userMenuOpen = false" 
                     x-cloak 
                     x-transition:enter="transition ease-out duration-150"
                     x-transition:enter-start="opacity-0 scale-95"
                     x-transition:enter-end="opacity-100 scale-100"
                     x-transition:leave="transition ease-in duration-100"
                     x-transition:leave-start="opacity-100 scale-100"
                     x-transition:leave-end="opacity-0 scale-95"
                     class="absolute right-0 mt-2 w-56 bg-white rounded-2xl border border-slate-200/80 shadow-xl p-2 z-50 space-y-1">
                    
                    <div class="px-3 py-2 border-b border-slate-100 text-xs">
                        <div class="font-bold text-slate-900">{{ Auth::user()->name ?? 'Shallom Admin' }}</div>
                        <div class="text-slate-500 font-mono text-[11px] truncate">{{ Auth::user()->email ?? 'admin@shallomprefab.com' }}</div>
                    </div>

                    <a href="{{ route('home') }}" target="_blank" class="flex items-center gap-2 px-3 py-2 rounded-xl text-xs font-semibold text-slate-700 hover:bg-[#FAF9F5] hover:text-[#FF8B02] transition-colors">
                        <i class="ri-global-line text-base text-slate-400"></i>
                        <span>Visit Public Site</span>
                    </a>

                    <button wire:click="logout" class="w-full flex items-center gap-2 px-3 py-2 rounded-xl text-xs font-bold text-red-600 hover:bg-red-50 transition-colors text-left">
                        <i class="ri-logout-box-r-line text-base"></i>
                        <span>Sign Out</span>
                    </button>

                </div>
            </div>

        </div>

    </div>
</header>