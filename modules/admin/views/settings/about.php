<?php
$this->title = 'О компании';
$this->params['breadcrumbs'][] = $this->title; ;?>
<div class="box-bl">
  <form action="" method="post">
    <div class="box-item">
        <?php foreach ($meta['about_slider']['value'] as $id) { ?>
            <?php foreach ($media as $value) if($value['id']==$id) { ?>
                <div class="box-item-repeat">
                    <button type="button" class="btn btn-close" data-widget="remove"><i class="fa fa-times"></i></button>
                    <div class="box-img">
                        <img src="<?php echo $value->getImageOfSize(); ?>" alt="<?php echo $value->alt; ?>">
                        <input class="test" name="slider[]" value="<?=$id;?>" type="hidden">
                        <div class="s-boxbtn">
                            <button type="button" class="btn btn-block btn-success">Загрузить</button>
                            <button type="button" class="btn btn-block btn-danger">Удалить</button>
                            <button type="button" class="btn btn-block bg-purple media-open-button">Изменить</button>
                        </div>
                    </div>
                </div>
                <?php break; } ?>
        <?php } ?>

      <button type="button" class="btn btn-plus" data-widget="collapse">Добавить</button>
    </div>
    <div class="box-item">
      <div class="box-textarea">
          <textarea class="form-control" placeholder="Введите текст" name="content">
              <?=$content;?>
          </textarea>
      </div>
    </div>
    <div class="box-item">
      <div class="box-video">
        <input type="text" name="video" placeholder="Введите iframe с видео" >
        <div class="timeline-item">
          <div class="timeline-body">
            <div class="embed-responsive embed-responsive-16by9">
                <?php  echo $meta['about_video']['value']; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
      <input id="form-token" type="hidden" name="<?=Yii::$app->request->csrfParam?>"
             value="<?=Yii::$app->request->csrfToken?>" autocomplete="off"/>
    <button type="submit" class="btn btn-block btn-warning btn-save">Сохранить</button>
  </form>
</div>