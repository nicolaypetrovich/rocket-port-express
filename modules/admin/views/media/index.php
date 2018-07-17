<?php

use yii\helpers\Html;
use yii\grid\GridView;
use yii\widgets\Pjax;
/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Изображения';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="media-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <form id="uploadImages" action="/admin/media" method="POST" enctype="multipart/form-data" class="image-upload-form">

        <input type="hidden" name="_csrf" value="<?=Yii::$app->request->getCsrfToken()?>">
        <label for="images_input">Выбрать изображения</label>
        <input id="images_input" type="file" name="Media[images][]" multiple="multiple" accept="image" style="display: none">
        <div id="img_list"><ul></ul></div>
        <input type="submit" value="Загрузить">
    </form>

    <?php Pjax::begin(); ?>

    <p>
        <?//= Html::a('Create Media', ['create'], ['class' => 'btn btn-success']) ?>
    </p>

    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'filterModel' => $searchModel,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

//            'id',
            [
                'attribute'=>'name',
                'label'=>'Изображение',
                'format'=>'raw',
                'value'=>function($data) {
                    return '<img src="'.$data->getImageOfSize(250,250).'">';
                }],
            'title',
            'alt',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>
    <?php Pjax::end(); ?>
</div>

<script>
    window.onload = function(){
        $('#images_input').on('change', function(e){
            if($(this)[0].files.length>20){
                $(this).val("");
                alert('Максимально допустимое количество файлов для одновременной загрузки 15!');
            } else {
                var list = $(this)[0].files;
                $('#img_list ul').empty();
                $.each(list, function(){
                    $('#img_list ul').append('<li>' + this.name + '</li>')
                })
            }
        })
    }

</script>