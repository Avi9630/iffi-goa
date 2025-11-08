<!-- Menu Itens Start -->
<style>
    .offcanvas {
        overflow: scroll;
    }
</style>

<div class="offcanvas offcanvas-top top-navigation" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
    <div class="container">
        {{-- close btn --}}
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        {{-- Menu Item's --}}
        <div class="offcanvas-body1">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container pl-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="row">

                            <!-- About Us Section Start -->
                            <div class="col-md-3 col-sm-12">
                                <h4 class="menu-title">About us</h4>
                                <ul class="navbar-nav vertical-menu-custom">
                                    <li class="nav-item">
                                        <a href="{{ route('about-iffi') }}" class="nav-link">About
                                            IFFI</a>
                                    </li>

                                    {{-- <li class="nav-item">
                                        <a href="https://www.youtube.com/watch?v=lsjuObbzDyM" class="nav-link"
                                            target="_blank">Glimpses of IFFI 2023</a>
                                    </li> --}}

                                    <li class="nav-item">
                                        <a href="https://youtu.be/yRamd6jVCes?si=jAFclk9vYGgRCNhu" class="nav-link"
                                            target="_blank">Glimpses of IFFI 2025</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('festival-venue') }}" class="nav-link">Festival Venues</a>
                                    </li>

                                    <li class="nav-item dropdown">

                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">About Goa
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('goa-tourist-places') }}" class="dropdown-item">Goa
                                                    Tourist Places</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('connectivity') }}" class="dropdown-item">
                                                    Connectivity </a>
                                            </li>
                                        </ul>

                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('contact-us') }}" class="nav-link">Contact Us</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('faq') }}" class="nav-link">FAQ's</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('partners-sponsors') }}" class="nav-link">
                                            Our Partners & Sponsors</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('iffi-accessibility') }}" class="nav-link">Accessible IFFI For
                                            All</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- About Us Section End -->

                            <!-- Film Selection Section Start -->
                            <div class="col-md-3 col-sm-12 ">
                                <h4 class="menu-title ">Film selection</h4>
                                <ul class="navbar-nav vertical-menu-custom">

                                    <!-- International Cinema menu Start-->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">International Cinema</a>
                                        <ul class="dropdown-menu">

                                            {{-- Curated Sections 2025 statrt here --}}
                                            <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Curated Sections 2025
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ asset('public/pdfs/INTERNATIONAL COMPETITION.pdf') }}"
                                                            target="_blank">
                                                            International Competition</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ asset('public/pdfs/BEST DEBUT FEATURE.pdf') }}"
                                                            target="_blank">Best Debut Feature</a>
                                                    </li>

                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ asset('public/pdfs/ICFFT UNESCO.pdf') }}"
                                                            target="_blank">ICFFT UNESCO</a>
                                                    </li>

                                                    {{-- <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'international-competition']) }}">International
                                                            Competition</a>
                                                    </li> --}}
                                                    {{-- <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'best-debut-feature-film-of-a-director']) }}">
                                                            Best Debut Feature Film of a Director
                                                        </a></li> --}}
                                                    {{-- <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'icft-unesco-medal']) }}">
                                                            ICFT UNESCO Gandhi Medal
                                                        </a></li> --}}
                                                    {{-- <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'from-the-festivals']) }}">From
                                                            The Festivals</a></li> --}}
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'docu-montage']) }}">Docu-Montage</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'experimental-films']) }}">Experimental
                                                            Films</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'macabre-dreams']) }}">Macabre
                                                            Dreams</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'cinema-world']) }}">Cinema
                                                            of the World</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'restored-classic']) }}">Restored
                                                            Classics</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'unicef']) }}">
                                                            UNICEF@IFFI</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'rising-stars']) }}">Rising
                                                            Stars</a></li>

                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'mission-life']) }}">Mission
                                                            Life</a></li>
                                                    {{-- <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'BFI@IFFI']) }}">BFI@IFFI</a>
                                                    </li> --}}
                                                    {{-- <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'country-focus-australia']) }}">Country
                                                            Focus: Australia</a></li> --}}
                                                    {{-- <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'accolades']) }}">Accolades</a>
                                                    </li> --}}
                                                    {{-- <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'from-the-consulate']) }}">From
                                                            The Consulates</a></li> --}}
                                                    {{-- <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'opening-film']) }}">Opening
                                                            Film</a></li> --}}
                                                    {{-- <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'closing-film']) }}">Closing
                                                            Film</a></li> --}}
                                                    {{-- <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'international-jury-films']) }}">International
                                                            Jury Films</a></li> --}}
                                                    {{-- <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2025, 'slug' => 'special-presentations']) }}">Special
                                                            Presentations</a></li> --}}
                                                </ul>
                                            </li>
                                            {{-- Curated Sections 2025 end here --}}

                                            {{-- Curated Sections 2024 --}}
                                            {{-- <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Curated Sections 2024
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'international-competition']) }}">
                                                            International Competition</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'best-debut-feature-film-of-a-director']) }}">
                                                            Best Debut Feature Film of a Director
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'icft-unesco-medal']) }}">
                                                            ICFT UNESCO Gandhi Medal
                                                        </a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'from-the-festivals']) }}">From
                                                            The Festivals</a></li>

                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'docu-montage']) }}">Docu-Montage</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'experimental-films']) }}">Experimental
                                                            Films</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'macabre-dreams']) }}">Macabre
                                                            Dreams</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'cinema-world']) }}">Cinema
                                                            of the World</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'restored-classic']) }}">Restored
                                                            Classics</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'unicef']) }}">UNICEF
                                                            @
                                                            IFFI</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'rising-stars']) }}">Rising
                                                            Stars</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'mission-life']) }}">Mission
                                                            Life</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'BFI@IFFI']) }}">BFI@IFFI</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'country-focus-australia']) }}">Country
                                                            Focus: Australia</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'accolades']) }}">Accolades</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'from-the-consulate']) }}">From
                                                            The Consulates</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'opening-film']) }}">Opening
                                                            Film</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'closing-film']) }}">Closing
                                                            Film</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'international-jury-films']) }}">International
                                                            Jury Films</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cureted-section', ['year' => 2024, 'slug' => 'special-presentations']) }}">Special
                                                            Presentations</a></li>
                                                </ul>
                                            </li> --}}

                                            {{-- International Jury --}}
                                            {{-- <li>
                                                <a href="{{ route('international-jury', ['year' => 2024]) }}"
                                                    class="dropdown-item">International Jury - 2024</a>
                                            </li> --}}

                                            <li>
                                                <a href="{{ route('international-cinema-awards') }}"
                                                    class="dropdown-item">International Cinema Awards - 2025</a>
                                            </li>

                                            <li>
                                                <a href="https://filmfreeway.com/InternationalFilmFestivalofIndiaIFFI-Goa"
                                                    class="dropdown-item nav-link yelow-color-link" target="_blank">View
                                                    Your Entry</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('icinema-rules-regulation') }}"
                                                    class="dropdown-item">Rules & Regulations</a>
                                            </li>

                                        </ul>
                                    </li>

                                    <!-- Indian Panorama-->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Indian
                                            Panorama</a>
                                        <ul class="dropdown-menu">

                                            <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Official Selection IFFI 2025
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ asset('public/pdfs/IP 2025 Feature.pdf') }}"
                                                            target="_blank">Feature</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ asset('public/pdfs/IP 2025 Non-Feature.pdf') }}"
                                                            target="_blank">
                                                            Non-Feature</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li>
                                                <a href="{{ route('about-indian-panorama') }}"
                                                    class="dropdown-item">About Indian Panorama</a>
                                            </li>

                                            <li>
                                                <a href="https://iffigoa.org/festival/indian-paranoma"
                                                    class="dropdown-item nav-link yelow-color-link"
                                                    target="_blank">View
                                                    Your Entry 2025</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('indian-panorama-rules-regulations') }}"
                                                    class="dropdown-item">Rules & Regulations</a>
                                            </li>

                                            {{-- 
                                            <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Indian Panorama Jury - 2024
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('indian-panorama-jury-feature', ['year' => 2024]) }}">Feature</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('indian-panorama-jury-non-feature', ['year' => 2024]) }}">Non-Feature</a>
                                                    </li>
                                                </ul>
                                            </li> --}}

                                            {{-- <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Indian Panorama IFFI 2024
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('official-selection-feature', ['year' => 2024]) }}">
                                                            Feature
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('official-selection-non-feature', ['year' => 2024]) }}">
                                                            Non-Feature
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('indian-panorama', ['year' => 2024, 'slug' => 'accessible-india-accessible-films']) }}">
                                                            Accessible India, Accessible Films</a>
                                                    </li>
                                                    <li class="nav-item dropend">
                                                        <a class="nav-link dropdown-toggle" href="#"
                                                            role="button" data-bs-toggle="dropdown"
                                                            aria-expanded="false">
                                                            Special Presentation
                                                        </a>
                                                        <ul class="dropdown-menu">
                                                            <li><a class="dropdown-item"
                                                                    href="{{ route('indian-panorama', ['year' => 2024, 'slug' => 'panorama-feature-jury-recommends']) }}">Panorama
                                                                    Feature Jury Recommends</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="{{ route('indian-panorama', ['year' => 2024, 'slug' => 'special-showcase']) }}">Special
                                                                    Showcase</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="{{ route('indian-panorama', ['year' => 2024, 'slug' => 'nfdc-showcase-premieres']) }}">NFDC
                                                                    Showcase & Premieres</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="{{ route('indian-panorama', ['year' => 2024, 'slug' => 'nfai-classics']) }}">NFAI
                                                                    Classics</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="{{ route('indian-panorama', ['year' => 2024, 'slug' => 'prasar-bharti-ott']) }}">Prasar
                                                                    Bharti OTT</a>
                                                            </li>
                                                            <li><a class="dropdown-item"
                                                                    href="{{ route('indian-panorama', ['year' => 2024, 'slug' => 'prasar-bharti-films']) }}">Prasar
                                                                    Bharti Films</a>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </li> --}}

                                            {{-- <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Indian Panorama IFFI 2023
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('official-selection-feature', ['year' => 2023]) }}">Feature</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('official-selection-non-feature', ['year' => 2023]) }}">Non-Feature</a>
                                                    </li>
                                                </ul>
                                            </li> --}}

                                            {{-- <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Indian Cinema - IFFI 2023
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('accessible-film', ['year' => 2023, 'slug' => 'accessible-india-accessible-films']) }}">
                                                            Accessible India-Accessible Films</a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('special-screening') }}">Special
                                                            Screening</a>
                                                    </li>
                                                </ul>
                                            </li> --}}

                                        </ul>
                                    </li>

                                    {{-- Cinema AI --}}
                                    <ul class="navbar-nav vertical-menu-custom">
                                        <li class="nav-item">
                                            <a href="https://films.wavesbazaar.com/programme/cinemai-hackathon/"
                                                class="nav-link" target="_blank">CinemAI Hackathon</a>
                                        </li>
                                        <li class="nav-item">
                                            <a href="{{ route('ai-film-festival') }}" class="nav-link"
                                                target="_blank">AI Film Festival</a>
                                        </li>
                                    </ul>

                                    <!-- Best Web Series menu Start-->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Best Web
                                            Series</a>
                                        <ul class="dropdown-menu">

                                            <li class="nav-item">
                                                <a href="{{ asset('public/pdfs/OTT Catalogue.pdf') }}"
                                                    class="dropdown-item" target="_blank"> Official Selection</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('about-web-series') }}" class="dropdown-item">About
                                                    Web Series</a>
                                            </li>

                                            <li>
                                                <a href="https://iffigoa.org/festival/web-series"
                                                    class="dropdown-item nav-link yelow-color-link"
                                                    target="_blank">View Your Entry 2025</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('web-series-rules-regulations') }}"
                                                    class="dropdown-item">Rules & Regulations</a>
                                            </li>
                                            {{-- <li>
                                                <a href="{{ route('web-series-jury', ['year' => 2024]) }}"
                                                    class="dropdown-item">
                                                    Best Web Series Jury - 2024</a>
                                            </li> --}}
                                            {{-- 
                                            <li>
                                                <a href="{{ route('best-web-series-previw-commitee', ['year' => 2024]) }}"
                                                    class="dropdown-item">
                                                    Best Web Series Preview Committee 2024</a>
                                            </li> --}}
                                            {{-- <li>
                                                <a class="dropdown-item"
                                                    href="{{ route('best-web-series', ['year' => 2024, 'slug' => 'best-web-series']) }}">
                                                    Official Selection - Best Web Series</a>
                                            </li> --}}
                                        </ul>
                                    </li>

                                    <!-- Gala Premieres & Red Carpet menu Start-->
                                    <ul class="navbar-nav vertical-menu-custom">
                                        <li class="nav-item">
                                            <a href="{{ route('4th-edition') }}" class="nav-link">
                                                Gala Premieres & Red Carpet</a>
                                        </li>
                                    </ul>

                                    {{-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Gala Premieres & Red Carpet </a>
                                            
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('4th-edition') }}" class="dropdown-item">4th
                                                    Edition (56th IFFI)</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('3rd-edition') }}" class="dropdown-item">3rd
                                                    Edition (55th IFFI)</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('2nd-edition') }}" class="dropdown-item">2nd
                                                    Edition (54th IFFI)</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('1st-edition') }}" class="dropdown-item">
                                                    1st Edition (53rd IFFI)</a>
                                            </li>
                                        </ul>
                                    </li> --}}

                                    <!-- CMOT Section Start-->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Creative Minds Of Tomorrow (CMOT)
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('cmot-grand-jury', ['year' => 2025]) }}"
                                                    class="dropdown-item">
                                                    Grand Jury 2025
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('cmot-jury', ['year' => 2025]) }}"
                                                    class="dropdown-item">
                                                    Selection Jury 2025
                                                </a>
                                            </li>
                                            <li>
                                                <a href="{{ route('about-cmot') }}" class="dropdown-item">About
                                                    CMOT</a>
                                            </li>
                                            <li>
                                                <a href="https://iffigoa.org/festival/creative-mind-tomorrow"
                                                    class="nav-link yelow-color-link" target="_blank">
                                                    View your entry - 2025
                                                </a>
                                            </li>

                                            {{-- CMOT JURY --}}
                                            {{-- <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    CMOT Jury
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('cmot-jury', ['year' => 2025]) }}"
                                                            class="dropdown-item">
                                                            Selection Jury 2025</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cmot-jury', ['year' => 2024]) }}"
                                                            class="dropdown-item">
                                                            Selection Jury 2024</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cmot-grand-jury', ['year' => 2025]) }}"
                                                            class="dropdown-item">
                                                            Grand Jury 2025</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cmot-grand-jury', ['year' => 2024]) }}"
                                                            class="dropdown-item">
                                                            Grand Jury 2024</a>
                                                    </li>
                                                </ul>
                                            </li> --}}
                                        </ul>
                                    </li>

                                    <!-- Technical Committee Start-->
                                    <li class="nav-item dropdown">
                                        <a href="{{ route('technical-committee') }}" class="nav-link">Technical
                                            Committee</a>
                                    </li>
                                    <!-- Technical Committee End-->
                                </ul>
                            </div>
                            <!-- Film Selection Section End -->

                            <!-- Waves Film Bazzar Section Start -->
                            <div class="col-md-3 col-sm-12 ">
                                <h4 class="menu-title ">Waves Film Bazaar</h4>
                                <ul class="navbar-nav vertical-menu-custom">
                                    {{-- <li class="nav-item">
                                        <a href="https://films.wavesbazaar.com/programme/screenwriters-lab/features/"
                                            class="nav-link" target="_blank">Screenwriters Lab</a>
                                    </li> --}}
                                    <li class="nav-item">
                                        <a href="https://films.wavesbazaar.com/participate/attend-as-a-delegate/"
                                            class="nav-link" target="_blank">Delegate Registration</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('knowledge-series') }}" class="nav-link">
                                            Knowledge Series Calender
                                        </a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="https://films.wavesbazaar.com/programme/market-screenings/"
                                            class="nav-link" target="_blank">Market Screening</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="https://films.wavesbazaar.com/programme/viewing-room/?utm_source=vr&utm_medium=menu&utm_campaign=header"
                                            class="nav-link" target="_blank">Viewing Room</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://films.wavesbazaar.com/programme/work-in-progress-lab/?utm_source=wip&utm_medium=menu&utm_campaign=header"
                                            class="nav-link" target="_blank">Work In Progress lab</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="https://films.wavesbazaar.com/programme/screenwriters-lab/features/"
                                            class="nav-link" target="_blank">Screenwriters' Lab</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="https://films.wavesbazaar.com/programme/co-production-market/feature/"
                                            class="nav-link" target="_blank">Co-Production Market (Feature)</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="https://films.wavesbazaar.com/programme/co-production-market/documentary/"
                                            class="nav-link" target="_blank">Co-Production Market (Documentary)</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="https://films.wavesbazaar.com/programme/producers-workshop/"
                                            class="nav-link" target="_blank">Producers Workshop</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Waves Film Bazzar Section End -->

                            <!-- Delegate Registration Section Start -->
                            <div class="col-md-3 col-sm-12 ">
                                <h4 class="menu-title ">IFFI Delegate Registration</h4>
                                <ul class="navbar-nav vertical-menu-custom">
                                    <li class="nav-item">
                                        <a href="https://my.iffigoa.org/" class="nav-link" target="_blank">Delegate
                                            SignUp/SignIn</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://accreditation.pib.gov.in/eventregistration/login.aspx"
                                            class="nav-link" target="_blank">Media Accreditation</a>
                                    </li>
                                    {{--
                                    <li class="nav-item">
                                        <a href="https://filmguide.iffigoa.org/" class="nav-link"
                                            target="_blank">Film Guide & Ticket Booking</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://filmguide.iffigoa.org/schedule" class="nav-link"
                                            target="_blank">Film Guide Schedule</a>
                                    </li>
                                    <li class="nav-item"><a
                                            href="{{ asset('public/images/MediaPdf/Full-IFFI-Schedule-2024.pdf') }}"
                                            target="_blank" class="nav-link">55<sup>th</sup> IFFI Official
                                            Schedule PDF</a>
                                    </li> --}}
                                </ul>
                            </div>
                            <!-- Delegate Registration Section End -->

                            <!-- Media Section Start -->
                            <div class="col-md-3 col-sm-12 ">
                                <h4 class="menu-title ">Media</h4>
                                <ul class="navbar-nav vertical-menu-custom">

                                    <li class="nav-item">
                                        <a href="{{ route('press-release') }}" class="nav-link">Press Release</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('media-international-media') }}"
                                            class="nav-link">International
                                            Media</a>
                                    </li>

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Gallery
                                        </a>
                                        <ul class="dropdown-menu">
                                            {{-- 2025 --}}
                                            {{-- <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    IFFI festival 2025
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('media.gallery.byYear', ['year' => '2025']) }}">Photos
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('media.gallery.videos.byYear', ['year' => '2025']) }}">Videos</a>
                                                    </li>
                                                </ul>
                                            </li> --}}
                                            {{-- 2024 --}}
                                            <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    IFFI festival 2024
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        {{-- <a class="dropdown-item"
                                                            href="{{ route('gallery-2024', ['year' => '2024']) }}">Photos
                                                        </a> --}}
                                                        <a class="dropdown-item"
                                                            href="{{ route('media.gallery.byYear', ['year' => '2024']) }}">Photos
                                                        </a>
                                                    </li>
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('media.gallery.videos.byYear', ['year' => '2024']) }}">Videos</a>
                                                        {{-- <a class="dropdown-item"
                                                            href="{{ route('gallery-2024/videos', ['year' => '2024']) }}">Videos</a> --}}
                                                    </li>
                                                </ul>
                                            </li>
                                            {{-- 2023 --}}
                                            {{-- <li>
                                                <a href="{{ route('gallery', ['year' => '2023']) }}"
                                                    class="dropdown-item">
                                                    IFFI festival 2023 </a>
                                            </li> --}}
                                            <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    IFFI festival 2023
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li>
                                                        <a class="dropdown-item"
                                                            href="{{ route('media.gallery.byYear', ['year' => '2023']) }}">Photos
                                                        </a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>

                                    <li class="nav-item"><a href="{{ route('news-and-update') }}"
                                            class="nav-link">News and Updates</a>
                                    </li>

                                    {{-- <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            The Peacock
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li><a class="dropdown-item"
                                                    href="{{ route('the-peacock', ['year' => 2024]) }}">2024</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('the-peacock', ['year' => 2023]) }}">2023</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('the-peacock', ['year' => 2022]) }}">2022</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('the-peacock', ['year' => 2021]) }}">2021</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('the-peacock', ['year' => 2018]) }}">2018</a>
                                            </li>
                                            <li><a class="dropdown-item"
                                                    href="{{ route('the-peacock', ['year' => 2017]) }}">2017</a>
                                            </li>
                                        </ul>
                                    </li> --}}

                                    {{-- <li class="nav-item"><a
                                            href="{{ asset('public/images/MediaPdf/55th-IFFI-Catalogue_Website_Single page_Updated.pdf') }}"
                                            target="_blank" class="nav-link">56<sup>th</sup> IFFI Official
                                            Catalogue</a>
                                    </li> --}}

                                </ul>
                            </div>
                            <!-- Media Section End -->

                            <!-- Master class Section Start -->
                            <div class="col-md-3 col-sm-12 ">
                                <h4 class="menu-title ">Master Classes</h4>
                                <ul class="navbar-nav vertical-menu-custom">

                                    <li class="nav-item">
                                        <a href="{{ route('master-classes-56th') }}" class="nav-link">
                                            56<sup>th</sup> IFFI Schedule
                                        </a>
                                    </li>

                                    {{-- <li class="nav-item">
                                        <a href="{{ route('master-classes') }}" class="nav-link">
                                            55<sup>th</sup> IFFI Schedule
                                        </a>
                                    </li> --}}

                                    {{-- <li class="nav-item">
                                        <a href="{{ route('master-class', ['id' => 1]) }}" class="nav-link">
                                            Aditya
                                        </a>
                                    </li> --}}

                                    {{-- <li class="nav-item dropdown">

                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">About Goa
                                        </a>
                                        <ul class="dropdown-menu">

                                            <li>
                                                <a href="{{ route('goa-tourist-places') }}" class="dropdown-item">Goa
                                                    Tourist Places</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('connectivity') }}" class="dropdown-item">
                                                    Connectivity </a>
                                            </li>

                                        </ul>

                                    </li> --}}
                                </ul>
                            </div>
                            <!-- Masterclass Section End -->

                            <!-- Waves Film Bazzar Section Start -->
                            <div class="col-md-3 col-sm-12 ">
                                <h4 class="menu-title ">WAVEX</h4>
                                <ul class="navbar-nav vertical-menu-custom">
                                    <li class="nav-item">
                                        <a href="https://wavex.wavesbazaar.com/book-iffi-booth.html" class="nav-link"
                                            target="_blank">Book Your Booth</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Waves Film Bazzar Section End -->

                            <!-- IFFI Schedule Section Start -->
                            <div class="col-md-3 col-sm-12 ">
                                <h4 class="menu-title ">Festival Schedule</h4>
                                <ul class="navbar-nav vertical-menu-custom">
                                    <li class="nav-item">
                                        <a href="{{ asset('public/pdfs/Festival Schedule - IFFI 2025.pdf') }}"
                                            class="nav-link" target="_blank"> IFFI 2025</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- IFFI Schedule Section End -->
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
<!-- Menu Itens End -->
