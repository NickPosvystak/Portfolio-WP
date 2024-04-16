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

    <?php
    $show_social = get_field('show_social');
    if ($show_social) {
        $social_media = get_field('social_media');
        $facebook = $social_media['facebook'];
        $youtube = $social_media['youtube'];
        $instagram = $social_media['instagram'];
    }

    ?>



    <footer class="container-footer">

        <div class="box-footer">
            <a href="<?php echo home_url(); ?>" class="logo">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/Drone3.png" alt="logo"></a>
        </div>

        <div class="address-box">

            <address class="address-desc"> Kontantin Polishkevych </br> Hurup Thy</address>

        </div>

        <div class="social-box">
            <?php if ($facebook <> '') : ?>
                <a href="<?php echo $facebook['url']; ?>" class="social-links"><?php echo $facebook['title']; ?></a>
            <?php endif; ?>

            <?php if ($youtube <> '') : ?>
                <a href="<?php echo $youtube['url']; ?>" class="social-links"><?php echo $youtube['title']; ?></a>
            <?php endif; ?>

            <?php if ($instagram <> '') : ?>
                <a href="<?php echo $instagram['url']; ?>" class="social-links"><?php echo $instagram['title']; ?></a>
            <?php endif; ?>
        </div>



        <div class="link-footer">
            <?php
            wp_nav_menu([
                'theme_location' => 'footer_menu',
                'menu_id' => 'footer_menu',
                'container-footer' => 'nav',
                'container_class' => 'footer-menu',
                'items_wrap' => '<ul id="%1$s" class="%2$s">%3$s</ul>',
            ]);
            ?>
        </div>


    </footer>


    <?php wp_footer(); ?>
</body>

</html>