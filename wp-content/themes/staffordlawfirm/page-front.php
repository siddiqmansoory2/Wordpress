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

	<!--header end-->
	<!--banner start-->
	
	<?php if (have_rows('banner_section')): ?>	
		<?php while (have_rows('banner_section')): the_row(); ?>
			<?php if (get_sub_field('enable')): ?>
				
			<section class="cms-banner" style="background-image: url(<?php echo get_sub_field('background_image'); ?>);">
				<div class="container">
					<div class="row">
						<div class="col-md-6">
							<div class="banner-inner">
								<h1><?php echo get_sub_field('banner_title'); ?></h1>
								<p><?php echo get_sub_field('banner_content'); ?></p>
								
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
						<div class="col-md-6">
							<div class="attorney">
								<div class="attorney-img">
									<img src="<?php echo get_sub_field('banner_image'); ?>" alt="">
									<a class="icon video-btn" href="jascript:void(0)" data-toggle="modal" data-src="<?php echo get_sub_field('popup_video'); ?>" data-target="#myModal">
										<img src="<?php echo get_template_directory_uri(); ?>/html/images/play-icon.png" alt="">
									</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</section>
			<?php endif; ?>
			
			<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModal" aria-hidden="true">
				<div class="modal-dialog">
					<div class="modal-content">
						<div class="modal-header">
							<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
							<h4 class="modal-title" id="myModalLabel"><?php echo get_sub_field('banner_title'); ?></h4>
						</div>
						<div class="modal-body">
							<div class="embed-responsive embed-responsive-16by9">
								<iframe class="embed-responsive-item" src="<?php echo get_sub_field('popup_video'); ?>" id="video"  allowscriptaccess="always" allow="autoplay"></iframe>
							</div>
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
						</div>
					</div>
				</div>
			</div>
			
			
		<?php endwhile; ?>
	<?php endif; ?>
	
	
	<?php if (have_rows('help_section')): ?>	
		<?php while (have_rows('help_section')): the_row(); ?>
			<?php if (get_sub_field('enable')): ?>
				
			<section class="cms-help" style="background-image: url(<?php echo get_sub_field('background_image'); ?>);">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="title-block text-center">
								<h2><?php echo get_sub_field('help_title'); ?></h2>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-7">
							<div class="help-ltf">
								<div class="author-img">
									<img src="<?php echo get_sub_field('help_image'); ?>" alt="" />
								</div>
							</div>
						</div>
						<div class="col-md-5">
							<div class="help-content">
								<?php echo get_sub_field('help_content'); ?>
							</div>
						</div>
					</div>
					<div class="row">
						<div class="col-md-9 col-md-offset-3">
							<div class="help-bottom">
								<div class="bottom-ltf">
									<div class="author-box">
										<div class="author-meta">
											<h2><?php echo get_sub_field('author'); ?></h2>
											<h3><?php echo get_sub_field('author_position'); ?></h3>
										</div>
										<div class="singature">
											<img src="<?php echo get_sub_field('author_signature'); ?>" alt="" />
										</div>
									</div>
								</div>
								<div class="bottom-rtf">
									<p class="blue-txt"><?php echo get_sub_field('author_description'); ?></p>
								</div>
							</div>
							<div class="help-bottom">
								<div class="bottom-ltf">
									<p><?php echo get_sub_field('bottom_left_text'); ?></p>
								</div>
								<div class="bottom-rtf">
									<p><?php echo get_sub_field('bottom_right_text'); ?></p>
								</div>
							</div>
							<div class="help-bottom">
							
							<?php if (have_rows('button_area')): ?>	
								<?php while (have_rows('button_area')): the_row(); ?>
							
								<div class="bottom-ltf">
									<a class="<?php echo get_sub_field('button_class'); ?>" href="<?php echo !empty(get_sub_field('button_url')) ? get_sub_field('button_url') : "javascript:void(0)"; ?>"><?php echo get_sub_field('button_title'); ?></a>
								</div>
								
								<?php endwhile; ?>
							<?php endif; ?>
								
							<?php if (have_rows('right_button_area')): ?>	
								<?php while (have_rows('right_button_area')): the_row(); ?>	
								
								<div class="bottom-rtf">
									<a class="<?php echo get_sub_field('button_class'); ?>" href="<?php echo !empty(get_sub_field('button_url')) ? get_sub_field('button_url') : "javascript:void(0)"; ?>"><?php echo get_sub_field('button_title'); ?></a>
								</div>
								
								<?php endwhile; ?>
							<?php endif; ?>
								
							</div>
						</div>
					</div>
				</div>
			</section>
			
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
	
	
	
	<?php if (have_rows('practice_section')): ?>	
		<?php while (have_rows('practice_section')): the_row(); ?>
			<?php if (get_sub_field('enable')): ?>
				
			<section class="cms-practice" style="background-image: url(<?php echo get_sub_field('background_image'); ?>);">
				<div class="container">
					<div class="row">
						<div class="col-md-12">
							<div class="practice-inner">
								<div class="practice">
									<div class="title-block">
										<h2><?php echo get_sub_field('practice_title'); ?></h2>
										<p><?php echo get_sub_field('practice_title'); ?></p>
									</div>
									<div class="plan-inner">
									
									<?php if (have_rows('left_section')): ?>	
										<?php while (have_rows('left_section')): the_row(); ?>
											<div class="planning">
												<div class="plan-box">
													<div class="icon">
														<img src="<?php echo get_sub_field('icon'); ?>" alt="" />
													</div>
													<div class="plan-title"><?php echo get_sub_field('heading'); ?></div>
												</div>
												<?php echo get_sub_field('content'); ?>
												<div class="btn-box">
													<a class="<?php echo get_sub_field('button_class'); ?>" href="<?php echo !empty(get_sub_field('button_url')) ? get_sub_field('button_url') : "javascript:void(0)"; ?>"><?php echo get_sub_field('button_title'); ?></a>
												</div>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
										
									<?php if (have_rows('right_section')): ?>	
										<?php while (have_rows('right_section')): the_row(); ?>
											<div class="planning">
												<div class="plan-box">
													<div class="icon">
														<img src="<?php echo get_sub_field('icon'); ?>" alt="" />
													</div>
													<div class="plan-title"><?php echo get_sub_field('heading'); ?></div>
												</div>
												<?php echo get_sub_field('content'); ?>
												<div class="btn-box">
													<a class="<?php echo get_sub_field('button_class'); ?>" href="<?php echo !empty(get_sub_field('button_url')) ? get_sub_field('button_url') : "javascript:void(0)"; ?>"><?php echo get_sub_field('button_title'); ?></a>
												</div>
											</div>
										<?php endwhile; ?>
									<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			
			</section>
			
			<?php endif; ?>
		<?php endwhile; ?>
	<?php endif; ?>
	
	
	<?php if (have_rows('faq_section')): ?>	
		<?php while (have_rows('faq_section')): the_row(); ?>	
		
		<?php if (get_sub_field('enable')): ?>	
		<!--FAQ section start-->
		<section class="cms-faq" style="background-image: url(<?php echo get_sub_field('background_image'); ?>);">
		
			 <div class="faq-img">
				<img src="<?php echo get_sub_field('faq_image'); ?>" alt="" />
			</div>
					
			<div class="container">
				<div class="row">
					<div class="col-md-7 col-md-offset-5">
						<div class="title-block">
							<h2><?php echo get_sub_field('faq_title'); ?></h2>
						</div>
						<div class="faq-inner">
							<div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
								
								<?php $qna=0;while (have_rows('questions_area')): the_row(); $qna++; ?>
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
			</div>
			
		</section>
		<!--FAQ section end-->
		
		<?php endif; ?>
		<?php endwhile; ?>	
	<?php endif; ?>
	
	
    
<?php
get_footer();