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
        <section id="section-pricing" class="mt-5">
            <h2 class="display-4 text-center">Choose your plan</h2>
            <div class="row">
                <div class="col-12 col-md-4 mb-4">
                    <div class="card card-outline-success">
                        <div class="card-header bg-success text-white text-center">
                            <h2>Starter</h2>
                            <h4>Free</h4>
                        </div><!-- / card-header -->
                        <div class="card-body">
                            <p class="card-text">Temporibus omnis dolore officia nemo.</p>
                        </div><!-- / card-body -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-fw fa-paint-brush" aria-hidden="true"></i> Item description</li>
                            <li class="list-group-item"><i class="fab fa-fw fa-instagram" aria-hidden="true"></i> Item description</li>
                        </ul>
                        <div class="card-footer text-center">
                            <a href="#0" class="btn btn-success btn-lg">Select plan</a>
                        </div><!-- / card-footer -->
                    </div><!-- / card -->
                </div><!-- / col-12 -->
                <div class="col-12 col-md-4 mb-4">
                    <div class="card card-outline-warning">
                        <div class="card-header bg-warning text-white text-center">
                            <h2>Semi-pro</h2>
                            <h4>$1.99 / month</h4>
                        </div><!-- / card-header -->
                        <div class="card-body">
                            <p class="card-text">Temporibus omnis dolore officia nemo.</p>
                        </div><!-- / card-body -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-fw fa-paint-brush" aria-hidden="true"></i> Item description</li>
                            <li class="list-group-item"><i class="fab fa-fw fa-instagram" aria-hidden="true"></i> Item description</li>
                            <li class="list-group-item"><i class="fas fa-fw fa-cogs" aria-hidden="true"></i> Item description</li>
                        </ul>
                        <div class="card-footer text-center">
                            <a href="#0" class="btn btn-warning btn-lg">Select plan</a>
                        </div><!-- / card-footer -->
                    </div><!-- / card -->
                </div><!-- / col-12 -->
                <div class="col-12 col-md-4 mb-4">
                    <div class="card card-outline-danger">
                        <div class="card-header bg-danger text-white text-center">
                            <h2>Pro</h2>
                            <h4>$4.99 / month</h4>
                        </div><!-- / card-header -->
                        <div class="card-body">
                            <p class="card-text">Temporibus omnis dolore officia nemo.</p>
                        </div><!-- / card-body -->
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item"><i class="fas fa-fw fa-paint-brush" aria-hidden="true"></i> Item description</li>
                            <li class="list-group-item"><i class="fab fa-fw fa-instagram" aria-hidden="true"></i> Item description</li>
                            <li class="list-group-item"><i class="fas fa-fw fa-cogs" aria-hidden="true"></i> Item description</li>
                            <li class="list-group-item"><i class="fas fa-fw fa-cloud" aria-hidden="true"></i> Item description</li>
                        </ul>
                        <div class="card-footer text-center">
                            <a href="#0" class="btn btn-danger btn-lg">Select plan</a>
                        </div><!-- / card-footer -->
                    </div><!-- / card -->
                </div><!-- / col-12 -->
            </div><!-- / row -->
        </section>
        <section id="section-reviews" class="mt-5">
            <h2 class="display-4 text-center">Reviews</h2>
            <div class="row mb-3">
                <div class="col-12 col-md-6 col-xl-3 gx-5 gy-3">
                    <figure>
                        <blockquote class="blockquote">
                            <p><i class="fas fa-fw fa-quote-left text-secondary" aria-hidden="true"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptates sint at! Laboriosam ducimus expedita reiciendis suscipit quibusdam ad ipsa distinctio voluptatem ullam adipisci id molestias, explicabo iusto atque. <i class="fas fa-fw fa-quote-right text-secondary" aria-hidden="true"></i></p>
                        </blockquote>
                        <figcaption class="blockquote-footer">Firstname Lastname <time datetime="2020-09-01T12:00">(September 01 2020 12:00)</time></figcaption>
                    </figure>
                </div><!-- / col-12 -->
                <div class="col-12 col-md-6 col-xl-3 gx-5 gy-3">
                    <figure>
                        <blockquote class="blockquote">
                            <p><i class="fas fa-fw fa-quote-left text-secondary" aria-hidden="true"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptates sint at! Laboriosam ducimus expedita reiciendis suscipit quibusdam ad ipsa distinctio voluptatem ullam adipisci id molestias, explicabo iusto atque. <i class="fas fa-fw fa-quote-right text-secondary" aria-hidden="true"></i></p>
                        </blockquote>
                        <figcaption class="blockquote-footer">Firstname Lastname <time datetime="2020-09-01T12:00">(September 01 2020 12:00)</time></figcaption>
                    </figure>
                </div><!-- / col-12 -->
                <div class="col-12 col-md-6 col-xl-3 gx-5 gy-3">
                    <figure>
                        <blockquote class="blockquote">
                            <p><i class="fas fa-fw fa-quote-left text-secondary" aria-hidden="true"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptates sint at! Laboriosam ducimus expedita reiciendis suscipit quibusdam ad ipsa distinctio voluptatem ullam adipisci id molestias, explicabo iusto atque. <i class="fas fa-fw fa-quote-right text-secondary" aria-hidden="true"></i></p>
                        </blockquote>
                        <figcaption class="blockquote-footer">Firstname Lastname <time datetime="2020-09-01T12:00">(September 01 2020 12:00)</time></figcaption>
                    </figure>
                </div><!-- / col-12 -->
                <div class="col-12 col-md-6 col-xl-3 gx-5 gy-3">
                    <figure>
                        <blockquote class="blockquote">
                            <p><i class="fas fa-fw fa-quote-left text-secondary" aria-hidden="true"></i> Lorem ipsum dolor sit amet consectetur adipisicing elit. Perspiciatis voluptates sint at! Laboriosam ducimus expedita reiciendis suscipit quibusdam ad ipsa distinctio voluptatem ullam adipisci id molestias, explicabo iusto atque. <i class="fas fa-fw fa-quote-right text-secondary" aria-hidden="true"></i></p>
                        </blockquote>
                        <figcaption class="blockquote-footer">Firstname Lastname <time datetime="2020-09-01T12:00">(September 01 2020 12:00)</time></figcaption>
                    </figure>
                </div><!-- / col-12 -->
            </div><!-- / row -->
        </section>
    </div><!-- / container -->
    <section id="section-newsletter" class="bg-secondary py-5">
        <div class="container">
            <form class="text-white">
                <h2 class="display-4 text-center">Newsletter</h2>
                <p class="lead text-center">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
                <div class="row">
                    <div class="col-12 col-sm-6">
                        <div class="mb-3">
                            <label for="input-name" class="visually-hidden">Your name:</label>
                            <input type="text" class="form-control" placeholder="Firstname Lastname" id="input-name">
                        </div><!-- / mb-3 -->
                    </div><!-- / col-12 -->
                    <div class="col-12 col-sm-6">
                        <div class="mb-3">
                            <label for="input-email" class="visually-hidden">Your email:</label>
                            <input type="email" class="form-control" placeholder="mail@example.com" id="input-email">
                        </div><!-- / mb-3 -->
                    </div><!-- / col-12 -->
                </div><!-- / row -->
                <div class="form-check mb-2">
                    <input type="checkbox" class="form-check-input" id="input-terms" value="terms">
                    <label class="form-check-label" for="input-terms">I have read and accept the <a href="#0" data-bs-toggle="modal" data-bs-target="#modal">terms and conditions</a>.</label>
                </div><!-- / form-check -->
                <div class="d-flex justify-content-between">
                    <small class="form-text text-white w-75">You can unsubcribe from the mailing list at any time.</small>
                    <button type="submit" class="btn btn-dark">Sign up</button>
                </div><!-- / d-flex -->
            </form>
            <div class="modal fade" id="modal" tabindex="-1" role="dialog" aria-labelledby="modalTitle" aria-hidden="true">>
                <div class="modal-dialog modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="modalTitle">Terms and conditions</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div><!-- / modal-header -->
                        <div class="modal-body">
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Maecenas feugiat, urna ut pharetra ultricies, augue tellus euismod turpis, vitae semper ipsum augue a velit. Pellentesque id finibus velit. Ut sagittis maximus maximus. In aliquet enim sed turpis mollis ornare. Suspendisse elementum a magna eu luctus. Etiam tincidunt mattis mauris, non lobortis nulla tempor in. Sed lacinia metus viverra, scelerisque enim sed, sollicitudin magna. Sed non augue sit amet nisl tincidunt ultrices. Praesent nec lacus eget tortor ultricies pulvinar. Praesent euismod ut lorem sit amet bibendum.</p>
                            <p>Pellentesque vitae convallis magna. Morbi non elementum mi. Suspendisse at mollis arcu, eu tempus tellus. Aenean fringilla eleifend nisl. Aliquam erat volutpat. Sed a tortor quis tortor convallis mattis. Nunc congue massa vitae lectus dictum, a mattis metus dignissim.</p>
                            <p>Nulla feugiat, lorem sit amet vehicula hendrerit, velit eros pellentesque est, at dictum elit risus id diam. In ante lorem, blandit vel dui in, sagittis laoreet erat. Proin dictum sit amet urna ut placerat. Pellentesque laoreet, dolor vitae facilisis feugiat, quam quam gravida elit, nec sagittis orci metus at leo. In scelerisque felis vel neque lobortis ullamcorper. Praesent quis sagittis neque, nec eleifend neque. Suspendisse at consectetur eros. Mauris lectus libero, molestie vel dapibus sit amet, luctus gravida ante. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut libero neque, pretium quis malesuada eget, congue ac mauris.</p>
                            <p>Aenean quis tristique libero. Vestibulum sagittis, sapien gravida lobortis posuere, diam arcu auctor libero, at tempor mauris nulla vel odio. Phasellus semper eros rutrum mi scelerisque interdum. Maecenas euismod est sit amet justo vestibulum bibendum. Etiam scelerisque sodales nisi nec efficitur. Pellentesque arcu mauris, accumsan eget mollis at, ultrices id ante. Duis in mi eget nisi euismod gravida. Cras pharetra sollicitudin elit, vel eleifend felis dignissim non. Integer leo ex, feugiat eu lorem egestas, mollis suscipit nulla. Duis quis tellus nulla. Maecenas risus ipsum, fringilla at orci sit amet, mattis fringilla orci. Vivamus odio tellus, ornare eu leo id, pellentesque sodales ante.</p>
                            <p>Sed laoreet ut ligula eget fringilla. Suspendisse dapibus dui at ex dictum hendrerit. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Morbi efficitur ac purus eget dignissim. Aliquam ultrices, orci finibus sollicitudin tempus, elit metus scelerisque magna, a rhoncus justo nisl vitae lectus. Nam mollis sed est ut ullamcorper. Curabitur consequat feugiat erat quis molestie. Fusce suscipit sem et nulla dignissim, id malesuada felis laoreet. Cras leo ligula, vulputate id mi ac, gravida porta sem. Mauris ullamcorper lectus ac eleifend elementum. Ut id velit consequat, facilisis leo vitae, volutpat nisi. Nunc hendrerit libero mi. Integer scelerisque mattis neque placerat condimentum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Nulla eu odio mi. Duis interdum vulputate turpis pretium congue.</p>
                        </div><!-- / modal-body -->
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                        </div><!-- / modal-footer -->
                    </div><!-- / modal-content -->
                </div><!-- / modal-dialog -->
            </div><!-- / modal -->
        </div><!-- / container -->
    </section>
    <footer class="bg-light">
        <div class="container py-3 py-sm-5">
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-3">
                    <h6>Quick links</h6>
                    <ul class="list-unstyled">
                        <li><a href="#0">Home</a></li>
                        <li><a href="#0">What's new?</a></li>
                        <li><a href="#0">Support</a></li>
                        <li><a href="#0">My account</a></li>
                        <li><a href="#0">Cancel subscription</a></li>
                    </ul>
                </div><!-- / col-12 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <h6>Information</h6>
                    <ul class="list-unstyled">
                        <li><a href="#0">About us</a></li>
                        <li><a href="#0">Jobs</a></li>
                        <li><a href="#0">Press info</a></li>
                        <li><a href="#0">Contact</a></li>
                        <li><a href="#0">Partnership</a></li>
                    </ul>
                </div><!-- / col-12 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <h6>Follow us</h6>
                    <ul class="list-unstyled">
                        <li><a href="#0"><i class="fab fa-fw fa-facebook" aria-hidden="true"></i> Facebook</a></li>
                        <li><a href="#0"><i class="fab fa-fw fa-instagram" aria-hidden="true"></i> Instagram</a></li>
                        <li><a href="#0"><i class="fab fa-fw fa-twitter" aria-hidden="true"></i> Twitter</a></li>
                        <li><a href="#0"><i class="fab fa-fw fa-youtube" aria-hidden="true"></i> YouTube</a></li>
                        <li><a href="#0"><i class="fab fa-fw fa-linkedin" aria-hidden="true"></i> LinkedIn</a></li>
                    </ul>
                </div><!-- / col-12 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <h6>Our location</h6>
                    <address>
                        <strong>App Name</strong><br>
                        350 5th Avenue<br>
                        New York, NY 10118<br>
                        <i class="fas fa-fw fa-phone" aria-hidden="true"></i><span class="visually-hidden">Telephone:</span> <a href="tel:+12127363100">(212) 736-3100</a><br>
                        <i class="fas fa-fw fa-inbox" aria-hidden="true"></i><span class="visually-hidden">Mail:</span> <a href="mailto:info@appname.com">info@appname.com</a>
                    </address>
                </div><!-- / col-12 -->
            </div><!-- / row -->
            <div class="row">
                <div class="col-12 col-sm-6 col-lg-9">
                    <ul class="list-inline">
                        <li class="list-inline-item">&copy; 2020 App Name, Inc.</li>
                        <li class="list-inline-item">All rights reserved.</li>
                        <li class="list-inline-item"><a href="#0" data-bs-toggle="modal" data-bs-target="#modal">Terms of use and privacy policy</a>.</li>
                    </ul>
                </div><!-- / col-12 -->
                <div class="col-12 col-sm-6 col-lg-3">
                    <div class="dropdown dropup">
                        <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="languageMenuButton" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i class="fas fa-fw fa-language" aria-hidden="true"></i> Change language</button>
                        <div class="dropdown-menu p-0" aria-labelledby="languageMenuButton">
                            <a href="#0" class="dropdown-item small px-1">English</a>
                            <a href="#0" class="dropdown-item small px-1">German</a>
                            <a href="#0" class="dropdown-item small px-1">French</a>
                            <a href="#0" class="dropdown-item small px-1">Spanish</a>
                        </div><!-- / dropdown-menu -->
                    </div><!-- / dropdown -->
                </div><!-- / col-12 -->
            </div><!-- / row -->
        </div><!-- / container -->
    </footer>
</body>

<?php kadence()->print_styles('kadence-content');
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();
