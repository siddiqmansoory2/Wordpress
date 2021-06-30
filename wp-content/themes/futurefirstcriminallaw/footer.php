<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package 
 */

?>

<?php if(get_field('google_reviews', 'options')): ?>
	<?php while(have_rows('google_reviews', 'options')): the_row(); ?>
	<?php $_reviews_title=get_sub_field('reviews_title', 'options'); ?>
	<?php $_reviews_icon=get_sub_field('icon', 'options'); ?>
	<?php $_reviews_star=get_sub_field('star', 'options'); ?>
    <section class="client-review" style="background-image: url(<?php the_sub_field('background', 'options'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slideshow">
					
						<?php if(get_sub_field('reviews_list', 'options')): ?>
							<?php while(have_rows('reviews_list', 'options')): the_row(); ?>
								<div>
									<div class="review-box">
										<h4><img src="<?php echo $_reviews_icon; ?>" alt=""><?php echo $_reviews_title; ?></h4>
										<p>“<?php the_sub_field('description', 'options'); ?>”</p>
										<div class="rating-box">
											<div class="rating">
												<div class="rate"><?php the_sub_field('rating', 'options'); ?></div>
												<div class="stars">
													<img src="<?php echo $_reviews_star; ?>" alt="">
													<img src="<?php echo $_reviews_star; ?>" alt="">
													<img src="<?php echo $_reviews_star; ?>" alt="">
													<img src="<?php echo $_reviews_star; ?>" alt="">
													<img src="<?php echo $_reviews_star; ?>" alt="">
												</div>
											</div>
											<div class="author-name"><?php the_sub_field('author', 'options'); ?></div>
										</div>
									</div>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
						
                    </div>
                    <span class="pagingInfo"></span>
                </div>
            </div>
			
			<?php if(get_sub_field('button', 'options')): ?>
				
				
					<div class="row">
						<div class="col-md-12">
							<div class="btn-box">
								<?php while(have_rows('button', 'options')): the_row(); ?>
									<a class="orange-btn" href="<?php the_sub_field('link', 'options'); ?>"><?php the_sub_field('title', 'options'); ?></a>
								<?php endwhile; ?>
							</div>
						</div>
					</div>
				
				
			<?php endif; ?>
			
        </div>
    </section>
	<?php endwhile; ?>
	<?php endif; ?>



 <footer class="cms-footer">
        <div class="footer-top">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="footer-menu">
							<?php wp_nav_menu( array( 'menu' => 'Main Menu', 'menu_id' => 'menu-footer-menu', 'menu_class'=>'footer-nav' ) ); ?>
						</div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <?php the_field('footer_address', 'options'); ?>
                    </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
                    <div class="footer-logo">
                        <a href="<?php echo home_url(); ?>">
                            <img src="<?php the_field('footer_logo', 'options'); ?>" alt="">
                        </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-xs-12">
				
				
                    <div class="footer-contact">
                        <div class="footer-social">
						
							<ul>
								<?php if(get_field('footer_social', 'options')): ?>
									<?php while(have_rows('footer_social', 'options')): the_row(); ?>
										<li>
											<a target="_blank" href="<?php the_sub_field('link', 'options'); ?>"><img src="<?php the_sub_field('icon', 'options'); ?>" alt=""></a>
										</li>
									<?php endwhile; ?>
								<?php endif; ?>
							</ul>
                        </div>
						<?php if(get_field('call_button', 'options')): ?>
							<?php while(have_rows('call_button', 'options')): the_row(); ?>
								<div class="btn-box">
									<a class="orange-btn" href="<?php the_sub_field('button_link', 'options'); ?>"><?php the_sub_field('button_title', 'options'); ?></a>
								</div>
							<?php endwhile; ?>
						<?php endif; ?>
						
                        <?php if(get_field('phone_section', 'options')): ?>
							<?php while(have_rows('phone_section', 'options')): the_row(); ?>
							<div class="phone">
								<a href="<?php the_sub_field('phone_link', 'options'); ?>"><img src="<?php the_sub_field('phone_icon', 'options'); ?>" alt=""><?php the_sub_field('phone_number', 'options'); ?></a>
								<span><?php the_sub_field('phone_description', 'options'); ?></span>
							</div>
							<?php endwhile; ?>
						<?php endif; ?>
						
                    </div>
                </div>
            </div>
            </div>
            
        </div>
        <div class="copyright"><?php the_field('copyright_message', 'options'); ?></div>
    </footer>


<?php wp_footer(); ?>
<script type="text/javascript" src="https://messenger.ngageics.com/ilnksrvr.aspx?websiteid=206-37-34-114-176-171-162-140" async="async"></script>
</body>
</html>
