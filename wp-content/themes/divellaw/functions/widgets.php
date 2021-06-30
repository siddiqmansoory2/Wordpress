<?php
/**!
 * Widgets
 */

function b4st_widgets_init() {

  /*
  Sidebar (one widget area)
   */
  register_sidebar( array(
    'name'            => __( 'Sidebar', 'b4st' ),
    'id'              => 'sidebar-widget-area',
    'description'     => __( 'The sidebar widget area', 'b4st' ),
    'before_widget'   => '<section class="%1$s %2$s">',
    'after_widget'    => '</section>',
    'before_title'    => '<h2 class="h4">',
    'after_title'     => '</h2>',
  ) );
    register_sidebar( array(
    'name'            => __( 'Header 1 (Text)', 'b4st' ),
    'id'              => 'header-widget-1',
    'description'     => __( 'The header widget area', 'b4st' ),
    'before_widget'   => '',
    'after_widget'    => '',
    'before_title'    => '',
    'after_title'     => '',
  ) );
    register_sidebar( array(
    'name'            => __( 'Header 2 (Call)', 'b4st' ),
    'id'              => 'header-widget-2',
    'description'     => __( 'The header widget area', 'b4st' ),
    'before_widget'   => '',
    'after_widget'    => '',
    'before_title'    => '',
    'after_title'     => '',
  ) );
    register_sidebar( array(
    'name'            => __( 'Footer 1 (Address)', 'b4st' ),
    'id'              => 'footer-widget-1',
    'description'     => __( 'The footer widget area', 'b4st' ),
    'before_widget'   => '',
    'after_widget'    => '',
    'before_title'    => '<h3 class="b-title">',
    'after_title'     => '</h3>',
  ) );
    register_sidebar( array(
    'name'            => __( 'Footer 2 (Hours)', 'b4st' ),
    'id'              => 'footer-widget-2',
    'description'     => __( 'The footer widget area', 'b4st' ),
    'before_widget'   => '',
    'after_widget'    => '',
    'before_title'    => '<h3 class="b-title">',
    'after_title'     => '</h3>',
  ) );
    register_sidebar( array(
    'name'            => __( 'Footer 3 (Social)', 'b4st' ),
    'id'              => 'footer-widget-3',
    'description'     => __( 'The footer widget area', 'b4st' ),
    'before_widget'   => '',
    'after_widget'    => '',
    'before_title'    => '<h3 class="b-title">',
    'after_title'     => '</h3>',
  ) );
    register_sidebar( array(
    'name'            => __( 'Footer 4 (Call)', 'b4st' ),
    'id'              => 'footer-widget-4',
    'description'     => __( 'The footer widget area', 'b4st' ),
    'before_widget'   => '',
    'after_widget'    => '',
    'before_title'    => '<h3 class="b-title">',
    'after_title'     => '</h3>',
  ) );
    register_sidebar( array(
    'name'            => __( 'Attorney Bio', 'b4st' ),
    'id'              => 'attorney-bio',
    'description'     => __( 'The Attorney Bio widget area', 'b4st' ),
    'before_widget'   => '',
    'after_widget'    => '',
    'before_title'    => '<h2 class="mt-5 mb-3 hr-line">',
    'after_title'     => '</h2>',
  ) );
    register_sidebar( array(
    'name'            => __( 'Attorney Bio Sidebar', 'b4st' ),
    'id'              => 'attorney-sidebar',
    'description'     => __( 'The Attorney Bio Sidebar widget area', 'b4st' ),
    'before_widget'   => '',
    'after_widget'    => '',
    'before_title'    => '',
    'after_title'     => '',
  ) );
    register_sidebar( array(
    'name'            => __( 'Attorney Bio Bottom', 'b4st' ),
    'id'              => 'attorney-bottom',
    'description'     => __( 'The Attorney Bio Bottom widget area', 'b4st' ),
    'before_widget'   => '',
    'after_widget'    => '',
    'before_title'    => '',
    'after_title'     => '',
  ) );
  /*
  Footer (1, 2, 3, or 4 areas)

  Flexbox `col-sm` gives the correct the column width:

  * If only 1 widget, then this will have full width ...
  * If 2 widgets, then these will each have half width ...
  * If 3 widgets, then these will each have third width ...
  * If 4 widgets, then these will each have quarter width ...
  ... above the Bootstrap `sm` breakpoint.
   */

  register_sidebar( array(
    'name'            => __( 'Footer', 'b4st' ),
    'id'              => 'footer-widget-area',
    'description'     => __( 'The footer widget area', 'b4st' ),
    'before_widget'   => '<div class="%1$s %2$s col-sm">',
    'after_widget'    => '</div>',
    'before_title'    => '<h2 class="h4">',
    'after_title'     => '</h2>',
  ) );

}
add_action( 'widgets_init', 'b4st_widgets_init' );
