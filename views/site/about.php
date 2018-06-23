<?php

use yii\widgets\Breadcrumbs;
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
                О КОМПАНИИ
            </h2>
        </div>
    </div>
</section>
<section class="aboutus wrapperbody" id="aboutus">
    <div class="container">
        <div class="aboutus__wrapper verylarge-frame news__box">
            <div class="aboutus__hat d-flex justify-content-between align-items-start">
                <div class="aboutus__box">
                    <p class="news__subtitle red">
                        Заголовок текстовой новости может быть длинным или в две три строки, например, это пример заголовка
                    </p>
                    <p class="news__text">
                        ООО «Экспресс Доставка» является одной из первых частных курьерских компаний Северо-Западного региона, первый лицензиат Министерства РФ по связи и информатизации, осуществляющий деятельность по оказанию услуг почтовой связи на территории Вологодской области.
                    </p>
                    <p class="news__text">
                        Пятнадцатилетняя история и пятнадцатилетний опыт работы на рынке услуг по доставке корреспонденции и грузов по России и миру позволяют предложить нашим клиентам самые выгодные условия сотрудничества.
                    </p>
                </div>
                <img src="img/logo.png" alt="Экспресс доставка">
            </div>
            <div class="aboutus__hat_image d-flex justify-content-center">
                <img src="img/about.jpg" alt="">
            </div>
            <h2 class="about__title section__title y-line red">
                НАШИ ПРЕИМУЩЕСТВА
            </h2>
            <div class="aboutus__box">
                <p class="news__subtitle red">
                    1. Экономия
                </p>
                <p class="news__text">
                    Опыт работы в сфере услуг экспресс-доставки корреспонденции и грузов, совершенствование методов и средств работы, позволяют нашей компании, при высоком качестве оказываемых услуг, предлагать низкие тарифы на доставку.
                </p>
            </div>
            <div class="d-flex justify-content-between">
                <div class="reliability__text">
                    <div>
                        <p class="news__subtitle red">
                            2. Надежность
                        </p>
                        <p class="news__text">
                            Лицензиат Федеральной службы по надзору в сфере массовых коммуникаций, связи и охраны культурного наследия, Министерства РФ по связи и информатизации.
                        </p>
                    </div>
                    <div class="aboutus__y-linebox d-flex align-items-center">
                        <img src="img/reliability1.png" alt="">
                        <p class="news__text mt0">
                            Деятельность компании регулируется действующим российским законодательством, а также нормативными и правовыми актами, международными конвенциями и «Правилами оказания услуг почтовой связи». Деятельность компании регулируется действующим российским законодательством.
                        </p>
                    </div>
                    <div class="aboutus__y-linebox d-flex align-items-center">
                        <img src="img/reliability2.png" alt="">
                        <p class="news__text mt0">
                            Контроль и надзор за деятельностью компании осуществляется Роскомнадзором (ежеквартальные проверки на соответствие предъявляемым требованиям). Деятельность компании регулируется действующим российским законодательством, а также нормативными и правовыми актами.
                        </p>
                    </div>
                </div>
                <div class="reliability__image">
                    <img src="img/boy.png" alt="">
                </div>
            </div>
            <div class="aboutus__box">
                <p class="news__subtitle red">
                    3. Ответственность
                </p>
                <p class="news__text">
                    Наша репутация основывается в первую очередь на высокой степени ответственности перед клиентом за ту работу, которую мы выполняем.
                </p>
                <p class="news__text">
                    Это не только ответственность за соблюдение сроков, но и ответственность за сохранность вложений, и даже за ваше спокойствие и хорошее настроение в процессе сотрудничества с нами!
                </p>
            </div>
            <div class="aboutus__box">
                <p class="news__subtitle red">
                    4. Профессионализм
                </p>
                <p class="news__text">
                    В штате компании работают квалифицированные специалисты, работа которых организована исходя из многолетнего опыта в данной сфере. Мы выполняем курьерскую доставку любой сложности в оптимальные сроки.
                </p>
            </div>
            <div class="aboutus__box">
                <p class="news__subtitle red">
                    5. Оперативность и качество
                </p>
                <p class="news__text">
                    Лицензиат Федеральной службы по надзору в сфере массовых коммуникаций, связи и охраны культурного наследия, Министерства РФ по связи и информатизации.
                </p>
            </div>
            <div class="d-flex justify-content-between align-items-end">
                <div>
                    <div class="aboutus__y-linebox">
                        <p class="news__text">
                            Доставка письма в течение рабочего времени.
                        </p>
                    </div>
                    <div class="aboutus__y-linebox">
                        <p class="news__text">
                            При отсутствии получателя, курьер оставляет извещение в почтовом ящике. Далее два варианта:
                        </p>
                        <div class="d-flex align-items-center">
                            <img src="img/quality.png" alt="">
                            <div>
                                <p class="news__text">
                                    а). доставка писем в вечернее время суток (после 17:00, т.е. не рабочее время).
                                </p>
                                <p class="news__text">
                                    б). по предварительному звонку и просьбе получателя (после первой доставки), повторная может быть произведена по удобному для получателя адресу — бесплатно, или у нас в офисе.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="quality__image">
                    <img src="img/quality-big.jpg" alt="">
                </div>
            </div>
            <div class="aboutus__box">
                <p class="news__text">
                    Уровень доставок корреспонденции в зимнее время достигает — 83-85%, в летнее — 65%, что говорит о качественном сервисе и добросовестном выполнении работы. Письма, которые не были вручены адресату, хранится у нас в офисе в течение одного месяца, после чего возвращаются отправителю. По Вашей просьбе мы возвращаем письмо в любое удобное для Вас время.
                </p>
            </div>
            <div class="aboutus__box">
                <p class="news__subtitle red">
                    6. Информационное сопровождение заказа
                </p>
                <p class="news__text">
                    Наши менеджеры готовы в любой момент предоставить вам информацию о текущем статусе вашего заказа, а после его выполнения, Вы получите необходимые документы и подтверждение о доставке.
                </p>
            </div>
            <div class="aboutus__box">
                <p class="news__subtitle red">
                    7. Готовность выполнить любой — даже не стандартный заказ
                </p>
                <p class="news__text">
                    Поздравить руководителя, коллегу, сотрудника или членов их семей оригинальным способом: сувениром или подарком с прилагаемым письмом / грамотой / приглашением, с использованием эффектной упаковки, тематических конвертов (например, новогодняя рассылка — "елочные" элементы в оформлении). Оригинальное вручение отправляемой посылки добавит изюминку в рассылку корреспонденции и положительно скажется на имидже Вашей организации.
                </p>
            </div>
            <div class="aboutus__box">
                <p class="news__subtitle red">
                    8. Максимальное использование информационных технологий
                </p>
                <p class="news__text">
                    Использование канала связи, исходя из предпочтений клиента: стационарный или мобильный телефон, факс, e-mail, Skype, ICQ.; Использование систем, позволяющих отслеживать путь отправления или груза в любой момент времени.
                </p>
            </div>
            <div class="aboutus__box">
                <p class="news__subtitle red">
                    9. Забота об имидже
                </p>
                <p class="news__text">
                    Наши курьеры корректные, позитивные люди, выгодно подчеркнут деловой имидж организации – партнёра.
                </p>
            </div>
            <div class="aboutus__box">
                <p class="news__subtitle red">
                    10. Индивидуальный подход
                </p>
                <p class="news__text">
                    Для нас не существует понятия мелких заказов и неинтересных клиентов. Индивидуальный подход к каждому клиенту и гибкая система цен позволяют обеспечить максимально эффективное и взаимовыгодное сотрудничество.
                </p>
            </div>
            <div class="aboutus__box">
                <p class="news__subtitle red">
                    11. Мониторинг и анализ деятельности
                </p>
                <p class="news__text">
                    Осуществление систематической работы по сбору и обработке информации оценивающей качество услуг, предоставляемых нашей компанией, а также скрупулезная проработка пожеланий и предложений клиентов, позволяет нам не останавливаться на достигнутом, внедряя новые сервисы.
                </p>
            </div>
            <div class="aboutus__slider">
                <div class="aboutus__slide">
                    <img src="img/slide1.jpg" alt="">
                </div>
                <div class="aboutus__slide">
                    <img src="img/slide2.jpg" alt="">
                </div>
                <div class="aboutus__slide">
                    <img src="img/slide3.jpg" alt="">
                </div>
                <div class="aboutus__slide">
                    <img src="img/avatar3.jpg" alt="">
                </div>
            </div>
            <div class="videoframe">
                <div id="player"></div>
                <div id="thumbnail_container" class="thumbnail_container">
                    <img class="thumbnail" id="thumbnail" src="img/video-bg.jpg" />
                    <a class="start-video"><img width="113" src="img/play-button.png"></a>
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