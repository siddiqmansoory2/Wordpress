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
	<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KBHRD29');</script>
<!-- End Google Tag Manager -->
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="profile" href="http://gmpg.org/xfn/11">
<?php wp_head(); ?>
	
	<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "GeneralContractor",
  "name": "JMK Contractor - Remodeling & Handyman Services",
  "image": "https://jmkcontractor.com/wp-content/uploads/2021/01/JMK-Logo-1.png",
  "@id": "",
  "url": "<?php echo home_url($_SERVER['REQUEST_URI']); ?>",
  "telephone": "305-890-4953",
  "priceRange": "$$$",
  "address": {
    "@type": "PostalAddress",
    "streetAddress": "2020 Prairie Ave #303",
    "addressLocality": "Miami Beach",
    "addressRegion": "FL",
    "postalCode": "33139",
    "addressCountry": "US"
  },
  "geo": {
    "@type": "GeoCoordinates",
    "latitude": 25.7972688,
    "longitude": -80.13518119999999
  },
  "openingHoursSpecification": [{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": [
      "Monday",
      "Tuesday",
      "Wednesday",
      "Thursday",
      "Friday"
    ],
    "opens": "07:00",
    "closes": "21:00"
  },{
    "@type": "OpeningHoursSpecification",
    "dayOfWeek": "Saturday",
    "opens": "07:00",
    "closes": "15:00"
  }] 
}
</script>
	
	<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Product",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.8",
    "reviewCount": "19"
  },
  "description": "Miami Remodeling Contractor Serving All Miami-Dade and Broward Counties",
  "name": "JMK Contractor - Remodeling & Handyman Services",
  "image": "https://jmkcontractor.com/wp-content/uploads/2021/01/JMK-Logo-1.png",
  "review": [
    {
      "@type": "Review",
      "author": "Suzana Fiat",
      "datePublished": "2021-1-19",
      "description": "I enjoyed my experience with JMK. I called and scheduled an appointment within 3 days. The staff had branded polos. They were professional and took pictures of the space. I needed to remodel my kitchen and bathroom. 5 days later I received the estimate which I approved. After that, the JMK requested plans from us based on which they did the drawing for the permit application. The permitting process took 6 weeks. Once we got the permit approved, the JMK crew started the work within 2 weeks. The work was done in 4 weeks including permit inspections. I'm overall happy with the work. The place was kept clean throughout the project.",
      "name": "I enjoyed my experience with JMK",
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
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBHRD29"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
	<!--header start-->
	<header class="cms-header">
    	
        	<nav class="navbar navbar-main navbar-default">
         
          <div class="headerinner">
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
										wp_nav_menu(array(
										'theme_location'    => 'primary',
										'container'       => '',
										'container_id'    => '',
										'container_class' => '',
										'menu_id'         => false,
										'menu_class'      => 'nav navbar-nav',
										'depth'           => 3,
										
										));
									?>
                                </div>
									<!-- navbar-collapse -->
                  				
                			</div>
      
            		</div>
          	<!-- /.container -->
        	</nav><!-- navbar -->

    </header>
	<!--header end-->	
   