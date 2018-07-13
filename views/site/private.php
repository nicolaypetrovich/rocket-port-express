<?php

use app\models\Media;
use yii\widgets\ActiveForm;
use yii\helpers\Html;
?>
	<section class="private-hat">
		<div class="container">
			<ul class="crumbs">
				<li>
					<a href="/">
						Главная
					</a>
				</li>
				<li>
					<img src="img/crumb.png" alt="">
				</li>
				<li>
					<a href="#">
						Личный кабинет
					</a>
				</li>
			</ul>
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
					<ul>
						<li class="active" data-tab=".privat__oo">
							<a>
								ОФОРМИТЬ ОТПРАВЛЕНИЕ
							</a>
						</li>
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
						<li data-tab=".privat__ld">
							<a>
								ЛИЧНЫЕ ДАННЫЕ
							</a>
						</li>
					</ul>
				</div>
				<div class="private__rightside privat__oo">
					<img src="img/russia.png" alt="">
					<h2 class="section__title y-line red">
						ОФОРМИТЬ ОТПРАВЛЕНИЕ
					</h2>
				</div>
				<div class="private__rightside privat__mo">
					<img src="img/russia.png" alt="">
					<h2 class="section__title y-line red">
						МОИ ОТПРАВЛЕНИЯ
					</h2>
				</div>
				<div class="private__rightside privat__mn">
					<img src="img/russia.png" alt="">
					<h2 class="section__title y-line red">
						МОИ НАКЛАДНЫЕ
					</h2>
				</div>
				<div class="private__rightside privat__io">
					<img src="img/russia.png" alt="">
					<h2 class="section__title y-line red">
						ИСТОРИЯ ОТПРАВЛЕНИЙ
					</h2>
				</div>
                <?php
                $model= new \app\models\Users();
                $form = ActiveForm::begin([
                    'method' => 'post',
                    'options' => [
                            'encrypt' => 'multipart/form-data',
                    ]

                ]); ?>
                <div class="private__rightside privat__ld">
                    <img src="img/russia.png" alt="">
                    <div class="d-flex">
                        <div>
                            <h2 class="section__title y-line red">
                                ЛИЧНЫЕ ДАННЫЕ
                            </h2>
                            <div class="private__item d-flex align-items-center">
                                <p class="private__title red">
                                    Ваш уникальный Id
                                </p>
                                User_<?php echo $user['id']?>
                            </div>
                            <div class="private__item d-flex align-items-center">
                                <p class="private__title red">
                                    Фамилия Имя Отчество
                                </p>
                                    <?= $form->field($model, 'name')
                                        ->textInput(['maxlength' => 70, 'value'=>$user['name'], 'class' => 'private__input input', 'placeholder' => 'ФИО'])
                                        ->label(false);
                                    ?>
                            </div>
                            <div class="private__item d-flex align-items-center">
                                <p class="private__title red">
                                    Пол
                                </p>
                                <?php $items = ['0'=>'Не выбран', '1'=>'Мужской', '2'=>'женский'];?>
                                <?php $model->gender = $user['gender'] ?>
                                <div class="select-wrapper body__select">
                                    <div class="select-wrapper body__select">
                                        <?= $form->field($model, 'gender')
                                            ->dropDownList($items)
                                            ->label( false);
                                        ?>
                                    </div>
                                </div>
                            </div>
                            <div class="private__item d-flex align-items-center">
                                <p class="private__title red">
                                    Адрес для доставки
                                </p>
                                <?= $form->field($model, 'address')
                                    ->textInput(['maxlength' => 70, 'value'=>$user['address'], 'class' => 'private__input input', 'placeholder' => 'Адрес'])
                                    ->label(false);
                                ?>
                            </div>
                            <div class="private__item d-flex align-items-center">
                                <p class="private__title red">
                                    Организация
                                </p>
                                <?= $form->field($model, 'organization')
                                    ->textInput(['maxlength' => 50, 'value'=>$user['organization'], 'class' => 'private__input input', 'placeholder' => 'Организация'])
                                    ->label(false);
                                ?>
                            </div>
                            <div class="private__item d-flex align-items-center">
                                <p class="private__title red">
                                    Должность
                                </p>
                                <?= $form->field($model, 'position')
                                    ->textInput(['maxlength' => 25, 'value'=>$user['position'], 'class' => 'private__input input', 'placeholder' => 'Должность'])
                                    ->label(false);
                                ?>
                            </div>
                            <div class="private__item d-flex align-items-center">
                                <p class="private__title red">
                                    E-mail
                                </p>
                                <?= $form->field($model, 'email')
                                    ->textInput(['maxlength' => 35, 'value'=>$user['email'], 'class' => 'private__input input', 'placeholder' => 'Email'])
                                    ->label(false);
                                ?>
                            </div>
                            <div class="private__item d-flex align-items-center">
                                <p class="private__title red">
                                    Моб. телефон
                                </p>
                                <?= $form->field($model, 'mobile_phone')
                                    ->textInput(['maxlength' => 14, 'value'=>$user['mobile_phone'], 'class' => 'private__input input', 'placeholder' => 'Мобильный телефон'])
                                    ->label(false);
                                ?>
                            </div>
                            <div class="private__item d-flex align-items-center">
                                <p class="private__title red">
                                    Раб. телефон
                                </p>
                                <?= $form->field($model, 'working_phone')
                                    ->textInput(['maxlength' => 14, 'value'=>$user['working_phone'], 'class' => 'private__input input', 'placeholder' => 'Рабочий телефон'])
                                    ->label(false);
                                ?>
                            </div>
                        </div>
                        <div style="display: none">
                            <?= $form->field($model, 'photo')->fileInput()->label(false); ?>
                        </div>
                        <label for="users-photo" id="openfileLabel" class="private__avatar d-flex flex-column align-items-center">


                            <div class="avatar__wrap">
                                <img src="uploads/user_images/<?php echo $user['photo']; ?>" alt="Фото">
                            </div>
                            <p>
                                Сменить фото
                            </p>
                        </label>
                    </div>
                    <div class="private__footer">
                        <p class="private__footer_title">
                            СМЕНА ПАРОЛЯ
                        </p>
                        <div class="private__pass d-flex justify-content-between" name="ch_pass__form" id="ch_pass__form">

                            <?= $form->field($model, 'password')
                                ->textInput(['id'=>'input35', 'class' => 'private__input input', 'placeholder' => 'Текущий пароль'])
                                ->label(false);
                            ?>
                            <?= $form->field($model, 'password')
                                ->textInput(['id'=>'input36', 'class' => 'private__input input', 'placeholder' => 'Новый пароль'])
                                ->label(false);
                            ?>
                            <?= $form->field($model, 'password')
                                ->textInput(['id'=>'input37', 'class' => 'private__input input', 'placeholder' => 'Повторите пароль'])
                                ->label(false);
                            ?>

                            <?= Html::submitButton('Сохранить', ['class' => 'contact-box__btn']) ?>
                        </div>
                    </div>
                </div>
                <?php ActiveForm::end(); ?>
		</div>
	</section>
	<section class="newsbuttons">
		<div class="newsbuttons__box">
			<a href="search.html" class="newsbuttons__link">
				<img src="img/search-btn.jpg" alt="Отследить почтовое отправление">
			</a>
			<a href="calculate.html" class="newsbuttons__link">
				<img src="img/calc-btn.jpg" alt="Расчитать тариф перевозки">
			</a>
		</div>
	</section>