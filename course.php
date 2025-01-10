<?php include "main.php" ?>

<link rel="stylesheet" href="assets/css/pages.min.css?v=1.0.0">

<div id="pageWrapper" class="coursePage">
    <section id="InnerBanner">
        <picture>
            <source rel="preload" srcset="assets/images/banner-course-1.jpg" media="(min-width:768px)"
                width="1920" height="1080">
            <img rel="preload" src="assets/images/banner-course-1.jpg" width="640" height="360"
                alt="course" fetchpriority="low" loading="lazy" decoding="async">
        </picture>
        <div class="container">
            <div class="cntWrap">
                <h1 class="mTxt">Programs & workshops</h1>
                <h2 class="mHead">Unlock Your Potential
                    with DLU!</h2>
            </div>
        </div>
    </section>

    <section id="CourseInfo">
        <div class="container">
            <div class="academyWrap">
                <div class="imgWrap">
                    <img src="assets/images/courseInfo-1.svg" width="140" height="32" loading="lazy" alt="about">
                </div>
                <div class="txtWrap">
                    <h5>Discover courses and workshops in Fashion Event Management, Innovative Branding, and Professional Modeling. Gain hands-on experience, industry insights, and skills to thrive in fashion, branding, and modeling careers.</h5>
                </div>
            </div>
            <div class="courseFlx">
                <div class="item">
                    <div class="programBx">
                        <img src="assets/images/program-1.webp" width="200" height="200" loading="lazy" alt="arrow">
                        <div class="bxCnt">
                            <div class="tle">fashion event management</div>
                            <div class="txt">6 months <br> 6:30pm - 8:30pm</div>
                            <a href="index.php" class="exBtn hoveranim" aria-label="program"><span>Explore more</span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="programBx">
                        <img src="assets/images/program-2.webp" width="200" height="200" loading="lazy" alt="arrow">
                        <div class="bxCnt">
                            <div class="tle">Professional Modelling</div>
                            <div class="txt">6 months <br> 6:30pm - 8:30pm</div>
                            <a href="index.php" class="exBtn hoveranim" aria-label="program"><span>Explore more</span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <a href="https://videocdn.cdnpk.net/videos/bb7cdb5f-5abb-41fc-b2f0-8db69fd8becb/horizontal/previews/videvo_watermarked/large.mp4" data-fancybox="course" class="courseVdoBx" aria-label="course video">
                        <img src="assets/images/banner-course-1.jpg" width="1080" height="768" loading="lazy" alt="course">
                        <div class="icon">
                            <img src="assets/images/icon-play.svg" width="36" height="36" loading="lazy" alt="play">
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="Gateway">
        <div class="tleWrap center">
            <h4 class="mHd">Your Gateway to Fashion <br> expertise and Success</h4>
        </div>
        <div class="swiper gatewaySlide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="gatewayBx">
                        <img src="assets/images/course-gateway-thumb.png" width="150" height="272" loading="lazy" alt="experise">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gatewayBx">
                        <img src="assets/images/course-gateway-thumb.png" width="150" height="272" loading="lazy" alt="experise">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gatewayBx">
                        <img src="assets/images/course-gateway-thumb.png" width="150" height="272" loading="lazy" alt="experise">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gatewayBx">
                        <img src="assets/images/course-gateway-1.png" width="150" height="272" loading="lazy" alt="experise">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gatewayBx">
                        <img src="assets/images/course-gateway-thumb.png" width="150" height="272" loading="lazy" alt="experise">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gatewayBx">
                        <img src="assets/images/course-gateway-thumb.png" width="150" height="272" loading="lazy" alt="experise">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gatewayBx">
                        <img src="assets/images/course-gateway-thumb.png" width="150" height="272" loading="lazy" alt="experise">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include "./includes/joinAcademy.php" ?>


</div>

<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" defer></script>

<!-- SPLIT_TEXT -->
<script src="https://unpkg.com/splitting/dist/splitting.min.js" defer></script>

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
        // TEAM_SLIDE
        var teamSlide = new Swiper(".teamSlide", {
            slidesPerView: 1.4,
            loop: $('.teamSlide .swiper-slide').length >= 1 ? true : false,
            spaceBetween: 10,
            centeredSlides: true,
            roundLengths: true,
            watchSlidesProgress: true,
            lazy: {
                loadPrevNext: true,
            },
            autoplay: {
                delay: 2500,
                disableOnInteraction: false,
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
            breakpoints: {
                468: {
                    slidesPerView: 2,
                    loop: $('.teamSlide .swiper-slide').length >= 2 ? true : false,
                    spaceBetween: 15,
                },
                576: {
                    slidesPerView: 3,
                    loop: $('.teamSlide .swiper-slide').length >= 3 ? true : false,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3,
                    loop: $('.teamSlide .swiper-slide').length >= 4 ? true : false,
                    spaceBetween: 30,
                },
            },
        });
        // EXPERTISE_SLIDE
        var expertiseSlide = new Swiper(".expertiseSlide", {
            slidesPerView: 1.4,
            loop: false,
            spaceBetween: 0,
            watchSlidesProgress: true,
            lazy: {
                loadPrevNext: true,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                376: {
                    slidesPerView: 2,
                },
                468: {
                    slidesPerView: 2.5,
                },
                576: {
                    slidesPerView: 3,
                },
                992: {
                    slidesPerView: 3.5,
                },
                1551: {
                    slidesPerView: 3.8,
                },
            },
        });
        // EXPERTISE_SLIDE
        var ourPartnersSlide = new Swiper(".ourPartnersSlide", {
            slidesPerView: 2,
            loop: true,
            spaceBetween: 0,
            watchSlidesProgress: true,
            lazy: {
                loadPrevNext: true,
            },
            autoplay: {
                delay: 3000,
                disableOnInteraction: false,
            },
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
            breakpoints: {
                376: {
                    slidesPerView: 3,
                },
                576: {
                    slidesPerView: 4,
                },
                992: {
                    slidesPerView: 5,
                },
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
            autoplay: false,
        });

    });
</script>

<?php include "./includes/footer.php" ?>