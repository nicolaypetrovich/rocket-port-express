<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Offices */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="offices-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'city')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'working_hours')->textArea(['maxlength' => true]) ?>

    <?= $form->field($model, 'url')->textInput(['maxlength' => true]) ?>

    <div style="display: none">
        <?= $form->field($model, 'map')->textInput(['maxlength' => true, 'id' => 'maps_cords']) ?>
    </div>

    <div id="map" style="width: 100%; height: 450px; margin-bottom: 25px;"></div>

    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>

<script type="text/javascript">
    window.onload=function(){
        ymaps.ready(init);
        function init() {
            var mainMapPlacemark,
                <?php if($model->map){ ?>
                mainMapCoords = '<?=$model->map?>',
                <?php } else { ?>
                mainMapCoords = '0, 0';
                <?php } ?>
                mainMap = new ymaps.Map('map', {
                    center: mainMapCoords.split(","),
                    zoom: 5
                }, {
                    searchControlProvider: 'yandex#search'
                });
            mainMapPlacemark = createPlacemark(mainMapCoords.split(","));
            mainMap.geoObjects.add(mainMapPlacemark);
            getAddress(mainMapCoords, mainMapPlacemark);
            mainMap.events.add('click', function (e) {
                var coords = e.get('coords');
                if (mainMapPlacemark) {
                    mainMapPlacemark.geometry.setCoordinates(coords);
                }
                else {
                    mainMapPlacemark = createPlacemark(coords);
                    myMap.geoObjects.add(mainMapPlacemark);

                }
                getAddress(coords, mainMapPlacemark);
            });
            mainMapPlacemark.events.add('dragend', function () {
                getAddress(mainMapPlacemark.geometry.getCoordinates(), mainMapPlacemark);
            });

        }

    }
</script>
