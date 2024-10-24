<?php

/**
 * Plugin Name: Hello world
 * Description: This is our first plugin which creates some information widgets to admin dashboard as well as at admin notice.
 * Author:  Praveen Suthar
 * Version: 1.0
 * Author URI: https://gbas.in/
 * Plugin URI: https://gbas.in/
 */

//  How to create Admin notices 
//  Admin Dashboard widgets.

add_action( 'admin_notices', 'hw_show_information_msg' ) ;

function hw_show_success_msg(){
    echo '<div class="notice notice-success is-dismissible"><p> Hello, I am admin success notice </p></div>' ;
    
}

function hw_show_error_msg(){
    echo '<div class="notice notice-error is-dismissible"><p> Hello, I am admin error notice </p></div>' ;
    
}

function hw_show_information_msg(){
    echo '<div class="notice notice-info is-dismissible"><p> Hello, I am admin information notice </p></div>' ;
    
}

function hw_show_warning_msg(){
    echo '<div class="notice notice-warning is-dismissible"><p> Hello, I am admin warning notice </p></div>' ;
    
}

add_action( 'wp_dashboard_setup', 'show_wp_widget' ) ;

function show_wp_widget(){
    wp_add_dashboard_widget("my_first_widget", "Hello_praveen", "custom_widget_content");
}

function custom_widget_content(){
    echo '<p> Hello, I am first widget </p>';
}
?>

