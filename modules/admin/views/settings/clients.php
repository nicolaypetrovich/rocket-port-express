<?php
$this->title = 'Клиентам';
$this->params['breadcrumbs'][] = $this->title; ;?>
      <div class="box-bl">
        <form method="post">
          <div class="box-item">
            
            <div class="box-item-repeat">
              <h4><?=$this->title;?></h4>
              <button type="button" class="btn btn-close" data-widget="remove"><i class="fa fa-times"></i></button>

              <div class="box-text"><textarea name="content" class="form-control" placeholder="Заполните текст"><?=json_decode($page->content);?></textarea></div>
           
            </div>
          </div>
            <input id="form-token" type="hidden" name="<?=Yii::$app->request->csrfParam?>"
                   value="<?=Yii::$app->request->csrfToken?>" autocomplete="off"/>
          <button type="submit" class="btn btn-block btn-warning btn-save">Сохранить</button>
        </form>
      </div>
