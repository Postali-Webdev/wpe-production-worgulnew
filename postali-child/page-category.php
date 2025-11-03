<?php
/**
 * Law Category Page
 * Template Name: Category
 * @package Postali Parent
 * @author Postali LLC
 */
get_header(); ?>

<section id="page-banner">
	<?php get_template_part('block', 'banner');?>
</section>

<section class="page-content">
	<div class="container">
		
		<?php if ( function_exists('yoast_breadcrumb') ) {yoast_breadcrumb('<p id="breadcrumbs">','</p>');} ?> 

		<div class="columns">
			<div class="column-66">
				<?php the_content(); ?>
			</div>
            <div class="column-33">
                <?php get_template_part('block', 'sidebar-awards-dui');?>
                <?php get_template_part('block', 'sidebar-dui-accordions');?>
				<?php get_template_part('block', 'sidebar-search');?>
				<?php get_template_part('block', 'sidebar-info');?>
            </div>
		</div>
	
	</div>
</section>
	
	<?php get_template_part('block', 'contact');?>
	
<?php get_footer(); ?>

<?php if ( is_page(441) ) { ?>
	<script>
		// These are the scripts that make the Category pages work
		var $j = jQuery.noConflict();
		(function($) {
		$(function() {
		$(document).ready(function() {	
			
			// DUI page dropdown magic	
			$('#offense, #BAC').on('change', function(){
				// set reference to select elements
				var offense = $('#offense');
				var BAC = $('#BAC');
				
				// check if user has made a selection on both dropdowns
				if ( offense.prop('selectedIndex') > 0 && BAC.prop('selectedIndex') > 0 ) {
					// remove active class from current active div element
					$('.table_container.active').removeClass('active');
					
					// get all result divs, and filter for matching data attributes
					$('.table_container').filter('[data-offense="' + offense.val() + '"][data-BAC="' + BAC.val() + '"]').addClass('active');            
				}
			});

			
		
		});
		});
		})(jQuery);
	</script>
<?php } ?>