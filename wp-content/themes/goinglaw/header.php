<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WP_Bootstrap_Starter
 */

?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
	<script type="application/ld+json">
            {
    "@context": "https://schema.org",
    "@graph": [
    {
        "@type": "LegalService",
        "name": "Law Office of Jason B. Going",
        "image": "https://www.goinglawfirm.com/wp-content/uploads/2020/12/logo.png",
		"@id": "<?php echo home_url($_SERVER['REQUEST_URI']); ?> ",
        "url": "<?php echo home_url($_SERVER['REQUEST_URI']); ?>",
        "address": {
            "@type": "PostalAddress",
            "addressLocality": "Belleville",
            "addressRegion": "IL",
            "postalCode": "62226",
            "streetAddress": "1803 N Belt W",
            "AddressCountry": "U.S.A."
        },
        "telephone": "(618) 408-1290",
                    "hasMap": "https://g.page/goinglawfirm",
            "geo": {
                "@type": "GeoCoordinates",
                "latitude": "38.541762",
                "longitude": "-90.0043967"
            },
        "description": "The Law Office of Jason B. Going represents clients that have been injured in all types of accidents including automobile, bicycle, and ATV, as well as slip and falls, and other injuries due to negligence.",
        "makesOffer": ["Personal injury attorney"],
        "priceRange": "$",
        "memberOf": {
            "@type" : "Organization",
            "url" : "<?php echo home_url($_SERVER['REQUEST_URI']); ?>"
        }
            ,
        "aggregateRating": {
            "@type": "AggregateRating",
            "itemReviewed": "Law Office of Jason B. Going",
            "ratingValue": 5.0,
            "reviewCount": 83,
            "bestRating": 5,
            "worstRating": 0
        },
        "review": []
        }
        ]
}        </script>
	
	<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Product",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "reviewCount": "83"
  },
  "description": "The Law Office of Jason B. Going represents clients that have been injured in all types of accidents including automobile, bicycle, and ATV, as well as slip and falls, and other injuries due to negligence.",
  "name": "Law Office of Jason B. Going",
  "brand": "Going Law Firm",
  "sku": "Personal Injury and Criminal Defense",
  "image": "https://www.goinglawfirm.com/wp-content/uploads/2020/12/logo.png",
  "review": [
    {
      "@type": "Review",
      "author": "Dennis N",
      "datePublished": "2021-02-24",
      "description": "Mr. Jason B. Going was able to help me with my legal matters beyond expectation. I particularly appreciated his prompt responsiveness and willingness to take time to explain things in a clear, concise manner.  Thank you so much Mr. Going.",
      "reviewRating": {
        "@type": "Rating",
        "bestRating": "5",
        "ratingValue": "5",
        "worstRating": "0"
      }
    }
  ]
}
</script>

	
	
</head>


<body>

	<!--header start-->
	<header class="cms-header">
    	<div class="header">
        	<nav class="navbar navbar-main navbar-default">
          		<div class="container">
            		<div class="row">
              			<div class="col-xs-12">
                			<div class="header-inner">
                  			<!-- Brand and toggle get grouped for better mobile display -->
                  				<div class="navbar-header">
                    				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                    					<span class="sr-only">Toggle navigation</span>
					                    <span class="icon-bar top-bar"></span>
					                    <span class="icon-bar mid-bar"></span>
					                    <span class="icon-bar bot-bar"></span>
                    				</button>
									
									<a class="navbar-brand logo clearfix" href="<?php echo esc_url( home_url( '/' )); ?>">
										<img src="<?php echo esc_url(get_theme_mod( 'wp_bootstrap_starter_logo' )); ?>" class="img-responsive" alt="<?php echo esc_attr( get_bloginfo( 'name' ) ); ?>" />
									</a>
									
                  				</div>
                  			<!-- Collect the nav links, forms, and other content for toggling -->
                  				<div class="navbar-collapse collapse" id="main-nav" aria-expanded="false">
								<?php 
						wp_nav_menu( array(
							'theme_location'  => 'primary',
							'container'       => 'nav',
							'container_class' => 'navbar navbar-nav',
							'menu_class'	  => 'nav navbar-nav pt-0 ml-auto',
						));
					?>
                                    
								
                                    <div class="header-right">
                                        <div class="header-call">
                                            <a href="tel:<?php echo get_theme_mod( "mytheme_site-phone" ); ?>">
                                                <img src="<?php echo get_template_directory_uri(); ?>/html/images/call.png" alt="">
                                                <span class="value"><?php echo get_theme_mod( "mytheme_site-phone" ); ?></span>
                                            </a>
                                        </div>
                                        <div class="consultation">
                                            <a class="theme-btn" href='<?php echo get_theme_mod( "mytheme_site-button_link" ); ?>'>
                                                <span class="btn__ink"></span>
                                                <div class="btn__inner"><?php echo get_theme_mod( "mytheme_site-button_title" ); ?></div>
                                            </a>
                                        </div>
                                    </div> 
                                    
                                    
                  				</div><!-- navbar-collapse -->
                  				
                			</div>
              			</div>
            		</div>
          		</div><!-- /.container -->
        	</nav><!-- navbar -->
      	</div>
    </header>
	<!--header end-->	
    <?php if ( get_post_type() === 'page' ): ?>
    <?php if(get_the_ID() != 213): ?>
	<?php if (have_rows('banner')): ?>	
