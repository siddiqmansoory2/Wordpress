<?php
/**
 * Child theme functions
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development
 * and http://codex.wordpress.org/Child_Themes), you can override certain
 * functions (those wrapped in a function_exists() call) by defining them first
 * in your child theme's functions.php file. The child theme's functions.php
 * file is included before the parent theme's file, so the child theme
 * functions would be used.
 *
 * Text Domain: oceanwp
 * @link http://codex.wordpress.org/Plugin_API
 *
 */

/**
 * Load the parent style.css file
 *
 * @link http://codex.wordpress.org/Child_Themes
 */
function oceanwp_child_enqueue_parent_style() {
	// Dynamically get version number of the parent stylesheet (lets browsers re-cache your stylesheet when you update your theme)
	$theme   = wp_get_theme( 'OceanWP' );
	$version = $theme->get( 'Version' );
	// Load the stylesheet
	wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array( 'oceanwp-style' ), $version );
	
}
add_action( 'wp_enqueue_scripts', 'oceanwp_child_enqueue_parent_style' );

// Customizer child theme
require_once('inc/customizer.php');

/**
 * Add a sidebar chapter pages.
 */
function wpdocs_theme_slug_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'Chapter Sidebar'),
        'id'            => 'lp-chapter-sidebar',
        'description'   => __('Widgets in this area will be shown on all chapter pages.'),
        'before_widget' => '<div id="%1$s" class="widget floating-widget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2 class="widgettitle chapter-widget-title">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'wpdocs_theme_slug_widgets_init' );




function wpdocs_override_stylesheets()
{


		wp_enqueue_style( 'atlfamilyimmigrationlaw-bootstrap', get_stylesheet_directory_uri().'/html/css/bootstrap.min.css',false,'1.1','all');
		/*wp_enqueue_style( 'atlfamilyimmigrationlaw-fontawesome', get_stylesheet_directory_uri().'/html/css/font-awesome.min.css',false,'1.1','all');*/
		wp_enqueue_style( 'atlfamilyimmigrationlaw-slick', get_stylesheet_directory_uri().'/html/css/slick.css',false,'1.1','all');
    
		wp_enqueue_style( 'atlfamilyimmigrationlaw-slick-theme', 
        get_stylesheet_directory_uri().'/html/css/slick-theme.css',false,'1.1','all');
		
		wp_enqueue_style( 'atlfamilyimmigrationlaw-style1', get_stylesheet_directory_uri().'/html/css/style.css',false,'1.1','all');
    
		wp_enqueue_style( 'atlfamilyimmigrationlaw-responsive1', get_stylesheet_directory_uri().'/html/css/responsive.css',false,'1.1','all');
		
		
		wp_enqueue_script( 'atlfamilyimmigrationlaw-jquery', get_stylesheet_directory_uri().'/html/js/jquery.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'atlfamilyimmigrationlaw-bootstrap', get_stylesheet_directory_uri().'/html/js/bootstrap.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'atlfamilyimmigrationlaw-slick', get_stylesheet_directory_uri().'/html/js/slick.min.js', array ( 'jquery' ), 1.1, true);
		wp_enqueue_script( 'atlfamilyimmigrationlaw-scripts', get_stylesheet_directory_uri().'/html/js/custom.js', array ( 'jquery' ), 1.1, true);
	
	
	
}
add_action('wp_enqueue_scripts', 'wpdocs_override_stylesheets', PHP_INT_MAX);	


if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'Theme General Settings',
		'menu_title'	=> 'Theme Settings',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Header Settings',
		'menu_title'	=> 'Header',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}