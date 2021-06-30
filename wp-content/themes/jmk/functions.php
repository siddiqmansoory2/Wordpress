<?php
/**
 * WP Bootstrap Starter functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WP_Bootstrap_Starter
 */

if ( ! function_exists( 'wp_bootstrap_starter_setup' ) ) :
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function wp_bootstrap_starter_setup() {
	/*
	 * Make theme available for translation.
	 * Translations can be filed in the /languages/ directory.
	 * If you're building a theme based on WP Bootstrap Starter, use a find and replace
	 * to change 'jmk' to the name of your theme in all the template files.
	 */
	load_theme_textdomain( 'jmk', get_template_directory() . '/languages' );

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
	register_nav_menus( array(
		'primary' => esc_html__( 'Primary', 'jmk' ),
	) );

	/*
	 * Switch default core markup for search form, comment form, and comments
	 * to output valid HTML5.
	 */
	add_theme_support( 'html5', array(
		'comment-form',
		'comment-list',
		'caption',
	) );



	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

    function wp_boostrap_starter_add_editor_styles() {
        add_editor_style( 'custom-editor-style.css' );
    }
    add_action( 'admin_init', 'wp_boostrap_starter_add_editor_styles' );

}
endif;
add_action( 'after_setup_theme', 'wp_bootstrap_starter_setup' );


/**
 * Add Welcome message to dashboard
 */
