<?php

/* Loads parent stylesheet */
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );
function wpchild_enqueue_styles(){
  wp_enqueue_style( 'wpm-kadence-style', get_stylesheet_directory_uri() . '/style.css' );
  wp_enqueue_style( 'bootstrap5', get_stylesheet_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
}