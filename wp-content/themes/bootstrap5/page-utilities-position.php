<?php
/**
 * Template Name: Utilities 02 Position Page
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

    <p>Change position values for <code>top</code>, <code>bottom</code>, <code>start</code> and <code>end</code>.</p>

    <h2 class="h4 text-muted my-3">SCSS:</h2>
      
    <pre>
        <code>
            $position-values: (
            0: 0,
            25: 25%,
            50: 50%,
            75: 75%,
            100: 100%
            );
        </code>
    </pre>

    <div class="position-relative border m-5 w-50" style="height: 300px;">

        <div class="p-2 text-white bg-dark position-absolute top-0 start-0 translate-middle">Top left</div>

        <div class="p-2 text-white bg-dark position-absolute top-0 start-25 translate-middle">Top left-ish</div>

        <div class="p-2 text-white bg-dark position-absolute top-0 start-50 translate-middle">Top center</div>

        <div class="p-2 text-white bg-dark position-absolute top-0 start-75 translate-middle">Top right-ish</div>

        <div class="p-2 text-white bg-dark position-absolute top-0 start-100 translate-middle">Top right</div>

        <div class="p-2 text-white bg-dark position-absolute top-25 start-0 translate-middle">Top-ish left</div>

        <div class="p-2 text-white bg-dark position-absolute top-50 start-0 translate-middle">Middle left</div>

        <div class="p-2 text-white bg-dark position-absolute top-75 start-0 translate-middle">Bottom-ish left</div>

        <div class="p-2 text-white bg-dark position-absolute top-100 start-0 translate-middle">Bottom left</div>

    </div>
    
</div>

<?php 
// kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();