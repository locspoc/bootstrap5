<?php
/**
 * Template Name: Global Options 02 Border Radius Page
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
      <p>Enables predefined border-radius styles on various components.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$enable-rounded: false;
</code></pre>

      <h2 class="text-muted my-3">Card</h2>
      <div class="card bg-secondary text-white">
        <div class="card-body">
          <p class="card-text">Card</p>
        </div>
      </div>
      
      <h2 class="text-muted my-3">Button</h2>
      <button class="btn btn-secondary">Button</button>
  
      <h2 class="text-muted my-3">Form control</h2>
      <input type="text" class="form-control" placeholder="Text input placeholder" id="inputText">

      <h2 class="text-muted my-3">Alert</h2>
      <div class="alert alert-secondary" role="alert">Secondary alert!</div>

      <h2 class="text-muted my-3">List group</h2>
      <ul class="list-group">
        <li class="list-group-item">List group item one</li>
        <li class="list-group-item">List group item two</li>
        <li class="list-group-item">List group item three</li>
      </ul>
    
    </div>

<?php kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();