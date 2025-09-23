@extends('layouts.app')
@section('site_title', 'International Jury | IFFI Goa 2024')
@section('site_description',
    'Explore the profiles of global film experts on the IFFI 2024 International Jury. Discover
    their insights, expertise, and contribution to world cinema at IFFI Goa.')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-IFFI-international py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Jury for International Competition - {{ $year }}</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            @if ($internationalJuries->isNotEmpty())
                @foreach ($internationalJuries as $key => $internationalJury)
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                @if ($key % 2 == 0)
                                    <div class="col-md-7">
                                        <div class="international-jury-text">
                                            <h2 class="mt-3">{{ $internationalJury->name }}</h2>
                                            <h5>{{ $internationalJury->designation }}</h5>
                                            <p>{{ $internationalJury->description }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="jury_img">
                                            @if (!empty($internationalJury->img_src))
                                                <img src="{{ asset('public/images/juries/' . $internationalJury->img_src) }}"
                                                    class="img-fluid" alt="{{ $internationalJury->name }}">
                                            @else
                                                <img src="{{ $internationalJury->img_url }}" class="img-fluid"
                                                    alt="{{ $internationalJury->name }}">
                                            @endif
                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-5">
                                        <div class="jury_img">
                                            @if (!empty($internationalJury->img_src))
                                                <img src="{{ asset('public/images/juries/' . $internationalJury->img_src) }}"
                                                    class="img-fluid" alt="{{ $internationalJury->name }}">
                                            @else
                                                <img src="{{ $internationalJury->img_url }}" class="img-fluid"
                                                    alt="{{ $internationalJury->name }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="international-jury-text" style="padding-right: 30px;">
                                            <h2>{{ $internationalJury->name }}</h2>
                                            <h5>{{ $internationalJury->designation }}</h5>
                                            <p>{{ $internationalJury->description }}</p>
                                        </div>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                @endforeach
            @endif

        </div>
    </div>
@endsection
