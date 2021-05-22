<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laracasts Livewire Basics</title>

        @livewireStyles
    </head>
    <body class="antialiased">
        <livewire:counter />

        <hr>


        @livewireScripts
    </body>
</html>
