@extends('layouts.app')

@section('site_title', 'Discover more about the Best Web Series Awards (OTT) | IFFI Goa 2024')
@section('site_description',
    'Explore details about the web series section at IFFI Goa 2024, including entry
    requirements, selection criteria, and festival highlights.')
@section('site_keywords',
    'IFFI Goa rules, IFFI guidelines, Film Submission Rules, IFFI entry requirements, IFFI Goa
    policies, Film Festival Regulations, Event Rules IFFI')

@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-about-web py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">ABOUT WEB SERIES</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    {{-- <div class="rules-text"> --}}
                    <h5>About Best Web Series Awards</h5>
                    <p>
                        The International Film Festival of India (IFFI), accredited by the International Federation of
                        Film Producers Associations (FIAPF), has consistently proven to be a film festival par
                        excellence, celebrating the finest cinematic art and talents from around the globe.</br> </br>

                        Recognizing the tectonic changes in the entertainment industry especially in the recent years
                        with the onset and acceptance of Over-The-top (OTT) platforms, the “Best Web Series (OTT) Award”
                        was introduced by Ministry of Information & Broadcasting, Government of India at the 54th
                        edition of IFFI (2023).</br> </br>

                        Continuing the momentum, the award aims at acknowledging, encouraging and honouring the
                        flourishing content and its creators on OTT platforms.</br> </br>

                        The Objective of the Best Web-Series(OTT) Award is to </br>

                    <ul>
                        <li>
                            Foster growth and innovation in the Indian OTT industry by encouraging and celebrating web
                            series content produced for and screened on digital platforms.
                        </li>
                        <li>
                            Encourage OTT content in Indian languages by promoting regional diversity and creativity in
                            the web content industry, including content produced in regional languages.
                        </li>
                        <li>
                            Recognize and reward exceptional talent that has realized its potential due to the
                            opportunities provided by the OTT space in India.
                        </li>
                        <li>
                            Incentivize and create investment opportunities in India's OTT sector by providing avenues
                            to
                            content creators and OTT platforms to showcase their work, exchange knowledge, and foster
                            international relationships through the International Film Festival of India (IFFI).
                        </li>
                    </ul>


                    The Best Web Series (OTT) Award, presented at IFFI, consists of a Certificate and cash Prize of
                    Rs.10 lakhs, to one(1) best Web-Series for its artistic merit, storytelling, technical
                    excellence, and overall impact.
                    </br></br>

                    By recognizing excellence in web series, IFFI celebrates creativity and innovation, underscoring
                    the importance of this growing segment in shaping the future of Indian entertainment.

                    </p>
                    <div class="col-12 text-center">
                        <a href="https://iffigoa.org/festival/web-series" class="btn cus-prim-btn m-auto" target="_blank">Submit
                            your entry
                        </a>
                    </div>
                    {{-- </div> --}}
                </div>
            </div>
        </div>
    </div>
@endsection
