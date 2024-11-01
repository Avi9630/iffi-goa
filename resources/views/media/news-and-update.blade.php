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

            <div class="startic-new-update">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-12 mb-4">
                        <p class="newsupdatesView-block-img">
                            <img src="{{ asset('public/images/desktop-image/Co-Production.jpg') }}" alt="image"
                                class="img-fluid img-radius">
                        </p>
                    </div>
                    <div class="col-md-7 col-sm-12 col-12 mb-4">
                        <h3>Films List Revealed for Co-Production Market</h3>
                        <p class="mb-0">
                            The 18th edition of NFDC's Film Bazaar has revealed its official selection for the Co-Production
                            Market, showcasing 21 feature films and 8 web series from seven countries. Held annually in the
                            International Film Festival of India (IFFI), this year’s Film Bazaar will run from November 20
                            to 24, at the Marriott Resort in Goa, while IFFI will take place from November 20 to 28, 2024.
                            <a style="font-weight: 600; color: #0d6efd; text-decoration: underline; cursor: pointer;"
                                data-bs-toggle="modal" data-bs-target="#exampleModal2">Read More</a>
                        </p>
                    </div>

                    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Films List Revealed for Co-Production Market</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p>
                                        The 18th edition of NFDC's Film Bazaar has revealed its official selection for the
                                        Co-Production Market, showcasing 21 feature films and 8 web series from seven
                                        countries. Held annually in the International Film Festival of India (IFFI), this
                                        year’s Film Bazaar will run from November 20 to 24, at the Marriott Resort in Goa,
                                        while IFFI will take place from November 20 to 28, 2024.
                                    </p>
                                    <p>
                                        The selection of films showcases the rich varieties of language that include, Hindi,
                                        English, Assamese, Tamil, Marwari, Bengali, Malayalam, Punjabi, Nepali, Marathi,
                                        Pahadi, and Cantonese.
                                    </p>
                                    <p>The filmmakers from different countries will pitch their projects to a range of
                                        industry professionals. This will give them a fantastic opportunity to forge
                                        connections and explore potential collaborations.</p>
                                    <div class="modal-content-inn">
                                        <h6>Here is the list of Films / Web Series that are selected for co-production
                                            market this year:</h6>
                                        <ul>
                                            <li>A Night's Whispers and the Winds
                                            <li>Aadu Ki Kasam (Destiny's Dance)
                                            <li>Aanaikatti Blues
                                            <li>Absent
                                            <li>All Ten Heads Of Ravanna
                                            <li>Chetak
                                            <li>Divine Chords
                                            <li>Feral
                                            <li>Gulistaan (Year of the Weeds)
                                            <li>Guptam (The Last of Them Plagues
                                            <li>Harbir</li>
                                            <li>Home Before Night</li>
                                            <li>Kabootar</li>
                                            <li>Kothiyan- Fishers of Men</li>
                                            <li>Kurinji (The Disappearing Flower)</li>
                                            <li>Baaghi Bechare (Reluctant Rebels)</li>
                                            <li>Roid</li>
                                            <li>Somahelang (The Song of Flowers)</li>
                                            <li>The Employer</li>
                                            <li>Wax Daddy</li>
                                            <li>The Vampire of Sheung Shui</li>
                                            <li>Age Of Deccan- The Legend Of Malik Ambar</li>
                                            <li>Chauhans BNB Bed And Basera</li>
                                            <li>Chekavar</li>
                                            <li>IndiPendent</li>
                                            <li>Just Like Her Mother</li>
                                            <li>Modern Times</li>
                                            <li>Pondi-Cherie</li>
                                            <li>RESET</li>
                                        </ul>
                                        <p>The Co-Production Market aims to spotlight diverse global narratives and we wish
                                            film makers the best of luck in finding the perfect co-production partners to
                                            bring vision to life.</p>
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
            </div>

            <div class="startic-new-update">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-12 mb-4">
                        <p class="newsupdatesView-block-img">
                            <img src="{{ asset('public/images/desktop-image/Indian-Panorama-Films.jpg') }}" alt="image"
                                class="img-fluid img-radius">
                        </p>
                    </div>
                    <div class="col-md-7 col-sm-12 col-12 mb-4">
                        <h3>Indian Panorama Film List Revealed For 55th IFFI</h3>
                        <p class="mb-0">
                            The Indian Panorama Section of 55th International Film Festival has recently announced the
                            selection of 25 featured films and 20 non-feature films. Out of these 5 top films are
                            selected from mainstream cinema out of the broad spectrum of 384 contemporary films. Jury
                            has selected “Swatantrya Veer Savarkar (Hindi)” as an opening film of Indian Panorama.
                            <a style="font-weight: 600; color: #0d6efd; text-decoration: underline; cursor: pointer;"
                                data-bs-toggle="modal" data-bs-target="#exampleModal1">Read More</a>
                        </p>
                    </div>

                    <div class="modal fade" id="exampleModal1" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Indian Panorama Film List Revealed For 55th IFFI</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p>
                                        The Indian Panorama Section of 55th International Film Festival has recently
                                        announced the selection of 25 featured films and 20 non-feature films. Out of
                                        these 5 top films are selected from mainstream cinema out of the broad spectrum
                                        of 384 contemporary films. Jury has selected “Swatantrya Veer Savarkar (Hindi)”
                                        as an opening film of Indian Panorama.
                                    </p>
                                    <p>
                                        Also, 20 non-feature films were also selected to be screened in the festival
                                        that perfectly exemplifies the capacity of emerging and established filmmakers
                                        to document, investigate and entertain the audiences. Jury has selected ‘Ghar
                                        Jaisa Kuch (Ladakhi)’, directed by Shri Harsh Sangani for non-feature film.
                                    </p>
                                    <div class="modal-content-inn">
                                        <h6>Here is the list of 20 Feature Films Selected for Indian Panorama by Jury
                                            Members:</h6>
                                        <ul>
                                            <li>SWATANTRYA VEER SAVARKAR</li>
                                            <li>KEREBETE</li>
                                            <li>VENKYA</li>
                                            <li>JUIPHOOL</li>
                                            <li>MAHAVATAR NARSIMHA</li>
                                            <li>JIGARTHANDA DOUBLE X</li>
                                            <li>AADUJEEVITHAM (VIAȚA CAPREI, THE GOATLIFE)</li>
                                            <li>ARTICLE 370</li>
                                            <li>GYPSY</li>
                                            <li>SRIKANTH</li>
                                            <li>AAMAR BOSS</li>
                                            <li>BRAMAYUGAM</li>
                                            <li>35 CHINNA KATHA KAADU</li>
                                            <li>RADOR PAKHI</li>
                                            <li>GHARAT GANPATI</li>
                                            <li>RAAVSAAHEB</li>
                                            <li>LEVEL CROSS</li>
                                            <li>KARKEN</li>
                                            <li>BHOOTPORI</li>
                                            <li>ONKO KI KOTHIN</li>
                                        </ul>
                                        <h6>Here is the list of 20 Non-Feature Films Selected for Indian Panorama by
                                            Jury Members:</h6>
                                        <ul>
                                            <li>6-A AKASH GANGA</li>
                                            <li>AMAR AAJ MAREGA</li>
                                            <li>AMMA'S PRIDE</li>
                                            <li>BAHI - TRACING MY ANCESTORS</li>
                                            <li>BALLAD OF THE MOUNTAIN</li>
                                            <li>BATTO KA BULBULA</li>
                                            <li>CHANCHISOA</li>
                                            <li>FLANDERS DI ZAMEEN VICH</li>
                                            <li>GHAR JAISA KUCH</li>
                                            <li>GHODE KI SAWARI</li>
                                            <li>GOOGLE MATRIMONY</li>
                                            <li>MAIN NIDA</li>
                                            <li>MO BOU, MO GAAN</li>
                                            <li>MONIHARA</li>
                                            <li>P FOR PAPARAZZI</li>
                                            <li>PILLARS OF PROGRESS: THE EPIC STORY OF DELHI METRO</li>
                                            <li>PRAAN PRATISHTHA</li>
                                            <li>ROTI KOON BANASI?</li>
                                            <li>SAAVAT</li>
                                            <li>SIVANTHA MANN</li>
                                        </ul>
                                    </div>

                                    {{-- <div class="row mb-4">
                                        <div class="col-md-6">
                                            <video style="width:100%" loop="" autoplay="" muted=""
                                                playsinline="">
                                                <source src="{{ asset('public/images/news-update/nmic meet.mp4') }}"
                                                    type="video/mp4">
                                            </video>
                                        </div>
                                        <div class="col-md-6">
                                            <p>
                                                IFFI Festival Director, Shri Shekhar Kapoor, delivered an inspiring
                                                keynote
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
                                            <p>The 55th edition is set to expand the festival's global presence,
                                                encouraging
                                                international
                                                partnerships and presenting the finest in Indian and world cinema.
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <img class="img-fluid"
                                                src="{{ asset('public/images/news-update/nmic-meet.jpg') }}"
                                                alt="nmic meet ">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <img class="img-fluid"
                                                src="{{ asset('public/images/news-update/nmic-meet2.jfif') }}"
                                                alt="nmic meet ">
                                        </div>
                                        <div class="col-md-6">
                                            <img class="img-fluid"
                                                src="{{ asset('public/images/news-update/nmic-meet1.jfif') }}"
                                                alt="nmic meet ">
                                        </div>
                                    </div> --}}

                                </div>
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Close</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="row ">
                @foreach ($newsUpdates as $newsUpdate)
                    <div class="col-md-5 col-sm-6 col-12 mb-4">
                        <p class="newsupdatesView-block-img">
                            <img src="{{ asset('public/images/desktop-image/' . $newsUpdate->img_src) }}" alt="image"
                                class="img-fluid img-radius">
                        </p>
                    </div>
                    <div class="col-md-7 col-sm-6 col-12 mb-4">
                        <h3>{!! $newsUpdate->title !!}</h3>
                        <p class="mb-0">
                            {!! $newsUpdate->description !!}


                        </p>
                        <p class="news-update-date"><a class="text-underline"
                                style="font-weight: 600; text-decoration: underline;" href="{{ $newsUpdate->link }}"
                                target="_blank">
                                {{ $newsUpdate->link_title }}
                            </a><span>Date :- {{ \Carbon\Carbon::parse($newsUpdate->updated_at)->format('d F Y') }}</p>
                    </div>
                @endforeach
                {{-- @foreach ($newsUpdates as $newsUpdate)
                    @php
                        $updatedAt = \Carbon\Carbon::parse($newsUpdate->updated_at);
                        $sixMonthsAgo = \Carbon\Carbon::now()->subMonths(6);
                    @endphp

                    @if ($updatedAt->greaterThanOrEqualTo($sixMonthsAgo))
                        <div class="col-md-5 col-sm-6 col-12 mb-4">
                            <p class="newsupdatesView-block-img">
                                <img src="{{ asset('public/images/desktop-image/' . $newsUpdate->img_src) }}" alt="image"
                                    class="img-fluid img-radius">
                            </p>
                        </div>
                        <div class="col-md-7 col-sm-6 col-12 mb-4">
                            <h3>{!! $newsUpdate->title !!}</h3>
                            <p class="mb-0">
                                {!! $newsUpdate->description !!}
                            </p>
                            <p class="news-update-date">
                                <a class="text-underline" style="font-weight: 600; text-decoration: underline;"
                                    href="{{ $newsUpdate->link }}" target="_blank">
                                    {{ $newsUpdate->link_title }}
                                </a>
                                <span>Date :- {{ $updatedAt->format('d F Y') }}</span>
                            </p>
                        </div>
                    @else
                        <p></p>
                    @endif
                @endforeach --}}
            </div>

            <div class="startic-new-update">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-12 mb-4">
                        <p class="newsupdatesView-block-img">
                            <img src="{{ asset('public/images/desktop-image/strategizing.jpg') }}" alt="image"
                                class="img-fluid img-radius">
                        </p>
                    </div>
                    <div class="col-md-7 col-sm-12 col-12 mb-4">
                        <h3>Strategizing IFFI 2024 at NMIC Mumbai</h3>
                        <p class="mb-0">
                            IFFI 2024 introduces the Best Indian Debut Director Award for the first time to showcase the
                            brilliant works by first-time filmmakers from India. The new initiative would be an
                            important
                            one to recognize and encourage fresh talent in the Indian film industry, providing an
                            opportunity to gain greater access to the global platform. With the spotlight on the films
                            of
                            debut directors, IFFI 2024 once again confirms its commitment to fostering youth creativity
                            for
                            the Indian Cinema.
                            <a style="font-weight: 600; color: #0d6efd; text-decoration: underline; cursor: pointer;"
                                data-bs-toggle="modal" data-bs-target="#exampleModal">Read More</a>
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
                                                IFFI Festival Director, Shri Shekhar Kapoor, delivered an inspiring
                                                keynote
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
                                            <p>The 55th edition is set to expand the festival's global presence,
                                                encouraging
                                                international
                                                partnerships and presenting the finest in Indian and world cinema.
                                            </p>
                                        </div>
                                        <div class="col-md-6">
                                            <img class="img-fluid"
                                                src="{{ asset('public/images/news-update/nmic-meet.jpg') }}"
                                                alt="nmic meet ">
                                        </div>
                                    </div>

                                    <div class="row mb-4">
                                        <div class="col-md-6">
                                            <img class="img-fluid"
                                                src="{{ asset('public/images/news-update/nmic-meet2.jfif') }}"
                                                alt="nmic meet ">
                                        </div>
                                        <div class="col-md-6">
                                            <img class="img-fluid"
                                                src="{{ asset('public/images/news-update/nmic-meet1.jfif') }}"
                                                alt="nmic meet ">
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
            </div>

        </div>
    </div>
    </div>
@endsection
