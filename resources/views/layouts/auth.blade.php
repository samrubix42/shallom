<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-[#FAF9F5]">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>@yield('title', $title ?? 'Admin Login | Shallom Prefab Systems')</title>
        <meta name="description" content="@yield('meta_description', 'Secure login portal for Shallom Prefab Systems admin access.')">

        <!-- Google Fonts: Inter & Manrope -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">

        <!-- Remix Icon CDN -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body class="h-full font-sans antialiased text-slate-900 bg-[#FAF9F5] selection:bg-[#FF8B02] selection:text-white flex flex-col justify-center py-12 px-4 sm:px-6 lg:px-8">
        
        {{ $slot }}

        @livewireScripts
    </body>
</html>
