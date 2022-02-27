<?php
/**
 * Template Name: Global Options 04 Gradients Page
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
      <p>Enables predefined gradients via background-image styles on various components.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$enable-gradients: true;
</code></pre>

      <h2 class="text-muted my-3">Alert</h2>
      <div class="alert alert-secondary" role="alert">Secondary alert!</div>
      
      <h2 class="text-muted my-3">Button</h2>
      <button class="btn btn-secondary btn-lg">Button</button>

      <h2 class="text-muted my-3">Carousel</h2>
      <div id="carouselControls" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo get_stylesheet_directory_uri() . '/img/1200x600-success.png'; ?>" alt="First slide" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="<?php echo get_stylesheet_directory_uri() . '/img/1200x600-danger.png'; ?>" alt="Second slide" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="<?php echo get_stylesheet_directory_uri() . '/img/1200x600-warning.png'; ?>" alt="Third slide" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="<?php echo get_stylesheet_directory_uri() . '/img/1200x600-info.png'; ?>" alt="Fourth slide" class="d-block w-100">
          </div>
        </div>
        <button type="button" class="carousel-control-prev" data-bs-target="#carouselControls" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button type="button" class="carousel-control-next" data-bs-target="#carouselControls" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>
    
    </div>

<?php kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();