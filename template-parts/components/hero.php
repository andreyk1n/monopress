<?php
// Отримуємо передані дані
$title = $args['title'] ?? '';
$subtitle = $args['subtitle'] ?? '';
$button_text = $args['button_text'] ?? '';
$button_href = $args['button_href'] ?? '';
$image_src = $args['image_src'] ?? '';
$image_alt = $args['image_alt'] ?? '';
?>

<section class="hero">
	<div class="hero__container">
		<div class="hero__content">
			<?php if ($title): ?>
				<h1 class="hero__title"><?= esc_html($title); ?></h1>
			<?php endif; ?>

			<?php if ($subtitle): ?>
				<p class="hero__subtitle"><?= esc_html($subtitle); ?></p>
			<?php endif; ?>

			<?php if ($button_text && $button_href): ?>
				<a href="<?= esc_url($button_href); ?>" class="hero__button"><?= esc_html($button_text); ?></a>
			<?php endif; ?>
		</div>

		<?php if ($image_src): ?>
			<div class="hero__image-wrapper">
				<img src="<?= esc_url($image_src); ?>" alt="<?= esc_attr($image_alt); ?>" class="hero__image">
			</div>
		<?php endif; ?>
	</div>
</section>
