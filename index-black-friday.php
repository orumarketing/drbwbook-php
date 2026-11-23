<?php
include_once __DIR__ . '/config.php';
$this_page_book_title = "Black Friday"; // Put the title of whatever is in the hero section
$is_home_folder = true; // Set this to true if the page is in the home folder
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="generator" content="Astro v4.0.3">
    <title>Black Friday Specials</title>
    <link rel="shortcut icon" type="image/jpg" href="<?php echo $base_url; ?>assets/img/favicon.ico">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
    <link href="<?php echo $base_url; ?>assets/css/color-vars.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>assets/css/nucleo-icons.css" rel="stylesheet">
    <link href="<?php echo $base_url; ?>assets/css/argon-design-system.css?v=1.0.3" rel="stylesheet">
    <link href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet"
        integrity="sha384-rqn26AG5Pj86AF4SO72RK5fyefcQ/x32DNQfChxWvbXIyXFePlEktwD18fEz+kQU" crossorigin="anonymous">
    <link href="https://kit.fontawesome.com/029e596eee.css" rel="stylesheet" crossorigin="anonymous">
    <link href="./assets/css/nucleo-svg.css" rel="stylesheet">
    <link href="./assets/css/custom-local.css?v=1.0.0" rel="stylesheet">
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4KLYSQES10"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag() { dataLayer.push(arguments); }
        gtag('js', new Date());
        gtag('config', 'G-4KLYSQES10');
    </script>
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-PPK9S4T');</script>
    <script>(function (w, d, s, l, i) {
            w[l] = w[l] || []; w[l].push({
                'gtm.start':
                    new Date().getTime(), event: 'gtm.js'
            }); var f = d.getElementsByTagName(s)[0],
                j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
                    'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
        })(window, document, 'script', 'dataLayer', 'GTM-NRZ2XCZJ');</script>
    <script>
        var _mtm = window._mtm = window._mtm || [];
        _mtm.push({ 'mtm.startTime': (new Date().getTime()), 'event': 'mtm.Start' });
        var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
        g.async = true; g.src = 'https://analytics.oru.edu/js/container_aChVp4fh.js'; s.parentNode.insertBefore(g, s);
    </script>
    <script>
        !function (f, b, e, v, n, t, s) {
            if (f.fbq) return; n = f.fbq = function () {
                n.callMethod ?
                n.callMethod.apply(n, arguments) : n.queue.push(arguments)
            };
            if (!f._fbq) f._fbq = n; n.push = n; n.loaded = !0; n.version = '2.0';
            n.queue = []; t = b.createElement(e); t.async = !0;
            t.src = v; s = b.getElementsByTagName(e)[0];
            s.parentNode.insertBefore(t, s)
        }(window, document, 'script',
            'https://connect.facebook.net/en_US/fbevents.js');

        fbq('init', '200092351435273');
        fbq('init', '565106160842111'); 
        fbq('track', 'PageView');
    </script>
    <noscript>
        <p><img src="//oru.edu/analytics/matomo/matomo/matomo.php?idsite=9&rec=1" style="border:0;" alt=""
                style="display:none;visibility:hidden"></p>
    </noscript>
    <style>
        .btn-secondary {
            color: var(--button-hero-text);
            font-weight: 700;
            background-color: var(--button-hero-color);
            border-color: var(--button-hero-color)
        }

        .btn-secondary--fancy {
            background-color: var(--secondary-color);
            border-color: var(--secondary-color)
        }

        .btn-secondary:hover {
            box-shadow: 0 18px 20px #00000078;
            transform: translateY(-.4rem)
        }

        .hero-btn {
            color: var(--button-text-main-color);
            font-weight: 700;
            background-color: var(--button-main-color);
            border-color: var(--button-main-color)
        }

        .hero-btn:hover {
            color: var(--button-main-color);
            /* background-color: unset; */
            border-color: var(--button-main-color)
        }

        .testimonials em {
            color: var(--testimonial-author)
        }

        :root {
            --color-white: #fff;
            --color-black: #000;
            --hero-title-color: var(--main-font-color);
            --hero-paragraph-color: var(--main-font-color);
            --space-above-hero: var(--color-white);
            --button-hero-color: var(--accent-color-one);
            --button-hero-text: var(--main-color);
            --button-main-color: var(--main-color);
            --button-color-two: var(--accent-color-one);
            --button-color-three: var(--accent-color-one);
            --button-text-main-color: var(--color-white);
            --button-text-color-two: var(--main-color);
            --button-text-color-three: var(--font-color-three);
            --button-hover-color: var(--secondary-color);
            --button-hover-text: var(--main-color);
            --section-titles-color: var(--main-color);
            --testimonial-author: var(--secondary-color);
            --cta-background: var(--main-color);
            --cta-text-main-color: var(--secondary-color);
            --cta-text-color-two: ;
            --cta-button-background: var(--accent-color-one);
            --cta-button-text-color: var(--main-color);
            --horizontal-line-color: var(--secondary-color);
            --background-shape-color: var(--main-color)
        }

        h3 {
            color: var(--main-color)
        }

        .bd-btm {
            border-bottom: .5px solid var(--horizontal-line-color)
        }

        .bg-dark {
            background-color: var(--main-color) !important
        }

        .btn-secondary {
            color: var(--cta-button-text-color);
            font-weight: 700;
            background-color: var(--cta-button-background);
            border-color: var(--cta-button-background)
        }

        .btn-secondary:hover {
            box-shadow: 0 18px 20px #00000078;
            transform: translateY(-.4rem)
        }

        .card {
            position: relative;
            padding: 0 !important;
        }
        .card-img {
            min-height: unset !important;
        }

        .card:hover .overlay {
            visibility: visible;
            opacity: 1
        }

        .overlay {
            visibility: hidden;
            opacity: 0;
            position: absolute;
            inset: 0;
            background-color: #fffc;
            transition: opacity .5s;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column
        }

        .link {
            text-decoration: underline
        }

        .btn-primary {
            background-color: var(--button-main-color);
            border-color: var(--button-main-color);
            color: var(--button-text-main-color);
            font-weight: 700
        }

        .btn-primary:hover {
            box-shadow: 0 18px 20px #00000078;
            transform: translateY(-.15rem)
        }

        .btn-secondary {
            background-color: var(--button-color-two);
            border-color: var(--button-color-two);
            color: var(--button-text-color-two);
            font-weight: 700
        }

        .btn-secondary:hover {
            box-shadow: 0 18px 20px #00000078;
            transform: translateY(-.15rem)
        }

        .btn-download {
            max-width: 200px;
            background-color: var(--button-color-three);
            border-color: var(--button-color-three);
            color: var(--button-text-color-three);
            font-weight: 700
        }

        .btn-download:hover {
            box-shadow: 0 18px 20px #00000078;
            transform: translateY(-.15rem)
        }

        :root {
            --main-color: #0a0504;
            --secondary-color: #0a0504;
            --accent-color-one: #f8d949;
        }

        #homepage .navbar,
        #homepage .sec-download {
            background-color: var(--cta-background)
        }

        @media screen and (min-width: 1199.5px) {
            #homepage .page-header.header-filter {
                margin-bottom: 140px
            }
        }
        /* Snowflake styles */
        #snow {
            position: absolute;
            top: 0;
            left: 0;
            /* transform: translateX(-50%); */
            width: 100%;
            height: 100%;
            pointer-events: none;
            overflow: hidden;
            z-index: 5;
        }
        .roundSmall,
        .roundMedium,
        .roundLarge {
            background: white;
            border-radius: 50%;
            position: absolute;
            width: 3px;
            height: 5px;
            filter: blur(1.5px);
        }
        .roundMedium {
            width: 3px;
            height: 10px;
            filter: blur(2px);
        }
        .roundLarge {
            width: 3px;
            height: 15px;
            filter: blur(3px);
        }

        .starMedium {
            position: absolute;
            width: 16px;
            height: 16px;
            filter: blur(0.5px);
            opacity: 0;
        }

        .sharpLarge {
            position: absolute;
            width: 20px;
            height: 20px;
            filter: blur(1.25px);
            opacity: 0;
        }
    </style>
