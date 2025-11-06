<?php
/**
 * Theme footer
 *
 * @package Postali Child
 * @author Postali LLC
**/
?>
<footer>

<section class="footer">
    <div class="container">
        <div class="columns grid">
            <div class="footer-inner left">
                <?php if ( is_tree ('9275') ) { // Greensburg ?>
                    <?php $address = get_field('greensburg_address','options'); ?>
                    <?php $phone = get_field('greensburg_phone','options'); ?>
                <?php } else if ( is_tree ('12397') ) { // Beaver ?>
                    <?php $address = get_field('beaver_address','options'); ?>
                    <?php $phone = get_field('beaver_phone','options'); ?>
                <?php } else if ( is_tree ('12411') ) { // Butler ?>
                    <?php $address = get_field('butler_address','options'); ?>
                    <?php $phone = get_field('butler_phone','options'); ?>
                <?php } else if ( is_tree('12580') ) { // Washington ?>
                    <?php $address = get_field('washington_address', 'options'); ?>
                    <?php $phone = get_field('washington_phone', 'options'); ?>
                <?php } else { ?>
                    <?php $address = get_field('pittsburgh_address','options'); ?>	
                    <?php $phone = get_field('global_phone','options'); ?>	
                <?php } ?>

                <p><strong>Worgul, Sarna & Ness, Criminal Defense Attorneys</strong></p>
                <p><?php echo $address; ?></p>
                <p><a href="tel:<?php echo $phone; ?>"><?php echo $phone; ?></a></p>

                <?php
					$args = array(
						'container' => false,
						'theme_location' => 'footer-nav'
					);
					wp_nav_menu( $args );
				?>

            </div>
            <div class="footer-inner middle">
                <?php if ( is_tree ('9275') ) { // Greensburg ?>
                    <?php $map_embed = get_field('greensburg_map','options'); ?>
                <?php } else if ( is_tree ('12397') ) { // Beaver ?>
                    <?php $map_embed = get_field('beaver_map','options'); ?>
                <?php } else if ( is_tree ('12411') ) { // Butler ?>
                    <?php $map_embed = get_field('butler_map','options'); ?>
                <?php } else if ( is_tree('12580') ) { // Washington ?>
                    <?php $map_embed = get_field('washington_map', 'options'); ?>
                <?php } else { ?>
                    <?php $map_embed = get_field('pittsburgh_map','options'); ?>	
                <?php } ?>
                
                <iframe title="embedded map" src="<?php echo esc_url($map_embed); ?>" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="footer-inner right">
                <?php echo do_shortcode("[gravityform id='2' title='false' description='false']"); ?>
            </div>
            <div class="footer-inner lower">
                <p class="footer-disclaimer"><?php the_field('disclaimer_text','options'); ?></p>
                <?php if(is_page_template('front-page.php')) { ?>
                <a href="https://www.postali.com" title="Site design and development by Postali" target="blank"><img src="https://www.postali.com/wp-content/themes/postali-site/img/postali-tag-reversed.png" alt="Postali | Results Driven Marketing" style="display:block; max-width:250px; margin:30px 0;"></a>
                <?php } ?>
            </div>
        </div>
    </div>
</section>

<section class="footer-copyright">
    <div class="container">
        <p>Copyright © <?php echo date("Y"); ?>  Worgul, Sarna & Ness, Criminal Defense Attorneys, LLC</p>
    </div>
</footer>

<div id="mobile_contact_bar" style="opacity: 1; bottom: -1px;">
    <div class="columns">
        <div class="column-50">
            <div class="mobile_button_yellow">
                <span class="icon-Worgul-Icon-Phone"></span>
                <?php if ( is_tree('9275') ) { // Greensburg
                    $local_phone = get_field('greensburg_phone', 'options');
                } else if ( is_tree('12397') ) { // Beaver
                    $local_phone = get_field('beaver_phone', 'options');
                } else if ( is_tree('12411') ) { // Butler
                    $local_phone = get_field('butler_phone', 'options');
                } else if ( is_tree('12580') ) { // Washington
                    $local_phone = get_field('washington_phone', 'options');
                } else {
                    $local_phone = get_field('global_phone', 'options');
                } ?>
                <a href="tel:<?php echo $local_phone; ?>" class="ibp" title="Call Worgul, Sarna and Ness Today"><?php echo $local_phone; ?></a>
            </div>
        </div>
        <div class="column-50">
            <div class="mobile_button_yellow">
                <span class="icon-Worgul-Icon-Mail"></span>
                <a href="mailto:advice@pittsburghcriminalattorney.com" title="Email Us">Email</a>
            </div>
        </div>
    </div>
</div>

<!-- script for audioeye -->
<script type=“text/javascript”>!function(){var b=function(){window.__AudioEyeSiteHash = “45ca4209b6186bb1279baa65a9754945"; var a=document.createElement(“script”);a.src=“https://wsmcdn.audioeye.com/aem.js”;a.type=“text/javascript”;a.setAttribute(“async”,“”);document.getElementsByTagName(“body”)[0].appendChild(a)};“complete”!==document.readyState?window.addEventListener?window.addEventListener(“load”,b):window.attachEvent&&window.attachEvent(“onload”,b):b()}();</script>

<?php wp_footer(); ?>

<script src="//www.apexchat.net/scripts/invitation.ashx?company=pittsburghcriminalattorney"async></script>

</body>
</html>


