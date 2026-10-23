@section('title', 'Shallom Prefab Systems | Modular Houses & Prefab Buildings')
@section('meta_description', 'Shallom Prefab Systems - Leading Manufacturer and Service Provider of Prefabricated Houses, Modular Cabins, Site Offices, Steel Buildings, Labour Hutments, and Aerocon Wall Panels in India.')

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
                <img src="{{ asset('shallom/IMG-20260901-WA0014.jpg') }}" 
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
                <span class="flex items-center gap-2 text-[#FF8B02]"><i class="ri-checkbox-circle-fill text-emerald-400"></i> Established 2017</span>
                <span class="text-slate-500">•</span>
                <span class="text-slate-200">50-Year Structure Lifespan</span>
                <span class="text-slate-500">•</span>
                <span class="text-[#FF8B02] font-extrabold">60% Faster Turnaround</span>
                <span class="text-slate-500">•</span>
                <span class="text-slate-200">Modular & Relocatable Structures</span>
                <span class="text-slate-500">•</span>
                <span class="text-emerald-400 font-extrabold">50+ Skilled Engineers</span>
                <span class="text-slate-500">•</span>
                <span class="text-[#FF8B02]">Annual Capacity ₹25 Cr</span>
                <span class="text-slate-500">•</span>
            </div>
            <div class="flex items-center gap-12 shrink-0">
                <span class="flex items-center gap-2 text-[#FF8B02]"><i class="ri-checkbox-circle-fill text-emerald-400"></i> Established 2017</span>
                <span class="text-slate-500">•</span>
                <span class="text-slate-200">50-Year Structure Lifespan</span>
                <span class="text-slate-500">•</span>
                <span class="text-[#FF8B02] font-extrabold">60% Faster Turnaround</span>
                <span class="text-slate-500">•</span>
                <span class="text-slate-200">Modular & Relocatable Structures</span>
                <span class="text-slate-500">•</span>
                <span class="text-emerald-400 font-extrabold">50+ Skilled Engineers</span>
                <span class="text-slate-500">•</span>
                <span class="text-[#FF8B02]">Annual Capacity ₹25 Cr</span>
                <span class="text-slate-500">•</span>
            </div>
        </div>
    </div>


    <!-- 3. ARCHITECTURAL "KNOW US BETTER" SECTION (EXACT REFERENCE DESIGN) -->
    <section id="about" class="py-20 sm:py-28 bg-[#FAF9F5] text-slate-900 border-b border-slate-200/80 relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <!-- Left Column: High-Res Architectural Video (Lazy Loaded) -->
                <div class="lg:col-span-6 reveal-on-scroll"
                     x-data="{
                        initLazyVideo() {
                            const video = this.$refs.lazyVideo;
                            if (!video) return;
                            const observer = new IntersectionObserver((entries) => {
                                entries.forEach(entry => {
                                    if (entry.isIntersecting) {
                                        video.play().catch(() => {});
                                    } else {
                                        video.pause();
                                    }
                                });
                            }, { threshold: 0.2 });
                            observer.observe(video);
                        }
                     }"
                     x-init="initLazyVideo()">
                    <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-slate-200/60 bg-slate-900 group">
                        <video x-ref="lazyVideo" loop muted playsinline controls preload="none" poster="{{ asset('shallom/IMG-20260901-WA0014.jpg') }}"
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
                        Established in <strong>2017</strong>, Shallom Prefab Systems delivers pre-engineered building solutions across India. Our turnkey work spans architectural design, precision manufacturing, transport, and rapid installation for residential, commercial, and industrial projects.
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
            
            <div class="flex flex-col lg:flex-row lg:items-end justify-between gap-6 mb-16 reveal-on-scroll">
                <div class="max-w-2xl space-y-4">
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

                @if($this->categories->isNotEmpty())
                    <!-- Category Filter Buttons -->
                    <div class="flex items-center gap-2 overflow-x-auto pb-2 lg:pb-0 scrollbar-none shrink-0">
                        <button wire:click="filterCategory('all')" 
                                class="px-5 py-2.5 rounded-full text-xs font-bold transition-all border shrink-0 cursor-pointer {{ $activeCategory === 'all' ? 'bg-[#FF8B02] text-white border-[#FF8B02] shadow-xs' : 'bg-[#FAF9F5] text-slate-700 border-slate-200/80 hover:bg-[#FFF4E5] hover:text-[#FF8B02]' }}">
                            All Ranges
                        </button>
                        @foreach($this->categories as $cat)
                            <button wire:click="filterCategory('{{ $cat->slug }}')" 
                                    class="px-5 py-2.5 rounded-full text-xs font-bold transition-all border shrink-0 cursor-pointer {{ $activeCategory === $cat->slug ? 'bg-[#FF8B02] text-white border-[#FF8B02] shadow-xs' : 'bg-[#FAF9F5] text-slate-700 border-slate-200/80 hover:bg-[#FFF4E5] hover:text-[#FF8B02]' }}">
                                {{ $cat->name }}
                            </button>
                        @endforeach
                    </div>
                @endif
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                @forelse($this->products as $index => $product)
                    @php
                        $images = $product->images ?? [];
                        $mainImage = !empty($images) && isset($images[0]) ? asset($images[0]) : asset('shallom/IMG-20260901-WA0009.jpg');
                        $details = $product->details ?? [];
                        $specs = $details['specs'] ?? [];
                        $firstSpecKey = !empty($specs) ? array_key_first($specs) : null;
                        $firstSpecVal = $firstSpecKey ? $specs[$firstSpecKey] : null;
                        $delay = (($index % 3) + 1) * 100;
                    @endphp

                    <div class="bg-[#FAF9F5] rounded-2xl border border-slate-200/80 overflow-hidden shadow-xs hover:shadow-xl transition-all duration-500 flex flex-col justify-between group reveal-on-scroll delay-{{ $delay }}">
                        <div>
                            <div class="relative h-60 w-full overflow-hidden bg-slate-100">
                                <img src="{{ $mainImage }}" 
                                     alt="{{ $product->title }}" 
                                     class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                
                                @if($product->category)
                                    <div class="absolute top-3 left-3 bg-slate-900/80 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1 rounded-full uppercase tracking-wider border border-white/20">
                                        {{ $product->category->name }}
                                    </div>
                                @endif
                            </div>
                            <div class="p-7 space-y-3">
                                <div class="text-[11px] font-bold text-[#FF8B02] uppercase tracking-widest">
                                    0{{ $index + 1 }} • {{ strtoupper($product->category?->name ?? 'RANGE') }}
                                </div>
                                <h3 class="text-xl font-bold text-slate-900 line-clamp-1">{{ $product->title }}</h3>
                                <p class="text-xs text-slate-600 leading-relaxed line-clamp-3 font-normal">
                                    {{ $product->description }}
                                </p>

                                @if($firstSpecKey && $firstSpecVal)
                                    <div class="pt-2 flex items-center gap-1.5 text-xs text-slate-500">
                                        <i class="ri-checkbox-circle-fill text-[#FF8B02]"></i>
                                        <span class="font-semibold text-slate-700">{{ $firstSpecKey }}:</span>
                                        <span class="truncate">{{ $firstSpecVal }}</span>
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="px-7 pb-7 flex items-center justify-between gap-4">
                            <a href="{{ route('products') }}" class="inline-flex items-center gap-2 text-[#FF8B02] font-bold text-xs uppercase tracking-widest hover:gap-3 transition-all group/btn">
                                <span>VIEW DETAILS</span>
                                <i class="ri-arrow-right-line text-sm group-hover/btn:translate-x-1 transition-transform"></i>
                            </a>
                            <a href="#contact" wire:click="selectProductForEnquiry('{{ $product->title }}')" class="text-xs font-bold text-slate-600 hover:text-[#FF8B02] transition-colors flex items-center gap-1">
                                <i class="ri-mail-send-line"></i>
                                <span>Enquire</span>
                            </a>
                        </div>
                    </div>
                @empty
                    <div class="col-span-full py-12 text-center text-slate-500 bg-[#FAF9F5] rounded-2xl border border-slate-200/80 space-y-2">
                        <i class="ri-box-3-line text-4xl text-slate-300 block"></i>
                        <p class="text-sm font-semibold">No range products found in this category.</p>
                        <a href="{{ route('products') }}" class="inline-block text-xs font-bold text-[#FF8B02] underline mt-2">View All Products Catalog</a>
                    </div>
                @endforelse
            </div>

            <!-- View All Ranges Button -->
            <div class="mt-14 text-center">
                <a href="{{ route('products') }}" wire:navigate
                   class="inline-flex items-center gap-2.5 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-8 py-3.5 rounded-full shadow-md shadow-orange-500/20 text-xs uppercase tracking-widest transition-all transform hover:-translate-y-0.5">
                    <span>Explore Complete Product Range</span>
                    <i class="ri-arrow-right-line text-base"></i>
                </a>
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
                    <h3 class="text-lg font-bold text-slate-900 mb-2">60% Faster Turnaround</h3>
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
                    <h3 class="text-lg font-bold text-slate-900 mb-2">Modular & Relocatable</h3>
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
                        Insulated Aerocon and PUF panel systems support high thermal efficiency.
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
                Since 2017, Shallom Prefab Systems has delivered modular construction solutions for residential, commercial, and industrial projects across India.
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
    @php
        $testimonialGroups = $this->testimonials->chunk(3);
    @endphp

    <section id="testimonials" 
             x-data="{ 
                 activeSlide: 0,
                 totalSlides: {{ count($testimonialGroups) }},
                 timer: null,
                 next() {
                     if (this.totalSlides > 0) {
                         this.activeSlide = (this.activeSlide + 1) % this.totalSlides;
                     }
                 },
                 prev() {
                     if (this.totalSlides > 0) {
                         this.activeSlide = (this.activeSlide - 1 + this.totalSlides) % this.totalSlides;
                     }
                 },
                 start() {
                     this.stop();
                     this.timer = setInterval(() => { this.next() }, 7000);
                 },
                 stop() {
                     if (this.timer) clearInterval(this.timer);
                 }
             }" 
             x-init="start()"
             @mouseenter="stop()"
             @mouseleave="start()"
             class="py-20 sm:py-28 bg-white text-slate-900 border-b border-slate-200/80 relative overflow-hidden">
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between gap-6 mb-12 reveal-on-scroll">
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

                @if(count($testimonialGroups) > 0)
                    <div class="flex items-center gap-4 shrink-0">
                        <span class="text-xs font-mono font-semibold text-slate-400">
                            <span x-text="activeSlide + 1" class="text-slate-800 font-bold"></span> / <span x-text="totalSlides"></span>
                        </span>
                        <div class="flex items-center gap-2">
                            <button @click="prev()" 
                                    class="w-10 h-10 rounded-md border border-slate-300 bg-[#FAF9F5] hover:bg-[#FFF4E5] hover:border-[#FF8B02] text-slate-700 hover:text-[#FF8B02] flex items-center justify-center transition-colors focus:outline-none cursor-pointer">
                                <i class="ri-arrow-left-line text-sm"></i>
                            </button>
                            <button @click="next()" 
                                    class="w-10 h-10 rounded-md border border-slate-300 bg-[#FAF9F5] hover:bg-[#FFF4E5] hover:border-[#FF8B02] text-slate-700 hover:text-[#FF8B02] flex items-center justify-center transition-colors focus:outline-none cursor-pointer">
                                <i class="ri-arrow-right-line text-sm"></i>
                            </button>
                        </div>
                    </div>
                @endif
            </div>

            <!-- DYNAMIC HORIZONTAL SLIDING TRACK (3 Cards Per Slide) -->
            <div class="overflow-hidden relative w-full">
                <div class="flex transition-transform duration-700 ease-in-out"
                     :style="'transform: translateX(-' + (activeSlide * 100) + '%);'">
                    
                    @forelse($testimonialGroups as $groupIndex => $group)
                        <div class="w-full shrink-0">
                            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8 px-0.5 py-1">
                                @foreach($group as $testimonial)
                                    <div class="bg-[#FAF9F5] rounded-md p-6 sm:p-8 border border-slate-200/90 shadow-xs flex flex-col justify-between h-full relative overflow-hidden group hover:border-[#FF8B02] transition-colors">
                                        <div class="space-y-4">
                                            <!-- Rating Stars -->
                                            <div class="flex items-center text-amber-500 gap-1 text-sm">
                                                @for($s = 1; $s <= 5; $s++)
                                                    @if($s <= $testimonial->rating)
                                                        <i class="ri-star-fill"></i>
                                                    @else
                                                        <i class="ri-star-line text-slate-300"></i>
                                                    @endif
                                                @endfor
                                            </div>

                                            <!-- Quote Content -->
                                            <p class="text-slate-700 text-xs sm:text-sm font-normal leading-relaxed italic">
                                                "{{ $testimonial->content }}"
                                            </p>
                                        </div>

                                        <!-- Client Meta Info -->
                                        <div class="pt-5 border-t border-slate-200/80 mt-6">
                                            <div class="text-sm font-bold text-slate-900">{{ $testimonial->client_name }}</div>
                                            <div class="text-xs text-slate-500 font-normal mt-0.5">
                                                {{ $testimonial->company }} @if($testimonial->designation) • {{ $testimonial->designation }} @endif
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @empty
                        <div class="w-full bg-[#FAF9F5] rounded-md p-8 text-center text-slate-500 text-sm">
                            No testimonials published yet.
                        </div>
                    @endforelse

                </div>
            </div>

            <!-- Slider Pagination Dots -->
            @if(count($testimonialGroups) > 1)
                <div class="flex items-center justify-center gap-2 mt-8">
                    <template x-for="(slide, index) in totalSlides" :key="index">
                        <button @click="activeSlide = index" 
                                :class="activeSlide === index ? 'w-8 bg-[#FF8B02]' : 'w-2.5 bg-slate-300 hover:bg-slate-400'"
                                class="h-2.5 rounded-md transition-all duration-300 focus:outline-none cursor-pointer"></button>
                    </template>
                </div>
            @endif

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
                        The presentation describes a structure lifespan of up to 50 years. Project life depends on the design, materials, installation, and maintenance.
                    </div>
                </div>

                <div class="border border-slate-200/80 rounded-2xl overflow-hidden bg-white shadow-xs transition-all reveal-on-scroll delay-200">
                    <button @click="openFaq = (openFaq === 1 ? null : 1)" 
                            class="w-full px-7 py-5 text-left font-bold text-slate-900 flex justify-between items-center gap-4 hover:text-[#FF8B02] transition-colors text-sm sm:text-base">
                        <span>How fast can a site office cabin or labour camp be delivered and installed?</span>
                        <i class="ri-add-line text-xl text-[#FF8B02] shrink-0 transition-transform duration-300" :class="{ 'rotate-45': openFaq === 1 }"></i>
                    </button>
                    <div x-show="openFaq === 1" x-cloak x-collapse class="px-7 pb-6 text-xs sm:text-sm text-slate-600 leading-relaxed font-normal border-t border-slate-100">
                        Off-site panel fabrication can reduce installation timelines by up to 60% compared with traditional civil construction. Project schedules depend on the design and scope.
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
                                <div class="text-xs text-slate-500 font-medium">Contact Numbers</div>
                                <a href="tel:{{ setting('phone', '+91 98995 52380') }}" class="text-lg font-bold text-slate-900 hover:text-[#FF8B02] transition-colors">{{ setting('phone', '+91 98995 52380') }}</a>
                                <a href="tel:{{ setting('secondary_phone', '+91 70650 13555') }}" class="block text-sm font-semibold text-slate-700 hover:text-[#FF8B02] transition-colors">{{ setting('secondary_phone', '+91 70650 13555') }}</a>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-[#FAF9F5] border border-slate-200/80">
                            <div class="w-10 h-10 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center shrink-0">
                                <i class="ri-map-pin-2-fill text-lg"></i>
                            </div>
                            <div>
                                <div class="text-xs text-slate-500 font-medium">Head Office</div>
                                <div class="text-sm font-bold text-slate-900 mt-0.5">{{ setting('address', 'N-3/A-3, Dilshad Garden, Delhi - 110095') }}</div>
                                <div class="text-xs text-slate-500 font-medium mt-3">Branch Office</div>
                                <div class="text-sm font-bold text-slate-900 mt-0.5">{{ setting('branch_address', 'D-15, Sector 3, Noida (U.P.) - 201301') }}</div>
                            </div>
                        </div>

                        <div class="flex items-start gap-4 p-5 rounded-2xl bg-[#FAF9F5] border border-slate-200/80">
                            <div class="w-10 h-10 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center shrink-0">
                                <i class="ri-mail-line text-lg"></i>
                            </div>
                            <div>
                                <div class="text-xs text-slate-500 font-medium">Email</div>
                                <a href="mailto:{{ setting('email', 'shallomprefab@yahoo.com') }}" class="text-sm font-bold text-[#FF8B02] mt-0.5">{{ setting('email', 'shallomprefab@yahoo.com') }}</a>
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
                                        <option value="Modular Villas and Eco Resort Cottages">Modular Villas & Eco Resort Cottages</option>
                                        <option value="Wooden Pine Homes and Rooftop Extensions">Wooden Pine Homes & Rooftop Extensions</option>
                                        <option value="Executive Cabins and Site Offices">Executive Cabins & Site Offices</option>
                                        <option value="Institutional and School Infrastructure">Institutional & School Infrastructure</option>
                                        <option value="Cafeterias, Dining Halls and Sanitary Toll Booths">Cafeterias, Dining Halls & Sanitary Toll Booths</option>
                                        <option value="Acoustic Ceilings, Drywall Partitions and Wall Panelling">Acoustic Ceilings, Drywall Partitions & Wall Panelling</option>
                                        <option value="Industrial Sheds and PEB Warehouses">Industrial Sheds & PEB Warehouses</option>
                                        <option value="Worker Colonies and Labour Camps">Worker Colonies & Labour Camps</option>
                                        <option value="Mobile Sanitation Units">Mobile Sanitation Units</option>
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