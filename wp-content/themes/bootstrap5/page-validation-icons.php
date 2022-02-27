<?php
/**
 * Template Name: Global Options 08 Validation Icons Page
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
    <p>Enables background-image icons within textual inputs and some custom forms for validation states.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$enable-validation-icons: false;
</code></pre>

      <h2 class="text-muted my-3">Valid form control</h2>
      <div>
        <input type="text" class="form-control is-valid">
        <p class="valid-feedback">Valid feedback text</p>
        <p class="invalid-feedback">Invalid feedback text</p>
      </div>

      <h2 class="text-muted my-3">Invalid form control</h2>
      <div>
        <input type="text" class="form-control is-invalid">
        <p class="valid-feedback">Valid feedback text</p>
        <p class="invalid-feedback">Invalid feedback text</p>
      </div>
    
    </div>

<?php 
kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();