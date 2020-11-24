<?php // only use if needed!

//**
// Add role class to body
function add_role_to_body($classes) {
	
	global $current_user;
	$user_role = current($current_user->roles);
	
	$classes[] = 'role-'. $user_role;
	return $classes;
}
add_filter('body_class','add_role_to_body');
