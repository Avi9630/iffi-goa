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
            <h1 class="page-title-header">Indian Film Personality of the Year Award </h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->

    <!-- About IFFI Content Start-->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h2>Indian Film Personality of the Year Award </h2>
                    <div class="policy-page">
                        <p>
                            The Indian Film Personality of the Year Award is a prestigious honor presented annually at the
                            International Film Festival of India in Goa. Instituted in 2013 to mark a century of Indian
                            cinema, this award recognizes an individual's outstanding contribution to the growth,
                            development, and enrichment of Indian cinema through their artistry and dedication. It
                            celebrates master film personalities whose work has significantly influenced the Indian film
                            industry and its presence on the global stage.
                        </p><br>
                        <p>
                            The award comprises a Silver Peacock Medal, a certificate, and a cash prize, symbolizing
                            recognition from the nation's most prominent film festival. Past recipients include an
                            illustrious lineup of actors, directors, musicians, and other luminaries who have carved
                            indelible marks in the cinematic world. The award not only honors lifetime achievements but also
                            highlights contemporary contributions that continue to inspire and shape Indian cinema's vibrant
                            future.
                        </p><br>
                        <p>
                            Last year IFFI celebrated actor Vikrant Massey as the Indian Film Personality of the Year,
                            applauding his versatile performances and dedication. The award ceremony is a major highlight of
                            the festival's closing event and serves as a platform to bring global attention to Indian
                            cinema's artistic depth.
                        </p><br>
                        <p>
                            By honoring such personalities, IFFI strengthens its mission to celebrate Indian cinema's
                            heritage, promote excellence, and motivate upcoming generations of filmmakers and artists. The
                            Indian Film Personality of the Year Award remains a beacon of inspiration and an emblem of the
                            enduring creative spirit that defines Indian film culture.
                        </p><br>
                        <p>
                            Who will be the Indian Film Personality of the year 2025? Please keep an eye on this space for
                            updates once the awardee is announced.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About IFFI Ends Content End-->
@endsection
