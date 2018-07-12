<?php

use yii\widgets\Breadcrumbs;
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="delivery-hat">
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
                О КОМПАНИИ
            </h2>
        </div>
    </div>
</section>
<section class="aboutus wrapperbody" id="aboutus">
    <div class="container">
        <div class="aboutus__wrapper verylarge-frame news__box">
            <?php echo $content; ?>
            <div class="aboutus__slider">
                <?php foreach ($meta[0]['value'] as $id) { ?>
                    <?php foreach ($media as $value) if($value['id']==$id) { ?>
                        <div class="aboutus__slide">
                            <img src="img/<?php echo $value['name']; ?>" alt="<?php echo $value['alt']; ?>">
                        </div>
                    <?php break; } ?>
                <?php } ?>
            </div>

            <div class="videoframe">
                <?php  echo $meta[1]['value']; ?>
            </div>
        </div>
    </div>
</section>
<section class="newsbuttons">
    <div class="newsbuttons__box">
        <a href="search.html" class="newsbuttons__link">
            <img src="img/search-btn.jpg" alt="Отследить почтовое отправление">
        </a>
        <a href="calculate.html" class="newsbuttons__link">
            <img src="img/calc-btn.jpg" alt="Расчитать тариф перевозки">
        </a>
    </div>
</section>