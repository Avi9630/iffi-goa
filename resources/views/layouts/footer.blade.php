<footer class="container-fluid">
    <div class="col-lg-12 ">
        <div class="container">
            <div class="footer-logo">
                <img src="{{ asset('public/images/header-logo/f-logoOne.svg') }}" alt="image" class="lap-view">
                <img src="{{ asset('public/images/header-logo/goa-govt-logo.png') }}" alt="image" class="lap-view">
                <img src="{{ asset('public/images/header-logo/mib.png') }}" alt="image"
                    style="width: 20%; height: 88px;" class="Mobile-view">
                <a href="https://films.wavesbazaar.com/" target="_blank">
                    <img src="{{ asset('public/images/header-logo/WavesFilmBazaar.png') }}" alt="image"
                        height="120px" width="120px">
                </a>
                <img src="{{ asset('public/images/header-logo/esg-logo.png') }}" alt="image" class="Mobile-view">
                <img src="{{ asset('public/images/header-logo/GOG.png') }}" alt="image" style="width:9%"
                    class="Mobile-view">
                <img src="{{ asset('public/images/header-logo/Svayam.png') }}" alt="image" style="width:20%"
                    class="Mobile-view">
            </div>

            <div class="row mt-4 phone-text">
                <div class="col-md-3 col-sm-3">
                    <a href=" https://play.google.com/store/apps/details?id=eu.datakal.iffigoa" target="_blank">
                        <img src="{{ asset('public/images/g-play.png') }}" alt="image" style="height: 43px;">
                    </a>
                    <a href="https://apps.apple.com/in/app/iffi-goa/id1596375704" target="_blank">
                        <img src="{{ asset('public/images/g-app.png') }}" alt="image" style="height: 43px;">
                    </a>
                </div>

                {{-- <div class="col-md-3 col-sm-3">
                    <ul class="text-highlight">
                        <li>
                            <a href="https://apps.apple.com/in/app/iffi-goa/id1596375704" target="_blank">
                                <img src="{{ asset('public/images/g-app.png') }}" alt="image" style="width:20%"
                                    class="Mobile-view">
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <ul class="text-highlight">
                        <li>
                            <a href=" https://play.google.com/store/apps/details?id=eu.datakal.iffigoa" target="_blank">
                                <img src="{{ asset('public/images/g-play.png') }}" alt="image" style="width:20%"
                                    class="Mobile-view">
                            </a>
                        </li>
                    </ul>
                </div> --}}

                {{-- <div class="col-md-3 col-sm-3">
                    <h4>Indian Panorama</h4>
                    <ul class="text-highlight">
                        <li><a href="https://iffigoa.org/festival/indian-paranoma" class="cus-menuP-link"
                                target="_blank">View your entry 2025</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h4>Web Series</h4>
                    <ul class="text-highlight">
                        <li><a href="https://iffigoa.org/festival/web-series" target="_blank">View your entry 2025</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h4>Creative Minds Of Tomorrow (CMOT)</h4>
                    <ul class="text-highlight">
                        <li>
                            <a href="https://iffigoa.org/festival/creative-mind-tomorrow" class="cus-menuP-link"
                                target="_blank">View your entry</a>
                        </li>
                    </ul>
                </div> --}}
            </div>
        </div>
    </div>

    <div class="row ">
        <div class=" text-center quick-link">
            <ul class="phone-text">
                <li>
                    <a href="{{ route('about-iffi') }}" class="cus-menuP-link">About IFFI</a>
                </li>
                <li>
                    <a href="https://youtu.be/yRamd6jVCes?si=jAFclk9vYGgRCNhu" target="_blank" class="cus-menuP-link">
                        Glimpses of IFFI 2025
                    </a>
                </li>
                <li>
                    <a href="{{ route('festival-venue') }}" class="cus-menuP-link">Festival
                        Venue</a>
                </li>
                <li>
                    <a href="{{ route('goa-tourist-places') }}" class="cus-menuP-link">
                        Goa Tourist Places
                    </a>
                </li>
                <li> <a href="{{ route('connectivity') }}" class="cus-menuP-link">Connectivity</a></li>
                <li>
                    <a href="{{ route('contact-us') }}" class="cus-menuP-link">Contact Us</a>
                </li>
                <li> <a href="{{ route('faq') }}" class="cus-menuP-link">FAQ's</a></li>
                <li><a href="{{ route('press-release') }}">Press Release</a></li>
                <li> <a href="{{ route('media.gallery.byYear', ['year' => '2024']) }}">Gallery</a></li>
                <li> <a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
                <li> <a href="{{ route('archive') }}">Archive</a></li>
            </ul>
        </div>
    </div>

    <div class="f-foot row">
        <div class="social-bar">
            <a href="https://www.facebook.com/IFFIGoa/" target="_blank">
                <img src="{{ asset('public/images/facebook-round.svg') }}" alt="image">
            </a>
            <a href="https://x.com/iffigoa" target="_blank">
                <img src="{{ asset('public/images/X-social.svg') }}" alt="image">
            </a>
            <a href="https://www.instagram.com/iffigoa/" target="_blank">
                <img src="{{ asset('public/images/Insta.svg') }}" alt="image">
            </a>
        </div>
        <div class="d-flex flex-column text-center justify-content-center f-foot-copyright">
            <p class="mb-0">Copyright ©
                <script>
                    document.write(new Date().getFullYear())
                </script>
                IFFI All Rights Reserved.
            </p>
        </div>
    </div>
