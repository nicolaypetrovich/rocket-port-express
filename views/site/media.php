<?php 

/* @var $this yii\web\View */
/* @var $form yii\bootstrap\ActiveForm */
/* @var $model app\models\ContactForm */

use yii\helpers\Html;
use yii\bootstrap\ActiveForm;

 ?>

<h1>Временная страница загрузки картинок</h1>



<?php $form = ActiveForm::begin(['id' => 'image-form']); ?>

	<?= $form->field($model, 'image')->fileInput(); ?>


	<div class="form-group">
		<?= Html::submitButton('Submit', ['class' => 'btn btn-primary', 'name' => 'contact-button']) ?>
	</div>

<?php ActiveForm::end(); ?>