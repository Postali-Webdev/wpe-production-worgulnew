<?php
/**
 * Law Category Criminal Process Page
 * Template Name: Criminal Process
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
                <div class="spacer-30"></div>
                <h2><?php the_field('section_2_headline'); ?></h2>
			</div>
            <div class="spacer-60"></div>
            <div class="column-50">

            <?php $n = 1; ?>
            <?php if( have_rows('section_2_accordions') ): ?>
                <div class="accordions">
                <?php while( have_rows('section_2_accordions') ): the_row(); ?>
                    <div class="accordions_title"><span class="number"><?php echo $n; ?></span><h3><?php the_sub_field('accordion_title'); ?></h3></div>
                    <div class="accordions_content"><p><?php the_sub_field('accordion_content'); ?></p></div>
                    <?php $n++; ?>
                <?php endwhile; ?>
                </div>
            <?php endif; ?> 

            </div>
            <div class="column-50">
                <div class="on-page-cta">
                    <?php the_field('right_column_cta'); ?>
                </div>
            </div>
            <div class="spacer-60"></div>
            <div class="column-50 center">
                <?php the_field('section_3_top'); ?>
			</div>
            <div class="spacer-60"></div>
            <div class="column-full">
                <div class="criminal-charges">
                <?php if( have_rows('criminal_charges_block') ): ?>
                <?php while( have_rows('criminal_charges_block') ): the_row(); ?>
                    <div class="charge-block"><p><?php the_sub_field('criminal_charges_block'); ?></p></div>
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>
            <div class="spacer-60"></div>
            <div class="column-50 center">
                <?php the_field('section_3_bottom'); ?>
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