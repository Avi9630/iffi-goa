<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('site_title')</title>
    <meta name="description" content="@yield('site_description')">
    <meta name="keywords" content="@yield('site_keywords')" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/iffigoa.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery.js/dist/css/lightgallery.css">
    <link rel="icon" href="{{ asset('public/images/iffigoa.jpg') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- @livewireStyles --}}
</head>

<body id="text-resize">
    {{-- @include('layouts.gig') --}}
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
