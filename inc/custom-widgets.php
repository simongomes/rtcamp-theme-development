<?php
/**
 * rtCamp Theme Custom Widgets.
 *
 * This file imports all the custom widgets and registers all the widgets.
 *
 * @package rtCamp_Theme
 */

require __DIR__ . '/widgets/social-widget.php';
require __DIR__ . '/widgets/news-widget.php';

register_widget( 'Social_Widget' );
register_widget( 'News_Widget' );
