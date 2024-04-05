<?php

/**
 * Template Name: Home Page
 */

get_header();

$show_hero = get_field('show_hero');
$title = get_field('hero_title');
?>

<?php if ($show_hero) : ?>
    <section class="hero">
        <div class="container">
            <div class="hero__inner">
                <?php if ($title <> '') : ?>
                    <h1 class="hero__title"><?php echo $title ?></h1>
                <?php endif ?>
            </div>
            <?php if (have_rows('hero_slider')) : ?>
                <ul class="slides">
                    <?php while (have_rows('hero_slider')) : the_row();
                        $title = get_sub_field('slider_title');
                        $image = get_sub_field('image');
                    ?>
                        <li>
                            <?php if ('title' <> '') : ?>
                                <h2 class="hero__slider_title"><?php echo $title ?>
                                <?php endif; ?>
                                <img src="<?php echo $image['url']; ?>" alt="<?php echo $image['alt']; ?>" />
                        </li>
                    <?php endwhile; ?>
                </ul>
            <?php endif; ?>
        </div>
    </section>
<?php endif ?>

<?php get_footer(); ?>