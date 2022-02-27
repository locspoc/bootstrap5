<?php
/**
 * Template Name: Global Options 06 Caret Page
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
      <p>Enables pseudo element caret on .dropdown-toggle.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$enable-caret: false;
</code></pre>
      
      <h2 class="text-muted my-3">Dropdown</h2>
      <div class="dropdown">
        <button type="button" class="btn btn-secondary dropdown-toggle" id="dropdownButton" data-bs-toggle="dropdown" aria-expanded="false">Dropdown button</button>
        <div class="dropdown-menu" aria-labelledby="dropdownButton">
          <a href="#" class="dropdown-item">First item</a>
          <a href="#" class="dropdown-item">Second item</a>
          <a href="#" class="dropdown-item">Third item</a>
        </div>
      </div>
    
    </div>

<?php 
kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();