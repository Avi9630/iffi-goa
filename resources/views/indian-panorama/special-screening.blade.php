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
            <h1 class="page-title-header">Special Screening</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <section class="iCinema container">
        <div class="row">
            {{-- @foreach ($accessibleFilm as $accessible) --}}
            <div class="col-xl-3 col-lg-4 col-md-6 col-sm-12 col-12 col-mb-16">
                <div class="iCinema-card">
                    <div class="iCinema-img">
                        {{-- <img src="{{ asset('pulic/images/international-cinema/special-screening.jpg') }}" alt=""
                            loading="lazy"> --}}
                        <img src="{{ asset('public/images/film-selection/indian-panorama/special-screening.jpg') }}"
                            class="img-fluid">
                    </div>
                    <div class="iCinema-content">
                        <h2><a href="#">Gond Janjati Ki Veerangana Rani Durgawati</a></h2>
                        <h5><span>Directed by</span><span>:</span><span>Ashok Sharan</span> </h5>
                        <h5><span>Country of Origin</span><span>:</span><span>India</span> </h5>
                        <h5><span>Language</span><span>:</span><span>Hindi</span></h5>
                    </div>
                </div>
            </div>
            {{-- @endforeach --}}

        </div>
    </section>
@endsection
