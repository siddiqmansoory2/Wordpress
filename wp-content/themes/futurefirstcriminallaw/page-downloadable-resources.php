<?php get_header(); ?>

<main id="primary" class="site-main">
<section class="cms-banner"></section>



    
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
</main>
	
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
<?php get_footer(); ?>
