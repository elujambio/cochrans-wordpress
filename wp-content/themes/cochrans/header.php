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

	<link rel="apple-touch-icon" sizes="180x180" href="wp-content/themes/cochrans/favicons/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="wp-content/themes/cochrans/favicons/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="wp-content/themes/cochrans/favicons/favicon-16x16.png">
	<link rel="manifest" href="wp-content/themes/cochrans/favicons/manifest.json">
	<link rel="mask-icon" href="wp-content/themes/cochrans/favicons/safari-pinned-tab.svg" color="#910000">
	<link rel="shortcut icon" href="wp-content/themes/cochrans/favicons/favicon.ico">
	<meta name="msapplication-config" content="/wp-content/themes/cochrans/favicons/browserconfig.xml">
	<meta name="theme-color" content="#efad00">

	<link href="https://fonts.googleapis.com/css?family=Lora:700|Shrikhand" rel="stylesheet">

	<link rel="stylesheet" type="text/css" href="wp-content/themes/cochrans/stylesheets/css/main.css">
	<script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/1.20.3/TweenMax.min.js"></script>
	<script
	  src="https://code.jquery.com/jquery-3.2.1.min.js"
	  integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
		  crossorigin="anonymous"></script>

</head>

<body>
		