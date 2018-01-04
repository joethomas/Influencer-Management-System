<?php
/**
 * Disable comments on partners.
 * @since 1.1.1
 */
function joe_ims_partner_close_comments( $post_content, $post ) {
    if( $post->post_type )
    switch( $post->post_type ) {
        case 'partner':
            $post->comment_status = 'closed';
        break;
    }
    return $post_content;
}
add_filter( 'default_content', 'joe_ims_partner_close_comments', 10, 2 );
?>