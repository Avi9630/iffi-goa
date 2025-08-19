@extends('layouts.app')
@section('site_title', 'Indian Panorama Non-Feature Jury | IFFI Goa')
@section('site_description',
    'Meet the esteemed Indian Panorama Non-Feature Jury at IFFI Goa, showcasing excellence in
    short and documentary cinema from across India.')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-non-feature py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Indian Panorama Jury </h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">

            <div class="international-jury-text mb-4">
                <h2 class="mt-3">Indian Panorama Jury - Non-Featured</h2>
                {{-- <h5>Chairperson</h5> --}}
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-7 ">
                            <div class="international-jury-text">
                                <h2 class="mt-3">Shri. Subbiah Nallamuthu</h2>
                                <h5>Chairperson</h5>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                {{-- <img src="{{ asset('public/images/jury/indian-panorama-jury/Shri. Subbiah Nallamuthu.jpg') }}"
                                    class="img-fluid" style="width:100%"> --}}
                                <img src="{{ asset('public/images/jury/indian-panorama-jury/Subbiah Nallamuthu.webp') }}"
                                    class="img-fluid" style="width:100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @php
                $features = [
                    'Shri. Rajnikant Acharya, Producer and Film Director',
                    'Shri. Ronel Haobam, Film Director',
                    'Ms. Usha Deshpande, Film Director and Producer',
                    'Ms. Vandana Kohli, Film Director and Writer',
                    'Shri. Mithunchandra Chaudhari, Film Director',
                    'Ms. Shalini Shah, Film Director',
                ];
            @endphp

            @foreach ($features as $key => $feature)
                <div class="card">
                    <div class="card-body">
                        <h3>{{ $feature }}</h3>
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
