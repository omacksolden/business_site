/*
Template Name: Blog Posts
*/
<?php get_header(); ?>
<?php query_posts('post_type=post&post_status=publish&posts_per_page=10&paged='. get_query_var('paged')); ?>
    <div class="row">
        <div class="twelve columns">
            <?php if (have_posts()) :
                while (have_posts()) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <?php the_content();
                endwhile; ?>
                <div class="navigation">
                    <span class="newer"><?php previous_posts_link(__('« Newer','example')) ?></span> <span class="older"><?php next_posts_link(__('Older »','example')) ?></span>
                </div>
            <?php endif;
            wp_reset_query(); ?>
        </div>
    </div>
<?php get_footer(); ?>
