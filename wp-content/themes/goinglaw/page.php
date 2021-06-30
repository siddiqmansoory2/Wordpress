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



	<!--internal page start-->
    <section class="cms-compensation">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="compensation-inner">
                        <?php
						while ( have_posts() ) : the_post();
							the_content();
						endwhile;
					?>
                    </div>
                </div>
				
				<?php get_sidebar(); ?>
				
            </div>
        </div>
    </section>
    <!--internal page end-->



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

<?php $the_query = new WP_Query( 'page_id=68' ); ?>
	<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
<?php if (have_rows('review_section')): ?>	
			<?php while (have_rows('review_section')): the_row(); ?>	
 <section class="cms-reviews" style="margin-top:50px">
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
<?php break; endwhile; ?>	
	<?php endif; ?>
<?php endwhile;?>	

<?php $the_query = new WP_Query( 'page_id=68' ); ?>
	<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>

	<?php   if (have_rows('practice_section')): ?>	
		<?php while (have_rows('practice_section')): the_row(); ?>	
    <!--Practice Areas start-->
    <section class="cms-practice nohome" style="background-image: url(/wp-content/uploads/2020/12/faqbg.jpg)">
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
						<div class="col-md-3 col-sm-6">
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
<?php break; endwhile; ?>	
	<?php endif; ?>
<?php endwhile;?>	

  <section style="background:#651210;padding:20px 0">
		
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-12">
                    
             
                    <div class="banner-inner">
                        
                        <h2 style="color:#fff;margin:0">No matter what life throws your way, get GOING.</h2>

                        
                    </div>
                
                </div>
            </div>
        </div>
    
	</section>



<?php
get_footer();