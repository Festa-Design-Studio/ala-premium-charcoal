<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Àlá Premium Charcoal') }} - @yield('title')</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        @vite(['resources/css/app.css'])

        <!-- Scripts -->
        @vite(['resources/js/app.js'])

        <!-- Alpine.js -->
        <script defer src="https://unpkg.com/alpinejs@3.13.7/dist/cdn.min.js"></script>
        <script>
            document.addEventListener('alpine:init', () => {
                Alpine.store('navigation', {
                    mobileMenuOpen: false
                });
            });
        </script>
    </head>
    <body class="font-poppins antialiased bg-clay-50">
        <div class="min-h-screen flex flex-col">
            <!-- Header -->
            <x-organisms.navigation-header />

            <!-- Main Content -->
            <main class="flex-grow">
                @yield('content')
            </main>

            <!-- Footer -->
            <x-organisms.footer />
        </div>

        @stack('scripts')
    </body>
</html>
