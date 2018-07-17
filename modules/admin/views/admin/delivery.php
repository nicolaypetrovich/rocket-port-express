<div class="box-bl">
    <form action="/admin/admin/delivery" method="POST">
        <input type="hidden" value="<?php echo Yii::$app->request->getCsrfToken() ?>" name="_csrf">
        <div class="box-item">
            <div class="box-textarea"><textarea class="form-control"
                                                placeholder="Введите текст"
                                                name="delivery[content]"><?= $content['content'] ?></textarea></div>

            <div class="box-item-del">
                <h3>Здесь лежат какие-то настройки доставки</h3>
                <button id="insertrepeater">
                    Вставить повторитель
                </button>
                <div class="box-item-del-inner">
                    <button type="button" class="btn btn-close" data-widget="remove"><i class="fa fa-times"></i>
                    </button>
                    <input type="text" placeholder="Введите данные" class="form-control">
                    <div class="checkbox">
                        <label>
                            <input type="checkbox"> Отображать список с треугольниками
                        </label>
                    </div>
                    <div class="box-item-del-data">
                        <button type="button" class="btn btn-close" data-widget="remove"><i class="fa fa-times"></i>
                        </button>
                        <input type="text" placeholder="Введите данные" class="form-control first">
                        <input type="text" placeholder="Введите данные" class="form-control second">
                    </div>
                    <button type="button" class="btn btn-plus-second" data-widget="collapse">Добавить</button>
                </div>
                <?php if ($content['repeater']) { $i = 1;
                    foreach ($content['repeater'] as $key1 => $val1) {

                        ?>
                        <div class="box-item-del-inner active">
                            <button type="button" class="btn btn-close" data-widget="remove"><i class="fa fa-times"></i>
                            </button>
                            <input type="text" placeholder="Введите данные" class="form-control"
                                   value="<?= $val1['title'] ?>" name="delivery[repeater][<?= $i ?>][title]">
                            <div class="checkbox">
                                <label>
                                    <input type="checkbox" <?php if ($val1['liststyle']) {
                                        echo 'checked';
                                    }; ?> name="delivery[repeater][<?= $i ?>][liststyle]"> Отображать список с
                                    треугольниками
                                </label>
                            </div>
                            <div class="box-item-del-data">
                                <button type="button" class="btn btn-close" data-widget="remove"><i
                                            class="fa fa-times"></i>
                                </button>
                                <input type="text" placeholder="Введите данные" class="form-control first">
                                <input type="text" placeholder="Введите данные" class="form-control second">
                            </div>
                            <?php if ($val1['repeater']) { $r = 1;
                                foreach ($val1['repeater'] as $key2 => $val2) {

                                     ?>
                                    <div class="box-item-del-data active">
                                        <button type="button" class="btn btn-close" data-widget="remove"><i
                                                    class="fa fa-times"></i>
                                        </button>
                                        <input type="text" placeholder="Введите данные" class="form-control first"
                                               value="<?= $val2['char'] ?>"
                                               name="delivery[repeater][<?= $i ?>][repeater][<?= $r ?>][char]">
                                        <input type="text" placeholder="Введите данные" class="form-control second"
                                               value="<?= $val2['value'] ?>"
                                               name="delivery[repeater][<?= $i ?>][repeater][<?= $r ?>][value]">
                                    </div>
                                <?php $r++; }; $i++;
                            };  ?>
                            <button type="button" class="btn btn-plus-second" data-widget="collapse">Добавить</button>
                        </div>
                    <?php };
                }; ?>
                <button type="button" class="btn btn-plus-first" data-widget="collapse">Добавить</button>
            </div>
        </div>
        <button type="submit" class="btn btn-block btn-warning btn-save">Сохранить</button>
    </form>
</div>

