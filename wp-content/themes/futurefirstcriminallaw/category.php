							
<?php


get_header();
?>

<main id="primary" class="site-main  defaultpage">
<section class="cms-banner"></section>


	<section class="cms-innercontent">
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h1><?php single_cat_title( __( 'Category:', 'textdomain' ) ); ?></h1>
                    </div>
                </div>
            </div>
			
			
			
<div class="row blogposts">
<?php if(have_posts()): while(have_posts()): the_post(); ?>
	
	  <div class="col-md-4">
    <article class="mb-5" role="article" id="post_<?php the_ID()?>" <?php post_class(); ?> >
		<main>
		<a href="<?php the_permalink(); ?>">
            <h3>
					<?php the_title()?>
			</h3>
			<?php the_post_thumbnail(); ?>		

			</a>

			<p class="text-right"><a href="<?php the_permalink(); ?>">Read more..</a></p>
			
		</main>
	</article>
    </div>
	
	<?php endwhile; ?>
	
	<?php if ( function_exists('b4st_pagination') ) { b4st_pagination(); } else if ( is_paged() ) { ?>
	<ul class="pagination">
	  <li class="page-item older">
	    <?php next_posts_link('<i class="fas fa-arrow-left"></i> ' . __('Previous', 'b4st')) ?></li>
	  <li class="page-item newer">
	    <?php previous_posts_link(__('Next', 'b4st') . ' <i class="fas fa-arrow-right"></i>') ?></li>
	</ul>
	<?php } ?>
	
	<?php
	  else:
	    wp_redirect(get_bloginfo('url').'/404', 404);
	    exit;
	  endif;
	?>
	
	</div>
			
        </div>
    </section>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
