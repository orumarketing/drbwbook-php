<!DOCTYPE html>
<html lang="en">
<?php
include_once __DIR__ . '/../config.php';
$this_page_book_title = 'Father Cry';
?>

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="generator" content="Astro v4.0.3">
  <title>Father Cry</title>
  <link rel="shortcut icon" type="image/jpg" href="<?php echo $base_url; ?>assets/img/favicon.ico"><!--     Fonts and icons     -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
  <link href="https://pro.fontawesome.com/releases/v5.15.4/css/all.css" rel="stylesheet"
    integrity="sha384-rqn26AG5Pj86AF4SO72RK5fyefcQ/x32DNQfChxWvbXIyXFePlEktwD18fEz+kQU" crossorigin="anonymous">
  <link href="https://kit.fontawesome.com/029e596eee.css" rel="stylesheet" crossorigin="anonymous">
  <link href="<?php echo $base_url; ?>assets/css/color-vars.css" rel="stylesheet"><!-- Nucleo Icons -->
  <link href="<?php echo $base_url; ?>assets/css/nucleo-icons.css" rel="stylesheet">
  <link href="<?php echo $base_url; ?>assets/css/nucleo-svg.css" rel="stylesheet">
  <!-- Font Awesome Icons --><!-- <link href="<?php echo $base_url; ?>assets/css/font-awesome.css" rel="stylesheet" /> -->
  <link href="assets/css/nucleo-svg.css" rel="stylesheet"><!-- CSS Files -->
  <link href="<?php echo $base_url; ?>assets/css/argon-design-system.css?v=1.0.3" rel="stylesheet"><!-- Custom CSS Files -->
  <link href="<?php echo $base_url; ?>assets/css/custom-local.css?v=1.0.0" rel="stylesheet">
  <!-- <link href="/Users/johnsanders/Documents/VS Code/born4thestorm/css/custom-local.css" rel="stylesheet" /> --><!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-4KLYSQES10"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag() { dataLayer.push(arguments); }
    gtag('js', new Date());
    gtag('config', 'G-4KLYSQES10');
  </script> <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-PPK9S4T');</script>
  <!-- End Google Tag Manager --><!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push({
        'gtm.start':
          new Date().getTime(), event: 'gtm.js'
      }); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-NRZ2XCZJ');</script>
  <!-- End Google Tag Manager --><!-- ORU Matomo Tag Manager -->
  <script>
    var _mtm = window._mtm = window._mtm || [];
    _mtm.push({ 'mtm.startTime': (new Date().getTime()), 'event': 'mtm.Start' });
    var d = document, g = d.createElement('script'), s = d.getElementsByTagName('script')[0];
    g.async = true; g.src = 'https://analytics.oru.edu/js/container_aChVp4fh.js'; s.parentNode.insertBefore(g, s);
  </script> <!-- End ORU Matomo Tag Manager --><!-- Facebook Pixel Code -->
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
    fbq('init', '565106160842111'); // <!-- IT -->
    fbq('track', 'PageView');
  </script> <!-- /End Facebook Pixel Code --><noscript>
    <p><img src="//oru.edu/analytics/matomo/matomo/matomo.php?idsite=9&rec=1" style="border:0;" alt=""
        style="display:none;visibility:hidden"></p>
  </noscript><!-- End Matomo Code -->
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

    .btn-secondary.alt-about-color {
      color: #000;
      font-weight: 700;
      background-color: unset;
      border-color: #000
    }

    .btn-secondary--fancy {
      background-color: var(--secondary-color);
      border-color: var(--secondary-color)
    }

    .btn-secondary.alt-about-color:hover {
      box-shadow: 0 18px 20px #00000078;
      transform: translateY(-.4rem)
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

    .testimonials em {
      color: var(--testimonial-author)
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
      position: relative
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
			--main-color: #29130f;
			--secondary-color: #0a0504;
			--accent-color-one: #af8443;
    }

    #father-cry-page .sec-download {
      background-color: var(--cta-background)
    }

    #father-cry-page h3 {
      color: var(--secondary-color)
    }

    #father-cry-page .navbottom {
      background-color: var(--color-white)
    }
/* 
    #father-cry-page .page-header h1 {
      color: var(--secondary-color)
    }

    #father-cry-page .page-header p.lead {
      color: var(--section-titles-color)
    } */
  </style>
</head>

