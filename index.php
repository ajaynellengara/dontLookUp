<?php include "main.php" ?>

<div id="pageWrapper" class="homePage">
    <section id="MainBanner">
        <div id="bannerCarousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="5000">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="delmt_king gsap_delmt_rgt">
                        <img src="assets/images/delmt-bnr-king.svg" loading="lazy" width="84" height="88" alt="king" inert>
                    </div>
                    <div class="delmt_spcl gsap_delmt_up">
                        <img src="assets/images/delmt-bnr-spcl.svg" loading="lazy" width="93" height="112" alt="spcl" inert>
                    </div>
                    <div class="bgImgWrap">
                        <picture>
                            <source rel="preload" srcset="assets/images/banner-home-1.webp" media="(min-width:768)"
                                width="1920" height="1080">
                            <img class="lazy" rel="preload" src="assets/images/banner-home-1.webp" width="640" height="360"
                                alt="banner" fetchpriority="low" loading="lazy" decoding="async">
                        </picture>
                    </div>
                    <div class="container">
                        <div class="dFlx">
                            <div class="fullSd">
                                <div class="cntWrap">
                                    <div class="mTxt gsap_splitting_txt">Smoothie made</div>
                                    <div class="textFillAnim">
                                        <h1 class="mHead" data-text="easy!">easy!</h1>
                                    </div>
                                </div>
                            </div>
                            <div class="fullSd">
                                <div class="cntWrap">
                                    <div class="txt">The Middle East's Leading HORECA Supplier of Frozen
                                        Pre-Portioned (IQF) Smoothie Packs.!</h1>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="carousel-indicators">
                    <div class="container">
                        <div class="carousel-indicatorsWrap">
                            <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="0" class="active"
                                aria-label="Slide 1"></button>
                            <button type="button" data-bs-target="#bannerCarousel" data-bs-slide-to="1" class=""
                            aria-label="Slide 2"></button>
                        </div>
                    </div>
                </div> -->
            </div>
    </section>

    <section id="About">
        <div class="delmt_bg" inert>
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
                <path fill="var(--bg-clr)" fill-opacity="1" d="M0,192L48,197.3C96,203,192,213,288,192C384,171,480,117,576,117.3C672,117,768,171,864,213.3C960,256,1056,288,1152,272C1248,256,1344,192,1392,160L1440,128L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z"></path>
            </svg>
        </div>
        <div class="delmt gsap_delmt_up" inert>
            <img src="assets/images/delmt_about-1.webp" loading="lazy" width="100" height="100" alt="delmt_about">
        </div>
        <div class="container">
            <div class="dFlx">
                <div class="lftSd wow animate__fadeInLeft">
                    <div class="cntWrap">
                        <div class="tleWrap">
                            <h2 class="sTle gsap_splitting_txt">PARTNER WITH</h2>
                            <h3 class="mTle gsap_splitting_txt">Life Smoothies</h3>
                        </div>
                        <p>As the leading HORECA supplier of pre-portioned Frozen (IQF) smoothie solutions in the Middle East, Life Smoothies is trusted by hotels, restaurants, and cafes to deliver quality, convenience, and innovation.</p>
                    </div>
                </div>
                <div class="rgtSd wow animate__fadeInRight" data-wow-duration="1s">
                    <div class="imgWrap">
                        <div class="delmt gsap_delmt_rgt" inert>
                            <img src="assets/images/delmt_about-2.webp" loading="lazy" width="140" height="140" alt="rounds">
                        </div>
                        <img src="https://placehold.co/540x520" data-src="assets/images/about-1.webp" class="lazy" loading="lazy" width="540" height="520" alt="about" decoding="async" draggable="false">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="EnhanceBusiness">
        <div class="container">
            <div class="secTleWrap wow animate__fadeInUp">
                <h4 class="secTle wow animate__fadeInUp gsap_splitting_txt">Here's why partnering with us will enhance your business:</h4>
                <img src="assets/images/eBusiness-tle.png" loading="lazy" width="640" height="12" alt="eBusiness-tle">
            </div>
            <div class="dFlx">
                <div class="item wow animate__fadeInUp" data-wow-duration="1s">
                    <div class="eBusinessBx">
                        <div class="bxIcon">
                            <img src="assets/images/eBusiness-1.svg" loading="lazy" width="90" height="90" alt="eBusiness-1">
                        </div>
                        <div class="bxCnt">
                            <div class="tle">100% Natural <br> Ingredients</div>
                            <div class="txt">Only the finest natural ingredients for delicious, healthy beverages.</div>
                        </div>
                    </div>
                </div>
                <div class="item wow animate__fadeInUp" data-wow-duration="2s">
                    <div class="eBusinessBx">
                        <div class="bxIcon">
                            <img src="assets/images/eBusiness-2.svg" loading="lazy" width="90" height="90" alt="eBusiness-2">
                        </div>
                        <div class="bxCnt">
                            <div class="tle">Biggest Supplier</div>
                            <div class="txt">Largest provider of IQF pre-portioned fruits and vegetables, designed specifcally for the HORECA sector. </div>
                        </div>
                    </div>
                </div>
                <div class="item wow animate__fadeInUp" data-wow-duration="3s">
                    <div class="eBusinessBx">
                        <div class="bxIcon">
                            <img src="assets/images/eBusiness-3.svg" loading="lazy" width="90" height="90" alt="eBusiness-3">
                        </div>
                        <div class="bxCnt">
                            <div class="tle">Diverse Product Range</div>
                            <div class="txt">Wide variety of smoothies, shakes, and Footwraps to enhance menus. </div>
                        </div>
                    </div>
                </div>
                <div class="item wow animate__fadeInUp" data-wow-duration="4s">
                    <div class="eBusinessBx">
                        <div class="bxIcon">
                            <img src="assets/images/eBusiness-4.svg" loading="lazy" width="90" height="90" alt="eBusiness-4">
                        </div>
                        <div class="bxCnt">
                            <div class="tle">Time-Saving <br> Convenience</div>
                            <div class="txt">Pre-portioned sachets streamline preparation in just four steps. </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Products">
        <div class="delmt gsap_delmt_rgt" inert>
            <img src="assets/images/delmt_about-2.webp" loading="lazy" width="140" height="140" alt="rounds">
        </div>
        <div class="delmt_pack gsap_delmt_up" inert>
            <img src="assets/images/about-1.webp" class="lazy" loading="lazy" width="540" height="520" alt="about">
        </div>
        <div class="container">
            <div class="tleWrap center wow animate__fadeInUp">
                <div class="delmt gsap_delmt_rgt" inert>
                    <img src="assets/images/delmt_about-1.webp" loading="lazy" width="100" height="100" alt="delmt_about">
                </div>
                <h2 class="sTle gsap_splitting_txt">Our</h2>
                <h3 class="mTle wow animate__fadeInUp gsap_splitting_txt">Products</h3>
            </div>
            <div class="dFlx">
                <div class="item wow animate__fadeInUp" data-wow-duration="0.5s">
                    <div class="proBx">
                        <div class="bxIcon">
                            <img src="assets/images/pro-1.webp" loading="lazy" width="276" height="276" alt="pro-1">
                        </div>
                        <div class="bxCnt">
                            <div class="tle">SMOOTHIES</div>
                        </div>
                    </div>
                </div>
                <div class="item wow animate__fadeInUp" data-wow-duration="1s">
                    <div class="proBx">
                        <div class="bxIcon">
                            <img src="assets/images/pro-6.webp" loading="lazy" width="276" height="276" alt="pro-1">
                        </div>
                        <div class="bxCnt">
                            <div class="tle">MILKSHAKES</div>
                        </div>
                    </div>
                </div>
                <div class="item wow animate__fadeInUp" data-wow-duration="1.5s">
                    <div class="proBx">
                        <div class="bxIcon">
                            <img src="assets/images/pro-5.webp" loading="lazy" width="276" height="276" alt="pro-1">
                        </div>
                        <div class="bxCnt">
                            <div class="tle">FRAPPES</div>
                        </div>
                    </div>
                </div>
                <div class="item wow animate__fadeInUp" data-wow-duration="2s">
                    <div class="proBx">
                        <div class="bxIcon">
                            <img src="assets/images/pro-4.webp" loading="lazy" width="276" height="276" alt="pro-1">
                        </div>
                        <div class="bxCnt">
                            <div class="tle">Vegan shakes</div>
                        </div>
                    </div>
                </div>
                <div class="item wow animate__fadeInUp" data-wow-duration="2.5s">
                    <div class="proBx">
                        <div class="bxIcon">
                            <img src="assets/images/pro-5.webp" loading="lazy" width="276" height="276" alt="pro-1">
                        </div>
                        <div class="bxCnt">
                            <div class="tle">FROOTFRAPS</div>
                        </div>
                    </div>
                </div>
                <div class="item wow animate__fadeInUp" data-wow-duration="3s">
                    <div class="proBx">
                        <div class="bxIcon">
                            <img src="assets/images/pro-6.webp" loading="lazy" width="276" height="276" alt="pro-1">
                        </div>
                        <div class="bxCnt">
                            <div class="tle">LIFE JUICE</div>
                        </div>
                    </div>
                </div>
                <div class="item wow animate__fadeInUp" data-wow-duration="3.5s">
                    <div class="proBx">
                        <div class="bxIcon">
                            <img src="assets/images/pro-3.webp" loading="lazy" width="276" height="276" alt="pro-1">
                        </div>
                        <div class="bxCnt">
                            <div class="tle">FROZEN FRUITS</div>
                        </div>
                    </div>
                </div>
                <div class="item wow animate__fadeInUp" data-wow-duration="4s">
                    <div class="proBx">
                        <div class="bxIcon">
                            <img src="assets/images/pro-2.webp" loading="lazy" width="276" height="276" alt="pro-1">
                        </div>
                        <div class="bxCnt">
                            <div class="tle">HEYYLIFE</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="FeaturedProduct">
        <div class="delmt" inert>
            <img src="assets/images/delmt-fpro-1.webp" class="gsap_delmt_rgt" loading="lazy" width="240" height="210" alt="rounds">
        </div>
        <div class="delmt_bg" inert><span></span></div>
        <div class="delmt_leaf gsap_delmt_up" inert>
            <img src="assets/images/delmt-fpro-2.webp" loading="lazy" width="576" height="520" alt="fpro">
        </div>
        <div class="container">
            <div class="dFlx">
                <div class="lftSd wow animate__fadeInLeft" data-wow-duration="1s">
                    <div class="imgWrap">
                        <div class="circleSlide_thumbnail">
                            <div class="circleSlide_thumb active" data-index="1">
                                <img src="https://placehold.co/540x520" data-src="assets/images/fpro-1.webp" class="lazy" loading="lazy" width="540" height="520" alt="about" decoding="async" draggable="false">
                            </div>
                            <div class="circleSlide_thumb" data-index="2">
                                <img src="https://placehold.co/540x520" data-src="assets/images/fpro-1.webp" class="lazy" loading="lazy" width="540" height="520" alt="about" decoding="async" draggable="false">
                            </div>
                            <div class="circleSlide_thumb" data-index="3">
                                <img src="https://placehold.co/540x520" data-src="assets/images/fpro-1.webp" class="lazy" loading="lazy" width="540" height="520" alt="about" decoding="async" draggable="false">
                            </div>
                            <div class="circleSlide_thumb" data-index="4">
                                <img src="https://placehold.co/540x520" data-src="assets/images/fpro-1.webp" class="lazy" loading="lazy" width="540" height="520" alt="about" decoding="async" draggable="false">
                            </div>
                        </div>
                        <div class="arrows">
                            <button id="circleSlide_prev">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h14M5 12l4-4m-4 4 4 4" />
                                </svg>
                            </button>
                            <button id="circleSlide_next">
                                <svg aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                    <path stroke="#fff" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                                </svg>
                            </button>
                        </div>
                    </div>
                </div>
                <div class="rgtSd">
                    <div class="cntWrap">
                        <div class="tleWrap wow animate__fadeInUp">
                            <div id="delmt-fProducts-tle" class="gsap_delmt_rgt" inert></div>
                            <h3 class="sTle">Explore our</h3>
                            <h4 class="mTle wow animate__fadeInUp gsap_splitting_txt">Featured products</h4>
                        </div>
                    </div>
                    <div class="circleSlideWrap wow animate__zoomIn">
                        <div class="circleSlide">
                            <div class="circleSlide_item active">
                                <div class="circleSlide_bx">
                                    <img src="assets/images/fpro-thumb-1.webp" loading="lazy" width="540" height="520" alt="thumb">
                                    <div class="bxCnt">
                                        <div class="tle">ACAI KICK 11</div>
                                        <a href="index.php" class="learnBtn" aria-label="learn more">LEARN MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="circleSlide_item">
                                <div class="circleSlide_bx">
                                    <img src="assets/images/fpro-thumb-2.webp" loading="lazy" width="540" height="520" alt="thumb">
                                    <div class="bxCnt">
                                        <div class="tle">ACAI KICK 22</div>
                                        <a href="index.php" class="learnBtn" aria-label="learn more">LEARN MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="circleSlide_item">
                                <div class="circleSlide_bx">
                                    <img src="assets/images/fpro-thumb-3.webp" loading="lazy" width="540" height="520" alt="thumb">
                                    <div class="bxCnt">
                                        <div class="tle">ACAI KICK 33</div>
                                        <a href="index.php" class="learnBtn" aria-label="learn more">LEARN MORE</a>
                                    </div>
                                </div>
                            </div>
                            <div class="circleSlide_item last_item">
                                <div class="circleSlide_bx">
                                    <img src="assets/images/fpro-thumb-1.webp" loading="lazy" width="540" height="520" alt="thumb">
                                    <div class="bxCnt">
                                        <div class="tle">ACAI KICK 44</div>
                                        <a href="index.php" class="learnBtn" aria-label="learn more">LEARN MORE</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="Steps">
        <div class="container">
            <div class="secWrap">
                <div class="secTleWrap gsap_delmt_up">
                    <img src="assets/images/steps-tle.svg" loading="lazy" width="1300" height="180" alt="tle">
                    <!-- <h4 class="secTle">How we simplify your smoothie experience</h4> -->
                </div>
                <div class="dFlx stepContainer">
                    <div class="item gsap_delmt_up">
                        <div class="stepsBx">
                            <div class="bxIcon">
                                <img src="assets/images/steps-1.svg" loading="lazy" width="100" height="100" alt="steps">
                            </div>
                            <div class="bxCnt">
                                <div class="tle">STEP 1</div>
                                <div class="txt">Open on Life Smoothies pre-portioned mix of your choice</div>
                            </div>
                        </div>
                    </div>
                    <div class="item gsap_delmt_up">
                        <div class="stepsBx">
                            <div class="bxIcon">
                                <img src="assets/images/steps-2.svg" loading="lazy" width="100" height="100" alt="steps">
                            </div>
                            <div class="bxCnt">
                                <div class="tle">STEP 2</div>
                                <div class="txt">Pour content into a blender and add liquid. <br> <b>Blend for 30 seconds</b> </div>
                            </div>
                        </div>
                    </div>
                    <div class="item gsap_delmt_up">
                        <div class="stepsBx">
                            <div class="bxIcon">
                                <img src="assets/images/steps-3.svg" loading="lazy" width="100" height="100" alt="steps">
                            </div>
                            <div class="bxCnt">
                                <div class="tle">STEP 3</div>
                                <div class="txt">Serve and enjoy!</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="delmt wow animate__fadeInUp" inert>
            <img src="assets/images/delmt-steps-track.webp" loading="lazy" width="800" height="140" alt="track">
            <div class="delmt_fruit stepTarget">
                <img src="assets/images/delmt-steps-fruit.webp" loading="lazy" width="140" height="150" alt="fruit">
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

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // CIRCLE_SLIDE
        const carousel = document.querySelector(".circleSlide");
        const slides = document.querySelectorAll(".circleSlide_item");
        const controlLinks = document.querySelectorAll(".circleSlide_thumb");
        const prevBtn = document.getElementById('circleSlide_prev');
        const nextBtn = document.getElementById('circleSlide_next');
        const totalSlides = slides.length;
        let currentIndex = 0;
        let lastIndex = totalSlides - 1;
        let intervalId;
        const updateCarousel = (targetIndex) => {
            // Ensure indices are within bounds
            targetIndex = (targetIndex + totalSlides) % totalSlides;
            lastIndex = (targetIndex - 2 + totalSlides) % totalSlides;

            // Rotate carousel
            carousel.style.rotate = `-${targetIndex * 90}deg`;

            // Remove previous active and last_item classes
            document.querySelector(".circleSlide_item.active")?.classList.remove("active");
            document.querySelector(".circleSlide_item.last_item")?.classList.remove("last_item");
            document.querySelector(".circleSlide_thumb.active")?.classList.remove("active");
            document.querySelector(".circleSlide_thumb.last_item")?.classList.remove("last_item");

            // Set new active and last_item slides
            slides[targetIndex].classList.add("active");
            slides[lastIndex].classList.add("last_item");

            // Set new active and last_item thumbnails
            controlLinks[targetIndex].classList.add("active");
            controlLinks[lastIndex].classList.add("last_item");

            // Update current index
            currentIndex = targetIndex;
        };
        const startAutoRotate = () => {
            intervalId = setInterval(() => {
                updateCarousel(currentIndex + 1);
            }, 6000);
        };
        const stopAutoRotate = () => {
            clearInterval(intervalId);
        };
        updateCarousel(0);
        startAutoRotate();
        controlLinks.forEach((control) => {
            control.addEventListener("click", () => {
                stopAutoRotate();
                const targetIndex = parseInt(control.dataset.index, 10) - 1;
                updateCarousel(targetIndex);
                startAutoRotate();
            });
        });
        carousel.addEventListener("mouseenter", () => {
            stopAutoRotate();
        });
        carousel.addEventListener("mouseleave", () => {
            startAutoRotate();
        });
        nextBtn.addEventListener('click', () => {
            stopAutoRotate();
            updateCarousel(currentIndex + 1);
            startAutoRotate();
        });
        prevBtn.addEventListener('click', () => {
            stopAutoRotate();
            updateCarousel(currentIndex - 1);
            startAutoRotate();
        });

        // LOAD_SVG
        function loadSVG() {
            fetch("./assets/images/delmt-fProducts-tle.svg")
                .then((response) => {
                    return response.text();
                })
                .then((svg) => {
                    document.getElementById('delmt-fProducts-tle').innerHTML = svg;
                    document.querySelector('#delmt-fProducts-tle>svg').setAttribute("preserveAspectRatio", "xMidYMid slice");
                })
        }
        loadSVG();

        // STEP_ANIMATIONS
        const stepContainer = document.querySelector(".stepContainer");
        const stepTarget = document.querySelector(".stepTarget");
        let animationFrameId = null;
        let targetX = 0;
        let currentX = 0;
        stepTarget.style.left = "50%";

        function updatePosition() {
            const dx = targetX - currentX;
            currentX += dx * 0.1;
            const containerRect = stepContainer.getBoundingClientRect();
            const xOffset = ((currentX - containerRect.left) / containerRect.width) * 100;
            stepTarget.style.left = `${xOffset}%`;
            animationFrameId = requestAnimationFrame(updatePosition);
        }
        updatePosition();

        function moveImage(e) {
            targetX = e.clientX;
        }
        stepContainer.addEventListener("mousemove", moveImage);

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

    });
</script>

<?php include "./includes/footer.php" ?>