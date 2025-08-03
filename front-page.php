<?php
get_header();
?>

<?php
get_template_part('template-parts/components/hero', null, array(
	'title' => 'Розвивайте бізнес з легкістю',
	'subtitle' => 'Інструменти для управління фінансами, закупівлями та витратами — усе в одному місці.',
	'button_text' => 'Дізнатися більше',
	'button_href' => '#services',
	'image_src' => get_template_directory_uri() . '/images/img.svg',
	'image_alt' => 'Бізнес рішення',
));
?>

<?php get_template_part('template-parts/components/related', null, array(
	'title' => 'Вас може зацікавити',
)); ?>


<?php get_template_part('template-parts/components/services', null, array(
	'title' => 'Наші послуги',
	'description' => 'Комплексні інструменти для управління витратами, закупівлями та фінансами'
)); ?>

<section class="accordion">
	<div class="accordion__container">
		<h2>Як ефективно керувати фінансами, витратами та закупівлями: поширені питання</h2>
		<div class="accordion__item accordion__item--active">
			<button class="accordion__header">
				<span class="accordion__title">Як вибрати інструмент для управління фінансами?</span>
				<span class="accordion__arrow">+</span>
			</button>
			<div class="accordion__content">
				<p>Існує безліч інструментів для управління фінансами, але найкращий вибір залежить від ваших потреб.
					Важливо враховувати можливості для аналізу, звітності та інтеграції з іншими системами, такими як
					облік витрат, прогнозування та управління грошовими потоками.</p>
			</div>
		</div>
		<div class="accordion__item">
			<button class="accordion__header">
				<span class="accordion__title">Як оптимізувати витрати на закупівлі?</span>
				<span class="accordion__arrow">+</span>
			</button>
			<div class="accordion__content">
				<p>Оптимізація витрат на закупівлі вимагає чіткої стратегії та правильних інструментів. Слід
					зосередитися на виборі постачальників, перегляді умов контрактів та впровадженні технологій для
					автоматизації процесів закупівель. Постійний моніторинг та аналіз допоможуть знизити витрати без
					шкоди для якості.</p>
			</div>
		</div>
		<div class="accordion__item">
			<button class="accordion__header">
				<span class="accordion__title">Що таке фінансова консолідація і чому вона важлива?</span>
				<span class="accordion__arrow">+</span>
			</button>
			<div class="accordion__content">
				<p>Фінансова консолідація — це процес об'єднання фінансових даних кількох компаній в одну звітність. Це
					дозволяє компаніям отримувати чітке уявлення про загальний фінансовий стан, покращує управлінські
					рішення та допомагає дотримуватися фінансових стандартів. Важливо для компаній, що мають кілька
					підрозділів або дочірніх компаній.</p>
			</div>
		</div>
		<div class="accordion__item">
			<button class="accordion__header">
				<span class="accordion__title">Як забезпечити відповідність вимогам щодо подорожніх витрат?</span>
				<span class="accordion__arrow">+</span>
			</button>
			<div class="accordion__content">
				<p>Для забезпечення відповідності вимогам щодо подорожніх витрат важливо розуміти регулювання та
					обмеження, встановлені податковими органами. Це включає правильне документування витрат, врахування
					максимальних лімітів на харчування та транспорт, а також використання стандартних форм для
					звітності.</p>
			</div>
		</div>
	</div>
</section>

<?php get_template_part('template-parts/partials/search'); ?>

</div>
</div>

<?php
get_footer();
