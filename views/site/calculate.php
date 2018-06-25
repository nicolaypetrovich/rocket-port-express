<?php

use yii\widgets\Breadcrumbs;
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="calcbody-hat">
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