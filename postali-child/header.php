<?php
/**
 * Theme header.
 *
 * @package Postali Child
 * @author Postali LLC
**/
?><!DOCTYPE html>
<html class="no-js" <?php language_attributes(); ?>>
<head>

<?php if (is_page_template('front-page.php')) { ?>
    <link rel="preload" as="image" href="/wp-content/uploads/2014/06/homepage_slider_3.jpg" />
    <link rel="preload" as="image" href="/wp-content/uploads/2014/06/homepage_slider_3.jpg.webp" />
<?php } ?>

<?php if (is_singular()) { ?>
    <link rel="preload" as="image" href="/wp-content/themes/postali-child/images/content_header_image.jpg" />
<?php } ?>

<!-- Google Tag Manager -->
<noscript><iframe src="//www.googletagmanager.com/ns.html?id=GTM-NXP8XB"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'//www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NXP8XB');</script>
<!-- End Google Tag Manager -->

<!-- Schema -->                
<?php if ( is_tree ('9275') ) { // Greensburg ?>
	<?php echo '<script type="application/ld+json">' . strip_tags(get_field('footer_greensburg_schema','options')) . '</script>'; ?>
<?php } else if ( is_tree ('12397') ) { // Beaver ?>
	<?php echo '<script type="application/ld+json">' . strip_tags(get_field('footer_beaver_schema','options')) . '</script>'; ?>
<?php } else if ( is_tree ('12411') ) { // Butler ?>
	<?php echo '<script type="application/ld+json">' . strip_tags(get_field('footer_butler_schema','options')) . '</script>'; ?>
<?php } else if ( is_tree('12580') ) { // Washington ?>
	<?php echo '<script type="application/ld+json">' . strip_tags(get_field('footer_washington_schema','options')) . '</script>'; ?>
<?php } else { ?>
	<?php echo '<script type="application/ld+json">' . strip_tags(get_field('global_schema','options')) . '</script>'; ?>
<?php } ?>

<?php if( get_field('single_schema') ) : ?>
	<?php echo '<script type="application/ld+json">' . strip_tags(get_field('single_schema')) . '</script>'; ?>
<?php endif; ?>

<meta http-equiv="Content-Type" content="text/html; charset=<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php wp_title( '|', true, 'right' ); ?></title>
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
	<!-- Google Tag Manager (noscript) -->
    <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NXP8XB"
    height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
    <!-- End Google Tag Manager (noscript) -->

	<header>
		<!-- GITHUB TEST -->
		<div class="header-results">
			<div class="container_inner" id="header-case-results">
				<span class="results-headline"><span class="icon-Worgul-Icon-Gavel"></span> &nbsp;Case Results: </span>
				<div id="header-results">
				<?php 
					$query = new WP_Query( array(
						'posts_per_page'   => 5,
						'post_type'        => 'results', 
						'orderby'          => 'desc',
						'category__in' => array(8),
					) );
					while ( $query->have_posts() ) : $query->the_post(); ?>
							<div class="result"><a href="<?php the_permalink(); ?>" title="<?php the_title(); ?>"><?php the_title(); ?></a></div>
					<?php endwhile; wp_reset_postdata(); ?>
				</div>
			</div>
		</div>
		<div id="header-top" class="container">
			<div id="header-top_left">
				<div class="logo_no_animate">                    
                    <!-- replace logo graphics with live text logo -->
					<a href="<?php echo home_url(); ?>/" title="Worgul Law Firm LLC">
						<img src="/wp-content/uploads/2023/04/Worgul_Sarna_Ness_Logo_reversed.svg" alt="Worgul Law Firm LLC" id="header_logo_block">
					</a>
                </div>
			</div>
			
			<div id="header-top_right">
				<div id="header-top_menu">
					<?php 
						$menu_found = false;
						if( have_rows('assign_location_menus', 'options') ) {
							while( have_rows('assign_location_menus', 'options') ) {
								the_row();
								$page_object = get_sub_field('parent_page');
								$menu_to_use = get_sub_field('menu');
								if ( is_tree( $page_object->ID ) ) {
									$args = array(
										'container' => false,
										'menu' => $menu_to_use
									);
									wp_nav_menu( $args );
									$menu_found = true;
									break;
								}
							}
						}

						if ( !$menu_found ) {
							$args = array(
								'container' => false,
								'theme_location' => 'header-nav'
							);
							wp_nav_menu( $args );	
						}						
					?>	
					<div id="header-top_mobile">
						<div id="menu-icon" class="toggle-nav">
							<span class="line line-1"></span>
							<span class="line line-2"></span>
							<span class="line line-3"></span>
						</div>
					</div>
				</div>
			</div>
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
			<h4 class="phone_tab">Call <a href="tel:<?php echo $local_phone; ?>" title="Call Worgul, Sarna &amp; Ness"> <?php echo $local_phone; ?></a> today</h4>
		</div>

		<script>
		<?php
		if ( !empty(get_field('single_schema')) ) {
			the_field('single_schema');
		} ?>
		</script>
	</header>
