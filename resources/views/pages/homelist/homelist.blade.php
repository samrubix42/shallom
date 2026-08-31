<div class="py-12 bg-slate-50 min-h-screen font-sans text-slate-800">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 space-y-12">
        
        <!-- Page Banner Header -->
        <div class="bg-white rounded-3xl p-8 border border-slate-200 shadow-sm flex flex-col md:flex-row items-center justify-between gap-6">
            <div>
                <span class="inline-block bg-[#FFF4E5] border border-[#FFD199] text-[#FF8B02] text-xs font-extrabold uppercase tracking-wider px-3.5 py-1.5 rounded-full mb-3">
                    SHALLOM PREFAB PRODUCT CATALOG
                </span>
                <h1 class="text-3xl sm:text-4xl font-black text-slate-900 tracking-tight">Detailed Product Specifications & Pricing</h1>
                <p class="text-slate-600 text-sm font-medium mt-1">Browse technical specifications, material grades, minimum order quantities, and custom floorplan options.</p>
            </div>

            <!-- Category Filter Pills -->
            <div class="flex items-center gap-2 overflow-x-auto w-full md:w-auto pb-2 md:pb-0 scrollbar-none shrink-0">
                <button wire:click="$set('activeCategory', 'all')" 
                        class="px-4 py-2 rounded-full text-xs font-extrabold transition-all border {{ $activeCategory === 'all' ? 'bg-[#FF8B02] text-white border-[#FF8B02] shadow-sm' : 'bg-slate-100 text-slate-700 border-slate-200 hover:bg-slate-200' }}">
                    All Products
                </button>
                <button wire:click="$set('activeCategory', 'houses')" 
                        class="px-4 py-2 rounded-full text-xs font-extrabold transition-all border {{ $activeCategory === 'houses' ? 'bg-[#FF8B02] text-white border-[#FF8B02] shadow-sm' : 'bg-slate-100 text-slate-700 border-slate-200 hover:bg-slate-200' }}">
                    Prefab Houses
                </button>
                <button wire:click="$set('activeCategory', 'offices')" 
                        class="px-4 py-2 rounded-full text-xs font-extrabold transition-all border {{ $activeCategory === 'offices' ? 'bg-[#FF8B02] text-white border-[#FF8B02] shadow-sm' : 'bg-slate-100 text-slate-700 border-slate-200 hover:bg-slate-200' }}">
                    Site Offices
                </button>
                <button wire:click="$set('activeCategory', 'structures')" 
                        class="px-4 py-2 rounded-full text-xs font-extrabold transition-all border {{ $activeCategory === 'structures' ? 'bg-[#FF8B02] text-white border-[#FF8B02] shadow-sm' : 'bg-slate-100 text-slate-700 border-slate-200 hover:bg-slate-200' }}">
                    Steel Sheds
                </button>
            </div>
        </div>

        <!-- LIST OF DETAILED PRODUCT CARDS (Matching Screenshot Layout) -->
        <div class="space-y-10">
            @foreach($products as $product)
                @if($activeCategory === 'all' || $activeCategory === $product['category'])
                    
                    <div x-data="{ activeImg: '{{ asset($product['main_image']) }}' }" 
                         class="bg-white rounded-3xl border border-slate-200/90 shadow-lg p-6 sm:p-8 space-y-6 hover:border-[#FF8B02]/50 transition-all duration-300">
                        
                        <!-- 1. Top Header: Product Title & Request Call Back Button (Matching Screenshot) -->
                        <div class="flex flex-col sm:flex-row sm:items-center justify-between gap-4 border-b border-slate-100 pb-4">
                            <h2 class="text-2xl sm:text-3xl font-black text-slate-900 tracking-tight">
                                {{ $product['title'] }}
                            </h2>

                            <a href="tel:+917942550323" 
                               class="inline-flex items-center gap-2 border-2 border-[#FF8B02] text-[#FF8B02] hover:bg-[#FFF4E5] font-extrabold text-xs px-5 py-2.5 rounded-full transition-all uppercase tracking-wider shrink-0 self-start sm:self-auto">
                                <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2.5" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.13a11.042 11.042 0 005.516 5.516l1.13-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"/></svg>
                                Request A Call Back
                            </a>
                        </div>

                        <!-- 2. Main Content Grid (Left Images + Right Specs Table) -->
                        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
                            
                            <!-- LEFT COLUMN: Image Gallery & Get Best Quote Button -->
                            <div class="lg:col-span-5 space-y-4">
                                
                                <div class="flex gap-3 items-start">
                                    <!-- Vertical Thumbnails Selector (Left) -->
                                    <div class="flex flex-col gap-2.5 shrink-0 w-20">
                                        @foreach($product['gallery'] as $galleryImg)
                                            <button @click="activeImg = '{{ asset($galleryImg) }}'" 
                                                    :class="activeImg === '{{ asset($galleryImg) }}' ? 'border-2 border-[#FF8B02] ring-2 ring-[#FF8B02]/30 scale-105' : 'border border-slate-200 opacity-70 hover:opacity-100'"
                                                    class="w-full aspect-[4/3] rounded-xl overflow-hidden bg-slate-100 transition-all focus:outline-none">
                                                <img src="{{ asset($galleryImg) }}" alt="Thumbnail" class="w-full h-full object-cover">
                                            </button>
                                        @endforeach
                                    </div>

                                    <!-- Main Image Preview (Right) -->
                                    <div class="flex-1 aspect-[4/3] rounded-2xl overflow-hidden border border-slate-200 bg-slate-900 relative shadow-inner">
                                        <img :src="activeImg" alt="{{ $product['title'] }}" class="w-full h-full object-cover transition-all duration-300">
                                        <div class="absolute bottom-3 left-3 bg-slate-900/80 backdrop-blur-md text-white text-[10px] font-bold px-3 py-1 rounded-full">
                                            High Resolution Preview
                                        </div>
                                    </div>
                                </div>

                                <!-- GET BEST QUOTE Button Under Left Image (Matching Screenshot) -->
                                <button wire:click="openEnquiryModal('{{ $product['title'] }}')"
                                        class="w-full bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold text-sm py-3.5 rounded-2xl shadow-lg shadow-orange-500/20 flex items-center justify-center gap-2 transition-all transform hover:-translate-y-0.5 uppercase tracking-wider">
                                    <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"/></svg>
                                    Get Best Quote
                                </button>

                            </div>

                            <!-- RIGHT COLUMN: Price, Specs Table, Description & Primary CTA -->
                            <div class="lg:col-span-7 space-y-6">
                                
                                <!-- Price & MOQ Row -->
                                <div class="flex flex-wrap items-baseline justify-between gap-3 bg-slate-50 p-4 rounded-2xl border border-slate-200">
                                    <div>
                                        <span class="text-2xl sm:text-3xl font-black text-slate-900">{{ $product['price'] }}</span>
                                        <span class="text-sm font-bold text-slate-600">/ {{ $product['price_unit'] }}</span>
                                        <a href="#contact" wire:click="openEnquiryModal('{{ $product['title'] }}')" class="text-xs font-bold text-[#FF8B02] underline hover:text-[#E67A00] ml-2">
                                            Price on Request
                                        </a>
                                    </div>
                                    <div class="text-xs font-semibold text-slate-600 bg-white px-3 py-1.5 rounded-full border border-slate-200">
                                        Minimum Order Quantity: <strong class="text-slate-900">{{ $product['moq'] }}</strong>
                                    </div>
                                </div>

                                <!-- PDF Brochure Download Link -->
                                <div>
                                    <a href="#contact" wire:click="openEnquiryModal('{{ $product['title'] }}')" 
                                       class="inline-flex items-center gap-2 text-xs font-extrabold text-slate-700 hover:text-[#FF8B02] bg-slate-100 hover:bg-[#FFF4E5] px-3.5 py-1.5 rounded-lg border border-slate-200 transition-colors">
                                        <svg class="w-4 h-4 text-red-600" fill="currentColor" viewBox="0 0 24 24"><path d="M12 16l-4-4h3V4h2v8h3l-4 4zm9-4v8H3v-8H1v8c0 1.1.9 2 2 2h18c1.1 0 2-.9 2-2v-8h-2z"/></svg>
                                        Download Product Brochure (PDF)
                                    </a>
                                </div>

                                <!-- Technical Specifications Table (Matching Screenshot) -->
                                <div class="border border-slate-200 rounded-2xl overflow-hidden shadow-2xs">
                                    <table class="w-full text-xs sm:text-sm text-left">
                                        <tbody class="divide-y divide-slate-100">
                                            @foreach($product['specs'] as $key => $val)
                                                <tr class="odd:bg-white even:bg-slate-50/70 hover:bg-[#FFF4E5]/40 transition-colors">
                                                    <td class="px-4 py-2.5 font-bold text-slate-700 w-2/5 sm:w-1/3 border-r border-slate-100">{{ $key }}</td>
                                                    <td class="px-4 py-2.5 font-medium text-slate-900">{{ $val }}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>

                                <!-- Description Paragraph -->
                                <p class="text-xs sm:text-sm text-slate-600 leading-relaxed font-medium">
                                    {{ $product['description'] }}
                                </p>

                                <!-- YES! I AM INTERESTED Primary Button (Matching Screenshot) -->
                                <div class="pt-2">
                                    <button wire:click="openEnquiryModal('{{ $product['title'] }}')"
                                            class="w-full sm:w-auto min-w-[280px] border-2 border-[#FF8B02] text-[#FF8B02] hover:bg-[#FF8B02] hover:text-white font-black text-sm px-8 py-3.5 rounded-full transition-all duration-300 shadow-md uppercase tracking-wider">
                                        YES! I AM INTERESTED
                                    </button>
                                </div>

                            </div>

                        </div>

                    </div>

                @endif
            @endforeach
        </div>

    </div>

    <!-- ENQUIRY POPUP MODAL -->
    @if($showEnquiryModal)
        <div class="fixed inset-0 z-50 flex items-center justify-center p-4 bg-slate-900/60 backdrop-blur-xs">
            <div class="bg-white rounded-3xl p-8 max-w-lg w-full border border-slate-200 shadow-2xl space-y-6 relative">
                
                <button wire:click="closeEnquiryModal" class="absolute top-4 right-4 p-2 text-slate-400 hover:text-slate-700">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"/></svg>
                </button>

                @if($submitted)
                    <div class="text-center space-y-4 py-4">
                        <div class="w-14 h-14 bg-emerald-600 text-white rounded-full flex items-center justify-center mx-auto">
                            <svg class="w-8 h-8" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="3" d="M5 13l4 4L19 7"/></svg>
                        </div>
                        <h3 class="text-2xl font-black text-slate-900">Enquiry Received!</h3>
                        <p class="text-sm text-slate-600">Our engineering team will call you back shortly for <strong>{{ $selectedProductForEnquiry }}</strong>.</p>
                        <button wire:click="closeEnquiryModal" class="bg-[#FF8B02] text-white font-bold px-6 py-2 rounded-full text-xs">
                            Done
                        </button>
                    </div>
                @else
                    <div class="space-y-2">
                        <span class="text-xs font-bold text-[#FF8B02] uppercase tracking-wider">Instant Quote Request</span>
                        <h3 class="text-2xl font-black text-slate-900">{{ $selectedProductForEnquiry }}</h3>
                    </div>

                    <form wire:submit="submitModalEnquiry" class="space-y-4">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Full Name *</label>
                            <input type="text" wire:model="name" placeholder="Your Name" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#FF8B02]">
                            @error('name') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Phone Number *</label>
                            <input type="tel" wire:model="phone" placeholder="Your 10-digit Phone" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-2.5 text-sm focus:outline-none focus:border-[#FF8B02]">
                            @error('phone') <span class="text-red-500 text-xs">{{ $message }}</span> @enderror
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">City / Location</label>
                            <input type="text" wire:model="location" placeholder="e.g. Delhi NCR" class="w-full bg-slate-50 border border-slate-200 rounded-xl px-4 py-3 text-sm focus:outline-none focus:border-[#FF8B02]">
                        </div>

                        <button type="submit" class="w-full bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold py-3.5 rounded-full shadow-md text-sm uppercase tracking-wider">
                            Submit Requirement Now
                        </button>
                    </form>
                @endif

            </div>
        </div>
    @endif

</div>