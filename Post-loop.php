
//Custom Post loop From RRF online
<?php
global $post; 
$args = array( 'post_type'=> 'slide', 'posts_per_page' => 5, 'orderby' => 'menu_order', 'order' => 'ABS'); 
$myposts = get_posts($args); 
foreach($myposts as $post): setup_postdata($post);?>
<?php 
    $btn_text = get_post_meta($post -> ID,'btn_text',true);
    $btn_link = get_post_meta($post -> ID,'btn_link',true);
 ?>
<div style="background-image: url(<?php echo the_post_thumbnail_url('large');?>);" class="homepage-slider">
    <div class="display-table">
        <div class="display-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="slider-content">
                            <h1><?php the_title();?></h1>
                            <?php the_content();?>
                            <a href="<?php echo $btn_link?>"><?php echo $btn_text?><i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endforeach; wp_reset_query(); ?>




//custom Post From Rasel
<?php
$loop = new WP_Query( array( 'post_type'=> 'slide', 'posts_per_page' => 5, 'orderby' => 'menu_order', 'order' => 'ABS') ); ?>
<?php while ( $loop->have_posts() ) : $loop->the_post(); ?>
<?php 
    $btn_text = get_post_meta($post -> ID,'btn_text',true);
    $btn_link = get_post_meta($post -> ID,'btn_link',true);
 ?>
 <div style="background-image: url(<?php echo the_post_thumbnail_url('large');?>);" class="homepage-slider">
    <div class="display-table">
        <div class="display-table-cell">
            <div class="container">
                <div class="row">
                    <div class="col-sm-7">
                        <div class="slider-content">
                            <h1><?php the_title();?></h1>
                            <?php the_content();?>
                            <a href="<?php echo $btn_link?>"><?php echo $btn_text?><i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php endwhile; wp_reset_query(); ?>
?>