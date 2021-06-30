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
   <footer class="cms-footer">
            <div class="footer-top">
                <div class="footrow">
                    <div class="col-md-5 col-sm-12">
                            <div class="footer-info">
                                 <?php dynamic_sidebar( 'footer-1' ); ?> 
                            </div>
                    </div>
                    <div class="col-md-7 col-sm-12">
                            <div class="footer-form">
                                 <?php dynamic_sidebar( 'footer-2' ); ?> 
                            </div>
                    </div>        
                </div>
            </div>
            <div class="copyright">
            <div class="container">  
    <div class="row">
     <div class="col-md-10 col-sm-12">               
© Copyright <?php echo date("Y"); ?> – <?php echo get_theme_mod( "mytheme_site-copy-right" ); ?>

     </div>
            <div class="col-md-2 col-sm-12 footer-social"> 
                             <ul>
                                    <li>
                                        <a href="<?php echo get_theme_mod( "mytheme_site-facebook" ); ?>" target='_blank'><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_theme_mod( "mytheme_site-twitter" ); ?>" target='_blank'><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                                </ul> 
            </div>
        </div>
    </div>
    </div>
</footer>
    <?php get_template_part( 'footer-widget' ); ?>
<script>
		//current menu active
		jQuery(document).ready(function () {
			jQuery(".current-menu-item").addClass("nav-link active");
		});

			
    </script>
 	<script type="text/javascript">
		jQuery("#menu-mainmenu > li.menu-item-has-children a").after('<span class="arrow"></span>');
        jQuery("#menu-mainmenu > li.menu-item-has-children > .arrow").click(function(){
        if(jQuery(this).parent().hasClass("show")){
            jQuery(this).parent().removeClass("show");
        }else{
            jQuery("#menumain-menu > li.menu-item-has-children").removeClass("show");
            jQuery(this).parent().toggleClass("show");
        }
    });
    </script>
<?php wp_footer(); ?>
</body>
</html>