@extends('layouts.app')
{{-- @section('site_title', 'Discover what IFFI is all about | IFFI GOA')
@section('site_description',
    'Discover the International Film Festival of India (IFFI), showcasing the best of Indian
    and global cinema, fostering cultural exchange and cinematic excellence.')
@section('site_keywords', 'About IFFI Goa, IFFI goa, IFFI goa registration, IFFI goa delegate registration, About us') --}}
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
                    <p><img src="{{ asset('public/images/ltmindtree.png') }}" alt="ai-film-festival" class="img-fluid"></p>
                    {{-- <div class="text-center">
                    </div> --}}
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
                                <p><strong>The Craft Master Award</strong> - Best AI Short Film (₹3,00,000) The Grand Prix honor, awarded
                                    to the most outstanding AI-generated short film for its excellence in storytelling,
                                    execution, and emotional impact.</p>
                            </li>
                            <li>
                                <p><strong>The Craft Vanguard Award</strong> - Most Innovative Use of AI / Experimental Narrative
                                    (₹2,00,000) Celebrating bold experimentation and creative risk-taking in AI-driven
                                    storytelling.</p>
                            </li>
                            <li>
                                <p><strong>The Craft Spectra Award</strong> - Best AI Animation / Visual Design (₹1,00,000) Awarded for
                                    exceptional visual artistry and design powered by AI tools and techniques.</p>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class=" col-md-12 col-sm-12 col-12">
                    <p>Winning films will be featured across LTIM, NFDC, and OpenAI global platforms.</p>
                </div>
            </div>
        </div>
    </div>
@endsection
