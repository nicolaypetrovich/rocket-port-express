<?php

use yii\widgets\Breadcrumbs;
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="client-hat">
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
					КЛИЕНТАМ
				</h2>
			</div>
		</div>
	</section>
<section class="client wrapperbody" id="client">
		<div class="container">
			<div class="client__wrapper d-flex justify-content-between">
				<div class="client__leftside">
					<p>
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
					</p>
				</div>
				<div class="client__rightside"></div>
			</div>
		</div>
	</section>