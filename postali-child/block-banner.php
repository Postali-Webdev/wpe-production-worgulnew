<?php
/**
 * Banner Block Element
 * @package Postali Parent
 * @author Postali LLC
 */
$defaultBanner = get_field('default_banner', 'options');
$smallText = get_the_title();
$largeText = get_the_excerpt();
$ctaText = get_field('cta_text');
$ctaPhone = get_field('cta_phone', 'options');
?>

    <?php $backgroundImg = wp_get_attachment_image_src( get_post_thumbnail_id($post->ID), 'full' );?>
        <?php if ( is_tree ( array (339,9527) ) ) { ?><?php $background_img = "/wp-content/uploads/2014/03/content_headers_drugs.jpg"; ?> <!-- drug crimes -->
        <?php } elseif ( is_tree ( array (426,9598) ) ) { ?><?php $background_img = "/wp-content/uploads/2014/03/content_headers_arson_trespassing.jpg"; ?> <!-- property crimes -->
        <?php } elseif ( is_tree ( array (414,9457) ) ) { ?><?php $background_img = "/wp-content/uploads/2014/03/content_headers_assault.jpg"; ?> <!-- assault crimes -->
        <?php } elseif ( is_tree ( array (374,9531) ) ) { ?><?php $background_img = "/wp-content/uploads/2014/03/content_headers_criminal_traffic.jpg"; ?> <!-- traffic crimes -->   
        <?php } elseif ( is_tree ( array (441,10476) ) ) { ?><?php $background_img = "/wp-content/uploads/2014/03/content_headers_dui.jpg"; ?> <!-- DUI -->   
        <?php } elseif ( is_tree ('275') ) { ?><?php $background_img = "/wp-content/uploads/2014/03/content_headers_violent_crimes.jpg"; ?> <!-- firearms & weapons -->   
        <?php } elseif ( is_tree ('265') ) { ?><?php $background_img = "/wp-content/uploads/2014/06/content_headers_fraud.jpg"; ?> <!-- fraud --> 
        <?php } elseif ( is_tree ( array (247,9440) ) ) { ?><?php $background_img = "/wp-content/uploads/2014/03/content_headers_kidnapping.jpg"; ?> <!-- kidnapping & family --> 
        <?php } elseif ( is_tree ('234') ) { ?><?php $background_img = "/wp-content/uploads/2014/03/content_headers_marijuana.jpg"; ?> <!-- marijuana --> 
        <?php } elseif ( is_tree ( array (168,9534) ) ) { ?><?php $background_img = "/wp-content/uploads/2014/03/content_headers_sex_crimes.jpg"; ?> <!-- sex crimes --> 
        <?php } elseif ( is_tree ('150') ) { ?><?php $background_img = "/wp-content/uploads/2014/03/content_header_student_underage.jpg"; ?> <!-- juvenile defense --> 
        <?php } elseif ( is_tree ( array (492,9602) ) ) { ?><?php $background_img = "/wp-content/uploads/2014/03/content_headers_theft.jpg"; ?> <!-- theft --> 
        <?php } elseif ( is_tree ('216') ) { ?><?php $background_img = "/wp-content/uploads/2014/03/content_headers_traffic_violations.jpg"; ?> <!-- traffic violations --> 
        <?php } elseif ( is_tree ( array (194,9607) ) ) { ?><?php $background_img = "/wp-content/uploads/2014/03/content_headers_violent_crimes.jpg"; ?> <!-- violent crimes -->  
        <?php } else { ?>
            <?php $background_img = "/wp-content/uploads/2021/06/content_header_image.jpg"; ?>
        <?php } ?>
        <div class="banner" style="background: url('<?php echo $background_img; ?>') no-repeat; background-size:cover;">

            <div id="banner-container" class="container">
                <h1><?php echo $smallText; ?></h1>
                <?php if ( has_excerpt() ) { the_excerpt(); } ?>    
                <?php if(is_page('441')) { ?>
                <div class="title_buttons clearfix">
                    <a href="/hire-worgul-law/" title="Why Hire Us">Why Hire Us? &gt; </a>
                    <a href="/category/case-results+dui/" title="DUI Case Results">DUI Case Results &gt; </a>
                </div>
            <?php } ?>         
            </div> 
        </div>