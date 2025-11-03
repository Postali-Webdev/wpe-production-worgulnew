<?php
/**
 * Banner Block Element
 * @package Postali Parent
 * @author Postali LLC
 */

?>
<?php if ( !is_page('2488') ) { ?>
    <div class="sidebar-block" id="sidebar-information">
        <?php if ( is_tree ('11950') ) { ?> <!-- drug crimes -->
            <div class="sidebar-header">Drug Crimes</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'drug-crimes-nav'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('9527') ) { ?> <!-- drug crimes - GREENSBURG    -->
            <div class="sidebar-header">Drug Crimes</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'drug-crimes-nav-gb'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('426') ) { ?><!-- property crimes -->
            <div class="sidebar-header">Arson & Property Crimes</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'property-nav'
                );
                wp_nav_menu( $args );
            ?>	
        <?php } elseif ( is_tree ('9598') ) { ?><!-- property crimes - GREENSBURG -->
            <div class="sidebar-header">Arson & Property Crimes</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'property-nav-gb'
                );
                wp_nav_menu( $args );
            ?>	
        <?php } elseif ( is_tree ('414') ) { ?><!-- assault crimes -->
            <div class="sidebar-header">Assault & Domestic Violence</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'assault-nav'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('9575') ) { ?><!-- assault crimes - GREENSBURG -->
            <div class="sidebar-header">Assault & Domestic Violence</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'domestic-nav-gb'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('394') ) { ?><!-- crimes against the public -->   
            <div class="sidebar-header">Crimes Against the Public and Peace</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'public-nav'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('374') ) { ?><!-- criminal traffic crimes -->   
            <div class="sidebar-header">Criminal Traffic Violations</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'criminal-traffic-nav'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_child ('441') ) { ?><!-- DUI -->   
            <div class="sidebar-header">Driving Under the Influence (DUI)</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'dui-nav'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('10476') ) { ?><!-- DUI - GREENSBURG   -->   
            <div class="sidebar-header">Driving Under the Influence (DUI)</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'dui-nav-gb'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('293') ) { ?><!-- federal crimes -->   
            <div class="sidebar-header">Federal Crimes</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'federal-nav'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('275') ) { ?><!-- firearms & weapons -->   
            <div class="sidebar-header">Firearms/Weapons Crimes</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'firearms-nav'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('265') ) { ?><!-- fraud --> 
            <div class="sidebar-header">Fraud</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'fraud-nav'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('247') ) { ?><!-- kidnapping & family --> 
            <div class="sidebar-header">Kidnapping & Family Crimes</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'kidnapping-nav'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('9440') ) { ?><!-- kidnapping & family - GREENSBURG --> 
            <div class="sidebar-header">Family Crimes</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'family-nav-gb'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('234') ) { ?><!-- marijuana --> 
            <div class="sidebar-header">Marijuana Crimes</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'marijuana-nav'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('168') ) { ?><!-- sex crimes --> 
            <div class="sidebar-header">Sex Crimes</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'sex-nav'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('9534') ) { ?><!-- sex crimes - GREENSBURG --> 
            <div class="sidebar-header">Sex Crimes</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'sex-nav-gb'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('150') ) { ?><!-- juvenile defense --> 
            <div class="sidebar-header">Student & Underage Crimes</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'juvenile-nav'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('492') ) { ?><!-- theft --> 
            <div class="sidebar-header">Theft</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'theft-nav'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('216') ) { ?><!-- traffic violations --> 
            <div class="sidebar-header">Traffic Offenses</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'traffic-nav'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('9531') ) { ?><!-- traffic violations - GREENSBURG --> 
            <div class="sidebar-header">Traffic Offenses</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'traffic-nav-gb'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('194') ) { ?><!-- violent crimes -->  
            <div class="sidebar-header">Violent Crimes</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'violent-nav'
                );
                wp_nav_menu( $args );
            ?>
        <?php } elseif ( is_tree ('9607') ) { ?><!-- violent crimes - GREENSBURG -->  
            <div class="sidebar-header">Violent Crimes</div>
            <?php
                $args = array(
                    'container' => false,
                    'theme_location' => 'violent-nav-gb'
                );
                wp_nav_menu( $args );
            ?>
        <?php } ?>
    </div>
<?php } ?>