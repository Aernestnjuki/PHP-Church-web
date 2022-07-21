$(document).ready(function() {
    $('.welcome-section .owl-carousel').owlCarousel({
        loop: true,
        autoplay: true,
        dots: false,
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 3
            },
            1000:{
                items: 4
            }
        }
    });
});

