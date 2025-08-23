<?php
namespace app\modules\user\controllers;

use yii\web\Controller;
use app\modules\user\models\User;


class UserController extends Controller
{
    public function actionProfile()
    {
        $user = \Yii::$app->user->identity;
        return $this->render('profile', ['user' => $user]);
    }

    public function actionEditProfile()
    {
        $identity = \Yii::$app->user->identity;
        $user = User::findOne($identity->id);
        if (\Yii::$app->request->isPost && $user->load(\Yii::$app->request->post())) {
            if ($user->save()) {
                return $this->redirect(['profile']);
            }
        }
        return $this->render('editProfile', ['model' => $user]);
    }

    public function actionChangeEmail()
    {
        $user = \Yii::$app->user->identity;
        // Exemplo: lógica de alteração de e-mail
        return $this->render('changeEmail', ['model' => $user]);
    }
}
