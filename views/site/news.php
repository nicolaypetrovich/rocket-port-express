<?php

use yii\helpers\Html;
use yii\widgets\LinkPager;


/* @var $this yii\web\View */
/* @var $models app\models\News */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'News';
$this->params['breadcrumbs'][] = $this->title;
?>
<section class="newsbody-hat">
    <div class="container">
        <ul class="crumbs">
            <li>
                <a href="/">
                    Главная
                </a>
            </li>
            <li>
                <img src="img/crumb.png" alt="">
            </li>
            <li>
                <a href="#">
                    Новости
                </a>
            </li>
        </ul>
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
//                    var_dump($model);
//                    echo $model->date;

//                var_dump($model->media);
//                echo '<img src="'.Yii::getAlias('@web') . 'uploads/images/' . $model->media->name.'" alt="">';

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
                    <div class="news__pic">
                        <a href="#">
                            <?php echo '<img style="height:176px;" src="' . Yii::getAlias('@web') . 'uploads/images/' . $model->media->name . '" alt="' . $model->media->alt . '">'; ?>
                            <!--							<img src="img/news-1.jpg" alt="Картинка новости">-->
                        </a>
                    </div>
                </li>
            <?php
            endforeach;


            ?>
            <div class="nav-links d-flex justify-content-center">
            <?php // display pagination
            echo LinkPager::widget([
                'pagination' => $pages,
                'prevPageLabel'=>'Назад',
                'nextPageLabel'=>'Далее',
            ]);
            ?>
            </div>

            <li class="news-frame news__box big-frame">
                <div class="news__pic">
                    <a href="#">
                        <img src="img/news-2.jpg" alt="Картинка новости">
                    </a>
                </div>
                <div class="news__date">
						<span class="date__day">
							20
						</span>
                    <span class="date__month">
							11.12
						</span>
                </div>
                <div class="news__item">
                    <a href="#">
                        <p class="news__subtitle red">
                            Заголовок текстовой новости может быть длинным или в две три строки, например, это пример
                            заголовка
                        </p>
                    </a>
                    <p class="news__text">
                        Это пример текста новости, сделан для того, чтобы было понятно, где будет текст. Это пример
                        текста новости, сделан для того, чтобы было понятно, где будет текст. Это пример текста новости,
                        сделан для того, чтобы было понятно, где будет текст. Это пример текста новости, сделан для
                        того, чтобы было понятно, где будет текст.
                    </p>
                    <a href="#" class="news__link">
                        <img src="img/arrow-gray.png" alt="Читать">
                    </a>
                </div>
            </li>
            <li class="news-frame news__box big-frame">
                <div class="news__date">
						<span class="date__day">
							19
						</span>
                    <span class="date__month">
							11.12
						</span>
                </div>
                <div class="news__item">
                    <a href="#">
                        <p class="news__subtitle red">
                            Заголовок текстовой новости может быть длинным или в две три строки, например, это пример
                            заголовка
                        </p>
                    </a>
                    <p class="news__text">
                        Это пример текста новости, сделан для того, чтобы было понятно, где будет текст. Это пример
                        текста новости, сделан для того, чтобы было понятно, где будет текст. Это пример текста новости,
                        сделан для того, чтобы было понятно, где будет текст. Это пример текста новости, сделан для
                        того, чтобы было понятно, где будет текст.
                    </p>
                    <a href="#" class="news__link">
                        <img src="img/arrow-gray.png" alt="Читать">
                    </a>
                </div>
            </li>
            <li class="news-frame news__box big-frame">
                <div class="news__date">
						<span class="date__day">
							18
						</span>
                    <span class="date__month">
							11.12
						</span>
                </div>
                <div class="news__item">
                    <a href="#">
                        <p class="news__subtitle red">
                            Заголовок текстовой новости может быть длинным или в две три строки, например, это пример
                            заголовка
                        </p>
                    </a>
                    <p class="news__text">
                        Это пример текста новости, сделан для того, чтобы было понятно, где будет текст. Это пример
                        текста новости, сделан для того, чтобы было понятно, где будет текст. Это пример текста новости,
                        сделан для того, чтобы было понятно, где будет текст. Это пример текста новости, сделан для
                        того, чтобы было понятно, где будет текст.
                    </p>
                    <a href="#" class="news__link">
                        <img src="img/arrow-gray.png" alt="Читать">
                    </a>
                </div>
                <div class="news__pic">
                    <a href="#">
                        <img src="img/news-3.jpg" alt="Картинка новости">
                    </a>
                </div>
            </li>
            <li class="news-frame news__box big-frame">
                <div class="news__pic">
                    <a href="#">
                        <img src="img/news-4.jpg" alt="Картинка новости">
                    </a>
                </div>
                <div class="news__date">
						<span class="date__day">
							17
						</span>
                    <span class="date__month">
							11.12
						</span>
                </div>
                <div class="news__item">
                    <a href="#">
                        <p class="news__subtitle red">
                            Заголовок текстовой новости может быть длинным или в две три строки, например, это пример
                            заголовка
                        </p>
                    </a>
                    <p class="news__text">
                        Это пример текста новости, сделан для того, чтобы было понятно, где будет текст. Это пример
                        текста новости, сделан для того, чтобы было понятно, где будет текст. Это пример текста новости,
                        сделан для того, чтобы было понятно, где будет текст. Это пример текста новости, сделан для
                        того, чтобы было понятно, где будет текст.
                    </p>
                    <a href="#" class="news__link">
                        <img src="img/arrow-gray.png" alt="Читать">
                    </a>
                </div>
            </li>
            <li class="news-frame news__box big-frame">
                <div class="news__date">
						<span class="date__day">
							16
						</span>
                    <span class="date__month">
							11.12
						</span>
                </div>
                <div class="news__item">
                    <a href="#">
                        <p class="news__subtitle red">
                            Заголовок текстовой новости может быть длинным или в две три строки, например, это пример
                            заголовка
                        </p>
                    </a>
                    <p class="news__text">
                        Это пример текста новости, сделан для того, чтобы было понятно, где будет текст. Это пример
                        текста новости, сделан для того, чтобы было понятно, где будет текст. Это пример текста новости,
                        сделан для того, чтобы было понятно, где будет текст. Это пример текста новости, сделан для
                        того, чтобы было понятно, где будет текст.
                    </p>
                    <a href="#" class="news__link">
                        <img src="img/arrow-gray.png" alt="Читать">
                    </a>
                </div>
            </li>
        </ul>

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
