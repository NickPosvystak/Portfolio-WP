<?php
$show = get_field('show_images');
if (!$show)
    return;

$section_images = get_field('section_images');

$image_link = get_field('image_link');


    // $house_image = get_field('house_image');
    $name = $get_field('name');
    // $description_house = $image_link['description_house'];
    // $link_to_image_house = $image_link['link_to_image_house'];


$first_image = $section_images['image_link'];
$second_image = $section_images['image_link_two'];



?>

<section id="section-1" class="section-images">

    <div class="container">
        <div class="row">


            <!-- <?php if ($house_image <> '') : ?>
                <img src="<?php echo $house_image['url']; ?>" alt="<?php echo $house_image['title']; ?>" class="section-images-container">
            <?php endif; ?> -->

            <?php if ($name <> '') : ?>
                <h2><?php echo $name; ?></h2>
            <?php endif; ?>

            <!-- <?php if ($description_house <> '') : ?>
                <p><?php echo $description_house; ?></p>
            <?php endif; ?> -->

            <!-- <?php if ($link_to_image_house <> '') : ?>
                <a href="<?php echo $link_to_image_house['url']; ?>" class="image-house-link">
                    <?php echo $link_to_image_house['title']; ?></a>
            <?php endif; ?> -->

        </div>
        <div class="row-two">
            <?php if ($second_image <> '') : ?>
                <a href="<?php echo $second_image['url']; ?>" class="image-work">
                    <?php echo $second_image['title']; ?></a>
            <?php endif; ?>


        </div>



    </div>

</section>