@extends('layouts.app')
@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-feature py-5">
        <div class="container text-center ">
            {{-- @php
                if (isset($year) && $year != 2024) {
                    $yearly = 2023;
                } else {
                    $yearly = $year;
                }
            @endphp --}}
            @php
                $yearly = isset($year) && $year != 2024 ? 2023 : $year ?? 2024;
            @endphp
            <h1 class="page-title-header">IFFI Festival {{ $yearly }} Feature film
            </h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                @foreach ($officialFeature as $feature)
                    <div class="col-md-3 col-sm-4 col-xs-12 d-flex">
                        <div class="card shadow-sm">
                            <div class="card-image min-size-img">
                                <img src="{{ asset('public/images/indian-panorama-cinema/' . $feature->img_src) }}"
                                    alt="image" class="img-fluid">
                            </div>
                            <div class="card-body text-start">
                                <div class="card-text d-flex">
                                    <div class="iCinema-content">
                                        <h4 class="title">{{ $feature->title }}</h4>
                                        <h5>
                                            <span>Directed by</span>
                                            <span>:</span>
                                            <span>{{ $feature->directed_by }}</span>
                                        </h5>
                                        {{-- <h5>
                                            <span>Country of Origin</span>
                                            <span>:</span>
                                            <span>{{ $feature->country_of_origin }}</span>
                                        </h5> --}}
                                        <h5>
                                            <span>Language</span>
                                            <span>:</span>
                                            <span>{{ $feature->language }}</span>
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
