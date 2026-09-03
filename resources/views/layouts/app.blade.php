<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="scroll-smooth">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? (setting('company_name', 'Shallom Prefab Systems') . ' | ' . setting('company_tagline', 'Modern Prefabricated Houses & Modular Structures')) }}</title>
        <meta name="description" content="{{ setting('about_summary', 'Shallom Prefab Systems - Leading Manufacturer and Service Provider of Prefabricated Houses, Modular Cabins, Site Offices, Steel Buildings, Labour Hutments, and Aerocon Wall Panels in India.') }}">
        <link rel="icon" type="image/x-icon" href="{{ asset(setting('favicon', 'favicon.ico')) }}">

        <!-- Google Fonts: Inter & Manrope -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">

        <!-- Remix Icon CDN -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">

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

        <x-toaster />

        @livewireScripts
    </body>
</html>
