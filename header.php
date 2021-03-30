<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything
 * up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package rtCamp_Theme
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>

<!-- header start -->
<header id="header">
    <div class="container header-wrap">
        <div class="row">
            <div class="col-md-3">
                <a href="<?php home_url() ?>">
                    <img src="<?php echo get_template_directory_uri() . '/assets/images/logo.png'; ?>"
                     alt="Demo Company"/>
                </a>
            </div>
            <div class="col-md-9">
                <div class="header-navigation">
                    <nav class="navbar">
                        <div class="collapse navbar-collapse">
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
                                        <li><a href="#">Something else here</a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</header>
<!-- header end -->
