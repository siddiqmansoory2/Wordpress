<?php
/**
* Template Name: Landing Page
 */

get_header(); ?>

<?php if (have_rows('banner')): ?>	
<?php while (have_rows('banner')): the_row(); ?>

    <?php $banner_image = get_sub_field('banner_image'); ?>

<?php if (have_rows('inner_sections')): ?>
<?php while (have_rows('inner_sections')): the_row(); ?>
    
<section class="cms-banner" style="background-image: url(<?php echo $banner_image; ?>);">
		
        <div class="container">
            <div class="row d-flex">
                <div class="col-md-7 col-sm-8">
                    
                    <?php if (have_rows('left_section')): ?>
					<?php while (have_rows('left_section')): the_row(); ?>
                    <div class="banner-inner">
                        
                        <?php if (have_rows('title_section')): ?>
							<?php while (have_rows('title_section')): the_row(); ?>
													<<?php echo get_sub_field('content_tag'); ?>><?php echo get_sub_field('content'); ?></<?php echo get_sub_field('content_tag'); ?>>
							<?php endwhile; ?>
							<?php endif; ?>

                         <div class="btn-box">
											<a class="theme-btn" href="<?php echo get_theme_mod( "mytheme_site-button_link" ); ?>"><?php echo get_theme_mod( "mytheme_site-button_title" ); ?>
											</a>
											<span class="or"></span>										
											<a class="theme-btn phonebtn" href="<?php echo get_theme_mod( "mytheme_site-button_phonelink" ); ?>"><?php echo get_theme_mod( "mytheme_site-button_phone" ); ?>
											</a>						
				        </div>
                        
                    </div>
                    <?php endwhile; ?>
					<?php endif; ?>	
                </div>
            </div>
        </div>
    
</section>
<?php endwhile; ?>
<?php endif; ?>


<?php if (have_rows('banner_bottom')): ?>
<?php while (have_rows('banner_bottom')): the_row(); ?>	
		<section class="banner-bottom">
						<div class="container">
							<div class="row">
								<div class="col-md-6" >					
                                    <h2><?php echo get_sub_field('heading'); ?></h2>
                                    </div>
                                    <div class="col-md-6 videobox" >
                                        <div class="bordshad" >
                                       <div class="video-shortcode"> 
                                        <?php echo get_sub_field('video'); ?>
                                    </div></div></div>
                                </div>
                            <div class="row">
                                <?php $midcol = get_sub_field('center_text'); 
                            if(empty($midcol)) { ?>
								<div class="col-md-6 halfcol" >					
                                       <?php echo get_sub_field('left_text'); ?>
                                    </div>
                                    <div class="col-md-6 halfcol" >
                                        <?php echo get_sub_field('right_text'); ?>
                                </div>
                               <?php } else { ?> 
                                <div class="col-md-4 thirdcol" >					
                                       <?php echo get_sub_field('left_text'); ?>
                                    </div>
                                <div class="col-md-4 thirdcol" >
                                        <?php echo get_sub_field('center_text'); ?>
                                </div> 
                                    <div class="col-md-4 thirdcol" >
                                        <?php echo get_sub_field('right_text'); ?>
                                </div>                                
                                <?php } ?> 
                                
                                </div>
								</div>
					</section>
<?php endwhile; ?>
<?php endif; ?>


<?php endwhile; ?>
<?php endif; ?>


<?php if (have_rows('content_block')): ?>	
<section class="cms-content">
<div class="container">
<div class="row">
<div class="col-md-3 sidebar">
    <div class="stickycol">
        <div class="stickybox">
            <div class="anchorbox"> 
    <?php $content_sections = get_field('content_block');
	 if($content_sections!=''){ $i = 0;?>
     <ul>
      <?php foreach ($content_sections as $content_section): $i++; ?>
      <?php $section_heading = $content_section['section_heading'];
	  if($section_heading!=''){?>
       <li><a href="<?=get_the_permalink()?>#sec_<?=$i?>"><?php echo $section_heading; ?></a></li>
      <?php }?>
     <?php endforeach ?>
    </ul>
    <?php }?>              
</div>
</div>
</div>
</div>
<div class="col-md-9">
<?php $row=0;while(have_rows('content_block')):$row++; the_row(); ?>

<div id="sec_<?php echo $row;?>" class="section sec-<?php echo $row; ?>">
    <?php $secimg = get_sub_field('featured_image'); ?>
    <div class="headsection" style="background-image:url(<?php echo esc_url($secimg['url']); ?>)">
        <h2><?php echo get_sub_field('section_heading'); ?></h2>
        <div class="imgcol"><?php echo '<img src="'. esc_url($secimg['url']) . '" alt="' . esc_attr($secimg['alt']) . '">' ?></div>
    </div>
    <div class="contentsection">
    <?php echo get_sub_field('section_content'); ?>
    </div>
    
    <?php if (have_rows('cta_block')): ?>
<?php while (have_rows('cta_block')): the_row(); ?>	
     <div class="bottomsection <?php echo get_sub_field('cta_class'); ?>">
        <?php 
        $iconimg = get_sub_field('cta_image'); if($iconimg!='') {
        echo '<img src="'. esc_url($iconimg['url']) . '" alt="' . esc_attr($iconimg['alt']) . '">'; } ?>
        <?php  
        $ctatext =get_sub_field('cta_text');
         if($ctatext!=''){ ?>
            <h3><?php echo get_sub_field('cta_text');?> </h3>
        <?php   }?>
        
         <?php $link_btn = get_sub_field('cta_button'); if($link_btn!=''){ ?>
<a class="theme-btn" href="<?php echo $link_btn['url']; ?>"><?php echo $link_btn['title']; ?></a>
         <?php   }?>
      </div>  
<?php endwhile; ?>	        
 <?php endif; ?>   
    
           
</div>

<?php endwhile; ?>	
</div>
</div>
</div>    
</section>
<?php endif; ?>
	
<section class="cms-bottom">
<div class="container">

<?php dynamic_sidebar( 'content-bottom' ); ?> 

	 <div class="bottombtn">
         <h2><?php echo get_field('bottom_heading');?></h2>
				<a class="theme-btn" href="<?php echo get_theme_mod( "mytheme_site-button_link" ); ?>"><?php echo get_theme_mod( "mytheme_site-button_title" ); ?>
				</a>
					<span class="or"></span>										
				<a class="theme-btn phonebtn" href="<?php echo get_theme_mod( "mytheme_site-button_phonelink" ); ?>"><?php echo get_theme_mod( "mytheme_site-button_phone" ); ?>
				</a>						
     </div>


</div>    
</section>
	

<?php
get_footer();
