<?php

/**
 * Template Name: Portfolio Index
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
</style>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="<?= home_url('portfolio-index'); ?>">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/50x50.png" class="rounded-circle align-middle me-2" alt="Profile Picture">
            Portfolio
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbar" aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item active" aria-curent="page">
                    <a class="nav-link" href="<?= home_url('portfolio-index'); ?>">
                        Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?= home_url('portfolio-overview'); ?>">
                        Portfolio
                    </a>
                </li>
            </ul>
        </div><!-- / collapse.navbar-collapse -->
    </div><!-- / container -->
</nav>

<div class="container mt-4">
    <h2 class="display-4 mb-4">
        Firstname Lastname
        <small class="d-block text-muted">Job Position</small>
    </h2>
    <div class="row mb-4">
        <div class="col-12 col-lg-6 mb-4 mb-lg-0">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/690x400.png" class="img-fluid" alt="">
        </div><!-- / col-12.col-lg-6.mb-4.mb-lg-0 -->
        <div class="col-12 col-lg-6">
            <h3>About</h3>
            <p>I'm baby glossier master cleanse hexagon pabst prism, vape beard man braid whatever tote bag +1 celiac. Helvetica kombucha kickstarter, trust fund etsy retro vaporware praxis listicle single-origin coffee. Tousled mlkshk gochujang photo booth, yes plz shoreditch deep v biodiesel banh mi. You probably haven't heard of them succulents biodiesel shabby chic pug. Retro semiotics pok pok readymade, chambray succulents vegan beard health goth.</p>
            <p>Cloud bread fanny pack af, prism bespoke next level enamel pin activated charcoal brooklyn offal. Mumblecore taiyaki man bun wayfarers letterpress. Photo booth plaid pabst literally, austin chambray keytar forage humblebrag la croix typewriter kinfolk. Selfies narwhal palo santo live-edge vegan.</p>
        </div><!-- / col-12.col-lg-6 -->
    </div><!-- / row.mb-4 -->
</div><!-- / container.mt-4 -->

<div class="container pt-5">

    <h1><?php the_title(); ?></h1>

    <!-- <h1><i class="fas fa-home"></i></h1> -->
    <!-- <i class="fab fa-facebook" style="color: tomato;"></i> -->

</div>

<?php kadence()->print_styles('kadence-content');
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();
