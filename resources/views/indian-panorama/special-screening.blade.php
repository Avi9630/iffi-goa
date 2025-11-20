@extends('layouts.app')
@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-special-screening py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Special Screening</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->

    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                {{-- @foreach ($accessibleFilm as $accessible) --}}
                <div class="col-md-3 col-sm-4 col-xs-12 d-flex">
                    <div class="card shadow-sm">
                        {{-- min-size-img --}}
                        <div class="card-image">
                            <img src="{{ asset('public/images/film-selection/indian-panorama/special-screening.jpg') }}"
                                alt="image" class="img-fluid">
                        </div>
                        <div class="card-body text-start">
                            <div class="card-text d-flex">
                                <div class="iCinema-content">
                                    <h4 class="title">Gond Janjati Ki Veerangana Rani Durgawati</h4>
                                    <h5>
                                        <span>Directed by</span>
                                        <span>:</span>
                                        <span>Ashok Sharan</span>
                                    </h5>
                                    <h5>
                                        <span>Country of Origin</span>
                                        <span>:</span>
                                        <span>India</span>
                                    </h5>
                                    <h5>
                                        <span>Language</span>
                                        <span>:</span>
                                        <span>Hindi</span>
                                    </h5>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- @endforeach --}}
            </div>
        </div>
    </div>
@endsection
