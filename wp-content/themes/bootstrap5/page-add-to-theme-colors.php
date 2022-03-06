<?php
/**
 * Template Name: Colors 02 Add To Theme Colors Page
 *
 * @package kadence
 */

namespace Kadence;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>

<div class="container pt-5">

    <h1><?php the_title(); ?></h1>
      <p>Add <code>$indigo</code>, <code>$purple</code>, <code>$pink</code>, <code>$orange</code> and <code>$teal</code> to theme colors.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$custom-colors: (
  "tertiary": $indigo,
  "quaternary": $purple,
  "quinary": $pink,
  "senary": $orange,
  "septenary": $teal
);
$theme-colors: map-merge($theme-colors, $custom-colors);
</code></pre>

      <div class="row">
        <div class="col-12 col-sm-6">
          <h2 class="text-muted my-3">Background colors</h2>
          <div class="p-3 bg-primary text-white">Primary</div>
          <div class="p-3 bg-secondary text-white">Secondary</div>
          <div class="p-3 bg-success text-white">Success</div>
          <div class="p-3 bg-info text-white">Info</div>
          <div class="p-3 bg-warning text-white">Warning</div>
          <div class="p-3 bg-danger text-white">Danger</div>
          <div class="p-3 bg-light">Light</div>
          <div class="p-3 bg-dark text-white">Dark</div>
          <div class="p-3 bg-tertiary text-white">Tertiary</div>
          <div class="p-3 bg-quaternary text-white">Quaternary</div>
          <div class="p-3 bg-quinary text-white">Quinary</div>
          <div class="p-3 bg-senary text-white">Senary</div>
          <div class="p-3 bg-septenary text-white">Septenary</div>
        </div>
        <div class="col-12 col-sm-6">
          <h2 class="text-muted my-3">Text colors</h2>
          <div class="p-3 text-primary">Primary</div>
          <div class="p-3 text-secondary">Secondary</div>
          <div class="p-3 text-success">Success</div>
          <div class="p-3 text-info">Info</div>
          <div class="p-3 text-warning">Warning</div>
          <div class="p-3 text-danger">Danger</div>
          <div class="p-3 text-light bg-dark">Light</div>
          <div class="p-3 text-dark">Dark</div>
          <div class="p-3 text-tertiary">Tertiary</div>
          <div class="p-3 text-quaternary">Quaternary</div>
          <div class="p-3 text-quinary">Quinary</div>
          <div class="p-3 text-senary">Senary</div>
          <div class="p-3 text-septenary">Septenary</div>
        </div>
      </div>

      <h2 class="text-muted my-3">Components</h2>
      <h3 class="text-muted my-3">Alert</h3>
      <div class="alert alert-tertiary" role="alert">Tertiary alert!</div>
      <h3 class="text-muted my-3">Button</h3>
      <button class="btn btn-quaternary">Quaternary button</button>
      <h3 class="text-muted my-3">List group</h3>
      <ul class="list-group">
        <li class="list-group-item">Default list group item</li>
        <li class="list-group-item list-group-item-quinary">Quinary list group item</li>
      </ul>
      <h3 class="text-muted my-3">Colored link</h3>
      <a href="#" class="link-senary">Senary link</a><br>
      <h3 class="text-muted my-3">Border</h3>
      <div class="p-3 border border-5 border-septenary">Septenary</div>
    
</div>

<?php 
// kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();