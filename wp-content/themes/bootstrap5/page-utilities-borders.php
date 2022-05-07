<?php
/**
 * Template Name: Utilities 01 Border Page
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

    <p>Change border width globally and for border utilities.</p>
      
    <h2 class="h4 text-muted my-3">SCSS:</h2>
      
    <pre>
        <code>
            $border-width: 5px;
            $border-widths: (
            0: 0,
            1: 2px,
            2: 4px,
            3: 6px,
            4: 8px,
            5: 10px
            );
        </code>
    </pre>

    <h2 class="text-muted my-3">Alert</h2>

    <div class="alert alert-secondary" role="alert">Secondary alert!</div>

    <h2 class="text-muted my-3">Border utilities</h2>

    <div class="border border-1 p-3 mb-2">.border-1</div>

    <div class="border border-2 p-3 mb-2">.border-2</div>

    <div class="border border-3 p-3 mb-2">.border-3</div>

    <div class="border border-4 p-3 mb-2">.border-4</div>
    
    <div class="border border-5 p-3 mb-2">.border-5</div>
    
</div>

<?php 
// kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();