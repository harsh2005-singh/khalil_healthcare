<?php
/*
Template Name: Services
*/
get_header();
$feat_image_slider_list = wp_get_attachment_url( get_post_thumbnail_id() ); 
?>

<section class="section breadcrumb-wrapper" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images' ?>/inner-banner.webp);">
	  <div class="shell">
		  <h1><?php the_title(); ?></h1>
	  </div>
  </section>

<section class="service-offered-wrap">
        <div class="container">

            <div class="row justify-content-center">

            <?php  $m=1;
                $service_list = array( 'post_type' => array('service'), 'order_by' => 'id', 'order' => 'ASC', 'posts_per_page'   => -1 );
                      $posts_service_list =  get_posts( $service_list );
        
                foreach( $posts_service_list as $servicesnew_list)                      
                { 
                    $featmageServic = wp_get_attachment_url( get_post_thumbnail_id($servicesnew_list->ID) ); 
                    
                ?>

                <div class="col-md-4">

                    <div class="content">
                        <div class="content-img">
                            <img src="<?php echo $featmageServic; ?>" alt="">
                        </div>
                        <div class="content-bx">
                            <h4><?php echo get_post_field('post_title',$servicesnew_list->ID); ?></h4>
                            <a class="more" data-text="Read More" href="<?php echo get_the_permalink($servicesnew_list->ID); ?>"><span>Read More</span></a>
                        </div>
                    </div>

                </div>
                
                <?php $m++; } ?>

            </div>

        </div>
    </section>

<?php get_footer(); ?>