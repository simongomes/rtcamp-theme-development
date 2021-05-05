<?php
/**
 * rtCamp Theme Custom Post Types.
 *
 * @package rtCamp_Theme
 */

// Initialize Slider Post Type.
add_action( 'init', 'slider_post_type', 0 );


if ( ! function_exists( 'slider_post_type' ) ) {
	/**
	 * Setup and Registers Slider Post Type.
	 *
	 * @return void
	 */
	function slider_post_type() {

		$labels = array(
			'name'                  => _x( 'Sliders', 'Post Type General Name', 'rtcamp' ),
			'singular_name'         => _x( 'Slider', 'Post Type Singular Name', 'rtcamp' ),
			'menu_name'             => __( 'Slider', 'rtcamp' ),
			'name_admin_bar'        => __( 'Slider', 'rtcamp' ),
			'archives'              => __( 'Slider Archives', 'rtcamp' ),
			'attributes'            => __( 'Slider Attributes', 'rtcamp' ),
			'parent_item_colon'     => __( 'Parent slider:', 'rtcamp' ),
			'all_items'             => __( 'All Sliders', 'rtcamp' ),
			'add_new_item'          => __( 'Add New Slider', 'rtcamp' ),
			'add_new'               => __( 'Add Slider', 'rtcamp' ),
			'new_item'              => __( 'New slider', 'rtcamp' ),
			'edit_item'             => __( 'Edit Slider', 'rtcamp' ),
			'update_item'           => __( 'Update slider', 'rtcamp' ),
			'view_item'             => __( 'View Slider', 'rtcamp' ),
			'view_items'            => __( 'View Sliders', 'rtcamp' ),
			'search_items'          => __( 'Search Slider', 'rtcamp' ),
			'not_found'             => __( 'Slider Not found', 'rtcamp' ),
			'not_found_in_trash'    => __( 'Slider Not found in Trash', 'rtcamp' ),
			'featured_image'        => __( 'Slider Image', 'rtcamp' ),
			'set_featured_image'    => __( 'Set slider image', 'rtcamp' ),
			'remove_featured_image' => __( 'Remove slider image', 'rtcamp' ),
			'use_featured_image'    => __( 'Use as slider image', 'rtcamp' ),
			'insert_into_item'      => __( 'Insert into slider', 'rtcamp' ),
			'uploaded_to_this_item' => __( 'Uploaded to this slider', 'rtcamp' ),
			'items_list'            => __( 'Slider list', 'rtcamp' ),
			'items_list_navigation' => __( 'slider list navigation', 'rtcamp' ),
			'filter_items_list'     => __( 'Filter slider list', 'rtcamp' ),
		);
		$args   = array(
			'label'               => __( 'Slider', 'rtcamp' ),
			'description'         => __( 'Slider Post Type', 'rtcamp' ),
			'labels'              => $labels,
			'supports'            => array( 'title', 'editor', 'thumbnail', 'excerpt' ),
			'taxonomies'          => array( 'category', 'post_tag' ),
			'hierarchical'        => false,
			'public'              => true,
			'show_ui'             => true,
			'show_in_menu'        => true,
			'menu_position'       => 5,
			'menu_icon'           => 'dashicons-images-alt2',
			'show_in_admin_bar'   => true,
			'show_in_nav_menus'   => true,
			'can_export'          => true,
			'has_archive'         => true,
			'exclude_from_search' => false,
			'publicly_queryable'  => true,
			'capability_type'     => 'page',
		);
		register_post_type( 'slider_post', $args );

	}
}

