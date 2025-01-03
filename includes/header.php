<header id="Header">
    <div id="HeaderMain">
        <div class="container">
            <div class="mainFlx">
                <div class="lftSd">
                    <a href="index.php" class="logo" aria-label="Logo">
                        <img src="assets/images/logo.svg" width="160" height="160" alt="logo">
                    </a>
                </div>
                <div class="rgtSd">
                    <div class="accoMenuDesk">
                        <div class="accordion accoMenu" id="AccoMenuMob">
                            <?php include "includes/navLinks.php" ?>
                        </div>
                    </div>
                    <div class="cNavOuter" id="CNavPOP">
                        <div class="cNavWrap">
                            <button type="button" class="cNacBtn close" aria-labelledby="CNavPOP">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                            <div class="mobLogo">
                                <img src="assets/images/logo.svg" width="160" height="160" loading="lazy" alt="logo">
                            </div>
                            <div class="accordion accoMenu" id="AccoMenuMob">
                                <?php include "includes/navLinks.php" ?>
                            </div>
                        </div>
                    </div>
                    <div class="qLinkItemWrap">
                        <div class="item">
                            <button class="qLinkBtn hoveranim" aria-label="join">
                                <span>Join the community</span>
                            </button>
                        </div>
                        <div class="item">
                            <button class="qLinkBtn qLinkBtn2 hoveranim" aria-label="enrol">
                                <span>Enrol now</span>
                            </button>
                        </div>
                        <div class="item cNacBtnWrap">
                            <button type="button" class="cNacBtn" aria-label="menu">
                                <span></span>
                                <span></span>
                                <span></span>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>