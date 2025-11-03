<?php /* Re-usable Homepage block featuring background image and modal overlayed */ 

$block_fields = $args['data'];
$title = $block_fields['title'];
$intro_copy = $block_fields['intro-copy'];
$bg_image = $block_fields['bg-image'];
$float_copy = $block_fields['float-copy'];
?>
<div class="block-hp-float-modal">
    <div class="textpanel blue">
        <div class="container_inner">
            <h2><?php esc_html_e($title); ?></h2>
            <p><?php esc_html_e($intro_copy); ?></p>
        </div>
    </div>
    <div class="textpanel bg-container" style="background-image: url('<?php esc_html_e($bg_image['url']); ?>');">
        <img src="<?php esc_html_e($bg_image['url']); ?>" alt="<?php esc_html_e($bg_image['alt']); ?>" class="mobile-bg">
        <div class="container_inner">
            <?php _e($float_copy); ?>
        </div>
    </div>
</div>