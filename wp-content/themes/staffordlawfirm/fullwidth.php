<?php
/**
* Template Name: Full Width
 */

get_header(); ?>

	<?php if (have_rows('banner')): ?>
	
		<?php while (have_rows('banner')): the_row(); ?>
		
			<?php $banner_image = get_sub_field('banner_image'); ?>
		
			<!--banner start-->
			<section class="cms-banner" style="background-image: url(<?php echo $banner_image; ?>);">
				
				<?php if (have_rows('inner_sections')): ?>
					<?php while (have_rows('inner_sections')): the_row(); ?>
					<div class="container">
						<div class="row d-flex">
							<div class="col-md-8 col-sm-8">
							
								
								<?php if (have_rows('left_section')): ?>
									<?php while (have_rows('left_section')): the_row(); ?>
										<div class="banner-inner">
										
											<?php if (have_rows('title_section')): ?>
												<?php while (have_rows('title_section')): the_row(); ?>
													<<?php echo get_sub_field('content_tag'); ?> class='<?php echo get_sub_field('content_class'); ?>'><?php echo get_sub_field('content'); ?></<?php echo get_sub_field('content_tag'); ?>>
												<?php endwhile; ?>
											<?php endif; ?>	
											
											<div class="btn-box">
											
												<?php if (have_rows('button_section')): ?>
													<?php $or=0;while (have_rows('button_section')): the_row(); $or++; ?>
													
														<?php if($or!=1):echo '<span class="or">or</span>'; endif; ?>										
														<a class="theme-btn <?php echo get_sub_field('button_class'); ?>" href='<?php echo get_sub_field('button_url'); ?>'>
															<span class="btn__ink"></span>
															<div class="btn__inner"><?php echo get_sub_field('button_title'); ?></div>
														</a>
													<?php endwhile; ?>
												<?php endif; ?>	
												
											</div>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>	
								
							</div>
							<div class="col-md-3 col-md-4 col-md-offset-1">
							
								<?php if (have_rows('right_section')): ?>
									<div class="banner-right">
									<?php while (have_rows('right_section')): the_row(); ?>
										<div class="save-box">
											<h4><?php echo get_sub_field('title'); ?></h4>
											<?php echo get_sub_field('content'); ?>
										</div>
									<?php endwhile; ?>
									</div>
								<?php endif; ?>
								
							</div>
						</div>
					</div>
					
					
					<?php if (have_rows('bottom_section')): ?>
					
					<div class="banner-bottom">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="bottom-box">
										<?php $cnt_box=0; while (have_rows('bottom_section')): $cnt_box++; the_row(); ?>
										<div class="box box-<?php echo $cnt_box; ?>">
											<img src="<?php echo get_sub_field('icon'); ?>" alt="">
											<p><?php echo get_sub_field('text'); ?></p>
										</div>
										<?php endwhile; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					
					<?php endif; ?>
					
					
					<?php endwhile; ?>
				<?php endif; ?>	
			</section>
			<!--banner end-->
			
		
		
		<?php endwhile; ?>
	
	
	<?php endif; ?>

	<?php if (have_rows('about_section')): ?>	
		<?php while (have_rows('about_section')): the_row(); ?>
			<!--my firm start-->
			<section class="cms-firm" style="background-image: url(<?php echo get_sub_field('background_image'); ?>);">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="my-firm">
								<div class="avatar">
									<img src="<?php echo get_sub_field('author_image'); ?>" alt="" />
									<div class="author-name">
										<h4><?php echo get_sub_field('author'); ?></h4>
									</div>
								</div>
								<div class="firm-right clearfix">
									<h2><?php echo get_sub_field('title'); ?></h2>
									<p><?php echo get_sub_field('content'); ?></p>
									<div class="help-section">
										<h4>
											<span><?php echo get_sub_field('short_title'); ?></span>
										</h4>
										<div class="help-ltf">
											<?php echo get_sub_field('short_content'); ?>
										</div>
										<div class="help-rtf">
											<h5><?php echo get_sub_field('right_content'); ?></h5>
											<div class="btn-box text-right">
												<a class="theme-btn orange-btn" href='<?php echo get_sub_field('button_link'); ?>'>
													<span class="btn__ink"></span>
													<div class="btn__inner"><?php echo get_sub_field('button_text'); ?></div>
												</a>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<!--my firm start-->
		<?php endwhile; ?>	
	<?php endif; ?>
	
	<?php if (have_rows('practice_section')): ?>	
		<?php while (have_rows('practice_section')): the_row(); ?>	
		<!--Practice Areas start-->
		<section class="cms-practice" style="background-image: url(<?php echo get_sub_field('background_image'); ?>);">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title-block">
							<h2><?php echo get_sub_field('heading'); ?></h2>
						</div>
					</div>
				</div>
				
				<?php if (have_rows('inner_section')): ?>
					<div class="row">
					<?php while (have_rows('inner_section')): the_row(); ?>
						<div class="col-md-3 col-sm-6 col-xs-6">
							<div class="practice-box">
								<div class="icon">
									<a href='<?php echo get_sub_field('link') ? get_sub_field('link') : 'javascript:void(0)'; ?>'><img src="<?php echo get_sub_field('icon'); ?>" alt=""></a>
								</div>
								<h4><?php echo get_sub_field('title'); ?></h4>
							</div>
						</div>
					<?php endwhile; ?>
					</div>					
				<?php endif; ?>
				
				<div class="row">
					<div class="col-md-12">
						<div class="btn-box d-flex align-items-center justify-content-center">
						
							<?php if (have_rows('button_section')): ?>
								<?php $or=0;while (have_rows('button_section')): the_row(); $or++; ?>
								
									<?php if($or!=1):echo '<span class="or">or</span>'; endif; ?>										
									<a class="theme-btn <?php echo get_sub_field('button_class'); ?>" href='<?php echo get_sub_field('button_url'); ?>'>
										<span class="btn__ink"></span>
										<div class="btn__inner"><?php echo get_sub_field('button_title'); ?></div>
									</a>
								<?php endwhile; ?>
							<?php endif; ?>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--Practice Areas end-->
		<?php endwhile; ?>	
	<?php endif; ?>
	
		
	<?php /*if (have_rows('reviews_section')): ?>	
		<?php while (have_rows('reviews_section')): the_row(); ?>	
		<!--Testimonila start-->
		<section class="cms-testimonial" style="background-image: url(<?php echo get_sub_field('background_image'); ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="review">
                        <h4><span>132</span> Google Reviews</h4>
                        <h4>
                            <span>5.0</span>
                            <span class="rating-star">
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                                <i class="fa fa-star" aria-hidden="true"></i>
                            </span>
                        </h4>

                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="testimonial-inner">
                        <div class="testimonial slider">
						
						<?php
						$recent_posts = wp_get_recent_posts(array(
							'numberposts' => 3,
							'post_type'        => 'google_reviews',
							'post_status' => 'publish',
							'orderby'          => 'post_date',
							'order'            => 'DESC',
						));
						foreach($recent_posts as $post) : ?>
						
							<div>
                                <div class="testi-box">
                                    <div class="quote">
                                        <img src="<?php echo get_template_directory_uri(); ?>/html/images/quote.svg" alt="" />
                                    </div>
                                    <div class="author">
                                        <p><?php echo get_field( "reviews", $post['ID'] ); ?></p>
                                        <div class="author-detail">
                                            <span class="rating-star">
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                                <i class="fa fa-star" aria-hidden="true"></i>
                                            </span>
                                            <h4><?php echo $post['post_title'] ?></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
						
						
					
						
						<?php endforeach; wp_reset_query(); ?>
						
						
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
		<!--Testimonila end-->
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
				
				<div class="row">
					<div class="col-md-12">
					
							
					
						<div class="btn-box">
						
							<?php if (have_rows('button_section')): ?>
								<?php $or=0;while (have_rows('button_section')): the_row(); $or++; ?>
								
									<?php if($or!=1):echo '<span class="or">or</span>'; endif; ?>										
									<a class="theme-btn <?php echo get_sub_field('button_class'); ?>" href='<?php echo get_sub_field('button_url'); ?>'>
										<span class="btn__ink"></span>
										<div class="btn__inner"><?php echo get_sub_field('button_title'); ?></div>
									</a>
								<?php endwhile; ?>
							<?php endif; ?>
							
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--FAQ section end-->
		<?php endwhile; ?>	
	<?php endif; ?>
	
	
	<?php if (have_rows('blog_section')): ?>	
		<?php while (have_rows('blog_section')): the_row(); ?>
	<!--Blog section start-->
		<section class="cms-blog">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title-block">
							<h2><?php echo get_sub_field('title'); ?></h2>
						</div>
					</div>
				</div>
				<div class="row">
				
					<?php
					$recent_posts = wp_get_recent_posts(array(
						'numberposts' => get_sub_field('blog_limit'),
						'post_type'        => 'post',
						'post_status' => 'publish',
						'orderby'          => 'post_date',
						'order'            => 'DESC',
					));
					foreach($recent_posts as $post) : ?>
				
					<div class="col-md-4 col-sm-4">
						<div class="blog">
							<div class="blog-img">
								<?php echo get_the_post_thumbnail($post['ID'], 'full'); ?>
								<h4><?php echo $post['post_title'] ?></h4>
							</div>
							<div class="readmore text-center">
								<a href="<?php echo get_permalink($post['ID']) ?>"><?php echo get_sub_field('button_name'); ?></a>
							</div>
						</div>
					</div>
					
					<?php endforeach; wp_reset_query(); ?>
					
					
				</div>
			</div>
		</section>
		<!--Blog section end-->
		<?php endwhile; ?>	
	<?php endif; ?>
	
	<?php if (have_rows('service_section')): ?>	
		<?php while (have_rows('service_section')): the_row(); ?>
		<!--We serve start-->
		<section class="cms-serve" style="background-image: url(<?php echo get_sub_field('background_image'); ?>);">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="title-block text-center">
							<h2><?php echo get_sub_field('title'); ?></h2>
						</div>
					</div>
				</div>
				<?php if (have_rows('inner_content')): ?>	
				<div class="row">
					<div class="col-md-12">
						<div class="serve-detail">
							<ul>
								<?php while (have_rows('inner_content')): the_row(); ?>
									<li><?php echo get_sub_field('title'); ?><span><?php echo get_sub_field('description'); ?></span></li>
								<?php endwhile; ?>
							</ul>
						</div>
					</div>
				</div>
				<?php endif; ?>
			</div>
		</section>
		<!--We serve end-->
		<?php endwhile; ?>	
	<?php endif;*/ ?>


	<?php
	/*while ( have_posts() ) : the_post();

		get_template_part( 'template-parts/content', 'page' );

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) :
			comments_template();
		endif;

	endwhile; // End of the loop.*/
	?>
	<?php /*while ( have_posts() ) : the_post(); ?>	
	<!--internal page start-->
    <section class="cms-compensation">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="compensation-inner">
                        <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--internal page end-->
	<?php endwhile;*/ ?>	
	

<?php
get_footer();
