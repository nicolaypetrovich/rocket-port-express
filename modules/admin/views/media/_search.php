<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\modules\admin\models\MediaSearch */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="media-search">

    <?php $form = ActiveForm::begin([
        'action' => ['index'],
        'method' => 'get',
    ]); ?>

    <div style="display: inline-block; margin-right: 15px;">
        <?//= $form->field($model, 'id') ?>
    </div>

    <div style="display: inline-block; margin-right: 15px;">
        <?= $form->field($model, 'name')->label('Название картинки') ?>
    </div>

    <div style="display: inline-block; margin-right: 15px;">
        <?= $form->field($model, 'title')->label('Title картинки') ?>
    </div>

    <div style="display: inline-block; margin-right: 15px;">
        <?= $form->field($model, 'alt')->label('Alt картинки') ?>
    </div>


    <div class="form-group" style="display: inline-block;">
        <?= Html::submitButton('Search', ['class' => 'btn btn-primary']) ?>
        <?= Html::resetButton('Reset', ['class' => 'btn btn-default']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
