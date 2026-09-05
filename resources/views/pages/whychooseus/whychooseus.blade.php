@section('title', 'Why Choose Us - Engineering Excellence | Shallom Prefab Systems')
@section('meta_description', 'Discover why Shallom Prefab Systems is India\'s trusted choice for prefabricated structures - 70% faster construction, 25+ year lifespan, 100% relocatable nut-bolt design, and Tata Housing approved quality.')

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
                    <i class="ri-shield-check-line text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">ENGINEERED ADVANTAGES & RELIABILITY</span>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    WHY SHALLOM PREFAB IS <br/>
                    <span class="text-[#FF8B02] font-normal">INDIA'S MOST TRUSTED</span>
                </h1>
                <p class="text-slate-600 text-sm sm:text-base font-normal leading-relaxed">
                    Since <strong>2009</strong>, Shallom Prefab Systems has transformed traditional civil construction into rapid, high-precision pre-engineered modular structures. With <strong>70% faster turnaround times</strong>, <strong>25+ years structural lifespan</strong>, and <strong>100% relocatable nut-and-bolt designs</strong>, we deliver unmatched quality across India.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row md:flex-col gap-3 shrink-0 w-full md:w-auto">
                <a href="tel:{{ setting('landline', '07942550323') }}" 
                   class="inline-flex items-center justify-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-6 py-3 rounded-full shadow-md shadow-orange-500/20 text-xs uppercase tracking-wider transition-all">
                    <i class="ri-phone-fill text-sm"></i>
                    <span>{{ setting('landline', '07942550323') }}</span>
                </a>
                <a href="{{ route('products') }}" 
                   class="inline-flex items-center justify-center gap-2 border border-slate-300 hover:border-[#FF8B02] hover:text-[#FF8B02] text-slate-700 font-bold px-6 py-3 rounded-full text-xs uppercase tracking-wider transition-all">
                    <span>Explore Our Range</span>
                    <i class="ri-arrow-right-line text-sm"></i>
                </a>
            </div>
        </div>



    <!-- 3. CORE ADVANTAGES (6-PILLAR GRID) -->
    <section class="py-10 sm:py-14 bg-[#FAF9F5] border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="max-w-3xl mb-12 space-y-4 reveal-on-scroll">
                <div class="flex items-center gap-2 text-[#FF8B02]">
                    <i class="ri-ruler-2-line text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">6 PILLARS OF EXCELLENCE</span>
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    PRECISION ENGINEERING & <br/>
                    <span class="text-[#FF8B02] font-normal">UNMATCHED BENCHMARKS</span>
                </h2>

                <p class="text-slate-600 text-sm sm:text-base font-normal leading-relaxed pt-1">
                    Every modular unit manufactured by Shallom Prefab Systems undergoes rigorous structural design validation, thermal testing, and quality inspections.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                
                <!-- Pillar 1 -->
                <div class="bg-white border border-slate-200/80 p-8 rounded-2xl hover:border-[#FF8B02] shadow-xs hover:shadow-xl transition-all duration-500 space-y-4 group reveal-on-scroll delay-100">
                    <div class="w-14 h-14 rounded-2xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="ri-flashlight-fill text-2xl"></i>
                    </div>
                    <div class="text-[11px] font-bold text-[#FF8B02] uppercase tracking-widest">01 • SPEED & EFFICIENCY</div>
                    <h3 class="text-xl font-bold text-slate-900">70% Rapid Construction</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
                        Pre-fabricated off-site structural members mean your site offices, cottages, or labor camps are erected in days instead of long months of site disruptions.
                    </p>
                </div>

                <!-- Pillar 2 -->
                <div class="bg-white border border-slate-200/80 p-8 rounded-2xl hover:border-[#FF8B02] shadow-xs hover:shadow-xl transition-all duration-500 space-y-4 group reveal-on-scroll delay-200">
                    <div class="w-14 h-14 rounded-2xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="ri-temp-cold-fill text-2xl"></i>
                    </div>
                    <div class="text-[11px] font-bold text-[#FF8B02] uppercase tracking-widest">02 • ENERGY INSULATION</div>
                    <h3 class="text-xl font-bold text-slate-900">Thermal & Acoustic Insulation</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
                        High-density PUF/EPS sandwich core panels and Aerocon walling deliver high thermal resistance (R-value), cutting HVAC energy bills by up to 40%.
                    </p>
                </div>

                <!-- Pillar 3 -->
                <div class="bg-white border border-slate-200/80 p-8 rounded-2xl hover:border-[#FF8B02] shadow-xs hover:shadow-xl transition-all duration-500 space-y-4 group reveal-on-scroll delay-300">
                    <div class="w-14 h-14 rounded-2xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="ri-drag-drop-fill text-2xl"></i>
                    </div>
                    <div class="text-[11px] font-bold text-[#FF8B02] uppercase tracking-widest">03 • FLEXIBILITY</div>
                    <h3 class="text-xl font-bold text-slate-900">100% Relocatable Nut & Bolt</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
                        Demountable structural design ensures your building can be completely dismantled, transported, and re-erected at a new site coordinate without structural loss.
                    </p>
                </div>

                <!-- Pillar 4 -->
                <div class="bg-white border border-slate-200/80 p-8 rounded-2xl hover:border-[#FF8B02] shadow-xs hover:shadow-xl transition-all duration-500 space-y-4 group reveal-on-scroll delay-100">
                    <div class="w-14 h-14 rounded-2xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="ri-shield-flash-fill text-2xl"></i>
                    </div>
                    <div class="text-[11px] font-bold text-[#FF8B02] uppercase tracking-widest">04 • WEATHER ENDURANCE</div>
                    <h3 class="text-xl font-bold text-slate-900">High Wind & Seismic Proof</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
                        Heavy galvanized MS steel frameworks engineered to withstand high wind velocity, heavy torrential rainfall, and severe seismic earthquake zones.
                    </p>
                </div>

                <!-- Pillar 5 -->
                <div class="bg-white border border-slate-200/80 p-8 rounded-2xl hover:border-[#FF8B02] shadow-xs hover:shadow-xl transition-all duration-500 space-y-4 group reveal-on-scroll delay-200">
                    <div class="w-14 h-14 rounded-2xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="ri-leaf-fill text-2xl"></i>
                    </div>
                    <div class="text-[11px] font-bold text-[#FF8B02] uppercase tracking-widest">05 • SUSTAINABILITY</div>
                    <h3 class="text-xl font-bold text-slate-900">Eco-Friendly & Zero Site Waste</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
                        Zero wet construction site pollution, 100% recyclable structural steel, and minimal foundation footprint protect the natural environment.
                    </p>
                </div>

                <!-- Pillar 6 -->
                <div class="bg-white border border-slate-200/80 p-8 rounded-2xl hover:border-[#FF8B02] shadow-xs hover:shadow-xl transition-all duration-500 space-y-4 group reveal-on-scroll delay-300">
                    <div class="w-14 h-14 rounded-2xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center group-hover:scale-110 transition-transform">
                        <i class="ri-tools-fill text-2xl"></i>
                    </div>
                    <div class="text-[11px] font-bold text-[#FF8B02] uppercase tracking-widest">06 • TURNKEY SERVICES</div>
                    <h3 class="text-xl font-bold text-slate-900">Turnkey Erection & Support</h3>
                    <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
                        From custom CAD layout drawings to factory fabrication, nationwide logistics, and complete on-site assembly with electrical & plumbing coordinates.
                    </p>
                </div>

            </div>
        </div>
    </section>

    <!-- 4. COMPARATIVE ANALYSIS MATRIX: PREFAB VS TRADITIONAL MASONRY -->
    <section class="py-10 sm:py-14 bg-white border-b border-slate-200/80">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="max-w-3xl mb-12 space-y-4 reveal-on-scroll">
                <div class="flex items-center gap-2 text-[#FF8B02]">
                    <i class="ri-scales-3-line text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">COMPARATIVE ANALYSIS</span>
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    SHALLOM PREFAB VS <br/>
                    <span class="text-[#FF8B02] font-normal">TRADITIONAL CIVIL MASONRY</span>
                </h2>

                <p class="text-slate-600 text-sm sm:text-base font-normal leading-relaxed pt-1">
                    Compare technical specifications, structural lifespans, and operational costs side by side.
                </p>
            </div>

            <!-- Comparison Table Component -->
            <div class="bg-[#FAF9F5] rounded-3xl border border-slate-200/80 overflow-hidden shadow-sm reveal-on-scroll">
                <div class="overflow-x-auto">
                    <table class="w-full text-left border-collapse min-w-[640px]">
                        <thead>
                            <tr class="bg-slate-900 text-white border-b border-slate-800">
                                <th class="py-5 px-6 font-bold text-sm tracking-wider uppercase w-1/3">Engineering Parameter</th>
                                <th class="py-5 px-6 font-extrabold text-sm text-[#FF8B02] tracking-wider uppercase w-1/3 bg-slate-800/80">
                                    <div class="flex items-center gap-2">
                                        <i class="ri-shield-check-fill text-[#FF8B02] text-lg"></i>
                                        <span>Shallom Prefab Modular</span>
                                    </div>
                                </th>
                                <th class="py-5 px-6 font-bold text-sm text-slate-400 tracking-wider uppercase w-1/3">Traditional Civil Masonry</th>
                            </tr>
                        </thead>
                        <tbody class="divide-y divide-slate-200/80 text-xs sm:text-sm font-medium">
                            <!-- Row 1 -->
                            <tr class="hover:bg-white/80 transition-colors">
                                <td class="py-4.5 px-6 text-slate-900 font-bold flex items-center gap-2">
                                    <i class="ri-time-line text-[#FF8B02] text-base"></i> Build Completion Time
                                </td>
                                <td class="py-4.5 px-6 bg-[#FFF4E5]/50 text-slate-900 font-bold border-x border-slate-200/80">
                                    <span class="text-emerald-700 font-extrabold">✓ 5 to 15 Days</span> (Pre-engineered off-site)
                                </td>
                                <td class="py-4.5 px-6 text-slate-600">
                                    <span class="text-rose-600 font-bold">✗ 4 to 9 Months</span> (Weather & labor delayed)
                                </td>
                            </tr>

                            <!-- Row 2 -->
                            <tr class="hover:bg-white/80 transition-colors">
                                <td class="py-4.5 px-6 text-slate-900 font-bold flex items-center gap-2">
                                    <i class="ri-truck-line text-[#FF8B02] text-base"></i> Relocability & Mobility
                                </td>
                                <td class="py-4.5 px-6 bg-[#FFF4E5]/50 text-slate-900 font-bold border-x border-slate-200/80">
                                    <span class="text-emerald-700 font-extrabold">✓ 100% Demountable</span> (Nut & bolt design)
                                </td>
                                <td class="py-4.5 px-6 text-slate-600">
                                    <span class="text-rose-600 font-bold">✗ Zero Mobility</span> (Permanent demolition required)
                                </td>
                            </tr>

                            <!-- Row 3 -->
                            <tr class="hover:bg-white/80 transition-colors">
                                <td class="py-4.5 px-6 text-slate-900 font-bold flex items-center gap-2">
                                    <i class="ri-temp-cold-line text-[#FF8B02] text-base"></i> Thermal & Energy Efficiency
                                </td>
                                <td class="py-4.5 px-6 bg-[#FFF4E5]/50 text-slate-900 font-bold border-x border-slate-200/80">
                                    <span class="text-emerald-700 font-extrabold">✓ Insulated Core</span> (Saves 40% HVAC power)
                                </td>
                                <td class="py-4.5 px-6 text-slate-600">
                                    <span class="text-rose-600 font-bold">✗ High Heat Conduction</span> (Needs heavy AC)
                                </td>
                            </tr>

                            <!-- Row 4 -->
                            <tr class="hover:bg-white/80 transition-colors">
                                <td class="py-4.5 px-6 text-slate-900 font-bold flex items-center gap-2">
                                    <i class="ri-delete-bin-line text-[#FF8B02] text-base"></i> Site Waste & Environment
                                </td>
                                <td class="py-4.5 px-6 bg-[#FFF4E5]/50 text-slate-900 font-bold border-x border-slate-200/80">
                                    <span class="text-emerald-700 font-extrabold">✓ Zero Site Dust</span> & 100% Recyclable Steel
                                </td>
                                <td class="py-4.5 px-6 text-slate-600">
                                    <span class="text-rose-600 font-bold">✗ Heavy Slurry & Debris</span> Pollution
                                </td>
                            </tr>

                            <!-- Row 5 -->
                            <tr class="hover:bg-white/80 transition-colors">
                                <td class="py-4.5 px-6 text-slate-900 font-bold flex items-center gap-2">
                                    <i class="ri-shield-flash-line text-[#FF8B02] text-base"></i> Seismic & Wind Resistance
                                </td>
                                <td class="py-4.5 px-6 bg-[#FFF4E5]/50 text-slate-900 font-bold border-x border-slate-200/80">
                                    <span class="text-emerald-700 font-extrabold">✓ High Ductility Steel</span> (Earthquake safe)
                                </td>
                                <td class="py-4.5 px-6 text-slate-600">
                                    <span class="text-rose-600 font-bold">✗ Rigid Concrete Cracks</span> Under stress
                                </td>
                            </tr>

                            <!-- Row 6 -->
                            <tr class="hover:bg-white/80 transition-colors">
                                <td class="py-4.5 px-6 text-slate-900 font-bold flex items-center gap-2">
                                    <i class="ri-coins-line text-[#FF8B02] text-base"></i> Foundation Structural Stress
                                </td>
                                <td class="py-4.5 px-6 bg-[#FFF4E5]/50 text-slate-900 font-bold border-x border-slate-200/80">
                                    <span class="text-emerald-700 font-extrabold">✓ Lightweight Dead-Load</span> (Rooftop safe)
                                </td>
                                <td class="py-4.5 px-6 text-slate-600">
                                    <span class="text-rose-600 font-bold">✗ Heavy Dead Weight</span> (Requires deep piling)
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>

        </div>
    </section>

    <!-- 5. INTERACTIVE PERFORMANCE CALCULATOR / VALUE TABS -->
    <section class="py-10 sm:py-14 bg-[#FAF9F5] border-b border-slate-200/80"
             x-data="{ activeTab: 'speed' }">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="max-w-3xl mb-12 space-y-4 reveal-on-scroll">
                <div class="flex items-center gap-2 text-[#FF8B02]">
                    <i class="ri-cpu-line text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">TECHNICAL DEEP-DIVE</span>
                </div>

                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    EXPLORE OUR VALUE <br/>
                    <span class="text-[#FF8B02] font-normal">ENGINEERING ADVANTAGES</span>
                </h2>
            </div>

            <!-- Tab Buttons -->
            <div class="flex flex-wrap items-center gap-3 mb-10 border-b border-slate-200 pb-4">
                <button @click="activeTab = 'speed'" 
                        :class="activeTab === 'speed' ? 'bg-[#FF8B02] text-white shadow-md' : 'bg-white text-slate-700 border border-slate-200 hover:border-[#FF8B02]'"
                        class="px-6 py-3 rounded-full font-bold text-xs uppercase tracking-wider transition-all flex items-center gap-2">
                    <i class="ri-flashlight-line"></i> Rapid Deployment
                </button>
                <button @click="activeTab = 'thermal'" 
                        :class="activeTab === 'thermal' ? 'bg-[#FF8B02] text-white shadow-md' : 'bg-white text-slate-700 border border-slate-200 hover:border-[#FF8B02]'"
                        class="px-6 py-3 rounded-full font-bold text-xs uppercase tracking-wider transition-all flex items-center gap-2">
                    <i class="ri-temp-cold-line"></i> Insulation & HVAC
                </button>
                <button @click="activeTab = 'relocation'" 
                        :class="activeTab === 'relocation' ? 'bg-[#FF8B02] text-white shadow-md' : 'bg-white text-slate-700 border border-slate-200 hover:border-[#FF8B02]'"
                        class="px-6 py-3 rounded-full font-bold text-xs uppercase tracking-wider transition-all flex items-center gap-2">
                    <i class="ri-drag-drop-line"></i> Demountable Mobility
                </button>
                <button @click="activeTab = 'custom'" 
                        :class="activeTab === 'custom' ? 'bg-[#FF8B02] text-white shadow-md' : 'bg-white text-slate-700 border border-slate-200 hover:border-[#FF8B02]'"
                        class="px-6 py-3 rounded-full font-bold text-xs uppercase tracking-wider transition-all flex items-center gap-2">
                    <i class="ri-equalizer-line"></i> Customization Scope
                </button>
            </div>

            <!-- Tab Content 1: Rapid Deployment -->
            <div x-show="activeTab === 'speed'" x-cloak x-transition.opacity.duration.300ms class="bg-white rounded-3xl p-8 sm:p-12 border border-slate-200/80 shadow-xs grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7 space-y-5">
                    <span class="text-xs font-bold text-[#FF8B02] uppercase tracking-widest">TURNKEY TIMELINE</span>
                    <h3 class="text-2xl sm:text-3xl font-bold text-slate-900">Site-Ready Execution in Days, Not Months</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Off-site roll-forming and pre-drilled precision framing allow modular units to be assembled directly on site. This eliminates curing waiting times, weather delays, and site disruption.
                    </p>
                    <ul class="space-y-2.5 text-xs sm:text-sm text-slate-700 font-medium pt-2">
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#FF8B02] text-base"></i> Factory precision cutting eliminates on-site rework.</li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#FF8B02] text-base"></i> Parallel foundation work and modular panel production.</li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#FF8B02] text-base"></i> Immediate occupancy upon bolt assembly completion.</li>
                    </ul>
                </div>
                <div class="lg:col-span-5 bg-[#FAF9F5] p-6 rounded-2xl border border-slate-200 space-y-4">
                    <div class="text-xs font-bold text-slate-500 uppercase">Average Build Speed Benchmark</div>
                    <div class="space-y-3">
                        <div>
                            <div class="flex justify-between text-xs font-bold mb-1">
                                <span>Shallom Prefab Site Office</span>
                                <span class="text-[#FF8B02]">5 Days</span>
                            </div>
                            <div class="w-full bg-slate-200 h-3 rounded-full overflow-hidden">
                                <div class="bg-[#FF8B02] h-full w-[20%] rounded-full"></div>
                            </div>
                        </div>
                        <div>
                            <div class="flex justify-between text-xs font-bold mb-1">
                                <span>Civil Brick & Mortar Office</span>
                                <span class="text-slate-400">120 Days</span>
                            </div>
                            <div class="w-full bg-slate-200 h-3 rounded-full overflow-hidden">
                                <div class="bg-slate-400 h-full w-[100%] rounded-full"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Tab Content 2: Insulation & HVAC -->
            <div x-show="activeTab === 'thermal'" x-cloak x-transition.opacity.duration.300ms class="bg-white rounded-3xl p-8 sm:p-12 border border-slate-200/80 shadow-xs grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7 space-y-5">
                    <span class="text-xs font-bold text-[#FF8B02] uppercase tracking-widest">THERMAL & ACOUSTIC BARRIER</span>
                    <h3 class="text-2xl sm:text-3xl font-bold text-slate-900">Cut Air Conditioning & Heating Bills up to 40%</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Our sandwich panels (PUF/EPS) and Aerocon wall panels feature low thermal conductivity, keeping interior ambient temperatures comfortable even during extreme Indian summers and winters.
                    </p>
                    <ul class="space-y-2.5 text-xs sm:text-sm text-slate-700 font-medium pt-2">
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#FF8B02] text-base"></i> R-Value thermal insulation performance.</li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#FF8B02] text-base"></i> Acoustic noise damping for quiet executive site offices.</li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#FF8B02] text-base"></i> Moisture barrier preventing dampness & fungal growth.</li>
                    </ul>
                </div>
                <div class="lg:col-span-5 bg-[#FAF9F5] p-6 rounded-2xl border border-slate-200 space-y-4">
                    <div class="text-xs font-bold text-slate-500 uppercase">Thermal Insulation Comparison</div>
                    <div class="p-4 bg-white rounded-xl border border-slate-200 space-y-2">
                        <div class="text-2xl font-extrabold text-[#FF8B02]">40% Savings</div>
                        <div class="text-xs text-slate-600 font-medium">Reduction in monthly HVAC electrical energy consumption compared to standard brick structures.</div>
                    </div>
                </div>
            </div>

            <!-- Tab Content 3: Demountable Mobility -->
            <div x-show="activeTab === 'relocation'" x-cloak x-transition.opacity.duration.300ms class="bg-white rounded-3xl p-8 sm:p-12 border border-slate-200/80 shadow-xs grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7 space-y-5">
                    <span class="text-xs font-bold text-[#FF8B02] uppercase tracking-widest">ASSET PRESERVATION</span>
                    <h3 class="text-2xl sm:text-3xl font-bold text-slate-900">Demount, Transport & Re-Erect Anywhere</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Infrastructure projects move, and so can your buildings! Shallom pre-engineered structures use demountable nut-and-bolt connections, allowing 100% asset recovery and relocation.
                    </p>
                    <ul class="space-y-2.5 text-xs sm:text-sm text-slate-700 font-medium pt-2">
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#FF8B02] text-base"></i> Heavy galvanized framing prevents rusting during transport.</li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#FF8B02] text-base"></i> Modular expansion: easily add extra rooms or stories later.</li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#FF8B02] text-base"></i> Re-usable structural members protect capital investment.</li>
                    </ul>
                </div>
                <div class="lg:col-span-5 bg-[#FAF9F5] p-6 rounded-2xl border border-slate-200 space-y-4">
                    <div class="text-xs font-bold text-slate-500 uppercase">Mobility Advantage</div>
                    <div class="p-4 bg-white rounded-xl border border-slate-200 space-y-2">
                        <div class="text-2xl font-extrabold text-emerald-600">100% Asset Value</div>
                        <div class="text-xs text-slate-600 font-medium">Re-erect structural modules at new construction sites without write-off losses.</div>
                    </div>
                </div>
            </div>

            <!-- Tab Content 4: Customization Scope -->
            <div x-show="activeTab === 'custom'" x-cloak x-transition.opacity.duration.300ms class="bg-white rounded-3xl p-8 sm:p-12 border border-slate-200/80 shadow-xs grid grid-cols-1 lg:grid-cols-12 gap-8 items-center">
                <div class="lg:col-span-7 space-y-5">
                    <span class="text-xs font-bold text-[#FF8B02] uppercase tracking-widest">ARCHITECTURAL FREEDOM</span>
                    <h3 class="text-2xl sm:text-3xl font-bold text-slate-900">Tailored CAD Layouts, Interior Ceilings & Finishes</h3>
                    <p class="text-slate-600 text-sm leading-relaxed">
                        Whether you need executive glass-partitioned office cabins, luxury wooden-finish prefab cottages, or multi-booth labor hutments, we customize every dimension.
                    </p>
                    <ul class="space-y-2.5 text-xs sm:text-sm text-slate-700 font-medium pt-2">
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#FF8B02] text-base"></i> Concealed electrical wiring & UPVC sliding windows.</li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#FF8B02] text-base"></i> Heavy vinyl flooring & designer false ceiling options.</li>
                        <li class="flex items-center gap-2"><i class="ri-checkbox-circle-fill text-[#FF8B02] text-base"></i> Attached modular toilets & sanitary plumbing fixtures.</li>
                    </ul>
                </div>
                <div class="lg:col-span-5 rounded-2xl overflow-hidden border border-slate-200 shadow-md">
                    <img src="{{ asset('shallom/IMG-20260901-WA0056.jpg') }}" alt="Shallom Prefab Engineering Excellence" class="w-full h-64 object-cover">
                </div>
            </div>

        </div>
    </section>

    <!-- 6. KEY STATS & PROOF MILESTONES -->
    <section class="py-10 sm:py-14 bg-slate-900 text-white relative">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 lg:grid-cols-4 gap-8 text-center divide-x-0 sm:divide-x divide-slate-800">
                
                <div class="space-y-2 p-4">
                    <div class="text-4xl sm:text-5xl font-extrabold text-[#FF8B02]">2009</div>
                    <div class="text-xs sm:text-sm font-bold text-slate-300 uppercase tracking-wider">Established Year</div>
                    <p class="text-[11px] text-slate-400 font-normal">Over 15+ years of prefab leadership in India.</p>
                </div>

                <div class="space-y-2 p-4">
                    <div class="text-4xl sm:text-5xl font-extrabold text-white">1000+</div>
                    <div class="text-xs sm:text-sm font-bold text-slate-300 uppercase tracking-wider">Projects Completed</div>
                    <p class="text-[11px] text-slate-400 font-normal">Delivered to L&T, Tata Housing & top developers.</p>
                </div>

                <div class="space-y-2 p-4">
                    <div class="text-4xl sm:text-5xl font-extrabold text-[#FF8B02]">25+ Yrs</div>
                    <div class="text-xs sm:text-sm font-bold text-slate-300 uppercase tracking-wider">Structural Lifespan</div>
                    <p class="text-[11px] text-slate-400 font-normal">Galvanized anti-corrosive structural framing.</p>
                </div>

                <div class="space-y-2 p-4">
                    <div class="text-4xl sm:text-5xl font-extrabold text-emerald-400">70%</div>
                    <div class="text-xs sm:text-sm font-bold text-slate-300 uppercase tracking-wider">Faster Build Time</div>
                    <p class="text-[11px] text-slate-400 font-normal">Off-site factory manufacturing precision.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- 7. FREQUENTLY ASKED QUESTIONS (ACCORDION) -->
    <section class="py-10 sm:py-14 bg-white border-b border-slate-200/80"
             x-data="{ openFaq: 0 }">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="text-center mb-12 reveal-on-scroll space-y-4">
                <div class="inline-flex items-center gap-2 text-[#FF8B02]">
                    <i class="ri-questionnaire-line text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">KNOWLEDGE BASE</span>
                </div>
                <h2 class="text-3xl sm:text-4xl lg:text-5xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    FREQUENTLY ASKED <br/>
                    <span class="text-[#FF8B02] font-normal">QUESTIONS</span>
                </h2>
            </div>

            <div class="space-y-4">
                
                <!-- FAQ 1 -->
                <div class="border border-slate-200/80 rounded-2xl overflow-hidden bg-[#FAF9F5] transition-all">
                    <button @click="openFaq = (openFaq === 0 ? -1 : 0)" 
                            class="w-full p-6 text-left font-bold text-slate-900 flex items-center justify-between text-base sm:text-lg focus:outline-none">
                        <span>How fast can Shallom erect a 5,000 sq. ft. prefabricated site office?</span>
                        <i :class="openFaq === 0 ? 'ri-subtract-line text-[#FF8B02]' : 'ri-add-line text-slate-400'" class="text-2xl shrink-0"></i>
                    </button>
                    <div x-show="openFaq === 0" x-cloak x-collapse class="px-6 pb-6 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-200/60 pt-4">
                        A typical 5,000 sq. ft. modular site office complex is fabricated off-site in 4-6 days and completely erected on customer site coordinates within 3 to 5 days, including electrical wiring, window installations, and internal partitions.
                    </div>
                </div>

                <!-- FAQ 2 -->
                <div class="border border-slate-200/80 rounded-2xl overflow-hidden bg-[#FAF9F5] transition-all">
                    <button @click="openFaq = (openFaq === 1 ? -1 : 1)" 
                            class="w-full p-6 text-left font-bold text-slate-900 flex items-center justify-between text-base sm:text-lg focus:outline-none">
                        <span>Can prefabricated buildings be dismantled and moved to another project site?</span>
                        <i :class="openFaq === 1 ? 'ri-subtract-line text-[#FF8B02]' : 'ri-add-line text-slate-400'" class="text-2xl shrink-0"></i>
                    </button>
                    <div x-show="openFaq === 1" x-cloak x-collapse class="px-6 pb-6 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-200/60 pt-4">
                        Yes! All Shallom prefabricated structures utilize demountable nut-and-bolt framing. Once your project concludes, the entire structure can be unbolted, transported on standard trucks, and re-erected at a new site with 100% structural integrity intact.
                    </div>
                </div>

                <!-- FAQ 3 -->
                <div class="border border-slate-200/80 rounded-2xl overflow-hidden bg-[#FAF9F5] transition-all">
                    <button @click="openFaq = (openFaq === 2 ? -1 : 2)" 
                            class="w-full p-6 text-left font-bold text-slate-900 flex items-center justify-between text-base sm:text-lg focus:outline-none">
                        <span>What is the expected structural lifespan of Shallom prefab houses?</span>
                        <i :class="openFaq === 2 ? 'ri-subtract-line text-[#FF8B02]' : 'ri-add-line text-slate-400'" class="text-2xl shrink-0"></i>
                    </button>
                    <div x-show="openFaq === 2" x-cloak x-collapse class="px-6 pb-6 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-200/60 pt-4">
                        Our prefabricated structures carry a design lifespan of 25+ years. Heavy anti-corrosive galvanized steel framing combined with weather-sealed Aerocon/PUF panels protects against monsoon rain, extreme heat, and rust.
                    </div>
                </div>

                <!-- FAQ 4 -->
                <div class="border border-slate-200/80 rounded-2xl overflow-hidden bg-[#FAF9F5] transition-all">
                    <button @click="openFaq = (openFaq === 3 ? -1 : 3)" 
                            class="w-full p-6 text-left font-bold text-slate-900 flex items-center justify-between text-base sm:text-lg focus:outline-none">
                        <span>Do you provide customized dimensions and turnkey interior fittings?</span>
                        <i :class="openFaq === 3 ? 'ri-subtract-line text-[#FF8B02]' : 'ri-add-line text-slate-400'" class="text-2xl shrink-0"></i>
                    </button>
                    <div x-show="openFaq === 3" x-cloak x-collapse class="px-6 pb-6 text-xs sm:text-sm text-slate-600 leading-relaxed border-t border-slate-200/60 pt-4">
                        Absolutely. We engineer custom dimensions according to client architectural drawings. We provide complete turnkey options including vinyl flooring, false ceilings, UPVC windows, concealed electrical points, and attached modular toilets.
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- 8. HIGH-CONVERSION BOTTOM CALL TO ACTION BANNER -->
    <section class="py-8 sm:py-12 bg-[#FAF9F5]">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="bg-slate-900 text-white rounded-3xl p-8 sm:p-14 shadow-2xl relative overflow-hidden flex flex-col md:flex-row items-center justify-between gap-8">
                
                <div class="space-y-4 max-w-2xl relative z-10">
                    <div class="inline-flex items-center gap-2 bg-slate-800 text-[#FF8B02] px-3.5 py-1.5 rounded-full text-xs font-bold border border-slate-700">
                        <i class="ri-customer-service-2-fill text-base"></i>
                        <span>DIRECT PREFAB ENGINEERING CONSULTATION</span>
                    </div>
                    <h2 class="text-3xl sm:text-4xl font-light tracking-tight leading-[1.18]">
                        Ready to Build Faster with <br/>
                        <span class="text-[#FF8B02] font-normal">Shallom Prefab Systems?</span>
                    </h2>
                    <p class="text-slate-300 text-sm font-normal leading-relaxed">
                        Contact our engineering desk today for custom architectural layout drawings, instant BOQ cost estimation, and nationwide project erection timelines.
                    </p>
                </div>

                <div class="flex flex-col sm:flex-row gap-4 w-full md:w-auto shrink-0 relative z-10">
                    <a href="tel:{{ setting('landline', '07942550323') }}" 
                       class="inline-flex items-center justify-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-8 py-4 rounded-full shadow-lg shadow-orange-500/20 text-xs uppercase tracking-wider transition-all transform hover:-translate-y-0.5">
                        <i class="ri-phone-fill text-base"></i>
                        <span>Call {{ setting('landline', '07942550323') }}</span>
                    </a>
                    <a href="{{ route('contact') }}" 
                       class="inline-flex items-center justify-center gap-2 bg-white text-slate-900 hover:bg-slate-100 font-extrabold px-8 py-4 rounded-full text-xs uppercase tracking-widest transition-all">
                        <span>Send Project Enquiry</span>
                        <i class="ri-mail-send-fill text-base"></i>
                    </a>
                </div>

            </div>
        </div>
    </section>

</div>