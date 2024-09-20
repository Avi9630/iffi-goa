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
    <div class="container-fluid page-header bannerBg-festival-venue py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Festival Venue</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->

    <div class="col-lg-12 mt-5 static-content">

        <div class="container">
            <!-- Opening & Closing Venue -->
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="section-heading title-line mb-4">
                        <h2>Opening & Closing Venue</h2>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="card shadow-sm">
                            <div class="card-image">
                                <img src="{{ asset('public/images/festival-venue/8XXPG5_1662036972426_0.jpg') }}"
                                    class="img-fluid">
                            </div>
                            <div class="card-body text-start">
                                <h4 class="title">DR. SHYAMA PRASAD MUKHERJEE INDOOR STADIUM</h4>
                                <p class="card-text d-flex">
                                    <span class="location-icon">
                                        <img src="{{ asset('public/images/festival-venue/location-icon.svg') }}"
                                            alt="" srcset="">
                                    </span>
                                    <a href="#">Goa University, MDR3, Taleigao, Goa 403206</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Opening & Closing Venue Ends -->

            <!-- Opening & Closing Venue -->
            <div class="row">
                <div class="col-lg-12 mt-3 ">
                    <div class="section-heading title-line mb-4">
                        <h2>Screening Venues</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="card shadow-sm">
                                <div class="card-image">
                                    <img src="{{ asset('public/images/festival-venue/goa.jpg') }}" class="img-fluid">
                                </div>
                                <div class="card-body text-start">
                                    <h4 class="title">INOX PANJIM</h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="card shadow-sm">
                                <div class="card-image">
                                    <img src="{{ asset('public/images/festival-venue/INOX-PORVORIM.jpg') }}"
                                        class="img-fluid">
                                </div>
                                <div class="card-body text-start">
                                    <h4 class="title">INOX PORVORIM</h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="card shadow-sm">
                                <div class="card-image">
                                    <img src="{{ asset('public/images/festival-venue/MAQUINEZ.jpg') }}" class="img-fluid">
                                </div>
                                <div class="card-body text-start">
                                    <h4 class="title">MAQUINEZ PALACE, GOA</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Opening & Closing Venue Ends -->

            <!-- Open Air Screening -->
            <div class="row">
                <div class="col-lg-12 mt-3 ">
                    <div class="section-heading title-line mb-4">
                        <h2>Open Air Screening</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="card shadow-sm">
                                <div class="card-image">
                                    <img src="{{ asset('public/images/festival-venue/MIRAMAR-BEACH.jpg') }}"
                                        class="img-fluid">
                                </div>
                                <div class="card-body text-start">
                                    <h4 class="title">MIRAMAR BEACH</h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="card shadow-sm">
                                <div class="card-image">
                                    <img src="{{ asset('public/images/festival-venue/RAVINDRA-BHAVAN.jpg') }}"
                                        class="img-fluid">
                                </div>
                                <div class="card-body text-start">
                                    <h4 class="title">RAVINDRA BHAVAN FATORDA</h4>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="card shadow-sm">
                                <div class="card-image">
                                    <img src="{{ asset('public/images/festival-venue/ANJUNA-BEACH.jpg') }}"
                                        class="img-fluid">
                                </div>
                                <div class="card-body text-start">
                                    <h4 class="title">ANJUNA BEACH</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Open Air Screening Ends -->

            <!-- Masterclasses & In-Conversation Sessions-->
            <div class="row">
                <div class="col-lg-12 mt-3 ">
                    <div class="section-heading title-line mb-4">
                        <h2>Masterclasses & In-Conversation Sessions</h2>
                    </div>
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="card shadow-sm">
                                <div class="card-image">
                                    <img src="{{ asset('public/images/festival-venue/KALA-ACADEMY.jpg') }}"
                                        class="img-fluid">
                                </div>
                                <div class="card-body text-start">
                                    <h4 class="title">KALA ACADEMY</h4>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Masterclasses & In-Conversation Sessions -->
        </div>

    </div>


@endsection
