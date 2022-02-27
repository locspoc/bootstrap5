<?php
/**
 * Template Name: Global Options 01 Spacer Page
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
      <p>Specifies the default spacer value to programmatically generate the spacer utilities.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$spacer: 2rem;
</code></pre>

      <h2 class="text-muted my-3">Alert</h2>
      <div class="alert alert-secondary" role="alert">Secondary alert!</div>

      <h2 class="text-muted my-3">Card</h2>
      <div class="card w-50">
        <h3 class="card-header">Card header</h3>
        <div class="card-body">
          <h4 class="card-title">Card title</h4>
          <h6 class="card-subtitle">Card subtitle</h6>
          <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet pellentesque lorem sed elementum. Suspendisse maximus convallis ex. Etiam eleifend velit leo.</p>
        </div>
        <div class="card-footer">Created DD-MM-YYYY</div>
      </div>

      <h2 class="text-muted my-3">Spacing utilities</h2>
      <div class="p-1 bg-secondary text-white border">p-1</div>
      <div class="p-2 bg-secondary text-white border">p-2</div>
      <div class="p-3 bg-secondary text-white border">p-3</div>
      <div class="p-4 bg-secondary text-white border">p-4</div>
      <div class="p-5 bg-secondary text-white border">p-5</div>
    
    </div>

<?php kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();