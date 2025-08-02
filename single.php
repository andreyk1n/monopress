<?php
get_header();
?>

<div class="single">
	<div class="single__container">
		<h1><?php the_title(); ?></h1>

		<div class="breadcrumbs">
			<a href="/">Головна</a><span>></span><a href="/blog">Блог</a><span>></span>
			<p><?php the_title(); ?></p>
		</div>

		<?php if (has_post_thumbnail()): ?>
			<?php $img_url = get_the_post_thumbnail_url(get_the_ID(), 'full'); ?>
			<img src="<?php echo esc_url($img_url); ?>" alt="<?php the_title_attribute(); ?>" class="hero__image">
		<?php endif; ?>

		<?php the_content(); ?>

	</div>
</div>

<?php

get_footer();
