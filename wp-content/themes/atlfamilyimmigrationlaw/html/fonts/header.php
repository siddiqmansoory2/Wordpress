<?php
/**
 * The Header for our theme.
 *
 * @package OceanWP WordPress theme
 */ ?>

<!DOCTYPE html>
<html class="<?php echo esc_attr( oceanwp_html_classes() ); ?>" <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<link rel="profile" href="https://gmpg.org/xfn/11">
    
	<?php if(is_page('10418')){ ?>
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/all.min.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/pglandingstyles.css">
		<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/landingpgresponsive.css">
		<link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
		<link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
		<script type="text/javascript" src="<?php echo get_theme_file_uri(); ?>/assets/script/all.min.js"></script>
	<?php 
	}
	wp_head(); ?>
	<?php  get_template_part( 'helper', 'schema' ); ?>
<script type="application/ld+json">
{
  "@context": "http://schema.org",
  "@type": "Product",
  "aggregateRating": {
    "@type": "AggregateRating",
    "ratingValue": "5",
    "reviewCount": "67"
  },
  "description": "Atlanta Family & Immigration Law Firm is a law firm specializing in family, immigration, and landlord-tenant law, serving Atlanta Metro and surrounding areas. We provide our clients with quality legal representation and personal attention no matter what your legal situation is. Call for a consultation.",
  "name": "Atlanta Family & Immigration Law",
  "image": "https://atlfamilyimmigrationlaw.com/wp-content/uploads/2020/09/logo_registered.png",
  "review": [
    {
      "@type": "Review",
      "author": "Alex M",
      "datePublished": "2021-01-19",
      "description": "This has to be, hands down the nicest immigration law firm I've ever had the pleasure to have represent my family. The immigration attorney was so informative, and helpful. The staff was knowledgeable, kind and always helped us with our questions or concerns. The receptionist was so welcoming and nice. They all made my family and I feel so comfortable. If you are looking for a Spanish speaking firm who are nice and know what they're doing I highly recommend this firm. Best firm that my family and i have used! Highly recommend
",
      "name": "This has to be, hands down the nicest immigration law firm",
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

<body <?php body_class(); ?> <?php oceanwp_schema_markup( 'html' ); ?>>

	<?php wp_body_open(); ?>

	<?php do_action( 'ocean_before_outer_wrap' ); ?>

	<div id="outer-wrap" class="site clr">

		<a class="skip-link screen-reader-text" href="#main"><?php esc_html_e( 'Skip to content', 'oceanwp' ); ?></a>

		<?php do_action( 'ocean_before_wrap' ); ?>

		<div id="wrap" class="clr">

			<?php do_action( 'ocean_top_bar' ); ?>

			<?php do_action( 'ocean_header' ); ?>

			<?php do_action( 'ocean_before_main' ); ?>

			<main id="main" class="site-main clr"<?php oceanwp_schema_markup( 'main' ); ?> role="main">

				<?php do_action( 'ocean_page_header' ); ?>
