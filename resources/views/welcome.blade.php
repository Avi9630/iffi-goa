@extends('layouts.app')
@section('site_title', '56th IFFI Goa International Film Festival | NFDC | MIB')
@section('site_description',
    'Join 56th IFFI Goa, an international film festival showcasing global cinema. Discover
    films, events, and cultural experiences in the heart of Goa.')
@section('site_keywords',
    'IFFI Goa, IFFI Goa 2024, IFFI 2022, 55th IFFI, Goan Films, Goa Film news, Indian films, film
    in india, information, film festival, film producer, broadcasting')
@section('content')

    {{-- @include('layouts.timer') --}}

    <!-- Menu Item's -->
    {{-- @include('pages.navigation-slide', [
        'menus' => app(\App\Http\Controllers\CommonController::class)->getMenu(),
    ]) --}}

    @include('pages.navigation-slide')

    <!-- Video Section -->
    @include('pages.video-section')

    {{-- @include('pages.video-section', [
        'videoTitle' => app(\App\Http\Controllers\HomeController::class)->getvideoTitle(),
    ]) --}}

    <!-- Ticker Content-->
    @include('pages.ticker', [
        'tickers' => app(\App\Http\Controllers\TickerController::class)->getAllTicker(),
    ])

    <!-- About IFFI Section-->
    @include('pages.about-iffi')

    <section>
        <div class="col-lg-12 mb-5">
            <div class="container">
                <div class="section-heading mb-4 text-center mt-5 center-heading ">
                    <h4> Award Winning Films from</h4>
                    <h2>Top International Film Festivals</h2>
                </div>
                <div class="row  m-0 master-row ">
                    <div class="col-md-2 col-sm-4 col-xs-12 d-flex g-3">
                        <img src="{{ asset('public/images/award-winner/It Was An Accident.webp') }}" alt="image" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-12 d-flex g-3">
                        <img src="{{ asset('public/images/award-winner/Father Mother Sister Brother.webp') }}" alt="image" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-12 d-flex g-3">
                        <img src="{{ asset('public/images/award-winner/Dreams (Sex Love).webp') }}" alt="image" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-12 d-flex g-3">
                        <img src="{{ asset('public/images/award-winner/Glooming in.webp') }}" alt="image" class="img-fluid">
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-12 d-flex g-3">
                        <img src="{{ asset('public/images/award-winner/No Other Choice.webp') }}" alt="image" class="img-fluid">
                        {{-- <div class=" ">
                        </div> --}}
                    </div>
                    <div class="col-md-2 col-sm-4 col-xs-12 d-flex g-3">
                        <img src="{{ asset('public/images/award-winner/FIUME O MORTE.webp') }}" alt="image" class="img-fluid">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- 55th IFFI Festival Section-->
    <section>
        @include('pages.55th-iffi-festival', [
            'datas' => app(\App\Http\Controllers\CommonController::class)->iffiFestival(),
        ])
    </section>

    <!-- News & Updates Section-->
    @include('pages.news-and-update', [
        'datas' => app(\App\Http\Controllers\CommonController::class)->newsUpdate1(),
    ])

    <!-- International competition Section-->
    @include('pages.international-competition', [
        'internationalCinemas' => app(
            \App\Http\Controllers\CuratedSectionController::class)->internationalCinema(),
    ])

    {{-- Indian panorama 55th --}}
    @include('pages.indian-panorama', [
        'indianPanormas' => app(\App\Http\Controllers\CommonController::class)->indianPanorama('2025'),
    ])

    <!-- Director Section-->
    @include('pages.director', [
        'directorDebutFilm' => app(\App\Http\Controllers\CommonController::class)->directorDebutFilm(),
    ])

    <!--Master classs Highlights-->
    @include('pages.master-class-highlights', [
        'datas' => app(\App\Http\Controllers\CommonController::class)->masterClasssHighlights(),
    ])

    <!-- Highlights Creative Minds Of Tomorrow-->
    @include('pages.cmot-highlights', [
        'datas' => app(\App\Http\Controllers\CommonController::class)->cmotHighlights(),
    ])
    <br><br>

    <!-- Life Time Achievement Award  Section-->
    @include('pages.lifetime-achievement-award')

    <br><br>

    <!-- Highlights Section-->
    @include('pages.highlights', [
        'datas' => app(\App\Http\Controllers\CommonController::class)->highlights(),
    ])

    <!-- Social Media Corner  -->
    {{-- @include('pages.social-media-cornor') --}}
    <!-- Social Media Corner end  -->

    <!-- Message -->
    @include('pages.message')

    <!-- Sponsors  Section-->
    <!-- @include('pages.sponsors_partners') -->

@endsection
