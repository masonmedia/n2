<?php
/**
 * The template part for displaying the dark CTA section on the front page (static)
 *
 * @package vega
 */
?>
<?php
$vega_wp_frontpage_cta_dark = vega_wp_get_option('vega_wp_frontpage_cta_dark');

if($vega_wp_frontpage_cta_dark == 'Y') {

$cta_page = get_post(vega_wp_get_option('vega_wp_frontpage_cta_dark_content'));

$vega_wp_frontpage_cta_dark_parallax = vega_wp_get_option('vega_wp_frontpage_cta_dark_parallax');
$vega_wp_frontpage_cta_dark_bg_image = vega_wp_get_option('vega_wp_frontpage_cta_dark_bg_image');
$vega_wp_frontpage_cta_dark_bg_color = vega_wp_get_option('vega_wp_frontpage_cta_dark_bg_color');
$vega_wp_frontpage_cta_dark_section_id = vega_wp_get_option('vega_wp_frontpage_cta_dark_section_id');

if($vega_wp_frontpage_cta_dark_bg_image != ''){
    if($vega_wp_frontpage_cta_dark_parallax == 'Y'){
        $class = 'parallax-bg';
        $parallax_str = 'data-parallax="scroll" data-image-src="' . esc_url($vega_wp_frontpage_cta_dark_bg_image) . '"';
    }
    else {
        $class = 'image-bg';
        $parallax_str = '';
    }
} else if ($vega_wp_frontpage_cta_dark_bg_color != '') {
    $class = 'color-bg';
    $parallax_str = '';
}


?>
<!-- ========== Call to Action ========== -->
<div class="shadow"></div>
<div class="section frontpage-cta frontpage-cta1 <?php echo esc_attr( $class ); ?>" <?php echo $parallax_str; // PHPCS: XSS ok. ?> id="<?php echo esc_attr($vega_wp_frontpage_cta_dark_section_id); ?>">
    <div class="container wow zoomIn description">
        <div class="description"><?php echo apply_filters( 'the_content', $cta_page->post_content ); // PHPCS: XSS ok. ?></div>
    </div>
</div>
<!-- ========== /Call to Action ========== -->
<?php
wp_reset_postdata();
}
