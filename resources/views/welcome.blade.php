<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=abyssinica-sil:400" rel="stylesheet" />

        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="antialiased font-serif">
        <div class="w-1/3 mx-auto text-center">
            <div class="text-3xl my-5">{{ config('app.name') }}</div>
            <div class="mt-3 text-gray-500">{{ __('Simple bug tracker and reporting software') }}</div>
            <div class="mt-5 space-x-5">
                <a href="{{ route('login') }}" class="text-primary">{{ __('Login') }}</a>
                <a href="#" class="text-primary">{{ __('Projects') }}</a>
            </div>
        </div>
    </body>
</html>
