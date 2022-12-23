<?php get_header(); // include header?> 
<section id="primary" class="content-single content-area">
    <main id="main" class="site-main" role="main">
        <?php
        if (have_posts()) :
            while (have_posts()) : the_post(); ?>
                <div class="post-column clearfix">
                    <article id="post-<?php the_ID() ?>">
                        <header class="entry-header">
                            <?php
                            $time_string = sprintf(
                                '<a href="%1$s" title="%2$s" rel="bookmark"><time class="entry-date published updated" datetime="%3$s">%4$s</time></a>',
                                esc_url(get_permalink()),
                                esc_attr(get_the_time()),
                                esc_attr(get_the_date('c')),
                                esc_html(get_the_date())
                            );
                            echo '<span class="meta-date">' . $time_string . '</span>';
                            ?>
                            <?php the_title(sprintf('<h2 class="entry-title"><a href="%s" rel="bookmark">', esc_url(get_permalink())), '</a></h2>'); ?>
                        </header><!-- .entry-header -->
                        <div class="entry-content entry-excerpt clearfix">
                            <?php the_excerpt(); ?>
                        <?php  ?>
                        </div><!-- .entry-content -->
                    </article>
                </div>
        <?php endwhile;
        endif; ?>
    </main><!-- #main -->
</section><!-- #primary -->
<?php get_sidebar(); ?>
<?php get_footer(); ?>