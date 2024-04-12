<?php

/**
 * The header for our theme
 * @package goit
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?> dir="ltr">

<head>
    <meta charset="<?php bloginfo('charset'); ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="format-detection" content="telephone=no">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>

    <div class="container-footer">

        <header>
            <div class="box-footer">
                <a href="<?php echo home_url(); ?>" class="logo">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Drone3.png" alt="logo"></a>
            </div>
        </header>

        <footer>
            <div class="link-footer">
                <?php
                wp_nav_menu([
                    'theme_location' => 'footer_menu', // Change the theme_location to your footer menu location
                    'menu_id' => 'footer_menu', // Assign an ID for the footer menu
                    'container-footer' => 'nav',
                    'container_class' => 'footer-menu', // Assign a class for the footer menu container
                    'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
                ]);
                ?>
            </div>
        </footer>
    </div>

    <?php wp_footer(); ?>
</body>

</html>