<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;
use yii\helpers\Url;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body id="top">
<?php $this->beginBody() ?>

<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
    <div id="topbar" class="hoc clear">
        <!-- ################################################################################################ -->
        <div class="fl_left">
            <ul class="nospace inline pushright">
                <li><i class="fa fa-phone"></i> +7 (952) 978 0415</li>
                <li><i class="fa fa-envelope-o"></i> <a href="mailto:danil.g.ishutin@yandex.ru">danil.g.ishutin@yandex.ru</a> </li>
            </ul>
        </div>
        <div class="fl_right">
            <ul class="nospace inline pushright">
                <li>
                    <i class="fa fa-sign-in"></i>

                <?php
                if (Yii::$app->user->isGuest){echo '<a href="/site/login">Вход</a>';}
                else{
                    echo '<a href="/site/logout">Выход</a>';}
 ?>

                </li>
                <li><i class="fa fa-user"></i> <a href="#">Регистрация</a></li>
            </ul>

        </div>
        <!-- ################################################################################################ -->
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row1">
    <header id="header" class="hoc clear">
        <!-- ################################################################################################ -->
        <div id="logo" class="fl_left">
            <h1><a href="/"><?=Html::img('/images/logo.png')?></a></h1>
        </div>
        <div id="search" class="fl_right">
            <form class="clear" method="post" action="#">
                <fieldset>
                    <legend>Search:</legend>
                    <input type="search" value="" placeholder="Поиск&hellip;">
                    <button class="fa fa-search" type="submit" title="Search"><em>Search</em></button>
                </fieldset>
            </form>
        </div>
        <!-- ################################################################################################ -->
    </header>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row2">
    <nav id="mainav" class="hoc clear">
        <!-- ################################################################################################ -->
        <ul class="clear"><?php $url= Url::to();?>
            <li class="<?php if($url=='/'){echo 'active' ;}?>">
                <a href="/"><i class="glyphicon glyphicon-home" aria-hidden="true"></i></a></li>

            <li class="<?php if($url=='/searchjob' or $url=='/vacancy' or $url=='/declaration' or $url=='/transaction')
            {echo 'active' ;}?>">
                <a class="drop" href="#">Найти работу</a>
                <ul>
                    <li class="<?php if($url=='/searchjob'){echo 'active' ;}?>">
                        <a href="<?=\yii\helpers\Url::to('searchjob')?>">Найти задание</a></li>
                    <li class="<?php if($url=='/vacancy'){echo 'active' ;}?>">
                        <a href="<?=\yii\helpers\Url::to('vacancy')?>">Найти вакансию</a></li>
                    <li class="<?php if($url=='/declaration'){echo 'active' ;}?>">
                        <a href="<?=\yii\helpers\Url::to('declaration')?>">Разместиить объявление</a></li>
                    <li class="<?php if($url=='/transaction'){echo 'active' ;}?>">
                        <a href="<?=\yii\helpers\Url::to('transaction')?>">Безопасная сделка</a></li>
                </ul>
            </li>

            <li  class="<?php if($url=='/postjob' or $url=='/freelancers' or $url=='/findworker' or $url=='/declare' )
            {echo 'active' ;}?>">
                <a class="drop" href="#">Нанять фрилансера</a>
                <ul>
                    <li  class="<?php if($url=='/postjob'){echo 'active' ;}?>">
                        <a href="<?=\yii\helpers\Url::to('postjob')?>">Разместить задание</a></li>
                    <li  class="<?php if($url=='/freelancers'){echo 'active' ;}?>">
                        <a href="<?=\yii\helpers\Url::to('freelancers')?>">Каталог фрилансеров</a></li>
                    <li  class="<?php if($url=='/findworker'){echo 'active' ;}?>">
                        <a href="<?=\yii\helpers\Url::to('findworker')?>">Найти исполнителя</a></li>
                    <li  class="<?php if($url=='/declare'){echo 'active' ;}?>">
                        <a href="<?=\yii\helpers\Url::to('declare')?>">Объявления</a></li>
                </ul>
            </li>

            <li  class="<?php if($url=='/commercial'){echo 'active' ;}?>">
                <a href="<?=\yii\helpers\Url::to('commercial')?>">Реклама на сайте</a></li>
            <li  class="<?php if($url=='/assistance'){echo 'active' ;}?>">
                <a href="<?=\yii\helpers\Url::to('assistance')?>">Помощь проекту</a></li>
        </ul>
        <!-- ################################################################################################ -->
    </nav>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->

<?= Alert::widget() ?>
<?= $content ?>
<div class="wrapper row5">
    <div id="social" class="hoc clear">
        <!-- ################################################################################################ -->
<!--        <div class="one_half first">-->
<!--            <h6 class="title">Social Media</h6>-->
<!--            <ul class="faico clear">-->
<!--                <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>-->
<!--                <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>-->
<!--                <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>-->
<!--                <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>-->
<!--                <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>-->
<!--                <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>-->
<!--                <li><a class="faicon-vk" href="#"><i class="fa fa-vk"></i></a></li>-->
<!--                <li><a class="faicon-youtube" href="#"><i class="fa fa-youtube"></i></a></li>-->
<!--                <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>-->
<!--            </ul>-->
<!--        </div>-->
<!--        <div class="one_half">-->
<!--            <h6 class="title">Newsletter subscription</h6>-->
<!--            <form class="clear" method="post" action="#">-->
<!--                <fieldset>-->
<!--                    <legend>Newsletter:</legend>-->
<!--                    <input type="text" value="" placeholder="Type Email Here&hellip;">-->
<!--                    <button class="fa fa-share" type="submit" title="Submit"><em>Submit</em></button>-->
<!--                </fieldset>-->
<!--            </form>-->
<!--        </div>-->
        <!-- ################################################################################################ -->
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row6">
    <div id="copyright" class="hoc clear">
        <!-- ################################################################################################ -->
        <p class="fl_left">Copyright &copy; 2018 - All Rights Reserved - <a href="#">freelancer-23.ru</a></p>
        <p class="fl_right">Template by <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">OS Templates</a></p>
        <!-- ################################################################################################ -->
    </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
