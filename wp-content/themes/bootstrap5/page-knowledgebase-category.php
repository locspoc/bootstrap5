<?php

/**
 * Template Name: Knowledgebase Category
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

<nav class="navbar navbar-light bg-light">
    <div class="container">
        <a href="<?= home_url('knowledgebase-index'); ?>" class="navbar-brand me-0"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/40x40.png" alt="Brand Logo" class="me-2"> Knowledge Base</a>
        <div class="dropdown">
            <button type="button" class="btn btn-secondary btn-sm dropdown-toggle" id="dropdownLanguage" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">English</button>
            <div class="dropdown-menu" aria-labelledby="dropdownLanguage">
                <a href="https://companyname.com/language" class="dropdown-item">Language</a>
                <a href="https://companyname.com/language" class="dropdown-item">Language</a>
                <a href="https://companyname.com/language" class="dropdown-item">Language</a>
            </div><!-- / dropdown-menu -->
        </div><!-- / dropdown -->
    </div><!-- / container -->
</nav>

<main>
    <div class="container mt-3 mb-5">
        <div class="row flex-lg-row-reverse mb-lg-5">
            <div class="col-12 col-lg-6 mb-3 mb-lg-0">
                <form>
                    <div class="input-group input-group-lg">
                        <input type="search" name="search" class="form-control" id="search" placeholder="How can we help you?" aria-label="Search for..." aria-describedby="buttonSearch">
                        <button type="submit" class="btn btn-primary" id="buttonSearch">Search</button>
                    </div>
                </form>
            </div><!-- / col-12 -->
            <div class="col-12 col-lg-6">
                <nav aria-label="Site navigation">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="<?= home_url('knowledgebase-index'); ?>">Home</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Category Heading</li>
                    </ol>
                </nav>
            </div><!-- / col-12 -->
        </div><!-- / row -->
        <div class="row">
            <div class="col-12 col-lg-3">
                <nav aria-label="Page navigation" class="sticky-top pt-3">
                    <div class="card">
                        <div class="card-body">
                            <h4 class="h6">Page Navigation</h4>
                            <div class="nav flex-column">
                                <a href="#section-1" class="nav-link">Category Subheading</a>
                                <a href="#section-2" class="nav-link">Category Subheading</a>
                                <a href="#section-3" class="nav-link">Category Subheading</a>
                                <a href="#section-4" class="nav-link">Category Subheading</a>
                                <a href="#section-5" class="nav-link">Category Subheading</a>
                            </div><!-- / nav -->
                        </div><!-- / card-body -->
                    </div><!-- / card -->
                </nav>
            </div><!-- / col-12 -->
        </div><!-- / row -->
    </div><!-- / container -->
</main>

<footer class="small bg-light">
    <div class="container py-3 py-sm-5 text-center">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/120x40.png" alt="Brand logo" class="mb-2 mb-sm-4 ms-auto me-auto">
        <p class="mb-2 mb-sm-4">&copy; 2020 Brand Name. All Rights Reserved.</p>
        <ul class="list-inline mb-0">
            <li class="list-inline-item">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-house-fill text-muted" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 3.293l6 6V13.5a1.5 1.5 0 0 1-1.5 1.5h-9A1.5 1.5 0 0 1 2 13.5V9.293l6-6zm5-.793V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                    <path fill-rule="evenodd" d="M7.293 1.5a1 1 0 0 1 1.414 0l6.647 6.646a.5.5 0 0 1-.708.708L8 2.207 1.354 8.854a.5.5 0 1 1-.708-.708L7.293 1.5z" />
                </svg>
                <a href="#0">Brand Name</a>
            </li>
            <li class="list-inline-item">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-book-fill text-muted" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M8 1.783C7.015.936 5.587.81 4.287.94c-1.514.153-3.042.672-3.994 1.105A.5.5 0 0 0 0 2.5v11a.5.5 0 0 0 .707.455c.882-.4 2.303-.881 3.68-1.02 1.409-.142 2.59.087 3.223.877a.5.5 0 0 0 .78 0c.633-.79 1.814-1.019 3.222-.877 1.378.139 2.8.62 3.681 1.02A.5.5 0 0 0 16 13.5v-11a.5.5 0 0 0-.293-.455c-.952-.433-2.48-.952-3.994-1.105C10.413.809 8.985.936 8 1.783z" />
                </svg>
                <a href="#0">Tutorials</a>
            </li>
            <li class="list-inline-item">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-pencil-fill text-muted" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M12.854.146a.5.5 0 0 0-.707 0L10.5 1.793 14.207 5.5l1.647-1.646a.5.5 0 0 0 0-.708l-3-3zm.646 6.061L9.793 2.5 3.293 9H3.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.5h.5a.5.5 0 0 1 .5.5v.207l6.5-6.5zm-7.468 7.468A.5.5 0 0 1 6 13.5V13h-.5a.5.5 0 0 1-.5-.5V12h-.5a.5.5 0 0 1-.5-.5V11h-.5a.5.5 0 0 1-.5-.5V10h-.5a.499.499 0 0 1-.175-.032l-.179.178a.5.5 0 0 0-.11.168l-2 5a.5.5 0 0 0 .65.65l5-2a.5.5 0 0 0 .168-.11l.178-.178z" />
                </svg>
                <a href="#0">Blog</a>
            </li>
            <li class="list-inline-item">
                <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-envelope-fill text-muted" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555zM0 4.697v7.104l5.803-3.558L0 4.697zM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757zm3.436-.586L16 11.801V4.697l-5.803 3.546z" />
                </svg>
                <a href="#0">Contact</a>
            </li>
        </ul>
    </div><!-- / container -->
</footer>

<?php kadence()->print_styles('kadence-content');
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();
