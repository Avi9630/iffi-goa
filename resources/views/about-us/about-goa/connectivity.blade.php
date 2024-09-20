@extends('layouts.app')
@section('site_title', 'Discover easy travel options to IFFI Goa')
@section('site_description',
    'Find details on flights, trains, and road routes for a seamless journey to the
    International Film Festival of India.')
@section('site_keywords',
    'IFFI Goa connectivity, Travel to IFFI Goa, Goa transport options, IFFI venue access, Reach
    IFFI Goa, Airport to IFFI Goa, Public Transport Goa, Transport in Goa for IFFI')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-festival-venue py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Connectivity</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    Connectivity

@endsection
