<?php

namespace Database\Seeders;

use App\Models\OurRange;
use App\Models\OurRangeCategory;
use Illuminate\Database\Seeder;

class OurRangeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $houseCategory = OurRangeCategory::where('slug', 'prefab-portable-houses')->first();
        $officeCategory = OurRangeCategory::where('slug', 'site-office-cabins')->first();
        $structureCategory = OurRangeCategory::where('slug', 'building-metal-structures')->first();
        $hutmentCategory = OurRangeCategory::where('slug', 'labour-hutment-camps')->first();

        $products = [
            [
                'our_range_category_id' => $houseCategory?->id,
                'title' => 'Prefab Portable House',
                'details' => [
                    'price' => 'Price on Request',
                    'price_unit' => 'sq ft',
                    'moq' => '1 sq ft',
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
                ],
                'description' => 'Leveraging our vast engineering experience since 2009, we provide premium Prefabricated Portable Houses. Fabricated using heavy structural steel framing and 60mm PUF weather-resistant insulated sandwich wall panels with 50+ years lifespan.',
                'images' => [
                    'shallom/IMG-20260901-WA0009.jpg',
                    'shallom/IMG-20260901-WA0027.jpg',
                    'shallom/IMG-20260901-WA0028.jpg',
                ],
                'pdf' => null,
                'is_active' => true,
            ],
            [
                'our_range_category_id' => $officeCategory?->id,
                'title' => 'Prefabricated Site Office Cabin',
                'details' => [
                    'price' => 'Price on Request',
                    'price_unit' => 'sq ft',
                    'moq' => '100 sq ft',
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
                ],
                'description' => 'Heavy-duty plug-and-play executive site office cabin designed for rapid deployment at infrastructure and construction projects. Features pre-wired electrical sockets, LED lighting, and 60mm thermal wall insulation.',
                'images' => [
                    'shallom/IMG-20260901-WA0010.jpg',
                    'shallom/IMG-20260901-WA0029.jpg',
                    'shallom/IMG-20260901-WA0030.jpg',
                ],
                'pdf' => null,
                'is_active' => true,
            ],
            [
                'our_range_category_id' => $structureCategory?->id,
                'title' => 'Building Metal Structure & Steel Shed',
                'details' => [
                    'price' => 'Price on Request',
                    'price_unit' => 'sq ft',
                    'moq' => '500 sq ft',
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
                ],
                'description' => 'High-span structural steel framework manufactured according to structural load drawings. Perfect for factory sheds, warehouse facilities, and rooftop industrial floor extensions with 50+ years lifespan.',
                'images' => [
                    'shallom/IMG-20260901-WA0011.jpg',
                    'shallom/IMG-20260901-WA0031.jpg',
                    'shallom/IMG-20260901-WA0032.jpg',
                ],
                'pdf' => null,
                'is_active' => true,
            ],
            [
                'our_range_category_id' => $hutmentCategory?->id,
                'title' => 'Labour Hutments for Construction Sites',
                'details' => [
                    'price' => 'Price on Request',
                    'price_unit' => 'sq ft',
                    'moq' => '500 sq ft',
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
                ],
                'description' => 'Economical and 100% relocatable labour housing quarters engineered for high worker capacity, monsoon weather resistance, and rapid nut-and-bolt site erection.',
                'images' => [
                    'shallom/IMG-20260901-WA0012.jpg',
                    'shallom/IMG-20260901-WA0037.jpg',
                    'shallom/IMG-20260901-WA0038.jpg',
                ],
                'pdf' => null,
                'is_active' => true,
            ],
        ];

        foreach ($products as $prod) {
            OurRange::updateOrCreate(
                ['title' => $prod['title']],
                $prod
            );
        }
    }
}
