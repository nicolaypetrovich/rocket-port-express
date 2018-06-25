<?php

use yii\widgets\Breadcrumbs;
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="search-hat">
    <div class="container">
        <?=
        Breadcrumbs::widget([
            'itemTemplate' => "<li>{link}</li><li><img src=\"img/crumb.png\" alt=\"\"></li>",
            'homeLink' => [
                'label' => Yii::t('yii', 'Главная'),
                'url' => Yii::$app->homeUrl,
            ],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])
        ?>
        <div>
            <h2 class="section__title y-line red mt40">
                УСЛУГИ И ТАРИФЫ
            </h2>
        </div>
    </div>
</section>
<section class="services wrapperbody">
    <div class="container">
        <p>Стоимость услуг:</p>
        <div class="d-flex justify-content-between">
            <a href="/delivery" class="services__block delivery__inside">
                <img src="img/y-russia.png" alt="">
                <div class="services__frame">
                    <h2 class="delivery__title section__title rect__title">
                        ДОСТАВКА ПО ГОРОДУ
                    </h2>
                    <img src="img/inside.png" alt="">
                </div>
            </a>
            <a href="/delivery" class="services__block delivery__outside">
                <img src="img/y-russia.png" alt="">
                <div class="services__frame">
                    <h2 class="delivery__title section__title rect__title">
                        МЕЖГОРОД
                    </h2>
                    <img src="img/outside.png" alt="">
                </div>
            </a>
        </div>
    </div>
    <div class="container p0">
        <h2 class="about__title section__title y-line red mt40">
            ДОПОЛНИТЕЛЬНЫЕ УСЛУГИ
        </h2>
        <div class="d-flex justify-content-between">
            <div class="services__additional d-flex flex-column align-items-center">
                <img src="img/addservice1.jpg" alt="Система срочной доставки">
                <p>
                    <span class="red">Система срочной доставки</span>
                    «Из рук в руки»
                </p>
            </div>
            <div class="services__additional d-flex flex-column align-items-center">
                <img src="img/addservice2.jpg" alt="Система срочной доставки">
                <p>
                    Мы являемся официальными представителями бренда
                    <span class="red">«Почта Деда Мороза»</span>
                     по Вологодской области
                </p>
            </div>
            <div class="services__additional d-flex flex-column align-items-center">
                <img src="img/addservice3.jpg" alt="Система срочной доставки">
                <p>
                    <span class="red">Приём корреспонденции</span>
                     у ответственного лица по акту приема-передачи
                </p>
            </div>
        </div>
        <div class="d-flex justify-content-center">
            <div class="services__additional d-flex flex-column align-items-center">
                <img src="img/addservice4.jpg" alt="Система срочной доставки">
                <p>
                    <span class="red">Регулярные отчеты</span>
                     о проделанной работе: ежедневный,
                    ежемесячный (счет, акт выполненных работ)
                </p>
            </div>
            <div class="services__additional d-flex flex-column align-items-center">
                <img src="img/addservice5.jpg" alt="Система срочной доставки">
                <p>
                    <span class="red">Поставка</span>
                     конвертов и уведомлений
                </p>
            </div>
        </div>
    </div>
</section>