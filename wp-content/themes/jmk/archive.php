
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
    <section class="cms-content blogpage">
        <div class="container">
            <h1 class="text-center"><?php single_cat_title( __( 'Category:', 'textdomain' ) ); ?></h1>
            <div class="row contentsection">
                
                    
  <?php while ( have_posts() ) : the_post();?>
<div class="col-md-6">
                    <div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

		<div class="post-thumbnail">
			<?php the_post_thumbnail(); ?>
		</div>

			<header class="entry-header">
			<?php the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' ); ?>
                
                <ul class="meta clr" aria-label="Post details:">

	<li class="meta-author" itemprop="name">By <?php the_author(); ?></li>
		
	<li class="meta-date" itemprop="datePublished"><?php the_date(); ?></li>
		
	<li class="meta-cat"><?php the_category(); ?></li>
		
</ul>
		</header>
		
    <div class="entry-content">
		<?php the_excerpt(); ?>
        
        <p>
            <a class="readmore" href="<?php echo get_permalink( $post->ID ); ?>">Read More..</a>
        </p>
	</div>
    </div>
		
                </div>
	<?php endwhile;?>
</div>
		<?php 	 the_posts_pagination( array(
    'screen_reader_text' => ' ', 
                 'mid_size'  => 5,
    'prev_text'          => __( 'Previous', 'twentyfifteen' ),
    'next_text'          => __( 'Next', 'twentyfifteen' ),
    'before_page_number' => '<span class="meta-nav screen-reader-text">' . __( '', 'twentyfifteen' ) . ' </span>',
) );?>
            
        </div>
    </section>
    <!--internal page end-->
<?php
get_footer();