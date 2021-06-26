<?php

//Registering Custom post
function neuron_theme_custom_post() {
    register_post_type( 'slide', 
         array(
        'labels'              =>  array(
            'name'               => __( 'slides'),
            'singular_name'      => __( 'slide' ),
        ),
        'supports'            => array('title','editor','thumbnail','custom-fields','page-attributes'),
        'public'              => false,
        'show_ui'             => true,
        ),

     );
}

add_action( 'init', 'neuron_theme_custom_post' );

?>
