<?php

/**
 * autismtoday functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package autismtodayofficial
 */

if (!defined('_S_VERSION')) {
	// Replace the version number of the theme on each release.
	define('_S_VERSION', '1.0.0');
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function autismtoday_setup()
{
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on autismtoday, use a find and replace
		* to change 'autismtoday' to the name of your theme in all the template files.
		*/
	load_theme_textdomain('autismtoday', get_template_directory() . '/languages');

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

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__('Primary', 'autismtoday'),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'autismtoday_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support('customize-selective-refresh-widgets');

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action('after_setup_theme', 'autismtoday_setup');

// This theme uses wp_nav_menu() in one location.
function register_menus()
{
	register_nav_menus(
		array(
			'main-menu' => esc_html__('Primary', 'testingarea'),
			'footer-nav-one ' => 'Footer 3 Main Pillar Nav',
			'footer-nav-two ' => 'Footer Promo',
			'footer-nav-three ' => 'Footer About',
			'footer-nav-four' => 'Footer Privacy'
		)
	);
}
add_action('init', 'register_menus');

/* register a number of files */
$autismtoday_includes = array(
	'/widgets.php' // register widget area
);

foreach ($autismtoday_includes as $file) {
	$filepath = locate_template('inc' . $file);
	if (!$filepath) {
		trigger_error(sprintf('Error locating /inc%s for inclusion', $file), E_USER_ERROR);
	}
	require_once $filepath;
}

// Prevent WP from adding <p> tags on all post types - dont include it, sa akin lang kasi para may reference lang ako. Lol.
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');


/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function autismtoday_content_width()
{
	$GLOBALS['content_width'] = apply_filters('autismtoday_content_width', 640);
}
add_action('after_setup_theme', 'autismtoday_content_width', 0);

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function autismtoday_widgets_init()
{
	register_sidebar(
		array(
			'name'          => esc_html__('Sidebar', 'autismtodayofficial'),
			'id'            => 'sidebar-1',
			'description'   => esc_html__('Add widgets here.', 'autismtodayofficial'),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action('widgets_init', 'autismtoday_widgets_init');

/**
 * Enqueue scripts and styles.
 */
function autismtoday_scripts()
{
	// fonts
	wp_enqueue_style('work-sans', 'https://fonts.googleapis.com/css2?family=Work+Sans:ital,wght@0,400;0,700;1,400&display=swap', false);
	wp_enqueue_style('playfair-display', 'https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&display=swap', false);

	// styles
	wp_enqueue_style('autismtoday-style', get_stylesheet_uri(), array(), _S_VERSION);
	wp_style_add_data('autismtoday-style', 'rtl', 'replace');
	wp_enqueue_style('styles', get_stylesheet_directory_uri() . '/assets/css/styles.min.css');

	wp_enqueue_script('autismtoday-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true);

	// custom js
	wp_enqueue_script('main', get_template_directory_uri() . '/assets/js/main.js', array(), false, true);

	if (is_singular() && comments_open() && get_option('thread_comments')) {
		wp_enqueue_script('comment-reply');
	}
}
add_action('wp_enqueue_scripts', 'autismtoday_scripts');

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if (defined('JETPACK__VERSION')) {
	require get_template_directory() . '/inc/jetpack.php';
}
