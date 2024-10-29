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
            <h1 class="page-title-header">Indian Panorama Jury Feature</h1>
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
                                <h2 class="mt-3">Dr. Chandra Prakash Dwivedi</h2>
                                <h5>Director and Screenwriter</h5>
                                <p>
                                    Chandraprakash Dwivedi is an Indian actor, film director and screenwriter, who is best
                                    known for directing the 1991 television epic Chanakya in which he also played the title
                                    role of the political strategist Chanakya and an inspiration for millions. He has also
                                    directed the 1996 television series Mrityunjay which is based on the life of Karna, one
                                    of the main characters of the epic Mahabharata, for which he won a Screen Videocon Best
                                    Director award. His other major work is the 2003 film Pinjar, a tragic love story set
                                    amidst the Hindu-Muslim tensions during the Partition of India, based on Amrita Pritam's
                                    novel of the same name. He also wrote and directed Akshay Kumar-starrer Samrat
                                    Prithviraj (2022). He was honoured by the Government of India with the Padma Shri, the
                                    fourth-highest civilian honour of the country, in 2022.
                                </p>
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/indian-panorama-jury/Dr. Chandra Prakash Dwivedi.jfif') }}"
                                    class="img-fluid">
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            @php
                $features = [
                    'Shri. Manoj Joshi, Actor',
                    'Ms. Susmita Mukherjee, Actor',
                    'Shri. Himansu Sekhar Khatua, Film Director',
                    'Shri. Oinam Gautam Singh, Film Director',
                    'Shri. Ashuu Trikha, Film Director',
                    'Shri. S.M. Patil, Film Director and Writer',
                    'Shri. Neelaabh Kaul, Cinematographer and Film Director',
                    'Shri. Susant Misra, Film Director',
                    'Shri. Arun Kumar Bose, Ex HOD of Prasad Institute and Sound Engineer',
                    'Ms. Ratnottama Sengupta, Writer and Editor',
                    'Shri. Sameer Hanchate, Film Director',
                    'Ms. Priya Krishnaswamy, Film Director',
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
