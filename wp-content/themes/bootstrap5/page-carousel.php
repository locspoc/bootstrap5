<?php
/**
 * Template Name: Components Carousel Page
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
      
    <p>Change the carousel transition duration.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$carousel-transition-duration: 1s;
</code></pre>

      <div id="carouselSlidesOnly" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1200x600-success.png" alt="First slide" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1200x600-danger.png" alt="Second slide" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1200x600-warning.png" alt="Third slide" class="d-block w-100">
          </div>
          <div class="carousel-item">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1200x600-info.png" alt="Fourth slide" class="d-block w-100">
          </div>
        </div>
      </div>
    
</div>

<?php 
kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();