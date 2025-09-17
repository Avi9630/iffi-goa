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
    <div class="container-fluid page-header bannerBg-ott py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Best Web Series Jury</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            @php
                $chairPerson = $juryDetails->where('is_chairperson', '1')->first();
            @endphp
            @if (!empty($chairPerson))
                <div class="card">
                    <div class="card-body">
                        <div class="row  align-items-center ">
                            <div class="col-md-7 ">
                                <div class="international-jury-text">
                                    <h2 class="mt-3">{{ $chairPerson->name }}</h2>
                                    <h5>{{ $chairPerson->is_chairperson == '1' ? 'Chairperson' : '' }}</h5>
                                </div>
                            </div>
                            <div class="col-md-5 ">
                                <div class="jury_img">
                                    @if (!empty($chairPerson->img_src))
                                        <img src="{{ asset('public/images/juries/' . $chairPerson->img_src) }}"
                                            class="img-fluid">
                                    @else
                                        <img src="{{ $chairPerson->img_url }}" class="img-fluid">
                                    @endif
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @php
                $juries = $juryDetails->where('is_chairperson', 0);
            @endphp
            @if (!empty($juries))
                @foreach ($juries as $key => $jury)
                    <div class="card">
                        <div class="card-body">
                            <h3>{{ $jury['name'] }}, {{ $jury['designation'] }}</h3>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
