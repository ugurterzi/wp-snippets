<?php // only copy this line if needed

/**
 * Replace the 'customer' role (WooCommerce default) with your own one.
**/

add_filter('woocommerce_new_customer_data', 'wc_assign_custom_role', 10, 1);

function wc_assign_custom_role($args) {
  $args['role'] = 'subscriber';
  
  return $args;
}
