<!DOCTYPE html>
<html lang="ru">
<head>
	<meta charset="UTF-8">
	<title>Оформить накладную</title>
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
	<section class="invoice-hat">
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
						Оформить накладную
					</a>
				</li>
			</ul>
			<div>
				<h2 class="section__title y-line red mt40">
					ОФОРМИТЬ НАКЛАДНУЮ
				</h2>
			</div>
		</div>
	</section>
	<section class="invoicebody wrapperbody" id="invoicebody">
		<div class="container">
			<p class="invoice__tag">
				На этой странице вы можете оформить электронную накладную, внимательно заполните все поля, введите наиболее полные данные.
			</p>
			<form action="#" class="invoice__form" name="invoice__form" id="invoice__form" method="get">
				<div class="invoice__wrapper large-frame news__box" id="invoice__wrapper1">
					
					<div class="invoice__formgroup" id="invoice__formgroup1">
						<img src="img/russia.png" alt="">
						<h2 class="invoice__title section__title rect__title red">
							ОТПРАВИТЕЛЬ
						</h2>
						<div class="invoice__formbox d-flex justify-content-center">
							<div class="invoice__inputbox d-flex">
								<input type="text" id="input8" name="input" placeholder="ФИО Отправителя" required class="invoice__input input">
								<input type="text" id="input9" name="input" placeholder="Наименование организации" required class="invoice__input input">
								<input type="text" id="input10" name="input" placeholder="Страна, область" required class="invoice__input input">
							</div>
							<div class="invoice__inputbox d-flex">
								<input type="text" id="input11" name="input" placeholder="Город, район" required class="invoice__input input">
								<input type="text" id="input12" name="input" placeholder="Адрес" required class="invoice__input input">
								<input type="number" id="input13" name="input" placeholder="Телефон" required class="invoice__input input">
							</div>
						</div>
					</div>
					<div class="invoice__formgroup">
						<h2 class="invoice__title section__title rect__title red">
							ПОЛУЧАТЕЛЬ
						</h2>
						<div class="invoice__formbox d-flex justify-content-center">
							<div class="invoice__inputbox d-flex">
								<input type="text" id="input14" name="input" placeholder="ФИО Отправителя" required class="invoice__input input">
								<input type="text" id="input15" name="input" placeholder="Наименование организации" required class="invoice__input input">
								<input type="text" id="input16" name="input" placeholder="Страна, область" required class="invoice__input input">
							</div>
							<div class="invoice__inputbox d-flex">
								<input type="text" id="input17" name="input" placeholder="Город, район" required class="invoice__input input">
								<input type="text" id="input18" name="input" placeholder="Адрес" required class="invoice__input input">
								<input type="text" id="input19" name="input" placeholder="Телефон" required class="invoice__input input">
							</div>
						</div>
					</div>
				</div>
				<div class="invoice__wrapper big-frame news__box">
					<div class="invoice__formgroup">
						<h2 class="invoice__title section__title rect__title red">
							ОПИСАНИЕ ОТПРАВЛЕНИЯ
						</h2>
						<div class="invoice__formbox d-flex justify-content-center">
							<input type="radio" id="radio3" name="radioDocs" value="DocTrue" checked>
							<label for="radio3" id="radioLabel3">Документы</label>
							<input type="radio" id="radio4" name="radioDocs" value="DocFalse">
							<label for="radio4" id="radioLabel4">Не документы</label>
						</div>
						<div class="invoice__formbox d-flex justify-content-center">
							<input type="text" id="input20" name="input" placeholder="Описание" class="invoice__input input">
						</div>
						<div class="invoice__formbox d-flex justify-content-around">
							<div class="invoice__formitem formitem">
								<label for="input21">Вес, кг</label>
								<input type="number" id="input21" name="input" max="5000" min="1" required class="small__input input">
							</div>
							<div class="invoice__formitem formitem">
								<label for="input22">Габариты, см</label>
								<div class="inputbox">
									<input type="number" id="input22" name="input" max="200" min="1" required class="small__input input">
									<span>x</span>
									<input type="number" id="input23" name="input" max="200" min="1" required class="small__input input">
									<span>x</span>
									<input type="number" id="input24" name="input" max="200" min="1" required class="small__input input">
								</div>
							</div>
							<div class="formitembox d-flex">
								<div class="invoice__formitem formitem">
									<label for="input25">Объёмный вес, кг</label>
									<input type="number" id="input25" name="input" max="500" min="1" required class="small__input input">
								</div>
								<div class="invoice__formitem formitem">
									<label for="input26">Общий вес</label>
									<input type="number" id="input26" name="input" max="500" min="1" required class="small__input input">
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="invoice__wrapper large-frame news__box">
					<div class="invoice__formgroup" id="serviseView">
						<h2 class="invoice__title section__title rect__title red">
							ВИД СЕРВИСА
						</h2>
						<div class="invoice__formbox d-flex justify-content-center">
							<div class="inputbox">
								<input type="checkbox" id="checkbox1" name="checkbox" value="servise1">
								<label for="checkbox1" id="checkboxLabel1">Служебное</label>
								<input type="checkbox" id="checkbox2" name="checkbox" value="servise2">
								<label for="checkbox2" id="checkboxLabel2">До востребования</label>
							</div>
							<div class="inputbox">
								<input type="checkbox" id="checkbox3" name="checkbox" value="servise3">
								<label for="checkbox3" id="checkboxLabel3">Эконом</label>
								<input type="checkbox" id="checkbox4" name="checkbox" value="servise4">
								<label for="checkbox4" id="checkboxLabel4">Стандарт</label>
							</div>
							<div class="inputbox">
								<input type="checkbox" id="checkbox5" name="checkbox" value="servise5">
								<label for="checkbox5" id="checkboxLabel5">Не срочное</label>
								<input type="checkbox" id="checkbox6" name="checkbox" value="servise6">
								<label for="checkbox6" id="checkboxLabel6">Срочное</label>
							</div>
							<div class="inputbox">
								<input type="checkbox" id="checkbox7" name="checkbox" value="servise7">
								<label for="checkbox7" id="checkboxLabel7">Сверхсрочное</label>
								<input type="checkbox" id="checkbox8" name="checkbox" value="servise8">
								<label for="checkbox8" id="checkboxLabel8">С возвратом</label>
							</div>
						</div>
					</div>
					<div class="invoice__formgroup" id="insurance">
						<div class="invoice__formbox d-flex justify-content-between align-items-center">
							<h2 class="invoice__title section__title rect__title red">
								СТРАХОВАНИЕ
							</h2>
							<div class="inputbox d-flex">
								<input type="radio" id="radio5" name="radioInsurance" value="insuranceTrue" checked>
								<label for="radio5" id="radioLabel5">Нужно</label>
								<input type="radio" id="radio6" name="radioInsurance" value="insuranceFalse">
								<label for="radio6" id="radioLabel6">Не нужно</label>
							</div>
							<div class="inputbox">
								<input type="number" id="input27" name="input" placeholder="Страховая сумма" class="invoice__input input">
								<input type="number" id="input28" name="input" placeholder="Страховой взнос" class="invoice__input input">
							</div>
						</div>
					</div>
					<div class="invoice__formgroup" id="value">
						<div class="invoice__formbox d-flex justify-content-between align-items-center">
							<h2 class="invoice__title section__title rect__title red">
								ОБЪЯВЛЕННАЯ ЦЕННОСТЬ
							</h2>
							<div class="inputbox d-flex">
								<input type="radio" id="radio7" name="radioValue" value="valueTrue" checked>
								<label for="radio7" id="radioLabel7">Нужно</label>
								<input type="radio" id="radio8" name="radioValue" value="valueFalse">
								<label for="radio8" id="radioLabel8">Не нужно</label>
							</div>
							<div class="inputbox">
								<input type="number" id="input29" name="input" placeholder="Сумма" required class="invoice__input input">
							</div>
						</div>
					</div>
					<div class="invoice__formgroup" id="payInfo">
						<h2 class="invoice__title section__title rect__title red">
							СВЕДЕНИЯ ОБ ОПЛАТЕ
						</h2>
						<div class="invoice__formbox d-flex justify-content-center">
							<div class="inputbox">
								<input type="checkbox" id="checkbox9" name="checkbox" value="payInfo1">
								<label for="checkbox9" id="checkboxLabel9">Отправителем</label>
								<input type="checkbox" id="checkbox10" name="checkbox" value="payInfo2">
								<label for="checkbox10" id="checkboxLabel10">Наличные</label>
							</div>
							<div class="inputbox">
								<input type="checkbox" id="checkbox11" name="checkbox" value="payInfo3">
								<label for="checkbox11" id="checkboxLabel11">Получателем</label>
								<input type="checkbox" id="checkbox12" name="checkbox" value="payInfo4">
								<label for="checkbox12" id="checkboxLabel12">Договор</label>
							</div>
							<div class="inputbox">
								<input type="checkbox" id="checkbox13" name="checkbox" value="payInfo5">
								<label for="checkbox13" id="checkboxLabel13">Третьим лицом</label>
								<input type="checkbox" id="checkbox14" name="checkbox" value="payInfo6">
								<label for="checkbox14" id="checkboxLabel14">Гарант.письмо</label>
							</div>
						</div>
						<div class="inputbox">
							<input type="text" id="input30" name="input" placeholder="Код плательщика" min="10" max="10" required class="invoice__input input">
						</div>
					</div>
				</div>
				<div class="invoice__wrapper big-frame news__box">
					<div class="invoice__formgroup" id="instructions">
						<h2 class="invoice__title section__title rect__title red">
							ОСОБЫЕ ИНСТРУКЦИИ
						</h2>
						<div class="invoice__formbox d-flex justify-content-center align-items-center">
							<input type="checkbox" id="checkbox15" name="checkbox" value="inst1">
							<label for="checkbox15" id="checkboxLabel15">Лично в руки</label>
							<input type="checkbox" id="checkbox16" name="checkbox" value="inst2">
							<label for="checkbox16" id="checkboxLabel16">Доставить до</label>
							<input type="text" id="input31" name="input" required class="invoice__input input">
							<input type="checkbox" id="checkbox17" name="checkbox" value="DocTrue">
							<label for="checkbox17" id="checkboxLabel17">Возврат уведомления</label>
							<input type="checkbox" id="checkbox18" name="checkbox" value="inst3">
							<label for="checkbox18" id="checkboxLabel18">В офисе</label>
						</div>
						<div class="invoice__formbox d-flex flex-column">
							<input type="checkbox" id="checkbox19" name="checkbox" value="inst4">
							<label for="checkbox19" id="checkboxLabel19">
								<span>*</span>
								<a href="#">Я ознакомился с политикой в отношении обработки персональных данных</a>
							</label>
							<input type="checkbox" id="checkbox20" name="checkbox" value="DocTrue">
							<label for="checkbox20" id="checkboxLabel20">
								<span>*</span>
								<a href="#">C условиями предоставления сервиса по заполнению электронной накладной ознакомлен.</a>
							</label>
						</div>
						<div class="invoice__formbox d-flex justify-content-center">
							<input type="submit" value="ОТПРАВИТЬ ОПЕРАТОРУ" class="contact-box__btn">
						</div>
					</div>
				</div>
			</form>
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