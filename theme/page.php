<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default. Please note that
 * this is the WordPress construct of pages: specifically, posts with a post
 * type of `page`.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

get_header();
?>

<section id="primary" class="has-light-background-color">
	<main id="main">
		<section id="hero" class="hero">
			<div class="hero__content text-light">
				<h1 class="hero__content-title">High-touch technical recruiting by people-focused engineers</h1>
				<p class="hero__content-body"></p>
				<div class="hero__content-cta">
					<a href="#" class="sth:btn sth:btn--primary"></a>
					<a href="#" class="sth:btn sth:btn--secondary"></a>
				</div>
			</div>
		</section><!-- #hero -->
		<section id="about-us" class="about"></section><!-- #about-us -->
		<section id="who-we-serve" class="serve"></section><!-- #who-we-serve -->
		<section id="who-we-place" class="place"></section><!-- #who-we-place -->
		<section id="we-care" class="care"></section><!-- #we-care -->
		<section id="our-team" class="team"></section><!-- #our-team -->
		<section id="our-founder" class="founder"></section><!-- #our-founder -->
		<section id="what-sets-us-apart" class="good"></section><!-- #what-sets-us-apart -->
		<section id="contact" class="contact"></section><!-- #contact -->
	</main><!-- #main -->
</section><!-- #primary -->

<?php
//get_footer();
