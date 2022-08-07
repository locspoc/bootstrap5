<?php

/**
 * Template Name: Small Business Contact
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
        <h1 class="text-center mb-sm-4 display-1">Contact</h1>
        <div class="row">
            <div class="col-12 col-md-6">
                <h2>Address:</h2>
                <address>
                    <strong>Company Name</strong><br>
                    Street Name<br>
                    ZIP code and city<br>
                    <i class="fas fa-fw fa-phone"></i> <a href="tel:+1234567890">(123) 456-7890</a><br>
                    <i class="fas fa-fw fa-envelope"></i> <a href="mailto:info@domain.com">info@domain.com</a>
                </address>
            </div><!-- / col-12 -->
            <div class="col-12 col-md-6">
                <h2>Opening hours:</h2>
                <p>
                    Monday-Thursday: <span class="float-end">10 am - 6 pm</span><br>
                    Friday-Saturday: <span class="float-end">10 am - 10 pm</span><br>
                    Sunday: <span class="float-end">10 am - 8 pm</span>
                </p>
            </div><!-- / col-12 -->
        </div><!-- / row -->
        <div class="row">
            <div class="col-12 col-lg-6 mb-3">
                <h2>Send us a message:</h2>
                <form>
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label for="name" class="form-label">Name</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-user"></i></span>
                                    <input type="text" id="name" class="form-control" name="name" placeholder="Name" required>
                                </div><!-- / input-group -->
                            </div><!-- / mb-3 -->
                        </div><!-- / col-12 -->
                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label for="email" class="form-label">Email</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-envelope"></i></span>
                                    <input type="email" id="email" class="form-control" name="email" placeholder="example@email.com" required>
                                </div><!-- / input-group -->
                            </div><!-- / mb-3 -->
                        </div><!-- / col-12 -->
                    </div><!-- / row -->
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label for="telephone" class="form-label">Telephone</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-phone"></i></span>
                                    <input type="tel" id="telephone" class="form-control" name="telephone" placeholder="0123456789">
                                </div><!-- / input-group -->
                            </div><!-- / mb-3 -->
                        </div><!-- / col-12 -->
                        <div class="col-12 col-sm-6">
                            <div class="mb-3">
                                <label for="department" class="form-label">Department:</label>
                                <div class="input-group">
                                    <span class="input-group-text"><i class="fas fa-home"></i></span>
                                    <select id="department" class="form-select" name="department" aria-describedby="department-help-block" required>
                                        <option value="">- select here -</option>
                                        <option value="business">Business</option>
                                        <option value="sale">Sale</option>
                                        <option value="support">Support</option>
                                    </select>
                                </div><!-- / input-group -->
                                <small id="department-help-block" class="form-text">Please select the recipient of your message.</small>
                            </div><!-- / mb-3 -->
                        </div><!-- / col-12 -->
                    </div><!-- / row -->
                    <div class="mb-3">
                        <label for="message" class="form-label">Message:</label>
                        <div class="input-group">
                            <span class="input-group-text"><i class="fas fa-pencil-alt"></i></span>
                            <textarea id="message" class="form-control" name="message" rows="5" placeholder="Write your message here..." required></textarea>
                        </div><!-- / input-group -->
                    </div><!-- / mb-3 -->
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button type="reset" class="btn btn-secondary">Reset</button>
                </form>
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
