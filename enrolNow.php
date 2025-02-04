<?php include "main.php" ?>

<link rel="stylesheet" href="assets/css/pages.min.css?v=1.0.0">

<div id="pageWrapper" class="contactPage enrolNow">
    <section id="InnerBanner">
        <picture>
            <source rel="preload" srcset="assets/images/banner-enrolNow-1.jpg" media="(min-width:768px)" width="1920" height="1080">
            <img rel="preload" src="assets/images/banner-enrolNow-1.jpg" width="640" height="360"
                alt="course" fetchpriority="low" loading="lazy" decoding="async">
        </picture>
        <div class="container">
            <div class="cntWrap">
                <h1 class="mTxt">Start Your Journey Now!</h1>
                <h2 class="mHead">Enrol Now and <br> Transform Your Future!</h2>
            </div>
        </div>
    </section>

    <section id="ContactInfo">
        <div class="container">
            <div class="dFlx">
                <div class="lftSd">
                    <div class="secTle">
                        Enrol Today!
                    </div>
                </div>
                <div class="rgtSd">
                    <h5 class="secDisc">Take the first step towards achieving your goals by enrolling today! Our programs offer expert guidance, practical skills, and a supportive community to help you succeed. Don’t wait—secure your spot now!</h5>
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
                                    <div class="form-group">
                                        <select class="form-select2" aria-label="course">
                                            <option selected disabled>Choose the course from the list</option>
                                            <option value="1">course 1</option>
                                            <option value="2">course 2</option>
                                            <option value="3">course 3</option>
                                        </select>
                                        <div class="help-block danger d-none">Invalid Input</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <select class="form-select2" aria-label="profession">
                                            <option selected disabled>Current Profession</option>
                                            <option value="1">profession 1</option>
                                            <option value="2">profession 2</option>
                                            <option value="3">profession 3</option>
                                        </select>
                                        <div class="help-block danger d-none">Invalid Input</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <select class="form-select2" aria-label="experience">
                                            <option selected disabled>Work Experience</option>
                                            <option value="1">Experience 1</option>
                                            <option value="2">Experience 2</option>
                                            <option value="3">Experience 3</option>
                                        </select>
                                        <div class="help-block danger d-none">Invalid Input</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <input type="text" class="form-control" placeholder="Reason to Join the course" required>
                                        <div class="help-block danger d-none">Invalid Input</div>
                                    </div>
                                </div>
                                <div class="col-12 col-sm-6">
                                    <div class="form-group">
                                        <select class="form-select2" aria-label="hear">
                                            <option selected disabled>How did you hear about us?</option>
                                            <option value="1">hear 1</option>
                                            <option value="2">hear 2</option>
                                            <option value="3">hear 3</option>
                                        </select>
                                        <div class="help-block danger d-none">Invalid Input</div>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-group">
                                        <div class="c-checkbox">
                                            <input type="checkbox" id="Declaration">
                                            <label class="label" for="Declaration">By submitting this form, you consent to DLU Academy. Academy collecting and processing your information for course inquiries. We respect your privacy and will not share your data without your permission.</label>
                                        </div>
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
            </div>
        </div>
    </section>

</div>

<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js" defer></script>

<script>
    window.addEventListener('DOMContentLoaded', function() {
        // SELECT_2
        $(".form-select2").select2({
            minimumResultsForSearch: Infinity,
            closeOnSelect: true,
            theme: "select2-custom",
        });
    });
</script>

<?php include "./includes/footer.php" ?>