<?php
/**
 * The template for displaying the header
 *
 * Displays all of the head element and everything up until the "site-content" div.
 *
 * @package WordPress
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?> class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">
	<link rel="profile" href="http://gmpg.org/xfn/11">
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>">
	<!--[if lt IE 9]>
	<script src="<?php echo esc_url( get_template_directory_uri() ); ?>/js/html5.js"></script>
	<![endif]-->
	<?php wp_head(); ?>

    <title>Cochran's Cafeteria</title>

    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">

	<link rel="apple-touch-icon" sizes="180x180" href="<?php bloginfo('template_directory'); ?>/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php bloginfo('template_directory'); ?>/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php bloginfo('template_directory'); ?>/favicons/favicon-16x16.png">
	<link rel="manifest" href="<?php bloginfo('template_directory'); ?>/favicons/manifest.json">
	<link rel="mask-icon" href="wp-content/themes/cochrans/favicons/safari-pinned-tab.svg" color="#910000">
	<link rel="shortcut icon" href="wp-content/themes/cochrans/favicons/favicon.ico">
	<meta name="msapplication-config" content="/wp-content/themes/cochrans/favicons/browserconfig.xml">
	<meta name="theme-color" content="#efad00">

	<link href="https://fonts.googleapis.com/css?family=Lora:700|Shrikhand" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="<?php bloginfo('template_directory'); ?>/stylesheets/css/main.css">

	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
	<script
	  src="https://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		  crossorigin="anonymous"></script>

</head>
<body>
	<div class="menu-trigger">
		<div class="mt-1"></div>
		<div class="mt-2"></div>
	</div>
	<div class="menu">
		<div class="menu-options"></div>
		<div class="info">
			<div class="info-col">
				<a href="tel:9038871807" class="call-us stroke stroke-black-thin" title="Call us:">Call us:</a>
				<a href="tel:9038871807" class="call-us stroke stroke-black-thin" title="903-887-1807">903-887-1807</a>
				<p class="address stroke stroke-black-thin" title="816 W. Main St,">816 W. Main St,</p>
				<p class="address stroke stroke-black-thin" title="Gun Barrel City, TX">Gun Barrel City, TX</p>
			</div>
			<div class="social-col">
				<a href="https://www.facebook.com">
					<img src="<?php bloginfo('template_directory'); ?>/images/facebook.svg">
				</a>
				<a href="https://www.instagram.com">
					<img src="<?php bloginfo('template_directory'); ?>/images/instagram.svg">
				</a>

			</div>
		</div>	
	</div>
	<div class="navigation">
		<div class="left">
			<a class="navigation-link tingle stroke stroke-white" href="" title="Turkey order">Turkey order</a>
			<a class="navigation-link tingle stroke stroke-white" href="" title="Menu">Menu</a>
		</div>
		<a class="logo-link" href="">
			<img class="logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png">
		</a>
		<div class="right">
			<a class="navigation-link tingle stroke stroke-white" href="" title="Catering">Catering</a>
			<a class="navigation-link tingle stroke stroke-white" href="" title="Gift cards">Gift cards</a>
		</div>
	</div>
		