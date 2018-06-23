<?php



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
                <?php echo (null != (Yii::$app->getRequest()->get("NewsSearch")['name'])) ? 'ПОИСК' : ''; ?> НОВОСТИ
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
                        <?php if (isset(Yii::$app->getRequest()->get("NewsSearch")['name'])): ?>
                            <input type="hidden" name="NewsSearch[name]"
                                   value="<?php echo Yii::$app->getRequest()->get("NewsSearch")['name']; ?>">
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
							<?= date('d', strtotime($model->date)); ?>
						</span>
                            <span class="date__month">
							<?= date('m.y', strtotime($model->date)); ?>
						</span>
                        </div>
                        <div class="news__item">
                            <a href="news?slug=<?=$model->slug;?>">
                                <p class="news__subtitle red">
                                    <?= $model->name; ?>
                                </p>
                            </a>
                            <p class="news__text">
                                <?= $model->shortdesc; ?>
                            </p>
                            <a href="news?slug=<?=$model->slug;?>" class="news__link">
                                <img src="img/arrow-gray.png" alt="Читать">
                            </a>
                        </div>
                        <?php if (null != $model->media): ?>
                            <?php
                            $imgSrc=$model->media->getImageOfSize(358,176);
                            $newImageAlt=$model->media->alt;
                            if(null != $imgSrc && '' != $imgSrc ){


                                echo '<div class="news__pic">';
                                echo ' <a href="#">';

                                echo '<img src="' .$model->media->getImageOfSize(358,176) . '" alt="' . $model->media->alt . '">';

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
        <a href="tracking" class="newsbuttons__link">
            <img src="img/search-btn.jpg" alt="Отследить почтовое отправление">
        </a>
        <a href="calculate" class="newsbuttons__link">
            <img src="img/calc-btn.jpg" alt="Расчитать тариф перевозки">
        </a>
    </div>
</section>
