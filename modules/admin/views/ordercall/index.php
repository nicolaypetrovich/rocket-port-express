<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\OrdercallSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Запросы звонков';
$this->params['breadcrumbs'][] = $this->title;
?>

<div class="ordercall-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php Pjax::begin(); ?>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            [
                'attribute'=>'name',
                'label'=>'Имя'
            ],
            [
                'attribute'=>'phone',
                'label'=>'Телефон'
            ],
            [
                'attribute'=>'date',
                'label'=>'Дата'
            ],

            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{delete}',

            ],
//            ['class' => 'yii\grid\ActionColumn'],
        ],

    ]); ?>
    <?php Pjax::end(); ?>
</div>

