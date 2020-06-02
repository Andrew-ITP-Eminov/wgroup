<html>
<head>
    <title>Wgroup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>

<div id="ttr_header" class="header">
    <div class="header_wrapper">
        <div class="header_logo">
            <a href="/"><img class="image_logo" src= "<?php echo get_stylesheet_directory_uri().'/images/logo.svg'; ?>" alt=""/></a>
        </div>
        <div class="header_nav">
            <?php wp_nav_menu(); ?>
        </div>
        <button class="header_btn">
            <a href="/sign-up">
                <span>Get started</span>
                <img src="<?php echo get_stylesheet_directory_uri().'/images/arrow-white.svg'; ?>" alt="">
            </a>
        </button>
        <div class="hamburger"></div>

    </div>
</div>

<!--<div class="container">-->
