<?php 
	include_once __DIR__ . '/../config.php';
	$this_page_book_title = "Generation Z Born 4 The Storm";
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="robots" content="noindex" />
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta name="generator" content="Astro v4.0.3" />
    <title>Born For The Storm</title>
    <link
      rel="shortcut icon"
      type="image/jpg"
      href="<?php echo $base_url; ?>assets/img/favicon.ico"
    />
    <!--     Fonts and icons     -->
    <link
      href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700"
      rel="stylesheet"
    />
    <link
      href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css"
      rel="stylesheet"
      integrity="sha384-rqn26AG5Pj86AF4SO72RK5fyefcQ/x32DNQfChxWvbXIyXFePlEktwD18fEz+kQU"
      crossorigin="anonymous"
    />
    <link
      href="https://kit.fontawesome.com/029e596eee.css"
      rel="stylesheet"
      crossorigin="anonymous"
    />
    <link href="<?php echo $base_url; ?>assets/css/color-vars.css" rel="stylesheet" />
    <!-- Nucleo Icons -->
    <link href="<?php echo $base_url; ?>assets/css/nucleo-icons.css" rel="stylesheet" />
    <link href="<?php echo $base_url; ?>assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- Font Awesome Icons -->
    <!-- <link href="<?php echo $base_url; ?>assets/css/font-awesome.css" rel="stylesheet" /> -->
    <link href="assets/css/nucleo-svg.css" rel="stylesheet" />
    <!-- CSS Files -->
    <link
      href="<?php echo $base_url; ?>assets/css/argon-design-system.css?v=1.0.3"
      rel="stylesheet"
    />
    <!-- Custom CSS Files -->
    <link href="<?php echo $base_url; ?>assets/css/custom-local.css" rel="stylesheet" />
    <!-- <link href="/Users/johnsanders/Documents/VS Code/born4thestorm/css/custom-local.css" rel="stylesheet" /> -->
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=G-4KLYSQES10"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag("js", new Date());
      gtag("config", "G-4KLYSQES10");
    </script>
    <!-- Google Tag Manager -->
    <script>
      (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, "script", "dataLayer", "GTM-PPK9S4T");
    </script>
    <!-- End Google Tag Manager -->
    <!-- Google Tag Manager -->
    <script>
      (function (w, d, s, l, i) {
        w[l] = w[l] || [];
        w[l].push({ "gtm.start": new Date().getTime(), event: "gtm.js" });
        var f = d.getElementsByTagName(s)[0],
          j = d.createElement(s),
          dl = l != "dataLayer" ? "&l=" + l : "";
        j.async = true;
        j.src = "https://www.googletagmanager.com/gtm.js?id=" + i + dl;
        f.parentNode.insertBefore(j, f);
      })(window, document, "script", "dataLayer", "GTM-NRZ2XCZJ");
    </script>
    <!-- End Google Tag Manager -->
    <!-- ORU Matomo Tag Manager -->
    <script>
      var _mtm = (window._mtm = window._mtm || []);
      _mtm.push({ "mtm.startTime": new Date().getTime(), event: "mtm.Start" });
      var d = document,
        g = d.createElement("script"),
        s = d.getElementsByTagName("script")[0];
      g.async = true;
      g.src = "https://analytics.oru.edu/js/container_aChVp4fh.js";
      s.parentNode.insertBefore(g, s);
    </script>
    <!-- End ORU Matomo Tag Manager -->
    <!-- Facebook Pixel Code -->
    <script>
      !(function (f, b, e, v, n, t, s) {
        if (f.fbq) return;
        n = f.fbq = function () {
          n.callMethod
            ? n.callMethod.apply(n, arguments)
            : n.queue.push(arguments);
        };
        if (!f._fbq) f._fbq = n;
        n.push = n;
        n.loaded = !0;
        n.version = "2.0";
        n.queue = [];
        t = b.createElement(e);
        t.async = !0;
        t.src = v;
        s = b.getElementsByTagName(e)[0];
        s.parentNode.insertBefore(t, s);
      })(
        window,
        document,
        "script",
        "https://connect.facebook.net/en_US/fbevents.js"
      );

      fbq("init", "200092351435273");
      fbq("init", "565106160842111"); // <!-- IT -->
      fbq("track", "PageView");
    </script>
    <!-- /End Facebook Pixel Code -->
    <noscript
      ><p>
        <img
          src="//oru.edu/analytics/matomo/matomo/matomo.php?idsite=9&rec=1"
          style="border: 0"
          alt=""
          style="display: none; visibility: hidden"
        /></p
    ></noscript>
    <!-- End Matomo Code -->
    <style>
      .btn-secondary {
        color: var(--button-hero-text);
        font-weight: 700;
        background-color: var(--button-hero-color);
        border-color: var(--button-hero-color);
      }
      .btn-secondary--fancy {
        background-color: var(--secondary-color);
        border-color: var(--secondary-color);
      }
      .btn-secondary:hover {
        box-shadow: 0 18px 20px #00000078;
        transform: translateY(-0.4rem);
      }
      .hero-btn {
        color: var(--button-text-main-color);
        font-weight: 700;
        background-color: var(--button-main-color);
        border-color: var(--button-main-color);
      }
      .hero-btn:hover {
        color: var(--button-main-color);
        /* background-color: unset; */
        border-color: var(--button-main-color);
      }
      @media screen and (min-width: 1025px) {
        #genz-download-page .page-header.page-header-small {
          margin-bottom: 10rem;
        }
      }
      :root {
        --main-color: #1a1613;
        --secondary-color: #611618;
        --accent-color-one: #efda7d;
      }
      #genz-download-page .navbar,
      #genz-download-page .sec-download {
        background-color: var(--cta-background);
      }
      #genz-download-page .navbottom {
        background-color: var(--color-white);
      }
      #genz-download-page h3 {
        color: var(--main-color);
      }
      #genz-download-page .bd-btm,
      #genz-download-page .testimony {
        border-color: var(--secondary-tan);
      }
      #genz-download-page .navbar-nav,
      #genz-download-page .navbar-toggler {
        visibility: hidden;
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
        --background-shape-color: var(--main-color);
      }
      h3 {
        color: var(--main-color);
      }
      .bd-btm {
        border-bottom: 0.5px solid var(--horizontal-line-color);
      }
    </style>
  </head>
  <body id="genz-download-page" class="sections-page">
    <!-- Google Tag Manager (noscript) --><noscript
      ><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-PPK9S4T"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe></noscript
    ><!-- End Google Tag Manager (noscript) --><!-- Google Tag Manager (noscript) --><noscript
      ><iframe
        src="https://www.googletagmanager.com/ns.html?id=GTM-NRZ2XCZJ"
        height="0"
        width="0"
        style="display: none; visibility: hidden"
      ></iframe></noscript
    ><!-- End Google Tag Manager (noscript) --><img
      height="1"
      width="1"
      alt=""
      style="display: none; visibility: hidden"
      src="https://www.facebook.com/tr?id=200092351435273&ev=PageView&noscript=1"
    /><noscript
      ><img
        height="1"
        width="1"
        alt=""
        style="display: none"
        src="https://www.facebook.com/tr?id=565106160842111&ev=PageView&noscript=1"
    /></noscript>
    <div class="navbar-transparent">
      <nav class="navbar navbar-expand-lg">
        <div class="container col-sm-10 stormNav">
          <div class="navbar-translate">
            <a class="navbar-brand" href="/">Dr. Billy Wilson</a>
            <button
              class="navbar-toggler"
              type="button"
              data-toggle="collapse"
              data-target="#example-header-6"
              aria-controls="navbarSupportedContent"
              aria-expanded="false"
              aria-label="Toggle navigation"
            >
              <span class="navbar-toggler-icon"></span>
            </button>
          </div>
          <div class="collapse navbar-collapse" id="example-header-6">
            <div class="navbar-collapse-header">
              <div class="row">
                <div class="col-6 collapse-brand"></div>
                <div class="col-6 collapse-close text-right">
                  <button
                    type="button"
                    class="navbar-toggler"
                    data-toggle="collapse"
                    data-target="#example-header-6"
                    aria-controls="navigation-index"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                  >
                    <span></span> <span></span>
                  </button>
                </div>
              </div>
            </div>
            <ul class="navbar-nav ml-auto">
              <li class="nav-item">
                <!-- <a class="nav-link" href="/index.html#books">All Books</a> -->
                <a class="nav-link" href="#books">More Titles</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#author">About Dr. Wilson</a>
              </li>
              <!--<li class="nav-item">-->
              <!--  <a id="free_chapter_nav" class="nav-link" href="#" data-toggle="modal" data-target="#modal-form">-->
              <!--    Gen Z Free Chapter-->
              <!--  </a>-->
              <!--</li>-->
            </ul>
          </div>
        </div>
      </nav>
    </div>
    <div class="page-header page-header-small header-filter">
      <div
        class="page-header-image"
        style="
          background: linear-gradient(45deg, #131d2c59, #e6e1e169),
            url(<?php echo $base_url; ?>assets/img/GenX-bkgrd-c.jpg);
          background-size: cover;
          background-repeat: no-repeat;
        "
      >
        <div class="text-center text-uppercase navbottom space-above-hero">
          <p class="navbottom-text">&nbsp;</p>
        </div>
        <div class="container">
          <div class="row align-items-center text-left">
            <div class="col-lg-7 pl-0">
              <img
                class="pop-out-book mr-lg-5"
                src="<?php echo $base_url; ?>assets/img/Gen-Z-Book-Cutout-c.png"
                width="100%"
                alt="Generation Z Born For The Storm"
              />
            </div>
            <div class="col-lg-5 hero">
              <h1 class="display-3 dark-text order-lg-0">
                GENERATION Z BORN FOR THE STORM
              </h1>
              <p class="lead pb-0 dark-text order-lg-1">
                From the halls of middle schools to boardrooms of the most
                innovative companies in the world, Generation Z is coming of age
                at one of the most unique times in human history.
              </p>
              <div class="my-5">
                <div class="d-none d-lg-block">
                  <a
                    class="btn btn-secondary hero-btn mt-2"
                    href="https://bit.ly/gen-z-download"
                    target="_blank"
                    data-astro-cid-xvd67bzn
                    >Download For Free
                  </a>
                </div>
                <div class="d-lg-none">
                  <a
                    class="btn btn-dark btn-block hero-btn"
                    href="https://bit.ly/gen-z-download"
                    target="_blank"
                    data-astro-cid-n2irbncb
                    >Download For Free
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- Footer -->
  <?php include_once __DIR__ . '/../assets/includes/footer.php'; ?>
  </body>
</html>
