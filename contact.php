<?php
/*
Template Name: Contact Us
*/
get_header();
$feat_image_slider_list = wp_get_attachment_url( get_post_thumbnail_id() ); 
?>

<section class="section breadcrumb-wrapper" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images' ?>/inner-banner.webp);">
	  <div class="shell">
		  <h1><?php the_title(); ?></h1>
	  </div>
  </section>

<section class="contact-wrap">
        <div class="container">
            <div class="row">
                
                <!-- Contact Info Cards -->
                <div class="col-lg-5 mb-5 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                    <div class="contact-info-panel">
                        <span class="sub-heading">CONTACT INFO</span>
                        <h2>Reach <span class="cursive-text">Out</span></h2>
                        <p class="mb-4">Whether you're looking for support or just want to learn more, our friendly team is ready to help.</p>
                        
                        <div class="contact-card">
                            <div class="contact-icon"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
                            <div class="contact-text">
                                <h5>Location</h5>
                                <p>Unit 5 93-97 Edwardes Street,<br>RESERVOIR VIC 3073</p>
                            </div>
                        </div>

                        <div class="contact-card">
                            <div class="contact-icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
                            <div class="contact-text">
                                <h5>Phone</h5>
                                <p><a href="tel:0432273389">0432273389</a></p>
                            </div>
                        </div>

                        <div class="contact-card">
                            <div class="contact-icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
                            <div class="contact-text">
                                <h5>Email</h5>
                                <p><a href="mailto:kalilhealthcare@gmail.com">kalilhealthcare@gmail.com</a></p>
                            </div>
                        </div>

                        <div class="contact-card border-0 pb-0">
                            <div class="contact-icon"><i class="fa-solid fa-circle-info"></i></div>
                            <div class="contact-text">
                                <h5>Company Details</h5>
                                <p>ABN: 97672106606 <br>ACN: 672106606 <br>NDIS ID: 4-KWZLJIY</p>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Contact Form -->
                <div class="col-lg-7 pl-lg-5" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="contact-form-box">
                        <span class="sub-heading text-center d-block w-100">SEND MESSAGE</span>
                        <h2 class="text-center w-100 mb-4">Write to <span class="cursive-text">Us</span></h2>
                        <div class="contact-form">
                            <?php echo do_shortcode('[contact-form-7 id="991c1fe" title="Contact form 1"]') ?>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </section>

<?php get_footer(); ?>