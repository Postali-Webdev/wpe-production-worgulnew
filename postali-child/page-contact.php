<?php
/**
 * ContactTemplate
 * Template Name: Contact
 *
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
			<div class="column-50">
				<?php $left_column = get_field('contact_left_group'); 
				echo $left_column['copy']; 
				?>
				<iframe src="<?php echo $left_column['map_embed_url']; ?>" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
				<?php echo $left_column['post_map_copy']; ?>

			</div>
            <div class="column-50">
				<?php $right_column = get_field('contact_right_group'); ?>
				<?php echo do_shortcode($right_column['form_embed']); ?>
				<div id="schema-videoobject" class="video-wrapper"><iframe title="Free Consultation" width="100%" height="310" src="<?php echo $right_column['video_embed_url']; ?>" frameborder="0" allowfullscreen></iframe></div>
				<?php echo $right_column['copy']; ?>
            </div>
            <div class="column-full">
                <?php the_content(); ?>
            </div>
		</div>
	
	</div>
</section>

<?php get_footer(); ?>
