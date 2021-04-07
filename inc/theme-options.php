<?php
/**
 * rtCamp Theme Settings Page
 *
 * @package rtCamp_Theme
 */

// Register Theme Options Page
add_action( 'admin_menu', 'rtcamp_register_theme_settings_page' );
if ( ! function_exists( 'rtcamp_register_theme_settings_page' ) ) {
	/**
	 * Add theme settings page.
	 *
	 * @return void
	 */
	function rtcamp_register_theme_settings_page() {
		add_menu_page(
			'theme-settings',
			__( 'rtCamp Settings', 'rtcamp' ),
			'manage_options',
			'theme-settings',
			'rtcamp_theme_options',
			'dashicons-admin-generic',
			81
		);
	}

	/**
	 * rtCamp Custom Theme Setting.
	 *
	 * @return void
	 */
	function rtcamp_theme_options() {
		?>
			<div class="wrap">
				<span>
					<?php
						settings_errors();
					?>
				</span>
				<h1><?php esc_html_e( 'Theme Settings', 'rtcamp' ); ?></h1>
				<form action="options.php" method="post" enctype="multipart/form-data">
					<?php
						settings_fields( 'site_information' );
						do_settings_sections( 'theme-settings' );
						submit_button();
					?>
				</form>
			</div>
		<?php
	}

	/**
	 * Theme settings option fields
	 *
	 * @return void
	 */
	function rtcamp_theme_options_settings() {

		// Add settings for basic theme info like logo and copyright message
		add_settings_section(
			'site_information',
			__( 'Site Information', 'rtcamp' ),
			'rtcamp_admin_scripts',
			'theme-settings'
		);

		add_settings_field(
			'header_logo',
			__( 'Header Logo', 'rtcamp' ),
			'rtcamp_add_logo_field',
			'theme-settings',
			'site_information'
		);

		add_settings_field(
			'copyright_message',
			__( 'Copyright', 'rtcamp' ),
			'rtcamp_add_copyright_field',
			'theme-settings',
			'site_information'
		);

		add_settings_field(
			'footer_logo',
			__( 'Footer Logo', 'rtcamp' ),
			'rtcamp_add_footer_logo_field',
			'theme-settings',
			'site_information'
		);

		register_setting( 'site_information', 'copyright_message' );
		register_setting( 'site_information', 'header_logo' );
		register_setting( 'site_information', 'footer_logo' );
	}

	add_action( 'admin_init', 'rtcamp_theme_options_settings' );

	/**
	 * Add Copyright theme settings field
	 *
	 * @return void
	 */
	function rtcamp_add_copyright_field() {
		?>
		<input class="regular-text" type="text" name="copyright_message" value="<?php echo esc_attr( get_option( 'copyright_message' ) ); ?>" id="copyright_message">
		<?php
	}

	/**
	 * Add Header Logo theme settings field
	 *
	 * @return void
	 */
	function rtcamp_add_logo_field() {
		?>
		<input id="header_logo" type="text" size="36" name="header_logo" value="<?php echo esc_attr( get_option( 'header_logo' ) ); ?>" />
		<input id="header_logo_button" class="button" type="button" value="Upload Logo" />
		<?php
	}

	/**
	 * Add Footer Logo theme settings field
	 *
	 * @return void
	 */
	function rtcamp_add_footer_logo_field() {
		?>
		<input id="footer_logo" type="text" size="36" name="footer_logo" value="<?php echo esc_attr( get_option( 'footer_logo' ) ); ?>" />
		<input id="footer_logo_button" class="button" type="button" value="Upload Logo" />
		<?php
	}

	/**
	 * rtCamp Admin Dashboard Scripts
	 *
	 * @return void
	 */
	function rtcamp_admin_scripts() {
		wp_enqueue_media();
		wp_enqueue_script(
			'rtcamp-admin-js',
			__RTCAMP_ASSETS_PATH__ . '/js/admin-scripts.js',
			array( 'jquery' ),
			_RTCAMP_VERSION,
			true
		);
	}
}
