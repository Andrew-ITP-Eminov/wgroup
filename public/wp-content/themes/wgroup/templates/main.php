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
<body>
        <?php get_header(); ?>
        <div class="content" role="main">

            <div class="slider">
                <?php echo do_shortcode('[smartslider3 slider="2"]'); ?>
            </div>
            <div class="companies">

                <div class="container">
                    <p class="companies_title"> <?php echo get_field('company_title'); ?> </p>

                    <div class="companies_images-wrapper">
                        <?php foreach( get_cfc_meta( 'companies_image' ) as $key => $value ){?>
                            <div class="companies_image">
                                <img alt="" src="<?php the_cfc_field( 'companies_image','image', false, $key ); ?>"/>
                            </div>
                        <?php } ?>
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
                    <div class="service-wrapper">
                        <?php foreach( get_cfc_meta( 'services' ) as $key => $value ){?>
                            <div class="service-block">
                                <img class="service-block_image" src="<?php the_cfc_field( 'services','services_image', false, $key ); ?>" alt="">
                                <div class="service-block_text">
                                    <p class="service-block_title"><?php the_cfc_field( 'services','services_title', false, $key ); ?></p>
                                    <p class="service-block_description"><?php the_cfc_field( 'services','services_description', false, $key ); ?></p>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <p class="services_read-more">
                        <?php if( have_rows('services_read_more') ): while ( have_rows('services_read_more') ) : the_row(); ?>
                            <a href="/services"><?php echo get_sub_field('text'); ?></a>
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
                            <h1 class="wconnect_title"><?php the_cfc_field( 'wconnect','wconnect_title' ); ?></h1>
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
                        <h1 class="title"><?php echo get_field('stop_title'); ?></h1>
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
                        <h1 class="title"><?php echo get_field('start_title'); ?></h1>
                        <div>
                            <h2 class="sub-title">start...</h2>
                            <ul class="description">
                                <?php foreach( get_cfc_meta( 'start' ) as $key => $value ){?>
                                    <li class="description_item"><?php the_cfc_field( 'start','start_bullet', false, $key ); ?></li>
                                <?php } ?>
                            </ul>
                            <button class="content-start_btn">
                                <?php
                                if( have_rows('button') ):
                                    while ( have_rows('button') ) : the_row();
                                        ?>
                                        <a href="/sign-up">
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
        <?php get_footer(); ?>
</body>


<?php //get_template_part( 'template-parts/footer-menus-widgets' ); ?>

