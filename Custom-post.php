<?php

//Registering Custom post
function prefix_register_name() {
    register_post_type( 'slug', 
         array(
        'labels'              =>  array(
            'name'               => __( 'Plural Name'),
            'singular_name'      => __( 'Singular Name' ),
        );
        'supports'            => array('title','editor','thumbnail','custom-fields','page-attributes',),
    );

     );
}

add_action( 'init', 'prefix_register_name' );
?>