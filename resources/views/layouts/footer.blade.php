<footer class="container-fluid">
    <div class="col-lg-12 ">
        <div class="container">
            <div class="footer-logo">
                <img src="{{ asset('public/images/f-logoOne.svg') }}" alt="image" class="lap-view">
                <img src="{{ asset('public/images/goa-govt-logo.png') }}" alt="image" class="lap-view">
                <img src="{{ asset('public/images/mib.png') }}" alt="image" style="width: 20%; height: 88px;"
                    class="Mobile-view">
                <a href="https://filmbazaarindia.com/" target="_blank">
                    <img src="{{ asset('public/images/Film-Bazar.png') }}" alt="image">
                </a>
                <img src="{{ asset('public/images/esg-logo.png') }}" alt="image" class="Mobile-view">
                <img src="{{ asset('public/images/GOG.png') }}" alt="image" style="width:10%" class="Mobile-view">
            </div>
            {{-- <div class=" ">
                <div class=" text-center quick-link">
                    <ul>
                        <li>
                            <a href="{{ route('about-iffi') }}" class="cus-menuP-link">About IFFI</a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=lsjuObbzDyM" target="_blank"
                                class="cus-menuP-link">
                                Glimpses of IFFI 2023
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('festival-venue') }}" target="_blank" class="cus-menuP-link">Festival
                                Venue</a>
                        </li>
                        <li>
                            <a href="{{ route('goa-tourist-places') }}" target="_blank" class="cus-menuP-link">
                                Goa Tourist Places
                            </a>
                        </li>
                        <li> <a href="{{ route('connectivity') }}" class="cus-menuP-link">Connectivity</a></li>
                        <li>
                            <a href="{{ route('contact-us') }}" class="cus-menuP-link">Contact Us</a>
                        </li>
                        <li> <a href="{{ route('faq') }}" class="cus-menuP-link">FAQ's</a></li>
                        <li><a href="{{ route('press-release') }}" target="_blank">Press Release</a></li>
                        <li> <a href="{{ route('gallery') }}" target="_blank">Gallary</a></li>
                        <li> <a href="https://www.iffigoa.org/privacy-policy">Privacy Policy</a></li>
                    </ul>
                </div>
            </div> --}}
            <div class="row mt-4 phone-text">
                <div class="col-md-3 col-sm-3">
                    <h4>Indian Panorama</h4>
                    <ul class="text-highlight">
                        <li><a href="https://iffigoa.org/festival/indian-paranoma" class="cus-menuP-link"
                                target="_blank">View your entry</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h4>Web Series</h4>
                    <ul class="text-highlight">
                        <li><a href="https://iffigoa.org/festival/web-series" target="_blank">View your entry</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h4>Indian Debut Director Award</h4>
                    <ul class="text-highlight">
                        <li><a href="https://iffigoa.org/festival/indian-debut-director" class="cus-menuP-link"
                                target="_blank">View your entry</a></li>
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
                </div>
            </div>
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
                    <a href="https://www.youtube.com/watch?v=lsjuObbzDyM" target="_blank" class="cus-menuP-link">
                        Glimpses of IFFI 2023
                    </a>
                </li>
                <li>
                    <a href="{{ route('festival-venue') }}" class="cus-menuP-link">Festival
                        Venue</a>
                </li>
                <li>
                    <a href="{{ route('goa-tourist-places') }}"class="cus-menuP-link">
                        Goa Tourist Places
                    </a>
                </li>
                <li> <a href="{{ route('connectivity') }}" class="cus-menuP-link">Connectivity</a></li>
                <li>
                    <a href="{{ route('contact-us') }}" class="cus-menuP-link">Contact Us</a>
                </li>
                <li> <a href="{{ route('faq') }}" class="cus-menuP-link">FAQ's</a></li>
                <li><a href="{{ route('press-release') }}">Press Release</a></li>
                <li> <a href="{{ route('gallery') }}">Gallery</a></li>
                <li> <a href="{{ route('privacy-policy') }}">Privacy Policy</a></li>
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
            <p class="mb-0">Copyright © 2024 IFFI All Rights Reserved.</p>
        </div>
    </div>
</footer>
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

<script>
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
{{-- <script>
    document.addEventListener("DOMContentLoaded", () => {
        const notifications = document.querySelectorAll(".notification-card");

        notifications.forEach((card, index) => {
            setTimeout(() => {
                card.classList.add("show");
            }, index * 1000); // Adjust the delay as needed
        });
    });
</script> --}}

</body>

</html>
