<?php

use yii\widgets\Breadcrumbs;
$this->title =(isset(Yii::$app->getRequest()->get("NewsSearch")['title']))?'Поиск':$page->title;
$this->params['breadcrumbs'][] = 'Оформить накладную';
?>
<section class="invoice-hat">
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