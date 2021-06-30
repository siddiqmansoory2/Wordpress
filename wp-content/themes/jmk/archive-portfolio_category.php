<?php /** Template Name: Portfolio Template */ ?>
<?php get_header(); ?>
<h1 class="default-title">Portfolio</h1>
<section class="cms-content">
<div class="container">
<div class="row portfolio">

<?php

   $args = array(
        'post_type'   => "portfolio-items",
        'posts_per_page'=>'-1'
    );
    $loop = new WP_Query( $args );

    if($loop->have_posts()){
	
		while ( $loop->have_posts() ) : $loop->the_post();?>
				<div class="col-md-3"><div class="singlebox">	
			<a href="<?php echo esc_url(get_permalink()) ?>">
			<?php if (have_rows('portfolio')):
			
					 while (have_rows('portfolio')): the_row(); ?>
					
                        
						<?php $images = get_sub_field('images');
						$size = 'full'; 
						if( $images ): ?>
						
								<?php foreach( $images as $image_id ): ?>
								
                        <span class="imgbox"><img src="<?php echo $image_id['sizes']['medium']; ?>" alt="<?php echo html_entity_decode(get_the_title()); ?>"/></span>
		
								<?php break; endforeach; ?>

						<?php endif;
					endwhile;
				endif;
			
			echo '<span class="title">'.html_entity_decode(get_the_title()).'</span></a></div></div>';
		
		endwhile;
	}
 
?>
</div> 
</div>
</section>
<?php get_footer(); ?>