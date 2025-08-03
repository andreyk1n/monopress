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