<?php
/**
 * futurefirstcriminallaw Theme Customizer
 *
 * @package futurefirstcriminallaw
 */

/**
 * Add postMessage support for site title and description for the Theme Customizer.
 *
 * @param WP_Customize_Manager $wp_customize Theme Customizer object.
 */
function futurefirstcriminallaw_customize_register( $wp_customize ) {
	$wp_customize->get_setting( 'blogname' )->transport         = 'postMessage';
	$wp_customize->get_setting( 'blogdescription' )->transport  = 'postMessage';
	$wp_customize->get_setting( 'header_textcolor' )->transport = 'postMessage';

	if ( isset( $wp_customize->selective_refresh ) ) {
		$wp_customize->selective_refresh->add_partial(
			'blogname',
			array(
				'selector'        => '.site-title a',
				'render_callback' => 'futurefirstcriminallaw_customize_partial_blogname',
			)
		);
		$wp_customize->selective_refresh->add_partial(
			'blogdescription',
			array(
				'selector'        => '.site-description',
				'render_callback' => 'futurefirstcriminallaw_customize_partial_blogdescription',
			)
		);
	}
}
add_action( 'customize_register', 'futurefirstcriminallaw_customize_register' );

/**
 * Render the site title for the selective refresh partial.
 *
 * @return void
 */
function futurefirstcriminallaw_customize_partial_blogname() {
	bloginfo( 'name' );
}

/**
 * Render the site tagline for the selective refresh partial.
 *
 * @return void
 */
function futurefirstcriminallaw_customize_partial_blogdescription() {
	bloginfo( 'description' );
}

/**
 * Binds JS handlers to make Theme Customizer preview reload changes asynchronously.
 */
function futurefirstcriminallaw_customize_preview_js() {
	wp_enqueue_script( 'futurefirstcriminallaw-customizer', get_template_directory_uri() . '/js/customizer.js', array( 'customize-preview' ), '20151215', true );
}
add_action( 'customize_preview_init', 'futurefirstcriminallaw_customize_preview_js' );


/* add settings to create various social media text areas. */
add_action('customize_register', 'my_add_social_sites_customizer');

function my_customizer_social_media_array() {
/* store social site names in array */
$social_sites = array('twitter', 'facebook', 'google-plus', 'flickr', 'pinterest', 'youtube', 'tumblr', 'dribbble', 'rss', 'linkedin', 'instagram', 'email');
return $social_sites;
}


function my_add_social_sites_customizer($wp_customize)
{
	$wp_customize->add_section( 'my_social_settings', array(
	'title'    => __('Social Media Icons', 'text-domain'),
	'priority' => 35,
	) );
	$social_sites = my_customizer_social_media_array();
	$priority = 5;
	foreach($social_sites as $social_site) 
	{
		$wp_customize->add_setting( "$social_site", array(
		'type'              => 'theme_mod',
		'capability'        => 'edit_theme_options',
		'sanitize_callback' => 'esc_url_raw'
		) );
		
		$wp_customize->add_control( $social_site, array(
		'label'    => __( "$social_site url:", 'text-domain' ),
		'section'  => 'my_social_settings',
		'type'     => 'text',
		'priority' => $priority,
		) );
		$priority = $priority + 5;
	}
}


/* takes user input from the customizer and outputs linked social media icons */
function my_social_media_icons() 
{
	$social_sites = my_customizer_social_media_array();
	/* any inputs that aren't empty are stored in $active_sites array */
	foreach($social_sites as $social_site) 
	{
		if( strlen( get_theme_mod( $social_site ) ) > 0 ) {
		$active_sites[] = $social_site;
		}
	}
	/* for each active social site, add it as a list item */
	if ( ! empty( $active_sites ) ) 
	{
		
		foreach ( $active_sites as $active_site ) {
		/* setup the class */
		$class = 'fab fa-' . $active_site;
		if ( $active_site == 'email' ) 
		{
			?>
			
				<a class="email" target="_blank" href="mailto:<?php echo antispambot( is_email( get_theme_mod( $active_site ) ) ); ?>">
				<i class="fab fa-envelope" title="<?php _e('email icon', 'text-domain'); ?>"></i>
				</a>
			
			<?php 
		} 
		else 
		{ ?>
			
			<a class="<?php echo $active_site; ?>" target="_blank" href="<?php echo esc_url( get_theme_mod( $active_site) ); ?>">
			<i class="<?php echo esc_attr( $class ); ?>" title="<?php printf( __('%s icon', 'text-domain'), $active_site ); ?>"></i>
			</a>
			
			<?php
		}
		}
		
	}
}






