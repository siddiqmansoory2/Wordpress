<?php
/*
Template Name: ALT Home Page V2
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages and that other
 * 'pages' on your WordPress site will use a different template.
 *
 * @package OceanWP WordPress theme
 */

get_header(); ?>

	<?php if(get_field('video_slider_section')): ?>
	<?php while(have_rows('video_slider_section')): the_row(); ?>
		<?php if(get_sub_field('enable')): ?>
		
		<!--banner start-->
		<section class="cms-banner newbanner" style="background-image: url(<?php echo get_sub_field('background'); ?>);">
		<?php if(get_sub_field('contents')): ?>
		<?php while(have_rows('contents')): the_row(); ?>
			<div class="container">
			
					<?php if(get_sub_field('section_2')): ?>
						
						<?php while(have_rows('section_2')): the_row(); ?>
							
								<?php if(get_sub_field('services_box')): ?>
								<div class="row banner-top">
									<?php while(have_rows('services_box')): the_row(); ?>		
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<div class="banner-box text-center">
												<div class="icon">
													<a href="<?php echo !empty(get_sub_field('link')) ? get_sub_field('link') : "javascript:void(0)"; ?>">
														<img height="82" width="82" class="icon_withouthover" src="<?php echo get_sub_field('icon'); ?>" alt="" />
														<img height="82" width="82" class="icon_hover" src="<?php echo get_sub_field('icon_hover'); ?>" alt="" />
													</a>
												</div>
												<h4><a href="<?php echo !empty(get_sub_field('link')) ? get_sub_field('link') : "javascript:void(0)"; ?>"><?php echo get_sub_field('title'); ?></a></h4>
											</div>
										</div>
									<?php endwhile; ?>
								</div>
								<?php endif; ?>	
								
						<?php endwhile; ?>
					<?php endif; ?>
					
				<div class="row">
				
				
					<?php if(get_sub_field('section_1')): ?>
						<?php while(have_rows('section_1')): the_row(); ?>
					
						<div class="col-md-6">
							<div class="banner-inner">
								<h1><?php echo get_sub_field('heading_1'); ?></h1>
								<h2><?php echo get_sub_field('heading_2'); ?></h2>
								<p><?php echo get_sub_field('paragraph'); ?></p>
							</div>
							<div class="banner-bottom">
									<?php if(get_sub_field('button_box')): ?>
										<?php while(have_rows('button_box')): the_row(); ?>		
											<div class="btn-box">
												<a class="book-btn popbtn" href="#"><?php echo get_sub_field('label'); ?> <img height="23" width="13" src="<?php echo get_stylesheet_directory_uri(); ?>/html/images/btn-arrow.svg" alt="" /></a>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>	
									<?php if(get_sub_field('reviews_box')): ?>
										<?php while(have_rows('reviews_box')): the_row(); ?>		
											<div class="g-review">
												<img height="45" width="30" src="<?php echo get_sub_field('image'); ?>" alt="" />
												<?php echo get_sub_field('text'); ?>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>	
								</div>
						</div>
						<?php endwhile; ?>
					<?php endif; ?>	
					
					<?php if(get_sub_field('section_2')): ?>
						<?php while(have_rows('section_2')): the_row(); ?>
						<div class="col-md-6">
							<div class="banner-rht">
							
								<?php if(get_sub_field('video_box')): ?>
									<?php while(have_rows('video_box')): the_row(); ?>		
										<div class="banner-img">
											<a class="video-btn" href="javascript:void(0)" data-toggle="modal" data-src="<?php echo get_sub_field('video'); ?>" data-target="#VideoModal" data-title="">
												<img height="340" width="605" src="<?php echo get_sub_field('thumbnail'); ?>" alt="" />
											</a>
										</div>
									<?php endwhile; ?>
								<?php endif; ?>	
								<?php if(get_sub_field('services_box')): ?>
								<div class="row banner-bottom-icon">
									<?php while(have_rows('services_box')): the_row(); ?>		
										<div class="col-lg-4 col-md-4 col-sm-4 col-xs-4">
											<div class="banner-box text-center">
												<div class="icon">
													<a href="<?php echo !empty(get_sub_field('link')) ? get_sub_field('link') : "javascript:void(0)"; ?>">
														<img height="82" width="82" class="icon_withouthover" src="<?php echo get_sub_field('icon'); ?>" alt="" />
														<img height="82" width="82" class="icon_hover" src="<?php echo get_sub_field('icon_hover'); ?>" alt="" />
													</a>
												</div>
												<h4><a href="<?php echo !empty(get_sub_field('link')) ? get_sub_field('link') : "javascript:void(0)"; ?>"><?php echo get_sub_field('title'); ?></a></h4>
											</div>
										</div>
									<?php endwhile; ?>
								</div>
								<?php endif; ?>	
									
								
							</div>
						</div>
						<?php endwhile; ?>
					<?php endif; ?>
					
					
				</div>
			</div> 
			<?php endwhile; ?>
			<?php endif; ?>			
		</section>
		<!--banner end-->
		<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>

	<?php if(get_field('books_section')): ?>
	<?php while(have_rows('books_section')): the_row(); ?>
		<?php if(get_sub_field('enable')): ?>
		
		<!--book start-->
		<section class="cms-book newbook">
		<div class="container">
		
		<?php if(get_sub_field('content')): ?>
		<div class="row">
			<?php while(have_rows('content')): the_row(); ?>
			
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="book-box">
						<div class="book">
							<div class="book-img">
                                <a href="<?php echo !empty(get_sub_field('button_link')) ? get_sub_field('button_link') : "javascript:void(0)"; ?>"  target="_blank" rel="noopener noreferrer"><img height="249" width="182" src="<?php echo get_sub_field('image'); ?>"></a>
								<div class="btn-box">
									<a class="gray-btn" href="<?php echo !empty(get_sub_field('button_link')) ? get_sub_field('button_link') : "javascript:void(0)"; ?>"  target="_blank" rel="noopener noreferrer"><?php echo get_sub_field('button_label'); ?></a>
								</div>
							</div>
						</div>
					</div>
				</div>
					
				<?php endwhile; ?>
			</div>
			
			<?php endif; ?>	
			</div>			
		</section>
		<!--book end-->
		<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>
	
	<?php if(get_field('about_section')): ?>
	<?php while(have_rows('about_section')): the_row(); ?>
		<?php if(get_sub_field('enable')): ?>
		
		<!--abouthome start-->
		<section class="cms-abouthome">
		<?php if(get_sub_field('contents')): ?>
		<?php while(have_rows('contents')): the_row(); ?>
			<div class="container">
				<div class="row">
				
				
					<?php if(get_sub_field('section_1')): ?>
						<?php while(have_rows('section_1')): the_row(); ?>
					
						<div class="col-md-5">
							<div class="abouthome-lft">
								<?php if(get_sub_field('images')): ?>
								<div class="badge-inner">
									<?php while(have_rows('images')): the_row(); ?>	
									<div class="badge-box">
										<img height="100" width="135" src="<?php echo get_sub_field('image'); ?>" alt="" />
									</div>
									<?php endwhile; ?>
								</div>
								<?php endif; ?>	
							</div>
						</div>
						
						<?php endwhile; ?>
					<?php endif; ?>	
					
					
					<?php if(get_sub_field('section_2')): ?>
						<?php while(have_rows('section_2')): the_row(); ?>
							<div class="col-md-7">
								<div class="abouthome-rht">
									<div class="section-header">
										<h2><?php echo get_sub_field('heading'); ?></h2>
									</div>
									<?php echo get_sub_field('content'); ?>
								</div>
							</div>
						<?php endwhile; ?>
					<?php endif; ?>
					
					
				</div>
			</div> 
			<?php endwhile; ?>
			<?php endif; ?>			
		</section>
		<!--abouthome end-->
		<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>
	
	
	
	<?php if(get_field('immigration_section')): ?>
	<?php while(have_rows('immigration_section')): the_row(); ?>
		<?php if(get_sub_field('enable')): ?>
		
		<!--immigration start-->
		<section class="cms-immigration">
		<div class="container">
		<?php if(get_sub_field('contents')): ?>
		
		<?php while(have_rows('contents')): the_row(); ?>
			
				<div class="row">
					<div class="col-md-6">
						<div class="immigration-lft">
							<div class="section-header">
								<h2><?php echo get_sub_field('title'); ?></h2>
							</div>
							<?php echo get_sub_field('content'); ?>
							<div class="btn-box">
								<a class="yellow-btn" href="<?php echo get_sub_field('link_location'); ?>"><?php echo get_sub_field('link_label'); ?></a>
							</div>
						</div>
					</div>
					<div class="col-md-6">
						<div class="immigration-img">
							<img height="530" width="530" src="<?php echo get_sub_field('image'); ?>" alt="" />
						</div>
					</div>
				</div>
			<?php endwhile; ?>
			<?php endif; ?>	
			</div>			
		</section>
		<!--immigration end-->
		<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>
	
	
	
	<?php if(get_field('law_section')): ?>
	<?php while(have_rows('law_section')): the_row(); ?>
		<?php if(get_sub_field('enable')): ?>
		
		<!--law menu start-->
		<section class="cms-law">
			<div class="container">
				<?php if(get_sub_field('contents')): ?>
					<div class="law-inner">
						<div class="row">
						<?php while(have_rows('contents')): the_row(); ?>
							
							
							<div class="col-md-4">
								<div class="law-box">
									<div class="law-title">
										<div class="icon">
											<a href="<?php echo !empty(get_sub_field('link')) ? get_sub_field('link') : "javascript:void(0)"; ?>"><img height="64" width="64" src="<?php echo get_sub_field('image'); ?>" alt="" /></a>
										</div>
										<div class="content"><a href="<?php echo !empty(get_sub_field('link')) ? get_sub_field('link') : "javascript:void(0)"; ?>"><?php echo get_sub_field('title'); ?></a></div>
									</div>
									<?php if(get_sub_field('content')): ?>
									<div class="law-link">
										<ul>
											<?php while(have_rows('content')): the_row(); ?>
											<li>
												<a href="<?php echo !empty(get_sub_field('link')) ? get_sub_field('link') : "javascript:void(0)"; ?>" class="<?php echo !empty(get_sub_field('link')) ? "has_link" : "has_no_link"; ?>"><?php echo get_sub_field('label'); ?></a>
											</li>
											<?php endwhile; ?>
										</ul>
									</div>
									<?php endif; ?>	
								</div>
							</div>
						   
						   
						<?php endwhile; ?>
						
						</div>
						
						
						<?php if(get_sub_field('buton_box')): ?>
							<div class="btn-box">
								<?php while(have_rows('buton_box')): the_row(); ?>
									<a class="gray-btn popbtn" href="#"><?php echo get_sub_field('label'); ?></a>
								<?php endwhile; ?>
							</div>
						<?php endif; ?>	
						
						
					</div>
				<?php endif; ?>	
			</div>			
		</section>
		<!--law menu end-->
		<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>
	
	
    
	<?php if(get_field('video_faq_section')): ?>
	<?php while(have_rows('video_faq_section')): the_row(); ?>
		<?php if(get_sub_field('enable')): ?>
		
		<!--video start-->
		<section class="cms-video newvideo" style="background-image: url(<?php echo get_sub_field('background'); ?>);">
		<div class="container">
		<?php if(get_sub_field('contents')): ?>
		
		<?php while(have_rows('contents')): the_row(); ?>
		
		
				<div class="row">
                <div class="col-md-10 col-md-offset-1">
                    <div class="video-top">
                        <div class="section-header text-center">
                            <h2><?php echo get_sub_field('title'); ?></h2>
                        </div>
                        <h3><?php echo get_sub_field('title_2'); ?></h3>
                        <p><?php echo get_sub_field('description'); ?></p>
                    </div>
					
					<?php if(get_sub_field('content')): ?>
		
						<?php while(have_rows('content')): the_row(); ?>
					
					
						<div class="video-inner">
							<div class="video-title">
								<h3><?php echo get_sub_field('heading'); ?></h3>
							</div>
							<?php if(get_sub_field('contents')): ?>
							<div class="row">
								<?php while(have_rows('contents')): the_row(); ?>
								<div class="col-md-6">
									<div class="video-box">
										<div class="video">
										
											<?php 
											if(get_sub_field('video')){
												?>
												<a class="video-btn" href="javascript:void(0)" data-toggle="modal" data-src="<?php echo get_sub_field('video'); ?>" data-target="#VideoModal" data-title="<?php echo get_sub_field('title'); ?>">
													<img height="72" width="128" src="<?php echo get_sub_field('thumb'); ?>" alt="" />
												</a>
												<?php
											}else{
												?> 
												<a href="javascript:void(0)">
													<img height="72" width="128" src="<?php echo get_sub_field('thumb'); ?>" alt="" />
												</a>
												<?php
											} ?>
										
										
											
										</div>
										<div class="content">
											<?php echo get_sub_field('title'); ?>
										</div>
									</div>
								</div>
								<?php endwhile; ?>
							</div>
							<?php endif; ?>
						</div>
						<?php endwhile; ?>
					<?php endif; ?>
				</div>
            </div>
            <div class="btn-box">
                <h4><?php echo get_sub_field('link_heading'); ?></h4>
                <a class="book-btn popbtn" href="#" ><?php echo get_sub_field('link_label'); ?> <img height="23" width="13"  src="<?php echo get_stylesheet_directory_uri(); ?>/html/images/btn-arrow.svg" alt=""></a>
            </div>
		
		
			<?php endwhile; ?>
			<?php endif; ?>	
			</div>			
		</section>
		<!--video end-->
		<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>
	
	
	
	<?php if(get_field('newsletter_section')): ?>
	<?php while(have_rows('newsletter_section')): the_row(); ?>
		<?php if(get_sub_field('enable')): ?>
		
		<!--newsletter start-->
		<section class="cms-newsletter newnews" style="background-image: url(<?php echo get_sub_field('background'); ?>);">
			<div class="container">
				<?php if(get_sub_field('content')): ?>
				<?php while(have_rows('content')): the_row(); ?>
				<div class="row">
					<div class="col-lg-6 col-md-12">
						<div class="badge-icon">
							<img height="224" width="224" src="<?php echo get_sub_field('image'); ?>" alt="" />
						</div>
					</div>
					<div class="col-lg-6 col-md-12">
						<div class="signup-inner">
							<h2><?php echo get_sub_field('heading'); ?></h2>
							<?php gravity_form(11, false, false, false, '', true, 1); ?>
							
							<?php /* ?><form action="">
								<div class="newsletter">
									<input type="email" class="form-control" placeholder="Email">
									<img src="<?php echo get_stylesheet_directory_uri(); ?>/html/images/newsmail-icon.svg" alt="" />
									<button type="submit" class="btn news-btn">Subscribe</button>
								</div>
							</form><?php */ ?>
						</div>
					</div>
				</div>
				<?php endwhile; ?>
				<?php endif; ?>
			</div>			
		</section>
		<!--newsletter end-->
		<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>
	
	
	<?php if(get_field('review_section')): ?>
	<?php while(have_rows('review_section')): the_row(); ?>
		<?php if(get_sub_field('enable')): ?>
		
		<!--review start-->
		<section class="cms-review" style="background-image: url(<?php echo get_sub_field('background_image'); ?>);">
			<div class="container">
				<div class="section-header text-center">
					<h2><?php echo get_sub_field('heading'); ?></h2>
				</div>
			</div>
			
			
			<?php $reviews_image_1=get_sub_field('reviews_image_1'); ?>
			<?php $reviews_image_2=get_sub_field('reviews_image_2'); ?>
			
			
			<?php if(get_sub_field('content')): ?>
			<div class="slider center"> 
				<?php while(have_rows('content')): the_row(); ?>
					<div class="slide">
						<div class="reviewsbox-inner">
							<div class="review-box">
								<div class="slider-logo">
									<img height="111" width="185" src="<?php echo $reviews_image_1; ?>" alt="" />
								</div>
								<div class="author-detail">
									<h4><?php echo get_sub_field('author_name'); ?></h4>
									<h5><?php echo get_sub_field('author_position'); ?></h5>
								</div>
								<p><?php echo get_sub_field('description'); ?></p>
							</div>
							<div class="review-img">
								<img height="333" width="618" src="<?php echo $reviews_image_2; ?>" alt="" />
							</div>
						</div>
					</div>
				<?php endwhile; ?>
			</div>
			<!--<div class="pagination"></div>-->
			<?php endif; ?>
					
		</section>
		<!--review end-->
		<?php endif; ?>
	<?php endwhile; ?>
	<?php endif; ?>
	

	

<!-- Modal -->
<div class="modal fade" id="VideoModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
    aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <!-- Modal Header -->
            <div class="modal-header">
                <h4 class="modal-title">Title</h4>
                <button type="button" class="close" data-dismiss="modal">&times;</button>
            </div>
            <div class="modal-body">
                <div class="embed-responsive embed-responsive-16by9">
                    <iframe class="embed-responsive-item" src="" id="video" allowscriptaccess="always"
                        allow="autoplay"></iframe>
                </div>
            </div>
            <!-- Modal footer -->
            <div class="modal-footer">
				
				<?php if(get_field('popup_form','option')): ?>
				<?php while(have_rows('popup_form','option')): the_row(); ?>
<a href="<?php echo !empty(get_sub_field('button_link','option')) ? get_sub_field('button_link','option') : "javascript:void(0)"; ?>" class="orange-btn"><?php echo get_sub_field('button_label','option'); ?></a>
				<?php endwhile; ?>
				<?php endif; ?>
				
				
                <!--<button type="button" class="orange-btn" data-dismiss="modal">FREE CONSULTATION</button>-->
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>



