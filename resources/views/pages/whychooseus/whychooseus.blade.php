@section('title', 'Why Choose Us | Shallom Prefab Systems')
@section('meta_description', 'Discover Shallom Prefab Systems’ modular construction advantages: faster turnaround, seismic and wind resistance, thermal efficiency, and relocatable designs.')

<div class="min-h-screen bg-[#FAF9F5] py-8 text-slate-800 sm:py-12">
    <div class="mx-auto max-w-7xl space-y-10 px-4 sm:px-6 lg:px-8">
        <section class="rounded-3xl border border-slate-200 bg-white p-8 shadow-xs sm:p-12">
            <p class="flex items-center gap-2 text-xs font-bold uppercase tracking-widest text-[#FF8B02]">
                <i class="ri-shield-check-line text-lg"></i>
                Why Shallom Prefab Systems
            </p>
            <h1 class="mt-4 max-w-4xl text-3xl font-light leading-tight tracking-tight text-slate-900 sm:text-5xl">
                Modular construction, built around your project.
            </h1>
            <p class="mt-5 max-w-3xl text-sm leading-relaxed text-slate-600 sm:text-base">
                Established in {{ setting('established_year', '2017') }}, we combine off-site fabrication with turnkey project delivery. Our modular building systems are designed for rapid execution, thermal efficiency, and adaptable use across India.
            </p>
            <a href="{{ route('contact') }}" wire:navigate class="mt-7 inline-flex items-center gap-2 rounded-full bg-[#FF8B02] px-6 py-3 text-xs font-bold uppercase tracking-wider text-white transition-colors hover:bg-[#E67A00]">
                Discuss your project
                <i class="ri-arrow-right-line"></i>
            </a>
        </section>

        <section class="grid gap-5 md:grid-cols-2">
            <article class="rounded-2xl border border-slate-200 bg-white p-7 sm:p-9">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FFF4E5] text-[#FF8B02]">
                    <i class="ri-flashlight-line text-2xl"></i>
                </div>
                <h2 class="mt-5 text-xl font-bold text-slate-900">60% Faster Turnaround</h2>
                <p class="mt-3 text-sm leading-relaxed text-slate-600">Off-site panel fabrication can reduce site installation timelines compared with traditional civil construction.</p>
            </article>
            <article class="rounded-2xl border border-slate-200 bg-white p-7 sm:p-9">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FFF4E5] text-[#FF8B02]">
                    <i class="ri-shield-check-line text-2xl"></i>
                </div>
                <h2 class="mt-5 text-xl font-bold text-slate-900">Designed for Seismic & Wind Conditions</h2>
                <p class="mt-3 text-sm leading-relaxed text-slate-600">The company profile specifies designs for Zone-V earthquake loads and wind speeds up to 39 m/s, with Class “O” fire safety ratings.</p>
            </article>
            <article class="rounded-2xl border border-slate-200 bg-white p-7 sm:p-9">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FFF4E5] text-[#FF8B02]">
                    <i class="ri-temp-cold-line text-2xl"></i>
                </div>
                <h2 class="mt-5 text-xl font-bold text-slate-900">Thermal Efficiency</h2>
                <p class="mt-3 text-sm leading-relaxed text-slate-600">Aerocon panels, cold-rolled steel framing, and PUF insulation cores support energy-efficient building envelopes.</p>
            </article>
            <article class="rounded-2xl border border-slate-200 bg-white p-7 sm:p-9">
                <div class="flex h-12 w-12 items-center justify-center rounded-xl bg-[#FFF4E5] text-[#FF8B02]">
                    <i class="ri-drag-drop-line text-2xl"></i>
                </div>
                <h2 class="mt-5 text-xl font-bold text-slate-900">Modular & Relocatable</h2>
                <p class="mt-3 text-sm leading-relaxed text-slate-600">Flexible structural frameworks allow future expansion, layout changes, or relocation to another site.</p>
            </article>
        </section>

        <section class="rounded-3xl bg-slate-900 p-8 text-white sm:p-10">
            <div class="grid gap-8 sm:grid-cols-2 lg:grid-cols-4">
                <div>
                    <p class="text-3xl font-bold text-[#FF8B02]">{{ setting('annual_capacity', '₹25 Cr') }}</p>
                    <p class="mt-2 text-xs font-bold uppercase tracking-wider text-slate-300">Annual Capacity</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-white">{{ setting('skilled_engineers', '50+') }}</p>
                    <p class="mt-2 text-xs font-bold uppercase tracking-wider text-slate-300">Skilled Engineers</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-[#FF8B02]">{{ setting('structure_lifespan', '50 Years') }}</p>
                    <p class="mt-2 text-xs font-bold uppercase tracking-wider text-slate-300">Structure Lifespan</p>
                </div>
                <div>
                    <p class="text-3xl font-bold text-white">Pan-India</p>
                    <p class="mt-2 text-xs font-bold uppercase tracking-wider text-slate-300">Project Reach</p>
                </div>
            </div>
        </section>

        <section class="grid gap-6 lg:grid-cols-2">
            <div class="rounded-2xl border border-slate-200 bg-white p-8">
                <h2 class="text-xl font-bold text-slate-900">Turnkey Delivery</h2>
                <p class="mt-3 text-sm leading-relaxed text-slate-600">From architectural design and precision manufacturing to site transport and rapid installation, our work covers the project delivery process.</p>
            </div>
            <div class="rounded-2xl border border-slate-200 bg-white p-8">
                <h2 class="text-xl font-bold text-slate-900">Sustainable Building Systems</h2>
                <p class="mt-3 text-sm leading-relaxed text-slate-600">Our approach emphasizes energy-efficient insulation, eco-conscious materials, and recyclable building systems.</p>
            </div>
        </section>

        <section class="flex flex-col justify-between gap-6 rounded-3xl border border-slate-200 bg-white p-8 sm:flex-row sm:items-center sm:p-10">
            <div>
                <p class="text-xs font-bold uppercase tracking-widest text-[#FF8B02]">Talk to our team</p>
                <h2 class="mt-2 text-2xl font-semibold text-slate-900">Plan a modular construction project</h2>
                <p class="mt-2 text-sm text-slate-600">{{ setting('address', 'N-3/A-3, Dilshad Garden, Delhi - 110095') }}</p>
                <p class="text-sm text-slate-600">{{ setting('branch_address', 'D-15, Sector 3, Noida (U.P.) - 201301') }}</p>
            </div>
            <div class="flex flex-col gap-2">
                <a href="tel:{{ setting('phone', '+91 98995 52380') }}" class="font-bold text-slate-900 hover:text-[#FF8B02]">{{ setting('phone', '+91 98995 52380') }}</a>
                <a href="tel:{{ setting('secondary_phone', '+91 70650 13555') }}" class="font-bold text-slate-900 hover:text-[#FF8B02]">{{ setting('secondary_phone', '+91 70650 13555') }}</a>
            </div>
        </section>
    </div>
</div>
