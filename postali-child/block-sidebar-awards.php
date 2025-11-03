<?php
/**
 * Banner Block Element
 * @package Postali Parent
 * @author Postali LLC
 */

?>

    <div class="sidebar-block" id="sidebar-awards">
        <div class="sidebar-header">Earning your trust</div>
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
        <div class="results-testimonials">
            <a class="btn-sidebar" id="testimonials" href="/client-reviews-testimonials/">
                Click to Read What Clients Say About Us
            </a>
            <a class="btn-sidebar" id="results" href="/category/case-results/">
                Click to See Our Latest Case Results
            </a>
        </div>
    </div>

