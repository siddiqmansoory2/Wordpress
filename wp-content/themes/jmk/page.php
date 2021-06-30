<?php
get_header();
?>


    <section class="cms-content">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="contentsection">

                        <?php
						while ( have_posts() ) : the_post();
                      the_title( '<h1 class="default-title">', '</h1>' );
							the_content();
						endwhile;
					?>
                    </div>
                </div>

            </div>
        </div>
    </section>
<?php
get_footer();