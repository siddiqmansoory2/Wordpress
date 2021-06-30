<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
get_header();
?>


	<!--internal page start-->
    <section class="cms-content singlepage">
        <div class="container">
            <div class="row contentsection">
                <div class="col-md-9">
    
                        <?php
						while ( have_posts() ) : the_post();?>

							<article id="post-<?php the_ID(); ?>" class="singlepost">
	<div class="row">
		<div class="post-thumbnail <?php if ( is_single() ) : echo "col-sm-12"; else : echo "col-sm-4"; endif; ?>">
			<?php the_post_thumbnail(); ?>
		</div>
		
		<div class="post-thumbnail <?php if ( is_single() ) : echo "col-sm-12"; else : echo "col-sm-8"; endif; ?>">
			<header class="entry-header">
			<?php
			if ( is_single() ) :
				the_title( '<h1 class="entry-title">', '</h1>' );
			else :
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			endif;

			if ( 'post' === get_post_type() ) : ?>
			<div class="entry-meta">
				<ul class="meta clr" aria-label="Post details:">

	<li class="meta-author" itemprop="name">By <?php the_author(); ?></li>
		
	<li class="meta-date" itemprop="datePublished"><?php the_date(); ?></li>
		
	<li class="meta-cat"><?php the_category(); ?></li>
		
</ul>
			</div><!-- .entry-meta -->
			<?php
			endif; ?>
		</header><!-- .entry-header -->
		</div><!-- .entry-content -->
		
		<div class="col-sm-12">
			<div class="entry-content">
			<?php
			if ( is_single() ) :
				the_content();
			else :
				//the_content( __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'goinglaw' ) );
			endif;

				wp_link_pages( array(
					'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'goinglaw' ),
					'after'  => '</div>',
				) );
			?>
		</div><!-- .entry-content -->
		</div><!-- .entry-content -->
	</div><!-- .entry-content -->

	<footer class="entry-footer">
		<?php //wp_bootstrap_starter_entry_footer(); ?>
	</footer><!-- .entry-footer -->
</article><!-- #post-## -->

						<?php endwhile;
					?>
                    </div>
          
				
				<?php get_sidebar(); ?>
				
            </div>
        </div>
    </section>
    <!--internal page end-->
<?php
get_footer();