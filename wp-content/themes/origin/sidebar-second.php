<div id="second-sidebar">
    <ul class="tabs">
        <li><a href="#random" class="active">Random</a></li>
        <li><a href="#news">Recent</a></li>
        <li><a href="#popular">Popular</a></li>
    </ul>
    <div class="tab_container">
        
        <!-- Random Posts -->
        <div id="random" class="tab_content">
            <ul>
                <?php
                $args = array('numberposts'=>10, 'orderby'=>'rand');
                $random_posts = get_posts($args);
                foreach ($random_posts as $post) : setup_postdata($post); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endforeach; wp_reset_postdata(); ?>
            </ul>
        </div>
        <!-- Recent Posts -->
        <div id="news" class="tab_content">
            <ul>
                <?php
                     $new_args = array('numberposts'=>10, 'orderby'=>'date', 'order' => 'DESC',);
                     $new_posts = get_posts($new_args);
                     foreach ($new_posts as $post) : setup_postdata($post); ?>
                     <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                     <?php endforeach; wp_reset_postdata();
                ?>
            </ul>
        </div>

        <!-- Popular Posts -->
        <div id="popular" class="tab_content">
            <ul>
                <?php
                global $spost;
                $args_popular = array('numberposts'=>10, 'orderby'=> 'comment_count');
                $popular_posts = get_posts($args_popular);
                foreach ($popular_posts as $post) : setup_postdata($post); ?>
                <li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
                <?php endforeach; wp_reset_postdata(); ?>
            </ul>
        </div>

        <!-- Widget Discussion -->
        <div class="widget">
            <h2>Discussion</h2>
            <ul>
                <li>
                    <strong><a href="#">Lorem ipsum dolor sit amet</a></strong>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </li>
                <li>
                    <strong><a href="#">Lorem ipsum dolor sit amet</a></strong>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </li>
                <li>
                    <strong><a href="#">Lorem ipsum dolor sit amet</a></strong>
                    <p>Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas.</p>
                </li>
            </ul>
        </div>

        <?php if (function_exists('dynamic_sidebar') && dynamic_sidebar('Right Sidebar')) : else : ?>
        <?php endif; ?>

    </div><!--end tab_container-->
</div><!--end second-sidebar-->