</head>
<body id="homepage" class="sections-page">
    <noscript><iframe
            src="https://www.googletagmanager.com/ns.html?id=GTM-PPK9S4T" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <noscript><iframe
            src="https://www.googletagmanager.com/ns.html?id=GTM-NRZ2XCZJ" height="0" width="0"
            style="display:none;visibility:hidden"></iframe></noscript>
    <img height="1" width="1" alt="" style="display:none;visibility:hidden"
        src="https://www.facebook.com/tr?id=200092351435273&ev=PageView&noscript=1">
    <noscript><img height="1" width="1"
        alt="" style="display:none"
        src="https://www.facebook.com/tr?id=565106160842111&ev=PageView&noscript=1"></noscript>
    <?php include_once __DIR__ . '/assets/includes/top-nav.php'; ?>
    <div class="page-header page-header-small header-filter position-relative">
        <!-- snow -->
        <div id="snow">
            <svg id="flakesOne" class="sharpLarge" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 59.8 56.4">
                <path d="M9.8 24.1a9.4 9.4 0 0 1 1.5 3 6.7 6.7 0 0 1-3.4.2c-1.8-1.5-2.7-3.9-4.5-5.3-.6.3-.7.7-.4 1.1l1.9 2.8a9.1 9.1 0 0 1 .7 1.4H2.9L.8 25.2c-.1-.1-.4.2-.8.4l1.3 2.5a13.4 13.4 0 0 1-.6 1.2A2.1 2.1 0 0 0 .3 31c1.4.1 1.6-1.6 2.9-2.2h2.2c-.2 2.2-2.7 3-2.4 5.5 2.2-1.5 3-3.9 4.8-5.4a4.5 4.5 0 0 1 3.5.4c-1.4 3-3.5 5.5-4.8 8.5l.3.3c.3 0 .7 0 .8-.2l1.7-2.5c1.4-2.2 2.6-4.5 4.1-6.6h2.8l1 .3-1.2 3.2c-.3 1-1.3 2.2-.9 3.8.5-.3.9-.5 1-.7l1.7-4.1 1.1-2.3c4.2-.4 5.8-.3 7.6.3a9.7 9.7 0 0 1-1.5 1l-1.6.8c.3 1.5.7 1.8 1.7 1.4s.8-1.1 1.7-.5c-1.1 1.8-2 3.8-3.1 5.5-2.7.3-5.1-1-7.7-.4l.3 1c2.1.3 4.2.5 6.3 1a10.8 10.8 0 0 1-1.7 3.4l-10.8.9-.2.3a.8.8 0 0 0 1 .7l7-.2 1.9.2a11.2 11.2 0 0 1-1.5 3.1c-2.3 1.1-4.8.4-6.8 1.6 0 .8.4.9 1 .9l3.8-.5c.2 0 .3.3.5.4a3.2 3.2 0 0 1-.3.9l-.8 1.3c-.8.8-2.5-.2-3.1 1.6l2.9.3c.8.7.8 1.9 1.7 2.2l.6-.4L17 53c-.2-.9.6-1.4 1.6-2.1 1.3 1.2.9 3.6 2.9 4.7.2-2.8-1.7-4.7-2-7.2a9 9 0 0 1 1.8-3.1c2.2 2.8 3 6.3 5.3 9.1a4.9 4.9 0 0 0 .4-1 16 16 0 0 0-1-2.3l-3.8-7.5a8.5 8.5 0 0 1 2.1-3.4c1.9 1.5 2.5 4.1 4.8 5.4 0-.6.2-.9.1-1.1l-1.6-2.3c-.8-1.3-2-2.4-2.5-3.8 2.4-4.8 2.6-5.1 4-6.3a18.6 18.6 0 0 1-.2 5.8c1.1.7 1.1.7 2-.2a22.8 22.8 0 0 1-.2-2.7 9 9 0 0 1 .2-2.8 17.4 17.4 0 0 1 3.8 6.5L33 41.3l-2.2 3a.9.9 0 0 0 .2 1.2l.9-.5 2.6-3.5c.9-1.1.6-1.1 1.5-1l1.7 3.1-3.5 7a15.1 15.1 0 0 0-1.2 2.6c-.2.4-.2.8.4 1s.8-.8 1.1-1.3l3.2-6.4a5.7 5.7 0 0 1 1.1-1.1l1.6 2.9c-.3 2.7-2.1 4.6-2 7.4.5-.4.9-.5 1-.8l1.7-3.7c.6-1.2.3-.2.6-.4L43 53a23.3 23.3 0 0 0-.9 2.9l.8.5 1.3-2.2c1.1-.5 2.2.1 3.2-.8-.9-1.1-2.3-.6-3.3-1.4s-1.1-1.1-.9-2.4a12.3 12.3 0 0 1 3.3.3H48c.2-.1.3-.4.6-.8-2.3-1.3-4.9-.4-7.1-1.7l-1-1.9c-.3-.6-.1-.7-.2-1.2h8.9c.5 0 1-.2.6-1.1l-10.7-.7a6.7 6.7 0 0 1-1.7-3.6 34.3 34.3 0 0 0 3.4-.6c1-.3 2.4.3 3.2-1.3-2.7-.7-5.2.8-8 .3l-2.8-5.4c-.1-.2.1-.4.2-.7l2.1 1.3c.4-.5.8-.8.9-1.3s-.3-.9-.8-1.1l-1.2-.3a10 10 0 0 1-.9-1H41c1.7 2.2 1.7 5.2 4 7.5.1-3-1.9-5-1.9-7.6a9.2 9.2 0 0 1 3.7.2l4.1 6.6a11.4 11.4 0 0 0 1.5 2.5c.2.3.6.5 1.1-.1-1.1-3.1-3.6-5.6-4.8-9h3.7l2.1 2.8c.7.9 1.2 2 2.1 2.5s.7-.7.5-1.1l-2.4-3.5c-.1-.2 0-.4.1-.7h2.3c1.1.7 1.3 2 2.5 2.2.7-1.4-1-2-.8-3.4a8.5 8.5 0 0 0 1-1.7c.1-.2-.1-.5-.1-.8s-1.6 1.6-2.6 2.1a3.7 3.7 0 0 1-2.7-.2l1-1.7a17.7 17.7 0 0 0 1.6-2.2c.3-.5.4-1-.5-1.1-1.7 1.5-2.6 3.8-4.5 5.3a8.1 8.1 0 0 1-3.4-.3 18 18 0 0 1 1.1-2l3.5-5.9c.3-.5.3-.9-.3-1.7a31.2 31.2 0 0 0-3.1 4.9l-3.2 5c-1.2-.2-2.4.4-3.7-.6a25.6 25.6 0 0 0 1.2-3.2l.9-2.7c.2-.9-.1-.7-.8-.6-1.3 2.1-1.7 4.8-3.2 7h-5.2c-.3 0-.8 0-.7-.9l4.3-2.4c0-1.3 0-1.3-1-1.7l-4.9 3.2a1.1 1.1 0 0 1-1.4-.1v.2a.1.1 0 0 0-.1-.1l3.2-5.3a10.4 10.4 0 0 1 1.2-1.7l5.5.6h1.5l.5-.8-2.4-.6-3-.4c-.5-.1-1-.1-1.2-1s.8-2.2 2.1-3l7.6-.2a9.9 9.9 0 0 0 2.4-.3c.2 0 .3-.4.7-.9l-1.9-.2-6.6.2-1.6-.2a11 11 0 0 1 1.8-3.4l5.7-.9c.5-.1 1-.3.6-1.1s-3.3.3-5 .3.5-1.9 1.1-2.7l2.3-.4c.4-.1.7-.4.4-1.1l-2.6-.2L42.8 0h-.5c-.8 1.2.8 2.2.4 3.4a2.9 2.9 0 0 1-1.5 2A19.2 19.2 0 0 0 40 2.9c-.4-.8-.4-1.8-1.3-2.2s-.3.1-.3.2c-.3 2.5 1.7 4.3 1.9 7-.7.7-.7 2.2-2.2 2.7l-2.2-4.4c-1.8-3.5-1.8-3.5-3-4.2a4.8 4.8 0 0 0 0 1.2l1.8 3.6 2.9 5.8-1.4 2.6-.7.7c-1.8-1.5-2.6-4-4.9-5.5l.1 1.5 2.4 3.2 1.7 2.6-3.1 5.5c-.1.2-.4.2-.6.3a10.9 10.9 0 0 0-.1-1.8c0-.8-.7-1.1-1.5-.8s-.4.5-.6.7a3.9 3.9 0 0 1-.1 2.4 51.9 51.9 0 0 1-3.7-6.5l3-4.1a12.2 12.2 0 0 0 1.2-1.9c.1-.2-.1-.5-.2-.9s-1.6 1.6-2.4 2.4-1.3 2.1-2.5 3a12.8 12.8 0 0 1-1.8-3.5l1.3-2.7 3.2-6.4c.2-.5.4-1-.1-1.4s-.9.4-1.1.9l-3.4 6.6c-.2.4-.4 1-1.2 1l-1.6-2.9 1.2-3.2c.4-1.2 1.1-2.2 1-3.4s-.9-.2-1.1.2-.9 3-2.1 4.2a3.9 3.9 0 0 1-1.3-2.3l.7-3.1c-1.7 0-1.4 1.7-2.6 2.3h-1.9c-.2 0-.4.3-.6.5s2.1.5 3 1.2 1.2 1.4 1 2.6c-1.8.1-3.5-.8-5.2-.2.1.9.6 1 1.1 1.1l5.5.8a9.6 9.6 0 0 1 1.6 3.4 9.3 9.3 0 0 1-3.3.1h-3.3c-1.1.1-2.2-.4-3.2.3a1 1 0 0 0 1.1 1l7.5.2 2.3.3a7.5 7.5 0 0 1 1.7 3.3c-2.1 1.1-4.5.4-6.5 1.6.2.3.3.7.5.7h1.5a51.4 51.4 0 0 1 5.5-.6c2.2 3.1 3 4.7 3.4 6.7a16.1 16.1 0 0 1-4.5-3c-1.1.7-1.1.7-1 1.9s3.1 1.2 4.4 2.9a21.2 21.2 0 0 1-7.1.1l-2.7-6.4-.4-.4h-.5c-.4 2.5 1.8 4.3 1.8 7a11.6 11.6 0 0 1-3.7-.1l-1.3-2-3.5-5.9A8.1 8.1 0 0 0 7.3 18c-.1-.1-.5.1-.8.1a9 9 0 0 0 1.5 3z" fill="#fff"/>
            </svg>
                <svg id="flakesTwo" class="starMedium" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 55.1 60">
                <path d="M57.8,44.5l-3.3-1.9,1.9-3.3L54.1,38l-1.9,3.2L46.6,38V31.5h6.8V28.8H46.6V22.2L52.2,19l1.9,3.3L56.4,21l-1.9-3.3,3.3-1.9-1.4-2.4-3.2,1.9L51.3,12l-2.4,1.4,1.9,3.3-5.6,3.2-5.6-3.3L43,10.7,40.6,9.4l-3.3,5.8-5.7-3.4V5.6h4.1V2.9H31.6V.1H28.9V2.9H24.8V5.6h4.1v6.2l-5.7,3.4L19.8,9.4l-2.3,1.3,3.3,5.9-5.6,3.3L9.7,16.7l1.8-3.3L9.2,12,7.3,15.3,4,13.4,2.7,15.8l3.2,1.9L4,21l2.4,1.3L8.3,19l5.6,3.3v6.5H7v2.7h6.9V38L8.3,41.2,6.4,37.9,4,39.3l1.9,3.3L2.7,44.5,4,46.8l3.3-1.9,1.9,3.3,2.4-1.3L9.7,43.6l5.5-3.2,5.6,3.3-3.4,5.8,2.4,1.4,3.4-5.8,5.7,3.3v6.3H24.8v2.7h4.1v2.7h2.7V57.4h4.1V54.7H31.6V48.4l5.7-3.3,3.3,5.8L43,49.5l-3.4-5.8,5.6-3.3,5.6,3.2-1.9,3.3,2.4,1.3,1.9-3.3,3.2,1.9ZM43.9,36.4l-11-6.3,11-6.3ZM42.5,21.5,31.6,27.8V15ZM28.9,15V27.8l-11-6.3ZM16.6,23.8l10.9,6.3L16.6,36.4Zm1.3,15,11-6.3V45.2Zm13.7,6.4V32.5l10.9,6.3Z" transform="translate(-2.7 -0.1)" fill="#fff"/>
            </svg>
        </div>
        <div class="page-header-image" style="background: linear-gradient(45deg, #1e0d0d00, #6c6c6c69),
          url(<?php echo $base_url; ?>assets/img/new-images/snow-background.jpg);background-size: cover;background-repeat: no-repeat;">
            <div class="text-center text-uppercase navbottom space-above-hero d-none">
                <p class="navbottom-text">&nbsp;</p>
            </div>
            <div class="container">
                <div class="row align-items-center text-left">
                    <div class="col-lg-7 pl-0">
                        <img class="pop-out-book mr-lg-5" src="<?php echo $base_url; ?>assets/img/new-images/2026ChristmasBookSale3.png" width="100%" alt="Black Friday Specials">
                    </div>
                    <div class="col-lg-5 hero">
                        <h1 class="display-3 dark-text order-lg-0">Black Friday Specials</h1>
                        <p class="lead pb-0 dark-text order-lg-1"><em>Holiday Sale!</em> 50% off all books and bundles, Spanish editions included. Nov 24–Dec 25. Don’t miss out!</p>
                        <div class="my-5">
                        <div class="d-none d-lg-block"> 
                            <a class="btn btn-secondary hero-btn mt-2" href="#books" data-astro-cid-xvd67bzn>Order Now</a> 
                        </div>
                        <div class="d-lg-none">
                            <a class="btn btn-dark btn-block hero-btn" href="#books" data-astro-cid-n2irbncb>Order Now</a> 
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <section class="section bd-btm-true" id="books">
        <div class="container col-md-11 col-xl-10">
            <h3 class="display-3 pt-3 mb-0 text-center text-uppercase">Your Next Great Read</h3>
            <h5 class="display-5 pb-3 mb-5 text-center">50% Off Singles &amp; Bundles!</h5>
            <div class="row mt-3">
                <div class="col-12 col-lg-7">
                    <div class="row">
                        <?php require_once __DIR__ . '/assets/includes/more-titles.php'; ?>
                    </div>
                </div>
                <div class="col-12 col-lg-5">
                    <a href="https://shop.harpandswordmedia.com/a/bundles/dr.-billy-wilsons-library-esr5" target="_blank" rel="noopener noreferrer">
                    <img class="img-fluid" src="<?php echo $base_url; ?>assets/img/new-images/bundle-hero.png" alt="Books Bundle"></a>
                </div>
            </div>
            <div class="row">
                <div class="col-7 mx-auto text-center">
                    <p><em>Get ready for the ultimate reading experience with our Black Friday Specials! Enjoy 50% off all titles and bundles, available from Nov 24 to Dec 25. Don't miss out on these incredible deals!</em></p>
                </div>
            </div>
        </div>
    </section>

   <!--  <section class="section sec-download text-bg-dark p-0" data-astro-cid-ddbcycih>
        <div class="container" data-astro-cid-ddbcycih>
            <div class="row" data-astro-cid-ddbcycih>
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center py-4" data-astro-cid-ddbcycih>
                    <h4 class="display-4 text-white mb-0 text-center">Books Bundle</h4>
                    <p class="text-center text-light">Dr. Billy Wilson’s Library: All four books for <del>$97.22</del> <em>$60</em></p>
                    <p class="text-center buttons-section"> 
                        <a href="https://shop.harpandswordmedia.com/a/bundles/dr.-billy-wilsons-library-esr5" class="btn btn-secondary mt-2" target="_blank" data-astro-cid-so3q4bn5>Order Now</a>
                        <a href="#" class="btn btn-primary mt-2" target="_blank" style="border: 1px solid white;" data-astro-cid-so3q4bn5>Learn More</a>
                    </p>
                </div>
                <div class="col-12 col-md-6" data-astro-cid-ddbcycih>
                    <div class="d-flex align-items-center justify-content-center" style="height: 100%"
                        data-astro-cid-ddbcycih>
                        <img class="img-fluid" src="<?php //echo $base_url; ?>assets/img/new-images/bundle-footer.png" alt="Books Bundle">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section testimonials team-1 bd-btm-false">
        <div class="container col-md-11 col-xl-10">
            <h3 class="display-3 px-3 mb-3 text-center text-uppercase">WHAT OTHERS ARE SAYING</h3>
            <div class="row">
                <div class="col-lg-6 profile">
                    <div>
                    <div class="testimony">
                        <p class="lead m-0 pb-3"> <b>&ldquo;
                        This book is both timely and timeless.…Filled with scripture and passion, this book is a much-needed wake-up call to the body of Christ.
                            &rdquo;</b> <br> <em>&ndash; CHRISTINE CAINE, Founder, A21 and Propel Women</em> </p>
                    </div>
                    <div class="testimony">
                        <p class="lead m-0 pb-3"> <b>&ldquo;
                        Dr. Wilson has identified a significant felt need and provides solid biblical advice on how to hear and respond to a generation that is crying for spiritual fathers.
                            &rdquo;</b> <br> <em>&ndash; DOUG CLAY, General Superintendent, Assemblies of God USA</em> </p>
                    </div>
                    <div class="testimony">
                        <p class="lead m-0 pb-3"> <b>&ldquo; <em>Father Cry</em> serves as a prophetic and reconciliatory prescription for a generation seeking authentic relationships with spiritual fathers and mothers.
                            &rdquo;</b> <br> <em>&ndash; REV. SAMUEL RODRIGUEZ, President, National Hispanic Christian Leadership Conference</em> </p>
                    </div>
                    </div>
                </div>
                <div class="col-lg-6 profile">
                    <div>
                    <div class="testimony">
                        <p class="lead m-0 pb-3"> <b>&ldquo; As the author of <em>Father Cry</em>, Dr. Wilson illuminates a societal, natural, and spiritual mentorship deficiency. He answers the multigenerational wail of &apos;Who will teach us, and who will show us the way?&apos;
                            &rdquo;</b> <br> <em>&ndash; BISHOP J. DREW SHEARD, Presiding Bishop and Chief Apostle, Church of God in Christ</em> </p>
                    </div>
                    <div class="testimony">
                        <p class="lead m-0 pb-3"> <b>&ldquo; Let it not be said that we failed to provide the spiritual nurture and wisdom for the next generation. This book will show you how to equip youth for kingdom impact.
                            &rdquo;</b> <br> <em>&ndash; ED STETZER, Dean, Talbot School of Theology</em> </p>
                    </div>
                    <div class="testimony">
                        <p class="lead m-0 pb-3"> <b>&ldquo; <em>Father Cry</em> is a book that will touch the hearts of many who have experienced wounding and abandonment. It offers hope and restoration through the Father’s love and is a great resource for both parents and children alike.
                            &rdquo;</b> <br> <em>&ndash; RUSSELL EVANS, Senior Pastor, Planetshakers</em> </p>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="section sec-download text-bg-dark" data-astro-cid-ddbcycih>
        <div class="container" data-astro-cid-ddbcycih>
            <div class="row" data-astro-cid-ddbcycih>
                <div class="col-12 col-md-6" data-astro-cid-ddbcycih>
                    <div class="d-flex align-items-center justify-content-center" style="height: 100%"
                        data-astro-cid-ddbcycih>
                        <h4 class="display-4 text-white mb-0 text-center">
                            Black Friday Specials<br>
                            50% off
                        </h4>
                    </div>
                </div>
                <div class="col-12 col-md-6 d-flex flex-column justify-content-center" data-astro-cid-ddbcycih>
                    <p class="text-center text-light">
                        Holiday Sale!  
                        <br><em>Nov 24–Dec 25.</em> Don’t miss out!
                    </p>
                    <p class="text-center buttons-section"> 
            <a href="#books" class="btn btn-secondary mt-2" target="_blank" data-astro-cid-so3q4bn5>Order Now</a></p>
                </div>
            </div>
        </div>
    </section> -->


    <!-- Footer -->
	<?php include_once __DIR__ . '/assets/includes/footer.php'; ?>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.0.2/TweenMax.min.js"></script>
     <script>
        $(document).ready(function() {
            var w = window.innerWidth, h = window.innerHeight;
            
            var snowflakes = 125,
                original = document.getElementById("flakesOne"),
                original2 = document.getElementById("flakesTwo"),
                larr = [],
                larr2 = [],
                container = document.getElementById("snow"),
                    sizes = ["Small", "Medium", "Large"];
            
            //Hide two flakes
            TweenMax.set(document.getElementById("flakesOne"), {y: -40, x: 40});
            TweenMax.set(document.getElementById("flakesTwo"), {y: -40, x: 40});
            
            //Animate falling
            function snowing(element) {
                TweenMax.to(element, R(5,16), {y: h+140, x: R(-300, w), ease: Linear.easeNone, repeat:-1, delay: -14});
                TweenMax.to(element, R(4,8), {x: '+=120', repeat: -1, yoyo: true, ease: Sine.easeInOut});
                TweenMax.to(element, R(4,10), {rotation: R(0,160), repeat: -1, yoyo: true, ease:Sine.easeInOut, delay: -5});
            };

            //Create rounded snowflakes
            for (var i = 0; i < snowflakes; i++) {
                    var snowflakeDiv = document.createElement('div');
                    var sizeIndex = Math.ceil(Math.random() * 3) -1; 
                    var size = sizes[sizeIndex];
                    TweenMax.set(snowflakeDiv, {attr: {class: "round" + size}, x: R(0,w), y: R(-50, -50) }); 
                    container.appendChild(snowflakeDiv);
                    snowing(snowflakeDiv);
            }

            //Clone 2 different inline svg snowflakes
            //Push the clones to arrays
            for (var i = 0; i < Math.ceil(snowflakes/2); i++) { 
                var clone = original.cloneNode(true); // "deep" clone
                var clone2 = original2.cloneNode(true); // "deep" clone
                clone.id = "flakesOne" + i;
                clone2.id = "flakesTwo" + i;
                original.parentNode.appendChild(clone);
                larr.push(clone);
                original2.parentNode.appendChild(clone2);
                larr2.push(clone2);
            }
            
            //Animate inline svg snowflakes with "snowing" function
            for (var i = 0; i < Math.ceil(snowflakes/2); i++) {
                snowing(larr[i]);
                snowing(larr2[i]);
            }

            //Generate random numbers for attributes
            function R(min,max) {
                return min + Math.random() * (max-min)
            };
            
            });
     </script>
</body>
</html>