<?php
/**
 * Template Name: Layout 02 Container Page
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

    <p>Change the breakpoint sizes.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$grid-breakpoints: (
  xs: 0,
  sm: 300px,
  md: 600px,
  lg: 900px,
  xl: 1200px,
  xxl: 1500px
);
</code></pre>

      <h2 class="text-muted my-3">Responsive guide</h2>
      <p>Change the container max widths.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$container-max-widths: (
  sm: 300px,
  md: 500px,
  lg: 700px,
  xl: 900px,
  xxl: 1100px
);
</code></pre>

      <div class="container">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet pellentesque lorem sed elementum. Suspendisse maximus convallis ex. Etiam eleifend velit leo. Praesent nec egestas neque. Integer a ipsum et ante volutpat rhoncus. Pellentesque ultrices metus eget quam malesuada, sed faucibus nisi fringilla. Nunc eget turpis in turpis molestie malesuada a non sapien. Nullam auctor, tellus malesuada convallis accumsan, felis ex ultrices neque, quis tincidunt felis orci id nisi.</div>
    
</div>

<?php 
// kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();