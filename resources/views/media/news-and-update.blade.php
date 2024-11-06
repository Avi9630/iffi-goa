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
                            <img src="{{ asset('public/images/desktop-image/Work-in-Progress-Lab-Film-Selection-List-Revealed.jpg') }}"
                                alt="image" class="img-fluid img-radius">
                        </p>
                    </div>
                    <div class="col-md-7 col-sm-12 col-12 mb-4">
                        <h3>Work in Progress Lab Film Selection List Revealed </h3>
                        <p class="mb-0">
                            We are excited to confirm the line-up of films selected for the <b> WIP (Work-in-Progress) Lab
                                at
                                Film Bazaar 2024! </b> The prestigious lab, based in South Asia's largest film market, has
                            historically aimed to nurture emerging filmmakers with developed projects before they go in
                            front of audiences.
                            <br>
                            For selected filmmakers, the WIP Lab is a unique opportunity to benefit from the expert guidance
                            and constructive criticism on their projects in the necessarily final stages of the work.
                            <a style="font-weight: 600; color: #0d6efd; text-decoration: underline; cursor: pointer;"
                                data-bs-toggle="modal" data-bs-target="#exampleModal4">Read More</a>
                        </p>
                    </div>

                    <div class="modal fade" id="exampleModal4" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Work in Progress Lab Film Selection List Revealed </h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p>
                                        We are excited to confirm the line-up of films selected for the <b>WIP
                                            (Work-in-Progress) Lab at Film Bazaar 2024!</b> The prestigious lab, based in
                                        South
                                        Asia's largest film market, has historically aimed to nurture emerging filmmakers
                                        with developed projects before they go in front of audiences.
                                    </p>
                                    <p>For selected filmmakers, the WIP Lab is a unique opportunity to benefit from the
                                        expert guidance and constructive criticism on their projects in the necessarily
                                        final stages of the work.
                                    </p>
                                    <p>Continuing to build upon this formula for success that has been honed over the years,
                                        the lab will once again include a mix of online and in-person opportunities. This
                                        hybrid dynamic has been key to enabling real-time, flexible communication amongst
                                        filmmakers and mentors, enabling in-depth discussions that help projects evolve in
                                        unique and meaningful ways.
                                    </p>
                                    <p>By offering both online and offline engagement, the WIP Lab provides a collaborative
                                        environment where participants can gain diverse perspectives and insights, all while
                                        preserving the benefits of face-to-face brainstorming and interaction.
                                    </p>
                                    <p>Add to that the variety in formats forming an additional layer in the creative
                                        process (the fact that people can join from all over the world, but at the same
                                        time, everyone engages in a face-to-face conversation) and it is hard to imagine a
                                        way to host an interaction of this nature better than this. The intent behind the
                                        initiative is to strategize fresh approaches towards post-production assistance —
                                        encompassing everything from editorial, VFX, sound design, and distribution
                                        strategies.
                                    </p>
                                    <p>Under the mentorship of industry professionals, each filmmaker will refine their
                                        stories to be fully-developed and ripe for the international market.
                                    </p>
                                    <p>
                                        More than just a support structure, the WIP Lab serves as a bridge between
                                        filmmakers and audiences.
                                    </p>
                                    <p>
                                        The lab invites viewers into the process, fostering deeper connections to stories
                                        that resonate across cultures and generations. By showcasing diverse narratives that
                                        reflect the challenges, dreams, and complexities of contemporary life, the WIP Lab
                                        provides a platform for emerging filmmakers to tell bold and powerful stories,
                                        resonating with audiences on multiple levels.
                                    </p>
                                    <p>
                                        This year’s selected films bring fresh perspectives and unique voices to the table,
                                        capturing the spirit of a new generation of artists.
                                    </p>
                                    <div class="modal-content-inn">
                                        <h6>Here is the official list of films selected for Film Bazaar 2024’s
                                            Work-in-Progress Lab:</h6>
                                        <ol>
                                            <li>Shape of Momos by Tribeny Rai (Nepali) </li>
                                            <li>Gaangshalik (Gaangshalik - River Bird) by Shakteedhar Bir (Bengali) </li>
                                            <li>Yerra Mandaram (The Red Hibiscus) by Mohan Kumar Valasala (Telugu) </li>
                                            <li>Kaatti Ri Raatti (Hunters Moon) by Ridham Janve (Gaddi, Nepali) </li>
                                            <li>Umal by Siddharth Badi (Marathi)</li>
                                            <li>The Good The Bad The Hungry by Vivek Kumar (Hindi)</li>
                                        </ol>
                                        <p>Each of these selected projects represents an important voice in today’s film
                                            landscape, tackling themes that resonate across cultures.</p>
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
                            <img src="{{ asset('public/images/desktop-image/Raj-Kapoor.jpg') }}" alt="Raj Kapoor image"
                                class="img-fluid img-radius">
                        </p>
                    </div>
                    <div class="col-md-7 col-sm-12 col-12 mb-4">
                        <h3>Raj Kapoor, ANR, Rafi, and Tapan Sinha will be Honoured with IFFI Centenary Tribute</h3>
                        <p class="mb-0">
                            Our film industry legendary icons Raj Kapoor, ANR, Mohammed Rafi and Tapan Sinha will be
                            honoured with the centenary tribute at 55th IFFI. The IFFI gala in Goa will celebrate cinematic
                            legends by presenting restored versions of their classic films throughout its nine-day event.
                            The festival’s opening ceremony on November 20 will pay tribute to these icons with a special
                            audio-visual presentation that captures their impactful journeys in cinema.
                            <a style="font-weight: 600; color: #0d6efd; text-decoration: underline; cursor: pointer;"
                                data-bs-toggle="modal" data-bs-target="#exampleModal3">Read More</a>
                        </p>
                    </div>

                    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">Raj Kapoor, ANR, Rafi, and Tapan Sinha will be Honoured with
                                        IFFI Centenary Tribute</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p>
                                        Our film industry legendary icons Raj Kapoor, ANR, Mohammed Rafi and Tapan Sinha
                                        will be honoured with the centenary tribute at 55th IFFI. The IFFI gala in Goa will
                                        celebrate cinematic legends by presenting restored versions of their classic films
                                        throughout its nine-day event. The festival’s opening ceremony on November 20 will
                                        pay tribute to these icons with a special audio-visual presentation that captures
                                        their impactful journeys in cinema.
                                    </p>
                                    <p>A variety of organizers have arranged a tribute program to honor the 100th birth
                                        anniversaries of four Indian cinema legends: actor and filmmaker Raj Kapoor,
                                        director Tapan Sinha, Telugu cinema icon Akkineni Nageswara Rao (ANR), and iconic
                                        singer Mohammed Rafi.
                                    </p>
                                    <p>The National Film Development Corporation (NFDC) have taken the restoration work to
                                        bring these classics back to their visual quality. Get ready to witness the
                                        centenary celebrations that will be held at November 20, at GOA. </p>
                                    {{-- <div class="modal-content-inn">
                                        <h6>Here are the 5 debut directors of Indian Feature Film Selection:</h6>
                                        <ul>
                                            <li>Lakshmipriya Devi for Boong Film</li>
                                            <li>Navjyot Bandiwadekar for Gharat Ganpati Film</li>
                                            <li>Manohara K for Mikka Bannada Hakki (Bird of a Different Feather) film</li>
                                            <li>Razakar (Silent Genocide of Hyderabad) for Yata Satyanarayana Film</li>
                                            <li>Thanupp (The Cold) for Ragesh Narayanan Film</li>
                                        </ul>
                                        <p>Each of these films brings unique narratives and regional perspectives,
                                            highlighting India’s cultural and linguistic diversity.</p>
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

            <div class="startic-new-update">
                <div class="row">
                    <div class="col-md-5 col-sm-12 col-12 mb-4">
                        <p class="newsupdatesView-block-img">
                            <img src="{{ asset('public/images/desktop-image/Best-Debut-Directors-of-Indian-Feature-Films.jpg') }}"
                                alt="image" class="img-fluid img-radius">
                        </p>
                    </div>
                    <div class="col-md-7 col-sm-12 col-12 mb-4">
                        <h3>5 Debut Directors Selected for Indian Feature Films</h3>
                        <p class="mb-0">
                            The 55th International Film Festival of India (IFFI) is launching a fresh award category, “Best
                            Debut Director of Indian Feature Film,” spotlighting the work of five debut directors who bring
                            unique perspectives and innovative storytelling to Indian cinema. This initiative aims to
                            encourage emerging filmmakers, showcasing their contributions to the industry with compelling
                            narratives and diverse themes. Taking place from November 20-28, 2024, IFFI will celebrate these
                            new voices in Indian film, underscoring the festival's commitment to fostering creative talent
                            across the nation.
                            <a style="font-weight: 600; color: #0d6efd; text-decoration: underline; cursor: pointer;"
                                data-bs-toggle="modal" data-bs-target="#exampleModal3">Read More</a>
                        </p>
                    </div>

                    <div class="modal fade" id="exampleModal3" tabindex="-1" aria-labelledby="exampleModalLabel"
                        aria-hidden="true">
                        <div class="modal-dialog modal-lg">
                            <div class="modal-content">
                                <!-- Modal Header -->
                                <div class="modal-header">
                                    <h4 class="modal-title">5 Debut Directors Selected for Indian Feature Films</h4>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                                </div>
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <p>
                                        The 55th International Film Festival of India (IFFI) is launching a fresh award
                                        category, “Best Debut Director of Indian Feature Film,” spotlighting the work of
                                        five debut directors who bring unique perspectives and innovative storytelling to
                                        Indian cinema. This initiative aims to encourage emerging filmmakers, showcasing
                                        their contributions to the industry with compelling narratives and diverse themes.
                                        Taking place from November 20-28, 2024, IFFI will celebrate these new voices in
                                        Indian film, underscoring the festival's commitment to fostering creative talent
                                        across the nation.
                                    </p>
                                    <div class="modal-content-inn">
                                        <h6>Here are the 5 debut directors of Indian Feature Film Selection:</h6>
                                        <ul>
                                            <li>Lakshmipriya Devi for Boong Film</li>
                                            <li>Navjyot Bandiwadekar for Gharat Ganpati Film</li>
                                            <li>Manohara K for Mikka Bannada Hakki (Bird of a Different Feather) film</li>
                                            <li>Razakar (Silent Genocide of Hyderabad) for Yata Satyanarayana Film</li>
                                            <li>Thanupp (The Cold) for Ragesh Narayanan Film</li>
                                        </ul>
                                        <p>Each of these films brings unique narratives and regional perspectives,
                                            highlighting India’s cultural and linguistic diversity.</p>
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
                                            <li>A Night's Whispers and the Winds</li>
                                            <li>Aadu Ki Kasam (Destiny's Dance)</li>
                                            <li>Aanaikatti Blues</li>
                                            <li>Absent</li>
                                            <li>All Ten Heads Of Ravanna</li>
                                            <li>Chetak</li>
                                            <li>Divine Chords</li>
                                            <li>Feral</li>
                                            <li>Gulistaan (Year of the Weeds)</li>
                                            <li>Guptam (The Last of Them Plagues)</li>
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
