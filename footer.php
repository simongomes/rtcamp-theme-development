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
                        <ul class="nav navbar-nav">
                            <li><a href="#">Home</a></li>
                            <li><a href="#">News</a></li>
                            <li><a href="#">Gallery</a></li>
                            <li><a href="#">Pages</a></li>
                            <li><a href="#">Layouts</a></li>
                            <li><a href="#">Featured</a></li>
                            <li><a href="#">Blog</a></li>
                            <li><a href="#">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <!-- footer navigation end -->
                <div class="copyright-info">
                    <p>© 2011 rtPanel. All Rights Reserved. Designed by rtCamp</p>
                </div>
            </div>
            <div class="col-md-5">
                <img
                        class="footer-logo pull-right"
                        src="<?php echo get_template_directory_uri(); ?>/assets/images/footer-logo.png"
                        alt="Footer Logo"
                />
            </div>
        </div>
    </div>
</footer>
<!-- footer end -->
</div>

<?php wp_footer(); ?>

</body>
</html>
