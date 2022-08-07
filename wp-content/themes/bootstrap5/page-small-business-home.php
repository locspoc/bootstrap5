<?php

/**
 * Template Name: Small Business Home
 *
 * @package kadence
 */

namespace Kadence;

if (!defined('ABSPATH')) {
    exit;
}

get_header(); ?>

<style>
    body {
        /* padding-top: 57px; */
    }
</style>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light border-bottom fixed-top">
        <div class="container">
            <a href="<?= home_url('small-business-home'); ?>" class="navbar-brand">Small Business</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <ul class="navbar-nav me-auto">
                    <li class="nav-item">
                        <a href="<?= home_url('small-business-home'); ?>" class="nav-link active" aria-current="page">Home</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= home_url('small-business-home/small-business-services'); ?>" class="nav-link">Services</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= home_url('small-business-home/small-business-about'); ?>" class="nav-link">About</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= home_url('small-business-home/small-business-team'); ?>" class="nav-link">Team</a>
                    </li>
                    <li class="nav-item">
                        <a href="<?= home_url('small-business-home/small-business-contact'); ?>" class="nav-link">Contact</a>
                    </li>
                </ul>
                <div class="dropdown">
                    <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Change language:</button>
                    <div class="dropdown-menu" aria-labelledby="dropdownLanguage">
                        <a href="https://companyname.com/language" class="dropdown-item">Language</a>
                        <a href="https://companyname.com/language" class="dropdown-item">Language</a>
                        <a href="https://companyname.com/language" class="dropdown-item">Language</a>
                    </div><!-- / dropdown-menu -->
                </div><!-- / dropdown -->
            </div><!-- / collapse -->
        </div><!-- / container -->
    </nav>
    <div class="bg-light py-3 py-sm-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/730x400.png" class="img-fluid">
                </div><!-- / col-12 -->
                <div class="col-12 col-lg-6">
                    <h1 class="display-1">Small Business</h1>
                    <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec ante eros. Phasellus posuere magna in nunc maximus, sed elementum tortor faucibus.</p>
                    <a href="#0" class="btn btn-lg btn-primary me-2">Read more</a>
                    <a href="#0" class="btn btn-lg btn-outline-primary">Contact us</a>
                </div><!-- / col-12 -->
            </div><!-- / row -->
        </div><!-- / container -->
    </div><!-- / bg-light -->
    <div class="container my-3 my-sm-5">
        <div class="alert alert-warning mb-3 mb-sm-5" role="alert">
            <h2 class="alert-heading">We're hiring!</h2>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Praesent nec ante eros. Phasellus posuere magna in nunc maximus, sed elementum tortor faucibus. <a href="#0" class="alert-link">Donec scelerisque mi vel efficitur maximus</a>.</p>
        </div><!-- / alert -->
        <div class="row g-0 bg-light p-4 mb-3 mb-sm-5">
            <div class="col-12 col-lg-6 mb-4 mb-lg-0">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/300x300.png" class="img-fluid rounded-circle mb-4 mb-lg-0">
                    </div><!-- / col-12 -->
                    <div class="col-12 col-sm-6">
                        <h2>What we do</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis convallis velit quis sapien sollicitudin ultrices. Ut metus tortor, aliquet non rutrum ac, dapibus vehicula augue. Etiam congue erat sem, vitae gravida nunc pretium vitae. Fusce sed ex tellus.</p>
                        <a href="#0" class="btn btn-primary">Read more</a>
                    </div><!-- / col-12 -->
                </div><!-- / row -->
            </div><!-- / col-12 -->
            <div class="col-12 col-lg-6">
                <div class="row">
                    <div class="col-12 col-sm-6 text-center">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/300x300.png" class="img-fluid rounded-circle mb-4 mb-lg-0">
                    </div><!-- / col-12 -->
                    <div class="col-12 col-sm-6">
                        <h2>Who we are</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis convallis velit quis sapien sollicitudin ultrices. Ut metus tortor, aliquet non rutrum ac, dapibus vehicula augue. Etiam congue erat sem, vitae gravida nunc pretium vitae. Fusce sed ex tellus.</p>
                        <a href="#0" class="btn btn-primary">Read more</a>
                    </div><!-- / col-12 -->
                </div><!-- / row -->
            </div><!-- / col-12 -->
        </div><!-- / row -->
    </div><!-- / container -->
</body>

<?php kadence()->print_styles('kadence-content');
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();
