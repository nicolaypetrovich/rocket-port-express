<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\models\NewsSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Управление новостями';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="news-index">

<!--    <h1>--><?//= Html::encode($this->title) ?><!--</h1>-->
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Создать новости', ['create'], ['class' => 'btn btn-success']) ?>
    </p>
    <?php \yii\widgets\Pjax::begin(); ?>
    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,

        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                    'attribute' => 'img',
                    'format' => 'html',
                    'label' => 'Фото',
                    'value'=>function($data){
                        return   Html::img($data->media->getImageOfSize() ,['width' => '60px']);
                    },


            ],
            [
                'attribute'=>'name',
                'label'=>'Заголовок',
                'headerOptions' => ['style' => 'width:20%']
            ],
            [
                'attribute'=>'shortdesc',
                'label'=>'Краткий текст',
//                'header'=>'Краткий текст',

            ],
            [
                'attribute' => 'date',
                'label' => 'Дата',
                'value' => function ($data) {
                    return date('Y-m-d', strtotime($data->date));
                },
            ],

            ['class' => 'yii\grid\ActionColumn',
                'header'=>'Действия'],
        ],
    ]); ?>
    <?php \yii\widgets\Pjax::end();?>
</div>
