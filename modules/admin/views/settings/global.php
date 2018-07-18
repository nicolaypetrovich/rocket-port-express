<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\SettingsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Глобальные настройки';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="box-bl">
    <form action="" method="post">
        <div class="box-item">
            <h4>Настройки header</h4>
            <div class="box-item-inner">
                <h5>Логотип</h5>
                <div class="box-img">

                    <img src="<?php echo $meta['global_logo']->media?$meta['global_logo']->media->getImageOfSize():'';?>" alt="User Image">
                    <input type="hidden" name="global_logo" value="<?=$meta['global_logo']->value;?>">
                    <div class="s-boxbtn">
                        <button type="button" class="btn btn-block btn-danger">Удалить</button>
                        <button type="button" class="btn btn-block bg-purple media-open-button">Выбрать/Изменить</button>
                    </div>
                </div>
            </div>
            <div class="box-item-inner">
                <h5>Заголовок заглавный</h5>
                <input type="text" name="global_headertext1" placeholder="Заполните текст" class="form-control" value="<?php echo ($meta['global_headertext1']['value']); ?>">
            </div>
            <div class="box-item-inner">
                <h5>Заголовок строчный</h5>
                <input type="text" name="global_headertext2" placeholder="Заполните текст" class="form-control" value="<?php echo ($meta['global_headertext2']['value']); ?>">
            </div>
            <div class="box-item-inner">
                <h5>Телефон</h5>
                <input type="text" name="global_phone" placeholder="Заполните текст" class="form-control" value="<?php echo ($meta['global_phone']['value']); ?>">
            </div>
            <div class="box-item-inner" >
                <h5>Почта</h5>
                <input type="text" name="global_email" placeholder="Заполните текст" class="form-control" value="<?php echo ($meta['global_email']['value']); ?>">
            </div>
            <div class="box-item-inner" >
                <h5>Адрес</h5>
                <input type="text" name="global_address" placeholder="Заполните текст" class="form-control" value="<?php echo ($meta['global_address']['value']); ?>">
            </div>
        </div>
        <div class="box-item">
            <h4>Настройки footer</h4>
            <div class="box-item-inner">
                <h5>Copyright</h5>
                <input type="text" name="global_copyright" placeholder="Заполните текст" class="form-control"  value="<?php echo ($meta['global_copyright']['value']); ?>">
            </div>
            <div class="box-item-inner">
                <label>Карта</label>
                <div id="map" class="offices-map"></div>
                <input type="hidden" id="maps_cords" name="global_mainMap" value="<?php echo ($meta['global_mainMap']['value']); ?>">
            </div>
        </div>
        <input id="form-token" type="hidden" name="<?=Yii::$app->request->csrfParam?>"
               value="<?=Yii::$app->request->csrfToken?>" autocomplete="off"/>
        <button type="submit" class="btn btn-block btn-warning btn-save">Сохранить</button>
    </form>
</div>
<script type="text/javascript">
    window.onload=function(){
        /*------map-----------*/
        ymaps.ready(init);
        function init() {

            var mainMapPlacemark,
                mainMapCoords = '<?=$meta['global_mainMap']['value']?>',
                mainMap = new ymaps.Map('map', {
                    center: mainMapCoords.split(","),
                    zoom: 17
                }, {
                    searchControlProvider: 'yandex#search'
                });
            mainMapPlacemark = createPlacemark(mainMapCoords.split(","));
            mainMap.geoObjects.add(mainMapPlacemark);
            getAddress(mainMapCoords, mainMapPlacemark);
            // check for contact page (render contact page maps if render function exists)
            mainMap.events.add('click', function (e) {
                var coords = e.get('coords');
                if (mainMapPlacemark) {
                    mainMapPlacemark.geometry.setCoordinates(coords);
                }
                else {
                    mainMapPlacemark = createPlacemark(coords);
                    myMap.geoObjects.add(mainMapPlacemark);
                    mainMapPlacemark.events.add('dragend', function () {
                        getAddress(mainMapPlacemark.geometry.getCoordinates(),mainMapPlacemark);
                    });
                }
                getAddress(coords,mainMapPlacemark);
            });
            mainMapPlacemark.events.add('dragend', function () {

                getAddress(mainMapPlacemark.geometry.getCoordinates(),mainMapPlacemark);
            });

        }

    }
</script>