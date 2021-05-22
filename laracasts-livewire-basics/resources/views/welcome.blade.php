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
        <livewire:counter />

        <hr>

        <livewire:contact-form />

        <hr>

        @livewireScripts
    </body>
</html>
