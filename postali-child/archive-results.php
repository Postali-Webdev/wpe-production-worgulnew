<?php
/**
 * Template Name: Results
 * 
 * @package Postali Child
 * @author Postali LLC
 */

$args = array (
	'post_type' => 'results',
	'post_per_page' => '10',
	'post_status' => 'publish',
	'order' => 'DESC',
	'paged' => ( get_query_var('paged') ? get_query_var('paged') : 1),
);
$wp_query = new WP_Query($args);
get_header(); ?>

<section id="page-banner">
    <div class="banner" style="background: url('/wp-content/uploads/2014/03/content_headers_court_process.jpg') no-repeat; background-size:cover;">
        <div id="banner-container" class="container">
            <div class="headline-text">Case Results</div>
        </div> 
    </div>
</section>

<section class="page-content">
	<div class="container">
		
		<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 

		<div class="columns">
			<div class="column-66">
				<?php while( $wp_query->have_posts() ) : $wp_query->the_post(); ?>
                    <h2><a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <div class="spacer-30"></div>
                    <div class="post-meta"><span class="post-meta-date"><?php the_date(); ?></span></div>
                    <div class="spacer-15"></div>
                    <?php the_excerpt(); ?>
                    <div class="spacer-line"></div>
                <?php endwhile; ?>
                <?php the_posts_pagination(); ?>
			</div>
            <div class="column-33">
                <?php get_template_part('block', 'sidebar-search');?>
                <?php get_template_part('block', 'sidebar-recent-posts');?>
                <?php get_template_part('block', 'sidebar-awards');?>
				<?php get_template_part('block', 'sidebar-info');?>
            </div>
		</div>
	
	</div>
</section>

<?php get_footer(); ?>