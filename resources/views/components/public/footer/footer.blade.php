<footer class="bg-slate-50 text-slate-700 pt-16 pb-8 border-t border-slate-200">
    <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        
     

        <!-- Main Footer Links Grid -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10 pb-12 border-b border-slate-200">
            
            <!-- Column 1: Company Profile with logo.webp -->
            <div class="lg:col-span-2 space-y-4">
                <a href="{{ route('home') }}" class="inline-block">
                    <img src="{{ asset('logo.webp') }}" 
                         alt="Shallom Prefab Systems Logo" 
                         class="h-16 w-auto object-contain">
                </a>
                
                <p class="text-slate-600 text-sm leading-relaxed pr-4 font-medium">
                    Shallom Prefab Systems is a premier service provider of high-durability prefabricated houses, modular site offices, steel structures, labor colonies, and insulating wall panels headquartered in New Delhi, India.
                </p>

                <div class="pt-2 space-y-2.5 text-xs text-slate-600 font-medium">
                    <div class="flex items-start gap-2">
                        <svg class="w-4 h-4 text-[#FF8B02] shrink-0 mt-0.5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9a1.998 1.998 0 01-2.827 0l-4.244-4.243a8 8 0 1111.314 0z"/><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"/></svg>
                        <span>New Delhi, Delhi - 110092, India</span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-[#FF8B02] shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                        <span>GSTIN: <code class="text-slate-900 font-mono font-bold">07ANDPG4822C2ZI</code></span>
                    </div>
                    <div class="flex items-center gap-2">
                        <svg class="w-4 h-4 text-emerald-600 shrink-0" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m5.618-4.016A11.955 11.955 0 0112 2.944a11.955 11.955 0 01-8.618 3.04A12.02 12.02 0 003 9c0 5.591 3.824 10.29 9 11.622 5.176-1.332 9-6.03 9-11.622 0-1.042-.133-2.052-.382-3.016z"/></svg>
                        <span class="text-emerald-700 font-bold">Payment Protected Verified</span>
                    </div>
                </div>
            </div>

            <!-- Column 2: Products & Solutions -->
            <div class="space-y-3">
                <h4 class="text-slate-900 text-sm font-extrabold uppercase tracking-wider">Product Range</h4>
                <ul class="space-y-2 text-sm text-slate-600 font-medium">
                    <li><a href="#categories" class="hover:text-[#FF8B02] transition-colors">Prefab Houses</a></li>
                    <li><a href="#categories" class="hover:text-[#FF8B02] transition-colors">Prefab Metal Structures</a></li>
                    <li><a href="#categories" class="hover:text-[#FF8B02] transition-colors">Roof Top Buildings</a></li>
                    <li><a href="#categories" class="hover:text-[#FF8B02] transition-colors">Double Story Buildings</a></li>
                    <li><a href="#categories" class="hover:text-[#FF8B02] transition-colors">Steel School Buildings</a></li>
                </ul>
            </div>

            <!-- Column 3: Offices & Cabins -->
            <div class="space-y-3">
                <h4 class="text-slate-900 text-sm font-extrabold uppercase tracking-wider">Offices & Cabins</h4>
                <ul class="space-y-2 text-sm text-slate-600 font-medium">
                    <li><a href="#categories" class="hover:text-[#FF8B02] transition-colors">Prefab Site Offices</a></li>
                    <li><a href="#categories" class="hover:text-[#FF8B02] transition-colors">Prefabricated Cottage Homes</a></li>
                    <li><a href="#categories" class="hover:text-[#FF8B02] transition-colors">Portable Security Cabins</a></li>
                    <li><a href="#categories" class="hover:text-[#FF8B02] transition-colors">Prefab Bunk Houses</a></li>
                    <li><a href="#categories" class="hover:text-[#FF8B02] transition-colors">Labour Hutments</a></li>
                </ul>
            </div>

            <!-- Column 4: Quick Menu Links -->
            <div class="space-y-3">
                <h4 class="text-slate-900 text-sm font-extrabold uppercase tracking-wider">Navigation</h4>
                <ul class="space-y-2 text-sm text-slate-600 font-medium">
                    <li><a href="{{ route('home') }}" class="hover:text-[#FF8B02] transition-colors">Home</a></li>
                    <li><a href="{{ route('services') }}" class="hover:text-[#FF8B02] transition-colors">Business Verticals</a></li>
                    <li><a href="{{ route('products') }}" class="hover:text-[#FF8B02] transition-colors">Products Catalog</a></li>
                    <li><a href="{{ route('why-choose-us') }}" class="hover:text-[#FF8B02] transition-colors">Why Choose Us</a></li>
                    <li><a href="{{ route('clientele') }}" class="hover:text-[#FF8B02] transition-colors">Clientele</a></li>
                    <li><a href="{{ route('contact') }}" class="hover:text-[#FF8B02] transition-colors">Contact Us</a></li>
                </ul>
            </div>

        </div>

        <!-- Bottom Copyright -->
        <div class="pt-8 flex flex-col sm:flex-row justify-between items-center gap-4 text-xs text-slate-500 font-medium">
            <p>© {{ date('Y') }} Shallom Prefab Systems. All rights reserved.</p>
            <div class="flex items-center gap-6">
                <a href="#hero" class="hover:text-slate-900 transition-colors font-bold">Back to top ↑</a>
            </div>
        </div>

    </div>
</footer>