<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $settings = [
            ['key' => 'company_name', 'value' => 'Shallom Prefab Systems', 'group' => 'general'],
            ['key' => 'company_tagline', 'value' => 'Innovative Modular Engineering. Scalable Turnkey Construction.', 'group' => 'general'],
            ['key' => 'logo', 'value' => 'logo.webp', 'group' => 'general'],
            ['key' => 'favicon', 'value' => 'favicon.ico', 'group' => 'general'],
            ['key' => 'proprietor', 'value' => 'Mr. Arvind Kumar', 'group' => 'company'],
            ['key' => 'established_year', 'value' => '2017', 'group' => 'company'],
            ['key' => 'annual_capacity', 'value' => '₹25 Cr', 'group' => 'company'],
            ['key' => 'skilled_engineers', 'value' => '50+', 'group' => 'company'],
            ['key' => 'structure_lifespan', 'value' => '50 Years', 'group' => 'company'],
            ['key' => 'phone', 'value' => '+91 98995 52380', 'group' => 'contact'],
            ['key' => 'secondary_phone', 'value' => '+91 70650 13555', 'group' => 'contact'],
            ['key' => 'whatsapp_phone', 'value' => '+91 98995 52380', 'group' => 'contact'],
            ['key' => 'email', 'value' => 'shallomprefab@yahoo.com', 'group' => 'contact'],
            ['key' => 'address', 'value' => 'N-3/A-3, Dilshad Garden, Delhi - 110095', 'group' => 'contact'],
            ['key' => 'branch_address', 'value' => 'D-15, Sector 3, Noida (U.P.) - 201301', 'group' => 'contact'],
            ['key' => 'website', 'value' => 'https://www.shallomprefabsystems.com', 'group' => 'contact'],
            ['key' => 'about_summary', 'value' => 'Shallom Prefab Systems delivers innovative modular engineering and scalable turnkey construction for residential, commercial, and industrial projects across India.', 'group' => 'general'],
        ];

        foreach ($settings as $setting) {
            Setting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
