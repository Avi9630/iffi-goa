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
            {{-- <div class="row">
                @foreach ($sponsors as $title => $sponsorList)
                    <div class="sponsor-list mb-2">
                        <h4 class="mb-4">{{ $title }}</h4>
                        <ul>
                            @foreach ($sponsorList as $sponsor)
                                <li>
                                    <a href="{{ $sponsor->link }}">
                                        <img src="{{ asset('images/sponsor/' . $sponsor->image) }}" class="img-fluid">
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div> --}}

            <!-- Sponsor -->
            {{-- <div class="row ">
                <div class="sponsor-list mb-2">
                    <h4 class="mb-4">title</h4>
                    <ul>
                        <li><a href="#"><img src="images/sponsor/1.png" class="img-fluid"></a></li>
                        <li><a href="#"><img src="images/sponsor/2.png" class="img-fluid"></a></li>
                    </ul>
                </div>
                <div class="sponsor-list mb-2">
                    <h4 class="mb-4">title</h4>
                    <ul>
                        <li><a href="#"><img src="images/sponsor/3.png" class="img-fluid"></a></li>
                        <li><a href="#"><img src="images/sponsor/3.png" class="img-fluid"></a></li>
                    </ul>
                </div>
            </div> --}}



            {{-- <style type="text/css">
                .sponsor-list ul {
                    padding: 0px;
                    margin: 0px;
                    display: flex;
                    column-gap: 10px;
                    flex-wrap: wrap;
                }

                .sponsor-list ul li {
                    display: flex;
                    border: solid 1px #ddd;
                    padding: 0px 10px 0px 10px;
                    border-radius: 5px;
                    list-style: none;
                    background: #fff;
                    width: 11%;
                }

                .sponsor-list ul li:hover {
                    border: solid 1px #333;
                }
            </style> --}}
            <!-- Sponsor -->
        </div>
        {{-- <div class="container">
            <div class="mt-5 mb-4">
                <div id="lightgallery" class="gallery">
                    @foreach ($gallery as $gall)
                        <div class="grid-item">
                            <a href="{{ asset('public/images/gallery/' . $gall->image) }}"
                                data-src="{{ asset('public/images/gallery/' . $gall->image) }}">
                                <img src="{{ asset('public/images/gallery/' . $gall->image) }}" alt="{{ $gall->image }}">
                            </a>
                        </div>
                    @endforeach
                </div>
            </div>
            <div class="container">
                <nav aria-label="Page navigation pb-4">
                    <ul class="pagination overflow-hidden">
                        {{ $gallery->withQueryString()->links() }}
                    </ul>
                </nav>
            </div>
        </div> --}}
    </div>
@endsection
