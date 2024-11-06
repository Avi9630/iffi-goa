@extends('layouts.app')
@section('site_title', 'International Competition - IFFI Goa 2023')
@section('site_description',
    'Discover the best of global cinema at the International Competition of IFFI Goa. Celebrate
    creativity and innovation in film from around the world!')
    {{-- @section('site_keywords', 'About IFFI Goa, IFFI goa, IFFI goa registration, IFFI goa delegate registration, About us') --}}
@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-InternationalCompetition py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">International Competition 2024</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                @foreach ($internationalCinemas as $internationalCinema)
                    <div class="col-md-3 col-sm-4 col-xs-12 d-flex">
                        <div class="card shadow-sm w-100">
                            <div class="card-image min-size-img">
                                <img src="{{ asset('public/images/international-competition/2024/' . $internationalCinema->img_src) }}"
                                    alt="{{ $internationalCinema->title }} image" class="img-fluid">
                            </div>
                            <div class="card-body text-start">
                                <div class="card-text d-flex">
                                    <div class="iCinema-content">
                                        <h4 class="title">{{ $internationalCinema->title }}</h4>
                                        <h5>
                                            <span>Directed by</span>
                                            <span>:</span>
                                            <span>{{ $internationalCinema->directed_by }}</span>
                                        </h5>
                                        <h5>
                                            <span>Country of Origin</span>
                                            <span>:</span>
                                            <span>{{ $internationalCinema->country_of_origin }}</span>
                                        </h5>
                                        <h5>
                                            <span>Language</span>
                                            <span>:</span>
                                            <span>{{ $internationalCinema->language }}</span>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
