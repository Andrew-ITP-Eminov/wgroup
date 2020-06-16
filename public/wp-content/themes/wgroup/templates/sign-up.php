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
<head>
    <meta charset='utf-8'>
    <title>Sign Up | World Logistics Group</title>
    <meta name="description" content="Shipping made easy. Book the best rates, track all freight, just sign up now on W Connect." />
    <meta name="keywords" content="" />
    <meta name="robots" content="noindex, follow" />
    <link rel="canonical" href="https://wlog-group.com/sign-up/" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Sign Up | World Logistics Group" />
    <meta property="og:description" content="Shipping made easy. Book the best rates, track all freight, just sign up now on W Connect." />
    <meta property="og:url" content="https://wlog-group.com/sign-up/" />
    <meta property="og:site_name" content="World Logistics Group" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Shipping made easy. Book the best rates, track all freight, just sign up now on W Connect." />
    <meta name="twitter:title" content="Sign Up | World Logistics Group" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
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


