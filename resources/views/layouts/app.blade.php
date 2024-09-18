<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>55th IFFI Goa International Film Festival | NFDC | MIB</title>
    <meta name="description"
        content="Join 55th IFFI Goa, an international film festival showcasing global cinema. Discover
         films, events, and cultural experiences in the heart of Goa.">
    <meta name="keywords"
        content="IFFI Goa, IFFI Goa 2024, IFFI 2022, 55th IFFI, Goan Films, Goa Film news, Indian films, film in india, information, film festival, film producer, broadcasting" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/iffigoa.css') }}">
    <link rel="icon" href="{{ asset('public/images/iffigoa.jpg') }}" />
</head>

<body id="text-resize">
    @include('layouts.header')
    @yield('main')
    @include('layouts.footer')
