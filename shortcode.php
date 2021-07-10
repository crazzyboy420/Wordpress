<?php

function stock_slide_shortcode($atts){
    extract(shortcode_atts( array(
        'count'  => '-1',

    ), $atts ) );
    $q = new WP_Query( array( 'post_type'=> 'slide', 'posts_per_page' => 5, 'orderby' => 'menu_order', 'order' => 'ABS') );

    $list = '<div class="custom-post-list">';
    while( $q-> have_posts()): $q-> the_post();
    $id = get_the_ID();
    $custom_field = get_post_meta( $id, 'custom_field', true );
    $post_content = get_the_content();

    $list .= '
    <div class= "single-post-item">
    <h2>'.do_shortcode( get_title() ).'</h2>
    <p>'.wpautop($post_content).'</p>
    </div>
    ';
    endwhile;
    $list .= '</div>';
    wp_reset_query();
    return $list;


}
add_shortcode( 'stock_slide', 'stock_slide_shortcode' );