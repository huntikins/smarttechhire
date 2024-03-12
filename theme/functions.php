<?php
/**
 * sth functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package smarttechhire
 */

if (!defined('STH_VERSION')) {
	/*
	 * Set the theme’s version number.
	 *
	 * This is used primarily for cache busting. If you use `npm run bundle`
	 * to create your production build, the value below will be replaced in the
	 * generated zip file with a timestamp, converted to base 36.
	 */
	define('STH_VERSION', '0.1.0');
}

if (!defined('STH_TYPOGRAPHY_CLASSES')) {
	/*
	 * Set Tailwind Typography classes for the front end, block editor and
	 * classic editor using the constant below.
	 *
	 * For the front end, these classes are added by the `STH_content_class`
	 * function. You will see that function used everywhere an `entry-content`
	 * or `page-content` class has been added to a wrapper element.
	 *
	 * For the block editor, these classes are converted to a JavaScript array
	 * and then used by the `./javascript/block-editor.js` file, which adds
	 * them to the appropriate elements in the block editor (and adds them
	 * again when they’re removed.)
	 *
	 * For the classic editor (and anything using TinyMCE, like Advanced Custom
	 * Fields), these classes are added to TinyMCE’s body class when it
	 * initializes.
	 */
	define(
		'STH_TYPOGRAPHY_CLASSES',
		'prose prose-neutral max-w-none prose-a:text-primary'
	);
}

