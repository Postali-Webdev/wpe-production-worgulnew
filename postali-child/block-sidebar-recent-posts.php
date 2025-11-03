<?php
/**
 * Banner Block Element
 * @package Postali Parent
 * @author Postali LLC
 */

?>

    <div class="sidebar-block" id="sidebar-recent-posts">
        <div class="sidebar-header">Recent Blog Posts</div>
        <ul class="sidebar-blog-posts">
        <?php 
            $query = new WP_Query( array(
                'posts_per_page'   => 5,
                'post_type'        => 'post', 
                'orderby'          => 'desc',
                'category__not_in' => array(8),
            ) );

            while ( $query->have_posts() ) : $query->the_post(); ?>
                <li><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></li>
            <?php endwhile; wp_reset_postdata(); ?>
        </ul>
    </div>

