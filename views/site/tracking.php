<?php

use yii\widgets\Breadcrumbs;
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="search-hat">
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
					ОТСЛЕДИТЬ ОТПРАВЛЕНИЕ
				</h2>
			</div>
		</div>
	</section>
<section class="searchbody wrapperbody" id="searchbody">
		<div class="container">
			<div class="searchbody__banner">
				<form action="#" class="searchbody__frame" name="search__form" id="search__form" method="get">
					<img src="img/y-russia.png" alt="">
					<p class="searchbody__text d-flex justify-content-center">
						На этой странице вы можете отследить отправление, указав номер.
					</p>
					<p class="searchbody__text d-flex justify-content-center">
						Введите в поле номер отправления или номер заказа:
					</p>
					<div class="searchbody__formbox d-flex justify-content-center">
						<input type="radio" id="searchradio1" name="search" value="NumInv" checked>
						<label for="searchradio1" id="searchradioLabel1">Номер накладной</label>
						<input type="radio" id="searchradio2" name="search" value="NumOrd">
						<label for="searchradio2" id="searchradioLabel2">Номер заказа</label>
					</div>
					<div class="searchbody__formbox d-flex justify-content-center">
						<input type="text" id="input32" name="input" placeholder="Введите Номер накладной" class="invoice__input input">
					</div>
					<div class="searchbody__formbox d-flex justify-content-center">
						<input type="submit" id="search_btn" value="ЗАПРОСИТЬ" class="contact-box__btn">
					</div>
				</form>
				<img src="img/lupa.png" alt="">
			</div>
			<div class="searchbody__wrapper large-frame news__box">
				<div class="searchbody__formgroup">
					<h2 class="searchbody__title section__title y-line red">
						ВАШЕ ОТПРАВЛЕНИЕ
					</h2>
					<ul class="searchbody__list">
						<li class="searchbody__item d-flex">
							<div class="news__date">
								<span class="date__day">
									21
								</span>
								<span class="date__month">
									11.12
								</span>
							</div>
							<div class="searchbody__text">
								<p class="news__subtitle red">
									Покинуло сортировочный центр
								</p>
								<p>
									Ижевск МСЦ
								</p>
							</div>
						</li>
						<li class="searchbody__item d-flex">
							<div class="news__date">
								<span class="date__day">
									20
								</span>
								<span class="date__month">
									11.12
								</span>
							</div>
							<div class="searchbody__text">
								<p class="news__subtitle red">
									Прибыло в сортировочный центр
								</p>
								<p>
									Ижевск МСЦ
								</p>
							</div>
						</li>
						<li class="searchbody__item d-flex">
							<div class="news__date">
								<span class="date__day">
									19
								</span>
								<span class="date__month">
									11.12
								</span>
							</div>
							<div class="searchbody__text">
								<p class="news__subtitle red">
									Сортировка с 16 июня
								</p>
								<p>
									Ижевск МСЦ
								</p>
							</div>
						</li>
						<li class="searchbody__item d-flex">
							<div class="news__date">
								<span class="date__day">
									19
								</span>
								<span class="date__month">
									11.12
								</span>
							</div>
							<div class="searchbody__text">
								<p class="news__subtitle red">
									Принято
								</p>
								<p>
									Ижевск МСЦ
								</p>
							</div>
						</li>
					</ul>
					<div class="searchbody__down d-flex justify-content-center">
						<p>
							Тип:
							<span class="red">
								Письмо
							</span>
						</p>
						<p>
							Вес:
							<span class="red">
								45
							</span>
							кг.
						</p>
						<p>
							От:
							<span class="red">
								Иванова Ивана
							</span>
							(Москва)
						</p>
						<p>
							Кому:
							<span class="red">
								Петрову Сергею
							</span>
							(Калининград)
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>