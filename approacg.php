<?php
/*
Template Name: Approach
*/
get_header();
$feat_image_slider_list = wp_get_attachment_url( get_post_thumbnail_id() ); 
?>

<section class="section breadcrumb-wrapper" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images' ?>/inner-banner.webp);">
	  <div class="shell">
		  <h1><?php the_title(); ?></h1>
	  </div>
  </section>

<section class="approach-wrap">
        <div class="container">
            <!-- Step 1 -->
            <div class="row align-items-center approach-step">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                    <div class="approach-img-box">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images' ?>/aboutImg.png" alt="Person-Centered Care" class="img-fluid rounded-custom">
                        <div class="approach-step-number">01</div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="approach-content">
                        <span class="sub-heading">STEP 01</span>
                        <h2>Personalised <span class="cursive-text">Support</span></h2>
                        <p>Your support should fit into your life, not the other way around. We take time to understand your routines, preferences, abilities and personal goals, then shape our assistance around what matters most to you.</p>
                        <ul class="approach-list">
                            <li><img src="<?php echo get_template_directory_uri() . '/assets/images' ?>/check.png" alt="Check" class="check-icon"> Individualised support tailored to your needs</li>
                            <li><img src="<?php echo get_template_directory_uri() . '/assets/images' ?>/check.png" alt="Check" class="check-icon"> Your choices and preferences guide our care</li>
                            <li><img src="<?php echo get_template_directory_uri() . '/assets/images' ?>/check.png" alt="Check" class="check-icon"> Encouragement to build everyday independence</li>
                        </ul>
                    </div>
                </div>
            </div>

            <!-- Step 2 -->
            <div class="row align-items-center approach-step flex-lg-row-reverse mt-5 pt-4">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-left" data-aos-duration="1000">
                    <div class="approach-img-box">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images' ?>/chooseImg.png" alt="Holistic Well-being" class="img-fluid rounded-custom">
                        <div class="approach-step-number">02</div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-right" data-aos-duration="1000" data-aos-delay="200">
                    <div class="approach-content pr-lg-5">
                        <span class="sub-heading">STEP 02</span>
                        <h2>Supporting Your <span class="cursive-text">Well-being</span></h2>
                        <p>Our approach focuses on more than completing daily tasks. We help you develop practical abilities, participate in your community and gain confidence in the activities that are important to you.</p>
                        <ul class="approach-list">
                            <li><img src="<?php echo get_template_directory_uri() . '/assets/images' ?>/check.png" alt="Check" class="check-icon"> Practical support for everyday activities</li>
                            <li><img src="<?php echo get_template_directory_uri() . '/assets/images' ?>/check.png" alt="Check" class="check-icon"> Opportunities to develop useful life skills</li>
                            <li><img src="<?php echo get_template_directory_uri() . '/assets/images' ?>/check.png" alt="Check" class="check-icon"> Encouragement to connect with your community</li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Step 3 -->
            <div class="row align-items-center approach-step mt-5 pt-4">
                <div class="col-lg-6 mb-4 mb-lg-0" data-aos="fade-right" data-aos-duration="1000">
                    <div class="approach-img-box">
                        <img src="<?php echo get_template_directory_uri() . '/assets/images' ?>/img1.png" alt="Continuous Improvement" class="img-fluid rounded-custom">
                        <div class="approach-step-number">03</div>
                    </div>
                </div>
                <div class="col-lg-6" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="200">
                    <div class="approach-content">
                        <span class="sub-heading">STEP 03</span>
                        <h2>Consistent Growth & <span class="cursive-text">Improvement</span></h2>
                        <p>Your circumstances and goals can change over time, so our support remains responsive. We continually strengthen our knowledge, listen to feedback and refine how we support each participant.</p>
                        <ul class="approach-list">
                            <li><img src="<?php echo get_template_directory_uri() . '/assets/images' ?>/check.png" alt="Check" class="check-icon"> Experienced and continually developing support team</li>
                            <li><img src="<?php echo get_template_directory_uri() . '/assets/images' ?>/check.png" alt="Check" class="check-icon"> Responsive care that adapts to changing needs</li>
                            <li><img src="<?php echo get_template_directory_uri() . '/assets/images' ?>/check.png" alt="Check" class="check-icon"> Feedback that helps improve your support experience</li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>
    </section>

<?php get_footer(); ?>