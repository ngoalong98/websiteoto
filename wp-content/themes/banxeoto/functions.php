<?php
define('THEME_URL', get_template_directory_uri());


/*
 *Nhúng file style
 */
function websiteoto_style()
{

    /*
     * nhung css
     */
    $urlCss = THEME_URL . '/assets/';
    wp_register_style('websiteoto_style_google_font', 'https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,700,700i,900');
    wp_enqueue_style('websiteoto_style_google_font');

    wp_register_style('websiteoto_style_bootstrap', $urlCss . 'css/bootstrap.min.css', array(), '1.0');
    wp_enqueue_style('websiteoto_style_bootstrap');

    wp_register_style('websiteoto_style_font_awesome', $urlCss . 'css/fontawesome-all.min.css', array(), '1.0');
    wp_enqueue_style('websiteoto_style_font_awesome');

    wp_register_style('websiteoto_style_slick', $urlCss . 'css/slick.css', array(), '1.0');
    wp_enqueue_style('websiteoto_style_slick');

    wp_register_style('websiteoto_style_slick-theme', $urlCss . 'css/slick-theme.css', array(), '1.0');
    wp_enqueue_style('websiteoto_style_slick-theme');

    wp_register_style('websiteoto_style_jquery', $urlCss . 'css/jquery.mmenu.css', array(), '1.0');
    wp_enqueue_style('websiteoto_style_jquery');

    wp_register_style('websiteoto_style_animate', $urlCss . 'css/animate.css', array(), '1.0');
    wp_enqueue_style('websiteoto_style_animate');

    wp_register_style('websiteoto_style_lightGallery', $urlCss . 'css/lightGallery.css', array(), '1.0');
    wp_enqueue_style('websiteoto_style_lightGallery');

    wp_register_style('websiteoto_style_lightslider', $urlCss . 'css/lightslider.css', array(), '1.0');
    wp_enqueue_style('websiteoto_style_lightslider');

    wp_register_style('websiteoto_style_positioning', $urlCss . 'css/jquery.mmenu.positioning.css', array(), '1.0');
    wp_enqueue_style('websiteoto_style_positioning');
    
    wp_register_style('websiteoto_style_style', $urlCss . 'css/style.css', array(), '1.0');
    wp_enqueue_style('websiteoto_style_style');


    /*
     * nhung js
     */
    $urlJs = THEME_URL . '/assets/js/';
    wp_register_script('websiteoto_script_tether', $urlJs . 'tether.min.js', array(), '1.0', true);
    wp_enqueue_script('websiteoto_script_tether');

    wp_register_script('websiteoto_script_jquery', $urlJs . 'jquery.min.js', array(), '1.0', true);
    wp_enqueue_script('websiteoto_script_jquery');

    wp_register_script('websiteoto_script_bootstrap', $urlJs . 'bootstrap.min.js', array(), '1.0', true);
    wp_enqueue_script('websiteoto_script_bootstrap');

    wp_register_script('websiteoto_script_wow', $urlJs . 'wow.min.js', array(), '1.0', true);
    wp_enqueue_script('websiteoto_script_wow');

    wp_register_script('websiteoto_script_jquery.mmenu', $urlJs . 'jquery.mmenu.all.js', array(), '1.0', true);
    wp_enqueue_script('websiteoto_script_jquery.mmenu');

    wp_register_script('websiteoto_script_slick', $urlJs . 'slick.js', array(), '1.0', true);
    wp_enqueue_script('websiteoto_script_slick');

    wp_register_script('websiteoto_script_smoothscroll', $urlJs . 'smoothscroll.js', array(), '1.0', true);
    wp_enqueue_script('websiteoto_script_smoothscroll');

    wp_register_script('websiteoto_script_lightslider', $urlJs . 'lightslider.js', array(), '1.0', true);
    wp_enqueue_script('websiteoto_script_lightslider');

    wp_register_script('websiteoto_script_lightGallery', $urlJs . 'lightGallery.js', array(), '1.0', true);
    wp_enqueue_script('websiteoto_script_lightGallery');

    wp_register_script('websiteoto_script_main', $urlJs . 'main.js', array(), '1.0', true);
    wp_enqueue_script('websiteoto_script_main');


}

add_action('wp_enqueue_scripts', 'websiteoto_style');


function register_my_menus(){
	register_nav_menus(
	array(
		'header-menu' => 'Menu chính',
		'link_nav' => 'Liên kết',
		'info_nav' => 'Thông tin',
		)
	);
}
add_action( 'init', 'register_my_menus' );