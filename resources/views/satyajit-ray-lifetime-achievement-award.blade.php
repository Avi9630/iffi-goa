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
            <h1 class="page-title-header">Satyajit Ray Lifetime Achievement Award</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->

    <!-- About IFFI Content Start-->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Satyajit Ray Lifetime Achievement Award for Excellence in Cinema</h2>
                    <div class="policy-page">
                        <p>
                            In the quiet spaces where light and shadow dance, where stories unfold beyond mere words, the
                            Satyajit Ray Lifetime Achievement Award at the International Film Festival of India stands as a
                            luminous tribute to cinema's profound power. It celebrates the artistic spirit of filmmakers
                            whose vision transcends borders and whose films echo the humane and poetic legacy of Ray's
                            masterful storytelling.
                        </p><br>
                        <p>
                            Instituted originally in 1999 and renamed in honor of Satyajit Ray, Oscar winning Master
                            craftsman who redefined Indian Cinema, on his birth centenary in 2021, this coveted award
                            recognizes towering contributions to world cinema. It honors filmmakers whose work embraces
                            cultural richness, social relevance, and artistic innovation values dear to Ray's cinematic
                            philosophy. Over the years, the award has been bestowed upon distinguished luminaries placing
                            India firmly on the global cinematic map while celebrating universal narrativees that inspire
                            audiences worldwide.
                        </p><br>
                        <p>
                            Each year at IFFI, the award ceremony is accompanied by retrospectives of the laureate's gifted
                            oeuvre, inviting cinephiles to delve into the journey of creative excellence that has shaped
                            contemporary cinema. The award carries a cash prize of ₹10,00,000, along with a Silver Peacock
                            Medal, a certificate, a shawl, and a scroll, symbolizing the highest recognition from India's
                            foremost international film festival. Previous awardees have included luminaries such as Martin
                            Scorsese, Carlos Saura, Michael Douglas, and most recently, Phillip Noyce in IFFI 2024.
                        </p><br>
                        <p>
                            Far more than an accolade, the Satyajit Ray Award symbolizes a beacon of inspiration, urging
                            filmmakers to pursue integrity, imagination, and social conscience, values that continue to
                            illuminate the ever-evolving world of cinema.
                        </p><br>
                        <p>
                            This year too Satyajit Ray Lifetime Achievement Award will be presented to an unmatched talent
                            from the cinematic universe. To know more about the winner, Please keep an eye on this space for
                            updates once the awardee is announced.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About IFFI Ends Content End-->
@endsection
