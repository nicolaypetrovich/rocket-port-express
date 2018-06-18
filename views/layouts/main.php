<?php

/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->registerLinkTag(['rel' => 'shortcut icon', 'type' => 'image/png', 'href' => 'img/favicon.png']); ?>
    <?php $this->head() ?>
</head>

<body>
    <?php $this->beginBody() ?>
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

    <?= $content ?>

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
    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>