<?php
/**
* Template Name: Main Template
* Template Post Type: post, page
*
* @package WordPress
* @subpackage Main
* @since Main 1.0
*/

?>
<head>
    <meta charset='utf-8'>
    <title>World Logistics Group: Global Freight Forwarding Services</title>
    <meta name="description" content="World Logistics Group moves freight globally by air, ocean, and truck for the world's leading brands. We ensure that your cargo is delivered safely to its final destination. Contact us right now." />
    <meta name="keywords" content="freight forwarder, freight forwarding services, freight international services, online freight broker" />
    <meta name="robots" content="index, follow" />
    <link rel="canonical" href="https://wlog-group.com/" />

    <meta property="og:type" content="website" />
    <meta property="og:title" content="World Logistics Group: Global Freight Forwarding Services" />
    <meta property="og:description" content="World Logistics Group moves freight globally by air, ocean, and truck for the world's leading brands. We ensure that your cargo is delivered safely to its final destination. Contact us right now." />
    <meta property="og:url" content="https://wlog-group.com/" />
    <meta property="og:site_name" content="World Logistics Group" />

    <meta name="twitter:card" content="summary" />
    <meta name="twitter:description" content="World Logistics Group moves freight globally by air, ocean, and truck for the world's leading brands. We ensure that your cargo is delivered safely to its final destination. Contact us right now." />
    <meta name="twitter:title" content="World Logistics Group: Global Freight Forwarding Services" />
    <meta name="viewport" content="width=device-width, initial-scale=1"/>
