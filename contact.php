<?php include "main.php" ?>

<link rel="stylesheet" href="assets/css/pages.min.css?v=1.0.0">

<div id="pageWrapper" class="contactPage">
    <section id="InnerBanner">
        <picture>
            <source rel="preload" srcset="assets/images/banner-contact-1.jpg" media="(min-width:768px)" width="1920"
                height="1080">
            <img rel="preload" src="assets/images/banner-contact-1.jpg" width="640" height="360" alt="course"
                fetchpriority="low" loading="lazy" decoding="async">
        </picture>
        <div class="container">
            <div class="cntWrap">
                <h1 class="mTxt">Get in Touch</h1>
                <h2 class="mHead">We'd Love to <br> Hear from You!</h2>
            </div>
        </div>
    </section>

    <section id="ContactInfo">
        <div class="container">
            <div class="dFlx">
                <div class="lftSd">
                    <div class="secTle">
                        Let's Connect!
                    </div>
                </div>
                <div class="rgtSd">
                    <h5 class="secDisc">Have questions or need assistance? Reach out to us! Our dedicated team is here
                        to help with inquiries, feedback, and support. Contact us today and let's connect!</h5>
                </div>
                <div class="lftSd">
                    <div class="addrsBx">
                        <div class="item">
                            <div class="tle">Call Centre</div>
                            <p>
                                <a href="tel:+00971585962334" target="_blank" aria-label="phone">00971 585 962 334</a>
                            </p>
                            <p>
                                <a href="mailto:admission@dontlookup.academy" target="_blank"
                                    aria-label="mail">admission@dontlookup.academy</a>
                            </p>
                        </div>
                        <div class="item">
                            <div class="tle">Our Location</div>
                            <p>Dubai <br>
                                United Arab Emirates</p>
                        </div>
                    </div>
                </div>
                <div class="rgtSd">
                    <div class="formWrap wow animate__fadeInUp">
                        <form method="POST">
                            <div class="row">
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="First Name" required>
                                        <div class="help-block danger d-none">Invalid Input</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Last Name" required>
                                        <div class="help-block danger d-none">Invalid Input</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="mail" class="form-control" placeholder="Email" required>
                                        <div class="help-block danger d-none">Invalid Input</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="tel" class="form-control" placeholder="Phone" required>
                                        <div class="help-block danger d-none">Invalid Input</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Subject" required>
                                        <div class="help-block danger d-none">Invalid Input</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Message" required>
                                        <div class="help-block danger d-none">Invalid Input</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="btnWrap">
                                        <button type="submit" class="baseBtn_1 hoveranim" aria-label="submit">
                                            <span>SUBMIT</span>
                                        </button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="fullSd">
                    <div class="mapBx">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d14435.076514939707!2d55.285516874106804!3d25.24469993089804!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f42d7bf391ce5%3A0xc92c59be702d25dd!2sAl%20Karama%20-%20Dubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1739986225163!5m2!1sen!2sin"
                            width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

</div>

<!-- <script>
    
</script> -->

<?php include "./includes/footer.php" ?>