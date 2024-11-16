@extends('layouts.app')
@section('site_title', 'Explore IFFI Goa Precious Moments Captured')
@section('site_description',
    'Discover the vibrant moments of the IFFI Goa Festival in our gallery. Browse through
    captivating photos & relive the excitement of Indias premier film festival.')
@section('site_keywords',
    'IFFI photo gallery, IFFI Goa pictures, film festival photos, IFFI Goa moments, IFFI Goa
    photography, IFFI Goa visuals')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-partnersSponsors py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Our Partners & Sponsors</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <!-- Opening & Closing Venue -->
            <div class="row">
                <div class="col-lg-12 ">
                    <div class="section-heading title-line mb-4">
                        <h2>Sponsors &amp; Partners</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($sponcersPartners as $sponsorList)
                    <div class="sponsor-list mb-4">
                        <h4 class="mb-4">{{ $sponsorList->title }}</h4>
                        <ul class="d-flex flex-wrap">
                            @foreach (explode(', ', $sponsorList->images) as $image)
                                <li class="me-2">
                                    <a href="{{ asset('public/images/sponsor/' . trim($image)) }}">
                                        <img src="{{ asset('public/images/sponsor/' . trim($image)) }}" class="img-fluid"
                                            alt="{{ $sponsorList->title }}">
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection
