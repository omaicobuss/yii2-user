<?php
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
$this->title = Yii::t('user', 'Recuperar Senha');
?>
<div class="container py-5 d-flex justify-content-center align-items-center min-vh-100">
  <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
  <h2 class="mb-4 text-center"><?= Yii::t('user', 'Recuperar Senha') ?></h2>
    <?php $form = ActiveForm::begin(['id' => 'request-password-form']); ?>
  <?= $form->field($model, 'email')->input('email', ['placeholder' => Yii::t('user', 'E-mail')])->label(false) ?>
  <button type="submit" class="btn btn-warning w-100"><?= Yii::t('user', 'Enviar link de recuperação') ?></button>
    <?php ActiveForm::end(); ?>
    <div class="text-center mt-3">
  <?= Html::a(Yii::t('user', 'Voltar ao login'), ['auth/login'], ['class' => 'small']) ?>
    </div>
  </div>
</div>
