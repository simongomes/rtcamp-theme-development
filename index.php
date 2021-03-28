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

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>rtCamp Simple WordPress Theme</title>

    <!-- Latest compiled and minified CSS -->
    <link
            rel="stylesheet"
            href="//stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
            integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu"
            crossorigin="anonymous"
    />
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/style.css" />
</head>
<body>
<div id="page-wrapper">
    <!-- header start -->
    <header id="header">
        <div class="container header-wrap">
            <div class="row">
                <div class="col-md-3">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.png" alt="Demo Company" />
                </div>
                <div class="col-md-9">
                    <div class="header-navigation">
                        <nav class="navbar">
                            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                                <ul class="nav navbar-nav navbar-right">
                                    <li><a href="#">Home</a></li>
                                    <li><a href="#">News</a></li>
                                    <li><a href="#">Gallery</a></li>
                                    <li><a href="#">Pages</a></li>
                                    <li><a href="#">Layouts</a></li>
                                    <li><a href="#">Featured</a></li>
                                    <li><a href="#">Blog</a></li>
                                    <li><a href="#">Contact</a></li>
                                    <li class="dropdown">
                                        <a
                                                href="#"
                                                class="dropdown-toggle"
                                                data-toggle="dropdown"
                                                role="button"
                                                aria-haspopup="true"
                                                aria-expanded="false"
                                        >Dropdown <span class="caret"></span
                                            ></a>
                                        <ul class="dropdown-menu">
                                            <li><a href="#">Action</a></li>
                                            <li><a href="#">Another action</a></li>
                                            <li><a href="#">Something else here</a></li>
                                        </ul>
                                    </li>
                                </ul>
                        </nav>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- header end -->
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
                                    <li data-target="#featured-carousel" data-slide-to="0" class="active"></li>
                                    <li data-target="#featured-carousel" data-slide-to="1"></li>
                                    <li data-target="#featured-carousel" data-slide-to="2"></li>
                                    <li data-target="#featured-carousel" data-slide-to="3"></li>
                                </ol><!-- .carousel-indicators -->
                            </div>
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
                                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/Slider_img.jpg" alt="...">
                                    <div class="carousel-caption">
                                        <h3 class="caption-title">Slide heading</h3>
                                        <p class="caption-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et sollicitudin risus. Sed gravida placerat eleifend. Suspendisse tincidunt fringilla dictum. Nam ipsum justo, adipiscing euullamcorper ut, hendrerit sit amet velit. Nulla facilisi.
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/Slider_img.jpg" alt="...">
                                    <div class="carousel-caption">
                                        <h3 class="caption-title">Slide heading</h3>
                                        <p class="caption-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et sollicitudin risus. Sed gravida placerat eleifend. Suspendisse tincidunt fringilla dictum. Nam ipsum justo, adipiscing euullamcorper ut, hendrerit sit amet velit. Nulla facilisi.
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/Slider_img.jpg" alt="...">
                                    <div class="carousel-caption">
                                        <h3 class="caption-title">Slide heading</h3>
                                        <p class="caption-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et sollicitudin risus. Sed gravida placerat eleifend. Suspendisse tincidunt fringilla dictum. Nam ipsum justo, adipiscing euullamcorper ut, hendrerit sit amet velit. Nulla facilisi.
                                        </p>
                                    </div>
                                </div>
                                <div class="item">
                                    <img class="w-100" src="<?php echo get_template_directory_uri(); ?>/assets/images/Slider_img.jpg" alt="...">
                                    <div class="carousel-caption">
                                        <h3 class="caption-title">Slide heading</h3>
                                        <p class="caption-text">
                                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et sollicitudin risus. Sed gravida placerat eleifend. Suspendisse tincidunt fringilla dictum. Nam ipsum justo, adipiscing euullamcorper ut, hendrerit sit amet velit. Nulla facilisi.
                                        </p>
                                    </div>
                                </div>
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
    <!-- child pages start -->
    <section id="pages-overview-wrapper">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="overview-container">
                        <div class="row">
                            <!-- pages navigations -->
                            <div class="col-md-3 pages-navigation-wrap">
                                <ul class="page-navigations">
                                    <li class="active">Finding</li>
                                    <li>Promotional Activities</li>
                                    <li>Environment</li>
                                </ul>
                            </div> <!-- .pages-navigation-wrap -->

                            <div class="col-md-9 pages-content-wrap">
                                <div class="item active">
                                    <div class="row">
                                        <div class="col-md-4 page-item-wrap">
                                            <div class="page-item">
                                                <img class="page-featured-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img1.jpg" alt="">
                                                <h4 class="page-title">Aldus PageMaker including versions of Lorem Ipsum.</h4>
                                                <p class="page-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et sollicitudin risus. </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 page-item-wrap">
                                            <div class="page-item">
                                                <img class="page-featured-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img1.jpg" alt="">
                                                <h4 class="page-title">Aldus PageMaker including versions of Lorem Ipsum.</h4>
                                                <p class="page-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et sollicitudin risus. </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 page-item-wrap">
                                            <div class="page-item">
                                                <img class="page-featured-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img1.jpg" alt="">
                                                <h4 class="page-title">Aldus PageMaker including versions of Lorem Ipsum.</h4>
                                                <p class="page-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et sollicitudin risus. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- .item -->
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-4 page-item-wrap">
                                            <div class="page-item">
                                                <img class="page-featured-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img2.jpg" alt="">
                                                <h4 class="page-title">Aldus PageMaker including versions of Lorem Ipsum.</h4>
                                                <p class="page-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et sollicitudin risus. </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 page-item-wrap">
                                            <div class="page-item">
                                                <img class="page-featured-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img2.jpg" alt="">
                                                <h4 class="page-title">Aldus PageMaker including versions of Lorem Ipsum.</h4>
                                                <p class="page-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et sollicitudin risus. </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 page-item-wrap">
                                            <div class="page-item">
                                                <img class="page-featured-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img2.jpg" alt="">
                                                <h4 class="page-title">Aldus PageMaker including versions of Lorem Ipsum.</h4>
                                                <p class="page-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et sollicitudin risus. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- .item -->
                                <div class="item">
                                    <div class="row">
                                        <div class="col-md-4 page-item-wrap">
                                            <div class="page-item">
                                                <img class="page-featured-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img3.jpg" alt="">
                                                <h4 class="page-title">Aldus PageMaker including versions of Lorem Ipsum.</h4>
                                                <p class="page-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et sollicitudin risus. </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 page-item-wrap">
                                            <div class="page-item">
                                                <img class="page-featured-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img3.jpg" alt="">
                                                <h4 class="page-title">Aldus PageMaker including versions of Lorem Ipsum.</h4>
                                                <p class="page-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et sollicitudin risus. </p>
                                            </div>
                                        </div>
                                        <div class="col-md-4 page-item-wrap">
                                            <div class="page-item">
                                                <img class="page-featured-image" src="<?php echo get_template_directory_uri(); ?>/assets/images/img3.jpg" alt="">
                                                <h4 class="page-title">Aldus PageMaker including versions of Lorem Ipsum.</h4>
                                                <p class="page-content">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean et sollicitudin risus. </p>
                                            </div>
                                        </div>
                                    </div>
                                </div> <!-- .item -->
                            </div>

                        </div><!-- .pages-content-wrap -->
                    </div>
                </div>

            </div>
        </div>
    </section>
    <!-- child pages end -->
    <!-- footer widgets start -->
    <section id="bottom-widgets">
        <div class="container bottom-widgets-wrap">
            <div class="row">
                <div class="col-md-3">
                    <div class="widget-wrap">
                        <h3 class="widget-title">Latest News</h3>
                        <ul class="latest-news">
                            <li class="news-item">
                                <a href="#">
                                    Many desktop publishing packages and web page
                                </a>
                            </li>
                            <li class="news-item">
                                <a href="#">
                                    Lorem Ipsum has been the industry's standard dummy text ever since the 1500s
                                </a>
                            </li>
                            <li class="news-item">
                                <a href="#">
                                    Latin words, combined with a handful of model sentence structures
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget-wrap">
                        <h3 class="widget-title">Recent Post</h3>
                        <div class="recent-posts">
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recent-pro-1.jpg" alt="">
                            <br>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recent-pro-2.jpg" alt="">
                            <br>
                            <img src="<?php echo get_template_directory_uri(); ?>/assets/images/recent-pro-3.jpg" alt="">
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget-wrap">
                        <h3 class="widget-title">Stay In Touch</h3>
                        <ul class="socials">
                            <li class="social-link facebook">
                                <a class="title">Facebook</a>
                            </li>
                            <li class="social-link twitter">
                                <a class="title">Twitter</a>
                            </li>
                            <li class="social-link linkedin">
                                <a class="title">Linked In</a>
                            </li>
                            <li class="social-link rss">
                                <a class="title">RSS</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="widget-wrap">
                        <h3 class="widget-title">Security & Privacy</h3>
                        <ul class="menu-sicurity-privacy">
                            <li class="menu-item">
                                <a href="#">
                                    Security
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#">
                                    Privacy Policy
                                </a>
                            </li>
                            <li class="menu-item">
                                <a href="#">
                                    Terms of Service
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- footer widgets end -->
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

<script
        src="//code.jquery.com/jquery-3.6.0.min.js"
        integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4="
        crossorigin="anonymous"
></script>

<script
        src="//stackpath.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"
        integrity="sha384-aJ21OjlMXNL5UyIl/XNwTMqvzeRMZH2w8c5cRVpzpU8Y5bApTppSuUkhZXN0VxHd"
        crossorigin="anonymous"
></script>
<script src="<?php echo get_template_directory_uri(); ?>/assets/js/scripts.js"></script>
</body>
</html>

