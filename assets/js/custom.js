(function ($) {
    "use strict";

    $(document).ready(function () {

        /*---------------------------------------------------
            Portfolio Filter
        ----------------------------------------------------*/
        

        /*---------------------------------------------------
            Slider Carousel
        ----------------------------------------------------*/
        var owl = $('.slides.owl-carousel');
        owl.owlCarousel({
            loop: true,
            navText: ['<i class="icofont icofont-simple-left"></i>', '<i class="icofont icofont-simple-right"></i>'],
            nav: true,
            autoplay: true,
            autoplayTimeout: 10000,
            animateOut: 'fadeOut',
            animateIn: 'fadeIn',
            smartSpeed: 450,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                991: {
                    items: 1
                },
                1200: {
                    items: 1
                },
                1920: {
                    items: 1
                }
            }
        });

        //Slider Caption Animation
        owl.on('changed.owl.carousel', function (event) {
            var item = event.item.index - 2; // Position of the current item
            $('.caption-content h1, .caption-content h3').removeClass('animated fadeInDown');
            $('.large-btn').removeClass('animated fadeInUp');
            $('.owl-item').not('.cloned').eq(item).find('.caption-content h1, .caption-content h3').addClass('animated fadeInDown');
            $('.owl-item').not('.cloned').eq(item).find('.large-btn').addClass('animated fadeInUp');
        });

        /*---------------------------------------------------
            Portfolio Image PopUp
        ----------------------------------------------------*/
        $('.popup-img').magnificPopup({
            type: 'image',
            gallery: {
                enabled: true
            }
        });

        /*---------------------------------------------------
            Counter
        ----------------------------------------------------*/
        $('.counter-single h2').counterUp({
            delay: 10, // the delay time in ms
            time: 1000 // the speed time in ms
        });

        /*---------------------------------------------------
            Testimonial Carousel
        ----------------------------------------------------*/
        $('.testimonial-carousel.owl-carousel').owlCarousel({
            loop: true,
            responsive: {
                0: {
                    items: 1
                },
                768: {
                    items: 1
                },
                991: {
                    items: 1
                },
                1200: {
                    items: 1
                },
                1920: {
                    items: 1
                }
            }
        });

        /*---------------------------------------------------
            Partner Carousel
        ----------------------------------------------------*/
        $('.partner-carousel.owl-carousel').owlCarousel({
            loop: true,
            margin: 20,
            responsive: {
                0: {
                    items: 2
                },
                768: {
                    items: 3
                },
                991: {
                    items: 5
                },
                1200: {
                    items: 5
                },
                1920: {
                    items: 5
                }
            }
        });

        /*---------------------------------------------------
            Menu Active Color Highlight
        ----------------------------------------------------*/
        $(".navbar ul.nav li a").on("click", function () {
            $(".navbar ul.nav li a").removeClass("active");
            $(this).addClass("active");
        });
    
        /*---------------------------------------------------
            Ripple Effect
        ----------------------------------------------------*/
        $('.ripple').ripples({
            resolution: 512,
            dropRadius: 20,
            perturbance: 0.04
        });

        // Automatic drops
        setInterval(function () {
            var $el = $('.ripple');
            var x = Math.random() * $el.outerWidth();
            var y = Math.random() * $el.outerHeight();
            var dropRadius = 20;
            var strength = 0.04 + Math.random() * 0.04;

            $el.ripples('drop', x, y, dropRadius, strength);
        }, 400);

    });

    /*---------------------------------------------------
        Smooth Scroll
    ----------------------------------------------------*/
    $(document).on('click', 'a[href^="#"]', function (event) {
        event.preventDefault();
        $('html, body').animate({
            scrollTop: $($.attr(this, 'href')).offset().top
        }, 500);

    });

    /*---------------------------------------------------
        Window Scroll
    ----------------------------------------------------*/
    $(window).on('scroll', function () {

        /* Parallax Background
        ------------------------*/
        $('#parallax').scrolly({
            bgParallax: true
        });

        /* Click To Top Button
        ------------------------*/
        if ($(this).scrollTop() > 250) {
            $('#footer .click-to-top').fadeIn();
        } else {
            $('#footer .click-to-top').fadeOut();
        }

    });

    /*---------------------------------------------------
        Preloader
    ----------------------------------------------------*/
    $(window).on('load', function () {
        $('.preloader').fadeOut(500);

    });

}(jQuery));
