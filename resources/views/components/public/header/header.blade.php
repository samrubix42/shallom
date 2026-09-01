<header x-data="{ mobileMenuOpen: false }" class="sticky top-0 z-50 bg-white/95 backdrop-blur-md text-slate-900 border-b border-slate-200/80 shadow-xs transition-all duration-300">
    
    <!-- TOP STRIP WITH COMPANY DETAILS (DEEP SLATE MIDNIGHT NAVY) -->
    <div class="hidden sm:block bg-[#0B132B] text-slate-300 text-xs py-2 border-b border-slate-800/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-2">
            
            <!-- Left Company Details: Phone & Plant Address -->
            <div class="flex items-center gap-4 sm:gap-6 flex-wrap justify-center sm:justify-start">
                <a href="tel:+917942550323" class="flex items-center gap-1.5 hover:text-[#FF8B02] transition-colors font-medium">
                    <i class="ri-phone-fill text-[#FF8B02]"></i>
                    <span><strong>Phone:</strong> 07942550323</span>
                </a>

                <div class="hidden md:flex items-center gap-1.5 font-medium text-slate-400">
                    <i class="ri-map-pin-2-fill text-[#FF8B02]"></i>
                    <span><strong>Office:</strong> Dilshad Garden, Delhi – 110095</span>
                </div>
            </div>

            <!-- Right Company Credentials: GSTIN & Quality -->
            <div class="flex items-center gap-6 text-[11px] font-semibold">
                <span class="inline-flex items-center gap-1.5  text-[#FF8B02]">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                    GSTIN: 07ANDPG4822C2ZI
                </span>
                <span class="inline-flex items-center gap-1  text-emerald-400 font-bold">
                    <i class="ri-award-fill text-[#FF8B02]"></i>
                    ISO 9001:2015 Certified
                </span>
            </div>

        </div>
    </div>

    <!-- SINGLE UNIFIED HEADER BAR (Perfectly Centered Navigation) -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="flex items-center justify-between h-20 sm:h-22">
            
            <!-- Left: Logo ONLY (logo.webp) -->
            <a href="{{ route('home') }}" wire:navigate class="shrink-0 group flex items-center z-10">
                <img src="{{ asset('logo.webp') }}" 
                     alt="Shallom Prefab Systems Logo" 
                     class="h-14 sm:h-16 w-auto object-contain transition-transform group-hover:scale-105">
            </a>

            <!-- Center: Perfectly Centered Desktop Navigation -->
            <nav class="hidden lg:flex items-center justify-center gap-7 text-xs font-bold uppercase tracking-wider text-slate-600 absolute left-1/2 -translate-x-1/2">
                <a href="{{ route('home') }}" wire:navigate class="hover:text-[#FF8B02] transition-colors py-1 font-bold">
                    Home
                </a>
                <a href="{{ route('profile') }}" wire:navigate class="hover:text-[#FF8B02] transition-colors py-1 font-bold">
                    Profile
                </a>
                <a href="{{ route('services') }}" wire:navigate class="hover:text-[#FF8B02] transition-colors py-1 font-bold">
                    Services
                </a>
                <a href="{{ route('products') }}" wire:navigate class="hover:text-[#FF8B02] transition-colors py-1 font-bold">
                    Our Range
                </a>
                <a href="{{ route('clientele') }}" wire:navigate class="hover:text-[#FF8B02] transition-colors py-1 font-bold">
                    Clientele
                </a>
                <a href="{{ route('contact') }}" wire:navigate class="hover:text-[#FF8B02] transition-colors py-1 font-bold">
                    Contact
                </a>
            </nav>

            <!-- Right: Direct Phone & Send Enquiry CTA Button -->
            <div class="hidden sm:flex items-center gap-5 shrink-0 z-10">
                <!-- Direct Phone Link -->
                <a href="tel:+917942550323" class="flex items-center gap-1.5 text-xs font-bold text-slate-700 hover:text-[#FF8B02] transition-colors">
                    <i class="ri-phone-fill text-[#FF8B02]"></i>
                    <span>07942550323</span>
                </a>

                <!-- Send Enquiry Button -->
                <a href="{{ route('contact') }}" wire:navigate
                   class="inline-flex items-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-6 py-2.5 rounded-full shadow-md shadow-orange-500/20 transition-all text-xs transform hover:-translate-y-0.5">
                    <i class="ri-mail-send-fill text-white text-sm"></i>
                    <span>Send Enquiry</span>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="lg:hidden flex items-center z-10">
                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        type="button" 
                        class="p-2.5 rounded-xl text-slate-800 bg-[#FAF9F5] hover:bg-[#FFF4E5] hover:text-[#FF8B02] border border-slate-200 transition-colors focus:outline-none">
                    <i x-show="!mobileMenuOpen" class="ri-menu-4-line text-2xl"></i>
                    <i x-show="mobileMenuOpen" x-cloak class="ri-close-line text-2xl"></i>
                </button>
            </div>

        </div>
    </div>

    <!-- HIGH-END MOBILE DRAWER MENU -->
    <div x-show="mobileMenuOpen" 
         x-cloak 
         x-transition:enter="transition ease-out duration-300"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-200"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="lg:hidden fixed inset-x-0 top-20 bg-white/98 backdrop-blur-xl border-b border-slate-200 shadow-2xl px-5 pt-4 pb-8 space-y-6 z-50 max-h-[85vh] overflow-y-auto">
        
        <!-- Navigation Link Cards Grid -->
        <div class="space-y-2">
            <a href="{{ route('home') }}" wire:navigate @click="mobileMenuOpen = false" 
               class="flex items-center justify-between p-3.5 rounded-2xl transition-all border text-xs font-bold {{ request()->routeIs('home') ? 'bg-[#FFF4E5] text-[#FF8B02] border-[#FFD199]' : 'bg-[#FAF9F5] text-slate-700 border-slate-200/80 hover:border-[#FF8B02] hover:text-[#FF8B02]' }}">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-xl bg-white text-[#FF8B02] flex items-center justify-center shadow-2xs">
                        <i class="ri-home-4-line text-base"></i>
                    </div>
                    <span>Home</span>
                </div>
                <i class="ri-arrow-right-s-line text-lg text-slate-400"></i>
            </a>

            <a href="{{ route('profile') }}" wire:navigate @click="mobileMenuOpen = false" 
               class="flex items-center justify-between p-3.5 rounded-2xl transition-all border text-xs font-bold {{ request()->routeIs('profile') ? 'bg-[#FFF4E5] text-[#FF8B02] border-[#FFD199]' : 'bg-[#FAF9F5] text-slate-700 border-slate-200/80 hover:border-[#FF8B02] hover:text-[#FF8B02]' }}">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-xl bg-white text-[#FF8B02] flex items-center justify-center shadow-2xs">
                        <i class="ri-building-2-line text-base"></i>
                    </div>
                    <span>Company Profile</span>
                </div>
                <i class="ri-arrow-right-s-line text-lg text-slate-400"></i>
            </a>

            <a href="{{ route('services') }}" wire:navigate @click="mobileMenuOpen = false" 
               class="flex items-center justify-between p-3.5 rounded-2xl transition-all border text-xs font-bold {{ request()->routeIs('services') || request()->routeIs('service.show') ? 'bg-[#FFF4E5] text-[#FF8B02] border-[#FFD199]' : 'bg-[#FAF9F5] text-slate-700 border-slate-200/80 hover:border-[#FF8B02] hover:text-[#FF8B02]' }}">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-xl bg-white text-[#FF8B02] flex items-center justify-center shadow-2xs">
                        <i class="ri-briefcase-4-line text-base"></i>
                    </div>
                    <span>Services & Verticals</span>
                </div>
                <i class="ri-arrow-right-s-line text-lg text-slate-400"></i>
            </a>

            <a href="{{ route('products') }}" wire:navigate @click="mobileMenuOpen = false" 
               class="flex items-center justify-between p-3.5 rounded-2xl transition-all border text-xs font-bold {{ request()->routeIs('products') ? 'bg-[#FFF4E5] text-[#FF8B02] border-[#FFD199]' : 'bg-[#FAF9F5] text-slate-700 border-slate-200/80 hover:border-[#FF8B02] hover:text-[#FF8B02]' }}">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-xl bg-white text-[#FF8B02] flex items-center justify-center shadow-2xs">
                        <i class="ri-layout-grid-line text-base"></i>
                    </div>
                    <span>Our Complete Range</span>
                </div>
                <i class="ri-arrow-right-s-line text-lg text-slate-400"></i>
            </a>

            <a href="{{ route('clientele') }}" wire:navigate @click="mobileMenuOpen = false" 
               class="flex items-center justify-between p-3.5 rounded-2xl transition-all border text-xs font-bold {{ request()->routeIs('clientele') ? 'bg-[#FFF4E5] text-[#FF8B02] border-[#FFD199]' : 'bg-[#FAF9F5] text-slate-700 border-slate-200/80 hover:border-[#FF8B02] hover:text-[#FF8B02]' }}">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-xl bg-white text-[#FF8B02] flex items-center justify-center shadow-2xs">
                        <i class="ri-building-3-line text-base"></i>
                    </div>
                    <span>Clientele & Partners</span>
                </div>
                <i class="ri-arrow-right-s-line text-lg text-slate-400"></i>
            </a>

            <a href="{{ route('contact') }}" wire:navigate @click="mobileMenuOpen = false" 
               class="flex items-center justify-between p-3.5 rounded-2xl transition-all border text-xs font-bold {{ request()->routeIs('contact') ? 'bg-[#FFF4E5] text-[#FF8B02] border-[#FFD199]' : 'bg-[#FAF9F5] text-slate-700 border-slate-200/80 hover:border-[#FF8B02] hover:text-[#FF8B02]' }}">
                <div class="flex items-center gap-3">
                    <div class="w-8 h-8 rounded-xl bg-white text-[#FF8B02] flex items-center justify-center shadow-2xs">
                        <i class="ri-mail-send-line text-base"></i>
                    </div>
                    <span>Contact Us</span>
                </div>
                <i class="ri-arrow-right-s-line text-lg text-slate-400"></i>
            </a>
        </div>

        <!-- Direct Contact Actions -->
        <div class="pt-4 border-t border-slate-100 space-y-3">
            <a href="tel:+919899552380" 
               class="w-full inline-flex items-center justify-center gap-2 bg-[#FFF4E5] hover:bg-[#FF8B02] text-[#FF8B02] hover:text-white font-extrabold py-3.5 rounded-2xl border border-[#FFD199] text-xs uppercase tracking-wider transition-all">
                <i class="ri-phone-fill text-base"></i>
                <span>Call +91-9899552380 / 07942550323</span>
            </a>
            
            <a href="{{ route('contact') }}" wire:navigate @click="mobileMenuOpen = false"
               class="w-full inline-flex items-center justify-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold py-3.5 rounded-2xl shadow-lg shadow-orange-500/20 text-xs uppercase tracking-wider transition-all">
                <i class="ri-send-plane-fill text-base"></i>
                <span>Send Project Enquiry</span>
            </a>
        </div>

        <!-- Footer Credentials Info Pill -->
        <div class="bg-slate-900 text-slate-300 p-4 rounded-2xl text-center space-y-1 text-xs">
            <div class="font-bold text-white flex items-center justify-center gap-1.5">
                <i class="ri-award-fill text-[#FF8B02]"></i>
                <span>ISO 9001:2015 Certified Manufacturer</span>
            </div>
            <div class="text-[11px] text-slate-400 font-mono">GSTIN: 07ANDPG4822C2ZI</div>
        </div>
    </div>

</header>