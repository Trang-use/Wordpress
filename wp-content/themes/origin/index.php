<?php get_header();

if (file_exists(get_template_directory() . '/inc/featured.php')) {
    include(get_template_directory() . '/inc/featured.php');
}
get_sidebar(); ?>

<div id="main-content">
    <!-- Videos -->
    <div class="post">
        <?php
        $videos = new WP_Query('showposts=1&cat=1');
        while ($videos->have_posts()) : $videos->the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a></h2>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <?php the_excerpt(); ?>
            <ul class="links">
        <?php
        $text_link = new WP_Query('showposts=4&cat=1&offset=');
        while ($text_link->have_posts()) : $text_link->the_post(); ?>
             <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
        <?php endwhile; wp_reset_postdata(); ?>
        </ul>
            <p class="meta-data">By: <strong><?php the_author(); ?></strong> | On: <?php the_time('F j, Y'); ?></p>
            <?php comments_popup_link('0', '1', '%', 'comment-link'); ?>
        <?php endwhile; wp_reset_postdata(); ?>
        
    </div><!-- end .post -->

    <!-- Featured -->
    <div class="post">
        <ul class="links">
            <?php
            $text_link = new WP_Query('showposts=3&cat=5&offset=');
            while ($text_link->have_posts()) : $text_link->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>

        <?php
        $text = new WP_Query('showposts=1&cat=5');
        while ($text->have_posts()) : $text->the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a></h2>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); ?></p>
            <p class="meta-data">By: <strong><?php the_author(); ?></strong> | On: <?php the_time('F j, Y'); ?></p>
            <?php comments_popup_link('0', '1', '%', 'comment-link'); ?>
        <?php endwhile; wp_reset_postdata(); ?>
    </div><!-- end .post -->

    <!-- JavaScript & jQuery -->
    <div class="post">
        <ul class="links">
            <?php
            $text_link = new WP_Query('showposts=4&cat=3');
            while ($text_link->have_posts()) : $text_link->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>

        <?php
        $text = new WP_Query('showposts=1&cat=3');
        while ($text->have_posts()) : $text->the_post(); ?>
            <h2><a href="<?php the_permalink(); ?>"><?php the_category(', '); ?></a></h2>
            <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
            <p><?php the_excerpt(); ?></p>
            <p class="meta-data">By: <strong><?php the_author(); ?></strong> | On: <?php the_time('F j, Y'); ?></p>
            <?php comments_popup_link('0', '1', '%', 'comment-link'); ?>
        <?php endwhile; wp_reset_postdata(); ?>
    </div><!-- end .post -->

</div><!-- end #main-content -->

<?php get_sidebar('second'); ?>
<?php get_footer(); ?>
