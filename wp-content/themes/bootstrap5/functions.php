<?php

/* Version Number */
$bootstrapAssets = include 'build/index.asset.php'; // Build version number
// die('$bootstrapAssets: ' . $bootstrapAssets['version']);

/* Loads parent stylesheet */
function wpchild_enqueue_styles()
{
  //   wp_enqueue_style( 'wpm-kadence-style', get_template_directory_uri() . '/style.css' );
}
add_action('wp_enqueue_scripts', 'wpchild_enqueue_styles');

/* Loads child scripts */
function custom_enqueue_scripts()
{
  global $bootstrapAssets;

  // Styles
  wp_dequeue_style('kadence-global-css');
  wp_enqueue_style('bootstrap5-style', get_stylesheet_directory_uri() . '/vendor/bootstrap/css/bootstrap.min.css');
  wp_enqueue_style('wpm-kadence-style', get_stylesheet_directory_uri() . '/style.css', [], $bootstrapAssets['version']);
  wp_enqueue_style('custom-style', get_stylesheet_directory_uri() . '/build/index.css', [], $bootstrapAssets['version']);
  wp_enqueue_style('bootstrap-icons', get_stylesheet_directory_uri() . '/vendor/bootstrap/css/bootstrap-icons.css');
  wp_enqueue_style('highlight-zenburn', get_stylesheet_directory_uri() . '/vendor/highlight/zenburn.min.css');

  // Scripts
  wp_enqueue_script('bootstrap5-script', get_stylesheet_directory_uri() . '/vendor/bootstrap/js/bootstrap.bundle.min.js', [], '1.0', true);
  wp_enqueue_script('font-awesome', get_stylesheet_directory_uri() . '/vendor/font-awesome/js/all.js', [], '1.0', true);
  wp_enqueue_script('custom-script', get_stylesheet_directory_uri() . '/build/index.js', [], $bootstrapAssets['version'], true);
  wp_enqueue_script('smooth-scroll', get_stylesheet_directory_uri() . '/vendor/smooth-scroll/smooth-scroll.min.js', [], '1.0', true);
  wp_enqueue_script('highlight', get_stylesheet_directory_uri() . '/vendor/highlight/highlight.js', [], '1.0', true);
}
add_action('wp_enqueue_scripts', 'custom_enqueue_scripts');

/* Load scripts to Kadence header before */
function custom_before_header()
{
  // die('before header');
  get_template_part('template-parts/header/before-header'); // Roboto
}
add_action('kadence_before_header', 'custom_before_header');

/* Load scripts to Kadence header after */
function custom_after_header()
{
  get_template_part('template-parts/header/bootstrap-icons'); // Bootstrap icons
  get_template_part('template-parts/header/pre-code'); // Pre code color
}
add_action('kadence_after_header', 'custom_after_header');


/* Load scripts to Kadence footer before */
function custom_footer()
{
  get_template_part('template-parts/footer/scripts'); // Pre code color
}

add_action('kadence_before_footer', 'custom_footer');

/**
 * Define Body Classes
 *
 * @param array $classes the body classes.
 */
function custom_body_classes($classes)
{
  if (is_page('resume-and-cv-page')) {
    $classes[] = 'bg-light';
  }
  return $classes;
}
add_filter('body_class', 'custom_body_classes');
