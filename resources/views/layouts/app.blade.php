<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" class="max-xl:text-[15px] tab:text-[14px] 2sm:text-[13px]">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @stack('scripts')
        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Rounded:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles
    </head>
    <body 
        class="leading-none"
        x-data="{ scrolled: false }" 
        x-init="
            window.addEventListener('scroll', () => { scrolled = (window.scrollY > 50); });
        "
    >
        <x-jet-banner />
        @livewire('navigation-menu')            
        {{ $slot }}
            
        <livewire:footer />
        @stack('modals')

        @livewireScripts
    </body>
</html>
