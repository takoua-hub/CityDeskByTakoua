<!DOCTYPE html>
<html  <?php language_attributes(); ?>>
    <head>
        <meta charset="<?php bloginfo('charset'); ?>">
        <title><?php bloginfo('name'); ?></title>
        <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" >
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,500;1,600;1,700;1,900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" />  
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css">
        <?php wp_head(); ?>
    </head>
    <body>
    <header>
        <div class="header-content">
            <div class="main-header">
                <div class="logo">
                    <img src="wp-content/themes/My_Wordpress_Theme/images/Logo-city-desk-final.png" alt="">
                </div>
                <form action="">
                    <input type="text" class="search-product" placeholder="Chercher un produit...">
                    <i class="fas fa-search"></i>
                </form>
                <div class="devis">
                    <span>
                        Demande de devis
                    </span>
                    <span class="val">0</span>
                </div>
                <div class="socials">
                <i class="fab fa-facebook"></i>
                <i class="fab fa-instagram"></i>
                <i class="fab fa-linkedin"></i>
                <i class="fab fa-youtube"></i>
                </div>
            </div>
            <div class="second-header">
                <nav class="navbar navbar-expand-lg bg-white text-center">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse text-center" id="navbarSupportedContent">
                    <?php display_header_menu(); ?>
                    </div>
                </nav>
            </div>
        </div>
    </header>
   
    
 