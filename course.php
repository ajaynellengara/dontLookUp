<?php include "main.php" ?>

<link rel="stylesheet" href="assets/css/pages.min.css?v=1.0.0">

<!-- SWIPER -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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
                            <div class="tle">fashion event <br>  management</div>
                            <div class="txt">6 months <br> 6:30pm - 8:30pm</div>
                            <a href="index.php" class="exBtn hoveranim" aria-label="program"><span>Explore more</span></a>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="programBx">
                        <img src="assets/images/program-2.webp" width="200" height="200" loading="lazy" alt="arrow">
                        <div class="bxCnt">
                            <div class="tle">Professional <br> Modelling</div>
                            <div class="txt">6 months <br> 9:00am - 11:00am</div>
                            <a href="professionalModelling.php" class="exBtn hoveranim" aria-label="program"><span>Explore more</span></a>
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

    <?php include "./includes/gateway.php" ?>

    <?php include "./includes/joinAcademy.php" ?>


</div>

<!-- FANCYBOX -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css"
    integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw=="
    crossorigin="anonymous" referrerpolicy="no-referrer">
<script src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.js"
    integrity="sha512-uURl+ZXMBrF4AwGaWmEetzrd+J5/8NRkWAvJx5sbPSSuOb0bZLqf+tOzniObO00BjHa/dD7gub9oCGMLPQHtQA=="
    crossorigin="anonymous" referrerpolicy="no-referrer" defer></script>

<!-- SWIPER -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>


<script>
    document.addEventListener("DOMContentLoaded", function() {

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