<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Shallom Prefab Systems | Modern Prefabricated Houses & Modular Structures' }}</title>
        <meta name="description" content="Shallom Prefab Systems - Leading Manufacturer and Service Provider of Prefabricated Houses, Modular Cabins, Site Offices, Steel Buildings, Labour Hutments, and Aerocon Wall Panels in India.">

        <!-- Google Fonts: Outfit -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="bg-white text-slate-900 font-sans antialiased selection:bg-[#FF8B02] selection:text-white flex flex-col min-h-screen">

        
        <!-- Header Navigation -->
        <x-public.header />

        <!-- Main Content -->
        <main class="flex-grow">
            {{ $slot }}
        </main>

        <!-- Footer -->
        <x-public.footer />

        @livewireScripts
    </body>
</html>

