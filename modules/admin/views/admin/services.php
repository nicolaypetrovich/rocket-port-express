<?php
$this->title = 'Сервисы и услуги';
$this->params['breadcrumbs'][] = $this->title; ;?>
      <div class="box-bl">
        <form action="" method="post">
          <div class="box-item">
            <div class="box-item-repeat">
              <h4>Дополнительные услуги</h4>
              <button type="button" class="btn btn-close" data-widget="remove"><i class="fa fa-times"></i></button>
              <div class="box-img">
                <img src="dist/img/user1-128x128.jpg" alt="User Image">
                  <input class="test" name="image[]" type="hidden">
                <div class="s-boxbtn">
                  <button type="button" class="btn btn-block btn-danger">Удалить</button>
                  <button type="button" class="btn btn-block bg-purple media-open-button">Загрузить/Изменить</button>
               </div>
              </div>
              <div class="box-text"><textarea class="form-control" placeholder="Заполните текст" name="text[]" id="something"></textarea></div>
           
            </div>
            <button type="button" class="btn btn-plus" data-widget="collapse">Добавить</button>
          </div>
            <input id="form-token" type="hidden" name="<?=Yii::$app->request->csrfParam?>"
                   value="<?=Yii::$app->request->csrfToken?>" autocomplete="off"/>
          <button type="submit" class="btn btn-block btn-warning btn-save">Сохранить</button>
        </form>
      </div>