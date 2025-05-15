<!-- Start Footer Section -->
<footer class="footer">
    <div class="container">
        <div class="row align-items-center">
            <!--Social-->
            <div class="col-12 text-center">
                <div class="footer-social">
                    <ul class="list-unstyled social-icons social-icons-simple">
                        <li><a class="social-icon wow fadeInUp" href="#"><i class="fab fa-facebook-f" aria-hidden="true"></i> </a> </li>
                        <li><a class="social-icon wow fadeInUp" href="#"><i class="fab fa-x-twitter" aria-hidden="true"></i> </a> </li>
                        <!-- <li><a class="social-icon wow fadeInUp" href="#"><i class="fab fa-google-plus-g" aria-hidden="true"></i> </a> </li> -->
                        <!-- <li><a class="social-icon wow fadeInUp" href="#"><i class="fab fa-linkedin-in" aria-hidden="true"></i> </a> </li> -->
                        <li><a class="social-icon wow fadeInUp" href="#"><i class="fab fa-instagram" aria-hidden="true"></i> </a> </li>
                        <li><a class="social-icon wow fadeInUp" href="#"><i class="fab fa-pinterest-p" aria-hidden="true"></i> </a> </li>
                    </ul>
                </div>
                <!--Text-->
                <p class="company-about fadeIn text-white">&copy; <?= date("Y") ?> sabhDiamonds | All Rights Reserved</p>
            </div>
        </div>
    </div>
</footer>
<!-- End Footer Section -->

<!-- JavaScript -->
<script src="assets/js/bundle.min.js"></script>
<!-- Plugin Js -->
<script src="assets/js/jquery.appear.js"></script>
<script src="assets/js/owl.carousel.min.js"></script>
<script src="assets/js/wow.min.js"></script>
<script src="assets/js/parallaxie.min.js"></script>
<script src="assets/js/jquery.fancybox.min.js"></script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyB4fusEY9kSwNHgtK8KOgyoTsyP5Tb2NXo"></script>
<script src="assets/js/map.js"></script>

<!-- CUSTOM JS -->
<script src="assets/js/contact_us.js"></script>
<script src="assets/js/swiper.min.js"></script>
<script src="assets/js/script.js"></script>

<script>
    const gallery = document.getElementById('gallery');
    const lightbox = document.getElementById('lightbox');
    const lightboxImg = document.getElementById('lightbox-img');
    const lightboxInfo = document.getElementById('lightbox-info');

    // Prevent image drag behavior
    gallery.querySelectorAll('.gallery-image').forEach(img => {
        img.addEventListener('dragstart', e => e.preventDefault());
    });

    // Auto-scroll with infinite loop
    let scrollStep = 280;
    let autoScroll;
    let isScrolling = false;

    function startAutoScroll() {
        autoScroll = setInterval(() => {
            // Check if we're near the end (within one item width)
            if ((gallery.scrollLeft + gallery.clientWidth + scrollStep) >= gallery.scrollWidth) {
                // If we're at the end, prepare for seamless loop
                if (!isScrolling) {
                    isScrolling = true;

                    // First complete the scroll to the end with animation
                    gallery.scrollTo({
                        left: gallery.scrollWidth - gallery.clientWidth,
                        behavior: 'smooth'
                    });

                    // Then after the animation completes, instantly jump to start
                    setTimeout(() => {
                        gallery.scrollTo({
                            left: 0,
                            behavior: 'auto' // Instant jump, no animation
                        });
                        isScrolling = false;
                    }, 500); // Timed to match the smooth scroll duration
                }
            } else {
                // Normal scrolling when not at the end
                if (!isScrolling) {
                    gallery.scrollBy({
                        left: scrollStep,
                        behavior: 'smooth'
                    });
                }
            }
        }, 3000);
    }

    function stopAutoScroll() {
        clearInterval(autoScroll);
    }

    startAutoScroll();

    ['mousedown', 'touchstart'].forEach(evt =>
        gallery.addEventListener(evt, stopAutoScroll)
    );
    ['mouseup', 'touchend'].forEach(evt =>
        gallery.addEventListener(evt, startAutoScroll)
    );

    // Enhanced Lightbox with Info
    function openLightbox(img) {
        const infoElement = img.closest('.gallery-item').querySelector('.diamond-info').cloneNode(true);
        lightboxImg.src = img.src;
        lightboxInfo.innerHTML = '';
        lightboxInfo.appendChild(infoElement);

        lightbox.style.display = 'flex';
        setTimeout(() => {
            lightbox.classList.add('active');
        }, 50);
        stopAutoScroll();
    }

    function closeLightbox() {
        lightbox.classList.remove('active');
        setTimeout(() => {
            lightbox.style.display = 'none';
        }, 300);
        startAutoScroll();
    }

    // Click handler that checks for dragging
    function handleClick(img) {
        if (!isDragging) openLightbox(img);
    }

    // Mouse drag-to-scroll
    let isDown = false;
    let startX;
    let scrollLeft;
    let isDragging = false;

    gallery.addEventListener('mousedown', (e) => {
        isDown = true;
        startX = e.pageX - gallery.offsetLeft;
        scrollLeft = gallery.scrollLeft;
        isDragging = false;
    });

    gallery.addEventListener('mouseleave', () => {
        isDown = false;
    });

    gallery.addEventListener('mouseup', () => {
        isDown = false;
        setTimeout(() => isDragging = false, 0); // Reset
    });

    gallery.addEventListener('mousemove', (e) => {
        if (!isDown) return;
        e.preventDefault();
        const x = e.pageX - gallery.offsetLeft;
        const walk = (x - startX) * 1.5;
        if (Math.abs(walk) > 5) isDragging = true;
        gallery.scrollLeft = scrollLeft - walk;
    });

    // Pause auto-scroll when hovering images
    gallery.querySelectorAll('.gallery-item').forEach(item => {
        item.addEventListener('mouseenter', stopAutoScroll);
        item.addEventListener('mouseleave', startAutoScroll);
    });

    // Click outside lightbox to close
    lightbox.addEventListener('click', function(e) {
        if (e.target === lightbox) {
            closeLightbox();
        }
    });
