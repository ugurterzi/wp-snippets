<?php // only use if needed!

///** Embed Front End PM in WooCommerce My Account
//* Dont forget to create the custom WooCommerce endpoint (in this case it is messages)
/* Dont forget to create a WooCommerce template file (in child theme) for this custom ednpoint. 
*///

add_filter( 'fep_query_url_without_esc_filter', function( $url, $args ){
 return add_query_arg( $args, 'https://mydomain.com/my-account/messages/');
}, 10, 2);
