<?php
/* Template Name: Service Area*/  

get_header(); 
global $variable ;
while ( have_posts() ) : the_post(); 
$feat_image_slider_list = wp_get_attachment_url( get_post_thumbnail_id(get_the_ID()) ); 
?>

<section class="section breadcrumb-wrapper" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images' ?>/banner.png);">
	  <div class="shell">
		  <h1><?php the_title(); ?></h1>
	  </div>
  </section>
  
<section class="inner-service-area part2 pt-5 pb-5">
	<div class="container">
		<div class="area-point">
                <ul>

                <?php  $m=1;
                $service_list = array( 'post_type' => array('service-area'), 'order_by' => 'id', 'order' => 'ASC', 'posts_per_page'   => -1 );
                      $posts_service_list =  get_posts( $service_list );
        
                foreach( $posts_service_list as $servicesnew_list)                      
                { 
                    $featmageServic = wp_get_attachment_url( get_post_thumbnail_id($servicesnew_list->ID) ); 
                    
                ?>

                <li>
                    <a href="<?php echo get_the_permalink($servicesnew_list->ID); ?>" class="more">
                       <span><?php echo get_post_field('post_title',$servicesnew_list->ID); ?></span>
                     </a>
                </li>
                    
                <?php $m++; } ?>

                </ul>
            </div>
	</div>    
</section> 

<?php 
endwhile;
get_footer();?>