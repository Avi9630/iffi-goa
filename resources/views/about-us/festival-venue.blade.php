@extends('layouts.app')
@section('site_title', 'Explore IFFI Goa 2024 International Festival Venues')
@section('site_description',
    'Discover the vibrant festival venues of IFFI Goa 2024. Get detailed information on
    locations, facilities, and events happening at each venue.')
@section('site_keywords',
    'IFFI Goa information, IFFI event venue, About IFFI venue, Festival location details, IFFI
    history and venue, Film festival India, Film festival venue, IFFI international film festival')
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
            <h1 class="page-title-header">Festival Venue {{ $year }}</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->

    <div class="col-lg-12 mt-5 static-content">
        <div class="container">

            @foreach ($festivalTypes as $typeId => $typeName)
                @if ($groupedVenues->has($typeId))
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="section-heading title-line mb-4">
                                <h2>{{ $typeName }}</h2>
                            </div>
                        </div>
                    </div>
                    @if ($typeId == 1)
                        @foreach ($groupedVenues[$typeId] as $venue)
                            <div class="col-md-4 col-sm-4 col-xs-12">
                                <div class="card shadow-sm">
                                    <div class="card-image">
                                        @if (!empty($venue->img_url))
                                            <img src="{{ $venue->img_url }}" alt="{{ $venue->name }}" class="img-fluid">
                                        @else
                                            <img src="{{ asset('public/images/festival-venue/' . $venue->img_src) }}"
                                                alt="{{ $venue->name }}" class="img-fluid">
                                        @endif
                                    </div>
                                    <div class="card-body text-start">
                                        <h4 class="title">{{ $venue->festival_venu_name }}</h4>
                                        <p class="card-text d-flex">
                                            <span class="location-icon">
                                                <img src="{{ asset('public/images/festival-venue/location-icon.svg') }}"
                                                    alt="image" srcset="" />
                                            </span>
                                            <a href={{ $venue->location }} target="_blank">{{ $venue->location_name }}</a>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    @else
                        <div class="row">
                            @foreach ($groupedVenues[$typeId] as $venue)
                                <div class="col-md-4 col-sm-4 col-xs-12">
                                    <div class="card shadow-sm">
                                        <div class="card-image">
                                            @if (!empty($venue->img_url))
                                                <img src="{{ $venue->img_url }}" alt="{{ $venue->name }}"
                                                    class="img-fluid">
                                            @else
                                                <img src="{{ asset('public/images/festival-venue/' . $venue->img_src) }}"
                                                    alt="{{ $venue->name }}" class="img-fluid">
                                            @endif
                                        </div>
                                        <div class="card-body text-start">
                                            <h4 class="title">{{ $venue->festival_venu_name }}</h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                @endif
            @endforeach
        </div>
    </div>
@endsection
