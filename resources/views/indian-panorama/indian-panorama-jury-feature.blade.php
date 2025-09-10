@extends('layouts.app')
@section('site_title', 'Indian Panorama Jury - Feature Films | IFFI Goa 2024')
@section('site_description',
    'Discover the esteemed jury panel selecting India’s finest feature films for Indian
    Panorama at IFFI Goa 2024. Celebrating excellence in Indian cinema.')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-feature py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Indian Panorama Jury</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="international-jury-text mb-4">
                <h2 class="mt-3">Indian Panorama Jury - Featured </h2>
            </div>
            @php
                $chairPerson = $juryDetails->where('position', 'CHAIRPERSON')->first();
            @endphp
            @if (!empty($chairPerson))
                <div class="card">
                    <div class="card-body">
                        <div class="row  align-items-center ">
                            <div class="col-md-7 ">
                                <div class="international-jury-text">
                                    <h2 class="mt-3">{{ $chairPerson->name }}</h2>
                                    <h5>{{ $chairPerson->position === 'CHAIRPERSON' ? 'Chairperson' : '' }}</h5>
                                </div>
                            </div>
                            <div class="col-md-5 ">
                                <div class="jury_img">
                                    @if (!empty($chairPerson->img_src))
                                        <img src="{{ asset('public/images/jury/indian-panorama-jury/' . $chairPerson->img_src) }}"
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
                $chairPersons = $juryDetails->where('position', '!=', 'CHAIRPERSON');
            @endphp
            @if (!empty($chairPersons))
                @foreach ($chairPersons as $key => $chairPerson)
                    <div class="card">
                        <div class="card-body">
                            <h3>{{ $chairPerson['name'] }}, {{ $chairPerson['position'] }}</h3>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
