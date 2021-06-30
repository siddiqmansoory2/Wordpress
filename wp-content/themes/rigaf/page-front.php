<?php /* Template Name: Front Page */ ?>
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


	<?php if (have_rows('banner_section')): ?>	
		<?php while (have_rows('banner_section')): the_row(); ?>
			<?php if (get_sub_field('enable')): ?>
			<?php if (get_sub_field('contents')): ?>
				<?php while (have_rows('contents')): the_row(); ?>
					<!--banner start-->
					<section class="cms-banner" style="background-image: url(<?php echo get_sub_field('background_image'); ?>);">
						<div class="container">
							<div class="row">
								<div class="col-md-8">
									<div class="banner-inner">
										<h1><?php echo get_sub_field('banner_title'); ?></h1>
										<p><?php echo get_sub_field('banner_content'); ?></p>
										
										<div class="banner-bottom">																		
											<?php if (have_rows('button_area')): ?>
												<div class="btn-box">
													<?php $or=0;while (have_rows('button_area')): the_row(); $or++; ?>
													
														<a class="theme-btn <?php echo get_sub_field('button_class'); ?>" href='<?php echo !empty(get_sub_field('button_url')) ? get_sub_field('button_url') : "javascript:void(0)"; ?>'>
															<?php echo get_sub_field('button_title'); ?>
														</a>
														
													<?php endwhile; ?>
												</div>
											<?php endif; ?>										
										</div>
									</div>
								</div>
							</div>
						</div>       
					</section>
					<!--banner end-->
				<?php endwhile; ?>
			<?php endif; ?>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>

    <?php if (have_rows('services_section')): ?>	
		<?php while (have_rows('services_section')): the_row(); ?>
			<?php if (get_sub_field('enable')): ?>
			<?php if (get_sub_field('contents')): ?>
				<?php while (have_rows('contents')): the_row(); ?>
				
				<!--banner bottom start-->
					<section class="cms-bannerbot">
						<div class="container">
							<?php if (get_sub_field('box')): ?>
							<div class="bot-inner">
								<?php while (have_rows('box')): the_row(); ?>
								<div class="bot-box">
									<div class="icon">
										<img src="<?php echo get_sub_field('icon'); ?>" alt="" />
									</div>
									<div class="content">
										<h4><?php echo get_sub_field('heading'); ?></h4>
										<p><?php echo get_sub_field('description'); ?></p>
									</div>
								</div>
								<?php endwhile; ?>
							</div>
							<?php endif; ?>
						</div>
					</section>
					<!--banner bottom end-->
				<?php endwhile; ?>
			<?php endif; ?>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>


    <?php if (have_rows('firm_section')): ?>	
		<?php while (have_rows('firm_section')): the_row(); ?>
			<?php if (get_sub_field('enable')): ?>
			<?php if (get_sub_field('contents')): ?>
				<?php while (have_rows('contents')): the_row(); ?>
					<!--firm start-->
					<section class="cms-firm">
						<div class="container">
							<div class="firm-inner">
								<div class="section-header text-center">
									<h4><?php echo get_sub_field('heading'); ?></h4>
									<h2><?php echo get_sub_field('heading_2'); ?></h2>
									<p><?php echo get_sub_field('description'); ?></p>
								</div>
								
								<?php if (get_sub_field('box')): ?>
								<div class="section-footer">
								
									<?php while (have_rows('box')): the_row(); ?>
									<div class="firm-box">
										<div class="firm-img">
											<img src="<?php echo get_sub_field('icon'); ?>" alt="" />
										</div>
										<div class="firm-content">
											<h4><?php echo get_sub_field('heading'); ?></h4>
											<p><?php echo get_sub_field('description'); ?></p>
										</div>
									</div>
									<?php endwhile; ?>
									
								</div>
								<?php endif; ?>
							</div>
							
							<div class="btn-box text-center">
								<h4><?php echo get_sub_field('button_heading'); ?></h4>
								<?php if (have_rows('button_area')): ?>
								<?php $or=0;while (have_rows('button_area')): the_row(); $or++; ?>
								
									<a class="<?php echo get_sub_field('button_class'); ?>" href='<?php echo !empty(get_sub_field('button_url')) ? get_sub_field('button_url') : "javascript:void(0)"; ?>'>
										<?php echo get_sub_field('button_title'); ?>
									</a>
									
								<?php endwhile; ?>
								<?php endif; ?>
							</div>
								
							
						</div>
					</section>
					<!--firm end-->
				<?php endwhile; ?>
			<?php endif; ?>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
	
	
	<?php if (have_rows('software_section')): ?>	
		<?php while (have_rows('software_section')): the_row(); ?>
			<?php if (get_sub_field('enable')): ?>
			<?php if (get_sub_field('contents')): ?>
				<?php while (have_rows('contents')): the_row(); ?>
				<!--software start-->
					<section class="cms-software" style="background-image: url(<?php echo get_sub_field('background_image'); ?>);">
						<div class="container">
							<div class="row">
								<div class="col-md-5">
									<div class="section-header">
										<h2><?php echo get_sub_field('heading'); ?></h2>
										<p><?php echo get_sub_field('description'); ?></p>
									</div>
								</div>
								<div class="col-md-7">
								
								
									<?php if (get_sub_field('box')): ?>
									<div class="software-inner">
									
										<?php while (have_rows('box')): the_row(); ?>
										
										<div class="software-box">
											<div class="icon">
												<img src="<?php echo get_sub_field('icon'); ?>" alt="">
											</div>
											<div class="content">
												<h4><?php echo get_sub_field('heading'); ?></h4>
												<p><?php echo get_sub_field('description'); ?></p>
											</div>
										</div>
										
										<?php endwhile; ?>
										
									</div>
									<?php endif; ?>
								
								</div>
							</div>
						</div>
					</section>
					<!--software end-->
				<?php endwhile; ?>
			<?php endif; ?>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
	
	
	<?php if (have_rows('master_section')): ?>	
		<?php while (have_rows('master_section')): the_row(); ?>
			<?php if (get_sub_field('enable')): ?>
			<?php if (get_sub_field('contents')): ?>
				<?php while (have_rows('contents')): the_row(); ?>
					<!--master start-->
					<section class="cms-master">
						<div class="container">
							<div class="row">
								<div class="col-md-12">
									<div class="section-header">
										<h2><?php echo get_sub_field('heading'); ?></h2>
										<p><?php echo get_sub_field('description'); ?></p>
									</div>
								</div>
							</div>
							
							<?php if (get_sub_field('demo_box')): ?>
								<div class="demo-inner">
								
									<?php $_class=0; while (have_rows('demo_box')): the_row(); $_class++; ?>
									
									<div class="demo-<?php echo $_class; ?>">
										<div class="demo-box">
											<h4><?php echo get_sub_field('heading'); ?></h4>
											<p><?php echo get_sub_field('description'); ?></p>
										</div>
									</div>
									
									<?php endwhile; ?>
									
								</div>
							<?php endif; ?>
							
							
							<div class="feature">
								<div class="section-header text-center">
									<h2><?php echo get_sub_field('features_heading'); ?></h2>
								</div>
								<?php if (get_sub_field('features_box')): ?>
								<div class="row">
								
									<?php while (have_rows('features_box')): the_row(); ?>
									
										<div class="col-lg-3 col-md-4 col-sm-6">
											<div class="feature-box">
												<div class="icon">
													<img src="<?php echo get_sub_field('icon'); ?>" alt="" />
												</div>
												<h4><?php echo get_sub_field('title'); ?></h4>
											</div>
										</div>
									
									<?php endwhile; ?>
									
								</div>
							<?php endif; ?>
							</div>
							
							
							<div class="integration">
								<div class="section-header">
									<h2><?php echo get_sub_field('integration_heading'); ?></h2>
									<p><?php echo get_sub_field('integration_description'); ?></p>
								</div>
								<?php if (get_sub_field('integration_box')): ?>
								<div class="partner-logo">
									<ul class="list-inline">
								
									<?php while (have_rows('integration_box')): the_row(); ?>
									
										<li class="list-inline-item">
											<a href="<?php echo get_sub_field('link'); ?>"><img src="<?php echo get_sub_field('icon'); ?>" class="img-fluid" alt=""></a>
										</li>
									
									<?php endwhile; ?>
									
									</ul>
								</div>
							<?php endif; ?>
							</div>
							
							
							
						</div>
					</section>
					<!--master end-->
				<?php endwhile; ?>
			<?php endif; ?>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
	
	

    <?php if (have_rows('faq_section')): ?>	
		<?php while (have_rows('faq_section')): the_row(); ?>
			<?php if (get_sub_field('enable')): ?>
			<?php if (get_sub_field('contents')): ?>
				<?php while (have_rows('contents')): the_row(); ?>
				<!--faq start-->
					<section class="cms-faq" style="background-image: url(<?php echo get_sub_field('background_image'); ?>);">
						<div class="container">
							<div class="row">
								<div class="col-md-8 col-md-offset-2">
									<div class="section-header text-center">
										<h2><?php echo get_sub_field('heading'); ?></h2>
									</div>
									
									<?php if (get_sub_field('faq_box')): ?>
									<div class="faq-inner">
										<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
											
											<?php $_class=0; while (have_rows('faq_box')): the_row(); $_class++; ?>
											
											<div class="panel panel-default">
												<div class="panel-heading" role="tab" id="headingOne">
												  <h4 class="panel-title">
													<a role="button" data-toggle="collapse" data-parent="#accordion" href="#collapseOne_<?php echo $_class; ?>" aria-expanded="true" aria-controls="collapseOne_<?php echo $_class; ?>">
													  <?php echo get_sub_field('question'); ?>
													</a>
												  </h4>
												</div>
												<div id="collapseOne_<?php echo $_class; ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="headingOne">
												  <div class="panel-body">
													<?php echo get_sub_field('answer'); ?>
												  </div>
												</div>
											</div>
											<?php endwhile; ?>
										</div>
									</div>
									
									<?php endif; ?>
									
									<div class="btn-box text-center">
										<h4><?php echo get_sub_field('button_heading'); ?></h4>
										<?php if (have_rows('button_area')): ?>
										<?php $or=0;while (have_rows('button_area')): the_row(); $or++; ?>
										
											<a class="<?php echo get_sub_field('button_class'); ?>" href='<?php echo !empty(get_sub_field('button_url')) ? get_sub_field('button_url') : "javascript:void(0)"; ?>'>
												<?php echo get_sub_field('button_title'); ?>
											</a>
											
										<?php endwhile; ?>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</section>
					<!--faq end-->
				<?php endwhile; ?>
			<?php endif; ?>
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
    
<?php
get_footer();