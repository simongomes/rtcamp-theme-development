<?php
/**
 * rtCamp Theme functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package rtCamp_Theme
 */

if ( ! defined( '_RTCAMP_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_RTCAMP_VERSION', '1.0.0' );
}

if ( ! function_exists( 'rtcamp_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function rtcamp_setup() {
		/**
		 * Define necessary constants
		 */
		define( '__RTCAMP_TEMPLATE_PATH__', get_template_directory_uri() );
		define( '__RTCAMP_ASSETS_PATH__', __RTCAMP_TEMPLATE_PATH__ . '/assets' );
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on rtCamp Theme, use a find and replace
		 * to change 'rtcamp' to the name of your theme in all the template files.
		 */
		load_theme_textdomain(
			'rtcamp',
			get_template_directory() . '/languages'
		);

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
				'primary'      => esc_html__( 'Primary', 'rtcamp' ),
				'footer'       => esc_html__( 'Footer', 'rtcamp' ),
				'security_nav' => esc_html__( 'Security navigation', 'rtcamp' ),
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
				'rtcamp_custom_background_args',
				array(
					'default-color' => 'ffffff',
					'default-image' => '',
				)
			)
		);

		// Add theme support for selective refresh for widgets.
		add_theme_support( 'customize-selective-refresh-widgets' );

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

		/**
		 * Add Support for page excerpt
		 */
		add_theme_support( 'page', 'excerpt' );
	}
endif;
add_action( 'after_setup_theme', 'rtcamp_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function rtcamp_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'rtcamp_content_width', 640 );
}

add_action( 'after_setup_theme', 'rtcamp_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function rtcamp_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Bottom Widgets', 'rtcamp' ),
			'id'            => 'bottom-widgets',
			'description'   => esc_html__( 'Add widgets here.', 'rtcamp' ),
			'before_widget' => '<div class="col-md-3"><div id="%1$s" class="widget-wrap %2$s">',
			'after_widget'  => '</div></div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}

add_action( 'widgets_init', 'rtcamp_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function rtcamp_scripts() {
	wp_enqueue_style( 'rtcamp-style', get_stylesheet_uri(), array(), _RTCAMP_VERSION );
	wp_enqueue_style( 'bootstrap-style', __RTCAMP_ASSETS_PATH__ . '/css/bootstrap.min.css', array(), _RTCAMP_VERSION );
	wp_enqueue_style( 'main-style', __RTCAMP_ASSETS_PATH__ . '/css/style.css', array(), filemtime( get_template_directory() . '/assets/css/style.css' ) );
	wp_style_add_data( 'rtcamp-style', 'rtl', 'replace' );

	wp_enqueue_script(
		'bootstrap-js',
		__RTCAMP_ASSETS_PATH__ . '/js/bootstrap.min.js',
		array( 'jquery' ),
		_RTCAMP_VERSION,
		true
	);
	wp_enqueue_script(
		'main-js',
		__RTCAMP_ASSETS_PATH__ . '/js/scripts.js',
		array(),
		filemtime( get_template_directory() . '/assets/js/scripts.js' ),
		true
	);

}

add_action( 'wp_enqueue_scripts', 'rtcamp_scripts' );

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
 * Register Theme Settings Page
 */
require get_template_directory() . '/inc/theme-options.php';

/**
 * Register Theme Widgets
 */
require get_template_directory() . '/inc/custom-widgets.php';

/**
 * Register Custom Post Types for the Theme
 */
require get_template_directory() . '/inc/custom-post-types.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
