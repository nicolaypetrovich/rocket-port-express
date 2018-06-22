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
            'id' => $i,
            'key' => 'global_address',
            'value' => "Наш адрес:<br>г. Череповец, ул.<br>К.Маркса, д. 78",
        ]);

        $i++;
        $this->insert('settings', [
            'id' => $i,
            'key' => 'global_headertext1',
            'value' => 'БЫСТРАЯ И ЭКОНОМИЧНАЯ',
        ]);
        $i++;
        $this->insert('settings', [
            'id' => $i,
            'key' => 'global_headertext2',
            'value' => 'ДОСТАВКА ВАШИХ ДОКУМЕНТОВ И ГРУЗОВ',
        ]);
        $i++;
        $this->insert('settings', [
            'id' => $i,
            'key' => 'global_email',
            'value' => "info@port-express.net",
        ]);
        $i++;
        $this->insert('settings', [
            'id' => $i,
            'key' => 'global_phone',
            'value' => "8 (800) 511-98-11",
        ]);
        $i++;


        $this->insert('settings', [
            'id' => $i,
            'key' => 'index_block1_img1',
            'value' => 11,
        ]);
        $i++;
        $this->insert('settings', [
            'id' => $i,
            'key' => 'index_block1_text1',
            'value' => 'РАСЧЕТ ТАРИФА ПЕРЕВОЗКИ',
        ]);
        $i++;
        $this->insert('settings', [
            'id' => $i,
            'key' => 'index_block1_img2',
            'value' => 12,
        ]);
        $i++;

        $this->insert('settings', [
            'id' => $i,
            'key' => 'index_block1_text2',
            'value' => 'ОТСЛЕЖИВАНИЕ ГРУЗА',
        ]);
        $i++;

        $this->insert('settings', [
            'id' => $i,
            'key' => 'index_block1_img3',
            'value' => 13,
        ]);
        $i++;

        $this->insert('settings', [
            'id' => $i,
            'key' => 'index_block1_text3',
            'value' => 'ЗАДАТЬ ВОПРОС СЛУЖБЕ ПОДДЕРЖКИ',
        ]);
        $i++;

        $this->insert('settings', [
            'id' => $i,
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
        $i++;

        $this->insert('settings', [
            'id' => $i,
            'key' => 'index_block2_img',
            'value' => 14
        ]);
        $i++;

        $this->insert('settings', [
            'id' => $i,
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
        $i++;

        $this->insert('settings', [
            'id' => $i,
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
        $i++;

        $this->insert('settings', [
            'id' => $i,
            'key' => 'index_news_title',
            'value' => 'НОВОСТИ КОМПАНИИ'
        ]);

        echo "Default settings created.\n";

        return true;
    }

    public function down()
    {

        $this->delete('settings', ['id' => '<=15']);

        echo "m180619_131418_update_table_settings cannot be reverted.\n";

        return true;
    }

}
