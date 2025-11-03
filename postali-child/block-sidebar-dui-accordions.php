<?php
/**
 * Banner Block Element
 * @package Postali Parent
 * @author Postali LLC
 */

?>

    <div class="sidebar-block" id="sidebar-accordions">
        <div class="sidebar-header">Driving Under the Influence (DUI)</div>
        <div class="accordions">
            <div class="accordions_title"><h3>DUI Lawyer</h3><div class="plus"></div></div>
            <div class="accordions_content">
                <?php
                    $args = array(
                        'container' => false,
                        'theme_location' => 'sidebar-dui-lawyer'
                    );
                    wp_nav_menu( $args );
                ?>
            </div>
            <div class="accordions_title"><h3>DUI Charges</h3><div class="plus"></div></div>
            <div class="accordions_content">
                <?php
                    $args = array(
                        'container' => false,
                        'theme_location' => 'sidebar-dui-charges'
                    );
                    wp_nav_menu( $args );
                ?>
            </div>
            <div class="accordions_title"><h3>DUI Consequences</h3><div class="plus"></div></div>
            <div class="accordions_content">
                <?php
                    $args = array(
                        'container' => false,
                        'theme_location' => 'sidebar-dui-consequences'
                    );
                    wp_nav_menu( $args );
                ?>
            </div>
            <div class="accordions_title"><h3>Laws & Information</h3><div class="plus"></div></div>
            <div class="accordions_content">
                <?php
                    $args = array(
                        'container' => false,
                        'theme_location' => 'sidebar-dui-laws'
                    );
                    wp_nav_menu( $args );
                ?>
            </div>
        </div>

    </div>

