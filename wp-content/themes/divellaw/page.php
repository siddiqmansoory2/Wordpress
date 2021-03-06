<?php get_header(); ?>

  <div class="container-responsive mt-5 <?php if (!is_page([12, 14, 473, 149])) { ?> page-border<?php } ?>">
	  <div class="row mb-3">
	    <div class="col-sm">
	      <div id="content" role="main">
	        <?php get_template_part('loops/page-content'); ?>
	      </div><!-- /#content -->
	    </div>
	    <?//php get_sidebar(); ?>
	  </div><!-- /.row -->
	</div><!-- /.container-responsive -->

	<?php if (is_page([12, 14, 473, 149])) {
		get_template_part('theme/includes/downloadable-resources-cta');
	} ?>

<?php get_footer(); ?>
