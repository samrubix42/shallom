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
        $services = [
            // Category 1: Residential & Hospitality Solutions
            [
                'name' => 'Prefabricated Luxurious Houses & Villas',
                'slug' => 'prefabricated-luxurious-houses-villas',
                'short_description' => 'Premium architectural finishes, custom layouts, and energy-efficient living spaces built with zero masonry hassle.',
                'description' => '
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Turnkey Luxurious Prefab Houses & Villas</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">Shallom Prefab Systems delivers high-end prefabricated luxury houses and villas engineered with precision IS 2062 steel frames, insulated PUF/Aerocon sandwich walls, and designer exterior cladding. Ideal for private estates, vacation homes, and rapid residential expansion.</p>
                    
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Key Technical Advantages</h3>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600 mb-6">
                        <li><strong>Architectural Freedom:</strong> Fully customizable floorplans, multi-room layouts, and premium wooden-texture or composite panel finishes.</li>
                        <li><strong>High Energy Efficiency:</strong> 60mm PUF insulation core cutting HVAC power consumption by up to 40%.</li>
                        <li><strong>Seismic & Storm Safe:</strong> Zone-V earthquake compliant and rated for wind speeds up to 39 m/s.</li>
                        <li><strong>Rapid Execution:</strong> Ready for occupancy within 15 to 30 days of site foundation readiness.</li>
                    </ul>
                ',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Modular Cottages & Wooden Houses',
                'slug' => 'modular-cottages-wooden-houses',
                'short_description' => 'Aesthetic, nature-integrated cottages tailored for eco-resorts, hill stations, and holiday retreats.',
                'description' => '
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Eco-Friendly Modular Cottages & Wooden Cabins</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">Engineered specifically for sensitive ecological sites, hill stations, and eco-resorts. Our modular cottages feature realistic wooden-grain weatherboard exteriors without destroying natural timber resources.</p>
                    
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Highlights</h3>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600 mb-6">
                        <li><strong>Zero Site Pollution:</strong> Dry nut-and-bolt assembly protecting local vegetation and soil.</li>
                        <li><strong>Thermal & Moisture Barrier:</strong> Moisture-proof Aerocon and PUF wall panelling preventing mold and condensation.</li>
                        <li><strong>100% Relocatable:</strong> Can be unbolted and re-assembled at new resort coordinates.</li>
                    </ul>
                ',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Farmhouses & Rooftop Extensions',
                'slug' => 'farmhouses-rooftop-extensions',
                'short_description' => 'Lightweight, structurally sound living spaces erected directly on urban building terraces or rural farmland plots.',
                'description' => '
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Lightweight Terrace Rooftop Extensions & Farmhouses</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">Add extra floors or build rural weekend farmhouses without overloading existing civil foundations. Our lightweight PEB steel framework minimizes dead-load pressure while delivering 50+ year structural durability.</p>
                    
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Key Benefits</h3>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600 mb-6">
                        <li><strong>Dead-Load Prevention:</strong> Ultra-lightweight structural engineering avoiding stress on old building beams.</li>
                        <li><strong>Monsoon Proofing:</strong> Overlapping PPGL corrugated roof profile sheeting eliminating terrace leakages.</li>
                    </ul>
                ',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Resorts & Recreation Blocks',
                'slug' => 'resorts-recreation-blocks',
                'short_description' => 'Fast-track guest houses, reception lounges, clubhouse pavilions, and leisure spaces for hospitality complexes.',
                'description' => '
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Turnkey Resort Reception & Hospitality Infrastructure</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">Fast-track turnkey construction of resort reception halls, poolside lounges, dining pavilions, and guest accommodation quarters equipped with concealed electrical plumbing and luxury sanitation cubicles.</p>
                ',
                'image' => null,
                'is_active' => true,
            ],

            // Category 2: Commercial & Corporate Infrastructure
            [
                'name' => 'Prefabricated Site & Executive Offices',
                'slug' => 'prefabricated-site-executive-offices',
                'short_description' => 'Modern workspace cabins, manager/director suites, and multi-desk collaborative offices for infrastructure projects.',
                'description' => '
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Executive Site Offices & Manager Cabins</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">Plug-and-play executive site offices fitted with pre-wired copper electrical channels, LED lighting, UPVC sliding glass windows, and glass-partitioned director cabins.</p>
                    
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Specifications</h3>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600 mb-6">
                        <li><strong>Pre-Wired Infrastructure:</strong> Fitted switchboards, AC points, and internet cabling ducts.</li>
                        <li><strong>Durable Flooring:</strong> Heavy-duty anti-skid vinyl floor finish over fiber-cement sub-base.</li>
                    </ul>
                ',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Office Cafeterias & Canteens',
                'slug' => 'office-cafeterias-canteens',
                'short_description' => 'Hygienic dining halls, modern food service spaces, and pantry modules for corporate plants and sites.',
                'description' => '
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Modular Industrial Canteens & Pantry Blocks</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">Hygienic, easy-to-clean prefabricated dining halls and industrial kitchen modules equipped with washable wall panels, stainless steel sink provisions, and heavy exhaust ventilation.</p>
                ',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Security Guard Cabins & Toll Plazas',
                'slug' => 'security-guard-cabins-toll-plazas',
                'short_description' => 'Heavy-duty, weather-tight security booths, entrance checkpoints, and toll plazas.',
                'description' => '
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Heavy-Duty Security Guard Cabins & Toll Booths</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">Weatherproof security guard booths with 360-degree glass visibility, insulated walls, shelf desks, and pre-fitted electrical fixtures. Ready to drop on-site via crane.</p>
                ',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Commercial Retail Outlets & Kiosks',
                'slug' => 'commercial-retail-outlets-kiosks',
                'short_description' => 'Modular storefronts and commercial setups for shopping complexes and highway plazas.',
                'description' => '
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Modular Retail Kiosks & Commercial Storefronts</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">Eye-catching prefabricated retail kiosks, popup store modules, and highway food court booths designed for rapid commercial deployment.</p>
                ',
                'image' => null,
                'is_active' => true,
            ],

            // Category 3: Industrial & Heavy Infrastructure Utilities
            [
                'name' => 'Labor Camps & Hutments',
                'slug' => 'labor-camps-hutments',
                'short_description' => 'Safe, modular worker accommodations engineered specifically for large-scale mining, metro, and infra sites.',
                'description' => '
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">High-Capacity Worker Colonies & Labour Hutments</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">Modular multi-bed dormitories and worker camps capable of housing 50 to 5,000+ workers. Features fire-retardant Aerocon panels, ventilated roofing, and attached sanitation blocks.</p>
                    
                    <h3 class="text-xl font-bold text-slate-900 mb-3">Key Features</h3>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600 mb-6">
                        <li><strong>Demountable Frame:</strong> Nut-bolt assembly allowing 100% material reuse across future project locations.</li>
                        <li><strong>Fire & Weather Safe:</strong> Class "O" BS 476 certified fire resistance.</li>
                    </ul>
                ',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Industrial Sheds & PEB Steel Buildings',
                'slug' => 'industrial-sheds-peb-steel-buildings',
                'short_description' => 'Large-span pre-engineered steel structures for warehouses, workshops, factories, and power plants.',
                'description' => '
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Pre-Engineered Heavy PEB Steel Warehouses & Factory Sheds</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">Large column-free span PEB industrial warehouses built with high-tensile IS 2062 steel girders, anti-corrosive primer coating, and crane-runway provisions.</p>
                ',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Modular Sanitation & Portable Toilets',
                'slug' => 'modular-sanitation-portable-toilets',
                'short_description' => 'Mobile toilet blocks, shower cubicles, and eco-friendly sanitary units with plumbing integration.',
                'description' => '
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Portable Toilet Blocks & Mobile Sanitation Units</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">Hygienic multi-seat mobile toilet units, shower blocks, and washrooms pre-fitted with CPVC piping, overhead water tank fittings, and waste disposal outlets.</p>
                ',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Bunk Houses & Mobile Site Storage',
                'slug' => 'bunk-houses-mobile-site-storage',
                'short_description' => 'Containerized and modular field offices, emergency shelters, and equipment storage units.',
                'description' => '
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Portable Bunk Houses & Field Storage Units</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">Heavy-duty mobile bunk houses designed for remote geological survey, mining, and highway construction crews.</p>
                ',
                'image' => null,
                'is_active' => true,
            ],

            // Category 4: Specialized Interior Contracting & Turnkey Services
            [
                'name' => 'Prefab Building Installation & Maintenance',
                'slug' => 'prefab-building-installation-maintenance',
                'short_description' => 'End-to-end site erection, lifecycle repair, structural audit, and scheduled maintenance services.',
                'description' => '
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Turnkey Erection & Maintenance Services</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">Complete project management services from soil bearing testing (SBC) and anchor foundation placement to crane installation, panel fitting, and annual maintenance contracts.</p>
                ',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Dry Wall Partition & Ceiling Works',
                'slug' => 'dry-wall-partition-ceiling-works',
                'short_description' => 'Acoustic suspended ceilings, lightweight dry walls, and thermal insulation panelling for commercial buildings.',
                'description' => '
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Commercial Dry Wall Partitions & False Ceilings</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">Precision installation of Aerocon/gypsum acoustic dry wall partitions, mineral fiber grid false ceilings, and concealed utility channels for IT parks and offices.</p>
                ',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Thermal & Acoustic Insulation Services',
                'slug' => 'thermal-acoustic-insulation-services',
                'short_description' => 'Advanced PUF/Aerocon panelling solutions to cut HVAC energy bills and eliminate noise transmission.',
                'description' => '
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Industrial Thermal & Acoustic Insulation Panelling</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">High-density Polyurethane Foam (PUF) wall cladding and soundproofing services cutting commercial HVAC electricity expenses by 40% and offering Class "O" fire protection.</p>
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
