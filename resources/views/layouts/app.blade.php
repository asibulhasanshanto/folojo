<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>
    <link rel="icon" href="{{ asset('images/logo.png') }}" type="image/png">


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js', 'resources/js/admin/sidebar.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-gray-100 ">

        @include('layouts.admin.sidebar')
        @include('layouts.admin.navbar')
        {{-- toast notification if session has any success , error message --}}
        @if (session()->has('success'))
            <div class="bg-green-500 text-white p-4 text-center">
                {{ session('success') }}
            </div>
        @endif
        @if (session()->has('error'))
            <div class="bg-red-500 text-white p-4 text-center">
                {{ session('error') }}
            </div>
        @endif

        <main>
            {{ $slot }}
        </main>
    </div>
</body>

</html>
