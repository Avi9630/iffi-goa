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
    @include('pages.navigation-slide') 

    <!-- Video Section -->
    @include('pages.video-section')

    <!-- Ticker Content-->
    @include('pages.ticker', [
        'tickers' => app(\App\Http\Controllers\TickerController::class)->getAllTicker(),
    ])

    <!-- About IFFI Section-->
    @include('pages.about-iffi')

    <!-- 55th IFFI Festival Section-->
    <section class="">
        <div class="container">
            <div class="section-heading mb-4">
                <p>Why you should attend</p>
                <h2>56<sup>th</sup> IFFI Festival?</h2>
            </div>
            <div class="row festival-img">
                @include('pages.55th-iffi-festival', [
                    'datas' => app(\App\Http\Controllers\CommonController::class)->iffiFestival(),
                ])
            </div>
        </div>
    </section>

    <!-- News & Updates Section-->
    @include('pages.news-and-update', [
        'datas' => app(\App\Http\Controllers\CommonController::class)->newsUpdate1(),
    ])

    <!-- International competition Section-->
    @include('pages.international-competition', [
        'internationalCinemas' => app(\App\Http\Controllers\CommonController::class)->internationalCinema(),
    ])

    <!-- Director Section-->
    <section>
        <div class="container">
            <div class="section-heading mb-4">
                <p>Best 55<sup>th</sup> debut feature film of a</p>
                <h2>Director</h2>
            </div>
            <div class="owl-carousel international">
                @include('pages.director', [
                    'directorDebutFilm' => app(\App\Http\Controllers\CommonController::class)->directorDebutFilm(),
                ])
            </div>
        </div>
    </section>

    {{-- 55th --}}
    <section>
        <div class="container mb-5">
            <div class="section-heading mb-4">
                <p>A Kaleidoscope of Creativity and Culture of 55<sup>th</sup></p>
                <h2>Indian Panorama</h2>
            </div>
            <div class="owl-carousel international">
                @include('pages.indian-panorama', [
                    'indianPanormas' => app(\App\Http\Controllers\CommonController::class)->indianPanorama('2024'),
                ])
            </div>
        </div>
    </section>

    <!-- Highlights Creative Minds Of Tomorrow-->
    @include('pages.cmot-highlights', [
        'datas' => app(\App\Http\Controllers\CommonController::class)->cmotHighlights(),
    ])

    <!--Master classs Highlights-->
    @include('pages.master-class-highlights', [
        'datas' => app(\App\Http\Controllers\CommonController::class)->masterClasssHighlights(),
    ])

    <!-- Life Time Achievement Award  Section-->
    @include('pages.lifetime-achievement-award')

    <br><br>

    <!-- Highlights Section-->
    @include('pages.highlights', [
        'datas' => app(\App\Http\Controllers\CommonController::class)->highlights(),
    ])

    <!-- Social Media Corner  -->
    @include('pages.social-media-cornor')
    <!-- Social Media Corner end  -->

    <!-- Message -->
    @include('pages.message')

    <!-- Sponsors  Section-->
    @include('pages.sponsors_partners')

@endsection
