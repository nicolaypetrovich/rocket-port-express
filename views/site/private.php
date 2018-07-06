<?php $user = Yii::$app->user->identity; ?>
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
							<div class="private__item d-flex align-items-center">
								<p class="private__title red">
									Фамилия Имя Отчество
								</p>
								<p class="private__text">
                                    <?php echo $user['username']?>
								</p>
							</div>
							<div class="private__item d-flex align-items-center">
								<p class="private__title red">
									Пол
								</p>
								<div class="select-wrapper body__select">
									<select name="Пол" id="Sex">
                                        <option <?php if($user['gender']==0){echo 'selected';} ?> value="Неопределенный">Неопределенный</option>
										<option <?php if($user['gender']==1){echo 'selected';} ?> value="Мужской">Мужской</option>
										<option <?php if($user['gender']==2){echo 'selected';} ?> value="Женский">Женский</option>
									</select>
								</div>
							</div>
							<div class="private__item d-flex align-items-center">
								<p class="private__title red">
									Адрес для доставки
								</p>
								<p class="private__text">
                                    <?php echo $user['address']?>
								</p>
							</div>
							<div class="private__item d-flex align-items-center">
								<p class="private__title red">
									Организация
								</p>
								<p class="private__text">
                                    <?php echo $user['organization']?>
								</p>
							</div>
							<div class="private__item d-flex align-items-center">
								<p class="private__title red">
									Должность
								</p>
								<p class="private__text">
                                    <?php echo $user['position']?>
								</p>
							</div>
							<div class="private__item d-flex align-items-center">
								<p class="private__title red">
									E-mail
								</p>
								<p class="private__text">
                                    <?php echo $user['email']?>
								</p>
							</div>
							<div class="private__item d-flex align-items-center">
								<p class="private__title red">
									Моб. телефон
								</p>
								<p class="private__text">
                                    <?php echo $user['mobile_phone']?>
								</p>
							</div>
							<div class="private__item d-flex align-items-center">
								<p class="private__title red">
									Раб. телефон
								</p>
								<p class="private__text">
                                    <?php echo $user['working_phone']?>
								</p>
							</div>
						</div>
						<input type="file" id="openfile" name="openfile" accept="image/jpeg,image/png">
						<label for="openfile" id="openfileLabel" class="private__avatar d-flex flex-column align-items-center">
							<div class="avatar__wrap">
								<img src="img/avatar3.jpg" alt="Фото">
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
						<form action="#" class="private__pass d-flex justify-content-between" name="ch_pass__form" id="ch_pass__form" method="get">
							<input type="password" id="input35" name="input" placeholder="Текущий пароль" required class="private__input input">
							<input type="password" id="input36" name="input" placeholder="Новый пароль" required class="private__input input">
							<input type="password" id="input37" name="input" placeholder="Повторите пароль" required class="private__input input">
							<button type="submit" class="contact-box__btn">
								СОХРАНИТЬ
							</button>
						</form>
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