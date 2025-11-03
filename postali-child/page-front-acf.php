<?php
/**
 * Template Name: Front Page - ACF
 * @package Postali Child
 * @author Postali LLC
**/

// ACF Fields
$hero_banner = get_field('hero_banner_image');
$hero_nav_group = get_field('hero_in_page_nav');


get_header();?>

<div id="home" class="page-content">
    <section class="hero">
        <div id="homepage_slider" style="background-image: url('<?php esc_html_e($hero_banner['url']); ?>');"></div>
        <div id="homepage_intro" class="textpanel">
            <div class="container_inner">
                <div class="columns">
                    <div class="column-33">
                        <?php _e($hero_nav_group['left_copy']); ?>
                    </div>
                    <div class="column-66">
                        <?php if( $hero_nav_group['navigation'] ) : ?>
                            <div class="nav-container">
                            <?php foreach( $hero_nav_group['navigation'] as $nav ) : the_row(); ?>
                                <a class="nav-item" href="<?php esc_html_e( $nav['anchor_link'] ); ?>">
                                    <?php esc_html_e( $nav['copy'] ); ?>
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

    <section id="panel-2">
        <div class="textpanel">
            <div class="container_inner">
                <div class="columns">
                    <div class="column-33">
                        <?php the_field('p2_left_column_copy'); ?>
                    </div>
                    <div class="column-66">
                        <?php the_field('p2_right_column_video'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-3">
        <div class="textpanel">
            <div class="container_inner">
                <div class="columns">
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
                <?php get_template_part('block', 'hp-float-modal', ['data' => ['title' => get_field('p4_section_title'), 'intro-copy' => get_field('p4_intro_copy'), 'bg-image' => get_field('p4_banner_image'), 'float-copy' => get_field('p4_floating_copy') ] ]); ?>
            </div>
        </div>
    </section>

    <section id="panel-5">
        <div class="textpanel">
            <div class="container_inner">
                <div id="practice_areas">
                    <h2><?php the_field('p5_section_title'); ?></h2>
                    <?php if( have_rows('p5_practice_areas') ) : ?>
                        <div class="pa-grid">
                        <?php while( have_rows('p5_practice_areas') ) : the_row(); 
                        $link = get_sub_field('practice_area'); ?>
                            <a href="<?php esc_html_e( $link['url'] );  ?>"><?php esc_html_e( $link['title'] );  ?></a>
                        <?php endwhile; ?>
                        </div>
                    <?php endif; ?>
                </div>
                <p class="featured-title"><?php the_field('p5_featured_practice_area_title'); ?></p>
                <h2><?php the_field('p5_section_sub_title'); ?></h2>
                <div class="columns">
                    <div class="column-66">
                        <?php the_field('p5_left_column_copy'); ?>
                    </div>
                    <div class="column-33">
                        <div class="sidebox-container">
                            <?php the_field('p5_related_questions'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-6">
        <span id="homepage_crimes"></span>
        <div class="textpanel">
            <div class="columns">
                <?php get_template_part('block', 'hp-float-modal', ['data' => ['title' => get_field('p6_section_title'), 'intro-copy' => get_field('p6_section_intro_copy'), 'bg-image' => get_field('p6_banner_image'), 'float-copy' => get_field('p6_search_copy') ] ]); ?>
            </div>
        </div>
    </section>

    <section id="panel-7">
        <div class="textpanel">
            <div class="container_inner">
                <h2><?php the_field('p7_section_title'); ?></h2>
                <?php if( have_rows('p7_list_boxes') ) : $total = count( get_field('p7_list_boxes')); ?>
                    <div class="list-box-grid list-box-grid_<?php esc_html_e($total); ?>">
                    <?php while( have_rows('p7_list_boxes') ) : the_row(); ?>
                        <div class="sidebox-container">
                            <?php the_sub_field('copy'); ?>
                        </div>
                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
                <?php the_field('p7_contact_button'); ?>
                <?php if( have_rows('p7_quad_copy_section') ) : $count = 0; ?>
                    <div class="columns">
                    <?php while( have_rows('p7_quad_copy_section') ) : the_row(); $count++; ?>
                        <?php if( $count == 1 || $count == 3) : ?>
                            <div class="p7-column">
                        <?php endif; ?>
                        <?php the_sub_field('copy'); ?>
                        <?php if( $count == 2 || $count == 4) : ?>
                            </div>
                        <?php endif; ?>
                        <?php if( $count == 2 ) : ?>
                            <div class="column-center"><img decoding="async" class="icon_circle_background" src="/wp-content/themes/postali-child/images/homepage_scales_icon.png" alt="Contact Mike Worgul anytime"></div>
                        <?php endif;  ?>

                    <?php endwhile; ?>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </section>

    <section id="panel-8">
        <span id="homepage_police"></span>
        <div class="textpanel">
            <div class="columns">
                <?php get_template_part('block', 'hp-float-modal', ['data' => ['title' => get_field('p8_section_title'), 'intro-copy' => get_field('p8_intro_copy'), 'bg-image' => get_field('p8_banner_image'), 'float-copy' => get_field('p8_floating_copy') ] ]); ?>
            </div>
        </div>
        <div class="textpanel">
            <div class="container_inner">
                <div class="columns">
                    <div class="column-66">
                        <?php the_field('p8_left_column_copy'); ?>
                    </div>
                    <div class="column-33">
                        <div class="sidebox-container">
                            <?php the_field('p8_right_column_quote'); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-9">
        <span id="homepage_process"></span>
        <div class="textpanel">
            <div class="columns">
                <?php get_template_part('block', 'hp-float-modal', ['data' => ['title' => get_field('p9_section_title'), 'intro-copy' => get_field('p9_intro_copy'), 'bg-image' => get_field('p9_banner_image'), 'float-copy' => get_field('p9_floating_copy') ] ]); ?>
            </div>
        </div>
        <div class="textpanel">
            <div class="container_inner">
                <h2><?php the_field('p9_section_2_title'); ?></h2>
                <div class="columns">
                    <div class="column-50">
                        <div class="sidebox-container">
                            <?php the_field('p9_left_column_cta'); ?>
                        </div>
                    </div>
                    <div class="column-50">
                        <?php the_field('p9_right_column_copy'); ?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="panel-10">
        <div class="textpanel">
            <div class="columns">
                <?php get_template_part('block', 'hp-float-modal', ['data' => ['title' => get_field('p10_section_title'), 'intro-copy' => get_field('p10_intro_copy'), 'bg-image' => get_field('p10_banner_image'), 'float-copy' => get_field('p10_floating_copy') ] ]); ?>
            </div>
        </div>
    </section>
    
    


</div><!-- #front-page -->

<?php get_footer();?>