<!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<title><?php wp_title(''); ?><?php if (wp_title('', false)) {
										echo ' :';
									} ?> <?php bloginfo('name'); ?></title>
	<link href="//www.google-analytics.com" rel="dns-prefetch">
	<link href="<?php echo get_template_directory_uri(); ?>/favicon.ico" rel="shortcut icon">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<link href="<?php echo get_template_directory_uri(); ?>/css/style.css" rel="stylesheet">
	<link href="<?php echo get_template_directory_uri(); ?>/css/animate.css" rel="stylesheet">


	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owlcarousel/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/owlcarousel/owl.theme.default.css">

	<meta property="og:site_name" content="<?php echo get_bloginfo('name'); ?>">
	<meta property="og:title" content="<?php echo get_bloginfo('name'); ?>" />
	<meta property="og:image" itemprop="image" content="<?php echo get_template_directory_uri(); ?>/img/og-img.jpg">
	<meta property="og:type" content="website" />

	<?php wp_head() ?>

	<script src="https://code.jquery.com/jquery-2.2.1.min.js"></script>

</head>

<body id="page-top" <?php body_class(); ?>>
	<div class="page-wrap">

		<div class="fixed_social_wrap">
			<div class="first">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/img/0_Most_used_elements/scroll-button-phone.svg">

				</a>

				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/img/0_Most_used_elements/scroll-button-mail.svg">

				</a>
			</div>

			<div class="second">
				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/img/0_Most_used_elements/scroll-button-linkedin.svg">

				</a>


				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/img/0_Most_used_elements/scroll-button-facebook.svg">

				</a>

				<a href="#">
					<img src="<?php echo get_template_directory_uri(); ?>/img/0_Most_used_elements/scroll-button-youtube.svg">

				</a>
			</div>

		</div>
		<div class="search-fixed-wrap">
			<div class="close-btn-search">
				<img src="<?php echo get_template_directory_uri(); ?>/img/iconx.png">
			</div>
			<div class="search-wrap">
				<form role="search" method="get" action="/" id="searchform">

					<input type="text" value="" name="s" id="s" placeholder="Suche...">

				</form>
			</div>
		</div>


		<nav class="navbar navbar-expand-lg navbar-default fixed-top <?php if (is_front_page() || is_page('druckguss')) {
																			echo 'white_navv';
																		} ?>" id="mainNav">
			<div class="container">
				<div class="menu-btn"><button class="c-hamburger c-hamburger--htx"><span>toggle menu</span> </button></div>

				<div class="logo animsition-link"><a href="<?php echo home_url(); ?>"><img src="<?php
																								if (is_front_page() || is_page('druckguss')) {
																									echo get_template_directory_uri() . '/img/0_Most_used_elements/logo-rauch-white.svg';
																								} else {
																									echo get_template_directory_uri() . '/img/0_Most_used_elements/logo-rauch-grey.svg';
																								}
																								?>" alt="Name"></a></div>

				<div class="collapse navbar-collapse " id="navbarResponsive">


					<?php
					wp_nav_menu(array(
						'theme_location'  => 'primary',
						'depth'           => 2,
						'container'       => 'div',
						'container_class' => 'collapse navbar-collapse',
						'container_id'    => 'bs-example-navbar-collapse-1',
						'menu_class'      => 'navbar-nav ml-auto animsition-link',
						'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
						'walker'          => new WP_Bootstrap_Navwalker(),
					));
					?>

					<div class="search-wrap search-big-wrap">
						<form role="search" method="get" id="searchform" class="searchform" action="/">
							<input type="text" name="s" placeholder="Suche">
							<div class="search-icon">
								<img src="<?php echo get_template_directory_uri(); ?>/img/0_Most_used_elements/menue-bar-loupe-white.svg">

							</div>
						</form>
					</div>
				</div>

				<div class="right-nav-items">
					<div class="search uni search-main-btn">

						<img src="<?php
									if (is_front_page() || is_page('druckguss')) {
										echo get_template_directory_uri() . '/img/0_Most_used_elements/menue-bar-loupe-white.svg';
									} else {
										echo get_template_directory_uri() . '/img/0_Most_used_elements/menue-bar-loupe-grey.svg';
									}
									?>">
					</div>


				</div>
			</div>
		</nav>