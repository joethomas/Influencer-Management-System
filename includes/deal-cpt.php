<?php
/**
 * Register Deal Post Type
 *
 * @link https://code.tutsplus.com/tutorials/a-guide-to-wordpress-custom-post-types-creation-display-and-meta-boxes--wp-27645
 * @since 1.0.0
 */
function joe_ims_register_deal_post_type() {

	$labels = array(
		'name'                  => _x( 'Deals', 'Post Type General Name', 'influencer-ms' ),
		'singular_name'         => _x( 'Deal', 'Post Type Singular Name', 'influencer-ms' ),
		'menu_name'             => __( 'Deals', 'influencer-ms' ),
		'name_admin_bar'        => __( 'Deals', 'influencer-ms' ),
		'archives'              => __( 'Deal Archives', 'influencer-ms' ),
		'parent_item_colon'     => __( 'Parent Item:', 'influencer-ms' ),
		'all_items'             => __( 'All Deals', 'influencer-ms' ),
		'view_item'             => __( 'View', 'influencer-ms' ),
		'add_new_item'          => __( 'Add New', 'influencer-ms' ),
		'add_new'               => __( 'Add New', 'influencer-ms' ),
		'edit_item'             => __( 'Edit', 'influencer-ms' ),
		'update_item'           => __( 'Update', 'influencer-ms' ),
		'search_items'          => __( 'Search Deals', 'influencer-ms' ),
		'not_found'             => __( 'No deals found.', 'influencer-ms' ),
		'not_found_in_trash'    => __( 'No deals found in Trash.', 'influencer-ms' ),
		'featured_image'        => __( 'Featured Image', 'influencer-ms' ),
		'set_featured_image'    => __( 'Set featured image', 'influencer-ms' ),
		'remove_featured_image' => __( 'Remove featured image', 'influencer-ms' ),
		'use_featured_image'    => __( 'Use as featured image', 'influencer-ms' ),
		'insert_into_item'      => __( 'Insert into deal', 'influencer-ms' ),
		'uploaded_to_this_item' => __( 'Uploaded to this deal', 'influencer-ms' ),
		'items_list'            => __( 'Deals list', 'influencer-ms' ),
		'items_list_navigation' => __( 'Deals list navigation', 'influencer-ms' ),
		'filter_items_list'     => __( 'Filter deals list', 'influencer-ms' ),
	);
	$args = array(
		'label'               => __( 'Deal', 'influencer-ms' ),
		'description'         => __( 'Deal post type', 'influencer-ms' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-cart',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => is_admin() ? false : false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'deal', $args );

}
add_action( 'init', 'joe_ims_register_deal_post_type', 0 );
?>