<?php get_header(); ?>

<div class="container-responsive mt-5">
  <div class="row">
   <div class="col-lg-12">
   	<header class="mb-4 mt-5 border-bottom">
			<h1>
				Blog
			</h1>
		</header>
   </div>
    <div class="col-sm">
      <div id="content" role="main">
        <?php get_template_part('loops/index-loop'); ?>
      </div><!-- /#content -->
    </div>

    <?//php get_sidebar(); ?>

  </div><!-- /.row -->
</div><!-- /.container-responsive -->

<?php get_footer(); ?>
