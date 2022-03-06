<?php
/**
 * Template Name: Colors 01 Colors Overview Page
 *
 * @package kadence
 */

namespace Kadence;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>

<div class="container pt-5">

    <h1>Colors overview</h1>

      <h2 class="text-muted my-3">Color Sass maps</h2>
      <div class="row">
        <div class="col-12 col-sm-4">
          <h3 class="text-muted my-3">Gray</h3>
          <div class="p-3 bg-gray-100 text-white">$gray-100</div>
          <div class="p-3 bg-gray-200 text-white">$gray-200</div>
          <div class="p-3 bg-gray-300 text-white">$gray-300</div>
          <div class="p-3 bg-gray-400 text-white">$gray-400</div>
          <div class="p-3 bg-gray-500 text-white">$gray-500</div>
          <div class="p-3 bg-gray-600 text-white">$gray-600</div>
          <div class="p-3 bg-gray-700 text-white">$gray-700</div>
          <div class="p-3 bg-gray-800 text-white">$gray-800</div>
          <div class="p-3 bg-gray-900 text-white">$gray-900</div>
        </div>
        <div class="col-12 col-sm-4">
          <h3 class="text-muted my-3">Color</h3>
          <div class="p-3 bg-blue text-white">$blue</div>
          <div class="p-3 bg-indigo text-white">$indigo</div>
          <div class="p-3 bg-purple text-white">$purple</div>
          <div class="p-3 bg-pink text-white">$pink</div>
          <div class="p-3 bg-red text-white">$red</div>
          <div class="p-3 bg-orange text-white">$orange</div>
          <div class="p-3 bg-yellow text-white">$yellow</div>
          <div class="p-3 bg-green text-white">$green</div>
          <div class="p-3 bg-teal text-white">$teal</div>
          <div class="p-3 bg-cyan text-white">$cyan</div>
          <div class="p-3 bg-white">$white</div>
          <div class="p-3 bg-gray text-white">$gray</div>
          <div class="p-3 bg-gray-dark text-white">$gray-dark</div>
        </div>
        <div class="col-12 col-sm-4">
          <h3 class="text-muted my-3">Theme</h3>
          <div class="p-3 bg-primary text-white">$primary</div>
          <div class="p-3 bg-secondary text-white">$secondary</div>
          <div class="p-3 bg-success text-white">$success</div>
          <div class="p-3 bg-info text-white">$info</div>
          <div class="p-3 bg-warning text-white">$warning</div>
          <div class="p-3 bg-danger text-white">$danger</div>
          <div class="p-3 bg-light">$light</div>
          <div class="p-3 bg-dark text-white">$dark</div>
        </div>
      </div>

      <h2 class="text-muted my-3">All tints and shades of specific colors</h2>
      <div class="row">
        <div class="col-12 col-sm-6">
          <h3 class="text-muted my-3">Blue (example)</h3>
          <div class="p-3 bg-blue-100 text-white">$blue-100</div>
          <div class="p-3 bg-blue-200 text-white">$blue-200</div>
          <div class="p-3 bg-blue-300 text-white">$blue-300</div>
          <div class="p-3 bg-blue-400 text-white">$blue-400</div>
          <div class="p-3 bg-blue-500 text-white">$blue-500</div>
          <div class="p-3 bg-blue-600 text-white">$blue-600</div>
          <div class="p-3 bg-blue-700 text-white">$blue-700</div>
          <div class="p-3 bg-blue-800 text-white">$blue-800</div>
          <div class="p-3 bg-blue-900 text-white">$blue-900</div>
        </div>
      </div>
    
</div>

<?php 
// kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();