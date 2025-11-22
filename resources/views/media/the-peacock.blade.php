@extends('layouts.app')
@section('site_title', 'IFFI GOA Peacock Awards')
@section('site_description', 'Stay updated with the latest pdfs of peacock awards.')
@section('site_keywords', 'IFFI GOA Peacock Awards, IFFI peacock award, IFFI announcements')

@section('content')
    @include('layouts.header')
    @include('pages.navigation-slide')

    {{-- Inner Page Banner Section --}}
    <div class="container-fluid page-header bannerBg-news py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">The Peacock {{ $year }}</h1>
        </div>
    </div>

    {{-- Inner Page Banner Section --}}
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row ">
                @php
                    $years = [
                        2025 => 'active',
                        2024 => 'active',
                        2023 => 'active',
                        2022 => 'active',
                        2021 => 'active',
                        // 2020 => 'active',
                        2019 => 'active',
                        2018 => 'active',
                        2017 => 'active',
                    ];
                @endphp

                <ul class=" mb-4 peacockNav">
                    @foreach ($years as $year => $value)
                        <li>
                            <a href="{{ route('the-peacock', ['year' => $year]) }}"
                                class=" {{ $value ?? '' }}">{{ $year }}</a>
                        </li>
                    @endforeach
                </ul>

                @foreach ($thepeacock as $value)
                    <div class="col-md-3 col-sm-4 col-xs-12 d-flex">
                        @if (!empty($value->img_src))
                            <a href="{{ asset('public/images/thePeacock/' . $value->img_src) }}" target="_blank"
                                class="text-decoration-none">
                                <div class="card shadow-sm w-100">
                                    {{-- min-size-img --}}
                                    <div class="card-image">
                                        @if (!empty($value->poster))
                                            <img src="{{ asset('public/images/thePeacock/poster/' . ($value->poster ?? 'pdf.jpg')) }}"
                                                alt="{{ $value->title }} image" class="img-fluid">
                                        @else
                                            <img src="{{ $value->poster_url }}"alt="{{ $value->title }} image" class="img-fluid" loading="lazy">
                                        @endif
                                    </div>
                                    <div class="card-body text-start">
                                        <div class="card-text d-flex">
                                            <div class="iCinema-content">
                                                <h6 class="text-uppercase"> {{ $value->title }} </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @else
                            <a href="{{ $value->image_url }}" target="_blank" class="text-decoration-none">
                                <div class="card shadow-sm w-100">
                                    <div class="card-image">
                                        @if (!empty($value->poster))
                                            <img src="{{ asset('public/images/thePeacock/poster/' . ($value->poster ?? 'pdf.jpg')) }}"
                                                alt="{{ $value->title }} image" class="img-fluid">
                                        @else
                                            <img src="{{ $value->poster_url }}"alt="image" class="img-fluid"
                                                loading="lazy">
                                        @endif
                                    </div>
                                    <div class="card-body text-start">
                                        <div class="card-text d-flex">
                                            <div class="iCinema-content">
                                                <h6 class="text-uppercase"> {{ $value->title }} </h6>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </a>
                        @endif
                    </div>
                @endforeach
            </div>
        </div>
    </div>
    </div>
@endsection
