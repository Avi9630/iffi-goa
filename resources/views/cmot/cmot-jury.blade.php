@extends('layouts.app')
@section('site_title', 'Creative Minds of Tomorrow Selection Jury | IFFI Goa')
@section('site_description',
    'Explore the distinguished jury of IFFI Goa. Discover their backgrounds, expertise, and
    dedication to celebrating excellence in international cinema. ')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-cmot py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Creative Minds Of Tomorrow Jury - {{ $year }}</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            @php
                $chairPersons = $juryDetails->where('is_chairperson', 0);
            @endphp
            @if (!empty($chairPersons))
                @foreach ($chairPersons as $key => $chairPerson)
                    <div class="card">
                        <div class="card-body">
                            <h3>{{ $chairPerson['name'] }}, {{ $chairPerson['designation'] }}</h3>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
    </div>
@endsection
