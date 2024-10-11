@extends('layouts.app')
@section('site_title', '55th IFFI Goa International Film Festival | NFDC | MIB')
@section('site_description',
    'Join 55th IFFI Goa, an international film festival showcasing global cinema. Discover
    films, events, and cultural experiences in the heart of Goa.')
@section('site_keywords',
    'IFFI Goa, IFFI Goa 2024, IFFI 2022, 55th IFFI, Goan Films, Goa Film news, Indian films, film
    in india, information, film festival, film producer, broadcasting')
@section('content')

    <!-- Top Logo Section -->
    @include('pages.logo')
    <!-- Top Logo Section Ends-->

    <!-- Navigation slide -->
    @include('pages.navigation-slide')

    <!-- Video Section -->
    @include('pages.video-section')

    <!-- Ticker -->
    @include('pages.ticker', [
        'tickers' => app(\App\Http\Controllers\TickerController::class)->getAllTicker(),
    ])

    <!-- About IFFI -->
    @include('pages.about-iffi')

    <!-- 55th IFFI Festival -->
    <div class="col-lg-12 mb-5">
        <div class="container">
            <div class="section-heading mb-4">
                <h4>Why you should attend</h4>
                <h2>55<sup>th</sup> IFFI Festival?</h2>
            </div>
            <div class="row card-same-height">
                @include('pages.55th-iffi-festival', [
                    'datas' => app(\App\Http\Controllers\CommonController::class)->iffiFestival(),
                ])
            </div>
        </div>
    </div>

    <!-- News & Updates -->
    @include('pages.news-and-update')


    <!-- Highlights -->
    @include('pages.highlights', [
        'datas' => app(\App\Http\Controllers\CommonController::class)->highlights(),
    ])

    <!-- International competition -->
    @include('pages.international-competition', [
        'internationalCinemas' => app(\App\Http\Controllers\CommonController::class)->internationalCinema(),
    ])

    <!-- Director -->
    <div class="col-lg-12 mb-5">
        <div class="container">
            <div class="section-heading mb-4">
                <h4>Best 54<sup>th</sup> debut feature film of a</h4>
                <h2>Director</h2>
            </div>
            <div class="owl-carousel international">
                @include('pages.director', [
                    'directorDebutFilm' => app(\App\Http\Controllers\CommonController::class)->directorDebutFilm(),
                ])
            </div>
        </div>
    </div>

    <!-- Indian Panorama  -->
    {{-- <div class="col-lg-12 mb-5"> --}}
    <div class="container mb-5">
        <div class="section-heading mb-4">
            <h4>A Kaleidoscope of Creativity and Culture of 54<sup>th</sup></h4>
            <h2>Indian Panorama</h2>
        </div>
        <div class="owl-carousel international">
            @include('pages.indian-panorama', [
                'indianPanormas' => app(\App\Http\Controllers\CommonController::class)->indianPanorama(),
            ])
        </div>
    </div>
    {{-- </div> --}}
    <!-- Indian Panorama Ends-->

    <!-- Lifetime Achievement Award  -->
    @include('pages.lifetime-achievement-award')
    <!-- Lifetime Achievement Award  -->

    <!-- Social Media Corner  -->
    @include('pages.social-media-cornor')
    <!-- Social Media Corner end  -->

    <!-- Message -->
    @include('pages.message')

    <!-- Sponsors  -->
    <div class="col-lg-12 mb-5">
        <div class="container">
            <div class="section-heading mb-4 text-center mt-5 center-heading">
                <h4 class="mb-2">Fuelling Success Together</h4>
                <h2>Sponsors & Partners</h2>
            </div>
            <div class=" owl-carousel-sponsor">
                @include('pages.sponsor', [
                    'sponsors' => app(\App\Http\Controllers\CommonController::class)->sponsors(),
                ])
            </div>
        </div>
    </div>

@endsection
