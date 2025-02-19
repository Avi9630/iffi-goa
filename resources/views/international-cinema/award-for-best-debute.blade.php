@extends('layouts.app')
@section('site_title', 'Award for Best Debut | IFFI Goa')
@section('site_description',
    'Explore the prestigious Award for Best Debut at IFFI Goa, celebrating outstanding
    first-time filmmakers and their contributions to cinema.')
    {{-- @section('site_keywords', 'About IFFI Goa, IFFI goa, IFFI goa registration, IFFI goa delegate registration, About us') --}}
@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-Award-banner py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Award For The Best Debut</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                @foreach ($awardBestDebute as $debute)
                    <div class="col-md-3 col-sm-4 col-xs-12 d-flex">
                        <div class="card shadow-sm w-100">
                            <div class="card-image min-size-img">
                                <img src="{{ asset('public/images/film-selection/international-cinema/' . $debute->img_src) }}"
                                    alt="image" class="img-fluid">
                            </div>
                            <div class="card-body text-start">
                                <div class="card-text d-flex">
                                    <div class="iCinema-content">
                                        <h4 class="title">{{ $debute->title }}</h4>
                                        <h5>
                                            <span>Directed by</span>
                                            <span>:</span>
                                            <span>{{ $debute->directed_by }}</span>
                                        </h5>
                                        <h5>
                                            <span>Country of Origin</span>
                                            <span>:</span>
                                            <span>{{ $debute->country_of_origin }}</span>
                                        </h5>
                                        <h5>
                                            <span>Language</span>
                                            <span>:</span>
                                            <span>{{ $debute->language }}</span>
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
