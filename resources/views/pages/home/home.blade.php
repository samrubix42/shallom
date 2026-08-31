<div class="space-y-0 text-slate-800 font-sans bg-white">

    <!-- 1. RESTORED FADE-OFF HERO SLIDER SECTION -->
    <section id="hero" 
             x-data="{ 
                 currentSlide: 0, 
                 totalSlides: 3,
                 nextSlide() { this.currentSlide = (this.currentSlide + 1) % this.totalSlides },
                 prevSlide() { this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides },
                 init() {
                     setInterval(() => { this.nextSlide() }, 6500);
                 }
             }" 
             class="relative bg-white text-slate-900 overflow-hidden min-h-[500px] sm:min-h-[560px] lg:min-h-[600px] flex items-center border-b border-slate-200">
        
        <!-- Slide 1: Modular Houses -->
        <div x-show="currentSlide === 0" 
             x-cloak
             x-transition:enter="transition ease-out duration-700"
             x-transition:enter-start="opacity-0 scale-98"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-400"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="absolute inset-0 w-full h-full flex items-center">
            
            <div class="absolute inset-y-0 right-0 w-full lg:w-3/5 h-full">
                <img src="{{ asset('images/prefab_house_hero_png_1788163818892.jpg') }}" 
                     alt="Modern Prefabricated House" 
                     class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-gradient-to-r from-white via-white/80 lg:via-white/90 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-white via-transparent to-transparent lg:hidden"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 w-full">
                <div class="max-w-xl space-y-6">
                    
                    <div class="inline-block bg-[#FFF4E5] border border-[#FFD199] text-[#FF8B02] text-xs font-extrabold uppercase tracking-wider px-4 py-1.5 rounded-full shadow-xs">
                        ENGINEERED PREFAB HOUSES & COTTAGES
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.12]">
                        Vibrant Modular <br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF8B02] to-orange-600">
                            Houses & Cottages
                        </span>
                    </h1>

                    <p class="text-slate-600 text-base sm:text-lg leading-relaxed font-medium">
                        Fostering rapid construction, superior thermal insulation, and custom interior layouts through pre-engineered steel framing and insulating Aerocon wall panels.
                    </p>

                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a href="{{ route('products') }}" 
                           class="inline-flex items-center justify-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-8 py-3.5 rounded-full shadow-lg shadow-orange-500/20 transition-all text-sm transform hover:-translate-y-0.5">
                            <span>Explore Catalog</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                        <a href="#contact" 
                           class="inline-flex items-center justify-center gap-2 bg-slate-900 hover:bg-slate-800 text-white font-bold px-7 py-3.5 rounded-full shadow-sm text-sm">
                            Get Custom Quote
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <!-- Slide 2: Commercial Site Offices -->
        <div x-show="currentSlide === 1" 
             x-cloak
             x-transition:enter="transition ease-out duration-700"
             x-transition:enter-start="opacity-0 scale-98"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-400"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="absolute inset-0 w-full h-full flex items-center">
            
            <div class="absolute inset-y-0 right-0 w-full lg:w-3/5 h-full">
                <img src="{{ asset('images/prefab_site_office_hero_png_1788163841263.jpg') }}" 
                     alt="Prefabricated Site Office Cabin" 
                     class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-gradient-to-r from-white via-white/80 lg:via-white/90 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-white via-transparent to-transparent lg:hidden"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 w-full">
                <div class="max-w-xl space-y-6">
                    
                    <div class="inline-block bg-[#FFF4E5] border border-[#FFD199] text-[#FF8B02] text-xs font-extrabold uppercase tracking-wider px-4 py-1.5 rounded-full shadow-xs">
                        COMMERCIAL SITE OFFICES & CABINS
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.12]">
                        Plug & Play <br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF8B02] to-orange-600">
                            Executive Site Offices
                        </span>
                    </h1>

                    <p class="text-slate-600 text-base sm:text-lg leading-relaxed font-medium">
                        Equipped with concealed electrical wiring, UPVC sliding windows, heavy vinyl flooring, and weatherproof insulated roof profile sheets.
                    </p>

                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a href="{{ route('products') }}" 
                           class="inline-flex items-center justify-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-8 py-3.5 rounded-full shadow-lg shadow-orange-500/20 transition-all text-sm transform hover:-translate-y-0.5">
                            <span>Explore Catalog</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                        <a href="#contact" 
                           class="inline-flex items-center justify-center gap-2 bg-slate-900 hover:bg-slate-800 text-white font-bold px-7 py-3.5 rounded-full shadow-sm text-sm">
                            Get Custom Quote
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <!-- Slide 3: Industrial Steel Sheds -->
        <div x-show="currentSlide === 2" 
             x-cloak
             x-transition:enter="transition ease-out duration-700"
             x-transition:enter-start="opacity-0 scale-98"
             x-transition:enter-end="opacity-100 scale-100"
             x-transition:leave="transition ease-in duration-400"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="absolute inset-0 w-full h-full flex items-center">
            
            <div class="absolute inset-y-0 right-0 w-full lg:w-3/5 h-full">
                <img src="{{ asset('images/steel_building_hero_png_1788163862265.jpg') }}" 
                     alt="Pre-Engineered Steel Shed" 
                     class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-gradient-to-r from-white via-white/80 lg:via-white/90 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-white via-transparent to-transparent lg:hidden"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 w-full">
                <div class="max-w-xl space-y-6">
                    
                    <div class="inline-block bg-[#FFF4E5] border border-[#FFD199] text-[#FF8B02] text-xs font-extrabold uppercase tracking-wider px-4 py-1.5 rounded-full shadow-xs">
                        INDUSTRIAL STEEL BUILDINGS & SHEDS
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-extrabold text-slate-900 tracking-tight leading-[1.12]">
                        High-Span Industrial <br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF8B02] to-orange-600">
                            Steel Buildings
                        </span>
                    </h1>

                    <p class="text-slate-600 text-base sm:text-lg leading-relaxed font-medium">
                        Heavy structural MS steel framework for factory warehouses, industrial sheds, labor camp complexes, and multi-story rooftop extensions.
                    </p>

                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a href="{{ route('products') }}" 
                           class="inline-flex items-center justify-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-8 py-3.5 rounded-full shadow-lg shadow-orange-500/20 transition-all text-sm transform hover:-translate-y-0.5">
                            <span>Explore Catalog</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                        <a href="#contact" 
                           class="inline-flex items-center justify-center gap-2 bg-slate-900 hover:bg-slate-800 text-white font-bold px-7 py-3.5 rounded-full shadow-sm text-sm">
                            Get Custom Quote
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <!-- Bottom Slider Controls -->
        <div class="absolute bottom-6 left-0 right-0 z-30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
                
                <div class="flex items-center gap-2">
                    <template x-for="(slide, index) in totalSlides" :key="index">
                        <button @click="currentSlide = index" 
                                :class="currentSlide === index ? 'w-8 bg-[#FF8B02]' : 'w-2.5 bg-slate-300 hover:bg-slate-400'"
                                class="h-2.5 rounded-full transition-all duration-300 focus:outline-none"
                                :aria-label="'Slide ' + (index + 1)"></button>
                    </template>
                </div>

                <div class="flex items-center gap-2">
                    <button @click="prevSlide()" 
                            class="w-10 h-10 rounded-full border border-slate-300 bg-white/90 hover:bg-[#FFF4E5] hover:border-[#FF8B02] text-slate-700 hover:text-[#FF8B02] flex items-center justify-center transition-colors shadow-sm focus:outline-none">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <button @click="nextSlide()" 
                            class="w-10 h-10 rounded-full border border-slate-300 bg-white/90 hover:bg-[#FFF4E5] hover:border-[#FF8B02] text-slate-700 hover:text-[#FF8B02] flex items-center justify-center transition-colors shadow-sm focus:outline-none">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>

            </div>
        </div>

    </section>

    <!-- 2. CONTINUOUS SCROLLING MARQUEE TICKER BAR (BELOW HERO SLIDER) -->
    <div class="bg-slate-900 text-white py-3.5 overflow-hidden border-b border-slate-800 relative shadow-inner">
        <div class="animate-marquee whitespace-nowrap flex items-center gap-12 text-xs font-bold uppercase tracking-widest">
            
            <!-- Marquee Items Group 1 -->
            <div class="flex items-center gap-12 shrink-0">
                <span class="flex items-center gap-2 text-[#FF8B02]">
                    <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                    L&T Infrastructure Preferred Partner
                </span>
                <span class="text-slate-600">•</span>
                <span>25+ Years Structural Lifespan</span>
                <span class="text-slate-600">•</span>
                <span class="text-[#FF8B02]">70% Rapid Construction Turnaround</span>
                <span class="text-slate-600">•</span>
                <span>100% Demountable Nut & Bolt Relocatable</span>
                <span class="text-slate-600">•</span>
                <span class="text-emerald-400">Tata Housing Approved</span>
                <span class="text-slate-600">•</span>
                <span>Thermal EPS / PUF Wall Insulation</span>
                <span class="text-slate-600">•</span>
                <span class="text-[#FF8B02]">GSTIN: 07ANDPG4822C2ZI</span>
                <span class="text-slate-600">•</span>
                <span>Delhi NCR Manufacturing Facility</span>
                <span class="text-slate-600">•</span>
                <span class="text-emerald-400">Zero Seepage Overlapping Roof Sheets</span>
                <span class="text-slate-600">•</span>
            </div>

            <!-- Marquee Items Group 2 (Duplicate for Seamless Infinity Loop) -->
            <div class="flex items-center gap-12 shrink-0">
                <span class="flex items-center gap-2 text-[#FF8B02]">
                    <svg class="w-4 h-4 text-emerald-400" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                    L&T Infrastructure Preferred Partner
                </span>
                <span class="text-slate-600">•</span>
                <span>25+ Years Structural Lifespan</span>
                <span class="text-slate-600">•</span>
                <span class="text-[#FF8B02]">70% Rapid Construction Turnaround</span>
                <span class="text-slate-600">•</span>
                <span>100% Demountable Nut & Bolt Relocatable</span>
                <span class="text-slate-600">•</span>
                <span class="text-emerald-400">Tata Housing Approved</span>
                <span class="text-slate-600">•</span>
                <span>Thermal EPS / PUF Wall Insulation</span>
                <span class="text-slate-600">•</span>
                <span class="text-[#FF8B02]">GSTIN: 07ANDPG4822C2ZI</span>
                <span class="text-slate-600">•</span>
                <span>Delhi NCR Manufacturing Facility</span>
                <span class="text-slate-600">•</span>
                <span class="text-emerald-400">Zero Seepage Overlapping Roof Sheets</span>
                <span class="text-slate-600">•</span>
            </div>

        </div>
    </div>

    <!-- 3. PREFAB HOUSES & PREFAB BUILDINGS CATEGORY SECTION (FULL SIZE IMAGES) -->
    <section id="categories" class="py-20 sm:py-28 bg-slate-50 text-slate-900 relative border-b border-slate-200">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <!-- Section Header -->
            <div class="text-center max-w-3xl mx-auto mb-16 space-y-3">
                <span class="inline-block bg-[#FFF4E5] border border-[#FFD199] text-[#FF8B02] text-xs font-extrabold uppercase tracking-widest px-4 py-1.5 rounded-full shadow-xs">
                    OUR CORE PRODUCT RANGE
                </span>
                
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 uppercase tracking-tight">
                    PREFAB HOUSES & PREFAB BUILDINGS
                </h2>
                
                <div class="w-24 h-1.5 bg-gradient-to-r from-[#FF8B02] via-orange-400 to-[#FF8B02] mx-auto rounded-full shadow-xs"></div>
                
                <p class="text-slate-600 text-sm sm:text-base font-medium max-w-2xl mx-auto leading-relaxed pt-1">
                    Explore our engineered modular solutions crafted for industrial site management, commercial extensions, and luxury residential living.
                </p>
            </div>

            <!-- 6 Structured Cards with Full-Size Top Cover Images -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8 sm:gap-10">
                
                <!-- Category Card 1: Prefab Houses -->
                <div class="bg-white rounded-3xl border border-slate-200/90 overflow-hidden shadow-md hover:shadow-2xl hover:border-[#FF8B02]/50 transition-all duration-500 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-56 sm:h-64 w-full overflow-hidden bg-slate-100 border-b border-slate-100">
                            <img src="{{ asset('images/cat_prefab_houses_png_1788163884847.jpg') }}" 
                                 alt="Prefab Houses" 
                                 class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700">
                            <div class="absolute top-4 left-4">
                                <span class="bg-slate-900/85 backdrop-blur-md text-white text-[11px] font-extrabold uppercase px-3.5 py-1.5 rounded-full shadow-md border border-white/20">
                                    01 • Prefab Houses
                                </span>
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <h3 class="text-xl font-extrabold text-slate-900 group-hover:text-[#FF8B02] transition-colors border-b border-slate-100 pb-3">
                                Prefab Houses
                            </h3>

                            <ul class="space-y-2 text-xs sm:text-sm text-slate-600 font-medium">
                                <li>
                                    <a href="{{ route('products') }}" 
                                       class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-all group/link">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            Prefab Portable House
                                        </span>
                                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover/link:text-[#FF8B02] group-hover/link:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('products') }}" 
                                       class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-all group/link">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            Prefab Cottage House
                                        </span>
                                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover/link:text-[#FF8B02] group-hover/link:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('products') }}" 
                                       class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-all group/link">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            Prefabricated Modular Cottage
                                        </span>
                                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover/link:text-[#FF8B02] group-hover/link:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('products') }}" 
                           class="w-full bg-[#FFF4E5] hover:bg-[#FF8B02] text-[#FF8B02] hover:text-white font-extrabold text-xs py-3.5 rounded-2xl border border-[#FFD199] shadow-xs flex items-center justify-center gap-1.5 transition-all">
                            <span>+ View All Houses</span>
                        </a>
                    </div>
                </div>

                <!-- Category Card 2: Prefab Structures -->
                <div class="bg-white rounded-3xl border border-slate-200/90 overflow-hidden shadow-md hover:shadow-2xl hover:border-[#FF8B02]/50 transition-all duration-500 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-56 sm:h-64 w-full overflow-hidden bg-slate-100 border-b border-slate-100">
                            <img src="{{ asset('images/cat_prefab_structures_png_1788163908538.jpg') }}" 
                                 alt="Prefab Structures" 
                                 class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700">
                            <div class="absolute top-4 left-4">
                                <span class="bg-slate-900/85 backdrop-blur-md text-white text-[11px] font-extrabold uppercase px-3.5 py-1.5 rounded-full shadow-md border border-white/20">
                                    02 • Prefab Structures
                                </span>
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <h3 class="text-xl font-extrabold text-slate-900 group-hover:text-[#FF8B02] transition-colors border-b border-slate-100 pb-3">
                                Prefab Structures
                            </h3>

                            <ul class="space-y-2 text-xs sm:text-sm text-slate-600 font-medium">
                                <li>
                                    <a href="{{ route('products') }}" 
                                       class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-all group/link">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            Building Metal Structure
                                        </span>
                                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover/link:text-[#FF8B02] group-hover/link:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('products') }}" 
                                       class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-all group/link">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            Prefab Double Story Buildings
                                        </span>
                                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover/link:text-[#FF8B02] group-hover/link:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('products') }}" 
                                       class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-all group/link">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            Pre fabricated Stall
                                        </span>
                                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover/link:text-[#FF8B02] group-hover/link:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('products') }}" 
                           class="w-full bg-[#FFF4E5] hover:bg-[#FF8B02] text-[#FF8B02] hover:text-white font-extrabold text-xs py-3.5 rounded-2xl border border-[#FFD199] shadow-xs flex items-center justify-center gap-1.5 transition-all">
                            <span>+ View All Structures</span>
                        </a>
                    </div>
                </div>

                <!-- Category Card 3: Prefab Buildings -->
                <div class="bg-white rounded-3xl border border-slate-200/90 overflow-hidden shadow-md hover:shadow-2xl hover:border-[#FF8B02]/50 transition-all duration-500 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-56 sm:h-64 w-full overflow-hidden bg-slate-100 border-b border-slate-100">
                            <img src="{{ asset('images/cat_prefab_buildings_png_1788163932649.jpg') }}" 
                                 alt="Prefab Buildings" 
                                 class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700">
                            <div class="absolute top-4 left-4">
                                <span class="bg-slate-900/85 backdrop-blur-md text-white text-[11px] font-extrabold uppercase px-3.5 py-1.5 rounded-full shadow-md border border-white/20">
                                    03 • Prefab Buildings
                                </span>
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <h3 class="text-xl font-extrabold text-slate-900 group-hover:text-[#FF8B02] transition-colors border-b border-slate-100 pb-3">
                                Prefab Buildings
                            </h3>

                            <ul class="space-y-2 text-xs sm:text-sm text-slate-600 font-medium">
                                <li>
                                    <a href="{{ route('products') }}" 
                                       class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-all group/link">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            Prefabricated School Building
                                        </span>
                                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover/link:text-[#FF8B02] group-hover/link:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('products') }}" 
                                       class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-all group/link">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            Roof Top Buildings
                                        </span>
                                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover/link:text-[#FF8B02] group-hover/link:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('products') }}" 
                                       class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-all group/link">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            Prefab School Building
                                        </span>
                                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover/link:text-[#FF8B02] group-hover/link:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('products') }}" 
                           class="w-full bg-[#FFF4E5] hover:bg-[#FF8B02] text-[#FF8B02] hover:text-white font-extrabold text-xs py-3.5 rounded-2xl border border-[#FFD199] shadow-xs flex items-center justify-center gap-1.5 transition-all">
                            <span>+ View All Buildings</span>
                        </a>
                    </div>
                </div>

                <!-- Category Card 4: Prefebricated Offices -->
                <div class="bg-white rounded-3xl border border-slate-200/90 overflow-hidden shadow-md hover:shadow-2xl hover:border-[#FF8B02]/50 transition-all duration-500 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-56 sm:h-64 w-full overflow-hidden bg-slate-100 border-b border-slate-100">
                            <img src="{{ asset('images/cat_prefab_offices_png_1788163956003.jpg') }}" 
                                 alt="Prefebricated Offices" 
                                 class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700">
                            <div class="absolute top-4 left-4">
                                <span class="bg-slate-900/85 backdrop-blur-md text-white text-[11px] font-extrabold uppercase px-3.5 py-1.5 rounded-full shadow-md border border-white/20">
                                    04 • Prefab Offices
                                </span>
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <h3 class="text-xl font-extrabold text-slate-900 group-hover:text-[#FF8B02] transition-colors border-b border-slate-100 pb-3">
                                Prefebricated Offices
                            </h3>

                            <ul class="space-y-2 text-xs sm:text-sm text-slate-600 font-medium">
                                <li>
                                    <a href="{{ route('products') }}" 
                                       class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-all group/link">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            Prefab Site Office
                                        </span>
                                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover/link:text-[#FF8B02] group-hover/link:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('products') }}" 
                                       class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-all group/link">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            Prefabricated Classroom Structure
                                        </span>
                                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover/link:text-[#FF8B02] group-hover/link:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('products') }}" 
                                       class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-all group/link">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            Pre Fabricated Building
                                        </span>
                                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover/link:text-[#FF8B02] group-hover/link:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('products') }}" 
                           class="w-full bg-[#FFF4E5] hover:bg-[#FF8B02] text-[#FF8B02] hover:text-white font-extrabold text-xs py-3.5 rounded-2xl border border-[#FFD199] shadow-xs flex items-center justify-center gap-1.5 transition-all">
                            <span>+ View All Offices</span>
                        </a>
                    </div>
                </div>

                <!-- Category Card 5: Prefab Cabins -->
                <div class="bg-white rounded-3xl border border-slate-200/90 overflow-hidden shadow-md hover:shadow-2xl hover:border-[#FF8B02]/50 transition-all duration-500 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-56 sm:h-64 w-full overflow-hidden bg-slate-100 border-b border-slate-100">
                            <img src="{{ asset('images/cat_prefab_cabins_png_1788163983749.jpg') }}" 
                                 alt="Prefab Cabins" 
                                 class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700">
                            <div class="absolute top-4 left-4">
                                <span class="bg-slate-900/85 backdrop-blur-md text-white text-[11px] font-extrabold uppercase px-3.5 py-1.5 rounded-full shadow-md border border-white/20">
                                    05 • Prefab Cabins
                                </span>
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <h3 class="text-xl font-extrabold text-slate-900 group-hover:text-[#FF8B02] transition-colors border-b border-slate-100 pb-3">
                                Prefab Cabins
                            </h3>

                            <ul class="space-y-2 text-xs sm:text-sm text-slate-600 font-medium">
                                <li>
                                    <a href="{{ route('products') }}" 
                                       class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-all group/link">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            Prefabricated Cottage Homes
                                        </span>
                                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover/link:text-[#FF8B02] group-hover/link:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('products') }}" 
                                       class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-all group/link">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            Prefab Bunk House
                                        </span>
                                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover/link:text-[#FF8B02] group-hover/link:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('products') }}" 
                                       class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-all group/link">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            Prefabricated Portable Cabin
                                        </span>
                                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover/link:text-[#FF8B02] group-hover/link:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('products') }}" 
                           class="w-full bg-[#FFF4E5] hover:bg-[#FF8B02] text-[#FF8B02] hover:text-white font-extrabold text-xs py-3.5 rounded-2xl border border-[#FFD199] shadow-xs flex items-center justify-center gap-1.5 transition-all">
                            <span>+ View All Cabins</span>
                        </a>
                    </div>
                </div>

                <!-- Category Card 6: Labour Hutments -->
                <div class="bg-white rounded-3xl border border-slate-200/90 overflow-hidden shadow-md hover:shadow-2xl hover:border-[#FF8B02]/50 transition-all duration-500 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-56 sm:h-64 w-full overflow-hidden bg-slate-100 border-b border-slate-100">
                            <img src="{{ asset('images/cat_labour_hutments_png_1788164012359.jpg') }}" 
                                 alt="Labour Hutments for Construction Sites" 
                                 class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700">
                            <div class="absolute top-4 left-4">
                                <span class="bg-slate-900/85 backdrop-blur-md text-white text-[11px] font-extrabold uppercase px-3.5 py-1.5 rounded-full shadow-md border border-white/20">
                                    06 • Labour Hutments
                                </span>
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <h3 class="text-xl font-extrabold text-slate-900 group-hover:text-[#FF8B02] transition-colors border-b border-slate-100 pb-3">
                                Labour Hutments
                            </h3>

                            <ul class="space-y-2 text-xs sm:text-sm text-slate-600 font-medium">
                                <li>
                                    <a href="{{ route('products') }}" 
                                       class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-all group/link">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            Prefab Labour Room
                                        </span>
                                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover/link:text-[#FF8B02] group-hover/link:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('products') }}" 
                                       class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-all group/link">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            Prefab Labour Camp
                                        </span>
                                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover/link:text-[#FF8B02] group-hover/link:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </li>
                                <li>
                                    <a href="{{ route('products') }}" 
                                       class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-all group/link">
                                        <span class="flex items-center gap-2">
                                            <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                            Portable Labour Rooms
                                        </span>
                                        <svg class="w-3.5 h-3.5 text-slate-400 group-hover/link:text-[#FF8B02] group-hover/link:translate-x-0.5 transition-all" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('products') }}" 
                           class="w-full bg-[#FFF4E5] hover:bg-[#FF8B02] text-[#FF8B02] hover:text-white font-extrabold text-xs py-3.5 rounded-2xl border border-[#FFD199] shadow-xs flex items-center justify-center gap-1.5 transition-all">
                            <span>+ View All Labour Hutments</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. WHY CHOOSE US / VALUE PROPOSITIONS -->
    <section id="why-us" class="py-20 sm:py-28 bg-white text-slate-900 border-b border-slate-200 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-16">
                <span class="text-[#FF8B02] text-xs font-extrabold uppercase tracking-widest bg-[#FFF4E5] px-3.5 py-1.5 rounded-full border border-[#FFD199]">
                    Engineered Excellence
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Why Industry Leaders Choose Shallom Prefab</h2>
                <p class="text-slate-600 text-sm sm:text-base mt-2 font-medium">
                    Our modular pre-engineered buildings outperform traditional civil masonry across every critical engineering metric.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <div class="bg-slate-50 border border-slate-200 p-6 rounded-3xl hover:border-[#FF8B02] hover:shadow-lg transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-[#FFF4E5] border border-[#FFD199] flex items-center justify-center text-[#FF8B02] mb-6 group-hover:scale-110 transition-transform font-bold">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-slate-900 mb-2">70% Faster Turnaround</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-medium">
                        Pre-fabricated off-site components allow rapid assembly in days rather than months of chaotic site construction.
                    </p>
                </div>

                <div class="bg-slate-50 border border-slate-200 p-6 rounded-3xl hover:border-[#FF8B02] hover:shadow-lg transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-[#FFF4E5] border border-[#FFD199] flex items-center justify-center text-[#FF8B02] mb-6 group-hover:scale-110 transition-transform font-bold">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-slate-900 mb-2">All-Weather Durability</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-medium">
                        Heavy galvanized steel structure withstands high-velocity wind pressures, heavy rains, and seismic zone IV/V shocks.
                    </p>
                </div>

                <div class="bg-slate-50 border border-slate-200 p-6 rounded-3xl hover:border-[#FF8B02] hover:shadow-lg transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-[#FFF4E5] border border-[#FFD199] flex items-center justify-center text-[#FF8B02] mb-6 group-hover:scale-110 transition-transform font-bold">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-slate-900 mb-2">100% Relocatable</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-medium">
                        Demountable nut-and-bolt framing ensures modules can be dismantled, moved, and re-erected at new construction sites effortlessly.
                    </p>
                </div>

                <div class="bg-slate-50 border border-slate-200 p-6 rounded-3xl hover:border-[#FF8B02] hover:shadow-lg transition-all group">
                    <div class="w-12 h-12 rounded-2xl bg-[#FFF4E5] border border-[#FFD199] flex items-center justify-center text-[#FF8B02] mb-6 group-hover:scale-110 transition-transform font-bold">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                    </div>
                    <h3 class="text-lg font-extrabold text-slate-900 mb-2">Energy & Thermal Control</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-medium">
                        High-density PUF/EPS sandwich panel core cuts HVAC cooling and heating energy consumption by up to 40%.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. 3-CARD AUTO-SLIDING TESTIMONIALS -->
    <section id="testimonials" 
             x-data="{ 
                 page: 0,
                 totalPages: 2,
                 timer: null,
                 next() { this.page = (this.page + 1) % this.totalPages },
                 prev() { this.page = (this.page - 1 + this.totalPages) % this.totalPages },
                 start() { this.timer = setInterval(() => { this.next() }, 6000) },
                 stop() { clearInterval(this.timer) }
             }" 
             x-init="start()"
             @mouseenter="stop()"
             @mouseleave="start()"
             class="py-20 sm:py-28 bg-slate-50 text-slate-900 relative border-b border-slate-200 overflow-hidden">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-14">
                <div class="space-y-3 max-w-2xl">
                    <span class="inline-block bg-[#FFF4E5] border border-[#FFD199] text-[#FF8B02] text-xs font-extrabold uppercase tracking-widest px-4 py-1.5 rounded-full shadow-xs">
                        CLIENT REVIEWS & REPUTATION
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-extrabold text-slate-900 tracking-tight">
                        Trusted by Engineering Leaders Across India
                    </h2>
                    <p class="text-slate-600 text-sm sm:text-base font-medium">
                        Real stories from infrastructure heads, commercial developers, and institutional buyers.
                    </p>
                </div>

                <div class="flex items-center gap-3 shrink-0">
                    <button @click="prev()" 
                            class="w-12 h-12 rounded-full border border-slate-200 bg-white hover:bg-[#FFF4E5] hover:border-[#FF8B02] text-slate-700 hover:text-[#FF8B02] flex items-center justify-center transition-all shadow-sm focus:outline-none group">
                        <svg class="w-5 h-5 group-hover:-translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <button @click="next()" 
                            class="w-12 h-12 rounded-full border border-slate-200 bg-white hover:bg-[#FFF4E5] hover:border-[#FF8B02] text-slate-700 hover:text-[#FF8B02] flex items-center justify-center transition-all shadow-sm focus:outline-none group">
                        <svg class="w-5 h-5 group-hover:translate-x-0.5 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>

            <!-- PAGE 1 (3 Cards) -->
            <div x-show="page === 0" 
                 x-cloak
                 x-transition:enter="transition ease-out duration-700"
                 x-transition:enter-start="opacity-0 scale-98"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                
                <div class="bg-white rounded-3xl p-7 border border-slate-200 shadow-sm hover:shadow-2xl hover:border-[#FF8B02]/50 transition-all duration-500 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1 text-[#FF8B02]">
                                <template x-for="i in 5"><svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></template>
                            </div>
                            <span class="bg-[#FFF4E5] text-[#FF8B02] text-[10px] font-extrabold uppercase px-2.5 py-1 rounded-full border border-[#FFD199]">
                                Site Office
                            </span>
                        </div>
                        <p class="text-slate-700 text-sm font-semibold leading-relaxed italic">
                            "Shallom delivered our 15,000 sq. ft. modular site office complex in 5 days! Thermal insulation during Delhi summers keeps inside temperatures cool."
                        </p>
                    </div>
                    <div class="flex items-center gap-3.5 pt-5 border-t border-slate-100 mt-6">
                        <div class="w-11 h-11 rounded-full bg-[#FFF4E5] border border-[#FFD199] flex items-center justify-center text-[#FF8B02] font-black text-sm shrink-0">SV</div>
                        <div>
                            <div class="text-sm font-extrabold text-slate-900">Sunil Verma</div>
                            <div class="text-xs text-slate-500 font-medium">Project Director • L&T Infra</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-7 border border-slate-200 shadow-sm hover:shadow-2xl hover:border-[#FF8B02]/50 transition-all duration-500 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1 text-[#FF8B02]">
                                <template x-for="i in 5"><svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></template>
                            </div>
                            <span class="bg-[#FFF4E5] text-[#FF8B02] text-[10px] font-extrabold uppercase px-2.5 py-1 rounded-full border border-[#FFD199]">
                                Labour Colony
                            </span>
                        </div>
                        <p class="text-slate-700 text-sm font-semibold leading-relaxed italic">
                            "The labour hutments supplied for our township site passed all heavy monsoon tests with zero water leakage. Demountable nut-bolt framework makes relocating seamless."
                        </p>
                    </div>
                    <div class="flex items-center gap-3.5 pt-5 border-t border-slate-100 mt-6">
                        <div class="w-11 h-11 rounded-full bg-[#FFF4E5] border border-[#FFD199] flex items-center justify-center text-[#FF8B02] font-black text-sm shrink-0">RA</div>
                        <div>
                            <div class="text-sm font-extrabold text-slate-900">Rajesh Agarwal</div>
                            <div class="text-xs text-slate-500 font-medium">Site Operations • Tata Housing</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-7 border border-slate-200 shadow-sm hover:shadow-2xl hover:border-[#FF8B02]/50 transition-all duration-500 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1 text-[#FF8B02]">
                                <template x-for="i in 5"><svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></template>
                            </div>
                            <span class="bg-[#FFF4E5] text-[#FF8B02] text-[10px] font-extrabold uppercase px-2.5 py-1 rounded-full border border-[#FFD199]">
                                School Building
                            </span>
                        </div>
                        <p class="text-slate-700 text-sm font-semibold leading-relaxed italic">
                            "We needed an urgent 2-story school expansion erected during summer break. Shallom completed structural steel framing and soundproof Aerocon panels on schedule."
                        </p>
                    </div>
                    <div class="flex items-center gap-3.5 pt-5 border-t border-slate-100 mt-6">
                        <div class="w-11 h-11 rounded-full bg-[#FFF4E5] border border-[#FFD199] flex items-center justify-center text-[#FF8B02] font-black text-sm shrink-0">AR</div>
                        <div>
                            <div class="text-sm font-extrabold text-slate-900">Dr. Ananya Roy</div>
                            <div class="text-xs text-slate-500 font-medium">Trustee • Greenfield Intl. School</div>
                        </div>
                    </div>
                </div>

            </div>

            <!-- PAGE 2 (3 Cards) -->
            <div x-show="page === 1" 
                 x-cloak
                 x-transition:enter="transition ease-out duration-700"
                 x-transition:enter-start="opacity-0 scale-98"
                 x-transition:enter-end="opacity-100 scale-100"
                 x-transition:leave="transition ease-in duration-300"
                 x-transition:leave-start="opacity-100"
                 x-transition:leave-end="opacity-0"
                 class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
                
                <div class="bg-white rounded-3xl p-7 border border-slate-200 shadow-sm hover:shadow-2xl hover:border-[#FF8B02]/50 transition-all duration-500 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1 text-[#FF8B02]">
                                <template x-for="i in 5"><svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></template>
                            </div>
                            <span class="bg-[#FFF4E5] text-[#FF8B02] text-[10px] font-extrabold uppercase px-2.5 py-1 rounded-full border border-[#FFD199]">
                                Eco Resort Cottages
                            </span>
                        </div>
                        <p class="text-slate-700 text-sm font-semibold leading-relaxed italic">
                            "Shallom Prefab's modular cottages transformed our eco-resort footprint. Their team erected luxury wooden-finish cottages without harming surrounding trees."
                        </p>
                    </div>
                    <div class="flex items-center gap-3.5 pt-5 border-t border-slate-100 mt-6">
                        <div class="w-11 h-11 rounded-full bg-[#FFF4E5] border border-[#FFD199] flex items-center justify-center text-[#FF8B02] font-black text-sm shrink-0">VS</div>
                        <div>
                            <div class="text-sm font-extrabold text-slate-900">Vikramaditya Singh</div>
                            <div class="text-xs text-slate-500 font-medium">MD • Himalayan Eco Resorts</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-7 border border-slate-200 shadow-sm hover:shadow-2xl hover:border-[#FF8B02]/50 transition-all duration-500 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1 text-[#FF8B02]">
                                <template x-for="i in 5"><svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></template>
                            </div>
                            <span class="bg-[#FFF4E5] text-[#FF8B02] text-[10px] font-extrabold uppercase px-2.5 py-1 rounded-full border border-[#FFD199]">
                                Rooftop Office
                            </span>
                        </div>
                        <p class="text-slate-700 text-sm font-semibold leading-relaxed italic">
                            "Added 4,000 sq. ft. executive rooftop office on our commercial complex. Lightweight structural frame avoided heavy civil load issues completely!"
                        </p>
                    </div>
                    <div class="flex items-center gap-3.5 pt-5 border-t border-slate-100 mt-6">
                        <div class="w-11 h-11 rounded-full bg-[#FFF4E5] border border-[#FFD199] flex items-center justify-center text-[#FF8B02] font-black text-sm shrink-0">KM</div>
                        <div>
                            <div class="text-sm font-extrabold text-slate-900">Karan Malhotra</div>
                            <div class="text-xs text-slate-500 font-medium">VP Infra • DLF Commercial</div>
                        </div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-7 border border-slate-200 shadow-sm hover:shadow-2xl hover:border-[#FF8B02]/50 transition-all duration-500 flex flex-col justify-between group">
                    <div class="space-y-4">
                        <div class="flex items-center justify-between">
                            <div class="flex items-center gap-1 text-[#FF8B02]">
                                <template x-for="i in 5"><svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></template>
                            </div>
                            <span class="bg-[#FFF4E5] text-[#FF8B02] text-[10px] font-extrabold uppercase px-2.5 py-1 rounded-full border border-[#FFD199]">
                                Bunk House
                            </span>
                        </div>
                        <p class="text-slate-700 text-sm font-semibold leading-relaxed italic">
                            "Precision engineering and clean panel finish. Their portable bunk houses with attached toilets exceeded our architectural standards for mining quarters."
                        </p>
                    </div>
                    <div class="flex items-center gap-3.5 pt-5 border-t border-slate-100 mt-6">
                        <div class="w-11 h-11 rounded-full bg-[#FFF4E5] border border-[#FFD199] flex items-center justify-center text-[#FF8B02] font-black text-sm shrink-0">PS</div>
                        <div>
                            <div class="text-sm font-extrabold text-slate-900">Priya Sharma</div>
                            <div class="text-xs text-slate-500 font-medium">Principal Architect • Modern Spaces</div>
                        </div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- 6. RELATABLE FAQ ACCORDION SECTION -->
    <section id="faq" 
             x-data="{ openFaq: 0 }" 
             class="py-16 sm:py-24 bg-white text-slate-900 relative border-b border-slate-200">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-14">
                <span class="text-[#FF8B02] text-xs font-extrabold uppercase tracking-widest bg-[#FFF4E5] px-3.5 py-1.5 rounded-full border border-[#FFD199]">
                    Got Questions?
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Frequently Asked Questions</h2>
                <p class="text-slate-600 text-sm mt-2 font-medium">Everything you need to know about Shallom prefabricated buildings, site offices, and modular construction.</p>
            </div>

            <div class="space-y-4">
                
                <div class="border border-slate-200 rounded-2xl overflow-hidden bg-white shadow-xs transition-all">
                    <button @click="openFaq = (openFaq === 0 ? null : 0)" 
                            class="w-full px-6 py-4 text-left font-bold text-sm sm:text-base text-slate-900 flex justify-between items-center gap-4 hover:text-[#FF8B02] transition-colors">
                        <span>What is the expected lifespan of Shallom prefabricated houses and buildings?</span>
                        <svg class="w-5 h-5 text-[#FF8B02] shrink-0 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 0 }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="openFaq === 0" x-cloak x-collapse class="px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 font-medium">
                        Our prefabricated structures are engineered using anti-corrosive IS 2062 grade steel framework and heavy EPS/PUF sandwich wall panels, offering a structural lifespan of 20 to 25+ years with basic maintenance.
                    </div>
                </div>

                <div class="border border-slate-200 rounded-2xl overflow-hidden bg-white shadow-xs transition-all">
                    <button @click="openFaq = (openFaq === 1 ? null : 1)" 
                            class="w-full px-6 py-4 text-left font-bold text-sm sm:text-base text-slate-900 flex justify-between items-center gap-4 hover:text-[#FF8B02] transition-colors">
                        <span>How fast can a site office cabin or labour camp be delivered and installed?</span>
                        <svg class="w-5 h-5 text-[#FF8B02] shrink-0 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 1 }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="openFaq === 1" x-cloak x-collapse class="px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 font-medium">
                        Standard site offices and portable cabins (up to 500 sq. ft.) are dispatched within 3 to 5 days and erected on-site in less than 48 hours. Larger labour colonies (2,000+ sq. ft.) are completed within 7 to 14 business days.
                    </div>
                </div>

                <div class="border border-slate-200 rounded-2xl overflow-hidden bg-white shadow-xs transition-all">
                    <button @click="openFaq = (openFaq === 2 ? null : 2)" 
                            class="w-full px-6 py-4 text-left font-bold text-sm sm:text-base text-slate-900 flex justify-between items-center gap-4 hover:text-[#FF8B02] transition-colors">
                        <span>Are prefab structures leak-proof, fire-resistant, and storm-proof?</span>
                        <svg class="w-5 h-5 text-[#FF8B02] shrink-0 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 2 }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="openFaq === 2" x-cloak x-collapse class="px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 font-medium">
                        Yes! All roof profile sheets feature insulated overlapping joints to eliminate water seepage. Aerocon and PUF wall panels are fire-retardant (up to 2-hour rating) and wind-tunnel tested for high-velocity monsoon storms.
                    </div>
                </div>

                <div class="border border-slate-200 rounded-2xl overflow-hidden bg-white shadow-xs transition-all">
                    <button @click="openFaq = (openFaq === 3 ? null : 3)" 
                            class="w-full px-6 py-4 text-left font-bold text-sm sm:text-base text-slate-900 flex justify-between items-center gap-4 hover:text-[#FF8B02] transition-colors">
                        <span>Can we dismantle and relocate the cabins to a new construction site later?</span>
                        <svg class="w-5 h-5 text-[#FF8B02] shrink-0 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 3 }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="openFaq === 3" x-cloak x-collapse class="px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 font-medium">
                        Absolutely. Shallom prefab modules feature demountable nut-and-bolt steel frames. When your construction project ends, the entire cabin or labour hutment can be unbolted, transported in a truck, and reassembled at your next project location.
                    </div>
                </div>

                <div class="border border-slate-200 rounded-2xl overflow-hidden bg-white shadow-xs transition-all">
                    <button @click="openFaq = (openFaq === 4 ? null : 4)" 
                            class="w-full px-6 py-4 text-left font-bold text-sm sm:text-base text-slate-900 flex justify-between items-center gap-4 hover:text-[#FF8B02] transition-colors">
                        <span>What kind of ground foundation is required prior to installation?</span>
                        <svg class="w-5 h-5 text-[#FF8B02] shrink-0 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 4 }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="openFaq === 4" x-cloak x-collapse class="px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 font-medium">
                        Unlike traditional brick buildings requiring deep concrete excavation, prefab cabins only require a plain level PCC (Plain Cement Concrete) slab pad or simple concrete pedestal pillars at structural anchor points.
                    </div>
                </div>

                <div class="border border-slate-200 rounded-2xl overflow-hidden bg-white shadow-xs transition-all">
                    <button @click="openFaq = (openFaq === 5 ? null : 5)" 
                            class="w-full px-6 py-4 text-left font-bold text-sm sm:text-base text-slate-900 flex justify-between items-center gap-4 hover:text-[#FF8B02] transition-colors">
                        <span>Do you provide custom floor plans, doors, windows, and electrical fittings?</span>
                        <svg class="w-5 h-5 text-[#FF8B02] shrink-0 transition-transform duration-300" :class="{ 'rotate-180': openFaq === 5 }" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                    </button>
                    <div x-show="openFaq === 5" x-cloak x-collapse class="px-6 pb-5 pt-1 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-100 font-medium">
                        Yes, every unit is 100% customizable. You can specify room partitions, UPVC or aluminium sliding windows, attached toilet blocks, LED panel lights, and heavy AC wiring sockets according to your exact layout drawing.
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- 7. CONTACT & QUICK ENQUIRY FORM -->
    <section id="contact" class="py-16 sm:py-24 bg-white text-slate-900 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                <div class="lg:col-span-5 space-y-8">
                    <div>
                        <span class="text-[#FF8B02] text-xs font-extrabold uppercase tracking-widest bg-[#FFF4E5] px-3.5 py-1.5 rounded-full border border-[#FFD199]">
                            Direct Contact
                        </span>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-4">Talk to Our Engineering Team</h2>
                        <p class="text-slate-600 text-sm mt-2 leading-relaxed font-medium">
                            Have a custom footprint drawing or urgent construction site requirement? Get in touch directly with our plant team in New Delhi.
                        </p>
                    </div>

                    <div class="space-y-4">
                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-200 shadow-xs">
                            <div class="w-10 h-10 rounded-xl bg-[#FFF4E5] border border-[#FFD199] flex items-center justify-center text-[#FF8B02] shrink-0 font-bold">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                            </div>
                            <div>
                                <div class="text-xs text-slate-500 font-semibold">Phone Hotline (78% Response Rate)</div>
                                <a href="tel:+917942550323" class="text-lg font-black text-slate-900 hover:text-[#FF8B02] transition-colors">07942550323</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-200 shadow-xs">
                            <div class="w-10 h-10 rounded-xl bg-[#FFF4E5] border border-[#FFD199] flex items-center justify-center text-[#FF8B02] shrink-0 font-bold">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                            </div>
                            <div>
                                <div class="text-xs text-slate-500 font-semibold">Head Office & Plant</div>
                                <div class="text-sm font-bold text-slate-900 mt-0.5">Shallom Prefab Systems</div>
                                <div class="text-xs text-slate-600 mt-0.5 font-medium">New Delhi, Delhi - 110092, India</div>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-4 rounded-2xl bg-slate-50 border border-slate-200 shadow-xs">
                            <div class="w-10 h-10 rounded-xl bg-[#FFF4E5] border border-[#FFD199] flex items-center justify-center text-[#FF8B02] shrink-0 font-bold">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                            </div>
                            <div>
                                <div class="text-xs text-slate-500 font-semibold">GST Registration</div>
                                <div class="text-sm font-mono font-bold text-[#FF8B02] mt-0.5">07ANDPG4822C2ZI</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 bg-slate-50 border border-slate-200 rounded-3xl p-6 sm:p-10 shadow-xl relative">
                    
                    @if($enquirySubmitted)
                        <div class="bg-emerald-50 border border-emerald-200 rounded-2xl p-8 text-center space-y-4">
                            <div class="w-14 h-14 bg-emerald-600 text-white rounded-full flex items-center justify-center mx-auto shadow-md">
                                <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <h3 class="text-2xl font-black text-slate-900">Enquiry Received Successfully!</h3>
                            <p class="text-sm text-slate-600 max-w-md mx-auto font-medium">
                                Thank you for contacting Shallom Prefab Systems. Our sales engineer will review your project details and respond via phone/email shortly.
                            </p>
                            <button wire:click="resetEnquiryState" 
                                    class="inline-block bg-[#FF8B02] hover:bg-[#E67A00] text-white font-bold px-6 py-2.5 rounded-xl shadow-sm text-xs transition-colors">
                                Submit Another Request
                            </button>
                        </div>
                    @else
                        <form wire:submit="submitEnquiry" class="space-y-5">
                            <h3 class="text-xl font-extrabold text-slate-900 border-b border-slate-200 pb-3">Send Instant Project Requirement</h3>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Full Name *</label>
                                    <input type="text" 
                                           wire:model="name"
                                           placeholder="e.g. Rahul Sharma" 
                                           class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors @error('name') border-red-500 @enderror">
                                    @error('name') <span class="text-red-500 text-xs mt-1 block font-semibold">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Phone Number *</label>
                                    <input type="tel" 
                                           wire:model="phone"
                                           placeholder="e.g. 9876543210" 
                                           class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors @error('phone') border-red-500 @enderror">
                                    @error('phone') <span class="text-red-500 text-xs mt-1 block font-semibold">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Email Address</label>
                                    <input type="email" 
                                           wire:model="email"
                                           placeholder="e.g. name@company.com" 
                                           class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors">
                                </div>

                                <div>
                                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Product Requirement</label>
                                    <select wire:model="buildingInterest" 
                                            class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors">
                                        <option value="Prefab Site Office">Prefab Site Office</option>
                                        <option value="Prefab Portable House">Prefab Portable House</option>
                                        <option value="Building Metal Structure">Building Metal Structure</option>
                                        <option value="Labour Hutments for Construction Sites">Labour Hutments for Construction</option>
                                        <option value="Aerocon Wall Panel System">Aerocon Wall Panels</option>
                                        <option value="Prefab Toilet Block">Prefab Toilet Block</option>
                                    </select>
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1.5">Project Location / City</label>
                                <input type="text" 
                                       wire:model="projectLocation"
                                       placeholder="e.g. Noida / Gurgaon / Delhi NCR" 
                                       class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors">
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1.5">Project Message & Custom Footprint Specs</label>
                                <textarea wire:model="message" 
                                          rows="3" 
                                          placeholder="Mention dimensions, number of rooms, or special requirements..." 
                                          class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors"></textarea>
                            </div>

                            <button type="submit" 
                                    class="w-full bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold py-4 rounded-xl shadow-lg shadow-orange-500/25 transition-all text-base flex items-center justify-center gap-2">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 19l9 2-9-18-9 18 9-2zm0 0v-8"/></svg>
                                Submit Instant Requirement
                            </button>
                        </form>
                    @endif

                </div>

            </div>
        </div>
    </section>

</div>