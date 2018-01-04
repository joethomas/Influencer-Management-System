<?php
/**
 * Register Influencer Category Taxonomy
 * @since 1.1.1
 */
function joe_ims_register_influencer_taxonomy_category() {

	$labels = array(
		'name'                       => _x( 'Influencer Categories', 'Taxonomy General Name', 'influencer-ms' ),
		'singular_name'              => _x( 'Category', 'Taxonomy Singular Name', 'influencer-ms' ),
		'menu_name'                  => __( 'Categories', 'influencer-ms' ),
		'all_items'                  => __( 'All Categories', 'influencer-ms' ),
		'parent_item'                => __( 'Parent Item', 'influencer-ms' ),
		'parent_item_colon'          => __( 'Parent Item:', 'influencer-ms' ),
		'new_item_name'              => __( 'New Category Name', 'influencer-ms' ),
		'add_new_item'               => __( 'Add New Category', 'influencer-ms' ),
		'edit_item'                  => __( 'Edit Category', 'influencer-ms' ),
		'update_item'                => __( 'Update Category', 'influencer-ms' ),
		'separate_items_with_commas' => __( 'Separate categories with commas', 'influencer-ms' ),
		'search_items'               => __( 'Search Categories', 'influencer-ms' ),
		'add_or_remove_items'        => __( 'Add or remove categories', 'influencer-ms' ),
		'choose_from_most_used'      => __( 'Choose from the most used categories', 'influencer-ms' ),
		'not_found'                  => __( 'Not Found', 'influencer-ms' ),
	);
	$rewrite = array(
		'slug'                       => 'influencer-category',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => true,
		'show_tagcloud'              => true,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'influencer_category', array( 'influencer' ), $args );

}
add_action( 'init', 'joe_ims_register_influencer_taxonomy_category', 0 );


/**
 * Add Influencer Category taxonomy menu item to Deal submenu
 *
 * @since 1.0.0
 */
function joe_ims_add_influencer_category_tax_to_deal_submenu() {

	add_submenu_page( 'edit.php?post_type=deal', 'Influencer Categories', 'Influencer Categories', 'manage_options', 'edit-tags.php?taxonomy=influencer_category&post_type=influencer' );

}
add_action( 'admin_menu', 'joe_ims_add_influencer_category_tax_to_deal_submenu' );
?>