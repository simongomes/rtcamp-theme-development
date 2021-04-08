<?php
/**
 * Register Latest News Widget
 *
 * @package rtCamp
 *
 * Class News_Widget
 */
class News_Widget extends WP_Widget {

	/**
	 * News_Widget constructor.
	 *
	 * @return void
	 */
	public function __construct() {
		parent::__construct(
			'latest_news_widget',
			__( 'Latest News', 'rtcamp' ),
			array( 'description' => 'A list of posts from news category' )
		);
	}

	/**
	 * Setup widget front-end view and feed the widget data.
	 *
	 * @param  array  $args
	 * @param  array  $instance
	 */
	public function widget( $args, $instance ) {
		echo wp_kses_post( $args['before_widget'] );
		?>
		<?php echo wp_kses_post( $args['before_title'] ); ?><?php echo esc_html( $instance['widget-title'] ); ?><?php echo wp_kses_post( $args['after_title'] ); ?>
		<?php
		// Generate the news query
		$query = new WP_Query(
			array(
				'category_name'  => 'news',
				'posts_per_page' => 3,
			)
		);
		if ( $query->have_posts() ) {
			?>
			<ul class="latest-news">
			<?php
			while ( $query->have_posts() ) {
				$query->the_post();
				?>
				<li class="news-item">
					<a href="<?php echo esc_attr( get_the_permalink() ); ?>">
						<?php echo esc_html( the_title() ); ?>
					</a>
				</li>
				<?php
			}
			?>
			</ul>
			<?php
		}
		wp_reset_postdata();
		?>
		<?php
		echo wp_kses_post( $args['after_widget'] );
	}

	/**
	 * Setup widget admin view and input fields to save the data.
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
		<?php
	}

}
