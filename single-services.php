<?php get_header(); ?>

<?php
get_template_part('template-parts/components/hero', null, array(
    'title' => get_the_title(),
    'subtitle' => get_the_excerpt(),
    'button_text' => 'Замовити дзвінок',
    'button_href' => '#form',
    'image_src' => get_the_post_thumbnail_url(),
    'image_alt' => get_the_title(),
));
?>

<section class="service-details">
    <div class="service-details__container">
        <h2 class="service-details__title">Що входить у послугу</h2>
        <p class="service-details__text">
            <?php the_content(); ?>
        </p>
    </div>
</section>

<section class="order-form" id="form">
    <div class="order-form__container">
        <h2 class="order-form__title">Залиште заявку</h2>
        <form action="#" class="order-form__form">
            <div class="order-form__field">
                <label for="name">Ім’я</label>
                <input type="text" id="name" name="name" required />
            </div>
            <div class="order-form__field">
                <label for="phone">Номер телефону</label>
                <input type="tel" id="phone" name="phone" required />
            </div>
            <div class="order-form__field">
                <label for="email">E-mail</label>
                <input type="email" id="email" name="email" required />
            </div>
            <button type="submit" class="order-form__button">Замовити</button>
        </form>
    </div>
</section>

<!-- Якщо потрібна модалка - розкоментуйте -->
<div id="search" class="modal">
    <div class="modal__container">
        <div class="modal-content search">
            <input type="text" placeholder="Введіть запит..." class="search__input">
            <button class="search__button" onclick="document.location='/search.html';">Шукати</button>
        </div>
    </div>
    <span onclick="document.location='#close'; return false;" class="close-overlay"></span>
</div>

</div>
</div>

<?php get_footer(); ?>