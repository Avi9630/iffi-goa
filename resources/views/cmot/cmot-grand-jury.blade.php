@extends('layouts.app')
@section('site_title', 'CMOT Grand Jury Details | IFFI Goa')
@section('site_description',
    'Discover the esteemed CMOT Grand Jury at IFFI Goa, featuring renowned filmmakers, critics,
    and industry experts who evaluate the finest cinematic masterpieces. Learn more about their role and contributions. ')
@section('site_keywords', 'CMOT Grand Jury, IFFI Goa Jury, Jury Details IFFI, CMOT Jury Members, IFFI Grand Jury')
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
            <h1 class="page-title-header">Creative Minds Of Tomorrow Grand Jury</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            @php
                $grandJuries = $juryDetails->where('is_chairperson', 0);
            @endphp

            @if ($grandJuries->isNotEmpty())
                @foreach ($grandJuries as $key => $grandJury)
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                @if ($key % 2 == 0)
                                    <div class="col-md-7">
                                        <div class="international-jury-text">
                                            <h2 class="mt-3">{{ $grandJury->name }}</h2>
                                            <h5>{{ $grandJury->designation }}</h5>
                                            <p>{{ $grandJury->description }}</p>
                                        </div>
                                    </div>
                                    <div class="col-md-5">
                                        <div class="jury_img">
                                            @if (!empty($grandJury->img_src))
                                                <img src="{{ asset('public/images/juries/' . $grandJury->img_src) }}"
                                                    class="img-fluid" alt="{{ $grandJury->name }}">
                                            @else
                                                <img src="{{ $grandJury->img_url }}" class="img-fluid"
                                                    alt="{{ $grandJury->name }}">
                                            @endif
                                        </div>
                                    </div>
                                @else
                                    <div class="col-md-5">
                                        <div class="jury_img">
                                            {{-- <img src="{{ asset('public/images/juries/' . $grandJury->img_src) }}"
                                                class="img-fluid" alt="{{ $grandJury->name }}"> --}}
                                            @if (!empty($grandJury->img_src))
                                                <img src="{{ asset('public/images/juries/' . $grandJury->img_src) }}"
                                                    class="img-fluid" alt="{{ $grandJury->name }}">
                                            @else
                                                <img src="{{ $grandJury->img_url }}" class="img-fluid"
                                                    alt="{{ $grandJury->name }}">
                                            @endif
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <div class="international-jury-text" style="padding-right: 30px;">
                                            <h2>{{ $grandJury->name }}</h2>
                                            <h5>{{ $grandJury->designation }}</h5>
                                            <p>{{ $grandJury->description }}</p>
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
