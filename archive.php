<?php
/*
Template Name: Blog page
*/
get_header();
?>

<?php
get_template_part('template-parts/components/hero', null, array(
    'title' => 'Ідеї, що допомагають бізнесу зростати',
    'subtitle' => 'Актуальні матеріали про фінансове планування, оптимізацію витрат та ефективні закупівлі.',
    'button_text' => '',
    'button_href' => '',
    'image_src' => get_template_directory_uri() . '/images/img.svg',
    'image_alt' => 'Блог MonoPress',
));
?>

<?php get_footer(); ?>