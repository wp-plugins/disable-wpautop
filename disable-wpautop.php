<?php
/*
Plugin Name: Disable WPAUTOP
Plugin URI: http://mtdewvirus.com/code/wordpress-plugins/
Description: Disables the wpautop function for the_content and the_excerpt.
Version: 1.0
Author: Nick Momrik
Author URI: http://mtdewvirus.com/
*/
remove_filter('the_content', 'wpautop');
remove_filter('the_excerpt', 'wpautop');
?>