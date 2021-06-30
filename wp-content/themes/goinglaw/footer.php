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

		
<?php if(get_the_ID() != 213): ?>	

 <section class="cms-map">
        <div class="container">
            <div class="row">
                
                <div class="col-md-7 locationlist">
                    <h2>Helping those Injured in Accidents Across Illinois</h2>
                    <p>Through the years Jason has served as an advocate for numerous clients in matters before various Circuit Courts in Illinois and Missouri as well as before the Missouri Court of Appeals. He represents clients in various areas of law including personal injury, automobile accidents, workers' compensation, criminal defense, DUI/DWI defense, and traffic cases.. Jason is licensed in Illinois, Missouri, and Florida.</p>
                    
                    <h4>We are here to help the residents of:</h4>
<ul>
    <li><i class="fas fa-map-marker-alt"></i> Belleville</li>
    <li><i class="fas fa-map-marker-alt"></i> Salem</li>
    <li><i class="fas fa-map-marker-alt"></i> Pinckneyville</li>
    <li><i class="fas fa-map-marker-alt"></i> Alton</li>
    <li><i class="fas fa-map-marker-alt"></i> Mount Carmel</li>
    <li><i class="fas fa-map-marker-alt"></i> Nashville</li>
    <li><i class="fas fa-map-marker-alt"></i> Granite City</li>
    <li><i class="fas fa-map-marker-alt"></i> Fairfield</li>
    <li><i class="fas fa-map-marker-alt"></i> Carbondale</li>
    <li><i class="fas fa-map-marker-alt"></i> O'Fallon</li>
    <li><i class="fas fa-map-marker-alt"></i> Flora</li>
    <li><i class="fas fa-map-marker-alt"></i> Marion</li>
    <li><i class="fas fa-map-marker-alt"></i> East St. Louis</li>
    <li><i class="fas fa-map-marker-alt"></i> Mount Vernon</li>
    <li><i class="fas fa-map-marker-alt"></i> Herrin</li>
    <li><i class="fas fa-map-marker-alt"></i> Collinsville</li>
    <li><i class="fas fa-map-marker-alt"></i> Chester</li>
    <li><i class="fas fa-map-marker-alt"></i> Murphysboro</li>
    <li><i class="fas fa-map-marker-alt"></i> Edwardsville</li>
    <li><i class="fas fa-map-marker-alt"></i> West Frankfort</li>
    <li><i class="fas fa-map-marker-alt"></i> Anna/Jonesboro</li>
    <li><i class="fas fa-map-marker-alt"></i> Centralia</li>
    <li><i class="fas fa-map-marker-alt"></i> Benton</li>
    <li><i class="fas fa-map-marker-alt"></i> Carterville</li>
    <li><i class="fas fa-map-marker-alt"></i> Olney</li>
    <li><i class="fas fa-map-marker-alt"></i> Du Quoin</li>
    <li><i class="fas fa-map-marker-alt"></i> Cairo</li>
 </ul>
                </div>
                <div class="col-md-5 mapbg">
                    <?php echo do_shortcode( '[us_il_map]' ); ?>
                </div>
            </div>
        </div>
    </section> 



    
<section class="cms-form" style="background-image: url(/wp-content/uploads/2020/12/bottombg.png);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h2>Request a Free Case Review</h2>
                    <h4>All Consultations Are Free of Charge</h4>
                    <?php gravity_form( 1, false, false, false, '', false ); ?>
                </div>
                <div class="col-md-6 formimg">
                    <img src="/wp-content/uploads/2020/12/bottomimg.png" alt="" />
                </div>
            </div>
        </div>
</section>
		
<?php endif; ?>	

   <footer class="cms-footer">
        <div class="container">
            <div class="footer-top">
                <div class="row">
                    <div class="col-md-3 col-sm-4">
                        <div class="footer-left">
                            <div class="footer-contact">
                                <ul>
                                    <li>
                                        <img class="cont-icon" src="<?php echo get_template_directory_uri(); ?>/html/images/phone.png" alt="" />
                                        <a href="tel:<?php echo get_theme_mod( "mytheme_site-phone" ); ?>"><?php echo get_theme_mod( "mytheme_site-phone" ); ?></a>
                                    </li>
                                    <li>
                                        <img class="cont-icon" src="<?php echo get_template_directory_uri(); ?>/html/images/marker.png" alt="" />
                                        <?php echo get_theme_mod( "mytheme_site-address" ); ?>
                                    </li>
                                    <li><a href="https://g.page/goinglawfirm" target="_blank">Map and directions > </a></li>
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
                         <div class="footer-social">
                             <ul>
                                    <li>
                                        <a href="<?php echo get_theme_mod( "mytheme_site-facebook" ); ?>" target='_blank'><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                    </li>
                                    <li>
                                        <a href="<?php echo get_theme_mod( "mytheme_site-linkedin" ); ?>" target='_blank'><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                    </li>
                               
                                </ul>
                            </div>
                        <div class="footer-logo text-right">     
                            <a href="/"><img src="<?php echo get_template_directory_uri(); ?>/html/images/logo_white.png" alt="" /></a>
                        </div>
                        
                    </div>
                </div>
            </div>
            <div class="copy-right">
                <a class="privacy" href="/privacy/">Privacy</a>
              <?php echo get_theme_mod( "mytheme_site-copy-right" ); ?>
            </div>
        </div>
    </footer>
    <?php get_template_part( 'footer-widget' ); ?>

<script type="text/javascript">
		jQuery("#menu-mainmenu > li.menu-item-has-children a").after('<span class="arrow"></span>');
        jQuery("#menu-mainmenu > li.menu-item-has-children > .arrow").click(function(){
        if(jQuery(this).parent().hasClass("show")){
            jQuery(this).parent().removeClass("show");
        }else{
            jQuery("#menu-mainmenu > li.menu-item-has-children").removeClass("show");
            jQuery(this).parent().toggleClass("show");
        }
    });
    </script>
<?php wp_footer(); ?>
</body>
</html>