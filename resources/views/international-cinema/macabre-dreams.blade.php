@extends('layouts.app')
@section('site_title', 'Macabre Dreams: A Journey Through Horror Films | IFFI Goa')
@section('site_description',
    'Explore the haunting world of Macabre Dreams, showcasing chilling narratives and unique
    storytelling in international cinema at IFFI Goa.')
    {{-- @section('site_keywords', 'About IFFI Goa, IFFI goa, IFFI goa registration, IFFI goa delegate registration, About us') --}}
@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-macabrebg py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Macabre Dreams</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->

    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                @foreach ($macabreDreams as $macabreDream)
                    <div class="col-md-3 col-sm-4 col-xs-12 d-flex">
                        <div class="card shadow-sm">
                            <div class="card-image min-size-img">
                                <img src="{{ asset('public/images/film-selection/international-cinema/' . $macabreDream->img_src) }}"
                                    class="img-fluid">
                            </div>
                            <div class="card-body text-start">
                                <div class="card-text d-flex">
                                    <div class="iCinema-content">
                                        <h4 class="title">{{ $macabreDream->title }}</h4>
                                        <h5>
                                            <span>Directed by</span>
                                            <span>:</span>
                                            <span>{{ $macabreDream->directed_by }}</span>
                                        </h5>
                                        <h5>
                                            <span>Country of Origin</span>
                                            <span>:</span>
                                            <span>{{ $macabreDream->country_of_origin }}</span>
                                        </h5>
                                        <h5>
                                            <span>Language</span>
                                            <span>:</span>
                                            <span>{{ $macabreDream->language }}</span>
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
