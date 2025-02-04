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
    <div class="container-fluid page-header bannerBg-ott py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Best Web Series Preview Committee 2024</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">

            {{-- <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-7 ">
                            <div class="international-jury-text">
                                <h2 class="mt-3">Shri. Madhur Bhandarkar </h2>
                                <h5>Chairperson</h5>
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
            </div> --}}

            @php
                $features = [
                    'A Chandrasekhar',
                    'Ashok Kumar Palit',
                    'Atul Pandey',
                    'Dr. Pradeep Kenchanuru',
                    'Haobam Paban Kumar',
                    'Haril Shukla',
                    'Kedar Gaekwad',
                    'Mahesh Digrajkar',
                    'Mandar Bam',
                    'Murtaza Ali Khan',
                    'Rekha Gupta',
                    'Satish Pandey',
                    'Saurabh Kanti Dutta',
                    'Shivam Chhabra',
                    'Sriprakash Menon',
                    'Sulakhyana Baruah',
                    'Supratim Bhol',
                    'U Radha Krishnan',
                ];
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
