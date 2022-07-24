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

                <div class="row">

                    <div class="col-md-3 mb-3">

                        <label class="form-label">Sex:</label>

                        <div>

                            <div class="form-check form-check-inline">

                                <input type="radio" class="form-check-input" name="sex" id="sex-male" value="male">
                                <label class="form-check-label" for="sex-male">Male</label>

                            </div><!-- / form-check -->

                            <div class="form-check form-check-inline">

                                <input type="radio" class="form-check-input" name="sex" id="sex-female" value="female">
                                <label class="form-check-label" for="sex-female">Female</label>

                            </div><!-- / form-check -->

                        </div>

                    </div><!-- / col-md-3 -->

                    <div class="col-md-3 mb-3">

                        <label class="form-label" for="age">Age:</label>
                        <input type="number" class="form-control" id="age">

                    </div><!-- / col-md-3 -->

                    <div class="col-md-6 mb-3">

                        <label class="form-label" for="phone">Phone:</label>
                        <input type="tel" class="form-control" id="phone">

                    </div><!-- / col-md-6 -->

                </div><!-- / row -->

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label" for="name">Name:</label>
                        <input type="text" class="form-control" id="name" placeholder="Firstname Lastname">

                    </div><!-- / col-md-6 -->

                    <div class="col-md-6 mb-3">

                        <label class="form-label" for="email">Email:</label>
                        <input type="email" class="form-control" id="email" placeholder="username@domain.com">

                    </div><!-- / col-md-6 -->

                </div><!-- / row -->

                <div class="row">

                    <div class="col-md-9 mb-3">

                        <label class="form-label" for="address">Address:</label>
                        <input type="text" class="form-control" id="address" placeholder="123 Street Name">

                    </div><!-- / col-md-9 -->

                    <div class="col-md-3 mb-3">

                        <label class="form-label" for="apartment">Apartment or floor:</label>
                        <input type="text" class="form-control" id="apartment" placeholder="B3, 4th Floor, or similar">

                    </div><!-- / col-md-3 -->

                </div><!-- / row -->

                <div class="row">

                    <div class="col-md-6 mb-3">

                        <label class="form-label" for="city">City:</label>
                        <input type="text" class="form-control" id="city" placeholder="City">

                    </div><!-- / col-md-6 -->

                    <div class="col-md-2 mb-3">

                        <label class="form-label" for="zip">Zip:</label>
                        <input type="number" class="form-control" id="zip" placeholder="123">

                    </div><!-- / col-md-2 -->

                    <div class="col-md-4 mb-3">

                        <label class="form-label" for="country">Country:</label>

                        <select id="country" class="form-select">
                            <option value="" selected>- Select Country -</option>
                            <option value="Denmark">Denmark</option>
                            <option value="Finland">Finland</option>
                            <option value="Norway">Norway</option>
                            <option value="Sweden">Sweden</option>
                        </select>

                    </div><!-- / col-md-4 -->

                </div><!-- / row -->

                <button type="button" class="btn btn-outline-secondary d-block ms-auto" id="go-to-step-2">Step 2</button>

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
