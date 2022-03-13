<?php
/**
 * Template Name: Content 01 Figures Page
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

    <p>Change font size and color.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$figure-caption-font-size: $font-size-lg;
$figure-caption-color: $body-color;
</code></pre>

      <figure class="figure">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/600x400.png" class="figure-img img-fluid" alt="Figure image">
        <figcaption class="figure-caption">Caption for the figure.</figcaption>
      </figure>
    
</div>

<?php 
// kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();