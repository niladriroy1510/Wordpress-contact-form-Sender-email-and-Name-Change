<?php

//For WordPress Theme in functions.php


// Function to change sender email address
 
function wpb_sender_email( $original_email_address ) {
    return 'help@okploy.com';
}
 
// Function to change sender name
function wpb_sender_name( $original_email_from ) {
    return 'OkPloy';
}
 
// Hooking up our functions to WordPress filters 
add_filter( 'wp_mail_from', 'wpb_sender_email' );
add_filter( 'wp_mail_from_name', 'wpb_sender_name' );