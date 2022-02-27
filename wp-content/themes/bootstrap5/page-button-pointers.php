<?php
/**
 * Template Name: Global Options 07 Button Pointers Page
 *
 * @package kadence
 */

// namespace Kadence;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>

<div class="container pt-5">

    <h1><?php the_title(); ?></h1>
      <p>Add “hand” cursor to non-disabled button elements.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$enable-button-pointers: false;
</code></pre>
      
      <h2 class="text-muted my-3">Button</h2>
      <button type="button" class="btn btn-secondary">Secondary</button>
    
    </div>

<?php 
// kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();