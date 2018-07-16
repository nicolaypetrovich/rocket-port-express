<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Offices */

$this->title = 'Обновить офис';
$this->params['breadcrumbs'][] = ['label' => 'Офисы', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => 'Просмотреть офис', 'url' => ['view', 'id' => $model->id]];
$this->params['breadcrumbs'][] = 'Редактировать';
?>
<div class="offices-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
