@section('title', ($currentVertical['title'] ?? 'Engineering Service Detail') . ' | Shallom Prefab Systems')
@section('meta_description', Str::limit(strip_tags($currentVertical['summary'] ?? $currentVertical['tagline'] ?? 'Specialized prefabricated building and modular structure engineering service by Shallom Prefab Systems.'), 160))

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
        <div class="bg-white rounded-2xl p-8 sm:p-10 border border-slate-200/80 shadow-xs flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="space-y-3 max-w-3xl">
                <!-- Breadcrumb -->
                <div class="flex items-center gap-2 text-xs font-semibold text-slate-500 flex-wrap">
                    <a href="{{ route('home') }}" class="hover:text-[#FF8B02] transition-colors flex items-center gap-1">
                        <i class="ri-home-4-line"></i> Home
                    </a>
                    <span>/</span>
                    <a href="{{ route('services') }}" class="hover:text-[#FF8B02] transition-colors">
                        Services
                    </a>
                    <span>/</span>
                    <span class="text-[#FF8B02] font-bold">{{ $currentVertical['title'] ?? 'Service Detail' }}</span>
                </div>

                <h1 class="text-3xl sm:text-4xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    {{ $currentVertical['title'] ?? 'Service Title' }}
                </h1>
                <p class="text-xs font-bold text-[#FF8B02] uppercase tracking-wider">
                    {{ $currentVertical['tagline'] ?? 'Pre-Engineered Turnkey Solution' }}
                </p>
                @if(isset($currentVertical['summary']))
                    <p class="text-slate-600 text-xs sm:text-sm font-normal leading-relaxed">
                        {{ $currentVertical['summary'] }}
                    </p>
                @endif
            </div>

            <div class="flex flex-col sm:flex-row md:flex-col gap-3 shrink-0 w-full md:w-auto">
                <a href="tel:{{ setting('landline', '07942550323') }}" 
                   class="inline-flex items-center justify-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-6 py-3 rounded-full shadow-md shadow-orange-500/20 text-xs uppercase tracking-wider transition-all">
                    <i class="ri-phone-fill text-sm"></i>
                    <span>Call: {{ setting('landline', '07942550323') }}</span>
                </a>
                <a href="#inquiry-form" 
                   class="inline-flex items-center justify-center gap-2 border border-slate-300 hover:border-[#FF8B02] hover:text-[#FF8B02] text-slate-700 font-bold px-6 py-3 rounded-full text-xs uppercase tracking-wider transition-all">
                    <span>Send Enquiry</span>
                    <i class="ri-arrow-down-line text-sm"></i>
                </a>
            </div>
        </div>

        <!-- 2. MAIN CONTENT (8 COLS) & SIDEBAR FORM (4 COLS) GRID -->
        <div class="grid grid-cols-1 lg:grid-cols-12 gap-8 items-start">
            
            <!-- LEFT COLUMN: DYNAMIC CONTENT CONTAINER (TINYMCE READY) -->
            <div class="lg:col-span-8 space-y-8">
                
                <div class="bg-white rounded-3xl p-6 sm:p-10 border border-slate-200/80 shadow-xs space-y-6">
                    
                    @if(isset($currentVertical['image']))
                        <div class="relative h-64 sm:h-80 w-full rounded-2xl overflow-hidden bg-slate-900 shadow-sm">
                            <img src="{{ Str::startsWith($currentVertical['image'], 'http') ? $currentVertical['image'] : asset(ltrim($currentVertical['image'], '/')) }}" 
                                 alt="{{ $currentVertical['title'] ?? 'Service Image' }}" 
                                 class="w-full h-full object-cover">
                        </div>
                    @endif

                    <!-- TINYMCE DYNAMIC HTML OUTPUT CONTAINER -->
                    <div class="prose prose-slate max-w-none text-slate-700 text-sm sm:text-base leading-relaxed">
                        @if(isset($currentVertical['content']))
                            {!! $currentVertical['content'] !!}
                        @else
                            <p>{{ $currentVertical['summary'] ?? 'Service content description...' }}</p>
                        @endif
                    </div>

                    <!-- SUB-OFFERINGS LIST (IF PRESENT) -->
                    @if(isset($currentVertical['sub_offerings']) && count($currentVertical['sub_offerings']) > 0)
                        <div class="pt-6 border-t border-slate-100 space-y-4">
                            <h3 class="text-xl font-bold text-slate-900">Key Sub-Offerings</h3>
                            <div class="grid grid-cols-1 sm:grid-cols-2 gap-4">
                                @foreach($currentVertical['sub_offerings'] as $sub)
                                    <div class="bg-[#FAF9F5] p-5 rounded-2xl border border-slate-200/80 space-y-2">
                                        <div class="flex items-center gap-2 font-bold text-slate-900 text-sm">
                                            <i class="ri-checkbox-circle-fill text-[#FF8B02]"></i>
                                            <span>{{ $sub['name'] }}</span>
                                        </div>
                                        <p class="text-xs text-slate-600 font-normal leading-relaxed">
                                            {{ $sub['desc'] }}
                                        </p>
                                    </div>
                                @endforeach
                            </div>
                        </div>
                    @endif

                    <!-- TECHNICAL SPECS TABLE (IF PRESENT) -->
                    @if(isset($currentVertical['specs']) && count($currentVertical['specs']) > 0)
                        <div class="pt-6 border-t border-slate-100 space-y-4">
                            <h3 class="text-xl font-bold text-slate-900">Technical Specifications</h3>
                            <div class="overflow-x-auto rounded-2xl border border-slate-200/80">
                                <table class="w-full text-left text-xs sm:text-sm">
                                    <tbody class="divide-y divide-slate-200">
                                        @foreach($currentVertical['specs'] as $specKey => $specVal)
                                            <tr class="hover:bg-[#FAF9F5]">
                                                <td class="py-3 px-5 font-bold text-slate-900 w-1/3 bg-slate-50">{{ $specKey }}</td>
                                                <td class="py-3 px-5 text-slate-700 font-medium w-2/3">{{ $specVal }}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    @endif

                </div>

            </div>

            <!-- RIGHT COLUMN: STICKY REQUIREMENT FORM & CONTACT SIDEBAR -->
            <div id="inquiry-form" class="lg:col-span-4 space-y-6 sticky top-28">
                
                <!-- BOQ REQUIREMENT FORM CARD -->
                <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-xs space-y-5">
                    <div class="border-b border-slate-100 pb-3">
                        <div class="flex items-center gap-2 text-[#FF8B02]">
                            <i class="ri-mail-send-fill text-lg"></i>
                            <span class="text-xs font-bold uppercase tracking-widest">GET BOQ QUOTE</span>
                        </div>
                        <h3 class="text-xl font-bold text-slate-900 mt-1">Project Enquiry</h3>
                        <p class="text-xs text-slate-500 font-normal">Send your project details for quick estimations.</p>
                    </div>

                    <form action="{{ route('contact') }}" method="GET" class="space-y-3">
                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Your Name *</label>
                            <input type="text" required placeholder="e.g. Vikram Sharma" class="w-full bg-[#FAF9F5] border border-slate-200 rounded-xl px-3.5 py-2.5 text-xs text-slate-900 focus:outline-none focus:border-[#FF8B02]">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Phone Number *</label>
                            <input type="tel" required placeholder="e.g. 9876543210" class="w-full bg-[#FAF9F5] border border-slate-200 rounded-xl px-3.5 py-2.5 text-xs text-slate-900 focus:outline-none focus:border-[#FF8B02]">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Project Location</label>
                            <input type="text" placeholder="e.g. Delhi NCR / Shimla" class="w-full bg-[#FAF9F5] border border-slate-200 rounded-xl px-3.5 py-2.5 text-xs text-slate-900 focus:outline-none focus:border-[#FF8B02]">
                        </div>

                        <div>
                            <label class="block text-xs font-bold text-slate-700 mb-1">Requirements / Scope</label>
                            <textarea rows="3" placeholder="Describe size, timeline, or requirements..." class="w-full bg-[#FAF9F5] border border-slate-200 rounded-xl px-3.5 py-2.5 text-xs text-slate-900 focus:outline-none focus:border-[#FF8B02]"></textarea>
                        </div>

                        <button type="submit" class="w-full bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold py-3 rounded-xl shadow-md text-xs uppercase tracking-wider transition-all flex items-center justify-center gap-2">
                            <i class="ri-send-plane-fill text-sm"></i>
                            <span>Submit Enquiry</span>
                        </button>
                    </form>
                </div>

                <!-- ALL SERVICES SWITCHER WIDGET -->
                @if(isset($allVerticals) && count($allVerticals) > 0)
                    <div class="bg-white rounded-3xl p-6 border border-slate-200/80 shadow-xs space-y-3">
                        <div class="text-xs font-bold text-slate-400 uppercase tracking-widest border-b border-slate-100 pb-2">Other Services</div>
                        <div class="space-y-1.5">
                            @foreach($allVerticals as $itemSlug => $item)
                                <a href="{{ route('service.show', ['slug' => $itemSlug]) }}" 
                                   class="block p-3 rounded-xl transition-all border text-xs font-bold flex items-center justify-between gap-2 {{ $itemSlug === ($slug ?? '') ? 'bg-[#FF8B02] text-white border-[#FF8B02] shadow-xs' : 'bg-[#FAF9F5] text-slate-700 border-slate-200 hover:border-[#FF8B02] hover:text-[#FF8B02]' }}">
                                    <span>{{ $item['title'] }}</span>
                                    <i class="ri-arrow-right-s-line text-base shrink-0"></i>
                                </a>
                            @endforeach
                        </div>
                    </div>
                @endif

            </div>

        </div>

    </div>
</div>