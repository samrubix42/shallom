<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Product Catalog & Specifications | Shallom Prefab Systems')] class extends Component {
    public string $activeCategory = 'all';
    public ?string $selectedProductForEnquiry = null;
    public bool $showEnquiryModal = false;
    
    // Form fields
    public string $name = '';
    public string $phone = '';
    public string $email = '';
    public string $location = '';
    public string $message = '';
    public bool $submitted = false;

    public array $products = [
        [
            'id' => 'prefab-portable-house',
            'title' => 'Prefab Portable House',
            'category' => 'houses',
            'price' => 'Rs 1,550',
            'price_unit' => 'sq ft',
            'moq' => '1 sq ft',
            'main_image' => 'images/cat_prefab_houses_png_1788163884847.jpg',
            'gallery' => [
                'images/cat_prefab_houses_png_1788163884847.jpg',
                'images/prefab_house_hero_png_1788163818892.jpg',
                'images/cat_prefab_cabins_png_1788163983749.jpg',
            ],
            'specs' => [
                'Material' => 'Wood / PUF Sandwich Panels (60mm PPGI) / Steel Framework',
                'Built Type' => 'Prefabricated Modular',
                'Color' => 'Brown, Green, White & Custom Options',
                'House Style' => 'Hut Shape / Modern Slanted Roof',
                'Usage/Application' => 'Residential House, Farmhouse, Resort Villa',
                'Structural Lifespan' => '50+ Years (with standard anti-corrosive maintenance)',
                'Seismic Zone' => 'Seismic Zone-V Compliant',
                'Wind Load Resistance' => 'Up to 39 m/s Wind Velocity',
                'Brand' => 'Shallom Prefab Systems',
                'Available Material' => 'Insulated Panels, Aerocon Panels, PUF Insulation, Structural Steel',
            ],
            'description' => 'Leveraging our vast engineering experience since 2009, we provide premium Prefabricated Portable Houses. Fabricated using heavy structural steel framing and 60mm PUF weather-resistant insulated sandwich wall panels with 50+ years lifespan.',
        ],
        [
            'id' => 'prefab-site-office',
            'title' => 'Prefabricated Site Office Cabin',
            'category' => 'offices',
            'price' => 'Rs 1,250',
            'price_unit' => 'sq ft',
            'moq' => '100 sq ft',
            'main_image' => 'images/cat_prefab_offices_png_1788163956003.jpg',
            'gallery' => [
                'images/cat_prefab_offices_png_1788163956003.jpg',
                'images/prefab_site_office_hero_png_1788163841263.jpg',
                'images/cat_prefab_cabins_png_1788163983749.jpg',
            ],
            'specs' => [
                'Material' => 'Galvanized Steel Frame & 60mm PUF/EPS Insulation Panels',
                'Built Type' => 'Prefabricated Container / Cabin',
                'Color' => 'Off-White, Blue & Custom Corporate Colors',
                'House Style' => 'Flat Modular Box Cabin',
                'Usage/Application' => 'Construction Site Executive Office, Meeting Room',
                'Fire Resistance' => 'Class "O" BS 476 / DIN 4102 Certified',
                'Structural Lifespan' => '50+ Years',
                'Brand' => 'Shallom Prefab Systems',
                'Available Material' => 'PUF Sandwich Panels, UPVC Windows, Heavy Vinyl Flooring',
            ],
            'description' => 'Heavy-duty plug-and-play executive site office cabin designed for rapid deployment at infrastructure and construction projects. Features pre-wired electrical sockets, LED lighting, and 60mm thermal wall insulation.',
        ],
        [
            'id' => 'building-metal-structure',
            'title' => 'Building Metal Structure & Steel Shed',
            'category' => 'structures',
            'price' => 'Rs 980',
            'price_unit' => 'sq ft',
            'moq' => '500 sq ft',
            'main_image' => 'images/cat_prefab_structures_png_1788163908538.jpg',
            'gallery' => [
                'images/cat_prefab_structures_png_1788163908538.jpg',
                'images/steel_building_hero_png_1788163862265.jpg',
                'images/cat_prefab_buildings_png_1788163932649.jpg',
            ],
            'specs' => [
                'Material' => 'IS 2062 Grade Heavy Structural MS Steel Framework',
                'Built Type' => 'Pre-Engineered Building (PEB)',
                'Color' => 'Industrial Grey, Blue Roof Sheets',
                'House Style' => 'High-Span Gable Roof Industrial Shed',
                'Usage/Application' => 'Industrial Warehouse, Factory Floor, Rooftop Extension',
                'Wind Load Resistance' => 'Rated up to 39 m/s',
                'Seismic Zone' => 'Zone-V Compliant',
                'Brand' => 'Shallom Prefab Systems',
                'Available Material' => 'Galvalume Roofing Sheets, Steel Trusses, Anchor Bolts',
            ],
            'description' => 'High-span structural steel framework manufactured according to structural load drawings. Perfect for factory sheds, warehouse facilities, and rooftop industrial floor extensions with 50+ years lifespan.',
        ],
        [
            'id' => 'labour-hutment-camp',
            'title' => 'Labour Hutments for Construction Sites',
            'category' => 'hutments',
            'price' => 'Rs 750',
            'price_unit' => 'sq ft',
            'moq' => '500 sq ft',
            'main_image' => 'images/cat_labour_hutments_png_1788164012359.jpg',
            'gallery' => [
                'images/cat_labour_hutments_png_1788164012359.jpg',
                'images/cat_prefab_offices_png_1788163956003.jpg',
                'images/cat_prefab_cabins_png_1788163983749.jpg',
            ],
            'specs' => [
                'Material' => 'Corrugated Sheet / Aerocon Panels / Steel Frame',
                'Built Type' => 'Demountable Modular Quarters',
                'Color' => 'Galvanized Silver & Blue Roof',
                'House Style' => 'Double Slanted Multi-Room Barracks',
                'Usage/Application' => 'Construction Labour Accommodations, Project Colony',
                'Relocatable' => '100% Demountable & Portable',
                'Brand' => 'Shallom Prefab Systems',
                'Available Material' => 'Demountable Steel Frame, Waterproof Roof, Bunk Beds',
            ],
            'description' => 'Economical and 100% relocatable labour housing quarters engineered for high worker capacity, monsoon weather resistance, and rapid nut-and-bolt site erection.',
        ],
    ];

    public function openEnquiryModal(string $productTitle): void
    {
        $this->selectedProductForEnquiry = $productTitle;
        $this->showEnquiryModal = true;
        $this->submitted = false;
    }

    public function closeEnquiryModal(): void
    {
        $this->showEnquiryModal = false;
    }

    public function submitModalEnquiry(): void
    {
        $this->validate([
            'name' => 'required|min:2',
            'phone' => 'required|min:10',
        ]);

        $this->submitted = true;
    }
};