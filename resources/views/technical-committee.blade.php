@extends('layouts.app')

@section('site_title', 'Technical Committee Members & Partners for 55th IFFI ')
@section('site_description',
    'Explore the list of dedicated Technical Committee at 55th IFFI that help to execute the
    event successfully.')
@section('site_keywords',
    'IFFI Technical Committee, technical experts IFFI, film festival operations, IFFI event
    management,')

@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-committee py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Technical Committee</h1>
        </div>
    </div>

    <!-- Inner Page Banner Section -->
    <div class="pt-5">
        <section class="about-festival container">
            <div class="section-heading mb-4 container">
                <h2>List of Technical Committee Members</h2>
            </div>
            <ul class="about-festival-ul">
                <li>Shri. A K Bir, Chairman – Technical Committee</li>
                <li>Shri Shekhar Kapoor, Festival Director IFFI-55</li>
                <li>Shri Prithul Kumar, MD, NFDC & Joint Secretary Min. of I & B.</li>
                <li>Smt. Ankita Mishra, CEO, ESG</li>
                <li>Shri B. Diwakar, Professor in Cinematography</li>
                <li>Shri. Ramsahay Yadav, Member</li>
                <li>Shri. Madhusudan K J, Country Manager-Cinema, Barco NV</li>
                <li>Shri. Ketan Mehta, VP, M/s. Qube Cinema</li>
                <li>Shri Anirvan Ghosh, Managing Director, M/s. Pulz Electronics</li>
                <li>Shri Ujwal Nirgudkar, Chairman, SMPTE</li>
                <li>The Commissioner, Municipality, Panaji, Goa</li>
                <li>The Health Officer, Panaji, Goa</li>
                <li>The Chief Fire Officer, Panaji, Goa</li>
                <li>The Traffic Commissioner, Panaji, Goa</li>
                <li>Chief Engineer (Elect.), Government of Goa</li>
                <li>The General Manager – INOX</li>
                <li>Chairman Kala Academy, Goa</li>
                <li>Shri. D. Ramakrishnan, GM (P&A) and CEO,55th IFFI</li>
            </ul>
        </section>

        <!-- Sponsors  -->
        <div class="col-lg-12 mb-5">
            <div class="container">
                <div class="section-heading mb-4 text-center mt-5 center-heading">
                    <h2>Technical Partners</h2>
                </div>
                <div class="owl-carousel-sponsor">
                    @foreach ($partners as $partner)
                        <div class="item ">
                            <img src="{{ asset('public/images/sponsor/' . $partner) }}" alt="Patners logo"
                                class="img-fluid">
                        </div>
                    @endforeach
                </div>
            </div>
        </div>


    </div>
@endsection
