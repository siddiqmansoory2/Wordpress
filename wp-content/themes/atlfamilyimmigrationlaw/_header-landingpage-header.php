<?php
/**
 * Header file for the Twenty Twenty WordPress default theme.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package WordPress
 * @subpackage Twenty_Twenty
 * @since 1.0.0
 */

?><!DOCTYPE html>

<html class="no-js" <?php language_attributes(); ?>>

	<head>

		<meta charset="<?php bloginfo( 'charset' ); ?>">
		<meta name="viewport" content="width=device-width, initial-scale=1.0" >
       
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/all.min.css">
         <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/landing-page-styles.css">
        <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/assets/css/landing-p-responsive.css">
        <link href="https://fonts.googleapis.com/css2?family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&display=swap" rel="stylesheet">
        
        <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200;300;400;500;600;700&display=swap" rel="stylesheet">
		<script type="text/javascript" src="<?php echo get_theme_file_uri(); ?>/assets/script/all.min.js"></script>

		<?php wp_head(); ?>

	</head>

	<body <?php body_class(); ?>>
		<?php	wp_body_open(); 

$header_logo_left_title = get_theme_mod('landing_header_logo_left_title');
$header_logo =  get_theme_mod('landing_header_logo');
$logo_img_id = attachment_url_to_postid(get_theme_mod('landing_header_logo'));
$logo_imgalt = get_post_meta($logo_img_id, '_wp_attachment_image_alt', true);
$header_logo_right_title = get_theme_mod('landing_header_logo_right_title');
?>
  <header>
    <div class="header">
      <div class="headerbox headerbox1">
      	<?php if($header_logo_left_title){ ?>
        	<h6><?php echo $header_logo_left_title; ?></h6>
    	<?php } ?>
      </div>
      <div class="headerbox headerbox1">
      	<?php if($header_logo){ ?>
	        <div class="logo">
	          <img src="<?php echo $header_logo; ?>" alt="<?php echo $logo_imgalt; ?>" />
	        </div>
	    <?php } ?>
      </div>
      <div class="headerbox headerbox1">
      	<?php if($header_logo_right_title){ ?>
        	<h5><?php echo $header_logo_right_title; ?></h5>
        <?php } ?>
      </div>
      
    </div>
  </header>