<body id="father-cry-page" class="sections-page"> <!-- Google Tag Manager (noscript) --><noscript><iframe
      src="https://www.googletagmanager.com/ns.html?id=GTM-PPK9S4T" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) --><!-- Google Tag Manager (noscript) --><noscript><iframe
      src="https://www.googletagmanager.com/ns.html?id=GTM-NRZ2XCZJ" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) --><img
    height="1" width="1" alt="" style="display:none;visibility:hidden"
    src="https://www.facebook.com/tr?id=200092351435273&ev=PageView&noscript=1"><noscript><img height="1" width="1"
      alt="" style="display:none"
      src="https://www.facebook.com/tr?id=565106160842111&ev=PageView&noscript=1"></noscript>
  <?php include_once __DIR__ . '/../assets/includes/top-nav.php'; ?>
  <div class="page-header page-header-small header-filter">
    <div class="page-header-image" style="background: linear-gradient(45deg, #1e0d0d00, #6c6c6c69),
		  url(<?php echo $base_url; ?>assets/img/new-images/bundle-program-background.jpg);
		background-size: cover;
		background-repeat: no-repeat;
		">
      <div class="text-center text-uppercase navbottom space-above-hero d-none">
        <p class="navbottom-text">&nbsp;</p>
      </div>
      <div class="container">
        <div class="row align-items-center text-left">
          <div class="col-lg-7 pl-0 position-relative">
            <img class="discount-tag" src="<?php echo $base_url; ?>assets/img/new-images/discount-tag.png" alt="50% off">
            <img class="pop-out-book mr-lg-5" src="<?php echo $base_url; ?>assets/img/father-cry-no-background.webp" width="100%" alt="Father Cry book"> </div>
          <div class="col-lg-5 hero">
            <h1 class="display-3 dark-text order-lg-0">Father Cry</h1>
            <p class="lead pb-0 dark-text order-lg-1"><em>Father Cry</em> addresses the generational longing for spiritual parents and the deep desire to experience the love of our heavenly Father.</p>
            <div class="my-5">
              <div class="d-none d-lg-block"> 
                <a class="btn btn-secondary hero-btn mt-2" href="https://shop.harpandswordmedia.com/products/father-cry" target="_blank" data-astro-cid-xvd67bzn>Order Now</a> 
                <a class="btn btn-secondary hero-btn mt-2" href="https://keap.app/contact-us/681454306823001" target="_blank" data-astro-cid-xvd67bzn>Get Free Chapter</a> 
              </div>
              <div class="d-lg-none">
                <a class="btn btn-dark btn-block hero-btn" href="https://shop.harpandswordmedia.com/products/father-cry" target="_blank" data-astro-cid-n2irbncb>Order Now</a> 
                <a class="btn btn-dark btn-block hero-btn" href="https://keap.app/contact-us/681454306823001" target="_blank" data-astro-cid-n2irbncb>Get Free Chapter</a> 
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  
  <section class="section about-the-book pb-5 mb-0 bd-btm-true" id="about">
    <div class="container col-md-11 col-xl-10">
      <div class="row">
        <div class="col-xl-7">
          <div class="d-flex align-items-center" style="height: 100%">
            <div class="embed-responsive embed-responsive-16by9"> 
              <iframe
              src="https://player.vimeo.com/video/1066762166" width="640" height="360"
              class="embed-responsive-item" frameborder="0"
              allow="autoplay; fullscreen; picture-in-picture" allowfullscreen=""></iframe>
              <!-- <img class="embed-responsive-item"
								src="<?php echo $base_url; ?>assets/img/new-images/about-father-cry.jpg" alt="Father Cry" width="640"
								height="360"> -->
            </div>
          </div>
        </div>
        <div class="col-xl-5">
          <h3 class="display-3 p-3 text-center text-uppercase">ABOUT THIS BOOK</h3>
          <p>Parents, both natural and spiritual, play a vital role throughout our lives. When these relationships are broken, the impact —physically, emotionally, and spiritually—is profound.
            Drawing from his own experience of abandonment and the healing he found in God’s love, Dr. Billy Wilson reveals how the deep longing for a father intersects with the love of our heavenly Father, igniting transformation and revival across generations. Through powerful biblical examples and practical wisdom, he shows how older and younger generations can unite, reclaim what was lost, and transform wounds into places of supernatural healing and ministry.</p>
             
            <p>Discover how God’s redeeming love can heal broken hearts and how the church can play a crucial role in answering the <em>father cry</em>.</p>
        </div>
      </div>
    </div>
  </section>
  
  <!-- Author Section -->
	<?php require_once __DIR__ . '/../assets/includes/author-section.php'; ?>
  
  <section class="section testimonials team-1 bd-btm-true">
    <div class="container col-md-11 col-xl-10">
      <h3 class="display-3 px-3 mb-3 text-center text-uppercase">WHAT OTHERS ARE SAYING</h3>
      <!--<div class="row align-items-center">-->
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
  <section class="section bd-btm-false" id="books">
      <div class="container col-md-11 col-xl-10">
          <h3 class="display-3 p-3 text-center text-uppercase">Other Titles by Dr. Wilson</h3>
          <div class="row mt-3">
              <?php require_once __DIR__ . '/../assets/includes/more-titles.php'; ?>
          </div>
      </div>
  </section>
  <section class="section sec-download text-bg-dark" data-astro-cid-ddbcycih>
    <div class="container" data-astro-cid-ddbcycih>
      <div class="row" data-astro-cid-ddbcycih>
        <div class="col-12 col-md-6" data-astro-cid-ddbcycih>
          <div class="d-flex align-items-center justify-content-center" style="height: 100%" data-astro-cid-ddbcycih>
            <h4 class="display-4 text-white text-center">
              Discover the Healing<br>Power of God's Love
            </h4>
          </div>
        </div>
        <div class="col-12 col-md-6 d-flex flex-column justify-content-center" data-astro-cid-ddbcycih>
          <p class="text-center text-light">
						The revised and updated
						<br> edition of <em>Father Cry</em> !
					</p>
          <p class="text-center buttons-section"> 
            <a href="https://shop.harpandswordmedia.com/products/father-cry" class="btn btn-secondary mt-2" target="_blank" data-astro-cid-so3q4bn5>Order Now</a></p>
        </div>
      </div>
    </div>
  </section> 

  <!-- Footer -->
  <?php include_once __DIR__ . '/../assets/includes/footer.php'; ?>

</body>

</html>