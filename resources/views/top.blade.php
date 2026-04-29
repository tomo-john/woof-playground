<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>woof-playground</title>

        <link rel="icon" href="/favicon.ico" sizes="any">
        <link rel="icon" href="/favicon.svg" type="image/svg+xml">
        <link rel="apple-touch-icon" href="/apple-touch-icon.png">

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

        <!-- Font Awsome-->
        <script src="https://kit.fontawesome.com/0b1ba1587d.js" crossorigin="anonymous"></script>
    </head>

    <body>
        <div class="flex flex-col justify-center items-center gap-3">
            <div class="text-lg font-bold mt-10">
                Top Page
                <i class="fa-solid fa-dog"></i>
            </div>

            <div id="app"></div>
        </div>

        @viteReactRefresh
        @vite(['resources/js/app.jsx'])
    </body>

</html>

