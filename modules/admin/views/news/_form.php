<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;

/* @var $this yii\web\View */
/* @var $model app\models\News */
/* @var $form yii\widgets\ActiveForm */
$model->date= date('Y-m-d', strtotime($model->date));


?>

<div class="news-form">

    <?php $form = ActiveForm::begin(); ?>

    <?= $form->field($model, 'title')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'keywords')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'description')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'name')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'content')->textarea(['rows' => 6]) ?>

    <?= $form->field($model, 'date')->textInput() ?>

    <?= $form->field($model, 'shortdesc')->textInput(['maxlength' => true]) ?>

    <?= $form->field($model, 'slug')->textInput(['maxlength' => true]) ?>

    <div class="box-item-inner">
        <div class="box-img">
            <img src="<?php echo $model->media->getImageOfSize(); ?>" alt="User Image">
                <?= $form->field($model, 'media_id')->hiddenInput(['class' => 'test'])->label(false) ?>
                <div class="s-boxbtn">
                    <button type="button" class="btn btn-block btn-success">Загрузить</button>
                    <button type="button" class="btn btn-block btn-danger">Удалить</button>
                    <button type="button" class="btn btn-block bg-purple media-open-button">Изменить</button>
            </div>
        </div>
    </div>
    <div class="form-group">
        <?= Html::submitButton('Save', ['class' => 'btn btn-success']) ?>
    </div>

    <?php ActiveForm::end(); ?>

</div>
