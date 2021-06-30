<?php
/**
 * Template Name: Phoenix DUI Lawyer Page Template
 
 */

get_header();
?>

	<main id="primary" class="site-main">

		<?php
		while ( have_posts() ) : the_post();

			get_template_part( 'template-parts/content', 'phoenix-dui' );


		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php

get_footer();
