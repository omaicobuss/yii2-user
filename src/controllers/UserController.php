<?php
namespace omaicobuss\user\controllers;

use yii\web\Controller;

class UserController extends Controller
{
    public function actionProfile()
    {
        $user = \Yii::$app->user->identity;
        return $this->render('profile', ['user' => $user]);
    }

    public function actionEditProfile()
    {
        $user = \Yii::$app->user->identity;
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
