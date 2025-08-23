<?php
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
$this->title = Yii::t('user', 'Registrar');
?>
<div class="container py-5 d-flex justify-content-center align-items-center min-vh-100">
  <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
  <h2 class="mb-4 text-center"><?= Yii::t('user', 'Criar conta') ?></h2>
    <?php $form = ActiveForm::begin(['id' => 'register-form']); ?>
  <?= $form->field($model, 'username')->textInput(['placeholder' => Yii::t('user', 'Usuário')])->label(false) ?>
  <?= $form->field($model, 'email')->input('email', ['placeholder' => Yii::t('user', 'E-mail')])->label(false) ?>
  <?= $form->field($model, 'password')->passwordInput(['placeholder' => Yii::t('user', 'Senha')])->label(false) ?>
  <button type="submit" class="btn btn-success w-100"><?= Yii::t('user', 'Registrar') ?></button>
    <?php ActiveForm::end(); ?>
    <div class="text-center mt-3">
  <?= Html::a(Yii::t('user', 'Já tem conta? Entrar'), ['auth/login'], ['class' => 'small']) ?>
    </div>
  </div>
</div>
