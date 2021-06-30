<?php
/**
* Template Name: About Page
 */

get_header(); ?>

<?php if (have_rows('banner')): ?>	
<?php while (have_rows('banner')): the_row(); ?>

    <?php $banner_image = get_sub_field('banner_image'); ?>
<section class="bannerimg" style="background-image: url(<?php echo $banner_image; ?>);">
   <div class="container"> <h1><?php echo get_sub_field('heading1'); ?></h1>
    </div>
</section> 
<?php if (have_rows('inner_sections')): ?>
<?php while (have_rows('inner_sections')): the_row(); ?>
   
<section class="yellowcta">

        <div class="container text-center">

                    <?php if (have_rows('left_section')): ?>
					<?php while (have_rows('left_section')): the_row(); ?>
                
                        
                        <?php if (have_rows('title_section')): ?>
							<?php while (have_rows('title_section')): the_row(); ?>
													<<?php echo get_sub_field('content_tag'); ?>><?php echo get_sub_field('content'); ?></<?php echo get_sub_field('content_tag'); ?>>
							<?php endwhile; ?>
							<?php endif; ?>

                         <div class="btn-ctabox">
											<a class="theme-btn" href="<?php echo get_theme_mod( "mytheme_site-button_link" ); ?>"><?php echo get_theme_mod( "mytheme_site-button_title" ); ?>
											</a>				
				      
                        
                    </div>
                    <?php endwhile; ?>
					<?php endif; ?>	
        </div>
    
</section>
<?php endwhile; ?>
<?php endif; ?>


<?php if (have_rows('banner_bottom')): ?>
<?php while (have_rows('banner_bottom')): the_row(); ?>	
		<section class="content-top">
						<div class="container">
						
                <div class="headtext text-center">				
                                    <h2><?php echo get_sub_field('heading'); ?></h2>
                    <p><?php echo get_sub_field('center_text'); ?></p>
                                    </div>
								</div>
					</section>
<?php endwhile; ?>
<?php endif; ?>


<?php endwhile; ?>
<?php endif; ?>

<div class="big-half-circle">
    <svg class="fusion-big-half-circle-candy" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" style="fill:#ffffff;padding:0;">
        <path d="M0 0 C55 180 100 0 100 0 Z"></path></svg>
</div>

<?php if (have_rows('team')): ?>	
<?php while (have_rows('team')): the_row(); ?>
<section class="team-members">
            <div class="container">
                <div class="headtext text-center">
                <h2><?php echo get_sub_field('team_heading');?></h2>
                 <p><?php echo get_sub_field('team_text'); ?></p>
                </div>
                <div class="row">
            

 <?php if (have_rows('team_profile')): ?>	

                <?php $col=0;while(have_rows('team_profile')):$col++; the_row(); ?>
                            
                    <div class="col-md-4 box-<?php echo $col; ?>">                        
                        <div class="profilepic">
                        <?php $profilepic = get_sub_field('profile_image'); ?>
                                <?php echo '<img src="'. esc_url($profilepic['url']) . '" alt="' . esc_attr($profilepic['alt']) . '">' ?></div>
                        <h3><span class="teamname"><?php echo get_sub_field('profile_name'); ?></span>
                        <span class="teamrole"><?php echo get_sub_field('profile_role'); ?></span></h3>        
                    </div>
            <?php endwhile; ?>
                   
                </div>
            </div>
        </section>

<?php endif; ?>  

<?php endwhile; ?>
<?php endif; ?>

<?php if (have_rows('portfolio')): ?>
<?php while (have_rows('portfolio')): the_row(); ?>	
		<section class="cms-portfolio">
						<div class="container  text-center">
						
                <div class="headtext">				
                                    <h2><?php echo get_sub_field('heading'); ?></h2>
                    <p><?php echo get_sub_field('text'); ?></p>
                                    </div>
								
            
           <div class="projectbtn "> <a class="theme-btn" href="/work/">VIEW ALL PROJECTS
											</a></div></div>
					</section>
<?php endwhile; ?>
<?php endif; ?>
<div class="big-half-circle nobg">
    <svg class="fusion-big-half-circle-candy" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" style="fill:#ffffff;padding:0;">
        <path d="M0 0 C55 180 100 0 100 0 Z"></path></svg>
</div>
<?php if (have_rows('reviewslides')): ?>	
    <section class="cms-reviews" style="background-image:url(<?php echo get_field('review_background'); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center">
                    
                    <h2><?php echo get_field('review_head'); ?></h2>
                       
                    <div class="testimonial-inner">
                        <div class="testimonial slider">
                            
        <?php $rev=0;while(have_rows('reviewslides')):$rev++; the_row(); ?>
                           
                             <div class="testi-box">
                                   <div class="reviewbox review-<?php echo $rev; ?>">
                                       <div class="revpic">
                        <?php $revepic = get_sub_field('review_image'); ?>
                                <?php echo '<img src="'. esc_url($revepic['url']) . '" alt="' . esc_attr($revepic['alt']) . '">' ?></div>
											<blockquote><q>
                                                
                                                <?php echo get_sub_field('reviewtext'); ?> 
                                                </q></blockquote>
                    <div class="author"><?php echo get_sub_field('review_author'); ?></div>
										</div>
										
                                </div>   
                            
                      <?php endwhile; ?>           
    
                        						
					       </div>
                        </div>
                    </div>     
            </div>
        </div>
    </section>
<?php endif; ?>  
	<div class="big-half-circle nobg shapebottom" style="padding:0;"><svg class="fusion-big-half-circle-candy" xmlns="http://www.w3.org/2000/svg" version="1.1" width="100%" height="100" viewBox="0 0 100 100" preserveAspectRatio="none" style="fill:#f5f5f5;padding:0;"><path d="M0 100 C40 0 60 0 100 100 Z"></path></svg></div>

<?php
get_footer();
