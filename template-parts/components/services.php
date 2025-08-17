<?php
$title = $args['title'] ?? '';
$description = $args['description'] ?? '';
?>

<section class="services" id="services">
    <div class="services__container">
        <?php if ($title): ?>
            <h2 class="services__title"><?php echo esc_html($title); ?></h2>
        <?php endif; ?>
        <?php if ($description): ?>
            <p class="services__subtitle"><?php echo esc_html($description); ?></p>
        <?php endif; ?>

        <div class="services__grid">
            <?php
            $services_query = new WP_Query([
                'post_type' => 'services',
                'posts_per_page' => 6,
                'post_status' => 'publish'
            ]);
            if ($services_query->have_posts()):
                while ($services_query->have_posts()): $services_query->the_post();
                    $image = get_the_post_thumbnail_url(get_the_ID(), 'large');
                    $image_alt = get_the_title();
            ?>
            <div class="services__item">
                <a href="<?php the_permalink(); ?>">
                    <img src="<?php echo esc_url($image ?: 'https://placehold.co/600x400/'); ?>" alt="<?php echo esc_attr($image_alt); ?>" class="services__image">
                </a>
                <div class="services__text">
                    <a href="<?php the_permalink(); ?>" class="services__item-title"><?php the_title(); ?></a>
                    <p><?php echo esc_html(get_the_excerpt()); ?></p>
                </div>
            </div>
            <?php
                endwhile;
                wp_reset_postdata();
            else:
            ?>
            <p>Немає доступних послуг.</p>
            <?php endif; ?>
        </div>
    </div>
</section>