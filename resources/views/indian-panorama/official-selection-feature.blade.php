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
            <h1 class="page-title-header">IFFI Festival {{ $year }} Feature film
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
                                @if (!empty($feature->img_src))
                                    <img src="{{ asset('public/images/indian-panorama-cinema/' . $feature->img_src) }}"
                                        alt="image" class="img-fluid">
                                @else
                                    <img src="{{ $feature->img_url }}"
                                        alt="{{ $feature->title }} image" class="img-fluid">                                        
                                @endif
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