</script>

<script>
    // You may need to add this if you don't already have FontAwesome in your project
    document.addEventListener('DOMContentLoaded', function() {
        const fontAwesome = document.createElement('link');
        fontAwesome.rel = 'stylesheet';
        fontAwesome.href = 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css';
        document.head.appendChild(fontAwesome);

        // Add Playfair Display font if needed
        const playfairFont = document.createElement('link');
        playfairFont.rel = 'stylesheet';
        playfairFont.href = 'https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap';
        document.head.appendChild(playfairFont);
    });
</script>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        // Initialize animation on scroll
        const saabhFeatureCards = document.querySelectorAll('.saabh_feature_card');

        // Initial state - set opacity to 0 and translateY
        saabhFeatureCards.forEach((card, index) => {
            card.style.opacity = "0";
            card.style.transform = "translateY(30px)";
            card.style.transition = "opacity 0.6s ease, transform 0.6s ease";
            card.style.transitionDelay = (index * 0.15) + "s";
        });

        // Animation on scroll function
        function animateOnScroll() {
            const scrollTop = window.pageYOffset || document.documentElement.scrollTop;
            const windowHeight = window.innerHeight;

            saabhFeatureCards.forEach(card => {
                const cardTop = card.getBoundingClientRect().top + scrollTop;

                if (scrollTop + windowHeight > cardTop + 100) {
                    card.style.opacity = "1";
                    card.style.transform = "translateY(0)";
                }
            });
        }

        // Run animation on page load
        setTimeout(animateOnScroll, 300);

        // Run animation on scroll
        window.addEventListener('scroll', animateOnScroll);

        // Diamond shine effect
        const diamondIcon = document.querySelector('.saabh_diamond_icon');

        function animateDiamond() {
            diamondIcon.style.transition = "transform 0.3s ease, opacity 0.3s ease";
            diamondIcon.style.transform = "translate(-50%, -50%) scale(1.3)";
            diamondIcon.style.opacity = "0.7";

            setTimeout(() => {
                diamondIcon.style.transform = "translate(-50%, -50%) scale(1)";
                diamondIcon.style.opacity = "1";
            }, 300);
        }

        // Pulse the diamond icon every 3 seconds
        setInterval(animateDiamond, 3000);

        // Add hover effect to feature cards for mobile devices
        if (window.innerWidth < 768) {
            saabhFeatureCards.forEach(card => {
                card.addEventListener('touchstart', function() {
                    this.classList.add('saabh_touch_hover');

                    // Remove the class after animation completes
                    setTimeout(() => {
                        this.classList.remove('saabh_touch_hover');
                    }, 1000);
                });
            });
        }
    });
</script>
</body>

</html>