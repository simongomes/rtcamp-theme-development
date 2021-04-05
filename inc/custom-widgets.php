<?php
/**
 * rtCamp Theme Custom Widgets
 *
 * @package rtCamp_Theme
 */

require __DIR__ . '/widgets/social-widget.php';
require __DIR__ . '/widgets/news-widget.php';

register_widget( 'Social_Widget' );
register_widget( 'News_Widget' );
