<?php

function twpp_enqueue_styles(){
  wp_enqueue_style('reset-sheet', get_template_directory_uri(). "/css/recet.css");
  wp_enqueue_style('main-style-sheet', get_template_directory_uri(). "/style.css");
}
add_action('wp_enqueue_scripts', 'twpp_enqueue_styles');

add_filter('show_admin_bar', '__return_false');

function twpp_enqueue_scripts()
{
  wp_enqueue_script(
    'main-js-sheet',
    get_template_directory_uri(). "/js\main.js",
    array(),
    false,
    true
  );
}
add_action('wp_enqueue_acripts', 'twpp_enqueue_styles');

add_theme_support('post-thumbnails');


function sort_postdata( $query ) {
	if ( is_admin() || ! $query->is_main_query() ) {
		return;
	}
	$query->set( 'order', 'ASC' );
	$query->set( 'orderby', 'date' );
}

add_action( 'pre_get_posts', 'sort_postdata' );
?>