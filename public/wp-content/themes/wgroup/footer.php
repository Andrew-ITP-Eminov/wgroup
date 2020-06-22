
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
                <h2 class="footer_form-title">Global freight can be easy!</h2>
                <?php echo do_shortcode('[contact-form-7 id="165" title="sign up"]'); ?>
            </div>
        </div>
    </div>
    <link href="https://fonts.googleapis.com/css2?family=Assistant:wght@200;300;400;600;700;800&display=swap" rel="stylesheet">


    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/style.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_site_url().'/node_modules/owl.carousel/dist/assets/owl.carousel.min.css'; ?>" />
    <link rel="stylesheet" href="<?php echo get_site_url().'/node_modules/owl.carousel/dist/assets/owl.theme.default.min.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/styles-resp/main-responsive.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/styles-resp/service-responsive.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/styles-resp/contact-us-resp.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/styles-resp/shipping-app-resp.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/styles-resp/sign-up-resp.css'; ?>">
    <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri().'/styles-resp/about-responsive.css'; ?>">
    <link rel="alternate" href="<?php echo get_site_url().'/robots.txt' ?>"/>
    <link rel='alternate' href="<?php echo get_site_url().'/sitemap.xml' ?>"/>


    <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>

    <script src="<?php echo get_site_url().'/node_modules/owl.carousel/dist/owl.carousel.min.js'; ?>"> </script>
    <script src="<?php echo get_stylesheet_directory_uri().'/js/slide-out-menu-css3-jquery/script.min.js'; ?>"></script>

    <script type="text/javascript" src="<?php echo get_stylesheet_directory_uri().'/script.min.js'; ?>"></script>

    <script type="application/ld+json">
        {
            "@context": "http://schema.org/",
            "@type": "Organization",
            "name": "World Logistics Group",
            "address": {
                "@type": "PostalAddress",
                "streetAddress": "1050 Wall Street W, Suite 370",
                "addressLocality": "Lyndhurst",
                "addressRegion": "NJ",
                "postalCode": "07071"
            },
            "telephone": "+1 201 777 32 95"
        }
    </script>
    </html>

