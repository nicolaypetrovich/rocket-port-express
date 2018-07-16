<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['index']];
$this->params['breadcrumbs'][] =$model->id;
?>
<div class="news-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Are you sure you want to delete this item?',
                'method'=>'post'
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [

            [
                'attribute'=>'name',
                'label'=>'Заголовок',
            ],
            'content:ntext',
            [
                'attribute' => 'date',
                'label' => 'Дата',
                'value' => function ($data) {
                    return date('Y-m-d', strtotime($data->date));
                },
            ],
            [
                'attribute'=>'shortdesc',
                'label'=>'Краткое описание',
            ],
            [
                'attribute'=>'slug',
                'label'=>'Slug',
            ],
            'title',
            'keywords',
            'description',
            [
                'attribute' => 'media_id',
                'format' => 'html',
                'label' => 'Изображение',
                'value' => function ($data) {
                    return Html::img($data->media->getImageOfSize());
                },
            ],
        ],
    ]) ?>

</div>
