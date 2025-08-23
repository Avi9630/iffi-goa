// Combine these local scripts
require('./jquery-3.6.0.min.js');
require('./owl.carousel.min.js');
require('./bootstrap.min.js');

// Include your custom script
require('./custom.js');

// Owl carousel config
$(document).ready(function () {
    var owl = $('.owl-carousel-popup');
    owl.owlCarousel({
        loop: true,
        margin: 10,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: false,
        responsive: {
            0: { items: 1, nav: true, dots: false },
            600: { items: 2, nav: false, dots: false },
            1000: { items: 2, nav: true, dots: false }
        }
    });

    // Cookie modal logic
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

    function setCookie(name, value, days) {
        let date = new Date();
        date.setTime(date.getTime() + (days * 24 * 60 * 60 * 1000));
        document.cookie = name + "=" + encodeURIComponent(value) + "; expires=" + date.toUTCString() + "; path=/";
    }

    if (!getCookie('modalShown')) {
        $("#update_btn").modal("show");
        setTimeout(() => { $("#update_btn").modal("hide"); }, 10000);
        setCookie('modalShown', 'true', 1);
    }

    // Scroll logic
    window.addEventListener('scroll', function () {
        const menu = document.getElementById('menu');
        const headerHeight = menu.offsetHeight;
        if (window.scrollY > headerHeight) {
            menu.classList.add('nav-scrolled');
        } else {
            menu.classList.remove('nav-scrolled');
        }
    });
});
