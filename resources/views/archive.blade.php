@extends('layouts.app')
@section('site_title', 'Discover what IFFI is all about | IFFI GOA')
@section('site_description',
    'Discover the International Film Festival of India (IFFI), showcasing the best of Indian
    and global cinema, fostering cultural exchange and cinematic excellence.')
@section('site_keywords', 'About IFFI Goa, IFFI goa, IFFI goa registration, IFFI goa delegate registration, About us')
@section('content')
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Header start-->
    @include('layouts.header')
    <!-- Header end-->

    <!-- Menu slide start-->
    @include('pages.navigation-slide')
    <!-- Menu slide end -->

    <!-- Inner Page Banner Section -->
    <div class="container-fluid page-header py-5">
        <div class="container text-center ">
            <h1 class="page-title-header">Archive</h1>
        </div>
    </div>
    <!-- Inner Page Banner Section -->

    <div class="col-lg-12 mt-5 static-content">
        <div class="container">
            <div class="row">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item" role="presentation">
                        <button class="nav-link active" id="about-us" data-bs-toggle="tab" data-bs-target="#aboutUs"
                            type="button" role="tab" aria-controls="aboutUs" aria-selected="true"> About Us
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="film-selection-tab" data-bs-toggle="tab"
                            data-bs-target="#film-selection" type="button" role="tab" aria-controls="home"
                            aria-selected="true"> Film Selection
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="profile-tab" data-bs-toggle="tab" data-bs-target="#profile"
                            type="button" role="tab" aria-controls="profile" aria-selected="false">
                            Media
                        </button>
                    </li>

                    <li class="nav-item" role="presentation">
                        <button class="nav-link" id="contact-tab" data-bs-toggle="tab" data-bs-target="#contact"
                            type="button" role="tab" aria-controls="contact" aria-selected="false">
                            Master Classes
                        </button>
                    </li>
                </ul>

                <div class="tab-content mt-3 p-0" id="myTabContent">

                    <div class="tab-pane fade show active" id="aboutUs" role="tabpanel" aria-labelledby="about-us">
                        <div class="row">
                            <div class="col-sm-4">
                                <div class="card mb-4 rounded-3 shadow-sm">
                                    <div class="card-header card-header-active py-3">
                                        <h4 class="my-0 fw-normal">About Us</h4>
                                    </div>
                                    <div class="card-body list-archive ">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <a href="https://www.youtube.com/watch?v=lsjuObbzDyM" class="nav-link"
                                                    target="_blank">Glimpses of IFFI 2023</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade show" id="film-selection" role="tabpanel"
                        aria-labelledby="film-selection-tab">
                        <div class="row" data-masonry='{"percentPosition":true}'>
                            <div class="col-sm-4">
                                <div class="card mb-4 rounded-3 shadow-sm">
                                    <div class="card-header card-header-active py-3">
                                        <h4 class="my-0 fw-normal">International Cinema || Curated Sections 2024</h4>
                                    </div>
                                    <div class="card-body list-archive ">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <a class="nav-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'international-competition']) }}">
                                                    International Competition</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'best-debut-feature-film-of-a-director']) }}">
                                                    Best Debut Feature Film of a Director
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'icft-unesco-medal']) }}">
                                                    ICFT UNESCO Gandhi Medal
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'from-the-festivals']) }}">
                                                    From The Festivals
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'docu-montage']) }}">
                                                    Docu-Montage
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'experimental-films']) }}">
                                                    Experimental Films
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'macabre-dreams']) }}">
                                                    Macabre Dreams
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'cinema-world']) }}">
                                                    Cinema of the World
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'restored-classic']) }}">
                                                    Restored Classics
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'unicef']) }}">
                                                    UNICEF@IFFI
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'rising-stars']) }}">
                                                    Rising Stars
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'mission-life']) }}">
                                                    Mission Life
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'BFI@IFFI']) }}">BFI@IFFI</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'country-focus-australia']) }}">
                                                    Country Focus: Australia
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'accolades']) }}">
                                                    Accolades
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'from-the-consulate']) }}">
                                                    From The Consulates
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'opening-film']) }}">
                                                    Opening Film
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'closing-film']) }}">
                                                    Closing Film
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'international-jury-films']) }}">
                                                    International Jury Films
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'special-presentations']) }}">
                                                    Special Presentations
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('international-jury', ['year' => 2024]) }}">
                                                    International Jury - 2024
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card mb-4 rounded-3 shadow-sm">
                                    <div class="card-header card-header-active py-3">
                                        <h4 class="my-0 fw-normal"> Panorama IFFI 2024</h4>
                                    </div>
                                    <div class="card-body list-archive">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('official-selection-feature', ['year' => 2024]) }}">
                                                    Feature
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('official-selection-non-feature', ['year' => 2024]) }}">
                                                    Non-Feature
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('indian-panorama', ['year' => 2024, 'slug' => 'accessible-india-accessible-films']) }}">
                                                    Accessible India, Accessible Films
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('indian-panorama', ['year' => 2024, 'slug' => 'panorama-feature-jury-recommends']) }}">
                                                    Panorama Feature Jury Recommends</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('indian-panorama', ['year' => 2024, 'slug' => 'special-showcase']) }}">
                                                    Special Showcase
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('indian-panorama', ['year' => 2024, 'slug' => 'nfdc-showcase-premieres']) }}">
                                                    NFDC Showcase &amp; Premieres
                                                </a>

                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('indian-panorama', ['year' => 2024, 'slug' => 'nfai-classics']) }}">
                                                    NFAI Classics
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('indian-panorama', ['year' => 2024, 'slug' => 'prasar-bharti-ott']) }}">
                                                    Prasar Bharti OTT
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('indian-panorama', ['year' => 2024, 'slug' => 'prasar-bharti-films']) }}">
                                                    Prasar Bharti Films
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('indian-panorama-jury-feature', ['year' => 2024]) }}">Indian
                                                    Panorama Jury Feature</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('indian-panorama-jury-non-feature', ['year' => 2024]) }}">Indian
                                                    Panorama Jury Non-Feature</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-4">
                                <div class="card mb-4 rounded-3 shadow-sm">
                                    <div class="card-header card-header-active py-3">
                                        <h4 class="my-0 fw-normal">Best Web Series</h4>
                                    </div>
                                    <div class="card-body list-archive">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('web-series-jury', ['year' => 2024]) }}">
                                                    Best Web Series Jury - 2024</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('best-web-series-previw-commitee', ['year' => 2024]) }}">
                                                    Best Web Series Preview Committee 2024</a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('best-web-series', ['year' => 2024, 'slug' => 'best-web-series']) }}">
                                                    Official Selection - Best Web Series</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="col-sm-12 mt-4">
                                    <div class="card mb-4 rounded-3 shadow-sm">
                                        <div class="card-header card-header-active py-3">
                                            <h4 class="my-0 fw-normal">Gala Premieres & Red Carpet</h4>
                                        </div>
                                        <div class="card-body list-archive">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <a class="dropdown-link" target="_blank"
                                                        href="{{ route('3rd-edition') }}">3rd
                                                        Edition (55th IFFI)</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="dropdown-link" target="_blank"
                                                        href="{{ route('2nd-edition') }}">2nd
                                                        Edition (54th IFFI)</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="dropdown-link" target="_blank"
                                                        href="{{ route('1st-edition') }}">
                                                        1st Edition (53rd IFFI)</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-sm-12 mt-4">
                                    <div class="card mb-4 rounded-3 shadow-sm">
                                        <div class="card-header card-header-active py-3">
                                            <h4 class="my-0 fw-normal">CMOT'S</h4>
                                        </div>
                                        <div class="card-body list-archive">
                                            <ul class="list-group list-group-flush">
                                                <li class="list-group-item">
                                                    <a class="dropdown-link" target="_blank"
                                                        href="{{ route('cmot-jury', ['year' => 2024]) }}"
                                                        class="dropdown-item">
                                                        Selection Jury 2024</a>
                                                </li>
                                                <li class="list-group-item">
                                                    <a class="dropdown-link" target="_blank"
                                                        href="{{ route('cmot-grand-jury', ['year' => 2024]) }}"
                                                        class="dropdown-item">
                                                        Grand Jury 2024</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                        <div class="row" data-masonry='{"percentPosition":true}'>
                            <div class="col-sm-6">
                                <div class="card mb-4 rounded-3 shadow-sm">
                                    <div class="card-header card-header-active py-3">
                                        <h4 class="my-0 fw-normal"> Gallery</h4>
                                    </div>
                                    <div class="card-body list-archive">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('media.gallery.byYear', ['year' => '2024']) }}">Photos
                                                    2024
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('media.gallery.byYear', ['year' => '2023']) }}">Photos
                                                    2023
                                                </a>
                                            </li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('media.gallery.videos.byYear', ['year' => '2024']) }}">Videos-2024</a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            <div class="col-sm-6">
                                <div class="card mb-4 rounded-3 shadow-sm">
                                    <div class="card-header card-header-active py-3">
                                        <h4 class="my-0 fw-normal"> The Peacock</h4>
                                    </div>
                                    <div class="card-body list-archive">
                                        <ul class="list-group list-group-flush">
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('the-peacock', ['year' => 2024]) }}">2024</a>
                                            </li>
                                            <li class="list-group-item"><a class="dropdown-link" target="_blank"
                                                    href="{{ route('the-peacock', ['year' => 2023]) }}">2023</a></li>
                                            <li class="list-group-item">
                                                <a class="dropdown-link" target="_blank"
                                                    href="{{ route('the-peacock', ['year' => 2022]) }}">2022</a>
                                            </li>
                                            <li class="list-group-item"><a class="dropdown-link" target="_blank"
                                                    href="{{ route('the-peacock', ['year' => 2021]) }}">2021</a></li>
                                            <li class="list-group-item"><a class="dropdown-link" target="_blank"
                                                    href="{{ route('the-peacock', ['year' => 2018]) }}">2018</a></li>
                                            <li class="list-group-item"><a class="dropdown-link" target="_blank"
                                                    href="{{ route('the-peacock', ['year' => 2017]) }}">2017</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
                        <div class="col-sm-12">
                            <div class="card mb-4 rounded-3 shadow-sm">
                                <div class="card-header card-header-active py-3">
                                    <h4 class="my-0 fw-normal"> Master Classes Archive</h4>
                                </div>
                                <div class="card-body list-archive">
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">
                                            <a class="nav-link" target="_blank" href="{{ route('master-classes') }}">
                                                55<sup>th</sup> IFFI Schedule - 2024
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection


<style type="text/css">
    .card-header-active {
        padding: 20px 20px !important;
        background: linear-gradient(44.43deg, #3E4EB0 -20.27%, #164E47 105%) !important;
        color: #fff !important;

        & h4 {
            color: #fff !important;
            font-size: 18px
        }
    }

    .list-archive li {
        padding: 5px 0
    }

    .list-archive li a {
        text-decoration: none;
    }
</style>
