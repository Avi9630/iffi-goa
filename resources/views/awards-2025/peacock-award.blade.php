@extends('layouts.app')
@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <div class="container-fluid page-header bannerBg-non-feature py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Peacock Award 2025</h1>
        </div>
    </div>
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <h3 class="mt-4">15 films nominated for the Golden Peacock Award & 3 Silver Peacock under International
                Competition </h3>
            <div class="row">
                @foreach ($goldens as $internationalCinema)
                    <div class="col-md-3 col-sm-4 col-xs-12 d-flex">
                        <div class="card shadow-sm w-100">
                            <div class="card-image min-size-img">
                                @if (!empty($internationalCinema->img_src))
                                    <img src="{{ asset('public/images/cureted-section/' . $internationalCinema->img_src) }}"
                                        alt="{{ $internationalCinema->title }} image" class="img-fluid">
                                @else
                                    <img src="{{ $internationalCinema->img_url }}"
                                        alt="{{ $internationalCinema->title }} image" class="img-fluid">
                                @endif
                            </div>
                            <div class="card-body text-start">
                                <div class="card-text d-flex">
                                    <div class="iCinema-content">
                                        <h4 class="title">
                                            <a
                                                href="{{ route('international-competition-detail', ['slug' => $internationalCinema?->slug]) }}">
                                                {{ $internationalCinema->title }}
                                            </a>
                                        </h4>
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
            {{-- <div class="d-flex justify-content-center">
                {{ $internationalCinemas->links() }}
            </div> --}}
        </div>
    </div>

    <div class="col-lg-12 mt-5 static-content">
        <div class="container">

            <h3 class="mt-4">7 Films nominated for the Silver Peacock Award in the Best Debut Feature Film of a Director
                Competition</h3>
            <div class="row">
                @foreach ($silvers as $internationalCinema)
                    <div class="col-md-3 col-sm-4 col-xs-12 d-flex">
                        <div class="card shadow-sm w-100">
                            <div class="card-image min-size-img">
                                @if (!empty($internationalCinema->img_src))
                                    <img src="{{ asset('public/images/cureted-section/' . $internationalCinema->img_src) }}"
                                        alt="{{ $internationalCinema->title }} image" class="img-fluid">
                                @else
                                    <img src="{{ $internationalCinema->img_url }}"
                                        alt="{{ $internationalCinema->title }} image" class="img-fluid">
                                @endif
                            </div>
                            <div class="card-body text-start">
                                <div class="card-text d-flex">
                                    <div class="iCinema-content">
                                        <h4 class="title">
                                            <a
                                                href="{{ route('international-competition-detail', ['slug' => $internationalCinema?->slug]) }}">
                                                {{ $internationalCinema->title }}
                                            </a>
                                        </h4>
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
            {{-- <div class="d-flex justify-content-center">
                {{ $internationalCinemas->links() }}
            </div> --}}
        </div>
    </div>
@endsection
