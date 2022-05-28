<?php

/**
 * Template Name: Bootstrap Icons
 *
 * @package kadence
 */

namespace Kadence;

if (!defined('ABSPATH')) {
    exit;
}

get_header(); ?>

<style>
    @font-face {
        font-family: "bootstrap-icons";
        src: url("<?php echo get_stylesheet_directory_uri(); ?>/vendor/bootstrap/fonts/bootstrap-icons.woff2") format("woff2"),
            url("<?php echo get_stylesheet_directory_uri(); ?>/vendor/bootstrap/fonts/bootstrap-icons.woff") format("woff");
    }

    .pseudo-icon::before {
        display: inline-block;
        content: '';
        background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16"><circle cx="8" cy="8" r="8"/></svg>');
        background-repeat: no-repeat;
        background-size: 1rem;
        width: 1rem;
        height: 1rem;
    }

    .pseudo-icon-primary::before {
        background-image: url('data:image/svg+xml,<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="%230d6efd" class="bi bi-circle-fill" viewBox="0 0 16 16"><circle cx="8" cy="8" r="8"/></svg>');
    }

    .pseudo-icon-large::before {
        background-size: 2rem;
        width: 2rem;
        height: 2rem;
    }

    .icon-large {
        width: 2rem;
        height: 2rem;
    }
</style>

<div class="container pt-5">

    <h1><?php the_title(); ?></h1>

    <h2 class="display-4">Icons</h2>
    <div class="row">
        <div class="col-12 col-lg-4">
            <p>See all available icons in this version locally.</p>
            <a href="icons.html" class="btn btn-primary" target="_blank">Local</a>
        </div>
        <div class="col-12 col-lg-4">
            <p>See all the latest available icons on the official Bootstrap Icons website.</p>
            <a href="https://icons.getbootstrap.com/#icons" class="btn btn-primary" target="_blank">Online</a>
        </div>
        <div class="col-12 col-lg-4">
            <p>See all the latest available icons in an official online Figma file.</p>
            <a href="https://www.figma.com/file/tZZVOiEgKcRUHE3s6o5djB/Bootstrap-Icons-v1.4.0?node-id=0%3A1" class="btn btn-primary" target="_blank">Figma</a>
        </div>
    </div>
    <hr class="my-5">
    <h2 class="display-4">Installation</h2>
    <div class="row">
        <div class="col-12 col-lg-4">
            <h3>Download</h3>
            <a href="https://github.com/twbs/icons/archive/v1.4.0.zip" class="btn btn-primary">Everything</a>
            <a href="https://github.com/twbs/icons/releases/download/v1.4.0/bootstrap-icons-1.4.0.zip" class="btn btn-primary">SVGs + fonts</a>
        </div>
        <div class="col-12 col-lg-4">
            <h3>CDN</h3>
            <a href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.3.0/font/bootstrap-icons.css" class="btn btn-primary" target="_blank">jsDelivr</a>
        </div>
        <div class="col-12 col-lg-4">
            <h3>NPM</h3>
            <pre class="border bg-light text-muted px-3">
            <code>
npm i bootstrap-icons
            </code>
          </pre>
        </div>
    </div>
    <hr class="my-5">
    <h2 class="display-4">Usage</h2>
    <div class="row">
        <div class="col-12">
            <h3>Embedded</h3>
            <div class="my-5">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                </svg>
            </div>
            <pre class="border bg-light text-muted px-3">
            <code>
&lt;svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill" viewBox="0 0 16 16"&gt;
  &lt;circle cx="8" cy="8" r="8"/&gt;
&lt;/svg&gt;</code>
          </pre>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-6">
            <h3>Sprite</h3>
            <div class="my-5">
                <svg width="16" height="16" fill="currentColor">
                    <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/vendor/bootstrap/icons/sprite/bootstrap-icons.svg#circle-fill" />
                </svg>
            </div>
            <pre class="border bg-light text-muted px-3">
            <code>
&lt;svg width="16" height="16" fill="currentColor"&gt;
  &lt;use xlink:href="bootstrap-icons.svg#circle-fill"/&gt;
&lt;/svg&gt;
            </code>
          </pre>
            <p class="small">Only works on a server. <a href="https://frontendworkshop.com/courses/bootstrap-5-responsive-web-design-and-development/icons/" target="_blank">Go to online version</a>.</p>
        </div>
        <div class="col-12 col-lg-6">
            <h3>External image</h3>
            <div class="my-5">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/vendor/bootstrap/icons/icons/circle-fill.svg">
            </div>
            <pre class="border bg-light text-muted px-3">
            <code>
&lt;img src="icons/circle-fill.svg"&gt;
            </code>
          </pre>
            <p class="small">Won't inherit text color from parent element.</p>
        </div>
    </div>
    <div class="row">
        <div class="col-12 col-lg-6">
            <h3>Icon font</h3>
            <div class="my-5">
                <i class="bi-circle-fill"></i>
            </div>
            <pre class="border bg-light text-muted px-3">
            <code>
&lt;i class="bi-circle-fill"&gt;&lt;/i&gt;</code>
          </pre>
        </div>
        <div class="col-12 col-lg-6">
            <h3>CSS</h3>
            <div class="my-5">
                <div class="pseudo-icon"></div>
            </div>
            <pre class="border bg-light text-muted px-3">
            <code>
.pseudo-icon::before {
  display: inline-block;
  content: '';
  background-image: url('data:image/svg+xml,&lt;svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="%23000" class="bi bi-circle-fill" viewBox="0 0 16 16"&gt;&lt;circle cx="8" cy="8" r="8"/&gt;&lt;/svg&gt;');
  background-repeat: no-repeat;
  background-size: 1rem;
  width: 1rem;
  height: 1rem;
}</code>
          </pre>
            <p class="small">Won't inherit text color from parent element.</p>
        </div>
    </div>
    <hr class="my-5">
    <h2 class="display-4">Styling</h2>
    <div class="row">
        <div class="col-6 col-lg-4">
            <h3>Embedded</h3>
            <div class="my-5 text-primary">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-circle-fill icon-large" viewBox="0 0 16 16">
                    <circle cx="8" cy="8" r="8" />
                </svg>
            </div>
        </div>
        <div class="col-6 col-lg-4">
            <h3>Sprite</h3>
            <div class="my-5 text-primary">
                <svg width="16" height="16" fill="currentColor" class="icon-large">
                    <use xlink:href="<?php echo get_stylesheet_directory_uri(); ?>/vendor/bootstrap/icons/sprite/bootstrap-icons.svg#circle-fill" />
                </svg>
            </div>
        </div>
        <div class="col-6 col-lg-4">
            <h3>External image</h3>
            <div class="my-5">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/vendor/bootstrap/icons/icons/circle-fill.svg" class="icon-large">
            </div>
        </div>
        <div class="col-6 col-lg-4">
            <h3>Icon font</h3>
            <div class="my-5 text-primary fs-2">
                <i class="bi-circle-fill"></i>
            </div>
        </div>
        <div class="col-6 col-lg-4">
            <h3>CSS</h3>
            <div class="my-5">
                <div class="pseudo-icon pseudo-icon-primary pseudo-icon-large"></div>
            </div>
        </div>
    </div>

</div>

<?php kadence()->print_styles('kadence-content');
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();
