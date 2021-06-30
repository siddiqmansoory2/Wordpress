<!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 
  <?php wp_head(); ?>
  <link rel='stylesheet' id='style-name-css'  href='https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css?ver=4.9.7' type='text/css' media='all' />
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.css">
  <meta name="google-site-verification" content="AJ9eqK06iU1TTjGx6DFD8jtNgXCQmiS-xIci4M9JhXU" />


</head>

<body <?php body_class(); ?>>
<script>document.body.className += ' fade-out';</script>
<?php /* if (is_front_page()) { ?>
<div id="loading" class="d-flex justify-content-center align-items-center flex-direction-column">
	<div class="container">
		<div class="row">
			<div class="col-12 d-flex justify-content-center align-items-center flex-direction-column">
				<?php the_custom_logo( $blog_id ); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-12 d-flex justify-content-center align-items-center flex-direction-column">
				<div class="spinner">
					<div class="bounce1"></div>
					<div class="bounce2"></div>
					<div class="bounce3"></div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php } else { ?>
<?php } */?>


<?php get_template_part('theme/includes/navbar'); ?>

<?php if (is_front_page()) { ?>
<?php get_template_part('theme/includes/hero'); ?>
<?php } else { ?>
<div class="hero-page"></div>
<?php } ?>
