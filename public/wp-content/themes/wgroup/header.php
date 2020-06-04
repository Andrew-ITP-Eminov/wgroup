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

        <span class="toggle-button hamburger">
            <div class="menu-bar menu-bar-top"></div>
            <div class="menu-bar menu-bar-middle"></div>
            <div class="menu-bar menu-bar-bottom"></div>
        </span>
        <div class="menu-wrap">
            <img class="menu-wrap-logo" src="<?php echo get_stylesheet_directory_uri().'/images/logo-mobile-menu.svg'; ?>" alt="">
            <div class="menu-sidebar">
                <ul class="menu">
                    <?php wp_nav_menu(); ?>
                    <li class="link">
                        <a href="/sign-up">
                            <span>Get started</span>
                            <img src="<?php echo get_stylesheet_directory_uri().'/images/arrow-red.svg'; ?>" alt="">
                        </a>
                    </li>

<!--                        <li><a href="#">Home</a></li>-->
<!--                        <li><a href="#">About</a></li>-->
<!--                        <li><a href="#">Blog</a></li>-->
<!--                        <li class="menu-item-has-children"><a href="#">Click The Arrow</a>-->
<!--                            <span class="sidebar-menu-arrow"></span>-->
<!--                            <ul class="sub-menu">-->
<!--                                <li><a href="#">Alignment</a></li>-->
<!--                                <li><a href="#">Markup</a></li>-->
<!--                                <li><a href="#">Comments</a></li>-->
<!--                            </ul>-->
<!--                        </li>-->
<!--                        <li><a href="#">Courses</a></li>-->
<!--                        <li><a href="#">Get In Touch</a></li>-->
                </ul>
            </div>
        </div>
    </div>
</div>