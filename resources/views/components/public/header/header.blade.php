<header x-data="{ mobileMenuOpen: false }" class="sticky top-0 z-50 bg-white/95 backdrop-blur-md text-slate-900 border-b border-slate-200/80 shadow-xs transition-all duration-300">
    
    <!-- TOP STRIP WITH COMPANY DETAILS -->
    <div class="bg-slate-900 text-slate-300 text-xs py-2 border-b border-slate-800">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col sm:flex-row items-center justify-between gap-2">
            
            <!-- Left Company Details: Phone & Plant Address -->
            <div class="flex items-center gap-4 sm:gap-6 flex-wrap justify-center sm:justify-start">
                <a href="tel:+917942550323" class="flex items-center gap-1.5 hover:text-[#FF8B02] transition-colors font-medium">
                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span><strong>Phone:</strong> 07942550323</span>
                </a>

                <div class="hidden md:flex items-center gap-1.5 font-medium text-slate-400">
                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                    <span><strong>Plant:</strong> New Delhi, Delhi - 110092</span>
                </div>
            </div>

            <!-- Right Company Credentials: GSTIN & Quality -->
            <div class="flex items-center gap-4 text-[11px] font-semibold">
                <span class="inline-flex items-center gap-1.5 bg-slate-800 text-[#FF8B02] px-2.5 py-0.5 rounded-full border border-slate-700">
                    <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span>
                    GSTIN: 07ANDPG4822C2ZI
                </span>
                <span class="hidden sm:inline-block text-slate-400">
                    ISO 9001:2015 Manufacturer
                </span>
            </div>

        </div>
    </div>

    <!-- SINGLE UNIFIED HEADER BAR (Perfectly Centered Navigation) -->
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative">
        <div class="flex items-center justify-between h-20 sm:h-22">
            
            <!-- Left: Logo ONLY (logo.webp) -->
            <a href="{{ route('home') }}" class="shrink-0 group flex items-center z-10">
                <img src="{{ asset('logo.webp') }}" 
                     alt="Shallom Prefab Systems Logo" 
                     class="h-14 sm:h-16 w-auto object-contain transition-transform group-hover:scale-105">
            </a>

            <!-- Center: Perfectly Centered Desktop Navigation -->
            <nav class="hidden lg:flex items-center justify-center gap-7 text-xs font-bold uppercase tracking-wider text-slate-600 absolute left-1/2 -translate-x-1/2">
                <a href="{{ route('home') }}" class="hover:text-[#FF8B02] transition-colors py-1">
                    Home
                </a>
                <a href="{{ route('products') }}" class="hover:text-[#FF8B02] transition-colors py-1 font-bold">
                    Products
                </a>
                <a href="{{ route('home') }}#why-us" class="hover:text-[#FF8B02] transition-colors py-1">
                    Why Choose Us
                </a>
                <a href="{{ route('home') }}#testimonials" class="hover:text-[#FF8B02] transition-colors py-1">
                    Reviews
                </a>
                <a href="{{ route('home') }}#faq" class="hover:text-[#FF8B02] transition-colors py-1">
                    FAQ
                </a>
                <a href="{{ route('home') }}#contact" class="hover:text-[#FF8B02] transition-colors py-1">
                    Contact
                </a>
            </nav>

            <!-- Right: Direct Phone & Send Enquiry CTA Button -->
            <div class="hidden sm:flex items-center gap-5 shrink-0 z-10">
                <!-- Direct Phone Link -->
                <a href="tel:+917942550323" class="flex items-center gap-1.5 text-xs font-bold text-slate-700 hover:text-[#FF8B02] transition-colors">
                    <svg class="w-4 h-4 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                    <span>07942550323</span>
                </a>

                <!-- Send Enquiry Button -->
                <a href="{{ route('home') }}#contact" 
                   class="inline-flex items-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-6 py-2.5 rounded-full shadow-md shadow-orange-500/20 transition-all text-xs transform hover:-translate-y-0.5">
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"/></svg>
                    <span>Send Enquiry</span>
                </a>
            </div>

            <!-- Mobile Menu Toggle Button -->
            <div class="lg:hidden flex items-center z-10">
                <button @click="mobileMenuOpen = !mobileMenuOpen" 
                        type="button" 
                        class="p-2 rounded-lg text-slate-700 hover:bg-slate-100 focus:outline-none">
                    <svg x-show="!mobileMenuOpen" class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
                    <svg x-show="mobileMenuOpen" x-cloak class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>
            </div>

        </div>
    </div>

    <!-- Mobile Drawer -->
    <div x-show="mobileMenuOpen" 
         x-cloak 
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="opacity-0 -translate-y-4"
         x-transition:enter-end="opacity-100 translate-y-0"
         x-transition:leave="transition ease-in duration-150"
         x-transition:leave-start="opacity-100 translate-y-0"
         x-transition:leave-end="opacity-0 -translate-y-4"
         class="lg:hidden border-t border-slate-200 bg-white px-4 pt-4 pb-6 space-y-3 shadow-xl">
        
        <a href="{{ route('home') }}" @click="mobileMenuOpen = false" class="block py-2 text-[#FF8B02] font-extrabold text-sm">Home</a>
        <a href="{{ route('products') }}" @click="mobileMenuOpen = false" class="block py-2 text-slate-700 hover:text-[#FF8B02] font-semibold text-sm">Products</a>
        <a href="{{ route('home') }}#why-us" @click="mobileMenuOpen = false" class="block py-2 text-slate-700 hover:text-[#FF8B02] font-semibold text-sm">Why Choose Us</a>
        <a href="{{ route('home') }}#testimonials" @click="mobileMenuOpen = false" class="block py-2 text-slate-700 hover:text-[#FF8B02] font-semibold text-sm">Reviews</a>
        <a href="{{ route('home') }}#faq" @click="mobileMenuOpen = false" class="block py-2 text-slate-700 hover:text-[#FF8B02] font-semibold text-sm">FAQ</a>
        <a href="{{ route('home') }}#contact" @click="mobileMenuOpen = false" class="block py-2 text-slate-700 hover:text-[#FF8B02] font-semibold text-sm">Contact</a>

        <div class="pt-3 border-t border-slate-100 space-y-2">
            <a href="tel:+917942550323" class="block text-center bg-[#FFF4E5] text-[#FF8B02] font-bold py-2.5 rounded-full border border-[#FFD199] text-xs">
                Call 07942550323
            </a>
            <a href="{{ route('home') }}#contact" @click="mobileMenuOpen = false"
               class="block w-full text-center bg-[#FF8B02] text-white font-extrabold py-3 rounded-full shadow-md text-xs">
                Send Enquiry
            </a>
        </div>
    </div>

</header>