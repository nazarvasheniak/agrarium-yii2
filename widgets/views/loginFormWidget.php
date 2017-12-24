<?php
 
use yii\helpers\Html;
use yii\bootstrap\ActiveForm;
use yii\bootstrap\Modal;
 
?>

<div class="modal_container">

<?php Modal::begin([
    'id'=>'login-modal',
    'class'=> 'modal_window authorization_main',
    'options'=> [
        'data-modal' => 'authorization_main',
    ],
]);
?>

<button class="modal_close">Закрыть</button>

    <div class="modal_tabs">
        <div class="tab_item tab_item1">Авторизация</div>
        <div class="tab_item tab_item2">Регистрация</div>
    </div>
<?php $form = ActiveForm::begin([
            'id' => 'login-form',
            'enableAjaxValidation' => true,
            'action' => ['site/ajax-login'],
            'fieldConfig' => [
                'template' => "<div class=\"field_wrap\">{input}<div class=\"error\">{error}</div></div>",
            ],
        ]); ?>

        <?= $form->field($model, 'email')->textInput(['autofocus' => true, 'class' => 'def_field', 'placeholder' => 'Введите E-mail']) ?>

        <?= $form->field($model, 'password')->passwordInput(['class' => 'def_field', 'placeholder' => 'Введите пароль']) ?>
        
        <div class="under_field_block">
            <?= $form->field($model, 'rememberMe')->checkbox([
                'template' => "<div class=\"checkbox-wrap\"><div class=\"checkbox-custom\">{input} {label}</div><div class=\"checkbox-text\">Запомнить меня</div></div>",
            ]) ?>

            <a class="forgot_pass">Я забыл свой пароль</a>
        </div>

        <?= Html::submitButton('ПРОДОЛЖИТЬ', ['class' => 'blue_btn small', 'name' => 'login-button']) ?>

        <?php ActiveForm::end(); ?>
 
<?php Modal::end(); ?>

</div>