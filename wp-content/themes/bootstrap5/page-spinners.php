<?php
/**
 * Template Name: Components Spinners Page
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
      
    <p>Change the spinner animation speed.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$spinner-animation-speed: 1.5s;
</code></pre>

        <h2 class="text-muted my-3">Border spinner</h2>
        <div class="spinner-border" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>

        <h2 class="text-muted my-3">Growing spinner</h2>
        <div class="spinner-grow" role="status">
          <span class="visually-hidden">Loading...</span>
        </div>
    
</div>

<?php 
kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();