<?php
/*
 *  Template Name: Home
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package smarttechhire.com
 */

get_header();
?>

<section id="hero" class="p-6 md:p-8 lg:p-12 page-hero page-hero--home">
	<div class="md:h-screen py-52 md:pt-0">
		<?php get_template_part('template-parts/content/home/content-hero', 'content'); ?>
	</div>
</section><!-- #hero -->
<section id="about-us" class="p-6 md:p-8 lg:p-12">
	<?php get_template_part('template-parts/content/home/content-about', 'content'); ?>
</section><!-- #about-us -->
<section id="who-we-serve">
	<?php get_template_part('template-parts/content/home/content-serve', 'content'); ?>
</section><!-- #who-we-serve -->
<section id="who-we-place">
	<?php get_template_part('template-parts/content/home/content-place', 'content'); ?>
</section><!-- #who-we-place -->
<section id="we-care" class="p-6 md:p-8 lg:p-12 bg-foreground bg-opacity-35">
	<?php get_template_part('template-parts/content/home/content-care', 'content'); ?>
</section><!-- #we-care -->
<section id="our-team" class="p-6 md:p-8 lg:p-12">
	<?php get_template_part('template-parts/content/home/content-team', 'content'); ?>
</section><!-- #our-team -->
<section id="our-founder" class="p-6 md:p-8 lg:p-12 bg-foreground bg-opacity-35">
	<?php get_template_part('template-parts/content/home/content-founder', 'content'); ?>
</section><!-- #our-founder -->
<section id="what-sets-us-apart" class="p-6 md:p-8 lg:p-12">
	<?php get_template_part('template-parts/content/home/content-apart', 'content'); ?>
</section><!-- #what-sets-us-apart -->
<section id="contact" class="p-6 pb-0 md:p-8 lg:p-12 md:pb-0 lg:pb-0">
	<?php get_template_part('template-parts/content/home/content-contact', 'content'); ?>
</section><!-- #contact -->

<?php
get_footer();