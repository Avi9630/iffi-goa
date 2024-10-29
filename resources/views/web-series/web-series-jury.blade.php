@extends('layouts.app')
@section('site_title', 'Explore IFFI Goa 2024 International Festival Venues')
@section('site_description',
    'Discover the vibrant festival venues of IFFI Goa 2024. Get detailed information on
    locations, facilities, and events happening at each venue.')
@section('site_keywords',
    'IFFI Goa information, IFFI event venue, About IFFI venue, Festival location details, IFFI
    history and venue, Film festival India, Film festival venue, IFFI international film festival')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Best OTT Jury - 2024</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">

            <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-7 ">
                            <div class="international-jury-text">
                                <h2 class="mt-3">Mr. Madhur Bhandarkar </h2>
                                <h5>Filmmaker</h5>
                                <p>
                                    Madhur Bhandarkar was born on August 26, 1966 in Bombay, Maharashtra, India. He is a
                                    director and writer, known for Chandni Bar (2001), Babli Bouncer (2022) and Page 3
                                    (2005). He has been married to Renu Namboodiri since December 15, 2003. They have one
                                    child.<br>
                                    Associated with International Film & TV Research Centre of the Asian Academy Of Film and
                                    television, noida film city.<br>
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/ott-jury/Madhur-Bhandarkar.avif') }}"
                                    class="img-fluid" style="width:100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @php
                $features = ['Mr. Krishna Hebbale', 'Ms. Rupali Ganguli', 'Mr. Harish Shankar'];
            @endphp

            <div class="card">
                <div class="card-body">
                    <ol>
                        @foreach ($features as $key => $feature)
                            <li>{{ $feature }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>


        </div>
    </div>
@endsection