if (!function_exists('sth_setup')):
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function sth_setup()
	{
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on sth, use a find and replace
		 * to change 'sth' to the name of your theme in all the template files.
		 */
		load_theme_textdomain('sth', get_template_directory() . '/languages');

		// Add default posts and comments RSS feed links to head.
		add_theme_support('automatic-feed-links');

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support('title-tag');

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support('post-thumbnails');

		// This theme uses wp_nav_menu() in two locations.
		register_nav_menus(
			array(
				'header' => __('Header', 'sth'),
				'footer' => __('Footer', 'sth'),
			)
		);

		require_once('nav_walker.php');

		// Intented to use with locations, like 'primary'
// clean_custom_menu("primary");

		#add in your theme functions.php file

		function sth_custom_footer_menu($theme_location)
		{
			if (($theme_location) && ($locations = get_nav_menu_locations()) && isset($locations[$theme_location])) {
				$menu = get_term($locations[$theme_location], 'nav_menu');
				$menu_items = wp_get_nav_menu_items($menu->term_id);

				$menu_list = '<ul class="flex flex-col items-center justify-center md:flex-row">' . "\n";

				$count = 0;

				foreach ($menu_items as $menu_item) {

					$link = $menu_item->url;
					$title = $menu_item->title;
					$middle = (count($menu_items) / 2);

					$logo = wp_get_attachment_image(get_theme_mod('title_logo_tagline'), 'thumbnail', "", array("class" => "block w-auto h-16"));

					if ($count < $middle && $middle % 2) {
						$menu_list .= '<li class="mt-5 md:mt-0 md:mr-5 lg:mr-7 hover:opacity-60">' . "\n";
						$menu_list .= '<a href="' . $link . '" class="title" title="' . $title . '">' . $title . '</a>' . "\n";
						$menu_list .= '</li>' . "\n";
					} elseif ($middle == $count) {
						if ($logo) {

							$menu_list .= '<li class="hidden mx-10 lg:block hover:opacity-60">' . "\n";
							$menu_list .= '<a href="https://smarttechhire.com#main" title="Scroll to top">' . $logo . '</a>' . "\n";
							$menu_list .= '</li>' . "\n";
						}
						$menu_list .= '<li class="mt-5 md:mt-0 md:ml-5 lg:ml-7 hover:opacity-60">' . "\n";
						$menu_list .= '<a href="' . $link . '" class="title" title="' . $title . '">' . $title . '</a>' . "\n";
						$menu_list .= '</li>' . "\n";
					} else {
						$menu_list .= '<li class="mt-5 md:mt-0 md:ml-5 lg:ml-7 hover:opacity-60">' . "\n";
						$menu_list .= '<a href="' . $link . '" class="title" title="' . $title . '">' . $title . '</a>' . "\n";
						$menu_list .= '</li>' . "\n";
					}
					$count++;
				}

				$menu_list .= '</ul>' . "\n";

			} else {
				$menu_list = '<!-- no menu defined in location "' . $theme_location . '" -->';
			}
			echo $menu_list;
		}

		/*
		 * Switch default core markup for search form, comment form, and comments
		 * to output valid HTML5.
		 */
		add_theme_support(
			'html5',
			array(
				'gallery',
				'caption',
				'style',
				'script',
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support('customize-selective-refresh-widgets');

		// Add support for editor styles.
		add_theme_support('editor-styles');

		// Enqueue editor styles.
		add_editor_style('style-editor.css');
		add_editor_style('style-editor-extra.css');

		// Add support for responsive embedded content.
		add_theme_support('responsive-embeds');

		// Remove support for block templates.
		remove_theme_support('block-templates');
	}
endif;
add_action('after_setup_theme', 'sth_setup');

/**
 * Enqueue scripts and styles.
 */
function sth_scripts()
{
	wp_enqueue_style('sth-style', get_stylesheet_uri(), array(), STH_VERSION);
	wp_enqueue_script('sth-script', get_template_directory_uri() . '/js/script.min.js', array(), STH_VERSION, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'sth_scripts');

/**
 * Enqueue the block editor script.
 */
function sth_enqueue_block_editor_script()
{
	wp_enqueue_script(
		'sth-editor',
		get_template_directory_uri() . '/js/block-editor.min.js',
		array(
			'wp-blocks',
			'wp-edit-post',
		),
		STH_VERSION,
		true
	);
}
add_action('enqueue_block_editor_assets', 'sth_enqueue_block_editor_script');

/**
 * Enqueue the script necessary to support Tailwind Typography in the block
 * editor, using an inline script to create a JavaScript array containing the
 * Tailwind Typography classes from STH_TYPOGRAPHY_CLASSES.
 */
function sth_enqueue_typography_script()
{
	if (is_admin()) {
		wp_enqueue_script(
			'sth-typography',
			get_template_directory_uri() . '/js/tailwind-typography-classes.min.js',
			array(
				'wp-blocks',
				'wp-edit-post',
			),
			STH_VERSION,
			true
		);
		wp_add_inline_script('sth-typography', "tailwindTypographyClasses = '" . esc_attr(STH_TYPOGRAPHY_CLASSES) . "'.split(' ');", 'before');
	}
}
add_action('enqueue_block_assets', 'sth_enqueue_typography_script');

/**
 * Add the Tailwind Typography classes to TinyMCE.
 *
 * @param array $settings TinyMCE settings.
 * @return array
 */
function sth_tinymce_add_class($settings)
{
	$settings['body_class'] = STH_TYPOGRAPHY_CLASSES;
	return $settings;
}
add_filter('tiny_mce_before_init', 'sth_tinymce_add_class');

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Removes title tag from wp-head
 */
remove_action('wp_head', '_wp_render_title_tag', 1);

/**
 * Removes customizer options and adds new ones
 */
function sth_customize_register($wp_customize)
{
	// Remove old ones
	$wp_customize->remove_panel('widgets');
	$wp_customize->remove_section('static_front_page');
	$wp_customize->remove_section('custom_css');

	// New identity panel fields
	$wp_customize->add_setting(
		'title_email_tagline',
		array(
			'type' => 'theme_mod'
		)
	);
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'sth_title_email_control',
			array(
				'label' => __('Email: Address', 'sth'),
				'section' => 'title_tagline',
				'settings' => 'title_email_tagline',
				'type' => 'email',
				'priority' => '60'
			)
		)
	);

	$wp_customize->add_setting('title_emaila11y_tagline', array('type' => 'theme_mod'));
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'sth_title_emaila11y_control',
			array(
				'label' => __('Email: Accessible Text', 'sth'),
				'section' => 'title_tagline',
				'settings' => 'title_emaila11y_tagline',
				'type' => 'text',
				'priority' => '60'
			)
		)
	);

	$wp_customize->add_setting('title_tel_tagline', array('type' => 'theme_mod'));
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'sth_title_tel_control',
			array(
				'label' => __('Phone Number: Number', 'sth'),
				'section' => 'title_tagline',
				'settings' => 'title_tel_tagline',
				'type' => 'tel',
				'priority' => '60'
			)
		)
	);

	$wp_customize->add_setting('title_tela11y_tagline', array('type' => 'theme_mod'));
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'sth_title_tela11y_control',
			array(
				'label' => __('Phone Number: Accessible Text', 'sth'),
				'section' => 'title_tagline',
				'settings' => 'title_tela11y_tagline',
				'type' => 'text',
				'priority' => '60'
			)
		)
	);

	$wp_customize->add_setting('title_facebook_tagline', array('type' => 'theme_mod'));
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'sth_title_facebook_control',
			array(
				'label' => __('Facebook: URL', 'sth'),
				'section' => 'title_tagline',
				'settings' => 'title_facebook_tagline',
				'type' => 'url',
				'priority' => '60'
			)
		)
	);

	$wp_customize->add_setting('title_facebooka11y_tagline', array('type' => 'theme_mod'));
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'sth_title_facebooka11y_control',
			array(
				'label' => __('Facebook: Accessible Text', 'sth'),
				'section' => 'title_tagline',
				'settings' => 'title_facebooka11y_tagline',
				'type' => 'text',
				'priority' => '60'
			)
		)
	);

	$wp_customize->add_setting('title_twitter_tagline', array('type' => 'theme_mod'));
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'sth_title_twitter_control',
			array(
				'label' => __('Twitter: URL', 'sth'),
				'section' => 'title_tagline',
				'settings' => 'title_twitter_tagline',
				'type' => 'url',
				'priority' => '60'
			)
		)
	);

	$wp_customize->add_setting('title_twittera11y_tagline', array('type' => 'theme_mod'));
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'sth_title_twittera11y_control',
			array(
				'label' => __('Twitter: Accessible Text', 'sth'),
				'section' => 'title_tagline',
				'settings' => 'title_twittera11y_tagline',
				'type' => 'text',
				'priority' => '60'
			)
		)
	);

	$wp_customize->add_setting('title_linkedin_tagline', array('type' => 'theme_mod'));
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'sth_title_linkedin_control',
			array(
				'label' => __('LinkedIn: URL', 'sth'),
				'section' => 'title_tagline',
				'settings' => 'title_linkedin_tagline',
				'type' => 'url',
				'priority' => '60'
			)
		)
	);

	$wp_customize->add_setting('title_linkedina11y_tagline', array('type' => 'theme_mod'));
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'sth_title_linkedina11y_control',
			array(
				'label' => __('LinkedIn: Accessible Text', 'sth'),
				'section' => 'title_tagline',
				'settings' => 'title_linkedina11y_tagline',
				'type' => 'text',
				'priority' => '60'
			)
		)
	);

	$wp_customize->add_setting('title_mobilemenua11y_tagline', array('type' => 'theme_mod'));
	$wp_customize->add_control(
		new WP_Customize_Control(
			$wp_customize,
			'sth_title_mobilemenua11y_control',
			array(
				'label' => __('Mobile Menu: Accessible Text', 'sth'),
				'section' => 'title_tagline',
				'settings' => 'title_mobilemenua11y_tagline',
				'type' => 'text',
				'priority' => '60'
			)
		)
	);

	$wp_customize->add_setting('title_logo_tagline', array('type' => 'theme_mod'));
	$wp_customize->add_control(
		new WP_Customize_Media_Control(
			$wp_customize,
			'sth_title_logo_control',
			array(
				'label' => __('Site Logo', 'sth'),
				'section' => 'title_tagline',
				'settings' => 'title_logo_tagline',
				'mime_type' => 'image',
				'priority' => '30'
			)
		)
	);


	$wp_customize->remove_control('blogdescription');
}
add_action('customize_register', 'sth_customize_register', 50);

