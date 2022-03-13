<?php
/**
 * Template Name: Layout 01 Breakpoints Page
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
      <div class="card bg-light">
        <div class="card-body">
          <div class="btn-group btn-group-sm flex-wrap mb-3">
            <span class="pe-none btn btn-primary d-inline-block d-sm-none">XS</span>
            <span class="pe-none btn btn-secondary d-none d-sm-inline-block">XS</span>
            <span class="pe-none btn btn-primary d-none d-sm-inline-block d-md-none">SM</span>
            <span class="pe-none btn btn-secondary d-sm-none d-md-inline-block">SM</span>
            <span class="pe-none btn btn-primary d-none d-md-inline-block d-lg-none">MD</span>
            <span class="pe-none btn btn-secondary d-md-none d-lg-inline-block">MD</span>
            <span class="pe-none btn btn-primary d-none d-lg-inline-block d-xl-none">LG</span>
            <span class="pe-none btn btn-secondary d-lg-none d-xl-inline-block">LG</span>
            <span class="pe-none btn btn-primary d-none d-xl-inline-block d-xxl-none">XL</span>
            <span class="pe-none btn btn-secondary d-xl-none d-xxl-inline-block">XL</span>
            <span class="pe-none btn btn-primary d-none d-xxl-inline-block">XXL</span>
            <span class="pe-none btn btn-secondary d-xxl-none">XXL</span>
          </div>
          <small class="d-block d-sm-none">Extra small: &lt;300px</small>
          <small class="d-none d-sm-block d-md-none">Small: ≥300px</small>
          <small class="d-none d-md-block d-lg-none">Medium: ≥600px</small>
          <small class="d-none d-lg-block d-xl-none">Large: ≥900px</small>
          <small class="d-none d-xl-block d-xxl-none">Extra large: ≥1200px</small>
          <small class="d-none d-xxl-block">Extra extra large: ≥1500px</small>
        </div>
      </div>

      <h2 class="text-muted my-3">Grid</h2>
      <div class="row">
        <div class="col-12 col-sm-10 col-md-8 col-lg-6 col-xl-4 col-xxl-2">
          <div class="bg-secondary text-white p-3">Column</div>
        </div>
      </div>
    
</div>

<?php 
// kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();