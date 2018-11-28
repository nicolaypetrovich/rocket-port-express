<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $searchModel app\modules\admin\models\UsersSearch */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Пользователи';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="users-index">

    <h1><?= Html::encode($this->title) ?></h1>
    <?php // echo $this->render('_search', ['model' => $searchModel]); ?>

    <p>
        <?= Html::a('Добавить пользователя', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            //'id',
            'name',
            'api_id',
            //'gender',
            [
                'attribute' => 'photo',
                'label'=>'Заголовок',
                'format' => 'raw',
                'value' => function ($data) {
                    return '<img class="admin_user_image" src="../../uploads/user_images/'.$data->photo.'">';
                },
            ],
            //'address',
            'organization',
            //'position',
            'email:email',
            'mobile_phone',
            'working_phone',
            //'password',
            //'auth_key',
            //'access_token',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
</div>
