<?php

use yii\helpers\Html;

$this->title = 'Главная страница';
$this->params['breadcrumbs'][] = $this->title; ;?>
<?= Html::a('Перейти на страницу', ['/'], ['class'=>'btn btn-primary']) ?>
      <div class="box-bl">
        <form method="post" action="">
          <div class="box-item">
            <h4>Главный баннер</h4>
              <?php $block2=json_decode($meta['index_block2']->value);?>

            <div class="box-item-inner">
              <h5>заголовок1</h5>
              <input type="text" name="index_block2[textleft1]" placeholder="Заполните текст" value="<?=$block2->textleft1;?>" class="form-control">
            </div>
            <div class="box-item-inner" >
              <h5>заголовок2</h5>
              <input type="text" name="index_block2[textleft2]" placeholder="Заполните текст" value="<?=$block2->textleft2;?>" class="form-control">
            </div>
              <div class="box-item-inner" >
                  <h5>Правый блок1</h5>
                  <input type="text" name="index_block2[textright1]" placeholder="Заполните текст" value="<?=$block2->textright1;?>" class="form-control">
              </div>
              <div class="box-item-inner" >
                  <h5>Правый блок2</h5>
                  <textarea  name="index_block2[textright2]" placeholder="Заполните текст" class="form-control"><?=$block2->textright2;?></textarea>
              </div>
              <?php $blockAbout=json_decode($meta['index_block_about']->value);?>

            <h4>О компании</h4>
              <div class="box-item-inner" >
                  <h5>Заголовок</h5>
                  <input type="text" name="index_block_about[title]" placeholder="Заполните текст" value="<?=$blockAbout->title;?>" class="form-control">
              </div>
            <div class="box-item-inner">
              <textarea name="index_block_about[text1]" class="form-control"><?= $blockAbout->text1;?></textarea>
            </div>
            <div class="box-item-inner">
              <textarea name="index_block_about[text2]" class="form-control"><?= $blockAbout->text2;?></textarea>
            </div>
            <div class="box-item-inner">
              <textarea name="index_block_about[text3]" class="form-control"><?= $blockAbout->text3;?></textarea>
            </div>
              <?php

              //matches[1] because 0 match is full match, while 1 is actual match, flag creates position at index [1] inside of matches array
              preg_match('/<span>(.*?)<\/span>/s', $blockAbout->text4, $matches, PREG_OFFSET_CAPTURE);
              //string before needle(span)
              $expStr=strstr($blockAbout->text4, $matches[0][0], true);

                ?>
            <div class="box-item-inner">
                Большой текст на карте
              <input type="text" name="index_block_about[text4_1]" placeholder="Заполните текст" class="form-control" value="<?= $expStr;?>">
            </div>
              <div class="box-item-inner">
                  Маленький текст на карте
                  <input type="text" name="index_block_about[text4_2]" placeholder="Заполните текст" class="form-control" value="<?= $matches[1][0];?>">
              </div>
            <div class="box-item-inner">
              <input type="text" name="index_block_about[number]" placeholder="Заполните текст" class="form-control" value="<?= $blockAbout->number;?>">
            </div>
              <?php $blockWithIcons = json_decode($meta['index_block_icons']->value,true); ?>
              <?php $icons=json_decode($meta['index_block_icons_images']->value,true);?>
            <h4>Виды доставки</h4>
              <?php for ($i=1;$i<=sizeof($blockWithIcons);$i++):?>
                  <div class="box-item-repeat">
                      <?php /** @var array $icons_media */
                      foreach ($icons_media as $media):?>
                          <?php if($icons['image'.$i]==$media['id']):?>
                              <div class="box-img">
                                  <img src="<?=$media?$media->getImageOfSize():'';?>" alt="<?=$media?$media->alt:'';?>" style="width: 150px">
                                  <input type="hidden" name="index_block_icons_images[image<?=$i;?>]" value="<?=$media?$media->id:'';?>">
                                  <div class="s-boxbtn">
                                      <button type="button" class="btn btn-block bg-purple media-open-button">Выбрать/Изменить</button>
                                  </div>
                              </div>
                          <?php break; endif; ?>
                      <?php endforeach; ?>
                      <div class="box-text"><textarea class="form-control" placeholder="Заполните текст" name="index_block_icons[text<?=$i;?>]">  <?= $blockWithIcons['text'.$i]; ?></textarea></div>
                  </div>

              <?php endfor; ?>


<!--              <button type="button" class="btn btn-plus" data-widget="collapse">Добавить</button>-->
              <div class="box-item-inner">
                  <h5>Заголовок блока с новостями</h5>
                  <input type="text" name="index_news_title" placeholder="Заполните текст" class="form-control" value="<?= $meta['index_news_title']->value;?>">
              </div>
          </div>
            <input id="form-token" type="hidden" name="<?=Yii::$app->request->csrfParam?>"
                   value="<?=Yii::$app->request->csrfToken?>" autocomplete="off"/>
          <button type="submit" class="btn btn-block btn-warning btn-save">Сохранить</button>

        </form>
      </div>