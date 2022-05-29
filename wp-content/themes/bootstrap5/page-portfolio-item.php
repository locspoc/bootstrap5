<?php

/**
 * Template Name: Portfolio Item
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

                <li class="nav-item">

                    <a class="nav-link" href="<?= home_url('portfolio-index'); ?>">
                        Home
                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="<?= home_url('portfolio-overview'); ?>">
                        Portfolio Overview
                    </a>

                </li>

                <li class="nav-item active" aria-current="page">

                    <a class="nav-link" href="<?= home_url('portfolio-item'); ?>">
                        Portfolio Item
                    </a>

                </li>

            </ul>

        </div><!-- / collapse.navbar-collapse -->

    </div><!-- / container -->

</nav>

<div class="container">

    <h1><?php the_title(); ?></h1>

    <!-- <h1><i class="fas fa-home"></i></h1> -->
    <!-- <i class="fab fa-facebook" style="color: tomato;"></i> -->

</div>

<div class="container mt-4">

    <h2 class="display-4 mb-4">
        <span class="badge bg-primary">Tag</span>
        Portfolio Item Heading
        <small class="d-block text-muted">Portfolio Item Subtitle</small>
    </h2>

    <div class="row mb-4">

        <div class="col-12 col-xl-8 mb-4 mb-xl-0">

            <div id="carousel" class="carousel slide" data-bs-ride="carousel">

                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="4" aria-label="Slide 5"></button>
                </div><!-- / carousel-indicators -->



                <div class="carousel-inner">

                    <div class="carousel-item active">

                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/930x700.png" alt="First slide" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>Caption 1</h3>
                            <p>This text describes the first slide.</p>
                        </div><!-- / carousel-caption -->

                    </div><!-- / carousel-item -->

                    <div class="carousel-item">

                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/930x700.png" alt="Second slide" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>Caption 2</h3>
                            <p>This text describes the first slide.</p>
                        </div><!-- / carousel-caption -->

                    </div><!-- / carousel-item -->

                    <div class="carousel-item">

                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/930x700.png" alt="Third slide" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>Caption 3</h3>
                            <p>This text describes the first slide.</p>
                        </div><!-- / carousel-caption -->

                    </div><!-- / carousel-item -->

                    <div class="carousel-item">

                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/930x700.png" alt="Fourth slide" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>Caption 4</h3>
                            <p>This text describes the first slide.</p>
                        </div><!-- / carousel-caption -->

                    </div><!-- / carousel-item -->

                    <div class="carousel-item">

                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/930x700.png" alt="Fifth slide" class="d-block w-100">
                        <div class="carousel-caption">
                            <h3>Caption 5</h3>
                            <p>This text describes the first slide.</p>
                        </div><!-- / carousel-caption -->

                    </div><!-- / carousel-item -->

                    <button class="carousel-control-prev" type="button" data-bs-target="#carousel" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carousel" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>

                </div><!-- / carousel-inner -->

            </div><!-- / carousel.slide -->

        </div><!-- / col-12.col-xl-8.mb-4.mb-xl-0 -->

        <div class="col-12 col-xl-4">

            <h3>Project Description</h3>

            <p>I'm baby glossier master cleanse hexagon pabst prism, vape beard man braid whatever tote bag +1 celiac. Helvetica kombucha kickstarter, trust fund etsy retro vaporware praxis listicle single-origin coffee. Tousled mlkshk gochujang photo booth, yes plz shoreditch deep v biodiesel banh mi. You probably haven't heard of them succulents biodiesel shabby chic pug. Retro semiotics pok pok readymade, chambray succulents vegan beard health goth.</p>

            <h3>Project Details</h3>

            <ul>
                <li>Description of detail</li>
                <li>Description of detail</li>
                <li>Description of detail</li>
                <li>Description of detail</li>
                <li>Description of detail</li>
            </ul>

            <h3>Project Link</h3>

            <i class="fas fa-external-link-alt"></i> <a href="#0" target="_blank">www.portfolioitemheading.com</a>

        </div><!-- / col-12 col-xl-4 -->

    </div><!-- / row.mb-4 -->

</div><!-- / container.mt-4 -->

<footer class="bg-light py-4">

    <div class="container">

        <div class="row">

            <div class="col-12 col-md-6 col-xl-3">

                <div class="d-flex align-items-center mb-2">

                    <div class="fa-layers fa-fw fa-2x me-1">

                        <i class="fas fa-circle text-muted"></i>

                        <i class="fas fa-code text-white" data-fa-transform="shrink-10"></i>

                    </div><!-- / fa-layers.fa-fw.fa-2x.me-1 -->

                    <h5 class="m-0">Code</h5>

                </div><!-- / d-flex.align-items-center.mb-2 -->

                <ul class="list-unstyled">
                    <li><i class="fab fa-fw fa-github text-muted"></i><a href="#0">GitHub</a></li>
                    <li><i class="fab fa-fw fa-codepen text-muted"></i><a href="#0">CodePen</a></li>
                    <li><i class="fab fa-fw fa-stack-overflow text-muted"></i><a href="#0">Stack Overflow</a></li>
                </ul>

            </div><!-- / col-12.col-md-6.col-xl-3 -->

            <div class="col-12 col-md-6 col-xl-3">

                <div class="d-flex align-items-center mb-2">

                    <div class="fa-layers fa-fw fa-2x me-1">

                        <i class="fas fa-circle text-muted"></i>

                        <i class="fas fa-paint-brush text-white" data-fa-transform="shrink-10"></i>

                    </div><!-- / fa-layers.fa-fw.fa-2x.me-1 -->

                    <h5 class="m-0">Design</h5>

                </div><!-- / d-flex.align-items-center.mb-2 -->

                <ul class="list-unstyled">
                    <li><i class="fab fa-fw fa-behance text-muted"></i><a href="#0">Behance</a></li>
                    <li><i class="fab fa-fw fa-dribbble text-muted"></i><a href="#0">Dribbble</a></li>
                </ul>

            </div><!-- / col-12.col-md-6.col-xl-3 -->

            <div class="col-12 col-md-6 col-xl-3">

                <div class="d-flex align-items-center mb-2">

                    <div class="fa-layers fa-fw fa-2x me-1">

                        <i class="fas fa-circle text-muted"></i>

                        <i class="fas fa-images text-white" data-fa-transform="shrink-10"></i>

                    </div><!-- / fa-layers.fa-fw.fa-2x.me-1 -->

                    <h5 class="m-0">Photography</h5>

                </div><!-- / d-flex.align-items-center.mb-2 -->

                <ul class="list-unstyled">
                    <li><i class="fab fa-fw fa-flickr text-muted"></i><a href="#0">Flickr</a></li>
                    <li><i class="fab fa-fw fa-instagram text-muted"></i><a href="#0">Instagram</a></li>
                </ul>

            </div><!-- / col-12.col-md-6.col-xl-3 -->

            <div class="col-12 col-md-6 col-xl-3">

                <div class="d-flex align-items-center mb-2">

                    <div class="fa-layers fa-fw fa-2x me-1">

                        <i class="fas fa-circle text-muted"></i>

                        <i class="fas fa-video text-white" data-fa-transform="shrink-10"></i>

                    </div><!-- / fa-layers.fa-fw.fa-2x.me-1 -->

                    <h5 class="m-0">Video</h5>

                </div><!-- / d-flex.align-items-center.mb-2 -->

                <ul class="list-unstyled">
                    <li><i class="fab fa-fw fa-youtube text-muted"></i><a href="#0">YouTube</a></li>
                    <li><i class="fab fa-fw fa-vimeo text-muted"></i><a href="#0">Vimeo</a></li>
                </ul>

            </div><!-- / col-12.col-md-6.col-xl-3 -->

        </div><!-- / row -->

        <p class="text-center mb-0">&copy; 2020 Firstname Lastname. All rights reserved.</p>

    </div><!-- / container -->

</footer>

<?php kadence()->print_styles('kadence-content');
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();
