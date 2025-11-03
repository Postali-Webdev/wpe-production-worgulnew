<?php
/**
 * Law Category Interior Page
 * Template Name: Interior Updated
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); 

$background_img = get_field('banner_background_image');


function videoEl( $video_acf_id ) {
    if ( $video_acf_id ) {
        return '<div id="schema-videoobject" class="video-container"><iframe title="Sex Crimes in Pittsburgh" src="' . $video_acf_id . '" width="100%" height="420" frameborder="0" allowfullscreen="allowfullscreen"></iframe></div>';
    }
}

if ( is_tree ('9275') ) { // Greensburg 
    $map_embed = get_field('greensburg_map','options'); 
    $directions_link = get_field('greensburg_directions_link','options');
    $address = get_field('greensburg_address','options');
} else if ( is_tree ('12397') ) { // Beaver 
    $map_embed = get_field('beaver_map','options'); 
    $directions_link = get_field('beaver_directions_link','options');
    $address = get_field('beaver_address','options');
} else if ( is_tree ('12411') ) { // Butler 
    $map_embed = get_field('butler_map','options'); 
    $directions_link = get_field('butler_directions_link','options');
    $address = get_field('butler_address','options');
} else if ( is_tree('12580') ) { // Washington 
    $map_embed = get_field('washington_map', 'options'); 
    $directions_link = get_field('washington_directions_link','options');
    $address = get_field('washington_address','options');
} else { 
    $map_embed = get_field('pittsburgh_map','options'); 	
    $directions_link = get_field('pittsburgh_directions_link','options');
    $address = get_field('pittsburgh_address','options');
} 



?>

<section id="page-banner">
    <div class="banner" style="background: url('<?php echo $background_img['url']; ?>') no-repeat; background-size:cover;">
        <div id="banner-container" class="container">
            <h1><?php echo get_field('banner_title'); ?></h1>
            <p><?php echo get_field('banner_copy'); ?></p>
        </div> 
    </div>
</section>

<section class="page-content">
	<div class="container">
		
		<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 

		<div class="columns">
			<div class="column-66 block">
				<?php echo get_field('copy_section_1'); ?>
                <?php echo videoEl( get_field('video_embed_url_section_1') ); ?>

                <?php $location_block = get_field('location_block');
                    if( $location_block['add_location_block']) : ?>
                
                        <h2><?php echo $location_block['section_headline']; ?></h2>
                        <?php echo $location_block['section_copy']; ?>
                        <div class="location-container">
                            <div class="map-wrapper">
                                <iframe src="<?php echo esc_url($map_embed); ?>" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </div>
                            <div class="copy-wrapper">
                                <p><?php echo $address; ?></p>
                                <a href="<?php echo $directions_link; ?>" target="_blank">Directions</a>
                            </div>
                        </div>

                        <?php echo get_field('copy_section_2'); ?>
                        <?php echo videoEl( get_field('video_embed_url_section_2') ); ?>
                <?php endif; ?>
            </div>
            <div class="column-33 desktop-sidebar">
				<?php get_template_part('block', 'sidebar-search');?>
				<?php get_template_part('block', 'sidebar-category-pages');?>
				<?php get_template_part('block', 'sidebar-awards');?>
				<?php get_template_part('block', 'sidebar-info');?>
            </div>
        </div>
    </div>


    <?php $featured_attorney_block = get_field('featured_attorney_block'); 
        if( $featured_attorney_block['add_featured_attorney']) : ?>

        <div class="attorney-outer-wrapper">
            <div class="container">
                <div class="columns">
                    <div class="column-full block">
                        <div class="attorney-wrapper">
                            <div class="img-wrapper">
                                <img src="<?php echo $featured_attorney_block['attorney_bio_headshot']['url']; ?>" alt="<?php echo $featured_attorney_block['attorney_bio_headshot']['alt']; ?>">
                            </div>
                            <div class="copy-wrapper">
                                <h2><?php echo $featured_attorney_block['section_headline']; ?></h2>
                                <?php echo $featured_attorney_block['section_copy']; ?>
                                <a href="<?php echo $featured_attorney_block['attorney_bio_button']['url']; ?>" class="button"><?php echo $featured_attorney_block['attorney_bio_button']['title']; ?></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="columns">
                <div class="column-66 block">
                    <?php echo get_field('copy_section_3'); ?>
                    <?php echo videoEl( get_field('video_embed_url_section_3') ); ?>
                </div>
            </div>
        </div>
    <?php endif; ?>

    <?php $reviews_results_block = get_field('reviewsresults_block'); 
        if( $reviews_results_block['add_reviewsresults']) : ?>

            <div class="review-result-outer-wrapper">
                <div class="container">
                    <div class="columns">
                        <div class="column-full">
                            <div class="review-result-wrapper">
                                <div class="review-wrapper">
                                    <p class="subtitle">Client Reviews</p>
                                    <div class="inner-wrapper">
                                        <?php $review_obj = $reviews_results_block['featured_review']; ?>
                                        <p><?php echo get_post_field('post_content', $review_obj->ID); ?></p>
                                        <a href="/client-reviews-testimonials/" class="button">Read More Reviews</a>

                                    </div>
                                </div>
                                <div class="result-wrapper">
                                    <p class="subtitle">Notable Case Results</p>
                                    <div class="inner-wrapper">
                                        <?php $result_obj = $reviews_results_block['featured_result']; ?>
                                        <p class="heavy-copy"><?php echo get_the_title($result_obj->ID); ?></p>
                                        <p><?php echo get_post_field('post_excerpt', $result_obj->ID); ?></p>
                                        <a href="<?php echo get_the_permalink($result_obj->ID); ?>" class="button">View Case Details</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="columns">
                    <div class="column-66 block">
                        <?php echo get_field('copy_section_4'); ?>
                        <?php echo videoEl( get_field('video_embed_url_section_4') ); ?>
                    </div>
                </div>
            </div>
    <?php endif ?>

    <div class="container">
        <div class="columns">
            <div class="column-33 mobile-sidebar">
				<?php get_template_part('block', 'sidebar-search');?>
				<?php get_template_part('block', 'sidebar-category-pages');?>
				<?php get_template_part('block', 'sidebar-awards');?>
				<?php get_template_part('block', 'sidebar-info');?>
            </div>
        </div>
    </div>


</section>
	
	
	
<?php get_footer(); ?>