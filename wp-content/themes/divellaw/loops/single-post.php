<?php
/*
The Single Post
===============
*/
?>
<style>
   .sinlge .h2, .single h2 {
    font-size: 2rem;
}
</style>    

	<?php if(have_posts()): while(have_posts()): the_post(); ?>
<div class="single-post">
		<article role="article" id="post_<?php the_ID()?>" <?php post_class()?>>
			<main class="">
			<h1><?php the_title()?></h1>
				<?php
		        the_post_thumbnail();
		        the_content();
		        wp_link_pages();
		      ?>
			</main>
		

		</article>
	</div>
	<?php
    if ( comments_open() || get_comments_number() ) :
      //comments_template();
      
		endif;
  endwhile; else:
    wp_redirect(esc_url( home_url() ) . '/404', 404);
    exit;
  endif;
?>
		<div class="row mt-5 border-top pt-3">
		</div>
