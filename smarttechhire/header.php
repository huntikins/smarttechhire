<?php
/**
 * The header for our theme
 *
 * This is the template that displays the `head` element and everything up
 * until the `#content` element.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package _tw
 */

?>
<!doctype html>
<html class="scroll-smooth js" <?php language_attributes(); ?>>

<head>
	<meta http-equiv="Content-Type" content="text/html;" charset=" <?php bloginfo('charset'); ?>">
	<meta name="language" content="English">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<!-- Primary Meta Tags -->
	<title><?php echo CFS()->get('sth_seo_title'); ?></title>
	<meta name="title" content="<?php echo CFS()->get('sth_seo_title'); ?>" />
	<meta name="description" content="<?php echo CFS()->get('sth_seo_description'); ?>" />

	<!-- Open Graph / Facebook -->
	<meta property="og:type" content="website" />
	<meta property="og:url" content="<?php echo get_site_url(); ?>" />
	<meta property="og:title" content="<?php echo CFS()->get('sth_seo_title'); ?>" />
	<meta property="og:description" content="<?php echo CFS()->get('sth_seo_description'); ?>" />
	<meta property="og:image" content="<?php echo CFS()->get('sth_seo_image'); ?>" />

	<!-- Twitter -->
	<meta property="twitter:card" content="summary_large_image" />
	<meta property="twitter:url" content="<?php echo get_site_url(); ?>" />
	<meta property="twitter:title" content="<?php echo CFS()->get('sth_seo_title'); ?>" />
	<meta property="twitter:description" content="<?php echo CFS()->get('sth_seo_description'); ?>" />
	<meta property="twitter:image" content="<?php echo CFS()->get('sth_seo_image'); ?>" />
	<?php wp_head(); ?>
</head>

<body class="relative overflow-x-hidden">

	<?php wp_body_open(); ?>
	<?php get_template_part('template-parts/layout/header', 'content'); ?>

	<main id="main">