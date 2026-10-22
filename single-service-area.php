<?php

get_header(); 
while ( have_posts() ) : the_post(); 
    $feat_image_slider_list = wp_get_attachment_url( get_post_thumbnail_id() ); 
?>

<section class="section breadcrumb-wrapper" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images' ?>/banner.png);">
	  <div class="shell">
		  <h1><?php the_title(); ?></h1>
	  </div>
  </section>

<section class="inner-about-wrap inner-service-page">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-12">
                    <div class="about-cont">
                      <?php the_content(); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

<?php
endwhile;
get_footer(); ?>