<div id="hero">
<div class="swiper-container">

<?php if (have_rows('slide_section')): ?>
<div class="swiper-wrapper">  
    <?php $cnt_box=0; while (have_rows('slide_section')): $cnt_box++; the_row(); ?>
             <div class="swiper-slide slide-<?php echo $cnt_box; ?>" style="background-image:url(<?php echo get_sub_field('bgimage'); ?>)">
				<div class="container">
					<div class="hero-small">
						<div class="row">
							<div class="box col-lg-12 text-lg-left text-center">
								<div class="hero-box">
                                    <h2 class="h2-hero"><?php echo get_sub_field('title1'); ?></h2>
									<h2 class="h1-hero"><?php echo get_sub_field('title2'); ?></h2>
									<h2 class="h3-hero"><?php echo get_sub_field('title3'); ?></h2>
                                    <?php $btn_link = get_sub_field('button'); ?>
<a  class="mt-2 btn btn-info" role="button" title="<?php echo $btn_link['title']; ?>" href="<?php echo $btn_link['url']; ?>"><?php echo $btn_link['title']; ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
    <?php endwhile; ?>
 </div> 
<?php endif; ?> 
    
<?php if (have_rows('practice_section')): ?>                                        
<div id="practice-areas">
			<div class="container">
				<div class="row py-3">
                <?php $cnt_box=0; while (have_rows('practice_section')): $cnt_box++; the_row(); ?> 
                    <div class="col-lg-4 my-auto text-center text-lg-left">
						<div class="pr-1 py-2 py-lg-0 d-lg-flex flex-lg-row justify-content-center">
							<div><img class="" src="<?php echo get_sub_field('icon'); ?>" alt="<?php echo get_sub_field('title'); ?>" /></div>
							<div class="my-auto pl-lg-4 pl-0 pt-3">
								<p class="pa-title"><?php echo get_sub_field('title'); ?></p>
                                <?php $btn_link = get_sub_field('button'); ?>
<a  class="btn btn-view" role="button" title="<?php echo $btn_link['title']; ?>" href="<?php echo $btn_link['url']; ?>"><?php echo $btn_link['title']; ?></a>
							</div>
						</div>
					</div>
                <?php endwhile; ?>    
               </div>
			</div>
</div>     
<?php endif; ?> 
    
<div class="swiper-pagination"></div>
</div>
</div>