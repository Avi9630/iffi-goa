@extends('layouts.app')
@section('content')
    @include('layouts.header')
    @include('pages.navigation-slide')

    <div class="container-fluid page-header bannerBg-non-feature py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">IFFI Festival {{ $year }} Special Screening</h1>
        </div>
    </div>

    @php
        $subCategory = [
            1 => '125 Years of V. Shantaram',
            2 => 'Centenary Tributes',
            4 => '50 Years of NFDC',
            5 => 'Special Showcase',
            6 => 'Azadi ki Amrit Kahaniyan',
            7 => 'Retrospective of Rajnikanth',
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
                                        {{-- min-size-img --}}
                                        <div class="card-image">
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
                                                    <h5><span>{!! $presentation->restored_by_nfai ?? '' !!}</span></h5>
                                                </div>
                                            </div>
                                        </div>
                                        <p class="text-center" style="color: #3E4EB0"><b>{!! $presentation->num_of_years ?? '' !!}</b></p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
    </div>
@endsection
