<?php
/**
 * Template Name: Blank Page
 *
 * @package kadence
 */

namespace Kadence;

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

get_header(); ?>

<button class="btn btn-primary" data-bs-toggle="button">Button</button>

<?php kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();