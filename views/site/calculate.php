<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Расчитать стоимость</title>
	<link rel="icon" href="img/favicon.png" type="image/favicon">
	<link rel="shortcut icon" href="img/favicon.png" type="image/favicon">
	<link href="https://fonts.googleapis.com/css?family=PT+Sans:400,700&amp;subset=cyrillic" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700&amp;subset=cyrillic" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="css/magnific-popup.css"/>
	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<link rel="stylesheet" href="css/main.css">
</head>
<body>
	<header class="header" id="header">
	<div class="container">
		<div class="hat-up d-flex justify-content-between">
			<div class="logo-box d-flex justify-content-end align-items-center">
				<a href="/" class="logo"><img src="img/logo.png" alt="Экспресс доставка"></a>
				<h1 class="logo-box__text">
					<span class="red">БЫСТРАЯ И ЭКОНОМИЧНАЯ</span>
					ДОСТАВКА ВАШИХ ДОКУМЕНТОВ И ГРУЗОВ
				</h1>
			</div>
			<div class="contact-box">
				<div class="contact-box__phones">
					<a href="tel:+7(8202)202148" class="contact-box__tel">
						8 (800) 511-98-11
					</a>
				</div>
				<div class="contact-box__links d-flex align-items-center">
					<a href="#ordercall__popup" class="contact-box__btn popup-with-form">
						ЗАКАЗАТЬ ЗВОНОК
					</a>
					<a href="mailto:info@port-express.net" class="contact-box__link">
						info@port-express.net
					</a>
				</div>
			</div>
			<div class="address-box">
				<a href="#entry__popup" class="contact-box__link popup-with-form" id="pencil">
					Личный кабинет
				</a>
				<p class="contact-box__text" id="mail">
					Наш адрес: <br>г. Череповец, ул. <br>К.Маркса, д. 78
				</p>
			</div>
		</div>
		<div class="hat-down">
			<nav class="menu">
				<ul>
					<li>
						<a href="/">
							НА ГЛАВНУЮ
						</a>
					</li>
					<li>
						<a href="about.html">
							О КОМПАНИИ
						</a>
					</li>
					<li>
						<a href="services.html">
							УСЛУГИ И ТАРИФЫ
						</a>
					</li>
					<li>
						<a href="client.html">
							КЛИЕНТАМ
						</a>
					</li>
					<li>
						<a href="contact.html">
							КОНТАКТНАЯ ИНФОРМАЦИЯ
						</a>
					</li>
				</ul>
			</nav>
			<div class="search">
				<input type="text" placeholder="Поиск" class="search__input input">
				<button class="search__btn">
					<img src="img/search.png" alt="Поиск">
				</button>
			</div>
			<div class="triangle t_left"></div>
			<div class="triangle t_right"></div>
		</div>
	</div>
