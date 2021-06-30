<?php /* Template Name: No Side Bar */ ?>
<?php
get_header();
?>

	
	<!--internal page start-->
    <section class="cms-compensation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="compensation-inner">
                        <?php
						while ( have_posts() ) : the_post();
							the_content();
						endwhile;
					?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--internal page end-->
	
	<?php if(!is_page_template( 'blank-page.php' ) && !is_page_template( 'blank-page-with-container.php' )): ?>
	<footer class="cms-footer" style="background-image: url(<?php echo get_template_directory_uri(); ?>/html/images/footer-bg.jpg);">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-left">
                            <div class="footer-contact">
                                <ul>
                                    <li>
                                        <img class="cont-icon" src="<?php echo get_template_directory_uri(); ?>/html/images/phone.svg" alt="" />
                                        <a href="tel:<?php echo get_theme_mod( "mytheme_site-phone" ); ?>"><?php echo get_theme_mod( "mytheme_site-phone" ); ?></a>
                                    </li>
                                    <li>
                                        <img class="cont-icon" src="<?php echo get_template_directory_uri(); ?>/html/images/map.svg" alt="" />
                                        <?php echo get_theme_mod( "mytheme_site-address" ); ?>
                                    </li>
                                </ul>
                            </div>
                            <div class="footer-social">
                                <ul>
                                    <li>
                                        <a href="<?php echo get_theme_mod( "mytheme_site-facebook" ); ?>" target='_blank'><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_theme_mod( "mytheme_site-youtube" ); ?>" target='_blank'><i class="fa fa-youtube-play" aria-hidden="true"></i></a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-md-offset-2">
                        <div class="footer-menu">
							<?php dynamic_sidebar( 'footer-menu' ); ?>                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-md-offset-1">
                        <div class="footer-logo text-right">
                            <a href="#"><img src="<?php echo get_template_directory_uri(); ?>/html/images/footer-logo.png" alt="" /></a>
                        </div>
                        <div class="btn-box text-right">
                            <a class="theme-btn orange-btn" href='<?php echo get_theme_mod( "mytheme_site-button_link_footer" ); ?>'>
                                <span class="btn__ink"></span>
                                <div class="btn__inner"><?php echo get_theme_mod( "mytheme_site-button_title_footer" ); ?></div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="copy-right">
                <a class="privacy" href="#">Privacy</a>
                <?php echo get_theme_mod( "mytheme_site-copy-right" ); ?>
            </div>
			<!-- START Smith.ai Law Office of Heather C. Ford Chat -->
    <script type="text/javascript">
      window.SMITH={},window.SMITH.smithChatAccount="5c6c82b1-876f-42c7-b842-877b07dadcdc"; var script=document.createElement("script"); script.async=!0, script.type="text/javascript",script.src="https://app.smith.ai/chat/widget-latest.js",document.getElementsByTagName("HEAD").item(0).appendChild(script);
    </script>
    <!-- END Smith.ai Law Office of Heather C. Ford Chat -->
        </div>
    </footer>
    <?php get_template_part( 'footer-widget' ); ?>
<?php endif; ?>

<?php wp_footer(); ?>
</body>
</html>