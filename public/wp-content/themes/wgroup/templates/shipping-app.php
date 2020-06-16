<?php
/**
 * Template Name: Shipping app Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage shipping app
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
    <div class="shipping-app">
        <div class="container">
            <div class="shipping-app_slogan">
                <h1 class="slogan_title"><?php the_cfc_field( 'shipping_app','shipping-app-title'); ?></h1>
                <p class="slogan_description"><?php the_cfc_field( 'shipping_app','shipping-app-desc'); ?></p>
            </div>
            <div class="shipping-app_video">
                <div class="play">
                    <img src="<?php echo get_stylesheet_directory_uri().'/images/play-video.svg'; ?>" alt="">
                </div>
                <p class="text">see our app</p>

<!--                <button id="myBtn">Open Modal</button>-->

                <div id="myModal" class="modal">
                    <div class="modal-content">
                        <span class="close">&times;</span>
                        <div class="show-player">
                            <?php echo do_shortcode('[video id=198]'); ?>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
    <div class="shipping-app_image">
        <img src="<?php the_cfc_field( 'shipping_app','shipping-app-image'); ?>" alt="">
    </div>
    <div class="shipping-app-features">
        <div class="container">
            <h2 class="features_title"><?php the_cfc_field( 'shipping_app','features-title'); ?></h2>
            <ul class="features_bullets owl-carousel owl-theme">
                <?php foreach( get_cfc_meta( 'shipping_app_features' ) as $key => $value ){?>
                    <div class="bullet">
                        <li><?php the_cfc_field( 'shipping_app_features','features-bullets-title', false, $key ); ?></li>
                        <p><?php the_cfc_field( 'shipping_app_features','features-bullets-desc', false, $key ); ?></p>
                    </div>
                <?php } ?>
            </ul>
        </div>
    </div>
    <div class="features_image">
        <img src="<?php the_cfc_field( 'shipping_app','features-image'); ?>" alt="">
    </div>
    <div class="shipping-app-using">
        <h2 class="using-app_title"><?php the_cfc_field( 'shipping_app','using-app-title'); ?></h2>
        <ul class="using-app_bullets">
            <?php foreach( get_cfc_meta( 'using_app_bullets' ) as $key => $value ){?>
                <div class="bullet">
                    <div>
                        <img src="<?php the_cfc_field('using_app_bullets', 'using-app-bullets-img', false, $key); ?>" alt="">
                    </div>
                    <li><?php the_cfc_field( 'using_app_bullets','using-app-bullets-title', false, $key ); ?></li>
                </div>
            <?php } ?>
        </ul>
        <button class="shipping-app-using_btn">
            <a href="/sign-up/">
                <span>Get started</span>
                <img src="<?php echo get_stylesheet_directory_uri().'/images/arrow-white.svg'; ?>" alt="">
            </a>
        </button>
    </div>
</div>
<?php get_footer(); ?>
</body>

