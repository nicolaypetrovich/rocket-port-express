<?php

use yii\helpers\Html;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\Users */

$this->title = $model->name;
$this->params['breadcrumbs'][] = ['label' => 'Пользователи', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-view">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Редактировать', ['update', 'id' => $model->id], ['class' => 'btn btn-primary']) ?>
        <?= Html::a('Удалить', ['delete', 'id' => $model->id], [
            'class' => 'btn btn-danger',
            'data' => [
                'confirm' => 'Вы уверенны что хотите удалить пользователя?',
                'method' => 'post',
            ],
        ]) ?>
    </p>

    <?= DetailView::widget([
        'model' => $model,
        'attributes' => [
            'id',
            'name',
            'login',
            [
                'attribute'=>'gender',
                'label' => 'Пол',
                'value' => function ($data) {
                    if($data == 0) {return 'Не выбрано';};
                    if($data == 1) {return 'Мужской';};
                    if($data == 2) {return 'Женский';};
                },
            ],
            [
                'attribute' => 'photo',
                'label' => 'Фотография',
                'format' => 'raw',
                'value' => function ($data) {
                        if($data->photo)
                    return '<img class="admin_user_image" src="../../uploads/user_images/'.$data->photo.'">';
                        else
                            return 'No image';
                }
            ],
            'address',
            'organization',
            'position',
            'email:email',
            'mobile_phone',
            'working_phone',
//            'password',
//            'auth_key',
//            'access_token',
        ],
    ]) ?>

</div>
