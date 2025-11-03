<?php
/**
 * Theme functions.
 *
 * @package Postali Child
 * @author Postali LLC
 */
	require_once dirname( __FILE__ ) . '/includes/admin.php';
	require_once dirname( __FILE__ ) . '/includes/utility.php';
	require_once dirname( __FILE__ ) . '/includes/case-results-cpt.php'; // Custom Post Type Case Results
	require_once dirname( __FILE__ ) . '/includes/testimonials-cpt.php'; // Custom Post Type Testimonials
	//require_once dirname( __FILE__ ) . '/includes/attorneys-cpt.php'; // Custom Post Type Attorneys
	//require_once dirname( __FILE__ ) . '/includes/social-share.php'; // Social Media Sharing


	add_action('wp_enqueue_scripts', 'postali_parent');
	function postali_parent() {
		wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/assets/css/styles.css' ); // Enqueue parent theme styles
	
	}  

	add_action('wp_enqueue_scripts', 'postali_child');
	function postali_child() {

		wp_enqueue_style( 'child-styles', get_stylesheet_directory_uri() . '/style.css' ); // Enqueue Child theme style sheet (theme info)
		wp_enqueue_style( 'styles', get_stylesheet_directory_uri() . '/assets/css/styles.css'); // Enqueue child theme styles.css
		wp_enqueue_style( 'slick-css', get_stylesheet_directory_uri() . '/assets/css/slick.css'); // Enqueue child theme styles.css
		
		wp_register_style( 'icomoon-fonts', 'https://cdn.icomoon.io/152819/WorgulIcons/style-cf.css?jqpeq4', array() );
		wp_enqueue_style('icomoon-fonts');

		// Compiled .js using Grunt.js
		// wp_register_script('fitvids-src', 'https://cdnjs.cloudflare.com/ajax/libs/fitvids/1.2.0/jquery.fitvids.min.js', array('jquery') ); 
		// wp_enqueue_script('fitvids-src');
		wp_register_script('custom-scripts', get_stylesheet_directory_uri() . '/assets/js/scripts.min.js',array('jquery'), null, true); 
		wp_enqueue_script('custom-scripts');
		wp_register_script('slick-min', get_stylesheet_directory_uri() . '/assets/js/slick.min.js',array('jquery'), null, true); 
		wp_enqueue_script('slick-min');
		wp_register_script('slick-custom-min', get_stylesheet_directory_uri() . '/assets/js/slick-custom.min.js',array('jquery'), null, true); 
		wp_enqueue_script('slick-custom-min');

        if ( is_page( 12663 ) ) { // HOME - vimeo lazyload
			wp_register_script('vimeo-js', get_stylesheet_directory_uri() . '/assets/js/vi-lazyload.min.js', array('jquery'));
			wp_enqueue_script('vimeo-js');		
            wp_enqueue_style( 'vimeo-css', get_stylesheet_directory_uri() . '/assets/css/vi-lazyload.css'); 
		}

		if ( is_page( 441 ) ) { // DUI page
			wp_register_script('dui-js', get_stylesheet_directory_uri() . '/assets/js/dui-category.min.js', array('jquery'));
			wp_enqueue_script('dui-js');		
		}

        if ( is_page( 1066 ) || is_page( 1161 ) ) { // criminal process, charged with a drime pages
			wp_register_script('smooth-scroll', get_stylesheet_directory_uri() . '/assets/js/smooth-scroll.min.js', array('jquery'));
			wp_enqueue_script('smooth-scroll');		
            wp_register_script('smooth-scroll-custom', get_stylesheet_directory_uri() . '/assets/js/smooth-scroll-custom.min.js', array('jquery'));
			wp_enqueue_script('smooth-scroll-custom');		
		}

		// These scripts should be conditionally enqueued only on page templates where they are needed

		// Smooth Scroll
		// wp_register_script('smooth-scroll', get_stylesheet_directory_uri() . '/assets/js/smooth-scroll.min.js', array('jquery'));
		// wp_enqueue_script('smooth-scroll');
		// wp_register_script('smooth-scroll-settings', get_stylesheet_directory_uri() . '/assets/js/smooth-scroll-settings.min.js', array('jquery'));
		// wp_enqueue_script('smooth-scroll-settings');

		// Featherlight JS Call 
		// wp_register_script('featherlight-js', get_stylesheet_directory_uri() . '/assets/js/featherlight.min.js', array('jquery'));
		// wp_enqueue_script('featherlight-js');

	}

    //add_action('wp_dashboard_setup', 'remove_dashboard_widgets');
    //    function remove_dashboard_widgets () {
    //    remove_meta_box('dashboard_primary', 'dashboard', 'side' ); 
    //    remove_meta_box('dashboard_secondary', 'dashboard', 'side' );
    //}

	// Register Site Navigations
	function postali_child_register_nav_menus() {
		register_nav_menus(
			array(
				'header-nav' => __( 'Header Navigation', 'postali' ),
				'greensburg-nav' => __( 'Header Navigation - Greensburg', 'postali' ),
				'butler-nav' => __( 'Butler Navigation', 'postali' ),
				'washington-nav' => __( 'Washington Navigation', 'postali' ),
				'beaver-nav' => __( 'Beaver Navigation', 'postali' ),
				'footer-nav' => __( 'Footer Navigation', 'postali' ),
				'results-nav' => __( 'Case Results Categories', 'postali' ),
				'property-nav' => __( 'Arson & Property Crimes', 'postali' ),
				'assault-nav' => __( 'Assault Crimes', 'postali' ),
				'public-nav' => __( 'Crimes Against the Public', 'postali' ),
				'criminal-traffic-nav' => __( 'Criminal Traffic Violations', 'postali' ),
				'dui-nav' => __( 'DUI Child Pages', 'postali' ),
				'drug-crimes-nav' => __( 'Drug Crimes', 'postali' ),
				'federal-nav' => __( 'Federal Crimes', 'postali' ),
				'firearms-nav' => __( 'Firearms / Weapons Crimes', 'postali' ),
				'fraud-nav' => __( 'Fraud & White Collar Crimes', 'postali' ),
				'kidnapping-nav' => __( 'Kidnapping & Family Crimes', 'postali' ),
				'marijuana-nav' => __( 'Marijuana Crimes', 'postali' ),
				'sex-nav' => __( 'Sex Crimes', 'postali' ),
				'juvenile-nav' => __( 'Juvenile Crimes', 'postali' ),
				'theft-nav' => __( 'Theft Crimes', 'postali' ),
				'traffic-nav' => __( 'Traffic Violations', 'postali' ),
				'violent-nav' => __( 'Violent Crimes', 'postali' ),
				'sidebar-dui-lawyer' => __( 'Sidebar DUI Lawyer', 'postali' ),
				'sidebar-dui-charges' => __( 'Sidebar DUI Charges', 'postali' ),
				'sidebar-dui-consequences' => __( 'Sidebar DUI Consequences', 'postali' ),
				'sidebar-dui-laws' => __( 'Sidebar DUI Laws', 'postali' ),

                'property-nav-gb'       => __( 'Greensburg - Property Crimes', 'postali' ),
                'domestic-nav-gb'       => __( 'Greensburg - Domestic Violence', 'postali' ),
                'violent-nav-gb'        => __( 'Greensburg - Violent Crimes', 'postali' ),
                'dui-nav-gb'            => __( 'Greensburg - DUI', 'postali' ),
                'drug-crimes-nav-gb'    => __( 'Greensburg - Drug Crimes', 'postali' ),
                'family-nav-gb'         => __( 'Greensburg - Family Crimes', 'postali' ),
                'sex-nav-gb'            => __( 'Greensburg - Sex Crimes', 'postali' ),
                'traffic-nav-gb'        => __( 'Greensburg - Traffic Violations', 'postali' ),
				'violent-nav-gb'        => __( 'Greensburg - Violent Crimes', 'postali' ),
			)
		);
	}
	add_action( 'init', 'postali_child_register_nav_menus' );

	// create shortcode for recent posts
	add_shortcode( 'post_shortcode', 'post_shortcode' );
	function post_shortcode() {
		$output = '<h2>Latest Results</h2>';
		$output .= '<p class="featured-title">' . date('F Y') . ' Results </p>';
		$recentpostquery = new WP_Query(array(
			'post_type' => 'post',
			'posts_per_page' => 3
		));
		while ($recentpostquery->have_posts()) {
			$recentpostquery->the_post();
			$output = $output.'<a href="'.get_the_permalink().'" class="recent_posts">'.get_the_title().'</a><br>';
		}
		wp_reset_postdata();
		return $output;
	}

    // defer recaptcha
    add_filter( 'clean_url-recaptcha', function( $url )
    {
        if ( FALSE === strpos( $url, 'www.google.com/recaptcha/api.js' ) )
        { // not our file
            return $url;
        }
        // Must be a ', not "!
        return "$url' defer='defer";
    }, 11, 1 );
    

    //Remove Gutenberg Block Library CSS from loading on the frontend
    function smartwp_remove_wp_block_library_css(){
        wp_dequeue_style( 'wp-block-library' );
        wp_dequeue_style( 'wp-block-library-theme' );
        wp_dequeue_style( 'wc-blocks-style' ); // Remove WooCommerce block CSS
    } 
   add_action( 'wp_enqueue_scripts', 'smartwp_remove_wp_block_library_css', 100 );


	// Add Custom Logo Support
	add_theme_support( 'custom-logo' );

	function postali_custom_logo_setup() {
		$defaults = array(
			'flex-height' => true,
			'flex-width'  => true,
			'header-text' => array( 'site-title', 'site-description' ),
		);
		add_theme_support( 'custom-logo', $defaults );
	}
	add_action( 'after_setup_theme', 'postali_custom_logo_setup' );

	// ACF Options Pages
	if( function_exists('acf_add_options_page') ) {
		
		acf_add_options_page(array(
			'page_title'    => 'Instructions',
			'menu_title'    => 'Instructions',
			'menu_slug'     => 'theme-instructions',
			'capability'    => 'edit_posts',
			'icon_url'      => 'dashicons-smiley', // Add this line and replace the second inverted commas with class of the icon you like
			'redirect'      => false
		));

		acf_add_options_page(array(
			'page_title'    => 'Customizations',
			'menu_title'    => 'Customizations',
			'menu_slug'     => 'customizations',
			'capability'    => 'edit_posts',
			'icon_url'      => 'dashicons-admin-customizer', // Add this line and replace the second inverted commas with class of the icon you like
			'redirect'      => false
		));

		acf_add_options_page(array(
			'page_title'    => 'Awards',
			'menu_title'    => 'Awards',
			'menu_slug'     => 'awards',
			'capability'    => 'edit_posts',
			'icon_url'      => 'dashicons-awards', // Add this line and replace the second inverted commas with class of the icon you like
			'redirect'      => false
		));

		acf_add_options_page(array(
			'page_title'    => 'More Information',
			'menu_title'    => 'More Information',
			'menu_slug'     => 'moreinfo',
			'capability'    => 'edit_posts',
			'icon_url'      => 'dashicons-info', // Add this line and replace the second inverted commas with class of the icon you like
			'redirect'      => false
		));

		acf_add_options_page(array(
			'page_title'    => 'Global Schema',
			'menu_title'    => 'Global Schema',
			'menu_slug'     => 'global_schema',
			'capability'    => 'edit_posts',
			'icon_url'      => 'dashicons-media-code',
			'redirect'      => false
		));

		acf_add_options_page(array(
			'page_title'    => 'Location Menus',
			'menu_title'    => 'Location Menus',
			'menu_slug'     => 'location_menus',
			'capability'    => 'edit_posts',
			'icon_url'      => 'dashicons-menu-alt3',
			'redirect'      => false
		));
	}

	// Save newly created fields to child theme
	add_filter('acf/settings/save_json', 'my_acf_json_save_point');
 
	function my_acf_json_save_point( $path ) {
		
		// update path
		$path = get_stylesheet_directory() . '/acf-json';
		
		// return
		return $path;
	
	}
	
	// Add ability to add SVG to Wordpress Media Library
	function cc_mime_types($mimes) {
		$mimes['svg'] = 'image/svg+xml';
		return $mimes;
	}
	add_filter('upload_mimes', 'cc_mime_types');
	
	//add SVG to allowed file uploads
	function add_file_types_to_uploads($file_types){

		$new_filetypes = array();
		$new_filetypes['svg'] = 'image/svg+xml';
		$file_types = array_merge($file_types, $new_filetypes );

		return $file_types;
	}
	add_action('upload_mimes', 'add_file_types_to_uploads');


	// Widget Logic Conditionals
	function is_child($parent) {
		global $post;
			return $post->post_parent == $parent;
		}
		
		// Widget Logic Conditionals (ancestor) 
		function is_tree( $pid ) {
		global $post;
		
		if ( is_page($pid) )
		return true;
		
		$anc = get_post_ancestors( $post->ID );
		foreach ( $anc as $ancestor ) {
			if( is_page() && $ancestor == $pid ) {
				return true;
				}
		}
		return false;
	}

	// Display Current Year as shortcode - [year]
	function year_shortcode () {
		$year = date_i18n ('Y');
		return $year;
		}
	add_shortcode ('year', 'year_shortcode');
	
	// WP Backend Menu area taller
	add_action('admin_head', 'taller_menus');

	function taller_menus() {
	echo '<style>
		.posttypediv div.tabs-panel {
			max-height:500px !important;
		}
	</style>';
	}

	// Customize the logo on the wp-login.php page
	function my_login_logo() { ?>
		<style type="text/css">
			#login h1 a, .login h1 a {
			background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/assets/img/logo.png);
			height:45px;
			width:204px;
			background-size: 204px 45px;
			background-repeat: no-repeat;
			padding-bottom: 30px;
			}
		</style>
	<?php }
	add_action( 'login_enqueue_scripts', 'my_login_logo' );
	// Contact Form 7 Submission Page Redirect
	add_action( 'wp_footer', 'mycustom_wp_footer' );
	
	function mycustom_wp_footer() {
	?>
	<script type="text/javascript">
	document.addEventListener( 'wpcf7mailsent', function( event ) {
		location = '/form-success/';
	}, false );
	</script>
	<?php
	}

	// Add brand colors to ACF color picker
	function klf_acf_input_admin_footer() { ?>
		<script type="text/javascript">
		(function($) {
		
		acf.add_filter('color_picker_args', function( args, $field ){
		
		// add the hexadecimal codes here for the colors you want to appear as swatches
		args.palettes = ['#ffffff', '#000000', '#eeeeee', '#055f9d', '#003c60', '#ffc116']
		
		// return colors
		return args;
		
		});
		
		})(jQuery);
		</script>
		
		<?php }
		
	add_action('acf/input/admin_footer', 'klf_acf_input_admin_footer');

		// Add Search Bar to Top Nav
		function mainmenu_navsearch($items, $args) {
			if ($args->theme_location == 'header-nav') {
				ob_start();
				?>
				<li class="menu-item menu-item-search search-holder">
					<form class="navbar-form-search" role="search" method="get" action="/">
						<div class="search-form-container hdn" id="search-input-container">
							<div class="search-input-group">
								<div class="form-group">
								<input type="text" name="s" placeholder="Search for..." id="search-input-5cab7fd94d469" value="" class="form-control">
								</div>
							</div>
						</div>
						<button type="submit" class="btn btn-search" id="search-button"><span class="icon-magnifying-glass" aria-hidden="true"></span></button>
					</form>	
				</li>
	
				<?php
				$new_items = ob_get_clean();
	
				$items .= $new_items;
			}
			return $items;
		}
		add_filter('wp_nav_menu_items', 'mainmenu_navsearch', 10, 2);

