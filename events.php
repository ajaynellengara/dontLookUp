<?php include "main.php" ?>

<link rel="stylesheet" href="assets/css/pages.min.css?v=1.0.0">

<div id="pageWrapper" class="eventsPage">
    <section id="InnerBanner">
        <picture>
            <source rel="preload" srcset="assets/images/banner-events-1.jpg" media="(min-width:768px)"
                width="1920" height="1080">
            <img rel="preload" src="assets/images/banner-events-1.jpg" width="640" height="360"
                alt="course" fetchpriority="low" loading="lazy" decoding="async">
        </picture>
        <div class="container">
            <div class="cntWrap">
                <h1 class="mTxt">Events</h1>
                <h2 class="mHead">Experience Engaging Events
                    That Inspire and Connect</h2>
            </div>
        </div>
    </section>

    <section id="EventInfo">
        <div class="container">
            <div class="dFlx">
                <div class="lftSd">
                    <div class="secTle">Upcoming <br>
                        Events</div>
                </div>
                <div class="rgtSd">
                    <h5 class="secDisc">
                        Join our expertly curated events designed to inspire, educate, and foster connections. From workshops to networking sessions, each event offers invaluable insights and opportunities for personal and professional growth.
                    </h5>
                </div>
                <div class="fullSd">
                    <div class="eventFlx">
                        <div class="item">
                            <a href="events-1.php" class="eventBx" aria-label="events 2">
                                <div class="bxImg">
                                    <img src="assets/images/events1.png" width="576" height="376" loading="lazy" alt="event">
                                </div>
                                <div class="bxCnt">
                                    <div class="tle">Teen Super Globe</div>
                                    <div class="txt">Mr. & Miss Teen Super Globe is an esteemed international pageant that celebrates the charisma, talent, and leadership potential of teenagers from around the world.</div>
                                </div>
                            </a>
                        </div>
                        <div class="item">
                            <a href="events-2.php" class="eventBx" aria-label="events 2">
                                <div class="bxImg">
                                    <img src="assets/images/events2.png" width="576" height="376" loading="lazy" alt="event">
                                </div>
                                <div class="bxCnt">
                                    <div class="tle">JMI - Junior model international</div>
                                    <div class="txt">Junior Model International (JMI) is a prestigious global platform that celebrates young talent in the fashion and modeling industry. With participants from various countries..</div>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ExGallery">
        <div class="container">
            <div class="tleWrap center">
                <h6 class="mTxt">Capturing Moments</h6>
                <h4 class="mHd">Explore Our Event Gallery</h4>
            </div>
            <div class="swiper exGallerySlide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="assets/images/exGallery-og-1.jpg" data-fancybox="exGallery" class="exGalleryBx sm">
                            <img src="assets/images/exGallery-og-1.jpg" width="376" height="476" loading="lazy" alt="experise">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="assets/images/exGallery-og-1.jpg" data-fancybox="exGallery" class="exGalleryBx sm">
                            <img src="assets/images/exGallery-og-1.jpg" width="376" height="476" loading="lazy" alt="experise">
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="assets/images/exGallery-og-1.jpg" data-fancybox="exGallery" class="exGalleryBx">
                            <img src="assets/images/exGallery-og-1.jpg" width="376" height="476" loading="lazy" alt="experise">
                        </a>
                    </div>
                </div>
                <div class="swiper-button-prev c-swiper-button">
                    <img src="assets/images/icon-swiper-lft.svg" width="75" height="75" loading="lazy" alt="lft">
                </div>
                <div class="swiper-button-next c-swiper-button">
                    <img src="assets/images/icon-swiper-rgt.svg" width="75" height="75" loading="lazy" alt="lft">
                </div>
                <div class="swiper-pagination"></div>
            </div>
        </div>
    </section>

    <?php include "./includes/gateway.php" ?>

    <?php include "./includes/joinAcademy.php" ?>

</div>

<!-- SWIPER -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

<!-- FANCYBOX -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
    integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
    integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // GALLERY_SLIDE
        var exGallerySlide = new Swiper(".exGallerySlide", {
            slidesPerView: 1,
            loop: true,
            spaceBetween: 0,
            autoplay: {
                delay: 5000,
                disableOnInteraction: true,
            },
            autoplay: false,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev"
            },
        });
        // GALLERY_SLIDE
        var gallerySlide = new Swiper(".gallerySlide", {
            slidesPerView: 5,
            loop: true,
            spaceBetween: 0,
            autoplay: {
                delay: 1000,
                disableOnInteraction: true,
            },
        });
        // GATEWAY_SLIDE
        var gatewaySlide;

        function initSwiper() {
            if (window.innerWidth <= 768) {
                // Initialize Swiper if it hasn't been initialized yet
                if (!gatewaySlide) {
                    gatewaySlide = new Swiper(".gatewaySlide", {
                        slidesPerView: 2.5,
                        loop: $('.gatewaySlide .swiper-slide').length > 1,
                        spaceBetween: 10,
                        watchSlidesProgress: true,
                        centeredSlides: true,
                        roundLengths: true,
                        lazy: {
                            loadPrevNext: true,
                        },
                        autoplay: {
                            delay: 2500,
                            disableOnInteraction: false,
                        },
                        pagination: {
                            el: ".swiper-pagination",
                            clickable: true,
                        },
                        breakpoints: {
                            576: {
                                slidesPerView: 3,
                                loop: $('.gatewaySlide .swiper-slide').length > 2,
                            },
                            768: {
                                slidesPerView: 3,
                                loop: $('.gatewaySlide .swiper-slide').length > 3,
                            }
                        }
                    });
                }
            } else {
                // Destroy Swiper if it has been initialized
                if (gatewaySlide) {
                    gatewaySlide.destroy(true, true);
                    gatewaySlide = null;
                }
            }
        }

        // Initialize Swiper when the page loads
        initSwiper();

        // Add resize event listener to check window size on resize
        window.addEventListener('resize', initSwiper);


    });
</script>

<?php include "./includes/footer.php" ?>