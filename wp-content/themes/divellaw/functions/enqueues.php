<?php
/**!
 * Enqueues
 */

if ( ! function_exists('b4st_enqueues') ) {
	function b4st_enqueues() {

		// Styles

		wp_register_style('bootstrap-css', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/css/bootstrap.min.css', false, '4.1.0', null);
		wp_enqueue_style('bootstrap-css');

		wp_register_style('b4st-css', get_template_directory_uri() . '/theme/css/b4st.css', false, null);
		wp_enqueue_style('b4st-css');
        
    wp_register_style('custom-css', get_template_directory_uri() . '/theme/css/custom.css', false, null);
		wp_enqueue_style('custom-css');
		
	  wp_register_style('icon-css', get_template_directory_uri() . '/theme/css/custom-icons-font.css', false, null);
		wp_enqueue_style('icon-css');

		// Scripts

		wp_enqueue_script('jquery');
		
		wp_register_script('modernizr',  'https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js', false, '2.8.3', true);
		wp_enqueue_script('modernizr');

		wp_register_script('popper',  'https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js', false, '1.14.0', true);
		wp_enqueue_script('popper');

		wp_register_script('bootstrap-js', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.0/js/bootstrap.min.js', false, '4.1.0', true);
		wp_enqueue_script('bootstrap-js');

		wp_register_script('b4st-js', get_template_directory_uri() . '/theme/js/b4st.js', false, null, true);
		wp_enqueue_script('b4st-js');

		if (is_singular() && comments_open() && get_option('thread_comments')) {
			wp_enqueue_script('comment-reply');
		}
	}
}
add_action('wp_enqueue_scripts', 'b4st_enqueues', 100);
