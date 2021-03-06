<?php
/**
 * futurefirstcriminallaw functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package futurefirstcriminallaw
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

if ( ! function_exists( 'futurefirstcriminallaw_setup' ) ) :
	/**
	 * Sets up theme defaults and registers support for various WordPress features.
	 *
	 * Note that this function is hooked into the after_setup_theme hook, which
	 * runs before the init hook. The init hook is too late for some features, such
	 * as indicating support for post thumbnails.
	 */
	function futurefirstcriminallaw_setup() {
		/*
		 * Make theme available for translation.
		 * Translations can be filed in the /languages/ directory.
		 * If you're building a theme based on futurefirstcriminallaw, use a find and replace
		 * to change 'futurefirstcriminallaw' to the name of your theme in all the template files.
		 */
		load_theme_textdomain( 'futurefirstcriminallaw', get_template_directory() . '/languages' );

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
				'menu-1' => esc_html__( 'Primary', 'futurefirstcriminallaw' ),
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
				'metroid_custom_background_args',
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
endif;
add_action( 'after_setup_theme', 'futurefirstcriminallaw_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function futurefirstcriminallaw_content_width() {
	// This variable is intended to be overruled from themes.
	// Open WPCS issue: {@link https://github.com/WordPress-Coding-Standards/WordPress-Coding-Standards/issues/1043}.
	// phpcs:ignore WordPress.NamingConventions.PrefixAllGlobals.NonPrefixedVariableFound
	$GLOBALS['content_width'] = apply_filters( 'futurefirstcriminallaw_content_width', 640 );
}
add_action( 'after_setup_theme', 'futurefirstcriminallaw_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function flywheel_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'futurefirstcriminallaw' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'futurefirstcriminallaw' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
	register_sidebar(
		array(
			'name'          => esc_html__( 'Resouce Menu', 'futurefirstcriminallaw' ),
			'id'            => 'sidebar-2',
			'description'   => esc_html__( 'Add widgets here.', 'futurefirstcriminallaw' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'flywheel_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function flywheel_scripts() {
	wp_enqueue_style( 'futurefirstcriminallaw-style', get_stylesheet_uri(), false, _S_VERSION );
	
	wp_enqueue_style( 'flywheel_bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css', false, _S_VERSION );
	wp_enqueue_style( 'flywheel_font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css', false, _S_VERSION );
	wp_enqueue_style( 'flywheel_slick', get_template_directory_uri() . '/assets/css/slick.css', false, _S_VERSION );
	wp_enqueue_style( 'flywheel_slick-theme', get_template_directory_uri() . '/assets/css/slick-theme.css', false, _S_VERSION );
	wp_enqueue_style( 'flywheel_css-style', get_template_directory_uri() . '/assets/css/style.css', false, _S_VERSION );
	wp_enqueue_style( 'flywheel_responsive', get_template_directory_uri() . '/assets/css/responsive.css', false, _S_VERSION );

	wp_style_add_data( 'flywheel_futurefirstcriminallaw-style', 'rtl', 'replace' );
	
	wp_enqueue_script( 'flywheel_bootstrap-js', get_template_directory_uri() .'/assets/js/bootstrap.min.js', array('jquery'), _S_VERSION, true );
	wp_enqueue_script( 'flywheel_slick-js', get_template_directory_uri() . '/assets/js/slick.min.js', array ( 'jquery' ), _S_VERSION, true );
	wp_enqueue_script( 'flywheel_custom-js', get_template_directory_uri() . '/assets/js/custom.js',  array ( 'jquery' ), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'flywheel_scripts' );




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


require get_template_directory() . '/inc/footer-sidebar.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}


add_filter('use_block_editor_for_post', '__return_false', 10);

/**
 * ACF setting page
 */

add_action('acf/init', 'my_acf_op_init');

function my_acf_op_init() {

    // Check function exists.
    if( function_exists('acf_add_options_page') ) 
    {

        // Register options page.
        $option_page = acf_add_options_page(array(
            'page_title'    => __('Theme Setting'),
            'menu_title'    => __('Theme Setting'),
            'menu_slug'     => 'theme-bar-setting',
            'capability'    => 'edit_posts',
            'redirect'      => false
        ));

    }
}