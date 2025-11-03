<?php
/**
 * Law Category Attorney Bio
 * Template Name: Interior - Attorney Bio
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
				<div class="attorney-intro-block">
					<div class="intro-text">
						<?php the_field('intro_text'); ?>
					</div>
					<div class="attorney-photo">
					<?php $attorney_image = get_field('attorney_photo'); ?>
						<img src="<?php echo esc_url($attorney_image['url']); ?>" alt="<?php echo esc_attr($attorney_image['alt']); ?>" />
					</div>
				</div>
				<div class="spacer-30"></div>
				<?php the_content(); ?>
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