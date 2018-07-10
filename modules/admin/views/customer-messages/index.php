<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $searchModel app\models\CustomerMessagesSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Сообщения пользователей';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="customer-messages-index">

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
                'header'=>'Имя'
            ],

            [
                'attribute'=>'email',
                'header'=>'Почта',
                'format' => 'raw',
                'value'=>function ($model) {
                    return Html::mailto($model->email, $model->email);
                },
            ],
            [
                'attribute'=>'text',
                'header'=>'Сообщение'
            ],
            [
                'attribute'=>'date',
                'header'=>'Дата'
            ],
            [
                'class' => 'yii\grid\ActionColumn',
                'template' => '{delete}',

            ],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>
