<?php
/**
 * Template for home page slider
 *
 * @package rtCamp_Theme
 */
?>
<?php
// Generate the slider query
$query = new WP_Query(
	array(
		'post_type' => array( 'slider_post' ),
		'order'     => 'ASC',
	)
);
?>
	<!-- post slider start -->
	<section id="hero-wrapper">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div id="featured-carousel" class="carousel slide" data-ride="carousel">
						<div class="featured-carousel-wrap">
							<!-- Indicators -->
							<div class="carousel-indicators-wrap">
								<ol class="carousel-indicators">
									<?php
									for ( $indicator = 1; $indicator <= $query->post_count; $indicator ++ ) {
										?>
										<li data-target="#featured-carousel"
											data-slide-to="<?php echo esc_attr( $indicator - 1 ); ?>"
											class="<?php echo 1 === $indicator ? esc_attr( 'active' ) : ''; ?>"></li>

									<?php } ?>
								</ol><!-- .carousel-indicators -->
							</div>
							<!-- Wrapper for slides -->
							<div class="carousel-inner" role="listbox">
								<?php
								if ( $query->have_posts() ) {
									while ( $query->have_posts() ) {
										$query->the_post();
										?>
										<div class="item <?php echo 0 === $query->current_post ? esc_attr( 'active' ) : ''; ?>">
											<img class="w-100" src="<?php echo esc_attr( get_the_post_thumbnail_url() ); ?>" alt="<?php echo esc_attr( get_the_title() ); ?>">
											<div class="carousel-caption">
												<?php the_title( '<h3 class="caption-title">', '</h3>' ); ?>
												<p class="caption-text">
													<?php echo esc_html( get_the_excerpt() ); ?>
												</p>
											</div>
										</div>
										<?php
									}
								}
								?>
							</div><!-- .carousel-inner -->
							<!-- Controls -->
							<a class="left carousel-control" href="#featured-carousel" role="button" data-slide="prev">
								<span class="sr-only">Previous</span>
							</a>
							<a class="right carousel-control" href="#featured-carousel" role="button" data-slide="next">
								<span class="sr-only">Next</span>
							</a>
						</div> <!-- .featured-carousel-wrap -->
					</div>
				</div>
			</div>
		</div><!-- #featured-carousel -->
	</section>
	<!-- post slider end -->
<?php
// restoring original post data
wp_reset_postdata();
