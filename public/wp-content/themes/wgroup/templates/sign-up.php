<?php
/**
 * Template Name: Sign-up Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage sign-up
 * @since Main 1.0
 */

?>

<body>
    <?php get_header(); ?>
    <div class="content" role="main">
        <div class="sign-up">
            <div class="container">
                <div class="sign-up_form">
                    <h1 class="sign-up_title"><?php the_cfc_field( 'sign_up','sign-up-title'); ?></h1>
                    <div class="sign-up_wrapper">
                        <div class="sign-up_image">
                            <img src="<?php echo get_stylesheet_directory_uri().'/images/signup-ipad-mobile.png'; ?>" alt="">
                        </div>
                        <?php echo do_shortcode('[contact-form-7 id="165" title="sign up"]'); ?>
                    </div>


<!--                    <p class="sign-up_sign-in-text">Already have an account? <a href="">Sign in here</a></p>-->
                </div>
            </div>
        </div>
    <?php get_footer(); ?>
</body>


