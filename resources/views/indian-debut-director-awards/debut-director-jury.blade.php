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
                                <h2 class="mt-3">Shri Santosh Sivan</h2>
                                <h5>Filmmaker</h5>
                                <p>
                                    Chennai, Jan 25: Cinematographer-turned-filmmaker Santosh Sivan, known for his work in
                                    films like "Kaalapani", "Iruvar" and "Dil Se", was Saturday conferred the Padma Shri on
                                    the eve of the 65th Republic Day. <br>

                                    The 49-year old Sivan got the award for his contribution to Indian cinema over the last
                                    two decades.<br>

                                    Starting his career as a cinematographer in the 1986 Malayalam experimental film
                                    "Nidhiyude Katha", Sivan has handled the camera for critically acclaimed films such as
                                    "Raakh", "Thalapathi", "Roja" and "Aham".<br>

                                    Having assisted his father while making documentaries as a youngster, Sivan has made
                                    over 30 documentaries.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/debut-director-jury/santhosh-sivan.jpg') }}"
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
