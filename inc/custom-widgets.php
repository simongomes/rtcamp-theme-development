<?php
/**
 * rtCamp Theme widgets
 *
 * @package rtCamp_Theme
 */
register_widget( 'Social_Widget' );

class Social_Widget extends WP_Widget {
	public function __construct() {
		parent::__construct(
			'social_widget',
			__('Social Links', 'rtcamp'),
			[
				'description'   => 'Theme Social Media Links.'
			]
		);
	}

	public function widget( $args, $instance ) {
		echo $args['before_widget'];
		?>
			<h3 class="widget-title">Stay In Touch</h3>
			<ul class="socials">
				<li class="social-link facebook">
					<a class="title" href="<?php echo esc_attr(get_option('facebook_link')); ?>" target="_blank">Facebook</a>
				</li>
				<li class="social-link twitter">
					<a class="title" href="<?php echo esc_attr(get_option('twitter_link')); ?>" target="_blank">Twitter</a>
				</li>
				<li class="social-link linkedin">
					<a class="title" href="<?php echo esc_attr(get_option('linkedin_link')); ?>" target="_blank">Linked In</a>
				</li>
				<li class="social-link rss">
					<a class="title" href="<?php echo esc_attr(get_option('rss_link')); ?>" target="_blank">RSS</a>
				</li>
			</ul>
		<?php
		echo $args['after_widget'];
	}

}