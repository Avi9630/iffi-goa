@extends('layouts.app')
@section('site_title', 'Explore Top Tourist Places in Goa')
@section('site_description',
    'Discover top tourist places in Goa, from pristine beaches to historic forts. Plan your
    visit with our detailed guide to Goas must-see attractions.')
@section('site_keywords',
    'Goa Tourist Places, Top Attractions In Goa, Best Places To Visit In Goa, Goa Tourism, Popular
    Goa Destinations, Must-See Places In Goa')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-goa-tourist-places py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Goa Tourist Places</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <p>Goa Tourist Places
                        Goa is a state in western India with coastlines stretching along the Arabian Sea. Its long history
                        as a Portuguese colony prior to 1961 is evident in its preserved 17th-century churches and the
                        area's tropical spice plantations. Goa is also known for its beaches, ranging from popular stretches
                        at Baga and Palolem to those in laid-back fishing villages such as Agonda.
                    </p>
                    <p>
                        The multi-religious fabric of Goa's society shines brightly, imbibed with the spirit of “Sarva
                        Dharma, Sama Bhava” or Equal Respect for all Religions. Today, Goa has one of India's highest
                        per-capita incomes, with farming, fishing, tourism and iron-ore mining forming the basis of its
                        economy.
                    </p>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-12 col-sm-12 col-12">
                    <p><img src="{{ asset('public/images/about-us/goa.jpg') }}" alt="" class="img-fluid">
                    </p>
                </div>
            </div>
            <!-- Unesco Heritage Monuments -->
            <div class="row">
                <div class="col-lg-12 mt-5 ">
                    <div class="section-heading title-line mb-4">
                        <h2>Unesco Heritage Monuments</h2>
                    </div>
                    <div class="row">
                        @foreach ($gtp as $value)
                            <div class="col-md-4 col-sm-4 col-xs-12 d-flex">
                                <div class="card shadow-sm">
                                    <div class="card-image">
                                        <img src="{{ asset('public/images/about-us/' . $value->image) }}" class="img-fluid">
                                    </div>
                                    <div class="card-body text-start">
                                        <h4 class="title">{{ $value->title }}</h4>
                                        <p>{!! $value->description !!}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <!-- Unesco Heritage Monuments Ends -->

            <!-- Other Unesco Heritage Sites In Goa -->
            <div class="row">
                <div class="col-lg-12 mt-5 ">
                    <div class="section-heading title-line mb-4">
                        <h2>Other Unesco Heritage Sites In Goa</h2>
                    </div>
                    <div class="row">
                        <div class="owl-carousel">
                            @foreach ($gtpu11 as $item)
                                <div class=" item d-flex">
                                    <div class="card shadow-sm">
                                        <div class="card-image">
                                            <img src="{{ asset('public/images/about-us/' . $item->image) }}"
                                                class="img-fluid">
                                        </div>
                                        <div class="card-body text-start">
                                            <h4 class="title">{{ $item->title }}</h4>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                </div>
            </div>
            <!-- Other Unesco Heritage Sites In Goa -->
            <!-- Forts-->
            <div class="row">
                <div class="col-lg-12 mt-5 ">
                    <div class="section-heading title-line mb-4">
                        <h2>Forts</h2>
                    </div>
                 
                        <div class="row">
                               @foreach ($gtpp22 as $dd22)
                            <div class="col-md-6 col-sm-6 d-flex">
                                {{-- <div class=" item d-flex"> --}}
                                <div class="card shadow-sm">
                                    <div class="card-image min-img-height-card">
                                        <img src="{{ asset('public/images/about-us/' . $dd22->image) }}" class="img-fluid">
                                    </div>
                                    <div class="card-body text-start">
                                        <h4 class="title">{{ $dd22->title }}</h4>
                                        <p>{!! $dd22->description !!}</p>
                                    </div>
                                </div>
                                {{-- </div> --}}
                            </div>
                             @endforeach
                        </div>
                   
                </div>
            </div>
        </div>
    </div>

@endsection

{{-- <script type="text/javascript">
    $(document).ready(function() {
        $('.owl-carousel').owlCarousel({
            items: 3, // Number of items you want to display at once
            loop: true, // Loop through the items
            margin: 10, // Margin between items
            nav: true, // Show navigation arrows
            dots: false, // Show pagination dots
            responsive: {
                0: {
                    items: 1 // Number of items at viewport width 0px
                },
                600: {
                    items: 2 // Number of items at viewport width 600px
                },
                1000: {
                    items: 3 // Number of items at viewport width 1000px
                }
            }
        });
    });
</script> --}}
