<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0" />
	<meta name="keywords" content="">
	<meta name="description" content="">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/assets/images/favicon.ico" type="image/x-icon">
	<?php wp_head(); ?>
	<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Product",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "4.9",
    "reviewCount": "28"
  },
  "description": "Phoenix DUI Lawyer & Criminal Defense Attorney",
  "name": "Future First Criminal Law",
  "image": "https://www.futurefirst.law/wp-content/uploads/2020/10/logo-white.png",
  "review": [
    {
      "@type": "Review",
      "author": "Jack Brennan",
      "datePublished": "2021-01-19",
      "description": "Best criminal law firm in the valley. Zachary’s drive and passion for his clients is truly amazing. His office is top notch, I wouldn’t want anyone else representing myself, family, or clients.",
      "name": "Best criminal law firm in the valley.",
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

<body <?php body_class(); ?>>
	<!--header start-->
    <header class="cms-header minimal-header" style="background-image: url(<?php echo get_template_directory_uri(); ?>/assets/images/header-bg.png);">
        <div class="header-top">
            <div class="container">
                <div class="header-inner">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#main-nav" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar mid-bar"></span>
                        <span class="icon-bar bot-bar"></span>
                    </button>
                    <a class="navbar-brand logo" href="<?php echo home_url(); ?>">
						<?php $main_logo = get_field('main_logo', 'option'); ?>
						<img src="<?php echo $main_logo['url']; ?>" alt="<?php echo $main_logo['alt']; ?>" class="img-responsive">
					</a>
                    <div class="header-social">
                        <ul>
							<?php if( have_rows('social_links', 'option') ):
								while ( have_rows('social_links', 'option') ) : the_row(); ?>	
									<li>
										<?php $social_icon_url = get_sub_field('social_icon_url', 'option'); ?>
										<a target="_blank" href="<?php echo get_sub_field('social_link', 'option'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/<?php echo $social_icon_url; ?>" alt=""></a>
									</li>
								<?php endwhile;
							endif; ?>
                        </ul>
                    </div>
                    <div class="header-right">
                        <div class="header-call">
                            <a href="tel: <?php echo get_field('phone', 'option'); ?>">
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/header-call.svg" alt="">
                                <span class="value"><?php echo get_field('phone', 'option'); ?></span>
                            </a>
                             <span class="calltext">Virtual Consultations</span>
                        </div>
                        <div class="consultation">
                            <a class="orange-btn" href="<?php echo get_field('consultation_button_link', 'option'); ?>">Free Consultation</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="header-bottom">
            <div class="container">
                <div class="navbar-collapse collapse" id="main-nav" aria-expanded="false">
					<?php wp_nav_menu( array( 'menu' => 'Main Menu', 'menu_id' => 'menu-header-menu', 'menu_class'=>'nav navbar-nav' ) ); ?>
                </div>
            </div>
        </div>
    </header>
	<!--header end-->