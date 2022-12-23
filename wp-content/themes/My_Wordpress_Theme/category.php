<?php /* Template Name: Bureautiques Template */ ?>
<?php
include_once("functions.php");
get_header();
?>
<section class="categorie cardes">
    <div class="container">
        <header class="archive-header">
            <h2 class="main-title archive-title">Category: <?php single_cat_title('', true); ?></h2>
            <?php
            // Display optional category description
            if (category_description()) : ?>
                <div class="archive-meta"><?php echo category_description(); ?></div>
            <?php endif; ?>
        </header>
        <div class="row">
            <?php 
            if (have_posts()) :
                while (have_posts()) : the_post();
                    if (has_post_thumbnail($post->ID)) :
                        $isofeaturedimage = get_the_post_thumbnail_url();
                    endif;?>
                    <div class="col-sm-12 col-md-6 col-lg-4 card-box">
                        <div class="card bg-white text-white">
                            <div class="card-img" style="background-image:url('<?php echo $isofeaturedimage; ?>'); background-position : center; background-size: cover" alt="Card image"> </div>
                            <div class="card-img-overlay">
                                <h5 class="card-title"><?php the_title(); ?></h5>
                                <div class="card-text"> <?php the_excerpt(); ?></div>
                                <p class="card-text text-center">Last updated 3 mins ago</p>
                            </div>
                            <div class="card-body">
                                <p class="card-text">This card has supporting text below as a natural.</p>
                                <p class="card-text"><small class="text-muted">Voir Plus »</small></p>
                            </div>
                        </div>
                    </div>
                <?php endwhile; ?>
            <?php else : _e('Sorry, no posts were found.', 'textdomain'); endif;?>
        </div>
        <section id="primary" class="site-content">
            <div id="content" role="main">
                <?php
                // Check if there are any posts to display
                if (have_posts()) :
                    // The Loop
                    while (have_posts()) : the_post(); ?>
                        <h2><a href="<?php the_permalink() ?>" rel="bookmark" title="Permanent Link to <?php the_title_attribute(); ?>"><?php the_title(); ?></a></h2>
                        <small><?php the_time('F jS, Y') ?> by <?php the_author_posts_link() ?></small>
                        <div class="entry">
                            <?php the_content(); ?>
                            <p class="postmetadata">
                                <?php comments_popup_link('No comments yet', '1 comment', '% comments', 'comments-link', 'Comments closed');?>
                            </p>
                        </div>
                    <?php endwhile;
                else : ?>
                    <p>Sorry, no posts matched your criteria.</p>
                <?php endif; ?>
            </div>
        </section>
    </div>
</section>

<?php get_footer(); ?>