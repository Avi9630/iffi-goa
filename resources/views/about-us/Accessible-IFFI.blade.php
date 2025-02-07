@extends('layouts.app')
@section('site_title', 'IFFI 56 Accessibility: Embracing Inclusivity for All')
@section('site_description',
    'Discover how the 55th International Film Festival of India (IFFI) celebrates inclusivity
    and accessibility with initiatives like live sign language interpretation, audio-described films, wheelchair-accessible
    venues, and more. Experience a cinema festival designed for everyone.')
@section('site_keywords',
    'IFFI 55 Accessibility, Inclusive Film Festival, Accessible India Films, Accessible Press
    Conferences, Cinema for All, Sabka Manoranjan, IFFI Inclusivity Initiatives, Specially-Abled Accessibility.')
@section('content')

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-accessible-iffi py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Accessible IFFI For All</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->

    <!-- About IFFI Content Start-->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                <div class=" col-md-12 col-sm-12 col-12">
                    <h3>IFFI 56: Cinema for All – Embracing Accessibility and Inclusivity</h3>
                    <p>The 56th International Film Festival of India (IFFI) proudly champions Sabka Manoranjan
                        (Entertainment for All), pushing the boundaries to create a festival that celebrates diversity,
                        accessibility, and inclusivity. Each initiative this year is designed to make cinema a truly shared
                        experience, accessible to all cinema enthusiasts.</p>
                    <h3>Ceremonial Moments for All: Inclusive Opening and Closing Events with Live Sign Language</h3>
                    <p>This year, the festival’s opening and closing ceremonies will feature live sign language
                        interpretation, ensuring these important events are inclusive for all attendees. With interpretation
                        available in real-time, specially-abled cinephiles and guests can fully engage in these ceremonial
                        highlights, sharing in the excitement, announcements, and celebrations alongside the entire
                        audience. This initiative embodies IFFI’s commitment to inclusivity, ensuring that everyone is
                        welcomed and valued in these landmark moments of the festival.</p>
                    <h3>Kicking Off Inclusivity: The Grand Opening of the Accessible India Section</h3>
                    <p>The Accessible India Accessible Films section opens with an inspiring screening of 12th Fail, a film
                        enhanced with both audio descriptions and Indian Sign Language, on <b>22nd November at 11:30 AM.</b>
                        In a first, the inaugural will witness a captivating Classical dance performance in Indian Sign
                        Language by acclaimed dancer Methil Devika, as we set the stage for a celebration of inclusivity.
                    </p>
                    <h3>Bringing Stories to Everyone – The Accessible India-Accessible Films Section</h3>
                    <p>This year’s Accessible India Films Section makes cinema a place where everyone belongs. Audiences can
                        experience films enriched with audio descriptions and Indian Sign Language, creating an inclusive
                        viewing space for specially-abled cinephiles. Select Indian and international films will also
                        feature audio descriptions accessible through our technical partner’s app, allowing everyone to
                        engage deeply with these narratives. Live sign language interpretation at various screenings will
                        ensure a universally immersive experience. </p>
                    <h3>Masterclasses Without Barriers</h3>
                    <p>This year, IFFI will feature a masterclass titled "Exhibition of Feature Films in Cinema Theatres:
                        The Question of Accessibility," to be conducted by Senthil Kumar, Co-Founder of Qube Cinema
                        Technologies. This session will explore the evolving landscape of film exhibitions, highlighting the
                        importance of accessibility in cinema theatres and the steps needed to make films accessible to all
                        audiences. Further, in this year’s select masterclasses, IFFI invites all aspiring filmmakers,
                        professionals, and cinephiles to learn and engage without limits, with live sign language
                        interpretation facilitating inclusive conversations and exchanges of ideas. IFFI’s masterclasses
                        bring industry wisdom to everyone, ensuring that knowledge and inspiration flow freely.</p>
                    <h3>Press Conferences for Every Voice and Perspective</h3>
                    <p>IFFI will provide live sign language interpretation for select press conferences, allowing everyone
                        to access updates, discussions, and insights directly from the festival’s heart. This commitment
                        ensures that every perspective and story can be shared, widening the reach and impact of IFFI’s key
                        moments.</p>
                    <h3>Accessibility Everywhere – Digital and On-Site Support</h3>
                    <p>
                        Accessibility at IFFI extends to our online platforms, with certain sections on our website, app,
                        social media and digital content made user-friendly for all audiences.
                    </p>
                    <h3>Inclusive Spaces Designed with Care</h3>
                    <p>Our festival venue and infrastructure reflect IFFI’s commitment to accessibility, offering
                        wheelchair-accessible spaces, restrooms, and parking to ensure comfort for attendees. These
                        thoughtful enhancements make IFFI a truly welcoming place for audiences in public spaces.</p>
                    <h3>On-Site Sign Language Interpreters: Accessible Support Throughout the Festival</h3>
                    <p>
                        On-site sign language interpreters will be available to assist attendees across festival events.
                        These efforts ensure that information and assistance are accessible in every format, breaking down
                        barriers and fostering a truly connected experience for all.
                    </p>
                    <h3>A Team Prepared for Empathy and Understanding</h3>
                    <p>The IFFI teams have undergone sensitivity training, creating an environment where all guests feel
                        understood and valued. This training empowers our staff to offer compassionate support to each
                        attendee, making IFFI an inclusive experience for all.</p>
                    <h3>Uniting with Partners for an Inclusive Future</h3>
                    <p>
                        This year’s accessibility achievements are made possible by key partnerships. With the <b>State
                            Commission for PwD, Goa </b>leading as our Inclusion Partner, <b>Svayam</b> as our Accessibility
                        Partner, and Accessible Content Partners including <b>Yes We Too Can Charitable Trust, India Signing
                            Hands, and Billion Readers,</b> we’re proud to collaborate with leaders in accessibility to make
                        IFFI a festival that truly represents everyone.
                    </p>
                    <p>Step-by-step instructions for accessing the <a href="https://access.moviebuff.com/">"MovieBuff
                            Access"</a> Access app are now available.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- About IFFI Ends Content End-->
@endsection
