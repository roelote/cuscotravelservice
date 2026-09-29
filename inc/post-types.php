<?php
/**
 * Custom post types for the cusco theme.
 *
 * @package cusco
 */

/**
 * Register the "tour" custom post type.
 *
 * The post type key is "tour" so WordPress picks up single-tour.php
 * (and archive-tour.php) from the template hierarchy automatically.
 */
function cusco_register_tour_post_type() {
	$labels = array(
		'name'                  => _x( 'Tours', 'Post type general name', 'cusco' ),
		'singular_name'         => _x( 'Tour', 'Post type singular name', 'cusco' ),
		'menu_name'             => _x( 'Tours', 'Admin Menu text', 'cusco' ),
		'name_admin_bar'        => _x( 'Tour', 'Add New on Toolbar', 'cusco' ),
		'add_new'               => __( 'Add New', 'cusco' ),
		'add_new_item'          => __( 'Add New Tour', 'cusco' ),
		'new_item'              => __( 'New Tour', 'cusco' ),
		'edit_item'             => __( 'Edit Tour', 'cusco' ),
		'view_item'             => __( 'View Tour', 'cusco' ),
		'view_items'            => __( 'View Tours', 'cusco' ),
		'all_items'             => __( 'All Tours', 'cusco' ),
		'search_items'          => __( 'Search Tours', 'cusco' ),
		'not_found'             => __( 'No tours found.', 'cusco' ),
		'not_found_in_trash'    => __( 'No tours found in Trash.', 'cusco' ),
		'featured_image'        => __( 'Tour cover image', 'cusco' ),
		'set_featured_image'    => __( 'Set cover image', 'cusco' ),
		'remove_featured_image' => __( 'Remove cover image', 'cusco' ),
		'use_featured_image'    => __( 'Use as cover image', 'cusco' ),
		'archives'              => __( 'Tour archives', 'cusco' ),
		'item_published'        => __( 'Tour published.', 'cusco' ),
		'item_updated'          => __( 'Tour updated.', 'cusco' ),
	);

	$args = array(
		'labels'             => $labels,
		'public'             => true,
		'has_archive'        => true,
		'hierarchical'       => false,
		'menu_position'      => 5,
		'menu_icon'          => 'dashicons-palmtree',
		'show_in_rest'       => true,
		'taxonomies'         => array( 'category' ),
		'rewrite'            => array(
			'slug'       => 'tour',
			'with_front' => false,
		),
		'supports'           => array( 'title', 'editor', 'thumbnail', 'excerpt', 'revisions', 'page-attributes' ),
	);

	register_post_type( 'tour', $args );
}
add_action( 'init', 'cusco_register_tour_post_type' );

/**
 * Flush rewrite rules on theme activation so /tours/ URLs work right away.
 */
function cusco_tour_rewrite_flush() {
	cusco_register_tour_post_type();
	flush_rewrite_rules();
}
add_action( 'after_switch_theme', 'cusco_tour_rewrite_flush' );
