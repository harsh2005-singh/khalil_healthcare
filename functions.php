<?php


// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'mtots' ),
		)
	);
	
	
	function allProConcrete_theme_setup(){
    add_theme_support('custom-logo');
    add_theme_support('custom-header');
    add_theme_support('title-tag');
    add_theme_support('post-thumbnails');
    add_theme_support('template');
    add_image_size('home-featured',600,400,array('center', 'center'));
    add_theme_support('automatic-feed-links');
    // $args = array (
    //     'default-image' => get_template_directory_uri().'/images/banner.webp',
    //     'default-text-color' => '000',
    //     'width' => 1920,
    //     'height' => 400,
    //     'flex-width' => true,
    //     'flex-height' => true,
    // );
    // add_theme_support('custom-header', $args);
};
add_action('after_setup_theme', 'allProConcrete_theme_setup');

/**
 * Enqueue scripts and styles.
 */
function all_season_property_scripts() {
	wp_enqueue_style( 'all_season_property-style', get_stylesheet_uri(), array() );
	wp_style_add_data( 'all_season_property-style', 'rtl', 'replace' );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}

wp_enqueue_style( 'vout-bootstrap-css', get_template_directory_uri() . '/assets/css/bootstrap.min.css' );
	wp_enqueue_style( 'vout-font-settings', get_template_directory_uri() . '/assets/css/settings.css' );
  	wp_enqueue_style( 'vout-animate', get_template_directory_uri() . '/assets/css/animate.css' );
  	wp_enqueue_style( 'vout-fancycss', get_template_directory_uri() . '/assets/css/fancybox.css' );
	wp_enqueue_style( 'vout-owl-carousel', get_template_directory_uri() . '/assets/css/owl.carousel.min.css' );
  	wp_enqueue_style( 'vout-owl-theme-default', get_template_directory_uri() . '/assets/css/owl.theme.default.min.css' );
  	wp_enqueue_style( 'vout-prettyPhoto', get_template_directory_uri() . '/assets/css/prettyPhoto.css' );
  	wp_enqueue_style( 'vout-style', get_template_directory_uri() . '/assets/css/style.css' );
  	wp_enqueue_style( 'vout-responsive', get_template_directory_uri() . '/assets/css/responsive.css' );
    wp_enqueue_style( 'gold-aos', 'https://unpkg.com/aos@2.3.1/dist/aos.css' );
    wp_enqueue_style( 'gold-font-Poppins', 'https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap' );
    wp_enqueue_style( 'gold-font-karla', 'https://fonts.googleapis.com/css2?family=Karla:ital,wght@0,200..800;1,200..800&display=swap' );
    wp_enqueue_style( 'vout-fontawesome7', 'https://cdnjs.cloudflare.com/ajax/libs/font-awesome/7.0.1/css/all.min.css' );
	  	wp_enqueue_style( 'vout-font-awesome', get_template_directory_uri() . '/assets/css/font-awesome.min.css' );
	  	

	wp_enqueue_script( 'vout-jquery', 'https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js', array('jquery'), '2.6.2', true );
	wp_enqueue_script( 'vout-jquery-migrate', get_template_directory_uri() . '/assets/js/jquery-migrate-1.2.1.js', array('jquery'), '2.6.2', true );
	wp_enqueue_script( 'vout-popper','https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js', array('jquery'), '2.6.2', true );
	wp_enqueue_script( 'vout-flex','https://cdnjs.cloudflare.com/ajax/libs/flexslider/2.5.0/jquery.flexslider.min.js', array('jquery'), '2.6.2', true );
	wp_enqueue_script( 'vout-aos','https://unpkg.com/aos@2.3.1/dist/aos.js', array('jquery'), '2.6.2', true );
	
// 	wp_enqueue_script( 'vout-scroll','https://cdnjs.cloudflare.com/ajax/libs/smoothscroll/1.4.10/SmoothScroll.min.js', array('jquery'), '2.6.2', true );
	wp_enqueue_script( 'vout-bootstrap', get_template_directory_uri() . '/assets/js/bootstrap.min.js', array('jquery'), '2.6.2', true );
	wp_enqueue_script( 'vout-fancyjs', get_template_directory_uri() . '/assets/js/fancybox.umd.js', array('jquery'), '2.6.2', true );
	wp_enqueue_script( 'vout-isotope', get_template_directory_uri() . '/assets/js/isotope.pkgd.min.js', array('jquery'), '2.6.2', true );
	wp_enqueue_script( 'vout-owl-carousel', get_template_directory_uri() . '/assets/js/owl.carousel.min.js', array('jquery'), '2.6.2', true );
		wp_enqueue_script( 'vout-prettyPhoto', get_template_directory_uri() . '/assets/js/jquery.prettyPhoto.js', array('jquery'), '2.6.2', true );
	wp_enqueue_script( 'vout-themepunch-custom', get_template_directory_uri() . '/assets/js/jquery.themepunch.megafoliopro.min.js', array('jquery'), '2.6.2', true );
	wp_enqueue_script( 'vout-themepunch-min', get_template_directory_uri() . '/assets/js/jquery.themepunch.tools.min.js', array('jquery'), '2.6.2', true );
	wp_enqueue_script( 'vout-main-custom', get_template_directory_uri() . '/assets/js/main.js', array('jquery'), '2.6.2', true );

}
add_action( 'wp_enqueue_scripts', 'all_season_property_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';


/**
 * Register Custom Navigation Walker
 */
function register_navwalker(){
	require_once get_template_directory() . '/inc/class-bootstrap-5-navwalker.php';
}
add_action( 'after_setup_theme', 'register_navwalker' );

