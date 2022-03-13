<?php
/**
 * Template Name: Content 04 Typography Page
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

    <p>Change various typography styles.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$body-bg: $gray-100;
$body-color: $gray-700;

$font-family-base: 'Roboto', sans-serif;
$font-size-base: 1.5rem;
$line-height-base: 1.3;
$line-height-sm: 1;

$link-color: $info;
$link-decoration: none;
$link-hover-color: shift-color($link-color, $link-shade-percentage);
$link-hover-decoration: underline;

$lead-font-size: $font-size-base * 1.25;
$lead-font-weight: $font-weight-light;

$h1-font-size: $font-size-base * 3.5;
$h2-font-size: $font-size-base * 3;
$h3-font-size: $font-size-base * 2.5;
$h4-font-size: $font-size-base * 2;
$h5-font-size: $font-size-base * 1.5;
$h6-font-size: $font-size-base;
$headings-font-weight: $font-weight-bold;
$headings-line-height: $line-height-sm;
$headings-margin-bottom: $spacer;

$display-font-sizes: (
  1: $h1-font-size * 1.5,
  2: $h2-font-size * 1.5,
  3: $h3-font-size * 1.5,
  4: $h4-font-size * 1.5,
  5: $h5-font-size * 1.5,
  6: $h6-font-size * 1.5
);
$display-font-weight: $font-weight-light;
$display-line-height: $headings-line-height;
</code></pre>

      <h2 class="text-muted my-3">Headings</h2>
      <h1>&lt;h1&gt; heading</h1>
      <h2>&lt;h2&gt; heading</h2>
      <h3>&lt;h3&gt; heading</h3>
      <h4>&lt;h4&gt; heading</h4>
      <h5>&lt;h5&gt; heading</h5>
      <h6>&lt;h6&gt; heading</h6>

      <h2 class="text-muted my-3">Display headings</h2>
      <h1 class="display-1">Display heading 1</h1>
      <h1 class="display-2">Display heading 2</h1>
      <h1 class="display-3">Display heading 3</h1>
      <h1 class="display-4">Display heading 4</h1>
      <h1 class="display-5">Display heading 5</h1>
      <h1 class="display-6">Display heading 6</h1>

      <h2 class="text-muted my-3">Lead paragraph</h2>
      <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet pellentesque lorem sed elementum. Suspendisse maximus convallis ex. <a href="#">Etiam eleifend velit leo</a>.</p>

      <h2 class="text-muted my-3">Paragraph</h2>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet pellentesque lorem sed elementum. Suspendisse maximus convallis ex. <a href="#">Etiam eleifend velit leo</a>.</p>
    
</div>

<?php 
// kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();