add_filter( 'body_class', 'order_class');

function order_class($orderclasses) {

global $wp;

if (is_wc_endpoint_url( 'view-order' )) {
	$order = wc_get_order( $wp->query_vars['view-order'] );
	$order_status  = $order->get_status();
	$orderclasses[] = $order_status;  
}

    return $orderclasses;
}
