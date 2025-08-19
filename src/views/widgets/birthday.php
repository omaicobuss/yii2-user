<?php
use yii\helpers\Html;
$this->title = Yii::t('user', 'Feliz Aniversário!');
?>
<div class="container py-5 d-flex justify-content-center align-items-center min-vh-100">
  <div class="card shadow-sm p-4 text-center" style="max-width: 400px; width: 100%;">
  <h2 class="mb-4">🎉 <?= Yii::t('user', 'Feliz Aniversário!') ?> <?= Html::encode($user->username ?? Yii::t('user', 'Usuário')) ?>!</h2>
  <p class="lead"><?= Yii::t('user', 'Desejamos um dia incrível e cheio de conquistas.') ?></p>
    <div class="mt-4">
  <?= Html::a(Yii::t('user', 'Voltar ao perfil'), ['user/profile'], ['class' => 'btn btn-outline-primary']) ?>
    </div>
  </div>
</div>
