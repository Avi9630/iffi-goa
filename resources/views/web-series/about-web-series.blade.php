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
                    <div class="rules-text">
                        <h5>Web Series</h5>
                        <p></p>
                        <p>
                            The International Film Festival of India (IFFI), accredited by the International Federation of
                            Film Producers Associations (FIAPF), celebrates the finest cinematic art from around the globe.
                            Recognizing the significant changes in the entertainment industry, particularly with the rise of
                            Over-The-Top (OTT) platforms, the Best Web Series (OTT) Award was introduced in the 54th edition
                            of IFFI (2023). This award aims to acknowledge, encourage, and honour the flourishing content
                            and its creators on OTT platforms.<br><br>
                            India's media and entertainment sector is diverse, encompassing content across various
                            languages, regions, and platforms, including theatrical films and OTT. The OTT sector has led to
                            increased production of content in Indian languages to cater to diverse audiences. This growth
                            has significantly impacted regional cinema, generating employment and opportunities for young
                            creative professionals. <br><br>
                            The Government of India has supported the OTT industry through the Information Technology
                            (Intermediary Guidelines and Digital Media Ethics Code) Rules 2021, promoting self-regulation
                            and content accountability. The Ministry has encouraged OTT platforms' participation in events
                            like IFFI through world premieres, masterclasses, and technology exhibitions. Similar
                            collaborations have occurred at regional film festivals in Kashi and Ladakh. Public
                            communication campaigns, such as the Hon'ble Prime Minister's Pariksha Pe Charcha programme and
                            Azadi Ka Amrit Mahotsav, have also involved OTT platforms. <br><br>
                            The 'Best Web Series (OTT) Award' at IFFI 2023 highlights the critical role of the OTT industry
                            in enriching Indian media and entertainment. By recognizing excellence in web series, IFFI
                            celebrates creativity and innovation, underscoring the importance of this growing segment in
                            shaping the future of Indian entertainment.
                        </p>

                        <div class="col-12 text-center">
                            <a href="https://iffigoa.org/festival/web-series" class="btn cus-prim-btn m-auto"
                                target="_blank">Register
                                Now</a>
                        </div>


                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
