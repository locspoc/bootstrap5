<?php
/**
 * Template Name: Forms Range Page
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
      
    <p>Change range track height, thumb width and thumb border radius.</p>
      
    <h2 class="h4 text-muted my-3">SCSS:</h2>
      
    <pre>
        
        <code>
            
            $form-range-track-height: 1rem;

            $form-range-thumb-width: 2rem;

            $form-range-thumb-border-radius: 2rem;

        </code>

    </pre>

    <input type="range" class="form-range" id="inputRange">
    
</div>

<?php 
kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();