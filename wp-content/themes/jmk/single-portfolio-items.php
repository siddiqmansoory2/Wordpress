<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package WP_Bootstrap_Starter
 */
get_header();
?>

<link rel="stylesheet" type="text/css" href="/wp-content/themes/jmk/html/css/slick-lightbox.css">
	<!--internal page start-->
<section class="cms-content portfolios">
<div class="container">
<div class="portfolio">
<?php if (have_rows('portfolio')): ?>
<?php while (have_rows('portfolio')): the_row(); ?>	

<h2 class="dashhead"><?php echo get_sub_field('heading_h2'); ?></h2>
         
<?php $images = get_sub_field('images'); ?> 

<?php if($images): ?> 

<div class="gallery"> 

      <?php foreach( $images as $image ): ?> 

         <a href="<?php echo $image['url']; ?>" target="_blank" class="thumbnail"> 
            <img src="<?php echo $image['sizes']['medium']; ?>" alt="<?php the_title(); ?>" /> 
         </a> 

      <?php endforeach; ?> 

</div> 

<?php endif; ?>
<h1 class="dashhead"><?php echo get_sub_field('heading_h1'); ?></h1>
<div class="contentsection">				
<?php echo get_sub_field('content'); ?>
</div>                        
<?php endwhile; ?>
<?php endif; ?>
</div>
<section class="yellowcta">
<div class="text-center">
<h2 class="dashhead">Do You Have A Remodeling Project We Can Help With?
</h2>
<div class="btnbox">
<a class="theme-btn" href="/get-quote/">Get a Free Quote</a>				
    
</div>
</div> 
</section>
</div>
</section>

<script type="text/javascript" src="/wp-content/themes/jmk/html/js/slick-lightbox.js"></script>
<script>
   jQuery(document).ready(function(){ 
   jQuery('.gallery').slickLightbox({ 
      itemSelector: '> a' 
   }); 
});

</script>    
<?php
get_footer();