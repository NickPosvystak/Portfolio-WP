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

    <header>
        <div class="container">
            <a href="<?php echo home_url(); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Drone3.png" alt="logo"></a>

            <?php
            wp_nav_menu([
                'theme_location' => 'header_menu',
                'menu_id'=> 'header_menu',
                'container' => 'nav',
                'container_class' => 'navig-menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ]);

            ?>

            <div class="burger">
                <span></span>
            </div>
        </div>

    </header>