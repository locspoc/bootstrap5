<?php

/**
 * Template Name: Small Business Team
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

    <div class="container my-3 my-sm-5">
        <h1 class="text-center mb-sm-4 display-1">Meet the team</h1>
        <p class="lead mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum ac mollis lacus, vel auctor risus. Etiam orci diam, tempor id nisl ac, aliquet cursus orci. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Curabitur sollicitudin semper aliquam. Phasellus ac tellus in nisl laoreet cursus eu quis lorem.</p>
        <div class="row">
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/200x200.png" class="img-fluid rounded-circle mb-2" alt="Figure image">
                <ul class="list-inline mb-1">
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-twitter-square"></i><span class="visually-hidden">Twitter</span></a></li>
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-linkedin"></i><span class="visually-hidden">LinkedIn</span></a></li>
                </ul>
                <h5>Firstname Lastname</h5>
                <p>Chief Executive Officer</p>
            </div><!-- / col-12 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/200x200.png" class="img-fluid rounded-circle mb-2" alt="Figure image">
                <ul class="list-inline mb-1">
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-twitter-square"></i><span class="visually-hidden">Twitter</span></a></li>
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-linkedin"></i><span class="visually-hidden">LinkedIn</span></a></li>
                </ul>
                <h5>Firstname Lastname</h5>
                <p>Chief Executive Officer</p>
            </div><!-- / col-12 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/200x200.png" class="img-fluid rounded-circle mb-2" alt="Figure image">
                <ul class="list-inline mb-1">
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-twitter-square"></i><span class="visually-hidden">Twitter</span></a></li>
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-linkedin"></i><span class="visually-hidden">LinkedIn</span></a></li>
                </ul>
                <h5>Firstname Lastname</h5>
                <p>Chief Executive Officer</p>
            </div><!-- / col-12 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/200x200.png" class="img-fluid rounded-circle mb-2" alt="Figure image">
                <ul class="list-inline mb-1">
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-twitter-square"></i><span class="visually-hidden">Twitter</span></a></li>
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-linkedin"></i><span class="visually-hidden">LinkedIn</span></a></li>
                </ul>
                <h5>Firstname Lastname</h5>
                <p>Chief Executive Officer</p>
            </div><!-- / col-12 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/200x200.png" class="img-fluid rounded-circle mb-2" alt="Figure image">
                <ul class="list-inline mb-1">
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-twitter-square"></i><span class="visually-hidden">Twitter</span></a></li>
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-linkedin"></i><span class="visually-hidden">LinkedIn</span></a></li>
                </ul>
                <h5>Firstname Lastname</h5>
                <p>Chief Executive Officer</p>
            </div><!-- / col-12 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/200x200.png" class="img-fluid rounded-circle mb-2" alt="Figure image">
                <ul class="list-inline mb-1">
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-twitter-square"></i><span class="visually-hidden">Twitter</span></a></li>
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-linkedin"></i><span class="visually-hidden">LinkedIn</span></a></li>
                </ul>
                <h5>Firstname Lastname</h5>
                <p>Chief Executive Officer</p>
            </div><!-- / col-12 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/200x200.png" class="img-fluid rounded-circle mb-2" alt="Figure image">
                <ul class="list-inline mb-1">
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-twitter-square"></i><span class="visually-hidden">Twitter</span></a></li>
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-linkedin"></i><span class="visually-hidden">LinkedIn</span></a></li>
                </ul>
                <h5>Firstname Lastname</h5>
                <p>Chief Executive Officer</p>
            </div><!-- / col-12 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/200x200.png" class="img-fluid rounded-circle mb-2" alt="Figure image">
                <ul class="list-inline mb-1">
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-twitter-square"></i><span class="visually-hidden">Twitter</span></a></li>
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-linkedin"></i><span class="visually-hidden">LinkedIn</span></a></li>
                </ul>
                <h5>Firstname Lastname</h5>
                <p>Chief Executive Officer</p>
            </div><!-- / col-12 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/200x200.png" class="img-fluid rounded-circle mb-2" alt="Figure image">
                <ul class="list-inline mb-1">
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-twitter-square"></i><span class="visually-hidden">Twitter</span></a></li>
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-linkedin"></i><span class="visually-hidden">LinkedIn</span></a></li>
                </ul>
                <h5>Firstname Lastname</h5>
                <p>Chief Executive Officer</p>
            </div><!-- / col-12 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/200x200.png" class="img-fluid rounded-circle mb-2" alt="Figure image">
                <ul class="list-inline mb-1">
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-twitter-square"></i><span class="visually-hidden">Twitter</span></a></li>
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-linkedin"></i><span class="visually-hidden">LinkedIn</span></a></li>
                </ul>
                <h5>Firstname Lastname</h5>
                <p>Chief Executive Officer</p>
            </div><!-- / col-12 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/200x200.png" class="img-fluid rounded-circle mb-2" alt="Figure image">
                <ul class="list-inline mb-1">
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-twitter-square"></i><span class="visually-hidden">Twitter</span></a></li>
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-linkedin"></i><span class="visually-hidden">LinkedIn</span></a></li>
                </ul>
                <h5>Firstname Lastname</h5>
                <p>Chief Executive Officer</p>
            </div><!-- / col-12 -->
            <div class="col-12 col-sm-6 col-md-4 col-lg-3 col-xl-2 text-center mb-3">
                <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/200x200.png" class="img-fluid rounded-circle mb-2" alt="Figure image">
                <ul class="list-inline mb-1">
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-twitter-square"></i><span class="visually-hidden">Twitter</span></a></li>
                    <li class="list-inline-item small"><a href="#"><i class="fab fa-2x fa-linkedin"></i><span class="visually-hidden">LinkedIn</span></a></li>
                </ul>
                <h5>Firstname Lastname</h5>
                <p>Chief Executive Officer</p>
            </div><!-- / col-12 -->
        </div><!-- / row -->
    </div><!-- / container -->

    <footer class="small bg-light">
        <div class="container py-3 py-sm-5">
            <div class="row">
                <div class="col-12 col-sm-6 col-md-3">
                    <h6>Quick links</h6>
                    <ul class="list-unstyled">
                        <li><a href="<?= home_url('small-business-home'); ?>">Home</a></li>
                        <li><a href="<?= home_url('small-business-home/small-business-services'); ?>">Services</a></li>
                        <li><a href="<?= home_url('small-business-home/small-business-about'); ?>">About</a></li>
                        <li><a href="<?= home_url('small-business-home/small-business-team'); ?>">Team</a></li>
                        <li><a href="<?= home_url('small-business-home/small-business-contact'); ?>">Contact</a></li>
                    </ul>
                </div><!-- / col-12 -->
                <div class="col-12 col-sm-6 col-md-3">
                    <h6>Information</h6>
                    <ul class="list-unstyled">
                        <li><a href="#0">Legal information</a></li>
                        <li><a href="#0">Job opportunities</a></li>
                        <li><a href="#0">Frequently Asked Questions</a></li>
                    </ul>
                </div><!-- / col-12 -->
                <div class="col-12 col-sm-6 col-md-3">
                    <h6>Follow us</h6>
                    <ul class="list-unstyled">
                        <li><a href="#0"><i class="fab fa-fw fa-facebook"></i> Facebook</a></li>
                        <li><a href="#0"><i class="fab fa-fw fa-instagram"></i> Instagram</a></li>
                        <li><a href="#0"><i class="fab fa-fw fa-twitter"></i> Twitter</a></li>
                        <li><a href="#0"><i class="fab fa-fw fa-youtube"></i> YouTube</a></li>
                        <li><a href="#0"><i class="fab fa-fw fa-linkedin"></i> LinkedIn</a></li>
                    </ul>
                </div><!-- / col-12 -->
                <div class="col-12 col-sm-6 col-md-3">
                    <h6>Our location</h6>
                    <address>
                        <strong>Company Name</strong><br>
                        Steet Name<br>
                        ZIP code and city<br>
                        <i class="fas fa-fw fa-phone"></i> <a href="tel:+1234567890">(123) 456-7890</a><br>
                        <i class="fas fa-fw fa-envelope"></i> <a href="mailto:info@domain.com">info@domain.com</a>
                    </address>
                </div><!-- / col-12 -->
            </div><!-- / row -->
            <ul class="list-inline mt-2 mb-0 text-center">
                <li class="list-inline-item">&copy; 2020 Company Name</li>
                <li class="list-inline-item">All rights reserved.</li>
            </ul>
        </div><!-- / container -->
    </footer>

</body>

<?php kadence()->print_styles('kadence-content');
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();
