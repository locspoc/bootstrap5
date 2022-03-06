<?php
/**
 * Template Name: Colors 03 Remove From Theme Colors Page
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
      
    <p>Remove <code>info</code>, <code>light</code> and <code>dark</code> from theme colors.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$theme-colors: map-remove($theme-colors, "info", "light", "dark");
</code></pre>

      <div class="row">
        <div class="col-12 col-sm-6">
          <h2 class="text-muted my-3">Background colors</h2>
          <div class="p-3 bg-primary text-white">Primary</div>
          <div class="p-3 bg-secondary text-white">Secondary</div>
          <div class="p-3 bg-success text-white">Success</div>
          <div class="p-3 bg-warning text-white">Warning</div>
          <div class="p-3 bg-danger text-white">Danger</div>
        </div>
        <div class="col-12 col-sm-6">
          <h2 class="text-muted my-3">Text colors</h2>
          <div class="p-3 text-primary">Primary</div>
          <div class="p-3 text-secondary">Secondary</div>
          <div class="p-3 text-success">Success</div>
          <div class="p-3 text-warning">Warning</div>
          <div class="p-3 text-danger">Danger</div>
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