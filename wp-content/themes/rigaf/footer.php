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
	<?php if(get_field('footer_section','option')): ?>
	<?php while(have_rows('footer_section','option')): the_row(); ?>
	 <footer class="cms-footer">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-3">
                        <div class="footer-left">
                            <div class="footer-logo">
                                <a href="#">
                                    <img src="<?php echo esc_url(get_sub_field( 'footer_logo','option' )); ?>" class="img-responsive" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
                                </a>
                            </div>
                            <p><?php echo get_sub_field('footer_description','option'); ?></p>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="footer-mid">						
							<?php dynamic_sidebar( 'footer-menu' ); ?>
						</div>
                    </div>
                    <div class="col-md-3">
                        <div class="footer-rht">
                            <div class="footer-social">
							
								<?php if(get_sub_field('social','option')): ?>
					
								<ul>
									<?php while(have_rows('social','option')): the_row(); ?>
										<li>
											<a href="<?php echo get_sub_field('link','option'); ?>"><?php echo get_sub_field('icon','option'); ?></a>
										</li>
									<?php endwhile; ?>
								</ul>
								
								<?php endif; ?>
							
							
                            </div>
                            <div class="footer-contact">
                                <ul>
                                    <li>
                                        <img class="cont-icon" src="<?php echo get_template_directory_uri(); ?>/html/images/map.svg" alt="">
                                        <?php echo get_theme_mod( "mytheme_site-address" ); ?>
                                    </li>
                                    <li>
                                        <img class="cont-icon" src="<?php echo get_template_directory_uri(); ?>/html/images/phone.svg" alt="">
                                        <a href="tel:<?php echo get_theme_mod( "mytheme_site-phone" ); ?>"><?php echo get_theme_mod( "mytheme_site-phone" ); ?></a>
                                    </li>
                                    
                                    <li>
                                        <img class="cont-icon" src="<?php echo get_template_directory_uri(); ?>/html/images/email.svg" alt="">
                                        <a href="mailto:<?php echo get_theme_mod( "mytheme_site-email" ); ?>"><?php echo get_theme_mod( "mytheme_site-email" ); ?></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copyright"><?php echo get_theme_mod( "mytheme_site-copy-right" ); ?></div>
        </div>
    </footer>
    <?php endwhile; ?>
	<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>