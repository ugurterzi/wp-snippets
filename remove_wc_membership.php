<?php // only use if needed!

//* Remove a WooCommerce Membership Plan (demo named as HELLO) whenever any other plan is purchased **/
function remove_hello_membership( $plan, $args ) {
    
    // Check that we're purchasing anything other than the HELLO plan (change number to HELLO plan ID)
    if ( 5674461 !== $plan->id ) {
        $memberships = wc_memberships_get_user_memberships( $args['user_id'] );
        
        foreach ( $memberships as $membership ) {
            // Check to see if this member has the hello plan 
            // then delete it if so
            if ( 5674461 === $membership->plan_id ) {
                 wp_delete_post( $membership->id );
            }
        }
    }
}
add_action( 'wc_memberships_grant_membership_access_from_purchase', 'remove_hello_membership', 10, 2 );
