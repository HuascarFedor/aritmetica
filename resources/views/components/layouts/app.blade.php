<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite('resources/css/app.css')
    <title>Aritmetica - {{ $title ?? '' }}</title>
</head>
<body>
    <x-layouts.navigation />
    <section class="container mx-auto mt-4 p-3 bg-gray-50 rounded border-gray-200 dark:bg-gray-800 dark:border-gray-700">
        {{ $slot }}
    </section>

    @vite('resources/js/app.js')
</body>
</html>