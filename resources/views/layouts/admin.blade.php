<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="h-full bg-[#FAF9F5]">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>{{ $title ?? 'Admin Control Center | Shallom Prefab Systems' }}</title>

        <!-- Google Fonts: Inter & Manrope -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&family=Manrope:wght@600;700;800&display=swap" rel="stylesheet">

        <!-- Remix Icon CDN -->
        <link href="https://cdn.jsdelivr.net/npm/remixicon@4.2.0/fonts/remixicon.css" rel="stylesheet">

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        <!-- TinyMCE CDN -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/6.8.2/tinymce.min.js" referrerpolicy="no-referrer"></script>

        @livewireStyles
    </head>
    <body class="h-full font-sans antialiased text-slate-900 selection:bg-[#FF8B02] selection:text-white"
          x-data="{ sidebarOpen: false }">

        <div class="h-screen flex overflow-hidden bg-[#FAF9F5]">
            
            <!-- Desktop Sidebar -->
            <div class="hidden lg:flex lg:flex-col shrink-0 h-full">
                <livewire:admin.sidebar />
            </div>

            <!-- Mobile Drawer Sidebar -->
            <div x-show="sidebarOpen" 
                 x-cloak 
                 class="fixed inset-0 z-50 flex lg:hidden">
                
                <div x-show="sidebarOpen" 
                     @click="sidebarOpen = false" 
                     x-transition:enter="transition-opacity ease-linear duration-300"
                     x-transition:enter-start="opacity-0"
                     x-transition:enter-end="opacity-100"
                     x-transition:leave="transition-opacity ease-linear duration-200"
                     x-transition:leave-start="opacity-100"
                     x-transition:leave-end="opacity-0"
                     class="fixed inset-0 bg-slate-900/60 backdrop-blur-xs"></div>

                <div x-show="sidebarOpen" 
                     x-transition:enter="transition ease-in-out duration-300 transform"
                     x-transition:enter-start="-translate-x-full"
                     x-transition:enter-end="translate-x-0"
                     x-transition:leave="transition ease-in-out duration-200 transform"
                     x-transition:leave-start="translate-x-0"
                     x-transition:leave-end="-translate-x-full"
                     class="relative flex-1 flex flex-col max-w-xs w-full bg-white h-full">
                    <livewire:admin.sidebar />
                </div>
            </div>

            <!-- Right Content Area -->
            <div class="flex-1 flex flex-col min-w-0 h-full overflow-hidden">
                
                <!-- Admin Top Header -->
                <div class="shrink-0">
                    <livewire:admin.header />
                </div>

                <!-- Page Main Slot -->
                <main class="flex-1 p-4 sm:p-6 lg:p-8 overflow-y-auto">
                    {{ $slot }}
                </main>

            </div>

        </div>

        <x-toaster />

        @livewireScripts
    </body>
</html>
