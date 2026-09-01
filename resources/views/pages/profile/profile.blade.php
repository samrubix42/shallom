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
                    SHALLOM PREFAB SYSTEMS & <br/>
                    <span class="text-[#FF8B02] font-normal">CORPORATE PROFILE</span>
                </h1>
                <p class="text-slate-600 text-sm sm:text-base font-normal leading-relaxed">
                    Established with industry roots dating back to <strong>2009 at Delhi (India)</strong> and GST registered in 2017, Shallom Prefab Systems is a leading manufacturer, exporter, and turnkey service provider of advanced pre-engineered construction solutions under the leadership of Proprietor <strong>Mr. Arvind Kumar Gautam</strong>.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row md:flex-col gap-3 shrink-0 w-full md:w-auto">
                <a href="tel:+919899552380" 
                   class="inline-flex items-center justify-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-6 py-3 rounded-full shadow-md shadow-orange-500/20 text-xs uppercase tracking-wider transition-all">
                    <i class="ri-phone-fill text-sm"></i>
                    <span>+91-9899552380</span>
                </a>
                <a href="{{ route('products') }}" wire:navigate
                   class="inline-flex items-center justify-center gap-2 border border-slate-300 hover:border-[#FF8B02] hover:text-[#FF8B02] text-slate-700 font-bold px-6 py-3 rounded-full text-xs uppercase tracking-wider transition-all">
                    <span>Explore Our Range</span>
                    <i class="ri-arrow-right-line text-sm"></i>
                </a>
            </div>
        </div>

        <!-- 2. CORPORATE NARRATIVE & OVERVIEW -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-center">
            
            <!-- Left Column: Showcase Video Card -->
            <div class="lg:col-span-6">
                <div class="relative rounded-2xl overflow-hidden shadow-2xl border border-slate-200/60 bg-slate-900 group">
                    <video autoplay loop muted playsinline controls
                           class="w-full h-[320px] sm:h-[440px] object-cover object-center">
                        <source src="{{ asset('shallom/VID-20260901-WA0059.mp4') }}" type="video/mp4">
                        <source src="{{ asset('shallom/VID-20260901-WA0060.mp4') }}" type="video/mp4">
                        Your browser does not support the video tag.
                    </video>
                    <div class="absolute bottom-4 left-4 bg-slate-900/90 backdrop-blur-md text-white px-4 py-2 rounded-xl text-xs font-bold border border-white/20 flex items-center gap-2 pointer-events-none">
                        <i class="ri-calendar-check-fill text-[#FF8B02] text-base"></i>
                        <span>Established 2009 • Dilshad Garden, Delhi</span>
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
                    Incorporated in the year <strong>2009 at Delhi (India)</strong>, we, <strong>“Shallom Prefab Systems”</strong>, are actively engaged in manufacturing, exporting, and supplying an extensive range of Prefab Houses, Prefab Structures, Prefab Buildings, Prefab Cabins, Prefab Toilets, and Prefabricated Offices. Our comprehensive product portfolio includes Prefab Houses, Prefabricated Luxurious Houses, Prefabricated Labor Camps, Labor Hutments, Office Cafeterias, Prefabricated Office Ceilings, and customized structural units.
                </p>

                <p class="text-slate-600 text-sm sm:text-base leading-relaxed font-normal">
                    Under the visionary leadership of Proprietor <strong>Mr. Arvind Kumar Gautam</strong>, our structures are manufactured with high precision using supreme quality raw materials and latest technology. Sourced strictly from certified industry vendors in compliance with international quality standards, our solutions deliver fine finish, excellent design, robust construction, easy installation, and protection under extreme weather conditions.
                </p>

                <div class="grid grid-cols-2 gap-4 pt-2">
                    <div class="bg-white p-4 rounded-xl border border-slate-200/80 shadow-2xs flex items-center gap-3">
                        <i class="ri-checkbox-circle-fill text-[#FF8B02] text-xl shrink-0"></i>
                        <span class="text-xs font-bold text-slate-800">ISO 9001:2015 Quality Norms</span>
                    </div>
                    <div class="bg-white p-4 rounded-xl border border-slate-200/80 shadow-2xs flex items-center gap-3">
                        <i class="ri-tools-fill text-[#FF8B02] text-xl shrink-0"></i>
                        <span class="text-xs font-bold text-slate-800">Turnkey Erection Services</span>
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
                            <td class="py-3.5 px-6 text-slate-800 font-semibold w-2/3">Shallom Prefab Systems</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Leadership / Proprietor</td>
                            <td class="py-3.5 px-6 text-slate-800 font-semibold">Mr. Arvind Kumar Gautam</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Year of Incorporation / Roots</td>
                            <td class="py-3.5 px-6 text-slate-800 font-semibold">2009 (GST Registered: July 2017)</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Legal Status</td>
                            <td class="py-3.5 px-6 text-slate-800 font-semibold">Sole Proprietorship</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Nature of Business</td>
                            <td class="py-3.5 px-6 text-slate-800 font-semibold">Manufacturer, Exporter, Supplier, Wholesaler, Trader & Turnkey Service Provider</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Annual Turnover</td>
                            <td class="py-3.5 px-6 text-[#FF8B02] font-extrabold">₹5 Crore – ₹25 Crore</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Team Size</td>
                            <td class="py-3.5 px-6 text-slate-800 font-semibold">26 – 50 Skilled Professionals</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">GST Registration No.</td>
                            <td class="py-3.5 px-6 font-mono font-bold text-slate-900">07ANDPG4822C2ZI</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Registered Office Address</td>
                            <td class="py-3.5 px-6 text-slate-800 font-semibold">N-3/A-3, Dilshad Garden, Delhi – 110095, India</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Banker</td>
                            <td class="py-3.5 px-6 text-slate-800 font-semibold">AXIS BANK</td>
                        </tr>
                        <tr class="hover:bg-[#FAF9F5]">
                            <td class="py-3.5 px-6 font-bold text-slate-900 bg-slate-50">Accepted Payment Modes</td>
                            <td class="py-3.5 px-6 text-slate-800 font-semibold">Cash, Cheque, Demand Draft (DD), Wire Transfer</td>
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
                    CUTTING-EDGE MANUFACTURING <br/>
                    <span class="text-[#FF8B02] font-normal">& DIVISIONAL UNITS</span>
                </h2>
                <p class="text-slate-600 text-sm font-normal leading-relaxed">
                    We have invested a substantial amount for the construction of our robust infrastructural setup in Delhi NCR, equipped with modern roll-forming and welding machinery operated by highly skilled personnel.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-6">
                
                <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-xs hover:shadow-xl transition-all space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center">
                        <i class="ri-settings-4-line text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Production Unit</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Well-installed with latest profile sheet roll-formers, hydraulic benders, and arc welding equipment capable of delivering flawless batch outputs.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-xs hover:shadow-xl transition-all space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center">
                        <i class="ri-test-tube-line text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Quality Testing</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Manned by certified quality controllers testing every raw material batch on structural load capacity, weatherproofing, and fire retardancy.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-xs hover:shadow-xl transition-all space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center">
                        <i class="ri-team-line text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Skilled Engineers</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Our 26–50 expert personnel team includes structural engineers, CAD draftsmen, and quality controllers dedicated to achieving client specifications.
                    </p>
                </div>

                <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-xs hover:shadow-xl transition-all space-y-4">
                    <div class="w-12 h-12 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center">
                        <i class="ri-truck-line text-2xl"></i>
                    </div>
                    <h3 class="text-lg font-bold text-slate-900">Sales & Logistics</h3>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Assuring prompt nationwide delivery and turnkey assembly at customer site coordinates with complete post-installation support.
                    </p>
                </div>

            </div>
        </div>

        <!-- 5. QUALITY COMMITMENT & CUSTOMER CENTRIC PHILOSOPHY -->
        <div class="bg-white rounded-2xl border border-slate-200/80 p-8 sm:p-12 shadow-xs grid grid-cols-1 lg:grid-cols-12 gap-10 items-center">
            
            <div class="lg:col-span-7 space-y-6">
                <div class="flex items-center gap-2 text-[#FF8B02]">
                    <i class="ri-award-line text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">QUALITY ASSURANCE</span>
                </div>

                <h2 class="text-3xl sm:text-4xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    CUSTOMER CENTRIC PRACTICE & <br/>
                    <span class="text-[#FF8B02] font-normal">TRANSPARENT DEALINGS</span>
                </h2>

                <p class="text-slate-600 text-sm leading-relaxed font-normal">
                    For making our entire product range defect-free, we ensure that products are manufactured using optimum quality raw material procured from trustworthy vendors of the industry. Quality controllers test our offered products on multiple parameters of durability and weather endurance.
                </p>

                <p class="text-slate-600 text-sm leading-relaxed font-normal">
                    We are a customer-centric company that has reinforced its foothold strongly in the market. By offering our clients best-in-class products designed in conformation with international standards, transparent dealings, and timely delivery, we have earned immense recognition nationwide.
                </p>

                <div class="pt-2 flex flex-wrap gap-4">
                    <div class="px-4 py-2 rounded-lg bg-[#FAF9F5] border border-slate-200 text-xs font-bold text-slate-800">
                        GSTIN: <span class="text-[#FF8B02]">07ANDPG4822C2ZI</span>
                    </div>
                    <div class="px-4 py-2 rounded-lg bg-[#FAF9F5] border border-slate-200 text-xs font-bold text-slate-800">
                        Office: <span class="text-slate-600">Dilshad Garden, Delhi – 110095</span>
                    </div>
                </div>
            </div>

            <div class="lg:col-span-5 space-y-4 bg-[#FAF9F5] p-8 rounded-2xl border border-slate-200/80">
                <h3 class="text-xl font-bold text-slate-900 border-b border-slate-200 pb-3">Why Partner With Shallom?</h3>
                <ul class="space-y-3 text-xs sm:text-sm text-slate-700">
                    <li class="flex items-center gap-2 font-medium">
                        <i class="ri-check-line text-[#FF8B02] font-extrabold text-base"></i>
                        <span>100% Certified Industry Vendor Raw Material</span>
                    </li>
                    <li class="flex items-center gap-2 font-medium">
                        <i class="ri-check-line text-[#FF8B02] font-extrabold text-base"></i>
                        <span>Custom Dimensions & Interior Ceilings</span>
                    </li>
                    <li class="flex items-center gap-2 font-medium">
                        <i class="ri-check-line text-[#FF8B02] font-extrabold text-base"></i>
                        <span>Turnkey Erection & Maintenance Services</span>
                    </li>
                    <li class="flex items-center gap-2 font-medium">
                        <i class="ri-check-line text-[#FF8B02] font-extrabold text-base"></i>
                        <span>Ethical Business Policy & Transparent Pricing</span>
                    </li>
                    <li class="flex items-center gap-2 font-medium">
                        <i class="ri-check-line text-[#FF8B02] font-extrabold text-base"></i>
                        <span>On-Time Nationwide Delivery</span>
                    </li>
                </ul>

                <div class="pt-4 border-t border-slate-200">
                    <a href="tel:+919899552380" class="block text-center bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold py-3.5 rounded-xl shadow-md text-xs uppercase tracking-wider transition-all">
                        Call Direct Engineering Team
                    </a>
                </div>
            </div>

        </div>

    </div>
</div>