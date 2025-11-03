<?php
/**
 * Banner Block Element
 * @package Postali Parent
 * @author Postali LLC
 */

?>

    <div class="sidebar-block" id="sidebar-information">
        <div class="sidebar-header">Case Result Categories</div>
        <?php
            $args = array(
                'container' => false,
                'theme_location' => 'results-nav'
            );
            wp_nav_menu( $args );
        ?>	
    </div>
