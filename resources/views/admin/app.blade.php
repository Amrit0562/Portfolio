<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Amrit Bhandari">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Portfolio admin @yield('title')</title>

    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('assets/css/app.min.css') }}?v={{ time() }}">
    <!-- plugin css -->
    <link href="{{ asset('assets/libs/jsvectormap/css/jsvectormap.min.css" rel="stylesheet" type="text/css') }}">
    <!-- App css -->
    <link href="{{ asset('assets/css/app.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Icons css -->
    <link href="{{ asset('assets/css/icons.min.css') }}" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.css">

    @stack('styles')

</head>

<body class="">
    <div class="flex wrapper">
        @include('admin.partials.siderbar')
        <div class="page-content">
            @include('admin.partials.navigation')
            @include('admin.partials.themesetting')
            @yield('content')
        </div>
    </div>

    <!-- Theme Config Js -->
    <script src="{{ asset('assets/js/config.js') }}"></script>
    <!-- Plugin Js -->
    <script src="{{ asset('assets/libs/simplebar/simplebar.min.js') }}"></script>
    <script src="{{ asset('assets/libs/lucide/umd/lucide.min.js') }}"></script>
    <script src="{{ asset('assets/libs/@frostui/tailwindcss/frostui.js') }}"></script>
    <!-- App Js -->
    <script src="{{ asset('assets/js/app.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>

    <!-- Apex Charts js -->
    <script src="{{ asset('assets/libs/apexcharts/apexcharts.min.js') }}"></script>
    <!-- Vector Map Js -->
    <script src="{{ asset('assets/libs/jsvectormap/js/jsvectormap.min.js') }}"></script>
    <script src="{{ asset('assets/libs/jsvectormap/maps/world-merc.js') }}"></script>
    <script src="{{ asset('assets/libs/jsvectormap/maps/world.js') }}"></script>
    <!-- Dashboard App js -->
    <script src="{{ asset('assets/js/pages/dashboard.js') }}"></script>
    {{-- <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11.4.19/dist/sweetalert2.min.js"></script> --}}
    <script src="//unpkg.com/alpinejs" defer></script>

    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    @stack('scripts')
    @include('admin.message.flash');
</body>

</html>
