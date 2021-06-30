<?php
/**
* Template Name: Home Page
 */

get_header(); ?>
<main id="main" class="homepage" role="main">
<?php if (have_rows('home_banner')): ?>	
<?php while (have_rows('home_banner')): the_row(); ?>

    <?php $banner_image = get_sub_field('banner_image'); ?>

<?php if (have_rows('inner_sections')): ?>
<?php while (have_rows('inner_sections')): the_row(); ?>
    
<section class="home-banner" style="background-image: url(<?php echo $banner_image; ?>);">
		
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-7">
                    
                    <?php if (have_rows('left_section')): ?>
					<?php while (have_rows('left_section')): the_row(); ?>
                    <div class="banner-inner">
                        
                        <?php if (have_rows('title_section')): ?>
							<?php while (have_rows('title_section')): the_row(); ?>
													<<?php echo get_sub_field('content_tag'); ?>><?php echo get_sub_field('content'); ?></<?php echo get_sub_field('content_tag'); ?>>
							<?php endwhile; ?>
							<?php endif; ?>

                         <div class="btn-box">
											<a class="ctabtn" href="<?php echo get_theme_mod( "mytheme_site-button_link" ); ?>"><?php echo get_theme_mod( "mytheme_site-button_title" ); ?>
											</a>
											<span class="or"></span>										
											<a class="phonebtn" href="<?php echo get_theme_mod( "mytheme_site-button_phonelink" ); ?>"><?php echo get_theme_mod( "mytheme_site-button_phone" ); ?>
											</a>						
				        </div>
                        
                    </div>
                    <?php endwhile; ?>
					<?php endif; ?>	
                </div>
                <div class="col-md-5 homevideo">
                    <?php echo get_sub_field('video_section'); ?>
                </div>    
            </div>
        </div>
    
</section>
<?php endwhile; ?>
<?php endif; ?>


 <?php if (have_rows('banner_bottom')): ?>	
<section class="banner-count">
            <div class="countrow">
                <div class="row">
             
                <?php $col=0;while(have_rows('banner_bottom')):$col++; the_row(); ?>
                            <?php $iconimg = get_sub_field('icon'); ?>
                    <div class="col-md-3 box-<?php echo $col; ?>">                        
                                <h3><?php echo '<img src="'. esc_url($iconimg['url']) . '" alt="' . esc_attr($iconimg['alt']) . '">' ?><?php echo get_sub_field('text'); ?></h3>        
                    </div>
            <?php endwhile; ?>
                   
                </div>
            </div>
        </section>

<?php endif; ?>  


<?php endwhile; ?>
<?php endif; ?>


<section class="tabsboxes">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div class="boxhead">
                        <?php if (have_rows('services_heading')): ?>
							<?php while (have_rows('services_heading')): the_row(); ?>
													<<?php echo get_sub_field('heading_tag'); ?>><?php echo get_sub_field('heading_text'); ?></<?php echo get_sub_field('heading_tag'); ?>>
							<?php endwhile; ?>
							<?php endif; ?>
                    </div>
                </div>
                <div class="col-md-5">
                    <div id="tababsbtn">
                        <a href="javascript:;" class="tabbtn tab-active btnleft">By service</a><a href="javascript:;" class="tabbtn btnright">By room</a>
                    </div>
                </div>
            </div>
            <div class="tab tabone box-active">
            <div class="row">
                 <?php if (have_rows('serviceblock')): ?>	
                        <?php $tab1=0;while(have_rows('serviceblock')):$tab1++; the_row(); ?>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box">
                    <a class="heading-link" href="<?php echo get_sub_field('block_url'); ?>" target="_self">

                        <?php $bi1 = get_sub_field('block_ic'); ?>
                                <?php echo '<img src="'. esc_url($bi1['url']) . '" alt="' . esc_attr($bi1['alt']) . '">' ?>
                        <h3><?php echo get_sub_field('block_title'); ?></h3></a>
                    <p><?php echo get_sub_field('block_text'); ?></p>
                    <a class="read-more" href="<?php echo get_sub_field('block_url'); ?>">Learn More</a>
                        </div>
                </div>
                         <?php endwhile; ?>
                    <?php endif; ?>
                    

            </div>
            </div>
            <div class="tab tabtwo">
            <div class="row">
                <?php if (have_rows('roomblock')): ?>	
                        <?php $tab2=0;while(have_rows('roomblock')):$tab2++; the_row(); ?>
                <div class="col-md-4 col-sm-6">
                    <div class="service-box">
                    <a class="heading-link" href="<?php echo get_sub_field('block_url'); ?>" target="_self">
                        <?php $bi = get_sub_field('block_icon'); ?>
                                <?php echo '<img src="'. esc_url($bi['url']) . '" alt="' . esc_attr($bi['alt']) . '">' ?>
                        <h3><?php echo get_sub_field('block_title'); ?></h3></a>
                    <p><?php echo get_sub_field('block_text'); ?></p>
                    <a class="read-more" href="<?php echo get_sub_field('block_url'); ?>">Learn More</a>
                        </div>
                </div>
                         <?php endwhile; ?>
                    <?php endif; ?>

            </div>
            </div>
       
            
        </div>
    </section>
<section class="newlist">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6">
                    <?php dynamic_sidebar( 'service-menu-1' ); ?> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <?php dynamic_sidebar( 'service-menu-2' ); ?> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <?php dynamic_sidebar( 'service-menu-3' ); ?> 
                </div>
                <div class="col-md-3 col-sm-6">
                    <?php dynamic_sidebar( 'service-menu-4' ); ?> 
                </div>

            </div>
            </div> 
            
</section>
    <section class="cms-clients">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3><?php echo get_field('client_heading'); ?></h3>
                     <?php if (have_rows('client_logo')): ?>	
                    <ul class="pplogo">
                        <?php $logo=0;while(have_rows('client_logo')):$logo++; the_row(); ?>
                        <li>
