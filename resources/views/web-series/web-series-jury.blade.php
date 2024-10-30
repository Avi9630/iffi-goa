@extends('layouts.app')
@section('site_title', 'Explore IFFI Goa 2024 International Festival Venues')
@section('site_description',
    'Discover the vibrant festival venues of IFFI Goa 2024. Get detailed information on
    locations, facilities, and events happening at each venue.')
@section('site_keywords',
    'IFFI Goa information, IFFI event venue, About IFFI venue, Festival location details, IFFI
    history and venue, Film festival India, Film festival venue, IFFI international film festival')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-IFFI-international py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Best OTT Jury - 2024</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">

            <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-7 ">
                            <div class="international-jury-text">
                                <h2 class="mt-3">Shri. Madhur Bhandarkar </h2>
                                <h5>Chairperson</h5>
                                {{-- <p>
                                    Madhur Bhandarkar is an acclaimed Indian film director, producer, and screenwriter known
                                    for his impactful storytelling in Hindi cinema. He gained prominence for his films that
                                    delve into social issues, realism, and the darker aspects of life. Starting his career
                                    in the late 1990s, Bhandarkar made a significant mark with his directorial debut, "Tanha
                                    Dil," in 2000, but it was his later works that truly established him as a notable
                                    filmmaker. Films like "Chandni Bar" (2001), which tells the harrowing story of a young
                                    woman's struggles, and "Page 3" (2005), which offers a glimpse into the lives of
                                    Mumbai's social elite, showcase his keen insight into urban complexities. His 2008 film
                                    "Fashion" explores the challenges faced by aspiring models, while "Heroine" (2012)
                                    highlights the tumultuous life of a Bollywood actress, both garnering critical acclaim
                                    and several awards. Bhandarkar’s unique style often features strong female protagonists
                                    and is marked by a documentary-like realism, supported by extensive research to
                                    authentically portray the environments and characters in his narratives. With multiple
                                    National Film Awards and Filmfare Awards to his name, Bhandarkar is celebrated for
                                    blending entertainment with meaningful commentary, making him a prominent voice in
                                    contemporary Indian cinema.
                                </p> --}}
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/ott-jury/Shri. Madhur Bhandarkar.webp') }}"
                                    class="img-fluid" style="width:100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @php
                $features = ['Shri. Krishna Hebbale', 'Shri. Rupali Ganguli', 'Shri. Harish Shankar'];
            @endphp

            @foreach ($features as $key => $feature)
                <div class="card">
                    <div class="card-body">
                        {{-- <ol> --}}
                        <h4>{{ $feature }}</h4>
                        {{-- </ol> --}}
                    </div>
                </div>
            @endforeach


        </div>
    </div>
@endsection
