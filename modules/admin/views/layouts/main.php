<?php

/* @var $this \yii\web\View */

/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\widgets\Breadcrumbs;
use app\modules\admin\assets\AdminAsset;
use yii\widgets\Menu;

AdminAsset::register($this);
?>


<?php $this->beginPage() ?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <script>
        var HomeUrl = "<?php echo Url::base(true);?>";
        var MediaCsrf = "<?php echo Yii::$app->request->getCsrfToken()?>";
    </script>
</head>

<body class="hold-transition skin-blue sidebar-mini">
<?php $this->beginBody() ?>
<div class="wrapper">
    <?php $base = Url::base(true); ?>
    <!-- Main Header -->
    <header class="main-header">

        <!-- Logo -->
        <a href="<?= $base ?>/admin/settings/index" class="logo">
            <!-- mini logo for sidebar mini 50x50 pixels -->
            <span class="logo-mini"><b>P</b>E</span>
            <!-- logo for regular state and mobile devices -->
            <span class="logo-lg"><b>Port-Express</b></span>
        </a>

        <!-- Header Navbar -->
        <nav class="navbar navbar-static-top" role="navigation">
            <div class="navbar-custom-menu">
                <form action="/admin/admin/logout">
                    <input type="hidden" name="_csrf" value="<?php echo Yii::$app->request->getCsrfToken()?>">
                    <div class="pull-right">
                        <input type="submit" class="btn btn-danger" value="Выйти">
                    </div>
                </form>

            </div>
        </nav>
    </header>
    <!-- Left side column. contains the logo and sidebar -->
    <aside class="main-sidebar">

        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">

            <!-- Sidebar Menu -->
            <?php
            echo Menu::widget([

//                'innerContainerOptions' => [
//                    'class' => 'navbar-header',
//                ],
                'encodeLabels' => false,
                'activateParents' => true,
                'submenuTemplate' => "\n<ul class='treeview-menu'>\n{items}\n</ul>\n",
                'items' => [
                    ['label' => '<i class="fa fa-flag"></i><span>Главная</span>', 'url' => ['/admin/settings/index'],'encode' => false],
                    [
                        'options' => ['class' => 'treeview'],
                        'label' => '<i class="fa fa-folder"></i><span>Страницы</span><span class="pull-right-container"><i class="fa fa-angle-left pull-right"></i></span>',
                        'url' => ['#'],
                        'template' => '<a href="javascript:void(0);" >{label}<i class="fa fa-angle-left pull-right"></i></a>',
                        'items'=>[
                            ['label' => 'О компании', 'url' => ['/admin/settings/about']],
                            ['label' => 'Услуги и тарифы', 'url' => ['/admin/settings/services']],
                            ['label' => 'Клиентам', 'url' => ['/admin/settings/clients']],
                            ['label' => 'Доставка', 'url' => ['/admin/admin/delivery'],],
                        ],
                    ],

                    ['label' => '<i class="fa fa-bank"></i> <span>Офисы</span>', 'url' => ['/admin/offices/index'],'encode' => false],
                    ['label' => '<i class="fa fa-newspaper-o"></i> <span>Новости</span>', 'url' => ['/admin/news/index'],'encode' => false],
                    ['label' => '<i class="fa fa-photo"></i> <span>Изображения</span>', 'url' => ['/admin/media/index'],'encode' => false],
                    ['label' => '<i class="fa fa-phone"></i> <span>Запросы звонков</span>', 'url' => ['/admin/ordercall/index'],'encode' => false],
                    ['label' => '<i class="fa fa-envelope-o"></i><span>Сообщения</span>', 'url' => ['/admin/customer-messages/index'],'encode' => false],
                    ['label' => '<i class="fa fa-user"></i><span>Пользователи</span>', 'url' => ['/admin/users/index'],'encode' => false],
                    ['label' => '<i class="fa fa-gears"></i> <span>Глобальные Настройки</span>', 'url' => ['/admin/settings/global'],'encode' => false],
                ],
                'options' => ['class' => 'sidebar-menu','data'=>['widget'=>'tree']],
            ]); ?>
            <!-- /.sidebar-menu -->
        </section>
        <!-- /.sidebar -->
    </aside>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->

        <section class="content-header">
            <h1>
                Администрирование
                <small><?= $this->title; ?></small>
            </h1>
            <?=
            Breadcrumbs::widget([
                'tag' => 'ol',
                'itemTemplate' => "<li>{link}</li>",
                'homeLink' => [
                    'label' => '<i class="fa fa-dashboard"></i> ' . Yii::t('yii', 'Админ'),
                    'encode' => false,
                    'url' => Yii::$app->homeUrl . 'admin/admin/home',
                ],
                'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
            ])
            ?>
            <!--            <ol class="breadcrumb">-->
            <!--                <li><a href="#"><i class="fa fa-dashboard"></i> Level</a></li>-->
            <!--                <li class="active">Here</li>-->
            <!--            </ol>-->
        </section>

        <!-- Main content -->
        <section class="content container-fluid">
            <?= $content; ?>
        </section>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->

</div>
<div id="MediaLibrary" class="modalMediaLibrary">

    <!-- Modal content -->
    <div class="media-content">
        <span class="close-media">&times;</span>
        <h4>Библиотека изображений</h4>
        <div class="inner-media"></div>
        <div id="medialoadmore" class="media-loadmore" data-page="0">Загрузить еще</div>
    </div>

</div>


<?php $this->endBody() ?>

</body>
</html>
<?php $this->endPage() ?>