</head>
<body>
        <?php get_header(); ?>
        <div class="content" role="main">

            <div class="slider-mobile owl-carousel owl-theme">
                <?php foreach( get_cfc_meta( 'mobile_slider' ) as $key => $value ){?>
                    <div class="slider-block item mobile-slide-<?php echo $key+1 ?>">
                        <div class="slider-block_image-wrapper">
                            <img class="slider-block_image" src="<?php the_cfc_field( 'mobile_slider','mobile-slider-image', false, $key ); ?>" alt="">
                        </div>
                        <div class="slider-block_text">
                            <h2 class="slider-block_title mobile-title-<?php echo $key+1 ?>"><?php the_cfc_field( 'mobile_slider','mobile-slider-title', false, $key ); ?></h2>
                            <p class="slider-block_description mobile-description-<?php echo $key+1 ?>"><?php the_cfc_field( 'mobile_slider','mobile-slider-desc', false, $key ); ?></p>
                        </div>
                    </div>
                <?php } ?>
            </div>

            <div class="slider">
                <div class="slider-wrapper owl-carousel owl-theme">
                    <?php foreach( get_cfc_meta( 'slider' ) as $key => $value ){?>
                        <div class="slider-block item slide-<?php echo $key+1 ?>">
                            <div class="slider-block_image-wrapper">
                                <img class="slider-block_image" src="<?php the_cfc_field( 'slider','slider-image', false, $key ); ?>" alt="">
                            </div>
                            <div class="slider-block_text">
                                <h2 class="slider-block_title title-<?php echo $key+1 ?>"><?php the_cfc_field( 'slider','slider-title', false, $key ); ?></h2>
                                <p class="slider-block_description description-<?php echo $key+1 ?>"><?php the_cfc_field( 'slider','slider-description', false, $key ); ?></p>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            </div>

            <div class="companies">
                <div class="container">
                    <p class="companies_title"> <?php echo get_field('company_title'); ?> </p>
                    <div class="companies_slider-wrapper">
                        <div class="companies_images-wrapper_carousel owl-carousel owl-theme">
                            <?php foreach( get_cfc_meta( 'companies_image' ) as $key => $value ){?>
                                <div class="companies_image item" style="width:100%">
                                    <img alt="" src="<?php the_cfc_field( 'companies_image','image', false, $key ); ?>"/>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="companies_images-wrapper">
                            <?php foreach( get_cfc_meta( 'companies_image' ) as $key => $value ){?>
                                <div class="companies_image">
                                    <img alt="" src="<?php the_cfc_field( 'companies_image','image', false, $key ); ?>"/>
                                </div>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="network-block">
                <div class="container">
                    <p class="network-block_title"> <?php echo get_field('network_title'); ?> </p>
                    <div class="network-block_features">
                        <?php foreach( get_cfc_meta( 'network' ) as $key => $value ){?>
                            <div class="feature">
                                <img class="feature_image" src="<?php the_cfc_field( 'network','network_image', false, $key ); ?>" alt="">
                                <p class="feature_count"><?php the_cfc_field( 'network','network_count', false, $key ); ?></p>
                                <p class="feature_text"><?php the_cfc_field( 'network','network_text', false, $key ); ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="services">
                <div class="container">
                    <p class="services_title"> <?php echo get_field('service_title'); ?> </p>

                    <div class="services_slider-wrapper">
                        <div class="service-wrapper">
                            <?php foreach( get_cfc_meta( 'services' ) as $key => $value ){?>
                                <div class="service-block">
                                    <div class="service-block_image-wrapper">
                                        <img class="service-block_image" src="<?php the_cfc_field( 'services','services_image', false, $key ); ?>" alt="">
                                    </div>
                                    <div class="service-block_text">
                                        <p class="service-block_title"><?php the_cfc_field( 'services','services_title', false, $key ); ?></p>
                                        <p class="service-block_description"><?php the_cfc_field( 'services','services_description', false, $key ); ?></p>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="service-wrapper-responsive owl-carousel owl-theme">
                            <?php foreach( get_cfc_meta( 'services' ) as $key => $value ){?>
                                <div class="service-block-responsive item">
                                    <div class="service-block_text">
                                        <img class="service-block_image" src="<?php the_cfc_field( 'services','services_image', false, $key ); ?>" alt="">
                                        <p class="service-block_title"><?php the_cfc_field( 'services','services_title', false, $key ); ?></p>
                                    </div>
                                    <p class="service-block_description"><?php the_cfc_field( 'services','services_description', false, $key ); ?></p>
                                </div>
                            <?php } ?>
                        </div>
                    </div>

                    <p class="services_read-more">
                        <?php if( have_rows('services_read_more') ): while ( have_rows('services_read_more') ) : the_row(); ?>
                            <a href="/services/"><?php echo get_sub_field('text'); ?></a>
                        <?php endwhile; endif; ?>
                    </p>
                </div>
            </div>
            <div class="nightmare">
                <div class="container">
                    <p class="nightmare_title"><?php echo get_field('night_title'); ?></p>
                    <div class="nightmare_info-wrapper">
                        <?php foreach( get_cfc_meta( 'nightmare' ) as $key => $value ){?>
                            <div class="nightmare-info">
                                <div class="title-wrapper">
                                    <img class="nightmare-info_icon" src="<?php the_cfc_field( 'nightmare','nightmare_icon', false, $key ); ?>" alt="">
                                    <p class="nightmare-info_title"><?php the_cfc_field( 'nightmare','nightmare_title', false, $key ); ?></p>
                                </div>
                                <p class="nightmare-info_description"><?php the_cfc_field( 'nightmare','nightmare_description', false, $key ); ?></p>
                            </div>
                        <?php } ?>
                    </div>
                </div>
            </div>
            <div class="wconnect">
                <div class="container">
                    <div class="wconnect_info">
                        <div class="wconnect_title-wrapper">
                            <img class="wconnect_image" src="<?php the_cfc_field( 'wconnect','wconnect_image' ); ?>" alt="" >
                            <h2 class="wconnect_title"><?php the_cfc_field( 'wconnect','wconnect_title' ); ?></h2>
                        </div>
                        <p class="wconnect_description"><?php the_cfc_field( 'wconnect','wconnect_description' ); ?></p>
                        <?php if( have_rows('wconnect_link') ): while ( have_rows('wconnect_link') ) : the_row(); ?>
                            <a class="wconnect_link" href="/shipping-app"><?php echo get_sub_field('text'); ?></a>
                        <?php endwhile; endif; ?>
                    </div>
                </div>
            </div>

            <div class="stop-start">
                <div class="stop">
                    <div class="container">
                        <h2 class="title"><?php echo get_field('stop_title'); ?></h2>
                        <div>
                            <h2 class="sub-title">stop...</h2>
                            <ul class="description">
                                <?php foreach( get_cfc_meta( 'stop' ) as $key => $value ){?>
                                    <li class="description_item"><?php the_cfc_field( 'stop','stop_bullet', false, $key ); ?></li>
                                <?php } ?>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="start">
                    <div class="container">
                        <h2 class="title"><?php echo get_field('start_title'); ?></h2>
                        <div>
                            <h2 class="sub-title">start...</h2>
                            <ul class="description">
                                <?php foreach( get_cfc_meta( 'start' ) as $key => $value ){?>
                                    <li class="description_item"><?php the_cfc_field( 'start','start_bullet', false, $key ); ?></li>
                                <?php } ?>
                            </ul>
                            <div class="content-start_btn-wrapper">
                                <button class="content-start_btn">
                                    <?php
                                    if( have_rows('button') ):
                                        while ( have_rows('button') ) : the_row();
                                            ?>
                                            <a href="/sign-up/">
                                                <span><?php echo get_sub_field('text'); ?></span>
                                                <img src="<?php echo get_stylesheet_directory_uri().'/images/arrow-white.svg'; ?>" alt="">
                                            </a>
                                        <?php
                                        endwhile;
                                    endif;
                                    ?>
                                </button>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php get_footer(); ?>
</body>


<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

