<?php
$key = request()->query('testing');

if ($key) {
    global $web_data_json;
    $web_data_json = json_decode(file_get_contents(public_path('web_data.json')), true);
}
?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('site_title')</title>
    {{-- Newly addedd schema  start --}}
    <meta name="google-site-verification" content="9_krdREvjG1HBVCilUlp5DNhLm1PgwIRs8mbIlLeX5s" />
    <meta property="og:title" content="International Film Festival of India (IFFI)" />
    <meta property="og:description"
        content="Explore the International Film Festival of India (IFFI), Asia's prestigious film festival showcasing global cinema in Goa. Visit for updates, events, and highlights." />
    <meta property="og:url" content="https://www.iffigoa.org" />
    <meta property="og:image" content="https://www.iffigoa.org/assets/images/iffi-logo.jpg" />
    <meta property="og:type" content="website" />
    <meta property="og:locale" content="en_IN" />
    <!-- Twitter Cards -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="International Film Festival of India (IFFI)">
    <meta name="twitter:description"
        content="Discover the International Film Festival of India (IFFI), Asia's premier film festival showcasing diverse cinema from around the world.">
    <meta name="twitter:image" content="https://www.iffigoa.org/assets/images/iffi-logo.jpg">
    <meta name="twitter:site" content="@iffigoa">
    {{-- Newly addedd schema  end --}}
    <meta name="description" content="@yield('site_description')">
    <meta name="keywords" content="@yield('site_keywords')" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/iffigoa.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('public/css/cube.css') }}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/lightgallery.js/dist/css/lightgallery.css">
    <link rel="icon" href="{{ asset('public/images/iffigoa.jpg') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    {{-- @livewireStyles --}}
    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4NMQ992Q1W"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());
        gtag('config', 'G-4NMQ992Q1W');
    </script>
</head>

<body id="text-resize">
    {{-- @include('layouts.gig') --}}
    @include('layouts.header')
    @yield('content')
    @include('layouts.footer')
