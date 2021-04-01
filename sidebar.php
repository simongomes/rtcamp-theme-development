<?php
/**
 * The sidebar containing the main widget area
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rtCamp_Theme
 */

if ( ! is_active_sidebar( 'bottom-widgets' ) ) {
	return;
}
?>

<!-- bottom widgets start -->
<section id="bottom-widgets">
    <div class="container bottom-widgets-wrap">
        <div class="row">
			<?php dynamic_sidebar( 'bottom-widgets' ); ?>
        </div>
    </div>
</section>
<!-- bottom widgets end -->
