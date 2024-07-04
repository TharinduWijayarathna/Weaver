<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    @include('libraries.admin.styles')

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    @livewireStyles
</head>

<body class="nav-fixed bg-light">
    <!-- Top app bar navigation menu-->
    @include('components.main.admin.header')
    <!-- Layout wrapper-->
    <div id="layoutDrawer">
        <!-- Layout navigation-->
        @include('components.main.admin.sidebar')

        <!-- Layout content-->
        <div id="layoutDrawer_content">
            <!-- Main page content-->

            {{ $slot }}

            @include('components.main.admin.footer')
        </div>
    </div>
    @stack('modals')

    @include('libraries.admin.scripts')

    @livewireScripts
</body>

</html>
