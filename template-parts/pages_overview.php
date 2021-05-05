<?php
/**
 * Template for pages overview section
 *
 * @package rtCamp_Theme
 */
?>
<?php
// Get Home Page
$home_page = get_page_by_title( 'home' );
if ( $home_page ) {
	// Loop to get the child pages of `Home` page
	$child_pages = new WP_Query(
		array(
			'post_type'      => 'page',
			'posts_per_page' => 3,
			'post_parent'    => $home_page->ID,
			'order'          => 'ASC',
		)
	);
	?>

<!-- child pages start -->
<section id="pages-overview-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="overview-container">
					<div class="row">
						<!-- pages navigations -->
						<?php
						if ( $child_pages->have_posts() ) {
							?>
							<div class="col-md-3 pages-navigation-wrap">
								<ul class="page-navigations">
									<?php
									while ( $child_pages->have_posts() ) {
										$child_pages->the_post();
										?>
										<li class="<?php echo 0 === $child_pages->current_post ? esc_attr( 'active' ) : ''; ?>"><?php echo esc_html( get_the_title() ); ?></li>
										<?php
									}
									?>
								</ul>
							</div>
							<?php
						}
						?>
						<!-- .pages-navigation-wrap -->
						<?php
						if ( $child_pages->have_posts() ) {
							?>
							<div class="col-md-9 pages-content-wrap">
								<?php
								while ( $child_pages->have_posts() ) {
									$child_pages->the_post();
									?>
									<div class="item <?php echo 0 === $child_pages->current_post ? esc_attr( 'active' ) : ''; ?>">
										<div class="row">
											<?php
											$sub_pages = new WP_Query(
												array(
													'post_type'      => 'page',
													'posts_per_page' => 3,
													'post_parent'    => get_the_ID(),
													'order'          => 'ASC',
												)
											);
											if ( $sub_pages->have_posts() ) {
												while ( $sub_pages->have_posts() ) {
													$sub_pages->the_post();
													?>
													<div class="col-md-4 page-item-wrap">
														<div class="page-item">
															<img class="page-featured-image" src="<?php echo esc_attr( the_post_thumbnail_url() ); ?>" alt="">
															<h4 class="page-title"><?php echo esc_html( get_the_title() ); ?></h4>
															<p class="page-content"><?php echo wp_kses_post( get_the_excerpt() ); ?></p>
														</div>
													</div>
													<?php
												}
											}
											?>
										</div>
									</div> <!-- .item -->
									<?php
								}
								?>
							</div>
							<?php
						}
						?>

					</div><!-- .pages-content-wrap -->
				</div>
			</div>

		</div>
	</div>
</section>
<!-- child pages end -->
	<?php
}
