<?php

$show_image_video = get_field('show_image_video');
if (!$show_image_video)
    return;


$main_image = get_field('main_image');
$contact_me = get_field('contact_me');
$contact_link = get_field('contact_link');

?>
<section id="main-image" class="main-image-container">
    <div class="image-content-box">


        <?php if ($main_image <> '') : ?>
            <img src="<?php echo $main_image['url']; ?>" alt="<?php echo $main_image['title']; ?>" class="main-image-home">
        <?php endif; ?>

    </div>

    <div class="contact-content-box">


        <?php if ($contact_me <> '') : ?>
            <p class="contact-title"><?php echo $contact_me; ?></p>
        <?php endif; ?>

        <?php if ($contact_link <> '') : ?>
            <a href="<?php echo $contact_link['url']; ?>" target="_blank" rel="noopener noreferrer" class="contact-link"><?php echo $contact_link['title']; ?></a>
        <?php endif; ?>
    </div>
</section>