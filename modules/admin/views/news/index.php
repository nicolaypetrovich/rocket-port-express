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

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],
            [
                    'attribute' => 'img',
                    'format' => 'html',
                    'label' => 'Img',
                    'value'=>function($data){
                        return   Html::img($data->media->getImageOfSize() ,['width' => '60px']);
                    },
                    'header'=>'Фото'
            ],
            [
                'attribute'=>'name',
                'header'=>'Заголовок',
                'headerOptions' => ['style' => 'width:20%']
            ],
            [
                'attribute'=>'shortdesc',
                'header'=>'Краткий текст'
            ],
            [
                'attribute'=>'date',
                'header'=>'Дата'
            ],

            ['class' => 'yii\grid\ActionColumn',
                'header'=>'Действия'],
        ],
    ]); ?>
</div>
