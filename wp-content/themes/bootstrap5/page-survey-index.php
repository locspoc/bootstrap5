<?php

/**
 * Template Name: Survey Index
 *
 * @package kadence
 */

namespace Kadence;

if (!defined('ABSPATH')) {
    exit;
}

get_header(); ?>

<body class="bg-light py-3 py-lg-5">

    <div class="container">

        <div class="text-center">

            <h1 class="display-4">Survey Name</h1>

            <p class="lead">Subtitle for the Survey Name</p>

        </div><!-- / text-center -->

        <ul class="nav nav-tabs nav-justified" role="tablist">

            <li class="nav-item" role="presentation">
                <button type="button" class="nav-link w-100 h4 mb-0 active" id="step-1-tab" data-bs-toggle="tab" data-bs-target="#step-1" role="tab" aria-controls="step-1" aria-selected="true">Step 1<br><small class="d-none d-md-inline">Personal Info</small></button>
            </li>

            <li class="nav-item" role="presentation">
                <button type="button" class="nav-link w-100 h4 mb-0" id="step-2-tab" data-bs-toggle="tab" data-bs-target="#step-2" role="tab" aria-controls="step-2" aria-selected="false">Step 2<br><small class="d-none d-md-inline">Questions w/answers</small></button>
            </li>

            <li class="nav-item" role="presentation">
                <button type="button" class="nav-link w-100 h4 mb-0" id="step-3-tab" data-bs-toggle="tab" data-bs-target="#step-3" role="tab" aria-controls="step-3" aria-selected="false">Step 3<br><small class="d-none d-md-inline">Questions w/ratings</small></button>
            </li>

        </ul>

        <div class="tab-content">

            <div class="tab-pane fade pt-4 show active" id="step-1" role="tabpanel" aria-labelledby="step-1-tab">

            </div><!-- / tab-pane -->

            <div class="tab-pane fade pt-4" id="step-2" role="tabpanel" aria-labelledby="step-2-tab">

            </div><!-- / tab-pane -->

            <div class="tab-pane fade pt-4" id="step-3" role="tabpanel" aria-labelledby="step-3-tab">

            </div><!-- / tab-pane -->

        </div><!-- / tab-content -->

    </div><!-- / container -->

</body>

<?php kadence()->print_styles('kadence-content');
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();
