<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::admin')] #[Title('Admin Dashboard | Shallom Prefab Systems')] class extends Component
{
    public array $recentEnquiries = [
        [
            'id' => 'ENQ-2026-001',
            'client_name' => 'L&T Construction Site Desk',
            'phone' => '+91-9899552380',
            'vertical' => 'Commercial Site Utilities',
            'product' => 'Prefabricated Site Office Cabin',
            'location' => 'Noida Sector 62',
            'date' => 'Today, 02:45 PM',
            'status' => 'Pending Review',
        ],
        [
            'id' => 'ENQ-2026-002',
            'client_name' => 'Adani Infra Projects',
            'phone' => '07942550323',
            'vertical' => 'Institutional Accommodation',
            'product' => 'Labour Hutments for Construction Sites',
            'location' => 'Mundra Port Site',
            'date' => 'Today, 11:15 AM',
            'status' => 'Quoted',
        ],
        [
            'id' => 'ENQ-2026-003',
            'client_name' => 'Devyani International',
            'phone' => '+91-9899552380',
            'vertical' => 'Hospitality & Tourism',
            'product' => 'Prefab Portable House & Cottages',
            'location' => 'Shimla Eco Resort',
            'date' => 'Yesterday, 04:30 PM',
            'status' => 'Completed',
        ],
    ];
};
