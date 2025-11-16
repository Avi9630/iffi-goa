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

    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <!-- Opening & Closing Venue -->
            <div class="row">

                <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">LOUNGE PARTNERS</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/6.png">
                                            <img src="{{ asset('public/images/sponsor/2025/6.png') }}" class="img-fluid"
                                                alt="LOUNGE PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/7.png">
                                            <img src="{{ asset('public/images/sponsor/2025/7.png') }}" class="img-fluid"
                                                alt="LOUNGE PARTNERS">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">BEVERAGE PARTNER</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/2.png') }}" class="img-fluid"
                                            alt="BEVERAGE PARTNER">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/34.png') }}" class="img-fluid"
                                            alt="BEVERAGE PARTNER">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">AIRLINE PARTNER</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/1.png') }}" class="img-fluid"
                                            alt="Fly91">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">AIRPORT PARTNER</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/41.png') }}" class="img-fluid"
                                            alt="Fly91">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">INCLUSION PARTNERS</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/28.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/28.png"
                                                class="img-fluid" alt="INCLUSION PARTNERS">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">SCREENING PARTNER</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/25.png">
                                            <img src="{{ asset('public/images/sponsor/2025/25.png') }}" class="img-fluid"
                                                alt="SCREENING PARTNER">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">MOBILITY PARTNER</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/8.png">
                                            <img src="{{ asset('public/images/sponsor/2025/8.png') }}" class="img-fluid"
                                                alt="MOBILITY PARTNER">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/9.png">
                                            <img src="{{ asset('public/images/sponsor/2025/9.png') }}" class="img-fluid"
                                                alt="MOBILITY PARTNER">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/33.png">
                                            <img src="{{ asset('public/images/sponsor/2025/33.png') }}" class="img-fluid"
                                                alt="MOBILITY PARTNER">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/29.png">
                                            <img src="{{ asset('public/images/sponsor/2025/29.png') }}" class="img-fluid"
                                                alt="MOBILITY PARTNER">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">CONTENT PARTNERS</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/3.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/3.png"
                                                class="img-fluid" alt="CONTENT PARTNERS">
                                        </a>
                                    </li>

                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/10.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/10.png"
                                                class="img-fluid" alt="CONTENT PARTNERS">
                                        </a>
                                    </li>

                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/43.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/43.png"
                                                class="img-fluid" alt="CONTENT PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/44.png">
                                            <img src="{{ asset('public/images/sponsor/2025/44.png') }}"
                                                class="img-fluid" alt="CONTENT PARTNERS">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">TECHNICAL PARTNERS</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/14.png">
                                            <img src="{{ asset('public/images/sponsor/2025/14.png') }}" class="img-fluid"
                                                alt="TECHNICAL PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/15.png">
                                            <img src="{{ asset('public/images/sponsor/2025/15.png') }}" class="img-fluid"
                                                alt="TECHNICAL PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/16.png">
                                            <img src="{{ asset('public/images/sponsor/2025/16.png') }}" class="img-fluid"
                                                alt="TECHNICAL PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/17.png">
                                            <img src="{{ asset('public/images/sponsor/2025/17.png') }}" class="img-fluid"
                                                alt="TECHNICAL PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/31.png">
                                            <img src="{{ asset('public/images/sponsor/2025/31.png') }}" class="img-fluid"
                                                alt="TECHNICAL PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/.43png">
                                            <img src="{{ asset('public/images/sponsor/2025/43.png') }}" class="img-fluid"
                                                alt="TECHNICAL PARTNERS">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">LICENSING PARTNER</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/impr.jpg">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/impr.jpg"
                                                class="img-fluid" alt="LICENSING PARTNER">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/novex.jpg">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/novex.jpg"
                                                class="img-fluid" alt="LICENSING PARTNER">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/rmpl.jpg">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/rmpl.jpg"
                                                class="img-fluid" alt="LICENSING PARTNER">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/13.png') }}" class="img-fluid"
                                            alt="Fly91">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">OUR SUPPORTERS</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/21.png') }}" class="img-fluid"
                                            alt="OUR SUPPORTERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/22.png') }}" class="img-fluid"
                                            alt="OUR SUPPORTERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/23.png') }}" class="img-fluid"
                                            alt="OUR SUPPORTERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/24.png') }}" class="img-fluid"
                                            alt="OUR SUPPORTERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/26.png') }}" class="img-fluid"
                                            alt="OUR SUPPORTERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/27.png') }}" class="img-fluid"
                                            alt="OUR SUPPORTERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/28.png') }}" class="img-fluid"
                                            alt="OUR SUPPORTERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/30.png') }}" class="img-fluid"
                                            alt="OUR SUPPORTERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/40.png') }}" class="img-fluid"
                                            alt="OUR SUPPORTERS">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">WIRELESS & SURVEILLANCE</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/19.png') }}" class="img-fluid"
                                            alt="Fly91">
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">CAUSE PARTNER</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/42.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/42.png"
                                                class="img-fluid" alt="CAUSE PARTNER">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">SURVEILLANCE PARTNERS</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/39.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/39.png"
                                                class="img-fluid" alt="SURVEILLANCE PARTNERS">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}

                <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">OTHER PARTNERS</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/4.png">
                                            <img src="{{ asset('public/images/sponsor/2025/4.png') }}" class="img-fluid"
                                                alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/32.png">
                                            <img src="{{ asset('public/images/sponsor/2025/32.png') }}" class="img-fluid"
                                                alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/5.png">
                                            <img src="{{ asset('public/images/sponsor/2025/5.png') }}" class="img-fluid"
                                                alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/46.png">
                                            <img src="{{ asset('public/images/sponsor/2025/46.png') }}" class="img-fluid"
                                                alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/48.png">
                                            <img src="{{ asset('public/images/sponsor/2025/48.png') }}" class="img-fluid"
                                                alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/49.png">
                                            <img src="{{ asset('public/images/sponsor/2025/49.png') }}" class="img-fluid"
                                                alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/50.png">
                                            <img src="{{ asset('public/images/sponsor/2025/50.png') }}" class="img-fluid"
                                                alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/42.png">
                                            <img src="{{ asset('public/images/sponsor/2025/42.png') }}" class="img-fluid"
                                                alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/45.png">
                                            <img src="{{ asset('public/images/sponsor/2025/45.png') }}" class="img-fluid"
                                                alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/36.png">
                                            <img src="{{ asset('public/images/sponsor/2025/36.png') }}" class="img-fluid"
                                                alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/37.png">
                                            <img src="{{ asset('public/images/sponsor/2025/37.png') }}" class="img-fluid"
                                                alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/38.png">
                                            <img src="{{ asset('public/images/sponsor/2025/38.png') }}" class="img-fluid"
                                                alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/sponsor/2025/39.png">
                                            <img src="{{ asset('public/images/sponsor/2025/39.png') }}" class="img-fluid"
                                                alt="OTHER PARTNERS">
                                        </a>
                                    </li>

                                    {{-- <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/51.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/51.png"
                                                class="img-fluid" alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/50.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/50.png"
                                                class="img-fluid" alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/49.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/49.png"
                                                class="img-fluid" alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/48.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/48.png"
                                                class="img-fluid" alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/52.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/52.png"
                                                class="img-fluid" alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/53.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/53.png"
                                                class="img-fluid" alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/54.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/54.png"
                                                class="img-fluid" alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/55.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/55.png"
                                                class="img-fluid" alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/56.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/56.png"
                                                class="img-fluid" alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/57.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/57.png"
                                                class="img-fluid" alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/58.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/58.png"
                                                class="img-fluid" alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/59.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/59.png"
                                                class="img-fluid" alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/60.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/60.png"
                                                class="img-fluid" alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/61.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/61.png"
                                                class="img-fluid" alt="OTHER PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/62.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/62.png"
                                                class="img-fluid" alt="OTHER PARTNERS">
                                        </a>
                                    </li> --}}

                                    {{-- <li class="me-2">
                                        <a href="{{ asset('public/images/thePartnerSponsor/Quatar Airways.jpg') }}">
                                            <img src="{{ asset('public/images/thePartnerSponsor/Quatar Airways.jpg') }}"
                                                class="img-fluid" alt="OTHER PARTNERS">
                                        </a>
                                    </li> --}}
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                {{-- <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">DESIGN PARTNERS</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/25.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/25.png"
                                                class="img-fluid" alt="DESIGN PARTNERS">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">DIGITAL MEDIA PARTNERS</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="{{ asset('public/images/thePartnerSponsor/my-gov.png') }}">
                                            <img src="{{ asset('public/images/thePartnerSponsor/my-gov.png') }}"
                                                class="img-fluid" alt="my-gov">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/22.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/22.png"
                                                class="img-fluid" alt="DIGITAL MEDIA PARTNERS">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">ENTERTAINMENT PARTNERS</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/24.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/24.png"
                                                class="img-fluid" alt="ENTERTAINMENT PARTNERS">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">INDUSTRY PARTNERS</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/26.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/26.png"
                                                class="img-fluid" alt="INDUSTRY PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/27.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/27.png"
                                                class="img-fluid" alt="INDUSTRY PARTNERS">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">INTERNATIONAL MEDIA PARTNERS</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/18.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/18.png"
                                                class="img-fluid" alt="INTERNATIONAL MEDIA PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/19.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/19.png"
                                                class="img-fluid" alt="INTERNATIONAL MEDIA PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/20.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/20.png"
                                                class="img-fluid" alt="INTERNATIONAL MEDIA PARTNERS">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">KNOWLEGE PARTNER</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/45.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/45.png"
                                                class="img-fluid" alt="KNOWLEGE PARTNER">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/46.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/46.png"
                                                class="img-fluid" alt="KNOWLEGE PARTNER">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">MEDIA PARTNERS</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/21.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/21.png"
                                                class="img-fluid" alt="MEDIA PARTNERS">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">NETWORKING PARTNERS</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/36.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/36.png"
                                                class="img-fluid" alt="NETWORKING PARTNERS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/37.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/37.png"
                                                class="img-fluid" alt="NETWORKING PARTNERS">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">TECHNOLGY PARTNER</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul class="d-flex flex-wrap">
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/47.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/47.png"
                                                class="img-fluid" alt="TECHNOLGY PARTNER">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}


                {{-- <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">POPCORN PARTNER</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/34.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/34.png"
                                                class="img-fluid" alt="POPCORN PARTNER">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">PRODUCTION PARTNER</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/44.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/44.png"
                                                class="img-fluid" alt="PRODUCTION PARTNER">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">RECOMMENDATION PARTNERS</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/38.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/38.png"
                                                class="img-fluid" alt="RECOMMENDATION PARTNERS">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">COUNTRY OF FOCUS</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/2.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/2.png"
                                                class="img-fluid" alt="COUNTRY OF FOCUS">
                                        </a>
                                    </li>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/1.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/1.png"
                                                class="img-fluid" alt="COUNTRY OF FOCUS">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}

                {{-- <div class="col-md-4 col-sm-6 d-flex">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor">ACCESSIBILITY PARTNER</h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <a href="https://www.iffigoa.org/public/images/thePartnerSponsor/29.png">
                                            <img src="https://www.iffigoa.org/public/images/thePartnerSponsor/29.png"
                                                class="img-fluid" alt="ACCESSIBILITY PARTNER">
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}


                {{-- code V-2 --}}

                {{-- <div class="col-md-12 col-sm-12">
                    <div class="card">
                        <div class="card-header">
                            <h3 class="title-sponsor text-center"><b>OUR PARTNERS & SPONSORS</b></h3>
                        </div>
                        <div class="card-body">
                            <div class="sponsor-list-div ">
                                <ul>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/3.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/5.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/6.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/7.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/8.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/9.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/10.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/11.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/12.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/13.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/14.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/15.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/16.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/17.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/18.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/19.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/20.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/21.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/22.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/23.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/24.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/25.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/26.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/27.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/28.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/29.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/30.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/31.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/32.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>
                                    <li class="me-2">
                                        <img src="{{ asset('public/images/sponsor/2025/33.png') }}" class="img-fluid"
                                            alt="CONTENT PARTNERS">
                                    </li>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
        </div>
    </div>
@endsection
