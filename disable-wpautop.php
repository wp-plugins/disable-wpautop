<?php
/*
Plugin Name: Disable WPAUTOP
Version: 1.0
Plugin URI: http://dev.wp-plugins.org/browser/disable-wpautop/
Description: Disables the wpautop function for the_content and the_excerpt.
Author: Nick Momrik
Author URI: http://mtdewvirus.com/
*/
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
?>