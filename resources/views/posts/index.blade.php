<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <title>Blog</title>
        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">
    </head>
    <x-app-layout>
        <body>
            <h1>Blog Name</h1>
        <div class='bus_stop'>
                @foreach ($bus_stops as $bus_stop)
                    <div class='post'>
                        <a href="/show/{{ $bus_stop->id }}" class='title'>{{ $bus_stop->place }}</a>
                        <p class='body'>{{ $bus_stop->up_or_down }}</p>
                    </div>
                @endforeach
        </div>
        </body>
    </x-app-layout>
</html>