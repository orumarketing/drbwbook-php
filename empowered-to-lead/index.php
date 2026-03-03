<!DOCTYPE html>
<html lang="en">

<?php
	include_once __DIR__ . '/../config.php';
	$this_page_book_title = 'Empowered to Lead';
	$is_the_home_page = true;
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="generator" content="Astro v4.0.3">
	<title>Empowered to Lead</title>
	<link rel="shortcut icon" type="image/jpg" href="<?php echo $base_url; ?>assets/img/favicon.ico"><!--     Fonts and icons     -->
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700" rel="stylesheet">
	<link href="https://pro.fontawesome.com/releases/v6.7.2/css/all.css" rel="stylesheet"
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
			--main-color: #052230;
			--secondary-color: #052230;
			--accent-color-one: #af8f44
		}

		#empowered-to-lead .navbar,
		#empowered-to-lead .sec-download {
			background-color: var(--cta-background)
		}

		#empowered-to-lead {
			color: var(--main-color)
		}

		#empowered-to-lead h3 {
			color: var(--primary-red)
		}

		#empowered-to-lead .navbottom {
			background-color: var(--color-white)
		}
	</style>
</head>

<body id="empowered-to-lead" class="sections-page"> <!-- Google Tag Manager (noscript) --><noscript><iframe
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
		<div class="page-header-image" style="background: linear-gradient(45deg, #05223000, #05223070),
		  url(<?php echo $base_url; ?>assets/img/new-images/sky-background.jpg);
		background-size: cover;
		background-repeat: no-repeat;
		background-position: center center;
		">
			<div class="text-center text-uppercase navbottom space-above-hero d-none">
				<p class="navbottom-text">&nbsp;</p>
			</div>
			<div class="container">
				<div class="row align-items-center text-left">
					<div class="col-lg-7 pl-0 position-relative">
						<img class="discount-tag" src="<?php echo $base_url; ?>assets/img/new-images/discount-tag.png" alt="50% off">
						<img class="pop-out-book mr-lg-5"
							src="<?php echo $base_url; ?>assets/img/new-images/empowered-to-lead-cover.png" width="100%" alt="Empowered to Lead book">
					</div>
					<div class="col-lg-5 hero">
						<h1 class="display-3 dark-text order-lg-0">EMPOWERED TO LEAD</h1>
						<p class="lead pb-0 dark-text order-lg-1"><em>Empowered to Lead: Becoming a Leader Who Impacts the World</em> by Dr. Billy Wilson equips you to lead with integrity, courage, and vision—impacting the world through faith, wisdom, and Spirit-empowered leadership.</p>
						<div class="my-5">
							<div class="d-none d-lg-block"> 
								<a class="btn btn-secondary hero-btn mt-2" href="https://shop.harpandswordmedia.com/products/empowered-to-lead?variant=47637651390702"
									target="_blank" data-astro-cid-xvd67bzn>Buy Now </a> 
								<a class="btn btn-secondary hero-btn mt-2"
									href="https://keap.app/contact-us/6367487851531898" target="_blank"
									data-astro-cid-xvd67bzn>Get A Free Chapter</a> 
							</div>
							<div class="d-lg-none"> 
								<a class="btn btn-dark btn-block hero-btn"
									href="https://shop.harpandswordmedia.com/products/empowered-to-lead?variant=47637651390702"
									target="_blank" data-astro-cid-n2irbncb>Buy Now </a> 
								<a class="btn btn-dark btn-block hero-btn"
									href="https://keap.app/contact-us/6367487851531898" target="_blank"
									data-astro-cid-n2irbncb>Get A Free Chapter</a> 
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
						<div class="embed-responsive embed-responsive-16by9"> <iframe
								src="https://player.vimeo.com/video/1146105792?h=7ca43b078b" width="640" height="360"
								class="embed-responsive-item" frameborder="0"
								allow="autoplay; fullscreen; picture-in-picture" allowfullscreen=""></iframe> </div>
					</div>
				</div>
				<div class="col-xl-5">
					<h3 class="display-3 p-3 text-center text-uppercase">ABOUT THIS BOOK</h3>
					<p>
						Leadership is one of the greatest
						challenges and opportunities of our
						generation. Across every sphere of
						society—business, government,
						education, and the church—the call
						is the same: We need leaders who
						can be trusted.
					</p>
					<p>
						In <em>Empowered to Lead</em>, Dr. Billy
						Wilson, President of Oral Roberts
						University and a respected global
						leader, shows how to develop the
						character and skills that sustain
						impactful leadership. Drawing on
						decades of executive leadership and
						global ministry, Dr. Wilson offers a
						Spirit-empowered roadmap for
						leading with integrity, courage, and
						vision in the twenty-first century.
						Whether you’re stepping into
						leadership for the first time or
						seeking to expand your influence,
						this book will equip you to lead with
						faith, wisdom, and practical
						insight—and to make a lasting
						difference.
					</p>
					<p>
						True leadership doesn’t just manage:
						it inspires, empowers, and
						transforms. You can become the kind
						of leader who impacts the world.
					</p>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Author Section -->
	<?php require_once __DIR__ . '/../assets/includes/author-section-25.php'; ?>
	
	<?php include __DIR__ . '/../assets/includes/testimonials-db.php'; ?>

	<section class="section bd-btm-false" id="books">
        <div class="container col-md-11 col-xl-10">
            <h3 class="display-3 p-3 text-center text-uppercase">Other Titles by Dr. Wilson</h3>
            <div class="row mt-3">
                <?php require_once __DIR__ . '/../assets/includes/more-titles-db.php'; ?>
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
							Becoming a Leader<br>Who Impacts the World
						</h4>
					</div>
				</div>
				<div class="col-12 col-md-6 d-flex flex-column justify-content-center" data-astro-cid-ddbcycih>
					<p class="text-center text-light">
						Order <em>Empowered to Lead</em> Today!
					</p>
					<p class="text-center buttons-section"> <a
							href="https://shop.harpandswordmedia.com/products/empowered-to-lead?variant=47637651390702"
							class="btn btn-secondary mt-2" target="_blank" data-astro-cid-so3q4bn5> Buy Now </a> </p>
				</div>
			</div>
		</div>
	</section> 
	<!-- Footer -->
	<?php include_once __DIR__ . '/../assets/includes/footer.php'; ?>
</body>

</html>
