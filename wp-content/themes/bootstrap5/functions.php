<?php

/* Loads parent stylesheet */
function wpchild_enqueue_styles(){
//   wp_enqueue_style( 'wpm-kadence-style', get_template_directory_uri() . '/style.css' );
}
add_action( 'wp_enqueue_scripts', 'wpchild_enqueue_styles' );

/* Loads child scripts */
function custom_enqueue_scripts(){

  wp_dequeue_style( 'kadence-global-css' );

//   wp_enqueue_style( 'wpm-kadence-style', get_stylesheet_directory_uri() . '/style.css' );
//   wp_enqueue_style( 'bootstrap5-style', get_stylesheet_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css' );
  wp_enqueue_style( 'custom-style', get_stylesheet_directory_uri() . '/build/index.css' );
  wp_enqueue_script( 'bootstrap5-script', get_stylesheet_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js',[], '1.0', true );
  wp_enqueue_script( 'custom-script', get_stylesheet_directory_uri() . '/build/index.js',[], '1.0', true );
}
add_action( 'wp_enqueue_scripts', 'custom_enqueue_scripts' );

/* Load scripts to Kadence header */
function custom_after_header() {
  get_template_part( 'template-part/header/pre-code' ); // Pre code color
}
add_action( 'kadence_after_header', 'custom_after_header' );