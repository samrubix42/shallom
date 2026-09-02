<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TestimonialSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $testimonials = [
            [
                'client_name' => 'Rajesh Sharma',
                'company' => 'Larsen & Toubro (L&T Construction)',
                'designation' => 'Senior Project Director',
                'content' => 'Shallom Prefab Systems delivered and erected 12 site office cabins and a 500-bed labour colony within 10 days at our Metro project site in Delhi NCR. Exceptional structural quality, thermal insulation, and seamless execution.',
                'rating' => 5,
                'is_active' => true,
                'display_order' => 1,
            ],
            [
                'client_name' => 'Vikramaditya Mehta',
                'company' => 'Adani Energy & Logistics',
                'designation' => 'General Manager - Infrastructure',
                'content' => 'The modular prefab cottages and Aerocon insulated wall structures supplied by Shallom are outstanding. Their demountable nut-and-bolt design enabled us to easily relocate units across multiple solar plant sites.',
                'rating' => 5,
                'is_active' => true,
                'display_order' => 2,
            ],
            [
                'client_name' => 'Sanjay Verma',
                'company' => 'Tata Projects Limited',
                'designation' => 'Chief Site Engineer',
                'content' => 'We have relied on Shallom Prefab Systems for industrial steel sheds and portable executive cabins. Fast manufacturing turnaround, zero leakages during monsoons, and high quality finishing.',
                'rating' => 5,
                'is_active' => true,
                'display_order' => 3,
            ],
            [
                'client_name' => 'Pooja Deshmukh',
                'company' => 'GMR Airports Infrastructure',
                'designation' => 'Assistant General Manager',
                'content' => 'Highly professional team! Their pre-engineered security cabins and modular site offices met all airport authority safety standards with prompt Delhi NCR support.',
                'rating' => 5,
                'is_active' => true,
                'display_order' => 4,
            ],
            [
                'client_name' => 'Amitabh Roy',
                'company' => 'NTPC Limited',
                'designation' => 'Head of Civil Engineering',
                'content' => 'Shallom constructed pre-engineered staff hutments and control rooms at our power station project. The structures withstand extreme weather and offer impressive acoustic and thermal comfort.',
                'rating' => 5,
                'is_active' => true,
                'display_order' => 5,
            ],
            [
                'client_name' => 'Sunil Chawla',
                'company' => 'DLF Cyber City Developers',
                'designation' => 'Vice President - Facilities',
                'content' => 'The quality of materials, Aerocon panel alignment, and speedy setup provided by Shallom Prefab Systems exceeded our expectations. Highly recommended for commercial prefab requirements.',
                'rating' => 5,
                'is_active' => true,
                'display_order' => 6,
            ],
            [
                'client_name' => 'Kavita Reddy',
                'company' => 'Bharti Airtel Infra',
                'designation' => 'Regional Logistics Head',
                'content' => 'Fast delivery, durable powder-coated steel framework, and excellent customer service. Shallom installed portable equipment shelters across multiple remote tower locations flawlessly.',
                'rating' => 5,
                'is_active' => true,
                'display_order' => 7,
            ],
            [
                'client_name' => 'Harish Chandra',
                'company' => 'IRCON International Ltd',
                'designation' => 'Chief Infrastructure Planner',
                'content' => 'Shallom Prefab Systems delivered robust, relocatable site offices for our railway corridor project. Excellent structural engineering, heavy vinyl floor finish, and quick on-site assembly.',
                'rating' => 5,
                'is_active' => true,
                'display_order' => 8,
            ],
        ];

        foreach ($testimonials as $data) {
            \App\Models\Testimonial::updateOrCreate(
                ['client_name' => $data['client_name'], 'company' => $data['company']],
                $data
            );
        }
    }
}
