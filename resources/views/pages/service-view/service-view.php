<?php

use App\Models\Service;
use Illuminate\Support\Facades\Storage;
use Livewire\Attributes\Layout;
use Livewire\Component;

new #[Layout('layouts::app')] class extends Component
{
    public ?string $slug = 'hospitality-tourism-infrastructure';

    public ?object $dbService = null;

    public array $currentVertical = [];

    public array $allVerticals = [];

    public function mount(?string $slug = null): void
    {
        $this->allVerticals = [
            'hospitality-tourism-infrastructure' => [
                'slug' => 'hospitality-tourism-infrastructure',
                'title' => 'Hospitality & Tourism Infrastructure',
                'tagline' => 'Modular Resorts, Eco-Cottages & Guest Houses',
                'icon' => 'ri-hotel-line',
                'image' => 'shallom/IMG-20260901-WA0033.jpg',
                'summary' => 'Delivering high-end modular resort cottages, glamping cabins, and guest quarters designed for extreme weather endurance without harming surrounding natural landscapes.',
                'content' => '
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Turnkey Resort & Tourism Engineering</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">Shallom Prefab Systems delivers custom pre-engineered wooden-texture cottages, resort quarters, and eco-cabins engineered for extreme weather endurance in mountain, hill-station, and coastal tourism zones across India.</p>

                    <h3 class="text-xl font-bold text-slate-900 mb-3">Key Technical Advantages</h3>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600 mb-6">
                        <li><strong>Wooden-Finish Aesthetic:</strong> Elegant architectural finish without harming natural timber forests.</li>
                        <li><strong>Thermal Efficiency:</strong> Aerocon and PUF insulation options support high thermal efficiency.</li>
                        <li><strong>Zero Site Pollution:</strong> Demountable nut-and-bolt assembly with zero wet masonry site waste.</li>
                        <li><strong>Structure Lifespan:</strong> The company profile states a structure lifespan of 50 years.</li>
                    </ul>

                    <div class="p-4 bg-orange-50 border-l-4 border-[#FF8B02] rounded-r-xl text-slate-800 text-sm font-semibold mb-4">
                        Note: All dimensions, floorplan layouts, window placements, and interior wall partitions can be fully customized according to site coordinates.
                    </div>
                ',
                'sub_offerings' => [
                    [
                        'name' => 'Modular Resorts & Eco-Cottages',
                        'desc' => 'High-end luxury prefab wooden-finish cottages, eco-resort cabins, glamping pods, and hill-station retreat villas built with zero environmental damage.',
                        'features' => ['Wooden pine homes', 'PUF thermal insulation option', 'Turnkey project delivery', 'Modular and relocatable designs'],
                    ],
                    [
                        'name' => 'Premium Guest Houses & Recreation Blocks',
                        'desc' => 'Executive accommodation quarters, resort reception halls, dining pavilions, clubhouse blocks, and poolside cabanas with attached luxury toilets.',
                        'features' => ['Concealed plumbing & wiring', 'UPVC sliding glass doors', 'Designer false ceilings', 'Relocatable nut-bolt frame'],
                    ],
                ],
                'specs' => [
                    'Structural Frame' => 'Galvanized Heavy MS Tubular & Box Sections (IS 2062)',
                    'Wall Panelling' => '50mm to 100mm PUF/EPS Sandwich Core / Aerocon Panels',
                    'Thermal Performance' => 'Aerocon and PUF insulation options',
                    'Roofing Sheet' => 'Insulated Corrugated Pre-Painted Galvanized Steel (PPGL)',
                    'Design Lifespan' => '50 Years',
                ],
            ],
            'institutional-accommodation-solutions' => [
                'slug' => 'institutional-accommodation-solutions',
                'title' => 'Institutional & Accommodation Solutions',
                'tagline' => 'Schools, Classrooms, Student Hostels & Labour Colonies',
                'icon' => 'ri-government-line',
                'image' => 'shallom/IMG-20260901-WA0034.jpg',
                'summary' => 'Rapidly deployable pre-engineered school buildings, multi-story student hostels, and industrial worker housing camps engineered for high density and durability.',
                'content' => '
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Rapid Institutional & Worker Housing</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">Pre-engineered school blocks, modular classrooms, student housing, and industrial worker accommodation designed for turnkey delivery.</p>

                    <h3 class="text-xl font-bold text-slate-900 mb-3">Key Performance Parameters</h3>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600 mb-6">
                        <li><strong>Fire Safety:</strong> The company profile specifies Class "O" fire safety ratings.</li>
                        <li><strong>Faster Turnaround:</strong> Off-site fabrication can reduce installation timelines by up to 60%.</li>
                        <li><strong>High Capacity:</strong> Modular dormitories with attached sanitation blocks for high-density worker camps.</li>
                    </ul>
                ',
                'sub_offerings' => [
                    [
                        'name' => 'School Buildings & Modern Classrooms',
                        'desc' => 'Pre-engineered multi-classroom school blocks, administrative offices, science labs, libraries, and daycare centers erected during summer vacations.',
                        'features' => ['Acoustic sound damping', 'Fire-retardant Aerocon walls', 'Abundant natural lighting', 'Zero site wet pollution'],
                    ],
                    [
                        'name' => 'Hostel Blocks & Student Housing',
                        'desc' => 'Multi-story G+1 / G+2 modular dormitories, student housing complexes, dining halls, and warden quarters designed for maximum occupant safety.',
                        'features' => ['Modular classrooms and student housing', 'Turnkey project delivery', 'Zone-V earthquake design', 'Wind speeds up to 39 m/s'],
                    ],
                    [
                        'name' => 'Labour Accommodation Blocks & Worker Colonies',
                        'desc' => 'Heavy-duty industrial labour camps, bunk houses, worker housing colonies, and attached sanitation blocks for mining and infra project sites.',
                        'features' => ['Modular and relocatable', 'Worker accommodation', 'Turnkey site installation'],
                    ],
                ],
                'specs' => [
                    'Structural Frame' => 'Pre-Engineered Heavy Steel Frame (PEB G+1/G+2 ready)',
                    'Wall Panelling' => 'Aerocon Tongue & Groove Fiber Cement Sandwich Panels',
                    'Fire Rating' => 'Class "O" fire safety rating',
                    'Design Lifespan' => '50 Years',
                ],
            ],
            'commercial-site-utilities' => [
                'slug' => 'commercial-site-utilities',
                'title' => 'Commercial & Site Utilities',
                'tagline' => 'Site Offices, Executive Cabins & Rooftop Extensions',
                'icon' => 'ri-building-4-line',
                'image' => 'shallom/IMG-20260901-WA0035.jpg',
                'summary' => 'Customized turnkey site offices, glass-partitioned manager cabins, security guard posts, and lightweight rooftop building extensions.',
                'content' => '
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Plug & Play Site Utilities & Offices</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">Factory-finished executive site offices, manager cabins, security guard posts, and lightweight rooftop structural extensions delivered turnkey in plug-and-play condition.</p>

                    <h3 class="text-xl font-bold text-slate-900 mb-3">Key Features</h3>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600 mb-6">
                        <li><strong>Plug & Play Utility:</strong> Pre-fitted copper electrical wiring, LED light panels, and switchboards.</li>
                        <li><strong>Rooftop Friendly:</strong> Lightweight dead-load design avoiding foundation stress on existing buildings.</li>
                        <li><strong>Executive Interiors:</strong> Glass-partitioned manager cabins and conference rooms.</li>
                    </ul>
                ',
                'sub_offerings' => [
                    [
                        'name' => 'Site Offices & Executive Cabins',
                        'desc' => 'Plug-and-play project manager site offices, glass-partitioned executive cabins, conference rooms, and site security posts equipped with electrical points.',
                        'features' => ['Plug & play electrical wiring', 'Executive glass partitions', 'AC mounting provisions', 'Heavy insulated doors'],
                    ],
                    [
                        'name' => 'Rooftop Buildings & Structural Extensions',
                        'desc' => 'Lightweight steel structural extensions for existing commercial buildings, rooftop offices, cafeteria extensions, and storage sheds avoiding structural stress.',
                        'features' => ['Lightweight dead-load design', 'No civil foundation piling', 'Seamless rooftop integration', 'Weatherproof sealing'],
                    ],
                ],
                'specs' => [
                    'Structural Frame' => 'Galvanized MS Box Steel Chassis & Columns',
                    'Wall Panelling' => 'Insulated PUF / EPS Sandwich Panels (50mm / 75mm)',
                    'Windows & Doors' => 'UPVC Sliding Glazed Windows with Safety Grills',
                    'Electrical Fixtures' => 'Concealed Copper Wiring, LED Panels, Switchboards',
                    'Design Lifespan' => '50 Years',
                ],
            ],
            'specialized-interior-contracting' => [
                'slug' => 'specialized-interior-contracting',
                'title' => 'Specialized Interior Contracting',
                'tagline' => 'Dry Wall Partitions, Acoustic Ceilings & Insulation',
                'icon' => 'ri-layout-4-line',
                'image' => 'shallom/IMG-20260901-WA0036.jpg',
                'summary' => 'High-performance interior partition systems, acoustic false ceilings, and industrial sandwich panel insulation designed for energy efficiency and sound damping.',
                'content' => '
                    <h2 class="text-2xl font-bold text-slate-900 mb-4">Dry Wall & Industrial Insulation Solutions</h2>
                    <p class="text-slate-600 leading-relaxed mb-4">High-performance interior partition walls, acoustic false ceilings, and industrial sandwich panel cladding engineered for sound isolation and energy efficiency.</p>

                    <h3 class="text-xl font-bold text-slate-900 mb-3">Capabilities</h3>
                    <ul class="list-disc pl-5 space-y-2 text-slate-600 mb-6">
                        <li><strong>Acoustic Isolation:</strong> Soundproof gypsum and Aerocon dry wall partitions.</li>
                        <li><strong>Thermal Insulation:</strong> PUF and Aerocon panel systems support thermal efficiency.</li>
                    </ul>
                ',
                'sub_offerings' => [
                    [
                        'name' => 'Dry Wall Partition Work & Acoustic Ceilings',
                        'desc' => 'Soundproof gypsum/Aerocon interior partition walls, acoustic false ceilings, modular office cubicles, and clean-room partitions for corporate spaces.',
                        'features' => ['Acoustic sound isolation', 'Smooth paintable surface finish', 'Quick dry installation', 'Concealed utility channels'],
                    ],
                    [
                        'name' => 'Industrial Wall Panelling & Thermal Insulation',
                        'desc' => 'High-density PUF/EPS sandwich wall panels, cold-room insulation, exterior thermal cladding, and protective profile walling for industrial facilities.',
                        'features' => ['PUF and Aerocon insulation options', 'Turnkey installation', 'Modular construction'],
                    ],
                ],
                'specs' => [
                    'Partition Core' => 'Aerocon Panels / Gypsum Board with Mineral Wool Insulation',
                    'Ceiling System' => 'Grid Ceiling / Acoustic Mineral Fiber False Ceiling',
                    'Thermal Performance' => 'High R-Value insulation preventing thermal transfer',
                    'Finish Options' => 'Textured Paint / Laminate / Vinyl / Profile Cladding',
                ],
            ],
        ];

        if ($slug) {
            $dbModel = Service::where('slug', $slug)->where('is_active', true)->first();
            if ($dbModel) {
                $this->dbService = $dbModel;
                $this->slug = $dbModel->slug;
                $this->currentVertical = [
                    'slug' => $dbModel->slug,
                    'title' => $dbModel->name,
                    'tagline' => 'Turnkey Engineering & Prefab Solution',
                    'icon' => 'ri-customer-service-2-line',
                    'image' => $dbModel->image ? Storage::url($dbModel->image) : 'shallom/IMG-20260901-WA0033.jpg',
                    'summary' => $dbModel->short_description ?: 'Comprehensive turnkey prefab building and modular structure service.',
                    'content' => $dbModel->description ?: '<p class="text-slate-600">No detailed content provided for this service.</p>',
                    'sub_offerings' => [],
                    'specs' => [
                        'Structural Frame' => 'Galvanized Heavy MS Tubular & Box Sections (IS 2062)',
                        'Wall Panelling' => 'Insulated PUF / EPS Sandwich Core / Aerocon Panels',
                    ],
                ];

                return;
            }
        }

        if ($slug && isset($this->allVerticals[$slug])) {
            $this->slug = $slug;
        } else {
            $this->slug = 'hospitality-tourism-infrastructure';
        }

        $this->currentVertical = $this->allVerticals[$this->slug];
    }
};
