<?php
/**
 * Theme functions and definitions
 *
 * @package HelloElementorChild
 */

/**
 * Load child theme css and optional scripts
 *
 * @return void
 */
function hello_elementor_child_enqueue_scripts() {
	wp_enqueue_style(
		'hello-elementor-child-style',
		get_stylesheet_directory_uri() . '/style.css',
		[
			'hello-elementor-theme-style',
		],
		'1.0.0'
	);
}
add_action( 'wp_enqueue_scripts', 'hello_elementor_child_enqueue_scripts', 20 );

/**
 * Duplicate groups and fields when duplicating products
 */
add_filter( 'pewc_duplicate_fields', '__return_true' );



/**
 * Replace main image with selected image swatch
 */
function prefix_get_add_on_image_action( $action ) {
 return 'replace_hide';
}
add_filter( 'pewc_get_add_on_image_action', 'prefix_get_add_on_image_action' );

/**
 * Hide Prices in Option Fields
 */
add_filter( 'pewc_show_option_prices', '__return_false' );

/**
 * Filter the step parameter in Number fields to return decimals
 */
function prefix_number_field_step( $step, $item ) {
 return 0.125;
}
add_filter( 'pewc_number_field_step', 'prefix_number_field_step', 10, 2 );

/**
 * Set all groups to closed (or open) in an accordion
 *
 *function prefix_filter_initial_accordion_states( $state, $post_id ) {
 *return 'closed'; // Comment this out and uncomment the line below to set all groups to open
 //
 * return 'open';
 *}
 *add_filter( 'pewc_filter_initial_accordion_states', 'prefix_filter_initial_accordion_states', 10, 2 );
 */

/**
 * Include variations in products rule
 */
function prefix_search_products_method( $method, $args ) {
 return 'woocommerce_json_search_products_and_variations';
}
add_filter( 'wcfad_search_products_method', 'prefix_search_products_method', 10, 2 );

/**
 * Reorder groups
 */
function prefix_filter_product_extra_groups( $groups, $post_id ) {

 if( empty( $groups ) ) return $groups;

 /**
 * Here's a list of groups that we want to appear first
 * Enter your list of group IDs in the list below, separated by commas
 * Any groups you don't add here will just get added after these groups
 */
 $priority_groups = array( 81, 90, 102, 255, 692, 108, 130, 144, 708, 1004, 366, 92, 725, 1064 );
 
 // This is the newly ordered list of all groups
 $new_order = array();

 if( $priority_groups ) {

 foreach( $priority_groups as $pg_id ) {

 if( isset( $groups[$pg_id] ) ) {
 // Add priority groups to our array
 $new_order[$pg_id] = $groups[$pg_id];
 }

 }

 }

 // Now add the remaining groups in the original list, excluding priority groups
 foreach( $groups as $g_id=>$group ) {

 if( ! in_array( $g_id, $priority_groups ) ) {
 // If this group isn't already in our priority group, then we can add it now
 $new_order[$g_id] = $groups[$g_id];
 }

 }

 return $new_order;

}
add_filter( 'pewc_filter_product_extra_groups', 'prefix_filter_product_extra_groups', 100, 2 );


// START OF PARAMETER FIELDS
// Width Fields
function twoct_media_param_width1( $value, $id, $field, $posted ) {

	// Change this to the ID of the field you are setting a default for
	$field_id = 83;

	// Don't overwrite a value that's already there
	if( isset( $_GET['width'] ) && $field_id == $field['field_id'] ) {
		$value = esc_attr( $_GET['width'] );
	}

	return $value;

}
add_filter( 'pewc_default_field_value', 'twoct_media_param_width1', 10, 4 );

function twoct_media_param_width2( $value, $id, $field, $posted ) {

	// Change this to the ID of the field you are setting a default for
	$field_id = 1005;

	// Don't overwrite a value that's already there
	if( isset( $_GET['width'] ) && $field_id == $field['field_id'] ) {
		$value = esc_attr( $_GET['width'] );
	}

	return $value;

}
add_filter( 'pewc_default_field_value', 'twoct_media_param_width2', 10, 4 );

function twoct_media_param_width3( $value, $id, $field, $posted ) {

	// Change this to the ID of the field you are setting a default for
	$field_id = 1065;

	// Don't overwrite a value that's already there
	if( isset( $_GET['width'] ) && $field_id == $field['field_id'] ) {
		$value = esc_attr( $_GET['width'] );
	}

	return $value;

}
add_filter( 'pewc_default_field_value', 'twoct_media_param_width3', 10, 4 );

function twoct_media_param_width4( $value, $id, $field, $posted ) {

	// Change this to the ID of the field you are setting a default for
	$field_id = 1108;

	// Don't overwrite a value that's already there
	if( isset( $_GET['dwidth'] ) && $field_id == $field['field_id'] ) {
		$value = esc_attr( $_GET['dwidth'] );
	}

	return $value;

}
add_filter( 'pewc_default_field_value', 'twoct_media_param_width4', 10, 4 );

function twoct_media_param_width5( $value, $id, $field, $posted ) {

	// Change this to the ID of the field you are setting a default for
	$field_id = 1120;

	// Don't overwrite a value that's already there
	if( isset( $_GET['pwidth'] ) && $field_id == $field['field_id'] ) {
		$value = esc_attr( $_GET['pwidth'] );
	}

	return $value;

}
add_filter( 'pewc_default_field_value', 'twoct_media_param_width5', 10, 4 );

