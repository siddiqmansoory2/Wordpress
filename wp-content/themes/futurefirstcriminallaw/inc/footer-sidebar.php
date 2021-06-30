<?php
function my_custom_sidebar() {

    register_sidebar(
        array (
            'name' => __( 'Footer 1', 'futurefirstcriminallaw' ),
            'id' => 'footer-1',
            'description' => __( 'Custom Footer Sidebar For Footer Area', 'futurefirstcriminallaw' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );

     register_sidebar(
        array (
            'name' => __( 'Footer 2', 'futurefirstcriminallaw' ),
            'id' => 'footer-2',
            'description' => __( 'Custom Footer Sidebar For Footer Area', 'futurefirstcriminallaw' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );

      register_sidebar(
        array (
            'name' => __( 'Footer 3', 'futurefirstcriminallaw' ),
            'id' => 'footer-3',
            'description' => __( 'Custom Footer Sidebar For Footer Area', 'futurefirstcriminallaw' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );

       register_sidebar(
        array (
            'name' => __( 'Footer 4', 'futurefirstcriminallaw' ),
            'id' => 'footer-4',
            'description' => __( 'Custom Footer Sidebar For Footer Area', 'futurefirstcriminallaw' ),
            'before_widget' => '<div class="widget-content">',
            'after_widget' => "</div>",
            'before_title' => '<h3 class="widget-title">',
            'after_title' => '</h3>',
        )
    );
}

add_action( 'widgets_init', 'my_custom_sidebar' );

?>