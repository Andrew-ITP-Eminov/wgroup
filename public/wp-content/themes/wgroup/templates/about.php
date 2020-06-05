<?php
/**
 * Template Name: About Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage About
 * @since Main 1.0
 */

?>

<body>
<?php get_header(); ?>
<div class="content" role="main">
    <div class="about-page_slogan">
        <div class="container">
            <div class="wrapper-info">
                <h1 class="title"><?php the_cfc_field( 'about_page_text','about_page_slogan_title'); ?></h1>
                <p class="description"><?php the_cfc_field( 'about_page_text','about_page_slogan_desc'); ?></p>
            </div>
        </div>
    </div>

    <div class="about-page_description">
        <div class="container">
            <h1 class="title"><?php the_cfc_field( 'about_page_text','about_page_desc_title'); ?></h1>
            <div class="wrapper-info">
                <p class="text"><?php the_cfc_field( 'about_page_text','about_page_desc_text-1'); ?></p>
                <p class="text"><?php the_cfc_field( 'about_page_text','about_page_desc_text-2'); ?></p>
            </div>
        </div>
    </div>

    <div class="about-page network-block">
        <div class="container">
            <p class="network-block_title"> <?php the_cfc_field( 'about_page_text','about_page_network_title' ); ?> </p>
            <div class="network-block_features">
                <?php foreach( get_cfc_meta( 'about_page_network-r' ) as $key => $value ){?>
                    <div class="feature">
                        <img class="feature_image" src="<?php the_cfc_field( 'about_page_network-r','about_page_network_image', false, $key ); ?>" alt="">
                        <p class="feature_count"><?php the_cfc_field( 'about_page_network-r','about_page_network-r_count', false, $key ); ?></p>
                        <p class="feature_text"><?php the_cfc_field( 'about_page_network-r','about_page_network-r_desc', false, $key ); ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="about-page_what-we-do">
        <div class="container">
            <p class="title"> <?php the_cfc_field( 'about_page_text','about_page_service_title' ); ?> </p>
            <div class="about-page_services">
                <?php foreach( get_cfc_meta( 'about_page_service-r' ) as $key => $value ){?>
                    <div class="service">
                        <div class="service_image-wrapper">
                            <img class="service_image" src="<?php the_cfc_field( 'about_page_service-r','about_page_service-r_image', false, $key ); ?>" alt="">
                        </div>
                        <p class="service_text"><?php the_cfc_field( 'about_page_service-r','about_page_service-r_title', false, $key ); ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="about-page_bullets">
        <div class="container">
            <p class="title"> <?php the_cfc_field( 'about_page_text','about_page_bullets_title' ); ?> </p>
            <div class="bullets">
                <?php foreach( get_cfc_meta( 'about_page_bullets-r' ) as $key => $value ){?>
                    <div class="bullet">
                        <div class="bullet_title-wrapper">
                            <img class="bullet_image" src="<?php the_cfc_field( 'about_page_bullets-r','about_page_bullets-r_image', false, $key ); ?>" alt="">
                            <h3 class="bullet_text"><?php the_cfc_field( 'about_page_bullets-r','about_page_bullets-r_title', false, $key ); ?></h3>
                        </div>
                        <p class="bullet_description"><?php the_cfc_field( 'about_page_bullets-r','about_page_bullets-r_desc', false, $key ); ?></p>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="about-page companies">
        <div class="container">
            <p class="companies_title"> <?php the_cfc_field('about_page_text', 'about_page_company_title'); ?> </p>
            <div class="companies_images-wrapper">
                <?php foreach( get_cfc_meta( 'about_page_companies-r' ) as $key => $value ){?>
                    <div class="companies_image">
                        <img alt="" src="<?php the_cfc_field( 'about_page_companies-r','about_page_company-img', false, $key ); ?>"/>
                    </div>
                <?php } ?>
            </div>
        </div>
    </div>

    <div class="about-page cta">
        <div class="container">
            <div class="wrapper">
                <div>
                    <img class="cta_image" src="<?php the_cfc_field( 'about_page_cta','about_page_cta_img'); ?>" alt=""/>
                    <h1 class="cta_title"><?php the_cfc_field( 'about_page_cta','about_page_cta_title'); ?></h1>
                </div>
                <p class="cta_description"><?php the_cfc_field( 'about_page_cta','about_page_cta_desc'); ?></p>
            </div>
            <button class="cta_btn">
                <a href="/sign-up">
                    <span>Get started</span>
                    <img src="<?php echo get_stylesheet_directory_uri().'/images/arrow-white.svg'; ?>" alt="">
                </a>
            </button>
        </div>
    </div>

    <?php get_footer(); ?>
</body>
