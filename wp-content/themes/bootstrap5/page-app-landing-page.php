<?php

/**
 * Template Name: App Landing Page
 *
 * @package kadence
 */

namespace Kadence;

if (!defined('ABSPATH')) {
    exit;
}

get_header(); ?>

<body data-bs-spy="scroll" data-bs-target="#navScrollspy">
    <nav class="navbar bg-primary navbar-dark navbar-expand-lg fixed-top">
        <div class="container">
            <a href="<?= home_url('app-landing-page'); ?>" class="navbar-brand"><i class="fas fa-camera-retro" aria-hidden="true"></i> App Name</a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav" id="navScrollspy">
                    <li class="nav-item">
                        <a class="nav-link" href="#section-hero">To the top</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section-description">Description</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section-trailer">Trailer</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section-showcase">Showcase</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section-features">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section-pricing">Pricing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#section-reviews">Reviews</a>
                    </li>
                </ul>
            </div><!-- / collapse -->
        </div><!-- / container -->
    </nav>
</body>

<?php kadence()->print_styles('kadence-content');
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();
