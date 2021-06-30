<?php
/**
* Template Name: Full Width Home
 */

get_header(); ?>

		


	<?php if (have_rows('about_section')): ?>	
		<?php while (have_rows('about_section')): the_row(); ?>
			<!--my firm start-->
    <!--my firm start-->
    <section class="cms-firm" style="background-image: url(<?php echo get_sub_field('background_image'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-5 text-center">
                    <img src="<?php echo get_sub_field('about_image'); ?>" alt="" />
                </div>
                <div class="col-md-7">
                    <?php echo get_sub_field('content'); ?>
                </div>
            </div>
        </div>
    </section>
    <!--my firm end-->
		<?php endwhile; ?>	
	<?php endif; ?>
	
	<?php   if (have_rows('practice_section')): ?>	
		<?php while (have_rows('practice_section')): the_row(); ?>	
    <!--Practice Areas start-->
    <section class="cms-practice" style="background-image: url(<?php echo get_sub_field('background_image'); ?>);">
            <div class="row">
                <div class="col-md-12">
                    <div class="title-block">
                        <h2><?php echo get_sub_field('heading'); ?></h2>
                        <p><?php echo get_sub_field('subheading'); ?></p>
                    </div>
                </div>
            </div>
            <div class="practice-areas">
                        <div class="container">
                <?php if (have_rows('pa_list')): ?>
					<div class="row">
					<?php while (have_rows('pa_list')): the_row(); ?>
						<div class="col-md-3 col-sm-6 col-xs-12">
							<div class="practice-head">
								<div class="icon">
									<a href='<?php echo get_sub_field('link') ? get_sub_field('link') : 'javascript:void(0)'; ?>'><img src="<?php echo get_sub_field('icon'); ?>" alt=""></a>
								</div>
                                <h4><a href='<?php echo get_sub_field('link') ? get_sub_field('link') : 'javascript:void(0)'; ?>'><?php echo get_sub_field('title'); ?></a></h4>
							</div>
                            <div class="practice-list">
                            <ul>                  
					<?php if(get_sub_field('practicelist')): ?>
										<?php $cnt_pa=0;while(have_rows('practicelist')):$cnt_pa++; the_row(); ?>
										
											<li>
												<?php if(get_sub_field('url')): ?>
													<a href="<?php the_sub_field('url'); ?>">
												<?php else: ?>
													<a href="javascript:void(0)">
												<?php endif; ?>											
													<span class="seal"></span><?php the_sub_field('name'); ?>												
												</a>
											</li>
										<?php endwhile; ?>
									<?php endif; ?>             
                  </ul>
                      </div>      
						</div>
					<?php endwhile; ?>
					</div>					
				<?php endif; ?>  
                                
            </div>
        </div>
    </section>
    <!--Practice Areas end-->
		<?php endwhile; ?>	
	<?php endif; ?>
	
<?php if (have_rows('review_section')): ?>	
			<?php while (have_rows('review_section')): the_row(); ?>	
 <section class="cms-reviews">
        <div class="container">
            
            <div class="row">
                <div class="col-md-12">
                    
                    <h2><?php echo get_sub_field('title'); ?></h2>
                    <h3><?php echo get_sub_field('subtitle'); ?></h3>
                    
                    <div class="testimonial-inner">
                        <div class="testimonial slider">
                        <?php if (have_rows('reviews')): ?>
                        <?php $cnt_box=0; while (have_rows('reviews')): $cnt_box++; the_row(); ?>
                        
                          
                                <div class="testi-box">
                                    
	
										
										<div class="reviewbox review-<?php echo $cnt_box; ?>">
											<p><?php echo get_sub_field('review_text'); ?></p>
                                            <h4>– <?php echo get_sub_field('review_author'); ?></h4>
										</div>
										
                                </div>          
                            
                        <?php endwhile; ?>
						
					<?php endif; ?>
                            </div>
                        </div>
                    </div>
                </div>
     
        </div>
    </section>
<?php endwhile; ?>	
		<?php endif; ?>
	
<?php if (have_rows('faq_section')): ?>	
			<?php while (have_rows('faq_section')): the_row(); ?>	
			<!--FAQ section start-->
			<section class="cms-faq" style="background-image: url(<?php echo get_sub_field('background_image'); ?>);">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="title-block">
								<h2><?php echo get_sub_field('title'); ?></h2>
							</div>
						</div>
					</div>
					<?php if (have_rows('question_section')): ?>	
					<div class="row">
						<div class="col-md-10 col-md-offset-1">
							<div class="faq-inner">
								<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
									<?php $qna=0;while (have_rows('question_section')): the_row(); $qna++; ?>
										<div class="panel panel-default">
											<div class="panel-heading <?php if($qna==0): echo 'active'; endif;?>" role="tab" id="heading_<?php echo $qna; ?>">
											  <h4 class="panel-title">
												<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapse_<?php echo $qna; ?>" aria-expanded="true" aria-controls="collapse_<?php echo $qna; ?>">
												  <?php echo get_sub_field('question'); ?>
												</a>
											  </h4>
											</div>
											<div id="collapse_<?php echo $qna; ?>" class="panel-collapse collapse <?php if($qna==0): echo 'in'; endif;?>" role="tabpanel" aria-labelledby="heading_<?php echo $qna; ?>">
											  <div class="panel-body"><?php echo get_sub_field('answer'); ?></div>
											</div>
										</div>
									<?php endwhile; ?>	
								</div>
							</div>
						</div>
					</div>
					<?php endif; ?>
					
				</div>
			</section>
			<!--FAQ section end-->
			<?php endwhile; ?>	
		<?php endif; ?>

	

<?php
get_footer();
