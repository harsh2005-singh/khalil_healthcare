<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 */

get_header();
?>

<section class="section breadcrumb-wrapper" style="background-image: url(<?php echo get_template_directory_uri() . '/assets/images' ?>/banner.png);">
	  <div class="shell">
		  <h1><?php the_title(); ?></h1>
	  </div>
  </section>

	<section class="inner-about-wrap">
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
get_footer();
