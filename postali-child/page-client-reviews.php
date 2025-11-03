<?php
/**
 * Law Category Reviews Page
 * Template Name: Client Reviews
 * @package Postali Parent
 * @author Postali LLC
 */

get_header(); ?>

<section id="page-banner">
	<?php get_template_part('block', 'banner');?>
</section>

<section class="page-content">
	<div class="container">
		
		<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 

		<div class="columns">
			<div class="column-66">
                <?php
						$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

						$args = array(
						    'post_type'=>'testimonial', // Your post type name
						    'posts_per_page' => 10,
						    'orderby' => 'DESC',
						    'paged' => $paged,
						);

						$loop = new WP_Query( $args );
						if ( $loop->have_posts() ) {
						    while ( $loop->have_posts() ) : $loop->the_post(); ?>
							<div class="slide">
								<div class="testimonial_rotator_quote">
						    		<?php the_content(); ?>
						    	</div>
						    </div>
						    <?php endwhile; ?>

							<div class="pagination">
							<div class="nav-links">
							<?php 
							$total_pages = $loop->max_num_pages;

						    if ($total_pages > 1){

						        $current_page = max(1, get_query_var('paged'));

						        echo paginate_links(array(
						            'base' => get_pagenum_link(1) . '%_%',
						            'format' => 'page/%#%',
						            'current' => $current_page,
						            'total' => $total_pages,
						            'prev_text'    => __('<'),
						            'next_text'    => __('>'),
						        ));
						    }    
						}
						wp_reset_postdata();
						?>
						</div>
					</div>
			</div>
            <div class="column-33">
				<?php get_template_part('block', 'sidebar-search');?>
				<?php get_template_part('block', 'sidebar-awards');?>
				<?php get_template_part('block', 'sidebar-info');?>
            </div>
		</div>
	
	</div>
</section>
	
	<?php get_template_part('block', 'contact');?>
	
<?php get_footer(); ?>