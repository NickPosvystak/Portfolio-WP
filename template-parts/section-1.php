<?php
$show = get_field('show_images');
if (!$show)
    return;

$section_images = get_field('section_images');

$image_work = $section_images['image_work'];
$work_title = $section_images['work_title'];
$description_work = $section_images['description_work'];
$link_to_work = $section_images['link_to_work'];

$section_images_two = get_field('section_images_two');

$image_work_two = $section_images_two['image_work_two'];
$work_title_two = $section_images_two['work_title_two'];
$description_work_two = $section_images_two['description_work_two'];
$link_to_work_two = $section_images_two['link_to_work_two'];


$section_images_three = get_field('section_images_three');

$image_work_three = $section_images_three['image_work_three'];
$work_title_three = $section_images_three['work_title_three'];
$description_work_three = $section_images_three['description_work_three'];
$link_to_work_three = $section_images_three['link_to_work_three'];
?>

<section id="section-1" class="section-images">

    <div class="work-box">

        <?php if ($image_work <> '') : ?>
            <img src="<?php echo $image_work['url']; ?>" alt="<?php echo $image_work['title']; ?>" class="work-image">
        <?php endif; ?>

        <?php if ($work_title <> '') : ?>
            <h2 class="work-title"><?php echo $work_title; ?></h2>
        <?php endif; ?>

        <?php if ($description_work <> '') : ?>
            <p class="work-description"><?php echo $description_work; ?></p>
        <?php endif; ?>

        <?php if ($link_to_work <> '') : ?>
            <a href=" <?php echo $link_to_work['url']; ?>" class="work-link">
                <?php echo $link_to_work['title']; ?></a>
        <?php endif; ?>


    </div>
    <div class="work-box">

        <?php if ($image_work_two <> '') : ?>
            <img src="<?php echo $image_work_two['url']; ?>" alt="<?php echo $image_work_two['title']; ?>" class="work-image">
        <?php endif; ?>

        <?php if ($work_title_two <> '') : ?>
            <h2 class="work-title"><?php echo $work_title_two; ?></h2>
        <?php endif; ?>

        <?php if ($description_work_two <> '') : ?>
            <p class="work-description"><?php echo $description_work_two; ?></p>
        <?php endif; ?>

        <?php if ($link_to_work_two <> '') : ?>
            <a href=" <?php echo $link_to_work_two['url']; ?>" class="work-link">
                <?php echo $link_to_work_two['title']; ?></a>
        <?php endif; ?>
    </div>

    <div class="work-box">

        <?php if ($image_work_three <> '') : ?>
            <img src="<?php echo $image_work_three['url']; ?>" alt="<?php echo $image_work_three['title']; ?>" class="work-image">
        <?php endif; ?>

        <?php if ($work_title_three <> '') : ?>
            <h2 class="work-title"><?php echo $work_title_three; ?></h2>
        <?php endif; ?>

        <?php if ($description_work_three <> '') : ?>
            <p class="work-description"><?php echo $description_work_three; ?></p>
        <?php endif; ?>

        <?php if ($link_to_work_three <> '') : ?>
            <a href=" <?php echo $link_to_work_three['url']; ?>" class="work-link">
                <?php echo $link_to_work_three['title']; ?></a>
        <?php endif; ?>
    </div>



</section>