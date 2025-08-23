@extends('layouts.app')
@section('site_title', 'IFFI Goa Rules and Regulations | NFDC | MIB')
@section('site_description',
    'Discover the rules & regulations for participating in the International Film Festival of
    India (IFFI) in Goa. Ensure compliance for a seamless experience.')
@section('site_keywords',
    'IFFI Goa rules, IFFI guidelines, Film Submission Rules, IFFI entry requirements, IFFI Goa
    policies, Film Festival Regulations, Event Rules IFFI')
@section('content')
    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->
    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->
    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header bannerBg-coverage-banner py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Midfest Film</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->
    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            {{-- <div class="row"> --}}
            {{-- <div class="col-md-12"> --}}
            <div class="rules-text screening-cont">
                <h5>Catching Dust</h5>
                <p style="color: gray">United Kingdom | 2023 | English | 96'| Colour</p>
                <div class="open-content">
                    <p>Director & Screenplay: <span>Stuart Gatt</span></p>
                    <p>Producers: <span>Mark David, Jon Katz, Edward R. Pressman, Stuart Gatt</span></p>
                    <p>DoP: <span>Aurelien Marra</span></p>
                    <p>Editor: <span>Nicholas Gaster</span></p>
                    <p>Cast: <span>Erin Moriarty, Jai Courtney, Dinah Shihapi, Ryan Corr</span></p>
                    <p>Festivals: <span>Tribeca Film Festival, 2023 Raindance Film Festival, 2023</span></p>
                    <p>Sales: <span>United Talent Agency</span></p>
                </div>
                <hr>
                <h5>Synopsis:</h5>
                <p>In the isolation of Texas’ Big Bend, a lone trailer on an abandoned commune has become the
                    reluctant hideout for Geena and her criminal husband, Clyde. Exhausted by his controlling ways,
                    Geena decides to leave, when a trailer suddenly arrives carrying a couple from New York.
                    Ignoring the risks their presence will bring, Geena convinces Clyde to let them stay, a decision
                    that will have dangerous consequences for them all.</p>
                <hr>
                <h5>Director's Bio:</h5>
                <p>Stuart Gatt is an award-winning British filmmaker of mixed Asian heritage whose stories are often
                    influenced by topical social themes. Catching Dust is his debut feature film.</p>
                <hr>
                <div class="screening-img">
                    <p>Drama | Slow-Burn Thriller</p>
                    <p>International Premiere</p>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body p-0">
                                    <img src="{{ asset('public/images/about-us/goa.jpg') }}" alt="image"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body p-0">
                                    <img src="{{ asset('public/images/about-us/goa.jpg') }}" alt="image"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4">
                            <div class="card">
                                <div class="card-body p-0">
                                    <img src="{{ asset('public/images/about-us/goa.jpg') }}" alt="image"
                                        class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <hr>
            </div>
            {{-- </div> --}}
            {{-- </div> --}}
        </div>
    </div>


@endsection
