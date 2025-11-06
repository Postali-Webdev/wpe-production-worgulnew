<?php
/**
 * Law Category Interior Page
 * Template Name: Interior
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
				<?php echo do_shortcode('[ez-toc]'); ?>
				<?php the_content(); ?>
			</div>
            <div class="column-33">
				<?php echo do_shortcode('[ez-toc device_target="mobile"]'); ?>
				<?php get_template_part('block', 'sidebar-search');?>
				<?php get_template_part('block', 'sidebar-category-pages');?>
				<?php get_template_part('block', 'sidebar-awards');?>
				<?php get_template_part('block', 'sidebar-info');?>
            </div>
		</div>
	
	</div>
</section>
	
	<?php get_template_part('block', 'contact');?>
	
<?php get_footer(); ?>