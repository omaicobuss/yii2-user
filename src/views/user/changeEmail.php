<?php
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;
$this->title = Yii::t('user', 'Alterar E-mail');
?>
<div class="container py-5 d-flex justify-content-center align-items-center min-vh-100">
  <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
  <h2 class="mb-4 text-center"><?= Yii::t('user', 'Alterar E-mail') ?></h2>
    <?php $form = ActiveForm::begin(['id' => 'change-email-form']); ?>
  <?= $form->field($model, 'newEmail')->input('email', ['placeholder' => Yii::t('user', 'Novo e-mail')])->label(false) ?>
  <button type="submit" class="btn btn-info w-100"><?= Yii::t('user', 'Alterar') ?></button>
    <?php ActiveForm::end(); ?>
    <div class="text-center mt-3">
  <?= Html::a(Yii::t('user', 'Voltar ao perfil'), ['user/profile'], ['class' => 'small']) ?>
    </div>
  </div>
</div>
