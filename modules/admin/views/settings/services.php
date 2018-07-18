<?php

use yii\helpers\Html;

$this->title = 'Сервисы и услуги';
$this->params['breadcrumbs'][] = $this->title;

?>
<?= Html::a('Перейти на страницу', ['/services'], ['class'=>'btn btn-primary']); ?>
<div class="box-bl">
    <form action="" method="post">
        <div class="box-item">
            <h4>Дополнительные услуги</h4>
            <?php for ($i=0;$i<sizeof($meta->text);$i++): ?>
                <div class="box-item-repeat">
                    <button type="button" class="btn btn-close" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                    <div class="box-img">
                        <?php foreach ($media as $item):?>
                        <?php if($item->id==$meta->image[$i]):?>
                        <img src="<?php echo $item->getImageOfSize();?>" alt="User Image">
                        <input class="test" name="image[]" value="<?=$item->id;?>" type="hidden">
                        <div class="s-boxbtn">
                            <button type="button" class="btn btn-block btn-danger">Удалить</button>
                            <button type="button" class="btn btn-block bg-purple media-open-button">Выбрать/Изменить
                            </button>
                        </div>
                        <?php break; endif; ?>
                        <?php endforeach; ?>
                    </div>
                    <div class="box-text">
                        <textarea class="form-control" placeholder="Заполните текст" name="text[]"
                                                    id="areaf<?=$item->id;?>">
                        <?=$meta->text[$i];?>
                        </textarea></div>
                </div>
            <?php endfor; ?>
            <button type="button" class="btn btn-plus" data-widget="collapse">Добавить</button>
        </div>
        <input id="form-token" type="hidden" name="<?= Yii::$app->request->csrfParam ?>"
               value="<?= Yii::$app->request->csrfToken ?>" autocomplete="off"/>
        <button type="submit" class="btn btn-block btn-warning btn-save">Сохранить</button>
    </form>
</div>