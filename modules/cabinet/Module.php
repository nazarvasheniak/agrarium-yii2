<?php

namespace app\modules\cabinet;

class Module extends \yii\base\Module
{
    public function init()
    {
        parent::init();
        $this->layout = 'cabinet';
    }
}