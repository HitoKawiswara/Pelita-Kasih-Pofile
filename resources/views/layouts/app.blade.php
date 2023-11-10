<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <script src="{{ asset('js/app.js') }}" defer></script>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
    rel="stylesheet">

    <title>{{ config('app.name', 'Laravel') }}</title>
</head>
<body>
    <header>
        @include('components.header')
    </header>
    <div>
        @include('components.navigation')
        <main>
            {{ $slot }}
        </main>
    </div>
    <footer class="bg-white mt-5">
        @include('components.footer')
    </footer>
    @vite(['resources/js/app.js'])
</body>
</html>
