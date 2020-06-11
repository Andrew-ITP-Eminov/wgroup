
    <div class = "footer">
        <div class="footer_wrapper">
            <div class="footer_logo">
                <a href="/"><img class="image_logo" src= "<?php echo get_stylesheet_directory_uri().'/images/logo-footer.svg'; ?>" alt=""/></a>
            </div>
            <div class="footer_nav">
                <?php wp_nav_menu(); ?>

                <p class="footer_copyright">© 2020 All rights reserved to World Logistics Group</p>
            </div>

            <div class="footer_form">
                <h1 class="footer_form-title">Global freight can be easy!</h1>
                <?php echo do_shortcode('[contact-form-7 id="165" title="sign up"]'); ?>
            </div>
        </div>
    </div>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/style.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/service.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/sign-up.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/reset.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/about.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/contact-us.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/shipping-app.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_site_url().'/node_modules/owl.carousel/dist/assets/owl.carousel.min.css'; ?>" />
    <link rel="stylesheet" href="<?php echo get_site_url().'/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/styles/main-responsive.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/styles/service-responsive.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/styles/contact-us-resp.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/styles/shipping-app-resp.css'; ?>">

    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/js/slide-out-menu-css3-jquery/style.css'; ?>">


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="<?php echo get_site_url().'/node_modules/owl.carousel/dist/owl.carousel.min.js'; ?>"></script>
    <script src="<?php echo get_stylesheet_directory_uri().'/js/slide-out-menu-css3-jquery/script.js'; ?>"></script>

    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/sign-up.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/shipping-app.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/main.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/service.js'; ?>"></script>

    </html>

