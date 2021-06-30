<?php

/* Theme Customizer :  Ocean Child Theme*/

add_action( 'customize_register', 'cd_customizer_settings' );
function cd_customizer_settings( $wp_customize ) {

	// Create Header section 
	$wp_customize->add_section( 'landing_page_option' , array(
    'title'      => 'Landing Page Options',
    'priority'   => 31,
	) );

    	// header left  setting for calling
    	$wp_customize->add_setting( 'landing_header_logo_left_title' , array(
	        'default'     => '',
	        'transport'   => 'refresh',
    	) );
    	// header left  field for enter value
    	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'landing_header_logo_left_title', array(
	    	'label'        => 'Header Left Title :',
	    	'section'    => 'landing_page_option',
	    	'settings'   => 'landing_header_logo_left_title',
	    	'type'	 => 'textarea',
    	) ) );
		// header logo  Field 
	    $wp_customize->add_setting('landing_header_logo', array(
		    'default'     => '',
		    'transport'   => 'refresh',
	    ));	    
	    $wp_customize->add_control( new WP_Customize_Image_Control( $wp_customize, 'landing_header_logo', array(
	        'label' => __('Upload Landing Page Header Logo :'),
	        'settings'  => 'landing_header_logo',
	        'section'   => 'landing_page_option'
	    ) ));
    	// header right  setting for calling
    	$wp_customize->add_setting( 'landing_header_logo_right_title' , array(
	        'default'     => '',
	        'transport'   => 'refresh',
    	) );
    	// header right  setting  field for enter value
    	$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'landing_header_logo_right_title', array(
	    	'label'        => 'Header Right Title :',
	    	'section'    => 'landing_page_option',
	    	'settings'   => 'landing_header_logo_right_title',
	    	'type'	 => 'textarea',
    	) ) );
	
		// Create footer setting for calling
		$wp_customize->add_setting( 'landing_footer_title' , array(
		    'default'     => '',
		    'transport'   => 'refresh',
		) );
		// Create footer field for enter value
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'landing_footer_title', array(
			'label'        => 'Landing Footer Title :',
			'section'    => 'landing_page_option',
			'settings'   => 'landing_footer_title',
			'type'	 => 'text',
		) ) );
		// Create footer setting for calling
		$wp_customize->add_setting( 'landing_footer_content' , array(
		    'default'     => '',
		    'transport'   => 'refresh',
		) );
		// Create footer field for enter value
		$wp_customize->add_control( new WP_Customize_Control( $wp_customize, 'landing_footer_content', array(
			'label'        => 'Landing Footer Content :',
			'section'    => 'landing_page_option',
			'settings'   => 'landing_footer_content',
			'type'	 => 'textarea',
		) ) );
}