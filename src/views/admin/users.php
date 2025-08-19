<?php
use yii\helpers\Html;
$this->title = Yii::t('user', 'Usuários');
?>
<div class="container py-5">
  <div class="row justify-content-center">
    <div class="col-lg-10">
      <div class="card shadow-sm p-4">
  <h2 class="mb-4 text-center"><?= Yii::t('user', 'Usuários') ?></h2>
        <!-- Exemplo de tabela de usuários -->
        <table class="table table-hover table-responsive">
          <thead class="table-light">
            <tr>
              <th>ID</th>
              <th><?= Yii::t('user', 'Usuário') ?></th>
              <th><?= Yii::t('user', 'E-mail') ?></th>
              <th><?= Yii::t('user', 'Funções') ?></th>
              <th><?= Yii::t('user', 'Status') ?></th>
              <th><?= Yii::t('user', 'Ações') ?></th>
            </tr>
          </thead>
          <tbody>
            <!-- Exemplo de linha -->
            <tr>
              <td>1</td>
              <td><?= Yii::t('user', 'admin') ?></td>
              <td>admin@email.com</td>
              <td><?= Yii::t('user', 'admin') ?>, <?= Yii::t('user', 'user') ?></td>
              <td><span class="badge bg-success"><?= Yii::t('user', 'Ativo') ?></span></td>
              <td>
                <?= Html::a(Yii::t('user', 'Editar'), ['admin/edit', 'id' => 1], ['class' => 'btn btn-sm btn-primary']) ?>
                <?= Html::a(Yii::t('user', 'Excluir'), ['admin/delete', 'id' => 1], [
                  'class' => 'btn btn-sm btn-danger',
                  'data-confirm' => Yii::t('user', 'Tem certeza que deseja excluir?'),
                  'data-method' => 'post',
                ]) ?>
              </td>
            </tr>
            <!-- ...outras linhas... -->
          </tbody>
        </table>
      </div>
    </div>
  </div>
</div>