function wp_bootstrap_starter_reminder(){
        $theme_page_url = 'https://jmkcontractor.com/?dashboard=1';

            if(!get_option( 'triggered_welcomet')){
                $message = sprintf(__( 'Welcome to WP Bootstrap Starter Theme! Before diving in to your new theme, please visit the <a style="color: #fff; font-weight: bold;" href="%1$s" target="_blank">theme\'s</a> page for access to dozens of tips and in-depth tutorials.', 'jmk' ),
                    esc_url( $theme_page_url )
                );

                printf(
                    '<div class="notice is-dismissible" style="background-color: #6C2EB9; color: #fff; border-left: none;">
                        <p>%1$s</p>
                    </div>',
                    $message
                );
                add_option( 'triggered_welcomet', '1', '', 'yes' );
            }

}
add_action( 'admin_notices', 'wp_bootstrap_starter_reminder' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function wp_bootstrap_starter_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'wp_bootstrap_starter_content_width', 1170 );
}
add_action( 'after_setup_theme', 'wp_bootstrap_starter_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function wp_bootstrap_starter_widgets_init() {
	register_sidebar( array(
        'name'          => esc_html__( 'Sidebar', 'jmk' ),
        'id'            => 'sidebar-1',
        'description'   => esc_html__( 'Add widgets here.', 'jmk' ),
        'before_widget' => '<section id="%1$s" class="widget %2$s">',
        'after_widget'  => '</section>',
        'before_title'  => '<h3 class="widget-title">',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Content Bottom', 'jmk' ),
        'id'            => 'content-bottom',
        'description'   => esc_html__( 'Add widgets here.', 'jmk' ),
        'before_widget' => '<div class="content-bottom">',
        'after_widget'  => '</div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 1', 'jmk' ),
        'id'            => 'footer-1',
        'description'   => esc_html__( 'Add widgets here.', 'jmk' ),
        'before_widget' => '<div class="footwidget %2$s">',
        'after_widget'  => '</div>',
        'before_title'  => '<h3>',
        'after_title'   => '</h3>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer 2', 'jmk' ),
        'id'            => 'footer-2',
        'description'   => esc_html__( 'Add widgets here.', 'jmk' ),
        'before_widget' => '<div class="forminner"><div>',
        'after_widget'  => '</div></div>',
        'before_title'  => '<h2>',
        'after_title'   => '</h2>',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Footer More', 'jmk' ),
        'id'            => 'footer-more',
        'description'   => esc_html__( 'Add widgets here.', 'jmk' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Services Menu 1', 'jmk' ),
        'id'            => 'service-menu-1',
        'description'   => esc_html__( 'Add widgets here.', 'jmk' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Services Menu 2', 'jmk' ),
        'id'            => 'service-menu-2',
        'description'   => esc_html__( 'Add widgets here.', 'jmk' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Services Menu 3', 'jmk' ),
        'id'            => 'service-menu-3',
        'description'   => esc_html__( 'Add widgets here.', 'jmk' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
    register_sidebar( array(
        'name'          => esc_html__( 'Services Menu 4', 'jmk' ),
        'id'            => 'service-menu-4',
        'description'   => esc_html__( 'Add widgets here.', 'jmk' ),
        'before_widget' => '',
        'after_widget'  => '',
        'before_title'  => '',
        'after_title'   => '',
    ) );
	
}
add_action( 'widgets_init', 'wp_bootstrap_starter_widgets_init' );


/**
 * Enqueue scripts and styles.
 */
function wp_bootstrap_starter_scripts() {
	// load bootstrap css
    if ( get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        wp_enqueue_style( 'jmk-bootstrap-css', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css' );
        wp_enqueue_style( 'jmk-fontawesome-cdn', 'https://use.fontawesome.com/releases/v5.10.2/css/all.css' );
    } else {
        wp_enqueue_style( 'jmk-bootstrap-css', get_template_directory_uri() . '/inc/assets/css/bootstrap.min.css' );
        wp_enqueue_style( 'jmk-fontawesome-cdn', get_template_directory_uri() . '/inc/assets/css/fontawesome.min.css' );
    }
	// load bootstrap css
	// load AItheme styles
	// load WP Bootstrap Starter styles
	wp_enqueue_style( 'jmk-style', get_stylesheet_uri() );
    if(get_theme_mod( 'theme_option_setting' ) && get_theme_mod( 'theme_option_setting' ) !== 'default') {
        wp_enqueue_style( 'jmk-'.get_theme_mod( 'theme_option_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/theme-option/'.get_theme_mod( 'theme_option_setting' ).'.css', false, '' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'ptsans') {
        wp_enqueue_style( 'jmk-pt-sans-font', 'https://fonts.googleapis.com/css2?family=PT+Sans:ital,wght@0,400;0,700;1,400;1,700&display=swap' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'raleway') {
        wp_enqueue_style( 'jmk-raleway-font', 'https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700;800;900&display=swap" rel="stylesheet' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'poppins-poppins') {
        wp_enqueue_style( 'jmk-poppins-font', 'https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700' );
    }
    if(get_theme_mod( 'preset_style_setting' ) === 'roboto-roboto') {
        wp_enqueue_style( 'jmk-roboto-font', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900,900i' );
    }
    if(get_theme_mod( 'preset_style_setting' ) && get_theme_mod( 'preset_style_setting' ) !== 'default') {
        wp_enqueue_style( 'jmk-'.get_theme_mod( 'preset_style_setting' ), get_template_directory_uri() . '/inc/assets/css/presets/typography/'.get_theme_mod( 'preset_style_setting' ).'.css', false, '' );
    }
 

	wp_enqueue_script('jquery');

    // Internet Explorer HTML5 support
    wp_enqueue_script( 'html5hiv',get_template_directory_uri().'/inc/assets/js/html5.js', array(), '3.7.0', false );
    wp_script_add_data( 'html5hiv', 'conditional', 'lt IE 9' );

	// load bootstrap js
    if ( get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        wp_enqueue_script('jmk-popper', 'https://cdn.jsdelivr.net/npm/popper.js@1/dist/umd/popper.min.js', array(), '', true );
    	wp_enqueue_script('jmk-bootstrapjs', 'https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/js/bootstrap.min.js', array(), '', true );
    } else {
        wp_enqueue_script('jmk-popper', get_template_directory_uri() . '/inc/assets/js/popper.min.js', array(), '', true );
        wp_enqueue_script('jmk-bootstrapjs', get_template_directory_uri() . '/inc/assets/js/bootstrap.min.js', array(), '', true );
    }
    wp_enqueue_script('jmk-themejs', get_template_directory_uri() . '/inc/assets/js/theme-script.min.js', array(), '', true );
	wp_enqueue_script( 'jmk-skip-link-focus-fix', get_template_directory_uri() . '/inc/assets/js/skip-link-focus-fix.min.js', array(), '20151215', true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
/*add_action( 'wp_enqueue_scripts', 'wp_bootstrap_starter_scripts' );*/



/**
 * Add Preload for CDN scripts and stylesheet
 */
function wp_bootstrap_starter_preload( $hints, $relation_type ){
    if ( 'preconnect' === $relation_type && get_theme_mod( 'cdn_assets_setting' ) === 'yes' ) {
        $hints[] = [
            'href'        => 'https://cdn.jsdelivr.net/',
            'crossorigin' => 'anonymous',
        ];
        $hints[] = [
            'href'        => 'https://use.fontawesome.com/',
            'crossorigin' => 'anonymous',
        ];
    }
    return $hints;
} 

add_filter( 'wp_resource_hints', 'wp_bootstrap_starter_preload', 10, 2 );



function wp_bootstrap_starter_password_form() {
    global $post;
    $label = 'pwbox-'.( empty( $post->ID ) ? rand() : $post->ID );
    $o = '<form action="' . esc_url( site_url( 'wp-login.php?action=postpass', 'login_post' ) ) . '" method="post">
    <div class="d-block mb-3">' . __( "To view this protected post, enter the password below:", "jmk" ) . '</div>
    <div class="form-group form-inline"><label for="' . $label . '" class="mr-2">' . __( "Password:", "jmk" ) . ' </label><input name="post_password" id="' . $label . '" type="password" size="20" maxlength="20" class="form-control mr-2" /> <input type="submit" name="Submit" value="' . esc_attr__( "Submit", "jmk" ) . '" class="btn btn-primary"/></div>
    </form>';
    return $o;
}
add_filter( 'the_password_form', 'wp_bootstrap_starter_password_form' );





/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';


/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load custom WordPress nav walker.
 */
if ( ! class_exists( 'wp_bootstrap_navwalker' )) {
    require_once(get_template_directory() . '/inc/wp_bootstrap_navwalker.php');
}


function wpdocs_override_stylesheets()
{
    wp_enqueue_style('style_bootstrap_min', get_template_directory_uri() . '/html/css/bootstrap.min.css', false, '1.1', 'all');
    wp_enqueue_style('style_font_awesome', get_template_directory_uri() . '/html/css/font-awesome.min.css', false, '1.1', 'all');
    wp_enqueue_style('style_slick', get_template_directory_uri() . '/html/css/slick.css', false, '1.1', 'all');
    wp_enqueue_style('style_slick_theme', get_template_directory_uri() . '/html/css/slick-theme.css', false, '1.1', 'all');
    wp_enqueue_style('style_style', get_template_directory_uri() . '/html/css/style.css', false, '1.1', 'all');
    wp_enqueue_style('style_responsive', get_template_directory_uri() . '/html/css/responsive.css', false, '1.1', 'all');
    wp_enqueue_script('theme-bootstrap_min', get_template_directory_uri() . '/html/js/bootstrap.min.js', array( 'jquery' ), 1.1, true);
     wp_enqueue_script('theme-slick_theme', get_template_directory_uri() . '/html/js/slick.min.js', array( 'jquery' ), 1.1, true);
    wp_enqueue_script('theme-custom', get_template_directory_uri() . '/html/js/custom.js', array( 'jquery' ), 1.1, true);
}
add_action('wp_enqueue_scripts', 'wpdocs_override_stylesheets', PHP_INT_MAX);

function wpb_hook_javascript()
{
    ?>
        <script>
          var get_template_directory_uri='<?php echo get_template_directory_uri(); ?>';
        </script>
    <?php
}
add_action('wp_head', 'wpb_hook_javascript');



function mytheme_customize_register_phone( $wp_customize ) {

    $wp_customize->add_section( 'mytheme_site_section' , array(
        'title'      => __( 'Additional Site Info', 'mytheme' ),
        'priority'   => 30,
    ));
	
	$wp_customize->add_setting( 'mytheme_site-facebook', array());
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'mytheme_company_control_facebook',
           array(
                'label'      => __( 'Facebook', 'mytheme' ),
                'section'    => 'mytheme_site_section',
                'settings'   => 'mytheme_site-facebook',
                'type'   => 'url',
                'priority'   => 2
            )
        )
    );
	
	
	$wp_customize->add_setting( 'mytheme_site-twitter', array());
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'mytheme_company_control_twitter',
           array(
                'label'      => __( 'Twitter', 'mytheme' ),
                'section'    => 'mytheme_site_section',
                'settings'   => 'mytheme_site-twitter',
                'type'   => 'url',
                'priority'   => 2
            )
        )
    );
	
	
	$wp_customize->add_setting( 'mytheme_site-copy-right', array());
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'mytheme_company_control_copyright',
           array(
                'label'      => __( 'Copyright', 'mytheme' ),
                'section'    => 'mytheme_site_section',
                'settings'   => 'mytheme_site-copy-right',
                'type'   => 'url',
                'priority'   => 2
            )
        )
    );
	
	
	$wp_customize->add_setting( 'mytheme_site-button_title', array());
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'mytheme_company_control_button_title',
           array(
                'label'      => __( 'Consultation Button', 'mytheme' ),
                'section'    => 'mytheme_site_section',
                'settings'   => 'mytheme_site-button_title',
                'priority'   => 2
            )
        )
    );
	
	$wp_customize->add_setting( 'mytheme_site-button_link', array());
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'mytheme_company_control_button_link',
           array(
                'label'      => __( 'Consultation URL', 'mytheme' ),
                'section'    => 'mytheme_site_section',
                'settings'   => 'mytheme_site-button_link',
                'type'   => 'url',
                'priority'   => 2
            )
        )
    );
	
	
	$wp_customize->add_setting( 'mytheme_site-button_phone', array());
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'mytheme_company_control_button_phone',
           array(
                'label'      => __( 'Phone No', 'mytheme' ),
                'section'    => 'mytheme_site_section',
                'settings'   => 'mytheme_site-button_phone',
                'priority'   => 2
            )
        )
    );
	
	$wp_customize->add_setting( 'mytheme_site-button_phonelink', array());
    $wp_customize->add_control( new WP_Customize_Control(
        $wp_customize,
        'mytheme_company_control_button_phonelink',
           array(
                'label'      => __( 'Phone URL', 'mytheme' ),
                'section'    => 'mytheme_site_section',
                'settings'   => 'mytheme_site-button_phonelink',
                'type'   => 'url',
                'priority'   => 2
            )
        )
    );
	
	
}
add_action( 'customize_register', 'mytheme_customize_register_phone' );
