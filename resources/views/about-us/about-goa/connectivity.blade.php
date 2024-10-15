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
    <div class="container-fluid page-header bannerBg-IFFI-Connect-banner py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Connectivity</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <section class="container connectivity">
        <div class="connectivity-block">
            <img src="{{ asset('public/images/icon/Air-icon.png') }}" class="img-fluid" alt="" srcset="">
            <div class="connectivity-block-content">
                <h3>Air</h3>
                <p>Goa is served by two International Airports, the Goa International Airport, is a civil enclave at INS
                    Hansa, a Naval airfield located at Dabolim, near Vasco da Gama and the New Goa International Airport
                    in Mopa. The airport caters to scheduled domestic and international air services, with the new
                    airport starting international operations from March 2023.</p>
            </div>
        </div>
        <div class="connectivity-block">
            <img src="{{ asset('public/images/icon/Rail-icon.png') }}" class="img-fluid" alt="" srcset="">
            <div class="connectivity-block-content">
                <h3>Rail</h3>
                <p>The two major railheads that connect Goa with other states of the country are Vasco da Gama and
                    Madgaon Railway Station.</p>
            </div>
        </div>
        <div class="connectivity-block">
            <img src="{{ asset('public/images/icon/Car-icon.png') }}" class="img-fluid" alt="" srcset="">
            <div class="connectivity-block-content">
                <h3>Road</h3>
                <p>Goa has an extensive roadway network which is efficiently connected with other states of the nation.
                </p>
            </div>
        </div>
    </section>

@endsection
