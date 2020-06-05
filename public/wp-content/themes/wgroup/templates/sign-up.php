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
                    <?php echo do_shortcode('[contact-form-7 id="165" title="sign up"]'); ?>

<!--                    <p class="sign-up_sign-in-text">Already have an account? <a href="">Sign in here</a></p>-->
                </div>
            </div>
        </div>
    <?php get_footer(); ?>
</body>


