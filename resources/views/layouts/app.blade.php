<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="@yield('page_description', config('app.description'))">
        <title>@yield('page_title', config('app.name')) - {{ config('app.name') }}</title>

        @include('libraries.client.styles')

        @vite(['resources/css/app.css', 'resources/js/app.js'])

        @livewireStyles
    </head>
    <body>
        <main>

            @include('components.main.client.header')

            {{ $slot }}

            @include('components.main.client.footer')

        </main>


        @stack('modals')

        @include('libraries.client.scripts')

        @livewireScripts
    </body>
</html>
