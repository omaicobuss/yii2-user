<?php
namespace app\modules\user\controllers;

use yii\web\Controller;
use app\modules\user\models\User;
use app\modules\user\models\Role;
use app\modules\user\models\AuthLog;

class AdminController extends Controller
{
    public function actionIndex()
    {
        $users = User::find()->all();
        return $this->render('index', ['users' => $users]);
    }

    public function actionUsers()
    {
        $users = User::find()->all();
        return $this->render('users', ['users' => $users]);
    }

    public function actionRoles()
    {
        $roles = Role::find()->all();
        return $this->render('roles', ['roles' => $roles]);
    }

    public function actionAuthlog()
    {
        $logs = AuthLog::find()->all();
        return $this->render('authlog', ['logs' => $logs]);
    }
}
