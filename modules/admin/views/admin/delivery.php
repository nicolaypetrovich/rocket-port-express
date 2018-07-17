
      <div class="box-bl">
        <form action="/admin/admin/delivery" method="POST">
            <input type="hidden" value="<?php echo Yii::$app->request->getCsrfToken()?>" name="_csrf">
          <div class="box-item">
              <div class="box-textarea"><textarea class="form-control" placeholder="Введите текст"></textarea></div>
              
              <div class="box-item-del">
                <h3>Здесь лежат какие-то настройки доставки</h3>
                <div class="box-item-del-inner">
                  <button type="button" class="btn btn-close" data-widget="remove"><i class="fa fa-times"></i></button>
                  <input type="text" placeholder="Введите данные" class="form-control" name="delivery[1][title]">
                  <div class="checkbox">
                      <label>
                        <input type="checkbox"> Отображать список с треугольниками
                      </label>
                    </div>
                    <div class="box-item-del-data">
                      <button type="button" class="btn btn-close" data-widget="remove"><i class="fa fa-times"></i></button>
                      <input type="text" placeholder="Введите данные" class="form-control first" name="delivery[1][][char]">
                      <input type="text" placeholder="Введите данные" class="form-control second" name="delivery[1][][value]">
                    </div>
                    <button type="button" class="btn btn-plus-second" data-widget="collapse">Добавить</button>
                  </div>
                  <button type="button" class="btn btn-plus-first" data-widget="collapse">Добавить</button>
              </div>
           </div>
          <button type="submit" class="btn btn-block btn-warning btn-save">Сохранить</button>
       </form>
      </div>
 
