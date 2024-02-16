<?php
/**
 * Template part for displaying pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

?>

<article id="post-<?php the_ID(); ?>" class="relative block w-full h-full">
	<?php $backgroundImg = wp_get_attachment_image_src(get_post_thumbnail_id($post->ID), 'full'); ?>
	<div class="absolute top-0 left-0 w-screen h-screen page-hero"
		style="--sth--page-hero-background: url('<?php echo $backgroundImg[0]; ?>');"></div>
	<header
		class="relative z-10 flex flex-col items-center justify-center w-screen h-screen p-6 mx-auto text-light md:p-8 lg:p-12">
		<?php the_title('<h1 class="w-full text-3xl md:text-4xl lg:text-5xl xl:text-6xl font-josefin animate-fade-in animation-delay-100">', '</h1>'); ?>
		<div
			class="my-2 animation-delay-100 md:my-4 lg:my-6 md:max-w-4xl lg:max-w-5xl md:text-xl xl:text-2xl animate-fade-in">
			<?php echo CFS()->get('sth_page_description'); ?>
		</div>
	</header>

	<div class="relative z-10 block w-full h-full p-6 mx-auto md:p-8 lg:p-12 -mt-36">
		<div class="block p-6 mx-auto max-w-9xl md:p-8 lg:p-12 rounded-xl bg-light">
			<?php the_content(); ?>
		</div>
	</div>
</article>