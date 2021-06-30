<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Metroid
 */

?>
<section class="cms-banner"></section>


	<section class="cms-innercontent">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header">
                        <h1><?php the_title(); ?></h1>
                    </div>
                </div>
            </div>
			
			<div class="row">
                <div class="col-md-12">
                    <?php the_content(); ?>
                </div>
            </div>
			
        </div>
    </section>
    