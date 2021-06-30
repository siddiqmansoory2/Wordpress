<div class="choose pb-5">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 text-center">
				<h2 class="mt-lg-5 mb-lg-3 mt-1 mb-2"><span><?php echo get_sub_field('iconhead'); ?></span></h2>
			</div>
            <?php if (have_rows('iconrow1')): ?>                                        
                <?php $cnt_box=0; while (have_rows('iconrow1')): $cnt_box++; the_row(); ?> 
 <div class="col-lg col-12 text-center">
				<div class="box1">
						<img class="img-responsive" src="<?php echo get_sub_field('icon'); ?>" alt="<?php echo get_sub_field('imgalt'); ?>" title="<?php echo get_sub_field('imgalt'); ?>" />
						<?php echo get_sub_field('title'); ?>
					</div>
			</div>
                <?php endwhile; ?>    
<?php endif; ?> 
		</div>
		<div class="row">
			            <?php if (have_rows('iconrow2')): ?>                                        
                <?php $cnt_box=0; while (have_rows('iconrow2')): $cnt_box++; the_row(); ?> 
 <div class="col-lg col-12 text-center">
				<div class="box1">
						<img class="img-responsive" src="<?php echo get_sub_field('icon'); ?>" alt="<?php echo get_sub_field('imgalt'); ?>" title="<?php echo get_sub_field('imgalt'); ?>" />
						<?php echo get_sub_field('title'); ?>
					</div>
			</div>
                <?php endwhile; ?>    
<?php endif; ?> 
		</div>
	</div>
</div>
