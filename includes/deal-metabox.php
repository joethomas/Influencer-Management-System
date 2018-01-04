<?php
/**
 * Add Deal Meta Box
 * @since 1.0.0
 */
function joe_ims_add_deal_meta_box() {
	add_meta_box( 'deal_meta_box',
		'Deal Details',
		'joe_ims_display_deal_meta_box',
		'deal', 'normal', 'high'
	);
}
add_action( 'admin_init', 'joe_ims_add_deal_meta_box' );

/**
 * Display Deal Meta Box
 * @since 1.0.0
 */
function joe_ims_display_deal_meta_box( $deal ) {
    // Retrieve current name of the Influencer based on deal ID
    $influencer = esc_html( get_post_meta( $deal->ID, 'influencer', true ) );
    ?>
    <table>
        <tr>
            <td style="width: 100%">Influencer</td>
            <td><input type="text" size="80" name="deal_influencer_name" value="<?php echo $influencer; ?>" /></td>
        </tr>
    </table>
    <?php
}

/**
 * Save Deal Post Custom Data
 * @since 1.0.0
 */
function add_deal_fields( $deal_id, $deal ) {
    // Check post type for deals
    if ( $deal->post_type == 'deal' ) {
        // Store data in post meta table if present in post data
        if ( isset( $_POST['deal_influencer_name'] ) && $_POST['deal_influencer_name'] != '' ) {
            update_post_meta( $deal_id, 'influencer', $_POST['deal_influencer_name'] );
        }
    }
}
add_action( 'save_post', 'add_deal_fields', 10, 2 );
?>