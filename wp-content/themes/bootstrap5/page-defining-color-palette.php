<?php
/**
 * Template Name: Colors 04 Defining Color Palette Page
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
      
    <p>Define new colors for variables <code>$primary</code>, <code>$success</code>, <code>$info</code>, <code>$warning</code> and <code>$danger</code>, and remove <code>secondary</code> from theme colors map.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$primary:       #264653;
$success:       #2A9D8F;
$info:          #E9C46A;
$warning:       #F4A261;
$danger:        #E76F51;
$theme-colors: map-remove($theme-colors, "secondary");
</code></pre>

      <div class="row">
        <div class="col-12 col-sm-6">
          <h2 class="text-muted my-3">Background colors</h2>
          <div class="p-3 bg-primary text-white">Primary</div>
          <div class="p-3 bg-success text-white">Success</div>
          <div class="p-3 bg-info text-white">Info</div>
          <div class="p-3 bg-warning text-white">Warning</div>
          <div class="p-3 bg-danger text-white">Danger</div>
          <div class="p-3 bg-light">Light</div>
          <div class="p-3 bg-dark text-white">Dark</div>
        </div>
        <div class="col-12 col-sm-6">
          <h2 class="text-muted my-3">Text colors</h2>
          <div class="p-3 text-primary">Primary</div>
          <div class="p-3 text-success">Success</div>
          <div class="p-3 text-info">Info</div>
          <div class="p-3 text-warning">Warning</div>
          <div class="p-3 text-danger">Danger</div>
          <div class="p-3 text-light bg-dark">Light</div>
          <div class="p-3 text-dark">Dark</div>
        </div>
    
</div>

<?php 
// kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();