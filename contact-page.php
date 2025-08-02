<?php
/*
Template Name: Contact page
*/
get_header();
?>

<?php
get_template_part('template-parts/components/hero', null, array(
    'title' => 'Зв\'яжіться з нами',
    'subtitle' => 'Ми завжди відкриті до співпраці, запитань і нових можливостей.',
    'button_text' => '',
    'button_href' => '',
    'image_src' => get_template_directory_uri() . '/images/img.svg',
    'image_alt' => 'Контакти MonoPress',
));
?> 

<?php get_footer(); ?>