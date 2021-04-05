<?php
/**
 * rtCamp Theme Settings Page
 *
 * @package rtCamp_Theme
 */

// Register Theme Options Page
add_action( 'admin_menu', 'rtcamp_register_theme_settings_page' );
if ( ! function_exists( 'rtcamp_register_theme_settings_page' ) ) {

	// Add theme settings page
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

	function rtcamp_theme_options() {
		?>
			<div>
				<span>
					<?php
						settings_errors();
					?>
				</span>
				<h1>Theme Settings</h1>
				<form action="options.php" method="post">
					<?php
						settings_fields( 'site_information' );
						settings_fields( 'socials' );
						do_settings_sections( 'theme-settings' );
						submit_button();
					?>
				</form>
			</div>
		<?php
	}

	// Theme settings option fields
	function rtcamp_theme_options_settings() {

		// Add settings for basic theme info like logo and copyright message
		add_settings_section(
			'site_information',
			__( 'Site Information', 'rtcamp' ),
			null,
			'theme-settings'
		);

		add_settings_field(
			'copyright_message',
			__( 'Copyright', 'rtcamp' ),
			'rtcamp_add_copyright_field',
			'theme-settings',
			'site_information'
		);

		register_setting( 'site_information', 'copyright_message' );
	}

	add_action( 'admin_init', 'rtcamp_theme_options_settings' );

	function rtcamp_add_copyright_field() {
		?>
		<input class="regular-text" type="text" name="copyright_message" value="<?php echo esc_attr( get_option( 'copyright_message' ) ); ?>" id="copyright_message">
		<?php
	}
}
