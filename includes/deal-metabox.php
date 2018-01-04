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

	$terms.     = get_terms( 'deal_influencer', array( 'hide_empty' => false ) );

	$deal       = get_post();
	$influencer = wp_get_object_terms( $post->ID, 'deal_influencer', array( 'orderby' => 'name', 'order' => 'ASC' ) );
	$name       = '';

	if ( ! is_wp_error( $influencer ) ) {
    	if ( isset( $influencer[0] ) && isset( $influencer[0]->name ) ) {
			$name = $influencer[0]->name;
	    }
    }
	foreach ( $terms as $term ) {
		?>
		<label title='<?php esc_attr_e( $term->name ); ?>'>
		    <input type="radio" name="deal_influencer" value="<?php esc_attr_e( $term->name ); ?>" <?php checked( $term->name, $name ); ?>>
			<span><?php esc_html_e( $term->name ); ?></span>
		</label><br>
		<?php
    }
}

/**
 * Save Deal Post Influencer
 * @since 1.0.0
 */
function joe_ims_save_deal_influencer_meta_box( $post_id ) {
	if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) {
		return;
	}
	if ( ! isset( $_POST['deal_influencer'] ) ) {
		return;
	}
	$influencer = sanitize_text_field( $_POST['deal_influencer'] );

	// A valid rating is required, so don't let this get published without one
	if ( empty( $influencer ) ) {
		// unhook this function so it doesn't loop infinitely
		remove_action( 'save_deal_influencer', 'save_deal_influencer_meta_box' );
		$postdata = array(
			'ID'          => $post_id,
			'post_status' => 'draft',
		);
		wp_update_post( $postdata );
	} else {
		$term = get_term_by( 'name', $influencer, 'deal_influencer' );
		if ( ! empty( $term ) && ! is_wp_error( $term ) ) {
			wp_set_object_terms( $post_id, $term->term_id, 'deal_influencer', false );
		}
	}
}
add_action( 'save_deal_influencer', 'joe_ims_save_deal_influencer_meta_box' );

/**
 * Display an error message at the top of the post edit screen explaining that ratings is required.
 *
 * Doing this prevents users from getting confused when their new posts aren't published, as we
 * require a valid rating custom taxonomy.
 *
 * @param WP_Post The current post object.
 */
function joe_ims_show_required_field_error_msg( $post ) {
	if ( 'deal' === get_post_type( $post ) && 'auto-draft' !== get_post_status( $post ) ) {
	    $influencer = wp_get_object_terms( $post->ID, 'deal_influencer', array( 'orderby' => 'name', 'order' => 'ASC' ) );
        if ( is_wp_error( $influencer ) || empty( $influencer ) ) {
			printf(
				'<div class="error below-h2"><p>%s</p></div>',
				esc_html__( 'Influencer is mandatory for creating a new deal.' )
			);
		}
	}
}
// Unfortunately, 'admin_notices' puts this too high on the edit screen
add_action( 'edit_form_top', 'joe_ims_show_required_field_error_msg' );
?>