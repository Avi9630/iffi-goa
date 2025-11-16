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
            <h1 class="page-title-header">IFFI Festival {{ $year }} Retrospective Rajnikanth</h1>
        </div>
    </div>

    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                @foreach ($newHorizons as $newHorizon)
                    <div class="col-md-3 col-sm-4 col-xs-12 d-flex">
                        <div class="card shadow-sm">
                            <div class="card-image min-size-img">
                                @if (!empty($newHorizon->img_src))
                                    <img src="{{ asset('public/images/indian-panorama-cinema/' . $newHorizon->img_src) }}"
                                        alt="image" class="img-fluid">
                                @else
                                    <img src="{{ $newHorizon->img_url }}" alt="{{ $newHorizon->title }} image" class="img-fluid">
                                @endif
                            </div>
                            <div class="card-body text-start">
                                <div class="card-text d-flex">
                                    <div class="iCinema-content">
                                        <h4 class="title">{{ $newHorizon->title }}</h4>
                                        <h5>
                                            <span>Directed by</span>
                                            <span>:</span>
                                            <span>{{ $newHorizon->directed_by }}</span>
                                        </h5>
                                        <h5>
                                            <span>Language</span>
                                            <span>:</span>
                                            <span>{{ $newHorizon->language }}</span>
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
