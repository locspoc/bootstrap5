<?php
/**
 * Template Name: Components - Breadcrumb Page
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
      
    <p>Change the breadcrumb divider.</p>
      
    <h2 class="h4 text-muted my-3">SCSS:</h2>
      
    <pre>
        
        <code>$breadcrumb-divider: quote(">");
        </code>
    
    </pre>

    <nav aria-label="Breadcrumb">

        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item"><a href="#">Sports</a></li>
            <li class="breadcrumb-item"><a href="#">Ball games</a></li>
            <li class="breadcrumb-item active" aria-current="page">Baseball</li>
        </ol>

    </nav>
    
</div>

<?php 
kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();