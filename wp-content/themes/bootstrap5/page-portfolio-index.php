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

                <li class="nav-item active" aria-current="page">

                    <a class="nav-link" href="<?= home_url('portfolio-index'); ?>">
                        Home
                    </a>

                </li>

                <li class="nav-item">

                    <a class="nav-link" href="<?= home_url('portfolio-overview'); ?>">
                        Portfolio Overview
                    </a>

                </li>

                <li class="nav-item">

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

    <h3>Featured Projects</h3>

    <div class="row mb-4">

        <div class="col-12 col-md-6 col-xl-3 mb-4">
            <a href="<?= home_url('portfolio-item'); ?>">
                <figure class="figure">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/510x400.png" class="figure-img img-fluid img-thumbnail" alt="Portfolio Item Heading">
                    <figcaption class="figure-caption">Portfolio Item Heading</figcaption>
                </figure>
            </a>
        </div><!-- / col-12.col-md-6.col-xl-3.mb-4 -->

        <div class="col-12 col-md-6 col-xl-3 mb-4">
            <a href="<?= home_url('portfolio-item'); ?>">
                <figure class="figure">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/510x400.png" class="figure-img img-fluid img-thumbnail" alt="Portfolio Item Heading">
                    <figcaption class="figure-caption">Portfolio Item Heading</figcaption>
                </figure>
            </a>
        </div><!-- / col-12.col-md-6.col-xl-3.mb-4 -->

        <div class="col-12 col-md-6 col-xl-3 mb-4">
            <a href="<?= home_url('portfolio-item'); ?>">
                <figure class="figure">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/510x400.png" class="figure-img img-fluid img-thumbnail" alt="Portfolio Item Heading">
                    <figcaption class="figure-caption">Portfolio Item Heading</figcaption>
                </figure>
            </a>
        </div><!-- / col-12.col-md-6.col-xl-3.mb-4 -->

        <div class="col-12 col-md-6 col-xl-3 mb-4">
            <a href="<?= home_url('portfolio-item'); ?>">
                <figure class="figure">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/510x400.png" class="figure-img img-fluid img-thumbnail" alt="Portfolio Item Heading">
                    <figcaption class="figure-caption">Portfolio Item Heading</figcaption>
                </figure>
            </a>
        </div><!-- / col-12.col-md-6.col-xl-3.mb-4 -->

    </div><!-- / row.mb-4 -->

    <h3>Testimonials</h3>

    <div class="row mb-4">

        <div class="col-12 col-lg-4">

            <figure>

                <blockquote class="blockquote">

                    <p>Banh mi lo-fi skateboard, brunch tacos umami pork belly echo park salvia venmo tumeric try-hard. Health goth selfies occupy fingerstache. Gluten-free austin listicle gochujang echo park activated charcoal slow-carb dreamcatcher craft beer cold-pressed. Etsy roof party actually chambray, activated charcoal VHS fingerstache irony organic cred pug.</p>

                </blockquote>

                <figcaption class="blockquote-footer">Firstname Lastname</figcaption>

            </figure>

        </div><!-- / col-12.col-lg-4 -->

        <div class="col-12 col-lg-4">

            <figure>

                <blockquote class="blockquote">

                    <p>Banh mi lo-fi skateboard, brunch tacos umami pork belly echo park salvia venmo tumeric try-hard. Health goth selfies occupy fingerstache. Gluten-free austin listicle gochujang echo park activated charcoal slow-carb dreamcatcher craft beer cold-pressed. Etsy roof party actually chambray, activated charcoal VHS fingerstache irony organic cred pug.</p>

                </blockquote>

                <figcaption class="blockquote-footer">Firstname Lastname</figcaption>

            </figure>

        </div><!-- / col-12.col-lg-4 -->

        <div class="col-12 col-lg-4">

            <figure>

                <blockquote class="blockquote">

                    <p>Banh mi lo-fi skateboard, brunch tacos umami pork belly echo park salvia venmo tumeric try-hard. Health goth selfies occupy fingerstache. Gluten-free austin listicle gochujang echo park activated charcoal slow-carb dreamcatcher craft beer cold-pressed. Etsy roof party actually chambray, activated charcoal VHS fingerstache irony organic cred pug.</p>

                </blockquote>

                <figcaption class="blockquote-footer">Firstname Lastname</figcaption>

            </figure>

        </div><!-- / col-12.col-lg-4 -->

    </div><!-- / row.mb-4 -->

    <h3>Contact Me</h3>

    <form action="" class="mb-4">

        <div class="row">

            <div class="col-12 col-md-6">

                <div class="mb-3">

                    <label for="name" class="form-label">Name</label>

                    <input type="text" id="name" class="form-control" placeholder="Enter your name">

                </div><!-- / mb-3 -->

                <div class="mb-3">

                    <label for="email" class="form-label">Email</label>

                    <input type="email" id="email" class="form-control" placeholder="Enter your email">

                </div><!-- / mb-3 -->

            </div><!-- / col-12.col-md-6 -->

            <div class="col-12 col-md-6">

                <div class="mb-3">

                    <label for="message" class="form-label">Message</label>

                    <textarea name="" id="message" cols="30" rows="4" class="form-control" placeholder="Enter your message"></textarea>

                </div><!-- / mb-3 -->

            </div><!-- / col-12.col-md-6 -->

        </div><!-- / row -->

        <button type="submit" class="btn btn-primary">Send Message</button>

    </form>

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
