<?php
/**
 * Disable comments on influencers.
 * @since 1.1.1
 */
function joe_ims_influencer_close_comments( $post_content, $post ) {
    if( $post->post_type )
    switch( $post->post_type ) {
        case 'influencer':
            $post->comment_status = 'closed';
        break;
    }
    return $post_content;
}
add_filter( 'default_content', 'joe_ims_influencer_close_comments', 10, 2 );
?>