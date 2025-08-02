<?php
$title = $args['title'] ?? '';
?>
<section class="related">
	<div class="related__container">
        <?php if ($title): ?>
        <h2><?php echo esc_html($title); ?></h2>    
        <?php endif; ?>

		<?php
		$related_query = new WP_Query([
			'posts_per_page' => 5,
			'post__not_in'   => [ get_the_ID() ],
			'post_status'    => 'publish',
			'orderby'        => 'date',
			'order'          => 'DESC',
		]);

		if ( $related_query->have_posts() ) :
			$counter = 0;
			echo '<div class="related__main">';
			while ( $related_query->have_posts() ) : $related_query->the_post();
				$thumb_url = get_the_post_thumbnail_url( get_the_ID(), 'medium' ) ?: get_template_directory_uri() . '/images/placeholder.svg';
				$title     = get_the_title();
				$permalink = get_permalink();
				$excerpt   = get_the_excerpt();
				$tags      = get_the_tags();
				$tag_name  = $tags ? esc_html( $tags[0]->name ) : 'Без мітки';
				$tag_link  = $tags ? get_tag_link( $tags[0]->term_id ) : '#';

				if ( $counter === 0 ) :
		?>
					<a href="<?php echo esc_url( $permalink ); ?>" class="related__image-wrapper">
						<img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php echo esc_attr( $title ); ?>" class="related__image">
					</a>
					<div class="related__content">
						<a href="<?php echo esc_url( $permalink ); ?>" class="related__title">
							<?php echo esc_html( $title ); ?>
						</a>
						<p class="related__description">
							<?php echo esc_html( $excerpt ); ?>
						</p>
						<a href="<?php echo esc_url( $tag_link ); ?>" class="related__tag">
							<?php echo $tag_name; ?>
						</a>
					</div>
				</div><!-- /.related__main -->

				<div class="related__list">
				<?php else : ?>
					<article class="related__item">
						<a href="<?php echo esc_url( $permalink ); ?>" class="related__item-image">
							<img src="<?php echo esc_url( $thumb_url ); ?>" alt="<?php echo esc_attr( $title ); ?>" class="related__thumb">
						</a>
						<div class="related__item-content">
							<a href="<?php echo esc_url( $permalink ); ?>" class="related__item-title">
								<?php echo esc_html( $title ); ?>
							</a>
							<a href="<?php echo esc_url( $tag_link ); ?>" class="related__item-tag">
								<?php echo $tag_name; ?>
							</a>
						</div>
					</article>
				<?php endif;

				$counter++;
			endwhile;
			echo '</div><!-- /.related__list -->';
			wp_reset_postdata();
		endif;
		?>
	</div>
</section>