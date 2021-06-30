<footer class="bg-light">
	<?php if (is_page(array(7,9))) { ?>
		<div id="fb-root"></div>
		<script>(function(d, s, id) {
		var js, fjs = d.getElementsByTagName(s)[0];
		if (d.getElementById(id)) return;
		js = d.createElement(s); js.id = id;
		js.src = 'https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v3.2';
		fjs.parentNode.insertBefore(js, fjs);
		}(document, 'script', 'facebook-jssdk'));</script>
			<div class="staff">
				<div class="content">
					<div class="container">
						<div class="row">
							<div class="col-lg-8 text-center text-lg-left">
                                <?php dynamic_sidebar('attorney-bio'); ?>
							</div>
							<div class="col-lg-4 mt-lg-5 mt-0">
                                <?php dynamic_sidebar('attorney-sidebar'); ?>
							</div>
						</div>
						<div class="quote">
                            <?php dynamic_sidebar('attorney-bottom'); ?>
						</div>
					</div>
				</div>
			</div>

	<?php } ?>

	<?php get_template_part('theme/includes/testimonials'); ?>

	<div id="botbar">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 my-auto text-center text-lg-left">
                    <?php dynamic_sidebar('footer-widget-1'); ?>
				</div>
				<div class="col-lg-2 my-auto pt-3 text-center text-lg-left">
                    <?php dynamic_sidebar('footer-widget-2'); ?>
				</div> 
				<div class="col-lg-4 my-auto text-center">
                    <?php dynamic_sidebar('footer-widget-3'); ?>
					
				</div>
				<div class="col mt-2 text-center text-lg-left">
					<div class="phone py-3 py-lg-0">
                        <?php dynamic_sidebar('footer-widget-4'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="footer-logo">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 my-0 my-lg-3">
					<div class="logo">
						<h2 class="background"><span><img class="img-responsive" src="<?php echo get_template_directory_uri(); ?>/theme/img/footer-logo.png" alt="Divellaw" title="Divellaw" style="max-width: 300px; width: 100%;" /></span></h2>
					</div>
				</div>
			</div>
		</div>
	</div>

	<?//php get_template_part('theme/includes/botbar'); ?>
		<?php get_template_part('theme/includes/copyright'); ?>

</footer>


<?php wp_footer(); ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Rajdhani:300,400,500,700|Roboto:300,300i,400,500,700|Playfair+Display:400i">
<script type="text/javascript" src="https://d3h66sfd9htnrp.cloudfront.net/otmwidget.run.js?apikey=867e5e00-d30f-11e8-b2fd-1fc23bde03fe"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.js"></script>
<script>
	var swiper = new Swiper('.swiper-container', {
		pagination: {
			el: '.swiper-pagination',
			clickable: true,
		},
		autoplay: {
    delay: 5000,
  },
	});

	jQuery('.carousel').carousel({
	  interval: 10000
	})

</script>
<!-- divellaw.com -->
<!-- Start Of NGage -->
<div id="nGageLH" style="visibility:hidden; display: block; padding: 0; position: fixed; right: 0px; bottom: 0px; z-index: 5000;"></div>
<script type="text/javascript" src="https://messenger.ngageics.com/ilnksrvr.aspx?websiteid=206-37-34-114-176-171-162-140" async="async"></script>
<!-- End Of NGage -->
</body>

</html>
