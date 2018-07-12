<?php
use yii\widgets\ActiveForm;
use yii\helpers\Html;

$user = Yii::$app->user->identity; ?>
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
				<div class="private__rightside privat__ld">
					<img src="img/russia.png" alt="">
					<div class="d-flex">
						<div>
							<h2 class="section__title y-line red">
								ЛИЧНЫЕ ДАННЫЕ
							</h2>

                            <?php
                            $model= new \app\models\Users();
                            $form = ActiveForm::begin([
                                'action' => ['useraccount'],
                                'method' => 'post',

                            ]); ?>

                            <?= $form->field($model, 'name')
                                ->textInput(['maxlength' => 70, 'value'=>$user['name'], 'class' => 'private__input input', 'placeholder' => 'ФИО'])
                                ->label('<p class="private__title red">Фамилия Имя Отчество</p>');
                            ?>
                            <?php $items = ['0'=>'Не выбран', '1'=>'Мужской', '2'=>'женский'];?>
                            <?php $model->gender = $user['gender'] ?>
                            <div class="select-wrapper body__select">
                                <?= $form->field($model, 'gender')
                                    ->dropDownList($items)
                                    ->label("Пол");
                                ?>
                            </div>

                            <?= $form->field($model, 'address')
                                ->textInput(['maxlength' => 70, 'value'=>$user['address'], 'class' => 'private__input input', 'placeholder' => 'Адрес'])
                                ->label('<p class="private__title red">Адрес</p>');
                            ?>
                            <?= $form->field($model, 'organization')
                                ->textInput(['maxlength' => 50, 'value'=>$user['organization'], 'class' => 'private__input input', 'placeholder' => 'Организация'])
                                ->label('<p class="private__title red">Организация</p>');
                            ?>
                            <?= $form->field($model, 'position')
                                ->textInput(['maxlength' => 25, 'value'=>$user['position'], 'class' => 'private__input input', 'placeholder' => 'Должность'])
                                ->label('<p class="private__title red">Должность</p>');
                            ?>
                            <?= $form->field($model, 'email')
                                ->textInput(['maxlength' => 35, 'value'=>$user['email'], 'class' => 'private__input input', 'placeholder' => 'Email'])
                                ->label('<p class="private__title red">Email</p>');
                            ?>
                            <?= $form->field($model, 'mobile_phone')
                                ->textInput(['maxlength' => 14, 'value'=>$user['mobile_phone'], 'class' => 'private__input input', 'placeholder' => 'Мобильный телефон'])
                                ->label('<p class="private__title red">Мобильный телефон</p>');
                            ?>
                            <?= $form->field($model, 'working_phone')
                                ->textInput(['maxlength' => 14, 'value'=>$user['working_phone'], 'class' => 'private__input input', 'placeholder' => 'Рабочий телефон'])
                                ->label('<p class="private__title red">Рабочий телефон</p>');
                            ?>

                            <input type="file" id="openfile" name="openfile" accept="image/jpeg,image/png">
                            <label for="openfile" id="openfileLabel" class="private__avatar d-flex flex-column align-items-center">
                                <div class="avatar__wrap">
                                    <img src="img/avatar3.jpg" alt="Фото">
                                </div>
                                <p>
                                    Сменить фото
                                </p>
                            </label>
                            <div class="private__footer">
                                <p class="private__footer_title">
                                    СМЕНА ПАРОЛЯ
                                </p>
                                <input type="password" id="input35" name="input" placeholder="Текущий пароль" required class="private__input input">
                                <input type="password" id="input36" name="input" placeholder="Новый пароль" required class="private__input input">
                                <input type="password" id="input37" name="input" placeholder="Повторите пароль" required class="private__input input">
                                <?= Html::submitButton('Сохранить', ['class' => 'contact-box__btn']) ?>
                            </div>



                            <?php ActiveForm::end(); ?>

