<?php 
/*
** Function to add my custom styles
** Added by Takoua
** wp_enqueue_style()
*/
function add_styles() {
    wp_enqueue_style('bootstrap-css', get_template_directory_uri().'/css/bootstrap.min.css');
    wp_enqueue_style('fontawesome-css', get_template_directory_uri().'/css/all.min.css');
    wp_enqueue_style('dff', get_template_directory_uri().'/css/editor-style.css');
    wp_enqueue_style('customize', get_template_directory_uri().'/css/customizer.css');
    wp_enqueue_style('kj', get_template_directory_uri().'/css/editor-styles.css');
    wp_enqueue_style('cc', get_template_directory_uri().'/css/theme-info.css');
    wp_enqueue_style('ddd', get_template_directory_uri().'/css/safari-flexbox-fixes.css');
    wp_enqueue_style('main', get_template_directory_uri().'/css/main.css');
}

/*
** Function to add my custom styles
** Added by Takoua
** wp_enqueue_script()
*/
function add_scripts() {
    // register jquery in footer
    wp_deregister_script('jquery');
    wp_register_script('jquery', includes_url('/js/jquery/jquery.js'), false, '', true);
    wp_enqueue_script('jquery');

    // Add conditional scripts
    wp_enqueue_script('html5shiv', get_template_directory_uri().'/js/html5shiv.min.js');
    wp_script_add_data('html5shiv', 'conditional', 'lt IE 9');
    wp_enqueue_script('respond', get_template_directory_uri().'/js/respond.min.js');     
    wp_script_add_data('respond', 'conditional', 'lt IE 9');

    wp_enqueue_script('bootstrap-js', get_template_directory_uri().'/js/bootstrap.min.js',array(), false, true);
    wp_enqueue_script('main-js', get_template_directory_uri().'/js/main.js',array(), false, true);
}

/*
** Function to add cusstom menu support
** Added by Takoua
** register_nav_menus()
*/
function register_custum_menu() { // create news menus locations to your theme
    register_nav_menus( array (
        'bootstrap-menu'  => 'Navigation Bar',
        'footer-menu'     => 'Footer Menu',
        'sidebar-menu'     => 'SideBar Menu',
    ));
}

/*
** Function to display menu
** Added by Takoua
** register_nav_menus()
*/
function display_bootstrap_menu () {
    wp_nav_menu( array (
        'theme_location'  => 'bootstrap-menu',
        'menu_class'      => 'navbar-nav mr-auto',
        'container'       => 'false',
        'container_class' => 'collapse navbar-collapse',
        'container_id'    => 'bs-example-navbar-collapse-1',
        'depth'           =>  2,
        'fallback_cb'     => 'WP_Bootstrap_Navwalker::fallback',
        'walker'          => new WP_Bootstrap_Navwalker(),
    ));
}

function register_navwalker(){
	require_once get_template_directory() . '/class-wp-bootstrap-navwalker.php';
}

/*
** Function actions
** Added by Takoua
** add_action()
*/
add_action('wp_enqueue_scripts', 'add_styles');
add_action('wp_enqueue_scripts', 'add_scripts');
// init after wordpress finish loading
add_action('init', 'register_custum_menu');
add_action('after_setup_theme', 'register_navwalker' );











