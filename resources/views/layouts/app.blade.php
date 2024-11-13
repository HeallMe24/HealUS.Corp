<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans antialiased">
        <div class="min-h-screen bg-[#E4F0ED] dark:bg-[#1F2F2B]">
            @if(Auth::user() && Auth::user()->role == 'admin')
            @include('layouts.navigation')
            @endif
            <!-- Page Heading -->
            @isset($header)
                <header class="bg-[#F2FCF9] dark:bg-[#364841] shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                    @if(Auth::user() && Auth::user()->role == 'user')
                    <a href="{{ url('/home') }}" class="inline-block px-3 py-1 text-center font-semibold text-sm text-[#3D4B4D] dark:text-[#B7C0C0] bg-[#3A6E6A] rounded-md shadow hover:bg-[#3D8B84] dark:bg-[#4C7572] dark:hover:bg-[#6DAEAE] transition duration-300">
                        {{ __('Kembali ke Beranda') }}
                    </a>
                    @endif
                </header>
            @endisset

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
