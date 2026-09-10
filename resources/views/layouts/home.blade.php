<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>@yield('title', config('app.name', 'YoupiHost'))</title>

    {{-- Styles & Scripts --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    {{-- Lucide Icons --}}
    <script src="https://unpkg.com/lucide@latest/dist/umd/lucide.min.js"></script>

    {{-- Drawer mobile styles --}}
    <style>
        #mobile-drawer { transform: translateX(-100%); transition: transform 0.3s ease; }
        #mobile-drawer.drawer-open { transform: translateX(0); }
        #drawer-overlay { transition: opacity 0.3s ease; }
    </style>

    {{-- Styles supplémentaires par page --}}
    @stack('styles')
</head>
<body class="bg-gray-50 font-sans">

{{-- Header (même que les autres pages) --}}
<x-layout.site-header />

{{-- Contenu principal --}}
<main>
    @yield('content')
</main>

{{-- Footer SPÉCIFIQUE HOME --}}
<x-layout.home-footer />

{{-- Scripts supplémentaires par page --}}
@stack('scripts')
</body>
</html>
