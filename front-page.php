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


<section class="services" id="services">
	<div class="services__container">
		<h2 class="services__title">Наші послуги</h2>
		<p class="services__subtitle">Комплексні інструменти для управління витратами, закупівлями та фінансами</p>

		<div class="services__grid">
			<div class="services__item">
				<a href="#">
					<img src="https://placehold.co/600x400/" alt="Фінансове планування" class="services__image">
				</a>
				<div class="services__text">
					<a href="#" class="services__item-title">Фінансове планування</a>
					<p>Створення бюджетів, прогнозування грошових потоків та аналітика витрат у зручному інтерфейсі.</p>
				</div>
			</div>

			<div class="services__item">
				<a href="#">
					<img src="https://placehold.co/600x400/" alt="Управління закупівлями" class="services__image">
				</a>
				<div class="services__text">
					<a href="#" class="services__item-title">Управління закупівлями</a>
					<p>Автоматизація запитів на закупівлю, контроль контрактів та прозорість ланцюгів постачання.</p>
				</div>
			</div>

			<div class="services__item">
				<a href="#">
					<img src="https://placehold.co/600x400/" alt="Облік витрат" class="services__image">
				</a>
				<div class="services__text">
					<a href="#" class="services__item-title">Облік витрат</a>
					<p>Збір, верифікація та аналітика витрат співробітників з інтеграцією в бухгалтерські системи.</p>
				</div>
			</div>

			<div class="services__item">
				<a href="#">
					<img src="https://placehold.co/600x400/" alt="Фінансова консолідація" class="services__image">
				</a>
				<div class="services__text">
					<a href="#" class="services__item-title">Фінансова консолідація</a>
					<p>Об’єднання фінансових даних кількох підприємств для точного стратегічного планування.</p>
				</div>
			</div>

			<div class="services__item">
				<a href="#">
					<img src="https://placehold.co/600x400/" alt="Аналітика та звітність" class="services__image">
				</a>
				<div class="services__text">
					<a href="#" class="services__item-title">Аналітика та звітність</a>
					<p>Динамічні звіти та візуалізації для глибокого аналізу фінансових показників у реальному часі.</p>
				</div>
			</div>

			<div class="services__item">
				<a href="#">
					<img src="https://placehold.co/600x400/" alt="Відповідність та податкове планування"
						class="services__image">
				</a>
				<div class="services__text">
					<a href="#" class="services__item-title">Відповідність та податкове планування</a>
					<p>Інструменти для відповідності регуляціям (наприклад, HMRC, e-invoicing) та оптимізації податків.
					</p>
				</div>
			</div>
		</div>
	</div>
</section>

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
