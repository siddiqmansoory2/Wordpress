<?php
/**
 * Template part for displaying results in search pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Metroid
 */

?>

<div class="body_content_box col-lg-4 col-md-6 col-sm-12 col-12">
	<div class="content_box_content p-0">
		<div class="box_image">
			<?php echo get_the_post_thumbnail( $post->ID ); ?>
		</div>
		<div class="box_content">
			<h5><a href="<?php echo get_permalink(); ?>"><?php the_title(); ?></a></h5>
			<?php the_excerpt(); ?>
			<a href="<?php echo get_permalink(); ?>" class="btn">Read More</a>
		</div>
	</div>
</div>