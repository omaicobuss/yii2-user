<?php
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
$this->title = Yii::t('user', 'Login');
?>
<div class="container py-5 d-flex justify-content-center align-items-center min-vh-100">
  <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
  <h2 class="mb-4 text-center"><?= Yii::t('user', 'Acessar Conta') ?></h2>
    <?php $form = ActiveForm::begin(['id' => 'login-form']); ?>
  <?= $form->field($model, 'username')->textInput(['autofocus' => true, 'placeholder' => Yii::t('user', 'Usuário')])->label(false) ?>
  <?= $form->field($model, 'password')->passwordInput(['placeholder' => Yii::t('user', 'Senha')])->label(false) ?>
      <div class="d-flex justify-content-between align-items-center mb-3">
  <?= Html::a(Yii::t('user', 'Esqueceu a senha?'), ['auth/request-password-reset'], ['class' => 'small']) ?>
      </div>
  <button type="submit" class="btn btn-primary w-100"><?= Yii::t('user', 'Entrar') ?></button>
    <?php ActiveForm::end(); ?>
    <div class="text-center mt-3">
  <?= Html::a(Yii::t('user', 'Criar conta'), ['auth/register'], ['class' => 'small']) ?>
    </div>
  </div>
</div>
