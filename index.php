<?php include "main.php" ?>

<div id="pageWrapper" class="homePage">
    <section id="MainBanner">
        <div class="swiper bannerSlide">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner-item">
                        <picture>
                            <source rel="preload" srcset="assets/images/banner-home-1.webp" media="(min-width:768px)"
                                width="1920" height="1080">
                            <img class="lazy" rel="preload" src="assets/images/banner-home-1.webp" width="640" height="360"
                                alt="banner" fetchpriority="low" loading="lazy" decoding="async">
                        </picture>
                        <div class="container">
                            <div class="cntWrap">
                                <h1 class="mTxt">Don't look up</h1>
                                <h2 class="mHead delmt-btn" data-text="look within">look within &nbsp; <a href="index.php" aria-label="explore">
                                        <img src="assets/images/icon-arrow.svg" width="40" height="40" loading="lazy" alt="arrow">
                                    </a></h2>
                                <h2 class="mHead" data-text="transform beyond">transform beyond</h2>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Gallery">
        <div class="delmt" inert>
            <img src="assets/images/delmt-gal-1.png" width="40" height="40" loading="lazy" alt="delmt">
        </div>
        <div class="delmt_2" inert>
            <img src="assets/images/delmt-gal-2.png" width="40" height="40" loading="lazy" alt="delmt">
        </div>
        <div class="delmt_3" inert>
            <img src="assets/images/delmt-gal-3.png" width="40" height="40" loading="lazy" alt="delmt">
        </div>
        <div class="container">
            <div class="galFlx">
                <div class="galCol">
                    <?php
                    for ($i = 1; $i <= 3; $i++) {
                        $imageIndex = ($i % 6 == 0) ? 6 : $i % 6;
                    ?>
                        <div class="item">
                            <a href="index.php" class="imgBx" aria-label="gal">
                                <img src="assets/images/gal-<?php echo  $imageIndex ?>.jpg" width="200" height="200" loading="lazy" alt="arrow">
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="galCol">
                    <?php
                    for ($i = 1; $i <= 3; $i++) {
                        $imageIndex = ($i % 6 == 0) ? 6 : $i % 6;
                    ?>
                        <div class="item">
                            <a href="index.php" class="imgBx" aria-label="gal">
                                <img src="assets/images/gal-<?php echo  $imageIndex ?>.jpg" width="200" height="200" loading="lazy" alt="arrow">
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                </div>
                <div class="galCol">
                    <?php
                    for ($i = 1; $i <= 4; $i++) {
                        $imageIndex = ($i % 6 == 0) ? 6 : $i % 6;
                    ?>
                        <div class="item">
                            <a href="index.php" class="imgBx" aria-label="gal">
                                <img src="assets/images/gal-<?php echo  $imageIndex ?>.jpg" width="200" height="200" loading="lazy" alt="arrow">
                            </a>
                        </div>
                    <?php
                    }
                    ?>
                    <div class="item">
                        <a href="index.php" class="imgBx" aria-label="explore">
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
                <h6 class="mTxt">programs & workshops</h6>
                <h4 class="mHd">Get enrolled in the course made
                    by industry experts!</h4>
            </div>
            <div class="swiper programSlide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <a href="index.php" class="programBx" aria-label="programs">
                            <img src="assets/images/gal-<?php echo  $imageIndex ?>.jpg" width="200" height="200" loading="lazy" alt="arrow">
                            <div class="bxCnt">
                                <div class="tle">fashion event management</div>
                                <div class="txt">6 months <br> 6:30pm - 8:30pm</div>
                                <div class="exBtn hoveranim"><span>Explore more</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="index.php" class="programBx" aria-label="programs">
                            <img src="assets/images/gal-<?php echo  $imageIndex ?>.jpg" width="200" height="200" loading="lazy" alt="arrow">
                            <div class="bxCnt">
                                <div class="tle">Professional Modelling</div>
                                <div class="txt">6 months <br> 6:30pm - 8:30pm</div>
                                <div class="exBtn hoveranim"><span>Explore more</span></div>
                            </div>
                        </a>
                    </div>
                    <div class="swiper-slide">
                        <a href="index.php" class="programBx" aria-label="programs">
                            <img src="assets/images/gal-<?php echo  $imageIndex ?>.jpg" width="200" height="200" loading="lazy" alt="arrow">
                            <div class="bxCnt">
                                <div class="tle">Professional Workshops</div>
                                <div class="txt">6 months <br> 6:30pm - 8:30pm</div>
                                <div class="exBtn hoveranim"><span>Explore more</span></div>
                            </div>
                        </a>
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
                        <a href="index.php" class="baseBtn_1 hoveranim" aria-label="learn">
                            <span>Learn more</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="JoinDlu">
        <div class="delmt_bg" inert>
            <img src="assets/images/joindlu-bg.png" width="1440" height="712" loading="lazy" alt="joindlu">
        </div>
        <div class="container">
            <div class="dFlx">
                <div class="lftSd">
                    <div class="cntWrap">
                        <div class="tleWrap">
                            <h4 class="mHd">top reasons <br> to join DLU</h4>
                        </div>
                        <div class="btnWrap">
                            <a href="index.php" class="baseBtn_1 hoveranim" aria-label="learn">
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
                                        <p>Premier Fashion Event Management Training Institute in Dubai with Hands-On Learning Experience</p>
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
                                        <p>Premier Fashion Event Management Training Institute in Dubai with Hands-On Learning Experience</p>
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
                                        <p>Premier Fashion Event Management Training Institute in Dubai with Hands-On Learning Experience</p>
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
                                        <p>Premier Fashion Event Management Training Institute in Dubai with Hands-On Learning Experience</p>
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
                        <h6 class="mTxt">the touters</h6>
                        <h4 class="mHd">Creative minds fuel our expertise</h4>
                    </div>
                </div>
                <div class="rgtSd">
                    <div class="btnWrap">
                        <a href="index.php" class="baseBtn_1 hoveranim" aria-label="learn">
                            <span>Learn more</span>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="sp-container rgt">
            <div class="swiper expertiseSlide">
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="programBx">
                            <img src="assets/images/expertise-1.png" width="376" height="476" loading="lazy" alt="experise">
                            <div class="bxCnt">
                                <div class="tle">Athul suresh</div>
                                <div class="txt">fashion choreographer</div>
                                <a href="index.php" aria-label="explore">
                                    <img src="assets/images/icon-arrow.svg" width="40" height="40" loading="lazy" alt="arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="programBx">
                            <img src="assets/images/expertise-1.png" width="376" height="476" loading="lazy" alt="experise">
                            <div class="bxCnt">
                                <div class="tle">Athul suresh</div>
                                <div class="txt">fashion choreographer</div>
                                <a href="index.php" aria-label="explore">
                                    <img src="assets/images/icon-arrow.svg" width="40" height="40" loading="lazy" alt="arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="programBx">
                            <img src="assets/images/expertise-1.png" width="376" height="476" loading="lazy" alt="experise">
                            <div class="bxCnt">
                                <div class="tle">Athul suresh</div>
                                <div class="txt">fashion choreographer</div>
                                <a href="index.php" aria-label="explore">
                                    <img src="assets/images/icon-arrow.svg" width="40" height="40" loading="lazy" alt="arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-slide">
                        <div class="programBx">
                            <img src="assets/images/expertise-1.png" width="376" height="476" loading="lazy" alt="experise">
                            <div class="bxCnt">
                                <div class="tle">Athul suresh</div>
                                <div class="txt">fashion choreographer</div>
                                <a href="index.php" aria-label="explore">
                                    <img src="assets/images/icon-arrow.svg" width="40" height="40" loading="lazy" alt="arrow">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="GetTouch">
        <div class="delmt" inert>
            <img src="assets/images/delmt-gtouch-1.webp" class="gsap_delmt_rgt" loading="lazy" width="800" height="3000" alt="touch">
        </div>
        <div class="delmt_fruit gsap_delmt_up" inert>
            <img src="assets/images/delmt-gtouch-2.webp" loading="lazy" width="515" height="464" alt="leaf">
        </div>
        <div class="delmt_pineapple gsap_delmt_mvmt">
            <img src="assets/images/delmt-gtouch-3.webp" loading="lazy" width="180" height="180" alt="pineapple">
        </div>
        <div class="container">
            <div class="tleWrap center wow animate__fadeInUp">
                <h4 class="mTle wow animate__fadeInUp gsap_splitting_txt">Get in Touch</h4>
                <h3 class="secTle gsap_splitting_txt">Partner with Life Smoothies Today</h3>
                <p>If you own a café, cofee shop, or F&B outlet in the UAE, we’d love to connect with you. </p>
                <p>Reach out to us, and one of our dedicated sales team members will arrange a meeting to <b>discuss
                        how Life Smoothies can enhance your menu and boost revenue for your business. </b> </p>
            </div>
            <div class="formWrap wow animate__fadeInUp">
                <form method="POST">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Full Name*</label>
                                <input type="text" class="form-control" placeholder="Enter your name" required>
                                <div class="help-block danger d-none">Invalid Input</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Email*</label>
                                <input type="mail" class="form-control" placeholder="Enter your email" required>
                                <div class="help-block danger d-none">Invalid Input</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Contact Number*</label>
                                <input type="tel" class="form-control" placeholder="Enter your number" required>
                                <div class="help-block danger d-none">Invalid Input</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Company*</label>
                                <input type="text" class="form-control" placeholder="Enter your company name" required>
                                <div class="help-block danger d-none">Invalid Input</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Country*</label>
                                <input type="text" class="form-control" placeholder="Enter your country" required>
                                <div class="help-block danger d-none">Invalid Input</div>
                            </div>
                        </div>
                        <div class="col-12 col-sm-6">
                            <div class="form-group">
                                <label>Additional Info</label>
                                <input type="text" class="form-control" placeholder="Type here.." required>
                                <div class="help-block danger d-none">Invalid Input</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="btnWrap">
                                <button type="submit" class="baseBtn baseBtn1 hoveranim" aria-label="submit">
                                    <span class="btnSubmit">SUBMIT</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>

</div>

<!-- GSAP -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/gsap.min.js" defer></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.2/ScrollTrigger.min.js" defer></script>

<!-- SPLIT_TEXT -->
<script src="https://unpkg.com/splitting/dist/splitting.min.js" defer></script>

<!-- SWIPER -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css">
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

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
                            start: "top 80%",
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
                        start: "top 80%",
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
                        start: "top 80%",
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
        initParallaxMovement("#GetTouch", ".gsap_delmt_mvmt", -100);
        initParallaxMovement(".homePage", ".delmt", -100);

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
                    spaceBetween: 10,
                },
                576: {
                    slidesPerView: 3,
                    loop: $('.programSlide .swiper-slide').length >= 3 ? true : false,
                    spaceBetween: 15,
                },
                992: {
                    slidesPerView: 3,
                    loop: $('.programSlide .swiper-slide').length >= 4 ? true : false,
                    spaceBetween: 20,
                },
                1551: {
                    slidesPerView: 3,
                    loop: $('.programSlide .swiper-slide').length >= 4 ? true : false,
                    spaceBetween: 30,
                },
            },
        });
        // EXPERTISE_SLIDE
        var expertiseSlide = new Swiper(".expertiseSlide", {
            slidesPerView: 1.4,
            loop: $('.expertiseSlide .swiper-slide').length >= 1 ? true : false,
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
                    loop: $('.expertiseSlide .swiper-slide').length >= 2 ? true : false,
                    spaceBetween: 10,
                },
                576: {
                    slidesPerView: 3,
                    loop: $('.expertiseSlide .swiper-slide').length >= 3 ? true : false,
                    spaceBetween: 15,
                },
                992: {
                    slidesPerView: 3,
                    loop: $('.expertiseSlide .swiper-slide').length >= 4 ? true : false,
                    spaceBetween: 20,
                },
                1551: {
                    slidesPerView: 3,
                    loop: $('.expertiseSlide .swiper-slide').length >= 4 ? true : false,
                    spaceBetween: 30,
                },
            },
        });
    });
</script>

<?php include "./includes/footer.php" ?>