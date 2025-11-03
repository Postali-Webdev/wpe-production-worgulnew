<?php
/**
 * Search results template.
 *
 * @package Postali Parent
 * @author Postali LLC
 */

get_header(); ?>

<section id="page-banner">
    <div class="banner" style="background: url('/wp-content/uploads/2014/03/content_headers_court_process.jpg') no-repeat; background-size:cover;">
        <div id="banner-container" class="container">
            <div class="headline-text">Search Results</div>
        </div> 
    </div>
</section>

<section class="page-content">
	<div class="container">
		
		<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 

		<div class="columns">
			<div class="column-66">
                <?php while ( have_posts() ) : the_post(); ?>
                    <h2><?php the_title(); ?></h2>
                    <div class="spacer-30"></div>
                    <div class="post-meta"><span class="post-meta-date"><?php the_date(); ?> in </span><span class="post-meta-categories"><?php the_category( ', ' ); ?></span></div>
                    <div class="spacer-15"></div>
                    <?php the_excerpt(); ?>
                    <p><a href="<?php the_permalink(); ?>" title="Continue reading">Continue Reading ... </a></p>
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


</div><!-- #content -->

<?php get_footer();
