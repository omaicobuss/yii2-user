<?php
namespace omaicobuss\user\controllers;

use yii\web\Controller;

class AdminController extends Controller
{
    public function actionIndex()
    {
        $users = \omaicobuss\user\models\User::find()->all();
        return $this->render('index', ['users' => $users]);
    }

    public function actionUsers()
    {
        $users = \omaicobuss\user\models\User::find()->all();
        return $this->render('users', ['users' => $users]);
    }

    public function actionRoles()
    {
        $roles = \omaicobuss\user\models\Role::find()->all();
        return $this->render('roles', ['roles' => $roles]);
    }

    public function actionAuthlog()
    {
        $logs = \omaicobuss\user\models\AuthLog::find()->all();
        return $this->render('authlog', ['logs' => $logs]);
    }
}
