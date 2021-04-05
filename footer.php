<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rtCamp_Theme
 */

?>

<!-- footer start -->
<footer id="footer">
	<div class="container footer-wrap">
		<div class="row">
			<div class="col-md-7">
				<!-- footer navigation start -->
				<div class="footer-navigation">
					<nav class="navbar">
						<?php
						wp_nav_menu(
							array(
								'menu'       => 'footer',
								'menu_class' => 'nav navbar-nav',
							)
						);
						?>
					</nav>
				</div>
				<!-- footer navigation end -->
				<div class="copyright-info">
					<p><?php echo esc_html( get_option( 'copyright_message' ) ); ?></p>
				</div>
			</div>
			<div class="col-md-5">
				<a href="<?php echo esc_url( home_url() ); ?>">
					<img class="footer-logo pull-right" src="<?php echo esc_attr( get_option( 'footer_logo' ) ); ?>" alt="<?php esc_html_e( 'Footer Logo', 'rtcamp' ); ?>"/>
				</a>
			</div>
		</div>
	</div>
</footer>
<!-- footer end -->
</div>

<?php wp_footer(); ?>

</body>
</html>
