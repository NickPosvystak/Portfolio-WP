<?php
$show_image_video = get_field('show_image_video');
if ($show_image_video) {
    $main_image = get_field('main_image');
    if ($main_image) {
        $main_image_url = $main_image['url'];
        $main_image_title = $main_image['title'];

        echo '<img src="' . $main_image_url . '" alt="' . $main_image_title . '">';
    } else {
        echo 'Головне зображення відсутнє.';
    }
} else {
    echo 'Відображення зображень та відео вимкнене.';
}
