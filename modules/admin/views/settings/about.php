<?php
$this->title = 'О компании';
$this->params['breadcrumbs'][] = $this->title; ;?>
<div class="box-bl">
  <form action="" method="post">
    <div class="box-item">
        <?php foreach ($meta['about_slider']['value'] as $id) { ?>
                <div class="box-item-repeat">
                    <button type="button" class="btn btn-close" data-widget="remove"><i class="fa fa-times"></i></button>
                    <div class="box-img">
                        <img src="<?php echo $media[$id]->getImageOfSize(); ?>" alt="<?php echo $media[$id]->alt; ?>">
                        <input class="test" name="slider[]" value="<?=$id;?>" type="hidden">
                        <div class="s-boxbtn">
                            <button type="button" class="btn btn-block btn-danger">Удалить</button>
                            <button type="button" class="btn btn-block bg-purple media-open-button">Загрузить/Изменить</button>
                        </div>
                    </div>
                </div>
        <?php } ?>

      <button type="button" class="btn btn-plus" data-widget="collapse">Добавить</button>
    </div>
    <div class="box-item">
      <div class="box-textarea">
          Контент1
          <textarea class="form-control" placeholder="Первый текстт" name="content1">
              <?=$content->content1;?>
          </textarea>
      </div>
        </br>
        <div class="box-img">
            Картинка разделяющая контент
            <img src="<?php echo $media[$content->content_img]->getImageOfSize(); ?>" alt="">
            <input class="test" name="content_img" value="<?=$content->content_img;?>" type="hidden">
            <div class="s-boxbtn">
                <button type="button" class="btn btn-block btn-danger">Удалить</button>
                <button type="button" class="btn btn-block bg-purple media-open-button">Загрузить/Изменить</button>
            </div>
        </div>
        </br>
        <label>
            Заголовок второй части контента
            <input type="text" name="title_middle" value="<?=$content->title_middle;?>">
        </label>
        </br>
        <div class="box-textarea">
            Контент2
          <textarea class="form-control" placeholder="Второй текст" name="content2">
            <?=$content->content2;?>
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