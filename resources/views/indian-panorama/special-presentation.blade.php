@extends('layouts.app')
@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <div class="container-fluid page-header bannerBg-non-feature py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">IFFI Festival {{ $year }} Special Screening</h1>
        </div>
    </div>

    @php
        $subCategory = [
            1 => '125 Years of V. Shantaravn',
            2 => 'Centenary Tributes',
            4 => '50 Years of NFDC',
            5 => 'Special Showcase',
            6 => 'Azadi ki Amrit Kahaniyan',
            7 => 'Retrospective of Rajnikant',
        ];
        $displayOrder = [1, 2, 4, 5, 6, 7];
    @endphp

    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                @foreach ($displayOrder as $subCatId)
                    @if (isset($specialPresentations[$subCatId]))
                        <h3 class="mt-4">{{ $subCategory[$subCatId] ?? '' }}</h3>
                        <div class="row">
                            @foreach ($specialPresentations[$subCatId] as $presentation)
                                <div class="col-md-3 col-sm-4 col-xs-12 d-flex">
                                    <div class="card shadow-sm">
                                        <div class="card-image min-size-img">
                                            @if (!empty($presentation->img_src))
                                                <img src="{{ asset('public/images/indian-panorama-cinema/' . $presentation->img_src) }}"
                                                    alt="image" class="img-fluid">
                                            @else
                                                <img src="{{ $presentation->img_url }}"
                                                    alt="{{ $presentation->title }} image" class="img-fluid">
                                            @endif
                                        </div>
                                        <div class="card-body text-start">
                                            <div class="card-text">
                                                <div class="iCinema-content">
                                                    <h4 class="title">{{ $presentation->title }}</h4>
                                                    <h5><span>Directed by:</span> {{ $presentation->directed_by }}</h5>
                                                    <h5><span>Language:</span> {!! $presentation->language !!}</h5>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                @endforeach
                {{-- @foreach ($specialPresentations as $subCatId => $specialPresentation)
                    <h3 class="mt-4">{{ $subCategory[$subCatId] ?? '' }}</h3>
                    <div class="row">
                        @foreach ($specialPresentation as $presentation)
                            <div class="col-md-3 col-sm-4 col-xs-12 d-flex">
                                <div class="card shadow-sm">
                                    <div class="card-image min-size-img">
                                        @if (!empty($presentation->img_src))
                                            <img src="{{ asset('public/images/indian-panorama-cinema/' . $presentation->img_src) }}"
                                                alt="image" class="img-fluid">
                                        @else
                                            <img src="{{ $presentation->img_url }}" alt="{{ $presentation->title }} image"
                                                class="img-fluid">
                                        @endif
                                    </div>
                                    <div class="card-body text-start">
                                        <div class="card-text">
                                            <div class="iCinema-content">
                                                <h4 class="title">{{ $presentation->title }}</h4>
                                                <h5><span>Directed by:</span> {{ $presentation->directed_by }}</h5>
                                                <h5><span>Language:</span> {{ $presentation->language }}</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach --}}
            </div>
        </div>
    </div>
@endsection
