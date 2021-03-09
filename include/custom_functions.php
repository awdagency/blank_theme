<?php

/* QUERY VAR ORDERS LIST FOR ACCOUNT PAGE */
function b2b_register_query_vars_for_orders_list( $vars ) {
	$vars[] = 'orderkey';
	$vars[] = 'action';
	return $vars;
}
add_filter( 'query_vars', 'b2b_register_query_vars_for_orders_list' );

function b2b_rewrite_tag_rule_for_orders_list() {
	add_rewrite_tag( '%orderkey%', '([^&]+)' );
	add_rewrite_tag( '%action%', '([^&]+)' );
	add_rewrite_rule( '^account/lista-ordini/([^/]*)/?', 'index.php?page_id=2891&orderkey=$matches[1]&action=$matches[2]','top' );
	add_rewrite_rule( '^account/orders-list/([^/]*)/?([^/]*)/?', 'index.php?page_id=2926&orderkey=$matches[1]&action=$matches[2]','top' );
}
add_action('init', 'b2b_rewrite_tag_rule_for_orders_list', 10, 0);

?>