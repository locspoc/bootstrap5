<?php
/**
 * Template Name: Global Options 09 Negative Margins Page
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
    <p>Enables the generation of negative margin utilities.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$enable-negative-margins: true;
</code></pre>

      <h2 class="text-muted my-3">Spacing utilities</h2>
      <div>No class</div>
      <div class="ms-n1">ms-n1</div>
      <div class="ms-n2">ms-n2</div>
      <div class="ms-n3">ms-n3</div>
      <div class="ms-n4">ms-n4</div>
      <div class="ms-n5">ms-n5</div>
    
    </div>

<?php 
kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();