// Exclude pages on PPC templates from Yoast XML sitemap
function exclude_posts_from_xml_sitemaps() {
	$templates = array(
		'page-ppc-landing.php'
	);

	$ppc_ids = array();
	foreach ( $templates as $template ) {
		//get_page_id_by_template($template);
		$args = [
			'post_type'  => 'page',
			'fields'     => 'ids',
			'nopaging'   => true,
			'meta_key'   => '_wp_page_template',
			'meta_value' => $template
		];

		$ppc_pages = get_posts( $args );
		$ppc_ids = array_merge($ppc_ids, $ppc_pages);
	}
	return ($ppc_ids);
}

add_filter( 'wpseo_exclude_from_sitemap_by_post_ids', 'exclude_posts_from_xml_sitemaps' );

function retrieve_latest_gform_submissions() {
    $site_url = get_site_url();
    $search_criteria = [
        'status' => 'active'
    ];
    $form_ids = 2; //search all forms
    $sorting = [
        'key' => 'date_created',
        'direction' => 'DESC'
    ];
    $paging = [
        'offset' => 0,
        'page_size' => 5
    ];
    
    $submissions = GFAPI::get_entries($form_ids, null, $sorting, $paging);
    $start_date = date('Y-m-d H:i:s', strtotime('-5 day'));
    $end_date = date('Y-m-d H:i:s');
    $entry_in_last_5_days = false;
    
    foreach ($submissions as $submission) {
        if( $submission['date_created'] > $start_date  && $submission['date_created'] <= $end_date ) {
            $entry_in_last_5_days = true;
        } 
    }
    if( !$entry_in_last_5_days ) {
        wp_mail('webdev@postali.com', 'Submission Status', "No submissions in last 5 days on $site_url");
    }
}
add_action('check_form_entries', 'retrieve_latest_gform_submissions');

