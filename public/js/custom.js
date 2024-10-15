// Get the text element
const textElement = document.getElementById("text-resize");

// Define initial size
const initialFontSize = parseFloat(
    window.getComputedStyle(textElement).fontSize
);

function increaseTextSize() {
    // Get current font size and increase it
    let currentSize = parseFloat(window.getComputedStyle(textElement).fontSize);
    textElement.style.fontSize = currentSize + 2 + "px"; // Increase by 2px
}

function decreaseTextSize() {
    // Get current font size and decrease it
    let currentSize = parseFloat(window.getComputedStyle(textElement).fontSize);
    if (currentSize > 6) {
        // Prevent text from getting too small
        textElement.style.fontSize = currentSize - 2 + "px"; // Decrease by 2px
    }
}

function resetTextSize() {
    // Reset to the initial size
    textElement.style.fontSize = initialFontSize + "px";
}

// script.js
document.addEventListener("DOMContentLoaded", function () {
    const navbar = document.getElementById("navbar");
    const navbarHeight = navbar.offsetHeight;

    window.addEventListener("scroll", function () {
        if (window.scrollY > navbarHeight) {
            navbar.classList.add("navbar-scrolled");
        } else {
            navbar.classList.remove("navbar-scrolled");
        }
    });
});

document.getElementById("searchButton").addEventListener("click", function () {
    var input = document.getElementById("searchInput");
    input.classList.toggle("expanded");
    input.focus();
});

document.getElementById("searchInput").addEventListener("blur", function () {
    if (this.value === "") {
        this.classList.remove("expanded");
    }
});

$(document).ready(function () {
    $(".owl-carousel").owlCarousel({
        items: 3, // Number of items you want to display at once
        loop: true, // Loop through the items
        margin: 10, // Margin between items
        nav: true, // Show navigation arrows
        dots: false, // Show pagination dots
        responsive: {
            0: {
                items: 1, // Number of items at viewport width 0px
            },
            600: {
                items: 2, // Number of items at viewport width 600px
            },
            1000: {
                items: 4, // Number of items at viewport width 1000px
            },
        },
    });
});

$(document).ready(function () {
    $(".owl-carousel-sponsor").owlCarousel({
        items: 6, // Number of items you want to display at once
        loop: true, // Loop through the items
        // margin: 10, // Margin between items
        //nav: true, // Show navigation arrows
        //dots: false, // Show pagination dots
        
       dots: false, 
        autoplay: true,
        responsive: {
            0: {
                items: 1, // Number of items at viewport width 0px
            },
            600: {
                items: 2, // Number of items at viewport width 600px
            },
            1000: {
                items:8, // Number of items at viewport width 1000px
            },
        },
    });

    function reloadInstagramEmbed() {
        if (typeof instgrm !== "undefined") {
            instgrm.Embeds.process();
        } else {
            setTimeout(reloadInstagramEmbed, 1000); // Retry after 1 second
        }
    }

    window.addEventListener("load", reloadInstagramEmbed);
});


 window.addEventListener('scroll', function() {
        const targetElement = document.getElementById('start-animation');
        const elementToAnimate = document.querySelector('.animate-me');
        const targetPosition = targetElement.getBoundingClientRect().top;
        const windowHeight = window.innerHeight;

        if (targetPosition < windowHeight && elementToAnimate.classList.contains('hiddentext')) {
            elementToAnimate.classList.remove('hiddentext');
            typeText(elementToAnimate);
        }
    });

    function typeText(element) {
        const fullText = element.textContent; // Get the full text content from the HTML
        element.innerHTML = ''; // Clear the content initially
        let index = 0;
        const speed = 50; // Adjust typing speed (milliseconds)

        function type() {
            if (index < fullText.length) {
                if (isGradientText(index)) {
                    element.innerHTML += `<span class="gradient-text">${fullText.charAt(index)}</span>`;
                } else {
                    element.innerHTML += fullText.charAt(index);
                }
                index++;
                setTimeout(type, speed);
            }
        }

        function isGradientText(idx) {
            const gradientWords = ['9 days', '45,000', 'creating unforgettable memories'];
            for (let word of gradientWords) {
                if (idx >= fullText.indexOf(word) && idx < fullText.indexOf(word) + word.length) {
                    return true;
                }
            }
            return false;
        }

        type();
    }