<?php $logoimg = get_sub_field('logoimg'); ?>
                                <?php echo '<img src="'. esc_url($logoimg['url']) . '" alt="' . esc_attr($logoimg['alt']) . '">' ?>
                        </li>
 <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>
    
    <section class="cms-cta" style="background-image: url(<?php echo get_field('cta_image'); ?>);">
		<div class="container">
            <div class="row">
                <div class="col-md-12">
                       <?php if (have_rows('cta_head')): ?>
							<?php while (have_rows('cta_head')): the_row(); ?>
													<<?php echo get_sub_field('head_tag'); ?>><?php echo get_sub_field('head_text'); ?></<?php echo get_sub_field('head_tag'); ?>>
							<?php endwhile; ?>
							<?php endif; ?>

                         <div class="btn-box">
											<a class="ctabtn" href="<?php echo get_theme_mod( "mytheme_site-button_link" ); ?>"><?php echo get_theme_mod( "mytheme_site-button_title" ); ?>
											</a>
											<span class="or"></span>										
											<a class="phonebtn" href="<?php echo get_theme_mod( "mytheme_site-button_phonelink" ); ?>"><?php echo get_theme_mod( "mytheme_site-button_phone" ); ?>
											</a>						
				        </div>
                </div>
                 
            </div>
        </div>
	</section>

    <section class="cms-firm">
        <div class="container">
            <h2><?php echo get_field('ba_heading'); ?></h2>
            <div class="row">
                <div class="col-md-6">
                    
                    <?php echo get_field('ba_content'); ?>
                    
                    <?php $ba_btn = get_field('ba_button');?>
<a class="ctabtn bluebg" href="<?php echo $ba_btn['url']; ?>"><?php echo $ba_btn['title']; ?></a>
                    </div>
                <div class="col-md-6">
                    <div class="beforeafter">
                    <?php echo get_field('ba_plugin'); ?>
                    </div>                    
                </div>
            </div>
        </div>
    </section>

<?php if (have_rows('content_block')): ?>	

 
    <section id="ctacontent" class="cms-home stickycontainer">
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-3">
                    <div class="floatcta">
                    <div class="ctatel">
											<a class="ctabtn" href="<?php echo get_theme_mod( "mytheme_site-button_link" ); ?>"><?php echo get_theme_mod( "mytheme_site-button_title" ); ?>
											</a>
											<span class="or"></span>										
											<a class="phonebtn" href="<?php echo get_theme_mod( "mytheme_site-button_phonelink" ); ?>"><?php echo get_theme_mod( "mytheme_site-button_phone" ); ?>
											</a>						
				        </div>
                    </div>

                </div>
                <div class="col-md-9 textrow">
                    <?php $row=0;while(have_rows('content_block')):$row++; the_row(); ?>
                    <div class="textblock block-<?php echo $row; ?>">
                        <h2><b><?php echo get_sub_field('section_heading'); ?></b></h2>
                        <?php echo get_sub_field('section_content_top'); ?> 
                    <?php if (have_rows('imagehead')): ?>	
<?php while (have_rows('imagehead')): the_row(); ?>   
                        <?php $chkemp = get_sub_field('image_heading'); 
                            if(!empty($chkemp)) { ?>
                        <div class="imghead">
                            <h3><?php echo get_sub_field('image_heading'); ?></h3>
                            <p><?php $secimg = get_sub_field('section_image'); ?>
                                <?php echo '<img src="'. esc_url($secimg['url']) . '" alt="' . esc_attr($secimg['alt']) . '">' ?></p>
                        </div>
                        <?php } ?> 
                        <?php endwhile; ?>
<?php endif; ?>
                        <?php echo get_sub_field('section_content_bottom'); ?>
                    </div> 
                    
                    <?php endwhile; ?>	
                </div>
            </div>
        </div>
    </section>

  
<?php endif; ?>      
<?php if (have_rows('reviewslides')): ?>	
    <section class="cms-reviews" style="background:url(<?php echo get_field('reviewimg'); ?>)">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    
                    <h2>Our Home Owners Say</h2>
                       
                    <div class="testimonial-inner">
                        <div class="testimonial slider">
                            
        <?php $rev=0;while(have_rows('reviewslides')):$rev++; the_row(); ?>
                           
                             <div class="testi-box">
                                   <div class="reviewbox review-<?php echo $rev; ?>">
											<blockquote><q>
                                                <img class="aligncenter" src="/wp-content/uploads/2021/01/stars.png" alt="5 Star Rating"><br>
                                                <?php echo get_sub_field('reviewtext'); ?> 
                                                </q></blockquote>
                    <div class="author"><?php echo get_sub_field('review_author'); ?>, <a href="#" target="_self">View Google Reviews</a></div>
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

    </main>
	
<script type="text/javascript">
jQuery(document).ready(function(){
  
  jQuery('.btnleft').on('click',function(){		    		
		    		jQuery('.btnright').removeClass('tab-active');
					jQuery('.btnleft').addClass('tab-active');
		    		jQuery('.tabtwo').hide(); 
		    		jQuery('.tabone').show();
		    		jQuery('.tabtwo').removeClass('box-active');
		    		jQuery('.tabone').addClass('box-active');				
		    	});
  jQuery('.btnright').on('click',function(){
		    		jQuery('.btnleft').removeClass('tab-active');
					jQuery('.btnright').addClass('tab-active');
		    		jQuery('.tabone').hide();
		    		jQuery('.tabtwo').show();
		    		jQuery('.tabone').removeClass('box-active');
		    		jQuery('.tabtwo').addClass('box-active');					
		    	});

  
  });
</script>

<?php
get_footer();
