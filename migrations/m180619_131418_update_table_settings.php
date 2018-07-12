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
            'value' => '10,10',
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
            'value' => '<iframe width="560" height="315" src="https://www.youtube.com/embed/FM7MFYoylVs" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>',
        ]);


        $this->insert('settings', [
            'id' => $i++,
            'key' => 'about_slider',
            'value' => json_encode(
                array(16,17,18,17)
            ),
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
