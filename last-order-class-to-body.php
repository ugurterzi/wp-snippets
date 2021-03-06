add_filter( 'body_class', 'order_class');

function order_class( $orderclasses ) {

    // bail if Memberships isn't active
    if ( ! function_exists( 'wc_memberships' ) ) {
                return;
        }
        
    if ( wc_memberships_is_user_active_member( $user_id, 'membership-name' ) ) {

    $user_id = get_current_user_id(); // The current user ID
    
    // Get the WC_Customer instance Object for the current user
    $customer = new WC_Customer( $user_id );
    
    // Get the last WC_Order Object instance from current customer
    $last_order = $customer->get_last_order();
    
    $order_id     = $last_order->get_id(); // Get the order id
    $order_data   = $last_order->get_data(); // Get the order unprotected data in an array
    $order_status = $last_order->get_status(); // Get the order status
    
    if (is_account_page()) {
        $orderclasses[] = $order_status;
    	}
    	return $orderclasses;
	}
}
