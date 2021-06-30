<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?>

	<?php if (have_rows('testimonials_section', 130)): ?>	
		<?php while (have_rows('testimonials_section', 130)): the_row(); ?>	
		
			<?php if (get_sub_field('enable')): ?>	
		
				<section class="cms-testimonial" style="background-image: url(<?php echo get_sub_field('background_image'); ?>);">
					<div class="container">
						<div class="row">
							<div class="col-md-5">
								<div class="title-block">
									<h2><?php echo get_sub_field('testimonials_title'); ?></h2>
								</div>
							</div>
						</div>
						<?php if (have_rows('testimonials_area')): ?>	
						<div class="row">
							<div class="col-md-12">
								<div class="testimonial-inner">
									<div class="testimonial slider">
										<?php while (have_rows('testimonials_area')): the_row(); ?>
										<div>
											<div class="testi-box">
												<div class="quote">
													<img src="<?php echo get_template_directory_uri(); ?>/html/images/quote.svg" alt="" />
												</div>
												<div class="client-content">
													<p><?php echo get_sub_field('content'); ?></p>
													<div class="client-info">
														<div class="client-name"><?php echo get_sub_field('author_name'); ?></div>
														<div class="client-position"><?php echo get_sub_field('author_designation'); ?></div>
													</div>
												</div>
											</div>
										</div>
										<?php endwhile; ?>
									</div>
								</div>
							</div>
						</div>
					
						<?php endif; ?>	
					</div>
				</section>
   
			<?php endif; ?>
		<?php endwhile; ?>	
	<?php endif; ?>
	
	
	<?php if (have_rows('footer_form', 130)): ?>	
		<?php while (have_rows('footer_form', 130)): the_row(); ?>	
		
			<?php if (get_sub_field('enable')): ?>	
		
				<section class="cms-consultation" style="background-image: url(<?php echo get_sub_field('background_image'); ?>);">
					<div class="container">
						<div class="col-md-10 col-md-offset-1">
							<div class="consultation-inner">
								<div class="consultation">
									<div class="title-block text-center">
										<h2><?php echo get_sub_field('footer_form_title'); ?></h2>
										<h3><?php echo get_sub_field('footer_form_content'); ?></h3>
									</div>
									<div class="consultation-form">
										<?php echo gravity_form( 1, false, false, false, '', true, 12 ); ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
			   
   
			<?php endif; ?>
		<?php endwhile; ?>	
	<?php endif; ?>
	
	 <footer class="cms-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="footer-logo">
                            <img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" class="img-responsive" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
                        </div>
                        <div class="footer-contact">
                            <ul>
                                <li>
                                    <img class="cont-icon" src="<?php echo get_template_directory_uri(); ?>/html/images/f-phone.svg" alt="" />
                                    <a href="tel:<?php echo get_theme_mod( "mytheme_site-phone" ); ?>"><?php echo get_theme_mod( "mytheme_site-phone" ); ?></a>
                                </li>
                                <li>
                                    <img class="cont-icon" src="<?php echo get_template_directory_uri(); ?>/html/images/f-mail.svg" alt="" />
                                    <a href="mailto:<?php echo get_theme_mod( "mytheme_site-email" ); ?>"><?php echo get_theme_mod( "mytheme_site-email" ); ?></a>
                                </li>
                                <li>
                                    <img class="cont-icon" src="<?php echo get_template_directory_uri(); ?>/html/images/f-map.svg" alt="" />
                                    <?php echo get_theme_mod( "mytheme_site-address" ); ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="footer-title">Areas served</div>
                        <div class="menu-inner">						
							<?php dynamic_sidebar( 'footer-menu' ); ?>  
						</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p><?php echo get_theme_mod( "mytheme_site-copy-right" ); ?></p>
                            <?php dynamic_sidebar( 'copyright-menu' ); ?> 
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    
	

<?php wp_footer(); ?>
</body>
</html>