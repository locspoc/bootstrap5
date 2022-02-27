<?php
/**
 * Template Name: Global Options 03 Box Shadow Page
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
      <p>Enables predefined decorative box-shadow styles on various components.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$enable-shadows: true;
</code></pre>
      
      <h2 class="text-muted my-3">Image thumbnail</h2>
      <img src="<?php echo get_stylesheet_directory_uri() . '/img/100x100.png'; ?>" alt="Image thumbnail" class="img-thumbnail">

      <h2 class="text-muted my-3">Form control</h2>
      <input type="text" class="form-control" placeholder="Text input placeholder" id="inputText">

      <h2 class="text-muted my-3">Select</h2>
      <select class="form-select" aria-label="Default select" id="inputSelect">
        <option selected="">Select option</option>
        <option value="1">Option one</option>
        <option value="2">Option two</option>
        <option value="3">Option three</option>
        <option value="4">Option four</option>
        <option value="5">Option five</option>
      </select>
      
      <h2 class="text-muted my-3">Button</h2>
      <button class="btn btn-secondary btn-lg">Button</button>

      <h2 class="text-muted my-3">Progress</h2>
      <div class="progress">
        <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
      </div>
    
    </div>

<?php kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();