<?php while (have_rows('banner')): the_row(); ?>			
<?php $banner_image = get_sub_field('banner_image'); ?>
		
			<!--banner start-->  
<?php if (have_rows('inner_sections')): ?>
		<?php while (have_rows('inner_sections')): the_row(); ?>
    <section class="cms-banner" style="background-image: url(<?php echo $banner_image; ?>);">
		
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-7 col-sm-8">
                    
                    <?php if (have_rows('left_section')): ?>
					<?php while (have_rows('left_section')): the_row(); ?>
                    <div class="banner-inner">
                        
                        <?php if (have_rows('title_section')): ?>
							<?php while (have_rows('title_section')): the_row(); ?>
													<<?php echo get_sub_field('content_tag'); ?> class='<?php echo get_sub_field('content_class'); ?>'><?php echo get_sub_field('content'); ?></<?php echo get_sub_field('content_tag'); ?>>
												<?php endwhile; ?>
											<?php endif; ?>

                        <div class="btn-box">
											<a class="theme-btn" href="<?php echo get_theme_mod( "mytheme_site-button_link_slider" ); ?>">
											<span class="btn__ink"></span>
											<div class="btn__inner"><?php echo get_theme_mod( "mytheme_site-button_title_slider" ); ?></div>
											</a>
											<span class="or"></span>										
											<a class="theme-btn outlined" href="<?php echo get_theme_mod( "mytheme_site-phone_link_slider" ); ?>">
											<span class="btn__ink"></span>
											<div class="btn__inner"><?php echo get_theme_mod( "mytheme_site-phone_title_slider" ); ?></div>
											</a>						
				        </div>
                        
                    </div>
                    <?php endwhile; ?>
					<?php endif; ?>	
                </div>
            </div>
        </div>
    
	</section>

  
					
					<section class="banner-bottom">
						<div class="container">
							<div class="row">
								<div class="col-md-10" >
									<div class="bottom-box">
										
                                        <div class="spacer spacer-1"></div>
										<div class="box box-1">
                                            <a href="<?php echo get_theme_mod( "mytheme_site-link01" ); ?>"><img src="<?php echo get_theme_mod( "mytheme_site-icon1" ); ?>" alt=""></a>
											<p><a style="color:#fff" href="<?php echo get_theme_mod( "mytheme_site-link01" ); ?>"><?php echo get_theme_mod( "mytheme_site-button1" ); ?></a></p>
										</div>
                                        <div class="spacer spacer-2"></div>
										<div class="box box-2">
                                            <a href="<?php echo get_theme_mod( "mytheme_site-link2" ); ?>"><img src="<?php echo get_theme_mod( "mytheme_site-icon2" ); ?>" alt=""></a>
											<p><a style="color:#fff" href="<?php echo get_theme_mod( "mytheme_site-link2" ); ?>"><?php echo get_theme_mod( "mytheme_site-button2" ); ?></a></p>
										</div>
                                        <div class="spacer spacer-3"></div>
										<div class="box box-3">
                                            <a href="<?php echo get_theme_mod( "mytheme_site-link3" ); ?>"><img src="<?php echo get_theme_mod( "mytheme_site-icon3" ); ?>" alt=""></a>
											<p><a style="color:#fff" href="<?php echo get_theme_mod( "mytheme_site-link3" ); ?>"><?php echo get_theme_mod( "mytheme_site-button3" ); ?></a></p>
										</div>
										<div class="spacer spacer-4"></div>
										<div class="box box-4">
                                            <a href="<?php echo get_theme_mod( "mytheme_site-link4" ); ?>"><img src="<?php echo get_theme_mod( "mytheme_site-icon4" ); ?>" alt=""></a>
											<p><a style="color:#fff" href="<?php echo get_theme_mod( "mytheme_site-link4" ); ?>"><?php echo get_theme_mod( "mytheme_site-button4" ); ?></a></p>
										</div>
			
									</div>
								</div>
							</div>
						</div>
					</section>
					
			

       <?php endwhile; ?>
<?php endif; ?>
<?php endwhile; ?>
<?php endif; ?>
		<?php endif; ?>	
    <?php endif; ?>