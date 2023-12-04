<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">



    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <title>Admin-{{ config('app.name', 'Laravel') }}</title>
</head>

<body class="antialiased bg-zinc-100">
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100">
            {{ $slot }}
        </div>
    </body>
    <script src="{{ asset('js/togglePassVis.js') }}"></script>
</body>

</html>
