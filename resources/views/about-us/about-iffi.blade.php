@extends('layouts.app')
@section('site_title', 'Discover what IFFI is all about | IFFI GOA')
@section('site_description',
    'Discover the International Film Festival of India (IFFI), showcasing the best of Indian
    and global cinema, fostering cultural exchange and cinematic excellence.')
@section('site_keywords', 'About IFFI Goa, IFFI goa, IFFI goa registration, IFFI goa delegate registration, About us')
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
            <h1 class="page-title-header">About Us</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->

    <!-- About IFFI Content Start-->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                <div class=" col-md-12 col-sm-12 col-12">
                    <p>IFFI is the only film festival in South Asia that is accredited by International Federation of Film
                        Producers' Associations (FIAPF) of the 44th international festivals in the Competitive Feature Films
                        Category.
                    </p>
                    <p>Since its inception in 1952, IFFI has been curating spectacular films from all over the world. Its
                        goal is to provide a single platform for ambitious filmmakers, cineastes, and industry professionals
                        to
                        have access to excellent cinema from across the world.
                    </p>
                    <p>IFFI's International Cinema section is an assortment of culturally and aesthetically remarkable films
                        from around the world. It has kept its stature high by committing to promote art by showcasing the
                        international films of the year shortlisted by the eminent members associated with the Film
                        Industry.
                    </p>
                    <p>Since 2004, IFFI has moved to its permanent venue at Goa, where it is jointly organized each year by
                        National Film Development Corporation (NFDC), Ministry of Information and Broadcasting, Government
                        of
                        India and Entertainment Society of Goa (ESG), Government of Goa.
                    </p>
                </div>
                <div class="col-lg-12">
                    <div class="section-heading  mt-5 ">
                        <h2>Festival</h2>
                        <h4 class="mb-2">Programmes In Brief</h4>
                    </div>
                    <ul>
                        <li>Gala Opening and Closing Ceremonies and daily Red Carpet events &amp; celebrations</li>
                        <li>Country Focus, Tributes, Retrospectives, Goan Films’ Section &amp; other specially curated
                            packages of
                            International &amp; Indian Films
                        </li>
                        <li>Workshops/Master classes/other Interactive &amp; Academic Sessions/Panel Discussions etc.</li>
                        <li>Film Bazaar (Film Market) organized alongside from 20-24th Nov, 2024.</li>
                    </ul>
                </div>
                <div class="col-lg-12">
                    <div class="section-heading mt-5 ">
                        <h2>Awards</h2>
                        <h4 class="mb-2">@ IFFI</h4>
                    </div>
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><span>Golden </span>Peacock</h3>
                                <div class="up-awards-card">
                                    <h5>Best Film</h5>
                                    <p>Certificate and a Cash prize of <span class="price">Rs. 40,00,000/-</span></p>
                                </div>
                            </div>
                        </div>
                        <div class="card">
                            <div class="card-body">
                                <h3 class="card-title"><span>Silver </span>Peacock</h3>
                                <div class="up-awards-card">
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <h5>Best Film</h5>
                                            <p>Certificate and a Cash prize of <span class="price">Rs. 15,00,000/-</span>
                                            </p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <h5>Best Actor (M)</h5>
                                            <p>Certificate and a Cash prize of <span class="price">Rs. 10,00,000/-</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <h5>Best Actor (F)</h5>
                                            <p>Certificate and a Cash prize of <span class="price">Rs. 10,00,000/-</span>
                                            </p>
                                        </div>
                                        <div class="col-md-6 col-sm-6">
                                            <h5>Special Jury Award</h5>
                                            <p>Certificate and a Cash prize of <span class="price">Rs. 15,00,000/-</span>
                                            </p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-6 col-sm-6">
                                            <h5>Best Debut Feature
                                                Film of a Director
                                            </h5>
                                            <p>Certificate and a Cash prize of <span class="price">Rs. 10,00,000/-</span>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row d-flex">
                            <div class="col-md-6 d-flex">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="up-awards-card">
                                            <h3 class="card-title">Satyajit Ray <span>Lifetime Achievement Award</span>
                                            </h3>
                                            <p>This prestigious award is conferred upon master film personalities for
                                                outstanding contribution to cinema. Latest recipients were Carlos Saura
                                                (2022) , Martin Scorsese (2021) Istvan Szabo (2021) and Vittorio Storato
                                                (2020).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 d-flex">
                                <div class="card">
                                    <div class="card-body">
                                        <div class="up-awards-card">
                                            <h3 class="card-title">Indian Film <span>Personality of the Year</span></h3>
                                            <p>Previous recipients were Chiranjeevi (2022), Hema Malini (2021) and Prasoon
                                                Joshi (2021).</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About IFFI Ends Content End-->
@endsection
