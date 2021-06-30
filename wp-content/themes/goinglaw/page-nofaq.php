<?php
/**
* Template Name: No FAQ Page
 */

get_header(); ?>


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