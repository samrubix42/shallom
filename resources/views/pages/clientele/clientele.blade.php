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
                    <i class="ri-building-3-line text-lg"></i>
                    <span class="text-xs font-bold uppercase tracking-widest">OUR VALUED CLIENTELE</span>
                </div>
                <h1 class="text-3xl sm:text-4xl lg:text-5xl font-light text-slate-800 tracking-tight leading-[1.18]">
                    OUR CLIENTS & <br/>
                    <span class="text-[#FF8B02] font-normal">VALUED PARTNERS</span>
                </h1>
                <p class="text-slate-600 text-sm sm:text-base font-normal leading-relaxed">
                    Prominent corporate conglomerates, infrastructure giants, and government PSUs powered by Shallom Prefab Systems.
                </p>
            </div>

            <div class="flex flex-col sm:flex-row md:flex-col gap-3 shrink-0 w-full md:w-auto">
                <a href="tel:{{ setting('landline', '07942550323') }}" 
                   class="inline-flex items-center justify-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-6 py-3 rounded-full shadow-md shadow-orange-500/20 text-xs uppercase tracking-wider transition-all">
                    <i class="ri-phone-fill text-sm"></i>
                    <span>{{ setting('landline', '07942550323') }}</span>
                </a>
                <a href="{{ route('contact') }}" 
                   class="inline-flex items-center justify-center gap-2 border border-slate-300 hover:border-[#FF8B02] hover:text-[#FF8B02] text-slate-700 font-bold px-6 py-3 rounded-full text-xs uppercase tracking-wider transition-all">
                    <span>Contact Us</span>
                    <i class="ri-mail-send-fill text-sm"></i>
                </a>
            </div>
        </div>

        <!-- 2. HIGH-IMPACT CLIENT LOGO SHOWCASE GRID -->
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6 sm:gap-8">
            @for($i = 1; $i <= 14; $i++)
                @php
                    $ext = in_array($i, [7, 10, 12]) ? 'png' : 'jpg';
                @endphp
                <div class="bg-white rounded-3xl p-6 sm:p-8 border border-slate-200/80 shadow-md hover:shadow-2xl hover:border-[#FF8B02] hover:shadow-orange-500/10 hover:-translate-y-1.5 transition-all duration-300 flex flex-col items-center justify-between h-52 sm:h-60 group relative overflow-hidden reveal-on-scroll">
                    <!-- Subtle Partner Badge -->
                    <div class="w-full flex items-center justify-between text-[11px] font-extrabold text-slate-400 uppercase tracking-widest border-b border-slate-100 pb-2">
                        <span class="group-hover:text-[#FF8B02] transition-colors">PARTNER {{ str_pad($i, 2, '0', STR_PAD_LEFT) }}</span>
                        <i class="ri-checkbox-circle-fill text-emerald-500 opacity-0 group-hover:opacity-100 transition-opacity"></i>
                    </div>

                    <!-- Client Logo Image Container -->
                    <div class="w-full h-full flex items-center justify-center py-3">
                        <img src="{{ asset('clients/Picture' . $i . '.' . $ext) }}" 
                             alt="Shallom Prefab Client Partner {{ $i }}" 
                             class="max-h-full max-w-full object-contain group-hover:scale-110 transition-transform duration-300">
                    </div>
                </div>
            @endfor
        </div>

        <!-- 3. SIMPLE BOTTOM CTA -->
        <div class="bg-slate-900 text-white rounded-3xl p-8 sm:p-10 shadow-2xl flex flex-col md:flex-row items-center justify-between gap-6">
            <div class="space-y-2 max-w-2xl">
                <h2 class="text-2xl font-light tracking-tight">
                    Interested in Partnering with <span class="text-[#FF8B02] font-normal">Shallom Prefab Systems?</span>
                </h2>
                <p class="text-slate-300 text-xs sm:text-sm font-normal">
                    Contact our Delhi NCR engineering studio for turnkey pre-engineered project inquiries.
                </p>
            </div>

            <a href="{{ route('contact') }}" 
               class="inline-flex items-center justify-center gap-2 bg-[#FF8B02] hover:bg-[#E67A00] text-white font-extrabold px-8 py-3.5 rounded-full shadow-lg shadow-orange-500/20 text-xs uppercase tracking-wider transition-all shrink-0">
                <span>Send Project Enquiry</span>
                <i class="ri-arrow-right-line text-sm"></i>
            </a>
        </div>

    </div>
</div>