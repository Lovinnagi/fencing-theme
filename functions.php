<?php
/**
 * Fencing functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package Fencing
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}


// Define the root URL of the theme (useful for assets like images, CSS, and JS files)
define('THEME_URL', get_template_directory_uri());

// Define the path to the theme's directory on the server
define('THEME_PATH', get_template_directory());

// Define URL paths for common assets
define('THEME_CSS_URL', THEME_URL . '/assets/css');
define('THEME_JS_URL', THEME_URL . '/assets/js');
define('THEME_IMAGE_URL', THEME_URL . '/assets/images');

// Define path constants for file includes and templates
define('THEME_INC_PATH', THEME_PATH . '/inc');
define('THEME_TEMPLATE_PATH', THEME_PATH . '/templates');

// Define URL path for any custom fonts or icons, if applicable
define('THEME_FONTS_URL', THEME_URL . '/assets/fonts');

include THEME_PATH .'/inc/theme-settings.php';

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function fencing_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on Fencing, use a find and replace
		* to change 'fencing' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'fencing', get_template_directory() . '/languages' );

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
			'menu-1' => esc_html__( 'Primary', 'fencing' ),
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
			'fencing_custom_background_args',
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
}
add_action( 'after_setup_theme', 'fencing_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function fencing_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'fencing_content_width', 640 );
}
add_action( 'after_setup_theme', 'fencing_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function fencing_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'fencing' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'fencing' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'fencing_widgets_init' );

/**
 * Enqueue scripts and styles.
 */

 function theme_enqueue_styles() {
    // FontAwesome
    wp_enqueue_style(
        'fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/fontawesome.min.css',
        array(), // No dependencies
        '6.6.0', // Version
        'all'    // Media
    );

    // Google Fonts
    wp_enqueue_style(
        'google-fonts-open-sans',
        'https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300..800;1,300..800&display=swap',
        array(),
        null // Use null for Google Fonts to avoid cache-busting versions
    );

    // Owl Carousel
    wp_enqueue_style(
        'owl-carousel',
        'https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/assets/owl.carousel.min.css',
        array(),
        '2.3.4'
    );


	wp_enqueue_style( 'rank-rent-static-custom-style', THEME_CSS_URL . '/bootstrap.min.css', array(), _S_VERSION, false );
	wp_style_add_data( 'rank-rent-static-style', 'rtl', 'replace' );

	//wp_enqueue_script( 'rank-rent-static-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );


function theme_enqueue_scripts() {
	 // jQuery (if needed, but WordPress includes it by default)
	 wp_enqueue_script('jquery');
	// bootstrap
    wp_enqueue_script(
        'bootstrap',
    	THEME_JS_URL . '/bootstrap.min.js',
        array('jquery'), 
        '6.6.0', // Version
        true     // Load in footer
    );
    // FontAwesome
    wp_enqueue_script(
        'fontawesome',
        'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/js/all.min.js',
        array(), // No dependencies
        '6.6.0', // Version
        true     // Load in footer
    );

    // Owl Carousel
    wp_enqueue_script(
        'owl-carousel',
        'https://cdn.jsdelivr.net/npm/owl.carousel@2.3.4/dist/owl.carousel.min.js',
        array('jquery'), // jQuery dependency
        '2.3.4',
        true // Load in footer
    );

    // Custom JS
    wp_enqueue_script(
        'theme-custom-js',
        THEME_JS_URL . '/custom.js',
        array('jquery'), // Add dependencies if necessary
        null,                // Version (optional)
        true                 // Load in footer
    );
}
add_action('wp_enqueue_scripts', 'theme_enqueue_scripts');

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
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

function the_breadcrumb() {
    echo '<a href="' . home_url() . '">Home</a> » ';
    if (is_singular('service')) {
        echo '<a href="#">Services</a> » ';
    }
    the_title();
}