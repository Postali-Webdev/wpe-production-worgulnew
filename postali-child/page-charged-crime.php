<?php
/**
 * Law Category Charged with a crime Page
 * Template Name: Charged with a Crime
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<section id="page-banner">
	<?php get_template_part('block', 'banner');?>
</section>

<section class="page-content">
	<div class="container">

		<div class="columns">
			<div class="column-50 center">
                <?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 
                <div class="spacer-15"></div>
				<?php the_field('top_content') ?>

                <?php $n = 1; ?>

                <?php if( have_rows('section_1_accordions') ): ?>
                    <div class="accordions">
                    <?php while( have_rows('section_1_accordions') ): the_row(); ?>
                        <div class="accordions_title"><span class="number"><?php echo $n; ?></span><h3><?php the_sub_field('accordion_title'); ?></h3></div>
                        <div class="accordions_content"><p><?php the_sub_field('accordion_content'); ?></p></div>
                        <?php $n++; ?>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?> 
                <div class="spacer-30"></div>
                <h2><?php the_field('section_2_headline'); ?></h2>
			</div>

            <div class="spacer-60"></div>
            <div class="column-50">
                <?php if( have_rows('left_column_slider') ): ?>
                    <div id="process-slider">
                    <?php while( have_rows('left_column_slider') ): the_row(); ?>
                        <div class="slide">
                        <?php 
                        $image = get_sub_field('slider_image');
                        if( !empty( $image ) ): ?>
                            <img src="<?php echo esc_url($image['url']); ?>" alt="<?php echo esc_attr($image['alt']); ?>" />
                        <?php endif; ?>
                        </div>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?> 
            </div>
            <div class="column-50">
                <?php the_field('section_2_right_content'); ?>
            </div>
            <div class="spacer-60"></div>
            <div class="column-50 center">
                <?php the_field('section_2_main_content'); ?>

                <?php $i = 1; ?>

                <?php if( have_rows('section_2_accordions') ): ?>
                    <div class="accordions">
                    <?php while( have_rows('section_2_accordions') ): the_row(); ?>
                        <div class="accordions_title"><span class="number"><?php echo $i; ?></span><h3><?php the_sub_field('accordion_title'); ?></h3></div>
                        <div class="accordions_content"><p><?php the_sub_field('accordion_content'); ?></p></div>
                        <?php $i++; ?>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?> 

                <div class="spacer-30"></div>
                <?php the_field('section_3_content'); ?>
			</div>
		</div>
	
	</div>
</section>

<section class="process-cta" style="background-image:url(<?php the_field('footer_cta_bg'); ?>);">
    <div class="container">
        <div class="columns">
            <div class="column-50"></div>
            <div class="column-50">
                <div class="on-page-cta dark">
                    <?php the_field('footer_cta_right_column'); ?>
                </div>
            </div>
        </div>
    </div>
</section>
	
	<?php get_template_part('block', 'contact');?>
	
<?php get_footer(); ?>