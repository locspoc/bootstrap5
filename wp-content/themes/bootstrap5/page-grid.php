<?php
/**
 * Template Name: Layout 03 Grid Page
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

    <p>Change the number of grid columns and the grid gutter width.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$grid-columns: 16;
$grid-gutter-width: 1rem;
</code></pre>

      <div class="row">
        <div class="col-16 col-md-8 col-lg-4">
          <div class="bg-secondary text-white p-3">Content</div>
        </div>
        <div class="col-16 col-md-8 col-lg-4">
          <div class="bg-secondary text-white p-3">Content</div>
        </div>
        <div class="col-8 col-lg-4">
          <div class="bg-secondary text-white p-3">Content</div>
        </div>
        <div class="col-8 col-lg-4">
          <div class="bg-secondary text-white p-3">Content</div>
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