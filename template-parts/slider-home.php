<?php
/**
 * Template for home page slider
 *
 * @package rtCamp_Theme
 */
?>
<!-- post slider start -->
<section id="hero-wrapper">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div id="featured-carousel" class="carousel slide"
				     data-ride="carousel">
					<div class="featured-carousel-wrap">
						<!-- Indicators -->
						<div class="carousel-indicators-wrap">
							<ol class="carousel-indicators">
								<li data-target="#featured-carousel"
								    data-slide-to="0" class="active"></li>
								<li data-target="#featured-carousel"
								    data-slide-to="1"></li>
								<li data-target="#featured-carousel"
								    data-slide-to="2"></li>
								<li data-target="#featured-carousel"
								    data-slide-to="3"></li>
							</ol><!-- .carousel-indicators -->
						</div>
						<!-- Wrapper for slides -->
						<div class="carousel-inner" role="listbox">
							<div class="item active">
								<img class="w-100"
								     src="<?php echo get_template_directory_uri(); ?>/assets/images/Slider_img.jpg"
								     alt="...">
								<div class="carousel-caption">
									<h3 class="caption-title">Slide
										heading</h3>
									<p class="caption-text">
										Lorem ipsum dolor sit amet,
										consectetur adipiscing elit. Aenean
										et sollicitudin risus. Sed gravida
										placerat eleifend. Suspendisse
										tincidunt fringilla dictum. Nam
										ipsum justo, adipiscing
										euullamcorper ut, hendrerit sit amet
										velit. Nulla facilisi.
									</p>
								</div>
							</div>
							<div class="item">
								<img class="w-100"
								     src="<?php echo get_template_directory_uri(); ?>/assets/images/Slider_img.jpg"
								     alt="...">
								<div class="carousel-caption">
									<h3 class="caption-title">Slide
										heading</h3>
									<p class="caption-text">
										Lorem ipsum dolor sit amet,
										consectetur adipiscing elit. Aenean
										et sollicitudin risus. Sed gravida
										placerat eleifend. Suspendisse
										tincidunt fringilla dictum. Nam
										ipsum justo, adipiscing
										euullamcorper ut, hendrerit sit amet
										velit. Nulla facilisi.
									</p>
								</div>
							</div>
							<div class="item">
								<img class="w-100"
								     src="<?php echo get_template_directory_uri(); ?>/assets/images/Slider_img.jpg"
								     alt="...">
								<div class="carousel-caption">
									<h3 class="caption-title">Slide
										heading</h3>
									<p class="caption-text">
										Lorem ipsum dolor sit amet,
										consectetur adipiscing elit. Aenean
										et sollicitudin risus. Sed gravida
										placerat eleifend. Suspendisse
										tincidunt fringilla dictum. Nam
										ipsum justo, adipiscing
										euullamcorper ut, hendrerit sit amet
										velit. Nulla facilisi.
									</p>
								</div>
							</div>
							<div class="item">
								<img class="w-100"
								     src="<?php echo get_template_directory_uri(); ?>/assets/images/Slider_img.jpg"
								     alt="...">
								<div class="carousel-caption">
									<h3 class="caption-title">Slide
										heading</h3>
									<p class="caption-text">
										Lorem ipsum dolor sit amet,
										consectetur adipiscing elit. Aenean
										et sollicitudin risus. Sed gravida
										placerat eleifend. Suspendisse
										tincidunt fringilla dictum. Nam
										ipsum justo, adipiscing
										euullamcorper ut, hendrerit sit amet
										velit. Nulla facilisi.
									</p>
								</div>
							</div>
						</div><!-- .carousel-inner -->
						<!-- Controls -->
						<a class="left carousel-control"
						   href="#featured-carousel" role="button"
						   data-slide="prev">
							<span class="sr-only">Previous</span>
						</a>
						<a class="right carousel-control"
						   href="#featured-carousel" role="button"
						   data-slide="next">
							<span class="sr-only">Next</span>
						</a>
					</div> <!-- .featured-carousel-wrap -->
				</div>
			</div>
		</div>
	</div><!-- #featured-carousel -->
</section>
<!-- post slider end -->
