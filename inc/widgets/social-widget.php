<?php
/**
 * Register Social Media Link Widget
 *
 * @package rtCamp
 *
 * Class Social_Widget
 */
class Social_Widget extends WP_Widget {

	/**
	 * Social_Widget constructor.
	 */
	public function __construct() {
		parent::__construct(
			'social_widget',
			__( 'Social Links', 'rtcamp' ),
			array( 'description' => 'Theme Social Media Links.' )
		);
	}

	/**
	 * Setup widget front-end view and feed the widget data
	 *
	 * @param  array  $args
	 * @param  array  $instance
	 */
	public function widget( $args, $instance ) {
		echo wp_kses_post( $args['before_widget'] );
		?>
		<?php echo wp_kses_post( $args['before_title'] ); ?><?php echo esc_html( $instance['widget-title'] ); ?><?php echo wp_kses_post( $args['after_title'] ); ?>
		<ul class="socials">
			<li class="social-link facebook">
				<a class="title" href="<?php echo esc_attr( $instance['facebook-link'] ); ?>" target="_blank"><?php esc_html_e( 'Facebook', 'rtcamp' ); ?></a>
			</li>
			<li class="social-link twitter">
				<a class="title" href="<?php echo esc_attr( $instance['twitter-link'] ); ?>" target="_blank"><?php esc_html_e( 'Twitter', 'rtcamp' ); ?></a>
			</li>
			<li class="social-link linkedin">
				<a class="title" href="<?php echo esc_attr( $instance['linkedin-link'] ); ?>" target="_blank"><?php esc_html_e( 'Linked In', 'rtcamp' ); ?></a>
			</li>
			<li class="social-link rss">
				<a class="title" href="<?php echo esc_attr( $instance['rss-link'] ); ?>" target="_blank"><?php esc_html_e( 'RSS', 'rtcamp' ); ?></a>
			</li>
		</ul>
		<?php
		echo wp_kses_post( $args['after_widget'] );
	}

	/**
	 * Setup widget admin view and input fields to save the data
	 *
	 * @param  array  $instance
	 *
	 * @return string|void
	 */
	public function form( $instance ) {
		?>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'widget-title' ) ); ?>">Title:</label>
			<br>
			<input
				type="text"
				name="<?php echo esc_attr( $this->get_field_name( 'widget-title' ) ); ?>"
				class="widefat"
				value="<?php echo esc_attr( $instance['widget-title'] ); ?>"
				id="<?php echo esc_attr( $this->get_field_id( 'widget-title' ) ); ?>"
			>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'facebook-link' ) ); ?>">Facebook:</label>
			<br>
			<input
				type="text"
				name="<?php echo esc_attr( $this->get_field_name( 'facebook-link' ) ); ?>"
				class="widefat"
				value="<?php echo esc_attr( $instance['facebook-link'] ); ?>"
				id="<?php echo esc_attr( $this->get_field_id( 'facebook-link' ) ); ?>"
			>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'twitter-link' ) ); ?>">Twitter:</label>
			<br>
			<input
				type="text"
				name="<?php echo esc_attr( $this->get_field_name( 'twitter-link' ) ); ?>"
				class="widefat"
				value="<?php echo esc_attr( $instance['twitter-link'] ); ?>"
				id="<?php echo esc_attr( $this->get_field_id( 'twitter-link' ) ); ?>"
			>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'linkedin-link' ) ); ?>">Linked In:</label>
			<br>
			<input
				type="text"
				name="<?php echo esc_attr( $this->get_field_name( 'linkedin-link' ) ); ?>"
				class="widefat"
				value="<?php echo esc_attr( $instance['linkedin-link'] ); ?>"
				id="<?php echo esc_attr( $this->get_field_id( 'linkedin-link' ) ); ?>"
			>
		</p>
		<p>
			<label for="<?php echo esc_attr( $this->get_field_id( 'rss-link' ) ); ?>">RSS:</label>
			<br>
			<input
				type="text"
				name="<?php echo esc_attr( $this->get_field_name( 'rss-link' ) ); ?>"
				class="widefat"
				value="<?php echo esc_attr( $instance['rss-link'] ); ?>"
				id="<?php echo esc_attr( $this->get_field_id( 'rss-link' ) ); ?>"
			>
		</p>
		<?php
	}
}
