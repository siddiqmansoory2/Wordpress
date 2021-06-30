<?php get_header(); ?>

<div class="about pb-4">
	<div class="content">
		<div class="container">
			<div class="row">
				<div class="col-lg-8 text-center text-lg-left">
					<h1 class="mt-5 mb-3 hr-line"><span><?php echo get_field('heading'); ?></span></h1>
					 <p><?php get_template_part('loops/front-page-content'); ?></p>
                    <?php $btn_link = get_field('button'); ?>
<a  class="mt-2 btn btn-info" role="button" title="<?php echo $btn_link['title']; ?>" href="<?php echo $btn_link['url']; ?>"><?php echo $btn_link['title']; ?></a>
					<div class="row mt-3">
                <?php if (have_rows('badges')): ?>                                        
                <?php $cnt_box=0; while (have_rows('badges')): $cnt_box++; the_row(); ?> 
                    <div class="col-sm-4">
                        <a href="<?php echo get_sub_field('link'); ?>" target="_blank"><img class="" src="<?php echo get_sub_field('icon'); ?>" alt="<?php echo get_sub_field('title'); ?>" /></a>
                    </div>    
                <?php endwhile; ?>         
<?php endif; ?> 
	</div>
                </div>
				<div class="col-lg-4 mt-5">
					<!-- Vertical Form -->
					<div class="form-wrapper">
                        <?php echo get_field('side_form'); ?>				
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<?php get_template_part('theme/includes/downloadable-resources-cta'); ?>
<?php get_template_part('theme/includes/choose'); ?>
<?//php get_template_part('theme/includes/practice-areas'); ?>
<?//php get_template_part('theme/includes/testimonials'); ?>

<?php get_footer(); ?>
