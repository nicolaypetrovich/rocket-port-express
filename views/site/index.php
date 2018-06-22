<?php use app\models\Media;

/* @var $meta app\models\Settings */
?>
	<section class="main" id="main">
		<div class="container">
			<div class="main-hat d-flex align-items-center">
				<div class="main-hat__title">
					<p>
						ДЛЯ ВАС
					</p>
					<span>
						РАБОТАЮТ
					</span>
				</div>
				<ul class="main-hat__list d-flex">

                    <?php

//                    var_dump($meta);
                    foreach ($meta as $single){
//    array(3) { ["key"]=> string(17) "index_block1_img1" ["value"]=> string(2) "11" ["media"]=> array(4) { ["id"]=> string(2) "11" ["name"]=> string(13) "calculate.png" ["title"]=> string(9) "calculate" ["alt"]=> string(9) "calculate" } }
//                        var_dump(json_decode($single['value']));
                        echo '<br>';
                        echo '<br>';
                    }
//var_dump($meta);
//                    var_dump($mediaTest);
//                    echo '<img src="' . Yii::getAlias('@web/' . 'uploads/images/' . $mediaTest[10]['name']) . '" alt="' . 'som' . '">';
                    ?>
					<li class="main-hat__item">
						<a href="calculate" class="main-hat__link d-flex align-items-center">
                            <?php if(null != $meta['index_block1_img1']->media):?>
							<img src="<?=$meta['index_block1_img1']->media->getImageOfSize(81,106,100);?>" alt="<?=$meta['index_block1_img1']->media->alt;?>">
							<?php endif;?>
                            <span class="red">
                                <?= ($meta['index_block1_text1']->value);?>
							</span>
						</a>
					</li>
					<li class="main-hat__item">
						<a href="tracking" class="main-hat__link d-flex align-items-center">
                            <?php if(null != $meta['index_block1_img2']->media):?>
                                <img src="<?=$meta['index_block1_img2']->media->getImageOfSize(81,106,100);?>" alt="<?=$meta['index_block1_img2']->media->alt;?>">
                            <?php endif;?>
							<span class="red">
								<?= ($meta['index_block1_text2']->value);?>
							</span>
						</a>
					</li>
					<li class="main-hat__item">
						<a href="#faq__popup" class="main-hat__link d-flex align-items-center popup-with-form">
                            <?php if(null != $meta['index_block1_img3']->media):?>
                                <img src="<?=$meta['index_block1_img3']->media->getImageOfSize(81,106,100);?>" alt="<?=$meta['index_block1_img3']->media->alt;?>">
                            <?php endif;?>
							<span class="red">
								<?= ($meta['index_block1_text3']->value);?>
							</span>
						</a>
					</li>
				</ul>
			</div>
			<div class="main-banner">
                <?php if(null != $meta['index_block2_img']->media):?>
                    <img src="<?=$meta['index_block2_img']->media->getImageOfSize(358,1171);?>" alt="<?=$meta['index_block2_img']->media->alt;?>">
                <?php endif;?>
		    <?php $block2=json_decode($meta['index_block2']->value);?>
				<div class="main__title">
					<?=$block2->textleft1;?>
					<div>
                        <?=$block2->textleft2;?>
						<span class="main__rect"></span>
					</div>
				</div>
				<div class="resp">
					<h2 class="resp__title rect__title section__title">
						<?=$block2->textright1;?>
					</h2>
					<p class="resp__text">
                        <?=$block2->textright2;?>
					</p>
				</div>
				<div class="boy">
					<img src="img/boy.png" alt="Curier">
				</div>
			</div>
		</div>
	</section>
	<section class="about" id="about">
        <?php $blockAbout=json_decode($meta['index_block_about']->value);?>
		<div class="container">
			<h2 class="about__title section__title y-line red mt40">
			<?= $blockAbout->title;?>
			</h2>
			<div class="about__textbox">
				<div class="textbox__item">
					<p class="about__text">
                        <?= $blockAbout->text1;?>
					</p>
				</div>
				<div class="textbox__item">
					<p class="about__text">
                        <?= $blockAbout->text2;?>
					</p>
				</div>
				<div class="textbox__item">
					<p class="about__text">
                        <?= $blockAbout->text3;?>
					</p>
					<a href="about" class="about__link ghost-btn red d-flex align-items-center justify-content-between">
						<p>Подробнее</p>
						<span></span>
					</a>
				</div>
				<div class="about__info">
					<p class="info__text red">
                        <?= $blockAbout->text4;?>
					</p>
					<p class="info__num">
                        <?= $blockAbout->number;?>
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="main__services">
		<div class="container">
            <?php $blockWithIcons=json_decode($meta['index_block_icons']->value);?>
			<div class="services__list">
				<div class="services__item">
					<div class="services__icon">
						<img src="img/icon1.png" alt="Доставка">
					</div>
					<p class="services__text">
						<?=$blockWithIcons->text1;?>
					</p>
				</div>
				<div class="services__item">
					<div class="services__icon">
						<img src="img/icon2.png" alt="Доставка">
					</div>
					<p class="services__text">
                        <?=$blockWithIcons->text2;?>
					</p>
				</div>
				<div class="services__item">
					<div class="services__icon">
						<img src="img/icon3.png" alt="Доставка">
					</div>
					<p class="services__text">
                        <?=$blockWithIcons->text3;?>
					</p>
				</div>
				<div class="services__item">
					<div class="services__icon">
						<img src="img/icon4.png" alt="Доставка">
					</div>
					<p class="services__text">
                        <?=$blockWithIcons->text4;?>
					</p>
				</div>
				<div class="services__item">
					<div class="services__icon">
						<img src="img/icon5.png" alt="Доставка">
					</div>
					<p class="services__text">
                        <?=$blockWithIcons->text5;?>
					</p>
				</div>
				<div class="services__item">
					<div class="services__icon">
						<img src="img/icon6.png" alt="Доставка">
					</div>
					<p class="services__text">
                        <?=$blockWithIcons->text6;?>
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="news" id="news">
		<div class="container">
			<div class="news__titling">
				<h2 class="news__title section__title y-line red mt40">
					<?=$meta['index_news_title']->value;?>
				</h2>
				<a href="news" class="news__link ghost-btn red">
					Все новости
				</a>
			</div>
            <?php if(!empty($news)):?>
			<div class="news__slider">
                <?php foreach ($news as $item):?>
				<div class="news__box small-frame">
					<div class="news__date">
						<span class="date__day">
							<?php echo date('d', strtotime($item->date)); ?>
						</span>
						<span class="date__month">
							<?php echo date('m.y', strtotime($item->date)); ?>
						</span>
					</div>
					<div class="news__item">
						<a href="#" class="news__subtitle red">
                            <?php echo mb_substr($item->name,0,27).'...'; ?>
						</a>
						<p class="news__text">
                            <?php echo mb_substr($item->shortdesc,0,80).'...'; ?>
							<a href="#" class="news__link">
								<img src="img/arrow-gray.png" alt="Читать">
							</a>
						</p>
					</div>
				</div>
                <?php endforeach;?>
			</div>
            <?php endif;?>
		</div>
	</section>
