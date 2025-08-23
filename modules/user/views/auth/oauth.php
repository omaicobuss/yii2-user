<?php
use yii\helpers\Html;
$this->title = Yii::t('user', 'Entrar com OAuth');
?>
<div class="container py-5 d-flex justify-content-center align-items-center min-vh-100">
  <div class="card shadow-sm p-4" style="max-width: 400px; width: 100%;">
  <h2 class="mb-4 text-center"><?= Yii::t('user', 'Entrar com OAuth') ?></h2>
    <div class="d-grid gap-2">
  <?= Html::a(Yii::t('user', 'Entrar com Google'), ['auth/oauth', 'provider' => 'google'], ['class' => 'btn btn-outline-danger btn-lg']) ?>
  <?= Html::a(Yii::t('user', 'Entrar com Facebook'), ['auth/oauth', 'provider' => 'facebook'], ['class' => 'btn btn-outline-primary btn-lg']) ?>
      <!-- Adicione outros provedores conforme necessário -->
    </div>
    <div class="text-center mt-3">
  <?= Html::a(Yii::t('user', 'Voltar ao login'), ['auth/login'], ['class' => 'small']) ?>
    </div>
  </div>
</div>
