<?php
//Include NavWalker Class for bootstrap Navigation Menu
require_once('class-wp-bootstrap-navwalker.php');

//Add Featured Image Support
add_theme_support('post-thumbnails');
/*
**  Function to  add my custom styles
**  wp_enqueue_style
*/

function add_styles() {
    wp_enqueue_style('bootstrap-css',get_template_directory_uri().'/css/bootstrap.min.css') ;
    wp_enqueue_style('fontawesome-css',get_template_directory_uri().'/css/all.min.css') ;
    wp_enqueue_style('main',get_template_directory_uri().'/css/main.css') ;

}
/*
**  Function to  add my custom scripts
**  wp_enqueue_script
*/

function add_scripts() {
    wp_deregister_script('jquery'); // remove registring of jQuery
    wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, '', true);
    wp_enqueue_script('jquery');
    wp_enqueue_script('bootstrap-js',get_template_directory_uri('jquery').'/js/bootstrap.min.js', array('jquery'), false, true) ;
    wp_enqueue_script('main-js',get_template_directory_uri().'/js/main.js', array(), false, true) ;

}
/*
**  Add Actions
**  add_action()
*/

add_action('wp_enqueue_scripts', 'add_styles');
add_action('wp_enqueue_scripts', 'add_scripts');

/**
 * Add Custom Menu
 */

function register_custom_menu() {
    register_nav_menus(array(
        'bootstrap-menu'  => 'Navigation Bar',
        'footer-menu'     => 'Footer Menu'
    
    ));
}

function display_header_menu () {
    wp_nav_menu( array (
        'theme_location'  => 'bootstrap-menu',
        'menu_class'      => 'navbar-nav m-auto',
        'container'       => 'false',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'bs-example-navbar-collapse-1',
        'depth'           =>  2,
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
    ));
}

add_action('init', 'register_custom_menu');












