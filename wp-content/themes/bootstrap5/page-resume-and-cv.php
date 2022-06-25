<?php

/**
 * Template Name: Resume And CV
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

<div class="container mt-4">
    <div class="row">
        <div class="col-12 col-lg-8">
            <div class="card mb-4">
                <h2 class="card-header text-center">
                    Firstname Lastname
                </h2>
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/850x400.png" alt="Portrait of Firstname Lastname" class="w-100">
                <div class="card-body">
                    <p class="card-text lead">I'm baby skateboard letterpress pabst, coloring book biodiesel prism +1 plaid.</p>
                    <p class="card-text">I'm baby skateboard letterpress pabst, coloring book biodiesel prism +1 plaid. Raw denim XOXO butcher biodiesel, stumptown YOLO occupy tote bag actually poutine chia cray organic. Beard four loko pok pok man bun la croix, aesthetic tonx jianbing kinfolk migas literally enamel pin tumblr tofu farm-to-table. Typewriter tattooed slow-carb actually green juice meggings sriracha selvage tacos. Vice banjo biodiesel taiyaki, gluten-free tilde poke small batch pok pok tousled live-edge slow-carb bushwick heirloom chicharrones.</p>
                    <figure class="w-75 mx-auto text-center">
                        <blockquote class="blockquote">Post-ironic dreamcatcher everyday carry, etsy ennui prism venmo bitters shabby chic tacos.</blockquote>
                        <figcaption class="blockquote-footer">Firstname Lastname</figcaption>
                        <p class="card-text">Echo park banjo pitchfork keffiyeh drinking vinegar +1. IPhone 3 wolf moon jean shorts, neutra art party butcher taxidermy mustache +1 adaptogen. Kale chips beard pabst meditation photo booth pok pok iPhone 8-bit lo-fi plaid everyday carry normcore. You probably haven't heard of them fashion axe activated charcoal, microdosing DSA helvetica drinking vinegar sustainable brooklyn swag irony try-hard.</p>
                    </figure>
                </div><!-- / card-body -->
            </div><!-- / card -->
            <div class="card mb-4">
                <div class="card-body">

                    <div class="d-flex align-items-start mb-2">
                        <i class="fab fa-facebook fa-fw fa-3x text-primary me-2"></i>
                        <div class="flex-grow-1">
                            <h3 class="h4 mb-1">Front-End Developer</h3>
                            <div class="d-sm-flex justify-content-sm-between align-items-sm-baseline">
                                <h5 class="mb-0"><a href="#0" class="text-decoration-none">Facebook</a></h5>
                                <small class="text-uppercase fw-bold text-muted"><time datetime="2020-01">January 2020</time> &ndash; <time datetime="2020-12">December 2020</time></small>
                            </div><!-- / d-sm-flex -->
                        </div><!-- / flex-grow-1 -->
                    </div><!-- / d-flex -->
                    <p class="card-text">Pug succulents selvage, umami mixtape kinfolk dreamcatcher marfa.</p>
                    <hr>

                    <div class="d-flex align-items-start mb-2">
                        <i class="fab fa-apple fa-fw fa-3x text-primary me-2"></i>
                        <div class="flex-grow-1">
                            <h3 class="h4 mb-1">Art Director</h3>
                            <div class="d-sm-flex justify-content-sm-between align-items-sm-baseline">
                                <h5 class="mb-0"><a href="#0" class="text-decoration-none">Apple</a></h5>
                                <small class="text-uppercase fw-bold text-muted"><time datetime="2020-01">January 2020</time> &ndash; <time datetime="2020-12">December 2020</time></small>
                            </div><!-- / d-sm-flex -->
                        </div><!-- / flex-grow-1 -->
                    </div><!-- / d-flex -->
                    <p class="card-text">Pug succulents selvage, umami mixtape kinfolk dreamcatcher marfa.</p>
                    <hr>

                    <div class="d-flex align-items-start mb-2">
                        <i class="fab fa-dropbox fa-fw fa-3x text-primary me-2"></i>
                        <div class="flex-grow-1">
                            <h3 class="h4 mb-1">User Experience Designer</h3>
                            <div class="d-sm-flex justify-content-sm-between align-items-sm-baseline">
                                <h5 class="mb-0"><a href="#0" class="text-decoration-none">Dropbox</a></h5>
                                <small class="text-uppercase fw-bold text-muted"><time datetime="2020-01">January 2020</time> &ndash; <time datetime="2020-12">December 2020</time></small>
                            </div><!-- / d-sm-flex -->
                        </div><!-- / flex-grow-1 -->
                    </div><!-- / d-flex -->
                    <p class="card-text">Pug succulents selvage, umami mixtape kinfolk dreamcatcher marfa.</p>
                    <hr>

                    <div class="collapse" id="collapse-work">

                        <div class="d-flex align-items-start mb-2">
                            <i class="fab fa-medium fa-fw fa-3x text-primary me-2"></i>
                            <div class="flex-grow-1">
                                <h3 class="h4 mb-1">Copywriter</h3>
                                <div class="d-sm-flex justify-content-sm-between align-items-sm-baseline">
                                    <h5 class="mb-0"><a href="#0" class="text-decoration-none">Medium</a></h5>
                                    <small class="text-uppercase fw-bold text-muted"><time datetime="2020-01">January 2020</time> &ndash; <time datetime="2020-12">December 2020</time></small>
                                </div><!-- / d-sm-flex -->
                            </div><!-- / flex-grow-1 -->
                        </div><!-- / d-flex -->
                        <p class="card-text">Pug succulents selvage, umami mixtape kinfolk dreamcatcher marfa.</p>
                        <hr>

                        <div class="d-flex align-items-start mb-2">
                            <i class="fab fa-google fa-fw fa-3x text-primary me-2"></i>
                            <div class="flex-grow-1">
                                <h3 class="h4 mb-1">Search Engine Consultant</h3>
                                <div class="d-sm-flex justify-content-sm-between align-items-sm-baseline">
                                    <h5 class="mb-0"><a href="#0" class="text-decoration-none">Google</a></h5>
                                    <small class="text-uppercase fw-bold text-muted"><time datetime="2020-01">January 2020</time> &ndash; <time datetime="2020-12">December 2020</time></small>
                                </div><!-- / d-sm-flex -->
                            </div><!-- / flex-grow-1 -->
                        </div><!-- / d-flex -->
                        <p class="card-text">Pug succulents selvage, umami mixtape kinfolk dreamcatcher marfa.</p>
                        <hr>

                        <div class="d-flex align-items-start mb-2">
                            <i class="fab fa-uber fa-fw fa-3x text-primary me-2"></i>
                            <div class="flex-grow-1">
                                <h3 class="h4 mb-1">AI Engineer</h3>
                                <div class="d-sm-flex justify-content-sm-between align-items-sm-baseline">
                                    <h5 class="mb-0"><a href="#0" class="text-decoration-none">Uber</a></h5>
                                    <small class="text-uppercase fw-bold text-muted"><time datetime="2020-01">January 2020</time> &ndash; <time datetime="2020-12">December 2020</time></small>
                                </div><!-- / d-sm-flex -->
                            </div><!-- / flex-grow-1 -->
                        </div><!-- / d-flex -->
                        <p class="card-text">Pug succulents selvage, umami mixtape kinfolk dreamcatcher marfa.</p>
                        <hr>

                    </div><!-- / collapse-work -->

                    <button type="button" class="btn btn-sm btn-outline-primary" data-bs-toggle="collapse" data-bs-target="#collapse-work" aria-expanded="false" aria-controls="collapse-work">Show all</button>

                </div><!-- / card-body -->
            </div><!-- / card -->
        </div><!-- / col-12 -->
    </div><!-- / row -->
</div><!-- / container -->

<?php kadence()->print_styles('kadence-content');
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();
