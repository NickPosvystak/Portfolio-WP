<?php
$show =  get_field('show_hero');
if (!$show)
    return;
$hero_title = get_field('hero_title');
$hero_description = get_field('hero_description');
$hero_buttons = get_field('hero_buttons');
$first_button = $hero_buttons['lets_talk'];
$second_button = $hero_buttons['portfolio'];
$hero_image = get_field('hero_image');

?>

<section class="hero">
<div class="container">
    <div class="row">
        <div class="col-md-6">

            <?php if ($hero_title <> '') : ?>
                <h1><?php echo $hero_title; ?></h1>
            <?php endif; ?>

            <?php if ($hero_description <> '') : ?>
                <p><?php echo $hero_description; ?></p>
            <?php endif; ?>

            <?php if ($first_button <> '') : ?>
                <a href="<?php echo $first_button['url']; ?>" class="btn--primary"><?php echo $first_button['title']; ?> <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 10.5h.01m-4.01 0h.01M8 10.5h.01M5 5h14a1 1 0 0 1 1 1v9a1 1 0 0 1-1 1h-6.6a1 1 0 0 0-.69.275l-2.866 2.723A.5.5 0 0 1 8 18.635V17a1 1 0 0 0-1-1H5a1 1 0 0 1-1-1V6a1 1 0 0 1 1-1Z" />
                    </svg>



                </a>
            <?php endif; ?>

            <?php if ($second_button <> '') : ?>
                <a href="<?php echo $second_button['url']; ?>" class="btn--secondary ml-3"><?php echo $second_button['title']; ?> <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 12H5m14 0-4 4m4-4-4-4" />
                    </svg>
                </a>
            <?php endif; ?>

        </div>
        <div class="col-md-6">
            <?php if ($hero_image <> '') : ?>
                <img src="<?php echo $hero_image['url']; ?>" class="hero-image" alt="<?php echo $hero_image['title']; ?> ">
            <?php endif; ?>
        </div>
    </div>
</div>
</section>