function twoct_media_param_width6( $value, $id, $field, $posted ) {

	// Change this to the ID of the field you are setting a default for
	$field_id = 1123;

	// Don't overwrite a value that's already there
	if( isset( $_GET['fwidth'] ) && $field_id == $field['field_id'] ) {
		$value = esc_attr( $_GET['fwidth'] );
	}

	return $value;

}
add_filter( 'pewc_default_field_value', 'twoct_media_param_width6', 10, 4 );

function twoct_media_param_width7( $value, $id, $field, $posted ) {

	// Change this to the ID of the field you are setting a default for
	$field_id = 1125;

	// Don't overwrite a value that's already there
	if( isset( $_GET['rwidth'] ) && $field_id == $field['field_id'] ) {
		$value = esc_attr( $_GET['rwidth'] );
	}

	return $value;

}
add_filter( 'pewc_default_field_value', 'twoct_media_param_width7', 10, 4 );

function twoct_media_param_width8( $value, $id, $field, $posted ) {

	// Change this to the ID of the field you are setting a default for
	$field_id = 1127;

	// Don't overwrite a value that's already there
	if( isset( $_GET['rfwidth'] ) && $field_id == $field['field_id'] ) {
		$value = esc_attr( $_GET['rfwidth'] );
	}

	return $value;

}
add_filter( 'pewc_default_field_value', 'twoct_media_param_width8', 10, 4 );


//Height Fields
function twoct_media_param_height1( $value, $id, $field, $posted ) {

	// Change this to the ID of the field you are setting a default for
	$field_id = 84;

	// Don't overwrite a value that's already there
	if( isset( $_GET['height'] ) && $field_id == $field['field_id'] ) {
		$value = esc_attr( $_GET['height'] );
	}

	return $value;

}
add_filter( 'pewc_default_field_value', 'twoct_media_param_height1', 10, 4 );

function twoct_media_param_height2( $value, $id, $field, $posted ) {

	// Change this to the ID of the field you are setting a default for
	$field_id = 1006;

	// Don't overwrite a value that's already there
	if( isset( $_GET['height'] ) && $field_id == $field['field_id'] ) {
		$value = esc_attr( $_GET['height'] );
	}

	return $value;

}
add_filter( 'pewc_default_field_value', 'twoct_media_param_height2', 10, 4 );

function twoct_media_param_height3( $value, $id, $field, $posted ) {

	// Change this to the ID of the field you are setting a default for
	$field_id = 1066;

	// Don't overwrite a value that's already there
	if( isset( $_GET['height'] ) && $field_id == $field['field_id'] ) {
		$value = esc_attr( $_GET['height'] );
	}

	return $value;

}
add_filter( 'pewc_default_field_value', 'twoct_media_param_height3', 10, 4 );

function twoct_media_param_height4( $value, $id, $field, $posted ) {

	// Change this to the ID of the field you are setting a default for
	$field_id = 1109;

	// Don't overwrite a value that's already there
	if( isset( $_GET['dheight'] ) && $field_id == $field['field_id'] ) {
		$value = esc_attr( $_GET['dheight'] );
	}

	return $value;

}
add_filter( 'pewc_default_field_value', 'twoct_media_param_height4', 10, 4 );

function twoct_media_param_height5( $value, $id, $field, $posted ) {

	// Change this to the ID of the field you are setting a default for
	$field_id = 1121;

	// Don't overwrite a value that's already there
	if( isset( $_GET['pheight'] ) && $field_id == $field['field_id'] ) {
		$value = esc_attr( $_GET['pheight'] );
	}

	return $value;

}
add_filter( 'pewc_default_field_value', 'twoct_media_param_height5', 10, 4 );

function twoct_media_param_height6( $value, $id, $field, $posted ) {

	// Change this to the ID of the field you are setting a default for
	$field_id = 1124;

	// Don't overwrite a value that's already there
	if( isset( $_GET['fheight'] ) && $field_id == $field['field_id'] ) {
		$value = esc_attr( $_GET['fheight'] );
	}

	return $value;

}
add_filter( 'pewc_default_field_value', 'twoct_media_param_height6', 10, 4 );

function twoct_media_param_height7( $value, $id, $field, $posted ) {

	// Change this to the ID of the field you are setting a default for
	$field_id = 1126;

	// Don't overwrite a value that's already there
	if( isset( $_GET['rheight'] ) && $field_id == $field['field_id'] ) {
		$value = esc_attr( $_GET['rheight'] );
	}

	return $value;

}
add_filter( 'pewc_default_field_value', 'twoct_media_param_height7', 10, 4 );

function twoct_media_param_height8( $value, $id, $field, $posted ) {

	// Change this to the ID of the field you are setting a default for
	$field_id = 1128;

	// Don't overwrite a value that's already there
	if( isset( $_GET['rfheight'] ) && $field_id == $field['field_id'] ) {
		$value = esc_attr( $_GET['rfheight'] );
	}

	return $value;

}
add_filter( 'pewc_default_field_value', 'twoct_media_param_height8', 10, 4 );
// END OF PARAMETER FIELDS

/**
 * Edit global groups as post types
 *add_filter( 'pewc_enable_groups_as_post_types', '__return_true' );
 */
