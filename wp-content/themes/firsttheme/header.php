<!DOCTYPE html>
<html <?php language_attributes() // display the language arrtribute for html tag and may display the rtl is it is defined; ?>>
    <head>
        <meta charset = "<?php bloginfo('charset'); ?>">
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">
        <title><?php bloginfo('name'); ?></title>
        <?php wp_head(); // fire the wp-head action to add scripts, styles, metatags... ?>
    </head>
    <body> 
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
           <?php display_bootstrap_menu(); ?>
        </div>
    </nav>