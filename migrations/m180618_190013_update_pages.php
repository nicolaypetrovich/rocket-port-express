<?php

use yii\db\Migration;

/**
 * Class m180618_190013_update_pages
 */
class m180618_190013_update_pages extends Migration
{
    /**
     * {@inheritdoc}
     */
    public function safeUp()
    {

    }

    /**
     * {@inheritdoc}
     */
    public function safeDown()
    {
        echo "m180618_190013_update_pages cannot be reverted.\n";

        return false;
    }

    // Use up()/down() to run migration code without a transaction.
    public function up()
    {

        $this->insert('pages', [
            'id' => 1,
            'slug' => 'index',
            'title' => 'Port Express',
            'keywords' => '',
            'description' => '',
            'content' => 'Pages content was created from migrations.',
        ]);

        $this->insert('pages', [
            'id' => 2,
            'slug' => 'news',
            'title' => 'Новости',
            'keywords' => 'новости, статьи',
            'description' => 'новостная страница сайта',
            'content' => '',
        ]);

        $this->insert('pages', [
            'id' => 3,
            'slug' => 'calculate',
            'title' => 'Расчет доставки',
            'keywords' => 'доставка, стоимость',
            'description' => 'Расчет стоимости доставки в ваш город',
            'content' => '',
        ]);

        $this->insert('pages', [
            'id' => 4,
            'slug' => 'invoice',
            'title' => 'Оформить накладную',
            'keywords' => 'оформление, накладная',
            'description' => 'Оформление накладной',
            'content' => '',
        ]);

        $this->insert('pages', [
            'id' => 5,
            'slug' => 'tracking',
            'title' => 'Отследить отправление',
            'keywords' => 'отслеживание, отправление',
            'description' => 'Отследить отправление страница',
            'content' => '',
        ]);

        $this->insert('pages', [
            'id' => 6,
            'slug' => 'contact',
            'title' => 'Контакты',
            'keywords' => 'контакты компании',
            'description' => 'страница контактов компании',
            'content' => 'Page content was created from migration',
        ]);

        $content = json_encode('<p>Более 12 лет наша компания расширяет спектр оказываемых услуг, открывает новые транспортные маршруты,<br> сокращает сроки доставки ваших отправлений, совершенствует способы доставки.</p><p><b>Тарифы на услуги с 01 января 2018 года:</b></p><p class="delivery__subtitle">на внутригородскую доставку</p><div class="delivery__block"><div class="delivery__block_hat d-flex justify-content-between"><p class="red">Вид услуги</p><p class="red">Стоимость, руб.</p></div><p class="delivery__block_title"><b>Доставка корреспонденции с уведомлением по реестру (до 100 г):</b></p><div class="d-flex justify-content-between"><div class="delivery__block__text d-flex flex-column ml15"><p>от 100 адресов и выше</p><p>от 50 до 100 адресов</p><p>от 10 до 50 адресов</p><p>до 10 адресов</p></div><div class="dellivery__block_price d-flex flex-column align-items-center"><p>20,0</p> <p>31,0</p> <p>38,0</p> <p>40,0</p> </div> </div> <p class="delivery__block_title"> <b>Доставка корреспонденции с уведомлением по реестру (до 100 г):</b> </p> <div class="d-flex justify-content-between"> <div class="delivery__block__text delivery__list d-flex flex-column ml15"> <p>при приеме в офисе отправителя</p> <p>при приеме в офисе исполнителя</p> </div> <div class="dellivery__block_price d-flex flex-column align-items-center"> <p>140,0</p> <p>100,0</p> </div> </div> </div> <p class="delivery__subtitle"> на внутригородскую доставку </p> <div class="delivery__block"> <table border="0" cellspacing="0" cellpadding="15"> <tr> <th class="red"> Пункт отправления </th> <th class="red"> Пункт назначения </th> <th class="red w70"> Срок доставки, рабочие дни </th> <th class="red"> Время доставки, час </th> <th class="red"> Стоимость до 1 кг, руб. </th> <th class="red"> Стоимость каждого след. кг, руб. </th> </tr> <tr> <td rowspan="3"> <b>Череповец</b> </td> <td rowspan="3"> <b>Москва</b> </td> <td> 1 </td> <td> с 10:00 до 18:00* </td> <td> 480 </td> <td> 50 </td> </tr> <tr> <td> 1 </td> <td> с ограничением по времени** </td> <td> 550 </td> <td> 55 </td> </tr> <tr> <td> 2-3 </td> <td> с 10:00 до 18:00* </td> <td> 300 </td> <td> - </td> </tr> <tr> <td rowspan="3"> <b>Череповец</b> </td> <td rowspan="3"> <b>Санкт-Петербург</b> </td> <td> 1 </td> <td> с 10:00 до 18:00* </td> <td rowspan="2"> 480 </td> <td rowspan="2"> 45 </td> </tr> <tr> <td> 1 </td> <td> с ограничением по времени** </td> </tr> <tr> <td> 2-3 </td> <td> с 10:00 до 18:00* </td> <td> 300 </td> <td> - </td> </tr> <tr> <td rowspan="2"> <b>Череповец</b> </td> <td rowspan="2"> <b>Вологда</b> </td> <td> в течение 6 часов </td> <td> с ограничением по времени** </td> <td> 280 </td> <td> 30 </td> </tr> <tr> <td> 1 </td> <td> с 09:00 до 18:00 </td> <td> 200 </td> <td> 30 </td> </tr> <tr> <td> <b>Череповец</b> </td> <td> <b>Ярославль</b> </td> <td> 1 </td> <td> с 10:00 до 18:00 </td> <td> 400 </td> <td> 45 </td> </tr> <tr> <td> <b>Москва</b> </td> <td> <b>Череповец</b> </td> <td> 1-2 </td> <td> по согласованию </td> <td> 530 </td> <td> 50 </td> </tr> <tr> <td> <b>Санкт-Петербург</b> </td> <td> <b>Череповец</b> </td> <td> 1-2 </td> <td> по согласованию </td> <td> 530 </td> <td> 50 </td> </tr> <tr> <td rowspan="2" class="border-none"> <b>Вологда</b> </td> <td rowspan="2" class="border-none"> <b>Череповец</b> </td> <td> в течение 6 часов </td> <td> с ограничением по времени** </td> <td> 280 </td> <td> 30 </td> </tr> <tr> <td> 1 </td> <td> по согласованию </td> <td> 200 </td> <td> 30 </td> </tr> </table> </div> <div class="delivery__footer d-flex justify-content-center align-items-center"> <div class="y-line"></div> <div class="delivery__footer_text"> <span class="red"> Тариф дан с учетом НДC </span> <p> Тарифы действительны на 2018 год. </p> <p> Любую интересующую информацию можно </p> <p> получить у менеджеров компании по телефонам: </p> <p> (8202) 20-21-48; 20-16-77; 20-12-78 </p> </div> <div class="y-line"></div></div>');
        $this->insert('pages', [
            'id' => 7,
            'slug' => 'delivery',
            'title' => 'Доставка',
            'keywords' => 'доставка, отправка',
            'description' => 'страница доставки компании',
            'content' => $content,
        ]);

        $this->insert('pages', [
            'id' => 8,
            'slug' => 'client',
            'title' => 'Клиентам',
            'keywords' => 'клиентам компании',
            'description' => 'страница для клиентов компании',
            'content' =>json_encode( '<p>
						Для отправки посылки с помощью компании «Экспресс Доставка», достаточно позвонить по телефону в г. Череповце или Вологде, всю остальную работу по доставке выполнит наш квалифицированный персонал.
					</p>
					<span class="red">
						Отправка посылки осуществляется в три этапа:
					</span>
					<p>
						<b>Оформление заказа по телефону.</b> Наши операторы подберут удобное для Вас время приезда курьера и заполнят типовую форму заказа, с необходимыми сведениями (контактные данные и параметры посылки);
					</p>
					<p>
						<b>Приезд курьера.</b> Наши курьеры подъедут в ранее оговоренное место и время, самостоятельно упакуют посылку и выполнят необходимое оформление.
					</p>
					<p>
						<b>Оплата доставки.</b> Вы можете оплатить услуги курьерской доставки либо за наличный расчет курьеру, либо по безналичному расчету, с оформлением гарантийного письма.
					</p>
					<p>
						Подчеркнём, что для наших постоянных клиентов, курьерская доставка осуществляется по договору, при этом счет на услуги выставляется по факту в начале каждого месяца.
					</p>'),
        ]);

        $content = json_encode('<div class="aboutus__hat d-flex justify-content-between align-items-start"> <div class="aboutus__box"> <p class="news__subtitle red"> Заголовок текстовой новости может быть длинным или в две три строки, например, это пример заголовка </p> <p class="news__text"> ООО «Экспресс Доставка» является одной из первых частных курьерских компаний Северо-Западного региона, первый лицензиат Министерства РФ по связи и информатизации, осуществляющий деятельность по оказанию услуг почтовой связи на территории Вологодской области. </p> <p class="news__text"> Пятнадцатилетняя история и пятнадцатилетний опыт работы на рынке услуг по доставке корреспонденции и грузов по России и миру позволяют предложить нашим клиентам самые выгодные условия сотрудничества. </p> </div> <img src="img/logo.png" alt="Экспресс доставка"> </div> <div class="aboutus__hat_image d-flex justify-content-center"> <img src="img/about.jpg" alt=""> </div> <h2 class="about__title section__title y-line red"> НАШИ ПРЕИМУЩЕСТВА </h2> <div class="aboutus__box"> <p class="news__subtitle red"> 1. Экономия </p> <p class="news__text"> Опыт работы в сфере услуг экспресс-доставки корреспонденции и грузов, совершенствование методов и средств работы, позволяют нашей компании, при высоком качестве оказываемых услуг, предлагать низкие тарифы на доставку. </p> </div> <div class="d-flex justify-content-between"> <div class="reliability__text"> <div> <p class="news__subtitle red"> 2. Надежность </p> <p class="news__text"> Лицензиат Федеральной службы по надзору в сфере массовых коммуникаций, связи и охраны культурного наследия, Министерства РФ по связи и информатизации. </p> </div> <div class="aboutus__y-linebox d-flex align-items-center"> <img src="img/reliability1.png" alt=""> <p class="news__text mt0"> Деятельность компании регулируется действующим российским законодательством, а также нормативными и правовыми актами, международными конвенциями и «Правилами оказания услуг почтовой связи». Деятельность компании регулируется действующим российским законодательством. </p> </div> <div class="aboutus__y-linebox d-flex align-items-center"> <img src="img/reliability2.png" alt=""> <p class="news__text mt0"> Контроль и надзор за деятельностью компании осуществляется Роскомнадзором (ежеквартальные проверки на соответствие предъявляемым требованиям). Деятельность компании регулируется действующим российским законодательством, а также нормативными и правовыми актами. </p> </div> </div> <div class="reliability__image"> <img src="img/boy.png" alt=""> </div> </div> <div class="aboutus__box"> <p class="news__subtitle red"> 3. Ответственность </p> <p class="news__text"> Наша репутация основывается в первую очередь на высокой степени ответственности перед клиентом за ту работу, которую мы выполняем. </p> <p class="news__text"> Это не только ответственность за соблюдение сроков, но и ответственность за сохранность вложений, и даже за ваше спокойствие и хорошее настроение в процессе сотрудничества с нами! </p> </div> <div class="aboutus__box"> <p class="news__subtitle red"> 4. Профессионализм </p> <p class="news__text"> В штате компании работают квалифицированные специалисты, работа которых организована исходя из многолетнего опыта в данной сфере. Мы выполняем курьерскую доставку любой сложности в оптимальные сроки. </p> </div> <div class="aboutus__box"> <p class="news__subtitle red"> 5. Оперативность и качество </p> <p class="news__text"> Лицензиат Федеральной службы по надзору в сфере массовых коммуникаций, связи и охраны культурного наследия, Министерства РФ по связи и информатизации. </p> </div> <div class="d-flex justify-content-between align-items-end"> <div> <div class="aboutus__y-linebox"> <p class="news__text"> Доставка письма в течение рабочего времени. </p> </div> <div class="aboutus__y-linebox"> <p class="news__text"> При отсутствии получателя, курьер оставляет извещение в почтовом ящике. Далее два варианта: </p> <div class="d-flex align-items-center"> <img src="img/quality.png" alt=""> <div> <p class="news__text"> а). доставка писем в вечернее время суток (после 17:00, т.е. не рабочее время). </p> <p class="news__text"> б). по предварительному звонку и просьбе получателя (после первой доставки), повторная может быть произведена по удобному для получателя адресу — бесплатно, или у нас в офисе. </p> </div> </div> </div> </div> <div class="quality__image"> <img src="img/quality-big.jpg" alt=""> </div> </div> <div class="aboutus__box"> <p class="news__text"> Уровень доставок корреспонденции в зимнее время достигает — 83-85%, в летнее — 65%, что говорит о качественном сервисе и добросовестном выполнении работы. Письма, которые не были вручены адресату, хранится у нас в офисе в течение одного месяца, после чего возвращаются отправителю. По Вашей просьбе мы возвращаем письмо в любое удобное для Вас время. </p> </div> <div class="aboutus__box"> <p class="news__subtitle red"> 6. Информационное сопровождение заказа </p> <p class="news__text"> Наши менеджеры готовы в любой момент предоставить вам информацию о текущем статусе вашего заказа, а после его выполнения, Вы получите необходимые документы и подтверждение о доставке. </p> </div> <div class="aboutus__box"> <p class="news__subtitle red"> 7. Готовность выполнить любой — даже не стандартный заказ </p> <p class="news__text"> Поздравить руководителя, коллегу, сотрудника или членов их семей оригинальным способом: сувениром или подарком с прилагаемым письмом / грамотой / приглашением, с использованием эффектной упаковки, тематических конвертов (например, новогодняя рассылка — "елочные" элементы в оформлении). Оригинальное вручение отправляемой посылки добавит изюминку в рассылку корреспонденции и положительно скажется на имидже Вашей организации. </p> </div> <div class="aboutus__box"> <p class="news__subtitle red"> 8. Максимальное использование информационных технологий </p> <p class="news__text"> Использование канала связи, исходя из предпочтений клиента: стационарный или мобильный телефон, факс, e-mail, Skype, ICQ.; Использование систем, позволяющих отслеживать путь отправления или груза в любой момент времени. </p> </div> <div class="aboutus__box"> <p class="news__subtitle red"> 9. Забота об имидже </p> <p class="news__text"> Наши курьеры корректные, позитивные люди, выгодно подчеркнут деловой имидж организации – партнёра. </p> </div> <div class="aboutus__box"> <p class="news__subtitle red"> 10. Индивидуальный подход </p> <p class="news__text"> Для нас не существует понятия мелких заказов и неинтересных клиентов. Индивидуальный подход к каждому клиенту и гибкая система цен позволяют обеспечить максимально эффективное и взаимовыгодное сотрудничество. </p> </div> <div class="aboutus__box"> <p class="news__subtitle red"> 11. Мониторинг и анализ деятельности </p> <p class="news__text"> Осуществление систематической работы по сбору и обработке информации оценивающей качество услуг, предоставляемых нашей компанией, а также скрупулезная проработка пожеланий и предложений клиентов, позволяет нам не останавливаться на достигнутом, внедряя новые сервисы. </p> </div>');
        $this->insert('pages', [
            'id' => 9,
            'slug' => 'about',
            'title' => 'О компании',
            'keywords' => 'описание компании',
            'description' => 'страница с историей компании',
            'content' => $content,
        ]);

        $this->insert('pages', [
            'id' => 10,
            'slug' => 'services',
            'title' => 'Сервисы компании',
            'keywords' => 'страница сервисов',
            'description' => 'страница с сервисами компании',
            'content' => '',
        ]);

        echo "Default pages created\n";

        return true;
    }

    public function down()
    {
        $this->delete('pages', 'id <= 10');

        echo "Default pages deleted\n";

        return true;
    }
}
