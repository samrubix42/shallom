@section('title', 'Contact Us & Get a Quote | Shallom Prefab Systems')
@section('meta_description', 'Contact Shallom Prefab Systems for modular building and turnkey construction enquiries. Call our Head Office or Noida Branch.')

<div class="py-6 sm:py-10 bg-[#FAF9F5] min-h-screen font-sans text-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
        
        <!-- 1. ARCHITECTURAL STUDIO HERO BANNER -->
        <div class="bg-white rounded-2xl p-8 sm:p-12 border border-slate-200/80 shadow-xs flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="space-y-4 max-w-3xl">
                <div class="flex items-center gap-2 text-[#FF8B02]">
                    <i class="ri-mail-send-line text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">DIRECT COORDINATES & CONNECT</span>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    CONNECT WITH OUR <br/>
                    <span class="text-[#FF8B02] font-normal">ENGINEERING STUDIO</span>
                </h1>
                <p class="text-slate-600 text-sm sm:text-base font-normal leading-relaxed">
                    Contact Shallom Prefab Systems for residential, commercial, or industrial modular construction and turnkey project enquiries.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row md:flex-col gap-3 shrink-0 w-full md:w-auto">
                <a href="tel:{{ setting('phone', '+91 98995 52380') }}"
                   class="inline-flex items-center justify-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-6 py-3 rounded-full shadow-md shadow-orange-500/20 text-xs uppercase tracking-wider transition-all">
                    <i class="ri-phone-fill text-sm"></i>
                    <span>{{ setting('phone', '+91 98995 52380') }}</span>
                </a>
                <a href="tel:{{ setting('secondary_phone', '+91 70650 13555') }}"
                   class="inline-flex items-center justify-center gap-2 border border-slate-300 hover:border-[#FF8B02] hover:text-[#FF8B02] text-slate-700 font-bold px-6 py-3 rounded-full text-xs uppercase tracking-wider transition-all">
                    <i class="ri-phone-fill text-sm"></i>
                    <span>{{ setting('secondary_phone', '+91 70650 13555') }}</span>
                </a>
            </div>
        </div>

        <!-- 2. DIRECT CONTACT COORDINATES CARDS -->
        <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">
            
            <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-xs hover:shadow-xl transition-all space-y-4 group">
                <div class="w-12 h-12 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center group-hover:scale-110 transition-transform">
                    <i class="ri-phone-fill text-2xl"></i>
                </div>
                <div class="space-y-1">
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-wider">CONTACT NUMBERS</div>
                    <a href="tel:{{ setting('phone', '+91 98995 52380') }}" class="text-xl font-bold text-slate-900 hover:text-[#FF8B02] transition-colors block">
                        {{ setting('phone', '+91 98995 52380') }}
                    </a>
                    <a href="tel:{{ setting('secondary_phone', '+91 70650 13555') }}" class="text-sm font-semibold text-slate-600 hover:text-[#FF8B02] transition-colors block">
                        {{ setting('secondary_phone', '+91 70650 13555') }}
                    </a>
                </div>
                <p class="text-xs text-slate-600 leading-relaxed font-normal">
                    Email: <a href="mailto:{{ setting('email', 'shallomprefab@yahoo.com') }}" class="text-[#FF8B02] font-semibold hover:underline">{{ setting('email', 'shallomprefab@yahoo.com') }}</a>
                </p>
            </div>

            <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-xs hover:shadow-xl transition-all space-y-4 group">
                <div class="w-12 h-12 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center group-hover:scale-110 transition-transform">
                    <i class="ri-map-pin-2-fill text-2xl"></i>
                </div>
                <div class="space-y-4">
                    <div>
                        <div class="text-xs font-bold text-slate-400 uppercase tracking-wider">HEAD OFFICE</div>
                        <div class="text-sm font-bold text-slate-900 leading-snug">
                            {{ setting('address', 'N-3/A-3, Dilshad Garden, Delhi - 110095') }}
                        </div>
                    </div>
                    <div>
                        <div class="text-xs font-bold text-slate-400 uppercase tracking-wider">BRANCH OFFICE</div>
                        <div class="text-sm font-bold text-slate-900 leading-snug">
                            {{ setting('branch_address', 'D-15, Sector 3, Noida (U.P.) - 201301') }}
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <!-- 3. INTERACTIVE CONTACT FORM & LOCATION MAP SECTION -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 items-start">
            
            <!-- Left Form Column -->
            <div class="lg:col-span-7 bg-white border border-slate-200/80 rounded-2xl p-8 sm:p-10 shadow-xs">
                
                <div class="space-y-2 mb-8 border-b border-slate-100 pb-5">
                    <div class="flex items-center gap-2 text-[#FF8B02]">
                        <i class="ri-edit-line text-lg"></i>
                        <span class="text-xs font-bold uppercase tracking-widest">SEND INSTANT PROJECT REQUIREMENT</span>
                    </div>
                    <h2 class="text-2xl sm:text-3xl font-light text-slate-800 tracking-tight">
                        REQUEST CUSTOM <span class="text-[#FF8B02] font-normal">QUOTE & DRAWING</span>
                    </h2>
                </div>

                @if($enquirySubmitted)
                    <div class="bg-emerald-50 border border-emerald-200 rounded-2xl p-8 text-center space-y-4">
                        <div class="w-14 h-14 bg-emerald-600 text-white rounded-full flex items-center justify-center mx-auto shadow-md">
                            <i class="ri-check-line text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Enquiry Received Successfully!</h3>
                        <p class="text-sm text-slate-600 max-w-md mx-auto font-normal">
                            Thank you for reaching out to Shallom Prefab Systems. Our engineering team will review your specifications and call you back shortly.
                        </p>
                        <button wire:click="resetEnquiryState" class="inline-block bg-[#FF8B02] hover:bg-[#E67A00] text-white font-bold px-6 py-2.5 rounded-xl shadow-xs text-xs uppercase tracking-wider">
                            Submit Another Inquiry
                        </button>
                    </div>
                @else
                    <form wire:submit="submitEnquiry" class="space-y-5">
                        
                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1.5">Full Name *</label>
                                <input type="text" wire:model="name" placeholder="e.g. Rahul Sharma" class="w-full bg-[#FAF9F5] border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors @error('name') border-red-500 @enderror">
                                @error('name') <span class="text-red-500 text-xs mt-1 block font-semibold">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1.5">Phone Number *</label>
                                <input type="tel" wire:model="phone" placeholder="e.g. 9876543210" class="w-full bg-[#FAF9F5] border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors @error('phone') border-red-500 @enderror">
                                @error('phone') <span class="text-red-500 text-xs mt-1 block font-semibold">{{ $message }}</span> @enderror
                            </div>
                        </div>

                        <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1.5">Email Address <span class="text-slate-400 font-normal">(Optional)</span></label>
                                <input type="email" wire:model="email" placeholder="e.g. name@company.com" class="w-full bg-[#FAF9F5] border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors @error('email') border-red-500 @enderror">
                                @error('email') <span class="text-red-500 text-xs mt-1 block font-semibold">{{ $message }}</span> @enderror
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1.5">Product Requirement</label>
                                <select wire:model="buildingInterest" class="w-full bg-[#FAF9F5] border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors">
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
                            <input type="text" wire:model="projectLocation" placeholder="e.g. Noida / Gurgaon / Delhi NCR" class="w-full bg-[#FAF9F5] border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Footprint Dimensions & Project Notes</label>
                            <textarea wire:model="message" rows="4" placeholder="Mention footprint dimensions (e.g. 20ft x 40ft), wall panel thickness, or special site conditions..." class="w-full bg-[#FAF9F5] border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors"></textarea>
                        </div>

                        <button type="submit" 
                                wire:loading.attr="disabled"
                                class="w-full bg-[#FF8B02] hover:bg-[#E67A00] disabled:opacity-60 text-white font-extrabold py-4 rounded-xl shadow-lg shadow-orange-500/20 transition-all text-xs uppercase tracking-wider flex items-center justify-center gap-2 cursor-pointer">
                            <i wire:loading.remove wire:target="submitEnquiry" class="ri-send-plane-fill text-base"></i>
                            <i wire:loading wire:target="submitEnquiry" class="ri-loader-4-line text-base animate-spin"></i>
                            <span wire:loading.remove wire:target="submitEnquiry">Submit Requirement Now</span>
                            <span wire:loading wire:target="submitEnquiry">Submitting Requirement...</span>
                        </button>
                    </form>
                @endif

            </div>

            <!-- Right Plant Location & Studio Info Column -->
            <div class="lg:col-span-5 space-y-6">
                
                <div class="bg-white border border-slate-200/80 rounded-2xl p-8 shadow-xs space-y-6">
                    <div class="flex items-center gap-2 text-[#FF8B02]">
                        <i class="ri-compass-3-line text-lg"></i>
                        <span class="text-xs font-bold uppercase tracking-widest">OUR OFFICES</span>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900">Head Office</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">{{ setting('address', 'N-3/A-3, Dilshad Garden, Delhi - 110095') }}</p>
                    <h3 class="text-xl font-bold text-slate-900">Branch Office</h3>
                    <p class="text-sm text-slate-600 leading-relaxed">{{ setting('branch_address', 'D-15, Sector 3, Noida (U.P.) - 201301') }}</p>
                </div>

                <div class="bg-[#FAF9F5] border border-slate-200/80 rounded-2xl p-8 space-y-4">
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-wider">CALL US</div>
                    <a href="tel:{{ setting('phone', '+91 98995 52380') }}" class="inline-flex items-center gap-2 text-[#FF8B02] font-extrabold text-xs uppercase tracking-wider hover:gap-3 transition-all">
                        <span>{{ setting('phone', '+91 98995 52380') }}</span>
                        <i class="ri-arrow-right-line text-sm"></i>
                    </a>
                    <a href="tel:{{ setting('secondary_phone', '+91 70650 13555') }}" class="inline-flex items-center gap-2 text-[#FF8B02] font-extrabold text-xs uppercase tracking-wider hover:gap-3 transition-all">
                        <span>{{ setting('secondary_phone', '+91 70650 13555') }}</span>
                        <i class="ri-arrow-right-line text-sm"></i>
                    </a>
                </div>

            </div>

        </div>

    </div>
</div>