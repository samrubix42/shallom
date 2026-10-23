@section('title', 'Company Profile & About Us | Shallom Prefab Systems')
@section('meta_description', 'Learn about Shallom Prefab Systems, established in 2017, and its modular prefab building solutions, materials, capacity, and offices.')

<div class="py-6 sm:py-10 bg-[#FAF9F5] min-h-screen font-sans text-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
        
        <!-- 1. ARCHITECTURAL STUDIO HERO BANNER -->
        <div class="bg-white rounded-2xl p-8 sm:p-12 border border-slate-200/80 shadow-xs flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="space-y-4 max-w-3xl">
                <div class="flex items-center gap-2 text-[#FF8B02]">
                    <i class="ri-building-2-line text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">COMPANY PROFILE & CORPORATE OVERVIEW</span>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    {{ strtoupper(setting('company_name', 'SHALLOM PREFAB SYSTEMS')) }} & <br/>
                    <span class="text-[#FF8B02] font-normal">CORPORATE PROFILE</span>
                </h1>
                <p class="text-slate-600 text-sm sm:text-base font-normal leading-relaxed">
                    Established in <strong>{{ setting('established_year', '2017') }}</strong>, {{ setting('company_name', 'Shallom Prefab Systems') }} designs and delivers modular prefab buildings and turnkey construction solutions under the leadership of Proprietor <strong>{{ setting('proprietor', 'Mr. Arvind Kumar') }}</strong>.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row md:flex-col gap-3 shrink-0 w-full md:w-auto">
                <a href="tel:{{ setting('phone', '+91 98995 52380') }}"
                   class="inline-flex items-center justify-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-6 py-3 rounded-full shadow-md shadow-orange-500/20 text-xs uppercase tracking-wider transition-all">
                    <i class="ri-phone-fill text-sm"></i>
                    <span>{{ setting('phone', '+91 98995 52380') }}</span>
                </a>
                <a href="{{ route('products') }}" wire:navigate
                   class="inline-flex items-center justify-center gap-2 border border-slate-300 hover:border-[#FF8B02] hover:text-[#FF8B02] text-slate-700 font-bold px-6 py-3 rounded-full text-xs uppercase tracking-wider transition-all">
                    <span>Explore Our Range</span>
                    <i class="ri-arrow-right-line text-sm"></i>
                </a>
            </div>
        </div>

        <section class="grid grid-cols-2 gap-4 sm:grid-cols-4">
            <article class="rounded-xl border border-slate-200/80 bg-white p-5 shadow-xs">
                <p class="text-3xl font-extrabold text-slate-900">15+</p>
                <p class="mt-1 text-xs font-bold uppercase tracking-wider text-[#FF8B02]">Years Track Record</p>
            </article>
            <article class="rounded-xl border border-slate-200/80 bg-white p-5 shadow-xs">
                <p class="text-3xl font-extrabold text-slate-900">{{ setting('annual_capacity', '₹25 Cr') }}</p>
                <p class="mt-1 text-xs font-bold uppercase tracking-wider text-[#FF8B02]">Annual Capacity</p>
            </article>
            <article class="rounded-xl border border-slate-200/80 bg-white p-5 shadow-xs">
                <p class="text-3xl font-extrabold text-slate-900">{{ setting('skilled_engineers', '50+') }}</p>
                <p class="mt-1 text-xs font-bold uppercase tracking-wider text-[#FF8B02]">Skilled Engineers</p>
            </article>
            <article class="rounded-xl border border-slate-200/80 bg-white p-5 shadow-xs">
                <p class="text-3xl font-extrabold text-slate-900">{{ setting('structure_lifespan', '50 Years') }}</p>
                <p class="mt-1 text-xs font-bold uppercase tracking-wider text-[#FF8B02]">Structure Lifespan</p>
            </article>
        </section>

        <!-- 2. CORPORATE NARRATIVE & OVERVIEW -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Column: Showcase Video Card (Lazy Loaded) -->
            <div class="lg:col-span-6"
                 x-data="{
                    initLazyProfileVideo() {
                        const video = this.$refs.profileVideo;
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
                 x-init="initLazyProfileVideo()">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-slate-200/60 bg-slate-900 group">
                    <video x-ref="profileVideo" loop muted playsinline controls preload="none" poster="{{ asset('shallom/IMG-20260901-WA0014.jpg') }}"
                           class="w-full h-[320px] sm:h-[440px] object-cover object-center">
                        <source src="{{ asset('shallom/VID-20260901-WA0059.mp4') }}" type="video/mp4">
                        <source src="{{ asset('shallom/VID-20260901-WA0060.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="absolute bottom-4 left-4 bg-slate-900/90 backdrop-blur-md text-white px-4 py-2 rounded-xl text-xs font-bold border border-white/20 flex items-center gap-2 pointer-events-none">
                        <i class="ri-calendar-check-fill text-[#FF8B02] text-base"></i>
                        <span>Established {{ setting('established_year', '2017') }} • Delhi NCR</span>
                    </div>
                </div>
            </div>

            <!-- Right Column: Editorial Corporate Story -->
            <div class="lg:col-span-6 space-y-6">
                <div class="flex items-center gap-2 text-[#FF8B02]">
                    <i class="ri-shield-user-line text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">ABOUT OUR PRACTICE</span>
                </div>

                <h2 class="text-3xl sm:text-4xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    PIONEERING PREFABRICATED <br/>
                    <span class="text-[#FF8B02] font-normal">BUILDING SOLUTIONS</span>
                </h2>

                <p class="text-slate-600 text-sm sm:text-base leading-relaxed font-normal">
                    Established in <strong>{{ setting('established_year', '2017') }}</strong>, <strong>{{ setting('company_name', 'Shallom Prefab Systems') }}</strong> provides modular prefab buildings and turnkey solutions for residential, commercial, and industrial projects. Its range includes villas, eco-resort cottages, site offices, institutional buildings, industrial sheds, warehouses, worker colonies, and sanitation units.
                </p>

                <p class="text-slate-600 text-sm sm:text-base leading-relaxed font-normal">
                    Led by Proprietor <strong>{{ setting('proprietor', 'Mr. Arvind Kumar') }}</strong>, the company works with Aerocon and PUF materials to create modular structures designed for efficient installation, relocation, and use across varied project needs.
                </p>

                <div class="grid grid-cols-2 gap-4 pt-2">
                    <div class="bg-white p-4 rounded-xl border border-slate-200/80 shadow-2xs flex items-center gap-3">
                        <i class="ri-checkbox-circle-fill text-[#FF8B02] text-xl shrink-0"></i>
                        <span class="text-xs font-bold text-slate-800">Aerocon & PUF Materials</span>
                    </div>
                    <div class="bg-white p-4 rounded-xl border border-slate-200/80 shadow-2xs flex items-center gap-3">
                        <i class="ri-tools-fill text-[#FF8B02] text-xl shrink-0"></i>
                        <span class="text-xs font-bold text-slate-800">Turnkey Modular Construction</span>
                    </div>
                </div>
            </div>

        </div>

        <!-- 3. OFFICIAL COMPANY FACTSHEET TABLE -->
        <div class="bg-white rounded-3xl p-8 sm:p-12 border border-slate-200/80 shadow-xs space-y-6">
            <div class="space-y-2 border-b border-slate-100 pb-4">
                <div class="flex items-center gap-2 text-[#FF8B02]">
                    <i class="ri-file-list-3-line text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">OFFICIAL CREDENTIALS</span>
                </div>
                <h2 class="text-2xl sm:text-3xl font-bold text-slate-900">Company Factsheet</h2>
            </div>

            <div class="overflow-x-auto rounded-2xl border border-slate-200/80">
                <table class="w-full text-left border-collapse text-xs sm:text-sm">
                    <tbody class="divide-y divide-slate-200 font-medium">
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50 w-1/3">Company Name</td>
                            <td class="py-3.5 px-6 text-slate-800 font-semibold w-2/3">{{ setting('company_name', 'Shallom Prefab Systems') }}</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Leadership / Proprietor</td>
                            <td class="py-3.5 px-6 text-slate-800 font-semibold">{{ setting('proprietor', 'Mr. Arvind Kumar') }}</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Established</td>
                            <td class="py-3.5 px-6 text-slate-800 font-semibold">{{ setting('established_year', '2017') }}</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Annual Production Capacity</td>
                            <td class="py-3.5 px-6 text-[#FF8B02] font-extrabold">{{ setting('annual_capacity', '₹25 Cr') }}</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Skilled Engineers</td>
                            <td class="py-3.5 px-6 text-slate-800 font-semibold">{{ setting('skilled_engineers', '50+') }}</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Structure Lifespan</td>
                            <td class="py-3.5 px-6 text-slate-800 font-semibold">{{ setting('structure_lifespan', '50 Years') }}</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Building Range</td>
                            <td class="py-3.5 px-6 text-slate-800 font-semibold">Villas, resort cottages, site offices, institutional buildings, industrial sheds, warehouses, worker colonies, and sanitation units</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Construction Materials</td>
                            <td class="py-3.5 px-6 text-slate-800 font-semibold">Aerocon and PUF</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Primary Phone</td>
                            <td class="py-3.5 px-6 text-slate-800 font-semibold">{{ setting('phone', '+91 98995 52380') }}</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Secondary Phone</td>
                            <td class="py-3.5 px-6 text-slate-800 font-semibold">{{ setting('secondary_phone', '+91 70650 13555') }}</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Head Office</td>
                            <td class="py-3.5 px-6 text-slate-800 font-semibold">{{ setting('address', 'N-3/A-3, Dilshad Garden, Delhi - 110095') }}</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Branch Office</td>
                            <td class="py-3.5 px-6 text-slate-800 font-semibold">{{ setting('branch_address', 'D-15, Sector 3, Noida (U.P.) - 201301') }}</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>

        <!-- 4. INFRASTRUCTURE & DIVISIONAL UNITS -->
        <div class="space-y-10">
            <div class="max-w-3xl space-y-3">
                <div class="flex items-center gap-2 text-[#FF8B02]">
                    <i class="ri-ruler-2-line text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">ROBUST INFRASTRUCTURE</span>
                </div>
                <h2 class="text-3xl sm:text-4xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    MODULAR PREFAB <br/>
                    <span class="text-[#FF8B02] font-normal">BUILDING SOLUTIONS</span>
                </h2>
                <p class="text-slate-600 text-sm font-normal leading-relaxed">
                    Shallom delivers modular, relocatable structures using Aerocon and PUF materials, with solutions for residential, commercial, and industrial projects.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-xs hover:shadow-xl transition-all space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center">
                        <i class="ri-settings-4-line text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Turnkey Manufacturing & Execution</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        End-to-end delivery from architectural design and panel fabrication to rapid on-site assembly.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-xs hover:shadow-xl transition-all space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center">
                        <i class="ri-test-tube-line text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Advanced Insulation Technologies</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Aerocon panels, cold-rolled steel framing, and polyurethane foam (PUF) insulation cores.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-xs hover:shadow-xl transition-all space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center">
                        <i class="ri-team-line text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Skilled Engineers</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        {{ setting('skilled_engineers', '50+') }} skilled engineers support Shallom's modular construction work.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-xs hover:shadow-xl transition-all space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center">
                        <i class="ri-truck-line text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Seismic & Wind Performance</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Designed for Zone-V earthquake loads and winds up to 39 m/s, with Class “O” fire safety.
                    </p>
                </div>

            </div>
        </div>

        <!-- 5. CORE VALUES, MISSION & VISION -->
        <div class="bg-white rounded-2xl border border-slate-200/80 p-8 sm:p-12 shadow-xs grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            
            <div class="lg:col-span-7 space-y-6">
                <div class="flex items-center gap-2 text-[#FF8B02]">
                    <i class="ri-heart-line text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">CORE VALUES</span>
                </div>

                <h2 class="text-3xl sm:text-4xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    BUILT ON <br/>
                    <span class="text-[#FF8B02] font-normal">PURPOSE & PARTNERSHIP</span>
                </h2>

                <ul class="space-y-4 text-sm leading-relaxed text-slate-600">
                    <li><strong class="text-slate-900">Quality Excellence:</strong> Quality-focused production using premium Aerocon and PUF materials.</li>
                    <li><strong class="text-slate-900">Sustainability:</strong> Energy-efficient, low-carbon thermal insulation and recyclable building systems.</li>
                    <li><strong class="text-slate-900">Client Partnership:</strong> Turnkey accountability from initial architectural design through site commissioning.</li>
                </ul>

                <div class="pt-2 flex flex-wrap gap-4">
                    <div class="px-4 py-2 rounded-lg bg-[#FAF9F5] border border-slate-200 text-xs font-bold text-slate-800">
                        Turnaround: <span class="text-[#FF8B02]">Up to 60% faster</span>
                    </div>
                    <div class="px-4 py-2 rounded-lg bg-[#FAF9F5] border border-slate-200 text-xs font-bold text-slate-800">
                        Structure lifespan: <span class="text-slate-600">{{ setting('structure_lifespan', '50 Years') }}</span>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5 space-y-5">
                <article class="rounded-2xl bg-[#FF8B02] p-7 text-slate-950">
                    <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-widest">
                        <i class="ri-checkbox-circle-line text-lg"></i>
                        <span>Our Mission</span>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed">To engineer world-class pre-engineered building systems that deliver structural durability, rapid execution, and high thermal efficiency—empowering industrial, commercial, and residential growth across India.</p>
                </article>
                <article class="rounded-2xl bg-[#FF8B02] p-7 text-slate-950">
                    <div class="flex items-center gap-2 text-xs font-bold uppercase tracking-widest">
                        <i class="ri-eye-line text-lg"></i>
                        <span>Our Vision</span>
                    </div>
                    <p class="mt-4 text-sm leading-relaxed">To be India's leading off-site modular construction partner, setting benchmarks in sustainable architecture, eco-friendly materials, and turnkey engineering that redefine the future of infrastructure.</p>
                </article>
            </div>

        </div>

    </div>
</div>