<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie-edge">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="{{ asset('images/laque-logo.png') }}">

        <title>{{ config('app.name', 'Laque Beach') }}</title>

        <!-- Fonts -->
        <!-- Gogole Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@200;300;400;600;700;800;900&family=Signika+Negative:wght@600;700&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap">

        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

        

        <style>
            html {
                font-family: "Poppins", sans-serif;
            }

            .sec-font {
                font-family: 'Signika Negative', sans-serif;
            }

            
        </style>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="overflow-x-hidden">
        <div class="min-h-screen bg-zinc-50">

            @include('layouts.navigation')
            
            <!-- Page Heading -->
            {{-- @if (isset($header))
                <header class="bg-white shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif --}}
                
            <!-- Page Content -->
            <main class="flex flex-col justify-center mt-16  bg-zinc-50" >
                {{ $slot }}
            </main>

            @include('layouts.footer')
        </div>
    </body>
</html>
