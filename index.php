<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package rtCamp_Theme
 */
get_header();
?>
	<!-- Import Home Page Slider Section -->
	<?php get_template_part( '/template-parts/slider', 'home' ); ?>

	<!-- Import Pages Overview Section -->
	<?php get_template_part( '/template-parts/pages_overview' ); ?>

<?php
// Load Bottom Widgets Using Sidebar
get_sidebar();
get_footer();
