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
            <h1 class="page-title-header">Macabre Dreams</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mb-5">
        <div class="container">
            <div class="row card-same-height">
                @foreach ($macabreDreams as $macabreDream)
    <div class="col-md-4 col-sm-4 col-xs-12 d-flex">
        <div class="card shadow-sm">
            <img src="{{ asset('public/images/film-selection/international-cinema/' . $macabreDream->img_src) }}" class="img-fluid">
            <div class="card-body text-start">
                <h3><a href="#">{{ $macabreDream->title }}</a></h3>
                <h5><span>Directed by</span><span>:</span><span>{{ $macabreDream->directed_by }}</span>
                </h5>
                <h5><span>Country of
                        Origin</span><span>:</span><span>{{ $macabreDream->country_of_origin }}</span>
                </h5>
                <h5><span>Language</span><span>:</span><span>{{ $macabreDream->language }}</span></h5>
            </div>
        </div>
    </div>
@endforeach
            </div>
        </div>
    </div>

@endsection