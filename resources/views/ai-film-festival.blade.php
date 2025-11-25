@extends('layouts.app')
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
            <h1 class="page-title-header">AI Film Festival</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->

    <!-- About IFFI Content Start-->
    <div class="col-lg-12 mt-3 static-content">
        <div class="container">
            <div class="row">
                <div class=" col-md-12 col-sm-12 col-12">

                    <p>
                        <b>Powered By -</b> <br>
                        <img src="{{ asset('public/images/ltmindtree.png') }}" alt="ai-film-festival" class="img-fluid">
                    </p>

                    {{-- Logos --}}
                    <div class="col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="title-sponsor">FESTIVAL CURATION PARTNERS</h3>
                            </div>
                            <div class="card-body">
                                <div class="sponsor-list-div ">
                                    <ul>
                                        <li class="me-2">
                                            <img src="{{ asset('public/images/sponsor/2025/59.png') }}" class="img-fluid"
                                                alt="FESTIVAL CURATION PARTNERS">
                                        </li>
                                        <li class="me-2">
                                            <img src="{{ asset('public/images/sponsor/2025/60.png') }}" class="img-fluid"
                                                alt="FESTIVAL CURATION PARTNERS">
                                        </li>
                                        <li class="me-2">
                                            <img src="{{ asset('public/images/sponsor/2025/61.png') }}" class="img-fluid"
                                                alt="FESTIVAL CURATION PARTNERS">
                                        </li>
                                        <li class="me-2">
                                            <img src="{{ asset('public/images/sponsor/2025/62.png') }}" class="img-fluid"
                                                alt="FESTIVAL CURATION PARTNERS">
                                        </li>
                                        <li class="me-2">
                                            <img src="{{ asset('public/images/sponsor/2025/63.png') }}" class="img-fluid"
                                                alt="FESTIVAL CURATION PARTNERS">
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Schedule --}}
                    <div class="col-md-12 col-sm-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="title-sponsor">Festival Screenings</h3>
                            </div>
                            <div class="card-body">
                                <div class="sponsor-list-div ">
                                    <div class="table-responsive">
                                        <table class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th>Day</th>
                                                    <th>Date</th>
                                                    <th>Start Time</th>
                                                    <th>End Time</th>
                                                    <th>Screening</th>
                                                    <th>Venue</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Day 6</td>
                                                    <td>26th November 2025</td>
                                                    <td>02:30 PM</td>
                                                    <td>05:00 PM</td>
                                                    <td>ARTIFICIAL INTELLIGENCE (AI) FILMS AND CINEMAI HACKATHON SCREENINGS
                                                    </td>
                                                    <td>Maquinez Palace Audi-1</td>
                                                </tr>
                                                <tr>
                                                    <td>Day 7</td>
                                                    <td>27th November 2025</td>
                                                    <td>4:45 PM</td>
                                                    <td>07:15 PM</td>
                                                    <td>ARTIFICIAL INTELLIGENCE (AI) FILMS AND CINEMAI HACKATHON SCREENINGS
                                                    </td>
                                                    <td>Incox Porvorim Audi-4</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <h2>About the AI Film Festival</h2>
                    <p>As part of the 56th <strong>International Film Festival of India</strong> (IFFI),
                        <strong>NFDC</strong> in collaboration with
                        <strong>LTIMindtree</strong> proudly unveils <strong>India's first-ever AI Film Festival</strong> -
                        a visionary platform that
                        celebrates the fusion of artificial intelligence and cinematic creativity. This pioneering
                        initiative curates acclaimed and award winning AI-generated short films from filmmakers and
                        festivals from across the globe that redefine storytelling, visual design, and narrative innovation.
                        Curated within the vibrant setting of IFFI 2025 in Goa, the festival will showcase a diverse
                        selection of works that push the boundaries of traditional cinema, offering audiences a glimpse into
                        the future of filmmaking powered by AI <br><br>

                        The AI Film Festival will culminate in a prestigious awards ceremony honoring the most
                        groundbreaking and impactful AI-generated films. Running parallel to the CinemAI Hackathon, this
                        creative showcase highlights the artistry and ethical imagination of global creators using AI as a
                        co-creator. Through this initiative, LTIMindtree, NFDC, and IFFI aim to position India as a global
                        epicenter for AI-driven cinematic expression, inviting the world to witness, participate in, and
                        shape the next frontier of visual storytelling.
                        Selected films will be screened at the IFFI Goa 2025.

                    </p>
                </div>

                <div class="col-lg-12">
                    <h4 class="text-center">The Craft Honors: India's recognition for AI Films</h4>
                    <div class="policy-page">
                        <ul>
                            <li>
                                <p>
                                    <strong>The Craft Honors</strong> represent the premier awards of the AI Film Festival
                                    at IFFI 2025.
                                    These awards celebrate excellence in AI-powered storytelling, recognizing the most
                                    visionary creators who are redefining cinema through technology. The jury, comprising
                                    renowned filmmakers and industry experts, will ensure that the selections reflect the
                                    highest standards of innovation and artistry.
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-12">
                    <h2>The Craft Honors</h2>
                    <div class="policy-page">
                        <ul>
                            <li>
                                <p><strong>The Craft Master Award</strong> - Best AI Short Film (₹3,00,000) The Grand Prix
                                    honor, awarded
                                    to the most outstanding AI-generated short film for its excellence in storytelling,
                                    execution, and emotional impact.</p>
                            </li>
                            <li>
                                <p><strong>The Craft Vanguard Award</strong> - Most Innovative Use of AI / Experimental
                                    Narrative
                                    (₹2,00,000) Celebrating bold experimentation and creative risk-taking in AI-driven
                                    storytelling.</p>
                            </li>
                            <li>
                                <p><strong>The Craft Spectra Award</strong> - Best AI Animation / Visual Design (₹1,00,000)
                                    Awarded for
                                    exceptional visual artistry and design powered by AI tools and techniques.</p>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class=" col-md-12 col-sm-12 col-12">
                    <p>Winning films will be featured across LTIMindtree and NFDC global platforms.</p>
                </div>

                <a href="{{ asset('public/pdfs/aifestival/ai-festival.pdf') }}" target="_blank"><b>AI Shortlisted
                        Films</b></a>

                <br>
                <section>
                    <div class="container">
                        <div class="text-center mt-5 center-heading">
                            <h2>Jury</h2>
                        </div>
                        <div class="owl-carousel">
                            <div class="item card">
                                <img src="{{ asset('public/images/jury-image/4.webp') }}" alt="image"
                                    class="img-fluid" loading="lazy">
                                <div class="International-competition">
                                    <p> Shekhar Kapur</p>
                                    <p style="text-align: inherit"> IFFI Festival Director, Director and Producer </p>
                                </div>
                            </div>
                            <div class="item card">
                                <img src="{{ asset('public/images/jury-image/6.webp') }}" alt="image"
                                    class="img-fluid" loading="lazy">
                                <div class="International-competition">
                                    <p> Ramdas Naidu </p>
                                    <p style="text-align: inherit"> Producer, Director </p>
                                </div>
                            </div>
                            <div class="item card">
                                <img src="{{ asset('public/images/jury-image/1.webp') }}" alt="image"
                                    class="img-fluid" loading="lazy">
                                <div class="International-competition">
                                    <p>Ashwin Kumar </p>
                                    <p style="text-align: inherit">Director, Animator</p>
                                </div>
                            </div>
                            <div class="item card">
                                <img src="{{ asset('public/images/jury-image/2.webp') }}" alt="image"
                                    class="img-fluid" loading="lazy">
                                <div class="International-competition">
                                    <p>Asha Batra</p>
                                    <p style="text-align: inherit">Film Historian, Indian Cinema Heritage Foundation</p>
                                </div>
                            </div>
                            <div class="item card">
                                <img src="{{ asset('public/images/jury-image/5.webp') }}" alt="image"
                                    class="img-fluid" loading="lazy">
                                <div class="International-competition">
                                    <p>Dr. Sujay Sen </p>
                                    <p style="text-align: inherit">Executive Vice President & Global Head - Interactive Services, LTIMindtree</p>
                                </div>
                            </div>

                            <div class="item card">
                                <img src="{{ asset('public/images/jury-image/3.webp') }}" alt="image"
                                    class="img-fluid" loading="lazy">
                                <div class="International-competition">
                                    <p>Nayna Raut </p>
                                    <p style="text-align: inherit">Senior Director - Design Strategy & CraftStudio, Interactive Services, LTIMindtree
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </section>

            </div>
        </div>
    </div>
@endsection
