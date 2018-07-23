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
            <div class="aboutus__hat d-flex flex-column justify-content-between align-items-start">
                <?php echo $content['content1']; ?>
                <?php if (!empty($media[$content['content1_img']])): ?>
                <img src="<?php echo $media[$content['content1_img']] ? $media[$content['content1_img']]->getImageOfSize() : ''; ?>"
                     alt="Экспресс доставка">
                <?php endif; ?>
            </div>

            <div class="aboutus__hat_image d-flex justify-content-center">
                <img src="<?php echo $media[$content['content_img']] ? $media[$content['content_img']]->getImageOfSize() : ''; ?>"
                     alt="<?php echo $media[$content['content_img']]->alt; ?>">
            </div>
            <h2 class="about__title section__title y-line red">
                <?php echo $content['title_middle']; ?>
            </h2>
            <div class="aboutus__box">
                <?php echo $content['content2']; ?>
            </div>


            <div class="aboutus__slider">
                <?php foreach ($meta['about_slider']['value'] as $id) { ?>
                    <?php if (!empty($media[$id])): ?>
                        <div class="aboutus__slide">
                            <img src="<?php echo $media[$id] ? $media[$id]->getImageOfSize() : ''; ?>"
                                 alt="<?php echo $media[$id] ? $media[$id]->alt : ''; ?>">
                        </div>
                    <?php endif; ?>
                <?php } ?>
            </div>

            <div class="videoframe">
                <iframe width="800" height="600" src="<?php echo $meta['about_video']['value']; ?>" frameborder="0"
                        allow="autoplay; encrypted-media" allowfullscreen></iframe>

            </div>
        </div>
    </div>
</section>

<section class="newsbuttons">
    <div class="newsbuttons__box">
        <a href="tracking" class="newsbuttons__link">
            <img src="img/search-btn.jpg" alt="Отследить почтовое отправление">
        </a>
        <a href="calculate" class="newsbuttons__link">
            <img src="img/calc-btn.jpg" alt="Расчитать тариф перевозки">
        </a>
    </div>
</section>