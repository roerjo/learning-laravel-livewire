<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracasts Livewire Basics</title>

        <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet">

        @livewireStyles
    </head>
    <body class="antialiased container mx-auto">
        <h2 class="text-2xl text-center my-4">Laracasts Livewire Basics Series</h2>

        <hr>

        <livewire:counter />

        <hr>

        <livewire:contact-form />

        <hr>

        <livewire:search-dropdown />

        <hr>

        @livewireScripts
    </body>
</html>
