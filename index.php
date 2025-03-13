<?php include "main.php" ?>

<div id="pageWrapper" class="homePage">
    <section id="MainBanner">
        <div class="swiper bannerSlide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner-item">
                        <picture>
                            <source rel="preload" srcset="assets/images/banner-home-1.png" media="(min-width:768px)"
                                width="1920" height="1080">
                            <img rel="preload" src="assets/images/banner-home-1.png" width="640" height="360"
                                alt="banner" fetchpriority="low" loading="lazy" decoding="async">
                        </picture>
                        <div class="container">
                            <div class="cntWrap">
                                <h1 class="mTxt">Welcome to</h1>
                                <h2 class="mHead delmt-btn" data-text="DLU Academy">DLU Academy &nbsp; <a href="#Gallery" class="gsap_delmt_up" aria-label="explore">
                                        <img src="assets/images/icon-arrow.svg" width="40" height="40" loading="lazy" alt="arrow">
                                    </a></h2>
                                <p class="sTxt">Dubai’s Leading Fashion Event Management <br>
                                    & Professional Modeling Courses!</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Gallery">
        <div class="delmt gsap_delmt_mvmt" inert>
            <img src="assets/images/delmt-gal-1.webp" width="40" height="40" loading="lazy" alt="delmt">
        </div>
        <div class="delmt_2" inert>
            <img src="assets/images/delmt-gal-2.webp" width="40" height="40" loading="lazy" alt="delmt">
        </div>
        <div class="delmt_3" inert>
            <img src="assets/images/delmt-gal-3.webp" width="40" height="40" loading="lazy" alt="delmt">
        </div>
        <div class="container">
            <div class="galFlx">
                <div class="galCol">
                    <div class="item">
                        <a href="assets/images/gal-1.webp" class="imgBx" data-fancybox="gallery1" aria-label="gal">
                            <img src="assets/images/gal-1.webp" width="200" height="200" loading="lazy" alt="arrow">
                        </a>
                    </div>
                    <div class="item">
                        <a href="assets/images/gal-2.webp" class="imgBx" data-fancybox="gallery1" aria-label="gal">
                            <img src="assets/images/gal-2.webp" width="200" height="200" loading="lazy" alt="arrow">
                        </a>
                    </div>
                    <div class="item">
                        <a href="assets/images/gal-3.webp" class="imgBx" data-fancybox="gallery1" aria-label="gal">
                            <img src="assets/images/gal-3.webp" width="200" height="200" loading="lazy" alt="arrow">
                        </a>
                    </div>
                </div>
                <div class="galCol">
                    <div class="item">
                        <a href="assets/images/gal-3.webp" class="imgBx" data-fancybox="gallery1" aria-label="gal">
                            <img src="assets/images/gal-3.webp" width="200" height="200" loading="lazy" alt="arrow">
                        </a>
                    </div>
                    <div class="item">
                        <a href="assets/images/gal-4.webp" class="imgBx" data-fancybox="gallery1" aria-label="gal">
                            <img src="assets/images/gal-4.webp" width="200" height="200" loading="lazy" alt="arrow">
                        </a>
                    </div>
                    <div class="item">
                        <a href="assets/images/gal-8.webp" class="imgBx" data-fancybox="gallery1" aria-label="gal">
                            <img src="assets/images/gal-8.webp" width="200" height="200" loading="lazy" alt="arrow">
                        </a>
                    </div>
                </div>
                <div class="galCol">
                    <div class="item">
                        <a href="assets/images/gal-6.webp" class="imgBx" data-fancybox="gallery1" aria-label="gal">
                            <img src="assets/images/gal-6.webp" width="200" height="200" loading="lazy" alt="arrow">
                        </a>
                    </div>
                    <div class="item">
                        <a href="assets/images/gal-7.webp" class="imgBx" data-fancybox="gallery1" aria-label="gal">
                            <img src="assets/images/gal-7.webp" width="200" height="200" loading="lazy" alt="arrow">
                        </a>
                    </div>
                    <div class="item">
                        <a href="assets/images/gal-5.webp" class="imgBx" data-fancybox="gallery1" aria-label="gal">
                            <img src="assets/images/gal-5.webp" width="200" height="200" loading="lazy" alt="arrow">
                        </a>
                    </div>
                    <div class="item">
                        <a href="assets/images/gal-9.webp" class="imgBx" data-fancybox="gallery1" aria-label="gal">
                            <img src="assets/images/gal-9.webp" width="200" height="200" loading="lazy" alt="arrow">
                        </a>
                    </div>
                    <div class="item gsap_delmt_rgt">
                        <a href="about.php" class="imgBx" aria-label="explore">
                            <img src="assets/images/gal-vw-btn.svg" width="200" height="200" loading="lazy" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Programs">
        <div class="container">
            <div class="tleWrap">
                <h6 class="mTxt gsap_delmt_up gsap_splitting_txt">programs & workshops</h6>
                <h4 class="mHd gsap_delmt_up gsap_splitting_txt">Get enrolled in the course made
                    by industry experts!</h4>
            </div>
            <div class="swiper programSlide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="programBx">
                            <img src="assets/images/program-1.jpg" width="200" height="200" loading="lazy" alt="arrow">
                            <div class="bxCnt">
                                <div class="tle">fashion event management</div>
                                <div class="txt">6 months <br> 6:30pm - 8:30pm</div>
                                <a href="fashionEvent.php" class="exBtn hoveranim" aria-label="program"><span>Explore more</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="programBx">
                            <img src="assets/images/program-2.webp" width="200" height="200" loading="lazy" alt="arrow">
                            <div class="bxCnt">
                                <div class="tle">Professional Modelling</div>
                                <div class="txt">3/6 months <br> 9:00am - 11:00am</div>
                                <a href="professionalModelling.php" class="exBtn hoveranim" aria-label="program"><span>Explore more</span></a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="programBx">
                            <img src="assets/images/program-3.webp" width="200" height="200" loading="lazy" alt="arrow">
                            <div class="bxCnt">
                                <div class="tle">Professional Workshops</div>
                                <div class="txt">1 to 2 hours <br> 4:00pm - 6:00pm</div>
                                <a href="workshops.php" class="exBtn hoveranim" aria-label="program"><span>Explore more</span></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="academyWrap">
                <div class="imgWrap">
                    <img src="assets/images/academy-1.svg" width="1200" height="320" loading="lazy" alt="academy">
                </div>
                <div class="txtWrap">
                    <h5>Unmatched education quality for career growth. Experience top-tier training from industry experts with tailored courses designed for today’s corporate needs.</h5>
                    <div class="btnWrap">
                        <a href="lifeDlu.php" class="baseBtn_1 hoveranim" aria-label="read more about programs">
                            <span>Learn more</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="JoinDlu">
        <div class="delmt_bg" inert>
            <img src="assets/images/joindlu-bg.webp" width="1440" height="712" loading="lazy" alt="joindlu">
        </div>
        <div class="container">
            <div class="dFlx">
                <div class="lftSd">
                    <div class="cntWrap">
                        <div class="tleWrap">
                            <h4 class="mHd gsap_delmt_up gsap_splitting_txt">top reasons <br> to join DLU</h4>
                        </div>
                        <div class="btnWrap">
                            <a href="about.php" class="baseBtn_1 hoveranim" aria-label="read more about programs">
                                <span>Learn more</span>
                            </a>
                        </div>
                    </div>
                </div>
                <div class="rgtSd">
                    <div class="accordion faqAcco" id="FaqAcco">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#FaqAcco_1" aria-expanded="true" aria-controls="FaqAcco_1">
                                    Learn
                                </button>
                            </div>
                            <div id="FaqAcco_1" class="accordion-collapse collapse show" data-bs-parent="#FaqAcco">
                                <div class="accordion-body">
                                    <div class="ckCntWrap">
                                        <p>DLU provides a hybrid learning platform that offers personalized education, catering to diverse learning styles to foster student success and skill development.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FaqAcco_2" aria-expanded="false" aria-controls="FaqAcco_2">
                                    Network
                                </button>
                            </div>
                            <div id="FaqAcco_2" class="accordion-collapse collapse" data-bs-parent="#FaqAcco">
                                <div class="accordion-body">
                                    <div class="ckCntWrap">
                                        <p>Be proactive: network, attend conferences, volunteer, and build connections to unlock career opportunities and growth.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FaqAcco_3" aria-expanded="false" aria-controls="FaqAcco_3">
                                    Transform
                                </button>
                            </div>
                            <div id="FaqAcco_3" class="accordion-collapse collapse" data-bs-parent="#FaqAcco">
                                <div class="accordion-body">
                                    <div class="ckCntWrap">
                                        <p>DLU transforms students by reshaping thought patterns, surpassing traditional learning, and fostering intellectual, personal, and promoting intellectual, personal, and social growth through a dynamic, holistic approach to education</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#FaqAcco_4" aria-expanded="false" aria-controls="FaqAcco_4">
                                    Explore
                                </button>
                            </div>
                            <div id="FaqAcco_4" class="accordion-collapse collapse" data-bs-parent="#FaqAcco">
                                <div class="accordion-body">
                                    <div class="ckCntWrap">
                                        <p>DLU fosters active learning through curiosity, equipping students with new skills, perspectives, and understanding to think innovatively . and insights to think innovatively and break conventional boundaries.</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Expertise">
        <div class="container">
            <div class="dFlx">
                <div class="lftSd">
                    <div class="tleWrap">
                        <h6 class="mTxt gsap_splitting_txt">the touters</h6>
                        <h4 class="mHd gsap_delmt_up gsap_splitting_txt">Creative minds <br> fuel our expertise</h4>
                    </div>
                </div>
                <div class="rgtSd">
                    <div class="btnWrap">
                        <a href="about.php#OurTeam" class="arrowBtn" aria-label="explore">
                            <img src="assets/images/icon-arrow.svg" width="40" height="40" loading="lazy" alt="arrow">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sp-container rgt">
            <div class="swiper expertiseSlide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="expertiseBx">
                            <img src="assets/images/expertise-1.webp" width="376" height="476" loading="lazy" alt="experise">
                            <div class="bxCnt">
                                <div class="tle">Athul suresh</div>
                                <div class="txt">fashion choreographer</div>
                                <a href="teamMember-athul.php" aria-label="explore">
                                    <img src="assets/images/icon-arrow.svg" width="40" height="40" loading="lazy" alt="arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="expertiseBx">
                            <img src="assets/images/expertise-2.webp" width="376" height="476" loading="lazy" alt="experise">
                            <div class="bxCnt">
                                <div class="tle">Deepak divakaran</div>
                                <div class="txt">Life coach <br> (Co-Founder)</div>
                                <a href="teamMember-deepak.php" aria-label="explore">
                                    <img src="assets/images/icon-arrow.svg" width="40" height="40" loading="lazy" alt="arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="expertiseBx">
                            <img src="assets/images/expertise-3.webp" width="376" height="476" loading="lazy" alt="experise">
                            <div class="bxCnt">
                                <div class="tle">Shammas Kalladath</div>
                                <div class="txt">Digital marketing head </div>
                                <a href="teamMember-shammas.php" aria-label="explore">
                                    <img src="assets/images/icon-arrow.svg" width="40" height="40" loading="lazy" alt="arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="expertiseBx">
                            <img src="assets/images/expertise-4.jpg" width="376" height="476" loading="lazy" alt="experise">
                            <div class="bxCnt">
                                <div class="tle">Ajay Ashok</div>
                                <div class="txt">Course Director</div>
                                <a href="teamMember-ajay.php" aria-label="explore">
                                    <img src="assets/images/icon-arrow.svg" width="40" height="40" loading="lazy" alt="arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Placement">
        <div class="container">
            <div class="placementBx">
                <div class="cntWrap">
                    <div class="tleWrap center">
                        <h6 class="mTxt gsap_splitting_txt">Our Placement</h6>
                        <h4 class="mHd gsap_delmt_up gsap_splitting_txt">Where talent meets <br> opportunity in style.</h4>
                    </div>
                    <div class="btnWrap">
                        <a href="about.php#OurPartners" class="baseBtn_1 hoveranim" aria-label="learn">
                            <span>Explore more</span>
                        </a>
                    </div>
                </div>
                <div class="imgWrap">
                    <img src="assets/images/placement-img.webp" width="1200" height="500" loading="lazy" alt="placement">
                </div>
            </div>
        </div>
    </section>

    <section id="LifeDlu">
        <div class="tleWrap center">
            <h4 class="mHd gsap_delmt_up gsap_splitting_txt gsap_delmt_mvmt">life @ DLU</h4>
        </div>
        <div class="swiper gallerySlide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <a href="assets/images/lifeDluGal-1.jpg" data-fancybox="gallery" class="galleryBx sm">
                        <img src="assets/images/lifeDluGal-1.jpg" width="376" height="476" loading="lazy" alt="experise">
                    </a>
                    <a href="assets/images/lifeDluGal-2.jpg" data-fancybox="gallery" class="galleryBx sm">
                        <img src="assets/images/lifeDluGal-2.jpg" width="376" height="476" loading="lazy" alt="experise">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="assets/images/lifeDluGal-3.jpg" data-fancybox="gallery" class="galleryBx">
                        <img src="assets/images/lifeDluGal-3.jpg" width="376" height="476" loading="lazy" alt="experise">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="assets/images/lifeDluGal-4.jpg" data-fancybox="gallery" class="galleryBx sm">
                        <img src="assets/images/lifeDluGal-4.jpg" width="376" height="476" loading="lazy" alt="experise">
                    </a>
                    <a href="assets/images/lifeDluGal-5.jpg" data-fancybox="gallery" class="galleryBx sm">
                        <img src="assets/images/lifeDluGal-5.jpg" width="376" height="476" loading="lazy" alt="experise">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="assets/images/lifeDluGal-6.jpg" data-fancybox="gallery" class="galleryBx">
                        <img src="assets/images/lifeDluGal-6.jpg" width="376" height="476" loading="lazy" alt="experise">
                    </a>
                </div>
                <div class="swiper-slide">
                    <a href="assets/images/lifeDluGal-7.jpg" data-fancybox="gallery" class="galleryBx sm">
                        <img src="assets/images/lifeDluGal-7.jpg" width="376" height="476" loading="lazy" alt="experise">
                    </a>
                    <a href="assets/images/lifeDluGal-1.jpg" data-fancybox="gallery" class="galleryBx sm">
                        <img src="assets/images/lifeDluGal-1.jpg" width="376" height="476" loading="lazy" alt="experise">
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section id="Gateway">
        <div class="tleWrap center">
            <h4 class="mHd gsap_delmt_up gsap_splitting_txt">Your Gateway to Fashion <br> expertise and Success</h4>
        </div>
        <div class="swiper gatewaySlide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="gatewayBx">
                        <img src="assets/images/gateway-1.webp" width="150" height="272" loading="lazy" alt="experise">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gatewayBx">
                        <img src="assets/images/gateway-2.webp" width="150" height="272" loading="lazy" alt="experise">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gatewayBx">
                        <img src="assets/images/gateway-3.webp" width="150" height="272" loading="lazy" alt="experise">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gatewayBx">
                        <img src="assets/images/gateway-4.webp" width="150" height="272" loading="lazy" alt="experise">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gatewayBx">
                        <img src="assets/images/gateway-5.webp" width="150" height="272" loading="lazy" alt="experise">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gatewayBx">
                        <img src="assets/images/gateway-6.webp" width="150" height="272" loading="lazy" alt="experise">
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="gatewayBx">
                        <img src="assets/images/gateway-7.webp" width="150" height="272" loading="lazy" alt="experise">
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
        var bannerSlide = new Swiper(".bannerSlide", {});
        // SPLITTING
        gsap.registerPlugin(ScrollTrigger);

        function initSplittingAnimation(targetSelector) {
            const targets = document.querySelectorAll(targetSelector);
            targets.forEach(target => {
                Splitting({
                    target: target,
                    by: 'chars'
                });
                const chars = target.querySelectorAll(".char");
                gsap.fromTo(
                    chars, {
                        opacity: 0,
                        y: 50
                    }, {
                        opacity: 1,
                        y: 0,
                        duration: 0.4,
                        stagger: 0.04,
                        ease: "power3.out",
                        scrollTrigger: {
                            trigger: target,
                            start: "top 85%",
                            toggleActions: "play none none reset",
                            markers: false,
                            once: false,
                        }
                    }
                );
            });
        }
        initSplittingAnimation(".gsap_splitting_txt");
        // GSAP_ANIMATIONS
        const gsapDelmtRgts = document.querySelectorAll(".gsap_delmt_rgt");
        gsapDelmtRgts.forEach(gsapDelmtRgt => {
            gsap.fromTo(
                gsapDelmtRgt, {
                    autoAlpha: 0,
                    xPercent: 150,
                    yPercent: 50,
                    rotation: 80,
                }, {
                    autoAlpha: 1,
                    xPercent: 0,
                    yPercent: 0,
                    rotation: 0,
                    duration: 1,
                    ease: "power3.out",
                    scrollTrigger: {
                        trigger: gsapDelmtRgt,
                        start: "top 95%",
                        toggleActions: "play none none reset",
                        markers: false,
                        ease: "power2",
                        stagger: {
                            each: 0.02,
                            from: "random"
                        },
                        once: false,
                    }
                }
            );
        });
        // GSAP_ANIMATIONS
        const gsapDelmtUps = document.querySelectorAll(".gsap_delmt_up");
        gsapDelmtUps.forEach(gsapDelmtUp => {
            gsap.fromTo(
                gsapDelmtUp, {
                    autoAlpha: 0,
                    yPercent: 150,
                    rotation: -30,
                }, {
                    autoAlpha: 1,
                    yPercent: 0,
                    rotation: 0,
                    duration: 1,
                    ease: "power3.out",
                    scrollTrigger: {
                        trigger: gsapDelmtUp,
                        start: "top 95%",
                        toggleActions: "play none none reset",
                        markers: false,
                        ease: "power2",
                        stagger: {
                            each: 0.02,
                            from: "random"
                        },
                        once: false,
                    }
                }
            );
        });
        // GSAP_ANIMATIONS
        gsap.matchMedia().add("(min-width: 992px)", () => {
            function initParallaxMovement(selector, targetSelector, movement) {
                let timeout;
                $(selector).on("mousemove", function(e) {
                    const $this = $(this);
                    if (timeout) clearTimeout(timeout);
                    timeout = setTimeout(() => {
                        callParallax(e, $this, targetSelector, movement);
                    }, 16);
                });

                function callParallax(e, $element, targetSelector, movement) {
                    parallaxIt(e, $element, targetSelector, movement);
                }

                function parallaxIt(e, $element, targetSelector, movement) {
                    const $target = $element.find(targetSelector);
                    const relX = e.pageX - $element.offset().left;
                    const relY = e.pageY - $element.offset().top;
                    gsap.to($target, {
                        duration: 1,
                        x: ((relX - $element.width() / 2) / $element.width()) * movement,
                        y: ((relY - $element.height() / 2) / $element.height()) * movement,
                        ease: "power2.out"
                    });
                }
            }
            initParallaxMovement(".homePage", ".gsap_delmt_mvmt", -100);
        });

        // TESTIMONIAL_SLIDE
        var programSlide = new Swiper(".programSlide", {
            slidesPerView: 1.4,
            loop: $('.programSlide .swiper-slide').length >= 1 ? true : false,
            spaceBetween: 10,
            watchSlidesProgress: true,
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
                468: {
                    slidesPerView: 2,
                    loop: $('.programSlide .swiper-slide').length >= 2 ? true : false,
                    spaceBetween: 15,
                },
                576: {
                    slidesPerView: 3,
                    loop: $('.programSlide .swiper-slide').length >= 3 ? true : false,
                    spaceBetween: 20,
                },
                992: {
                    slidesPerView: 3,
                    loop: $('.programSlide .swiper-slide').length >= 4 ? true : false,
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
                delay: 5000,
                disableOnInteraction: true,
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