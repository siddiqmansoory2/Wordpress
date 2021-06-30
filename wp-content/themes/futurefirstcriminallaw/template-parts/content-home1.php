<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 */
?>

<!--banner start-->
	<?php $banner_image = get_field( "banner_image" ); ?>
	<section class="cms-banner" style="background-image: url(<?php echo $banner_image['url']; ?>);">
		<div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="banner-inner">
                        <h1><?php echo get_field( "banner_title" ); ?></h1>
                        <h2><img src="<?php echo get_template_directory_uri(); ?>/assets/images/quote.svg" alt=""/><?php echo get_field( "banner_sub_title" ); ?></h2>
                        <?php echo get_field( "banner_detail" ); ?>
                        <div class="btn-box">
                            <a class="orange-btn" href="<?php echo get_field( "button_1_link" ); ?>"><?php echo get_field( "bouton_1_text" ); ?></a>
                            <a class="orange-btn" href="<?php echo get_field( "button_2_link" ); ?>"><?php echo get_field( "bouton_2_text" ); ?></a>
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
	<!--attorney section start-->
    <section class="cms-attorney">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="section-header">
                        <h1><?php echo get_field( "attorney_main_title" ); ?></h1>
                        <p><?php echo get_field( "attorney_description" ); ?></p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="team-inner">
                        <div class="team-row">
							<?php if( have_rows('attorney_team') ):
								while ( have_rows('attorney_team') ) : the_row(); ?>	
									<div class="team-col">
										<div class="team-box text-center">
											<div class="team-img">
												<?php $attorney_team_image = get_sub_field('attorney_team_image'); ?>
												<img src="<?php echo $attorney_team_image['url']; ?>" alt="<?php echo $attorney_team_image['alt']; ?>">
											</div>
											<div class="team-content">
												<h4><?php echo get_sub_field('attorney_team_name'); ?></h4>
												<p><?php echo get_sub_field('attorney_team_role'); ?></p>
											</div>
										</div>
									</div>
								<?php endwhile;
							endif; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--attorney section end-->
	<!--practice section start-->
    <section class="cms-practice">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2><?php echo get_field( "practice_areas_title" ); ?></h2>
                    </div>
                </div>
            </div>
            <div class="row practice-inner">
				<?php if( have_rows('practice_areas_list') ):
					while ( have_rows('practice_areas_list') ) : the_row(); ?>
						<div class="col-md-3">
							<div class="practice-box">
								<div class="icon">
									<?php $practice_areas_icon_name = get_sub_field('practice_areas_icon_name'); ?>
									<img src="<?php echo get_sub_field('icon'); ?>" alt="">
								</div>
								<h4><a href="<?php echo get_sub_field('practice_areas_link'); ?>"><?php echo get_sub_field('practice_areas_name'); ?></a></h4>
							</div>
						</div>
					<?php endwhile;
				endif; ?>
            </div>
        </div>
    </section>
    <!--practice section end-->
	<!--criminal Defense start-->
	<?php $experienced_cd_background_image = get_field( "experienced_cd_background_image" ); ?>
    <section class="cms-criminal" style="background-image: url(<?php echo $experienced_cd_background_image['url']; ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
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
                <div class="col-md-6">
                    <div class="section-header">
                        <h2><?php echo get_field('experienced_cd_title'); ?></h2>
                        <p><?php echo get_field('experienced_cd_description'); ?></p>
                        <div class="btn-box">
                            <a class="orange-btn" href="<?php echo get_field( "experienced_cd_button_1_link" ); ?>"><?php echo get_field( "experienced_cd_button_1" ); ?></a>
                            <a class="orange-btn" href="<?php echo get_field( "experienced_cd_button_2_link" ); ?>"><?php echo get_field( "experienced_cd_button_2" ); ?></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--criminal Defense end-->
	<!--criminal Defense2 start-->
    <section class="cms-defense">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12">
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
                        <h2><?php echo get_field('phoenix_cd_title'); ?></h2>
                        <?php echo get_field('phoenix_cd_description'); ?>
                        <div class="info">
						
							<?php echo get_field('phoenix_cd_description_hide'); ?>
                            
                        </div>
                        <div class="btn-box2">
                            <button id="expand" class="togal-btn">
                                Learn more about<br>Personal Injury Law
                                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/double-arrow.svg" alt="">
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--criminal Defense2 end-->
	<!--criminal Procedure start-->
	<?php $criminal_procedure_bg_image = get_field( "criminal_procedure_bg_image" ); ?>
    <section class="cms-procedure" style="background-image: url(<?php echo $criminal_procedure_bg_image['url']; ?>);">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <div class="section-header">
                        <h2><?php echo get_field('criminal_procedure_title'); ?></h2>
                    </div>
                    <div class="step-inner">
						<?php if( have_rows('procedure_list') ):
							while ( have_rows('procedure_list') ) : the_row(); ?>
								<div class="step-box">
									<?php echo get_sub_field('procedure_details'); ?> 
								</div>
							<?php endwhile;
						endif; ?>
                    </div>
                    <div class="btn-box">
					
						<?php if( have_rows('call_button') ):
							while ( have_rows('call_button') ) : the_row(); ?>
								
									<a class="orange-btn" href="<?php echo get_sub_field('button_link'); ?>"><?php echo get_sub_field('button_title'); ?></a>
								
							<?php endwhile;
						endif; ?>
					
                    </div>
                </div>
                <div class="col-md-4">
					<div class="sidebar">
						<div class="right-box">
				
					<?php if(get_field('google_reviews', 'options')): ?>
						<?php while(have_rows('google_reviews', 'options')): the_row(); ?>
						<?php $_reviews_title=get_sub_field('reviews_title', 'options'); ?>
						<?php $_reviews_icon=get_sub_field('icon', 'options'); ?>
						<?php $_reviews_star=get_sub_field('star', 'options'); ?>
							<?php if(get_sub_field('reviews_list', 'options')): ?>
							<div class="review-inner">
								<div class="slideshow">
								<?php while(have_rows('reviews_list', 'options')): the_row(); ?>
									
											<div>
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
										
								<?php endwhile; ?>
							
								</div>
								<?php endif; ?>
								<div class="btn-box2">
								
									<?php if( get_sub_field('button', 'options') ):
										while ( have_rows('button', 'options') ) : the_row(); ?>
											
												<a class="orange-btn" href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('title'); ?></a>
											
										<?php break; endwhile;
									endif; ?>
								</div>
								
							</div>
							
						<?php endwhile; ?>
					<?php endif; ?>
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
                                            <div class="slideshow">
                                                <div>
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
                                            </div>
										</div>
									<?php endwhile;
								endif; ?>
							<?php endwhile; ?>
						<?php endif; ?>
                </div> -->
            </div>
        </div>
    </section>
    <!--criminal Procedure end-->
	<!--Areas Served start-->
    <section class="cms-served">
        <div class="container-fluid">
            <div class="section-header">
                <h2><?php echo get_field('areas_served_title'); ?></h2>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <div class="area-left">
						<?php $areas_left_image = get_field('areas_left_image'); ?>
                        <img class="left" src="<?php echo $areas_left_image['url']; ?>" alt="<?php echo $areas_left_image['alt']; ?>" />
                        <div class="location">
                            <ul>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pin.svg" alt="" /><?php echo get_field('area_left_details'); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="area-right">
						<?php $areas_right_image = get_field('areas_right_image'); ?>
                        <img class="right" src="<?php echo $areas_right_image['url']; ?>" alt="<?php echo $areas_right_image['alt']; ?>" />
                        <div class="location">
                            <ul>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pin.svg" alt="" /><?php echo get_field('area_right_details'); ?></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="area-list">
                        <ul>
							<?php if( have_rows('area_list') ):
								while ( have_rows('area_list') ) : the_row(); ?>
									<li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pin-blue.svg" alt="" /><a href="<?php echo get_sub_field('area_link'); ?>"><?php echo get_sub_field('area_name'); ?></a></li>
								<?php endwhile;
							endif; ?>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--Areas Served end-->
	<!--Resources start-->
    <section class="cms-resource">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h2><?php echo get_field('downloadable_title'); ?></h2>
                    </div>
                </div>
            </div>
            <div class="resource-row">
				<?php if( have_rows('resources_boxes') ):
					while ( have_rows('resources_boxes') ) : the_row(); ?>
						<div class="col-md-4 col-sm-6">
							<div class="resource-box">
								<div class="resource-img">
									<?php $resources_image = get_sub_field('resources_image'); ?>
									<img src="<?php echo $resources_image['url']; ?>">
									<div class="icon">
										<img src="<?php echo get_template_directory_uri(); ?>/assets/images/pdf.svg">
									</div>
								</div>
								<h4><?php echo get_sub_field('resources_name'); ?></h4>
								<div class="btn-box">
									<a class="orange-btn" href="<?php echo get_sub_field('resources_link'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/download.svg">Download</a>
								</div>
							</div>
						</div>
					<?php endwhile;
				endif; ?>
            </div>
        </div>
    </section>
    <!--Resources end-->
	
	
   

	<?php if(get_field('faq')): ?>
	<?php while(have_rows('faq')): the_row(); ?>
	
	<section class="cms-faq">
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
	
	
    <!--FAQ section end-->
	
	
    <!--testimonial section start-->
	
	
	
    