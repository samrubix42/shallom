<div class="space-y-0 text-slate-800 font-sans bg-white">

    <!-- 1. MINIMALIST ARCHITECTURAL STUDIO HERO SECTION -->
    <section id="hero" 
             x-data="{ 
                 activeSlide: 0,
                 slides: [
                     {
                         badge: 'ENGINEERED MODULAR HOUSES',
                         title: 'Vibrant Modular Houses & Cottages',
                         desc: 'Fostering rapid construction, superior thermal insulation, and custom interior layouts through pre-engineered steel framing.',
                         img: '{{ asset('images/prefab_house_hero_png_1788163818892.jpg') }}',
                         tag: 'Prefab Houses'
                     },
                     {
                         badge: 'EXECUTIVE COMMERCIAL CABINS',
                         title: 'Plug & Play Site Offices & Cabins',
                         desc: 'Fully pre-wired executive site offices with UPVC sliding windows, vinyl flooring, and weatherproof insulated roof sheets.',
                         img: '{{ asset('images/prefab_site_office_hero_png_1788163841263.jpg') }}',
                         tag: 'Site Offices'
                     },
                     {
                         badge: 'INDUSTRIAL PEB STEEL BUILDINGS',
                         title: 'High-Span Industrial Steel Buildings',
                         desc: 'Heavy structural steel framework for factory warehouses, industrial sheds, labor colonies, and rooftop extensions.',
                         img: '{{ asset('images/steel_building_hero_png_1788163862265.jpg') }}',
                         tag: 'Steel Sheds'
                     }
                 ],
                 next() { this.activeSlide = (this.activeSlide + 1) % this.slides.length },
                 prev() { this.activeSlide = (this.activeSlide - 1 + this.slides.length) % this.slides.length },
                 init() { setInterval(() => { this.next() }, 6500) }
             }"
             class="relative bg-white text-slate-900 overflow-hidden py-16 sm:py-24 lg:py-28 border-b border-slate-200">
        
        <!-- Subtle Ambient Grid Background -->
        <div class="absolute inset-0 bg-grid-pattern opacity-30 pointer-events-none"></div>

        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- Left Column: Content Canvas -->
                <div class="lg:col-span-6 space-y-8">
                    
                    <div class="inline-flex items-center gap-2 bg-[#FFF4E5] border border-[#FFD199] text-[#FF8B02] text-xs font-extrabold uppercase tracking-widest px-4 py-1.5 rounded-full shadow-2xs">
                        <span class="w-2 h-2 rounded-full bg-[#FF8B02] animate-pulse"></span>
                        <span x-text="slides[activeSlide].badge"></span>
                    </div>

                    <h1 class="text-4xl sm:text-5xl lg:text-6xl font-black text-slate-900 tracking-tight leading-[1.1]">
                        Engineered <br/>
                        <span class="text-transparent bg-clip-text bg-gradient-to-r from-[#FF8B02] via-orange-500 to-amber-600" x-text="slides[activeSlide].title"></span>
                    </h1>

                    <p class="text-slate-600 text-base sm:text-lg leading-relaxed font-medium max-w-lg" x-text="slides[activeSlide].desc">
                    </p>

                    <!-- CTAs & Slider Nav -->
                    <div class="flex flex-wrap items-center gap-4 pt-2">
                        <a href="{{ route('products') }}" 
                           class="inline-flex items-center justify-center gap-2.5 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-8 py-4 rounded-full shadow-lg shadow-orange-500/20 transition-all text-sm transform hover:-translate-y-0.5">
                            <span>Explore Products Catalog</span>
                            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                        </a>
                        <a href="#contact" 
                           class="inline-flex items-center justify-center gap-2 bg-slate-100 hover:bg-slate-200 text-slate-900 font-bold px-7 py-4 rounded-full transition-all text-sm border border-slate-200">
                            Get Custom Quote
                        </a>
                    </div>

                    <!-- Slide Dots -->
                    <div class="flex items-center gap-3 pt-6 border-t border-slate-100">
                        <template x-for="(slide, index) in slides" :key="index">
                            <button @click="activeSlide = index" 
                                    :class="activeSlide === index ? 'w-10 bg-[#FF8B02]' : 'w-3 bg-slate-300 hover:bg-slate-400'"
                                    class="h-3 rounded-full transition-all duration-300 focus:outline-none"
                                    :aria-label="'Slide ' + (index + 1)"></button>
                        </template>
                    </div>

                </div>

                <!-- Right Column: Architectural Photography Showcase -->
                <div class="lg:col-span-6 relative">
                    <div class="relative rounded-3xl overflow-hidden aspect-[4/3] border border-slate-200 shadow-2xl bg-slate-900 group">
                        <template x-for="(slide, index) in slides" :key="index">
                            <img :src="slide.img" 
                                 :alt="slide.title"
                                 x-show="activeSlide === index"
                                 x-cloak
                                 x-transition:enter="transition ease-out duration-700"
                                 x-transition:enter-start="opacity-0 scale-98"
                                 x-transition:enter-end="opacity-100 scale-100"
                                 class="absolute inset-0 w-full h-full object-cover">
                        </template>
                        <div class="absolute top-4 right-4 bg-slate-900/85 backdrop-blur-md text-white text-xs font-bold px-4 py-1.5 rounded-full border border-white/20">
                            <span x-text="slides[activeSlide].tag"></span>
                        </div>
                    </div>
                </div>

            </div>

            <!-- Ticker Stats Bar -->
            <div class="grid grid-cols-2 md:grid-cols-4 gap-6 pt-16 mt-16 border-t border-slate-200/80">
                <div class="text-center md:text-left space-y-1">
                    <div class="text-3xl sm:text-4xl font-black text-slate-900">25+ Years</div>
                    <div class="text-xs font-extrabold text-[#FF8B02] uppercase tracking-wider">Structural Lifespan</div>
                </div>
                <div class="text-center md:text-left space-y-1">
                    <div class="text-3xl sm:text-4xl font-black text-slate-900">70% Faster</div>
                    <div class="text-xs font-extrabold text-[#FF8B02] uppercase tracking-wider">Site Turnaround</div>
                </div>
                <div class="text-center md:text-left space-y-1">
                    <div class="text-3xl sm:text-4xl font-black text-slate-900">100%</div>
                    <div class="text-xs font-extrabold text-[#FF8B02] uppercase tracking-wider">Demountable & Relocatable</div>
                </div>
                <div class="text-center md:text-left space-y-1">
                    <div class="text-3xl sm:text-4xl font-black text-slate-900">1,200+</div>
                    <div class="text-xs font-extrabold text-[#FF8B02] uppercase tracking-wider">Completed Projects</div>
                </div>
            </div>

        </div>
    </section>

    <!-- 2. MINIMALIST PRODUCT CATEGORY SECTION (PREFAB HOUSES & PREFAB BUILDINGS) -->
    <section id="categories" class="py-24 sm:py-32 bg-slate-50 text-slate-900 relative border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <!-- Section Header -->
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-16">
                <div class="space-y-3 max-w-2xl">
                    <span class="inline-block bg-[#FFF4E5] border border-[#FFD199] text-[#FF8B02] text-xs font-extrabold uppercase tracking-widest px-4 py-1.5 rounded-full">
                        OUR PRODUCT COLLECTION
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 uppercase tracking-tight">
                        PREFAB HOUSES & PREFAB BUILDINGS
                    </h2>
                </div>
                <a href="{{ route('products') }}" 
                   class="inline-flex items-center gap-2 text-xs font-extrabold text-[#FF8B02] hover:text-[#E67A00] bg-white border border-[#FFD199] px-6 py-3 rounded-full shadow-xs transition-colors shrink-0">
                    <span>View All Specifications Page</span>
                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M14 5l7 7m0 0l-7 7m7-7H3"/></svg>
                </a>
            </div>

            <!-- 6 Sleek Minimalist Studio Cards (3 Columns) -->
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Category 1: Prefab Houses -->
                <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-2xl hover:border-[#FF8B02]/50 transition-all duration-500 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-60 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/cat_prefab_houses_png_1788163884847.jpg') }}" 
                                 alt="Prefab Houses" 
                                 class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700">
                            <div class="absolute top-4 left-4">
                                <span class="bg-slate-900/85 backdrop-blur-md text-white text-[10px] font-extrabold uppercase px-3 py-1 rounded-full border border-white/20">
                                    01 • Prefab Houses
                                </span>
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <h3 class="text-xl font-extrabold text-slate-900 group-hover:text-[#FF8B02] transition-colors border-b border-slate-100 pb-3">
                                Prefab Houses
                            </h3>

                            <ul class="space-y-2 text-xs text-slate-600 font-medium">
                                <li class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-colors">
                                    <span>Prefab Portable House</span>
                                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </li>
                                <li class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-colors">
                                    <span>Prefab Cottage House</span>
                                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </li>
                                <li class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-colors">
                                    <span>Prefabricated Modular Cottage</span>
                                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('products') }}" 
                           class="w-full bg-[#FFF4E5] hover:bg-[#FF8B02] text-[#FF8B02] hover:text-white font-extrabold text-xs py-3 rounded-2xl border border-[#FFD199] flex items-center justify-center gap-1.5 transition-all">
                            <span>Explore Houses Catalog</span>
                        </a>
                    </div>
                </div>

                <!-- Category 2: Prefab Structures -->
                <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-2xl hover:border-[#FF8B02]/50 transition-all duration-500 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-60 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/cat_prefab_structures_png_1788163908538.jpg') }}" 
                                 alt="Prefab Structures" 
                                 class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700">
                            <div class="absolute top-4 left-4">
                                <span class="bg-slate-900/85 backdrop-blur-md text-white text-[10px] font-extrabold uppercase px-3 py-1 rounded-full border border-white/20">
                                    02 • Prefab Structures
                                </span>
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <h3 class="text-xl font-extrabold text-slate-900 group-hover:text-[#FF8B02] transition-colors border-b border-slate-100 pb-3">
                                Prefab Structures
                            </h3>

                            <ul class="space-y-2 text-xs text-slate-600 font-medium">
                                <li class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-colors">
                                    <span>Building Metal Structure</span>
                                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </li>
                                <li class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-colors">
                                    <span>Prefab Double Story Buildings</span>
                                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </li>
                                <li class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-colors">
                                    <span>Pre fabricated Stall</span>
                                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('products') }}" 
                           class="w-full bg-[#FFF4E5] hover:bg-[#FF8B02] text-[#FF8B02] hover:text-white font-extrabold text-xs py-3 rounded-2xl border border-[#FFD199] flex items-center justify-center gap-1.5 transition-all">
                            <span>Explore Structures Catalog</span>
                        </a>
                    </div>
                </div>

                <!-- Category 3: Prefab Buildings -->
                <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-2xl hover:border-[#FF8B02]/50 transition-all duration-500 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-60 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/cat_prefab_buildings_png_1788163932649.jpg') }}" 
                                 alt="Prefab Buildings" 
                                 class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700">
                            <div class="absolute top-4 left-4">
                                <span class="bg-slate-900/85 backdrop-blur-md text-white text-[10px] font-extrabold uppercase px-3 py-1 rounded-full border border-white/20">
                                    03 • Prefab Buildings
                                </span>
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <h3 class="text-xl font-extrabold text-slate-900 group-hover:text-[#FF8B02] transition-colors border-b border-slate-100 pb-3">
                                Prefab Buildings
                            </h3>

                            <ul class="space-y-2 text-xs text-slate-600 font-medium">
                                <li class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-colors">
                                    <span>Prefabricated School Building</span>
                                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </li>
                                <li class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-colors">
                                    <span>Roof Top Buildings</span>
                                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </li>
                                <li class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-colors">
                                    <span>Prefab School Building</span>
                                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('products') }}" 
                           class="w-full bg-[#FFF4E5] hover:bg-[#FF8B02] text-[#FF8B02] hover:text-white font-extrabold text-xs py-3 rounded-2xl border border-[#FFD199] flex items-center justify-center gap-1.5 transition-all">
                            <span>Explore Buildings Catalog</span>
                        </a>
                    </div>
                </div>

                <!-- Category 4: Prefebricated Offices -->
                <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-2xl hover:border-[#FF8B02]/50 transition-all duration-500 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-60 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/cat_prefab_offices_png_1788163956003.jpg') }}" 
                                 alt="Prefebricated Offices" 
                                 class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700">
                            <div class="absolute top-4 left-4">
                                <span class="bg-slate-900/85 backdrop-blur-md text-white text-[10px] font-extrabold uppercase px-3 py-1 rounded-full border border-white/20">
                                    04 • Prefab Offices
                                </span>
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <h3 class="text-xl font-extrabold text-slate-900 group-hover:text-[#FF8B02] transition-colors border-b border-slate-100 pb-3">
                                Prefebricated Offices
                            </h3>

                            <ul class="space-y-2 text-xs text-slate-600 font-medium">
                                <li class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-colors">
                                    <span>Prefab Site Office</span>
                                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </li>
                                <li class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-colors">
                                    <span>Prefabricated Classroom Structure</span>
                                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </li>
                                <li class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-colors">
                                    <span>Pre Fabricated Building</span>
                                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('products') }}" 
                           class="w-full bg-[#FFF4E5] hover:bg-[#FF8B02] text-[#FF8B02] hover:text-white font-extrabold text-xs py-3 rounded-2xl border border-[#FFD199] flex items-center justify-center gap-1.5 transition-all">
                            <span>Explore Offices Catalog</span>
                        </a>
                    </div>
                </div>

                <!-- Category 5: Prefab Cabins -->
                <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-2xl hover:border-[#FF8B02]/50 transition-all duration-500 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-60 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/cat_prefab_cabins_png_1788163983749.jpg') }}" 
                                 alt="Prefab Cabins" 
                                 class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700">
                            <div class="absolute top-4 left-4">
                                <span class="bg-slate-900/85 backdrop-blur-md text-white text-[10px] font-extrabold uppercase px-3 py-1 rounded-full border border-white/20">
                                    05 • Prefab Cabins
                                </span>
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <h3 class="text-xl font-extrabold text-slate-900 group-hover:text-[#FF8B02] transition-colors border-b border-slate-100 pb-3">
                                Prefab Cabins
                            </h3>

                            <ul class="space-y-2 text-xs text-slate-600 font-medium">
                                <li class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-colors">
                                    <span>Prefabricated Cottage Homes</span>
                                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </li>
                                <li class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-colors">
                                    <span>Prefab Bunk House</span>
                                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </li>
                                <li class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-colors">
                                    <span>Prefabricated Portable Cabin</span>
                                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('products') }}" 
                           class="w-full bg-[#FFF4E5] hover:bg-[#FF8B02] text-[#FF8B02] hover:text-white font-extrabold text-xs py-3 rounded-2xl border border-[#FFD199] flex items-center justify-center gap-1.5 transition-all">
                            <span>Explore Cabins Catalog</span>
                        </a>
                    </div>
                </div>

                <!-- Category 6: Labour Hutments -->
                <div class="bg-white rounded-3xl border border-slate-200 overflow-hidden shadow-sm hover:shadow-2xl hover:border-[#FF8B02]/50 transition-all duration-500 flex flex-col justify-between group">
                    <div>
                        <div class="relative h-60 w-full overflow-hidden bg-slate-100">
                            <img src="{{ asset('images/cat_labour_hutments_png_1788164012359.jpg') }}" 
                                 alt="Labour Hutments for Construction Sites" 
                                 class="w-full h-full object-cover group-hover:scale-108 transition-transform duration-700">
                            <div class="absolute top-4 left-4">
                                <span class="bg-slate-900/85 backdrop-blur-md text-white text-[10px] font-extrabold uppercase px-3 py-1 rounded-full border border-white/20">
                                    06 • Labour Hutments
                                </span>
                            </div>
                        </div>

                        <div class="p-6 space-y-4">
                            <h3 class="text-xl font-extrabold text-slate-900 group-hover:text-[#FF8B02] transition-colors border-b border-slate-100 pb-3">
                                Labour Hutments
                            </h3>

                            <ul class="space-y-2 text-xs text-slate-600 font-medium">
                                <li class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-colors">
                                    <span>Prefab Labour Room</span>
                                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </li>
                                <li class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-colors">
                                    <span>Prefab Labour Camp</span>
                                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </li>
                                <li class="flex items-center justify-between p-2 rounded-xl hover:bg-[#FFF4E5] hover:text-[#FF8B02] transition-colors">
                                    <span>Portable Labour Rooms</span>
                                    <svg class="w-3.5 h-3.5 text-[#FF8B02]" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="p-6 pt-0">
                        <a href="{{ route('products') }}" 
                           class="w-full bg-[#FFF4E5] hover:bg-[#FF8B02] text-[#FF8B02] hover:text-white font-extrabold text-xs py-3 rounded-2xl border border-[#FFD199] flex items-center justify-center gap-1.5 transition-all">
                            <span>Explore Hutments Catalog</span>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 3. MINIMALIST WHY CHOOSE US -->
    <section id="why-us" class="py-24 sm:py-32 bg-white text-slate-900 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center max-w-3xl mx-auto mb-20 space-y-3">
                <span class="text-[#FF8B02] text-xs font-extrabold uppercase tracking-widest bg-[#FFF4E5] px-4 py-1.5 rounded-full border border-[#FFD199]">
                    PREENGINEERED ADVANTAGES
                </span>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight">Why Industry Leaders Choose Shallom Prefab</h2>
                <p class="text-slate-600 text-sm sm:text-base font-medium">Outperforming traditional brick civil construction in speed, cost, insulation, and relocatability.</p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
                
                <div class="bg-slate-50 border border-slate-200/80 p-8 rounded-3xl hover:border-[#FF8B02] hover:shadow-xl transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-[#FFF4E5] border border-[#FFD199] flex items-center justify-center text-[#FF8B02] mb-6 group-hover:scale-110 transition-transform font-bold">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                    </div>
                    <h3 class="text-xl font-extrabold text-slate-900 mb-2">70% Rapid Speed</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-medium">
                        Off-site precision engineering enables site delivery and erection within days instead of months.
                    </p>
                </div>

                <div class="bg-slate-50 border border-slate-200/80 p-8 rounded-3xl hover:border-[#FF8B02] hover:shadow-xl transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-[#FFF4E5] border border-[#FFD199] flex items-center justify-center text-[#FF8B02] mb-6 group-hover:scale-110 transition-transform font-bold">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                    </div>
                    <h3 class="text-xl font-extrabold text-slate-900 mb-2">Storm Durability</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-medium">
                        Galvanized IS 2062 steel frame withstands high-velocity wind pressures, heavy rains, and seismic shocks.
                    </p>
                </div>

                <div class="bg-slate-50 border border-slate-200/80 p-8 rounded-3xl hover:border-[#FF8B02] hover:shadow-xl transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-[#FFF4E5] border border-[#FFD199] flex items-center justify-center text-[#FF8B02] mb-6 group-hover:scale-110 transition-transform font-bold">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"/></svg>
                    </div>
                    <h3 class="text-xl font-extrabold text-slate-900 mb-2">100% Relocatable</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-medium">
                        Demountable nut-and-bolt structure allows unbolting, transport in trucks, and re-erection at new project sites.
                    </p>
                </div>

                <div class="bg-slate-50 border border-slate-200/80 p-8 rounded-3xl hover:border-[#FF8B02] hover:shadow-xl transition-all duration-300 group">
                    <div class="w-14 h-14 rounded-2xl bg-[#FFF4E5] border border-[#FFD199] flex items-center justify-center text-[#FF8B02] mb-6 group-hover:scale-110 transition-transform font-bold">
                        <svg class="w-7 h-7" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 3v1m0 16v1m9-9h-1M4 12H3m15.364 6.364l-.707-.707M6.343 6.343l-.707-.707m12.728 0l-.707.707M6.343 17.657l-.707.707M16 12a4 4 0 11-8 0 4 4 0 018 0z"/></svg>
                    </div>
                    <h3 class="text-xl font-extrabold text-slate-900 mb-2">Thermal Isolation</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-medium">
                        Insulated EPS/PUF wall panels reduce indoor temperatures by up to 8°C, cutting HVAC power bills dramatically.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. CLEAN AUTO-SLIDING TESTIMONIALS (3 CARDS ON DESKTOP) -->
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
             class="py-24 sm:py-32 bg-slate-50 text-slate-900 border-b border-slate-200 overflow-hidden">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-16">
                <div class="space-y-3 max-w-2xl">
                    <span class="inline-block bg-[#FFF4E5] border border-[#FFD199] text-[#FF8B02] text-xs font-extrabold uppercase tracking-widest px-4 py-1.5 rounded-full">
                        CLIENT REPUTATION
                    </span>
                    <h2 class="text-3xl sm:text-4xl lg:text-5xl font-black text-slate-900 tracking-tight">
                        Trusted by Infrastructure Leaders
                    </h2>
                </div>

                <div class="flex items-center gap-3 shrink-0">
                    <button @click="prev()" 
                            class="w-12 h-12 rounded-full border border-slate-200 bg-white hover:bg-[#FFF4E5] hover:border-[#FF8B02] text-slate-700 hover:text-[#FF8B02] flex items-center justify-center transition-all shadow-xs">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M15 19l-7-7 7-7"/></svg>
                    </button>
                    <button @click="next()" 
                            class="w-12 h-12 rounded-full border border-slate-200 bg-white hover:bg-[#FFF4E5] hover:border-[#FF8B02] text-slate-700 hover:text-[#FF8B02] flex items-center justify-center transition-all shadow-xs">
                        <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M9 5l7 7-7 7"/></svg>
                    </button>
                </div>
            </div>

            <!-- Page 1 (3 Cards) -->
            <div x-show="page === 0" x-cloak class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm space-y-4">
                    <div class="flex items-center gap-1 text-[#FF8B02]">
                        <template x-for="i in 5"><svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></template>
                    </div>
                    <p class="text-slate-700 text-sm font-semibold italic leading-relaxed">
                        "Shallom delivered our 15,000 sq. ft. modular site office complex in 5 days! The thermal insulation during Delhi summers keeps inside temperatures cool."
                    </p>
                    <div class="pt-4 border-t border-slate-100">
                        <div class="text-sm font-extrabold text-slate-900">Sunil Verma</div>
                        <div class="text-xs text-slate-500 font-medium">Project Director • L&T Infrastructure</div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm space-y-4">
                    <div class="flex items-center gap-1 text-[#FF8B02]">
                        <template x-for="i in 5"><svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></template>
                    </div>
                    <p class="text-slate-700 text-sm font-semibold italic leading-relaxed">
                        "The labour hutments supplied for our township site passed all heavy monsoon tests with zero water leakage. Demountable nut-bolt framework makes relocating seamless."
                    </p>
                    <div class="pt-4 border-t border-slate-100">
                        <div class="text-sm font-extrabold text-slate-900">Rajesh Agarwal</div>
                        <div class="text-xs text-slate-500 font-medium">Operations Head • Tata Housing</div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm space-y-4">
                    <div class="flex items-center gap-1 text-[#FF8B02]">
                        <template x-for="i in 5"><svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></template>
                    </div>
                    <p class="text-slate-700 text-sm font-semibold italic leading-relaxed">
                        "We needed an urgent 2-story school expansion erected during summer break. Shallom completed structural steel framing and soundproof Aerocon panels on schedule."
                    </p>
                    <div class="pt-4 border-t border-slate-100">
                        <div class="text-sm font-extrabold text-slate-900">Dr. Ananya Roy</div>
                        <div class="text-xs text-slate-500 font-medium">Trustee • Greenfield Intl. School</div>
                    </div>
                </div>
            </div>

            <!-- Page 2 (3 Cards) -->
            <div x-show="page === 1" x-cloak class="grid grid-cols-1 md:grid-cols-3 gap-8">
                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm space-y-4">
                    <div class="flex items-center gap-1 text-[#FF8B02]">
                        <template x-for="i in 5"><svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></template>
                    </div>
                    <p class="text-slate-700 text-sm font-semibold italic leading-relaxed">
                        "Shallom Prefab's modular cottages transformed our eco-resort footprint. Their team erected luxury wooden-finish cottages without harming surrounding trees."
                    </p>
                    <div class="pt-4 border-t border-slate-100">
                        <div class="text-sm font-extrabold text-slate-900">Vikramaditya Singh</div>
                        <div class="text-xs text-slate-500 font-medium">MD • Himalayan Eco Resorts</div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm space-y-4">
                    <div class="flex items-center gap-1 text-[#FF8B02]">
                        <template x-for="i in 5"><svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></template>
                    </div>
                    <p class="text-slate-700 text-sm font-semibold italic leading-relaxed">
                        "Added 4,000 sq. ft. executive rooftop office on our commercial complex. Lightweight structural frame avoided heavy civil load issues completely!"
                    </p>
                    <div class="pt-4 border-t border-slate-100">
                        <div class="text-sm font-extrabold text-slate-900">Karan Malhotra</div>
                        <div class="text-xs text-slate-500 font-medium">VP Infra • DLF Commercial</div>
                    </div>
                </div>

                <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm space-y-4">
                    <div class="flex items-center gap-1 text-[#FF8B02]">
                        <template x-for="i in 5"><svg class="w-4 h-4 fill-current" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg></template>
                    </div>
                    <p class="text-slate-700 text-sm font-semibold italic leading-relaxed">
                        "Precision engineering and clean panel finish. Their portable bunk houses with attached toilets exceeded our architectural standards for mining camp quarters."
                    </p>
                    <div class="pt-4 border-t border-slate-100">
                        <div class="text-sm font-extrabold text-slate-900">Priya Sharma</div>
                        <div class="text-xs text-slate-500 font-medium">Principal Architect • Modern Spaces</div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- 5. FAQ & DIRECT REQUIREMENT CONTACT FORM -->
    <section id="faq" class="py-24 sm:py-32 bg-white text-slate-900 border-b border-slate-200">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-start">
                
                <!-- FAQ Accordion (Left 6 Columns) -->
                <div class="lg:col-span-6 space-y-6" x-data="{ openFaq: 0 }">
                    <div>
                        <span class="text-[#FF8B02] text-xs font-extrabold uppercase tracking-widest bg-[#FFF4E5] px-3.5 py-1.5 rounded-full border border-[#FFD199]">
                            FREQUENTLY ASKED
                        </span>
                        <h2 class="text-3xl sm:text-4xl font-extrabold text-slate-900 mt-3">Modular Construction Q&A</h2>
                    </div>

                    <div class="space-y-3">
                        <div class="border border-slate-200 rounded-2xl overflow-hidden bg-slate-50">
                            <button @click="openFaq = (openFaq === 0 ? null : 0)" 
                                    class="w-full px-6 py-4 text-left font-bold text-sm text-slate-900 flex justify-between items-center gap-4 hover:text-[#FF8B02]">
                                <span>What is the expected lifespan of Shallom prefab buildings?</span>
                                <svg class="w-4 h-4 text-[#FF8B02] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div x-show="openFaq === 0" x-cloak class="px-6 pb-4 text-xs text-slate-600 leading-relaxed font-medium">
                                Engineered using IS 2062 grade steel framework and EPS/PUF sandwich wall panels offering a structural lifespan of 20 to 25+ years.
                            </div>
                        </div>

                        <div class="border border-slate-200 rounded-2xl overflow-hidden bg-slate-50">
                            <button @click="openFaq = (openFaq === 1 ? null : 1)" 
                                    class="w-full px-6 py-4 text-left font-bold text-sm text-slate-900 flex justify-between items-center gap-4 hover:text-[#FF8B02]">
                                <span>How fast can a site office or cabin be installed?</span>
                                <svg class="w-4 h-4 text-[#FF8B02] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div x-show="openFaq === 1" x-cloak class="px-6 pb-4 text-xs text-slate-600 leading-relaxed font-medium">
                                Standard cabins are dispatched within 3-5 days and assembled on-site in under 48 hours.
                            </div>
                        </div>

                        <div class="border border-slate-200 rounded-2xl overflow-hidden bg-slate-50">
                            <button @click="openFaq = (openFaq === 2 ? null : 2)" 
                                    class="w-full px-6 py-4 text-left font-bold text-sm text-slate-900 flex justify-between items-center gap-4 hover:text-[#FF8B02]">
                                <span>Are cabins leak-proof and monsoon resistant?</span>
                                <svg class="w-4 h-4 text-[#FF8B02] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div x-show="openFaq === 2" x-cloak class="px-6 pb-4 text-xs text-slate-600 leading-relaxed font-medium">
                                Yes! Roof profile sheets feature overlapping insulated joints eliminating water seepage completely.
                            </div>
                        </div>

                        <div class="border border-slate-200 rounded-2xl overflow-hidden bg-slate-50">
                            <button @click="openFaq = (openFaq === 3 ? null : 3)" 
                                    class="w-full px-6 py-4 text-left font-bold text-sm text-slate-900 flex justify-between items-center gap-4 hover:text-[#FF8B02]">
                                <span>Can we dismantle and relocate cabins later?</span>
                                <svg class="w-4 h-4 text-[#FF8B02] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M19 9l-7 7-7-7"/></svg>
                            </button>
                            <div x-show="openFaq === 3" x-cloak class="px-6 pb-4 text-xs text-slate-600 leading-relaxed font-medium">
                                Absolutely. Nut-and-bolt demountable framing allows unbolting and re-erection at new project sites.
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact & Requirement Form (Right 6 Columns) -->
                <div id="contact" class="lg:col-span-6 bg-slate-50 border border-slate-200 rounded-3xl p-8 sm:p-10 shadow-lg">
                    @if($enquirySubmitted)
                        <div class="bg-emerald-50 border border-emerald-200 rounded-2xl p-6 text-center space-y-3">
                            <div class="w-12 h-12 bg-emerald-600 text-white rounded-full flex items-center justify-center mx-auto">
                                <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                            </div>
                            <h3 class="text-xl font-extrabold text-slate-900">Requirement Submitted!</h3>
                            <p class="text-xs text-slate-600 font-medium">Our sales engineer will review your specs and call you back shortly.</p>
                            <button wire:click="resetEnquiryState" class="bg-[#FF8B02] text-white font-bold px-6 py-2 rounded-full text-xs">
                                Submit Another Request
                            </button>
                        </div>
                    @else
                        <form wire:submit="submitEnquiry" class="space-y-4">
                            <div class="flex items-center justify-between border-b border-slate-200 pb-3">
                                <h3 class="text-xl font-extrabold text-slate-900">Send Requirement</h3>
                                <a href="tel:+917942550323" class="text-xs font-bold text-[#FF8B02] hover:text-[#E67A00]">
                                    Call 07942550323
                                </a>
                            </div>

                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 mb-1">Full Name *</label>
                                    <input type="text" wire:model="name" placeholder="Rahul Sharma" class="w-full bg-white border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#FF8B02]">
                                    @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                                <div>
                                    <label class="block text-xs font-bold text-slate-700 mb-1">Phone Number *</label>
                                    <input type="tel" wire:model="phone" placeholder="9876543210" class="w-full bg-white border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#FF8B02]">
                                    @error('phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                                </div>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Product Requirement</label>
                                <select wire:model="buildingInterest" class="w-full bg-white border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#FF8B02]">
                                    <option value="Prefab Site Office">Prefab Site Office</option>
                                    <option value="Prefab Portable House">Prefab Portable House</option>
                                    <option value="Building Metal Structure">Building Metal Structure</option>
                                    <option value="Labour Hutments for Construction Sites">Labour Hutments for Construction</option>
                                </select>
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1">Message / Specs</label>
                                <textarea wire:model="message" rows="3" placeholder="Mention size or location..." class="w-full bg-white border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#FF8B02]"></textarea>
                            </div>

                            <button type="submit" class="w-full bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold py-3.5 rounded-full shadow-md text-sm uppercase tracking-wider transition-all">
                                Submit Requirement
                            </button>
                        </form>
                    @endif
                </div>

            </div>
        </div>
    </section>

</div>