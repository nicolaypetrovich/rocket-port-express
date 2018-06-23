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
            'content' => 'Page content was created from migrations.',
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
            'content' => '[{"city":"\u0427\u0415\u0420\u0415\u041f\u041e\u0412\u0415\u0426","address":"162600, \u0412\u043e\u043b\u043e\u0433\u043e\u0434\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c, \u0433. \u0427\u0435\u0440\u0435\u043f\u043e\u0432\u0435\u0446, \u0443\u043b. \u041a.\u041c\u0430\u0440\u043a\u0441\u0430, \u0434. 78","phone":"8 (800) 511-98-11","working_hours":" \u041f\u043d.-\u043f\u0442.: \u0441 09.00 \u0434\u043e 18.00;\u0431\u0435\u0437 \u043e\u0431\u0435\u0434\u0430;<\/p>  \u0441\u0431.: \u0441 10:00 \u0434\u043e 16:00; \u0432\u0441.: \u0432\u044b\u0445\u043e\u0434\u043d\u043e\u0439<\/p>","email":"info@port-express.net","link":"www.port-express.net","map":"https:\/\/api-maps.yandex.ru\/services\/constructor\/1.0\/js\/?um=constructor%3Af68ca9a36edb8070f34f9fae7474370442386ee41851b8f7267328754b6fbb40&width=100%25&height=260&lang=ru_UA&scroll=false"},{"city":"\u0412\u041e\u041b\u041e\u0413\u0414\u0410","address":"162600, \u0412\u043e\u043b\u043e\u0433\u043e\u0434\u0441\u043a\u0430\u044f \u043e\u0431\u043b\u0430\u0441\u0442\u044c, \u0433. \u0412\u043e\u043b\u043e\u0433\u0434\u0430, \u0443\u043b. \u0411\u043b\u0430\u0433\u043e\u0432\u0435\u0449\u0435\u043d\u0441\u043a\u0430\u044f, 47","phone":"8 (800) 511-98-11","working_hours":"  \u041f\u043d.-\u043f\u0442.: \u0441 09.00 \u0434\u043e 18.00; \u0431\u0435\u0437 \u043e\u0431\u0435\u0434\u0430;<\/p>  \u0441\u0431.: \u0441 10:00 \u0434\u043e 16:00; \u0432\u0441.: \u0432\u044b\u0445\u043e\u0434\u043d\u043e\u0439<\/p>","email":"info@port-express.net","link":"www.port-express.net","map":"https:\/\/api-maps.yandex.ru\/services\/constructor\/1.0\/js\/?um=constructor%3A60874d5b8862268cc9d7933536a60e20b3914eba38d4f2672275ad85f9afa596&width=100%25&height=260&lang=ru_UA&scroll=false"}]',
        ]);

        $this->insert('pages', [
            'id' => 7,
            'slug' => 'delivery',
            'title' => 'Доставка',
            'keywords' => 'доставка, отправка',
            'description' => 'страница доставки компании',
            'content' => '<p>Более 12 лет наша компания расширяет спектр оказываемых услуг, открывает новые транспортные маршруты,<br> сокращает сроки доставки ваших отправлений, совершенствует способы доставки.</p><p><b>Тарифы на услуги с 01 января 2018 года:</b></p><p class="delivery__subtitle">на внутригородскую доставку</p><div class="delivery__block"><div class="delivery__block_hat d-flex justify-content-between"><p class="red">Вид услуги</p><p class="red">Стоимость, руб.</p></div><p class="delivery__block_title"><b>Доставка корреспонденции с уведомлением по реестру (до 100 г):</b></p><div class="d-flex justify-content-between"><div class="delivery__block__text d-flex flex-column ml15"><p>от 100 адресов и выше</p><p>от 50 до 100 адресов</p><p>от 10 до 50 адресов</p><p>до 10 адресов</p></div><div class="dellivery__block_price d-flex flex-column align-items-center"><p>20,0</p> <p>31,0</p> <p>38,0</p> <p>40,0</p> </div> </div> <p class="delivery__block_title"> <b>Доставка корреспонденции с уведомлением по реестру (до 100 г):</b> </p> <div class="d-flex justify-content-between"> <div class="delivery__block__text delivery__list d-flex flex-column ml15"> <p>при приеме в офисе отправителя</p> <p>при приеме в офисе исполнителя</p> </div> <div class="dellivery__block_price d-flex flex-column align-items-center"> <p>140,0</p> <p>100,0</p> </div> </div> </div> <p class="delivery__subtitle"> на внутригородскую доставку </p> <div class="delivery__block"> <table border="0" cellspacing="0" cellpadding="15"> <tr> <th class="red"> Пункт отправления </th> <th class="red"> Пункт назначения </th> <th class="red w70"> Срок доставки, рабочие дни </th> <th class="red"> Время доставки, час </th> <th class="red"> Стоимость до 1 кг, руб. </th> <th class="red"> Стоимость каждого след. кг, руб. </th> </tr> <tr> <td rowspan="3"> <b>Череповец</b> </td> <td rowspan="3"> <b>Москва</b> </td> <td> 1 </td> <td> с 10:00 до 18:00* </td> <td> 480 </td> <td> 50 </td> </tr> <tr> <td> 1 </td> <td> с ограничением по времени** </td> <td> 550 </td> <td> 55 </td> </tr> <tr> <td> 2-3 </td> <td> с 10:00 до 18:00* </td> <td> 300 </td> <td> - </td> </tr> <tr> <td rowspan="3"> <b>Череповец</b> </td> <td rowspan="3"> <b>Санкт-Петербург</b> </td> <td> 1 </td> <td> с 10:00 до 18:00* </td> <td rowspan="2"> 480 </td> <td rowspan="2"> 45 </td> </tr> <tr> <td> 1 </td> <td> с ограничением по времени** </td> </tr> <tr> <td> 2-3 </td> <td> с 10:00 до 18:00* </td> <td> 300 </td> <td> - </td> </tr> <tr> <td rowspan="2"> <b>Череповец</b> </td> <td rowspan="2"> <b>Вологда</b> </td> <td> в течение 6 часов </td> <td> с ограничением по времени** </td> <td> 280 </td> <td> 30 </td> </tr> <tr> <td> 1 </td> <td> с 09:00 до 18:00 </td> <td> 200 </td> <td> 30 </td> </tr> <tr> <td> <b>Череповец</b> </td> <td> <b>Ярославль</b> </td> <td> 1 </td> <td> с 10:00 до 18:00 </td> <td> 400 </td> <td> 45 </td> </tr> <tr> <td> <b>Москва</b> </td> <td> <b>Череповец</b> </td> <td> 1-2 </td> <td> по согласованию </td> <td> 530 </td> <td> 50 </td> </tr> <tr> <td> <b>Санкт-Петербург</b> </td> <td> <b>Череповец</b> </td> <td> 1-2 </td> <td> по согласованию </td> <td> 530 </td> <td> 50 </td> </tr> <tr> <td rowspan="2" class="border-none"> <b>Вологда</b> </td> <td rowspan="2" class="border-none"> <b>Череповец</b> </td> <td> в течение 6 часов </td> <td> с ограничением по времени** </td> <td> 280 </td> <td> 30 </td> </tr> <tr> <td> 1 </td> <td> по согласованию </td> <td> 200 </td> <td> 30 </td> </tr> </table> </div> <div class="delivery__footer d-flex justify-content-center align-items-center"> <div class="y-line"></div> <div class="delivery__footer_text"> <span class="red"> Тариф дан с учетом НДC </span> <p> Тарифы действительны на 2018 год. </p> <p> Любую интересующую информацию можно </p> <p> получить у менеджеров компании по телефонам: </p> <p> (8202) 20-21-48; 20-16-77; 20-12-78 </p> </div> <div class="y-line"></div></div>',
        ]);

        $this->insert('pages', [
            'id' => 8,
            'slug' => 'client',
            'title' => 'Клиентам',
            'keywords' => 'клиентам компании',
            'description' => 'страница для клиентов компании',
            'content' => '',
        ]);

        $this->insert('pages', [
            'id' => 9,
            'slug' => 'about',
            'title' => 'О компании',
            'keywords' => 'описание компании',
            'description' => 'страница с историей компании',
            'content' => '',
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
