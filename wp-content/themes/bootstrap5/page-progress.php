<?php
/**
 * Template Name: Components Progress Page
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
      
    <p>Change the progress animation timing.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$progress-bar-animation-timing: .5s linear infinite;
</code></pre>

      <div class="progress">
        <div class="progress-bar progress-bar-striped progress-bar-animated w-50" role="progressbar" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    
</div>

<?php 
kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();