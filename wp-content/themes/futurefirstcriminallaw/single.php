<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header();
?>





<main id="primary" class="site-main defaultpage">

	<?php if(have_posts()): while(have_posts()): the_post(); ?>

	<section class="cms-banner">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
        </div>
        
        </section>
        
           <section class="inner-stage">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="resourse-inner">
                        <div class="resourse-box">
                            <h3>We help keep GOOD people out of jail!</h3>
                            
                            <ul>
<li>2,500 Charges Resolved</li>
<li>Offices in Phoenix and Glendale</li>
<li>Payment Plans Available</li>
</ul>
							<div class="header-right">
                        <div class="header-call">
                            <a href="tel: <?php echo get_field('phone', 'option'); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-call.svg" alt="">
                                <span class="value"><?php echo get_field('phone', 'option'); ?></span>
                            </a>
                        </div>
                        <div class="consultation">
                            <a class="orange-btn" href="<?php echo get_field('consultation_button_link', 'option'); ?>">Free Consultation</a>
                        </div>
                    </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="section-header">
                       <?php
		        the_post_thumbnail();
		        the_content();
		        wp_link_pages();
		      ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
   


		<?php	

		endwhile; // End of the loop.
	 endif;	?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
