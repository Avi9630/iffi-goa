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
            <h1 class="page-title-header">Debut Director Jury - 2024</h1>
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
                                <h2 class="mt-3">Santosh Sivan</h2>
                                <h5>Filmmaker</h5>
                                <p>
                                    Santosh Sivan is a highly regarded Indian cinematographer, director, and producer
                                    celebrated for his remarkable contributions to both Indian and international cinema.
                                    Renowned for his cinematography in iconic films like "Dil Se," "Roja," and "Asoka," he
                                    has a unique talent for crafting visually striking narratives that resonate with
                                    audiences.<br>
                                    Transitioning from cinematography to direction, Sivan has successfully helmed films such
                                    as "Mallika," "Navarasa," and "Tahaan," showcasing his exceptional storytelling
                                    abilities and artistic vision. His work has earned him numerous accolades, including the
                                    prestigious Padma Shri award, which he received on the eve of the 65th Republic Day for
                                    his impactful contributions to Indian cinema over the past two decades.<br>
                                    Sivan began his career as a cinematographer with the 1986 Malayalam experimental film
                                    "Nidhiyude Katha." His impressive filmography includes critically acclaimed works like
                                    "Kaalapani," "Iruvar," "Raakh," "Thalapathi," and "Aham." Having started his journey in
                                    filmmaking by assisting his father on documentaries, Sivan has also directed over 30
                                    documentaries, further showcasing his versatility and dedication to the craft.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/debut-director-jury/santhosh-sivan.png') }}"
                                    class="img-fluid" style="width:100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @php
                $features = ['Mr. Suneel Puranik', 'Mr. Sekhar Das', ' Mr. M. V. Raghu', 'Mr. Vinit Kanojia'];
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
