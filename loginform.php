<?php
/*
Plugin Name: Login Form Shortcodes
Description: This plugin manages login form short code
Author: Absar Akram
Author URI: http://www.absar.me
*/

add_action( 'init', 'my_add_shortcodes' );

function my_add_shortcodes() {

	add_shortcode( 'my-login-form', 'my_login_form_shortcode' );
}
function my_login_form_shortcode() {

	if ( is_user_logged_in() )
		return '<p>You are already logged in!</p>';

	return wp_login_form( array( 'echo' => false ) );
}
?>
