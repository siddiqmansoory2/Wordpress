<?php
/**
* Template Name: Contact Page
 */

get_header(); ?>
<style>
    .cms-form .gform_wrapper ul.gform_fields li.gfield.col-full {
      width:100%;
    }
    .cms-form .gform_wrapper input:not([type="radio"]):not([type="checkbox"]):not([type="submit"]):not([type="button"]):not([type="image"]):not([type="file"]), .cms-form .gform_wrapper textarea, .cms-form .gform_wrapper select {
        width:100%;
    }
    .cms-form .gform_wrapper {
        margin-bottom:80px
    }
</style>    
<section class="cms-form">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                     <?php
						while ( have_posts() ) : the_post();
							the_content();
						endwhile;
					?>
                </div>
                
            </div>
        </div>
</section>

<?php
get_footer();