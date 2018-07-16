<?php
$this->title = 'Главная страница';
$this->params['breadcrumbs'][] = $this->title; ;?>
      <div class="box-bl">
        <form>
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
            <div class="box-item-inner">
              <input type="text" name="index_block_about[text4]" placeholder="Заполните текст" class="form-control" value="<?= $blockAbout->text4;?>">
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
                                  <img src="<?=$media->getImageOfSize();?>" alt="<?=$media->alt;?>" style="width: 150px">
                                  <input type="hidden" name="image[]" value="<?=$media->id;?>">
                                  <div class="s-boxbtn">
                                      <button type="button" class="btn btn-block btn-danger">Удалить</button>
                                      <button type="button" class="btn btn-block bg-purple media-open-button">Выбрать/Изменить</button>
                                  </div>
                              </div>
                          <?php break; endif; ?>
                      <?php endforeach; ?>
                      <div class="box-text"><textarea class="form-control" placeholder="Заполните текст" name="text[]">  <?= $blockWithIcons['text'.$i]; ?></textarea></div>
                  </div>

              <?php endfor; ?>


              <button type="button" class="btn btn-plus" data-widget="collapse">Добавить</button>
          </div>
          <button type="sibmit" class="btn btn-block btn-warning btn-save">Сохранить</button>
        </form>
      </div>