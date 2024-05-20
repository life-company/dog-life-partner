<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <title>{{ config('app.name') }}</title>
        @if(env('APP_ENV') === 'local')
          @vite(['resources/css/app.css', 'resources/js/app.js'])
        @endif
    </head>
    <body>
    <header>
        <h1 class="h6 bg-success text-white py-2 ps-2 m-0">静岡県で少しでも多くの犬の命を救いたいです</h1>
    </header>
    <main>
        @yield('content')
    </main>
    <footer class="bg-success text-white py-2">
        <p class="text-center m-0">&copy; 里親募集掲示板 2024 <?= date('Y') != 2024 ? '-' . date('Y') : '' ?></p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>
    </body>
</html>