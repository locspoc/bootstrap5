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
    <section id="section-hero" class="text-center text-white d-flex justify-content-center align-items-center py-5">
        <div class="container">
            <h1 class="display-1 text-primary text-uppercase mt-5">App Name</h1>
            <p class="display-4 text-primary">Lorem ipsum dolor</p>
            <p class="lead text-primary">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <p class="lead text-primary">Laborum unde dolores ullam nostrum?</p>
            <p><strong class="text-primary">Download now on:</strong></p>
            <a href="#0" class="btn btn-lg btn-primary mb-3 mb-sm-0 me-sm-3"><i class="fab fa-app-store-ios" aria-hidden="true"></i> App Store</a>
            <a href="#0" class="btn btn-lg btn-primary"><i class="fab fa-google-play" aria-hidden="true"></i> Google Play</a>
        </div><!-- / container -->
    </section>
    <div class="container">
        <section id="section-description" class="mt-5">
            <h2 class="display-4 text-center">What is App Name?</h2>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptates sint at! Laboriosam ducimus expedita reiciendis suscipit quibusdam ad ipsa distinctio voluptatem ullam adipisci id molestias, explicabo iusto atque. Libero voluptates, maxime ipsa iure quis veritatis obcaecati vitae eaque exercitationem non saepe enim!</p>
            <p>Ducimus et aperiam tempora pariatur, excepturi est mollitia alias, hic voluptas, porro repudiandae voluptatum nulla minus ipsam repellat accusamus voluptate nam modi!</p>
        </section>
        <section id="section-trailer" class="mt-5">
            <h2 class="display-4 text-center">App Name trailer</h2>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <div class="ratio ratio-16x9">
                <iframe src="https://www.youtube.com/embed/NpEaa2P7qZI"></iframe>
            </div><!-- / ratio -->
        </section>
        <section id="section-showcase" class="mt-5">
            <h2 class="display-4 text-center">App Name in action</h2>
            <p class="text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            <div id="carousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="0" aria-label="Slide 1" class="active"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="2" aria-label="Slide 3"></button>
                    <button type="button" data-bs-target="#carousel" data-bs-slide-to="3" aria-label="Slide 4"></button>
                </div><!-- / carousel-indicators -->
                <div class="carousel-inner" role="listbox">
                    <div class="carousel-item active">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/2220x1665-primary.png" alt="Slide #1" class="d-block img-fluid">
                        <div class="carousel-caption">
                            <h3 class="display-4">Slide Heading</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div><!-- / carousel-caption -->
                    </div><!-- / carousel-item -->
                    <div class="carousel-item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/2220x1665-success.png" alt="Slide #2" class="d-block img-fluid">
                        <div class="carousel-caption">
                            <h3 class="display-4">Slide Heading</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div><!-- / carousel-caption -->
                    </div><!-- / carousel-item -->
                    <div class="carousel-item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/2220x1665-danger.png" alt="Slide #3" class="d-block img-fluid">
                        <div class="carousel-caption">
                            <h3 class="display-4">Slide Heading</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div><!-- / carousel-caption -->
                    </div><!-- / carousel-item -->
                    <div class="carousel-item">
                        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/2220x1665-warning.png" alt="Slide #4" class="d-block img-fluid">
                        <div class="carousel-caption">
                            <h3 class="display-4">Slide Heading</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                        </div><!-- / carousel-caption -->
                    </div><!-- / carousel-item -->
                </div><!-- / carousel-inner -->
                <button type="button" class="carousel-control-prev" data-bs-target="#carousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button type="button" class="carousel-control-next" data-bs-target="#carousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div><!-- / carousel -->
        </section>
        <section id="section-features" class="mt-5">
            <h2 class="display-4 text-center">Features</h2>
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3 d-flex flex-column align-items-center mb-5">
                    <div class="h1"><i class="fas fa-paint-brush mb-4 text-info" aria-hidden="true"></i></div>
                    <h3 class="h4 mb-4 text-center">Feature heading</h3>
                    <p>Illum nesciunt, nostrum laboriosam provident sed inventore molestias blanditiis.</p>
                    <a href="#0" class="btn btn-sm btn-info mt-auto">Read more...</a>
                </div><!-- / col-12 -->
                <div class="col-12 col-sm-6 col-lg-3 d-flex flex-column align-items-center mb-5">
                    <div class="h1"><i class="fas fa-video mb-4 text-info" aria-hidden="true"></i></div>
                    <h3 class="h4 mb-4 text-center">Feature heading</h3>
                    <p>Illum nesciunt, nostrum laboriosam provident sed inventore molestias blanditiis.</p>
                    <a href="#0" class="btn btn-sm btn-info mt-auto">Read more...</a>
                </div><!-- / col-12 -->
                <div class="col-12 col-sm-6 col-lg-3 d-flex flex-column align-items-center mb-5">
                    <div class="h1"><i class="fab fa-instagram mb-4 text-info" aria-hidden="true"></i></div>
                    <h3 class="h4 mb-4 text-center">Feature heading</h3>
                    <p>Illum nesciunt, nostrum laboriosam provident sed inventore molestias blanditiis.</p>
                    <a href="#0" class="btn btn-sm btn-info mt-auto">Read more...</a>
                </div><!-- / col-12 -->
                <div class="col-12 col-sm-6 col-lg-3 d-flex flex-column align-items-center mb-5">
                    <div class="h1"><i class="fas fa-mobile mb-4 text-info" aria-hidden="true"></i></div>
                    <h3 class="h4 mb-4 text-center">Feature heading</h3>
                    <p>Illum nesciunt, nostrum laboriosam provident sed inventore molestias blanditiis.</p>
                    <a href="#0" class="btn btn-sm btn-info mt-auto">Read more...</a>
                </div><!-- / col-12 -->
            </div><!-- / row -->
        </section>
    </div><!-- / container -->
</body>

<?php kadence()->print_styles('kadence-content');
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();
