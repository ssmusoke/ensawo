<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Ensawo</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">

@livewireStyles

<!-- Scripts -->
    <script src="{{ mix('js/app.js') }}" defer></script>
</head>
<body class="antialiased">

<div class="flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center sm:pt-0">
    @if (Route::has('login'))
        <div class="hidden fixed top-0 right-0 px-6 py-4 sm:block">
            @auth
                <a href="{{ url('/dashboard') }}" class="text-sm text-gray-700 underline">Dashboard</a>
            @else
                <a href="{{ route('login') }}" class="text-sm text-gray-700 underline">Log in</a>

                @if (Route::has('register'))
                    <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 underline">Register</a>
                @endif
            @endauth
        </div>
    @endif

    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <x-show-breakpoints />
        <div class="rounded-lg divide-y divide-gray-200">
            <div class="px-4 py-5 content-center sm:px-6">
                <img src="{{ asset('img/ensawo-logo.png') }}" alt="Ensawo" class="h-16 sm:h-8"/>
            </div>
            <div class="px-4 py-5 sm:p-6">
                <livewire:transaction-component />
            </div>
            <div class="px-4 py-4 sm:px-6">
                <!-- Content goes here -->
                <!-- We use less vertical padding on card footers at all sizes than on headers or body sections -->
            </div>
        </div>
    </div>
@livewireScripts
</body>
</html>