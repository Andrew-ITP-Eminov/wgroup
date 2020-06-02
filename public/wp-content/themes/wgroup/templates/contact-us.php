<?php
/**
 * Template Name: Contact-us Template
 * Template Post Type: post, page
 *
 * @package WordPress
 * @subpackage contact-us
 * @since Main 1.0
 */
?>

<body>
<?php get_header(); ?>
<div class="content" role="main">
    <div class="contact-us">
        <div class="container">
            <div class="form-wrapper">
                <h1 class="contact-us_form-title"><?php the_cfc_field( 'contact_us_title','contact-us-form-title'); ?></h1>
                <p class="contact-us_form-description"><?php the_cfc_field( 'contact_us_title','contact-us-form-desc'); ?></p>
                <div class="contact-us_form">
                    <?php echo do_shortcode('[contact-form-7 id="185" title="Contact us"]'); ?>
                </div>
            </div>
            <div class="contacts">
                <div class="title-wrapper">
                    <img class="title-icon" src="<?php the_cfc_field( 'contact_us_contacts-title','contacts-title-icon'); ?>" alt="">
                    <h1 class="title"><?php the_cfc_field( 'contact_us_contacts-title','contacts-title'); ?></h1>
                </div>
                <ul class="bullets">
                    <?php foreach( get_cfc_meta( 'contact_us_bullets' ) as $key => $value ){?>
                        <div class="bullet">
                            <li><?php the_cfc_field( 'contact_us_bullets','contact-us-bullets-title', false, $key ); ?></li>
                            <p><?php the_cfc_field( 'contact_us_bullets','contact-us-bullets-phone', false, $key ); ?></p>
                        </div>

                    <?php } ?>
                </ul>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>
</body>

