$(window).on("load", function () {

    "use strict";

    /* ===================================
            Loading Timeout
     ====================================== */
    $('.side-menu').removeClass('hidden');

    setTimeout(function(){
        $('.loader-bg').fadeToggle();

    }, 1500);

});

document.addEventListener("DOMContentLoaded", function () {
    document.querySelectorAll(".scroll").forEach(link => {
        link.addEventListener("click", function (event) {
            let targetID = this.getAttribute("href"); // e.g., "#about" or "index.php#about"

            // If the user is NOT on index.php, redirect to index.php#target
            if (!window.location.pathname.includes("index.php") && targetID.startsWith("#")) {
                event.preventDefault(); // Prevent default anchor behavior
                window.location.href = "index.php" + targetID; // Redirect to index.php#about
                return;
            }

            // If already on index.php, smooth scroll instead of reloading
            let sectionID = targetID.replace("index.php", ""); // Remove index.php if present
            let target = document.querySelector(sectionID);

            if (target) {
                event.preventDefault();
                let targetPosition = target.getBoundingClientRect().top + window.scrollY - 40;
                window.scrollTo({
                    top: targetPosition,
                    behavior: "smooth"
                });

                // Update the URL without reloading
                history.pushState(null, null, targetID);
            }
        });
    });
});




jQuery(function ($) {

    "use strict";
    /* ===================================
          Header appear
    ====================================== */
    $(window).on('scroll', function () {
        if ($(this).scrollTop() > 260) { // Set position from top to add class
            $('.inner-header').addClass('header-appear');
        } else {
            $('.inner-header').removeClass('header-appear');
        }
    });

//     /* ===================================
//         Nav Scroll
//    ====================================== */
//     $(".scroll").on("click", function(event){
//         event.preventDefault();
//         $('html,body').animate({
//             scrollTop: $(this.hash).offset().top - 40}, 800);
//     });


    

    /* ===================================
        WOW Animation
    ====================================== */
    if ($(window).width() > 991) {
        var wow = new WOW({
            boxClass: 'wow',
            animateClass: 'animated',
            offset: 0,
            mobile: false,
            live: true
        });
        new WOW().init();
    }

    /* =====================================
        Parallax
    ====================================== */
    if ($(window).width() > 992) {
        $(".parallax").parallaxie({
            speed: 0.55,
            offset: 0,
        });
    }

    /* ===================================
         Counter
    ====================================== */
    $('.count').each(function () {
        $(this).appear(function () {
            $(this).prop('Counter', 0).animate({
                Counter: $(this).text()
            }, {
                duration: 5000,
                easing: 'swing',
                step: function (now) {
                    $(this).text(Math.ceil(now));
                }
            });
        });
    });

    /* ===================================
       Side Menu
   ====================================== */
    if ($("#sidemenu_toggle").length) {
        $("#sidemenu_toggle").on("click", function () {
            $(".side-menu").removeClass("side-menu-opacity");
            $(".pushwrap").toggleClass("active");
            $(".side-menu").addClass("side-menu-active"), $("#close_side_menu").fadeIn(700)
        }), $("#close_side_menu").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $(this).fadeOut(200), $(".pushwrap").removeClass("active");
            setTimeout(function(){
                $(".side-menu").addClass("side-menu-opacity");
            }, 500);
        }), $(".side-nav .navbar-nav .nav-link").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active");
            setTimeout(function(){
                $(".side-menu").addClass("side-menu-opacity");
            }, 500);
        }), $("#btn_sideNavClose").on("click", function () {
            $(".side-menu").removeClass("side-menu-active"), $("#close_side_menu").fadeOut(200), $(".pushwrap").removeClass("active");
            setTimeout(function(){
                $(".side-menu").addClass("side-menu-opacity");
            }, 500);
        });
    }

    var swiper = new Swiper('.swiper-container', {
        effect: 'fade',
        speed: 1000,
    fadeEffect: {
        crossFade: true
    },
    loop: true,
    autoplay: {
        delay: 5000,
        disableOnInteraction: false
    },
        pagination: {
            el: '.swiper-pagination',
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + (index + 1) + '</span>';
            },
        },
    });

    /*=====================================
        Reviews Carousel
    ======================================*/
    $('.testimonial-box').owlCarousel({
        loop: true,
        margin: 20,
        slideSpeed: 2000,
        slideTransition: 'linear',
        nav: false,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: true,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 1
            },
            1000: {
                items: 1
            },
        }
    });

});