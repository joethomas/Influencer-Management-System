<?php
/**
 * Register Influencer Post Type
 *
 * @link https://code.tutsplus.com/tutorials/a-guide-to-wordpress-custom-post-types-creation-display-and-meta-boxes--wp-27645
 * @since 1.1.1
 */
function joe_ims_register_influencer_post_type() {

	$labels = array(
		'name'                  => _x( 'Influencers', 'Post Type General Name', 'influencer-ms' ),
		'singular_name'         => _x( 'Influencer', 'Post Type Singular Name', 'influencer-ms' ),
		'menu_name'             => __( 'Influencers', 'influencer-ms' ),
		'name_admin_bar'        => __( 'Influencers', 'influencer-ms' ),
		'archives'              => __( 'Influencer Archives', 'influencer-ms' ),
		'parent_item_colon'     => __( 'Parent Item:', 'influencer-ms' ),
		'all_items'             => __( 'All Influencers', 'influencer-ms' ),
		'view_item'             => __( 'View', 'influencer-ms' ),
		'add_new_item'          => __( 'Add New', 'influencer-ms' ),
		'add_new'               => __( 'Add New', 'influencer-ms' ),
		'edit_item'             => __( 'Edit', 'influencer-ms' ),
		'update_item'           => __( 'Update', 'influencer-ms' ),
		'search_items'          => __( 'Search Influencers', 'influencer-ms' ),
		'not_found'             => __( 'No influencers found.', 'influencer-ms' ),
		'not_found_in_trash'    => __( 'No influencers found in Trash.', 'influencer-ms' ),
		'featured_image'        => __( 'Featured Image', 'influencer-ms' ),
		'set_featured_image'    => __( 'Set featured image', 'influencer-ms' ),
		'remove_featured_image' => __( 'Remove featured image', 'influencer-ms' ),
		'use_featured_image'    => __( 'Use as featured image', 'influencer-ms' ),
		'insert_into_item'      => __( 'Insert into influencer', 'influencer-ms' ),
		'uploaded_to_this_item' => __( 'Uploaded to this influencer', 'influencer-ms' ),
		'items_list'            => __( 'Influencers list', 'influencer-ms' ),
		'items_list_navigation' => __( 'Influencers list navigation', 'influencer-ms' ),
		'filter_items_list'     => __( 'Filter influencers list', 'influencer-ms' ),
	);
	$args = array(
		'label'               => __( 'Influencer', 'influencer-ms' ),
		'description'         => __( 'Influencer post type', 'influencer-ms' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => current_user_can( 'edit_pages' ) ? true : false,
		'show_in_nav_menus'   => false,
		'show_in_admin_bar'   => current_user_can( 'edit_pages' ) ? true : false,
		'menu_position'       => 5,
		'menu_icon'           => 'dashicons-groups',
		'can_export'          => true,
		'has_archive'         => false,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'post',
	);
	register_post_type( 'influencer', $args );

}
add_action( 'init', 'joe_ims_register_influencer_post_type', 0 );
?>