@extends('layouts.app')
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
            {{-- @php
                $yearly = isset($year) && $year != 2024 ? 2023 : $year ?? 2024;
            @endphp --}}
            <h1 class="page-title-header">IFFI Festival {{ $year }} Special Screening</h1>
        </div>
    </div>

    {{-- <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                @foreach ($specialPresentations as $specialPresentation)
                    <div class="col-md-3 col-sm-4 col-xs-12 d-flex">
                        <div class="card shadow-sm">
                            <div class="card-image min-size-img">
                                @if (!empty($specialPresentation->img_src))
                                    <img src="{{ asset('public/images/indian-panorama-cinema/' . $specialPresentation->img_src) }}"
                                        alt="image" class="img-fluid">
                                @else
                                    <img src="{{ $specialPresentation->img_url }}" alt="{{ $specialPresentation->title }} image"
                                        class="img-fluid">
                                @endif
                            </div>
                            <div class="card-body text-start">
                                <div class="card-text d-flex">
                                    <div class="iCinema-content">
                                        <h4 class="title">{{ $specialPresentation->title }}</h4>
                                        <h5>
                                            <span>Directed by</span>
                                            <span>:</span>
                                            <span>{{ $specialPresentation->directed_by }}</span>
                                        </h5>
                                        <h5>
                                            <span>Language</span>
                                            <span>:</span>
                                            <span>{{ $specialPresentation->language }}</span>
                                        </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div> --}}


    @php
        $subCategory = [
            1 => '125 Years of Indian Cinema Legend',
            2 => 'Centenary Tributes By NFDC-NFAI',
            3 => 'NFAI Milestones',
            4 => 'NFDC  Showcase',
            5 => 'Azadi ki Amrit Kahaniyan',
            6 => 'Special Showcase',
        ];
    @endphp

    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                @foreach ($specialPresentations as $specialPresentation => $items)
                    <h3 class="mt-4">{{ $subCategory[$specialPresentation] }}</h3>
                    <div class="row">
                        @foreach ($items as $item)
                            <div class="col-md-3 col-sm-4 col-xs-12 d-flex">
                                <div class="card shadow-sm">
                                    <div class="card-image min-size-img">
                                        @if (!empty($item->img_src))
                                            <img src="{{ asset('public/images/indian-panorama-cinema/' . $item->img_src) }}"
                                                alt="image" class="img-fluid">
                                        @else
                                            <img src="{{ $item->img_url }}" alt="{{ $item->title }} image"
                                                class="img-fluid">
                                        @endif
                                    </div>

                                    <div class="card-body text-start">
                                        <div class="card-text">
                                            <div class="iCinema-content">
                                            <h4 class="title">{{ $item->title }}</h4>
                                            <h5><span>Directed by:</span> {{ $item->directed_by }}</h5>
                                            <h5><span>Language:</span> {{ $item->language }}</h5>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
