<?php get_header(); ?>

<section id="main">
	<div class="container pb-5 border-bottom">
		<header class="mb-4 mt-5 border-bottom">
			<h1>
				<?php echo get_field('heading'); ?>
			</h1>
		</header>
		<div class="row ">
			<div class="col-lg-6 mt-5">
				<!-- Vertical Form -->
				<div class="form-wrapper">
                    <?php echo get_field('form'); ?>
				</div>
			</div>

			<div class="col-12 col-lg-6">
				<div class="card mb-3 mt-5">
					<div class="card-body">
                        <?php echo get_field('address'); ?>
						
					</div>
				</div>
				<div class="card">
					<div class="card-body">
                        <?php echo get_field('map'); ?>
					</div>
				</div>
			</div>
		</div>
				<div class="row">
			<div class="col-lg-12">
				<h2 class="my-5 h1 border-bottom">
                    <?php echo get_field('calendarheading'); ?>
				</h2>
			</div>
			<div class="col-lg-6">
				<?php echo get_field('calendar'); ?>
			</div>
			<div class="col-lg-6 text-center my-auto contact-portret" style="margin:0 auto 30px !important;display:flex;align-items:center">
                <?php echo get_field('team'); ?>
			</div>
		</div>
		<div class="row">
			<div class="col-lg-12">
                <?php echo get_field('map360'); ?>
		</div>
		</div>
	</div>
	<!-- /.row -->
	<!-- /.container -->
</section>

<?php get_template_part('theme/includes/vp'); ?>

<?php get_template_part('theme/includes/contact'); ?>

<?php get_footer(); ?>
