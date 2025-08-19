@extends('layouts.app')
@section('site_title', 'Debut Director Jury | IFFI Goa 2024')
@section('site_description',
    'Discover the debut director jury at IFFI Goa. Honoring fresh talent and cinematic
    innovation in global film through this prestigious jury panel.')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-debut-director py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Debut Director Jury</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">

            <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-7 ">
                            <div class="international-jury-text">
                                <h2 class="mt-3">Shri. Santosh Sivan</h2>
                                <h5>Chairperson</h5>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                {{-- <img src="{{ asset('public/images/jury/debut-director-jury/santhosh-sivan.png') }}"
                                    class="img-fluid" style="width:100%"> --}}
                                <img src="{{ asset('public/images/jury/debut-director-jury/Santosh Sivan.jpg') }}"
                                    class="img-fluid" style="width:100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @php
                $features = ['Shri. Suneel Puranik', 'Shri. Sekhar Das', ' Shri. M. V. Raghu', 'Shri. Vinit Kanojiya'];
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
