<div id="copyright">
      <div class="container-responsive">

  

    <div class="row pt-3">
      <div class="col">
        <div class="row">
            <div class="col-md-12 text-center">
                <p>Copyright &copy;
                    <a href="<?php echo home_url('/'); ?>" title="<?php bloginfo('name'); ?>">
                        <?php bloginfo('name'); ?></a>
                        <?php echo date('Y'); ?> All Rights Reserved. | <a href="<?php the_permalink('408'); ?>" title="Site Map">Site Map</a>
                </p>
            </div>
         
        </div>
      </div>
    </div>
  <?php if(is_active_sidebar('footer-widget-area')): ?>
    <div class="row border-bottom pt-5 pb-4" id="footer" role="navigation">
      <?php dynamic_sidebar('footer-widget-area'); ?>
    </div>
    <?php endif; ?>
  </div>
</div>
