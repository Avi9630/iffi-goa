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
    <div class="container-fluid page-header py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Indian Panorama Jury <br>Non-Feature</h1>
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
                                <h2 class="mt-3">Shri. Subbiah Nallamuthu</h2>
                                <h5>Cinematographer</h5>
                                <p>
                                    Nallamuthu is a leading wildlife filmmaker from India. He specialized in cinematography
                                    from FTIT, Chennai and later worked as a high-speed cameraman with Indian Space Research
                                    Organization. He has worked with some of industry's best networks from National
                                    Geographic Channel BBC, Channel 4, Discovery, Animal Planet, ZDF, and Doordarshan.
                                    Nallamuthu has shot India's longest running Panda Award winning Environment series,
                                    'Living on the Edge'. His oeuvre includes firsts of many: the travel show 'Off the
                                    Beaten Track', automobile show 'Wheels and reality show 'Hospital' for BBC, 'Soul
                                    Searching' & 'Body Shock Specials' for Channel 4, 'Life Force II' -India Section for
                                    Discovery, Hindi feature film titled 'Dharm' in full HD for theatrical release, and one
                                    of the first to use 4K resolution for wildlife filming in India. Since 1987, he has made
                                    a range of films including 11 series and 55 documentaries, most centred on Indian
                                    wildlife. His passion for the Royal Bengal Tiger has translated into five tiger-centric
                                    international documentaries for National Geographic Channel and BBC which he has
                                    produced, filmed and directed. His ability to add a theatrical touch to factual
                                    story-telling and his technical skills combined with a poetic visual style have won him
                                    several awards including four prestigious Indian National Film Awards for Best
                                    Cinematography and Best Environment Films. Through his films, Nallamuthu hopes to bring
                                    to life every second of the raging the struggle for survival that persists in the
                                    unpredictable wild and gives conservation a fresh perspective.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/indian-panorama-jury/Shri. Subbiah Nallamuthu.jpg') }}"
                                    class="img-fluid" style="width:100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @php
                $features = [
                    'Shri. Rajnikant Acharya, Producer and Film Director',
                    'Shri. Ronel Haobam, Film Director',
                    'Ms. Usha Deshpande, Film Director and Producer',
                    'Ms. Vandana Kohli, Film Director and Writer',
                    'Shri. Mithunchandra Chaudhari, Film Director',
                    'Ms. Shalini Shah, Film Director',
                ];
            @endphp

            <div class="card">
                <div class="card-body">
                    <ol>
                        @foreach ($features as $key => $feature)
                            <li>{{ $feature }}</li>
                        @endforeach
                    </ol>
                    {{-- <div class="row  align-items-center ">
                    </div> --}}
                </div>
            </div>


        </div>
    </div>
@endsection
