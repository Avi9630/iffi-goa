@extends('layouts.app')
@section('site_title', 'Curated Animation Section | IFFI Goa International Cinema')
@section('site_description',
    'Explore the curated animation section at IFFI Goa, showcasing innovative animated films
    from around the world. Experience creativity and storytelling at its best.')
    {{-- @section('site_keywords', 'About IFFI Goa, IFFI goa, IFFI goa registration, IFFI goa delegate registration, About us') --}}
@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-animation py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Animation</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                @foreach ($animations as $animation)
                    <div class="col-md-3 col-sm-4 col-xs-12 d-flex">
                        <div class="card shadow-sm">
                            <div class="card-image min-size-img">
                                <img src="{{ asset('public/images/film-selection/international-cinema/' . $animation->img_src) }}"
                                    alt="image" class="img-fluid">
                            </div>
                            <div class="card-body text-start">
                                <div class="card-text d-flex">
                                    <div class="iCinema-content">
                                        <h4 class="title">{{ $animation->title }}</h4>
                                        <h5>
                                            <span>Directed by</span>
                                            <span>:</span>
                                            <span>{{ $animation->directed_by }}</span>
                                        </h5>
                                        <h5>
                                            <span>Country of Origin</span>
                                            <span>:</span>
                                            <span>{{ $animation->country_of_origin }}</span>
                                        </h5>
                                        <h5>
                                            <span>Language</span>
                                            <span>:</span>
                                            <span>{{ $animation->language }}</span>
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
