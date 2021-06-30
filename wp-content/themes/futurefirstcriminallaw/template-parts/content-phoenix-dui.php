<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
?>

<!--banner start-->
	<?php $banner_image = get_field( "phoenix_banner_image" ); ?>
	<section class="cms-banner cms-innerbanner"  style="background-image: url(<?php echo $banner_image['url']; ?>);">
		<div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="banner-inner">
                        <h1><?php echo get_field( "phoenix_banner_title" ); ?></h1>
                        <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/quote-wht.svg" alt=""/><?php echo get_field( "phoenix_banner_sub_title" ); ?></h2>
                        <?php echo get_field( "phoenix_banner_description" ); ?>
                        <div class="btn-box">
                            <a class="orange-btn" href="<?php echo get_field( "phoenix_button_1_link" ); ?>"><?php echo get_field( "phoenix_button_1" ); ?></a>
                            <a class="orange-btn" href="<?php echo get_field( "phoenix_button_2_link" ); ?>"><?php echo get_field( "phoenix_button_2" ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
	</section>
	<!--banner end-->
	<!--google review section start-->
    <section class="google-review">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="slideshow">
						<?php if(get_field('google_reviews', 'options')): ?>
							<?php while(have_rows('google_reviews', 'options')): the_row(); ?>
							<?php $_reviews_title=get_sub_field('reviews_title', 'options'); ?>
							<?php $_reviews_icon=get_sub_field('icon', 'options'); ?>
							<?php $_reviews_star=get_sub_field('star', 'options'); ?>
								<?php if(get_sub_field('reviews_list', 'options')): ?>
									<?php while(have_rows('reviews_list', 'options')): the_row(); ?>
										<div>
											<div class="review-box">
												<h4><img src="<?php echo $_reviews_icon; ?>" alt=""><?php echo $_reviews_title; ?></h4>
												<p>“<?php the_sub_field('description', 'options'); ?>”</p>
												<div class="rating-box">
													<div class="rating">
														<div class="rate"><?php the_sub_field('rating', 'options'); ?></div>
														<div class="stars">
															<img src="<?php echo $_reviews_star; ?>" alt="">
															<img src="<?php echo $_reviews_star; ?>" alt="">
															<img src="<?php echo $_reviews_star; ?>" alt="">
															<img src="<?php echo $_reviews_star; ?>" alt="">
															<img src="<?php echo $_reviews_star; ?>" alt="">
														</div>
													</div>
													<div class="author-name"><?php the_sub_field('author', 'options'); ?></div>
												</div>
											</div>
										</div>
									<?php endwhile;
								endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--google review section end-->
	<!--criminal Defense2 start-->
    <section class="cms-defense inner-defense">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-xs-12">
				
					 <div class="resourse-inner">
                        <div class="resourse-box">
                            <h4><?php echo get_field('resources_title'); ?></h4>
							<?php dynamic_sidebar( get_field('resources_menu') ); ?>
                            <div class="btn-box">
							
								<?php if( have_rows('call_button_resource') ):
									while ( have_rows('call_button_resource') ) : the_row(); ?>
										
											<a class="orange-btn" href="<?php echo get_sub_field('button_link'); ?>"><?php echo get_sub_field('button_title'); ?></a>
										
									<?php endwhile;
								endif; ?>
								
                            </div>
                        </div>
                    </div>
				
				
                    
                </div>
                <div class="col-md-7">
                    <div class="section-header">
                        <h2><?php echo get_field('dmv_hearing_title'); ?></h2>
                        <?php echo get_field('dmv_hearing_details'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--criminal Defense2 end-->
	<!--criminal Defense start-->
	<?php $experienced_dui_bg_image = get_field( "experienced_dui_bg_image" ); ?>
    <section class="cms-criminal inner-criminal" style="background-image: url(<?php echo $experienced_dui_bg_image['url']; ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div class="slideshow">

											<div class="review-box">
												<h4><img src="/wp-content/uploads/2021/03/google.svg" alt="Google"><?php echo get_field('googlecount1'); ?></h4>
												<p>“<?php echo get_field('reviewtext1'); ?>”</p>
												<div class="rating-box">
													<div class="rating">
														<div class="rate">5.0</div>
														<div class="stars">
															<img src="/wp-content/uploads/2021/03/star.svg" alt="">
															<img src="/wp-content/uploads/2021/03/star.svg" alt="">
															<img src="/wp-content/uploads/2021/03/star.svg" alt="">
															<img src="/wp-content/uploads/2021/03/star.svg" alt="">
															<img src="/wp-content/uploads/2021/03/star.svg" alt="">
														</div>
													</div>
													<div class="author-name"><?php echo get_field('reviewauthor1'); ?></div>
												</div>
											</div>
										</div>
                </div>
                <div class="col-md-6">
                    <div class="section-header">
                        <h2><?php echo get_field('experienced_dui_title'); ?></h2>
                        <p><?php echo get_field('experienced_dui_details'); ?></p>
                        <div class="btn-box">
						
							<?php if( have_rows('experienced_dui_button') ):
								while ( have_rows('experienced_dui_button') ) : the_row(); ?>
									
									<a class="orange-btn" href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('title'); ?></a>
									
								<?php endwhile;
							endif; ?>
						
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--criminal Defense end-->
	<!--criminal Procedure start-->
    <section class="inner-stage">
        <div class="container">
            <div class="row">
                <div class="col-md-4">
                    <div class="resourse-inner"></div>
                </div>
                <div class="col-md-7">
                    <div class="section-header">
                        <h2><?php echo get_field('investigation_title'); ?></h2>
                        <?php echo get_field('investigation_details'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--criminal Procedure end-->
	<!--PENALTIES start-->
	<?php $penalties_bg_image = get_field( "penalties_bg_image" ); ?>
    <section class="inner-penalties" style="background-image: url(<?php echo $penalties_bg_image['url']; ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2><?php echo get_field('penalties_main_title'); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row">
				<?php if( have_rows('dui_list') ):
					while ( have_rows('dui_list') ) : the_row(); ?>
						<div class="col-md-4">
							<div class="conviction-inner">
								<h3><?php echo get_sub_field('standard_dui_title'); ?><span><?php echo get_sub_field('standard_dui_sub_title'); ?></span></h3>
								<?php if( have_rows('offense_list') ):
									while ( have_rows('offense_list') ) : the_row(); ?>
										<div class="offense-box">
											<h4><?php echo get_sub_field('offense_name'); ?></h4>
											<?php echo get_sub_field('offense_details'); ?>
										</div>
									<?php endwhile;
								endif; ?>
							</div>
						</div>
					<?php endwhile;
				endif; ?>
            </div>
            <div class="row">
                <div class="col-md-8 col-md-offset-4">
                    <div class="dui-lawyer">
                        <h2><?php echo get_field('experienced_title'); ?></h2>
                        <div class="btn-box">
						
							<?php if( have_rows('experienced_dui_button') ):
								while ( have_rows('experienced_dui_button') ) : the_row(); ?>
									
									<a class="orange-btn" href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('title'); ?></a>
									
								<?php endwhile;
							endif; ?>
							
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--PENALTIES end-->
	<!--PENALTIES start-->
    <section class="inner-dui-defense">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
					<?php if( have_rows('defense_list') ):
						while ( have_rows('defense_list') ) : the_row(); ?>
							<div class="section-header">
								<h2><?php echo get_sub_field('defense_title'); ?></h2>
								<?php echo get_sub_field('defense_details'); ?>
							</div>
						<?php endwhile;
					endif; ?>
                </div>
                <div class="col-md-4">
				<div class="sidebar">
					<div class="right-box">
				
				
					<div class="slideshow">

												<div class="review-box">
													<h4><img src="/wp-content/uploads/2021/03/google.svg" alt="Google"><?php echo get_field('googlecount2'); ?></h4>
													<h5><?php echo get_field('reviewauthor2'); ?></h5>
													<p>“<?php echo get_field('reviewtext2'); ?>”</p>
													<div class="rating-box">
														<div class="rating">
														<div class="rate">5.0</div>
														<div class="stars">
															<img src="/wp-content/uploads/2021/03/star.svg" alt="">
															<img src="/wp-content/uploads/2021/03/star.svg" alt="">
															<img src="/wp-content/uploads/2021/03/star.svg" alt="">
															<img src="/wp-content/uploads/2021/03/star.svg" alt="">
															<img src="/wp-content/uploads/2021/03/star.svg" alt="">
														</div>
													</div>
													</div>
												</div>
								</div>
								
								<div class="btn-box">
							
											
												<a class="orange-btn" href="<?php echo get_field('consultation_button_link', 'option'); ?>">Free Consultation</a>
		
								</div>
								
							</div>
				
				
                    
                </div>
                <!-- <div class="col-md-4">
					<?php if(get_field('google_reviews', 'options')): ?>
							<?php while(have_rows('google_reviews', 'options')): the_row(); ?>
							<?php $_reviews_title=get_sub_field('reviews_title', 'options'); ?>
							<?php $_reviews_icon=get_sub_field('icon', 'options'); ?>
							<?php $_reviews_star=get_sub_field('star', 'options'); ?>
								<?php if(get_sub_field('reviews_list', 'options')): ?>
									<?php while(have_rows('reviews_list', 'options')): the_row(); ?>
										<div class="review-inner">
											<div class="review-box">
												<h4><img src="<?php echo $_reviews_icon; ?>" alt=""><?php echo $_reviews_title; ?></h4>
												<h5><?php the_sub_field('author', 'options'); ?></h5>
												<p>“<?php the_sub_field('description', 'options'); ?>”</p>
												<div class="rating-box">
													<div class="rating">
														<div class="rate"><?php the_sub_field('rating', 'options'); ?></div>
														<div class="stars">
															<img src="<?php echo $_reviews_star; ?>" alt="">
															<img src="<?php echo $_reviews_star; ?>" alt="">
															<img src="<?php echo $_reviews_star; ?>" alt="">
															<img src="<?php echo $_reviews_star; ?>" alt="">
															<img src="<?php echo $_reviews_star; ?>" alt="">
														</div>
													</div>
												</div>
											</div>
										</div>
									<?php endwhile;
								endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
                </div> -->
		           
		        </div>
            </div>
        </div>
    </section>
    <!--PENALTIES end-->
	<!--Areas Served start-->
    <section class="cms-served">
        <div class="container-fluid">
            <div class="section-header">
                <h2><?php echo get_field('areas_served_title_phoenix'); ?></h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="area-left">
						<a href="<?php echo get_field('areas_left_link'); ?>">
						<?php $areas_left_image = get_field('areas_left_image_phoenix'); ?>
                        <img class="left" src="<?php echo $areas_left_image['url']; ?>" alt="<?php echo $areas_left_image['alt']; ?>" />
                        <div class="location">
                            <ul>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pin.svg" alt="" /><?php echo get_field('area_left_details_phoenix'); ?></li>
                            </ul>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="area-right">
						<a href="<?php echo get_field('areas_left_link'); ?>">
						<?php $areas_right_image = get_field('areas_right_image_phoenix'); ?>
                        <img class="right" src="<?php echo $areas_right_image['url']; ?>" alt="<?php echo $areas_right_image['alt']; ?>" />
                        <div class="location">
                            <ul>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pin.svg" alt="" /><?php echo get_field('area_right_details_phoenix'); ?></li>
                            </ul>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="area-list">
                        <ul>
							<?php if( have_rows('area_list_phoenix') ):
								while ( have_rows('area_list_phoenix') ) : the_row(); ?>
									
                            <li><a href="<?php echo get_sub_field('area_link'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pin-blue.svg" alt="" /><span><?php echo get_sub_field('area_name'); ?></span></a></li>
                           
								<?php endwhile;
							endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Areas Served end-->
	<?php if(get_field('faq_phoenix')): ?>
	<?php while(have_rows('faq_phoenix')): the_row(); ?>
	
	<section class="cms-faq inner-faq">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center">
                        <h2><?php the_sub_field('title'); ?></h2>
                    </div>
                </div>
            </div>
			
			
			<?php if(get_sub_field('list')): ?>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="faq-inner">
                        <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
						
							<?php $cnt=0;while(have_rows('list')): the_row();$cnt++; ?>
								<div class="panel panel-default">
									<div class="panel-heading" role="tab" id="headingOne_<?php echo $cnt; ?>">
									  <h4 class="panel-title">
										<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne_<?php echo $cnt; ?>" aria-expanded="true" aria-controls="collapseOne">
										  <?php the_sub_field('question'); ?>
										</a>
									  </h4>
									</div>
									<div id="collapseOne_<?php echo $cnt; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne_<?php echo $cnt; ?>">
									  <div class="panel-body">
										<?php the_sub_field('answer'); ?>
									  </div>
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
	
	<?php endwhile; ?>
	<?php endif; ?>