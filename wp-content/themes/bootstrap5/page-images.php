<?php
/**
 * Template Name: Content 02 Images Page
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

    <p>Change padding, background color, border color and border radius.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$thumbnail-padding: .5rem;
$thumbnail-bg: $gray-200;
$thumbnail-border-color: $gray-500;
$thumbnail-border-radius: 0;
</code></pre>

      <h2 class="text-muted my-3">Thumbnail</h2>
      <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/100x100.png" alt="Image thumbnail" class="img-thumbnail">
    
</div>

<?php 
// kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();