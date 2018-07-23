<?php

use yii\db\Migration;

/**
 * Class m180619_131418_update_table_settings
 */
class m180619_131418_update_table_settings extends Migration
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
        echo "m180619_131418_update_table_settings cannot be reverted.\n";

        return false;
    }


    // Use up()/down() to run migration code without a transaction.
    public function up()
    {
        $i=1;
        $this->insert('settings', [
            'id' => $i++,
            'key' => 'global_address',
            'value' => "г. Череповец, ул. К.Маркса, д. 78",
        ]);


        $this->insert('settings', [
            'id' => $i++,
            'key' => 'global_headertext1',
            'value' => 'БЫСТРАЯ И ЭКОНОМИЧНАЯ',
        ]);

        $this->insert('settings', [
            'id' => $i++,
            'key' => 'global_headertext2',
            'value' => 'ДОСТАВКА ВАШИХ ДОКУМЕНТОВ И ГРУЗОВ',
        ]);

        $this->insert('settings', [
            'id' => $i++,
            'key' => 'global_email',
            'value' => "info@port-express.net",
        ]);

        $this->insert('settings', [
            'id' => $i++,
            'key' => 'global_phone',
            'value' => "8 (800) 511-98-11",
        ]);



        $this->insert('settings', [
            'id' => $i++,
            'key' => 'index_block1_img1',
            'value' => 11,
        ]);

        $this->insert('settings', [
            'id' => $i++,
            'key' => 'index_block1_text1',
            'value' => 'РАСЧЕТ ТАРИФА ПЕРЕВОЗКИ',
        ]);

        $this->insert('settings', [
            'id' => $i++,
            'key' => 'index_block1_img2',
            'value' => 12,
        ]);


        $this->insert('settings', [
            'id' => $i++,
            'key' => 'index_block1_text2',
            'value' => 'ОТСЛЕЖИВАНИЕ ГРУЗА',
        ]);


        $this->insert('settings', [
            'id' => $i++,
            'key' => 'index_block1_img3',
            'value' => 13,
        ]);


        $this->insert('settings', [
            'id' => $i++,
            'key' => 'index_block1_text3',
            'value' => 'ЗАДАТЬ ВОПРОС СЛУЖБЕ ПОДДЕРЖКИ',
        ]);


        $this->insert('settings', [
            'id' => $i++,
            'key' => 'index_block2',
            'value' => json_encode(
                array(
                    'textleft1'=>'НАШИ ГЛАВНЫЕ',
                    'textleft2'=>'ПРИНЦИПЫ',
                    'textright1'=>'ОТВЕТСТВЕННОСТЬ',
                    'textright2'=>'Наша репутация основывается в первую очередь на <span class="yellow">высокой степени ответственности</span> перед клиентом',

                )
            ),
        ]);


        $this->insert('settings', [
            'id' => $i++,
            'key' => 'index_block2_img',
            'value' => 14
        ]);


        $this->insert('settings', [
            'id' => $i++,
            'key' => 'index_block_about',
            'value' => json_encode(
                array(
                    'title'=>'О КОМПАНИИ ЭКСПРЕСС ДОСТАВКА',
                    'text1'=>'ООО «Экспресс Доставка» является <span class="red">одной из первых</span> частных курьерских компаний Северо-Западного региона, первый лицензиат Министерства РФ по связи и информатизации, осуществляющий деятельность по оказанию услуг почтовой связи на территории Вологодской области.',
                    'text2'=>'<span class="red">Пятнадцатилетняя история</span> и <span class="red">пятнадцатилетний опыт</span> работы на рынке услуг по доставке корреспонденции и грузов по России и миру позволяют предложить нашим клиентам самые выгодные условия сотрудничества.',
                    'text3'=>'<span class="red">Опыт работы</span> в сфере услуг экспресс-доставки корреспонденции и грузов, совершенствование методов и средств работы, позволяют нашей компании, при высоком качестве оказываемых услуг, предлагать низкие тарифы на доставку.',
                    'text4'=>'МЫ ОБСЛУЖИВАЕМ БОЛЕЕ<span>НАСЕЛЕННЫХ ПУНКТОВ РОССИИ</span>',
                    'number'=>'2500'

                )
            ),
        ]);


        $this->insert('settings', [
            'id' => $i++,
            'key' => 'index_block_icons',
            'value' => json_encode(
                array(
                    'text1'=>'Внутригородская, внутриобластная доставка корреспон-денции и грузов.',
                    'text2'=>'Доставка всех видов отправлений по всей территории РФ в прямом и обратном отправлении.',
                    'text3'=>'Служба доставки, г. Череповец, доставка всех видов отправлений по странам СНГ и Миру.',
                    'text4'=>'Доставка цветов и продуктовых корзин по всему Миру.',
                    'text5'=>'Доставка заказов Интернет-магазинов.',
                    'text6'=>'Безадресная доставка рекламной продукции и дополнительные сервисы.',

                )
            ),
        ]);

        $this->insert('settings', [
            'id' => $i++,
            'key' => 'index_block_icons_images',
            'value' => json_encode(
                array(
                    'image1'=>19,
                    'image2'=>20,
                    'image3'=>21,
                    'image4'=>22,
                    'image5'=>23,
                    'image6'=>24,
                )
            ),
        ]);



        $this->insert('settings', [
            'id' => $i++, //15
            'key' => 'index_news_title',
            'value' => 'НОВОСТИ КОМПАНИИ'
        ]);


        $this->insert('settings', [
            'id' => $i++,
            'key' => 'global_logo',
            'value' => 15,
        ]);

        $this->insert('settings', [
            'id' => $i++,
            'key' => 'global_copyright',
            'value' => 'Copyright 2017 Все права защищены',
        ]);

        $this->insert('settings', [
            'id' => $i++,
            'key' => 'global_mainMap',
            'value' => '55.697545264968994,37.56125891208644',
        ]);
        $this->insert('settings', [
            'id' => $i++,
            'key' => 'admin_username',
            'value' => 'admin',
        ]);

        $this->insert('settings', [
            'id' => $i++,
            'key' => 'admin_password',
            'value' => md5('7BLwC29j'),
        ]);

        $this->insert('settings', [
            'id' => $i++,
            'key' => 'about_video',
            'value' => 'https://www.youtube.com/embed/FM7MFYoylVs',
        ]);


        $this->insert('settings', [
            'id' => $i++,
            'key' => 'about_slider',
            'value' => json_encode(
                array(16,17,18,17)
            ),
        ]);

        $this->insert('settings', [
            'id' => $i++,
            'key' => 'services_blocks',
            'value' => '{"image":["25","26","27","28","29"],"text":["<p><span style=\"color: #800000;\">\u0421\u0438\u0441\u0442\u0435\u043c\u0430 \u0441\u0440\u043e\u0447\u043d\u043e\u0439 \u0434\u043e\u0441\u0442\u0430\u0432\u043a\u0438<\/span> &laquo;\u0418\u0437 \u0440\u0443\u043a \u0432 \u0440\u0443\u043a\u0438&raquo;<\/p>","<p>\u041c\u044b \u044f\u0432\u043b\u044f\u0435\u043c\u0441\u044f \u043e\u0444\u0438\u0446\u0438\u0430\u043b\u044c\u043d\u044b\u043c\u0438 \u043f\u0440\u0435\u0434\u0441\u0442\u0430\u0432\u0438\u0442\u0435\u043b\u044f\u043c\u0438 \u0431\u0440\u0435\u043d\u0434\u0430 <span style=\"color: #800000;\">&laquo;\u041f\u043e\u0447\u0442\u0430 \u0414\u0435\u0434\u0430 \u041c\u043e\u0440\u043e\u0437\u0430&raquo;<\/span> \u043f\u043e \u0412\u043e\u043b\u043e\u0433\u043e\u0434\u0441\u043a\u043e\u0439 \u043e\u0431\u043b\u0430\u0441\u0442\u0438<\/p>","<p><span style=\"color: #800000;\">\u041f\u0440\u0438\u0451\u043c \u043a\u043e\u0440\u0440\u0435\u0441\u043f\u043e\u043d\u0434\u0435\u043d\u0446\u0438\u0438<\/span> \u0443 \u043e\u0442\u0432\u0435\u0442\u0441\u0442\u0432\u0435\u043d\u043d\u043e\u0433\u043e \u043b\u0438\u0446\u0430 \u043f\u043e \u0430\u043a\u0442\u0443 \u043f\u0440\u0438\u0435\u043c\u0430-\u043f\u0435\u0440\u0435\u0434\u0430\u0447\u0438<\/p>","<p><span style=\"color: #800000;\">\u0420\u0435\u0433\u0443\u043b\u044f\u0440\u043d\u044b\u0435 \u043e\u0442\u0447\u0435\u0442\u044b<\/span> \u043e \u043f\u0440\u043e\u0434\u0435\u043b\u0430\u043d\u043d\u043e\u0439 \u0440\u0430\u0431\u043e\u0442\u0435: \u0435\u0436\u0435\u0434\u043d\u0435\u0432\u043d\u044b\u0439, \u0435\u0436\u0435\u043c\u0435\u0441\u044f\u0447\u043d\u044b\u0439 (\u0441\u0447\u0435\u0442, \u0430\u043a\u0442 \u0432\u044b\u043f\u043e\u043b\u043d\u0435\u043d\u043d\u044b\u0445 \u0440\u0430\u0431\u043e\u0442)<\/p>","<p><span style=\"color: #800000;\">\u041f\u043e\u0441\u0442\u0430\u0432\u043a\u0430<\/span> \u043a\u043e\u043d\u0432\u0435\u0440\u0442\u043e\u0432 \u0438 \u0443\u0432\u0435\u0434\u043e\u043c\u043b\u0435\u043d\u0438\u0439<\/p>"]}',
        ]);

        $this->insert('settings', [
            'id' => $i++,
            'key' => 'global_menu',
            'value' => '{"menu_item":["index","about","services","client","contact"],"menu_item_text":["\u041d\u0410 \u0413\u041b\u0410\u0412\u041d\u0423\u042e","\u041e \u041a\u041e\u041c\u041f\u0410\u041d\u0418\u0418","\u0423\u0421\u041b\u0423\u0413\u0418 \u0418 \u0422\u0410\u0420\u0418\u0424\u042b","\u041a\u041b\u0418\u0415\u041d\u0422\u0410\u041c","\u041a\u041e\u041d\u0422\u0410\u041a\u0422\u041d\u0410\u042f \u0418\u041d\u0424\u041e\u0420\u041c\u0410\u0426\u0418\u042f"]}',
        ]);

        $this->insert('settings', [
            'id' => $i++,
            'key' => 'global_favicon',
            'value' => '31',
        ]);


        echo "Default settings created.\n";

        return true;
    }

    public function down()
    {

        $this->delete('settings', ['id' => '<=20']);

        echo "m180619_131418_update_table_settings cannot be reverted.\n";

        return true;
    }

}
