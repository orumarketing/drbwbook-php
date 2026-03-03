<!DOCTYPE html>
<html lang="en">

<?php
	include_once __DIR__ . '/../config.php';
	$this_page_book_title = 'El Poder de Uno';
	$is_the_home_page = true;
	$hero_slug = 'el-poder-de-uno';
	$hero_bg_style = "background: linear-gradient(45deg, #1e0d0d00, #6c6c6c69), url(" . $base_url . "assets/img/new-images/PoOBackground2-min.jpg); background-size: cover; background-repeat: no-repeat;";
	$hero_book_img = $base_url . 'assets/img/new-images/el-poder-de-uno-cover.png';
	$hero_book_img_alt = 'El Poder de Uno book';
	$hero_show_discount = false;
?>

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="generator" content="Astro v4.0.3">
	<title>El Poder de Uno</title>
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
			--main-color: #0a0504;
			--secondary-color: #551b0f;
			--accent-color-one: #db3030
		}

		#power-of-one-page .navbar,
		#power-of-one-page .sec-download {
			background-color: var(--cta-background)
		}

		#power-of-one-page {
			color: var(--main-color)
		}

		#power-of-one-page h3 {
			color: var(--primary-red)
		}

		#power-of-one-page .navbottom {
			background-color: var(--color-white)
		}
	</style>
</head>

<body id="power-of-one-page" class="sections-page"> <!-- Google Tag Manager (noscript) --><noscript><iframe
			src="https://www.googletagmanager.com/ns.html?id=GTM-PPK9S4T" height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) --><!-- Google Tag Manager (noscript) --><noscript><iframe
			src="https://www.googletagmanager.com/ns.html?id=GTM-NRZ2XCZJ" height="0" width="0"
			style="display:none;visibility:hidden"></iframe></noscript><!-- End Google Tag Manager (noscript) --><img
		height="1" width="1" alt="" style="display:none;visibility:hidden"
		src="https://www.facebook.com/tr?id=200092351435273&ev=PageView&noscript=1"><noscript><img height="1" width="1"
			alt="" style="display:none"
			src="https://www.facebook.com/tr?id=565106160842111&ev=PageView&noscript=1"></noscript>
	<?php include_once __DIR__ . '/../assets/includes/top-nav.php'; ?>
	<?php include __DIR__ . '/../assets/includes/hero-db.php'; ?>
	<section class="section about-the-book pb-5 mb-0 bd-btm-true" id="about">
		<div class="container col-md-11 col-xl-10">
			<div class="row">
				<div class="col-xl-8 mx-auto">
					<h3 class="display-3 p-3 text-center text-uppercase">ALCANZAR A CADA PERSONA DEL MUNDO</h3>
					<p>
						¿Es posible que cada persona sobre la faz de la Tierra sea alcanzada con las buenas nuevas del evangelio en nuestra generación? ¿Podemos movilizar a la iglesia actual para lograr resultados colaborativos de maneras sin precedentes? ¿Qué puede hacer una persona para marcar la diferencia? En El poder de uno, el Dr. Wilson responde a estas preguntas al proporcionar un camino claro a través de reindividualizar la Gran Comisión y un enfoque renovado en el potencial de cada UNO.
					</p>
					<p>
						Una nueva era de evangelización global está comenzando en nuestro mundo pospandémico y acelerado del siglo XXI. El método de Jesús para alcanzar a una persona y, por lo tanto, liberar su capacidad de tocar a muchos está siendo rescatado. Los días más signiﬁ cativos del esfuerzo de la Gran Comisión en la historia de la humanidad están ante nosotros.
					</p>
					<p>
						Alcanzar a cada persona del mundo requerirá y demostrará... ¡EL PODER DE UNO!
					</p>
				</div>
			</div>
		</div>
	</section>
	
	<!-- Author Section -->
	<section class="section center-text-block bd-btm-true" id="author" data-astro-cid-2ri7i3m6="">
		<div class="container col-md-10" data-astro-cid-2ri7i3m6="">
			<div class="row align-items-center" data-astro-cid-2ri7i3m6="">
				<div class="col-lg-6 profile" data-astro-cid-2ri7i3m6="">
					<h3 class="display-3" data-astro-cid-2ri7i3m6="">Sobre el autor</h3>
					<p class="lead">
						El Dr. Billy Wilson, presidente global de Empowered21, presidente de la Pentecostal World Fellowship y presidente de la Universidad Oral Roberts, presenta una visión clara para alcanzar a cada persona en el mundo para Pentecostés del 2033: el poder de uno. El Dr. Wilson es una persona inﬂ uyente a nivel mundial y un orador popular, cuyo programa de televisión, World Impact with Dr. Billy Wilson, se emite en más de 150 países. Es autor de varios libros, entre ellos, Clamor por un padre; Generation Z: Born for the Storm; y Fasting Forward. El Dr. Wilson y su esposa, Lisa, residen en Tulsa, Oklahoma, donde disfrutan de su tiempo con su familia.
					</p>
				</div>
				<div class="col-lg-6 text-center" data-astro-cid-2ri7i3m6="">
					<div class="the-right-image-square mx-auto" style="
						background: url(../assets/img/big-Bio-Photo-DrBilWil-rgb.jpg);
						background-size: cover;
						background-position: top;
						" data-astro-cid-2ri7i3m6=""></div> 
					<a class="btn btn-secondary alt-about-color hero-btn mt-2" href="https://oru.edu/about-oru/administration/office-of-the-president/" data-astro-cid-2ri7i3m6="">
						Conozca más sobre el Dr. Wilson</a>
				</div>
			</div>
		</div>
	</section>
	
	<?php include __DIR__ . '/../assets/includes/testimonials-db.php'; ?>

	<section class="section bd-btm-false" id="books">
        <div class="container col-md-11 col-xl-10">
            <h3 class="display-3 p-3 text-center text-uppercase">Otros títulos del Dr. Wilson</h3>
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
							Alcanzar a cada persona del mundo con el evangelio comienza con&nbsp;UNO.
						</h4>
					</div>
				</div>
				<div class="col-12 col-md-6 d-flex flex-column justify-content-center" data-astro-cid-ddbcycih>
					<p class="text-center text-light">
						Order <em>El Poder de Uno</em> Today!
					</p>
					<p class="text-center buttons-section"> <a
							href="https://shop.harpandswordmedia.com/products/el-poder-de-uno"
							class="btn btn-secondary mt-2" target="_blank" data-astro-cid-so3q4bn5> Adquirir ahora </a> </p>
				</div>
			</div>
		</div>
	</section> 
	<!-- Footer -->
	<?php include_once __DIR__ . '/../assets/includes/footer.php'; ?>
</body>

</html>
