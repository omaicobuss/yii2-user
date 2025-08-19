<?php
use yii\helpers\Html;
use yii\bootstrap5\ActiveForm;

$this->title = Yii::t('user', 'Editar Perfil');
?>
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-6">
      <div class="card shadow-sm p-4">
  <h2 class="mb-4 text-center"><?= Yii::t('user', 'Editar Perfil') ?></h2>
        <?php $form = ActiveForm::begin(['id' => 'edit-profile-form']); ?>
          <?= $form->field($model, 'username')->textInput(['placeholder' => Yii::t('user', 'Usuário')])->label(false) ?>
          <?= $form->field($model, 'email')->input('email', ['placeholder' => Yii::t('user', 'E-mail')])->label(false) ?>
          <button type="submit" class="btn btn-primary w-100"><?= Yii::t('user', 'Salvar alterações') ?></button>
        <?php ActiveForm::end(); ?>
      </div>
    </div>
  </div>
</div>
