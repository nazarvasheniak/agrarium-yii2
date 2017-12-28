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

    <link rel="stylesheet" href="cabinet/css/normalize.css">
    <link rel="stylesheet" href="cabinet/css/main.css">

    <?php $this->head() ?>
</head>
<body>
    <?php $this->beginBody() ?>

    <!--[if lte IE 9]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="https://browsehappy.com/">upgrade your browser</a> to improve your experience and security.</p>
    <![endif]-->

    <!-- Cabinet header -->
    <header>
        <div class="content">
            <a href="" class="logo">
                <img src="cabinet/img/logo.png" alt="">
            </a>
            <div class="menu">
                <nav>
                    <a href="http://thedesigner.pro/agrarium/" class="item item1">Сайт аграриум</a>
                    <a href="./index.html" class="item item2 active">Панель управления</a>
                    <a href="./History.html" class="item item3">История транзакций</a>
                </nav>
                <div class="btn_group">
                    <div class="user_block"><?= Yii::$app->user->identity->username ?></div>
                    <div class="balance">10000 AGR</div>
                    <?= Html::beginForm(['/site/logout'], 'post') ?>
                    <?= Html::submitButton('Выйти', ['class' => 'exit']) ?>
                    <?= Html::endForm() ?>
                </div>
                <button class="menu_close menu_toggle"></button>
            </div>
            <button class="menu_btn menu_toggle"></button>
        </div>
    </header>

    <!-- Cabinet main -->
    <main>
        <div class="content control_panel">

            <!-- Profile left block -->
            <div class="profile_block profile_block_left">
                <div class="profile_block_inner">

                    <!-- Block header -->
                    <div class="block_header">
                        Адрес вашего Ethereum кошелька <span class="comma">,</span><br><span>для начисления токена AGR</span>
                    </div>

                    <!-- Block content -->
                    <div class="block_content">

                        <!-- Wallet -->
                        <div class="panel wallet_block">
                            <div class="wallet_form">
                                <input type="text" name="" class="field" placeholder="Адрес кошелька">
                                <button type="button" class="btn_gradient">OK</button>
                            </div>
                            <div class="warning">
                                <div class="text">
                                    Не используйте кошелек биржи и какой либо<br>
                                    другой кошелек, от которого у вас нет<br>
                                    приватных ключей доступа.
                                </div>
                                <div class="text">
                                    В противном случае вы рискуете<br>
                                    потерять начисленные вам токены.
                                </div>
                            </div>
                        </div>
                        <div class="links">
                            <a href="">Инструкция по установке и настройке Ethereum кошелька</a>
                            <a href="">Часто задаваемые вопросы (FAQ)</a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Profile right block -->
            <div class="profile_block profile_block_right">
                <div class="profile_block_inner">

                    <!-- Block header -->
                    <div class="block_header">
                        Выберите способ<br>покупки токенов
                    </div>

                    <!-- Block content -->
                    <div class="block_content">

                        <div class="card bit">
                            <div class="head">
                                <div class="value">1HLZqG4ShyjkVMov8B2NuVwmYWJ58pQzH4</div>
                                <button class="btn_round copy">Скопировать</button>
                                <button class="btn_round qr modal_toggle">Открыть QR</button>
                                <div class="tooltip show">Адрес скопирован</div>
                            </div>
                            <div class="text text1">
                                Используйте этот кошелек, чтобы купить токены за BTC.
                            </div>
                            <div class="text text2">
                                Вы получите токены на баланс после 2х подтверждений.
                            </div>
                        </div>
                        <div class="card eth">
                            <div class="head">
                                <div class="value">1HLZqG4ShyjkVMov8B2NuVwmYWJ58pQzH4</div>
                                <button class="btn_round copy">Скопировать</button>
                                <button class="btn_round qr modal_toggle">Открыть QR</button>
                                <div class="tooltip show">Адрес скопирован</div>
                            </div>
                            <div class="text text1">
                                Используйте этот кошелек, чтобы купить токены за ETH.
                            </div>
                            <div class="text text2">
                                Вы получите токены на баланс после 2х подтверждений.
                            </div>
                        </div>
                        <div class="card lit">
                            <div class="head">
                                <div class="value">1HLZqG4ShyjkVMov8B2NuVwmYWJ58pQzH4</div>
                                <button class="btn_round copy">Скопировать</button>
                                <button class="btn_round qr modal_toggle">Открыть QR</button>
                                <div class="tooltip show">Адрес скопирован</div>
                            </div>
                            <div class="text text1">
                                Используйте этот кошелек, чтобы купить токены за LTC.
                            </div>
                            <div class="text text2">
                                Вы получите токены на баланс после 2х подтверждений.
                            </div>
                        </div>
                        <div class="card dash">
                            <div class="head">
                                <div class="value">1HLZqG4ShyjkVMov8B2NuVwmYWJ58pQzH4</div>
                                <button class="btn_round copy">Скопировать</button>
                                <button class="btn_round qr modal_toggle">Открыть QR</button>
                                <div class="tooltip show">Адрес скопирован</div>
                            </div>
                            <div class="text text1">
                                Используйте этот кошелек, чтобы купить токены за DASH.
                            </div>
                            <div class="text text2">
                                Вы получите токены на баланс после 2х подтверждений.
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <!-- Cabinet footer -->
    <footer>
        <div class="content">
            <a href="" class="logo">
                <img src="cabinet/img/logo.png" alt="">
            </a>
            <div class="info">
                <div class="phone">Цифровая артель "Аграриум"<br> +7 (963) 123-61-04</div>
                <div class="adress">420074, Республика Татарстан,<br> г. Казань, ул. Петербургская, <br>д. 52, 3 этаж, офис 43</div>
            </div>
            <div class="social">
                <a href=""><img src="cabinet/img/social/twitter.svg" alt=""></a>
                <a href=""><img src="cabinet/img/social/facebook.svg" alt=""></a>
                <a href=""><img src="cabinet/img/social/vk.svg" alt=""></a>
                <a href=""><img src="cabinet/img/social/reddit.svg" alt=""></a>
                <a href=""><img src="cabinet/img/social/checked.svg" alt=""></a>
                <a href=""><img src="cabinet/img/social/bitcoin.svg" alt=""></a>
            </div>
        </div>
    </footer>

    <div class="overlay">
        <div class="qr_modal">
            <div class="close_modal modal_toggle">Закрыть</div>
            <div class="crypto_item LTH">
                Litecoin
            </div>
            <!-- 
            <div class="crypto_item BTC">Bitcoin</div>
            <div class="crypto_item DASH">Dash</div>
            <div class="crypto_item ETH">Ethereum</div> 
            -->
            <div class="qr_code">
                <img src="cabinet/img/qr_code.png" alt="">
            </div>
        </div>
    </div>

    <script src="js/jquery-3.2.1.min.js"></script>
    <script src="cabinet/js/main.js"></script>

    <?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
