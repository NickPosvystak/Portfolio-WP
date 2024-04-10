<?php

$show_image_video = get_field('show_image_video');
if (!$show_image_video)
    return;


$main_image = get_field('main_image');

?>
<section id="main-image" class="main-image-home">
    <?php if ($main_image <> '') : ?>
        <img src="<?php echo $main_image['url']; ?>" alt="<?php echo $main_image['title']; ?>" class="main-image-home">
    <?php endif; ?>
</section>