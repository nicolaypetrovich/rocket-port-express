<?php

use yii\helpers\Html;
use yii\widgets\ActiveForm;
use yii\widgets\Breadcrumbs;
$this->title="Личный кабинет";
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="delivery-hat">
    <div class="container">
        <?=
        Breadcrumbs::widget([
            'itemTemplate' => "<li>{link}</li><li><img src=\"img/crumb.png\" alt=\"\"></li>",
            'homeLink' => [
                'label' => Yii::t('yii', 'Главная'),
                'url' => Yii::$app->homeUrl,
            ],
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ])
        ?>
        <div>
            <h2 class="section__title y-line red mt40">
                ЛИЧНЫЙ КАБИНЕТ
            </h2>
        </div>
    </div>
</section>
<section class="private wrapperbody" id="private">
    <div class="container">
        <div class="private__wrapper large-frame news__box d-flex">

            <div class="private__leftside">
                <a class="main-tab" href="/invoice">ОФОРМИТЬ ОТПРАВЛЕНИЕ</a>
                <ul>
                    <li data-tab=".privat__mo">
                        <a>
                            МОИ ОТПРАВЛЕНИЯ
                        </a>
                    </li>
                    <li data-tab=".privat__mn">
                        <a>
                            МОИ НАКЛАДНЫЕ
                        </a>
                    </li>
                    <li data-tab=".privat__io">
                        <a>
                            ИСТОРИЯ ОТПРАВЛЕНИЙ
                        </a>
                    </li>
                    <li class="active"  data-tab=".privat__ld">
                        <a>
                            ЛИЧНЫЕ ДАННЫЕ
                        </a>
                    </li>
                </ul>
            </div>
            <div class="private__rightside privat__oo" style="display: none">
                <img src="img/russia.png" alt="">
                <h2 class="section__title y-line red">
                    ОФОРМИТЬ ОТПРАВЛЕНИЕ
                </h2>
               
            </div>
            <div class="private__rightside privat__mo" style="display: none">
                <img src="img/russia.png" alt="">
                <h2 class="section__title y-line red">
                    МОИ ОТПРАВЛЕНИЯ
                </h2>
            </div>
            <div class="private__rightside privat__mn" style="display: none">
                <img src="img/russia.png" alt="">
                <h2 class="section__title y-line red">
                    МОИ НАКЛАДНЫЕ
                </h2>
            </div>
            <div class="private__rightside privat__io"  style="display: none">
                <img src="img/russia.png" alt="">
                <h2 class="section__title y-line red">
                    ИСТОРИЯ ОТПРАВЛЕНИЙ
                </h2>
                <script>
                    document.addEventListener("DOMContentLoaded", function(){
                        $("#tags").autocomplete({
                            source: "/get-descr?inn=<?=Yii::$app->user->identity->api_id?>"
                        });
                    });
                </script>
                <form id="history_search_form" class="history_search_form">
                    <span class="history_search_title"></span>
                    <input type="hidden" name="<?= Yii::$app->request->csrfParam; ?>" value="<?= Yii::$app->request->csrfToken; ?>" />
                    <input type="hidden" name="inn" value="<?=Yii::$app->user->identity->api_id?>">
                    <input name="docno" id="tags" class="private__input input">
                    <input type="submit" id="calcProcess" name="Submit" class="contact-box__btn" value="Проверка уведомления">
                </form>
                <div class="response_wrapper">

                </div>
            </div>
            <div class="private__rightside privat__ld active">
                <img src="img/russia.png" alt="">
                <div class="d-flex">
                    <div>
                        <h2 class="section__title y-line red">
                            ЛИЧНЫЕ ДАННЫЕ
                        </h2>
                        <?php
                        $modelUpdate = new \app\models\UpdateUser();
                        $formUpdate = ActiveForm::begin([
                            'id' => 'updateUser',
                            'method' => 'post',
                        ]); ?>
                        <div class="private__item d-flex align-items-center">
                            <p class="private__title red">
                                Ваш Логин
                            </p>
                            <?php echo $user['login'] ?>
                        </div>
                        <div class="private__item d-flex align-items-center">
                            <p class="private__title red">
                                Фамилия Имя Отчество
                            </p>
                            <?= $formUpdate->field($modelUpdate, 'name')
                                ->textInput(['maxlength' => 70, 'value' => $user['name'], 'class' => 'private__input input', 'placeholder' => 'ФИО'])
                                ->label(false);
                            ?>
                        </div>
                        <div class="private__item d-flex align-items-center">
                            <p class="private__title red">
                                Пол
                            </p>
                            <?php $items = ['0' => 'Не выбран', '1' => 'Мужской', '2' => 'Женский']; ?>
                            <?php $modelUpdate->gender = $user['gender'] ?>
                            
                                <div class="select-wrapper body__select">
                                    <?= $formUpdate->field($modelUpdate, 'gender')
                                        ->dropDownList($items)
                                        ->label(false);
                                    ?>
                                </div>
                            
                        </div>
                        <div class="private__item d-flex align-items-center">
                            <p class="private__title red">
                                Адрес для доставки
                            </p>
                            <?= $formUpdate->field($modelUpdate, 'address')
                                ->textInput(['maxlength' => 70, 'value' => $user['address'], 'class' => 'private__input input', 'placeholder' => 'Адрес'])
                                ->label(false);
                            ?>
                        </div>
                        <div class="private__item d-flex align-items-center">
                            <p class="private__title red">
                                Организация
                            </p>
                            <?= $formUpdate->field($modelUpdate, 'organization')
                                ->textInput(['maxlength' => 50, 'value' => $user['organization'], 'class' => 'private__input input', 'placeholder' => 'Организация'])
                                ->label(false);
                            ?>
                        </div>
                        <div class="private__item d-flex align-items-center">
                            <p class="private__title red">
                                Должность
                            </p>
                            <?= $formUpdate->field($modelUpdate, 'position')
                                ->textInput(['maxlength' => 25, 'value' => $user['position'], 'class' => 'private__input input', 'placeholder' => 'Должность'])
                                ->label(false);
                            ?>
                        </div>
                        <div class="private__item d-flex align-items-center">
                            <p class="private__title red">
                                E-mail
                            </p>
                            <?= $formUpdate->field($modelUpdate, 'email')
                                ->textInput(['maxlength' => 35, 'value' => $user['email'], 'class' => 'private__input input', 'placeholder' => 'Email'])
                                ->label(false);
                            ?>
                        </div>
                        <div class="private__item d-flex align-items-center">
                            <p class="private__title red">
                                Моб. телефон
                            </p>
                            <?= $formUpdate->field($modelUpdate, 'mobile_phone')
                                ->textInput(['maxlength' => 14, 'value' => $user['mobile_phone'], 'class' => 'private__input input', 'placeholder' => 'Мобильный телефон'])
                                ->label(false);
                            ?>
                        </div>
                        <div class="private__item d-flex align-items-center">
                            <p class="private__title red">
                                Раб. телефон
                            </p>
                            <?= $formUpdate->field($modelUpdate, 'working_phone')
                                ->textInput(['maxlength' => 14, 'value' => $user['working_phone'], 'class' => 'private__input input', 'placeholder' => 'Рабочий телефон'])
                                ->label(false);
                            ?>
                        </div>
                        <?= Html::submitButton('Сохранить', ['class' => 'contact-box__btn']) ?>
                        <div style="display: none">
                            <?= $formUpdate->field($modelUpdate, 'photo')->fileInput() ?>
                        </div>
                        <label for="updateuser-photo" id="openfileLabel"
                               class="private__avatar d-flex flex-column align-items-center">


                            <div class="avatar__wrap">
                                <img class="js-user-photo" src="uploads/user_images/<?php echo $user['photo']; ?>" alt="Фото">
                            </div>
                            <p id="take_file">
                                Сменить фото
                            </p>
                        </label>
                    </div>
                </div>




                <?php ActiveForm::end(); ?>


                <div class="private__footer">
                    <p class="private__footer_title">
                        СМЕНА ПАРОЛЯ
                    </p>
                    <div class="private__pass d-flex justify-content-between" name="ch_pass__form" id="ch_pass__form">
                        <?php
                        $modelReset = new \app\models\ResetUserPassword();
                        $formReset = ActiveForm::begin([
                            'method' => 'post',
                            'options' => [
                                'encrypt' => 'multipart/form-data',
                                'id' => 'resetPassword'
                            ]

                        ]); ?>
                        <?php
                            if($pass_error=='no'){
                                echo 'Вы ввели неправильный пароль';
                            }else if($pass_error=='yes'){
                                echo 'Пароль был успешно изменен';
                            }?>
                        <?= $formReset->field($modelReset, 'password')
                            ->passwordInput(['id' => 'input35', 'class' => 'private__input input', 'placeholder' => 'Текущий пароль'])
                            ->label(false);
                        ?>
                        <?= $formReset->field($modelReset, 'new_password_repeat')
                            ->passwordInput(['id' => 'input37', 'class' => 'private__input input', 'placeholder' => 'Повторите пароль'])
                            ->label(false);
                        ?>
                        <?= $formReset->field($modelReset, 'new_password')
                            ->passwordInput(['id' => 'input36', 'class' => 'private__input input', 'placeholder' => 'Новый пароль'])
                            ->label(false);
                        ?>

                        <?= Html::submitButton('Сохранить', ['class' => 'contact-box__btn']) ?>

                        <?php ActiveForm::end(); ?>
                    </div>
                </div>
            </div>

        </div>
</section>
<section class="newsbuttons">
    <div class="newsbuttons__box">
        <a href="tracking" class="newsbuttons__link">
            <img src="img/search-btn.jpg" alt="Отследить почтовое отправление">
        </a>
        <a href="calculate" class="newsbuttons__link">
            <img src="img/calc-btn.jpg" alt="Расчитать тариф перевозки">
        </a>
    </div>
</section>