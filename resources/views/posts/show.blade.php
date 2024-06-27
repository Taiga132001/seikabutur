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
            <h1>{{ $bus_stop->place }}</h1>
            <a>{{$bus_stop->bus_information->time}}</a>
            <a>{{$bus_stop->bus_information->destination}}</a>
        </body>
    </x-app-layout>
</html>