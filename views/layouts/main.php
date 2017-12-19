<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

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

    <link rel="manifest" href="site.webmanifest">
    <link rel="apple-touch-icon" href="icon.png">
    <!-- Place favicon.ico in the root directory -->

    <link rel="stylesheet" href="/css/normalize.css">
    <link rel="stylesheet" href="/css/main.css">

    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <?= $content ?>

    <!-- Modal overlay -->
    <div class="overlay"></div>

    <!-- Modal container -->
    <div class="modal_container"></div>


    <script src="/js/jquery-3.2.1.min.js"></script>
    <script src="/assets/swiper/js/swiper.min.js"></script>
    <script src="/js/main.js"></script>

    <!-- Modal JS -->
    <script src="/js/modal.js"></script>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
