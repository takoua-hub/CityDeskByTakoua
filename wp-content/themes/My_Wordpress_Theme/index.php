<?php get_header(); ?>
<!-- Image Slider -->
    <div class="owl-carousel">
        <div class="slide slide-1">
            <div class="slide-content">
                <h2>Lorem ipsum dolor sit consectetur.</h2>
                <p class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quo voluptas facere debitis alias voluptate quasi mollitia.
                </p>
                <button class="btn-plus">Voir Plus</button>
            </div>
        </div>
        <div class="slide slide-2">
            <div class="slide-content">
                <h2>Lorem ipsum dolor sit consectetur.</h2>
                <p class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quo voluptas facere debitis alias voluptate quasi mollitia.
                </p>
                <button class="btn-plus">Voir Plus</button>
            </div>
        </div>
        <div class="slide slide-3">
            <div class="slide-content">
                <h2>Lorem ipsum dolor sit consectetur.</h2>
                <p class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quo voluptas facere debitis alias voluptate quasi mollitia.
                </p>
                <button class="btn-plus">Voir Plus</button>
            </div>
        </div>
        <div class="slide slide-4">
            <div class="slide-content">
                <h2>Lorem ipsum dolor sit consectetur.</h2>
                <p class="des">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eum quo voluptas facere debitis alias voluptate quasi mollitia.
                </p>
                <button class="btn-plus">Voir Plus</button>
            </div>
        </div>
    </div>
<!-- Section Gamme Mobilier -->
<section class="mobilier-bureau" id="mobilier-bureau">
    <div class="container">
        <h2 class="main-title">Notre gamme de mobilier bureau</h2>
        <p>Pour améliorer la productivité de vos collaborateurs et assurer leur confort, il est primordiale de fournir un espace de travail convivial et propice au travail. <strong><a href=""> City Desk</a></strong> s’engage à vous proposer une large gamme de <strong> Mobilier Bureau</strong> clés en main telles que : bureaux, siéges bureau, bibliothèques et rangements bureau, accessoires et luminaires, revêtements bureau…</p>
        <div class="articles d-flex justify-content-center align-items-center">  
          
            <div class="card article">
                <img class="card-img img-fluid" src="wp-content/themes/My_Wordpress_Theme/images/article-1.jpg" alt="">
                <div class="card-img-overlay">
                    <h3>Bureaux</h3>
                </div>
            </div>
        
            <div class="card article article-2">
                <img class="card-img img-fluid" src="wp-content/themes/My_Wordpress_Theme/images/article-2.jpg" alt="">
                <div class="card-img-overlay">
                    <h3>Sieges Bureaux</h3>
                </div>
            </div>
    
            <div class="card article article-3">
                <img class="card-img img-fluid" src="wp-content/themes/My_Wordpress_Theme/images/article-3.jpg" alt="">
                <div class="card-img-overlay">
                    <h3>Rangements Bureaux</h3>
                </div>
            </div>
        
            <div class="card article article-4">
                <img class="card-img img-fluid" src="wp-content/themes/My_Wordpress_Theme/images/article-4.jpg" alt="">
                <div class="card-img-overlay">
                    <h3>Accessoires & luminaires</h3>
                </div>
            </div>
        
            <div class="card article article-5">
                <img class="card-img img-fluid" src="wp-content/themes/My_Wordpress_Theme/images/article-5.jpg" alt="">
                <div class="card-img-overlay">
                    <h3>Revetements Bureaux</h3>
                </div>
            </div>
           
        </div>
    </div>
</section>
<!-- Section About -->
<section class="quick-about" id="quick-about">
    <div class="container">
        <div class="quick-about-description">
            <h2 class="main-title">Notre bureau d'études</h2>
            <p>
            Confiez-nous vos plans et projets, notre équipe se chargera de vous préparer une étude d’aménagement complète de vos espaces de bureaux.
            </p>

            <div class="quick-about-atout">
                <h5>Notre atout</h5>
                <ul class="atout-list">
                    <li><i class="fas fa-chevron-right"></i>Une étude personalisée</li>
                    <li><i class="fas fa-chevron-right"></i>Aide et conseils</li>
                    <li><i class="fas fa-chevron-right"></i>Un suivi complet</li>
                </ul>
            </div>
            <button class="quick-about-button">
                Voir nos réalisations
            </button>
        </div>
        <div class="quick-about-image">
            <img src="wp-content/themes/My_Wordpress_Theme/images/etude-archi-2.png" alt="">
        </div>
    </div>
</section>
<!-- Section Populated -->
<section class="populated" id="populated">
    <div class="container">
        <div></div>
        <div class="populated-description">
            <h2 class="main-title">Salon Avana</h2>
            <p>
            La modularité est un point essentiel du canapé Avana. Ce salon polyvalent permet, grâce à ses innombrables combinaisons, un dynamisme fonctionnel qui s’adapte à tout besoin et style. La douceur des lignes, les tissus disponibles et sa modularité rendent cette collection éclectique et adaptée à tout environnement.
            </p>

            <button class="populated-button">
                Voir nos réalisations
            </button>
        </div>
    </div>
</section>
<section class="last-actualities">
    <div class="container">
        <h2 class="main-title">Nos Derniers acctualités</h2>
        <div class="row">
            <?php
            $args = array(
                'posts_per_page'   => 10,
                'offset'           => 0,
                'category'         => '',
                'category_name'    => '',
                'orderby'          => 'date',
                'order'            => 'DESC',
                'include'          => '',
                'exclude'          => '',
                'meta_key'         => '',
                'meta_value'       => '',
                'post_type'        => 'post',
                'post_mime_type'   => '',
                'post_parent'      => '',
                'author'           => '',
                'author_name'      => '',
                'post_status'      => 'publish',
                'suppress_filters' => true 
            );
            query_posts($args);
            if (have_posts()) : 
            for ($i=0; $i <3; $i++): the_post(); 
                if (has_post_thumbnail( $post->ID ) ): 
                    $isofeaturedimage = get_the_post_thumbnail_url();
                endif;
                ?>
                <div class="col-md-4 card-box">
                    <div class="card bg-white text-white">
                        <div class="card-img" style="background-image:url('<?php echo $isofeaturedimage; ?>'); background-position : center; background-size: cover" alt="Card image"> </div>
                        <div class="card-img-overlay">
                            <h5 class="card-title"><?php  the_title() ; ?></h5>
                            <p class="card-text">  <?php the_excerpt(); ?></p>
                            <p class="card-text text-center">Last updated 3 mins ago</p>
                        </div>
                        <div class="card-body">
                            <p class="card-text">This card has supporting text below as a natural.</p>
                            <p class="card-text"><small class="text-muted">Voir Plus »</small></p>
                        </div>
                    </div>
                </div>
                <?php endfor; ?>
            <?php else :
                _e( 'Sorry, no posts were found.', 'textdomain' );
            endif; 
            ?>
        </div>
    </div>
</section>

<section class="news-letter">
    <h2 class="main-title">S'inscrire à la Newsletter</h2>
    <div class="row d-flex justify-content-center py-2">
        <div class="col-6">
            <input type="text" class="form-control" placeholder="E-mail" aria-label="First name">
        </div>
        <div class="col-3">
            <button class="populated-button">
                Voir nos réalisations
            </button>
        </div>
    </div>
</section>



<?php get_footer(); ?>


















