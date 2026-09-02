<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
            ['key' => 'company_tagline', 'value' => 'Design for the Future | Innovative Engineering. Sustainable Construction.', 'group' => 'general'],
            ['key' => 'proprietor', 'value' => 'Mr. Arvind Kumar Gautam', 'group' => 'company'],
            ['key' => 'incorporation_year', 'value' => '2009 (GST Registered: July 2017)', 'group' => 'company'],
            ['key' => 'turnover', 'value' => '₹5 Crore – ₹25 Crore', 'group' => 'company'],
            ['key' => 'team_size', 'value' => '26 – 50 Skilled Professionals', 'group' => 'company'],
            ['key' => 'gst_no', 'value' => '07ANDPG4822C2ZI', 'group' => 'company'],
            ['key' => 'banker', 'value' => 'AXIS BANK', 'group' => 'company'],
            ['key' => 'phone', 'value' => '+91-9899552380', 'group' => 'contact'],
            ['key' => 'landline', 'value' => '07942550323', 'group' => 'contact'],
            ['key' => 'email', 'value' => 'shallomprefabsystems@gmail.com', 'group' => 'contact'],
            ['key' => 'address', 'value' => 'N-3/A-3, Dilshad Garden, Delhi – 110095, India', 'group' => 'contact'],
            ['key' => 'website', 'value' => 'http://www.shallomprefab.com/', 'group' => 'contact'],
            ['key' => 'business_hours', 'value' => 'Monday to Saturday | 09:00 AM – 07:00 PM IST', 'group' => 'contact'],
            ['key' => 'about_summary', 'value' => 'Shallom Prefab Systems is a dynamic, rapidly growing manufacturer, exporter, and turnkey service provider specializing in advanced prefabricated construction solutions.', 'group' => 'general'],
        ];

        foreach ($settings as $setting) {
            \App\Models\Setting::updateOrCreate(
                ['key' => $setting['key']],
                $setting
            );
        }
    }
}