</header>
	<section class="calcbody-hat">
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
						Расчитать стоимость
					</a>
				</li>
			</ul>
			<div>
				<h2 class="section__title y-line red mt40">
					РАСЧИТАТЬ СТОИМОСТЬ ДОСТАВКИ ВАШЕГО ОТПРАВЛЕНИЯ
				</h2>
			</div>
		</div>
	</section>
	<section class="calcbody wrapperbody" id="calcbody">
		<div class="container">
			<div class="calcbody__banner">
				<div class="calcbody__frame">
					<h2 class="calcbody__title section__title rect__title">
						УВАЖАЕМЫЕ КЛИЕНТЫ
					</h2>
					<div class="calcbody__box">
						<p class="calcbody__text">
							Предлагаем вам рассчитать стоимость вашего отправления, выбрать удобный тариф и срок для местной, междугородней и международной доставки. Вы можете заполнить форму и отправить ее нашему оператору, который свяжется с вами в кратчайшие сроки для согласования всех деталей.
						</p>
					</div>
					<div class="calcbody__box">
						<p class="calcbody__text">
							Если Вы не смогли найти необходимый населенный пункт отправки/доставки, <br>пожалуйста, обратитесь в call-центр: 
						</p>
						<p class="calcbody__tel">
							+7(8202) <span class="yellow">20-12 78</span>
						</p>
					</div>
				</div>
				<img src="img/calculate-bg.png" alt="Расчитать">
			</div>
			<div class="calcbody__wrapper large-frame news__box">
				<form action="#" name="calculate__form" id="calculate__form" method="get">
					<div class="calcbody__wrapper_up">
						<img src="img/russia.png" alt="">
						<div class="calcbody__whence">
							<h2 class="section__title y-line red">
								ОТКУДА
							</h2>
							<span>
								Страна:
							</span>
							<div class="select-wrapper body__select">
								<select name="Страна" id="whenceCountry">
									<option selected value="Россия">Россия</option>
									<option value="Беларусь">Беларусь</option>
									<option value="Казахстан">Казахстан</option>
								</select>
							</div>
							<span>
								Населенный пункт
							</span>
							<div class="select-wrapper body__select">
								<select name="Город" id="whenceCity">
									<option selected value="Москва">Москва</option>
									<option value="Минск">Минск</option>
									<option value="Астана">Астана</option>
								</select>
							</div>
						</div>
						<div class="calcbody__arrow">
						</div>
						<div class="calcbody__where">
							<h2 class="section__title y-line red">
								КУДА
							</h2>
							<span>
								Страна:
							</span>
							<div class="select-wrapper body__select">
								<select name="Страна" id="whereCountry">
									<option selected value="Россия">Россия</option>
									<option value="Беларусь">Беларусь</option>
									<option value="Казахстан">Казахстан</option>
								</select>
							</div>
							<span>
								Населенный пункт
							</span>
							<div class="select-wrapper body__select">
								<select name="Город" id="whereCity">
									<option selected value="Москва">Москва</option>
									<option value="Минск">Минск</option>
									<option value="Астана">Астана</option>
								</select>
							</div>
						</div>
					</div>
					<div class="calcbody__wrapper_down">
						<h2 class="section__title red">
							ПАРАМЕТРЫ ДОСТАВКИ
						</h2>
						<div class="calcbody__formbox formbox mt40">
							<div class="calcbody__formitem formitem">
								<label for="input1">Вес, кг</label>
								<input type="number" id="input1" name="input" max="5000" min="1" required class="small__input input">
							</div>
							<div class="calcbody__formitem formitem">
								<label for="input2">Габариты, см</label>
								<div class="calcbody__inputbox align-items-center">
									<input type="number" id="input2" name="input" max="200" min="1" required class="small__input input">
									<span>x</span>
									<input type="number" id="input3" name="input" max="200" min="1" required class="small__input input">
									<span>x</span>
									<input type="number" id="input4" name="input" max="200" min="1" required class="small__input input">
								</div>
							</div>
							<div class="d-flex">
								<div class="calcbody__formitem formitem">
									<label for="input5">Объёмный вес, кг</label>
									<input type="number" id="input5" name="input" max="" min="1" required class="small__input input">
								</div>
								<div class="calcbody__formitem formitem">
									<label for="input6">Отправление</label>
									<input type="text"id="input6" name="input" required class="small__input input">
								</div>
								<div class="calcbody__formitem formitem">
									<label for="input7">Место в отпр.</label>
									<input type="text"id="input7" name="input" required class="small__input input">
								</div>
							</div>
						</div>
						<div class="calcbody__formbox formbox">
							<input type="radio" id="radio" name="radio" value="Fizl" checked>
							<label for="radio" id="radioLabel">Физическое лицо</label>
							<input type="radio" id="radio1" name="radio" value="Yurl">
							<label for="radio1" id="radioLabel1">Юридическое лицо</label>
						</div>
						<div class="calcbody__formbox formbox">
							<button type="submit" class="contact-box__btn">
								РАСЧИТАТЬ
							</button>
						</div>
					</div>
				</form>
			</div>
		</div>
	</section>
	<footer class="footer" id="footer">
		<div>
			<script type="text/javascript" charset="utf-8" async src="https://api-maps.yandex.ru/services/constructor/1.0/js/?um=constructor%3Af68ca9a36edb8070f34f9fae7474370442386ee41851b8f7267328754b6fbb40&amp;width=100%25&amp;height=260&amp;lang=ru_UA&amp;scroll=false"></script>
		</div>
		<div class="container">
			<div class="footer__title red">
				<p>
					КАК НАС НАЙТИ
				</p>
			</div>
			<div class="footer__credits d-flex justify-content-between align-items-center">
				<div class="credits__box">
					<ul class="credits__list d-flex">
						<li class="credits__item">
							<a href="#" class="credits__link red">
								Официальные документы
							</a>
						</li>
						<li class="credits__item">
							<a href="#" class="credits__link red">
								Наши партнёры
							</a>
						</li>
					</ul>
					<p class="credits__text">
						Copyright 2017 Все права защищены
					</p>
				</div>
				<div class="contact-box">
					<div class="contact-box__phones">
						<a href="tel:+7(8202)202148" class="contact-box__tel">
							8 (800) 511-98-11
						</a>
					</div>
					<div class="contact-box__links d-flex align-items-center">
						<p class="contact-box__text">
							г. Череповец, ул. К.Маркса, д. 78
						</p>
						<a href="mailto:info@port-express.net" class="contact-box__link">
							info@port-express.net
						</a>
					</div>
				</div>
				<a href="/" class="logo">
					<img src="img/logo.png" alt="Экспресс доставка">
				</a>
			</div>
		</div>
	</footer>
	<section>
		<div id="ordercall__popup" class="white-popup-block mfp-hide">
			<div class="popup__ordercall popup">
				<form class="form__ordercall d-flex flex-column align-items-center" name="ordercall__form" id="ordercall__form">
					<h2 class="section__title rect__title red">
						ЗАКАЗАТЬ ЗВОНОК
					</h2>
					<div>
						<input type="text" placeholder="ФИО" class="required popup__input input">
					</div>
					<div>
						<input type="tel" placeholder="Телефон" class="required popup__input input phone-mask">
					</div>
					<div class="checkbox-group group-required">
						<input type="checkbox" id="checkbox22" name="checkbox">
						<label for="checkbox22" id="checkboxLabel22" class="pt15 d-flex justify-content-center align-items-center">
							<span>
								Я согласен с
								<a href="#">
									Политикой конфиденциальности
								</a>
								и даю согласие на обработку моих данных
							</span>
						</label>
					</div>
					<button type="submit" class="contact-box__btn">
						ОТПРАВИТЬ
					</button>
				</form>
				<button class="popup-modal-dismiss close-btn">
					<span class="yui1"></span>
					<span class="yui2"></span>
				</button>
			</div>
		</div>
		<div id="entry__popup" class="white-popup-block mfp-hide">
			<div class="popup__entry popup">
				<form class="form__ordercall d-flex flex-column align-items-center" name="entry__form" id="entry__form">
					<h2 class="section__title rect__title red">
						ВХОД В ЛИЧНЫЙ КАБИНЕТ
					</h2>
					<div>
						<input type="text" placeholder="Логин" class="required popup__input input">
					</div>
					<div>
						<input type="password" placeholder="Пароль" class="required popup__input input">
					</div>
					<div class="checkbox-group group-required">
						<input type="checkbox" id="checkbox23" name="checkbox">
						<label for="checkbox23" id="checkboxLabel23" class="pt15 d-flex justify-content-center align-items-center">
							<span>
								Я согласен с
								<a href="#">
									Политикой конфиденциальности
								</a>
								и даю согласие на обработку моих данных
							</span>
						</label>
					</div>
					<div class="d-flex">
						<button type="submit" class="contact-box__btn">
							ВОЙТИ
						</button>
						<a href="#reg__popup" class="contact-box__btn popup-with-form">
							ЗАРЕГЕСТРИРОВАТЬСЯ
						</a>
					</div>
				</form>
				<button type="submit" class="popup-modal-dismiss close-btn">
					<span class="yui1"></span>
					<span class="yui2"></span>
				</button>
			</div>
		</div>
		<div id="reg__popup" class="white-popup-block mfp-hide">
			<div class="popup__reg popup">
				<form class="form__ordercall d-flex flex-column align-items-center" name="reg__form" id="reg__form">
					<img src="img/russia.png" alt="">
					<h2 class="section__title rect__title red">
						ЗАРЕГИСТРИРОВАТЬСЯ
					</h2>
					<div>
						<input type="text" placeholder="ФИО" class="required popup__input input">
					</div>
					<div>
						<input type="text" placeholder="E-mail" class="required email popup__input input">
					</div>
					<div>
						<input type="text" placeholder="Организация (не обязательно)" class="popup__input input">
					</div>
					<div>
						<input type="password" placeholder="Пароль" class="required password popup__input input">
					</div>
					<div>
						<input type="password" placeholder="Повторите пароль" class="required passwordConfirmation popup__input input">
					</div>
					<div class="checkbox-group group-required">
						<input type="checkbox" id="checkbox24">
						<label for="checkbox24" id="checkboxLabel24" class="pt15 d-flex justify-content-center align-items-center">
							<span>
								Я согласен с
								<a href="#">
									Политикой конфиденциальности
								</a>
								и даю согласие на обработку моих данных
							</span>
						</label>
					</div>
					<button type="submit" class="contact-box__btn">
						ОТПРАВИТЬ
					</button>
					<div>
						<input type="checkbox" id="checkbox25">
						<label for="checkbox25" id="checkboxLabel25" class="pt15 d-flex justify-content-center align-items-center">
							<span class="w115">
								Оставаться в системе
							</span>
						</label>
					</div>
				</form>
				<button class="popup-modal-dismiss close-btn">
					<span class="yui1"></span>
					<span class="yui2"></span>
				</button>
			</div>
		</div>
		<div id="faq__popup" class="white-popup-block mfp-hide">
			<div class="popup__faq popup">
				<form class="form__ordercall d-flex flex-column align-items-center" name="faq__form" id="faq__form">
					<img src="img/russia.png" alt="">
					<h2 class="section__title rect__title">
						Задать вопрос службе поддержки
					</h2>
					<div>
						<input type="text" placeholder="ФИО" class="required popup__input input">
					</div>
					<div>
						<input type="text" placeholder="Ваш E-mail" class="required popup__input input">
					</div>
					<div>
						<textarea rows="6" cols="10" maxlength="333" form="faq__form" placeholder="Ваш вопрос" class="feed__input input"></textarea>
					</div>
					<div class="checkbox-group group-required">
						<input type="checkbox" id="checkbox26" name="checkbox">
						<label for="checkbox26" id="checkboxLabel26" class="pt15 d-flex align-items-center">
							<span>
								Я согласен с
								<a href="#">
									Политикой конфиденциальности
								</a>
								и даю согласие на обработку моих данных
							</span>
						</label>
					</div>
					<button type="submit" class="contact-box__btn">
						ОТПРАВИТЬ
					</button>
				</form>
				<img src="img/boy.png" alt="">
				<button class="popup-modal-dismiss close-btn">
					<span class="yui1"></span>
					<span class="yui2"></span>
				</button>
			</div>
		</div>
		<div class="form__success">
			Форма отправлена
		</div>
	</section>
	<script src="js/jquery-3.3.1.js"></script>
	<script src="js/forms.js"></script>
	<script src="js/jquery.maskedinput.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/slick.min.js"></script>
	<script src="js/main.js"></script>
</body>
</html>