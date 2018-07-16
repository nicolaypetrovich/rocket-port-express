<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\Users */
/* @var $form yii\widgets\ActiveForm */
?>

<div class="users-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <label class="control-label" for="users-address">Пол</label>
    <?php $items = ['0' => 'Не выбран', '1' => 'Мужской', '2' => 'Женский']; ?>
<!--    --><?php //$model->gender = $model->gender ?>
    <div class="select-wrapper body__select">
        <div class="select-wrapper body__select">
            <?= $form->field($model, 'gender')
                ->dropDownList($items)
                ->label(false);
            ?>
        </div>
    </div>

    <img class="admin_user_image" src="../../uploads/user_images/<?= $model->photo ?>">
<!--    --><?//= $form->field($model, 'photo')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'address')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'organization')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'position')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'email')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'mobile_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'working_phone')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'password')->passwordInput(['maxlength' => true, 'value' => '']) ?>


    <div class="form-group">
        <?= Html::submitButton('Сохранить', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
