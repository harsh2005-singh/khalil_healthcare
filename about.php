<?php
/*
Template Name: About Us
*/
get_header();
$feat_image_slider_list = wp_get_attachment_url( get_post_thumbnail_id() ); 
?>

<section class="section breadcrumb-wrapper" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images' ?>/inner-banner.webp);">
	  <div class="shell">
		  <h1><?php the_title(); ?></h1>
	  </div>
  </section>

<section class="inner-about-wrap">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-12">
                <div class="about-cont">

                    <?php if (!empty($feat_image_slider_list)) : ?>
                        <div class="about-img">
                            <img src="<?php echo esc_url($feat_image_slider_list); ?>" alt="">
                        </div>
                    <?php endif; ?>

                    <?php the_content(); ?>

                </div>
            </div>
        </div>
    </div>
</section>

<?php get_footer(); ?>