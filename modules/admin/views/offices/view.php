<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Offices */

$this->title = 'Офис в городе '.$model->city;
$this->params['breadcrumbs'][] = ['label' => 'Офисы', 'url' => ['index']];
$this->params['breadcrumbs'][] = 'Офис в городе '.$model->city;
?>
<div class="offices-view">

    <h1>Просмотр офиса</h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Уверенны что хотите удалить этот офис?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'city',
            'address',
            'phone',
            'email:email',
            [
                'attribute' => 'working_hours',
                'format' => 'raw',

            ],
            'url:url',
            [
                'attribute' => 'map',
                'label' => 'Карта',
                'format' => 'raw',
                'value' => function($data){
                return "<input id='map_coords' type='hidden' value='".$data->map."'>";
                }
            ]
        ],
    ]) ?>
    <div id='map' style="width: 100%; height: 450px;"></div>
<script>

    window.onload=function(){
        ymaps.ready(init);
        function init() {

            var Placemark,
                Coords = $('#map_coords').val();
            coords = Coords.split(',');
            var Map = new ymaps.Map('map', {
                    center: coords,
                    zoom: 5
                }, {
                    searchControlProvider: 'yandex#search'
                });
            Placemark = new ymaps.Placemark(coords, {
                iconCaption: 'поиск...'
            }, {
                preset: 'islands#redDotIconWithCaption',
                draggable: false
            });
            Map.geoObjects.add(Placemark);
            getAddress(coords, Placemark);
        }
    }
</script>
</div>
