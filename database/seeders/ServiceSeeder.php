<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ServiceSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $services = [
            [
                'name' => 'Prefab Site Office Cabins',
                'slug' => 'prefab-site-office-cabins',
                'short_description' => 'Heavy-duty insulated modular site offices for construction, infrastructure, and industrial sites.',
                'description' => 'Our prefab site offices feature insulated PUF/EPS sandwich wall panels, anti-corrosive steel framework, and demountable nut-and-bolt structure for rapid on-site erection and easy relocation.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Labour Camp Hutments',
                'slug' => 'labour-camp-hutments',
                'short_description' => 'Cost-effective high-capacity worker accommodation dormitories with integrated facilities.',
                'description' => 'Engineered for fast mass installation at large infrastructure projects. Includes weather-proof roofing, ventilation systems, electrical ducting, and optional attached sanitary units.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Pre-Engineered Metal Buildings',
                'slug' => 'pre-engineered-metal-buildings',
                'short_description' => 'Custom industrial PEB warehouses, factory sheds, and heavy steel structures.',
                'description' => 'Designed using high-tensile IS 2062 grade steel. Features column-free clear spans, anti-rust protective coating, and leak-proof profile roof sheeting.',
                'image' => null,
                'is_active' => true,
            ],
            [
                'name' => 'Aerocon Wall Panel Installation',
                'slug' => 'aerocon-wall-panel-installation',
                'short_description' => 'Fire-resistant, lightweight, and soundproof wall partitioning systems for commercial spaces.',
                'description' => 'Certified tongue-and-groove Aerocon sandwich panels offering up to 2-hour fire rating, superior thermal efficiency, and zero wet-plaster hassle.',
                'image' => null,
                'is_active' => true,
            ],
        ];

        foreach ($services as $serviceData) {
            \App\Models\Service::updateOrCreate(
                ['slug' => $serviceData['slug']],
                $serviceData
            );
        }
    }
}
