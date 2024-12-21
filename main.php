<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <noscript>
        <style type="text/css">
            .no-js {
                display: none !important;
            }
        </style>
    </noscript>
    <title>DONT LOOK UP ACADEMY</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="robots" content="noindex, nofollow, max-image-preview:large">

    <meta name="author" content="Ajay nellengara">
    <meta name="keywords" content="Home">
    <meta name="description" content="look withintransform beyond">
    <meta name="theme-color" media="(prefers-color-scheme: light)" content="#f06499">
    <meta name="theme-color" media="(prefers-color-scheme: dark)" content="#f06499">
    <meta name="msapplication-TileColor" content="#f06499">
    <meta name="msapplication-navbutton-color" content="#f06499">
    <meta name="apple-mobile-web-app-status-bar-style" content="#f06499">

    <meta property="og:locale" content="en_US">
    <meta property="og:type" content="website">
    <meta property="og:site_name" content="DONT LOOK UP ACADEMY">
    <meta property="og:title" content="look within transform beyond">
    <meta property="og:description" content="look within transform beyond">
    <meta property="og:image" content="">
    <meta property="og:url" content="">

    <link rel="canonical" href="">
    <link rel="apple-touch-icon" sizes="180x180" href="assets/images/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="assets/images/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="assets/images/favicon-16x16.png">
    <link rel="manifest" href="site.webmanifest">

    <style>
        .owl-carousel:not(.owl-loaded),
        .swiper:not(.swiper-initialized),
        .splide:not(.is-initialized) {
            opacity: 0;
        }

        figure {
            margin: 0 !important;
        }
    </style>

    <script>
        // VIEWPORT_HEIGHT
        const appHeight = () => document.documentElement.style.setProperty('--app-height', `${window.innerHeight}px`)
        window.addEventListener('resize', function() {
            appHeight();
        });
        document.addEventListener("DOMContentLoaded", function() {
            appHeight();
        });
        // NO_JS
        (function() {
            document.querySelectorAll('.no-js').forEach(function(element) {
                element.classList.remove('no-js');
            });
        })();
        //SITE_LOADER
        function hidePreloader() {
            const preloader = document.getElementById("preloader");
            const circle = document.querySelector(".circle");

            circle.style.transform = "scale(16)";
            preloader.style.opacity = "0";

            setTimeout(function() {
                preloader.style.display = "none";
            }, 1600);
        }

        if (document.readyState === 'loading') {
            document.addEventListener("DOMContentLoaded", hidePreloader);
        } else {
            hidePreloader();
        }
    </script>

    <!-- PRECONNECTING_MOST_USED_DOMAIN --->
    <link rel="preconnect" href="https://cdnjs.cloudflare.com">
    <link rel="preconnect" href="https://ux.intersmarthosting.in">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <!-- FONTS -->
    <link href="https://fonts.googleapis.com/css2?family=Anek+Latin:wght@100..800&family=Big+Shoulders+Display:wght@100..900&family=Big+Shoulders+Text:wght@100..900&family=Sora:wght@100..800&display=swap" rel="stylesheet">

    <!-- BOOTSTRAP -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- ANIMATE_CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" integrity="sha512-c42qTSw/wPZ3/5LBzD+Bw5f7bSF2oxou6wEb+I/lqeaKV5FDIfMvvRp772y4jcJLKuGUOpbJMdg/BTl50fJYAw==" crossorigin="anonymous" referrerpolicy="no-referrer">

    <!-- JQUERY -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js" crossorigin="anonymous"></script>

    <!-- LAZYLOAD -->
    <script src="https://cdn.jsdelivr.net/npm/intersection-observer@0.7.0/intersection-observer.min.js" defer></script>
    <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@17.8.3/dist/lazyload.min.js" defer
        onload="initializeLazyLoad()"></script>
    <script>
        function initializeLazyLoad() {
            var lazyLoadInstance = new LazyLoad({});
        }
    </script>

    <link id="AppStyle" rel="stylesheet" href="assets/css/app.min.css?v=1.0.0">
</head>

<body class="no-js <?= basename($_SERVER["SCRIPT_FILENAME"], '.php') == 'index' ? 'home' : '' ?>">

    <div id="preloader"
        style="width: 100%;height: 100%;position: fixed;z-index: 999;inset: 0;display: flex;align-items: center;justify-content: center; transition: opacity 0.4s ease;" inert>
        <div class="circle"
            style="position: absolute;width: 200px;height: 200px;background: rgba(249, 249, 250, 1);border-radius: 50%;box-shadow: 0 0 0 100vw #fff;">
        </div>
        <img decoding="async" class="logo" src="assets/images/logo.webp" style="width: 100px;height: auto; z-index: 1;" width="100" height="100" alt="logo">
    </div>

    <?php include "includes/header.php" ?>