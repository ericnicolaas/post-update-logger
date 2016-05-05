<?php 

/**
 * Plugin Name:     Post Update Logger
 * Plugin URI:          
 * Description:     Log when a post, page or custom post type content is published or updated.
 * Version:         1.0.0
 * Author:          Studio 164a
 * Author URI:      http://164a.com
 */

// 
// Do the 'init' event
//
// do_action('init');


// //
// // Create a function that is run when the 'init' event happens.
// //
// add_action('init', 'tyc_function_name');

// function tyc_function_name() {

// }

// //
// // If you're on PHP 5.3+
// //
// add_action('init', function(){

// });

//
// Filter the content with 'the_content' hook
// 
// apply_filters('the_content', $content, $post_id);

//
// Create a function that hooks into the `the_content` hoook
//
// add_filter('the_content', 'tyc_filter_content', 11);

// function tyc_filter_content( $content ) {
//     return strtoupper( $content );
// }

// add_filter('the_content', 'tyc_filter_content_again', 10);

// function tyc_filter_content_again( $content ) {
//     return strtolower( $content );
// }

// 
// Do something when we save our post.
//
// do_action( 'save_post', $post_ID, $post, $update );

add_action( 'save_post', 'tyc_save_post', 10, 2 );

function tyc_save_post( $post_id, $post ) {

    

}




