<?php
/**
 * Globaly Block functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Globaly_Block
 */

if ( ! defined( 'GLOBALY_BLOCK_VERSION' ) ) {
	// Replace with the actual version of your theme.
	define( 'GLOBALY_BLOCK_VERSION', '1.0.0' );
}

if ( ! function_exists( 'globaly_block_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function globaly_block_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on Globaly Block, use a find and replace
		 * to change 'globaly-block' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'globaly-block', get_template_directory() . '/languages' );

		// Add default posts and comments RSS feed links to head.
		add_theme_support( 'automatic-feed-links' );

		/*
		 * Let WordPress manage the document title.
		 * By adding theme support, we declare that this theme does not use a
		 * hard-coded <title> tag in the document head, and expect WordPress to
		 * provide it for us.
		 */
		add_theme_support( 'title-tag' );

		/*
		 * Enable support for Post Thumbnails on posts and pages.
		 *
		 * @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		 */
		add_theme_support( 'post-thumbnails' );

		// This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'primary' => esc_html__( 'Primary Menu', 'globaly-block' ),
				'footer'  => esc_html__( 'Footer Menu', 'globaly-block' ),
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

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

		/*
		 * Add support for core custom logo.
		 *
		 * @link https://codex.wordpress.org/Theme_Logo
		 */
		add_theme_support(
			'custom-logo',
			array(
				'height'      => 100, // Example height
				'width'       => 400, // Example width
				'flex-width'  => true,
				'flex-height' => true,
			)
		);

		// Add support for Block Styles.
		add_theme_support( 'wp-block-styles' );

		// Add support for full and wide align images.
		add_theme_support( 'align-wide' );

		// Add support for editor styles.
		add_theme_support( 'editor-styles' );

		// Enqueue editor styles.
		add_editor_style( 'style-editor.css' ); // You might need to create this file

		// Add support for responsive embedded content.
		add_theme_support( 'responsive-embeds' );

		// Remove theme support for custom colors and gradients. Rely on theme.json
		// add_theme_support( 'disable-custom-colors' ); // Uncomment if you want to strictly enforce palette
		// add_theme_support( 'disable-custom-gradients' ); // Uncomment if you want to strictly enforce palette
		// add_theme_support( 'editor-color-palette', array() ); // Keep empty if disabling custom colors
		// add_theme_support( 'editor-gradient-presets', array() ); // Keep empty if disabling custom gradients

		// Add support for custom units.
		add_theme_support( 'custom-units' );

	}
endif;
add_action( 'after_setup_theme', 'globaly_block_setup' );

/**
 * Enqueue scripts and styles.
 */
function globaly_block_enqueue_scripts() {
	wp_enqueue_style( 'globaly-block-style', get_stylesheet_uri(), array(), GLOBALY_BLOCK_VERSION );

	// You can enqueue other scripts and styles here
	// wp_enqueue_script( 'globaly-block-navigation', get_template_directory_uri() . '/js/navigation.js', array(), GLOBALY_BLOCK_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'globaly_block_enqueue_scripts' );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function globaly_block_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'globaly-block' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'globaly-block' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'globaly_block_widgets_init' );

/**
 * Block Patterns.
 */
require get_template_directory() . '/patterns/register-patterns.php';

/**
 * Block Styles.
 */
// require get_template_directory() . '/inc/block-styles.php'; // Uncomment when you have block styles

/**
 * Other theme functions
 */
// Example: Add body class for full-width layout (if needed for classic elements outside FSE)
// add_filter( 'body_class', 'globaly_block_body_classes' );
// function globaly_block_body_classes( $classes ) {
// 	if ( is_page_template( 'templates/template-full-width.html' ) || is_singular() && get_post_meta( get_the_ID(), '_wp_page_template', true ) === 'templates/template-full-width.html' ) {
// 		$classes[] = 'full-width-content';
// 	}
// 	return $classes;
// }

?>
