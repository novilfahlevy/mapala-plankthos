<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Favicons -->
        <link href="{{ asset('storage/img/logompl.png') }}" rel="icon">
        <link href="{{ asset('storage/img/apple-touch-icon.png') }}" rel="apple-touch-icon">

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap">

        <!-- Scripts -->
        @vite(['resources/css/app.css'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-gray-200">
            @include('backend.layouts.navigation')
            
            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>

        @vite(['resources/js/app.js'])
        
        @isset($scripts)
        {{ $scripts }}
        @endisset
    </body>
</html>
