<?php
/**
 * Post archive template.
 *
 * @package Postali Parent
 * @author Postali LLC
 */


get_header(); ?>

<section id="page-banner">
    <div class="banner" style="background: url('/wp-content/themes/postali-child/images/content_header_image.jpg') no-repeat; background-size:cover;">
        <div id="banner-container" class="container">
            <div class="headline-text">Legal Blog - <?php echo single_cat_title(); ?></div>
        </div> 
    </div>
</section>

<section class="page-content">
	<div class="container">

        <p id="breadcrumbs"><span><span><a href="/">Home</a></span> » <span><a href="/blog/">Legal Blog</a></span> » <span class="breadcrumb_last" aria-current="page"><?php echo single_cat_title(); ?></span></span></p>

		<div class="columns">
			<div class="column-66">
                <?php while ( have_posts() ) : the_post(); ?>
                    <h2><a href="<?php echo get_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2>
                    <div class="spacer-30"></div>
                    <div class="post-meta"><span class="post-meta-date"><?php the_date(); ?> in </span><span class="post-meta-categories"><?php the_category( ', ' ); ?></span></div>
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

<?php get_footer();
