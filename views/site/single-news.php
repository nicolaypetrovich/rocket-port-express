<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\widgets\DetailView;

/* @var $this yii\web\View */
/* @var $model app\models\News */

$this->title = $model->name;

$this->params['breadcrumbs'][] = ['label' => 'Новости', 'url' => ['news']];
$this->params['breadcrumbs'][] = $this->title;
?>

<section class="client-hat">
    <div class="container">
        <?=
        Breadcrumbs::widget([
            'itemTemplate' => "<li>{link}</li><li><img src=\"img/crumb.png\" alt=\"\"></li>",
            'homeLink' => [
                'label' => Yii::t('yii', 'Главная'),
                'url' => Yii::$app->homeUrl,
            ],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])
        ?>
        <div>
            <h2 class="section__title y-line red mt40">
                <?=$model->name;?>
            </h2>
        </div>
    </div>
</section>
<section class="client wrapperbody" id="client">
    <div class="container">
        <div class="client__wrapper d-flex justify-content-between">
            <div class="client__leftside">
            <?=$model->content;?>
            </div>
        </div>
    </div>
</section>
