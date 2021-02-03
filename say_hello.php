<?php
/*
Plugin Name: Say Hello
Description: Simple messages on the admin and site pages
Author: Sarah Jones
Version: 1.0
Author URI: sarahjones.co.za
*/

// Action hooks
add_action('wp_head', 'hello_page_msg');
add_action( 'admin_notices', 'say_hello_admin' );
add_action( 'wp_footer', 'the_end' );

// Prints a simple hello message on the header of pages
function hello_page_msg() {
    echo '<p>Hello viewer, hope you enjoy this page!</p>';
}

// This just prints a simple dismissible hello message on the admin page
function say_hello_admin() {
	echo '<div class="notice is-dismissible">
	<p>Hello admin user. Have a good day</p>
</div>';
}

// Prints a simple end of page message on the footer of pages
function the_end() {
    echo 'That\'s the end of it.';
}

?>






