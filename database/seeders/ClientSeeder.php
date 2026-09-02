<?php

namespace Database\Seeders;

use App\Models\Client;
use Illuminate\Database\Seeder;

class ClientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $clients = [
            ['name' => 'Larsen & Toubro (L&T)', 'image_path' => 'clients/Picture1.jpg', 'display_order' => 1, 'is_active' => true],
            ['name' => 'Adani Group', 'image_path' => 'clients/Picture2.jpg', 'display_order' => 2, 'is_active' => true],
            ['name' => 'NTPC Limited', 'image_path' => 'clients/Picture3.jpg', 'display_order' => 3, 'is_active' => true],
            ['name' => 'Bharti Airtel', 'image_path' => 'clients/Picture4.jpg', 'display_order' => 4, 'is_active' => true],
            ['name' => 'GMR Infrastructure', 'image_path' => 'clients/Picture5.jpg', 'display_order' => 5, 'is_active' => true],
            ['name' => 'Tata Projects', 'image_path' => 'clients/Picture6.jpg', 'display_order' => 6, 'is_active' => true],
            ['name' => 'Shapoorji Pallonji', 'image_path' => 'clients/Picture7.png', 'display_order' => 7, 'is_active' => true],
            ['name' => 'DLF Cyber City', 'image_path' => 'clients/Picture8.jpg', 'display_order' => 8, 'is_active' => true],
            ['name' => 'IRCON International', 'image_path' => 'clients/Picture9.jpg', 'display_order' => 9, 'is_active' => true],
            ['name' => 'BHEL India', 'image_path' => 'clients/Picture10.png', 'display_order' => 10, 'is_active' => true],
            ['name' => 'NBCC India Ltd', 'image_path' => 'clients/Picture11.jpg', 'display_order' => 11, 'is_active' => true],
            ['name' => 'RITES Limited', 'image_path' => 'clients/Picture12.png', 'display_order' => 12, 'is_active' => true],
            ['name' => 'Engineers India Ltd', 'image_path' => 'clients/Picture13.jpg', 'display_order' => 13, 'is_active' => true],
            ['name' => 'National Highways Authority (NHAI)', 'image_path' => 'clients/Picture14.jpg', 'display_order' => 14, 'is_active' => true],
        ];

        foreach ($clients as $clientData) {
            Client::updateOrCreate(
                ['name' => $clientData['name']],
                $clientData
            );
        }
    }
}
