<div class="space-y-0 text-slate-800 font-sans bg-[#FAF9F5]"
     x-data="{
         initScrollReveal() {
             const observer = new IntersectionObserver((entries) => {
                 entries.forEach(entry => {
                     if (entry.isIntersecting) {
                         entry.target.classList.add('is-visible');
                     }
                 });
             }, { threshold: 0.1, rootMargin: '0px 0px -50px 0px' });
             
             document.querySelectorAll('.reveal-on-scroll').forEach(el => observer.observe(el));
         }
     }"
     x-init="initScrollReveal()">

    <!-- 1. MINIMALIST ARCHITECTURAL HERO CAROUSEL -->
    <section id="hero" 
             x-data="{ 
                 currentSlide: 0, 
                 totalSlides: 3,
                 timer: null,
                 nextSlide() { this.currentSlide = (this.currentSlide + 1) % this.totalSlides },
                 prevSlide() { this.currentSlide = (this.currentSlide - 1 + this.totalSlides) % this.totalSlides },
                 startAutoPlay() {
                     this.stopAutoPlay();
                     this.timer = setInterval(() => { this.nextSlide() }, 5000);
                 },
                 stopAutoPlay() {
                     if (this.timer) clearInterval(this.timer);
                 }
             }" 
             x-init="startAutoPlay()"
             @mouseenter="stopAutoPlay()"
             @mouseleave="startAutoPlay()"
             class="relative bg-[#FAF9F5] text-slate-900 overflow-hidden min-h-[520px] sm:min-h-[580px] lg:min-h-[620px] flex items-center border-b border-slate-200/80">
        
        <!-- Slide 1: Modular Houses -->
        <div x-show="currentSlide === 0" 
             x-cloak
             x-transition:enter="transition-opacity duration-700 ease-in-out"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity duration-400 ease-in-out"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="absolute inset-0 w-full h-full flex items-center bg-[#FAF9F5]">
            
            <div class="absolute inset-y-0 right-0 w-full lg:w-3/5 h-full">
                <img src="{{ asset('shallom/IMG-20260901-WA0014.jpg') }}" 
                     alt="Modern Prefabricated House" 
                     class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-gradient-to-r from-[#FAF9F5] via-[#FAF9F5]/40 lg:via-[#FAF9F5]/45 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#FAF9F5]/70 via-transparent to-transparent lg:hidden"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 w-full">
                <div class="max-w-xl space-y-6">
                    <div class="flex items-center gap-2 text-[#FF8B02]">
                        <i class="ri-home-4-line text-lg"></i>
                        <span class="text-xs font-bold uppercase tracking-widest">PRE-ENGINEERED HOMES</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-light text-slate-800 tracking-tight leading-[1.15]">
                        MODULAR HOMES & <br/>
                        <span class="text-[#FF8B02] font-normal">LUXURY PREFAB</span> <br/>
                        <span class="text-[#FF8B02] font-normal">COTTAGES</span>
                    </h1>

                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed font-normal">
                        Fostering rapid construction, superior thermal insulation, and custom interior layouts through pre-engineered steel framing and insulating Aerocon wall panels.
                    </p>

                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a href="{{ route('products') }}" wire:navigate
                           class="inline-flex items-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-[#FFFFFF] font-extrabold px-8 py-3.5 rounded-full shadow-lg shadow-orange-500/20 text-xs uppercase tracking-wider transition-all transform hover:-translate-y-0.5">
                            <span>Explore Portfolio</span>
                            <i class="ri-arrow-right-line text-base"></i>
                        </a>
                        <a href="#contact" 
                           class="inline-flex items-center gap-2 text-slate-800 hover:text-[#FF8B02] font-bold text-xs uppercase tracking-widest transition-colors py-3">
                            <span>Request Studio Quote</span>
                            <i class="ri-arrow-right-up-line text-base"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 2: Commercial Site Offices -->
        <div x-show="currentSlide === 1" 
             x-cloak
             x-transition:enter="transition-opacity duration-700 ease-in-out"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity duration-400 ease-in-out"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="absolute inset-0 w-full h-full flex items-center bg-[#FAF9F5]">
            
            <div class="absolute inset-y-0 right-0 w-full lg:w-3/5 h-full">
                <img src="{{ asset('shallom/IMG-20260901-WA0015.jpg') }}" 
                     alt="Prefabricated Site Office Cabin" 
                     class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-gradient-to-r from-[#FAF9F5] via-[#FAF9F5]/40 lg:via-[#FAF9F5]/45 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#FAF9F5]/70 via-transparent to-transparent lg:hidden"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 w-full">
                <div class="max-w-xl space-y-6">
                    <div class="flex items-center gap-2 text-[#FF8B02]">
                        <i class="ri-building-line text-lg"></i>
                        <span class="text-xs font-bold uppercase tracking-widest">COMMERCIAL SITE OFFICES</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-light text-slate-800 tracking-tight leading-[1.15]">
                        PLUG & PLAY <br/>
                        <span class="text-[#FF8B02] font-normal">EXECUTIVE SITE</span> <br/>
                        <span class="text-[#FF8B02] font-normal">OFFICE CABINS</span>
                    </h1>

                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed font-normal">
                        Equipped with concealed electrical wiring, UPVC sliding windows, heavy vinyl flooring, and weatherproof insulated roof profile sheets.
                    </p>

                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a href="{{ route('products') }}" 
                           class="inline-flex items-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-8 py-3.5 rounded-full shadow-lg shadow-orange-500/20 text-xs uppercase tracking-wider transition-all transform hover:-translate-y-0.5">
                            <span>Explore Portfolio</span>
                            <i class="ri-arrow-right-line text-base"></i>
                        </a>
                        <a href="#contact" 
                           class="inline-flex items-center gap-2 text-slate-800 hover:text-[#FF8B02] font-bold text-xs uppercase tracking-widest transition-colors py-3">
                            <span>Request Studio Quote</span>
                            <i class="ri-arrow-right-up-line text-base"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Slide 3: Industrial Steel Sheds -->
        <div x-show="currentSlide === 2" 
             x-cloak
             x-transition:enter="transition-opacity duration-700 ease-in-out"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="transition-opacity duration-400 ease-in-out"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             class="absolute inset-0 w-full h-full flex items-center bg-[#FAF9F5]">
            
            <div class="absolute inset-y-0 right-0 w-full lg:w-3/5 h-full">
                <img src="{{ asset('shallom/IMG-20260901-WA0016.jpg') }}" 
                     alt="Pre-Engineered Steel Shed" 
                     class="w-full h-full object-cover object-center">
                <div class="absolute inset-0 bg-gradient-to-r from-[#FAF9F5] via-[#FAF9F5]/40 lg:via-[#FAF9F5]/45 to-transparent"></div>
                <div class="absolute inset-0 bg-gradient-to-t from-[#FAF9F5]/70 via-transparent to-transparent lg:hidden"></div>
            </div>

            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-20 w-full">
                <div class="max-w-xl space-y-6">
                    <div class="flex items-center gap-2 text-[#FF8B02]">
                        <i class="ri-home-gear-line text-lg"></i>
                        <span class="text-xs font-bold uppercase tracking-widest">INDUSTRIAL INFRASTRUCTURE</span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-light text-slate-800 tracking-tight leading-[1.15]">
                        HIGH-SPAN <br/>
                        <span class="text-[#FF8B02] font-normal">INDUSTRIAL STEEL</span> <br/>
                        <span class="text-[#FF8B02] font-normal">BUILDINGS</span>
                    </h1>

                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed font-normal">
                        Heavy structural MS steel framework for factory warehouses, industrial sheds, labor camp complexes, and multi-story rooftop extensions.
                    </p>

                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a href="{{ route('products') }}" 
                           class="inline-flex items-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-8 py-3.5 rounded-full shadow-lg shadow-orange-500/20 text-xs uppercase tracking-wider transition-all transform hover:-translate-y-0.5">
                            <span>Explore Portfolio</span>
                            <i class="ri-arrow-right-line text-base"></i>
                        </a>
                        <a href="#contact" 
                           class="inline-flex items-center gap-2 text-slate-800 hover:text-[#FF8B02] font-bold text-xs uppercase tracking-widest transition-colors py-3">
                            <span>Request Studio Quote</span>
                            <i class="ri-arrow-right-up-line text-base"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>

        <!-- Bottom Controls -->
        <div class="absolute bottom-6 left-0 right-0 z-30">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex items-center justify-between">
                <div class="flex items-center gap-2">
                    <template x-for="(slide, index) in totalSlides" :key="index">
                        <button @click="currentSlide = index" 
                                :class="currentSlide === index ? 'w-10 bg-[#FF8B02]' : 'w-3 bg-slate-300 hover:bg-slate-400'"
                                class="h-2.5 rounded-full transition-all duration-500 focus:outline-none"></button>
                    </template>
                </div>

                <div class="flex items-center gap-2">
                    <button @click="prevSlide()" 
                            class="w-10 h-10 rounded-full border border-slate-300/80 bg-white/90 hover:bg-[#FFF4E5] hover:border-[#FF8B02] text-slate-700 hover:text-[#FF8B02] flex items-center justify-center transition-all shadow-xs focus:outline-none">
                        <i class="ri-arrow-left-line text-base"></i>
                    </button>
                    <button @click="nextSlide()" 
                            class="w-10 h-10 rounded-full border border-slate-300/80 bg-white/90 hover:bg-[#FFF4E5] hover:border-[#FF8B02] text-slate-700 hover:text-[#FF8B02] flex items-center justify-center transition-all shadow-xs focus:outline-none">
                        <i class="ri-arrow-right-line text-base"></i>
                    </button>
                </div>
            </div>
        </div>

    </section>

    <!-- 2. CONTINUOUS SCROLLING MARQUEE TICKER (DEEP SLATE MIDNIGHT NAVY COLOR SCHEME) -->
    <div class="bg-gradient-to-r from-[#0B132B] via-[#0F172A] to-[#0B132B] text-white py-3.5 overflow-hidden border-y border-[#FF8B02]/30 relative shadow-lg">
        <div class="animate-marquee whitespace-nowrap flex items-center gap-12 text-xs font-bold uppercase tracking-widest">
            <div class="flex items-center gap-12 shrink-0">
                <span class="flex items-center gap-2 text-[#FF8B02]"><i class="ri-checkbox-circle-fill text-emerald-400"></i> Established 2009 (Delhi, India)</span>
                <span class="text-slate-500">•</span>
                <span class="text-slate-200">25+ Years Structural Lifespan</span>
                <span class="text-slate-500">•</span>
                <span class="text-[#FF8B02] font-extrabold">70% Rapid Construction Turnaround</span>
                <span class="text-slate-500">•</span>
                <span class="text-slate-200">100% Demountable Nut & Bolt Relocatable</span>
                <span class="text-slate-500">•</span>
                <span class="text-emerald-400 font-extrabold">Tata Housing Approved</span>
                <span class="text-slate-500">•</span>
                <span class="text-[#FF8B02]">GSTIN: 07ANDPG4822C2ZI</span>
                <span class="text-slate-500">•</span>
            </div>
            <div class="flex items-center gap-12 shrink-0">
                <span class="flex items-center gap-2 text-[#FF8B02]"><i class="ri-checkbox-circle-fill text-emerald-400"></i> Established 2009 (Delhi, India)</span>
                <span class="text-slate-500">•</span>
                <span class="text-slate-200">25+ Years Structural Lifespan</span>
                <span class="text-slate-500">•</span>
                <span class="text-[#FF8B02] font-extrabold">70% Rapid Construction Turnaround</span>
                <span class="text-slate-500">•</span>
                <span class="text-slate-200">100% Demountable Nut & Bolt Relocatable</span>
                <span class="text-slate-500">•</span>
                <span class="text-emerald-400 font-extrabold">Tata Housing Approved</span>
                <span class="text-slate-500">•</span>
                <span class="text-[#FF8B02]">GSTIN: 07ANDPG4822C2ZI</span>
                <span class="text-slate-500">•</span>
            </div>
        </div>
    </div>


    <!-- 3. ARCHITECTURAL "KNOW US BETTER" SECTION (EXACT REFERENCE DESIGN) -->
    <section id="about" class="py-20 sm:py-28 bg-[#FAF9F5] text-slate-900 border-b border-slate-200/80 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- Left Column: High-Res Architectural Video -->
                <div class="lg:col-span-6 reveal-on-scroll">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-slate-200/60 bg-slate-900 group">
                        <video autoplay loop muted playsinline controls
                               class="w-full h-[260px] sm:h-[400px] lg:h-[480px] object-cover object-center">
                            <source src="{{ asset('shallom/VID-20260901-WA0060.mp4') }}" type="video/mp4">
                            <source src="{{ asset('shallom/VID-20260901-WA0059.mp4') }}" type="video/mp4">
                            Your browser does not support the video tag.
                        </video>
                    </div>
                </div>

                <!-- Right Column: Minimalist Studio Typography -->
                <div class="lg:col-span-6 space-y-6 reveal-on-scroll delay-100">
                    <div class="flex items-center gap-2 text-[#FF8B02]">
                        <i class="ri-building-2-line text-lg"></i>
                        <span class="text-xs font-bold uppercase tracking-widest">KNOW US BETTER</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light text-slate-800 tracking-tight leading-[1.18] font-sans">
                        SUSTAINABLE DESIGN & <br/>
                        <span class="text-[#FF8B02] font-normal">TURNKEY PREFAB</span> <br/>
                        <span class="text-[#FF8B02] font-normal">CONSTRUCTION</span>
                    </h2>

                    <p class="text-slate-600 text-sm sm:text-base leading-relaxed font-normal">
                        Shallom Prefab Systems is a top-ranked prefabricated manufacturing practice providing high-performance Design-Build coordinates across India. Incorporated in <strong>2009 at Delhi (India)</strong>, we are actively engaged in manufacturing, exporting, and supplying an extensive range of Prefab Houses, Prefab Structures, Prefab Buildings, Prefab Cabins, Prefab Toilets, and Prefabricated Offices. Sourced strictly from certified industry vendors in compliance with international quality standards, our structures deliver extreme weather protection, fine finish, robust construction, and complete turnkey installation & maintenance services.
                    </p>

                    <div class="pt-4">
                        <a href="{{ route('products') }}" wire:navigate
                           class="inline-flex items-center gap-2 text-[#FF8B02] font-bold text-xs sm:text-sm uppercase tracking-widest hover:gap-3.5 transition-all group">
                            <span>DISCOVER STUDIO SCOPE</span>
                            <i class="ri-arrow-right-line text-base group-hover:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. MINIMALIST CORE PRODUCTS SECTION -->
    <section id="categories" class="py-20 sm:py-28 bg-white text-slate-900 border-b border-slate-200/80 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="max-w-3xl mb-16 space-y-4 reveal-on-scroll">
                <div class="flex items-center gap-2 text-[#FF8B02]">
                    <i class="ri-grid-fill text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">OUR RANGE</span>
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    ENGINEERED PREFAB <br/>
                    <span class="text-[#FF8B02] font-normal">BUILDINGS & STRUCTURES</span>
                </h2>

                <p class="text-slate-600 text-sm sm:text-base font-normal leading-relaxed pt-1">
                    Explore our pre-engineered modular solutions crafted for site management, commercial expansions, and luxury residential living.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Card 1 -->
                <div class="bg-[#FAF9F5] rounded-2xl border border-slate-200/80 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-500 flex flex-col justify-between group reveal-on-scroll delay-100">
                    <div>
                        <div class="relative h-60 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('shallom/IMG-20260901-WA0009.jpg') }}" 
                                 alt="Prefab Houses" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="p-7 space-y-3">
                            <div class="text-[11px] font-bold text-[#FF8B02] uppercase tracking-widest">01 • HOUSES</div>
                            <h3 class="text-xl font-bold text-slate-900">Prefab Houses & Cottages</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Prefab Portable House, Prefab Cottage House, and Modular Cottages.</p>
                        </div>
                    </div>
                    <div class="px-7 pb-7">
                        <a href="{{ route('products') }}" class="inline-flex items-center gap-2 text-[#FF8B02] font-bold text-xs uppercase tracking-widest hover:gap-3 transition-all group/btn">
                            <span>VIEW HOUSES</span>
                            <i class="ri-arrow-right-line text-sm group-hover/btn:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 2 -->
                <div class="bg-[#FAF9F5] rounded-2xl border border-slate-200/80 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-500 flex flex-col justify-between group reveal-on-scroll delay-200">
                    <div>
                        <div class="relative h-60 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('shallom/IMG-20260901-WA0011.jpg') }}" 
                                 alt="Prefab Structures" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="p-7 space-y-3">
                            <div class="text-[11px] font-bold text-[#FF8B02] uppercase tracking-widest">02 • STRUCTURES</div>
                            <h3 class="text-xl font-bold text-slate-900">Metal & Multi-Story Structures</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Building Metal Structures, Double Story Prefab Buildings, and Stalls.</p>
                        </div>
                    </div>
                    <div class="px-7 pb-7">
                        <a href="{{ route('products') }}" class="inline-flex items-center gap-2 text-[#FF8B02] font-bold text-xs uppercase tracking-widest hover:gap-3 transition-all group/btn">
                            <span>VIEW STRUCTURES</span>
                            <i class="ri-arrow-right-line text-sm group-hover/btn:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 3 -->
                <div class="bg-[#FAF9F5] rounded-2xl border border-slate-200/80 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-500 flex flex-col justify-between group reveal-on-scroll delay-300">
                    <div>
                        <div class="relative h-60 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('shallom/IMG-20260901-WA0026.jpg') }}" 
                                 alt="Prefab Buildings" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="p-7 space-y-3">
                            <div class="text-[11px] font-bold text-[#FF8B02] uppercase tracking-widest">03 • BUILDINGS</div>
                            <h3 class="text-xl font-bold text-slate-900">Prefabricated School Buildings</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">School extensions, Rooftop buildings, and institutional complexes.</p>
                        </div>
                    </div>
                    <div class="px-7 pb-7">
                        <a href="{{ route('products') }}" class="inline-flex items-center gap-2 text-[#FF8B02] font-bold text-xs uppercase tracking-widest hover:gap-3 transition-all group/btn">
                            <span>VIEW BUILDINGS</span>
                            <i class="ri-arrow-right-line text-sm group-hover/btn:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 4 -->
                <div class="bg-[#FAF9F5] rounded-2xl border border-slate-200/80 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-500 flex flex-col justify-between group reveal-on-scroll delay-100">
                    <div>
                        <div class="relative h-60 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('shallom/IMG-20260901-WA0010.jpg') }}" 
                                 alt="Prefab Offices" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="p-7 space-y-3">
                            <div class="text-[11px] font-bold text-[#FF8B02] uppercase tracking-widest">04 • OFFICES</div>
                            <h3 class="text-xl font-bold text-slate-900">Site Offices & Cabins</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Prefab Site Offices, Classroom Structures, and Executive Cabins.</p>
                        </div>
                    </div>
                    <div class="px-7 pb-7">
                        <a href="{{ route('products') }}" class="inline-flex items-center gap-2 text-[#FF8B02] font-bold text-xs uppercase tracking-widest hover:gap-3 transition-all group/btn">
                            <span>VIEW OFFICES</span>
                            <i class="ri-arrow-right-line text-sm group-hover/btn:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 5 -->
                <div class="bg-[#FAF9F5] rounded-2xl border border-slate-200/80 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-500 flex flex-col justify-between group reveal-on-scroll delay-200">
                    <div>
                        <div class="relative h-60 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/prefab_house_hero_png_1788163818892.jpg') }}" 
                                 alt="Prefab House" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="p-7 space-y-3">
                            <div class="text-[11px] font-bold text-[#FF8B02] uppercase tracking-widest">05 • CABINS</div>
                            <h3 class="text-xl font-bold text-slate-900">Portable Bunk Houses</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Prefab Portable Cabins, Bunk Houses, and security posts.</p>
                        </div>
                    </div>
                    <div class="px-7 pb-7">
                        <a href="{{ route('products') }}" class="inline-flex items-center gap-2 text-[#FF8B02] font-bold text-xs uppercase tracking-widest hover:gap-3 transition-all group/btn">
                            <span>VIEW CABINS</span>
                            <i class="ri-arrow-right-line text-sm group-hover/btn:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

                <!-- Card 6 -->
                <div class="bg-[#FAF9F5] rounded-2xl border border-slate-200/80 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-500 flex flex-col justify-between group reveal-on-scroll delay-300">
                    <div>
                        <div class="relative h-60 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('shallom/IMG-20260901-WA0012.jpg') }}" 
                                 alt="Labour Hutments" 
                                 class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                        </div>
                        <div class="p-7 space-y-3">
                            <div class="text-[11px] font-bold text-[#FF8B02] uppercase tracking-widest">06 • HUTMENTS</div>
                            <h3 class="text-xl font-bold text-slate-900">Labour Hutments & Camps</h3>
                            <p class="text-xs text-slate-600 leading-relaxed">Labour Hutments, Worker Accommodation Camps, and Portable Rooms.</p>
                        </div>
                    </div>
                    <div class="px-7 pb-7">
                        <a href="{{ route('products') }}" class="inline-flex items-center gap-2 text-[#FF8B02] font-bold text-xs uppercase tracking-widest hover:gap-3 transition-all group/btn">
                            <span>VIEW HUTMENTS</span>
                            <i class="ri-arrow-right-line text-sm group-hover/btn:translate-x-1 transition-transform"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 5. MINIMALIST WHY CHOOSE US SECTION -->
    <section id="why-us" class="py-20 sm:py-28 bg-[#FAF9F5] text-slate-900 border-b border-slate-200/80 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="max-w-3xl mb-16 space-y-4 reveal-on-scroll">
                <div class="flex items-center gap-2 text-[#FF8B02]">
                    <i class="ri-shield-check-line text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">ENGINEERED ADVANTAGES</span>
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    PRECISION & <br/>
                    <span class="text-[#FF8B02] font-normal">STRUCTURAL INTEGRITY</span>
                </h2>

                <p class="text-slate-600 text-sm sm:text-base font-normal leading-relaxed pt-1">
                    Our modular pre-engineered buildings outperform traditional civil masonry across every critical engineering metric.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <div class="bg-white border border-slate-200/80 p-8 rounded-2xl hover:border-[#FF8B02] shadow-xs hover:shadow-lg transition-all group reveal-on-scroll delay-100">
                    <div class="w-12 h-12 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="ri-[#FF8B02] ri-flashlight-line text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">70% Faster Turnaround</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Pre-fabricated off-site components allow rapid assembly in days rather than months of chaotic site construction.
                    </p>
                </div>

                <div class="bg-white border border-slate-200/80 p-8 rounded-2xl hover:border-[#FF8B02] shadow-xs hover:shadow-lg transition-all group reveal-on-scroll delay-200">
                    <div class="w-12 h-12 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="ri-[#FF8B02] ri-temp-cold-line text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">All-Weather Durability</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Heavy galvanized steel structure withstands high-velocity wind pressures, heavy rains, and seismic shocks.
                    </p>
                </div>

                <div class="bg-white border border-slate-200/80 p-8 rounded-2xl hover:border-[#FF8B02] shadow-xs hover:shadow-lg transition-all group reveal-on-scroll delay-300">
                    <div class="w-12 h-12 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="ri-[#FF8B02] ri-drag-drop-line text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">100% Relocatable</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Demountable nut-and-bolt framing ensures modules can be dismantled, moved, and re-erected at new sites effortlessly.
                    </p>
                </div>

                <div class="bg-white border border-slate-200/80 p-8 rounded-2xl hover:border-[#FF8B02] shadow-xs hover:shadow-lg transition-all group reveal-on-scroll delay-400">
                    <div class="w-12 h-12 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center mb-6 group-hover:scale-110 transition-transform">
                        <i class="ri-[#FF8B02] ri-leaf-line text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Thermal Efficiency</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        High-density PUF/EPS sandwich panel core cuts HVAC cooling and heating energy consumption by up to 40%.
                    </p>
                </div>

        </div>
    </section>

    <!-- ULTRA-PREMIUM CLIENTELE LOGO SLIDER SECTION -->
    <section class="py-16 sm:py-20 bg-gradient-to-b from-[#0B132B] via-[#0F172A] to-[#0B132B] text-white border-y border-[#FF8B02]/30 relative overflow-hidden shadow-2xl">
        <!-- Ambient Glowing Orbs Background -->
        <div class="absolute top-0 left-1/4 w-96 h-96 bg-[#FF8B02]/10 rounded-full blur-3xl pointer-events-none"></div>
        <div class="absolute bottom-0 right-1/4 w-96 h-96 bg-blue-500/10 rounded-full blur-3xl pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10 mb-10 text-center space-y-3">
            <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/10 backdrop-blur-md border border-[#FF8B02]/40 text-[#FF8B02] text-xs font-extrabold uppercase tracking-widest shadow-sm">
                <i class="ri-shield-check-fill text-base"></i>
                <span>TRUSTED BY INDUSTRY LEADERS</span>
            </div>

            <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light text-white tracking-tight leading-[1.18]">
                POWERING INDIA'S TOP <br/>
                <span class="text-[#FF8B02] font-normal">INFRASTRUCTURE & CORPORATE GIANTS</span>
            </h2>

            <p class="text-slate-300 text-xs sm:text-sm font-normal max-w-2xl mx-auto leading-relaxed">
                Since 2009, Shallom Prefab Systems has delivered pre-engineered structural excellence for India's leading EPC conglomerates, government PSUs, and commercial developers.
            </p>
        </div>

        <!-- Infinite Marquee Track with Edge Fade Gradients -->
        <div class="relative w-full overflow-hidden py-4">
            <!-- Left Gradient Fade Mask -->
            <div class="pointer-events-none absolute left-0 top-0 bottom-0 w-24 sm:w-40 bg-gradient-to-r from-[#0B132B] to-transparent z-20"></div>
            <!-- Right Gradient Fade Mask -->
            <div class="pointer-events-none absolute right-0 top-0 bottom-0 w-24 sm:w-40 bg-gradient-to-l from-[#0B132B] to-transparent z-20"></div>

            <div class="animate-marquee whitespace-nowrap flex items-center gap-8">
                <div class="flex items-center gap-8 shrink-0">
                    @for($i = 1; $i <= 14; $i++)
                        @php
                            $ext = in_array($i, [7, 10, 12]) ? 'png' : 'jpg';
                        @endphp
                        <div class="h-24 w-52 bg-white rounded-2xl border border-slate-200/80 p-4 flex items-center justify-center shadow-lg hover:shadow-2xl hover:border-[#FF8B02] hover:shadow-orange-500/20 hover:-translate-y-1 transition-all duration-300 group shrink-0">
                            <img src="{{ asset('clients/Picture' . $i . '.' . $ext) }}" 
                                 alt="Client Partner {{ $i }}" 
                                 class="max-h-full max-w-full object-contain filter group-hover:scale-110 transition-all duration-300">
                        </div>
                    @endfor
                </div>
                <div class="flex items-center gap-8 shrink-0">
                    @for($i = 1; $i <= 14; $i++)
                        @php
                            $ext = in_array($i, [7, 10, 12]) ? 'png' : 'jpg';
                        @endphp
                        <div class="h-24 w-52 bg-white rounded-2xl border border-slate-200/80 p-4 flex items-center justify-center shadow-lg hover:shadow-2xl hover:border-[#FF8B02] hover:shadow-orange-500/20 hover:-translate-y-1 transition-all duration-300 group shrink-0">
                            <img src="{{ asset('clients/Picture' . $i . '.' . $ext) }}" 
                                 alt="Client Partner {{ $i }}" 
                                 class="max-h-full max-w-full object-contain filter group-hover:scale-110 transition-all duration-300">
                        </div>
                    @endfor
                </div>
            </div>
        </div>

        <!-- View All Clientele Link -->
        <div class="text-center pt-8 relative z-10">
            <a href="{{ route('clientele') }}" wire:navigate
               class="inline-flex items-center gap-2 border border-white/20 hover:border-[#FF8B02] bg-white/5 hover:bg-[#FF8B02] text-white font-bold px-7 py-3 rounded-full text-xs uppercase tracking-widest transition-all duration-300 transform hover:-translate-y-0.5">
                <span>View Full Clientele</span>
                <i class="ri-arrow-right-line text-sm"></i>
            </a>
        </div>
    </section>

    <!-- 6. MINIMALIST CLIENT REVIEWS SECTION -->
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
             class="py-20 sm:py-28 bg-white text-slate-900 border-b border-slate-200/80 relative overflow-hidden">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-16 reveal-on-scroll">
                <div class="space-y-4 max-w-2xl">
                    <div class="flex items-center gap-2 text-[#FF8B02]">
                        <i class="ri-user-star-line text-lg"></i>
                        <span class="text-xs font-bold uppercase tracking-widest">CLIENT REPUTATION</span>
                    </div>

                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light text-slate-800 tracking-tight leading-[1.18]">
                        TRUSTED BY <br/>
                        <span class="text-[#FF8B02] font-normal">ENGINEERING LEADERS</span>
                    </h2>
                </div>

                <div class="flex items-center gap-3 shrink-0">
                    <button @click="prev()" class="w-11 h-11 rounded-full border border-slate-300/80 bg-[#FAF9F5] hover:bg-[#FFF4E5] hover:border-[#FF8B02] text-slate-700 hover:text-[#FF8B02] flex items-center justify-center transition-all focus:outline-none">
                        <i class="ri-arrow-left-line text-base"></i>
                    </button>
                    <button @click="next()" class="w-11 h-11 rounded-full border border-slate-300/80 bg-[#FAF9F5] hover:bg-[#FFF4E5] hover:border-[#FF8B02] text-slate-700 hover:text-[#FF8B02] flex items-center justify-center transition-all focus:outline-none">
                        <i class="ri-arrow-right-line text-base"></i>
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
                 class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="bg-[#FAF9F5] rounded-2xl p-8 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center text-[#FF8B02] gap-1 text-sm">
                            <i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i>
                        </div>
                        <p class="text-slate-700 text-sm font-normal leading-relaxed italic">"Shallom delivered our 15,000 sq. ft. modular site office complex in 5 days! Thermal insulation during Delhi summers keeps inside temperatures cool."</p>
                    </div>
                    <div class="pt-6 border-t border-slate-200/80 mt-6">
                        <div class="text-sm font-bold text-slate-900">Sunil Verma</div>
                        <div class="text-xs text-slate-500 font-normal">Project Director • L&T Infra</div>
                    </div>
                </div>

                <div class="bg-[#FAF9F5] rounded-2xl p-8 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center text-[#FF8B02] gap-1 text-sm">
                            <i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i>
                        </div>
                        <p class="text-slate-700 text-sm font-normal leading-relaxed italic">"The labour hutments supplied for our township site passed all heavy monsoon tests with zero water leakage. Demountable nut-bolt framework makes relocating seamless."</p>
                    </div>
                    <div class="pt-6 border-t border-slate-200/80 mt-6">
                        <div class="text-sm font-bold text-slate-900">Rajesh Agarwal</div>
                        <div class="text-xs text-slate-500 font-normal">Site Operations • Tata Housing</div>
                    </div>
                </div>

                <div class="bg-[#FAF9F5] rounded-2xl p-8 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center text-[#FF8B02] gap-1 text-sm">
                            <i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i>
                        </div>
                        <p class="text-slate-700 text-sm font-normal leading-relaxed italic">"We needed an urgent 2-story school expansion erected during summer break. Shallom completed structural steel framing and soundproof Aerocon panels on schedule."</p>
                    </div>
                    <div class="pt-6 border-t border-slate-200/80 mt-6">
                        <div class="text-sm font-bold text-slate-900">Dr. Ananya Roy</div>
                        <div class="text-xs text-slate-500 font-normal">Trustee • Greenfield Intl. School</div>
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
                 class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="bg-[#FAF9F5] rounded-2xl p-8 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center text-[#FF8B02] gap-1 text-sm">
                            <i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i>
                        </div>
                        <p class="text-slate-700 text-sm font-normal leading-relaxed italic">"Shallom Prefab's modular cottages transformed our eco-resort footprint. Their team erected luxury wooden-finish cottages without harming surrounding trees."</p>
                    </div>
                    <div class="pt-6 border-t border-slate-200/80 mt-6">
                        <div class="text-sm font-bold text-slate-900">Vikramaditya Singh</div>
                        <div class="text-xs text-slate-500 font-normal">MD • Himalayan Eco Resorts</div>
                    </div>
                </div>

                <div class="bg-[#FAF9F5] rounded-2xl p-8 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center text-[#FF8B02] gap-1 text-sm">
                            <i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i>
                        </div>
                        <p class="text-slate-700 text-sm font-normal leading-relaxed italic">"Added 4,000 sq. ft. executive rooftop office on our commercial complex. Lightweight structural frame avoided heavy civil load issues completely!"</p>
                    </div>
                    <div class="pt-6 border-t border-slate-200/80 mt-6">
                        <div class="text-sm font-bold text-slate-900">Karan Malhotra</div>
                        <div class="text-xs text-slate-500 font-normal">VP Infra • DLF Commercial</div>
                    </div>
                </div>

                <div class="bg-[#FAF9F5] rounded-2xl p-8 border border-slate-200/80 shadow-xs flex flex-col justify-between">
                    <div class="space-y-4">
                        <div class="flex items-center text-[#FF8B02] gap-1 text-sm">
                            <i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i><i class="ri-[#FF8B02] ri-star-fill"></i>
                        </div>
                        <p class="text-slate-700 text-sm font-normal leading-relaxed italic">"Precision engineering and clean panel finish. Their portable bunk houses with attached toilets exceeded our architectural standards for mining quarters."</p>
                    </div>
                    <div class="pt-6 border-t border-slate-200/80 mt-6">
                        <div class="text-sm font-bold text-slate-900">Priya Sharma</div>
                        <div class="text-xs text-slate-500 font-normal">Principal Architect • Modern Spaces</div>
                    </div>
                </div>

            </div>

        </div>
    </section>

    <!-- 7. MINIMALIST FAQ SECTION -->
    <section id="faq" 
             x-data="{ openFaq: 0 }" 
             class="py-20 sm:py-28 bg-[#FAF9F5] text-slate-900 border-b border-slate-200/80 relative">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-16 reveal-on-scroll">
                <div class="inline-flex items-center gap-2 text-[#FF8B02] mb-3">
                    <i class="ri-questionnaire-line text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">KNOWLEDGE BASE</span>
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    FREQUENTLY ASKED <br/>
                    <span class="text-[#FF8B02] font-normal">QUESTIONS</span>
                </h2>
            </div>

            <div class="space-y-4">
                
                <div class="border border-slate-200/80 rounded-2xl overflow-hidden bg-white shadow-xs transition-all reveal-on-scroll delay-100">
                    <button @click="openFaq = (openFaq === 0 ? null : 0)" 
                            class="w-full px-7 py-5 text-left font-bold text-slate-900 flex justify-between items-center gap-4 hover:text-[#FF8B02] transition-colors text-sm sm:text-base">
                        <span>What is the expected lifespan of Shallom prefabricated houses and buildings?</span>
                        <i class="ri-add-line text-xl text-[#FF8B02] shrink-0 transition-transform duration-300" :class="{ 'rotate-45': openFaq === 0 }"></i>
                    </button>
                    <div x-show="openFaq === 0" x-cloak x-collapse class="px-7 pb-6 text-xs sm:text-sm text-slate-600 leading-relaxed font-normal border-t border-slate-100">
                        Our prefabricated structures are engineered using anti-corrosive IS 2062 grade steel framework and heavy EPS/PUF sandwich wall panels, offering a structural lifespan of 20 to 25+ years with basic maintenance.
                    </div>
                </div>

                <div class="border border-slate-200/80 rounded-2xl overflow-hidden bg-white shadow-xs transition-all reveal-on-scroll delay-200">
                    <button @click="openFaq = (openFaq === 1 ? null : 1)" 
                            class="w-full px-7 py-5 text-left font-bold text-slate-900 flex justify-between items-center gap-4 hover:text-[#FF8B02] transition-colors text-sm sm:text-base">
                        <span>How fast can a site office cabin or labour camp be delivered and installed?</span>
                        <i class="ri-add-line text-xl text-[#FF8B02] shrink-0 transition-transform duration-300" :class="{ 'rotate-45': openFaq === 1 }"></i>
                    </button>
                    <div x-show="openFaq === 1" x-cloak x-collapse class="px-7 pb-6 text-xs sm:text-sm text-slate-600 leading-relaxed font-normal border-t border-slate-100">
                        Standard site offices and portable cabins (up to 500 sq. ft.) are dispatched within 3 to 5 days and erected on-site in less than 48 hours. Larger labour colonies (2,000+ sq. ft.) are completed within 7 to 14 business days.
                    </div>
                </div>

                <div class="border border-slate-200/80 rounded-2xl overflow-hidden bg-white shadow-xs transition-all reveal-on-scroll delay-300">
                    <button @click="openFaq = (openFaq === 2 ? null : 2)" 
                            class="w-full px-7 py-5 text-left font-bold text-slate-900 flex justify-between items-center gap-4 hover:text-[#FF8B02] transition-colors text-sm sm:text-base">
                        <span>Are prefab structures leak-proof, fire-resistant, and storm-proof?</span>
                        <i class="ri-add-line text-xl text-[#FF8B02] shrink-0 transition-transform duration-300" :class="{ 'rotate-45': openFaq === 2 }"></i>
                    </button>
                    <div x-show="openFaq === 2" x-cloak x-collapse class="px-7 pb-6 text-xs sm:text-sm text-slate-600 leading-relaxed font-normal border-t border-slate-100">
                        Yes! All roof profile sheets feature insulated overlapping joints to eliminate water seepage. Aerocon and PUF wall panels are fire-retardant (up to 2-hour rating) and wind-tunnel tested for high-velocity monsoon storms.
                    </div>
                </div>

                <div class="border border-slate-200/80 rounded-2xl overflow-hidden bg-white shadow-xs transition-all reveal-on-scroll delay-400">
                    <button @click="openFaq = (openFaq === 3 ? null : 3)" 
                            class="w-full px-7 py-5 text-left font-bold text-slate-900 flex justify-between items-center gap-4 hover:text-[#FF8B02] transition-colors text-sm sm:text-base">
                        <span>Can we dismantle and relocate the cabins to a new construction site later?</span>
                        <i class="ri-add-line text-xl text-[#FF8B02] shrink-0 transition-transform duration-300" :class="{ 'rotate-45': openFaq === 3 }"></i>
                    </button>
                    <div x-show="openFaq === 3" x-cloak x-collapse class="px-7 pb-6 text-xs sm:text-sm text-slate-600 leading-relaxed font-normal border-t border-slate-100">
                        Absolutely. Shallom prefab modules feature demountable nut-and-bolt steel frames. When your construction project ends, the entire cabin or labour hutment can be unbolted, transported in a truck, and reassembled at your next project location.
                    </div>
                </div>

            </div>

        </div>
    </section>




    <!-- 8. MINIMALIST CONTACT & ENQUIRY FORM SECTION -->
    <section id="contact" class="py-20 sm:py-28 bg-white text-slate-900 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
                
                <div class="lg:col-span-5 space-y-8 reveal-on-scroll">
                    <div class="space-y-4">
                        <div class="flex items-center gap-2 text-[#FF8B02]">
                            <i class="ri-mail-send-line text-lg"></i>
                            <span class="text-xs font-bold uppercase tracking-widest">DIRECT COORDINATES</span>
                        </div>

                        <h2 class="text-3xl sm:text-4xl font-light text-slate-800 tracking-tight leading-[1.18]">
                            TALK TO OUR <br/>
                            <span class="text-[#FF8B02] font-normal">ENGINEERING STUDIO</span>
                        </h2>

                        <p class="text-slate-600 text-sm leading-relaxed font-normal">
                            Have a custom footprint drawing or urgent construction site requirement? Get in touch directly with our plant team in New Delhi.
                        </p>
                    </div>

                    <div class="space-y-4 pt-2">
                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-[#FAF9F5] border border-slate-200/80">
                            <div class="w-10 h-10 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center shrink-0">
                                <i class="ri-phone-fill text-lg"></i>
                            </div>
                            <div>
                                <div class="text-xs text-slate-500 font-medium">Direct Hotline</div>
                                <a href="tel:+917942550323" class="text-lg font-bold text-slate-900 hover:text-[#FF8B02] transition-colors">07942550323</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-[#FAF9F5] border border-slate-200/80">
                            <div class="w-10 h-10 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center shrink-0">
                                <i class="ri-map-pin-2-fill text-lg"></i>
                            </div>
                            <div>
                                <div class="text-xs text-slate-500 font-medium">Plant & Registered Office</div>
                                <div class="text-sm font-bold text-slate-900 mt-0.5">Shallom Prefab Systems</div>
                                <div class="text-xs text-slate-600 mt-0.5">New Delhi, Delhi - 110092, India</div>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-[#FAF9F5] border border-slate-200/80">
                            <div class="w-10 h-10 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center shrink-0">
                                <i class="ri-shield-check-fill text-lg"></i>
                            </div>
                            <div>
                                <div class="text-xs text-slate-500 font-medium">GST Identification Number</div>
                                <div class="text-sm font-mono font-bold text-[#FF8B02] mt-0.5">07ANDPG4822C2ZI</div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="lg:col-span-7 bg-[#FAF9F5] border border-slate-200/80 rounded-2xl p-8 sm:p-10 shadow-sm relative reveal-on-scroll delay-200">
                    
                    @if($enquirySubmitted)
                        <div class="bg-emerald-50 border border-emerald-200 rounded-2xl p-8 text-center space-y-4">
                            <div class="w-14 h-14 bg-emerald-600 text-white rounded-full flex items-center justify-center mx-auto shadow-md">
                                <i class="ri-check-line text-2xl"></i>
                            </div>
                            <h3 class="text-2xl font-bold text-slate-900">Enquiry Received Successfully!</h3>
                            <p class="text-sm text-slate-600 max-w-md mx-auto font-normal">
                                Thank you for contacting Shallom Prefab Systems. Our sales engineer will review your project details and respond via phone/email shortly.
                            </p>
                            <button wire:click="resetEnquiryState" class="inline-block bg-[#FF8B02] hover:bg-[#E67A00] text-white font-bold px-6 py-2.5 rounded-xl shadow-sm text-xs transition-colors">
                                Submit Another Request
                            </button>
                        </div>
                    @else
                        <form wire:submit="submitEnquiry" class="space-y-5">
                            <h3 class="text-xl font-bold text-slate-900 border-b border-slate-200 pb-3">Send Instant Project Requirement</h3>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Full Name *</label>
                                    <input type="text" wire:model="name" placeholder="e.g. Rahul Sharma" class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors @error('name') border-red-500 @enderror">
                                    @error('name') <span class="text-red-500 text-xs mt-1 block font-semibold">{{ $message }}</span> @enderror
                                </div>

                                <div>
                                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Phone Number *</label>
                                    <input type="tel" wire:model="phone" placeholder="e.g. 9876543210" class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors @error('phone') border-red-500 @enderror">
                                    @error('phone') <span class="text-red-500 text-xs mt-1 block font-semibold">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Email Address</label>
                                    <input type="email" wire:model="email" placeholder="e.g. name@company.com" class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors">
                                </div>

                                <div>
                                    <label class="block text-xs font-bold text-slate-700 mb-1.5">Product Requirement</label>
                                    <select wire:model="buildingInterest" class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors">
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
                                <input type="text" wire:model="projectLocation" placeholder="e.g. Noida / Gurgaon / Delhi NCR" class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors">
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1.5">Project Message & Footprint Specs</label>
                                <textarea wire:model="message" rows="3" placeholder="Mention dimensions, number of rooms, or special requirements..." class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors"></textarea>
                            </div>

                            <button type="submit" class="w-full bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold py-4 rounded-xl shadow-lg shadow-orange-500/20 transition-all text-sm uppercase tracking-wider flex items-center justify-center gap-2">
                                <i class="ri-send-plane-fill text-base"></i>
                                Submit Instant Requirement
                            </button>
                        </form>
                    @endif

                </div>

            </div>
        </div>
    </section>

</div>