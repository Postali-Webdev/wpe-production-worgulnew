<?php
/**
 * Banner Block Element
 * @package Postali Parent
 * @author Postali LLC
 */

?>

    <div class="sidebar-block" id="sidebar-information">
        <div class="sidebar-header">Get more information</div>
        <?php if( have_rows('more_information','options') ): ?>
            <div class="info-block">
            <?php while( have_rows('more_information','options') ): the_row(); 
                    $info_image = get_sub_field('link_image');
                    $info_link = get_sub_field('link_location');
                    $info_text = get_sub_field('link_title');
                ?>
                <a href="<?php echo $info_link; ?>" title="<?php echo $info_text; ?>" class="more-info-btn" style="background:url(<?php echo $info_image; ?>);">
                    <p><?php echo $info_text; ?></p>
                </a>
            <?php endwhile; ?>
            </div>
        <?php endif; ?> 
    </div>

