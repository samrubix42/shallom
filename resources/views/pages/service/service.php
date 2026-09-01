<?php

use Livewire\Attributes\Layout;
use Livewire\Attributes\Title;
use Livewire\Component;

new #[Layout('layouts::app')] #[Title('Core Business Verticals & Turnkey Services | Shallom Prefab Systems')] class extends Component
{
    public array $verticals = [
        [
            'slug' => 'hospitality-tourism-infrastructure',
            'title' => 'Hospitality & Tourism Infrastructure',
            'tagline' => 'Modular Resorts, Eco-Cottages & Guest Houses',
            'icon' => 'ri-hotel-line',
            'image' => 'shallom/IMG-20260901-WA0033.jpg',
            'summary' => 'Delivering high-end modular resort cottages, glamping cabins, and guest quarters designed for extreme weather endurance without harming surrounding natural landscapes.',
            'sub_offerings' => [
                'Modular Resorts & Eco-Cottages',
                'Premium Guest Houses & Recreation Blocks',
            ],
            'highlights' => [
                'Wooden-finish aesthetic with structural steel framing',
                'Superior thermal insulation for extreme weather zones',
                'Zero-site damage eco-friendly construction',
            ],
        ],
        [
            'slug' => 'institutional-accommodation-solutions',
            'title' => 'Institutional & Accommodation Solutions',
            'tagline' => 'Schools, Classrooms, Student Hostels & Labour Colonies',
            'icon' => 'ri-government-line',
            'image' => 'shallom/IMG-20260901-WA0034.jpg',
            'summary' => 'Rapidly deployable pre-engineered school buildings, multi-story student hostels, and industrial worker housing camps engineered for high density and durability.',
            'sub_offerings' => [
                'School Buildings & Modern Classrooms',
                'Hostel Blocks & Student Housing',
                'Labour Accommodation Blocks & Worker Colonies',
            ],
            'highlights' => [
                'Fire-retardant Aerocon wall panel construction',
                'Multi-story G+1 / G+2 structural options',
                'Demountable & relocatable worker colonies',
            ],
        ],
        [
            'slug' => 'commercial-site-utilities',
            'title' => 'Commercial & Site Utilities',
            'tagline' => 'Site Offices, Executive Cabins & Rooftop Extensions',
            'icon' => 'ri-building-4-line',
            'image' => 'shallom/IMG-20260901-WA0035.jpg',
            'summary' => 'Customized turnkey site offices, glass-partitioned manager cabins, security guard posts, and lightweight rooftop building extensions.',
            'sub_offerings' => [
                'Site Offices & Executive Cabins',
                'Rooftop Buildings & Structural Extensions',
            ],
            'highlights' => [
                'Concealed electrical wiring & UPVC windows',
                'Lightweight dead-load avoiding foundation stress',
                'Rapid 48-hour site assembly turnaround',
            ],
        ],
        [
            'slug' => 'specialized-interior-contracting',
            'title' => 'Specialized Interior Contracting',
            'tagline' => 'Dry Wall Partitions, Acoustic Ceilings & Insulation',
            'icon' => 'ri-layout-4-line',
            'image' => 'shallom/IMG-20260901-WA0036.jpg',
            'summary' => 'High-performance interior partition systems, acoustic false ceilings, and industrial sandwich panel insulation designed for energy efficiency and sound damping.',
            'sub_offerings' => [
                'Dry Wall Partition Work & Acoustic Ceilings',
                'Industrial Wall Panelling & Thermal Insulation',
            ],
            'highlights' => [
                'Saves up to 40% HVAC energy consumption',
                'Acoustic noise isolation & moisture barrier',
                'ISO 9001:2015 quality norms compliance',
            ],
        ],
    ];
};
