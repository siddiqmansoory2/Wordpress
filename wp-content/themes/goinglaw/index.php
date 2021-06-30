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
    <section class="cms-compensation">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="compensation-inner">
                        <?php
						while ( have_posts() ) : the_post();

							get_template_part( 'template-parts/content', get_post_format() );
							
							if ( comments_open() || get_comments_number() ) :
								//comments_template();
							endif;
						endwhile;
                        
                        the_posts_pagination( array(
    'screen_reader_text' => ' ', 
    'prev_text'          => __( 'Previous', 'twentyfifteen' ),
    'next_text'          => __( 'Next', 'twentyfifteen' ),
    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'twentyfifteen' ) . ' </span>',
) );
					?>
                    </div>
                </div>
				
				<?php get_sidebar(); ?>
				
            </div>
        </div>
    </section>
    <!--internal page end-->
<?php
get_footer();