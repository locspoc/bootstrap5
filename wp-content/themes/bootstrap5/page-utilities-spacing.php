<?php
/**
 * Template Name: Utilities 04 Spacing Page
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

    <p>Change sizes for spacing utilities (margin, padding and gap).</p>
      
    <h2 class="h4 text-muted my-3">SCSS:</h2>
      
    <pre>
        <code>
            $spacers: (
                0: 0,
                q: $spacer / 4,
                h: $spacer / 2,
                1: $spacer,
                2: $spacer * 2,
                3: $spacer * 3,
                4: $spacer * 4,
                5: $spacer * 5
            );
        </code>
    </pre>

      <h2 class="text-muted my-3">Padding</h2>

      <div class="p-0 bg-secondary text-white border">p-0</div>

      <div class="p-q bg-secondary text-white border">p-q - "quarter" (1/4) of p-1</div>

      <div class="p-h bg-secondary text-white border">p-h - "half" (1/2) of p-1</div>

      <div class="p-1 bg-secondary text-white border">p-1</div>

      <div class="p-2 bg-secondary text-white border">p-2</div>

      <div class="p-3 bg-secondary text-white border">p-3</div>

      <div class="p-4 bg-secondary text-white border">p-4</div>

      <div class="p-5 bg-secondary text-white border">p-5</div>
    
</div>

<?php 
// kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();