<!--                            <form action="#" class="private__pass d-flex justify-content-between" name="ch_pass__form" id="ch_pass__form" method="get">-->
<!--                                <div class="private__item d-flex align-items-center">-->
<!--                                    <p class="private__title red">-->
<!--                                        Фамилия Имя Отчество-->
<!--                                    </p>-->
<!--                                    <p class="private__text">-->
<!--                                        --><?php //echo $user['name']?>
<!--                                    </p>-->
<!--                                </div>-->
<!--                                <div class="private__item d-flex align-items-center">-->
<!--                                    <p class="private__title red">-->
<!--                                        Пол-->
<!--                                    </p>-->
<!--                                    <div class="select-wrapper body__select">-->
<!--                                        <select name="Пол" id="Sex">-->
<!--                                            <option --><?php //if($user['gender']==0){echo 'selected';} ?><!-- value="Неопределенный">Неопределенный</option>-->
<!--                                            <option --><?php //if($user['gender']==1){echo 'selected';} ?><!-- value="Мужской">Мужской</option>-->
<!--                                            <option --><?php //if($user['gender']==2){echo 'selected';} ?><!-- value="Женский">Женский</option>-->
<!--                                        </select>-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="private__item d-flex align-items-center">-->
<!--                                    <p class="private__title red">-->
<!--                                        Адрес для доставки-->
<!--                                    </p>-->
<!--                                    <p class="private__text">-->
<!--                                        --><?php //echo $user['address']?>
<!--                                    </p>-->
<!--                                </div>-->
<!--                                <div class="private__item d-flex align-items-center">-->
<!--                                    <p class="private__title red">-->
<!--                                        Организация-->
<!--                                    </p>-->
<!--                                    <p class="private__text">-->
<!--                                        --><?php //echo $user['organization']?>
<!--                                    </p>-->
<!--                                </div>-->
<!--                                <div class="private__item d-flex align-items-center">-->
<!--                                    <p class="private__title red">-->
<!--                                        Должность-->
<!--                                    </p>-->
<!--                                    <p class="private__text">-->
<!--                                        --><?php //echo $user['position']?>
<!--                                    </p>-->
<!--                                </div>-->
<!--                                <div class="private__item d-flex align-items-center">-->
<!--                                    <p class="private__title red">-->
<!--                                        E-mail-->
<!--                                    </p>-->
<!--                                    <p class="private__text">-->
<!--                                        --><?php //echo $user['email']?>
<!--                                    </p>-->
<!--                                </div>-->
<!--                                <div class="private__item d-flex align-items-center">-->
<!--                                    <p class="private__title red">-->
<!--                                        Моб. телефон-->
<!--                                    </p>-->
<!--                                    <p class="private__text">-->
<!--                                        --><?php //echo $user['mobile_phone']?>
<!--                                    </p>-->
<!--                                </div>-->
<!--                                <div class="private__item d-flex align-items-center">-->
<!--                                    <p class="private__title red">-->
<!--                                        Раб. телефон-->
<!--                                    </p>-->
<!--                                    <p class="private__text">-->
<!--                                        --><?php //echo $user['working_phone']?>
<!--                                    </p>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <input type="file" id="openfile" name="openfile" accept="image/jpeg,image/png">-->
<!--                            <label for="openfile" id="openfileLabel" class="private__avatar d-flex flex-column align-items-center">-->
<!--                                <div class="avatar__wrap">-->
<!--                                    <img src="img/avatar3.jpg" alt="Фото">-->
<!--                                </div>-->
<!--                                <p>-->
<!--                                    Сменить фото-->
<!--                                </p>-->
<!--                            </label>-->
<!--                        </div>-->
<!--                        <div class="private__footer">-->
<!--                            <p class="private__footer_title">-->
<!--                                СМЕНА ПАРОЛЯ-->
<!--                            </p>-->
<!--							<input type="password" id="input35" name="input" placeholder="Текущий пароль" required class="private__input input">-->
<!--							<input type="password" id="input36" name="input" placeholder="Новый пароль" required class="private__input input">-->
<!--							<input type="password" id="input37" name="input" placeholder="Повторите пароль" required class="private__input input">-->
<!--							<button type="submit" class="contact-box__btn">-->
<!--								СОХРАНИТЬ-->
<!--							</button>-->
<!--						</form>-->
					</div>
				</div>
			</div>
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