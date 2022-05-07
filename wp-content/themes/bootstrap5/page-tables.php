<?php
/**
 * Template Name: Content 03 Tables Page
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

    <p>Change background color scale, color, background color and striped order.</p>
      <h2 class="h4 text-muted my-3">SCSS:</h2>
      <pre><code>$table-bg-scale: -60%;
$table-color: $gray-600;
$table-bg: $gray-100;
$table-striped-order: even;
</code></pre>

      <h2 class="text-muted my-3">Default</h2>
      <table class="table">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Country</th>
            <th scope="col">Language</th>
            <th scope="col">Capital</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>England</td>
            <td>English</td>
            <td>London</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>France</td>
            <td>French</td>
            <td>Paris</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Germany</td>
            <td>German</td>
            <td>Berlin</td>
          </tr>
        </tbody>
      </table>

      <h2 class="text-muted my-3">Primary</h2>
      <table class="table table-primary">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Country</th>
            <th scope="col">Language</th>
            <th scope="col">Capital</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>England</td>
            <td>English</td>
            <td>London</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>France</td>
            <td>French</td>
            <td>Paris</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Germany</td>
            <td>German</td>
            <td>Berlin</td>
          </tr>
        </tbody>
      </table>

      <h2 class="text-muted my-3">Striped</h2>
      <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">#</th>
            <th scope="col">Country</th>
            <th scope="col">Language</th>
            <th scope="col">Capital</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>England</td>
            <td>English</td>
            <td>London</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>France</td>
            <td>French</td>
            <td>Paris</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Germany</td>
            <td>German</td>
            <td>Berlin</td>
          </tr>
        </tbody>
      </table>
    
</div>

<?php 
// kadence()->print_styles( 'kadence-content' );
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();