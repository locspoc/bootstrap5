<?php
/**
 * Template Name: Components Modal Page
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
      
    <p>Change modal animation and max-width.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$modal-fade-transform: scale(.25);
$modal-xl: calc(100% - 1rem);
</code></pre>

      <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modalHeaderFooter">Open modal</button>
      <div class="modal fade" id="modalHeaderFooter" tabindex="-1" aria-labelledby="modalHeaderFooterTitle" aria-hidden="true">
        <div class="modal-dialog modal-xl">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="modalHeaderFooterTitle">Modal title</h5>
              <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
              <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet pellentesque lorem sed elementum. Suspendisse maximus convallis ex. Etiam eleifend velit leo.</p>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-primary">Action</button>
              <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
          </div>
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