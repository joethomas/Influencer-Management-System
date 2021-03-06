<?php
/**
 * Register Deal Category Taxonomy
 * @since 1.0.0
 */
function joe_ims_register_deal_taxonomy_category() {

	$labels = array(
		'name'                       => _x( 'Deal Categories', 'Taxonomy General Name', 'influencer-ms' ),
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
		'slug'                       => 'deal-category',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'deal_category', array( 'deal' ), $args );

}
add_action( 'init', 'joe_ims_register_deal_taxonomy_category', 0 );


/**
 * Register Deal Influencer Taxonomy
 * @since 1.0.0
 */
function joe_ims_register_deal_taxonomy_influencer() {

	$labels = array(
		'name'                       => _x( 'Deal Influencers', 'Taxonomy General Name', 'influencer-ms' ),
		'singular_name'              => _x( 'Influencer', 'Taxonomy Singular Name', 'influencer-ms' ),
		'menu_name'                  => __( 'Influencers', 'influencer-ms' ),
		'all_items'                  => __( 'All Influencers', 'influencer-ms' ),
		'parent_item'                => __( 'Parent Item', 'influencer-ms' ),
		'parent_item_colon'          => __( 'Parent Item:', 'influencer-ms' ),
		'new_item_name'              => __( 'New Influencer Name', 'influencer-ms' ),
		'add_new_item'               => __( 'Add New Influencer', 'influencer-ms' ),
		'edit_item'                  => __( 'Edit Influencer', 'influencer-ms' ),
		'update_item'                => __( 'Update Influencer', 'influencer-ms' ),
		'separate_items_with_commas' => __( 'Separate influencers with commas', 'influencer-ms' ),
		'search_items'               => __( 'Search Influencers', 'influencer-ms' ),
		'add_or_remove_items'        => __( 'Add or remove influencers', 'influencer-ms' ),
		'choose_from_most_used'      => __( 'Choose from the most used influencers', 'influencer-ms' ),
		'not_found'                  => __( 'Not Found', 'influencer-ms' ),
	);
	$rewrite = array(
		'slug'                       => 'deal-influencer',
		'with_front'                 => true,
		'hierarchical'               => true,
	);
	$args = array(
		'labels'                     => $labels,
		'hierarchical'               => true,
		'public'                     => true,
		'show_ui'                    => true,
		'show_admin_column'          => true,
		'show_in_nav_menus'          => false,
		'show_tagcloud'              => false,
		'rewrite'                    => $rewrite,
	);
	register_taxonomy( 'deal_influencer', array( 'deal' ), $args );

}
add_action( 'init', 'joe_ims_register_deal_taxonomy_influencer', 0 );
?>