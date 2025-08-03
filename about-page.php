<?php
/*
Template Name: About page
*/
get_header();
?>

<?php
get_template_part('template-parts/components/hero', null, array(
    'title' => 'Ми — команда, що створює майбутнє бізнесу',
    'subtitle' => 'Об\'єднуємо досвід, технології та пристрасть, щоб допомагати підприємцям зростати та досягати нових вершин.',
    'button_text' => '',
    'button_href' => '',
    'image_src' => get_the_post_thumbnail_url(),
    'image_alt' => 'MonoPress',
));
?>

<?php get_footer(); ?>