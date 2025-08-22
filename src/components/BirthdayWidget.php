<?php
namespace omaicobuss\user\components;

use yii\base\Widget;

class BirthdayWidget extends Widget
{
    public $user;
    public function run()
    {
        return $this->render('birthday', ['user' => $this->user]);
    }
}