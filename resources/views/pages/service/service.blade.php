<div class="py-6 sm:py-10 bg-[#FAF9F5] min-h-screen font-sans text-slate-800"
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
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
        
        <!-- 1. ARCHITECTURAL STUDIO HERO BANNER -->
        <div class="bg-white rounded-2xl p-8 sm:p-12 border border-slate-200/80 shadow-xs flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="space-y-4 max-w-3xl">
                <div class="flex items-center gap-2 text-[#FF8B02]">
                    <i class="ri-briefcase-4-line text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">CORE BUSINESS VERTICALS & SERVICES</span>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    END-TO-END PREFAB <br/>
                    <span class="text-[#FF8B02] font-normal">ENGINEERING & TURNKEY SERVICES</span>
                </h1>
                <p class="text-slate-600 text-sm sm:text-base font-normal leading-relaxed">
                    Shallom Prefab Systems delivers custom pre-engineered solutions across 4 specialized business verticals — from luxury tourism resorts and institutional accommodation to commercial site utilities and high-performance interior contracting.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row md:flex-col gap-3 shrink-0 w-full md:w-auto">
                <a href="tel:+917942550323" 
                   class="inline-flex items-center justify-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-6 py-3 rounded-full shadow-md shadow-orange-500/20 text-xs uppercase tracking-wider transition-all">
                    <i class="ri-phone-fill text-sm"></i>
                    <span>07942550323</span>
                </a>
                <a href="{{ route('products') }}" wire:navigate
                   class="inline-flex items-center justify-center gap-2 border border-slate-300 hover:border-[#FF8B02] hover:text-[#FF8B02] text-slate-700 font-bold px-6 py-3 rounded-full text-xs uppercase tracking-wider transition-all">
                    <span>Explore Our Range</span>
                    <i class="ri-arrow-right-line text-sm"></i>
                </a>
            </div>
        </div>



    <!-- 3. BUSINESS VERTICALS LISTING SECTION -->
    <section id="verticals" class="py-10 sm:py-14 bg-[#FAF9F5] border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            
            <div class="max-w-3xl space-y-4 reveal-on-scroll">
                <div class="flex items-center gap-2 text-[#FF8B02]">
                    <i class="ri-grid-fill text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">OUR CAPABILITIES</span>
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    EXPLORE OUR 4 CORE <br/>
                    <span class="text-[#FF8B02] font-normal">BUSINESS VERTICALS</span>
                </h2>

                <p class="text-slate-600 text-sm sm:text-base font-normal leading-relaxed pt-1">
                    Click on any business vertical to view detailed specifications, architectural capabilities, sub-offerings, and past execution details.
                </p>
            </div>

            <!-- Verticals Cards Grid -->
            <div class="grid grid-cols-1 md:grid-cols-2 gap-10">
                
                @if(count($this->dbServices) > 0)
                    @foreach($this->dbServices as $index => $item)
                        <div class="bg-white rounded-3xl border border-slate-200/80 overflow-hidden shadow-xs hover:shadow-2xl transition-all duration-500 flex flex-col justify-between group reveal-on-scroll">
                            <div>
                                <!-- Card Header Image -->
                                <div class="relative h-64 w-full overflow-hidden bg-slate-900">
                                    @if($item->image)
                                        <img src="{{ Storage::url($item->image) }}" 
                                             alt="{{ $item->name }}" 
                                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                    @else
                                        <img src="{{ asset('shallom/IMG-20260901-WA0033.jpg') }}" 
                                             alt="{{ $item->name }}" 
                                             class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                    @endif
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                                    
                                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-md text-[#FF8B02] px-3.5 py-1.5 rounded-full text-xs font-extrabold shadow-sm flex items-center gap-1.5">
                                        <i class="ri-customer-service-2-line text-base"></i>
                                        <span>SERVICE 0{{ $index + 1 }}</span>
                                    </div>
                                </div>

                                <!-- Card Body -->
                                <div class="p-8 space-y-6">
                                    <div>
                                        <h3 class="text-2xl font-bold text-slate-900 group-hover:text-[#FF8B02] transition-colors">{{ $item->name }}</h3>
                                        <p class="text-xs font-bold text-[#FF8B02] uppercase tracking-wider mt-1">/service/{{ $item->slug }}</p>
                                    </div>

                                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
                                        {{ $item->short_description ?: Str::limit(strip_tags($item->description), 150) }}
                                    </p>

                                    <!-- Key Highlights Checklist -->
                                    <ul class="space-y-2 text-xs text-slate-600 font-medium">
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-emerald-500 text-sm"></i>
                                            <span>Heavy-Duty Insulated Prefab Structural Steel</span>
                                        </li>
                                        <li class="flex items-center gap-2">
                                            <i class="ri-checkbox-circle-fill text-emerald-500 text-sm"></i>
                                            <span>Turnkey Erection & Nationwide Delivery</span>
                                        </li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Card Footer Action -->
                            <div class="p-8 pt-0">
                                <a href="{{ route('service.show', ['slug' => $item->slug]) }}" wire:navigate
                                   class="w-full inline-flex items-center justify-between bg-[#FAF9F5] hover:bg-[#FF8B02] text-slate-800 hover:text-white font-extrabold px-6 py-4 rounded-2xl border border-slate-200/80 hover:border-[#FF8B02] text-xs uppercase tracking-wider transition-all duration-300 group/btn">
                                    <span>View Full Service Scope</span>
                                    <i class="ri-arrow-right-line text-base group-hover/btn:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @else
                    @foreach($verticals as $index => $item)
                        <div class="bg-white rounded-3xl border border-slate-200/80 overflow-hidden shadow-xs hover:shadow-2xl transition-all duration-500 flex flex-col justify-between group reveal-on-scroll">
                            <div>
                                <!-- Card Header Image -->
                                <div class="relative h-64 w-full overflow-hidden bg-slate-900">
                                    <img src="{{ asset($item['image']) }}" 
                                         alt="{{ $item['title'] }}" 
                                         class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-700">
                                    <div class="absolute inset-0 bg-gradient-to-t from-slate-950/80 via-transparent to-transparent"></div>
                                    
                                    <div class="absolute top-4 left-4 bg-white/90 backdrop-blur-md text-[#FF8B02] px-3.5 py-1.5 rounded-full text-xs font-extrabold shadow-sm flex items-center gap-1.5">
                                        <i class="{{ $item['icon'] }} text-base"></i>
                                        <span>VERTICAL 0{{ $index + 1 }}</span>
                                    </div>
                                </div>

                                <!-- Card Body -->
                                <div class="p-8 space-y-6">
                                    <div>
                                        <h3 class="text-2xl font-bold text-slate-900 group-hover:text-[#FF8B02] transition-colors">{{ $item['title'] }}</h3>
                                        <p class="text-xs font-bold text-[#FF8B02] uppercase tracking-wider mt-1">{{ $item['tagline'] }}</p>
                                    </div>

                                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
                                        {{ $item['summary'] }}
                                    </p>

                                    <!-- Sub-Offerings Pills -->
                                    <div class="space-y-2 pt-2 border-t border-slate-100">
                                        <div class="text-[11px] font-bold text-slate-400 uppercase tracking-widest">Key Offerings:</div>
                                        <div class="flex flex-wrap gap-2">
                                            @foreach($item['sub_offerings'] as $sub)
                                                <span class="px-3 py-1 rounded-full bg-[#FAF9F5] border border-slate-200 text-xs font-semibold text-slate-800">
                                                    • {{ $sub }}
                                                </span>
                                            @endforeach
                                        </div>
                                    </div>

                                    <!-- Key Highlights Checklist -->
                                    <ul class="space-y-2 text-xs text-slate-600 font-medium">
                                        @foreach($item['highlights'] as $highlight)
                                            <li class="flex items-center gap-2">
                                                <i class="ri-checkbox-circle-fill text-emerald-500 text-sm"></i>
                                                <span>{{ $highlight }}</span>
                                            </li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>

                            <!-- Card Footer Action -->
                            <div class="p-8 pt-0">
                                <a href="{{ route('service.show', ['slug' => $item['slug']]) }}" wire:navigate
                                   class="w-full inline-flex items-center justify-between bg-[#FAF9F5] hover:bg-[#FF8B02] text-slate-800 hover:text-white font-extrabold px-6 py-4 rounded-2xl border border-slate-200/80 hover:border-[#FF8B02] text-xs uppercase tracking-wider transition-all duration-300 group/btn">
                                    <span>Explore Vertical Specs & Scope</span>
                                    <i class="ri-arrow-right-line text-base group-hover/btn:translate-x-1 transition-transform"></i>
                                </a>
                            </div>
                        </div>
                    @endforeach
                @endif

            </div>

        </div>
    </section>

    <!-- 4. END-TO-END EXECUTION WORKFLOW TIMELINE -->
    <section class="py-10 sm:py-14 bg-white border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-16">
            
            <div class="max-w-3xl space-y-4 reveal-on-scroll">
                <div class="flex items-center gap-2 text-[#FF8B02]">
                    <i class="ri-flow-chart text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">TURNKEY EXECUTION PROCESS</span>
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    FROM DESIGN TO <br/>
                    <span class="text-[#FF8B02] font-normal">ON-SITE ERECTION</span>
                </h2>

                <p class="text-slate-600 text-sm sm:text-base font-normal leading-relaxed pt-1">
                    Shallom Prefab Systems manages every single phase of your modular construction project with strict engineering controls.
                </p>
            </div>

            <!-- Workflow Steps Grid -->
            <div class="grid grid-cols-1 md:grid-cols-5 gap-6">
                
                <div class="bg-[#FAF9F5] p-6 rounded-2xl border border-slate-200/80 space-y-3 relative reveal-on-scroll delay-100">
                    <div class="text-3xl font-extrabold text-[#FF8B02]">01</div>
                    <h4 class="text-base font-bold text-slate-900">CAD & Drafting</h4>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Architectural floorplan layout drafting and structural load calculations tailored to site conditions.
                    </p>
                </div>

                <div class="bg-[#FAF9F5] p-6 rounded-2xl border border-slate-200/80 space-y-3 relative reveal-on-scroll delay-200">
                    <div class="text-3xl font-extrabold text-[#FF8B02]">02</div>
                    <h4 class="text-base font-bold text-slate-900">Factory Roll-Forming</h4>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Precision steel column roll-forming, Aerocon panel cutting, and anti-corrosive primer coating.
                    </p>
                </div>

                <div class="bg-[#FAF9F5] p-6 rounded-2xl border border-slate-200/80 space-y-3 relative reveal-on-scroll delay-300">
                    <div class="text-3xl font-extrabold text-[#FF8B02]">03</div>
                    <h4 class="text-base font-bold text-slate-900">Quality Inspection</h4>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Certified quality controllers test batch tolerance, thermal insulation, and weatherproofing seals.
                    </p>
                </div>

                <div class="bg-[#FAF9F5] p-6 rounded-2xl border border-slate-200/80 space-y-3 relative reveal-on-scroll delay-400">
                    <div class="text-3xl font-extrabold text-[#FF8B02]">04</div>
                    <h4 class="text-base font-bold text-slate-900">Nationwide Transit</h4>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Pre-fabricated demountable components packed safely for direct transit to customer site coordinates.
                    </p>
                </div>

                <div class="bg-[#FAF9F5] p-6 rounded-2xl border border-slate-200/80 space-y-3 relative reveal-on-scroll delay-500">
                    <div class="text-3xl font-extrabold text-emerald-600">05</div>
                    <h4 class="text-base font-bold text-slate-900">On-Site Erection</h4>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Expert field crew performs nut-and-bolt assembly, electrical wiring, plumbing, and turnkey handover.
                    </p>
                </div>

            </div>

        </div>
    </section>

    <!-- 5. CALL TO ACTION BANNER -->
    <section class="py-8 sm:py-12 bg-[#FAF9F5]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-slate-900 text-white rounded-3xl p-8 sm:p-14 shadow-2xl relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-8">
                
                <div class="space-y-4 max-w-2xl relative z-10">
                    <div class="inline-flex items-center gap-2 bg-slate-800 text-[#FF8B02] px-3.5 py-1.5 rounded-full text-xs font-bold border border-slate-700">
                        <i class="ri-building-line text-base"></i>
                        <span>HAVE A CUSTOM STRUCTURAL REQUIREMENT?</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-light tracking-tight leading-[1.18]">
                        Discuss Your Business Vertical Project with <br/>
                        <span class="text-[#FF8B02] font-normal">Our Senior Engineers Today</span>
                    </h2>
                    <p class="text-slate-300 text-sm font-normal leading-relaxed">
                        Get customized architectural layout drawings, BOQ estimation, and turn-key erection timelines across India.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto shrink-0 relative z-10">
                    <a href="tel:+917942550323" 
                       class="inline-flex items-center justify-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-8 py-4 rounded-full shadow-lg shadow-orange-500/20 text-xs uppercase tracking-wider transition-all transform hover:-translate-y-0.5">
                        <i class="ri-phone-fill text-base"></i>
                        <span>Call 07942550323</span>
                    </a>
                    <a href="{{ route('contact') }}" wire:navigate
                       class="inline-flex items-center justify-center gap-2 bg-white text-slate-900 hover:bg-slate-100 font-extrabold px-8 py-4 rounded-full text-xs uppercase tracking-widest transition-all">
                        <span>Send BOQ Request</span>
                        <i class="ri-mail-send-fill text-base"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

</div>