@section('title', 'Our Products & Prefab Ranges | Shallom Prefab Systems')
@section('meta_description', 'Explore our comprehensive range of prefabricated structures including modular prefab houses, executive site office cabins, labor hutments, steel buildings, and aerocon wall panels in India.')

<div class="py-6 sm:py-10 bg-[#FAF9F5] min-h-screen font-sans text-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-8">
        
        <!-- 1. ARCHITECTURAL STUDIO HERO BANNER -->
        <div class="bg-white rounded-2xl p-8 sm:p-12 border border-slate-200/80 shadow-xs flex flex-col md:flex-row items-center justify-between gap-8">
            <div class="space-y-4 max-w-3xl">
                <div class="flex items-center gap-2 text-[#FF8B02]">
                    <i class="ri-ruler-2-line text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">OUR RANGE & SPECIFICATIONS</span>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    PREFAB SOLUTIONS & <br/>
                    <span class="text-[#FF8B02] font-normal">OUR COMPLETE RANGE</span>
                </h1>
                <p class="text-slate-600 text-sm sm:text-base font-normal leading-relaxed">
                    Browse technical material grades, minimum order quantities, structural framing details, and PDF brochure spec sheets for Shallom prefabricated systems.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row md:flex-col gap-3 shrink-0 w-full md:w-auto">
                <a href="tel:{{ setting('landline', '07942550323') }}" 
                   class="inline-flex items-center justify-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-6 py-3 rounded-full shadow-md shadow-orange-500/20 text-xs uppercase tracking-wider transition-all">
                    <i class="ri-phone-fill text-sm"></i>
                    <span>Call {{ setting('landline', '07942550323') }}</span>
                </a>
                <button type="button" wire:click="openEnquiryModal('General Catalog Requirement')"
                        class="inline-flex items-center justify-center gap-2 border border-slate-300 hover:border-[#FF8B02] hover:text-[#FF8B02] text-slate-700 font-bold px-6 py-3 rounded-full text-xs uppercase tracking-wider transition-all cursor-pointer">
                    <i class="ri-mail-send-line text-sm"></i>
                    <span>Request Catalog Info</span>
                </button>
            </div>
        </div>

        <!-- 2. DYNAMIC CATEGORY FILTER NAVIGATION BAR -->
        <div class="bg-white rounded-2xl p-4 sm:p-5 border border-slate-200/80 shadow-xs flex flex-col sm:flex-row items-center justify-between gap-4">
            <div class="flex items-center gap-2 text-xs text-slate-600 font-medium">
                <i class="ri-filter-3-line text-[#FF8B02] text-sm"></i>
                <span class="font-bold text-slate-800">Filter by Product Category:</span>
            </div>

            <div class="flex items-center gap-2 overflow-x-auto w-full sm:w-auto pb-1 sm:pb-0 scrollbar-none">
                <button wire:click="$set('activeCategory', 'all')" 
                        class="px-5 py-2.5 rounded-full text-xs font-bold transition-all border shrink-0 cursor-pointer {{ $activeCategory === 'all' ? 'bg-[#FF8B02] text-white border-[#FF8B02] shadow-xs' : 'bg-[#FAF9F5] text-slate-700 border-slate-200/80 hover:bg-[#FFF4E5] hover:text-[#FF8B02]' }}">
                    All Ranges
                </button>
                @foreach($this->categories as $cat)
                    <button wire:click="$set('activeCategory', '{{ $cat->slug }}')" 
                            class="px-5 py-2.5 rounded-full text-xs font-bold transition-all border shrink-0 cursor-pointer {{ $activeCategory === $cat->slug ? 'bg-[#FF8B02] text-white border-[#FF8B02] shadow-xs' : 'bg-[#FAF9F5] text-slate-700 border-slate-200/80 hover:bg-[#FFF4E5] hover:text-[#FF8B02]' }}">
                        {{ $cat->name }}
                    </button>
                @endforeach
            </div>
        </div>

        <!-- 3. ELEGANT DETAILED PRODUCT CARDS LIST -->
        <div class="space-y-10">
            @forelse($this->products as $product)
                @php
                    $details = $product->details ?? [];
                    $price = $details['price'] ?? 'Price on Request';
                    $priceUnit = $details['price_unit'] ?? 'sq ft';
                    $moq = $details['moq'] ?? '1 sq ft';
                    $specs = $details['specs'] ?? [];
                    $images = $product->images ?? [];
                    $mainImage = !empty($images) && isset($images[0]) ? asset($images[0]) : asset('shallom/IMG-20260901-WA0009.jpg');
                    $gallery = !empty($images) ? $images : [$mainImage];
                @endphp

                <div x-data="{ activeImg: '{{ $mainImage }}' }" 
                     class="bg-white rounded-2xl border border-slate-200/80 shadow-xs p-6 sm:p-10 space-y-8 hover:border-[#FF8B02]/50 hover:shadow-xl transition-all duration-300">
                    
                    <!-- Card Top Bar: Product Name & Call Back Button -->
                    <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-slate-100 pb-5">
                        <div class="space-y-1">
                            <h2 class="text-2xl sm:text-3xl font-bold text-slate-900 tracking-tight">
                                {{ $product->title }}
                            </h2>
                            <div class="flex items-center gap-2 text-xs text-slate-500 font-normal">
                                <span>Brand: <strong class="text-slate-800">{{ setting('company_name', 'Shallom Prefab Systems') }}</strong></span>
                                <span>•</span>
                                <span class="text-emerald-600 font-bold"><i class="ri-checkbox-circle-fill"></i> In Stock & Custom Order</span>
                                @if($product->category)
                                    <span>•</span>
                                    <span class="text-slate-600 font-medium">{{ $product->category->name }}</span>
                                @endif
                            </div>
                        </div>

                        <a href="tel:{{ setting('landline', '07942550323') }}" 
                           class="inline-flex items-center gap-2 border border-[#FF8B02] text-[#FF8B02] hover:bg-[#FFF4E5] font-bold text-xs px-5 py-2.5 rounded-full transition-all uppercase tracking-wider shrink-0 self-start sm:self-auto">
                            <i class="ri-phone-line text-sm"></i>
                            Request Call Back
                        </a>
                    </div>

                    <!-- Main Content Layout (Left Photo Showcase + Right Specs Table) -->
                    <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 lg:gap-10 items-start">
                        
                        <!-- LEFT COLUMN: Photo Gallery Showcase + Quote Button -->
                        <div class="lg:col-span-5 space-y-5">
                            
                            @if(count($gallery) > 1)
                                <div class="flex gap-3 items-start">
                                    <!-- Clickable Thumbnails Column -->
                                    <div class="flex flex-col gap-3 shrink-0 w-20 sm:w-22">
                                        @foreach($gallery as $galleryImg)
                                            <button @click="activeImg = '{{ asset($galleryImg) }}'" 
                                                    :class="activeImg === '{{ asset($galleryImg) }}' ? 'border-2 border-[#FF8B02] ring-2 ring-[#FF8B02]/20' : 'border border-slate-200 opacity-75 hover:opacity-100'"
                                                    class="w-full aspect-[4/3] rounded-xl overflow-hidden bg-slate-100 transition-all focus:outline-none shadow-2xs cursor-pointer">
                                                <img src="{{ asset($galleryImg) }}" alt="Gallery Thumbnail" class="w-full h-full object-cover">
                                            </button>
                                        @endforeach
                                    </div>

                                    <!-- Main Showcase Image -->
                                    <div class="flex-1 aspect-[4/3] rounded-2xl overflow-hidden border border-slate-200 bg-slate-900 relative shadow-inner group">
                                        <img :src="activeImg" alt="{{ $product->title }}" class="w-full h-full object-cover transition-all duration-300">
                                        <div class="absolute bottom-3 left-3 bg-slate-900/85 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1 rounded-full border border-white/20">
                                            <i class="ri-zoom-in-line mr-1"></i> High Resolution View
                                        </div>
                                    </div>
                                </div>
                            @else
                                <!-- Single Showcase Image -->
                                <div class="w-full aspect-[4/3] rounded-2xl overflow-hidden border border-slate-200 bg-slate-900 relative shadow-inner group">
                                    <img :src="activeImg" alt="{{ $product->title }}" class="w-full h-full object-cover transition-all duration-300">
                                    <div class="absolute bottom-3 left-3 bg-slate-900/85 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1 rounded-full border border-white/20">
                                        <i class="ri-zoom-in-line mr-1"></i> High Resolution View
                                    </div>
                                </div>
                            @endif

                            <!-- GET BEST QUOTE Button (Full Width Under Image) -->
                            <button wire:click="openEnquiryModal('{{ $product->title }}')"
                                    class="w-full bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold text-xs py-4 rounded-xl shadow-md shadow-orange-500/20 flex items-center justify-center gap-2 transition-all transform hover:-translate-y-0.5 uppercase tracking-wider cursor-pointer">
                                <i class="ri-mail-send-fill text-sm"></i>
                                Get Best Quote
                            </button>

                        </div>

                        <!-- RIGHT COLUMN: Price Highlight, Specifications Table, Description & Primary CTA -->
                        <div class="lg:col-span-7 space-y-6">
                            
                            <!-- Price on Request & Minimum Order Quantity Card -->
                            <div class="flex flex-wrap items-center justify-between gap-4 bg-[#FAF9F5] p-5 rounded-2xl border border-slate-200/80">
                                <div class="flex items-center gap-3">
                                    <span class="text-2xl font-extrabold text-slate-900">Price on Request</span>
                                    <button type="button" wire:click="openEnquiryModal('{{ $product->title }}')" class="inline-flex items-center gap-1 text-xs font-bold text-[#FF8B02] hover:text-[#E67A00] bg-[#FFF4E5] px-3.5 py-1.5 rounded-full border border-[#FFD199] transition-colors cursor-pointer">
                                        <i class="ri-mail-send-line"></i> Get Quote
                                    </button>
                                </div>
                                <div class="text-xs font-bold text-slate-700 bg-white px-4 py-2 rounded-full border border-slate-200/80 shadow-2xs">
                                    MOQ: <strong class="text-slate-900">{{ $moq }}</strong>
                                </div>
                            </div>

                            <!-- PDF Spec Sheet Download Link -->
                            <div>
                                @if($product->pdf)
                                    <a href="{{ asset($product->pdf) }}" target="_blank" 
                                       class="inline-flex items-center gap-2 text-xs font-bold text-slate-700 hover:text-[#FF8B02] bg-white hover:bg-[#FFF4E5] px-4 py-2.5 rounded-xl border border-slate-200/80 transition-colors">
                                        <i class="ri-file-pdf-fill text-red-500 text-base"></i>
                                        <span>Download Product Spec Sheet (PDF)</span>
                                    </a>
                                @else
                                    <button wire:click="openEnquiryModal('{{ $product->title }}')" 
                                            class="inline-flex items-center gap-2 text-xs font-bold text-slate-700 hover:text-[#FF8B02] bg-white hover:bg-[#FFF4E5] px-4 py-2.5 rounded-xl border border-slate-200/80 transition-colors cursor-pointer">
                                        <i class="ri-file-pdf-fill text-red-500 text-base"></i>
                                        <span>Download Product Spec Sheet (PDF)</span>
                                    </button>
                                @endif
                            </div>

                            <!-- Clean Striped Technical Specifications Table -->
                            @if(!empty($specs))
                                <div class="border border-slate-200/80 rounded-xl overflow-hidden shadow-2xs">
                                    <table class="w-full text-xs sm:text-sm text-left">
                                        <tbody class="divide-y divide-slate-100">
                                            @foreach($specs as $key => $val)
                                                <tr class="odd:bg-white even:bg-[#FAF9F5]/80 hover:bg-[#FFF4E5]/40 transition-colors">
                                                    <td class="px-4 py-2.5 font-bold text-slate-700 w-2/5 sm:w-1/3 border-r border-slate-100">{{ $key }}</td>
                                                    <td class="px-4 py-2.5 font-normal text-slate-900">{{ $val }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                            @endif

                            <!-- Description Paragraph -->
                            <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-normal">
                                {{ $product->description }}
                            </p>

                            <!-- YES! I AM INTERESTED Primary Button -->
                            <div class="pt-2">
                                <button wire:click="openEnquiryModal('{{ $product->title }}')"
                                        class="w-full sm:w-auto min-w-[280px] border-2 border-[#FF8B02] text-[#FF8B02] hover:bg-[#FF8B02] hover:text-white font-extrabold text-xs px-8 py-3.5 rounded-full transition-all duration-300 shadow-md uppercase tracking-wider flex items-center justify-center gap-2 cursor-pointer">
                                    <i class="ri-send-plane-fill text-sm"></i>
                                    <span>YES! I AM INTERESTED</span>
                                </button>
                            </div>

                        </div>

                    </div>

                </div>

            @empty
                <div class="bg-white rounded-2xl border border-slate-200/80 p-12 text-center text-slate-500 space-y-3">
                    <i class="ri-box-3-line text-4xl text-slate-300"></i>
                    <h3 class="text-lg font-bold text-slate-800">No Products Available</h3>
                    <p class="text-xs text-slate-500">No active products match the selected category filter.</p>
                </div>
            @endforelse
        </div>

    </div>

    <!-- ENQUIRY MODAL POPUP -->
    @if($showEnquiryModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs">
            <div class="bg-[#FAF9F5] rounded-2xl p-8 max-w-lg w-full border border-slate-200/80 shadow-2xl space-y-6 relative">
                
                <button wire:click="closeEnquiryModal" class="absolute top-4 right-4 p-2 text-slate-400 hover:text-slate-700 cursor-pointer">
                    <i class="ri-close-line text-2xl"></i>
                </button>

                @if($submitted)
                    <div class="text-center space-y-4 py-4">
                        <div class="w-14 h-14 bg-emerald-600 text-white rounded-full flex items-center justify-center mx-auto shadow-md">
                            <i class="ri-check-line text-2xl"></i>
                        </div>
                        <h3 class="text-2xl font-bold text-slate-900">Enquiry Received!</h3>
                        <p class="text-sm text-slate-600 font-normal">Our engineering team will call you back shortly for <strong>{{ $selectedProductForEnquiry }}</strong>.</p>
                        <button wire:click="closeEnquiryModal" class="bg-[#FF8B02] text-white font-bold px-6 py-2.5 rounded-full text-xs uppercase tracking-wider cursor-pointer">
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

                        <button type="submit" class="w-full bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold py-3.5 rounded-full shadow-md text-xs uppercase tracking-wider flex items-center justify-center gap-2 cursor-pointer">
                            <i class="ri-send-plane-fill text-sm"></i>
                            Submit Requirement Now
                        </button>
                    </form>
                @endif

            </div>
        </div>
    @endif

</div>