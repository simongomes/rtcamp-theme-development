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

<div id="page-wrapper">
	<!-- header start -->
	<header id="header">
		<div class="container header-wrap">
			<div class="row">
				<div class="col-md-3">
					<a href="<?php echo esc_url( home_url() ); ?>">
                        <?php if ( ! get_option( 'header_logo' ) ) { ?>
                            <img src="<?php echo esc_attr( get_template_directory_uri() . '/assets/images/logo.png' ); ?>" alt="<?php esc_html_e( 'Header Logo', 'rtcamp' ); ?>"/>
                        <?php
                        } else { ?>
                            <img src="<?php echo esc_attr( get_option( 'header_logo' ) ); ?>" alt="<?php esc_html_e( 'Header Logo', 'rtcamp' ); ?>"/>
                        <?php } ?>
					</a>
				</div>
				<div class="col-md-9">
					<div class="header-navigation">
						<nav class="navbar">
							<div class="collapse navbar-collapse">
								<?php
									wp_nav_menu(
										array(
											'theme_location' => 'primary',
											'menu_class' => 'nav navbar-nav navbar-right',
										)
									);
									?>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>
	</header>
	<!-- header end -->
