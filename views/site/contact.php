<?php

use yii\widgets\Breadcrumbs;
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="contact-hat">
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
                <?php echo $this->title; ?>
            </h2>
        </div>
    </div>
</section>
<?php
$i=0;
foreach ($content as $item) { $i++; ?>
    <section class="contact<?=$i?>" id="contact<?=$i?>">
         <div class="container">
             <h3 class="contact__title">
                 <span class="red">
                     Наш адрес в городе
                 </span> <?=$item->city?>:
             </h3>
             <div class="d-flex">
                 <div class="contact__box_1">
                     <p class="contact__address">
                         <?=$item->address?>
                     </p>
                     <div class="contact__phones d-flex align-items-center">
                         <div class="contact__phones_box d-flex flex-column">
                             <a href="tel:<?=$item->phone?>" class="contact-box__tel">
                                 <?=$item->phone?>
                             </a>
                         </div>
                         <div class="contact__mode">
                             <?=$item->working_hours?>
                         </div>
                         <div>
                             <div class="contact__mail">
                                 <a href="mailto:<?=$item->email?>" class="contact__link">
                                     <?=$item->email?>
                                 </a>
                             </div>
                             <div class="contact__site">
                                 <a href="<?=$item->link?>" class="contact__link">
                                     <?=$item->link?>
                                 </a>
                             </div>
                         </div>
                     </div>
                 </div>
             </div>
             <div class="d-flex justify-content-end">
                 <h4 class="contact__map_title red">
                     Схема проезда
                 </h4>
             </div>
         </div>
    </section>
    <section class="map<?=$i?>">
        <div>
            <script type="text/javascript" charset="utf-8" async src="<?=$item->map?>"></script>
        </div>
        <div class="container">
            <div class="footer__title red">
                <p>
                    <?=$item->city?>
                </p>
            </div>
        </div>
    </section>
<?php } ?>
<section class="contact__feedback d-flex">
    <div class="feed__leftside">
        <form class="feed__form" name="feed__form" id="feed__form">
            <h5>
                ОБРАТНАЯ СВЯЗЬ
            </h5>
            <div>
                <input type="text" placeholder="Имя*" class="required feed__input input">
            </div>
            <div>
                <input type="text" placeholder="Email*" class="required email feed__input input">
            </div>
            <div>
                <textarea rows="6" cols="10" maxlength="333" form="feed__form" placeholder="Комментарий" class="feed__input input"></textarea>
            </div>
            <p>Поля, отмеченные * обязательны для заполнения</p>
            <div class="checkbox-group group-required">
                <input type="checkbox" id="checkbox21" value="True">
                <label for="checkbox21" id="checkboxLabel21" class="d-flex justify-content-center align-items-center">
                    <p>
                        Выполняя подтверждение, Вы даете согласие на обработку своих персональных данных
                    </p>
                </label>
            </div>
            <button type="submit" class="contact-box__btn">
                ОТПРАВИТЬ
            </button>
        </form>
    </div>
    <div class="feed__rightside"></div>
</section>