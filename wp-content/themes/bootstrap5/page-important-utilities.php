<?php
/**
 * Template Name: Global Options 10 Important Utilities Page
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
    <p>Enables the !important suffix in utility classes.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$enable-important-utilities: false;
</code></pre>

      <h2 class="text-muted my-3">Text utilities</h2>
      <div class="my-element text-center">Text center</div>
    
    </div>

<?php 
kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();