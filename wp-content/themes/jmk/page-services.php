<?php
/**
* Template Name: Services Page
 */

get_header(); ?>
<main id="main" class="servicepage" role="main">
<section class="bannerhead" style="background-image: url(<?php echo get_field('service_banner'); ?>);">
            <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="services-heading text-center">
                        <?php if (have_rows('services_heading')): ?>
							<?php while (have_rows('services_heading')): the_row(); ?>
													<<?php echo get_sub_field('heading_tag'); ?>><?php echo get_sub_field('heading_text'); ?></<?php echo get_sub_field('heading_tag'); ?>>
							<?php endwhile; ?>
							<?php endif; ?>
                    </div>
                </div>
                         </div>
                </div>
                
</section>

<section class="tabsboxes">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
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
    
	<?php if (have_rows('services_block')): ?>	
<?php while (have_rows('services_block')): the_row(); ?>
    <section class="service-content">
        <div class="container">
            <h2 class="text-center"><?php echo get_sub_field('heading'); ?></h2>
            <div class="row">
                <div class="col-md-8">
                    <?php echo get_sub_field('content'); ?>
                  
<a class="theme-btn" href="/get-quote/">Get FAST Online Quote</a>
                </div>
                <div class="col-md-4">
                    <?php $sb = get_sub_field('image'); ?>
                                <?php echo '<img src="'. esc_url($sb['url']) . '" alt="' . esc_attr($sb['alt']) . '">' ?>
                </div>
            </div>
        </div>
    </section> 
    
 <?php endwhile; ?>
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
