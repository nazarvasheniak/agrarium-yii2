<?php

/* @var $this yii\web\View */
?>

<div class="modal_window registration_name" data-type="modal" data-modal="registration_main">
    <button class="modal_close">Закрыть</button>

    <div class="modal_tabs">
        <div class="tab_item tab_item1">Регистрация</div>
        <div class="tab_item tab_item2">Авторизация</div>
    </div>

    <div class="modal_content">
        <div class="field_wrap">
            <input type="text" class="def_field" placeholder="Введите имя">
        </div>

        <div class="field_wrap">
            <input type="text" class="def_field" placeholder="Введите E-mail">
        </div>

        <div class="under_field_block">
            <div class="checkbox-wrap">
                <div class="checkbox-custom">
                    <input type="checkbox" id="conditions_agree">
                    <label for="conditions_agree"></label>
                </div>

                <div class="checkbox-text">
                    Я согласен <a href="">с Условиями предоставления услуг</a>
                </div>
            </div>
        </div>

        <button class="blue_btn small">ПРОДОЛЖИТЬ</button>
    </div>
</div>

<div class="modal_window authorization_main" data-type="modal" data-modal="authorization_main">
<button class="modal_close">Закрыть</button>

    <div class="modal_tabs">
        <div class="tab_item tab_item1">Авторизация</div>
        <div class="tab_item tab_item2">Регистрация</div>
    </div>

    <div class="modal_content">
        <div class="field_wrap">
            <input type="text" class="def_field" placeholder="Введите E-mail">
        </div>

        <div class="field_wrap">
            <input type="text" class="def_field" placeholder="Введите пароль">
        </div>

        <div class="under_field_block">
            <div class="checkbox-wrap">
                <div class="checkbox-custom">
                    <input type="checkbox" id="remember_me">
                    <label for="remember_me"></label>
                </div>

                <div class="checkbox-text">Запомнить меня</div>
            </div>

            <a class="forgot_pass">Я забыл свой пароль</a>
        </div>
        
        <button class="blue_btn small">ПРОДОЛЖИТЬ</button>
    </div>
</div>