</footer>

@include('layouts.cubes', [
    'cubes' => app(\App\Http\Controllers\CommonController::class)->getAllCubes(),
])

<!-- Footer ends  -->
{{-- @livewireScripts --}}
</body>

<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v15.0">
</script>
<script async src="//www.instagram.com/embed.js"></script>
<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

<script src="{{ asset('public/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>

<script type="text/javascript" src="{{ asset('public/js/custom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.10.0/js/lightgallery-all.min.js"></script>

<script>
    $(document).ready(function() {
        $("#lightgallery").lightGallery({
            selector: 'a',
            thumbnail: true
        });
    });
</script>

<script defer>
    window.onscroll = function() {
        var menu = document.getElementById('menu');
        if (window.scrollY > 100) { // Change background after scrolling 100px
            menu.style.backgroundColor =
                'transprant'; // Dark background color
        } else {
            menu.style.backgroundColor =
                'transprant'; // Transparent when at the top
        }
    };

    window.addEventListener('scroll', function() {
        const menu = document.getElementById('menu');
        const headerHeight = menu.offsetHeight; // Get the height of the header

        if (window.scrollY > headerHeight) {
            menu.classList.add('nav-scrolled');
        } else {
            menu.classList.remove('nav-scrolled');
        }
    });
</script>

<script defer>
    $(document).ready(function() {
        // Function to get a cookie by name
        function getCookie(name) {
            let cookieArr = document.cookie.split(";");
            for (let i = 0; i < cookieArr.length; i++) {
                let cookiePair = cookieArr[i].split("=");
                if (name == cookiePair[0].trim()) {
                    return decodeURIComponent(cookiePair[1]);
                }
            }
            return null;
        }

        // Function to set a cookie
        function setCookie(name, value, days) {
            let date = new Date();
            date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
            document.cookie = name + "=" + encodeURIComponent(value) + "; expires=" + date.toUTCString() +
                "; path=/";
        }

        // Check if the 'modalShown' cookie is set
        if (!getCookie('modalShown')) {
            // Show the modal
            $("#update_btn").modal("show");

            // Set a timeout to hide the modal after 10 seconds
            setTimeout(() => {
                $("#update_btn").modal("hide");
            }, 10000);

            // Set the 'modalShown' cookie to expire in 1 day
            setCookie('modalShown', 'true', 1);
        }
    });
</script>
{{-- Newly added  start --}}
<script defer  type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Organization",
        "name": "International Film Festival of India (IFFI)",
        "url": "https://iffigoa.org",
        "logo": "https://iffigoa.org/logo.png",
        "sameAs": [
            "https://www.facebook.com/iffigoa",
            "https://twitter.com/iffigoa",
            "https://www.instagram.com/iffigoa"
        ],
        "contactPoint": {
            "@type": "ContactPoint",
            "email": "iffigoa@nfdcindia.com",
            "contactType": "Customer Service",
            "areaServed": "IN",
            "availableLanguage": "English"
        },
        "address": {
            "@type": "PostalAddress",
            "streetAddress": "Entertainment Society of Goa Maquinez Palace Complex",
            "addressLocality": "Dayanand Bandodkar Marg, Campal Panaji",
            "addressRegion": "Goa",
            "postalCode": "403001",
            "addressCountry": "IN"
        }
    }
</script>

<script defer  type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "Event",
        "name": "International Film Festival of India 2025",
        "startDate": "2025-11-20T00:00:00Z",
        "endDate": "2025-11-30T23:59:59Z",
        "location": {
            "@type": "Place",
            "name": "Goa, India",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "Entertainment Society of Goa Maquinez Palace Complex, Dayanand Bandodkar Marg, Campal Panaji, GA 403001",
                "addressLocality": "Goa",
                "addressCountry": "IN"
            }
        },
        "performer": {
            "@type": "Organization",
            "name": "IFFI Organizers"
        },
        "description": "The International Film Festival of India showcases global cinema with screenings, workshops, and more.",
        "image": "https://iffigoa.org/public/images/iffi.svg",
        "offers": {
            "@type": "Offer",
            "url": "https://iffigoa.org",
            "priceCurrency": "INR",
            "price": "Varies"
        }
    }
</script>

<script defer  type="application/ld+json">
    {
        "@context": "https://schema.org",
        "@type": "WebPage",
        "name": "International Film Festival of India (IFFI) 2025",
        "url": "https://iffigoa.org",
        "description": "Official website of the International Film Festival of India (IFFI), showcasing global cinema, events, and news.",
        "mainEntityOfPage": "https://iffigoa.org",
        "breadcrumb": {
            "@type": "BreadcrumbList",
            "itemListElement": [{
                "@type": "ListItem",
                "position": 1,
                "name": "Home",
                "item": "https://iffigoa.org"
            }]
        },
        "publisher": {
            "@type": "Organization",
            "name": "IFFI Goa"
        }
    }
</script>

<script defer type="text/javascript">
    $(document).ready(function() {
        var owl = $('.owl-carousel-popup');

        owl.owlCarousel({
            loop: true, // ✅ Enable infinite loop
            margin: 10,
            responsiveClass: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            responsive: {
                0: {
                    items: 1,
                    nav: true,
                    dots: false,
                },
                600: {
                    items: 2,
                    nav: false,
                    dots: false,
                },
                1000: {
                    items: 2,
                    nav: true,
                    dots: false,
                }
            }
        });
    });
</script>

</body>

</html>
