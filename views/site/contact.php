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
foreach ($offices_list as $item) { ?>
    <section class="contact<?=$i?>" id="contact<?=$i?>">
         <div class="container">
             <h3 class="contact__title">
                 <span class="red">
                     Наш адрес в городе
                 </span> <?=$item['city']?>:
             </h3>
             <div class="d-flex">
                 <div class="contact__box_1">
                     <p class="contact__address">
                         <?=$item['address']?>
                     </p>
                     <div class="contact__phones d-flex align-items-center">
                         <div class="contact__phones_box d-flex flex-column">
                             <a href="tel:<?=$item['phone']?>" class="contact-box__tel">
                                 <?=$item['phone']?>
                             </a>
                         </div>
                         <div class="contact__mode">
                             <?=$item['working_hours']?>
                         </div>
                         <div>
                             <div class="contact__mail">
                                 <a href="mailto:<?=$item['email']?>" class="contact__link">
                                     <?=$item['email']?>
                                 </a>
                             </div>
                             <div class="contact__site">
                                 <a href="<?=$item['url']?>" class="contact__link">
                                     <?=$item['url']?>
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
    <section class="map">
        <div class="map-init" id="map<?=$i?>"></div>
        <div class="container">
            <div class="footer__title red">
                <p>
                    <?=$item['city']?>
                </p>
            </div>
        </div>
    </section>
<?php $i++; } ?>
<script type="text/javascript">
    function initCmap(){
        //$i - максимальное количество елементов с картой на странице
        //$s - текущий обрабатываемые елемент
        <?php for($s=0;$s<$i;$s++){ ?>
            //формируем список всех координат и карт (карты стразу рендерим)
            var Placemark<?=$s?>,
                coords<?=$s;?> = '<?=$offices_list[$s]['map']?>',
                yMap<?=$s?> = new ymaps.Map('map<?=$s?>', {
                center: coords<?=$s?>.split(","),
                zoom: 17
            }, {
                searchControlProvider: 'yandex#search'
            });

            //создаем из полученных координат метки на карту
            Placemark<?=$s?> = createPlacemark(coords<?=$s?>.split(","));
            //добавляем на карту метку
            yMap<?=$s?>.geoObjects.add(Placemark<?=$s?>);
            //получаем данные для надписи возле метки
            getAddress(coords<?=$s?>, Placemark<?=$s?>);
        <?php } ?>
    }
</script>
<section class="contact__feedback d-flex">
    <div class="feed__leftside">
        <form class="feed__form" action="" name="feed__form" id="feed__form" method="post">
            <h5>
                ОБРАТНАЯ СВЯЗЬ
            </h5>
            <div>
                <input required type="text" placeholder="Имя*" class="required feed__input input" name="cm_name">
            </div>
            <div>
                <input required type="text" placeholder="Email*" class="required email feed__input input" name="cm_email">
            </div>
            <div>
                <textarea required name="cm_message" rows="6" cols="10" maxlength="333" form="feed__form" placeholder="Комментарий" class="feed__input input"></textarea>
            </div>
            <p>Поля, отмеченные * обязательны для заполнения</p>
            <div class="checkbox-group group-required">
                <input type="checkbox" id="checkbox21" value="True" required>
                <label for="checkbox21" id="checkboxLabel21" class="d-flex justify-content-center align-items-center">
                    <p>
                        Выполняя подтверждение, Вы даете согласие на обработку своих персональных данных
                    </p>
                </label>
            </div>
            <input id="form-token" type="hidden" name="<?= Yii::$app->request->csrfParam ?>"
                   value="<?= Yii::$app->request->csrfToken ?>" autocomplete="off"/>
            <button type="submit" class="contact-box__btn feed-sbmt-btn">
                ОТПРАВИТЬ
            </button>
        </form>
    </div>
    <div class="feed__rightside"></div>
</section>