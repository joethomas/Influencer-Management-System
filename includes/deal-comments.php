<?php
/**
 * Disable comments on deals.
 * @since 1.0.0
 */
function joe_ims_deal_close_comments( $post_content, $post ) {
    if( $post->post_type )
    switch( $post->post_type ) {
        case 'deal':
            $post->comment_status = 'closed';
        break;
    }
    return $post_content;
}
add_filter( 'default_content', 'joe_ims_deal_close_comments', 10, 2 );
?>