<?php 
//Recent Product
$args = array(
    'post_type' => 'product',
    'posts_per_page' => 5,
    'post_status' => 'publish',
    'order' => 'DESC',
    'orderby' => 'ID',
);
//Feature Product 
$meta_query = WC()->query->get_meta_query();
$tax_query = WC()->query->get_tax_query();
$tax_query[] = array(
    'taxonomy' => 'product_visibility',
    'field' => 'name',
    'terms' => 'featured',
    'operator' => 'IN',
);

$args = array(
    'post_type' => 'product',

    'posts_per_page' => 10,
    'meta_query' => $meta_query,
    'tax_query' => $tax_query,
);
//Best Selling Product
$args = array(
    'post_type' => 'product',
    'meta_key' => 'total_sales',
    'orderby' => 'meta_value_num',
    'posts_per_page' => 1,
);
//Sell OR Dell Product
$args = array(
    'post_type' => 'product',
    'meta_query' => array(
        'relation' => 'OR',
        array( // Simple products type
            'key' => '_sale_price',
            'value' => 0,
            'compare' => '>',
            'type' => 'numeric'
        ),
        array( // Variable products type
            'key' => '_min_variation_sale_price',
            'value' => 0,
            'compare' => '>',
            'type' => 'numeric'
        )
    ),
    'posts_per_page' => 5,
);

//Top Rating Product
$args = array(
    'posts_per_page' => 5,
    'post_status' => 'publish',
    'post_type' => 'product',
    'meta_key' => '_wc_average_rating',
    'orderby' => 'meta_value_num',
    'meta_query' => WC()->query->get_meta_query(),
    'tax_query' => WC()->query->get_tax_query(),
);