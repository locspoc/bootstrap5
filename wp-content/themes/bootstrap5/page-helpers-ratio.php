<?php
/**
 * Template Name: Helpers Ratio Page
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

    <p>Add <code>1x2</code>, <code>2x3</code>, <code>3x4</code> and <code>4x5</code> to aspect ratios.</p>
      
        <h2 class="h4 text-muted my-3">SCSS:</h2>
      
          <pre>
              <code>
                    $custom-ratios: 
                        (
                            "1x2": calc(1 / 2 * 100%),  
                            "2x3": calc(2 / 3 * 100%),
                            "3x4": calc(3 / 4 * 100%),
                            "4x5": calc(4 / 5 * 100%)
                        );
                    $aspect-ratios: map-merge($aspect-ratios, $custom-ratios);
            </code>
        </pre>

      <div class="row">

        <div class="col-12 col-md-3">
          <div class="ratio ratio-1x2">
            <div class="bg-primary"></div>
          </div>
        </div>

        <div class="col-12 col-md-3">
          <div class="ratio ratio-2x3">
            <div class="bg-primary"></div>
          </div>
        </div>

        <div class="col-12 col-md-3">
          <div class="ratio ratio-3x4">
            <div class="bg-primary"></div>
          </div>
        </div>

        <div class="col-12 col-md-3">
          <div class="ratio ratio-4x5">
            <div class="bg-primary"></div>
          </div>
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