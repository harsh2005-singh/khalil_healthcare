<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">
	<title><?php echo wp_title(); ?></title>
	
	<?php wp_head(); ?>
	
</head>

<body <?php body_class(); ?>>
	
<?php wp_body_open(); ?>
<div id="page" class="site">

	<header class="site-header">
<!-- 		<?php echo do_shortcode('[gtranslate]') ?> -->
    <div class="toppest-bar">
      <div class="container">
        <div class="row">
          <div class="col-md-6">
            <div class="top-info">
              <div class="email">
                <i class="fa-solid fa-location-dot"></i>
                <a href="#">
                  Monday - Friday 10:00 AM - 09:00 PM
                </a>
              </div>
            </div>
          </div>
          <div class="col-md-6">
            <div class="top-info2">
              <div class="email">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <a href="tel:0432273389">
                  0432273389
                </a>
              </div>
              <div class="email">
                <i class="fa fa-envelope-o" aria-hidden="true"></i>
                <a href="mailto:kalilhealthcare@gmail.com">
                  kalilhealthcare@gmail.com
                </a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="container">
      <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="<?php echo site_url() ?>">
          <img src="<?php echo get_template_directory_uri() . '/assets/images' ?>/logo.png" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <?php
                        wp_nav_menu( array(
							'menu' => '2',
                          'theme_location' => 'header-menu',
                          'container' => false,
                          'menu_class' => 'navbar-nav m-auto',
                          'fallback_cb' => '__return_false',
                          'depth' => 2,
                          'walker' => new Bootstrap_5_Navwalker(),
                        ) );
                    ?> 
                    <a href="" class="more" data-bs-toggle="modal" data-bs-target="#exampleModal">Get A Quote</a>
        </div>
      </nav>
    </div>
  </header>