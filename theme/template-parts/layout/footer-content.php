<?php
/**
 * Template part for displaying the footer content
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package _tw
 */

$logo = wp_get_attachment_image(get_theme_mod('title_logo_tagline'), "", "", array("class" => "block w-auto h-16"));
?>

<footer id="footer">
	<div class="py-10 text-base font-extrabold transition-opacity lg:text-xl bg-foreground text-primary-footer font-josefin">
		<a href="#main" class="flex items-center justify-center w-full pb-6 text-center lg:hidden">
			<? echo $logo; ?>
		</a>
		<?php
		echo sth_custom_footer_menu('footer');
		?>
	</div>
	<div
		class="flex flex-col items-center justify-center py-3 font-extrabold text-center uppercase bg-primary text-light font-josefin">
		<p class="py-2 text-base">&copy;&nbsp;
			<?php echo date('Y') . "&nbsp;" . get_option('blogname'); ?>,&nbsp;<span class="block md:inline">All rights
				reserved</span>
		</p>
		<p class="pb-3 text-xs">developed & designed by <a href="https://huntertrammell.dev"
				class="underline hover:opacity-60">Outland Web Solutions</a></p>
	</div>

</footer><!-- #footer -->