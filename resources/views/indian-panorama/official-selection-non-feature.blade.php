@extends('layouts.app')
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
            <h1 class="page-title-header">IFFI Festival 2023 Non-Feature Film</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mb-5">
        <div class="container">
            <div class="row card-same-height">
                @foreach ($officialNonFeature as $feature)
                    <div class="col-md-4 col-sm-4 col-xs-12 d-flex">
                        <div class="card shadow-sm">
                            <img src="{{ asset('public/images/film-selection/indian-panorama/' . $feature->img_src) }}"
                                class="img-fluid">
                            <div class="card-body text-start">
                                <h3><a href="#">{{ $feature->title }}</a></h3>
                                <h5><span>Directed by</span><span>:</span><span>{{ $feature->directed_by }}</span>
                                </h5>
                                <h5><span>Country of
                                        Origin</span><span>:</span><span>{{ $feature->country_of_origin }}</span>
                                </h5>
                                <h5><span>Language</span><span>:</span><span>{{ $feature->language }}</span></h5>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
