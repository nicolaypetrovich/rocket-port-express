<?php


use Imagine\Image\Box;
use yii\imagine\Image;
use yii\widgets\Breadcrumbs;
use yii\widgets\LinkPager;


/* @var $this yii\web\View */
/* @var $dataProvider app\models\NewsSearch */

$this->title = (null != (Yii::$app->getRequest()->get("NewsSearch")['title'])) ? 'Поиск' : 'Новости';
//$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
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
                <?php echo (null != (Yii::$app->getRequest()->get("NewsSearch")['title'])) ? 'ПОИСК' : ''; ?> НОВОСТИ
            </h2>
            <div class="newsbody__select">
					<span>
						Показать по:
					</span>
                <div class="select-wrapper">
                    <?php $selArr = array(1, 5, 8, 10, 15, 20); ?>
                    <form method="get">
                        <select name="pageSize" id="amoutNews" onchange="this.form.submit()">
                            <?php foreach ($selArr as $item): ?>
                                <option <?php echo $_GET['pageSize'] == $item ? 'selected' : !isset($_GET['pageSize']) && 20 == $item ? 'selected' : ''; ?>
                                        value="<?php echo $item; ?>"><?php echo $item; ?></option>
                            <?php endforeach; ?>
                        </select>
                        <?php if (isset(Yii::$app->getRequest()->get("NewsSearch")['title'])): ?>
                            <input type="hidden" name="NewsSearch[title]"
                                   value="<?php echo Yii::$app->getRequest()->get("NewsSearch")['title']; ?>">
                        <?php endif; ?>
                    </form>
                </div>
                <span>на странице</span>
            </div>
        </div>
    </div>
</section>

<section class="newsbody wrapperbody" id="newsbody">
    <div class="container">
        <?php if (!empty($dataProvider)): ?>
            <ul class="newsbody__wrapper">
                <?php

                foreach ($dataProvider->getModels() as $model) :

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
                        <?php if (null != $model->media): ?>
                            <?php
                            $newImageName=$model->media->name;
                            $newImageAlt=$model->media->alt;
                            if(file_exists(Yii::getAlias('@web'). 'uploads/images/'.$newImageName) || file_exists(Yii::getAlias('@web'). 'uploads/images/358x176/'.$newImageName)){
                                if(! file_exists(Yii::getAlias('@web'). 'uploads/images/358x176/'.$newImageName) ){
                                    if (!is_dir(Yii::getAlias('@web'). 'uploads/images/358x176/')) {
                                        mkdir(Yii::getAlias('@web'). 'uploads/images/358x176/', 0777, true);
                                    }
                                    (Image::getImagine()->open(Yii::getAlias('@web') . 'uploads/images/'.$newImageName)->thumbnail(new Box(358, 176))->save(Yii::getAlias('@web'). 'uploads/images/358x176/'.$newImageName , ['quality' => 90]));
                                }

                                echo '<div class="news__pic">';
                                echo ' <a href="#">';

                                echo '<img style="height:176px;" src="' . Yii::getAlias('@web/' . 'uploads/images/358x176/' . $newImageName) . '" alt="' . $model->media->alt . '">';

                                echo '</a>';
                                echo '</div>';
                            }

                            ?>

                        <?php endif; ?>

                    </li>
                <?php
                endforeach; ?>
            </ul>
        <?php else: ?>
            Ничего не найдено!
        <?php
        endif;
        ?>
        <div class="nav-links d-flex justify-content-center">
            <?php // display pagination

            $pagination = $dataProvider->pagination;

            echo LinkPager::widget(
                [
                    'pagination' => $pagination,
                    'prevPageLabel' => 'Назад',
                    'nextPageLabel' => 'Далее',
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
