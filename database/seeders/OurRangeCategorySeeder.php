<?php

namespace Database\Seeders;

use App\Models\OurRangeCategory;
use Illuminate\Database\Seeder;

class OurRangeCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories = [
            [
                'name' => 'Prefab Portable Houses',
                'slug' => 'prefab-portable-houses',
                'is_active' => true,
            ],
            [
                'name' => 'Site Office Cabins',
                'slug' => 'site-office-cabins',
                'is_active' => true,
            ],
            [
                'name' => 'Building Metal Structures',
                'slug' => 'building-metal-structures',
                'is_active' => true,
            ],
            [
                'name' => 'Labour Hutment Camps',
                'slug' => 'labour-hutment-camps',
                'is_active' => true,
            ],
        ];

        foreach ($categories as $cat) {
            OurRangeCategory::updateOrCreate(
                ['slug' => $cat['slug']],
                $cat
            );
        }
    }
}
