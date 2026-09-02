<?php

namespace Database\Seeders;

use App\Models\Service;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Service::query()->delete();

        $services = [
            [
                'name' => 'Residential & Hospitality Solutions',
                'slug' => 'residential-hospitality-solutions',
                'short_description' => 'Turnkey engineering of luxury prefab villas, eco-resort wooden cottages, terrace rooftop extensions, and hospitality leisure blocks.',
                'description' => '
                    <div class="space-y-6">
                        <h2 class="text-2xl font-bold text-slate-900">1. Residential & Hospitality Solutions Overview</h2>
                        <p class="text-slate-600 leading-relaxed">
                            Shallom Prefab Systems delivers custom pre-engineered residential and hospitality structures designed for rapid deployment, extreme weather endurance, and zero site pollution. Our modular living spaces are ideal for private estates, hill station resorts, coastal retreats, and eco-tourism destinations across India.
                        </p>

                        <div class="bg-orange-50/60 p-6 rounded-2xl border border-orange-200/80 space-y-4">
                            <h3 class="text-lg font-bold text-[#FF8B02] uppercase tracking-wider">Core Product Offerings & Scope</h3>
                            <ul class="space-y-3 text-slate-700 text-sm font-medium">
                                <li class="flex items-start gap-2">
                                    <i class="ri-checkbox-circle-fill text-[#FF8B02] text-lg shrink-0 mt-0.5"></i>
                                    <div>
                                        <strong>Prefabricated Luxurious Houses & Villas:</strong> Premium architectural finishes, custom multi-room layouts, composite wall cladding, and energy-efficient living.
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ri-checkbox-circle-fill text-[#FF8B02] text-lg shrink-0 mt-0.5"></i>
                                    <div>
                                        <strong>Modular Cottages & Wooden Houses:</strong> Aesthetic, nature-integrated cottages tailored for eco-resorts, hill stations, glamping pods, and holiday homes.
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ri-checkbox-circle-fill text-[#FF8B02] text-lg shrink-0 mt-0.5"></i>
                                    <div>
                                        <strong>Farmhouses & Rooftop Extensions:</strong> Lightweight, structurally sound living spaces erected directly on building terraces or rural plots without foundation stress.
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ri-checkbox-circle-fill text-[#FF8B02] text-lg shrink-0 mt-0.5"></i>
                                    <div>
                                        <strong>Resorts & Recreation Blocks:</strong> Fast-track guest houses, reception lounges, dining pavilions, poolside cabanas, and leisure spaces.
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <h3 class="text-xl font-bold text-slate-900 pt-2">Engineering & Material Specifications</h3>
                        <ul class="list-disc pl-5 space-y-2 text-slate-600">
                            <li><strong>Structural Framing:</strong> Heavy-duty galvanized MS tubular box sections (IS 2062 certified).</li>
                            <li><strong>Wall & Roof Insulation:</strong> 60mm high-density Polyurethane Foam (PUF) / Aerocon sandwich panels.</li>
                            <li><strong>Thermal Efficiency:</strong> Superior R-value rating cutting HVAC electricity bills by up to 40%.</li>
                            <li><strong>Safety Ratings:</strong> Seismic Zone-V earthquake resistance & wind velocity rating up to 39 m/s.</li>
                        </ul>
                    </div>
                ',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Commercial & Corporate Infrastructure',
                'slug' => 'commercial-corporate-infrastructure',
                'short_description' => 'Modern workspace cabins, manager suites, industrial canteens, toll plazas, security booths, and modular commercial kiosks.',
                'description' => '
                    <div class="space-y-6">
                        <h2 class="text-2xl font-bold text-slate-900">2. Commercial & Corporate Infrastructure Solutions</h2>
                        <p class="text-slate-600 leading-relaxed">
                            Factory-finished executive site offices, director cabins, employee dining halls, entrance security booths, and commercial storefronts built for rapid project setup and long-term utility across industrial plants and corporate yards.
                        </p>

                        <div class="bg-orange-50/60 p-6 rounded-2xl border border-orange-200/80 space-y-4">
                            <h3 class="text-lg font-bold text-[#FF8B02] uppercase tracking-wider">Core Product Offerings & Scope</h3>
                            <ul class="space-y-3 text-slate-700 text-sm font-medium">
                                <li class="flex items-start gap-2">
                                    <i class="ri-checkbox-circle-fill text-[#FF8B02] text-lg shrink-0 mt-0.5"></i>
                                    <div>
                                        <strong>Prefabricated Site & Executive Offices:</strong> Modern workspace cabins, manager/director suites, glass-partitioned conference rooms, and multi-desk collaborative offices.
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ri-checkbox-circle-fill text-[#FF8B02] text-lg shrink-0 mt-0.5"></i>
                                    <div>
                                        <strong>Office Cafeterias & Canteens:</strong> Hygienic dining halls, modern food service spaces, commercial kitchen modules, and pantry setups.
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ri-checkbox-circle-fill text-[#FF8B02] text-lg shrink-0 mt-0.5"></i>
                                    <div>
                                        <strong>Security Guard Cabins & Toll Plazas:</strong> Heavy-duty, weather-tight security booths, entrance checkpoints, highway toll booths, and ticket kiosks with 360-degree vision.
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ri-checkbox-circle-fill text-[#FF8B02] text-lg shrink-0 mt-0.5"></i>
                                    <div>
                                        <strong>Commercial Retail Outlets & Kiosks:</strong> Modular storefronts, popup store modules, and inner-side commercial setups for shopping complexes.
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <h3 class="text-xl font-bold text-slate-900 pt-2">Plug & Play Features</h3>
                        <ul class="list-disc pl-5 space-y-2 text-slate-600">
                            <li><strong>Pre-Wired Infrastructure:</strong> Fitted copper wiring, LED panel lights, distribution boards, and AC mounting ducts.</li>
                            <li><strong>Durable Flooring:</strong> Anti-skid vinyl floor finish over heavy fiber-cement sub-base.</li>
                            <li><strong>Glass Partitions:</strong> Toughened glass windows with UPVC frames and safety grills.</li>
                        </ul>
                    </div>
                ',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Industrial & Heavy Infrastructure Utilities',
                'slug' => 'industrial-heavy-infrastructure-utilities',
                'short_description' => 'Safe modular worker colonies, large-span PEB warehouses, mobile toilet blocks, bunk houses, and site equipment storage.',
                'description' => '
                    <div class="space-y-6">
                        <h2 class="text-2xl font-bold text-slate-900">3. Industrial & Heavy Infrastructure Utilities</h2>
                        <p class="text-slate-600 leading-relaxed">
                            Heavy-duty pre-engineered worker housing, industrial warehouses, mobile sanitation blocks, and site storage units built for large-scale mining, metro rail, highway, and mega construction projects.
                        </p>

                        <div class="bg-orange-50/60 p-6 rounded-2xl border border-orange-200/80 space-y-4">
                            <h3 class="text-lg font-bold text-[#FF8B02] uppercase tracking-wider">Core Product Offerings & Scope</h3>
                            <ul class="space-y-3 text-slate-700 text-sm font-medium">
                                <li class="flex items-start gap-2">
                                    <i class="ri-checkbox-circle-fill text-[#FF8B02] text-lg shrink-0 mt-0.5"></i>
                                    <div>
                                        <strong>Labor Camps & Hutments:</strong> Safe, modular worker accommodations engineered specifically for large-scale mining and construction sites with high occupant capacity.
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ri-checkbox-circle-fill text-[#FF8B02] text-lg shrink-0 mt-0.5"></i>
                                    <div>
                                        <strong>Industrial Sheds & PEB Steel Buildings:</strong> Large-span pre-engineered steel structures for warehouses, workshops, factories, and power plants.
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ri-checkbox-circle-fill text-[#FF8B02] text-lg shrink-0 mt-0.5"></i>
                                    <div>
                                        <strong>Modular Sanitation & Portable Toilets:</strong> Mobile toilet blocks, shower cubicles, and eco-friendly sanitary units with integrated CPVC plumbing.
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ri-checkbox-circle-fill text-[#FF8B02] text-lg shrink-0 mt-0.5"></i>
                                    <div>
                                        <strong>Bunk Houses & Mobile Site Storage:</strong> Containerized and modular field offices, emergency shelters, and secure tool storage units.
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <h3 class="text-xl font-bold text-slate-900 pt-2">Performance & Relocatability</h3>
                        <ul class="list-disc pl-5 space-y-2 text-slate-600">
                            <li><strong>100% Relocatable:</strong> Demountable nut-and-bolt assembly allowing complete dismantling and re-erection.</li>
                            <li><strong>Fire Safety:</strong> Aerocon tongue-and-groove fiber-cement panels with 2-hour fire rating (Class "O" BS 476).</li>
                        </ul>
                    </div>
                ',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Specialized Interior Contracting & Turnkey Services',
                'slug' => 'specialized-interior-contracting-turnkey-services',
                'short_description' => 'End-to-end site erection, lifecycle maintenance, dry wall partition works, acoustic false ceilings, and industrial PUF insulation.',
                'description' => '
                    <div class="space-y-6">
                        <h2 class="text-2xl font-bold text-slate-900">4. Specialized Interior Contracting & Turnkey Services</h2>
                        <p class="text-slate-600 leading-relaxed">
                            Comprehensive site erection, foundation anchor setting, structural auditing, acoustic dry wall installation, false ceiling execution, and high-performance thermal insulation panelling for commercial and industrial complexes.
                        </p>

                        <div class="bg-orange-50/60 p-6 rounded-2xl border border-orange-200/80 space-y-4">
                            <h3 class="text-lg font-bold text-[#FF8B02] uppercase tracking-wider">Core Product Offerings & Scope</h3>
                            <ul class="space-y-3 text-slate-700 text-sm font-medium">
                                <li class="flex items-start gap-2">
                                    <i class="ri-checkbox-circle-fill text-[#FF8B02] text-lg shrink-0 mt-0.5"></i>
                                    <div>
                                        <strong>Prefab Building Installation & Maintenance Services:</strong> End-to-end site erection, crane positioning, lifecycle repairs, structural audits, and scheduled AMC contracts.
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ri-checkbox-circle-fill text-[#FF8B02] text-lg shrink-0 mt-0.5"></i>
                                    <div>
                                        <strong>Dry Wall Partition & Ceiling Works:</strong> Acoustic suspended ceilings, lightweight dry walls, clean-room partitions, and concealed utility ducting.
                                    </div>
                                </li>
                                <li class="flex items-start gap-2">
                                    <i class="ri-checkbox-circle-fill text-[#FF8B02] text-lg shrink-0 mt-0.5"></i>
                                    <div>
                                        <strong>Thermal & Acoustic Insulation:</strong> Advanced PUF/Aerocon panelling solutions to cut HVAC energy bills by 40% and eliminate sound transmission.
                                    </div>
                                </li>
                            </ul>
                        </div>

                        <h3 class="text-xl font-bold text-slate-900 pt-2">Quality Standards</h3>
                        <ul class="list-disc pl-5 space-y-2 text-slate-600">
                            <li><strong>ISO 9001:2015 Norms:</strong> Strict manufacturing tolerances and site commissioning quality checks.</li>
                            <li><strong>Acoustic Isolation:</strong> Sound-damping mineral wool and fiber-cement board sandwich construction.</li>
                        </ul>
                    </div>
                ',
                'image' => null,
                'is_active' => true,
            ],
        ];

        foreach ($services as $serviceData) {
            Service::updateOrCreate(
                ['slug' => $serviceData['slug']],
                $serviceData
            );
        }
    }
}
