<?php
/**
 * Plugin Name: My Facebook Tags
 * Plugin URI: http://
 * Description: This plugin adds some Facebook Open Graph tags to our single posts.
 * Version: 1.0.0
 * Author: Andreas H. Jonsson
 * Author URI: http://
 * License: GPL2
 */
add_action( 'wp_head', 'my_facebook_tags' );
function my_facebook_tags() {
	echo 'I am in the head section';
}