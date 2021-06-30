<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package WP_Bootstrap_Starter
 */

get_header();
?>
	<section class="container">
        <?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', get_post_format());
			
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile;
		
		get_sidebar();
	?>
    </section>


<?php

get_footer();