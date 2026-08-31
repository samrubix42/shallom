<div class="py-12 sm:py-20 bg-[#FAF9F5] min-h-screen font-sans text-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- Architectural Studio Catalog Banner Header -->
        <div class="bg-white rounded-2xl p-8 sm:p-10 border border-slate-200/80 shadow-xs flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="space-y-3 max-w-2xl">
                <div class="flex items-center gap-2 text-[#FF8B02]">
                    <i class="ri-ruler-2-line text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">TECHNICAL SPECIFICATIONS CATALOG</span>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    PRODUCT SPECIFICATIONS & <br/>
                    <span class="text-[#FF8B02] font-normal">MODULAR PRICING</span>
                </h1>
                <p class="text-slate-600 text-sm font-normal leading-relaxed">
                    Browse technical material grades, minimum order quantities, structural framing details, and PDF brochure spec sheets for Shallom prefabricated systems.
                </p>
            </div>

            <!-- Category Filter Pills -->
            <div class="flex items-center gap-2 overflow-x-auto w-full md:w-auto pb-2 md:pb-0 scrollbar-none shrink-0">
                <button wire:click="$set('activeCategory', 'all')" 
                        class="px-5 py-2.5 rounded-full text-xs font-bold transition-all border {{ $activeCategory === 'all' ? 'bg-[#FF8B02] text-white border-[#FF8B02] shadow-xs' : 'bg-[#FAF9F5] text-slate-700 border-slate-200/80 hover:bg-[#FFF4E5] hover:text-[#FF8B02]' }}">
                    All Products
                </button>
                <button wire:click="$set('activeCategory', 'houses')" 
                        class="px-5 py-2.5 rounded-full text-xs font-bold transition-all border {{ $activeCategory === 'houses' ? 'bg-[#FF8B02] text-white border-[#FF8B02] shadow-xs' : 'bg-[#FAF9F5] text-slate-700 border-slate-200/80 hover:bg-[#FFF4E5] hover:text-[#FF8B02]' }}">
                    Prefab Houses
                </button>
                <button wire:click="$set('activeCategory', 'offices')" 
                        class="px-5 py-2.5 rounded-full text-xs font-bold transition-all border {{ $activeCategory === 'offices' ? 'bg-[#FF8B02] text-white border-[#FF8B02] shadow-xs' : 'bg-[#FAF9F5] text-slate-700 border-slate-200/80 hover:bg-[#FFF4E5] hover:text-[#FF8B02]' }}">
                    Site Offices
                </button>
                <button wire:click="$set('activeCategory', 'structures')" 
                        class="px-5 py-2.5 rounded-full text-xs font-bold transition-all border {{ $activeCategory === 'structures' ? 'bg-[#FF8B02] text-white border-[#FF8B02] shadow-xs' : 'bg-[#FAF9F5] text-slate-700 border-slate-200/80 hover:bg-[#FFF4E5] hover:text-[#FF8B02]' }}">
                    Steel Sheds
                </button>
                <button wire:click="$set('activeCategory', 'hutments')" 
                        class="px-5 py-2.5 rounded-full text-xs font-bold transition-all border {{ $activeCategory === 'hutments' ? 'bg-[#FF8B02] text-white border-[#FF8B02] shadow-xs' : 'bg-[#FAF9F5] text-slate-700 border-slate-200/80 hover:bg-[#FFF4E5] hover:text-[#FF8B02]' }}">
                    Labour Camps
                </button>
            </div>
        </div>

        <!-- ELEGANT DETAILED PRODUCT CARDS LIST -->
        <div class="space-y-10">
            @foreach($products as $product)
                @if($activeCategory === 'all' || $activeCategory === $product['category'])
                    
                    <div x-data="{ activeImg: '{{ asset($product['main_image']) }}' }" 
                         class="bg-white rounded-2xl border border-slate-200/80 shadow-xs p-6 sm:p-10 space-y-8 hover:border-[#FF8B02]/50 hover:shadow-xl transition-all duration-300">
                        
                        <!-- 1. Card Top Bar: Product Name & Call Back Button -->
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-slate-100 pb-5">
                            <div class="space-y-1">
                                <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 tracking-tight">
                                    {{ $product['title'] }}
                                </h2>
                                <div class="flex items-center gap-2 text-xs text-slate-500 font-normal">
                                    <span>Brand: <strong class="text-slate-800">Shallom Prefab Systems</strong></span>
                                    <span>•</span>
                                    <span class="text-emerald-600 font-bold"><i class="ri-checkbox-circle-fill"></i> In Stock & Custom Order</span>
                                </div>
                            </div>

                            <a href="tel:+917942550323" 
                               class="inline-flex items-center gap-2 border border-[#FF8B02] text-[#FF8B02] hover:bg-[#FFF4E5] font-bold text-xs px-5 py-2.5 rounded-full transition-all uppercase tracking-wider shrink-0 self-start sm:self-auto">
                                <i class="ri-phone-line text-sm"></i>
                                Request Call Back
                            </a>
                        </div>

                        <!-- 2. Main Content Layout (Left Image Gallery + Right Specs Table) -->
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-start">
                            
                            <!-- LEFT COLUMN: Interactive Thumbnails + Main Showcase Photo + Quote Button -->
                            <div class="lg:col-span-5 space-y-5">
                                
                                <div class="flex gap-3 items-start">
                                    <!-- Clickable Thumbnails Column -->
                                    <div class="flex flex-col gap-3 shrink-0 w-20 sm:w-22">
                                        @foreach($product['gallery'] as $galleryImg)
                                            <button @click="activeImg = '{{ asset($galleryImg) }}'" 
                                                    :class="activeImg === '{{ asset($galleryImg) }}' ? 'border-2 border-[#FF8B02] ring-2 ring-[#FF8B02]/20' : 'border border-slate-200 opacity-75 hover:opacity-100'"
                                                    class="w-full aspect-[4/3] rounded-xl overflow-hidden bg-slate-100 transition-all focus:outline-none shadow-2xs">
                                                <img src="{{ asset($galleryImg) }}" alt="Gallery Thumbnail" class="w-full h-full object-cover">
                                            </button>
                                        @endforeach
                                    </div>

                                    <!-- Main Showcase Image -->
                                    <div class="flex-1 aspect-[4/3] rounded-2xl overflow-hidden border border-slate-200 bg-slate-900 relative shadow-inner group">
                                        <img :src="activeImg" alt="{{ $product['title'] }}" class="w-full h-full object-cover transition-all duration-300">
                                        <div class="absolute bottom-3 left-3 bg-slate-900/85 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1 rounded-full border border-white/20">
                                            <i class="ri-zoom-in-line mr-1"></i> High Resolution View
                                        </div>
                                    </div>
                                </div>

                                <!-- GET BEST QUOTE Button (Full Width Under Image) -->
                                <button wire:click="openEnquiryModal('{{ $product['title'] }}')"
                                        class="w-full bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold text-xs py-4 rounded-xl shadow-md shadow-orange-500/20 flex items-center justify-center gap-2 transition-all transform hover:-translate-y-0.5 uppercase tracking-wider">
                                    <i class="ri-mail-send-fill text-sm"></i>
                                    Get Best Quote
                                </button>

                            </div>

                            <!-- RIGHT COLUMN: Price Highlight, Specifications Table, Description & Primary CTA -->
                            <div class="lg:col-span-7 space-y-6">
                                
                                <!-- Price & Minimum Order Quantity Card -->
                                <div class="flex flex-wrap items-center justify-between gap-4 bg-[#FAF9F5] p-5 rounded-2xl border border-slate-200/80">
                                    <div>
                                        <span class="text-3xl font-extrabold text-slate-900">{{ $product['price'] }}</span>
                                        <span class="text-sm font-bold text-slate-600">/ {{ $product['price_unit'] }}</span>
                                        <a href="#contact" wire:click="openEnquiryModal('{{ $product['title'] }}')" class="text-xs font-bold text-[#FF8B02] underline hover:text-[#E67A00] ml-2">
                                            Price on Request
                                        </a>
                                    </div>
                                    <div class="text-xs font-bold text-slate-700 bg-white px-4 py-2 rounded-full border border-slate-200/80 shadow-2xs">
                                        MOQ: <strong class="text-slate-900">{{ $product['moq'] }}</strong>
                                    </div>
                                </div>

                                <!-- PDF Spec Sheet Download Link -->
                                <div>
                                    <a href="#contact" wire:click="openEnquiryModal('{{ $product['title'] }}')" 
                                       class="inline-flex items-center gap-2 text-xs font-bold text-slate-700 hover:text-[#FF8B02] bg-white hover:bg-[#FFF4E5] px-4 py-2.5 rounded-xl border border-slate-200/80 transition-colors">
                                        <i class="ri-file-pdf-fill text-red-500 text-base"></i>
                                        <span>Download Product Spec Sheet (PDF)</span>
                                    </a>
                                </div>

                                <!-- Clean Striped Technical Specifications Table -->
                                <div class="border border-slate-200/80 rounded-xl overflow-hidden shadow-2xs">
                                    <table class="w-full text-xs sm:text-sm text-left">
                                        <tbody class="divide-y divide-slate-100">
                                            @foreach($product['specs'] as $key => $val)
                                                <tr class="odd:bg-white even:bg-[#FAF9F5]/80 hover:bg-[#FFF4E5]/40 transition-colors">
                                                    <td class="px-4 py-2.5 font-bold text-slate-700 w-2/5 sm:w-1/3 border-r border-slate-100">{{ $key }}</td>
                                                    <td class="px-4 py-2.5 font-normal text-slate-900">{{ $val }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Description Paragraph -->
                                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
                                    {{ $product['description'] }}
                                </p>

                                <!-- YES! I AM INTERESTED Primary Button -->
                                <div class="pt-2">
                                    <button wire:click="openEnquiryModal('{{ $product['title'] }}')"
                                            class="w-full sm:w-auto min-w-[280px] border-2 border-[#FF8B02] text-[#FF8B02] hover:bg-[#FF8B02] hover:text-white font-extrabold text-xs px-8 py-3.5 rounded-full transition-all duration-300 shadow-md uppercase tracking-wider flex items-center justify-center gap-2">
                                        <i class="ri-send-plane-fill text-sm"></i>
                                        <span>YES! I AM INTERESTED</span>
                                    </button>
                                </div>

                            </div>

                        </div>

                    </div>

                @endif
            @endforeach
        </div>

    </div>

    <!-- ENQUIRY MODAL POPUP -->
    @if($showEnquiryModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs">
            <div class="bg-[#FAF9F5] rounded-2xl p-8 max-w-lg w-full border border-slate-200/80 shadow-2xl space-y-6 relative">
                
                <button wire:click="closeEnquiryModal" class="absolute top-4 right-4 p-2 text-slate-400 hover:text-slate-700">
                    <i class="ri-close-line text-2xl"></i>
                </button>

                @if($submitted)
                    <div class="text-center space-y-4 py-4">
                        <div class="w-14 h-14 bg-emerald-600 text-white rounded-full flex items-center justify-center mx-auto shadow-md">
                            <i class="ri-check-line text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Enquiry Received!</h3>
                        <p class="text-sm text-slate-600 font-normal">Our engineering team will call you back shortly for <strong>{{ $selectedProductForEnquiry }}</strong>.</p>
                        <button wire:click="closeEnquiryModal" class="bg-[#FF8B02] text-white font-bold px-6 py-2.5 rounded-full text-xs uppercase tracking-wider">
                            Done
                        </button>
                    </div>
                @else
                    <div class="space-y-1">
                        <div class="flex items-center gap-1.5 text-[#FF8B02] text-xs font-bold uppercase tracking-wider">
                            <i class="ri-mail-send-line"></i>
                            <span>INSTANT QUOTE REQUEST</span>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">{{ $selectedProductForEnquiry }}</h3>
                    </div>

                    <form wire:submit="submitModalEnquiry" class="space-y-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Full Name *</label>
                            <input type="text" wire:model="name" placeholder="Your Full Name" class="w-full bg-white border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#FF8B02] transition-colors">
                            @error('name') <span class="text-red-500 text-xs mt-0.5 block font-semibold">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Phone Number *</label>
                            <input type="tel" wire:model="phone" placeholder="Your 10-digit Phone" class="w-full bg-white border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#FF8B02] transition-colors">
                            @error('phone') <span class="text-red-500 text-xs mt-0.5 block font-semibold">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">City / Location</label>
                            <input type="text" wire:model="location" placeholder="e.g. Noida / Gurgaon / Delhi NCR" class="w-full bg-white border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-[#FF8B02] transition-colors">
                        </div>

                        <button type="submit" class="w-full bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold py-3.5 rounded-full shadow-md text-xs uppercase tracking-wider flex items-center justify-center gap-2">
                            <i class="ri-send-plane-fill text-sm"></i>
                            Submit Requirement Now
                        </button>
                    </form>
                @endif

            </div>
        </div>
    @endif

</div>