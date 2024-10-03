<footer class="container-fluid">
    <div class="col-lg-12 ">
        <div class="container">
            <div class="footer-logo">
                <img src="{{ asset('public/images/f-logoOne.svg') }}" alt="">
                <img src="{{ asset('public/images/f-logoTwo.svg') }}" alt="">
                <a href="https://filmbazaarindia.com/" target="_blank">
                    <img src="{{ asset('public/images/Film-Bazar.png') }}" alt="">
                </a>
            </div>
            <div class="row">
                <div class="col-md-3 col-sm-3">
                    <h4>Indian Panorama</h4>
                    <ul class="text-highlight">
                        <li><a href="https://iffigoa.org/festival/indian-paranoma" class="cus-menuP-link"
                                target="_blank">View Your Entry</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h4>Web Series</h4>
                    <ul class="text-highlight">
                        <li><a href="#">View Your Entry</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h4>Indian Debut Director Award</h4>
                    <ul class="text-highlight">
                        <li><a href="https://iffigoa.org/festival/indian-debut-director" class="cus-menuP-link"
                                target="_blank">Submit your entry</a></li>
                    </ul>
                </div>
                <div class="col-md-3 col-sm-3">
                    <h4>Creative Minds Of Tomorrow (CMOT)</h4>
                    <ul class="text-highlight">
                        <li>
                            <a href="https://iffigoa.org/festival/creative-mind-tomorrow" class="cus-menuP-link"
                                target="_blank">Submit your entry</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    </div>
    <div class="row ">
        <div class=" text-center quick-link">
            <ul>
                <li> <a href="https://www.iffigoa.org/about-iffi" class="cus-menuP-link">About IFFI</a></li>
                <li> <a href="https://www.youtube.com/watch?v=lsjuObbzDyM" target="_blank"
                        class="cus-menuP-link">Glimpses
                        of IFFI 2023</a>
                </li>
                <li> <a href="https://www.iffigoa.org/festival_venue" target="_blank" class="cus-menuP-link">Festival
                        Venue</a>
                </li>
                <li> <a href="https://www.iffigoa.org/goa-tourist-places" target="_blank" class="cus-menuP-link">Goa
                        Tourist
                        Places</a>
                </li>
                <li> <a href="https://www.iffigoa.org/connectivity" class="cus-menuP-link">Connectivity</a></li>
                <li><a href="https://www.iffigoa.org/contact-us" class="cus-menuP-link">Contact
                        Us</a>
                </li>
                <li> <a href="https://www.iffigoa.org/faq" class="cus-menuP-link">FAQ</a></li>
                <li><a href="https://www.iffigoa.org/press-release" target="_blank">Press Release</a></li>
                <li> <a href="https://iffigoa.org/gallery" target="_blank">Media</a></li>
                <li> <a href="https://www.iffigoa.org/privacy-policy">Privacy Policy</a></li>
            </ul>
        </div>
    </div>
    <div class="f-foot row">
        <div class="social-bar">
            <a href="https://www.facebook.com/IFFIGoa/" target="_blank">
                <img src="{{ asset('public/images/facebook-round.svg') }}" alt="">
            </a>
            <a href="https://x.com/iffigoa" target="_blank">
                <img src="{{ asset('public/images/X-social.svg') }}" alt="">
            </a>
            <a href="https://www.instagram.com/iffigoa/" target="_blank">
                <img src="{{ asset('public/images/Insta.svg') }}" alt="">
            </a>
        </div>
        <div class="d-flex flex-column text-center justify-content-center f-foot-copyright">
            <p class="mb-0">Copyright © 2024 IFFI All Rights Reserved.</p>
        </div>
    </div>
</footer>
<!-- Footer ends  -->
@livewireScripts
</body>
<script src="{{ asset('public/js/jquery-3.6.0.min.js') }}"></script>
<script src="{{ asset('public/js/owl.carousel.min.js') }}"></script>
<script src="{{ asset('public/js/bootstrap.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('public/js/custom.js') }}"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/lightgallery/1.10.0/js/lightgallery-all.min.js"></script>
<script>
    $(document).ready(function() {
        $("#lightgallery").lightGallery();
    });
</script>
</body>

</html>