/**
 * Disable Theme/Plugin File Editors in WP Admin
 * - Hides the submenu items
 * - Blocks direct access to editor screens
 */
function postali_disable_file_editors_menu() {
    // Remove Theme File Editor from Appearance menu
    remove_submenu_page( 'themes.php', 'theme-editor.php' );
    // Optional: also remove Plugin File Editor from Plugins menu
    remove_submenu_page( 'plugins.php', 'plugin-editor.php' );
}
add_action( 'admin_menu', 'postali_disable_file_editors_menu', 999 );

// Block direct access to the editors even if someone knows the URL
function postali_block_file_editors_direct_access() {
    wp_die( __( 'File editing through the WordPress admin is disabled.' ), 403 );
}
add_action( 'load-theme-editor.php', 'postali_block_file_editors_direct_access' );
add_action( 'load-plugin-editor.php', 'postali_block_file_editors_direct_access' );

/**
 * Disable the Additional CSS panel in the Customizer.
 * Primary method: remove the custom_css component early in load.
 */
function postali_disable_customizer_additional_css_component( $components ) {
    $key = array_search( 'custom_css', $components, true );
    if ( false !== $key ) {
        unset( $components[ $key ] );
    }
    return $components;
}
add_filter( 'customize_loaded_components', 'postali_disable_customizer_additional_css_component' );

/**
 * Fallback: remove the Additional CSS section if it's present.
 */
function postali_remove_customizer_additional_css_section( $wp_customize ) {
    if ( method_exists( $wp_customize, 'remove_section' ) ) {
        $wp_customize->remove_section( 'custom_css' );
    }
}
add_action( 'customize_register', 'postali_remove_customizer_additional_css_section', 20 );

?>