<?php
/**
 * Template Name: Utilities 05 Utility API Page
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

    <h2 class="mb-3 mt-5">Syntax</h2>
      <h3 class="h4 text-muted my-3">SCSS:</h3>
      <pre><code>$utilities: (
  // Name for utility
  "[string]": (
    // CSS property (required)
    property: [variable],
    // CSS values (required)
    values: [space-separated list or map (if class names and values should be different],
    // Class name prefix to use instead of property name
    class: [variable],
    // Generate variants for different states
    state: [space-separated list],
    // Generate responsive classes
    responsive: [boolean (false)],
    // Enable fluid rescaling
    rfs: [boolean (false)],
    // Generate print classes,
    print: [boolean (false)],
    // Keep utility in RTL,
    rtl: [boolean (true)]
  )
);
</code></pre>

      <h2 class="mb-3 mt-5">Modify</h2>
      <p>Modify sizing utility for width</p>
      <h3 class="h4 text-muted my-3">SCSS:</h3>
      <pre><code>$utilities: (
  "width": (
    property: width,
    class: w,
    values: (
      10: 10%,
      20: 20%,
      30: 30%,
      40: 40%,
      50: 50%,
      60: 60%,
      70: 70%,
      80: 80%,
      90: 90%,
      100: 100%,
      auto: auto
    )
  ),
);
</code></pre>

      <div class="bg-secondary">
        <div class="bg-light p-2 w-10">Width 10%</div>
        <div class="bg-light p-2 w-20">Width 20%</div>
        <div class="bg-light p-2 w-30">Width 30%</div>
        <div class="bg-light p-2 w-40">Width 40%</div>
        <div class="bg-light p-2 w-50">Width 50%</div>
        <div class="bg-light p-2 w-60">Width 60%</div>
        <div class="bg-light p-2 w-70">Width 70%</div>
        <div class="bg-light p-2 w-80">Width 80%</div>
        <div class="bg-light p-2 w-90">Width 90%</div>
        <div class="bg-light p-2 w-100">Width 100%</div>
      </div>

      <h2 class="mb-3 mt-5">Add: simple</h2>
      <p>Generate cursor utilities</p>
      <h3 class="h4 text-muted my-3">SCSS:</h3>
      <pre><code>$utilities: map-merge(
  $utilities,
  (
    "cursor": (
      property: cursor,
      values: auto context-menu copy grab help pointer wait,
    )
  )
);
</code></pre>

      <div class="badge bg-secondary cursor-auto">Cursor auto</div>
      <div class="badge bg-secondary cursor-context-menu">Cursor context-menu</div>
      <div class="badge bg-secondary cursor-copy">Cursor copy</div>
      <div class="badge bg-secondary cursor-grab">Cursor grab</div>
      <div class="badge bg-secondary cursor-help">Cursor help</div>
      <div class="badge bg-secondary cursor-pointer">Cursor pointer</div>
      <div class="badge bg-secondary cursor-wait">Cursor wait</div>

      <h2 class="mb-3 mt-5">Add: complex</h2>
      <p>Generate opacity utilities</p>
      <h3 class="h4 text-muted my-3">SCSS:</h3>
      <pre><code>$utilities: map-merge(
  $utilities,
  (
    "opacity": (
      property: opacity,
      class: o,
      responsive: true,
      print: true,
      state: hover,
      values: (
        0: 0,
        25: .25,
        50: .5,
        75: .75,
        100: 1,
      )
    )
  )
);
</code></pre>

      <h4 class="h5 text-muted my-3">All breakpoints</h4>
      <div class="badge bg-secondary o-0">Opacity 0 for</div>
      <div class="badge bg-secondary o-25">Opacity 0.25 for</div>
      <div class="badge bg-secondary o-50">Opacity 0.5 for</div>
      <div class="badge bg-secondary o-75">Opacity 0.75 for</div>
      <div class="badge bg-secondary o-100">Opacity 1 for</div>

      <h4 class="h5 text-muted my-3">Breakpoint sm and up</h4>
      <div class="badge bg-secondary o-sm-0">Opacity 0 for sm</div>
      <div class="badge bg-secondary o-sm-25">Opacity 0.25 for sm</div>
      <div class="badge bg-secondary o-sm-50">Opacity 0.5 for sm</div>
      <div class="badge bg-secondary o-sm-75">Opacity 0.75 for sm</div>
      <div class="badge bg-secondary o-sm-100">Opacity 1 for sm</div>

      <h4 class="h5 text-muted my-3">Breakpoint md and up</h4>
      <div class="badge bg-secondary o-md-0">Opacity 0 for md</div>
      <div class="badge bg-secondary o-md-25">Opacity 0.25 for md</div>
      <div class="badge bg-secondary o-md-50">Opacity 0.5 for md</div>
      <div class="badge bg-secondary o-md-75">Opacity 0.75 for md</div>
      <div class="badge bg-secondary o-md-100">Opacity 1 for md</div>

      <h4 class="h5 text-muted my-3">Breakpoint lg and up</h4>
      <div class="badge bg-secondary o-lg-0">Opacity 0 for lg</div>
      <div class="badge bg-secondary o-lg-25">Opacity 0.25 for lg</div>
      <div class="badge bg-secondary o-lg-50">Opacity 0.5 for lg</div>
      <div class="badge bg-secondary o-lg-75">Opacity 0.75 for lg</div>
      <div class="badge bg-secondary o-lg-100">Opacity 1 for lg</div>

      <h4 class="h5 text-muted my-3">Breakpoint xl and up</h4>
      <div class="badge bg-secondary o-xl-0">Opacity 0 for xl</div>
      <div class="badge bg-secondary o-xl-25">Opacity 0.25 for xl</div>
      <div class="badge bg-secondary o-xl-50">Opacity 0.5 for xl</div>
      <div class="badge bg-secondary o-xl-75">Opacity 0.75 for xl</div>
      <div class="badge bg-secondary o-xl-100">Opacity 1 for xl</div>

      <h4 class="h5 text-muted my-3">Breakpoint xxl and up</h4>
      <div class="badge bg-secondary o-xxl-0">Opacity 0 for xxl</div>
      <div class="badge bg-secondary o-xxl-25">Opacity 0.25 for xxl</div>
      <div class="badge bg-secondary o-xxl-50">Opacity 0.5 for xxl</div>
      <div class="badge bg-secondary o-xxl-75">Opacity 0.75 for xxl</div>
      <div class="badge bg-secondary o-xxl-100">Opacity 1 for xxl</div>

      <h4 class="h5 text-muted my-3">For print only</h4>
      <div class="badge bg-secondary o-print-0">Opacity 0 for print</div>
      <div class="badge bg-secondary o-print-25">Opacity 0.25 for print</div>
      <div class="badge bg-secondary o-print-50">Opacity 0.5 for print</div>
      <div class="badge bg-secondary o-print-75">Opacity 0.75 for print</div>
      <div class="badge bg-secondary o-print-100">Opacity 1 for print</div>

      <h4 class="h5 text-muted my-3">On hover</h4>
      <div class="badge bg-secondary o-0-hover">Opacity 0 on hover</div>
      <div class="badge bg-secondary o-25-hover">Opacity 0.25 on hover</div>
      <div class="badge bg-secondary o-50-hover">Opacity 0.5 on hover</div>
      <div class="badge bg-secondary o-75-hover">Opacity 0.75 on hover</div>
      <div class="badge bg-secondary o-100-hover">Opacity 1 on hover</div>

      <h2 class="mb-3 mt-5">Rename</h2>
      <p>Rename class prefix for "margin start" from <code>.ms-*</code> to <code>.ml-*</code>.</p>
      <h3 class="h4 text-muted my-3">SCSS:</h3>
      <pre><code>$utilities: map-merge(
  $utilities, (
    "margin-start": map-merge(
      map-get($utilities, "margin-start"),
      ( class: ml ),
    ),
  )
);
</code></pre>

      <div class="ml-0">Margin left 0</div>
      <div class="ml-1">Margin left 1</div>
      <div class="ml-2">Margin left 2</div>
      <div class="ml-3">Margin left 3</div>
      <div class="ml-4">Margin left 4</div>
      <div class="ml-5">Margin left 5</div>

      <h2 class="mb-3 mt-5">Remove</h2>
      <p>Remove interaction utilities</p>
      <h3 class="h4 text-muted my-3">SCSS:</h3>
      <pre><code>$utilities: map-merge(
  $utilities,
  (
    "user-select": null,
    "pointer-events": null
  )
);
</code></pre>

      <h4 class="h5 text-muted mt-3">Pointer events none</h4>
      <p><a href="#" class="pe-none">Lorem ipsum dolor sit amet, consectetur adipiscing elit</a>. In laoreet pellentesque lorem sed elementum. Suspendisse maximus convallis ex. Etiam eleifend velit leo.</p>

      <h4 class="h5 text-muted mt-3">User select all</h4>
      <p class="user-select-all">Lorem ipsum dolor sit amet, consectetur adipiscing elit. In laoreet pellentesque lorem sed elementum. Suspendisse maximus convallis ex. Etiam eleifend velit leo.</p>
    
</div>

<?php 
// kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();