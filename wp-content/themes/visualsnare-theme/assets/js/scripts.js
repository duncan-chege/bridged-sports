document.addEventListener('DOMContentLoaded', function () {
    var hero_splide = new Splide('.home.splide', {
        type: 'fade',
        rewind: true,
        pagination: false,
        arrows: false,
        autoplay: true,
        interval: 3000,
        pauseOnHover: false,
        pauseOnFocus: false,
    });
    hero_splide.mount();

    var navbar = document.querySelector(".navbar");
    window.addEventListener("scroll", function() {
        if (window.scrollY > 50) {
            navbar.classList.add("navbar-scrolled");
        } else {
            navbar.classList.remove("navbar-scrolled");
        }
    });
    
    var testimonial_splide = new Splide('.testimonials .splide', {
        type: "loop",
        pagination: false
     });
     testimonial_splide.mount();
});