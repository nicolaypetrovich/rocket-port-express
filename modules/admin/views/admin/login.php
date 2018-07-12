<div class="register-logo">
    <a href="../../index2.html"><b>Admin</b>LTE</a>
</div>

<div class="register-box-body">
    <p class="login-box-msg">Login</p>


    <?php use yii\bootstrap\ActiveForm;
    use yii\helpers\Html;

    $fieldOptions1 = [
        'options' => ['class' => 'form-group has-feedback'],
        'inputTemplate' => "{input}<span class='glyphicon glyphicon-envelope form-control-feedback'></span>"
    ];
    $fieldOptions2 = [
        'options' => ['class' => 'form-group has-feedback'],
        'inputTemplate' => "{input}<span class='glyphicon glyphicon-lock form-control-feedback'></span>"
    ]; ?>
    <?php $form = ActiveForm::begin(['id' => 'login-form', 'enableClientValidation' => false]); ?>

    <?= $form
        ->field($model, 'username', $fieldOptions1)
        ->label(false)
        ->textInput(['placeholder' => $model->getAttributeLabel('username')]) ?>

    <?= $form
        ->field($model, 'password', $fieldOptions2)
        ->label(false)
        ->passwordInput(['placeholder' => $model->getAttributeLabel('password')]) ?>

    <div class="row">

        <!-- /.col -->
        <div class="col-xs-12">
            <?= Html::submitButton('Sign in', ['class' => 'btn btn-primary btn-block btn-flat', 'name' => 'login-button']) ?>
        </div>
        <!-- /.col -->
    </div>


    <?php ActiveForm::end(); ?>


</div>
<!-- /.form-box -->