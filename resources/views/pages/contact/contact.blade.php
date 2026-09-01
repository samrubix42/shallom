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
                    Have a custom structural layout drawing or urgent site requirement? Connect directly with our Delhi NCR engineering plant for instant estimations and technical consultations.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row md:flex-col gap-3 shrink-0 w-full md:w-auto">
                <a href="tel:+917942550323" 
                   class="inline-flex items-center justify-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-6 py-3 rounded-full shadow-md shadow-orange-500/20 text-xs uppercase tracking-wider transition-all">
                    <i class="ri-phone-fill text-sm"></i>
                    <span>07942550323</span>
                </a>
                <a href="https://wa.me/917942550323" target="_blank"
                   class="inline-flex items-center justify-center gap-2 bg-emerald-600 hover:bg-emerald-700 text-white font-bold px-6 py-3 rounded-full text-xs uppercase tracking-wider transition-all shadow-xs">
                    <i class="ri-whatsapp-line text-sm"></i>
                    <span>WhatsApp Inquiry</span>
                </a>
            </div>
        </div>

        <!-- 2. DIRECT CONTACT COORDINATES CARDS -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">
            
            <!-- Card 1: Direct Hotline -->
            <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-xs hover:shadow-xl transition-all space-y-4 group">
                <div class="w-12 h-12 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center group-hover:scale-110 transition-transform">
                    <i class="ri-phone-fill text-2xl"></i>
                </div>
                <div class="space-y-1">
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-wider">DIRECT HOTLINE</div>
                    <a href="tel:+919899552380" class="text-xl font-bold text-slate-900 hover:text-[#FF8B02] transition-colors block">
                        +91-9899552380
                    </a>
                    <a href="tel:+917942550323" class="text-sm font-semibold text-slate-600 hover:text-[#FF8B02] transition-colors block">
                        07942550323
                    </a>
                </div>
                <p class="text-xs text-slate-600 leading-relaxed font-normal">
                    Email: <a href="mailto:shallomprefabsystems@gmail.com" class="text-[#FF8B02] font-semibold hover:underline">shallomprefabsystems@gmail.com</a>
                </p>
            </div>

            <!-- Card 2: Plant & Office Coordinates -->
            <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-xs hover:shadow-xl transition-all space-y-4 group">
                <div class="w-12 h-12 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center group-hover:scale-110 transition-transform">
                    <i class="ri-map-pin-2-fill text-2xl"></i>
                </div>
                <div class="space-y-1">
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-wider">REGISTERED OFFICE</div>
                    <div class="text-sm font-bold text-slate-900 leading-snug">
                        N-3/A-3, Dilshad Garden, Delhi – 110095, India
                    </div>
                </div>
                <p class="text-xs text-slate-600 leading-relaxed font-normal">
                    GSTIN: <strong class="text-slate-800">07ANDPG4822C2ZI</strong>
                </p>
            </div>

            <!-- Card 3: Business Hours & Quality -->
            <div class="bg-white p-8 rounded-2xl border border-slate-200/80 shadow-xs hover:shadow-xl transition-all space-y-4 group">
                <div class="w-12 h-12 rounded-xl bg-[#FFF4E5] text-[#FF8B02] flex items-center justify-center group-hover:scale-110 transition-transform">
                    <i class="ri-time-line text-2xl"></i>
                </div>
                <div class="space-y-1">
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-wider">WORKING HOURS</div>
                    <div class="text-lg font-bold text-slate-900">
                        9:00 AM - 7:00 PM IST
                    </div>
                </div>
                <p class="text-xs text-slate-600 leading-relaxed font-normal">
                    Monday to Saturday • ISO 9001:2015 Certified Manufacturing Operations
                </p>
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
                                <label class="block text-xs font-bold text-slate-700 mb-1.5">Email Address</label>
                                <input type="email" wire:model="email" placeholder="e.g. name@company.com" class="w-full bg-[#FAF9F5] border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors">
                            </div>

                            <div>
                                <label class="block text-xs font-bold text-slate-700 mb-1.5">Product Requirement</label>
                                <select wire:model="buildingInterest" class="w-full bg-[#FAF9F5] border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors">
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
                            <input type="text" wire:model="projectLocation" placeholder="e.g. Noida / Gurgaon / Delhi NCR" class="w-full bg-[#FAF9F5] border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1.5">Footprint Dimensions & Project Notes</label>
                            <textarea wire:model="message" rows="4" placeholder="Mention footprint dimensions (e.g. 20ft x 40ft), wall panel thickness, or special site conditions..." class="w-full bg-[#FAF9F5] border border-slate-200 rounded-xl px-4 py-3 text-sm text-slate-900 focus:outline-none focus:border-[#FF8B02] transition-colors"></textarea>
                        </div>

                        <button type="submit" class="w-full bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold py-4 rounded-xl shadow-lg shadow-orange-500/20 transition-all text-xs uppercase tracking-wider flex items-center justify-center gap-2">
                            <i class="ri-send-plane-fill text-base"></i>
                            Submit Requirement Now
                        </button>
                    </form>
                @endif

            </div>

            <!-- Right Plant Location & Studio Info Column -->
            <div class="lg:col-span-5 space-y-6">
                
                <div class="bg-white border border-slate-200/80 rounded-2xl p-8 shadow-xs space-y-6">
                    <div class="flex items-center gap-2 text-[#FF8B02]">
                        <i class="ri-compass-3-line text-lg"></i>
                        <span class="text-xs font-bold uppercase tracking-widest">PLANT LOCATION</span>
                    </div>

                    <h3 class="text-xl font-bold text-slate-900">Delhi Manufacturing Facility</h3>
                    
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Our plant is conveniently situated in New Delhi with easy highway access for transporting heavy pre-engineered structural steel frames, sandwich panels, and modular bunk houses.
                    </p>

                    <div class="space-y-3 pt-2">
                        <div class="flex items-center gap-3 text-xs text-slate-700 font-medium">
                            <i class="ri-shield-check-fill text-[#FF8B02] text-base"></i>
                            <span>On-Site Erection & Installation Support</span>
                        </div>
                        <div class="flex items-center gap-3 text-xs text-slate-700 font-medium">
                            <i class="ri-draft-line text-[#FF8B02] text-base"></i>
                            <span>CAD Footprint Consultation & Layout Specs</span>
                        </div>
                        <div class="flex items-center gap-3 text-xs text-slate-700 font-medium">
                            <i class="ri-box-3-line text-[#FF8B02] text-base"></i>
                            <span>Material Sample Inspections Available</span>
                        </div>
                    </div>
                </div>

                <div class="bg-[#FAF9F5] border border-slate-200/80 rounded-2xl p-8 space-y-4">
                    <div class="text-xs font-bold text-slate-400 uppercase tracking-wider">QUICK ASSISTANCE</div>
                    <h4 class="text-lg font-bold text-slate-900">Need Immediate Pricing?</h4>
                    <p class="text-xs text-slate-600 leading-relaxed font-normal">
                        Speak directly with our technical team for instant budget estimates and dispatch timelines.
                    </p>
                    <a href="tel:+917942550323" class="inline-flex items-center gap-2 text-[#FF8B02] font-extrabold text-xs uppercase tracking-wider hover:gap-3 transition-all">
                        <span>CALL 07942550323</span>
                        <i class="ri-arrow-right-line text-sm"></i>
                    </a>
                </div>

            </div>

        </div>

    </div>
</div>