<?php
/**
 * The template for displaying the footer.
 *
 * @package OceanWP WordPress theme
 */

?>

	</main><!-- #main -->
<?php if(get_field('footer_section','option')): ?>
	<?php while(have_rows('footer_section','option')): the_row(); ?>


	<footer class="cms-footer">
		<div class="container">
			<div class="footer-top">
				<div class="row">
					<div class="col-md-4">
						<div class="consult-lft">
							<h2><?php echo get_sub_field('form_heading','option'); ?></h2>
							<p><?php echo get_sub_field('form_description','option'); ?></p>
							<div class="footer-logo">
								<img src="<?php echo get_sub_field('logo','option'); ?>" alt="" />
							</div>
						</div>
					</div>
					<div class="col-md-8">
						<div class="consult-form">
							<h2><?php echo get_sub_field('form_title','option'); ?></h2>
							<?php gravity_form(get_sub_field('gravity_form','option'), false, false, false, '', true, 1); ?>
						</div>
					</div>
				</div>
			</div>
			<div class="footer-bottom">
				<div class="copyright">
					<div class="footer-social">
					
						<?php if(get_sub_field('social','option')): ?>
					
						<ul>
							<?php while(have_rows('social','option')): the_row(); ?>
								<li>
									<a href="<?php echo get_sub_field('link','option'); ?>" target="_blank"><?php echo get_sub_field('icon','option'); ?></a>
								</li>
							<?php endwhile; ?>
						</ul>
						
						<?php endif; ?>
					</div>
					<div class="footer-phone">
						<a href="tel:<?php echo get_sub_field('contact_number','option'); ?>">
							<img src="<?php echo get_sub_field('contact_icon','option'); ?>" alt="">
							<span><?php echo get_sub_field('contact_number','option'); ?></span>
						</a>
					</div>
					<p><?php echo get_sub_field('copyright','option'); ?></p>
				</div>
				
				<?php if(get_sub_field('location','option')): ?>
				<?php while(have_rows('location','option')): the_row(); ?>
				<div class="footer-address">
					<h4><?php echo get_sub_field('title','option'); ?></h4>
					<ul>
						<li>
							<img class="cont-icon" src="<?php echo get_stylesheet_directory_uri(); ?>/html/images/map.svg" alt="">
							<?php echo get_sub_field('address','option'); ?>
						</li>
					</ul>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
				
			</div>
		</div>
	</footer>
	
	<?php endwhile; ?>
	<?php endif; ?>

	<?php do_action( 'ocean_after_main' ); ?>

	<?php do_action( 'ocean_before_footer' ); ?>

	<?php /*
	// Elementor `footer` location.
	if ( ! function_exists( 'elementor_theme_do_location' ) || ! elementor_theme_do_location( 'footer' ) ) {
		?>

		<?php do_action( 'ocean_footer' ); ?>

	<?php } */ ?>

	<?php do_action( 'ocean_after_footer' ); ?>

</div><!-- #wrap -->

<?php do_action( 'ocean_after_wrap' ); ?>

</div><!-- #outer-wrap -->

<?php do_action( 'ocean_after_outer_wrap' ); ?>

<?php
// If is not sticky footer.
if ( ! class_exists( 'Ocean_Sticky_Footer' ) ) {
	get_template_part( 'partials/scroll-top' );
}
?>

<?php
// Search overlay style.
if ( 'overlay' === oceanwp_menu_search_style() ) {
	get_template_part( 'partials/header/search-overlay' );
}
?>

<?php
// If sidebar mobile menu style.
if ( 'sidebar' === oceanwp_mobile_menu_style() ) {

	// Mobile panel close button.
	if ( get_theme_mod( 'ocean_mobile_menu_close_btn', true ) ) {
		get_template_part( 'partials/mobile/mobile-sidr-close' );
	}
	?>

	<?php
	// Mobile Menu (if defined).
	get_template_part( 'partials/mobile/mobile-nav' );
	?>

	<?php
	// Mobile search form.
	if ( get_theme_mod( 'ocean_mobile_menu_search', true ) ) {
		get_template_part( 'partials/mobile/mobile-search' );
	}
}
?>

<?php
// If full screen mobile menu style.
if ( 'fullscreen' === oceanwp_mobile_menu_style() ) {
	get_template_part( 'partials/mobile/mobile-fullscreen' );
}
?>

<?php wp_footer(); ?>
</body>
</html>
