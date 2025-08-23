<?php
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
$this->title = Yii::t('user', 'Redefinir Senha');
?>
<div class="container py-5 d-flex justify-content-center align-items-center min-vh-100">
  <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
  <h2 class="mb-4 text-center"><?= Yii::t('user', 'Redefinir Senha') ?></h2>
    <?php $form = ActiveForm::begin(['id' => 'reset-password-form']); ?>
  <?= $form->field($model, 'password')->passwordInput(['placeholder' => Yii::t('user', 'Nova senha')])->label(false) ?>
  <button type="submit" class="btn btn-success w-100"><?= Yii::t('user', 'Salvar nova senha') ?></button>
    <?php ActiveForm::end(); ?>
    <div class="text-center mt-3">
  <?= Html::a(Yii::t('user', 'Voltar ao login'), ['auth/login'], ['class' => 'small']) ?>
    </div>
  </div>
</div>
