
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
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/sign-up.js'; ?>"></script>
    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/js/shipping-app.js'; ?>"></script>
    </html>

