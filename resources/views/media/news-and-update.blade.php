@extends('layouts.app')
@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->
    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->
    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-news py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">News And Updates</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row ">
                @foreach ($newsUpdates as $newsUpdate)
                    <div class="col-md-5 col-sm-6 col-12 mb-4">
                        <p class="newsupdatesView-block-img">
                            <img src="{{ asset('public/images/desktop-image/' . $newsUpdate->img_src) }}" alt="image"
                                class="img-fluid img-radius">
                        </p>
                    </div>
                    <div class="col-md-7 col-sm-6 col-12 mb-4">
                        <h2>{!! $newsUpdate->title !!}</h2>
                        <p class="mb-0">
                            {!! $newsUpdate->description !!}

                            <a class="text-underline" style="font-weight: 600; text-decoration: underline;"
                                href="{{ $newsUpdate->link }}" target="_blank">
                                {{ $newsUpdate->link_title }}
                            </a>
                        </p>
                    </div>
                @endforeach

                {{-- <div class="col-md-5 col-sm-12 col-12 mb-4">
                    <p class="newsupdatesView-block-img">
                        <img src="{{ asset('public/images/desktop-image/delegate-registration-open.jpg') }}" alt="image"
                            class="img-fluid">
                    </p>
                </div>
                <div class="col-md-7 col-sm-12 col-12 mb-4">
                    <h2>Film Bazaar Delegate Registration is Now Open!</h2>
                    <p class="mb-0">
                        Join the prestigious Film Bazaar 2024 as a delegate and immerse yourself in an unparalleled
                        networking and learning experience. As a delegate, you'll have access to a wide array of industry
                        professionals, engaging sessions, film screenings, and business opportunities across various
                        segments of the global film industry. Don't miss this opportunity to connect with filmmakers,
                        distributors, and key decision-makers from around the world.

                        <a class="text-underline" style="font-weight: 600; text-decoration: underline;"
                            href="https://filmbazaarindia.com/programme/producers-workshop/" target="_blank">
                            Submit your entry
                        </a>
                    </p>
                </div>

                <div class="col-md-5 col-sm-12 col-12 mb-4">
                    <p class="newsupdatesView-block-img">
                        <img src="{{ asset('public/images/desktop-image/producres-workshop-open.jpg') }}" alt="image"
                            class="img-fluid">
                    </p>
                </div>
                <div class="col-md-7 col-sm-12 col-12 mb-4">
                    <h2>Producer's Workshop Registration For Film Bazaar 2024 Is Now Open!</h2>
                    <p class="mb-0">
                        The Producer's Workshop at Film Bazaar 2024 offers a unique platform for emerging and experienced
                        producers to enhance their skills, network with industry professionals, and gain insights into
                        global film markets. This dynamic workshop covers various aspects of production, financing,
                        distribution, and co-production opportunities. Don't miss the chance to elevate your career—register
                        now and become a part of this vibrant cinematic experience.

                        <a class="text-underline" style="font-weight: 600; text-decoration: underline;"
                            href="https://filmbazaarindia.com/programme/producers-workshop/" target="_blank">
                            Submit your entry
                        </a>
                    </p>
                </div>

                <div class="col-md-5 col-sm-12 col-12 mb-4">
                    <p class="newsupdatesView-block-img">
                        <img src="{{ asset('public/images/desktop-image/Delegate-Registration-open.jpg') }}" alt="image"
                            class="img-fluid">
                    </p>
                </div>
                <div class="col-md-7 col-sm-12 col-12 mb-4">
                    <h2>Delegate Registration For IFFI 2024 Is Now Open!</h2>
                    <p class="mb-0">
                        The Viewing Room (VR) at Film Bazaar is now open for entries across all genres and lengths,
                        including both fiction and documentary films. Whether your project is in the rough cut or final
                        cut stage, this is a chance to showcase your work to industry experts and gain recognition. The
                        last date to submit your entry is by 30th September 2024.
                        <a class="text-underline" style="font-weight: 600; text-decoration: underline;"
                            href="https://my.iffigoa.org/" target="_blank">Submit your entry
                        </a>
                    </p>
                </div> --}}

                {{-- <div class="col-md-5 col-sm-12 col-12 mb-4">
                    <p class="newsupdatesView-block-img">
                        <img src="{{ asset('public/images/desktop-image/Viewing-Room-Entries-closed.jpg') }}" alt="image"
                            class="img-fluid">
                    </p>
                </div>
                <div class="col-md-7 col-sm-12 col-12 mb-4">
                    <h2>Submit Your Film in the Viewing Room at Film Bazaar</h2>
                    <p class="mb-0">
                        The Viewing Room (VR) at Film Bazaar is now open for entries across all genres and lengths,
                        including both fiction and documentary films. Whether your project is in the rough cut or final cut
                        stage, this is a chance to showcase your work to industry experts and gain recognition. The last
                        date to submit your entry is by 5th October 2024

                        <a class="text-underline" style="font-weight: 600; text-decoration: underline;"
                            href="https://filmbazaarindia.com/programme/viewing-room" target="_blank">View your entry
                        </a>
                    </p>
                </div> --}}

                {{-- <div class="col-md-5 col-sm-12 col-12 mb-4">
                    <p class="newsupdatesView-block-img">
                        <img src="{{ asset('public/images/desktop-image/dd-closed-now.jpg') }}" alt="image"
                            class="img-fluid">
                    </p>
                </div>
                <div class="col-md-7 col-sm-12 col-12 mb-4">
                    <h2>Best Indian Debut Director Award For The First Time</h2>
                    <p class="mb-0">
                        IFFI 2024 introduces the Best Indian Debut Director Award for the first time to showcase the
                        brilliant works by first-time filmmakers from India. The new initiative would be an important one to
                        recognize and encourage fresh talent in the Indian film industry, providing an opportunity to gain
                        greater access to the global platform. With the spotlight on the films of debut directors, IFFI 2024
                        once again confirms its commitment to fostering youth creativity for the Indian Cinema.
                        <a class="text-underline" style="font-weight: 600; text-decoration: underline;"
                            href="https://iffigoa.org/festival/indian-debut-director" target="_blank">View your entry.</a>
                    </p>
                </div> --}}

                <div class="col-md-5 col-sm-12 col-12 mb-4">
                    <p class="newsupdatesView-block-img">
                        <img src="{{ asset('public/images/desktop-image/strategizing.jpg') }}" alt="image"
                            class="img-fluid img-radius">
                    </p>
                </div>
                <div class="col-md-7 col-sm-12 col-12 mb-4">
                    <h2>Strategizing IFFI 2024 at NMIC Mumbai</h2>
                    <p class="mb-0">
                        IFFI 2024 introduces the Best Indian Debut Director Award for the first time to showcase the
                        brilliant works by first-time filmmakers from India. The new initiative would be an important
                        one to recognize and encourage fresh talent in the Indian film industry, providing an
                        opportunity to gain greater access to the global platform. With the spotlight on the films of
                        debut directors, IFFI 2024 once again confirms its commitment to fostering youth creativity for
                        the Indian Cinema.
                        <a style="font-weight: 600; color: #0d6efd; text-decoration: underline;" data-bs-toggle="modal"
                            data-bs-target="#exampleModal">Read More</a>
                    </p>
                </div>
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                            <!-- Modal Header -->
                            <div class="modal-header">
                                <h4 class="modal-title">Strategizing IFFI 2024 at NMIC Mumbai</h4>
                                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                            </div>
                            <!-- Modal body -->
                            <div class="modal-body">
                                <p>
                                    Catch a glimpse of NFDC productive meeting at the National Museum of Indian
                                    Cinema(NMIC) in Mumbai,
                                    where we strategized on enhancing awareness for IFFI 2024. The discussions
                                    were centered on innovative approaches to engage audiences and planning
                                    exciting ancillary activities that will elevate the festival experience,
                                    making it more memorable and impactful for all participants.
                                </p>
                                <p>
                                    In the below video, you will find the highlights of the productive meet
                                    that happened in NMIC Mumbai.
                                </p>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <video style="width:100%" loop="" autoplay="" muted=""
                                            playsinline="">
                                            <source src="{{ asset('public/images/news-update/nmic meet.mp4') }}"
                                                type="video/mp4">
                                        </video>
                                    </div>
                                    <div class="col-md-6">
                                        <p>
                                            IFFI Festival Director, Shri Shekhar Kapoor, delivered an inspiring keynote
                                            address,
                                            recounting his
                                            journey in the film industry and his deep, enduring connection with the
                                            festival.
                                            NFDC
                                            General
                                            Manager, Shri D. Ramakrishnan, highlighted key initiatives and unveiled
                                            exciting
                                            highlights
                                            for the
                                            upcoming IFFI, including the much-anticipated Film Bazaar, designed to
                                            foster
                                            international
                                            collaborations and celebrate outstanding film projects.
                                        </p>
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <p>The 55th edition is set to expand the festival's global presence, encouraging
                                            international
                                            partnerships and presenting the finest in Indian and world cinema.
                                        </p>
                                    </div>
                                    <div class="col-md-6">
                                        <img class="img-fluid" src="{{ asset('public/images/news-update/nmic-meet.jpg') }}"
                                            alt="nmic meet ">
                                    </div>
                                </div>

                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <img class="img-fluid"
                                            src="{{ asset('public/images/news-update/nmic-meet2.jfif') }}" alt="nmic meet ">
                                    </div>
                                    <div class="col-md-6">
                                        <img class="img-fluid"
                                            src="{{ asset('public/images/news-update/nmic-meet1.jfif') }}" alt="nmic meet ">
                                    </div>
                                </div>

                            </div>
                            <!-- Modal footer -->
                            <div class="modal-footer">
                                <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            {{-- <div class="col-md-6 col-sm-6 col-12 mb-4">
                    <p class="newsupdatesView-block-img">
                        <img src="{{ asset('public/images/desktop-image/CMOT_BANNER_CLOSE.png') }}" alt="image"
                            class="img-fluid">
                    </p>
                </div>
                <div class="col-md-6 col-sm-6 col-12 mb-4">
                    <h2>Creative Minds of Tomorrow Entries Are CLOSED NOW!</h2>
                    <p class="mb-0">
                        The Creative Minds of Tomorrow entries are now officially closed. The last date to submit
                        applications
                        was September 20th, 2024. We appreciate all the aspiring talents who showed interest and submitted
                        their entries. While submissions for this year are no longer accepted, don't be disheartened-stay
                        tuned and prepare for the next edition for your chance to be part of India's next wave of creative
                        cinema talent!
                        <br>
                        <a class="text-underline" style="font-weight: 600; text-decoration: underline;"
                            href="https://iffigoa.org/festival/creative-mind-tomorrow" target="_blank">View your
                            entry.</a>
                    </p>
                </div>

                <div class="col-md-6 col-sm-6 col-12 mb-4">
                    <p class="newsupdatesView-block-img">
                        <img src="{{ asset('public/images/desktop-image/INDIAN-PANORAMA-CLOSED-NOW.png') }}" alt="image"
                            class="img-fluid">
                    </p>
                </div>
                <div class="col-md-6 col-sm-6 col-12 mb-4">
                    <h2>Indian Panorama Entries are CLOSED NOW!</h2>
                    <p class="mb-0">
                        The Indian Panorama, organized by the National Film Development Corporation,
                        Ministry of Information and Broadcasting, is not taking any further entries.
                        The submission period ended on 19th August 2024 at 6:00 pm.
                        Thank you to everyone have who submitted their entries.
                        <a class="text-underline" style="font-weight: 600; text-decoration: underline;"
                            href="http://iffigoa.org/festival/indian-paranoma">View your entry.
                        </a>
                    </p>
                </div>

                <div class="col-md-6 col-sm-6 col-12 mb-4">
                    <p class="newsupdatesView-block-img">
                        <img src="{{ asset('public/images/desktop-image/OTT_CLOSED NOW.png') }}" alt="image"
                            class="img-fluid">
                    </p>
                </div>
                <div class="col-md-6 col-sm-6 col-12 mb-4">
                    <h2>Best Web Series (OTT) Award Entries Are CLOSED NOW!</h2>
                    <p class="mb-0">
                        IFFI introduces the Best Web Series (OTT) Award to honour exceptional content and creators on
                        OTT
                        platforms. IFFI's Best Web Series (OTT) Award acknowledges the flourishing OTT industry and its
                        creators.
                        <a class="text-underline" style="font-weight: 600; text-decoration: underline;"
                            href="http://iffigoa.org/festival/web-series">View your entry</a>
                    </p>
                </div> --}}

        </div>
    </div>
    </div>
@endsection
