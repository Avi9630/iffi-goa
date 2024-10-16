@extends('layouts.app')
@section('site_title', 'Indian Panorama – Discover more about Indian Panorama | IFFI Goa')
@section('site_description',
    'Explore Indian Panorama at IFFI Goa, a prestigious showcase of India’s rich cinematic
    diversity, featuring the best feature and non-feature films from across the nation.')
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
    <div class="container-fluid page-header bannerBg-festival-venue py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">ABOUT INDIAN PANORAMA</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="rules-text">
                        <h2>Indian Panorama</h2>
                        <p></p>
                        <p>
                            Indian Panorama is a flagship component of the International Film Festival of India (IFFI),
                            under which the best of contemporary Indian films are selected for the promotion of film art. It
                            was introduced in 1978 as part of the stupendous IFFI umbrella to promote Indian Films along
                            with India's rich culture and heritage with the help of cinematic art. Since its inception, the
                            Indian Panorama has been completely devoted to showcasing the best Indian films of the year.
                            <br><br> Organized by the National Film Development Corporation, Ministry of Information and
                            Broadcasting, the primary aim of the Indian Panorama is to select the feature and non-feature
                            films of cinematic, thematic and aesthetic excellence for the promotion of film art through the
                            non-profit screening of these films under different categories such as:
                            <br><br> (1) International Film Festivals in India and abroad.
                            <br> (2) Indian Film Weeks held under Bilateral Cultural Exchange Programmes and
                            Specialized Indian Film Festivals outside cultural exchange protocols.
                            <br>(3) Special Indian Panorama Festivals in India.

                            <br><br> The Indian Panorama has the following sections:- <br>
                            <br> a) Feature Films- A maximum of 26 Feature films, including the Best Feature Film of the
                            National Film Awards of the respective year, distinguished by cinematic, thematic
                            and aesthetic excellence, are selected in accordance with the conditions and
                            procedure in the said regulations of Indian Panorama.
                            <br> b) Non-Feature Films- A maximum of 21 Non-Feature films, including the best Non-
                            Feature Film of the National Film Awards of the respective year, distinguished by
                            cinematic, thematic and aesthetic excellence, are selected in accordance with the
                            conditions and procedure in the said regulations of Indian Panorama.
                        </p>
                        <p>
                        <div class="col-12 text-center">
                            <a href="https://iffigoa.org/festival/indian-paranoma" class="btn cus-prim-btn m-auto"
                                target="_blank">View your entry</a>
                        </div>
                        </p>

                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
