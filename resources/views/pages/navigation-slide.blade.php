<!-- Navigation slide -->
<style>
    .offcanvas {
        overflow: scroll;
    }
</style>

<div class="offcanvas offcanvas-top top-navigation" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
    <div class="container">
        <div class="offcanvas-header">
            <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="offcanvas-body1">
            <nav class="navbar navbar-expand-lg navbar-dark">
                <div class="container pl-0">
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <div class="row">

                            <!-- About Us Section Start -->
                            <div class="col-md-3 col-sm-12 ">
                                <h4 class="menu-title ">About us</h4>
                                <ul class="navbar-nav vertical-menu-custom">
                                    <li class="nav-item">
                                        <a href="{{ route('about-iffi') }}" class="nav-link">About
                                            IFFI</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="https://www.youtube.com/watch?v=lsjuObbzDyM" class="nav-link"
                                            target="_blank">Glimpses of IFFI 2023</a>
                                    </li>

                                    <li class="nav-item">
                                        <a href="{{ route('festival-venue') }}" class="nav-link">Festival Venue</a>
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

                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Best of IFFI</a>
                                        <ul class="dropdown-menu">

                                            {{-- <li>
                                                <a href="{{ route('about-indian-panorama') }}"
                                                    class="dropdown-item">About Indian Panorama</a>
                                            </li> --}}

                                            <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Screening
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('opening-film') }}">Opening
                                                            Film</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('midfest-film') }}">Midfest
                                                            Film</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('closing-film') }}">Closing
                                                            Film</a>
                                                    </li>
                                                </ul>
                                            </li>

                                        </ul>
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

                                            {{-- <li>
                                                <a href="https://filmfreeway.com/InternationalFilmFestivalofIndiaIFFI-Goa"
                                                    class="dropdown-item nav-link yelow-color-link"
                                                    target="_blank">Submit Your Entry</a>
                                            </li> --}}

                                            <li>
                                                <a href="{{ route('international-jury') }}"
                                                    class="dropdown-item">Internation Jury - 2024</a>
                                            </li>

                                            <li>
                                                <a href="{{ route('icinema-rules-regulation') }}"
                                                    class="dropdown-item">Rules & Regulations</a>
                                            </li>

                                            <li class="nav-item dropend">

                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Curated Sections 2023
                                                </a>

                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('international-competition') }}">International
                                                            Competition</a></li>

                                                    <li><a class="dropdown-item"
                                                            href="{{ route('award-for-best-debute') }}">Award For The
                                                            Best
                                                            Debut</a></li>

                                                    <li><a class="dropdown-item"
                                                            href="{{ route('icft-unesco-medal') }}">ICFT-UNESCO Gandhi
                                                            Medal
                                                            2023</a></li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('festival-kaleloscope') }}">Festival
                                                            Kaleloscope</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('docu-montage') }}">Docu - Montage</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('integrade') }}">Intergrade</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('animation') }}">Animation</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('macabre-dreams') }}">Macabre Dreams</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('cinema-world') }}">Cinema Of The World</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('restored-classic') }}">Restored
                                                            Classics</a>
                                                    </li>
                                                    <li><a class="dropdown-item" href="{{ route('uniceff') }}">UNICEF
                                                            X
                                                            IFFI</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- Indian Debut Director Award menu Start-->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Indian Debut Director
                                            Awards</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('about-debut-director') }}"
                                                    class="dropdown-item">About Debut Director</a>
                                            </li>
                                            <li>
                                                <a href="https://iffigoa.org/festival/indian-debut-director"
                                                    class="dropdown-item nav-link yelow-color-link"
                                                    target="_blank">View your entry</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('dd-rules-regulations') }}"
                                                    class="dropdown-item">Rules & Regulations</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- Indian Panorama menu Start-->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Indian Panorama</a>
                                        <ul class="dropdown-menu">

                                            <li>
                                                <a href="{{ route('about-indian-panorama') }}"
                                                    class="dropdown-item">About Indian Panorama</a>
                                            </li>

                                            <li>
                                                <a href="https://iffigoa.org/festival/indian-paranoma"
                                                    class="dropdown-item nav-link yelow-color-link"
                                                    target="_blank">View your entry</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('indian-panorama-rules-regulations') }}"
                                                    class="dropdown-item">Rules & Regulations</a>
                                            </li>

                                            <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Indian Panorama - IFFI 2023
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('official-selection-feature') }}">Official
                                                            Selection :
                                                            Feature</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('official-selection-non-feature') }}">Official
                                                            Selection :
                                                            Non-Feature</a></li>
                                                </ul>
                                            </li>

                                            <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Indian Cinema - IFFI 2023
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('accessible-film') }}">Accessible
                                                            India-Accessible Films</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('special-screening') }}">Special
                                                            Screening</a>
                                                    </li>
                                                </ul>
                                            </li>

                                            <li class="nav-item dropend">
                                                <a class="nav-link dropdown-toggle" href="#" role="button"
                                                    data-bs-toggle="dropdown" aria-expanded="false">
                                                    Indian Panorama Jury - 2024
                                                </a>
                                                <ul class="dropdown-menu">
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('indian-panorama-jury-feature') }}">Feature</a>
                                                    </li>
                                                    <li><a class="dropdown-item"
                                                            href="{{ route('indian-panorama-jury-non-feature') }}">Non-Feature</a>
                                                    </li>
                                                </ul>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- Best Web Series menu Start-->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Best Web Series</a>
                                        <ul class="dropdown-menu">

                                            <li>
                                                <a href="{{ route('about-web-series') }}" class="dropdown-item">About
                                                    Web Series</a>
                                            </li>

                                            <li>
                                                <a href="https://iffigoa.org/festival/web-series"
                                                    class="dropdown-item nav-link yelow-color-link"
                                                    target="_blank">View your entry</a>
                                            </li>

                                        </ul>
                                    </li>
                                    <!-- Gala Premieres & Red Carpet menu Start-->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">Gala Premieres & Red
                                            Carpet</a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('1st-edition') }}" class="dropdown-item">
                                                    1st Edition (53rd IFFI)</a>
                                            </li>
                                            <li>
                                                <a href="{{ route('2nd-edition') }}" class="dropdown-item">2nd
                                                    Edition (54th IFFI)</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- CMOT Section Start-->
                                    <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" href="#" role="button"
                                            data-bs-toggle="dropdown" aria-expanded="false">
                                            Creative Minds Of Tomorrow (CMOT)
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('about-cmot') }}" class="dropdown-item">About
                                                    CMOT</a>
                                            </li>
                                            <li>
                                                <a href="https://iffigoa.org/festival/creative-mind-tomorrow"
                                                    class="nav-link yelow-color-link" target="_blank">View your
                                                    entry</a>
                                            </li>
                                        </ul>
                                    </li>
                                    <!-- CMOT Section End-->
                                    <!-- Technical Committee Start-->
                                    <li class="nav-item dropdown">
                                        <a href="{{ route('technical-committee') }}" class="nav-link">Technical
                                            Committee</a>
                                    </li>
                                    <!-- Technical Committee End-->
                                </ul>
                            </div>
                            <!-- Film Selection Section End -->

                            <!-- Media Section Start -->
                            <div class="col-md-3 col-sm-12 ">
                                <h4 class="menu-title ">Media</h4>
                                <ul class="navbar-nav vertical-menu-custom">
                                    <li class="nav-item"><a href="{{ route('press-release') }}"
                                            class="nav-link">Press Release</a></li>
                                    <li class="nav-item">
                                        <a href="{{ route('gallery') }}" class="nav-link">Gallery
                                            of 2023 IFFI Festival</a>
                                    </li>
                                    <li class="nav-item"><a href="{{ route('news-and-update') }}"
                                            class="nav-link">News and Updates</a></li>
                                </ul>
                            </div>
                            <!-- Media Section End -->

                            <!-- Delegate Registration Section Start -->
                            <div class="col-md-3 col-sm-12 ">
                                <h4 class="menu-title ">IFFI Delegate Registration</h4>
                                <ul class="navbar-nav vertical-menu-custom">
                                    <li class="nav-item">
                                        <a href="https://my.iffigoa.org/" class="nav-link" target="_blank">Delegate
                                            Login</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://my.iffigoa.org/extranet/media" class="nav-link"
                                            target="_blank">Media Login</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Delegate Registration Section End -->

                            <!-- Film Bazaar Section Start -->
                            <div class="col-md-3 col-sm-12 ">
                                <h4 class="menu-title ">Film Bazaar</h4>
                                <ul class="navbar-nav vertical-menu-custom">
                                    <li class="nav-item">
                                        <a href="https://filmbazaarindia.com/programme/producers-workshop/"
                                            class="nav-link" target="_blank">
                                            Producers' Workshop Registration
                                        </a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://filmbazaarindia.com/participate/attend-as-a-delegate/"
                                            class="nav-link" target="_blank">Delegate Registration</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="https://filmbazaarindia.com/programme/market-screenings/"
                                            class="nav-link" target="_blank">Market Screenings</a>
                                    </li>
                                </ul>
                            </div>
                            <!-- Film Bazaar Section End -->

                            <!-- Master class Section Start -->
                            {{-- <div class="col-md-3 col-sm-12 ">
                                <h4 class="menu-title ">
                                    <a href="{{ route('master-classes') }}" class="nav-link">
                                        Master Classes
                                    </a>
                                </h4>
                            </div> --}}
                            <!-- Masterclass Section End -->
                        </div>
                    </div>
                </div>
            </nav>
        </div>
    </div>
</div>
