<?php
namespace omaicobuss\user\controllers;

use yii\web\Controller;

class AuthController extends Controller
{
    public function actionLogin()
    {
        // Exemplo de lógica de login
        $model = new \omaicobuss\user\models\User();
        if (\Yii::$app->request->isPost && $model->load(\Yii::$app->request->post())) {
            // Autenticação simplificada
            $user = $model::findOne(['username' => $model->username]);
            if ($user && \Yii::$app->security->validatePassword($model->password, $user->password_hash)) {
                \Yii::$app->user->login($user);
                return $this->goHome();
            }
        }
        return $this->render('login', ['model' => $model]);
    }

    public function actionRegister()
    {
        $model = new \omaicobuss\user\models\User();
        if (\Yii::$app->request->isPost && $model->load(\Yii::$app->request->post())) {
            $model->password_hash = \Yii::$app->security->generatePasswordHash($model->password);
            if ($model->save()) {
                return $this->redirect(['login']);
            }
        }
        return $this->render('register', ['model' => $model]);
    }

    public function actionRequestPasswordReset()
    {
        // Exemplo: renderiza view de solicitação de reset
        $model = new \omaicobuss\user\models\User();
        return $this->render('requestPasswordReset', ['model' => $model]);
    }

    public function actionResetPassword($token)
    {
        // Exemplo: renderiza view de redefinição
        $model = new \omaicobuss\user\models\User();
        return $this->render('resetPassword', ['model' => $model]);
    }
}
