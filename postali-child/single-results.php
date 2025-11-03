<?php
/**
 * Single template
 *
 * @package Postali Parent
 * @author Postali LLC
 */
get_header();?>

<section id="page-banner">
    <div class="banner" style="background: url('/wp-content/themes/postali-child/images/content_header_image.jpg') no-repeat; background-size:cover;">
        <div id="banner-container" class="container">
            <div class="headline-text">Case Results</div>
            <?php if( $ctaText ): ?>
                <span class="cta-text"><?php echo $ctaText; ?></span>
                <div class="banner-cta-block"><span class="ibp"><?php echo $ctaPhone; ?></span></div>
            <?php endif; ?>
        </div> 
    </div>
</section>

<section class="page-content">
	<div class="container">
		
		<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 

		<div class="columns">
			<div class="column-66">
                <h1><?php the_title(); ?></h1>
                <div class="post-meta"><span class="post-meta-date"><?php the_date(); ?></span></div>
                    <div class="spacer-30"></div>
				<?php the_content(); ?>
			</div>
            <div class="column-33">
                <?php get_template_part('block', 'sidebar-search');?>
                <?php get_template_part('block', 'sidebar-recent-posts');?>
				<?php get_template_part('block', 'sidebar-info');?>
            </div>
		</div>
	
	</div>
</section>

<?php get_footer(); ?>