<?php
/**
 * Template Name: Components Card Page
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
      
    <p>Make cards have equal height by default.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$card-height: 100%;
</code></pre>

      <h2 class="text-muted my-3">Grid cards</h2>
      <div class="row row-cols-1 row-cols-md-2 row-cols-xl-3 row-cols-xxl-4 g-4 mb-4">
        <div class="col">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/300x150.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas feugiat, urna ut pharetra ultricies, augue tellus euismod turpis, vitae semper ipsum augue a velit. Pellentesque id finibus velit. Ut sagittis maximus maximus. In aliquet enim sed turpis mollis ornare. Suspendisse elementum a magna eu luctus. Etiam tincidunt mattis mauris, non lobortis nulla tempor in. Sed lacinia metus viverra, scelerisque enim sed, sollicitudin magna. Sed non augue sit amet nisl tincidunt ultrices. Praesent nec lacus eget tortor ultricies pulvinar. Praesent euismod ut lorem sit amet bibendum.</p>
            </div>
            <div class="card-footer">Created DD-MM-YYYY</div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/300x150.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas feugiat, urna ut pharetra ultricies, augue tellus euismod turpis, vitae semper ipsum augue a velit. Pellentesque id finibus velit. Ut sagittis maximus maximus. In aliquet enim sed turpis mollis ornare. Suspendisse elementum a magna eu luctus. Etiam tincidunt mattis mauris, non lobortis nulla tempor in.</p>
            </div>
            <div class="card-footer">Created DD-MM-YYYY</div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/300x150.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas feugiat, urna ut pharetra ultricies, augue tellus euismod turpis, vitae semper ipsum augue a velit. Pellentesque id finibus velit.</p>
            </div>
            <div class="card-footer">Created DD-MM-YYYY</div>
          </div>
        </div>
        <div class="col">
          <div class="card">
            <img class="card-img-top" src="<?php echo get_stylesheet_directory_uri(); ?>/img/300x150.png" alt="Card image">
            <div class="card-body">
              <h4 class="card-title">Card title</h4>
              <p class="card-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="card-footer">Created DD-MM-YYYY</div>
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