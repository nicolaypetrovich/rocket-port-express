<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\Offices */

$this->title = 'Новый офис';
$this->params['breadcrumbs'][] = ['label' => 'Офисы', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="offices-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
