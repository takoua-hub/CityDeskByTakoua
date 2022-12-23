<?php /* Template Name: Actualities Template */ ?>
<?php 
include_once("functions.php");
get_header();

?>
<section class="actualites cardes">
    <div class="container">
        <h2 class="main-title">Nots Actualités</h2>
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
            while (have_posts()) : the_post(); 
            if (has_post_thumbnail( $post->ID ) ): 
            $isofeaturedimage = get_the_post_thumbnail_url();
            endif;
            ?>

                <div class="col-sm-12 col-md-6 col-lg-4 card-box">
                    <div class="card bg-white text-white">
                        <div class="card-img" style="background-image:url('<?php echo $isofeaturedimage;?>'); background-position : center; background-size: cover" " alt="Card image"> </div>
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

            <?php endwhile; ?>
        <?php else :
            _e( 'Sorry, no posts were found.', 'textdomain' );
        endif; 
        ?>
        </div>
    </div>
</section>

<?php get_footer(); ?>




