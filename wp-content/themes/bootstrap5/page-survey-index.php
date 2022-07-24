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

                <h2 class="h5 text-center mb-3">Question #1: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h2>

                <div class="row">

                    <div class="col-lg-6">
                        <figure class="figure">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1600x900.png" class="figure-img img-fluid rounded">
                            <figcaption class="figure-caption">A caption for the figure image.</figcaption>
                        </figure>
                    </div><!-- / col-lg-6 -->

                    <div class="col-lg-6">

                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="radioButtonsQuestion1" id="radioButtonsQuestion1-1" value="option1">
                            <label class="form-check-label" for="radioButtonsQuestion1-1">Answer for radio 1</label>
                        </div><!-- / form-check -->

                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="radioButtonsQuestion1" id="radioButtonsQuestion1-2" value="option2">
                            <label class="form-check-label" for="radioButtonsQuestion1-2">Answer for radio 2</label>
                        </div><!-- / form-check -->

                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="radioButtonsQuestion1" id="radioButtonsQuestion1-3" value="option3">
                            <label class="form-check-label" for="radioButtonsQuestion1-3">Answer for radio 3</label>
                        </div><!-- / form-check -->

                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="radioButtonsQuestion1" id="radioButtonsQuestion1-4" value="option4">
                            <label class="form-check-label" for="radioButtonsQuestion1-4">Answer for radio 4</label>
                        </div><!-- / form-check -->

                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="radioButtonsQuestion1" id="radioButtonsQuestion1-5" value="option5">
                            <label class="form-check-label" for="radioButtonsQuestion1-5">Answer for radio 5</label>
                        </div><!-- / form-check -->

                        <div class="form-check">
                            <input class="form-check-input mt-2" type="radio" name="radioButtonsQuestion1" id="radioButtonsQuestion1-6" value="option6">
                            <label class="form-check-label" for="radioButtonsQuestion1-6">
                                <input type="text" class="form-control form-control-sm" id="radioButtonsQuestion1-other" placeholder="Other" aria-describedby="radioButtonsQuestion1-other-help">
                            </label>
                            <p id="radioButtonsQuestion1-other-help" class="form-text text-muted">If none of the answers above is appropriate for you please write your own answer in the input field.</p>
                        </div><!-- / form-check -->

                    </div><!-- / col-lg-6 -->

                </div><!-- / row -->

                <hr class="my-4">

                <h2 class="h5 text-center mb-3">Question #2: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h2>

                <div class="row">

                    <div class="col-lg-6">
                        <figure class="figure">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1600x900.png" class="figure-img img-fluid rounded">
                            <figcaption class="figure-caption">A caption for the figure image.</figcaption>
                        </figure>
                    </div><!-- / col-lg-6 -->

                    <div class="col-lg-6">

                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="radioButtonsQuestion2" id="radioButtonsQuestion2-1" value="option1">
                            <label class="form-check-label" for="radioButtonsQuestion2-1">Answer for radio 1</label>
                        </div><!-- / form-check -->

                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="radioButtonsQuestion2" id="radioButtonsQuestion2-2" value="option2">
                            <label class="form-check-label" for="radioButtonsQuestion2-2">Answer for radio 2</label>
                        </div><!-- / form-check -->

                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="radioButtonsQuestion2" id="radioButtonsQuestion2-3" value="option3">
                            <label class="form-check-label" for="radioButtonsQuestion2-3">Answer for radio 3</label>
                        </div><!-- / form-check -->

                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="radioButtonsQuestion2" id="radioButtonsQuestion2-4" value="option4">
                            <label class="form-check-label" for="radioButtonsQuestion2-4">Answer for radio 4</label>
                        </div><!-- / form-check -->

                        <div class="form-check mb-1">
                            <input class="form-check-input" type="radio" name="radioButtonsQuestion2" id="radioButtonsQuestion2-5" value="option5">
                            <label class="form-check-label" for="radioButtonsQuestion2-5">Answer for radio 5</label>
                        </div><!-- / form-check -->

                        <div class="form-check">
                            <input class="form-check-input mt-2" type="radio" name="radioButtonsQuestion2" id="radioButtonsQuestion2-6" value="option6">
                            <label class="form-check-label" for="radioButtonsQuestion2-6">
                                <input type="text" class="form-control form-control-sm" id="radioButtonsQuestion2-other" placeholder="Other" aria-describedby="radioButtonsQuestion2-other-help">
                            </label>
                            <p id="radioButtonsQuestion2-other-help" class="form-text text-muted">If none of the answers above is appropriate for you please write your own answer in the input field.</p>
                        </div><!-- / form-check -->

                    </div><!-- / col-lg-6 -->

                </div><!-- / row -->

                <hr class="my-4">

                <h2 class="h5 text-center mb-3">Question #3: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h2>

                <div class="row">

                    <div class="col-lg-6">

                        <figure class="figure">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1600x900.png" class="figure-img img-fluid rounded">
                            <figcaption class="figure-caption">A caption for the figure image.</figcaption>
                        </figure>

                    </div><!-- / col-lg-6 -->

                    <div class="col-lg-6">

                        <div class="form-check mb-1">

                            <input class="form-check-input" type="checkbox" name="checkBoxesQuestion3" id="checkBoxesQuestion3-1" value="option1">
                            <label class="form-check-label" for="checkBoxesQuestion3-1">Answer for checkbox 1</label>

                        </div><!-- / form-check -->

                        <div class="form-check mb-1">

                            <input class="form-check-input" type="checkbox" name="checkBoxesQuestion3" id="checkBoxesQuestion3-2" value="option2">
                            <label class="form-check-label" for="checkBoxesQuestion3-2">Answer for checkbox 2</label>

                        </div><!-- / form-check -->

                        <div class="form-check mb-1">

                            <input class="form-check-input" type="checkbox" name="checkBoxesQuestion3" id="checkBoxesQuestion3-3" value="option3">
                            <label class="form-check-label" for="checkBoxesQuestion3-3">Answer for checkbox 3</label>

                        </div><!-- / form-check -->

                        <div class="form-check mb-1">

                            <input class="form-check-input" type="checkbox" name="checkBoxesQuestion3" id="checkBoxesQuestion3-4" value="option4">
                            <label class="form-check-label" for="checkBoxesQuestion3-4">Answer for checkbox 4</label>

                        </div><!-- / form-check -->

                        <div class="form-check mb-1">

                            <input class="form-check-input" type="checkbox" name="checkBoxesQuestion3" id="checkBoxesQuestion3-5" value="option5">
                            <label class="form-check-label" for="checkBoxesQuestion3-5">Answer for checkbox 5</label>

                        </div><!-- / form-check -->

                        <div class="form-check">

                            <input class="form-check-input mt-2" type="checkbox" name="checkBoxesQuestion3" id="checkBoxesQuestion3-6" value="option6">

                            <label class="form-check-label" for="checkBoxesQuestion3-6">
                                <input type="text" class="form-control form-control-sm" id="checkBoxesQuestion3-other" placeholder="Other" aria-describedby="checkBoxesQuestion3-other-help">
                            </label>

                            <p id="checkBoxesQuestion3-other-help" class="form-text text-muted">If none of the answers above is appropriate for you please write your own answer in the input field.</p>

                        </div><!-- / form-check -->

                    </div><!-- / col-lg-6 -->

                </div><!-- / row -->

                <hr class="my-4">
                <h2 class="h5 text-center mb-3">Question #4: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h2>
                <div class="row">
                    <div class="col-lg-6">
                        <figure class="figure">
                            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/1600x900.png" class="figure-img img-fluid rounded">
                            <figcaption class="figure-caption">A caption for the figure image.</figcaption>
                        </figure>
                    </div>
                    <div class="col-lg-6">
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="checkbox" name="checkBoxesQuestion4" id="checkBoxesQuestion4-1" value="option1">
                            <label class="form-check-label" for="checkBoxesQuestion4-1">Answer for checkbox 1</label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="checkbox" name="checkBoxesQuestion4" id="checkBoxesQuestion4-2" value="option2">
                            <label class="form-check-label" for="checkBoxesQuestion4-2">Answer for checkbox 2</label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="checkbox" name="checkBoxesQuestion4" id="checkBoxesQuestion4-3" value="option3">
                            <label class="form-check-label" for="checkBoxesQuestion4-3">Answer for checkbox 3</label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="checkbox" name="checkBoxesQuestion4" id="checkBoxesQuestion4-4" value="option4">
                            <label class="form-check-label" for="checkBoxesQuestion4-4">Answer for checkbox 4</label>
                        </div>
                        <div class="form-check mb-1">
                            <input class="form-check-input" type="checkbox" name="checkBoxesQuestion4" id="checkBoxesQuestion4-5" value="option5">
                            <label class="form-check-label" for="checkBoxesQuestion4-5">Answer for checkbox 5</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input mt-2" type="checkbox" name="checkBoxesQuestion4" id="checkBoxesQuestion4-6" value="option6">
                            <label class="form-check-label" for="checkBoxesQuestion4-6">
                                <input type="text" class="form-control form-control-sm" id="checkBoxesQuestion4-other" placeholder="Other" aria-describedby="checkBoxesQuestion4-other-help">
                            </label>
                            <p id="checkBoxesQuestion4-other-help" class="form-text text-muted">If none of the answers above is appropriate for you please write your own answer in the input field.</p>
                        </div>
                    </div>
                </div>
                <button type="button" class="btn btn-outline-secondary d-block ms-auto" id="go-to-step-3">Step 3</button>

            </div><!-- / tab-pane -->

            <div class="tab-pane fade pt-4" id="step-3" role="tabpanel" aria-labelledby="step-3-tab">

                <div class="row">

                    <div class="col-lg-6">

                        <h2 class="h5">Question #5: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h2>
                        <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada semper velit, id condimentum dui aliquet non.</p>

                    </div><!-- / col-lg-6 -->

                    <div class="col-lg-6">

                        <div class="d-flex justify-content-between mb-3">

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ratingRadioQuestion5" id="ratingRadioQuestion5-1" value="rating-1">
                                <label class="form-check-label" for="ratingRadioQuestion5-1">1</label>
                            </div><!-- / form-check -->

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ratingRadioQuestion5" id="ratingRadioQuestion5-2" value="rating-2">
                                <label class="form-check-label" for="ratingRadioQuestion5-2">2</label>
                            </div><!-- / form-check -->

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ratingRadioQuestion5" id="ratingRadioQuestion5-3" value="rating-3">
                                <label class="form-check-label" for="ratingRadioQuestion5-3">3</label>
                            </div><!-- / form-check -->

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ratingRadioQuestion5" id="ratingRadioQuestion5-4" value="rating-4">
                                <label class="form-check-label" for="ratingRadioQuestion5-4">4</label>
                            </div><!-- / form-check -->

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ratingRadioQuestion5" id="ratingRadioQuestion5-5" value="rating-5">
                                <label class="form-check-label" for="ratingRadioQuestion5-5">5</label>
                            </div><!-- / form-check -->

                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="ratingRadioQuestion5" id="ratingRadioQuestion5-na" value="rating-na">
                                <label class="form-check-label" for="ratingRadioQuestion5-na">n/a</label>
                            </div><!-- / form-check -->

                        </div><!-- / d-flex -->

                        <label class="visually-hidden" for="ratingRadioQuestion5-comment">Comment:</label>

                        <textarea class="form-control form-control-sm" id="ratingRadioQuestion5-comment" name="ratingRadioQuestion5" rows="3" placeholder="Write a comment here..."></textarea>

                    </div><!-- / col-lg-6 -->

                </div><!-- / row -->

                <hr class="my-4">

                <div class="row">

                    <div class="col-lg-6">

                        <h2 class="h5">Question #6: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h2>
                        <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada semper velit, id condimentum dui aliquet non.</p>

                    </div><!-- / col-lg-6 -->

                    <div class="col-lg-6">

                        <div class="d-flex justify-content-between mb-3">

                            <div class="form-check">

                                <input class="form-check-input" type="radio" name="ratingRadioQuestion6" id="ratingRadioQuestion6-1" value="rating-1">
                                <label class="form-check-label" for="ratingRadioQuestion6-1">1</label>

                            </div><!-- / form-check -->

                            <div class="form-check">

                                <input class="form-check-input" type="radio" name="ratingRadioQuestion6" id="ratingRadioQuestion6-2" value="rating-2">
                                <label class="form-check-label" for="ratingRadioQuestion6-2">2</label>

                            </div><!-- / form-check -->

                            <div class="form-check">

                                <input class="form-check-input" type="radio" name="ratingRadioQuestion6" id="ratingRadioQuestion6-3" value="rating-3">
                                <label class="form-check-label" for="ratingRadioQuestion6-3">3</label>

                            </div><!-- / form-check -->

                            <div class="form-check">

                                <input class="form-check-input" type="radio" name="ratingRadioQuestion6" id="ratingRadioQuestion6-4" value="rating-4">
                                <label class="form-check-label" for="ratingRadioQuestion6-4">4</label>

                            </div><!-- / form-check -->

                            <div class="form-check">

                                <input class="form-check-input" type="radio" name="ratingRadioQuestion6" id="ratingRadioQuestion6-5" value="rating-5">
                                <label class="form-check-label" for="ratingRadioQuestion6-5">5</label>

                            </div><!-- / form-check -->

                            <div class="form-check">

                                <input class="form-check-input" type="radio" name="ratingRadioQuestion6" id="ratingRadioQuestion6-na" value="rating-na">
                                <label class="form-check-label" for="ratingRadioQuestion6-na">n/a</label>

                            </div><!-- / form-check -->

                        </div><!-- / d-flex -->

                        <label class="visually-hidden" for="ratingRadioQuestion6-comment">Comment:</label>

                        <textarea class="form-control form-control-sm" id="ratingRadioQuestion6-comment" name="ratingRadioQuestion6" rows="3" placeholder="Write a comment here..."></textarea>

                    </div><!-- / col-lg-6 -->

                </div><!-- / row -->

                <hr class="my-4">

                <div class="row">

                    <div class="col-lg-6">

                        <h2 class="h5">Question #7: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h2>
                        <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada semper velit, id condimentum dui aliquet non.</p>

                    </div><!-- / col-lg-6 -->

                    <div class="col-lg-6">

                        <div class="mb-3">

                            <div class="btn-group btn-group-lg w-100">

                                <input class="btn-check" type="radio" name="ratingToggleButtonsQuestion7" id="ratingToggleButtonsQuestion7-1" value="rating-1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="ratingToggleButtonsQuestion7-1">1</label>

                                <input class="btn-check" type="radio" name="ratingToggleButtonsQuestion7" id="ratingToggleButtonsQuestion7-2" value="rating-2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="ratingToggleButtonsQuestion7-2">2</label>

                                <input class="btn-check" type="radio" name="ratingToggleButtonsQuestion7" id="ratingToggleButtonsQuestion7-3" value="rating-3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="ratingToggleButtonsQuestion7-3">3</label>

                                <input class="btn-check" type="radio" name="ratingToggleButtonsQuestion7" id="ratingToggleButtonsQuestion7-4" value="rating-4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="ratingToggleButtonsQuestion7-4">4</label>

                                <input class="btn-check" type="radio" name="ratingToggleButtonsQuestion7" id="ratingToggleButtonsQuestion7-5" value="rating-5" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="ratingToggleButtonsQuestion7-5">5</label>

                                <input class="btn-check" type="radio" name="ratingToggleButtonsQuestion7" id="ratingToggleButtonsQuestion7-na" value="rating-na" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="ratingToggleButtonsQuestion7-na">n/a</label>

                            </div><!-- / btn-group -->

                        </div><!-- / mb-3 -->

                        <label class="visually-hidden" for="ratingToggleButtonsQuestion7-comment">Comment:</label>
                        <textarea class="form-control form-control-sm" id="ratingToggleButtonsQuestion7-comment" name="ratingToggleButtonsQuestion7" rows="3" placeholder="Write a comment here..."></textarea>

                    </div><!-- / col-lg-6 -->

                </div><!-- / row -->

                <hr class="my-4">

                <div class="row">

                    <div class="col-lg-6">

                        <h2 class="h5">Question #8: Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h2>
                        <p class="small">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum malesuada semper velit, id condimentum dui aliquet non.</p>

                    </div>

                    <div class="col-lg-6">

                        <div class="mb-3">

                            <div class="btn-group btn-group-lg w-100">

                                <input class="btn-check" type="radio" name="ratingToggleButtonsQuestion8" id="ratingToggleButtonsQuestion8-1" value="rating-1" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="ratingToggleButtonsQuestion8-1">1</label>

                                <input class="btn-check" type="radio" name="ratingToggleButtonsQuestion8" id="ratingToggleButtonsQuestion8-2" value="rating-2" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="ratingToggleButtonsQuestion8-2">2</label>

                                <input class="btn-check" type="radio" name="ratingToggleButtonsQuestion8" id="ratingToggleButtonsQuestion8-3" value="rating-3" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="ratingToggleButtonsQuestion8-3">3</label>

                                <input class="btn-check" type="radio" name="ratingToggleButtonsQuestion8" id="ratingToggleButtonsQuestion8-4" value="rating-4" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="ratingToggleButtonsQuestion8-4">4</label>

                                <input class="btn-check" type="radio" name="ratingToggleButtonsQuestion8" id="ratingToggleButtonsQuestion8-5" value="rating-5" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="ratingToggleButtonsQuestion8-5">5</label>

                                <input class="btn-check" type="radio" name="ratingToggleButtonsQuestion8" id="ratingToggleButtonsQuestion8-na" value="rating-na" autocomplete="off">
                                <label class="btn btn-outline-secondary" for="ratingToggleButtonsQuestion8-na">n/a</label>

                            </div><!-- / btn-group -->

                        </div><!-- / mb-3 -->

                        <label class="visually-hidden" for="ratingToggleButtonsQuestion8-comment">Comment:</label>
                        <textarea class="form-control form-control-sm" id="ratingToggleButtonsQuestion8-comment" name="ratingToggleButtonsQuestion8" rows="3" placeholder="Write a comment here..."></textarea>

                    </div><!-- / col-lg-6 -->

                </div><!-- / row -->

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
