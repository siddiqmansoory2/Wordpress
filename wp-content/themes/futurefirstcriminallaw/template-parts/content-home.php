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
                                            <div class="flip-card teambox">
  <div class="flip-card-inner">
    <div class="flip-card-front">
 <div class="team-img">
<?php $attorney_team_image = get_sub_field('attorney_team_image'); ?>
<img src="<?php echo $attorney_team_image['url']; ?>" alt="<?php echo $attorney_team_image['alt']; ?>">
</div>   
    </div>
    <div class="flip-card-back">
      <a class="fliplink" href="<?php the_sub_field('teamurl'); ?>">
										<img src="<?php echo $attorney_team_image['url']; ?>" alt="<?php echo $attorney_team_image['alt']; ?>">
		  <div class="flipover">
			<span class="flipbtn">Learn More</span></div>
		</a>
    </div>
      
  </div>
                                                <div class="team-content">
												<h4><?php echo get_sub_field('attorney_team_name'); ?></h4>
												<p><?php echo get_sub_field('attorney_team_role'); ?></p>
											</div>
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
							<a href="<?php echo get_sub_field('practice_areas_link'); ?>">
                                <div class="practice-box">
								<div class="icon">
									<?php $practice_areas_icon_name = get_sub_field('practice_areas_icon_name'); ?>
									<img src="<?php echo get_sub_field('icon'); ?>" alt="">
								</div>
								<h4><?php echo get_sub_field('practice_areas_name'); ?></h4>
							     </div>
                            </a>
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
                                Learn more about<br>what to do next
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

							<div class="review-inner">
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
							
								<div class="btn-box2">
								<?php if(get_field('google_reviews', 'options')): ?>
						<?php while(have_rows('google_reviews', 'options')): the_row(); ?>
              
                                    
									<?php if( get_sub_field('button', 'options') ):
										while ( have_rows('button', 'options') ) : the_row(); ?>
											
												<a class="orange-btn" href="<?php echo get_sub_field('link'); ?>"><?php echo get_sub_field('title'); ?></a>
											
										<?php break; endwhile;
									endif; ?>
                                    <?php endwhile; ?>
					<?php endif; ?>
								</div>
								
							</div>
							

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
                        <a href="<?php echo get_field('areas_left_link'); ?>">
						<?php $areas_left_image = get_field('areas_left_image'); ?>
                        <img class="left" src="<?php echo $areas_left_image['url']; ?>" alt="<?php echo $areas_left_image['alt']; ?>" />
                        <div class="location">
                            <ul>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pin.svg" alt="" /><?php echo get_field('area_left_details'); ?></li>
                            </ul>
                        </div>
                        </a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="area-right">
                        <a href="<?php echo get_field('areas_left_link'); ?>">
						<?php $areas_right_image = get_field('areas_right_image'); ?>
                        <img class="right" src="<?php echo $areas_right_image['url']; ?>" alt="<?php echo $areas_right_image['alt']; ?>" />
                        <div class="location">
                            <ul>
                                <li><img src="<?php echo get_template_directory_uri(); ?>/assets/images/pin.svg" alt="" /><?php echo get_field('area_right_details'); ?></li>
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
							<?php if( have_rows('area_list') ):
								while ( have_rows('area_list') ) : the_row(); ?>
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
									<a class="orange-btn" data-toggle="modal" href="<?php echo get_sub_field('resources_link'); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/download.svg">Download</a>
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
	
<div class="modal fade" id="modal-1" tabindex="-1" role="dialog" aria-labelledby="modal-1-Title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-1-Title">9 Things Every Defendant Should Know About Plea Bargains</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php gravity_form( 2, false, false, false, '', true ); ?>
            </div>
            </div>
        </div>
    </div>	
	

    <div class="modal fade" id="modal-2" tabindex="-1" role="dialog" aria-labelledby="modal-2-Title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-2-Title">10 Tips for Successfully Completing Probation</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php gravity_form( 3, false, false, false, '', true ); ?>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-3" tabindex="-1" role="dialog" aria-labelledby="modal-3-Title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-3-Title">41 Frequently Asked Questions: Dealing with the Criminal Justice System</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php gravity_form( 4, false, false, false, '', true ); ?>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-4" tabindex="-1" role="dialog" aria-labelledby="modal-4-Title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-4-Title">19 Things Your Criminal Defense Attorney Wishes You Knew</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php gravity_form( 5, false, false, false, '', true ); ?>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-5" tabindex="-1" role="dialog" aria-labelledby="modal-5-Title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-5-Title">7 Ways a Criminal Defense lawyer Can Help You</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php gravity_form( 6, false, false, false, '', true ); ?>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-6" tabindex="-1" role="dialog" aria-labelledby="modal-6-Title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-6-Title">Was That Police Search and Seizure Action Legal?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php gravity_form( 7, false, false, false, '', true ); ?>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-7" tabindex="-1" role="dialog" aria-labelledby="modal-7-Title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-7-Title">Can You Get the Evidence Against Me Thrown Out of Court?</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php gravity_form( 8, false, false, false, '', true ); ?>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-8" tabindex="-1" role="dialog" aria-labelledby="modal-8-Title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-8-Title">Bail basics</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php gravity_form( 9, false, false, false, '', true ); ?>
            </div>
            </div>
        </div>
    </div>

    <div class="modal fade" id="modal-9" tabindex="-1" role="dialog" aria-labelledby="modal-9-Title" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modal-9-Title">Action List When Your Loved One is Arrested</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <?php gravity_form( 10, false, false, false, '', true ); ?>
            </div>
            </div>
        </div>
    </div>