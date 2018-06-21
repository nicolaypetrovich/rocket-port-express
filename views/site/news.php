<?php

use yii\helpers\Html;
use yii\widgets\Breadcrumbs;
use yii\widgets\LinkPager;


/* @var $this yii\web\View */
/* @var $models app\models\News */


$this->title = 'News';
$this->params['breadcrumbs'][] = "Новости";
?>
<section class="newsbody-hat">
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
        <div class="d-flex justify-content-between align-items-center">
            <h2 class="section__title y-line red mt40">
                НОВОСТИ
            </h2>
            <div class="newsbody__select">
					<span>
						Показать по:
					</span>
                <div class="select-wrapper">
                    <?php $selArr = array(1,5, 8, 10, 15, 20); ?>
                    <form method="get">
                        <select name="pageSize" id="amoutNews" onchange="this.form.submit()">
                            <?php foreach ($selArr as $item): ?>
                                <option <?php echo $_GET['pageSize']==$item?'selected':!isset($_GET['pageSize'])&&20==$item?'selected':'';?> value="<?php echo $item; ?>"><?php echo $item; ?></option>
                            <?php endforeach; ?>
                        </select>
                    </form>
                </div>
                <span>на странице</span>
            </div>
        </div>
    </div>
</section>

<section class="newsbody wrapperbody" id="newsbody">
    <div class="container">
        <ul class="newsbody__wrapper">
            <?php foreach ($models as $model) :

                ?>
                <li class="news-frame news__box big-frame">
                    <div class="news__date">
						<span class="date__day">
							<?php echo date('d', strtotime($model->date)); ?>
						</span>
                        <span class="date__month">
							<?php echo date('m.y', strtotime($model->date)); ?>
						</span>
                    </div>
                    <div class="news__item">
                        <a href="#">
                            <p class="news__subtitle red">
                                <?php echo $model->title; ?>
                            </p>
                        </a>
                        <p class="news__text">
                            <?php echo $model->description; ?>
                        </p>
                        <a href="#" class="news__link">
                            <img src="img/arrow-gray.png" alt="Читать">
                        </a>
                    </div>
                    <?php if(null!=$model->media):?>
                    <div class="news__pic">
                        <a href="#">
                            <?php echo '<img style="height:176px;" src="' . Yii::getAlias('@web') . 'uploads/images/' . $model->media->name . '" alt="' . $model->media->alt . '">'; ?>
                        </a>
                    </div>
                    <?php endif;?>

                </li>
            <?php
            endforeach;


            ?>

        </ul>
        <div class="nav-links d-flex justify-content-center">
            <?php // display pagination
            echo LinkPager::widget([
                'pagination' => $pages,
                'prevPageLabel'=>'Назад',
                'nextPageLabel'=>'Далее',
            ]);
            ?>
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
