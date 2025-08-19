<?php
namespace app\modules\user\widgets;

use yii\base\Widget;

class BirthdayWidget extends Widget
{
    public $user;
    public function run()
    {
        // Renderiza mensagem de feliz aniversário
        return $this->render('birthday', ['user' => $this->user]);
    }
}
