<?php
/**
 * Template Name: Front Page
 * @package Postali Child
 * @author Postali LLC
**/

// ACF Fields
$hero_banner = get_field('hero_banner_image');
$hero_nav_group = get_field('hero_in_page_nav');


get_header();?>

<div id="home" class="page-content">
    <section class="hero">
        <div id="homepage_slider" style="background-image: url('<?php esc_html_e($hero_banner['url']); ?>');">
            <div class="container">
                <div class="columns">
                    <div class="column-full centered center">
                        <span class="banner-headline"><?php the_field('hero_headline') ?></span>
                    </div>
                </div>
            </div>
        </div>
        <div id="homepage_intro" class="textpanel">
            <div class="container_inner">
                <div class="columns">
                    <div class="column-full">
                        <?php if( $hero_nav_group['navigation'] ) : ?>
                            <div class="nav-container">
                            <?php foreach( $hero_nav_group['navigation'] as $nav ) : the_row(); ?>
                                <a class="nav-item" href="<?php esc_html_e( $nav['anchor_link'] ); ?>">
                                    <?php esc_html_e( $nav['copy'] ); ?>
                                    <div class="arrow"></div>
                                </a>
                            <?php endforeach; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-1">
        <div class="textpanel">
            <div class="container_inner">
                <div class="columns">
                    <div class="column-66">
                        <?php the_field('p1_left_column_copy'); ?>
                    </div>
                    <div class="column-33">
                        <?php the_field('p1_right_column_latest_results'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hp-testimonial">
        <div class="container">
            <div class="columns">
                <div class="column-66 centered center">
                    <?php the_field('testimonial'); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="hp-awards">
        <div class="container">
            <div class="columns">
                <?php if( have_rows('awards','options') ): ?>
                <div class="awards-block">
                <?php while( have_rows('awards','options') ): the_row(); 
                        $award_image = get_sub_field('award_image');
                        $award_link = get_sub_field('award_link');
                    ?>
                    <a href="<?php echo $award_link; ?>" target="_blank">
                        <img src="<?php echo esc_url($award_image['url']); ?>" alt="<?php echo esc_attr($award_image['alt']); ?>" />
                    </a>
                <?php endwhile; ?>
                </div>
            <?php endif; ?> 
            </div>
        </div>
    </section>

    <section id="panel-2">
        <div class="textpanel">
            <div class="container_inner">
                <div class="columns">
                    <div class="column-50">
                        <?php the_field('p2_left_column_copy'); ?>
                    </div>
                    <div class="column-50">
                        <div class="video-wrapper">
                            <div class="video-container">
                                <iframe width="560" height="315" src="https://www.youtube.com/embed/<?php the_field('p2_right_column_video'); ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" referrerpolicy="strict-origin-when-cross-origin" allowfullscreen></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-3">
        <div class="textpanel">
            <div class="container_inner">
                <div class="columns">
                    <div class="column-full centered center">
                        <h2><?php the_field('p3_section_title'); ?></h2>
                    </div>
                    <div class="spacer-30"></div>
                    <?php if( have_rows('p3_attorneys') ) : ?>
                        <div id="homepage_attorney_bios">
                            <div class="container_inner">
                                <div class="columns">
                                    <?php while( have_rows('p3_attorneys') ) : the_row(); ?>
                                        <div class="column-33">
                                            <?php the_sub_field('attorney_copy'); ?>
                                        </div>
                                    <?php endwhile; ?>
                                </div>
                            </div>
                        </div>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-4">
        <div class="textpanel">
            <div class="columns">
                <div class="textpanel blue">
                    <div class="container_inner">
                        <h2><?php the_field('p4_section_title'); ?></h2>
                        <?php the_field('p4_intro_copy'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="hp-map-block">
        <div class="container">
            <div class="columns">
                <div class="column-66">
                    <?php the_field('maps_copy'); ?>
                    <div class="spacer-60"></div>
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6073.174825654348!2d-79.99947!3d40.440134!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8834f150ab5f2477%3A0x3745f1165f5d487f!2sWorgul%2C%20Sarna%20%26%20Ness%2C%20Criminal%20Defense%20Attorneys%2C%20LLC!5e0!3m2!1sen!2sus!4v1762280832943!5m2!1sen!2sus" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <div class="column-33">
                    <?php the_field('address_copy'); ?>
                    <?php echo do_shortcode( get_field('maps_form') ); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-4_a">
        <div class="textpanel">
            <div class="columns">
                <?php
                    $bg_image = get_field('p4_banner_image');
                    $float_copy = get_field('p4_floating_copy');
                ?>
                <div class="textpanel bg-container" style="background-image: url('<?php esc_html_e($bg_image['url']); ?>');">
                    <div class="container_inner">
                        <?php _e($float_copy); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-5">
        <div class="textpanel">
            <div class="container_inner">
                <div class="columns">
                    <div class="column-full centered center">
                        <p class="sub-title"><?php the_field('p5_featured_practice_area_title'); ?></p>
                        <h2><?php the_field('p5_section_sub_title'); ?></h2>
                    </div>
                    <div class="spacer-30"></div>
                    <div class="column-66">
                        <?php the_field('p5_left_column_copy'); ?>
                    </div>
                    <div class="column-33">
                        <div class="sidebox-container">
                            <?php the_field('p5_related_questions'); ?>
                        </div>
                    </div>
                </div>

                <div id="practice_areas">
                    <h2><?php the_field('p5_section_title'); ?></h2>
                    <?php if( have_rows('p5_practice_areas') ) : ?>
                        <ul>
                        <?php while( have_rows('p5_practice_areas') ) : the_row(); 
                        $link = get_sub_field('practice_area'); ?>
                            <li><a href="<?php esc_html_e( $link['url'] );  ?>"><?php esc_html_e( $link['title'] );  ?></a></li>
                        <?php endwhile; ?>
                    </ul>
                    <?php endif; ?>
                </div>

            </div>
        </div>
    </section>

    <section id="panel-6">
        <div class="textpanel">
            <div class="columns">
                <div class="textpanel blue">
                    <div class="container_inner">
                        <h2><?php the_field('p6_section_title'); ?></h2>
                        <p><?php the_field('p6_section_intro_copy'); ?></p>
                    </div>
                </div>
                <div class="textpanel bg-container" style="background-image: url('<?php the_field('p6_banner_image'); ?>');">
                    <div class="container_inner">
                        <?php the_field('p6_search_copy'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-7">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <?php the_field('p7_left_column'); ?>
                </div>
                <div class="column-50">
                <?php if( have_rows('p7_accordions') ) : ?>
                    <div class="spacer-90"></div>
                <?php while( have_rows('p7_accordions') ) : the_row(); ?>
                    <div class="accordions">
                        <div class="accordions_title"><?php the_sub_field('question'); ?><span>+</span></div>
                        <div class="accordions_content"><?php the_sub_field('answer'); ?></div>
                    </div>
                <?php endwhile; ?>
                <?php endif; ?>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-8">
        <div class="textpanel">
            <div class="columns">
                <div class="textpanel blue">
                    <div class="container_inner">
                        <h2><?php the_field('p8_section_title'); ?></h2>
                        <p><?php the_field('p8_intro_copy'); ?></p>
                    </div>
                </div>
                <div class="textpanel bg-container" style="background-image: url('<?php the_field('p8_banner_image'); ?>');">
                    <div class="container_inner">
                        <?php the_field('p8_floating_copy'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-9">
        <div class="container">
            <div class="columns">
                <div class="column-full centered center">
                    <h2><?php the_field('p9_section_title'); ?></h2>
                </div>
            </div>

            <div class="columns">
                <div class="column-50">
                    <?php the_field('p9_left_column_copy'); ?>
                </div>
                <div class="column-50">
                    <?php the_field('p9_right_column_copy'); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="hiring">
        <div class="textpanel">
            <div class="columns">
                <div class="textpanel blue">
                    <div class="container_inner">
                        <h2><?php the_field('hiring_section_title'); ?></h2>
                        <p><?php the_field('hiring_intro_copy'); ?></p>
                    </div>
                </div>
                <div class="textpanel bg-container" style="background-image: url('<?php the_field('hiring_banner_image'); ?>');">
                    <div class="container_inner">
                        <?php the_field('hiring_floating_copy'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="convicted">
        <div class="container">
            <div class="columns">
                <div class="column-66 centered center">
                    <h2><?php the_field('convicted_section_title'); ?></h2>
                </div>
            </div>

            <div class="spacer-60"></div>

            <div class="columns">
                <div class="column-50">
                    <?php the_field('convicted_left_column_copy'); ?>
                </div>
                <div class="column-50">
                    <?php the_field('convicted_right_column_copy'); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="faqs">
        <div class="container">
            <div class="columns">
                <div class="column-50">
                    <?php the_field('faq_left_column_copy'); ?>
                </div>
                <div class="column-50">
                    <?php the_field('faq_right_column_copy'); ?>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-10">
        <div class="textpanel">
            <div class="columns">
                <div class="textpanel blue">
                    <div class="container_inner">
                        <h2><?php the_field('p10_section_title'); ?></h2>
                        <p><?php the_field('p10_intro_copy'); ?></p>
                    </div>
                </div>
                <div class="textpanel bg-container" style="background-image: url('<?php the_field('p10_banner_image'); ?>');">
                    <div class="container_inner">
                        <?php the_field('p10_floating_copy'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    


</div><!-- #front-page -->

<?php get_footer();?>