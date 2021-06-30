<div id="header">
	<div id="topbar">
		<div class="container">
			<div class="row">
				
				<div class="col-lg-3 col-12 my-3">
					<div class="logo text-lg-left text-center">
						<?php the_custom_logo( $blog_id ); ?>
					</div>
				</div>
                <div class="col-lg-3 col-12 my-auto">
					
				</div>
				<div class="col-lg col-12 my-auto">
					<div class="help">
                        <?php dynamic_sidebar('header-widget-1'); ?>
					</div>
				</div>
				<div class="col-lg col-12 my-auto text-center">
					<div class="phone">
                        <?php dynamic_sidebar('header-widget-2'); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="navbarbar">
		<?php
			        wp_nav_menu( array(
			          'theme_location'  => 'navbar',
			          'container'       => false,
			          'menu_class'      => '',
			          'fallback_cb'     => '__return_false',
			          'items_wrap'      => '<ul id="%1$s" class="navbar-nav mr-auto mt-2 mt-lg-0 %2$s">%3$s</ul>',
			          'depth'           => 2,
			          'walker'          => new b4st_walker_nav_menu()
			        ) );
			      ?>
	</div>
</div>
