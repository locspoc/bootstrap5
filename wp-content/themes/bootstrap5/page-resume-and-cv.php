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
        </div><!-- / col-12 -->
    </div><!-- / row -->
</div><!-- / container -->

<?php kadence()->print_styles('kadence-content');
/**
 * Hook for everything, makes for better elementor theming support.
 */
// do_action( 'kadence_single' );

get_footer();
