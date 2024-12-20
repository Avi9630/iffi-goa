@extends('layouts.app')
@section('site_title', 'Indian Panorama Jury - Feature Films | IFFI Goa 2024')
@section('site_description',
    'Discover the esteemed jury panel selecting India’s finest feature films for Indian
    Panorama at IFFI Goa 2024. Celebrating excellence in Indian cinema.')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-feature py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Indian Panorama Jury</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="international-jury-text mb-4">
                <h2 class="mt-3">Indian Panorama Jury - Featured </h2>
                {{-- <h5>Chairperson</h5> --}}
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="row  align-items-center ">
                        <div class="col-md-7 ">
                            <div class="international-jury-text">
                                <h2 class="mt-3">Dr. Chandra Prakash Dwivedi</h2>
                                <h5>Chairperson</h5>
                                {{-- <p>
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
                                </p> --}}
                            </div>
                        </div>
                        <div class="col-md-5 ">
                            <div class="jury_img">
                                <img src="{{ asset('public/images/jury/indian-panorama-jury/Dr. Chandra Prakash Dwivedi.jfif') }}"
                                    class="img-fluid">
                                {{-- <img src="{{ asset('public/images/jury/indian-panorama-jury/Chandra Prakash Dwivedi.png') }}"
                                    class="img-fluid"> --}}
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

            @foreach ($features as $key => $feature)
                <div class="card">
                    <div class="card-body">
                        <h3>{{ $feature }}</h3>
                    </div>
                </div>
            @endforeach

        </div>
    </div>
@endsection
