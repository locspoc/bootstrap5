<?php
/**
 * Template Name: Utilities 03 Sizing Page
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

    <p>Change percentages for sizing utility.</p>

    <h2 class="h4 text-muted my-3">SCSS:</h2>

    <pre>
        <code>
            $utilities: (
                "width": (
                    property: width,
                    class: w,
                    values: (
                        10: 10%,
                        20: 20%,
                        30: 30%,
                        40: 40%,
                        50: 50%,
                        60: 60%,
                        70: 70%,
                        80: 80%,
                        90: 90%,
                        100: 100%,
                        auto: auto
                    )
                ),
            );
        </code>
    </pre>

      <h2 class="text-muted my-3">Width</h2>

      <div class="bg-secondary">
          <div class="bg-light p-2 w-10">Width 10%</div>
          <div class="bg-light p-2 w-20">Width 20%</div>
          <div class="bg-light p-2 w-30">Width 30%</div>
          <div class="bg-light p-2 w-40">Width 40%</div>
          <div class="bg-light p-2 w-50">Width 50%</div>
          <div class="bg-light p-2 w-60">Width 60%</div>
          <div class="bg-light p-2 w-70">Width 70%</div>
          <div class="bg-light p-2 w-80">Width 80%</div>
          <div class="bg-light p-2 w-90">Width 90%</div>
          <div class="bg-light p-2 w-100">Width 100%</div>
      </div>
    
</div>

<?php 
// kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();