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


        <?php for ($i = 0; $i < sizeof($meta->text); $i++): ?>
            <?php if (($i + 1) == 1 || ($i + 1) % 4 == 0): ?>
                <?php if (sizeof($meta->text) - $i < 3): ?>
                    <div class="d-flex justify-content-center">
                <?php else: ?>
                    <div class="d-flex justify-content-between">
                <?php endif; ?>
            <?php endif; ?>
            <div class="services__additional d-flex flex-column align-items-center">
                <?php foreach ($media as $item): ?>
                    <?php if ($item->id == $meta->image[$i]): ?>
                        <img src="<?php echo $item->getImageOfSize(); ?>" alt="Система срочной доставки">
                        <?php break; endif; ?>
                <?php endforeach; ?>
                <?= $meta->text[$i]; ?>
            </div>
            <?php if ((($i + 1) % 3) == 0 || $i==sizeof($meta->text)): ?>
                </div>
            <?php endif; ?>
        <?php endfor; ?>

    </div>
</section>