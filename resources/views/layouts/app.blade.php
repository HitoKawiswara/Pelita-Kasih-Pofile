<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css"/>
    <link rel="stylesheet" href="{{ asset('css/swiper.css') }}">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <link rel="stylesheet" href="{{ asset('css/strukturSekolah.css') }}">
    <link rel="stylesheet" href="{{ asset('css/newsCard.css') }}">

    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>

<body class="antialiased bg-zinc-100">
    <div>
        <x-app-logo/>
        @include('layouts.navigation')
        <main>
            {{ $slot }}
        </main>
    </div>
    <footer>
        @include('layouts.footer')
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="{{ asset('js/swiper.js') }}"></script>
    <script src="{{ asset('js/clickToScroll.js') }}"></script>
</body>
</html>
