<?php
/**
 * Template Name: Services Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage services
 * @since Main 1.0
 */

?>
<head>
    <meta charset='utf-8'>
    <title>Global Ocean Shipping & Air Freight Services | W Group</title>
    <meta name="description" content="Book sea and air freight services easily with World Logistics Group. Our platform offers you instant quotes, full price transparency and round-the-clock freight tracking with the help of our trucking app." />
    <meta name="keywords" content="ocean shipping, air freight services, air freight shipping, sea and air shipping services, trucking services" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="https://wlog-group.com/services/" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="Global Ocean Shipping & Air Freight Services | W Group" />
    <meta property="og:description" content="Book sea and air freight services easily with World Logistics Group. Our platform offers you instant quotes, full price transparency and round-the-clock freight tracking with the help of our trucking app." />
    <meta property="og:url" content="https://wlog-group.com/services/" />
    <meta property="og:site_name" content="World Logistics Group" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="Book sea and air freight services easily with World Logistics Group. Our platform offers you instant quotes, full price transparency and round-the-clock freight tracking with the help of our trucking app." />
    <meta name="twitter:title" content="Global Ocean Shipping & Air Freight Services | W Group" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
    <?php get_header(); ?>
    <div class="content" role="main">
        <div class="service service-slogan">
            <div class="container">
                <h1 class="service-slogan_title"><?php the_cfc_field( 'service_information','service_slogan_title'); ?></h1>
                <p class="service-slogan_description"><?php the_cfc_field( 'service_information','service_slogan_desc'); ?></p>
                <ul class="service-slogan_btns">
                    <?php foreach( get_cfc_meta( 'service_slogan_btns' ) as $key => $value ){?>
                        <li>
                            <a href="#yak<?php echo $key+1?>">
                                <?php the_cfc_field( 'service_slogan_btns','service_slogan_btn', false, $key ); ?>
                            </a>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>
        <div class="service service-main-description">
            <div class="container">
                <div class="service-main-description_info">
                    <h2 class="service-main-description_title"><?php the_cfc_field( 'service_information','service_information_title' ); ?></h2>
                    <p class="service-main-description_text"><?php the_cfc_field( 'service_information','service_information_desc'); ?></p>
                </div>

                <ul class="service-main-description_bullets">
                    <?php foreach( get_cfc_meta( 'service_information_bullets' ) as $key => $value ){?>
                        <li class="bullet">
                            <img class="bullet_image" src="<?php the_cfc_field( 'service_information_bullets','bullet_img', false, $key ); ?>" alt="">
                            <div class="bullet_wrapper">
                                <h3><?php the_cfc_field( 'service_information_bullets','bullet_title', false, $key ); ?></h3>
                                <p><?php the_cfc_field( 'service_information_bullets','bullet_text', false, $key ); ?></p>
                            </div>
                        </li>
                    <?php } ?>
                </ul>
            </div>
        </div>

        <div class="service service-features-wrapper">
            <div class="service service-features f" id="yak1">
                <div class="container">
                    <div class="service-features-wrapper">
                        <h2 class="service-features_title"><?php the_cfc_field( 'service_features_description_1','service_features_desc_1'); ?></h2>
                        <div class="service-noslider">
                            <?php foreach( get_cfc_meta( 'service_features_1' ) as $key => $value ){?>
                                <div class="wrapper">
                                    <div class="image-wrapper">
                                        <img class="image" src="<?php the_cfc_field( 'service_features_1','service_features_1_image', false, $key ); ?>" alt="">
                                    </div>
                                    <div class="text">
                                        <p class="title"><?php the_cfc_field( 'service_features_1','service_features_1_title', false, $key ); ?></p>
                                        <p class="description"><?php the_cfc_field( 'service_features_1','service_features_1_description', false, $key ); ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="service-slider owl-carousel">
                            <?php foreach( get_cfc_meta( 'service_features_1' ) as $key => $value ){?>
                                <div class="wrapper item">
                                    <div class="image-wrapper">
                                        <img class="image" src="<?php the_cfc_field( 'service_features_1','service_features_1_image', false, $key ); ?>" alt="">
                                        <p class="title"><?php the_cfc_field( 'service_features_1','service_features_1_title', false, $key ); ?></p>
                                    </div>
                                    <div class="text">
                                        <p class="description"><?php the_cfc_field( 'service_features_1','service_features_1_description', false, $key ); ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="service service-features s"  id="yak2">
                <div class="container">
                    <div class="service-features-wrapper">
                        <h2 class="service-features_title"><?php the_cfc_field( 'service_features_description_2','service_features_desc_2'); ?></h2>
                        <div class="service-noslider">
                            <?php foreach( get_cfc_meta( 'service_features_2' ) as $key => $value ){?>
                                <div class="wrapper">
                                    <div class="image-wrapper">
                                        <img class="image" src="<?php the_cfc_field( 'service_features_2','service_features_2_image', false, $key ); ?>" alt="">
                                    </div>
                                    <div class="text">
                                        <p class="title"><?php the_cfc_field( 'service_features_2','service_features_2_title', false, $key ); ?></p>
                                        <p class="description"><?php the_cfc_field( 'service_features_2','service_features_2_description', false, $key ); ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="service-slider owl-carousel">
                            <?php foreach( get_cfc_meta( 'service_features_2' ) as $key => $value ){?>
                                <div class="wrapper item">
                                    <div class="image-wrapper">
                                        <img class="image" src="<?php the_cfc_field( 'service_features_2','service_features_2_image', false, $key ); ?>" alt="">
                                        <p class="title"><?php the_cfc_field( 'service_features_2','service_features_2_title', false, $key ); ?></p>
                                    </div>
                                    <div class="text">
                                        <p class="description"><?php the_cfc_field( 'service_features_2','service_features_2_description', false, $key ); ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="service-features_image">
                <img src="<?php echo get_stylesheet_directory_uri().'/images/image.png'; ?>" alt="">
            </div>
        </div>

        <div class="service cta">
            <div class="container">
                <div class="wrapper">
                    <div>
                        <img class="cta_image" src="<?php the_cfc_field( 'service_cta','service-image-cta'); ?>" alt=""/>
                        <h2 class="cta_title"><?php the_cfc_field( 'service_cta','service-title-cta'); ?></h2>
                    </div>
                    <p class="cta_description"><?php the_cfc_field( 'service_cta','service-description-cta'); ?></p>
                </div>
                <button class="cta_btn">
                    <a href="/sign-up/">
                        <span>Get started</span>
                        <img src="<?php echo get_stylesheet_directory_uri().'/images/arrow-white.svg'; ?>" alt="">
                    </a>
                </button>
            </div>
        </div>

    </div>
    <?php get_footer(); ?>
</body>
