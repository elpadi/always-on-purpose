<?php
/*
Plugin Name: Always On Purpose Base Code
Plugin URI: http://alwaysonpurpose.com
Description: Code used on the website irrespective of theme.
Version: 1
Author: Carlos Padilla
Author URI: http://cpadilla.thejackmag.com
License: GPL2
*/
function aop_home_video() {
	printf('
		<div class="video">
			<h2 class="video__title">Own the Room: Two Minute Talk</h2>
			%s
		</div>
	', apply_filters('the_content', 'https://vimeo.com/212182491'));
}
  
add_action('wp_enqueue_scripts', function() {
	wp_enqueue_style('aop', plugins_url('aop/aop.css', __FILE__));
	$mfn = 'wptouch_is_mobile_theme_showing';
	if (function_exists($mfn) && $mfn()) {
		wp_enqueue_style('aop-mobile', plugins_url('aop/aop-mobile.css', __FILE__));
	}
});
