<?php
/**
 * Template Name: Sitemap
 *
 * @package Postali Child
 * @author Postali LLC
**/
get_header(); ?>

<section class="sitemap">
	<div class="container">
        <h1>Sitemap</h1>
        <div class="spacer-60"></div>
		<div class="columns">
			<div class="column-50">
            <h2>Pages</h2> 
                <div class="spacer-30"></div>
					<ul>
						<?php 
                        $templates = array(
                            'page-ppc-landing.php', //replace these with the correct template names
                            'page-ppc-landing-options.php'
                        );

                        $ppc_ids = array();
                        foreach ( $templates as $template ) {
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
                        $ppc_list = implode(', ', $ppc_ids);
                        $page_args = array(
                            'exclude' => $ppc_list,
                            'title_li' => null
                        );
                        wp_list_pages($page_args); 
                        ?>
					</ul> 
			</div>
			<div class="column-50">
            <h2>Blog Posts</h2> 
                <div class="spacer-30"></div>
                    <ul>
                        <?php wp_get_archives('type=postbypost'); ?>
                    </ul>
            </div>
		</div>
	</div>
</section><!-- #content -->

<?php get_footer();