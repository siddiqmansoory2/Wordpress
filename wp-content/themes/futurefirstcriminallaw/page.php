<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */

get_header();
?>

	<main id="primary" class="site-main defaultpage">

		<?php
		while ( have_posts() ) :
			the_post();?>

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
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
   


		<?php	// If comments are open or we have at least one comment, load up the comment template.
			if ( comments_open() || get_comments_number() ) :
				comments_template();
			endif;

		endwhile; // End of the loop.
		?>

	</main><!-- #main -->

<?php
get_sidebar();
get_footer();
